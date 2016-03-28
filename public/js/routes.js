angular.module('router', ['ngRoute'])
  .config(function($routeProvider, $locationProvider) {
    $routeProvider
    // route for the home page
      .when('/', {
        templateUrl: './partials/booksList.html',
        controller: 'booksCtrl',
        controllerAs: 'main'
      })
      .when('/books/:bookId', {
        templateUrl: './partials/bookDetails.html',
        controller: 'bookDetailCtrl',
        controllerAs: 'book'
      })
      .otherwise({
        redirectTo: '/'
      });

    // set our app up to have pretty URLS
    $locationProvider.html5Mode(true);
  });
