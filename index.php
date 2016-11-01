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
        <link href="application_resources/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
        <link href="application_resources/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="application_resources/css/template.css" rel="stylesheet" type="text/css">
        <link href="application_resources/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <!--new-->
        <link href="application_resources/css/nx.css" rel="stylesheet" type="text/css"/>
        <link href="application_resources/css/slider-style.css" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" href="application_resources/css/build.css" type="text/css">


        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

        <!--menu css-->
        <link href="application_resources/css/styles-m.css" rel="stylesheet" type="text/css"/>

        <!-- END THEME STYLE -->
        <!--owl carousel-->
        <link rel="stylesheet" href="application_resources/css/owl.carousel.css">
        <link rel="stylesheet" href="application_resources/css/owl.theme.css">

        <!--hover effects-->
        <link rel="stylesheet" href="application_resources/css/style.css" />
        <!-- date time picker -->

        <link rel="stylesheet" type="text/css" href="application_resources/css/jquery.datetimepicker.css"/>
        <!-- date time picker -->
        <!-- LOAD GOOGLE FONT OPEN SANS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,400italic,500,500italic,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400italic,400,700,300' rel='stylesheet' type='text/css'>
        <!-- END GOOGLE FONT OPEN SANS -->

        <!--         START FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="application_resources/images/taxi-icon.png">
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

    </head><!-- END HEAD -->
    <body onload="initialize()">
        <script src="application_resources/js/jquery-1.11.2.min.js" type="text/javascript"></script>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

        <link rel="stylesheet" type="text/css" href="application_resources/css/build/css/demo.css"/>
        <link rel="stylesheet" type="text/css" href="application_resources/css/country/css/countrySelect.css"/>
        <link rel="stylesheet" href="application_resources/css/build.css" type="text/css">
        <script src="application_resources/css/country/js/countrySelect.min.js" type="text/javascript"></script>

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
        <div class="menu-wrapper">

            <div class="container">

                <div class="row">

                    <div class="col-md-3 col-sm-4">

                        <a href="#"> <img alt="MyTourDriverLogo" class="img-responsive c-logo" src="#"></a>
                    </div>

                    <div class="col-md-9 col-sm-8">
                        <div class="header-top text-right">
                        </div>

                        <div class="header-top text-right">
                            <ul class="list-inline list-unstyled">
                                <li><a class="tagline " style="border-radius:20px; cursor: pointer; background: #FFF; padding: 3px 12px; color: #c91c23; font-weight: 500;"  data-toggle="modal" data-target="#inquirymodal"><i class="fa fa-cab"></i> Direct Inquiry</a>
                                </li>
                                <li><a class="tagline" style="border-radius:20px; cursor: pointer; border:1px solid #FFF; padding: 2px 5px; color: #FFF; font-weight: 500;"  data-toggle="modal" data-target="#contactModal"><i class="fa fa-info-circle"></i> kkyapa@gmail.com</a>
                                </li>
                                <li><a class="tagline" style="border-radius:20px; cursor: pointer; border:1px solid #FFF; padding: 2px 5px; color: #FFF; font-weight: 500;"  data-toggle="modal" data-target="#loginModal"><i class="fa fa-info-circle"></i> Sign-In</a>
                                </li>
                                <li><a class="tagline" style="border-radius:20px; cursor: pointer; border:1px solid #FFF; padding: 2px 5px; color: #FFF; font-weight: 500;"  data-toggle="modal" data-target="#signUpModal"><i class="fa fa-info-circle"></i> Sign-Up</a>
                                </li>
                            </ul>
                        </div>
                        <div class="menu-wrap">
                            <div class="menu-wrap-inner">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div id='cssmenu'>
                                            <ul>
                                                <li>
                                                    <a href='#'><b>Home</b></a>
                                                </li>
                                                <li class="">
                                                    <a
                                                        href="#"> <b>About</b>  </a>
                                                    <ul>

                                                    </ul>
                                                </li>
                                                <!--                                                <li class="">
                                                                                                    <a
                                                                                                        href="#"> <b>Services</b>  </a>
                                                
                                                                                                    <ul>
                                                                                                        <li> <a href='http://www.casons.lk/services/4-4-rentals'>4x4 Rentals</a> </li>
                                                                                                        <li> <a href='http://www.casons.lk/services/wedding-vip'>Weddings & Events</a> </li>
                                                                                                        <li> <a href='http://www.casons.lk/services/fleet-management'>Fleet Management</a> </li>
                                                                                                        <li> <a href='http://www.casons.lk/services/road-side-assistance'>Road Side Assistance </a> </li>
                                                                                                        <li><a href="http://www.bikerentsrilanka.com/" target="_blank">MoterBike Rental</a></li>
                                                                                                        <li> <a href='http://www.casons.lk/services/self-drive-rental'>Self Drive Rental</a> </li>
                                                                                                        <li> <a href='http://www.casons.lk/services/chauffeur-driven-tours'>Chauffeur Driven & Tours</a> </li>
                                                                                                        <li> <a href='http://www.casons.lk/services/airport-transfers'>Airport Tansfers</a> </li>
                                                                                                        <li> <a href='http://www.casons.lk/services/limousine-services'>Limousine Services</a> </li>
                                                                                                        <li> <a href='http://www.casons.lk/services/raca-garage-services'>RACA Garage Services</a> </li>
                                                                                                    </ul>
                                                                                                </li>-->



                                                <!--                                                <li class="">
                                                                                                    <a
                                                                                                        href="#"> <b>Fleet</b>  </a>
                                                
                                                                                                    <ul>
                                                                                                        <li> <a href='http://www.casons.lk/vehicles/cars'>Cars</a> </li>
                                                                                                        <li> <a href='http://www.casons.lk/vehicles/vans'>Vans</a> </li>
                                                                                                        <li> <a href='http://www.casons.lk/vehicles/suvs'>SUV’s</a> </li>
                                                                                                        <li> <a href='http://www.casons.lk/vehicles/4-4-cabs'>4x4 Cabs</a> </li>
                                                                                                        <li> <a href='http://www.casons.lk/vehicles/motorbikes'>Motor Bikes</a> </li>
                                                                                                        <li> <a href='http://www.casons.lk/vehicles/buses'>Buses</a> </li>
                                                                                                    </ul>
                                                                                                </li>-->



                                                <!--                                                <li class="">
                                                                                                    <a
                                                                                                        href="#"> <b>Corporate Rental</b>  </a>
                                                
                                                                                                </li>-->


                                                <!--
                                                                                                <li class="">
                                                                                                    <a
                                                                                                        href="#"> <b>Travel</b>  </a>
                                                
                                                                                                    <ul>
                                                                                                        <li> <a href='http://www.casons.lk/travel/anuradhapura'>Travel to Anuradhapura</a> </li>
                                                                                                        <li> <a href='http://www.casons.lk/travel/polonnaruwa'>Travel to Polonnaruwa</a> </li>
                                                                                                        <li> <a href='http://www.casons.lk/travel/jaffna'>Travel to Jaffna</a> </li>
                                                                                                        <li> <a href='http://www.casons.lk/travel/kandy'>Travel to Kandy</a> </li>
                                                                                                        <li> <a href='http://www.casons.lk/travel/trincomalee'>Travel to Trincomalee</a> </li>
                                                                                                        <li> <a href='http://www.casons.lk/travel/galle'>Travel to Galle</a> </li>
                                                                                                        <li> <a href='http://www.casons.lk/travel/bentota'>Travel to Bentota</a> </li>
                                                                                                        <li> <a href='http://www.casons.lk/travel/hikkaduwa'>Travel to Hikkaduwa</a> </li>
                                                                                                        <li> <a href='http://www.casons.lk/travel/unawatuna'>Travel to Unawatuna</a> </li>
                                                                                                        <li> <a href='http://www.casons.lk/travel/nuwaraeliya'>Travel to Nuwara Eliya</a> </li>
                                                                                                    </ul>
                                                                                                </li>-->



                                                <li><a href='#'><b>Contact</b></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="hotline-wrap"><span>Hotline</span> <a class="rtel" href="#">+94 0000000000</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--start inquiry model--> 

        <div class="modal fade" id="inquirymodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-car"></i>  <strong>Book / Enquire </strong></h4>
                    </div>
                    <div class="modal-body clearfix">

                        <form id="get_search_form">
                            <div class="form-group col-sm-6">
                                <label for="exampleInputName">Name</label>
                                <input type="text" class="form-control" name="uname" id="uname" placeholder="Your Name" autocomplete="off">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="exampleInputName">Country</label>
                                <input type="text" id="country" name="country" class="form-control">

                            </div>
                            <div class="form-group col-sm-12">
                                <label for="exampleInputName">Address</label>
                                <textarea class="form-control" rows="2" name="address" id="address" placeholder="Address"></textarea>

                            </div>



                            <div class="form-group col-sm-6">
                                <label for="exampleInputName">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" autocomplete="off">
                            </div>
                            <div class="form-group col-sm-3 col-np">

                                <label for="exampleInputName">Country Code</label>
                                <input type="text" class="form-control" style="width: 70px" name="telephone" id="telephone" >

                                <input type="hidden" class="form-control" name="nationality" id="nationality" placeholder="Nationality" autocomplete="off">
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="exampleInputName">Mobile No.</label>
                                <input type="text" class="form-control"  name="tel_no" id="tel_no" placeholder="Contact Number" autocomplete="off">

                            </div>

                            <div class="form-group col-sm-6">
                                <!--    <label for="exampleInputNationality">Type of service</label>-->
                                <label for="exampleInputName">Service Type</label>
                                <select class="form-control" name="typeser" id="typeser" autocomplete="off">
                                    <option value="OTHER">Select Type of Service</option>
                                    <option value="WITH DRIVER">WITH DRIVER</option>
                                    <option value="DROP & PICKUP (TAXI)">DROP & PICKUP (TAXI)</option>
                                    <option value="AIRPORT TRANSFER">AIRPORT TRANSFER</option>
                                    
                                </select>
                            </div>
                            <div class="form-group col-sm-6">

                                <label for="exampleInputName">Vehicle Type</label>
                                <select class="form-control" name="vehiclet" id="vehiclet">
                                    <option value="">Select Type of vehicle</option>
                                    <option value="Budget cars">Budget cars</option>
                                    <option value="Standard cars">Standard cars</option>
                                    <option value="Semi luxury cars">Semi luxury cars</option>
                                    <option value="Luxury cars">Luxury cars</option>
                                    <option value="Super luxury cars">Super luxury cars</option>
                                    <option value="limousine">limousine</option>
                                    <option value="Vans">Vans</option>
                                    <option value="Luxury vans">Luxury vans</option>
                                    <option value="Suv">Suv</option>
                                    <option value="Buses">Buses</option>
                                    <option value="Double cabs">Double cabs</option>
                                    <option value="Motor bikes">Motor bikes</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <!--    <label for="exampleInputNationality">Starting Date</label>-->
                                <label for="exampleInputName">Start Date</label>
                                <input type="text" class="form-control" name="stdate" id="stdate" placeholder="Starting Date">
                            </div>
                            <div class="form-group col-sm-6">
                                <!--    <label for="exampleInputNationality">Ending Date</label>-->
                                <label for="exampleInputName">End Date</label>
                                <input type="text" class="form-control" name="enddate" id="enddate" placeholder="Ending Date">
                            </div>
                            <div class="form-group col-sm-12">
                                <!--                              <label for="exampleInputNationality">Message</label>-->
                                <label for="exampleInputName">Message</label>
                                <textarea placeholder="Message / Extra Requirement" class="form-control" rows="3" name="message" id="message"></textarea>
                            </div>

                            <div class="form-group col-sm-12">
                                <div  id="send_enquiry_search" style=" margin-bottom: 10px;"></div> 
                                </br>
                                <div id="sentmsg"> </div>

                                <input class="btn btn-danger pull-right" type="submit" id="btninquiry" value="Send Enquiry" />
                            </div>

                        </form>
                    </div>

                    <div class="modal-footer">


                    </div> 
                </div>
            </div>
        </div>

        <!--end inquiry model-->
        <!-- start contact Modal -->
        <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Inform Us</h4>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" role="form" id="send_contact_form">

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="pwd">Name:</label>
                                <div class="col-sm-9"> 
                                    <input type="text" class="form-control" id="name" name="name" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="email">Email:</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="email">Telephone No:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="tel" name="tel" placeholder="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="email">Message:</label>
                                <div class="col-sm-9">                      
                                    <textarea class="form-control" id="msg" name="msg" placeholder="" aria-describedby="basic-addon1"></textarea>
                                </div>
                            </div>

                            <div class=" col-sm-offset-8 "> 
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <!--<button type="submit" class="btn btn-primary" id="send_contact_submit">Send</button>-->
                                <input type="submit" class="btn btn-danger" id="send_contact_submit" value="Send">

                            </div> 

                        </form>

                    </div>

                    <div class="modal-footer">

                        <div id="sending_message"></div>
                        <div id="success_message"></div>

                    </div> 
                </div>
            </div>
        </div>

        <!--end contact model-->

        <!--Start Login Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Login</h4>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" role="form" id="login_form">

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="pwd">UserName:</label>
                                <div class="col-sm-9"> 
                                    <input type="text" class="form-control" id="name" name="name" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="email">Password:</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="email" name="email" placeholder="">
                                </div>
                            </div>
                            <div class=" col-sm-offset-8 "> 
                                <input type="submit" class="btn btn-danger" id="send_login_submit" value="Login">
                            </div> 
                        </form>
                    </div>

                    <div class="modal-footer">

                        <div id="sending_message"></div>
                        <div id="success_message"></div>

                    </div> 
                </div>
            </div>
        </div>

        <!--End Login Modal -->

        <!--Start quick Sign-Up Modal -->
        <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><b>Quick Sign-Up For Drivers</b></h4>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" role="form" id="login_form">

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="pwd">UserName:</label>
                                <div class="col-sm-9"> 
                                    <input type="text" class="form-control" id="name" name="name" placeholder="UserName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="email">Password:</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="email">Confirm Password:</label>
                                <div class="col-sm-9">
                                    <input type="conpassword" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="ConfirmPassword">
                                </div>
                            </div>
                            <div class=" col-sm-offset-8 "> 
                                <input type="submit" class="btn btn-danger" id="send_login_submit" value="Sign-Up">
                            </div> 
                        </form>
                    </div>

                    <div class="modal-footer">

                        <div id="sending_message"></div>
                        <div id="success_message"></div>

                    </div> 
                </div>
            </div>
        </div>
        <!--End quick Sign-Up Modal -->
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
                                <img data-toggle="tooltip" data-placement="bottom" title="With Driver" class="visible-xs" src="application_resources/images/driver-icon.png">
                                <span class="hidden-xs"> With Driver</span>
                            </a>
                        </li>
                        <li role="presentation" style="width: 161px;">
                            <a class="taxi" href="#taxi" aria-controls="Taxi" role="tab" data-toggle="tab">
                                <img data-toggle="tooltip" data-placement="bottom" title="Drop & Pickup" class="visible-xs" src="application_resources/images/taxi-icon.png">
                                <span class="hidden-xs">Drop & Pickup (Taxi)</span>
                            </a>
                        </li>
                        <li role="presentation" style="width: 161px;">
                            <a class="airport" href="#airport" aria-controls="Airport Transfer" role="tab" data-toggle="tab">
                                <img data-toggle="tooltip" data-placement="bottom" title="Airport Transfer" class="visible-xs" src="application_resources/images/airport.png">
                                <span class="hidden-xs">Airport Transfer</span>
                            </a>
                        </li>
                    </ul>

                    <!--Self Driver Tab panes--> 
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="withDriver">

                            <form id="get_search_form1" action="#" method="post">

                                <div class="form-group col-sm-12">
                                    <label class="control-label"><strong>PickUp Location</strong> </label>
                                    <select class="form-control" name="pick_location" id="pick_location" autocomplete="off">
                                        <option value="">- PICKUP LOCATION -</option>
                                        <option value="1">Bandaranayake International Airport</option>
                                        <option value="2">Colombo</option>
                                        <option value="3"selected>Casons Head office</option>

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
                                        <option value="3">Casons Head office</option>

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

                            <a class="btn btn-border" href="about-us/about-casons">View More</a>

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

                            <a class="btn btn-border" href="about-us/about-casons">View More</a>

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

                    <img src="application_resources/images/slider/doubleCab.jpg"
                         alt="Casons " style="height: 470px">

                    <div class="slider-discription">

                        <h1>Double Cab Tour <br/> Sri Lanka </h1>

                        <p></p>



                    </div>

                </div>
            </div>

            <!--end slider ////////////////////////////////////////////////////-->

        </div>


        <!--/ end slider warp /////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <!--/ snippet warp /////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <!--        <div class="home-snippt-wrap">
                    <div class="container">
        
                        <div class="row">
        
                            <div class="col-md-8 col-md-offset-2 text-center snippet-head">
        
                                <h1>Enjoy the efficient and specialized services of Casons Rent a Car;
        
                                    Sri Lanka's leading rent-a-car company </h1>
        
                            </div>
        
                        </div>
        
                        <div class="row">
        
                            <div class="col-sm-3 snippt-box">
        
                                <i class="fa fa-car fa-3x"></i>
        
                                <h2>Over 500 Vehicles</h2>
        
                                <p>Over 60 4WD Jeeps, 50 Vans, 200 Cars, Double Cabs, Luxury Coaches, Lorries etc</p>
        
                            </div>
        
                            <div class="col-sm-3 snippt-box">
        
                                <i class="fa fa-user fa-3x"></i>
        
                                <h2>Our Strength</h2>
        
                                <p>30 In-house Operational Staff, 18 Automobile Technicians and 90 permanent Drivers from every part of
                                    the Island</p>
        
                            </div>
        
                            <div class="col-sm-3 snippt-box">
        
                                <i class="fa fa-star fa-3x"></i>
        
                                <h2>Insurance</h2>
        
                                <p>Comprehensive Insurance available for all our vehicles including Passengers</p>
        
                            </div>
        
                            <div class="col-sm-3 snippt-box">
        
                                <i class="fa fa-user fa-3x"></i>
        
                                <h2>24/7 Breakdown Service </h2>
        
                                <p>24 hrs Island wide backup services with affiliated Garages and Mobile units</p>
        
                            </div>
        
                        </div>
        
                        <div class="row">
        
                            <div class="col-md-12 divider">
        
                                <a class="btn btn-border" href="../casonsnew/index.php/article_controller/pages/61">Findout more about
                                    us</a>
        
                            </div>
        
                        </div>
        
                    </div>        
                </div>-->

        <!--/ end snippet warp /////////////////////////////////////////////////////////////////////////////////////////////////////-->


        <!--offers////////////////////////////////////////////////////////////////////////////////////////////////// -->

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
                                         src="application_resources/images/slider/doubleCab.jpg"
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

        <!--end car details Modal /////////////////////////////////////////////////////////////////////////////////////////-->
        <!-- /end testimonails ////////////////////////////////////////////////////////////////-->
        <!--contact row-->
        <div class="contact-row-wrapper">
            <div class="container">
                <div class="row" style="width: 850px;">
                    <div class="col-md-8">
                        <h2>You have any questions or need additional information?   <a class="btn btn-border" href="#">Contact Us</a></h2>
                    </div>

                    <div class="col-md-4 social-icons">
                        <ul class="list-inline list-unstyled pull-right">
                            <li><a href="http://www.facebook.com/" target="_blank"><img alt="facebooklink" src="http://www.casons.lk//application_resources/images/facbook.png"></a></li>
                            <li><a href="http://www.flickr.com/photos/67135307@N08/" target="_blank"><img alt="flicker" src="http://www.casons.lk//application_resources/images/flicker.png"></a></li>
                            <li><a href="https://plus.google.com/" target="_blank"><img alt="googleplus" src="http://www.casons.lk//application_resources/images/gplus.png"></a></li>
                            <li><a href="http://twitter.com/" target="_blank"><img alt="twitterlink" src="http://www.casons.lk//application_resources/images/tweeter.png"></a></li>
                            <li><a href="http://www.youtube.com/" target="_blank"><img alt="youtube" src="http://www.casons.lk//application_resources/images/you-tube.png"></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>


        <!--contact row-->
        <!--footer wrap ///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <!--        <div class="footer-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row">
        
                                    <div class="col-sm-4">
                                        <h2 class="red-txt"><b>Services</b></h2>
                                        <ul class="list-unstyled footerlinks">
        
        
                                            <li><a href='#'>4x4 Rentals </a></li>
        
                                            <li><a href='#'>Weddings & Events </a></li>
        
                                            <li><a href='#'>Fleet Management </a></li>
        
                                            <li><a href='#'>Road Side Assistance  </a></li>
        
                                            <li><a href='#'>MoterBike Rental </a></li>
        
                                            <li><a href='#'>Self Drive Rental </a></li>
        
                                            <li><a href='#'>Chauffeur Driven & Tours </a></li>
        
                                            <li><a href='#'>Airport Tansfers </a></li>
        
                                            <li><a href='#'>Limousine Services </a></li>
        
                                            <li><a href='#'>RACA Garage Services </a></li>
        
                                        </ul>
                                    </div>
        
        
        
                                    <div class="col-sm-3">
                                        <h2 class="red-txt"><b>Fleet</b></h2>
                                        <ul class="list-unstyled footerlinks">
                                            <li><a href='http://www.casons.lk/vehicles/cars'>Cars </a></li>
        
                                            <li><a href='http://www.casons.lk/vehicles/vans'>Vans </a></li>
        
                                            <li><a href='http://www.casons.lk/vehicles/suvs'>SUV’s </a></li>
        
                                            <li><a href='http://www.casons.lk/vehicles/4-4-cabs'>4x4 Cabs </a></li>
        
                                            <li><a href='http://www.casons.lk/vehicles/motorbikes'>Motor Bikes </a></li>
        
                                            <li><a href='http://www.casons.lk/vehicles/buses'>Buses </a></li>
        
                                        </ul>
                                    </div>
                                    <div class="col-sm-5">
                                        <h2 class="red-txt">Contact Us</h2>
        
                                        <p><strong>Casons Rent-A-Car (Pvt) Ltd</strong><br>
        
                                            181, Gothami Gardens,
        
                                            Gothami Road, Rajagiriya, Sri Lanka.</p>
        
                                        <p>
        
                                            <strong>Hotlines:</strong><br>
        
                                            <a class="rtel" href="Tel:+94 11 4 377 366" >+94 11 4 377 366, +94 777 312 500</a></p>
        
                                        <p>
                                        <p><strong>Fax:</strong><br> +94 11 4 406 544 </p>
        
                                        <p><strong>Email:</strong><br><a href="mailto:info@casonsrentacar.com" target="_top">info@casonsrentacar.com</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
        
                                                                                  <h2 class="red-txt">Related Links</h2>
                                <div class="row related-link-row">
                                    <div class="col-xs-6 col-sm-3 col-md-6 related-link">
                                        <a target="_blank" href="http://www.casonstour.com/"><img alt="Explore Sri Lanka" class="img-responsive" src="http://www.casons.lk//application_resources/images/explore-srilanka.png"></a>
                                    </div>
                                    <div class="col-xs-6 col-sm-3 col-md-6 related-link">
                                        <a target="_blank" href="http://www.bikerentsrilanka.com/"><img alt="Motorbike Rental in Sri Lanka" class="img-responsive" src="http://www.casons.lk//application_resources/images/motorbike-srilanka.png"></a>
                                    </div>
                                    <div class="col-xs-6 col-sm-3 col-md-6 related-link">
                                        <a href="#"><img alt="Car Rental Service India" class="img-responsive" src="http://www.casons.lk//application_resources/images/car-india.png"></a>
                                    </div>
                                    <div class="col-xs-6 col-sm-3 col-md-6 related-link">
                                        <a href="#"><img alt="Motorcar Deals" class="img-responsive" src="http://www.casons.lk//application_resources/images/motorcar-deals.png"></a>
                                    </div>
                                </div>
        
        
                            </div>
                        </div>
                        copy rights
                        <div class="footer-bottom">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p>Member of <a target="_self" href="http://www.casons.lk/"><img src="http://www.casons.lk//application_resources/images/raca.jpg"></a></p>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <p>Copyright © 2015 Casons Rent-A-Car (Pvt) Ltd. . All Rights Reserved.</br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->


        <!--/ end footer wrap-->

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
        <!--/ end booking details modal/////////////////////////////////////////////////////////////////////////////////-->
        <!--car details Modal /////////////////////////////////////////////////////////////////////////////////////////-->

        <div class="modal-blue modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-responsive" src="application_resources/images/slider/doubleCab.jpg">
                            </div>
                            <div class="col-md-7">
                                <h1>Toyota Allion 240 - Self Driven</h1>
                                <div class="row">
                                    <div class="col-sm-7">
                                        <ul class="list-unstyled car-featured-list">
                                            <li><i class="fa fa-male"></i> 4 Passengers</li>
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
                                        <!--<a class="btn btn-lg btn-danger pull-right" href="#">Book Now</a>-->
                                        <a class=" btn btn-lg btn-danger pull-right" data-toggle="modal" data-target="#myModal2" onclick="">Book Now</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end car details Modal /////////////////////////////////////////////////////////////////////////////////////////-->
        <!--inquery modal-->
        <div class="modal-blue modal fade" id="myInq" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Phone Reservations </h1>
                                <h2>SMS : +94 077 000 000 000</h2>
                                <div class="form-wrap clearfix">
                                    <div class="col-sm-12 clearfix">
                                        <h2>Make Enquiry</h2>
                                        <h5>Please feel free to send us an enquiry message by filling in the form below and clicking on "Send". We will get back to you asap.</h5>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <form   id="get_quate_form">
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputName">Your Name</label>
                                            <input type="text" class="form-control" name="uname" id="uname" placeholder="Enter Name">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputCountry">Country</label>
                                            <input type="text" class="form-control"  name="country" id="country" >


                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputNationality">Your Email</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputNationality">Contact Number</label>
                                            <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Contact Number">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputNationality">Type of service</label>
                                            <select class="form-control" name="typeser" id="typeser">

                                                <option value="SELF DRIVE">SELF DRIVE</option>
                                                <option value="WITH DRIVER">WITH DRIVER</option>
                                                <option value="WEDDINGS">WEDDINGS</option>
                                                <option value="AIRPORT TRANSFER">AIRPORT TRANSFER</option>
                                                <option value="DROP & PICKUP (TAXI)">DROP & PICKUP (TAXI)</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputNationality">Selected Model</label>
                                            <div id="modeldiv"></div>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputNationality">Starting Date</label>
                                            <input type="text" class="form-control" name="stdate_enq" id="stdate_enq" placeholder="Start Date">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputNationality">Ending Date</label>
                                            <input type="text" class="form-control" name="enddate_enq" id="enddate_enq" placeholder="End Date">
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label for="exampleInputNationality">Message</label>
                                            <textarea class="form-control" rows="3" name="message" id="message"></textarea>
                                        </div>

                                        <div class="form-group col-sm-12">
                                            <div  id="send_enquiry_form"></div>   <input class="btn btn-danger pull-right" type="submit" value="Send Enquiry" />
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end inquary modal-->


        <!-- START JQUERY PLUGINS LOAD -->
        <script src="application_resources/js/jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="application_resources/js/bootstrap.js" type="text/javascript"></script>
        <script src="application_resources/js/owl.carousel.js"></script>
        <script src="application_resources/js/modernizr.js"></script>
        <script src="application_resources/js/placeholders.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js"></script>



        <script src="application_resources/js/jquery-ui.js"></script>
        <!-- date time picker -->
        <script src="application_resources/js/jquery.datetimepicker.js"></script>

        <!-- date time picker -->

        <!--menu js-->
        <script src="application_resources/js/script.js" type="text/javascript"></script>
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
        <script src="application_resources/custom_js/js_fe_function.js" type="text/javascript"></script>
        <script src="http://momentjs.com/downloads/moment.js"></script> 
        <!--New-->
        <script src="application_resources/js/slider.js" type="text/javascript"></script>
        <script src="application_resources/js/jquery-ui.min.js" type="text/javascript"></script>
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

        <link rel="stylesheet" type="text/css" href="application_resources/css/build/css/demo.css"/>

        <link rel="stylesheet" href="application_resources/css/build/css/custom.css">

        <link rel="stylesheet" type="text/css" href="application_resources/css/country/css/countrySelect.css"/>

        <script src="application_resources/css/country/js/countrySelect.min.js" type="text/javascript"></script>


        <!--start form wizard-->
        <script src="application_resources/wizard2/dist/jquery.wizard.js"></script>
        <link href="application_resources/wizard2/dist/jquery.wizard.css" rel="stylesheet">

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
                            //location.reload();

                            $('#success_message').html('<div class="alert alert-success"> Your Message has been sent!.</div>');

                            //alert('msg sent ');
                            location.reload();
                        }
                        else {
                            $('#success_message').html('<div class="alert alert-danger"> Your Message has not been sent!</div>');
                            //                none
                            // alert('not sent');
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

        <script src="application_resources/notify/bootstrap-notify.min.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css" rel="stylesheet">

        <!--end notifi-->
    </body>
</html>