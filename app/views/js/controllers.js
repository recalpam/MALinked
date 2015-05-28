/**
 *
 * MaLinked Controllers
 *
 **/
angular.module('MaLinked.Controllers', [])

/*==========  Home  ==========*/

.controller('home', ['$scope', '$filter', '$rootScope', 'db',
  function ($scope, $filter, $rootScope, db) {

    var facts = {
      0: '‘Uncomfortable art Biënnale’ het meest favoriete project van de grafische vormgevers is?',
      1: 'Jelle Sjollema de meest favoriete docent van media- en gamedevelopment is?',
      2: '8 de gemiddelde beoordeling van de school is?',
      3: '7,9 de gemiddelde beoordeling van de stageperiode is?',
      4: 'Frederik de Groot de meeste favoriete docent van filmacteur is?',
      5: '29 studenten hun stageperiode een 10 hebben gegeven?',
      6: 'Er 488 studenten afstuderen dit jaar?',
      7: 'Evenemententechnicus de kleinste opleiding is met 3 studenten?',
      8: 'AV4A de grootste klas is met 32 studenten?'
    };

    var getRandomFact = function () {
      var give;
      var keys = Object.keys(facts);
      var rand = keys[keys.length * Math.random() << 0];

      if (facts[rand] != null) {
        var chosen = facts[rand];

        give = {
          'isFact': true,
          'answer': chosen
        };

        return give;
      }

      return getRandomFact();
    }

    var overview = {
      'Aa': {
        'study': db.studies.single({
          slug: 'grafisch-vormgever'
        }),
        'htmlClass': 'grafischvormgeven'
      },
      'Ab': {
        'study': db.studies.single({
          slug: 'interactief-vormgever'
        }),
        'htmlClass': 'interactiefvormgeven'
      },
      'Ac': {
        'study': db.studies.single({
          slug: 'audiovisueel-vormgeveranimatie'
        }),
        'htmlClass': 'audiovisueel'
      },
      'Ad': {
        'study': db.studies.single({
          slug: 'dtp-er'
        }),
        'htmlClass': 'dtper'
      },
      'Ae': {
        'study': db.studies.single({
          slug: 'mediamanager'
        }),
        'htmlClass': 'mediamanager'
      },
      'Af': {
        'study': db.studies.single({
          slug: 'av-technicus'
        }),
        'htmlClass': 'audiovisueeltechnicus'
      },
      'Ag': {
        'study': db.studies.single({
          slug: 'evenemententechnicus'
        }),
        'htmlClass': 'evenemententechnicus'
      },
      'Ah': getRandomFact(),
      'Ai': getRandomFact(),
      'Aj': {
        'study': db.studies.single({
          slug: 'geluidstechnicus'
        }),
        'htmlClass': 'geluidtechnicus'
      },
      'Ak': {
        'study': db.studies.single({
          slug: 'media-en-gamedeveloper'
        }),
        'htmlClass': 'mediaengamedeveloper'
      },
      'Al': {
        'study': db.studies.single({
          slug: 'ruimtelijk-vormgever'
        }),
        'htmlClass': 'ruimtelijkvormgeven'
      },
      'Am': {
        'study': db.studies.single({
          slug: 'podiumtechnicus'
        }),
        'htmlClass': 'podiumtechnicus'
      },
      'An': {
        'study': db.studies.single({
          slug: 'filmacteur'
        }),
        'htmlClass': 'filmacteur'
      },
      'Ao': {
        'study': db.studies.single({
          slug: 'signmaker'
        }),
        'htmlClass': 'signmaker'
      },
      'Ap': {
        'study': db.studies.single({
          slug: 'game-artist'
        }),
        'htmlClass': 'gameartist'
      }
    };

    $scope.studies = overview;
  }
])

/*==========  Profiel  ==========*/
.controller('profiel', ['$scope', '$state', '$stateParams', '$filter', '$rootScope', 'db',
  function ($scope, $state, $stateParams, $filter, $rootScope, db) {
    $('#searchModal').foundation('reveal', 'close');
    var blockEqualize = $('.block');
    var blockEqualizeWidth = blockEqualize.width();
    $(blockEqualize).height(blockEqualizeWidth);

    $rootScope.student = db.students.single({
      slug: $stateParams.student
    });


    /*==========  Google Maps  ==========*/

    var mapsData = document.querySelector('#google-maps'),
      mapsLocation = mapsData.dataset.location,
      mapsName = mapsData.dataset.name,
      map,
      malinked_map = new google.maps.LatLng(mapsLocation);

    /**
     * The CenterControl adds a control to the map that recenters the map on Chicago.
     * This constructor takes the control DIV as an argument.
     * @constructor
     */
    function CenterControl(controlDiv, map) {

      // Set CSS for the control border
      var controlUI = document.createElement('div');
      controlUI.style.backgroundColor = '#77b93a';
      controlUI.style.borderRadius = '3px';
      controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
      controlUI.style.cursor = 'pointer';
      controlUI.style.marginBottom = '22px';
      controlUI.style.textAlign = 'center';
      controlUI.title = 'Klik om een route te berekenen';
      controlDiv.appendChild(controlUI);

      // Set CSS for the control interior
      var controlText = document.createElement('div');
      controlText.style.color = '#333333';
      controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
      controlText.style.fontSize = '16px';
      controlText.style.lineHeight = '38px';
      controlText.style.paddingLeft = '15px';
      controlText.style.paddingRight = '15px';
      controlText.innerHTML = 'Locatie';
      controlUI.appendChild(controlText);

    }

    // Scroll Effect
    function initialize() {
      var mapDiv = document.getElementById('map-canvas');

      // Create an array of styles.
      var styles = [{
        "featureType": "all",
        "elementType": "all",
        "stylers": [{
          "invert_lightness": true
        }, {
          "hue": "#ff1a00"
        }, {
          "saturation": -100
        }, {
          "lightness": 33
        }, {
          "gamma": 0.5
        }]
      }, {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{
          "color": "#2D333C"
        }]
      }];

      // Create a new StyledMapType object, passing it the array of styles,
      // as well as the name to be displayed on the map type control.
      var styledMap = new google.maps.StyledMapType(styles, {
        name: "Styled Map"
      });


      // Create a map object, and include the MapTypeId to add
      // to the map type control.
      var mapOptions = {
        zoom: 14,
        center: malinked_map,
        panControl: false,
        zoomControl: false,
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        overviewMapControl: false,
        scrollwheel: false,
        mapTypeControlOptions: {
          mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
        }
      }
      map = new google.maps.Map(mapDiv, mapOptions);


      //Associate the styled map with the MapTypeId and set it to display.
      map.mapTypes.set('map_style', styledMap);
      map.setMapTypeId('map_style');

      // Create the DIV to hold the control and
      // call the CenterControl() constructor passing
      // in this DIV.
      var centerControlDiv = document.createElement('div');
      var centerControl = new CenterControl(centerControlDiv, map);

      centerControlDiv.index = 1;
      map.controls[google.maps.ControlPosition.BOTTOM_CENTER].push(centerControlDiv);
    }

    google.maps.event.addDomListener(window, 'load', initialize);

  }
])

/*==========  Zoeken  ==========*/
.controller('zoeken', [

  function () {

  }
])

/*==========  Opleiding  ==========*/
.controller('opleiding', [

  function () {

  }
])