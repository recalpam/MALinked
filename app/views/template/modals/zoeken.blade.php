<div id="searchModal" class="reveal-modal" data-reveal aria-hidden="true" role="dialog">
	<div class="search-bar full-row">
		<div class="logo">
			<span class="icon"></span>
			<div class="hamburger open">
				<div class="icon-left"></div>
				<div class="icon-right"></div>
			</div>
		</div>
		<div class="search">
			<input class="" name="search-bar" ng-model="search.fullname" onfocus="this.placeholder=''" onblur="this.placeholder=''">
			<span class="search-icon"></span>
			<div class="border"></div>
			<a class="close-reveal-modal" aria-label="Close">Sluiten &#215;</a>
		</div>
	</div>
	<div class="opleidingen-menu">
		<ul>
			<a ng-repeat="study in db.studies">
				<li class="grafischvormgeven active">
					@{{study.name}}
				</li>
			</a>
		</ul>
	</div>
	<div class="full-row">
		<div ng-repeat="student in db.students | filter:search | limitTo: 20" ui-sref="profiel({ groep:student.group.slug, student:student.slug })" class="small-12 medium-offset-4 medium-4 large-offset-3 large-3 columns">
			<div class="student gameartist">
				<div class="info">
					<h4>@{{ student.fullname }}</h4>
					<p>@{{ student.group.fullname }}</p>
				</div>
				<figure>
					<profielfoto student-id="@{{ student.id }}" size="thumbnail" alt="@{{ student.fullname }}"/>
				</figure>
			</div>
		</div>
		<!-- <div class="small-12 medium-offset-4 medium-4 large-offset-3 large-3 columns">
			<div class="student gameartist">
				<div class="info">
					<h4>Lisley de Jong</h4>
					<p>Game Artist</p>
				</div>
				<figure>
					<img src="/static/images/profile-photo.png">
				</figure>
			</div>
		</div> -->
	</div>
</div>