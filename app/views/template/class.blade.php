<!doctype html>
<html class="no-js" lang="en" ng-app="malinkedApp">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Ma linked</title>
    {{ HTML::style('/static/stylesheets/app.css') }}
    {{ HTML::script('/static/components/modernizr/modernizr.js') }}
    {{ HTML::style('/static/components/outdated-browser/outdatedbrowser/outdatedbrowser.min.css') }}
    <!-- Angularjs library -->
    {{ HTML::script('/static/components/angular/angular.min.js') }}
    {{ HTML::script('/static/components/angular-ui-router/release/angular-ui-router.min.js') }}
    <base href="/">
  </head>
  <body>
    {{-- static part --}}
    <header class="class">
      <nav class="menu" role="navigation">
        <div class="row">
          <div class="logo">
            <span class="icon"></span>
            <span class="text">Ma Linked</span>
            <span class="info">Grafisch Vormgeven 4A</span>
          </div>
          <ul>
            <a href="#"><li>Opleidingen</li></a>
            <a href="#"><li>Zoeken</li></a>
          </ul>
        </div>
      </nav>
      <div class="content">
        <div class="align">
          <div class="row">
            <div class="small-12 columns">
              <h1>Grafisch Vormgeven 4A</h1>
            </div>
            <div class="small-12 columns">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat in voluptate non proident.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="overlay"></div>
    </header>
    {{-- dynamic part --}}
  <section class="site" ui-view></section>
  {{-- <div class="megadiv"></div> --}}
  {{ HTML::script('/static/components/jquery/dist/jquery.min.js') }}
  {{ HTML::script('/static/components/foundation/js/foundation.min.js') }}
  {{ HTML::script('/static/scripts/class.js') }}
  {{ HTML::script('/static/components/outdated-browser/outdatedbrowser/outdatedbrowser.min.js') }}
  {{ HTML::script('/static/angular-js/app.js') }}
  {{ HTML::script('/static/angular-js/routes.js') }}
  <div id="outdated"></div>
</body>
</html>