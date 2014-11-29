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