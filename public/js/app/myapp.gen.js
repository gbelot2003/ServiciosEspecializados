'uses strict';
(function(){
    var myApp = angular.module('myApp', [
        'ngRoute', 
        'ngAnimate', 
        'duScroll'
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
	angular.module('myApp').controller('contactanosController', ['$scope',
	    function($scope) {
	        $scope.pageClass = 'view-slide-in page-contactenos';
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
    angular.module('myApp').controller('proyectoController', ['$scope', '$document',
        function($scope, $document) {
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
	         };
	 	}]);
})(); 