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