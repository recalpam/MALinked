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

        var put = function(action, object, fn) {
            ngProgress.start();
            return $http.put('/api/db/' + action, object).
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

        var postFile = function(action, type, file, fn){
            ngProgress.start();
            var fd = new FormData();
            fd.append('file', file[0].files[0]);
            fd.append('type', type);

            $http.post(action, fd, {
                transformRequest: angular.identity,
                headers: {'Content-Type': undefined}
            })
            .success(function(data, status, headers, config){
                ngProgress.complete();
                if( fn ){
                    fn(data, status, headers, config);
                }
            });
        }

        var deleteFile = function(action, file_id, fn){
            ngProgress.start();

            $http.put(action, {'file_id': file_id})
            .success(function(data, status, headers, config){
                ngProgress.complete();
                if( fn ){
                    fn(data, status, headers, config);
                }
            });
        }

        var newProject = function( action, fn ){
            ngProgress.start();

            $http.put(action, {})
            .success(function(data, status, headers, config){
                ngProgress.complete();
                if( fn ){
                    fn(data, status, headers, config);
                }
            });
        }

        var deleteProject = function( action, id, fn ){
            ngProgress.start();

            $http.put(action, {'id': id})
            .success(function(data, status, headers, config){
                ngProgress.complete();
                if( fn ){
                    fn(data, status, headers, config);
                }
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

             // DEATH TO ALL THE BREAKSPACES!
            object.br = /<br\s*[\/]?>/gi;

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

            user: {
                // Authenticate user
                authenticate: function(object, fn) {
                    post('auth', object, fn);
                },

                // Get the user, returns false if not logged in
                get: function( fn ){
                    get('auth/1/check').success(function(data, status, headers, config) {
                        fn( data );
                    });
                },

                // Set data for user
                set: function( action, object, fn ){
                    delete object.background_file_id;
                    delete object.file;
                    put('put/'+action, object, fn);
                },

                // Destroy user session and redirect to home
                logout: function(){

                },

                uploadFileToUrl: function(part, file, fn){
                    postFile('api/db/put/image', part, file, fn);
                },

                deleteUploadedFile: function(file_id, fn){
                    deleteFile('api/db/delete/file', file_id, fn);
                },

                newProject: function(fn){
                    newProject('api/db/put/newProject', fn);
                },

                deleteProject: function(id, fn){
                    deleteProject('api/db/put/deleteProject', id, fn);
                }
            }

        }
    }
]);
