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
          De pagina die u zoekt is niet gevonden!
        </div>
      </div>
      <div class="overlay"></div>
    </header>
    {{-- dynamic part --}}
  <section class="site" ui-view></section>
  {{-- <div class="megadiv"></div> --}}
  {{ HTML::script('/static/components/jquery/dist/jquery.min.js') }}
  {{ HTML::script('/static/components/foundation/js/foundation.min.js') }}
  {{ HTML::script('/static/scripts/homepage.js') }}
  {{ HTML::script('/static/components/outdated-browser/outdatedbrowser/outdatedbrowser.min.js') }}
  {{ HTML::script('/static/angular-js/app.js') }}
  {{ HTML::script('/static/angular-js/routes.js') }}
  <div id="outdated"></div>
</body>
</html>