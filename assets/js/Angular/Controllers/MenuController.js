angular.module("portfolio").controller('MenuController', function($scope, MenuService){
    $scope.menu = MenuService.listaMenu();
});