'uses strict';
(function(){
    var myApp = angular.module('myApp', [
        'ngRoute', 
        'ngAnimate', 
        'duScroll',
        'ngMorph' 
    ], 
    function($interpolateProvider) {
            $interpolateProvider.startSymbol('<%');
            $interpolateProvider.endSymbol('%>');
    })
    .value('duScrollDuration', 1500)
    .value('duScrollOffset', 30)
    .config(['$routeProvider', '$locationProvider',
        function($routeProvider, $locationProvider) {
            $routeProvider.when('/', {templateUrl: 'inicio',controller: 'mainController'});
            $routeProvider.when('/proyecto', {templateUrl: 'proyecto', controller: 'proyectoController'});
            $routeProvider.when('/portafolios', {templateUrl: 'portafolios', controller: 'portafolioController'});
            $routeProvider.when('/blogs', {templateUrl: 'blogs', controller: 'blogsController'});
            $routeProvider.when('/contactanos', {templateUrl: 'contactanos', controller: 'contactanosController'});
            $routeProvider.otherwise({ redirectTo: '/' });
            }
        ]).
        run(function($rootScope, $location, $anchorScroll, $routeParams) {
        $rootScope.$on('$routeChangeSuccess', function(newRoute, oldRoute) {
            $location.hash($routeParams.scrollTo);
            $anchorScroll();
        });
    }); 
})(); 
(function(){
	angular.module('myApp').controller('blogsController', ['$scope',
	    function($scope) {
	        $scope.pageClass = 'view-slide-in page-blogs';
	    }
	]);
})();
(function(){
	angular.module('myApp').controller('contactanosController', ['$scope', '$http',
	    function($scope, $http) {
	        $scope.pageClass = 'view-slide-in page-contactenos';
	        
	        $scope.responses = false;

	        $scope.sendMail = function(){

	        	$scope.todos = {nombre: $scope.mailNombre, email: $scope.mailEmail, organizacion : $scope.mailOrganizacion, asunto: $scope.mailAsunto, body: $scope.mailBody};

	        	$http.post('/contactanos', {
	        		nombre: $scope.mailnonbre,
	        		email: $scope.mailEmail,
	        		organizacion: $scope.mailOrganizacion,
	        		asunto: $scope.mailAsunto,
	        		body: $scope.mailBody

	        	}).success(function(data, status, header, config){

	        		$scope.responseMessage = data;
	        		$scope.responses = true;
	        		console.log($scope.todos);
	        		

	        	}).error(function(data, status){
	        		console.log(data, status);
	        	});

	        	//console.log($scope.todos);
 				
 				$scope.mailNombre ='';$scope.mailEmail = '';$scope.mailOrganizacion = '';$scope.mailAsunto = '';$scope.mailBody = ''; 

	        };
	    }
	]);
})();
(function(){
	angular.module('myApp').controller('mainController', ['$scope',
	    function($scope) {
	    	$scope.pageClass = 'page-home'; 
	    }
	]);
})();
(function(){
	angular.module('myApp').controller('portafolioController', ['$scope',
		function($scope) {
	    	$scope.pageClass = 'view-slide-in page-portafolios';
	    }
	]);
})();
(function(){
    angular.module('myApp').controller('proyectoController', ['$scope', '$document', '$http',
        function($scope, $document, $http) {
            $scope.pageAnimate = 'pagina-proyecto';
            $scope.pageClass = 'view-slide-in page-proyecto';

            var doScrolling = function() {
                var someElement = angular.element(document.getElementById('mision'));
                $document.scrollToElementAnimated(someElement);
            };
            var doScrolling2 = function($value) {
                var someElement = angular.element(document.getElementById('equipo'));
                        $document.scrollToElementAnimated(someElement);
                };
        }
    ]);
})();
(function(){
    angular.module('myApp').controller('topbarController', ['$scope', '$route', '$location',
        function($scope, $route, $location) {
            $scope.$location = $location;
            $scope.$route = $route;
            if ($location.path() === '/') {
                $scope.hide = false;
            }
            $scope.hide = true;

            $scope.navClass = function (page) {
                var currentRoute = $location.path().substring(1) || '/';
                    return page === currentRoute ? 'active' : '';
                };
            }
    ]);
})();
(function(){
    angular.module('myApp').directive('myNavscroll', function($window) {
        return function(scope, element, attrs) {
            angular.element($window).bind('scroll', function() {
                if (!scope.scrollPosition) {
                    scope.scrollPosition = 0;
                }

                if (this.pageYOffset > scope.scrollPosition) {
                    scope.boolChangeClass = true;
                } else {
                    scope.boolChangeClass = false;
                }

                scope.scrollPosition = this.pageYOffset;
                    scope.$apply();
                });
            };
        });
})();
(function(){
	angular.module('myApp').directive('partialsEquipo', [function () {
		return {
	    	restrict: 'E',
	        	templateUrl:'partials/equipo',
	        	controller: function($scope, $http){
	        		
	        		$scope.tester = '';
	        		$scope.testClick = function(clickVar){
	        			$scope.tester = clickVar; 

						$http.get('detalles/' + $scope.tester).success(function(data, status){
							console.log(data);
							$scope.name = data.name;
							$scope.location = data.location;
							$scope.imagen = data.imagen;
							$scope.website = data.website;
							$scope.facebook = data.facebook;
							$scope.tweeter = data.tweeter;
							$scope.cargo = data.cargo;
							$scope.about = data.about;
							$scope.github = data.github;

						}).error(function(data, status, header, config){
							console.log('error');
							console.log(header);
						});
	        		};

	        		$scope.settings= {
	        			closeEl: '.close',
	        			overlay:{
	        				templateUrl: 'template/detalles'
	        			}
	        		};
	        	
	        	},
	        	controllerAs:'equipoController' 
	         };
	 	}]);
})(); 
(function(){
	angular.module('myApp').directive('partialsMision', [function () {
		return {
	    	restrict: 'E',
	        	templateUrl:'partials/mision',
	         };
	 	}]);
})(); 