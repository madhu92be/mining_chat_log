angular.module('mainController',[])
		.controller('SearchController',function($scope,Search) {
			$scope.search = function(value) {
				var val = value;
				Search.post(val).success(function(data) {
					$scope.results = data;
					console.log(data);
				});
			}
		});