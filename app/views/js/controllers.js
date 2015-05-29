/**
 *
 * MaLinked Controllers
 *
 **/
angular.module('MaLinked.Controllers', [])

/*==========  Home  ==========*/

.controller('home', ['$scope', '$filter', '$rootScope', 'db',
    function($scope, $filter, $rootScope, db) {

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

        var getRandomFact = function() {
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

        /*==========  Search Bar Click Focus Search Input  ==========*/
        setTimeout(function() {
            if ($('header.home .content .search-bar input').length) {
                console.log('doet het wel');

                $('header.home .content .search-bar input').on('click', function() {
                    console.log('click');

                    setTimeout(function() {
                        if ($('#searchModal input').length) {
                            $('#searchModal input').focus();
                        }
                    }, 500);
                });
            }
        }, 1000);

        $('header.home .content .search-bar input').click(function() {
            console.log('click');
            setTimeout(function() {
                $('#searchModal input').focus();
            }, 3000);
        });

    }
])

/*==========  Profiel  ==========*/
.controller('profiel', ['$scope', '$state', '$stateParams', '$filter', '$rootScope', 'db',
    function($scope, $state, $stateParams, $filter, $rootScope, db) {


        $('#searchModal').foundation('reveal', 'close');
        var blockEqualize = $('.block');
        var blockEqualizeWidth = blockEqualize.width();
        $(blockEqualize).height(blockEqualizeWidth);

        // Retrieve a single student by slug
        var student = db.students.single({
            slug: $stateParams.student
        });

        $rootScope.headerClass = student.group.study.slug;

        // Loop through all info elements
        for (var key in student.info) {
            // Whenever a string is occurred
            if (typeof(student.info[key]) == "string") {
                student.info[key] = student.info[key].replace(db.br, '\n');
            }
        }

        // Maps shizzle
        var mapsLocation = student.info.location,
            geocoder = new google.maps.Geocoder(),
            styles = [{
                "featureType": "transit",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#ad30ad"
                }, {
                    "weight": 2.17
                }]
            }, {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "color": "#dc3480"
                }]
            }, {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "visibility": "simplified"
                }]
            }, {
                "featureType": "administrative",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "color": "#ffffff"
                }]
            }, {
                "featureType": "administrative",
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "road.local",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#b82172"
                }]
            }, {
                "featureType": "road.local",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "road.arterial",
                "elementType": "geometry.fill",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "color": "#b82172"
                }, {
                    "lightness": -30
                }, {
                    "gamma": 1.22
                }]
            }, {
                "featureType": "road.arterial",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "visibility": "off"
                }, {
                    "color": "#b82172"
                }, {
                    "lightness": -24
                }]
            }, {
                "featureType": "road",
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#f5c7e0"
                }]
            }, {
                "featureType": "road.arterial",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#ffffff"
                }]
            }, {
                "featureType": "poi",
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#f0a8cf"
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#8c1255"
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "water",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#850857"
                }]
            }, {
                "featureType": "administrative.country",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "color": "#800d4c"
                }, {
                    "weight": 1.9
                }]
            }, {
                "featureType": "administrative.province",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "visibility": "off"
                }, {
                    "color": "#c251c2"
                }]
            }, {
                "featureType": "water",
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "visibility": "off"
                }, {
                    "color": "#ffffff"
                }]
            }, {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "color": "#ffa8d9"
                }]
            }, {
                "featureType": "transit",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#db539e"
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#ffffff"
                }]
            }, {
                "featureType": "administrative.locality",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#ffbde1"
                }]
            }],
            contentString = '<div id="content">' +
            student.nameFirst + ' woont in ' + student.info.location +
            '</div>';


        geocoder.geocode({
            'address': mapsLocation
        }, function(results, status) {

            if (status == google.maps.GeocoderStatus.OK) {
                var latitude = results[0].geometry.location.lat(),
                    longitude = results[0].geometry.location.lng();
                $scope.map = {
                    center: {
                        latitude: latitude,
                        longitude: longitude
                    },
                    zoom: 13
                };

                $scope.options = {
                    scrollwheel: false,
                    panControl: false,
                    zoomControl: false,
                    mapTypeControl: false,
                    scaleControl: false,
                    streetViewControl: false,
                    overviewMapControl: false,
                    scrollwheel: false,
                    styles: styles
                };

                $scope.marker = {
                    id: 0,
                    coords: {
                        latitude: latitude,
                        longitude: longitude
                    }
                };

                $scope.marker.options = {
                    labelContent: contentString,
                    labelAnchor: "120 0",
                    labelClass: "marker-labels"
                };
            }
        });


        $rootScope.student = student;
    }
])

/*==========  Zoeken  ==========*/
.controller('login', ['$window',

    function($window) {
    	//console.log($window.location);
    	$window.location.href = $window.location.origin + "/dashboard/login";
    }
])

/*==========  Opleiding  ==========*/
.controller('opleiding', ['$scope', 'db', '$state', '$stateParams', '$rootScope',

    function($scope, db, $state, $stateParams, $rootScope) {
       	$scope.study = db.studies.single({
            slug: $stateParams.slug
        });

        $rootScope.headerClass = $scope.study.slug;
    }
])

.controller('klas', ['$scope', 'db', '$stateParams', '$rootScope',
    function($scope, db, $stateParams, $rootScope) {
        var klas = db.group.single({
            slug: $stateParams.slug
        });

        $scope.groep = klas;

        $rootScope.headerClass = klas.name;

         var blockEqualize = $('.block');
        var blockEqualizeWidth = blockEqualize.width();
        $(blockEqualize).height(blockEqualizeWidth);
    }
])