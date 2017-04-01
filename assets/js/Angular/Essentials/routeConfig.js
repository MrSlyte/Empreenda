angular.module("portfolio").config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "includes/home.html"
    })
    .when("/sobre", {
        templateUrl : "includes/about.html"
    })
    
    .when("/portfolio", {
        templateUrl : "includes/portfolio.html"
    })
    .when("/contato", {
        templateUrl : "includes/contact.html"
    });
});

angular.module("portfolio").config(['$locationProvider', function($locationProvider) {
  $locationProvider.hashPrefix('');
}]);

