    // create the module and name it scotchApp
    var scotchApp = angular.module('scotchApp', ['ngRoute']);

    // configure our routes
    scotchApp.config(function($routeProvider) {
        $routeProvider

            // route for the home page
            .when('/', {
                templateUrl : 'index.php/welcome/home',
                controller  : 'mainController'
            })

            // route for the about page
            .when('/about', {
                templateUrl : 'index.php/welcome/about',
                controller  : 'aboutController'
            })

            // route for the contact page
            .when('/contact', {
                templateUrl : 'index.php/welcome/contact',
                controller  : 'contactController'
            });
    });

    // create the controller and inject Angular's $scope
    scotchApp.controller('mainController', function($scope) {
        // create a message to display in our view
        $scope.message = 'You can call me Super Man !';
    });

    scotchApp.controller('aboutController', function($scope) {
        $scope.message = 'SPA dengan Angular js + Codeigniter 3.';
    });

    scotchApp.controller('contactController', function($scope) {
        $scope.message = 'novalsmith69@gmail.com.';
    });