angular.module('booksService', [])
  .factory('booksFactory', function($http) {
    // create a new object
    var factory = {};
    // get a single book
    factory.get = function(id) {
      return $http.get('/api/books/' + id);
    };
    // get all books
    factory.all = function() {
      return $http.get('/api/books/');
    };

    factory.getPage = function (pageUrl) {
      return $http.get(pageUrl);
    }
    // create a book
    factory.create = function(bookData) {
      return $http.post('/api/books/', bookData);
    };
    // update a book
    factory.update = function(id, bookData) {
      return $http.put('/api/books/' + id, bookData);
    };
    // delete a book
    factory.delete = function(id) {
      return $http.delete('/api/books/' + id);
    };
    // return our entire factory object
    return factory;
  });
