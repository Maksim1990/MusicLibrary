<!DOCTYPE html>
<html>
<head>
    <title>Music Library</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <link href="{!! asset('css/fonts.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{!! asset('favicon.ico') !!}">
</head>
<body>

<div class="container" >
    <div class="row">
        <div ng-app="myApp" ng-controller="myCtrl" >
            <div class="col-sm-6 ">
                <h1>About MUSIC LIBRARY</h1>
                <%  firstName + " " + lastName %>
                <p>What is Music Library?<br>
           Online & desktop application with ability to add, create, update and delete discography of favourite artist. This app has function of fast and quick catalog tree view of all available items and immediately make any required changes. This app is under constant updating and development to make it easy and fastly working and connect together all Music World!
            </div>
            <div class="col-sm-4 ">
                <h1>All available artists</h1>
                <table border="1" width="100%">
                    <tr>
                        <th ng-click="orderByMe('name')">Click here to Order By Name</th>

                    </tr>
                    <tr ng-repeat="x in names | orderBy:myOrderBy">
                        <td><a ng-href="/posts/<%x.link%>" > <%x.name%></a></td>

                    </tr>
                </table>
            </div>
        </div>
        <marquee style="color: #3AA3B7; font-size: 40px; font-weight: bolder; line-height: 150%; text-shadow: #000000 0px 1px 1px;">
            Music Library announcement:
            <span class="temp"> here you can store, create, update & delete your favourite artists with their albums & songs!!! </span>
        </marquee>
        <div class="col-sm-8 ">
        @yield('contact')
        </div>
    </div>
    <div class="col-sm-10 col-sm-offset-1">
    <div class="col-sm-2 col-sm-offset-4">
    <h1><a href="{{url()->previous()}}"> <img id="back" src="{!! asset('img/back.png') !!}"> </a></h1>
        </div>
        <div class="col-sm-5 col-sm-offset-1 ">
    <h1><a href="{{URL::to('/posts')}}"><img id="home" src="{!! asset('img/home.png') !!}"> </a></h1>
</div>
</div>
</div>

@yield('footer')
<script>
    var app = angular.module('myApp', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });
    app.controller("myCtrl", function($scope) {
        $scope.names = [
            @foreach($posts as $post)
            {name:'{{$post->text}}',link:'{{$post->id}}'},
            @endforeach
        ];
        $scope.orderByMe = function(x) {
            $scope.myOrderBy = x;
        }
    });

</script>
</body>
</html>