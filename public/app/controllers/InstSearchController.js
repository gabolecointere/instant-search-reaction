app.controller('InstSearchController', ['$scope', '$http', function($scope, $http) {

  //Initializing the object
  $scope.results = null
  $scope.error = false

  //Execute http request on each change of the input value
  $scope.change = function() {

  $http({
    method: 'post',
    url: '/api/countries',
    data: {
    search: $scope.searchString //The value of the input for each change
    }
  }).then(
    function success(response) {
      $scope.results = response.data
    },
    function failed(response) {
      $scope.error = true
      console.log(response)
    }
  );

  }
}])
