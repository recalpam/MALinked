/**
 *
 * MaLinked Client
 *
 **/
angular.module('MaLinked', [

  /*==========  Third Party  ==========*/
  'ui.router',
  'ngMaterial',
  'progressApp',
  'uiGmapgoogle-maps',
  'cfp.hotkeys',

  /*==========  Native  ==========*/
  'MaLinked.Controllers',
  'MaLinked.Services',
  'MaLinked.Factories',
  'MaLinked.Routes',


])

/*=========================================
=            $urlRouteProvider            =
=========================================*/
.config(['$urlRouterProvider',
  function ($urlRouterProvider) {
    $urlRouterProvider.otherwise("home");
  }
])


/*=========================================
=            $locationProvider            =
=========================================*/
.config(['$locationProvider',
  function ($locationProvider) {
    $locationProvider.html5Mode(true);
  }
])

/*==============================
=            Events            =
==============================*/
.run(['$rootScope', '$timeout', 'ngProgress', '$rootScope', '$state', '$stateParams', 'API',
  function ($rootScope, $timeout, ngProgress, $rootScope, $state, $stateParams, API) {

    //$rootScope.search = {};
    $rootScope.headerClass = "foobar";

    API.sync().then(function (response) {
      $rootScope.db = response;
    });
    $rootScope.state = $state;

    /*==========  ngProgress  ==========*/
    $rootScope.show = false;
    ngProgress.start();
    $timeout(function () {
      ngProgress.complete();
      $rootScope.show = true;
    }, 2000);
    $rootScope
      .$watch('$stateChangeStart', function () {
        $rootScope.show = false;
        ngProgress.start();
      });
    $rootScope
      .$on('$stateChangeSuccess',
        function (event, toState, toParams, fromState, fromParams) {
          ngProgress.complete();
          $(".site").removeClass("hide");
          $(this).scrollTop(0);
        });
  }
])

/*===================================
=            Google Maps            =
===================================*/
.config(function (uiGmapGoogleMapApiProvider) {
  uiGmapGoogleMapApiProvider.configure({
    //    key: 'your api key',
    v: '3.17',
    libraries: 'weather,geometry,visualization'
  });
})