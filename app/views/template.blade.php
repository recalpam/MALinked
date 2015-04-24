<!doctype html>
<html class="no-js" lang="en" ng-app="malinkedApp">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Ma linked</title>
    <link rel="stylesheet" href="/static/stylesheets/app.css" />
    <script src="/static/components/modernizr/modernizr.js"></script>

    <!-- Angularjs library -->
    <script type="text/javascript" src="/static/components/angular/angular.min.js"></script>
    <script type="text/javascript" src="/static/components/angular-ui-router/release/angular-ui-router.min.js"></script>

    <base href="/">
  </head>
  <body>
    <!-- static part -->
    <header>
      <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
          <li class="name">
            <a href="#">
              <div class="logo">
                <span class="icon"></span>
                <span>Ma linked</span>
              </div>
            </a>
          </li>
           <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
          <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>

        <section class="top-bar-section">
          <!-- Right Nav Section -->
          <ul class="right">
            <li><a href="#">Opleidingen</a></li>
            <li><a href="#">Zoeken</a></li>
          </ul>
        </section>
      </nav>
    </header>

    <!-- dynamic part -->
    <div ui-view></div>

    <div class="megadiv"></div>

    <script src="/static/components/jquery/dist/jquery.min.js"></script>
    <script src="/static/components/foundation/js/foundation.min.js"></script>
    <script src="/static/components/FitText.js/jquery.fittext.js"></script>
    <script src="/static/scripts/app.js"></script>

    <!-- Angularjs Application -->
    <script type="text/javascript" src="/static/angular-js/app.js"></script>
    <script type="text/javascript" src="/static/angular-js/routes.js"></script>
  </body>
</html>