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