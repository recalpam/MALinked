/**
*
* MaLinked Client
*
**/
angular.module('MaLinked', [

	/*==========  Third Party  ==========*/
	'ui.router',
	'ngMaterial',

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
.run(['$rootScope','$timeout', function($rootScope){
	$rootScope
		.$on('$viewContentLoading', 
			function(event, toState, toParams, fromState, fromParams){ 
				$("#ui-view").html("");
				$(".page-loading").removeClass("hidden");
			});

	$rootScope
		.$on('$viewContentLoaded',
			function(event, toState, toParams, fromState, fromParams){ 
				$(".page-loading").addClass("hidden");	
			});
}]);