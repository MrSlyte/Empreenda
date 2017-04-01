angular.module("portfolio").controller("aboutController", function ($scope, aboutService) {
   
    $scope.sections = aboutService.listaSections();
    $scope.itensSection = aboutService.listaItensSection();
    
});