/**
 * Dashboard.Controllers Module
 *
 * COntrollers
 */
angular.module('Dashboard.Controllers', [])

/*=============================
=            Login            =
=============================*/
.controller('login', ['$scope', 'API', '$window',
    function($scope, API, $window) {

        var User;
        API.user.get(function( data ){
            User = data;
            if( !User.error ){
                $window.location.href = '/dashboard/waarom-het-ma';
            }
        });

        

        $scope.input;

        $scope.checkLogin = function(){
            if( !$scope.input.user || !$scope.input.password ){
                return;
            }
            API.user.authenticate( {'student': $scope.input.user, 'password': $scope.input.password}, function(data, status, headers, config){
                if( !data.error ){
                    $window.location.href = '/dashboard/waarom-het-ma';
                }
                
                console.log(data);
            });
            
        };
    }
])

/*=============================
=         Waarom het ma      =
=============================*/
.controller('waarom-het-ma', ['$scope', 'API', '$window',
  function ($scope, API, $window) {
        // Hide everything and show loadbar while content is being loaded
        $scope.show = false;

        var User;

        // Start loading content
        API.user.get(function( data ){
            // Assign content to User variable
            User = $scope.userData = data;


            // User not logged in, redirect
            if( User.error ){
                $window.location.href = '/dashboard/login';
            }

            // Replace <br /> with \n
            User.info.why_ma = User.info.why_ma.replace(/<br\s*[\/]?>/gi, "\r\n");

            // Show scope
            $scope.show = true;
        });

    

    console.log();
  }
])

.controller('hobbys-en-gegevens', ['$scope', 'API', '$window',
  function ($scope, API, $window) {
        // Hide everything and show loadbar while content is being loaded
        $scope.show = false;

        var User;

        // Start loading content
        API.user.get(function( data ){
            // Assign content to User variable
            User = $scope.userData = data;

            // User not logged in, redirect
            if( User.error ){
                $window.location.href = '/dashboard/login';
            }

            function getHobbies() {
                a = User.info.hobbies;
                var out = '';
                for (var i=0; i<a.length; i++) {  
                   out = out + a[i] + ',';
                } 
                return out;
            }


            $('.hobby-field input').val(getHobbies());

            $('.hobby-field input').tagsInput({
              'interactive': true,
              'height': '5.625rem',
              'width': '100%',
              'defaultText': 'voeg toe',
              'typeahead': { 'source': User.info.hobbies }
            });

            // Show scope
            $scope.show = true;
        });


  }
])

.controller('projecten', ['$scope', 'API', '$window',
  function ($scope, API, $window) {
        // Hide everything and show loadbar while content is being loaded
        $scope.show = false;

        var User;

        // Start loading content
        API.user.get(function( data ){
            // Assign content to User variable
            User = $scope.userData = data;


            // User not logged in, redirect
            if( User.error ){
                $window.location.href = '/dashboard/login';
            }

            // Show scope
            $scope.show = true;
        });

    $scope.foo = "bar";
  }
])

.controller('over-de-school', ['$scope', 'API', '$window',
  function ($scope, API, $window) {
        // Hide everything and show loadbar while content is being loaded
        $scope.show = false;

        var User;

        // Start loading content
        API.user.get(function( data ){
            // Assign content to User variable
            User = $scope.userData = data;


            // User not logged in, redirect
            if( User.error ){
                $window.location.href = '/dashboard/login';
            }

            function getDocenten() {
                a = User.info.fav_teacher;
                var out = '';
                for (var i=0; i<a.length; i++) {  
                   out = out + a[i] + ',';
                } 
                return out;
            }


            $('.docent-school-field input').val(getDocenten());

            $('.docent-school-field input').tagsInput({
                'interactive': true,
                'height': '5.625rem',
                'width': '100%',
                'defaultText': 'voeg toe'
            });

            // Show scope
            $scope.show = true;
        });
  }
])

.controller('toekomstbeeld', ['$scope', 'API', '$window',
  function ($scope, API, $window) {
        // Hide everything and show loadbar while content is being loaded
        $scope.show = false;

        var User;

        // Start loading content
        API.user.get(function( data ){
            // Assign content to User variable
            User = $scope.userData = data;


            // User not logged in, redirect
            if( User.error ){
                $window.location.href = '/dashboard/login';
            }

            // Show scope
            $scope.show = true;
        });

    $scope.foo = "bar";
  }
])