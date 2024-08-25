<!DOCTYPE html>
<html lang="en" ng-app="mealBestowApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meal Bestow</title>
    <link href="styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a760d5eed3.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <style>
        img
        {
            opacity: 1;
        }
        a
        {
            display: block;
            color: black;
            text-align: center;
            text-decoration: none;
            padding: 10px 10px 10px 10px;
            font-size: 16pt;
            font-weight: bold;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .bgcentered button
        {
            font-family: cursive;
            font-size: 16pt;
            color: white;
            background-color: rgba(0, 0, 0, 0.648);
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
    <div ng-controller="HomeController" class="container">
        <img src="https://previews.123rf.com/images/tonobalaguer/tonobalaguer1705/tonobalaguer170500220/79186904-assorted-indian-recipes-food-various-with-spices-and-rice-on-wooden-table.jpg" width="1520px" height="690px">
        <div class="top-left">
            <img src="Screenshot 2023-08-27 105735.png" width="150px" height="150px" style="opacity: 1;">
        </div>
        <div class="top-right">
            <button><a href="login.html"><i class="fa-solid fa-user"></i>  LOGIN</a></button>
        </div>
        <div class="bgcentered">
            <button>
                <center><h1>MEAL BESTOW</h1></center>
                <p>{{welcomeMessage}}</p>
            </button>
        </div>
    </div>

    <script>
        angular.module('mealBestowApp', []).controller('HomeController', function($scope) {
            $scope.welcomeMessage = "Welcome to Meal Bestow, the heartland of culinary exploration where every dish tells a story. Our virtual kitchen is a gathering place for both seasoned chefs and passionate home cooks alike. Dive into a world of flavors, textures, and aromas, discovering an array of recipes that cater to every palate and skill level. Join our diverse community as we celebrate the art of cooking and the generosity of sharing. Explore, create, and share your favorite recipes, making Meal Bestow the destination for culinary inspiration. Let's embark on this flavorful journey together, where the joy of cooking meets the pleasure of sharing. Welcome, and let your culinary odyssey begin!";
        });
    </script>
</body>
</html>
