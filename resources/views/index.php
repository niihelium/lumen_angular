<!DOCTYPE html>
<html lang="en-US">

<head>
  <title>Books storage</title>

  <!-- set the base path for angular routing -->
  <base href="/">

  <!-- load bootstrap and fontawesome via CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css">
</head>

<body class="container" ng-app="booksStorage">
  <!-- ng-app -->
  <main>
    <div ng-view></div>
  </main>
  <!-- ng-app -->

  <!-- Load AngularJS -->
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-route.js"></script>
  <!-- Load JQuery Bootstrap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <!-- Load App -->
  <script src="js/app.js"></script>
  <script src="js/bookDetailController.js"></script>
  <script src="js/booksController.js"></script>
  <script src="js/booksService.js"></script>
  <script src="js/routes.js"></script>

</body>

</html>
