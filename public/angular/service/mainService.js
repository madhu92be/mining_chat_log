angular.module('mainService',[])
		.factory('Search',function($http) {
			return {
				get:function(){
					return $http.get('/search');
				},
				post:function(value){
					return $http({
					    method: 'POST',
					    url: '/search/data',
					    data: "message=" + value,
					    headers : {
			                 "Content-Type" : "application/json; charset=utf-8",
			                 "Accept" : "application/json"
			           }
					});
				}

			};
		});