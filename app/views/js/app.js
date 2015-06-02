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

    // Modal state
    var modalVisible = false;

    // Toggle #zoekModal
    $rootScope.zoekModal = function () {
      if (modalVisible) {
        $('#searchModal').foundation('reveal', 'close');
      } else {
        $('#searchModal').foundation('reveal', 'open');
      }

      modalVisible = !modalVisible;
    }

    // Bind global hotkey
    jQuery(document).on('keypress', function (e) {
      if (!modalVisible) {
        $rootScope.zoekModal();
      }
    });

    // Apply modal event listeners
    $(document).foundation('reveal', 'reflow');

    // Event on modal open
    $(document).on('opened.fndtn.reveal', '[data-reveal]', function () {
      $("#live-search-input").focus();
    });

    // Event modal closed
    $(document).on('closed.fndtn.reveal', '[data-reveal]', function () {
      modalVisible = false;
    });


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
      $('footer').show();
    }, 2000);
    $rootScope
      .$watch('$stateChangeStart', function () {
        $rootScope.show = false;
        ngProgress.start();
        $('footer').hide();
      });
    $rootScope
      .$on('$stateChangeSuccess',
        function (event, toState, toParams, fromState, fromParams) {
          ngProgress.complete();
          $(".site").removeClass("hide");
          $(this).scrollTop(0);
          $('footer').show();
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