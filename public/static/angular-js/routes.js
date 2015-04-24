app.config([
  '$stateProvider', '$urlRouterProvider', '$locationProvider',
  function($stateProvider, $urlRouterProvider, $locationProvider) {

    // For any unmatched url, redirect to /
    $urlRouterProvider.otherwise("/homepage");

    // Now set up the states
    $stateProvider
      .state('homepage', {
        url: "/homepage",
        templateUrl: "tpl/homepage.html"
      })
      .state('trainings', {
        url: "/training",
        templateUrl: "tpl/training.html"
      })
      .state('classes', {
        url: "/classes",
        templateUrl: "tpl/classes.html"
      })
      .state('profile', {
        url: "/profile",
        templateUrl: "tpl/profile.html"
      });

    // use the HTML5 History API
    $locationProvider.html5Mode(true);
  }
]);