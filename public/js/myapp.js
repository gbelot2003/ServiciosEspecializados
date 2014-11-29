'uses strict';
var myApp = angular.module('myApp', ['ngRoute', 'ngAnimate', 'duScroll'], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    })
    .value('duScrollDuration', 1500)
    .value('duScrollOffset', 30)
    .config(['$routeProvider',
        function($routeProvider) {

            $routeProvider
                .when('/', {
                    templateUrl: 'inicio',
                    controller: 'mainController'
                })

            .when('/proyecto', {
                templateUrl: 'proyecto',
                controller: 'proyectoController'
            })

            .when('/portafolios', {
                templateUrl: 'portafolios',
                controller: 'portafolioController'
            })

            .when('/blogs', {
                templateUrl: 'blogs',
                controller: 'blogsController'
            })

            .when('/contactanos', {
                templateUrl: 'contactanos',
                controller: 'contactanosController'
            });

        }
    ]).
run(function($rootScope, $location, $anchorScroll, $routeParams) {
    $rootScope.$on('$routeChangeSuccess', function(newRoute, oldRoute) {
        $location.hash($routeParams.scrollTo);
        $anchorScroll();
    });
});
angular.module('myApp')
    .directive("myNavscroll", function($window) {
        return function(scope, element, attrs) {
            angular.element($window).bind("scroll", function() {
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
angular.module('myApp')
    .controller('contactanosController', ['$scope',
        function($scope) {
            $scope.pageClass = 'view-slide-in page-contactenos';
        }
    ]);
angular.module('myApp')
    .controller('mainController', ['$scope',
        function($scope) {
            $scope.pageClass = 'page-home';
        }
    ]);
angular.module('myApp')
    .controller('portafolioController', ['$scope',
        function($scope) {
            $scope.pageClass = 'view-slide-in page-portafolios';
        }
    ]);
angular.module('myApp')
    .controller('blogsController', ['$scope',
        function($scope) {
            $scope.pageClass = 'view-slide-in page-blogs';
        }
    ]);
angular.module('myApp')
    .controller('proyectoController', ['$scope', '$document',
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
angular.module('myApp')
    .controller('topbarController', ['$scope', '$route', '$location',
        function($scope, $route, $location) {
            $scope.$location = $location;
            $scope.$route = $route;
            if ($location.path() === '/') {
                $scope.hide = false;
            }
            $scope.hide = true;
        }
    ]);