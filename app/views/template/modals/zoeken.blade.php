<div id="searchModal" class="reveal-modal" data-reveal aria-hidden="true" role="dialog">
	<div class="search-bar full-row">
		<div class="logo">
			<span class="icon"></span>
			<div class="hamburger open hide">
				<div class="icon-left"></div>
				<div class="icon-right"></div>
			</div>
		</div>
		<div class="search">
			<input class="" name="search-bar" ng-model="search" placeholder="Zoek direct op een opleiding, klas of student" onfocus="this.placeholder=''" onblur="this.placeholder='Zoek direct op een opleiding, klas of student'">
			<div class="border"></div>
			<a class="close-reveal-modal" aria-label="Close">
				<div class="icon-left"></div>
				<div class="icon-right"></div>
			</a>
		</div>
	</div>
	<div class="opleidingen-menu hide">
		<ul>
			<a ng-repeat="study in db.studies">
				<li class="grafischvormgeven active">
					@{{study.name}}
				</li>
			</a>
		</ul>
	</div>
	<div class="full-row">
		{{-- <div ng-repeat="student in db.students | filter:search | limitTo: 20" ui-sref="profiel({ groep:student.group.slug, student:student.slug })" class="small-12 medium-offset-4 medium-4 large-offset-3 large-3 columns"> --}}
			<div ng-repeat="student in db.students | filter:search | limitTo: 20" ui-sref="profiel({ groep:student.group.slug, student:student.slug })" class="small-12 medium-4 large-3 columns end">
				<style>
					#@{{student.slug}} {
						background-image: url(@{{student.background_file.original}});
					}
				</style>
				<div id="@{{student.slug}}" class="student @{{ student.group.slug }}">
					<div class="info">
						<h4>@{{ student.fullname }}</h4>
						<p>@{{ student.group.fullname }}</p>
					</div>
					<figure>
						<profielfoto student-id="@{{ student.id }}" size="thumbnail" alt="@{{ student.fullname }}"/>
						</figure>
					</div>
				</div>
			</div>
		</div>