/**
*
* MaLinked Client
*
**/
angular.module('MaLinked', [

	/*==========  Third Party  ==========*/
	'ngRoute',
	'ui.router',
	'ngMaterial',
	'progressApp',

	/*==========  Native  ==========*/
	'MaLinked.Controllers',
	'MaLinked.Services',
	'MaLinked.Factories',
	'MaLinked.Routes',

	
])

/*=========================================
=            $urlRouteProvider            =
=========================================*/
.config(['$urlRouterProvider',function($urlRouterProvider) {
	$urlRouterProvider.otherwise("/home");
}])


/*=========================================
=            $locationProvider            =
=========================================*/
.config(['$locationProvider',function($locationProvider) {
	$locationProvider.html5Mode(true);
}])

/*==============================
=            Events            =
==============================*/
.run(['$rootScope', function($rootScope){


}]);

