<html ng-app="voorbeeld">
<head>
<title>AngularJS + Laravel 5.0 als API</title>
{!! HTML::script('https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js'); !!}
{!! HTML::script('static/js/dev/voorbeeld.js'); !!}
</head>
<body ng-controller="BodyCtrl">
<h3>@{{ coolstuff.foo }}</h3>
</body>
</html>
