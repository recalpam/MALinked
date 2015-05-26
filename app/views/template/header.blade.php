<header class="@{{ currentState }}">
	<nav class="menu" role="navigation">
		<div class="row">
			<div class="logo" ui-sref="home">
				<span class="icon"></span>
				<span class="text">Ma Linked</span>
			</div>
			<ul>
				<a ui-sref="opleidingen"><li>Opleidingen</li></a>
				<a href="#" data-reveal-id="searchModal"><li>Zoeken</li></a>
			</ul>
		</div>
	</nav>
	<div ng-if="currentState=='home'" >
		<video preload="auto" autoplay poster="/static/images/video-background.png" loop muted>
			<source src="/static/videos/video-background.webm" type="video/webm">
			<source src="/static/videos/video-background.mp4" type="video/mp4">
			Sorry, your browser does not support HTML5 video.
		</video>
		<div class="content">
			<div class="search-bar row">
				<input name="search-bar" placeholder="Zoek direct op een opleiding, klas of student" onfocus="this.placeholder=''" onblur="this.placeholder='Zoek direct op een opleiding, klas of student'">
			</div>
		</div>
		<div class="overlay" style="background-image: url(/static/images/video-background.png);"></div>
	</div>
	
	<div ng-if="currentState=='profiel'">
		<div class="content">
			<div class="bar">
				<div class="row">
					<div class="small-12 medium-6 columns">
						Marja de Leeuw
					</div>
					<div class="small-12 medium-6 text-right columns social">
						<a href="#" class="website"></a>
						<a href="#" class="linkedin"></a>
						<a href="#" class="dribbble"></a>
						<a href="#" class="behance"></a>
						<a href="#" class="vimeo"></a>
						<a href="#" class="youtube"></a>
						<a href="#" class="facebook"></a>
					</div>
				</div>
			</div>
			<img class="image" src="http://placehold.it/400x400" />
		</div>
		<div class="overlay"></div>
	</div>
	
</header>
<!--
<header class="profile">
					<nav class="menu" role="navigation">
										<div class="row">
															<div class="logo">
																				<span class="icon"></span>
																				<span class="text">Ma Linked</span>
																				<span class="info">Marja de Leeuw</span>
															</div>
															<ul>
																				<a href="#"><li>Opleidingen</li></a>
																				<a href="#"><li>Zoeken</li></a>
															</ul>
										</div>
					</nav>
					<div class="content">
										<div class="bar">
															<div class="row">
																				<div class="small-12 medium-6 columns">
																									Marja de Leeuw
																				</div>
																				<div class="small-12 medium-6 text-right columns social">
																									<a href="#" class="website"></a>
																									<a href="#" class="linkedin"></a>
																									<a href="#" class="dribbble"></a>
																									<a href="#" class="behance"></a>
																									<a href="#" class="vimeo"></a>
																									<a href="#" class="youtube"></a>
																									<a href="#" class="facebook"></a>
																				</div>
															</div>
										</div>
										<img class="image" src="http://placehold.it/400x400" />
					</div>
					<div class="overlay"></div>
</header>
-->