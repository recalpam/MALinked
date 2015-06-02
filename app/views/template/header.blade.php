{{-- HEADER START --}}
<header class="@{{ state.current.name }} @{{ headerClass }}" ng-class="@{{ headerClass }}">
	{{-- NAV --}}
	<nav class="menu" role="navigation">
		<div class="row">
			<div class="logo" ui-sref="home">
				<span class="icon"></span>
				<span class="text">Ma Linked</span>
			</div>
			<ul>
				<a ui-sref="home"><li>Opleidingen</li></a>
				<a href="#" ng-click="zoekModal()"><li>Zoeken</li></a>
			</ul>
		</div>
	</nav>
	{{-- HEADER LAYOUT SWITCH --}}
	<angular ng-switch on="state.current.name">
		{{-- TEAM LAYOUT --}}
		<angular ng-switch-when="team">
			<div class="content">
				<div class="align">
					<div class="row">
						<div class="small-12 columns">
							<h1>Het Ma linked team</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="overlay"></div>
		</angular>
		{{-- HOME LAYOUT --}}
		<angular ng-switch-when="home">
			<video preload="auto" autoplay loop muted>
				<source src="/static/videos/video-background.webm" type="video/webm">
				<source src="/static/videos/video-background.mp4" type="video/mp4">
				Sorry, your browser does not support HTML5 video.
			</video>
			<div class="content">
				<a ng-click="zoekModal()">
					<div class="search-bar row">
						<p class="searchinfo">Examen kandidaten 2014/2015 Mediacollege Amsterdam</p>
						<input class="hide-for-small-only" name="search-bar" ng-model="search" placeholder="Zoek direct op een opleiding, klas of student" onfocus="this.placeholder=''" onblur="this.placeholder='Zoek direct op een opleiding, klas of student'">
						<input class="hide-for-medium-up" name="search-bar" ng-model="search" placeholder="Zoeken" onfocus="this.placeholder=''" onblur="this.placeholder='Zoeken'">
					</div>
				</a>
			</div>
			<div class="overlay"></div>
		</angular>
			{{-- OPLEIDING LAYOUT --}}
			<angular ng-switch-when="opleiding">
				<div class="content">
					<div class="align">
						<div class="row">
							<div class="small-12 columns">
								<h1>@{{ study.name }}</h1>
							</div>
							<div class="small-12 columns">
								{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat in voluptate non proident.</p> --}}
							</div>
						</div>
					</div>
				</div>
				<div class="overlay"></div>
			</angular>
		{{-- PROFIEL LAYOUT --}}
		<angular ng-switch-when="profiel">
			<style>
				header {
					background-image: url(@{{student.background_file.original}});
				}
			</style>
			<div class="content">
				<div class="bar">
					<div class="row">
						<div class="small-12 medium-6 columns">
							@{{ student.fullname }}
						</div>
						<div class="small-12 medium-6 text-right columns social">
							<angular ng-if="student.info.email">
								<a href="mailto:@{{ student.info.email }}" class="email"></a>
							</angular>
							<angular ng-if="student.info.email">
								<a href="http://@{{ student.info.portfolio }}" target="_blank" class="website"></a>
							</angular>
							<angular ng-if="student.info.dribbble">
								<a href="https://@{{ student.info.dribbble }}" target="_blank" class="dribbble"></a>
							</angular>
							<angular ng-if="student.info.behance">
								<a href="https://@{{ student.info.behance }}" target="_blank" class="behance"></a>
							</angular>
							<angular ng-if="student.info.vimeo">
								<a href="https://@{{ student.info.vimeo }}" target="_blank" class="vimeo"></a>
							</angular>
							<angular ng-if="student.info.youtube">
								<a href="https://@{{ student.info.youtube }}" target="_blank" class="youtube"></a>
							</angular>
							<angular ng-if="student.info.facebook">
								<a href="https://@{{ student.info.facebook }}" target="_blank" class="facebook"></a>
							</angular>
						</div>
					</div>
				</div>
				<img class="image" src="@{{student.file.medium || '/static/anon.jpg'}}" />
				<div class="overlay"></div>
			</angular>
			{{-- END SWITCH --}}
		</angular>
	</header>
