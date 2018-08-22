var App = angular.module('App', ['ngRoute', "ui.bootstrap.modal"]);
App.config(function($routeProvider) {
    $routeProvider
        .when('/', {
        templateUrl: 'index.php/welcome/home',
        controller: 'mainController'
    })

        .when('/user', {
        templateUrl: 'index.php/user/',
        controller: 'userController'
    })

        .when('/student', {
        templateUrl: 'index.php/student/',
        controller: 'studentController'
    })

});



App.controller('mainController', function($scope) {
    $scope.message = 'Everyone come and see how good I look!';
});

App.controller('userController', function($scope) {
    $scope.message = 'List Users';
});

App.controller('userController', function($window, $location, $scope, $http) {
    $scope.users = [];
    $scope.operation = 'Add New';
    $scope.username = '';
    $scope.userId = 0;
    $scope.email = '';

    $scope.updateList = function() {
        $http.get(siteUrl + "index.php/user/getList").success(function(response) {
            $scope.users = response;
        });
    }

    $scope.save = function() {
        var data = JSON.stringify({
            username: $scope.username,
            email: $scope.email,
            id: $scope.userId
        });
        $http.post(siteUrl + "index.php/user/save/", data).success(function(data, status) {
            $scope.userModal = false;
            $scope.updateList();
        });

    }

    $scope.deleteUser = function(userId, index) {
        $http.get(siteUrl + "index.php/user/remove/" + userId).success(function(response) {
            $scope.users.splice(index, 1);
        });
    }

    $scope.openModal = function() {
        $scope.username = '';
        $scope.operation = 'Save';
        $scope.email = '';
        $scope.userId = 0;
        $location.path = '#/user/add';
        $scope.userModal = true;

    }
    $scope.closeModal = function() {
        $scope.username = '';
        $scope.email = '';
        $scope.userId = 0;
        $scope.userModal = false;
    }

    $scope.editUser = function(user) {
        $scope.operation = 'Update';
        $scope.username = user.username;
        $scope.email = user.email;
        $scope.userId = user.id;
        $scope.userModal = true;
    }
    $scope.updateList();
});

