{{-- HEADER START --}}
<header class="@{{ state.current.name }}" ng-class="@{{ headerClass }}">

	{{-- NAV --}}
	<nav class="menu" role="navigation">
		<div class="row">
			<div class="logo" ui-sref="home">
				<span class="icon"></span>
				<span class="text">Ma Linked</span>
			</div>
			<ul>
				<a ui-sref="home"><li>Opleidingen</li></a>
				<a href="#" data-reveal-id="searchModal"><li>Zoeken</li></a>
			</ul>
		</div>
	</nav>

	{{-- HEADER LAYOUT SWITCH --}}
	<angular ng-switch on="state.current.name">

		{{-- HOME LAYOUT --}}
		<angular ng-switch-when="home">
			<video preload="auto" autoplay loop muted>
				<source src="/static/videos/video-background.webm" type="video/webm">
				<source src="/static/videos/video-background.mp4" type="video/mp4">
				Sorry, your browser does not support HTML5 video.
			</video>
			<div class="content">
				<a href="#" data-reveal-id="searchModal">
					<div class="search-bar row">
						<input name="search-bar" placeholder="Zoek direct op een opleiding, klas of student" onfocus="this.placeholder=''" onblur="this.placeholder='Zoek direct op een opleiding, klas of student'">
					</div>
				</a>
			</div>
			<div class="overlay"></div>
		</angular>
	
		{{-- PROFIEL LAYOUT --}}
		<angular ng-switch-when="profiel">
			<div class="content">
				<div class="bar">
					<div class="row">
						<div class="small-12 medium-6 columns">
							@{{ student.fullname }}
						</div>
						<div class="small-12 medium-6 text-right columns social">
							<a href="@{{student.info.website}}" class="website"></a>
<!-- 							<a href="@{{student.info.website}}" class="linkedin"></a>
<a href="#" class="dribbble"></a>
<a href="#" class="behance"></a>
<a href="#" class="vimeo"></a>
<a href="#" class="youtube"></a>
<a href="#" class="facebook"></a> -->
						</div>
					</div>
				</div>
				<profielfoto class="image" student-id="@{{ student.id }}" size="medium" alt="@{{ student.fullname }}"/>

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
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat in voluptate non proident.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="overlay"></div>
		</angular>

	{{-- END SWITCH --}}
	</angular>

</header>