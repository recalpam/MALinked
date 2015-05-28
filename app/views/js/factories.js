/**
 * MaLinked.Factories Module
 */
angular.module('MaLinked.Factories', ['progressApp'])

.factory('API', ['$http', '$filter', 'ngProgress',
    function($http, $filter, ngProgress) {

        // $http promise
        var sync, loginData;

        // $http get
        var get = function(action) {
            return $http.get('/api/db/' + action);
        }

         // $http post
        var post = function(action, object, fn) {
            ngProgress.start();
            return $http.post('/api/db/' + action, object).
            success(function(data, status, headers, config) {
                get('auth/1/check').success(function(data){
                    if( !data.error == false ){
                        loginData = data;
                    }
                });

                ngProgress.complete();
                fn(data, status, headers, config);
            }).
            error(function(data, status, headers, config) {
                console.error(action+ ' failed.');
                ngProgress.complete();
                return data;
            });
        }

        var postFile = function(action, file, fn){
            var fd = new FormData();
            fd.append('file', file);
            $http.post(uploadUrl, fd, {
                transformRequest: angular.identity,
                headers: {'Content-Type': undefined}
            })
            .success(function(data, status, headers, config){
                fn(data, status, headers, config);
            });
        }

        // appends query-like methods to a local object!
        querify = function(object) {
            if (typeof(object) == "object") {
                for (var candidate in object) {

                    /* Filter based upon params */
                    object[candidate].where = function(params) {
                        return $filter('filter')(this, params);
                    };

                    /* Filter but only return a single value */
                    object[candidate].single = function(params) {
                        var result = this.where(params);
                        if (result.length > 0) return result[0];
                    };
                }
            }

            // return the modified (contains appended functionality)
            return object;
        };

        return {
        	// make the query methods public
        	querify: function(data){return querify(data); },

        	// get all data from the database
            sync: function() {
                if (!sync) {
                    sync = get('sync').then(function(response) {

                        return this.querify(response.data);
                    });
                }
                return sync;
            },

            uploadFileToUrl: function(url, file){
                postFile(url, file, fn);
            },

            user: {
                // Authenticate user
                authenticate: function(object, fn) {
                    post('auth', object, fn);
                },

                // Get the user, returns false if not logged in
                get: function( fn ){
                    get('auth/1/check').success(function(data, status, headers, config) {
                        fn( this.querify(data) );
                    });
                },

                // Set data for user
                set: function( data ){

                },

                // Destroy user session and redirect to home
                logout: function(){

                }
            }

        }
    }
]);