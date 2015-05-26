/**
 * MaLinked.Factories Module
 */
angular.module('MaLinked.Factories', ['progressApp'])

.factory('API', ['$http', '$filter', 'ngProgress',
    function($http, $filter, ngProgress) {

        // $http promise
        var sync;

        // $http get
        var get = function(action) {
            return $http.get('/api/db/' + action);
        }

        // get token
        var loginData = false;

         // $http post
        var post = function(action, object, fn) {
            ngProgress.start();
            return $http.post('/api/db/' + action, object).
            success(function(data, status, headers, config) {
                loginData = data;
                ngProgress.complete();
                fn(data, status, headers, config);
            }).
            error(function(data, status, headers, config) {
                console.error(action+ ' failed.');
                ngProgress.complete();
                return data;
            });
        }

        // appends query-like methods to a local object!
        querify = function(object) {
            if (typeof(object) == "object") {
                for (var candidate in object) {

                	/* Filter based upon params */
                    object[candidate].where = function(params) {
                        return $filter('filter')(this, params, true);
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

            postLogin: function(object, fn) {
                post('auth', object, fn);
            },

            getLoginData: function(){
                return loginData;
            }

        }
    }
]);