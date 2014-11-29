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