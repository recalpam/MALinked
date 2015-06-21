<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />

	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	    <title>Ma linked</title>

	    {{-- OUTDATED BROWSER & JS --}}
	    {{ HTML::script('/packages/modernizr/modernizr.js') }}
	    {{ HTML::style('/packages/outdated-browser/outdatedbrowser/outdatedbrowser.min.css') }}
	    {{ HTML::style('/packages/jquery.slick/1.5.0/slick.css') }}
	    {{ HTML::style('/packages/jquery.slick/1.5.0/slick-theme.css') }}

			{{-- PAGE CSS --}}
	    {{ HTML::style('/static/stylesheets/app.css') }}

	    <!-- Meta Data for malinked.nl -->
	    <meta name="title" content="Ma linked" />
	    <meta name="description" content="Examen kandidaten 2014/2015 Mediacollege Amsterdam" />
	    <meta name="keywords" content="Ma linked, Jaarboek, 2014, 2015, Mediacollege, Amsterdam, Studenten" />
	    <meta name="robots" content="index, follow">

	    <!-- Facebook Open Graph for malinked.nl -->
	    <meta property="og:url" content="http://malinked.nl" />
	    <meta property="og:type" content="website" />
	    <meta property="og:title" content="Ma linked" />
	    {{-- <meta property="og:image" content="http://malinked.nl/static/images/facebook-opengraph.jpg" /> --}}
	    <meta property="og:description" content="Examen kandidaten 2014/2015 Mediacollege Amsterdam" />

	    {{-- Hotjar Tracking Code for beta.malinked.nl --}}
			<script>
	    (function(f,b){
        var c;
        f.hj=f.hj||function(){(f.hj.q=f.hj.q||[]).push(arguments)};
        f._hjSettings={hjid:38392, hjsv:4};
        c=b.createElement("script");c.async=1;
        c.src="//static.hotjar.com/c/hotjar-"+f._hjSettings.hjid+".js?sv="+f._hjSettings.hjsv;
        b.getElementsByTagName("head")[0].appendChild(c);
	    })(window,document);

			</script>

			{{-- Google Analytics Code for beta.malinked.nl --}}
			<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-63495875-1', 'auto');
		  ga('send', 'pageview');

			</script>

	    <base href="/">
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
		<base href="/">
	</head>
	<body ng-app="MaLinked">

		<!-- PAGE CONTAINER -->
		<div class="site hide" ng-class="show">
			@include('template.header')

			@include('template.modals.zoeken')

			<!-- DYNAMIC PAGE -->
			<ui-view></ui-view>
		</div>

		<footer>
			<div class="row">
				<div class="small-12 medium-8 columns">
					&copy; <?php echo date("Y") ?> - <a ui-sref="home">malinked.nl</a> is onderdeel van het <a href="http://ma-web.nl" target="_blank">Mediacollege Amsterdam</a>
				</div>
				<div class="small-12 medium-4 columns text-right">
					<ul>
						<li><a ui-sref="login">Inloggen</a></li>
						<li> - </li>
						<li><a ui-sref="team">Team</a></li>
					</ul>
				</div>
			</div>
		</footer>

		<!-- JQUERY TRASH -->
		<script type="text/javascript" src="/packages/jquery/dist/jquery.js"></script>

		<!-- ANGULARJS -->
		<script type="text/javascript" src="/packages/angular/angular.js"></script>
		<script type="text/javascript" src="/packages/angular-ui-router/release/angular-ui-router.js"></script>
		<script type="text/javascript" src="/packages/angular-aria/angular-aria.js"></script>
		<script type="text/javascript" src="/packages/angular-animate/angular-animate.js"></script>
		<script type="text/javascript" src="/packages/angular-material/angular-material.js"></script>
		<script type="text/javascript" src="/packages/angular-ngprogress/ngProgress.js"></script>
		<script type="text/javascript" src="/packages/angular-google-maps/lodash.min.js"></script>
		<script type="text/javascript" src="/packages/angular-google-maps/angular-google-maps.min.js"></script>
		<script type="text/javascript" src="/packages/angular-hotkeys/hotkeys.min.js"></script>


		{{-- FOUNDATION --}}
		<script src="/packages/foundation/js/foundation.min.js"></script>

		{{-- ZOEK MODAL --}}
		<script src="/static/scripts/app.js"></script>

		{{-- Slick Carousel --}}
		<script src="/packages/jquery.slick/1.5.0/slick.min.js"></script>

		{{-- OUTDATED BROWSER JS --}}
		<script src="/packages/outdated-browser/outdatedbrowser/outdatedbrowser.min.js"></script>

		{{-- Google Maps API --}}
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&.js"></script>

		<!-- MALINKED CLIENT -->
		<script type="text/javascript" src="/api/frontend/file/script/progress"></script>
		<script type="text/javascript" src="/api/frontend/file/script/controllers"></script>
		<script type="text/javascript" src="/api/frontend/file/script/services"></script>
		<script type="text/javascript" src="/api/frontend/file/script/factories"></script>
		<script type="text/javascript" src="/api/frontend/file/script/routes"></script>
		<script type="text/javascript" src="/api/frontend/file/script/app"></script>

	</body>
</html>