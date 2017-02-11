<!DOCTYPE html>
<html>
<head>
    <title>Music Library</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
<div ng-app="myApp" ng-controller="myCtrl">
    <%  firstName + " " + lastName %>
</div>

<script>
    var app = angular.module('myApp', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });
    app.controller("myCtrl", function($scope) {
        $scope.firstName = "Music ";
        $scope.lastName = "Library";
    });

</script>

<div class="container" >
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            @yield('contact')
        </div>
    </div>
    <div class="col-sm-2 col-sm-offset-1">
    <h1><a href="{{url()->previous()}}"> Back </a></h1>
        </div>
        <div class="col-sm-5 ">
    <h1><a href="{{URL::to('/posts')}}"><img id="home" src="{!! asset('img/home.png') !!}"> </a></h1>
</div>
</div>

@yield('footer')
</body>
</html>