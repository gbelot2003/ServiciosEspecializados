(function(){
	angular.module('myApp').controller('contactanosController', ['$scope',
	    function($scope) {
	        $scope.pageClass = 'view-slide-in page-contactenos';
	        $scope.sendMail = function(){
	        	console.log('Mail Sended');

	        	var todo = {
	        		nombre: $scope.mailNombre,
	        		email: $scope.mailEmail,
	        		organizacion : $scope.mailOrganizacion,
	        		asunto: $scope.mailAsunto,
	        		body: $scope.mailBody
	        	};

	        	$scope.todos = todo;
	        	console.log($scope.todos);
 				
 				$scope.mailNombre ='';
	        	$scope.mailEmail = '';
	        	$scope.mailOrganizacion = '';
	        	$scope.mailAsunto = '';
	        	$scope.mailBody = ''; 

	        };
	    }
	]);
})();