var app = angular.module('mealBestow', []);

app.controller('ProfileController', function ($scope, $http) {
    // Get user details from the server
    $http.get('get_user_details.php').then(function (response) {
        $scope.userDetails = response.data;
    });

    // Simulated data for saved and uploaded recipes
    $scope.savedItems = ["Saved Recipe 1", "Saved Recipe 2"];
    $scope.uploadedItems = ["Uploaded Recipe 1", "Uploaded Recipe 2"];
});
