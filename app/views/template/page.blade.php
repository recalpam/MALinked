<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>MaLinked</title>
		<link rel="stylesheet" href="https://bootswatch.com/yeti/bootstrap.min.css">
		<base href="/">
	</head>
	<body ng-app="MaLinked">
		
		<!-- PAGE CONTAINER -->
		<div class="container">

			<!-- NAVBAR -->
			@include('template.navbar')
			
			<!-- DYNAMIC PAGE -->
			<ui-view></div>
		</div>	

		<!-- ANGULARJS -->
		<script type="text/javascript" src="/packages/angular/angular.js"></script>
		<script type="text/javascript" src="/packages/angular-ui-router/release/angular-ui-router.js"></script>

		<!-- MALINKED CLIENT -->
		<script type="text/javascript" src="/api/frontend/file/script/controllers"></script>
		<script type="text/javascript" src="/api/frontend/file/script/services"></script>
		<script type="text/javascript" src="/api/frontend/file/script/factories"></script>
		<script type="text/javascript" src="/api/frontend/file/script/routes"></script>
		<script type="text/javascript" src="/api/frontend/file/script/app"></script>

	</body>
</html>