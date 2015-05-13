/**
*
* MaLinked Routes
*
**/
angular.module('MaLinked.Routes', [])
.config(['$stateProvider', function($stateProvider) {

	/*==========  State generator  ==========*/
	var state = function state(name){
		this.name = name;
		this.url = '/' + name;
		this.templateUrl = '/api/frontend/file/view/'+name;
		this.controller = name;
	}

	$stateProvider
	.state(new state('home'))
	.state(new state('profiel'))
	

}])

