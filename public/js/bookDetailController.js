angular.module('bookDetailsController', [])
  .controller('bookDetails', ['$scope', 'booksFactory',
      function($scope, booksFactory) {
        var vm = this;
        $scope.loading = true;

        $scope.get = function(bookId) {
          booksFactory.get(bookId)
            .success(function(reply) {
              processBookReply(reply);
            });
      }

      $scope.processBookReply = function(reply) {
      vm.book = reply;
      $scope.loading = false;
    }

  }]);
