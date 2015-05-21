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
    {{-- dynamic part --}}
  <section class="site" ui-view></section>
  {{-- <div class="megadiv"></div> --}}
  {{ HTML::script('/static/components/jquery/dist/jquery.min.js') }}
  {{ HTML::script('/static/components/foundation/js/foundation.min.js') }}
  {{ HTML::script('https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyBICJ8HLPGMZjMcevK_R5kWFQLkVytHj7I') }}
  {{ HTML::script('/static/scripts/profile.js') }}
  {{ HTML::script('/static/components/outdated-browser/outdatedbrowser/outdatedbrowser.min.js') }}
  {{ HTML::script('/static/angular-js/app.js') }}
  {{ HTML::script('/static/angular-js/routes.js') }}
  <script type="text/javascript">
  var city = "Amsterdam";
  var geocoder;
  geocoder.geocode( {'address' : city}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
    }
  });

  $(document).ready(function(){
    function initialize() {
      geocoder = new google.maps.Geocoder();
      var mapOptions = {
        zoom: 8
      };
      var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  });
  </script>
  <div id="outdated"></div>
</body>
</html>