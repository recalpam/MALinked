/**
 *
 * Dashboard Routes
 *
 **/
angular.module('Dashboard.Routes', [])
  .config(['$stateProvider',
    function ($stateProvider) {

      /*==========  State generator  ==========*/
      var state = function state(name, action) {

        // if an action is not defined, default it to the state name
        if (angular.isUndefined(action)) {
          action = name;
        }

        // return the state
        return {

          // always include the db because its cached anyway

          name: name,
          url: '/dashboard/' + action,
          templateUrl: '/api/frontend/file/view/' + name,
          controller: name,
          controllerAs: name,

        }


      }

      $stateProvider
        .state(new state('login'))
        .state(new state('waarom-het-ma'))
        .state(new state('hobbys-en-gegevens'))
        .state(new state('projecten'))
        .state(new state('over-de-school'))
        .state(new state('toekomstbeeld'))

    }
  ])