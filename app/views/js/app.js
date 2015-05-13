/**
*
* MaLinked Client
*
**/
angular.module('MaLinked', [

	/*==========  Third Party  ==========*/
	'ui.router',

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

/*============================
=            Boot            =
============================*/
.run(function($rootScope, API){
	API.sync().then(function(value){
		$rootScope.db = value;
	});
})