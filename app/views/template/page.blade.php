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
	<body ng-app="MaLinked">
		
		<!-- PAGE CONTAINER -->
		<div class="container">

			<!-- NAVBAR -->
			@include('template.navbar')
			
			<!-- LOADER -->
			<center>
				<div class="page-loading center-block">
				 <md-progress-linear md-mode="indeterminate"></md-progress-linear>
				</div>
			</center>

			<!-- DYNAMIC PAGE -->
			<ui-view id="ui-view"></div>
		</div>	
		
		<!-- JQUERY TRASH -->
		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		<!-- ANGULARJS -->
		<script type="text/javascript" src="/packages/angular/angular.js"></script>
		<script type="text/javascript" src="/packages/angular-ui-router/release/angular-ui-router.js"></script>
		<script type="text/javascript" src="/packages/angular-aria/angular-aria.js"></script>
		<script type="text/javascript" src="/packages/angular-animate/angular-animate.js"></script>
		<script type="text/javascript" src="/packages/angular-material/angular-material.js"></script>

		<!-- MALINKED CLIENT -->
		<script type="text/javascript" src="/api/frontend/file/script/controllers"></script>
		<script type="text/javascript" src="/api/frontend/file/script/services"></script>
		<script type="text/javascript" src="/api/frontend/file/script/factories"></script>
		<script type="text/javascript" src="/api/frontend/file/script/routes"></script>
		<script type="text/javascript" src="/api/frontend/file/script/app"></script>

	</body>
</html>