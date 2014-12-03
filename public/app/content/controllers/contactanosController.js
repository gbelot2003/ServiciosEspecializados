(function(){
	angular.module('myApp').controller('contactanosController', ['$scope', '$http',
	    function($scope, $http) {
	        $scope.pageClass = 'view-slide-in page-contactenos';
	        $scope.sendMail = function(){

	        	var todo = {nombre: $scope.mailNombre, email: $scope.mailEmail, organizacion : $scope.mailOrganizacion, asunto: $scope.mailAsunto, body: $scope.mailBody};
	        	$scope.todos = todo;

	        	$http.post('/contactanos', {
	        		nombre: $scope.mailnonbre,
	        		email: $scope.mailEmail,
	        		organizacion: $scope.mailOrganizacion,
	        		asunto: $scope.mailAsunto,
	        		body: $scope.mailBody
	        	}).success(function(data, status, header, config){
	        		console.log(header, status);
	        	}).error(function(data, status){
	        		console.log(data, status);
	        	});

	        	//console.log($scope.todos);
 				
 				$scope.mailNombre ='';$scope.mailEmail = '';$scope.mailOrganizacion = '';$scope.mailAsunto = '';$scope.mailBody = ''; 

	        };
	    }
	]);
})();