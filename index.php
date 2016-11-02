<!DOCTYPE html>

<html>
    <head><!-- START HEAD -->

        <meta name="google-site-verification" content="VUd0e-LBApFLPXSopenbLiKzr8HJIYGW-BDwt45IYcI" />

        <meta name="msvalidate.01" content="9BD0FE48923191F095F33FDD4A40A81F" />

        <meta charset="utf-8">
        <!-- START TITLE -->
        <title>MyTourDriver Sri Lanka Official Site </title>
        <!-- END TITLE -->


        <meta name="author" content="" />

        <!-- END META, DESCRIPTION, KEYWORDS, AUTHOR -->
        <script type="text/javascript">

            var js_base_url = "";
            var js_site_url = "";

        </script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- START THEME STYLE -->
        <link href="http://localhost/mytourdriver/application_resources/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
        <link href="http://localhost/mytourdriver/application_resources/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="http://localhost/mytourdriver/application_resources/css/template.css" rel="stylesheet" type="text/css">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <!--new-->
        <link href="http://localhost/mytourdriver/application_resources/css/nx.css" rel="stylesheet" type="text/css"/>
        <link href="http://localhost/mytourdriver/application_resources/css/slider-style.css" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" href="http://localhost/mytourdriver/application_resources/css/build.css" type="text/css">


        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

        <!--menu css-->
        <link href="http://localhost/mytourdriver/application_resources/css/styles-m.css" rel="stylesheet" type="text/css"/>

        <!-- END THEME STYLE -->
        <!--owl carousel-->
        <link rel="stylesheet" href="http://localhost/mytourdriver/application_resources/css/owl.carousel.css">
        <link rel="stylesheet" href="http://localhost/mytourdriver/application_resources/css/owl.theme.css">

        <!--hover effects-->
        <link rel="stylesheet" href="http://localhost/mytourdriver/application_resources/css/style.css" />
        <!-- date time picker -->

        <link rel="stylesheet" type="text/css" href="http://localhost/mytourdriver/application_resources/css/jquery.datetimepicker.css"/>
        <!-- date time picker -->
        <!-- LOAD GOOGLE FONT OPEN SANS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,400italic,500,500italic,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400italic,400,700,300' rel='stylesheet' type='text/css'>
        <!-- END GOOGLE FONT OPEN SANS -->

        <!--         START FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="http://localhost/mytourdriver/application_resources/images/taxi-icon.png">
        <style type="text/css">
            .error{
                font-size: 10px;
                color: red !important;
                font-weight: bold;
            }

            .custom-date-style {
                background-color: red !important;
            }


        </style>

    </head>

    <!-- END HEAD -->

    <body onload="initialize()">
        <script src="http://localhost/mytourdriver/application_resources/js/jquery-1.11.2.min.js" type="text/javascript"></script>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

        <link rel="stylesheet" type="text/css" href="http://localhost/mytourdriver/application_resources/css/build/css/demo.css"/>
        <link rel="stylesheet" type="text/css" href="http://localhost/mytourdriver/application_resources/css/country/css/countrySelect.css"/>
        <link rel="stylesheet" href="http://localhost/mytourdriver/application_resources/css/build.css" type="text/css">
        <script src="http://localhost/mytourdriver/application_resources/css/country/js/countrySelect.min.js" type="text/javascript"></script>

        <script>

        $('#country').countrySelect({
            //  defaultCountry: "lk",
        });

        </script>

        <!--      SITE  -->
        <script>
            $('input[name="country"]').countrySelect({
                //  defaultCountry: "lk"
                defaultCountry: "auto"
            });
        </script>

        <script>

            $(window).load(function () {
                var countryCode = $('input[name="telephone"]').intlTelInput("getSelectedCountryData").iso2;
                // alert(countryData.iso2);
                $('input[name="country"]').countrySelect("selectCountry", countryCode);

            });

        </script>


        <!--header start-->
        
        <?php include("./application/views/header.php"); ?>

        <!--header end-->
       
        <script>
            $('input[name=stdate] ').datetimepicker({
                dayOfWeekStart: 1,
                lang: 'en',
                minDate: 0,
                timepicker: false,
                format: 'd/m/Y'
            });

        </script>
        <div class="slider-warpper">
            <div class="search-wrap clearfix" style="width: 483px;opacity: 0.91">
                <div role="tabpanel" style="width: 483px;">
                    <!--Nav tabs--> 
                    <ul class="nav nav-tabs" role="tablist">

                        <li role="presentation" style="width: 161px;">
                            <a class="withDriver" href="#withDriver" aria-controls="with Driver" role="tab" data-toggle="tab">
                                <img data-toggle="tooltip" data-placement="bottom" title="With Driver" class="visible-xs" src="http://localhost/mytourdriver/application_resources/images/driver-icon.png">
                                <span class="hidden-xs"> With Driver</span>
                            </a>
                        </li>
                        <li role="presentation" style="width: 161px;">
                            <a class="taxi" href="#taxi" aria-controls="Taxi" role="tab" data-toggle="tab">
                                <img data-toggle="tooltip" data-placement="bottom" title="Drop & Pickup" class="visible-xs" src="http://localhost/mytourdriver/application_resources/images/taxi-icon.png">
                                <span class="hidden-xs">Drop & Pickup (Taxi)</span>
                            </a>
                        </li>
                        <li role="presentation" style="width: 161px;">
                            <a class="airport" href="#airport" aria-controls="Airport Transfer" role="tab" data-toggle="tab">
                                <img data-toggle="tooltip" data-placement="bottom" title="Airport Transfer" class="visible-xs" src="http://localhost/mytourdriver/application_resources/images/airport.png">
                                <span class="hidden-xs">Airport Transfer</span>
                            </a>
                        </li>
                    </ul>

                    <!--Self Driver Tab panes--> 
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="withDriver">

                            <form id="get_search_form1" action="application/views/search_result.php" method="post">

                                <div class="form-group col-sm-12">
                                    <label class="control-label"><strong>PickUp Location</strong> </label>
                                    <select class="form-control" name="pick_location" id="pick_location" autocomplete="off">
                                        <option value="">- PICKUP LOCATION -</option>
                                        <option value="1">Bandaranayake International Airport</option>
                                        <option value="2">Colombo</option>


                                    </select>

                                    <input id="location_checkbox_sd" type="checkbox" value="1" name="checkbox_location">
                                    <label for="location_checkbox"> Return at Different Location</label>
                                </div>

                                <div class="form-group col-sm-12" id="ret_location_row_sd" style="display: none;">
                                    <label class="control-label"><strong>Return Location</strong> </label>
                                    <select class="form-control" name="ret_location" id="ret_location" autocomplete="off">

                                        <option value="">- RETURN LOCATION -</option>
                                        <option value="1">Bandaranayake International Airport</option>
                                        <option value="2">Colombo</option>


                                    </select>
                                </div>

                                <div class="form-group col-sm-4 search-form-date-padding">
                                    <label class="control-label"><strong>Pickup Date</strong> </label>
                                    <input type="text" class="form-control " name="stdate" id="stdate_sd1" placeholder="Pick-Up Date" value="28/10/2016">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label class="control-label"><strong>Time</strong> </label>
                                    <input type="text" class="form-control " name="sttime" id="sttime_sd1" placeholder="Time" value="00:00">
                                </div>

                                <div class="form-group col-sm-4 search-form-date-padding">
                                    <label class="control-label"><strong>Return Date</strong> </label>
                                    <input type="text" class="form-control " name="enddate" id="enddate_sd1" placeholder="Drop-Off Date" value="28/10/2016">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label class="control-label"><strong>Time</strong> </label>
                                    <input type="text" class="form-control " name="endtime" id="endtime_sd1" placeholder="Time" value="00:00">
                                </div>

                                <div class="form-group col-sm-6">
                                    <label class="control-label"><strong>Number of Days</strong> </label>
                                    <input type="text" class="form-control" name="num_days" id="num_days_sd1" placeholder="Number of Days" value="1" readonly>
                                </div>


                                <div class="form-group col-sm-6">
                                    <label class="control-label"><strong>Vehicle Type</strong> </label>
                                    <select class="form-control" name="car_type" id="car_type" autocomplete="off">
                                        <!--<option value="">- Vehicle Category -</option>-->
                                        <option value="0">- All Type -</option>
                                        <option value="52">Motor Bike</option>
                                        <option value="22">Cars</option>
                                        <option value="24"> SUV's</option>
                                        <option value="27"> 4*4 Cabs</option>
                                        <option value="23">Vans</option>
                                        <option value="54">Bus</option>
                                        <option value="53">Lorry</option>
                                    </select>
                                </div>



                                <div class="form-group col-sm-12">
                                    <label class="control-label"><strong>Currency Type</strong> </label>
                                    <select class="form-control" name="currency" id="currency" autocomplete="off">
                                        <option value="">- CURRENCY -</option>
                                        <option value="2"
                                                selected  >Sri Lankan Rupee (LKR)</option>

                                    </select>
                                </div>

                                <input type="hidden" class="form-control" name="service" id="service" value="SD">


                                <div class="form-group col-sm-12">
                                    <div id="send_enquiry_search" style="margin-bottom: 10px;"></div>
                                    <input class="btn btn-danger pull-right" type="submit" value="Search"/>
                                </div>

                            </form>

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="airport">

                            <form id="get_search_form3" action="#" method="post">

                                <div class="form-group col-sm-12">
                                    <label class="control-label"><strong>pickup location</strong> </label>
                                    <select class="form-control" name="pick_location" id="pick_location_air" autocomplete="off" onchange="GetRouteAir()">
                                        <option value="">- PICKUP LOCATION -</option>
                                        <option value="1"
                                                selected
                                                >
                                            Bandaranayake International Airport</option>
                                        <option value="2"
                                                >
                                            Colombo</option>


                                    </select>
                                </div>

                                <div class="form-group col-sm-12" id="ret_location_row" >
                                    <label class="control-label"><strong>return location</strong> </label>
                                    <select class="form-control" name="ret_location" id="ret_location_air" autocomplete="off" onchange="GetRouteAir()">
                                        <option value="">- RETURN LOCATION -</option>
                                        <option value="1"
                                                >Bandaranayake International Airport</option>
                                        <option value="2"
                                                selected
                                                >Colombo</option>

                                    </select>
                                </div>

                                <div id="drop_hotel" name="drop_hotel">


                                </div>


                                <div class="form-group col-sm-6">
                                    <label class="control-label"><strong>pickup date</strong> </label>
                                    <input type="text" class="form-control " name="stdate" id="stdate" placeholder="Pick-Up Date and Time" value="28/10/2016">
                                </div>

                                <div class="form-group col-sm-6">
                                    <label class="control-label"><strong>time</strong> </label>
                                    <input type="text" class="form-control " name="sttime" id="sttime" placeholder="Time" value="00:00">
                                </div>

                                <div class="form-group col-sm-12">
                                    <label class="control-label"><strong>currency type</strong> </label>
                                    <select class="form-control" name="currency" id="currency" autocomplete="off">
                                        <option value="">- CURRENCY -</option>
                                        <option value="2"
                                                selected                                        >Sri Lankan Rupee (LKR)</option>
                                        <!--<option value="lkr">LKR</option>-->
                                    </select>
                                </div>
                                <input type="hidden" class="form-control" name="service" id="service" value="AP">


                                <div id="dvDistanceair" style="display: none">
                                </div>

                                <div class="form-group col-sm-12">
                                    <div id="send_enquiry_search" style="margin-bottom: 10px;"></div>
                                    <input class="btn btn-danger pull-right" type="submit" value="Search"/>
                                </div>

                            </form>

                            <!--for map-->

                            <div class="map-wrap">

                                <div id="dvMapair" style="width:100%; height: 300px; display: none">

                                </div>
                            </div>

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="taxi">

                            <form id="get_search_form5" action="#" method="post">

                                <div class="form-group col-sm-offset-4" style=" transform: scale(1.3);" >
                                    <input type="radio" id="oneway" name="ways" value="1" checked> One Way
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" id="twoway" name="ways" value="2"> Both Way
                                </div>

                                <div class="form-group col-sm-12">
                                    <label class="control-label"><strong>PickUp Location</strong> </label>
                                    <select class="form-control pickup_loc "  name="pick_location" id="pick_location_taxi" autocomplete="off" onchange="GetRouteTaxi()" >
                                        <option value="2"selected> Colombo</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-12" id="ret_location_row" >
                                    <label class="control-label"><strong> Drop-off Location</strong></label>
                                    <select class="form-control return_loc" id="ret_location_taxi" name="ret_location"  autocomplete="off" onchange="GetRouteTaxi()">
                                        <!--<option value="">- RETURN LOCATION -</option>-->
                                        <option value="1"  >Bandaranayake International Airport</option>
                                        <option value="2"selected> Colombo</option>


                                    </select>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label class="control-label"> <strong>PickUp Date </strong></label>
                                    <input type="text" class="form-control " name="stdate" id="stdate" placeholder="Pick-Up Date and Time" value="28/10/2016" >
                                </div>

                                <div class="form-group col-sm-6">
                                    <label class="control-label"><strong> Time</strong></label>
                                    <input type="text" class="form-control " name="sttime" id="sttime" placeholder="Time" value="00:00">
                                </div>

                                <div class="form-group col-sm-12">
                                    <label class="control-label"><strong> Currency</strong></label>
                                    <select class="form-control" name="currency" id="currency" autocomplete="off">
                                        <option value="">- CURRENCY -</option>
                                        <option value="2"
                                                selected >Sri Lankan Rupee (LKR)</option>

                                    </select>
                                </div>

                                <input type="hidden" class="form-control" name="service" id="service" value="TX">
                                <div id="dvDistancetaxi" style="display: none">
                                </div>

                                <div class="form-group col-sm-12">
                                    <div id="send_enquiry_search" style="margin-bottom: 10px;"></div>
                                    <input class="btn btn-danger pull-right" type="submit" value="Search"/>
                                </div>

                            </form>

                            <!--for map-->
                            <div class="map-wrap">
                                <div id="dvMaptaxi" style="width:100%; height: 300px; display: none">
                                </div>
                            </div>
                            <!--for map-->
                        </div>

                    </div>
                </div>
            </div>  

            <div id="home-slider" class="owl-carousel owl-theme">

                <div class="item  ">

                    <img src="#"
                         alt="">

                    <div class="slider-discription">

                        <h1><br> In Sri Lanka</h1>

                        <p><p><br />
                            <br />
                            <strong>Call us Now! +94 000 000 000</strong></p>
                        </p>


                        <div class="sliderreadmore">

                            <a class="btn btn-border" href="services/wedding-vip">View More</a>

                        </div>

                    </div>

                </div>


                <div class="item  ">

                    <img src="#"
                         alt="">

                    <div class="slider-discription">

                        <h1></h1>

                        <p><p><br />
                            <br />
                            <strong>Call us Now! +94 000 000 000</strong></p>
                        </p>


                        <div class="sliderreadmore">

                            <a class="btn btn-border" href="services/4-4-rentals">View More</a>

                        </div>

                    </div>

                </div>


                <div class="item  ">

                    <img src="#"
                         alt="">

                    <div class="slider-discription">

                        <h1></h1>

                        <p><p></p>

                        <p><strong>Call us Now! +94 000 000 000</strong></p>
                        </p>


                        <div class="sliderreadmore">

                            <a class="btn btn-border" href="#">View More</a>

                        </div>

                    </div>

                </div>


                <div class="item  ">

                    <img src="#"
                         alt="">

                    <div class="slider-discription">

                        <h1></h1>

                        <p><p><br />
                            <br />
                            <strong>Call us Now! +94 000 000 000</strong></p>
                        </p>


                        <div class="sliderreadmore">

                            <a class="btn btn-border" href="#">View More</a>

                        </div>

                    </div>

                </div>


                <div class="item  ">

                    <img src="#"
                         alt="">

                    <div class="slider-discription">

                        <h1></h1>

                        <p><p><strong>Call us Now! +94 000 000 000</strong></p>
                        </p>



                    </div>

                </div>


                <div class="item  ">

                    <img src="http://localhost/mytourdriver/application_resources/images/slider/doubleCab.jpg"
                         alt="mytour" style="height: 470px">

                    <div class="slider-discription">

                        <h1>Double Cab Tour <br/> Sri Lanka </h1>

                        <p></p>



                    </div>

                </div>
            </div>

            <!--end slider ////////////////////////////////////////////////////-->

        </div>


        <div class="offers-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center"> Best Offers In my tour Driver</h1>
                        <div id="effect-6" class="effects clearfix">
                            <div id="offers-slider" class="owl-carousel owl-theme">
                                <!-- start Item -->

                                <div class="item img">
                                    <img class="img-responsive"
                                         src="http://localhost/mytourdriver/application_resources/images/slider/doubleCab.jpg"
                                         alt="Hire Nissan March">
                                    <div class="car-details clearfix">
                                        <span class="car-name">Nissan March</span>
                                        <span class="car-details-price">
                                            <h1> </h1>
                                            <span>per a day</span>
                                        </span>
                                    </div>
                                    <div class="overlay">
                                        <div class="expand">
                                            <a class=" btn btn-border" data-toggle="modal" data-target="#myModal" onclick="viewModelDetails(32)"  href="#">View Detail</a>
                                            </br>
                                            <a class=" btn btn-border" data-toggle="modal" data-target="#myInq" onclick="inquiryModel(32)">Make  Enquiry</a></br>
                                            <a class="close-overlay hidden">x</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end Item -->

                            </div>

                            <div class="customNavigation">

                                <a class="prev nav-btn">Previous</a>

                                <a class="next nav-btn">Next</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!--/ end offers /////////////////////////////////////////////////////////////////////////////////////////-->

        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD8ZxPsZvhkaYCPbncCS52YUwUkTpJ3sxw"></script>
        <script type="text/javascript">

                                                var source, destination;
                                                var directionsDisplay;
                                                var directionsService = new google.maps.DirectionsService();
                                                google.maps.event.addDomListener(window, 'load', function () {
                                                    // new google.maps.places.SearchBox(document.getElementById('txtSource'));
                                                    // new google.maps.places.SearchBox(document.getElementById('txtDestination'));
                                                    directionsDisplay = new google.maps.DirectionsRenderer({'draggable': true});
                                                });

                                                function GetRouteAir() {

                                                    $('#dvMapair').show();

                                                    var SLanka = new google.maps.LatLng(7.0000, 81.0000);
                                                    var mapOptions = {
                                                        zoom: 10,
                                                        center: SLanka
                                                    };
                                                    map = new google.maps.Map(document.getElementById('dvMapair'), mapOptions);
                                                    directionsDisplay.setMap(map);
                                                    directionsDisplay.setPanel(document.getElementById('dvPanelair'));

                                                    //*********DIRECTIONS AND ROUTE**********************//
                                                    source = $('#pick_location_air  option:selected').text();
                                                    destination = $('#ret_location_air  option:selected').text();

                                                    //  source = document.getElementById("txtSource").value;
                                                    //  destination = document.getElementById("txtDestination").value;

                                                    var request = {
                                                        origin: source,
                                                        destination: destination,
                                                        travelMode: google.maps.TravelMode.DRIVING
                                                    };
                                                    directionsService.route(request, function (response, status) {
                                                        if (status == google.maps.DirectionsStatus.OK) {
                                                            directionsDisplay.setDirections(response);
                                                        }
                                                    });

                                                    //*********DISTANCE AND DURATION**********************//
                                                    var service = new google.maps.DistanceMatrixService();
                                                    service.getDistanceMatrix({
                                                        origins: [source],
                                                        destinations: [destination],
                                                        travelMode: google.maps.TravelMode.DRIVING,
                                                        unitSystem: google.maps.UnitSystem.METRIC,
                                                        avoidHighways: false,
                                                        avoidTolls: false
                                                    }, function (response, status) {
                                                        if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
                                                            var distance = response.rows[0].elements[0].distance.text;
                                                            var duration = response.rows[0].elements[0].duration.text;
                                                            var dvDistance = document.getElementById("dvDistanceair");
                                                            dvDistance.innerHTML = "";
                                                            dvDistance.innerHTML += "Distance:" + " <input type='hidden' id='length' name='length' value='" + distance + "'>" + distance + "<br />";
                                                            dvDistance.innerHTML += "Duration:" + duration;

                                                        } else {
                                                            alert("Unable to find the distance via road.");
                                                        }
                                                    });
                                                }


                                                function GetRouteTaxi() {
                                                    //  source = $('#pick_location_taxi  option:selected').text();
                                                    //  destination = $('#ret_location_taxi  option:selected').text();

                                                    // if (source != destination){
                                                    $('#dvMaptaxi').show();
                                                    //}else{
                                                    //  $('#dvMaptaxi').hide();
                                                    // }

                                                    var SLanka = new google.maps.LatLng(7.0000, 81.0000);
                                                    var mapOptions = {
                                                        zoom: 10,
                                                        center: SLanka
                                                    };
                                                    map = new google.maps.Map(document.getElementById('dvMaptaxi'), mapOptions);
                                                    directionsDisplay.setMap(map);
                                                    directionsDisplay.setPanel(document.getElementById('dvPaneltaxi'));

                                                    //*********DIRECTIONS AND ROUTE**********************//

                                                    source = $('#pick_location_taxi  option:selected').text();
                                                    destination = $('#ret_location_taxi  option:selected').text();

                                                    //  source = document.getElementById("txtSource").value;
                                                    //  destination = document.getElementById("txtDestination").value;

                                                    var request = {
                                                        origin: source,
                                                        destination: destination,
                                                        travelMode: google.maps.TravelMode.DRIVING
                                                    };
                                                    directionsService.route(request, function (response, status) {
                                                        if (status == google.maps.DirectionsStatus.OK) {
                                                            directionsDisplay.setDirections(response);
                                                        }
                                                    });

                                                    //*********DISTANCE AND DURATION**********************//
                                                    var service = new google.maps.DistanceMatrixService();
                                                    service.getDistanceMatrix({
                                                        origins: [source],
                                                        destinations: [destination],
                                                        travelMode: google.maps.TravelMode.DRIVING,
                                                        unitSystem: google.maps.UnitSystem.METRIC,
                                                        avoidHighways: false,
                                                        avoidTolls: false
                                                    }, function (response, status) {
                                                        if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
                                                            var distance = response.rows[0].elements[0].distance.text;
                                                            var duration = response.rows[0].elements[0].duration.text;
                                                            var dvDistance = document.getElementById("dvDistancetaxi");
                                                            dvDistance.innerHTML = "";
                                                            dvDistance.innerHTML += "Distance:" + " <input type='hidden' id='length' name='length' value='" + distance + "'>" + distance + "<br />";
                                                            dvDistance.innerHTML += "Duration:" + duration;

                                                        } else {
                                                            alert("Unable to find the distance via road.");
                                                        }
                                                    });
                                                }

        </script>
        <script>
            function viewModelDetails(modelid) {
                alert(modelid);
                $.ajax({
                    type: 'POST',
                    url: site_url + '/article_controller/viewVehicleModelDetail',
                    data: {'modelid': modelid},
                    success: function (msg) {
                        $("#vehicle_model_detail").html(msg);
                    },
                    error: function (msg) {
                        alert("Error!");
                    }
                });
            }

            function inquiryModel(modelid) {
                alert(modelid);
                $.ajax({
                    type: 'POST',
                    url: site_url + 'article_controller/getVehicleModel',
                    // data: 'bookingid=' + bookingid,
                    data: {'modelid': modelid},
                    success: function (msg) {
                        //$("#vehiclet").val(msg);
                        $("#modeldiv").html(msg);
                    },
                    error: function (msg) {
                        alert("Error!");
                    }
                });
            }
        </script>



        <!--car details Modal /////////////////////////////////////////////////////////////////////////////////////////-->

        <div class="modal-blue modal fade" id="mycardetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div id="vehicle_model_detail">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end car details Modal -->

       
        <!--booking details modal/////////////////////////////////////////////////////////////////////////////////-->
        <div class="modal-blue modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                </div>
            </div>
        </div>
        <!-- end booking details modal-->
        <!--car details Modal -->
        <div class="modal-blue modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-responsive" src="http://localhost/mytourdriver/application_resources/images/slider/doubleCab.jpg">
                            </div>
                            <div class="col-md-7">
                                <h1>Toyota Allion 240 - Self Driven</h1>
                                <div class="row">
                                    <div class="col-sm-7">
                                        <ul class="list-unstyled car-featured-list">
                                            <li><i class="fa fa-male"></i> 10 Passengers</li>
                                            <li><i class="fa fa-cog"></i> Auto transmission</li>
                                            <li><i class="fa fa-sun-o"></i> Air conditioning</li>
                                            <li><i class="fa fa-road"></i> Free mileage: 150KM</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-5">
                                        <span class="car-details-price">
                                            <h1><small>LKR</small>80</h1>
                                            <span>per a day</span>
                                        </span>
                                        <div class="clearfix"></div>
                                        <div class="text-right small-text">Refundable Deposit</div>
                                        <a class=" btn btn-lg btn-danger pull-right" data-toggle="modal" data-target="#myModal2" onclick="">Book Now</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end car details Modal -->
        <!--end testimonails -->

        <!--start footer wrap-->

       <?php include("./application/views/footer.php"); ?>

        <!-- end footer wrap-->



        <!-- START JQUERY PLUGINS LOAD -->
        <script src="http://localhost/mytourdriver/application_resources/js/jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="http://localhost/mytourdriver/application_resources/js/bootstrap.js" type="text/javascript"></script>
        <script src="http://localhost/mytourdriver/application_resources/js/owl.carousel.js"></script>
        <script src="http://localhost/mytourdriver/application_resources/js/modernizr.js"></script>
        <script src="http://localhost/mytourdriver/application_resources/js/placeholders.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js"></script>



        <script src="http://localhost/mytourdriver/application_resources/js/jquery-ui.js"></script>
        <!-- date time picker -->
        <script src="http://localhost/mytourdriver/application_resources/js/jquery.datetimepicker.js"></script>

        <!-- date time picker -->

        <!--menu js-->
        <script src="http://localhost/mytourdriver/application_resources/js/script.js" type="text/javascript"></script>
        <!--tooltip-->
        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            });
        </script>

        <!--owl carousal-->
        <script>
            $(document).ready(function () {

                $("#home-slider").owlCarousel({
                    navigation: false, // Show next and prev buttons
                    slideSpeed: 800,
                    paginationSpeed: 400,
                    singleItem: true,
                    autoPlay: 9000,
                    // Responsive
                    responsive: true,
                    responsiveRefreshRate: 200,
                    responsiveBaseWidth: window

                });

            });

        </script>
        <script>
            $(document).ready(function () {

                $("#testi-slider").owlCarousel({
                    navigation: false, // Show next and prev buttons
                    slideSpeed: 300,
                    paginationSpeed: 400,
                    singleItem: true,
                    // Responsive
                    responsive: true,
                    responsiveRefreshRate: 200,
                    responsiveBaseWidth: window


                });

            });

        </script>



        <!--prodcts slider - owl-->
        <script>
            $(document).ready(function () {

                var owl = $("#offers-slider");

                owl.owlCarousel({
                    items: 3, //10 items above 1000px browser width
                    itemsDesktop: [1000, 3], //5 items between 1000px and 901px
                    itemsDesktopSmall: [900, 2], // betweem 900px and 601px
                    itemsTablet: [600, 1], //2 items between 600 and 0
                    itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
                    pagination: false,
                    autoPlay: 2000,
                    stopOnHover: true
                });

                // Custom Navigation Events
                $(".next").click(function () {
                    owl.trigger('owl.next');
                })
                $(".prev").click(function () {
                    owl.trigger('owl.prev');
                })
                $(".play").click(function () {
                    owl.trigger('owl.play', 1000); //owl.play event accept autoPlay speed as second parameter
                })
                $(".stop").click(function () {
                    owl.trigger('owl.stop');
                })

            });
        </script>


        <!--hover effects-->
        <script>
            $(document).ready(function () {
                if (Modernizr.touch) {
                    // show the close overlay button
                    $(".close-overlay").removeClass("hidden");
                    // handle the adding of hover class when clicked
                    $(".img").click(function (e) {
                        if (!$(this).hasClass("hover")) {
                            $(this).addClass("hover");
                        }
                    });
                    // handle the closing of the overlay
                    $(".close-overlay").click(function (e) {
                        e.preventDefault();
                        e.stopPropagation();
                        if ($(this).closest(".img").hasClass("hover")) {
                            $(this).closest(".img").removeClass("hover");
                        }
                    });
                } else {
                    // handle the mouseenter functionality
                    $(".img").mouseenter(function () {
                        $(this).addClass("hover");
                    })
                            // handle the mouseleave functionality
                            .mouseleave(function () {
                                $(this).removeClass("hover");
                            });
                }
            });
        </script>



        <script>
            $(document).ready(function () {

                $('input[name=stdate_enq]').datetimepicker({
                    dayOfWeekStart: 1,
                    lang: 'en',
                    minDate: 0
                });
                $('input[name=enddate_enq]').datetimepicker({
                    dayOfWeekStart: 1,
                    lang: 'en',
                    minDate: 0
                });
                $('input[name=stdate] ').datetimepicker({
                    dayOfWeekStart: 1,
                    lang: 'en',
                    minDate: 0,
                    // datepicker:false,
                    timepicker: false,
                    //        format:'Y/m/d',
                    format: 'd/m/Y',
                });
                $('input[name=sttime] ').datetimepicker({
                    dayOfWeekStart: 1,
                    lang: 'en',
                    minDate: 0,
                    datepicker: false,
                    format: 'H:i',
                    defaultTime: '00:00',
                });
                $('input[name=enddate] ').datetimepicker({
                    dayOfWeekStart: 1,
                    lang: 'en',
                    minDate: 0,
                    timepicker: false,
                    //format:'Y/m/d',
                    format: 'd/m/Y',
                    // format:'d-m-Y H:i',
                });
                $('input[name=endtime] ').datetimepicker({
                    dayOfWeekStart: 1,
                    lang: 'en',
                    minDate: 0,
                    datepicker: false,
                    format: 'H:i',
                    defaultTime: '00:00',
                    // format:'d-m-Y H:i',
                });

                $('input[name=led] ').datetimepicker({
                    dayOfWeekStart: 1,
                    lang: 'en',
                    minDate: 0
                });

            });
        </script>
        <script src="http://localhost/mytourdriver/application_resources/js/custom_js/js_fe_function.js" type="text/javascript"></script>
        <script src="http://momentjs.com/downloads/moment.js"></script> 
        <!--New-->
        <script src="http://localhost/mytourdriver/application_resources/js/slider.js" type="text/javascript"></script>
        <script src="http://localhost/mytourdriver/application_resources/js/jquery-ui.min.js" type="text/javascript"></script>
        <!--slider - owl-->
        <script>
            $(document).ready(function () {
                var owl = $("#sort-slider");
                owl.owlCarousel({
                    items: 6, //10 items above 1000px browser width
                    itemsDesktop: [1000, 4], //5 items between 1000px and 901px
                    itemsDesktopSmall: [900, 3], // betweem 900px and 601px
                    itemsTablet: [600, 2], //2 items between 600 and 0
                    itemsMobile: [480, 1], // itemsMobile disabled - inherit from itemsTablet option
                    pagination: false,
                    navigation: true,
                    navigationText: ["<i class='fa fa-angle-left '></i>", "<i class='fa fa-angle-right'></i>"]
                });

            });
        </script>

        <link rel="stylesheet" type="text/css" href="http://localhost/mytourdriver/application_resources/css/build/css/demo.css"/>

        <link rel="stylesheet" href="http://localhost/mytourdriver/application_resources/css/build/css/custom.css">

        <link rel="stylesheet" type="text/css" href="http://localhost/mytourdriver/application_resources/css/country/css/countrySelect.css"/>

        <script src="http://localhost/mytourdriver/application_resources/css/country/js/countrySelect.min.js" type="text/javascript"></script>


        <!--start form wizard-->
        <script src="http://localhost/mytourdriver/application_resources/wizard2/dist/jquery.wizard.js"></script>
        <link href="http://localhost/mytourdriver/application_resources/wizard2/dist/jquery.wizard.css" rel="stylesheet">

        <style type="text/css">

            .sidebar-nav {
                padding: 9px 0;
            }

            [data-wizard-init] {
                margin: auto;

            }
        </style>

        <!--End form wizard-->


        <script>


            $("#phone_no").intlTelInput(
                    {autoFormat: false,
                        autoHideDialCode: false,
                        defaultCountry: "auto",
                        geoIpLookup: function (callback) {
                            $.get('http://ipinfo.io', function () {
                            }, "jsonp").always(function (resp) {
                                var countryCode = (resp && resp.country) ? resp.country : "";
                                callback(countryCode);
                            });
                        },
                        utilsScript: "http://www.techieat.com/international-telephone/lib/libphonenumber/build/utils.js"


                    });

            $('#country').countrySelect({
                //  defaultCountry: "lk",
            });
        </script>

        <script>


            $('input[name="country"]').countrySelect({
                //  defaultCountry: "lk"
                defaultCountry: "auto"
            });

            $('input[name="telephone"]').intlTelInput({
                autoFormat: false,
                autoHideDialCode: false,
                defaultCountry: "auto",
                geoIpLookup: function (callback) {
                    $.get('http://ipinfo.io', function () {
                    }, "jsonp").always(function (resp) {
                        var countryCode = (resp && resp.country) ? resp.country : "";
                        callback(countryCode);
                    });
                },
                utilsScript: "http://www.techieat.com/international-telephone/lib/libphonenumber/build/utils.js"

            });

            $('input[name="country"]').on('change', function () {

                var countryData = $("#country").countrySelect("getSelectedCountryData");
                var countrycode = countryData.iso2;

                $('input[name="telephone"]').intlTelInput("selectCountry", countrycode);

            });

        </script>

        <script>

            $(window).load(function () {
                var countryCode = $('input[name="telephone"]').intlTelInput("getSelectedCountryData").iso2;
                // alert(countryData.iso2);

                $('input[name="country"]').countrySelect("selectCountry", countryCode);

            });

        </script>

        <script type="text/javascript">

            $("#send_contact_form").validate({
                rules: {
                    subject: {required: true},
                    name: {required: true},
                    email: {required: true},
                    tel: {required: true, digits: true, maxlength: 9},
                    msg: {required: true}
                },
                messages: {
                    //name: "Place Yor Name",

                },
                submitHandler: function (form) {

                    $.post(site_url + '/article_controller/sendContactToCasons', $('#send_contact_form').serialize(), function (msg) {
                        if (msg == 1) {
                            $('#success_message').html('<div class="alert alert-success"> Your Message has been sent!.</div>');
                            location.reload();
                        }
                        else {
                            $('#success_message').html('<div class="alert alert-danger"> Your Message has not been sent!</div>');
                        }
                    });
                }
            });

        </script>


        <script>

            //$('#license_expire').datetimepicker();
            $('input[name=license_expire] ').datetimepicker({
                dayOfWeekStart: 1,
                lang: 'en',
                minDate: 0,
                timepicker: false,
                //format:'Y/m/d',
                format: 'd/m/Y',
                // format:'d-m-Y H:i',
            });

            $('#flightarrivaltime').datetimepicker({
                dayOfWeekStart: 1,
                lang: 'en',
                minDate: 0,
                datepicker: false,
                format: 'H:i',
                defaultTime: '00:00',
                // format:'d-m-Y H:i',

            });

            $('input[name="stdate"]').bind("mousewheel", function () {
                return false;
            });

            $('input[name="enddate"]').bind("mousewheel", function () {
                return false;
            });


        </script>


        <!--start notifi-->

        <script src="http://localhost/mytourdriver/application_resources/notify/bootstrap-notify.min.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css" rel="stylesheet">

        <!--end notifi-->
    </body>
</html>