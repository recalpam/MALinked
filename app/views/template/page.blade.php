<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>MaLinked</title>
		<link rel="stylesheet" href="https://bootswatch.com/yeti/bootstrap.min.css">
		<link rel="stylesheet" href="http://select2.github.io/select2/select2-3.5.2/select2.css">
		<link rel="stylesheet" href="/packages/angular-material/angular-material.css">

		<style>
		
		</style>
		<base href="/">
	</head>
	<body ng-app="MaLinked" ng-controller="MainCtrl">
		
		<!-- PAGE CONTAINER -->
		<div class="container">

			<!-- NAVBAR -->
			@include('template.navbar')

			<!-- DYNAMIC PAGE -->
			<ui-view id="ui-view"></div>
		</div>	
		
		<!-- JQUERY TRASH -->
		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		<!-- ANGULARJS -->
		<script type="text/javascript" src="/packages/angular/angular.js"></script>
		<script type="text/javascript" src="https://code.angularjs.org/1.4.0-rc.2/angular-route.min.js"></script>
		<script type="text/javascript" src="/packages/angular-ui-router/release/angular-ui-router.js"></script>
		<script type="text/javascript" src="/packages/angular-aria/angular-aria.js"></script>
		<script type="text/javascript" src="/packages/angular-animate/angular-animate.js"></script>
		<script type="text/javascript" src="/packages/angular-material/angular-material.js"></script>
		<script type="text/javascript" src="/packages/angular-ngprogress/ngProgress.js"></script>

		<!-- MALINKED CLIENT -->
		<script type="text/javascript" src="/api/frontend/file/script/progress"></script>
		<script type="text/javascript" src="/api/frontend/file/script/controllers"></script>
		<script type="text/javascript" src="/api/frontend/file/script/services"></script>
		<script type="text/javascript" src="/api/frontend/file/script/factories"></script>
		<script type="text/javascript" src="/api/frontend/file/script/routes"></script>
		<script type="text/javascript" src="/api/frontend/file/script/app"></script>

		<style>
			/* Styling for the ngProgress itself */
			#ngProgress {
			    margin: 0;
			    padding: 0;
			    z-index: 99998;
			    background-color: green;
			    color: green;
			    box-shadow: 0 0 10px 0; /* Inherits the font color */
			    height: 2px;
			    opacity: 0;

			    /* Add CSS3 styles for transition smoothing */
			    -webkit-transition: all 0.5s ease-in-out;
			    -moz-transition: all 0.5s ease-in-out;
			    -o-transition: all 0.5s ease-in-out;
			    transition: all 0.5s ease-in-out;
			}

			/* Styling for the ngProgress-container */
			#ngProgress-container {
			    position: fixed;
			    margin: 0;
			    padding: 0;
			    top: 0;
			    left: 0;
			    right: 0;
			    z-index: 99999;
			}
		</style>

	</body>
</html>