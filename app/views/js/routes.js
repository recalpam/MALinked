/**
 *
 * MaLinked Routes
 *
 **/
angular.module('MaLinked.Routes', [])
  .config(['$stateProvider',
    function ($stateProvider) {

      /*==========  State generator  ==========*/
      var state = function state(name, action) {

        // if an action is not defined, default it to the state name
        if (angular.isUndefined(action)) {
          action = '/' + name;
        }

        // return the state
        return {

          // always include the db because its cached anyway
          resolve: {
            db: function (API, $http, $rootScope) {
              return API.sync();
            }
          },
          name: name,
          url: action,
          templateUrl: '/api/frontend/file/view/' + name,
          controller: name,
          controllerAs: name,

        }


      }

      $stateProvider
        .state(new state('home'))
        .state(new state('klas', '/klas/{slug}'))
        .state(new state('profiel', '/profiel/{groep}/{student}'))
        .state(new state('opleiding', '/opleiding/{slug}'))
        .state(new state('opleidingen'))
        .state(new state('login'))

    }
  ])