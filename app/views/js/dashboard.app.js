angular.module('Dashboard', [

  /*==========  Third Party  ==========*/
  'ui.router',
  'ngMaterial',
  'progressApp',

  /*==========  Native  ==========*/
  'Dashboard.Controllers',
  'Dashboard.Routes'
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

.run(['$rootScope', '$state',
  function ($rootScope, $state) {
    $rootScope.state = $state;
  }
])