@extends('front.layouts.master')


@section('head-tag')
    <title>contact</title>
@endsection

@section('content')
	 	        <div class="breadcrumb-area bg-img" style="background-image:url({{asset('front-assets/images/bg/breadcrumb.jpg')}});">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>contact page</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="active">contact us </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="contact-area pt-85 pb-90">
            <div class="container">
                <div class="contact-info-wrap mb-50">
                    <h3>contact info</h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="single-contact-info text-center mb-30">
                                <i class="ti-location-pin"></i>
                                <h4>our address</h4>
                                <p>77 seventh Street, USA. </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-contact-info extra-contact-info text-center mb-30">
                                <ul>
                                    <li><i class="ti-mobile"></i> 716-298-1822 </li>
                                    <li><i class="ti-email"></i> <a href="#"> info@example.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-contact-info text-center mb-30">
                                <i class=" ti-alarm-clock"></i>
                                <h4>openning hour</h4>
                                <p>Monday - Friday. 9:00am - 5:00pm </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="get-in-touch-wrap">
                    <h3>Get In Touch</h3>
                    <div class="contact-from contact-shadow">
                        <form id="contact-form" action="assets/mail.php" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input name="name" type="text" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <input name="email" type="email" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <input name="subject" type="text" placeholder="Subject">
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="message" placeholder="Your Message"></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <button class="submit" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
                <div class="contact-map pt-90">
                    <div id="map"></div>
                </div>
            </div>
        </div>
@endsection




@section('script')
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGM-62ap9R-huo50hJDn05j3x-mU9151Y"></script>
    <script>
        function init() {
            var mapOptions = {
                zoom: 11,
                scrollwheel: false,
                center: new google.maps.LatLng(40.709896, -73.995481),
                styles: [{
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#6195a0"
                        }]
                    },
                    {
                        "featureType": "administrative.province",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [{
                                "lightness": "0"
                            },
                            {
                                "saturation": "0"
                            },
                            {
                                "color": "#f5f5f2"
                            },
                            {
                                "gamma": "1"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape.man_made",
                        "elementType": "all",
                        "stylers": [{
                                "lightness": "-3"
                            },
                            {
                                "gamma": "1.00"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape.man_made",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#f8f8f8"
                        }]
                    },
                    {
                        "featureType": "landscape.natural.terrain",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi.attraction",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi.business",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi.government",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi.medical",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#e6f2da"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi.place_of_worship",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi.school",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi.sports_complex",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [{
                                "saturation": -100
                            },
                            {
                                "lightness": 45
                            },
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#f9d6b5"
                            },
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels.text",
                        "stylers": [{
                            "color": "#4e4e4e"
                        }]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#787878"
                        }]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#e5e5e5"
                        }]
                    },
                    {
                        "featureType": "transit.station.airport",
                        "elementType": "labels.icon",
                        "stylers": [{
                                "hue": "#0a00ff"
                            },
                            {
                                "saturation": "-77"
                            },
                            {
                                "gamma": "0.57"
                            },
                            {
                                "lightness": "0"
                            },
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.station.bus",
                        "elementType": "labels.icon",
                        "stylers": [{
                                "visibility": "on"
                            },
                            {
                                "hue": "#008eff"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.station.rail",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#43321e"
                        }]
                    },
                    {
                        "featureType": "transit.station.rail",
                        "elementType": "labels.icon",
                        "stylers": [{
                                "hue": "#005dff"
                            },
                            {
                                "lightness": "4"
                            },
                            {
                                "gamma": "0.75"
                            },
                            {
                                "saturation": "-68"
                            },
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [{
                                "color": "#eaf6f8"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#cbeefa"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                                "lightness": "-49"
                            },
                            {
                                "saturation": "-53"
                            },
                            {
                                "gamma": "0.79"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    }
                ]
            };
            var mapElement = document.getElementById('map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.709896, -73.995481),
                map: map,
                icon: 'assets/images/icon-img/2.png',
                animation: google.maps.Animation.BOUNCE,
                title: 'Snazzy!'
            });
        }
        google.maps.event.addDomListener(window, 'load', init);
    </script>
@endsection