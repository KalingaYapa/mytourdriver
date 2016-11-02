<!DOCTYPE html>

<html>
    <head><!-- START HEAD -->
        <meta name="google-site-verification" content="VUd0e-LBApFLPXSopenbLiKzr8HJIYGW-BDwt45IYcI" />

        <meta name="msvalidate.01" content="9BD0FE48923191F095F33FDD4A40A81F" />

        <meta charset="utf-8">
        <!-- START TITLE -->
        <title>MyTourDriver Sri Lanka Official Site </title>
        <!-- END TITLE -->

        <!-- START META, DESCRIPTION, KEYWORDS, AUTHOR -->

        <meta name="author" content="" />

        <!-- END META, DESCRIPTION, KEYWORDS, AUTHOR -->
        <script type="text/javascript">

            var js_base_url = "";
            var js_site_url = "";
            //alert(js_url_path);
        </script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- START THEME STYLE -->
        <link href="../application_resources/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
        <link href="../application_resources/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../application_resources/css/template.css" rel="stylesheet" type="text/css">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>


        <!--new-->
        <link href="../application_resources/css/nx.css" rel="stylesheet" type="text/css"/>
        <link href="../application_resources/css/slider-style.css" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" href="../application_resources/css/build.css" type="text/css">


        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

        <!--menu css-->
        <link href="../application_resources/css/styles-m.css" rel="stylesheet" type="text/css"/>

        <!-- END THEME STYLE -->
        <!--owl carousel-->
        <link rel="stylesheet" href="../application_resources/css/owl.carousel.css">
        <link rel="stylesheet" href="../application_resources/css/owl.theme.css">

        <!--hover effects-->
        <link rel="stylesheet" href="../application_resources/css/style.css" />
        <!-- date time picker -->

        <link rel="stylesheet" type="text/css" href="../application_resources/css/jquery.datetimepicker.css"/>



        <!-- date time picker -->
        <!-- LOAD GOOGLE FONT OPEN SANS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,400italic,500,500italic,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400italic,400,700,300' rel='stylesheet' type='text/css'>
        <!-- END GOOGLE FONT OPEN SANS -->

        <!-- START FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="../application_resources/images/taxi-icon.png">
        <!-- EDN FAVICON -->



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
        <script src="../application_resources/js/jquery-1.11.2.min.js" type="text/javascript"></script>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

        <link rel="stylesheet" type="text/css" href="../application_resources/css/build/css/demo.css"/>
        <link rel="stylesheet" type="text/css" href="../application_resources/css/country/css/countrySelect.css"/>
        <link rel="stylesheet" href="../application_resources/css/build.css" type="text/css">
        <script src="../application_resources/css/country/js/countrySelect.min.js" type="text/javascript"></script>

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

        <?php include("../views/header.php"); ?>

        <!--header end-->




        <script>
            $('input[name=stdate] ').datetimepicker({
                dayOfWeekStart: 1,
                lang: 'en',
                minDate: 0,
                // datepicker:false,
                timepicker: false,
                //        format:'Y/m/d',
                format: 'd/m/Y'


            });

        </script>

        <style type="text/css">
            .req {
                color: #ff0000;
                font-weight: bold;
            }
        </style>
        <!--content area-->
        <div class="container content-wrapper">
            <div class="row">
                <div class="col-md-4">


                    <!--range slider-->
                    <div class="slider-wrapper">
                        <div class="inner-box clearfix">
                            <div class="inner-box-header">
                                <h2>Perodua Axia - Green Info... <a class="pull-right link" href="#"></a></h2>
                            </div>
                            <div class="inner-box-con">

                                <div class="car-model">
                                    <img class="img-responsive" src="../application_resources/images/slider/doubleCab.jpg" style="width: 150px;">

                                </div>

                                <ul class="list-unstyled car-featured-list li-border">
                                    <li>
                                        <i class="fa fa-male"> </i>
                                        Passengers :
                                        <span class="pull-right " >
                                            4                            </span>
                                    </li>

                                    <li>
                                        <i class="fa icon-suitcase"></i>
                                        Luggages :
                                        <span class="pull-right " >
                                            2                            </span>
                                    </li>

                                    <li>
                                        <i class="fa fa-cog"></i>
                                        Transmission Type :
                                        <span class="pull-right " >
                                            Auto                            </span>
                                    </li>

                                    <li>
                                        <i class="fa icon-snow"></i>
                                        Air Conditioning :
                                        <span class="pull-right " >
                                            yes                            </span>
                                    </li>

                                    <!--                    <li> 
                                                            <i class="fa icon-snow"></i>
                                                            No. of Doors :
                                                            <span class="pull-right " >
                                                                                        </span>
                                                        </li>-->

                                    <li>
                                        <i class="fa fa-tint"></i>
                                        Fuel Type :
                                        <span class="pull-right " >
                                            Petrol                        </span>
                                    </li>

                                    <li>
                                        <i class="fa icon-snow"></i>
                                        Engine Capacity :
                                        <span class="pull-right " >
                                            1000 CC                        </span>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                    <!--/range slider-->

                    <!-- driver Info -->
                    <div class="slider-wrapper">
                        <div class="inner-box clearfix">
                            <div class="inner-box-header">
                                <h2>Driver Info<a class="pull-right link" href="#"></a></h2>
                            </div>
                            <div class="inner-box-con">

                                <div class="car-model">
                                    <img class="img-responsive" src="../application_resources/images/driverImages/kky.jpg" style="width: 150px;">

                                </div>

                                <ul class="list-unstyled car-featured-list li-border">
                                    <li>
                                        <i class="fa fa-male"></i>
                                        Driver Name :
                                        <span class="pull-right " >
                                            Kalinga Yapa                        </span>
                                    </li>

                                    <li>
                                        <i class="fa fa-mobile"></i>
                                        Driver Mobile :
                                        <span class="pull-right " >
                                            0719335699                        </span>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>

                    <!-- end Driver info -->

                    <!-- Start Journey Info -->

                    <div class="slider-wrapper">
                        <div class="inner-box clearfix">
                            <div class="inner-box-header">
                                <h2> Journey Info... <a class="pull-right link" href="#"></a></h2>   </div>

                            <div class="inner-box-con journey journey-bg-color">

                                <ul class="list-unstyled car-featured-list  li-border li-border-white">
                                    <li><p>Service Type</p>
                                        <h4 class="" >
                                            SELF DRIVE                    </h4>
                                    </li>

                                    <li> <p>PickUp Location</p>
                                        <h5 class="" >
                                                          </h5>
                                    </li>

                                    <li><p>Drop-off Location</p>
                                        <h5 class="" >
                                                              </h5>
                                    </li>

                                    <li><p>PickUp Date & Time</p>
                                        <h5 class="" >
                                            02/11/2016&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;00:00                    </h5>
                                    </li>
                                    <li><p>Drop-Off Date & Time</p>
                                        <h5 class="" >
                                            02/11/2016&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;00:00                    </h5>
                                    </li>

                                    <!--                <li> Total No. of Days :-->
                                    <!--                    <span class="pull-right " >-->
                                    <!--                        --><!--                    </span>-->
                                    <!--                </li>-->

                                    <li><p>Excess Charge Per Km</p>
                                        <h5 class="" >
                                            45  LKR                    </h5>
                                    </li>

                                    <li><p>Free Mileage</p>
                                        <h5 class="" >
                                            100  Km                    </h5>
                                    </li>

                                </ul>

                                <table class="table custom-border-2px strong-font">
                                    <tr>
                                        <td>Rental</td>
                                        <td style="text-align:right;">5000 LKR </td>
                                    </tr>
                                </table>    



                                <div class="extra custom-border-2px">

                                    <h5 style="font-size: 14px; font-weight: bold;">Extra-Services</h5>

                                    <ul class="list-unstyled car-featured-list " >

                                        <div id="listextra">
                                        </div>
                                        <li  id="li1" ></li>
                                        <li  id="li2" ></li>
                                        <li  id="li3" ></li>
                                        <li  id="li4" ></li>
                                        <li  id="li5" ></li>
                                        <li  id="li6" ></li>
                                        <li  id="li7" ></li>
                                    </ul>
                                </div>


                                <h4 id="totalamounth5"><strong>Total
                                        <span class="pull-right"id="fulltotal" >

                                            5000  LKR                    <span>
                                                </strong>
                                                </h4>


                                                <h5 id="totalamounth5">Refundable Deposit<br/> (On Arrival)
                                                    <span class="pull-right" >

                                                        40000  LKR                    <span>

                                                            </h5>   
                                                            <form id="quotationfrom" action="#" method="post">

                                                                <input type="hidden" name="tab" value="">
                                                                <input type="hidden" name="model_id" value="" >
                                                                <input type="hidden" name="drive_type" value="">
                                                                <input type="hidden" name="car_type" value="">
                                                                <input type="hidden" name="vehicle_model" value="">
                                                                <input type="hidden" name="picup_loc" value="">

                                                                <input type="hidden" name="dropoff_loc" value="3">

                                                                <input type="hidden" name="num_days" value="">
                                                                <input type="hidden" name="currency" value="2">
                                                                <input type="hidden" name="amount" value="">
                                                                <input type="hidden" name="excess_per_km" value="">
                                                                <input type="hidden" name="freemilaege" value="">

                                                                <input type="hidden" name="unlimited" value="" >

                                                                <input type="hidden" name="stdate" value="02/11/2016">
                                                                <input type="hidden" name="enddate" value="02/11/2016">
                                                                <input type="hidden" id="total" name="total" value="">

                                                                <input type="hidden" name="subtotal"  value="0">

                                                                <div id="extra">


                                                                    <input type="hidden" id="extraitem1" name="extraitem[]">
                                                                    <input type="hidden" id="extracost1" name="extracost[]" value="">


                                                                    <input type="hidden" id="extraitem2" name="extraitem[]">
                                                                    <input type="hidden" id="extracost2" name="extracost[]" value="">


                                                                    <input type="hidden" id="extraitem3" name="extraitem[]">
                                                                    <input type="hidden" id="extracost3" name="extracost[]" value="">


                                                                    <input type="hidden" id="extraitem4" name="extraitem[]">
                                                                    <input type="hidden" id="extracost4" name="extracost[]" value="">


                                                                    <input type="hidden" id="extraitem5" name="extraitem[]">
                                                                    <input type="hidden" id="extracost5" name="extracost[]" value="">


                                                                    <input type="hidden" id="extraitem6" name="extraitem[]">
                                                                    <input type="hidden" id="extracost6" name="extracost[]" value="">


                                                                    <input type="hidden" id="extraitem7" name="extraitem[]">
                                                                    <input type="hidden" id="extracost7" name="extracost[]" value="">


                                                                </div>

                                                                <div id="requiredriver">
                                                                    <input type="hidden" id="driverreq" name="driverreq" class="driverreq">
                                                                    <input type="hidden" name="buymiles" class="buymiles">

                                                                </div>

                                                            </form>


                                                            <form id="bookingfrom" action="#" method="post">

                                                                <input type="hidden" id="pick_location" name="pick_location" value="3">
                                                                <input type="hidden" id="ret_location" name="ret_location" value="3">
                                                                <input type="hidden" id="numdays" name="numdays" value="1" >
                                                                <input type="hidden" id="ways" name="ways" value="">               
                                                                <input type="hidden" id="service" name="service" value="SD">

                                                                <input type="hidden" id="currency" name="currency" value="2">
                                                                <input type="hidden" id="stdate" name="stdate" value="02/11/2016">

                                                                <input type="hidden" id="enddate" name="enddate" value="02/11/2016">
                                                                <!--<input type="hidden" id="car_type" name="car_type" value="">-->

                                                                <input type="hidden" id="sttime" name="sttime" value="00:00">

                                                                <input type="hidden" id="endtime" name="endtime" value="00:00">

                                                                <input type="hidden" id="freemile" name="freemile" value="100">
                                                                <input type="hidden" id="modelid" name="modelid" value="125">

                                                                <input type="hidden" id="unlimited" name="unlimited" value="0">

                                                                <input type="hidden" id="discountedamount" name="discountedamount" value="5000">
                                                                <input type="hidden" id="amount" name="amount" value="5000">

                                                                <input type="hidden" id="airportpagecharge" name="airportpagecharge" value="0">


                                                                <input type="hidden" id="discountedcost" name="discountedcost" value="5000">

                                                                <input type="hidden" id="gps" name="gps" > 
                                                                <input type="hidden" id="driverendoses" name="driverendoses" > 
                                                                <input type="hidden" id="insurancedrivers" name="insurancedrivers" > 
                                                                <input type="hidden" id="driverdates" name="driverdates" > 
                                                                <input type="hidden" id="buymiles" name="buymiles" > 
                                                                <input type="hidden" id="babyseats" name="babyseats" >
                                                                <input type="hidden" id="boutiques" name="boutiques" >
                                                            </form>
                                                            <!--new form end-->
                                                            </div>
                                                            </div>
                                                            </div>


                                                            <!-- End Journey Info -->


                                                            </div>

                                                            <!-- End Side Bar -->


                                                            <div class="col-md-8">
                                                                <br/>
                                                                <div class="content-header inner-box-header">
                                                                    <h2>Reservation Form<a class="pull-right link" href="#"></a></h2>
                                                                </div>

                                                                <!--search sorting-->
                                                                <div class="search-header">
                                                                    <div class="row">

                                                                    </div>
                                                                </div>
                                                                <!--/search sorting-->
                                                                <!--search sorting image slider-->

                                                                <!--/search sorting image slider-->

                                                                <form class="form-horizontal clearfix" id="quatation_form" name="quatation_form" method="post" enctype="multipart/form-data"
                                                                      action="#">

                                                                    <div class="search-header">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <h3><strong>Personal Information</strong></h3>

                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div id="dt">

                                                                        <div class="row">
                                                                            <div class="col-sm-2">
                                                                                <label for="exampleInputEmail1">Designation</label>
                                                                                <select id="title" name="title" class="form-control">
                                                                                    <option value="Mr."> Mr.</option>

                                                                                </select>
                                                                            </div>

                                                                            <div class="col-sm-5">
                                                                                <label for="exampleInputEmail1">First Name<span class="req">*</span></label>
                                                                                <input type="text" class="form-control" id="f_name" name="f_name">
                                                                                <input type="hidden" id="customer_id" name="customer_id">
                                                                            </div>

                                                                            <div class="col-sm-5">
                                                                                <label for="exampleInputEmail1">Last Name<span class="req">*</span></label>
                                                                                <input type="text" class="form-control" id="l_name" name="l_name">
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-sm-2">
                                                                                <label for="exampleInputEmail1">Age</label>
                                                                                <select id="age" name="age" class="form-control">
                                                                                    <option value="18"> 18</br>  </option>

                                                                                </select>
                                                                            </div>

                                                                            <div class="col-sm-10">
                                                                                <label for="exampleInputEmail1">E-mail Address</label>
                                                                                <input type="text" class="form-control" id="email" name="email">
                                                                            </div>


                                                                        </div>

                                                                        <div class="row">

                                                                            <div class="col-sm-6">
                                                                                <label for="exampleInputEmail1">License No.</label>
                                                                                <input type="text" class="form-control" id="license" name="license">
                                                                            </div>

                                                                            <div class="col-sm-6">
                                                                                <label for="exampleInputEmail1">License Expiry Date.</label>
                                                                                <input type="text" class="form-control" id="license_expire" name="license_expire">
                                                                            </div>


                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <label for="exampleInputEmail1">NIC/ Passport No.</label>
                                                                                <input type="text" class="form-control" id="nic_passport" name="nic_passport">
                                                                            </div>

                                                                            <div class="col-sm-6">
                                                                                <label for="exampleInputEmail1">Mobile No.<span class="req">*</span></label>
                                                                                <input type="text" class="form-control" id="mobile" name="mobile" >
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="search-header">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <h3><strong>Billing Information</strong></h3>

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">

                                                                            <div class="col-sm-6">
                                                                                <label for="exampleInputEmail1">Billing Address</label>
                                                                    <!--            <input type="text" class="form-control" id="b_address" name="b_address">-->
                                                                                <textarea rows="2" class="form-control" id="address" name="address"></textarea>
                                                                            </div>

                                                                            <div class="col-sm-6">
                                                                                <label for="exampleInputEmail1">Billing Address (Optional)</label>
                                                                    <!--            <input type="text" class="form-control" id="b_address2" name="b_address2">-->
                                                                                <textarea rows="2" class="form-control"id="b_address2" name="b_address2"></textarea>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-sm-2">
                                                                                <label for="exampleInputEmail1">Postal Code</label>
                                                                                <input type="text" class="form-control" id="postal_code" name="postal_code">

                                                                            </div>

                                                                            <div class="col-sm-4">
                                                                                <label for="exampleInputEmail1">City</label>
                                                                                <input type="text" class="form-control" id="city" name="city">
                                                                            </div>

                                                                            <div class="col-sm-6">
                                                                                <label for="exampleInputEmail1">Country</label>
                                                                                <input type="text" id="country" name="country" class="form-control">

                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="search-header">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <h3><strong>Pickup Information</strong>(Optional)</h3>

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-sm-3">
                                                                                <label for="exampleInputEmail1">Flight No.</label>
                                                                                <input type="text" class="form-control" id="flightno" name="flightno">

                                                                            </div>

                                                                            <div class="col-sm-3">
                                                                                <label for="exampleInputEmail1">Flight Arrival Time</label>
                                                                                <input type="text" class="form-control" id="flightarrivaltime" name="flightarrivaltime">
                                                                            </div>

                                                                            <div class="col-sm-6">
                                                                                <label for="exampleInputEmail1">Pickup Place</label>
                                                                                <input type="text" id="pickupplace" name="pickupplace" class="form-control" >

                                                                            </div>
                                                                        </div>
                                                                        <br/>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <label for="exampleInputEmail1">Special Message </label>
                                                                                <!--<input type="text" class="form-control" id="flightno" name="flightno">-->
                                                                                <textarea id="specialmsg" name="specialmsg" class="form-control" ></textarea>

                                                                            </div>


                                                                        </div>




                                                                    </div>
                                                                    </br>

                                                                    <div class="row">

                                                                        <div class="col-sm-12">
                                                                            <h3><strong>Terms & Conditions</strong></h3>


                                                                            <hr>
                                                                            <p>
                                                                            <ol>
                                                                                <li class="terms-li">&nbsp;&nbsp;In case of major break-down substitute vehicle will be provided but not in the case of an accident</li>

                                                                            </ol>

                                                                            <p>&nbsp;</p>

                                                                            </p>
                                                                        </div>
                                                                    </div>

                                                                    <!--                                                                    <div class="row">
                                                                    
                                                                    
                                                                                                                                            <div class="checkbox checkbox-warning col-sm-12">
                                                                                                                                                <input type="radio" name="booking" id="radio7" value="0" checked>
                                                                                                                                                <label for="radio7">
                                                                                                                                                    Quotation
                                                                                                                                                </label>
                                                                                                                                            </div>
                                                                                                                                         
                                                                                                                                            <div class="checkbox checkbox-danger col-sm-12">
                                                                                                                                                <input type="radio" name="booking" id="radio9" value="2">
                                                                                                                                                <label for="radio9">
                                                                                                                                                    Book (Payment on Arrival)
                                                                                                                                                </label>
                                                                                                                                            </div>
                                                                    
                                                                    
                                                                    
                                                                    
                                                                                                                                        </div>-->

                                                                    <div class="row">


                                                                        <input type="hidden" id="pick_location" name="pick_location" value="3">
                                                                        <input type="hidden" id="ret_location" name="ret_location" value="3">
                                                                        <input type="hidden" id="numdays" name="numdays" value="1" >
                                                                        <input type="hidden" id="ways" name="ways" value="">               
                                                                        <input type="hidden" id="service" name="service" value="SD">

                                                                        <input type="hidden" id="currency" name="currency" value="2">
                                                                        <input type="hidden" id="stdate" name="stdate" value="02/11/2016">

                                                                        <input type="hidden" id="enddate" name="enddate" value="02/11/2016">
                                                                        <!--<input type="hidden" id="car_type" name="car_type" value="">-->

                                                                        <input type="hidden" id="sttime" name="sttime" value="00:00">

                                                                        <input type="hidden" id="endtime" name="endtime" value="00:00">

                                                                        <input type="hidden" id="freemile" name="freemile" value="100">
                                                                        <input type="hidden" id="modelid" name="modelid" value="125">

                                                                        <input type="hidden" id="unlimited" name="unlimited" value="0">

                                                                        <input type="hidden" id="discountedamount" name="discountedamount" value="5000">   
                                                                        <input type="hidden" id="amount" name="amount" value="5000">

                                                                        <input type="hidden" id="airportpagecharge" name="airportpagecharge" value="0">


                                                                        <input type="hidden" id="discountedcost" name="discountedcost" value="5000">



                                                                        <input type="hidden" id="gps" name="gps" value="" > 
                                                                        <input type="hidden" id="driverendoses" name="driverendoses" value=""> 
                                                                        <input type="hidden" id="insurancedrivers" name="insurancedrivers" value=""> 
                                                                        <input type="hidden" id="driverdates" name="driverdates" value="" > 
                                                                        <input type="hidden" id="buymiles" name="buymiles" value="" > 
                                                                        <input type="hidden" id="babyseats" name="babyseats" value="">
                                                                        <input type="hidden" id="boutiques" name="boutiques" value="">

                                                                        <input type="hidden" id="extraamount" name="extraamount" value="0"> 








                                                                        <input type="hidden" id="extraitemname" name="extraitemname[]" class="extraitemname" value="">

                                                                        <input type="hidden" id="extraitemcost" name="extraitemcost[]" class="extraitemcost" value="">

                                                                        <input type="hidden" id="extraitem" name="extraitem[]" value="">





                                                                        <input type="hidden" id="driverdate" name="driverdate[]" value="">



                                                                    </div>

                                                                    <hr />
                                                                    <div class="styled styled-primary">

                                                                        <input type="checkbox" id="chkSelect"  style="transform: scale(1.5); margin-top: 20px;"/>
                                                                        <label for="checkbox2" style="margin-left: 10px;">
                                                                            <strong>I hereby agree to the above terms and conditions</strong>
                                                                        </label>
                                                                    </div>

                                                                    <input type="submit" class="btn btn-lg btn-danger pull-right"  name="formbtn" id="formbtn" value="Continue to Checkout">

                                                                </form>

                                                            </div>
                                                            </div>
                                                            </div>
                                                            <!-- / endcontent area /////////////////////////////////////////////////////-->
                                                            <script src="../application_resources/js/jquery-1.11.2.min.js" type="text/javascript"></script>
                                                            <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js"></script>


                                                            <script type="text/javascript">

            $('#searchbtn').on('click', function () {

                var searchtype = $('#searchtype').val();
                var searchinput = $('#searchinput').val();

                $.post(site_url + '/article_controller/getClientDetail', {'searchtype': searchtype, 'searchinput': searchinput}, function (msg) {

                    if (msg != null) {
                        $('#dt').html(msg);
                    } else {

                    }
                });
            });






            $("#quatation_form").validate({
                rules: {
                    f_name: {required: true},
                    l_name: {required: true},
                    email: {required: true, email: true},
                    mobile: {required: true, minlength: 10, maxlength: 20},
                    country: {required: true}


                },
                submitHandler: function (form) {

                    var isChecked = $('#chkSelect').is(':checked');

                    if (isChecked) {
                        $('#quatation_form').submit();

                        $('#myModal').modal('show');
                        //setTimeout for the modal to hide
                        window.setTimeout(hide_modal, 4400);

                    } else {
                        alert('Please Be Checked!');
                    }
                }
            });

            function printReport() {

                $("#quatation_form").validate({
                    rules: {
                        title: {required: true},
                        f_name: {required: true},
                        l_name: {required: true},
                        age: {required: true},
                        license_no: {required: true},
                        passport_no: {required: true},
                        email: {required: true},
                        phone_no: {required: true},
                        country: {required: true},
                        city: {required: true},
                        postal_code: {required: true},
                        b_address: {required: true}
                        //                confirm_chkbox:{required:true},
                        //                currency: { required: true }
                    }
                });


                //  #quatation_form
                var drive_type = $('#drive_type').val();
                var vehicle_model = $('#vehicle_model').val();
                var picup_loc = $('#picup_loc').val();
                var dropoff_loc = $('#dropoff_loc').val();
                var num_days = $('#num_days').val();
                var currency = $('#currency').val();
                var excess_per_km = $('#excess_per_km').val();
                var freemilaege = $('#freemilaege').val();
                var total = $('#total').val();

                var title, f_name, l_name, age, license_no, passport_no, email, phone_no, country, city, postal_code, b_address, b_address2;

                title = $('#title').val();
                f_name = $('#f_name').val();
                l_name = $('#l_name').val();
                age = $('#age').val();
                license_no = $('#license_no').val();
                passport_no = $('#passport_no').val();
                email = $('#email').val();
                phone_no = $('#phone_no').val();
                country = $('#country').val();
                city = $('#city').val();
                postal_code = $('#postal_code').val();
                b_address = $('#b_address').val();
                b_address2 = $('#b_address2').val();

                // var extraitemname = $('.extraitemname').val();
                var extraitems = [];
                var extraitemcost = [];

                $('.extraitemname').each(function () {
                    // alert($(this).val());
                    extraitems.push($(this).val());
                });

                $('.extraitemcost').each(function () {
                    // alert($(this).val());
                    extraitemcost.push($(this).val());
                });


                var win = window.open(
                        site_url + '/article_controller/printReport?drive_type=' + drive_type
                        + '&vehicle_model=' + vehicle_model
                        + '&extraitems=' + extraitems
                        + '&extraitemcost=' + extraitemcost
                        + '&picup_loc=' + picup_loc
                        + '&dropoff_loc=' + dropoff_loc
                        + '&num_days=' + num_days
                        + '&currency=' + currency
                        + '&excess_per_km=' + excess_per_km
                        + '&total=' + total
                        + '&freemilaege=' + freemilaege

                        + '&title=' + title
                        + '&f_name=' + f_name
                        + '&l_name=' + l_name
                        + '&age=' + age
                        + '&license_no=' + license_no
                        + '&passport_no=' + passport_no
                        + '&email=' + email
                        + '&phone_no=' + phone_no
                        + '&country=' + country
                        + '&city=' + city
                        + '&postal_code=' + postal_code
                        + '&b_address=' + b_address
                        + '&b_address2=' + b_address2

                        );
                win.focus();

            }


                                                            </script>

                                                            <script>

                                                                function hide_modal() {
                                                                    $('#myModal').modal('hide');
                                                                }

                                                            </script>


                                                            <div class="row">
                                                                <!-- Large modal -->
                                                                <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">

                                                                            <div class="modal-body">


                                                                                <center><h4>Dear Customer <br/><br/> Thank You.</h4></center>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <style type="text/css">
                                                                .modal  {
                                                                    /*   display: block;*/
                                                                    padding-right: 0px;
                                                                    background-color: rgba(4, 4, 4, 0.8); 
                                                                }

                                                                .modal-dialog {
                                                                    top: 20%;
                                                                    width: 100%;
                                                                    position: absolute;
                                                                }
                                                                .modal-content {
                                                                    border-radius: 0px;
                                                                    border: none;
                                                                    top: 40%;
                                                                }
                                                                .modal-body {
                                                                    background-color: #E22E2E;
                                                                    color: white;
                                                                }

                                                            </style>


                                                            <!-- /end testimonails ////////////////////////////////////////////////////////////////-->
                                                            <!--contact row-->

                                                            <?php include("../views/footer.php"); ?>

                                                            <!--contact row-->

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
                                                                                    <img class="img-responsive" src="../application_resources/images/slider/doubleCab.jpg">
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
                                                                                            <div class="text-right small-text">Refundable Deposit  $350</div>
                                                                                            <a class="btn btn-lg btn-danger pull-right" href="#">Book Now</a>
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
                                                                                    <h2>SMS : +94 777 312 500</h2>
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
                                                                                                <div id="modeldiv">       </div>
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
                                                            <script src="../application_resources/js/jquery-1.11.2.min.js" type="text/javascript"></script>
                                                            <script src="../application_resources/js/bootstrap.js" type="text/javascript"></script>
                                                            <script src="../application_resources/js/owl.carousel.js"></script>
                                                            <script src="../application_resources/js/modernizr.js"></script>
                                                            <script src="../application_resources/js/placeholders.min.js"></script>
                                                            <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js"></script>


                                                            <script src="../application_resources/js/jquery-ui.js"></script>
                                                            <!-- date time picker -->
                                                            <script src="../application_resources/js/jquery.datetimepicker.js"></script>

                                                            <!-- date time picker -->

                                                            <!--menu js-->
                                                            <script src="../application_resources/js/script.js" type="text/javascript"></script>
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


                                                            <script src="../application_resources/custom_js/js_fe_function.js" type="text/javascript"></script>

                                                            <script src="http://momentjs.com/downloads/moment.js"></script> 

                                                            <!--New-->
                                                            <script src="../application_resources/js/slider.js" type="text/javascript"></script>
                                                            <script src="../application_resources/js/jquery-ui.min.js" type="text/javascript"></script>


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

                                                            <!--   <link rel="stylesheet" type="text/css" href="--><!--application_resources/css/build/css/intlTelInput.css"/>-->
                                                            <link rel="stylesheet" type="text/css" href="../application_resources/css/build/css/demo.css"/>
                                                            <!---->
                                                            <link rel="stylesheet" href="../application_resources/css/build/css/custom.css">
                                                            <link rel="stylesheet" type="text/css" href="../application_resources/css/country/css/countrySelect.css"/>

                                                            <script src="../application_resources/css/country/js/countrySelect.min.js" type="text/javascript"></script>
                                                            <!--start form wizard-->
                                                            <script src="../application_resources/wizard2/dist/jquery.wizard.js"></script>
                                                            <link href="../application_resources/wizard2/dist/jquery.wizard.css" rel="stylesheet">

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

                                                            <!--      SITE  -->
                                                            <script>


                                                                $('input[name="country"]').countrySelect({
                                                                    //  defaultCountry: "lk"
                                                                    defaultCountry: "auto"
                                                                });

                                                                $('input[name="telephone"]').intlTelInput({//autoFormat: true ,
                                                                    // autoHideDialCode: true,
                                                                    // defaultCountry: "lk"
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

                                                            <script src="../application_resources/notify/bootstrap-notify.min.js"></script>
                                                            <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css" rel="stylesheet">

                                                            <!--end notifi-->

                                                            </body>

                                                            </html>

