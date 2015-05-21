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
    <header class="search">
      <nav class="menu" role="navigation">
        <div class="row">
          <div class="logo">
            <a href="#" data-reveal-id="searchModal"><span class="icon"></span></a>
            <span class="text">Zoeken</span>
          </div>
        </div>
      </nav>
    </header>
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
          <input class="" name="search-bar" placeholder="" onfocus="this.placeholder=''" onblur="this.placeholder=''">
          <span class="search-icon"></span>
          <div class="border"></div>
          <a class="close-reveal-modal" aria-label="Close">Sluiten &#215;</a>
        </div>
      </div>
      <div class="opleidingen-menu">
        <ul>
          <a href="">
            <li class="grafischvormgeven active">
              Grafisch Vormgeven
            </li>
          </a>
          <a href="">
            <li class="interactiefvormgeven active">
              Interactief Vormgeven
            </li>
          </a>
          <a href="">
            <li class="ruimtelijkvormgeven active">
              Ruimtelijk Vormgeven
            </li>
          </a>
          <a href="">
            <li class="audiovisueelvormgeven active">
              Audiovisueel Vormgeven/Animatie
            </li>
          </a>
          <a href="">
            <li class="filmacteur active">
              Filmacteur
            </li>
          </a>
          <a href="">
            <li class="audiovisueeltechnicus active">
              AV-Technicus
            </li>
          </a>
          <a href="">
            <li class="podiumtechnicus active">
              Podiumtechnicus
            </li>
          </a>
          <a href="">
            <li class="evenemententechnicus active">
              Evenementtechnicus
            </li>
          </a>
          <a href="">
            <li class="geluidtechnicus active">
              Geluidstechnicus
            </li>
          </a>
          <a href="">
            <li class="mediaengamedevelopment active">
              Media- en Gamedeveloper
            </li>
          </a>
          <a href="">
            <li class="gameartist active">
              Gameartist
            </li>
          </a>
          <a href="">
            <li class="mediamanager active">
              Mediamanager
            </li>
          </a>
          <a href="">
            <li class="dtp active">
              Dtp-er
            </li>
          </a>
          <a href="">
            <li class="signmaker active">
              Signmaker
            </li>
          </a>
        </ul>
      </div>
      <div class="full-row">
        <div class="small-12 medium-offset-4 medium-4 large-offset-3 large-3 columns">
          <div class="student gameartist">
            <div class="info">
              <h4>Lisley de Jong</h4>
              <p>Game Artist</p>
            </div>
            <figure>
              <img src="/static/images/profile-photo.png">
            </figure>
          </div>
        </div>
        <div class="small-12 medium-4 large-3 columns">
          <div class="student mediamanager">
            <div class="info">
              <h4>Lisa Schouten</h4>
              <p>Mediamanager</p>
            </div>
            <figure>
              <img src="/static/images/profile-photo.png">
            </figure>
          </div>
        </div>
        <div class="small-12 medium-4 large-3 columns">
          <div class="student ruimtelijkvormgeven">
            <div class="info">
              <h4>Lisette Hensen</h4>
              <p>Ruimtelijk Vormgeven</p>
            </div>
            <figure>
              <img src="/static/images/profile-photo.png">
            </figure>
          </div>
        </div>
        <div class="small-12 medium-offset-4 medium-4 large-offset-3 large-3 columns">
          <div class="student evenemententechnicus">
            <div class="info">
              <h4>Lieroy Bazoer</h4>
              <p>Evenemententechnicus</p>
            </div>
            <figure>
              <img src="/static/images/profile-photo.png">
            </figure>
          </div>
        </div>
        <div class="small-12 medium-4 large-3 columns">
          <div class="student ruimtelijkvormgeven">
            <div class="info">
              <h4>Lisette Hensen</h4>
              <p>Ruimtelijk Vormgeven</p>
            </div>
            <figure>
              <img src="/static/images/profile-photo.png">
            </figure>
          </div>
        </div>
        <div class="small-12 medium-4 large-3 columns end">
          <div class="student evenemententechnicus">
            <div class="info">
              <h4>Lieroy Bazoer</h4>
              <p>Evenemententechnicus</p>
            </div>
            <figure>
              <img src="/static/images/profile-photo.png">
            </figure>
          </div>
        </div>
        <div class="small-12 medium-offset-4 medium-4 large-offset-3 large-3 columns">
          <div class="student evenemententechnicus">
            <div class="info">
              <h4>Lieroy Bazoer</h4>
              <p>Evenemententechnicus</p>
            </div>
            <figure>
              <img src="/static/images/profile-photo.png">
            </figure>
          </div>
        </div>
        <div class="small-12 medium-4 large-3 columns">
          <div class="student ruimtelijkvormgeven">
            <div class="info">
              <h4>Lisette Hensen</h4>
              <p>Ruimtelijk Vormgeven</p>
            </div>
            <figure>
              <img src="/static/images/profile-photo.png">
            </figure>
          </div>
        </div>
        <div class="small-12 medium-4 large-3 columns end">
          <div class="student evenemententechnicus">
            <div class="info">
              <h4>Lieroy Bazoer</h4>
              <p>Evenemententechnicus</p>
            </div>
            <figure>
              <img src="/static/images/profile-photo.png">
            </figure>
          </div>
        </div>
        <div class="small-12 medium-offset-4 medium-4 large-offset-3 large-3 columns">
          <div class="student evenemententechnicus">
            <div class="info">
              <h4>Lieroy Bazoer</h4>
              <p>Evenemententechnicus</p>
            </div>
            <figure>
              <img src="/static/images/profile-photo.png">
            </figure>
          </div>
        </div>
        <div class="small-12 medium-4 large-3 columns">
          <div class="student ruimtelijkvormgeven">
            <div class="info">
              <h4>Lisette Hensen</h4>
              <p>Ruimtelijk Vormgeven</p>
            </div>
            <figure>
              <img src="/static/images/profile-photo.png">
            </figure>
          </div>
        </div>
        <div class="small-12 medium-4 large-3 columns end">
          <div class="student evenemententechnicus">
            <div class="info">
              <h4>Lieroy Bazoer</h4>
              <p>Evenemententechnicus</p>
            </div>
            <figure>
              <img src="/static/images/profile-photo.png">
            </figure>
          </div>
        </div>
        <div class="small-12 medium-offset-4 medium-4 large-offset-3 large-3 columns">
          <div class="student evenemententechnicus">
            <div class="info">
              <h4>Lieroy Bazoer</h4>
              <p>Evenemententechnicus</p>
            </div>
            <figure>
              <img src="/static/images/profile-photo.png">
            </figure>
          </div>
        </div>
        <div class="small-12 medium-4 large-3 columns">
          <div class="student ruimtelijkvormgeven">
            <div class="info">
              <h4>Lisette Hensen</h4>
              <p>Ruimtelijk Vormgeven</p>
            </div>
            <figure>
              <img src="/static/images/profile-photo.png">
            </figure>
          </div>
        </div>
        <div class="small-12 medium-4 large-3 columns"></div>
      </div>
    </div>
    {{-- dynamic part --}}
  <section class="site" ui-view></section>
  {{-- <div class="megadiv"></div> --}}
  {{ HTML::script('/static/components/jquery/dist/jquery.min.js') }}
  {{ HTML::script('/static/components/FitText.js/jquery.fittext.js') }}
  {{ HTML::script('/static/components/foundation/js/foundation.min.js') }}
  {{ HTML::script('https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyBICJ8HLPGMZjMcevK_R5kWFQLkVytHj7I') }}
  {{ HTML::script('/static/scripts/search.js') }}
  {{ HTML::script('/static/components/outdated-browser/outdatedbrowser/outdatedbrowser.min.js') }}
  {{ HTML::script('/static/angular-js/app.js') }}
  {{ HTML::script('/static/angular-js/routes.js') }}
  <div id="outdated"></div>
</body>
</html>