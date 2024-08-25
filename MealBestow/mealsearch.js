angular.module('mealBestow', [])
            .controller('BreakfastController', function($scope, $window) {
                $scope.items = [
                    'Breakfast',
                    'Lunch',
                    'Dinner',
                    'Snacks',
                    'Desserts',
                    'Beverages'
                ];

                $scope.selectedItem = "";

                $scope.goToMeal = function(selectedMeal) {
                    if (selectedMeal) {
                        var meal = selectedMeal.toLowerCase();
                        $window.location.href = meal + '.html';
                    }
                };
            });  