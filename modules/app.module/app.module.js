var base_url = window.location.protocol+'//'+window.location.host;
angular.module('app.module',['ui.bootstrap'])
.controller('regCtrl',function($scope,$httpParamSerializerJQLike,$http){
	$scope.rdata = {};
	$scope.register = function()
	{	
		var url = base_url+'/Forever-Server/Forever_Chinua/register';
        $http({
          method:'POST',
          url: url,
          headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
          data:$httpParamSerializerJQLike($scope.rdata),
        }).then(
          function(resp){
          console.log(resp.data.data);
          $scope.rdata = {};
        },
          function(err){
          console.log(err);
        });
	}

})
.controller('logCtrl',function($scope,$httpParamSerializerJQLike,$http,$rootScope){
		$scope.ldata = {};
	$scope.login = function()
	{
		console.log($scope.ldata);
		var url = base_url+'/Forever-Server/Forever_Chinua/login';
        $http({
          method:'POST',
          url: url,
          headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
          data:$httpParamSerializerJQLike($scope.ldata),
        }).then(
          function(resp){
          console.log(resp.data);
          $scope.ldata = {};
          $rootScope.info= resp.data.data;
          if(resp.data.login)
          {
          	window.location.href = 'http://localhost/Forever-Server/Forever_Chinua/dashboard';
          }
        },
          function(err){
          console.log(err);
        });
	}
})
.controller('infoCtrl',function($scope,$rootScope){
		$scope.ldata = {};
		console.log($rootScope.info);
	
})
.controller('logoutCtrl',function($scope,$httpParamSerializerJQLike,$http,$rootScope){
		$scope.ldata = {};
	$scope.logout = function()
	{
		console.log($scope.ldata);
		var url = base_url+'/Forever-Server/Forever_Chinua/logout';
        $http({
          method:'DELETE',
          url: url,
          headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
           }).then(
          function(resp){
          console.log(resp.data);
         window.location.href = 'http://localhost/Forever-Server';
        },
          function(err){
          console.log(err);
        });
	}
});