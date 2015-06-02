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
            if(User.info.why_ma){
                 User.info.why_ma = User.info.why_ma.replace(/<br\s*[\/]?>/gi, "\r\n");
            }

            // Show scope
            $scope.show = true;
        });

        $scope.postData = function(){
            API.user.set('updateWhyMa', $scope.userData, function(){
                $('#savedPopup').slideDown('fast').delay(2100).slideUp('fast');
            });
        }
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
    $scope.postData = function(){
        var hobbies = $(".hobby-field input").val();
        if( hobbies.length > 0 ){
            var explodeHobbies = hobbies.split(',');
            var hobbiesObj = {};
            for (var i=0; i<explodeHobbies.length; i++) {  
                   hobbiesObj[i] = explodeHobbies[i];
            }

            $scope.userData.info.hobbies = hobbiesObj;
        } else {
            $scope.userData.info.hobbies = {};
        }
        

        if( typeof angular.element('#headerImage').val() != 'undefined'){
            API.user.uploadFileToUrl('header', angular.element('#headerImage'));
        }
        if( typeof angular.element('#profilepicture').val() != 'undefined'){
            API.user.uploadFileToUrl('profile', angular.element('#profilepicture'));
        }
        
        API.user.set('updateHobbiesEnGegevens', $scope.userData, function(){
            $('#savedPopup').slideDown('fast').delay(2100).slideUp('fast');
        });
    }
  }
])

.controller('projecten', ['$scope', 'API', '$window', '$state', 
  function ($scope, API, $window, $state) {
        // Hide everything and show loadbar while content is being loaded
        $scope.show = false;

        var User;

        // Start loading content
        API.user.get(function( data ){
            // Assign content to User variable
            User = $scope.userData = data;

            // Replace <br /> with \n
            if(User.info.why_ma){
                 User.info.why_ma = User.info.why_ma.replace(/<br\s*[\/]?>/gi, "\r\n");
            }

            $scope.fixedProjecten = {};

             if( User.projects.length > 0 ){
                for (var i=0; i<User.projects.length; i++) {  
                   $scope.fixedProjecten[i] = User.projects[i];
                   $scope.fixedProjecten[i].description = $scope.fixedProjecten[i].description.replace(/<br\s*[\/]?>/gi, "\r\n");
                }
            }

            // User not logged in, redirect
            if( User.error ){
                $window.location.href = '/dashboard/login';
            }

            // Show scope
            $scope.show = true;


            // File removal
            $scope.deleteImage = function($event){
                var target = angular.element($event.currentTarget);
                console.log(target);
                API.user.deleteUploadedFile(target.data('id'), function(){
                   target.parent('li').remove();
                });
            }

            // Save data
            $scope.saveData = function(){
                API.user.set('updateProjects', $scope.fixedProjecten, function(){
                    $('#savedPopup').slideDown('fast').delay(2100).slideUp('fast');
                });
            }

            // New project
            $scope.copyShit = function(){
                if(  $('.counter').length >= 5  ){
                    $('#errorPopup').slideDown('fast').delay(2100).slideUp('fast');
                    alert('Je mag maximaal 5 projecten toevoegen');
                } else {
                    API.user.newProject(function(){
                        $state.reload();
                    });
                }  
            }

            // Delete project
            $scope.deleteProject = function($event){
                var target = angular.element($event.currentTarget);
                var r = confirm("Weet je zeker dat je dit project wilt vewrijderen");
                if (r == true) {
                    API.user.deleteProject(target.data('id'), function(){
                        $state.reload();
                    });
                }
                 
            }
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

        $scope.postData = function(){
            var hobbies = $(".docent-school-field input").val();
            if( hobbies.length > 0 ){
                var explodeHobbies = hobbies.split(',');
                var fav_teacher = {};

                for (var i=0; i<explodeHobbies.length; i++) {  
                       fav_teacher[i] = explodeHobbies[i];
                }

                $scope.userData.info.fav_teacher = fav_teacher;
                } else {
                $scope.userData.info.hobbies = {};
            }

            API.user.set('updateAboutSchool', $scope.userData, function(){
               $('#savedPopup').slideDown('fast').delay(2100).slideUp('fast');
            });
        }
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

            if(User.info.future_vision){
             User.info.future_vision = User.info.future_vision.replace(/<br\s*[\/]?>/gi, "\r\n");
            }

            // User not logged in, redirect
            if( User.error ){
                $window.location.href = '/dashboard/login';
            }

            // Show scope
            $scope.show = true;
        });

        $scope.postData = function(){
            API.user.set('updateFutureVision', $scope.userData, function(){
                $('#savedPopup').slideDown('fast').delay(2100).slideUp('fast');
            });
        }

    $scope.foo = "bar";
  }
])