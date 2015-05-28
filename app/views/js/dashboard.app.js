angular.module('Dashboard', [

  /*==========  Third Party  ==========*/
  'ui.router',
  'ngMaterial',
  'progressApp',

  /*==========  Native  ==========*/
  'Dashboard.Controllers',
  'Dashboard.Routes',
  'MaLinked.Factories'
])



/*=========================================
=            $locationProvider            =
=========================================*/
.config(['$locationProvider',
  function ($locationProvider) {
    $locationProvider.html5Mode(true);
  }
])

/*=========================================
=            $urlRouteProvider            =
=========================================*/
.config(['$urlRouterProvider',
  function ($urlRouterProvider) {
    
    $urlRouterProvider.otherwise("/dashboard/login");
  }
])

.run(['$rootScope', '$timeout', 'ngProgress', '$rootScope', '$state', '$stateParams',
  function($rootScope, $timeout, ngProgress, $rootScope, $state, $stateParams) {
    //$rootScope.state = $state;

    $rootScope.show = false;

    ngProgress.start();
    $timeout(function() {
        ngProgress.complete();
        $rootScope.show = true;
    }, 2000);

    $rootScope
          .$watch('$routeChangeStart', function() {
              ngProgress.start();
          });

    $rootScope
          .$on('$stateChangeSuccess',
              function(event, toState, toParams, fromState, fromParams) {
                  ngProgress.complete();
              });
  }
])