/**
*
* MaLinked Routes
*
**/
angular.module('MaLinked.Routes', [])
.config(['$stateProvider', function($stateProvider) {

	/*==========  State generator  ==========*/
	var state = function state(name, url){
		this.name = name;
		this.url = '/' + name;
		if(!angular.isUndefined(url)){
			this.url = this.url + url;
		}
		this.templateUrl = '/api/frontend/file/view/'+name;
		this.controller = name;
		this.controllerAs = name;
	}

	$stateProvider
	.state(new state('home'))
	.state(new state('profiel', '/{id}'))
	.state(new state('zoeken'))
	.state(new state('beheer'))
	

}])

