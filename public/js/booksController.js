angular.module('booksController', [])
  .controller('booksCtrl', ['$scope', 'booksFactory',
    function($scope, booksFactory) {
      var vm = this;
      $scope.loading = true;
      vm.currentPage = '';
      vm.lastPage = '';

      var pageBaseURL = '/api/books?page=';

      // make an API call
      booksFactory.all()
        .success(function(reply) {
          console.log(reply);
          processReply(reply);
        });

      $scope.delete = function(id) {
        booksFactory.delete(id)
          .success(function(reply) {
            $scope.getPage(pageBaseURL + vm.currentPage);
          });
      }

      $scope.getPage = function(pageUrl) {
        if (pageUrl) {
          booksFactory.getPage(pageUrl)
            .success(function(reply) {
              processReply(reply);
            });
        }
      }

      $scope.add = function(id) {

      }

      function processReply(reply) {
        vm.books = reply.data;
        $scope.loading = false;
        vm.prevPage = reply.prev_page_url;
        vm.currentPage = reply.current_page;
        vm.lastPage = reply.last_page;
        vm.nextPage = reply.next_page_url;
      }

    }
  ]);
