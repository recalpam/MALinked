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
		this.templateUrl = '/api/frontend/file/view/'+name;
		this.controller = name;
		this.controllerAs = name;

		if(!angular.isUndefined(url)){
			this.url = url;
		}else{
			this.url = '/' + name;
		}
	}

	$stateProvider
	.state(new state('home'))
	.state(new state('profiel', 'profiel/{groep}/{student}'))
	.state(new state('zoeken'))
	.state(new state('beheer'))
	

}])

