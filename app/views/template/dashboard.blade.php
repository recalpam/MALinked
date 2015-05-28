<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />

	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	    <title>Ma linked Dashboard</title>

	    {{-- OUTDATED BROWSER & JS --}}
	    {{ HTML::script('/packages/modernizr/modernizr.js') }}
	    {{ HTML::style('/packages/outdated-browser/outdatedbrowser/outdatedbrowser.min.css') }}

			{{-- PAGE CSS --}}
	    {{ HTML::style('/static/stylesheets/dashboard.css') }}

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
	<body ng-app="Dashboard">

		<div ng-switch on="state.current.name">
			<div ng-switch-when="login">
				<!-- DYNAMIC PAGE -->
				<ui-view></ui-view>
			</div>
			@if (Auth::user())
			<div ng-switch-default>
				<!-- PAGE CONTAINER -->
				<header>
				  <div class="row">
				    <div class="medium-3 columns logo">
				      <img src="/static/images/logo.png"> Ma linked
				    </div>

				    <div class="medium-5 columns welcome">
				      <h1>{{ Auth::user()->fullname }}</h1>
				      <a href="/profiel/{{ Auth::user()->group->slug }}/{{ Auth::user()->slug }}" target="_blank" class="profiel-bekijken">Bekijk je profiel</a>
				    </div>
				    <div class="medium-4 columns logout">
				      
				    </div>
				  </div>
				</header>

				<section class="dashboard">
				  <div class="dash row">
				    <nav>
				      <div class="medium-3 columns">
				        <div class="nav">
				          <ul>
				            <a href="/dashboard/waarom-het-ma">
				              <li ng-class="{ active: isActive('/waarom-het-ma')}">Waarom het Ma?</li>
				            </a>
				            <a href="/dashboard/hobbys-en-gegevens">
				              <li ng-class="{ active: isActive('/dashboard/hobbys-en-gegevens')}">Hobby’s en gegevens</li>
				            </a>
				            <a href="/dashboard/over-de-school">
				              <li>Over de school</li>
				            </a>
				            <a href="/dashboard/toekomstbeeld">
				              <li>Toekomstbeeld</li>
				            </a>
				            <div class="copyright">
				              &copy; 2015 - Ma Linked
				            </div>
				          </ul>
				        </div>
				      </div>
				    </nav>


						<!-- DYNAMIC PAGE -->
						<ui-view></ui-view>


				  </div>
				</section>
			</div>
			@elseif( Request::path() != 'dashboard/login' )
			 <center>Redirecten naar login</center>
			 <span style="display: none;">{{ Redirect::intended('dashboard/login') }}</span>
			@endif
		</div>

		<!-- JQUERY TRASH -->
		<script type="text/javascript" src="/packages/jquery/dist/jquery.js"></script>

		<!-- ANGULARJS -->
		<script type="text/javascript" src="/packages/angular/angular.js"></script>
		<script type="text/javascript" src="/packages/angular-ui-router/release/angular-ui-router.js"></script>
		<script type="text/javascript" src="/packages/angular-aria/angular-aria.js"></script>
		<script type="text/javascript" src="/packages/angular-animate/angular-animate.js"></script>
		<script type="text/javascript" src="/packages/angular-material/angular-material.js"></script>
		<script type="text/javascript" src="/packages/angular-ngprogress/ngProgress.js"></script>

		{{-- FOUNDATION --}}
		<script src="/packages/foundation/js/foundation.min.js"></script>

		{{-- OUTDATED BROWSER JS --}}
		<script src="/packages/outdated-browser/outdatedbrowser/outdatedbrowser.min.js"></script>

		{{-- Tags Input --}}
		<script src="/packages/jquery.tagsinput/jquery.tagsinput.min.js"></script>

		<!-- MALINKED CLIENT -->
		<script type="text/javascript" src="/api/frontend/file/script/progress"></script>
		<script type="text/javascript" src="/api/frontend/file/script/dashboard.controllers"></script>
		<script type="text/javascript" src="/api/frontend/file/script/dashboard.routes"></script>
		<script type="text/javascript" src="/api/frontend/file/script/dashboard.app"></script>
		<script type="text/javascript" src="/api/frontend/file/script/factories"></script>


	</body>
</html>