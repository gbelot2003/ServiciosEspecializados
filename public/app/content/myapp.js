'uses strict';
var myApp = angular.module('myApp', ['ngRoute', 'ngAnimate'], function($interpolateProvider){
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
}).
config(['$routeProvider', function($routeProvider) {

  $routeProvider
  		.when('/', 
  		{
  				templateUrl: 'inicio', 
  				controller: 'mainController'
  			}
  		)
  		
  		.when('/proyecto', 
  		{
  				templateUrl: 'proyecto', 
  				controller: 'proyectoController'
  			}
  		)

   		.when('/portafolios', 
  		{
  				templateUrl: 'portafolios', 
  				controller: 'portafolioController'
  			}
  		)
   		.when('/contactenos', 
  		{
  				templateUrl: 'contactenos', 
  				controller: 'contactenosController'
  			}
  		); 

}]);

angular.module('myApp')
  .controller('contactenosController', ['$scope', function($scope){
    $scope.pageClass = 'page-contactenos';
}]);
angular.module('myApp')
  .controller('mainController', ['$scope', function($scope){
    $scope.pageClass = 'page-home';
}]); 
angular.module('myApp')
  .controller('portafolioController', [ '$scope', function($scope){
    $scope.pageClass ='page-portafolios';
}]);
angular.module('myApp')
  .controller('proyectoController', [ '$scope', function($scope){
    $scope.pageAnimate = 'pagina-proyecto';
    $scope.pageClass = 'page-proyecto';
}]);
angular.module('myApp')
.controller('topbarController', ['$scope', '$route', '$location', function ($scope, $route, $location) {
  $scope.$location = $location;
  $scope.$route = $route;
  if($location.path() === '/'){
    $scope.hide = false;
  }
  $scope.hide = true;

}]);
