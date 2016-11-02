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



        <!--start inquiry model--> 

        <div class="modal fade" id="inquirymodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-car"></i>  <strong>Book / Enquire </strong></h4>
                    </div>
                    <div class="modal-body clearfix">

                        <form   id="get_search_form">
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
                                <!--    <label for="exampleInputNationality">Contact Number</label>-->
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
                                    <option value="SELF DRIVE">SELF DRIVE</option>
                                    <option value="WITH DRIVER">WITH DRIVER</option>
                                    <option value="WEDDINGS">WEDDINGS</option>
                                    <option value="AIRPORT TRANSFER">AIRPORT TRANSFER</option>
                                    <option value="DROP & PICKUP (TAXI)">DROP & PICKUP (TAXI)</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <!--    <label for="exampleInputNationality">Type of vehicle</label>-->
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
                                <div  id="send_enquiry_search"></div> 
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

        <div class="container content-wrapper">
            <div class="row">
                <!-- Start Side Bar -->
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
                                            Casons Head office                    </h5>
                                    </li>

                                    <li><p>Drop-off Location</p>
                                        <h5 class="" >
                                            Casons Head office                    </h5>
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
                                                            <form id="quotationfrom" action="http://casons.lk/article_controller/quotation" method="post">

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

                                                            <!-- Start Body Content -->
                                                            <div class="col-md-8">
                                                                <!--search sorting-->
                                                                <div class="search-header">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <h1>Available Extras</h1>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/search sorting-->
                                                                <!--search sorting image slider-->

                                                                <!--/search sorting image slider-->
                                                                <table class="search-table">

                                                                    <!--new search results row-->
                                                                    <tbody>


<!--                                                                        <tr style="">
                                                                            <td>
                                                                                <div class="searh-row clearfix">
                                                                                    <div class="col-md-2">
                                                                                        <img class="img-responsive" src="../application_resources/images/slider/doubleCab.jpg">
                                                                                    </div>
                                                                                    <div class="col-md-10">
                                                                                        <div class="row" >
                                                                                            <div class="col-sm-7">

                                                                                                <h1 >GPS Navigator </h1>
                                                                                                <p> Satellite Navigation System </p>

                                                                                                <p>  Required Items:
                                                                                                    <select  name="gpsitem" id="gpsitem" >
                                                                                                        <option value="1"> 1 </option>
                                                                                                    </select>
                                                                                                </p>
                                                                                            </div>

                                                                                            <div class="col-sm-5">
                                                                                                <span class="car-details-price">
                                                                                                    <h1>
                                                                                                        <small> LKR LKR  </small>
                                                                                                        500 
                                                                                                        <br>
                                                                                                    </h1>

                                                                                                    <span>Item price/Day</span>
                                                                                                </span>
                                                                                                <div class="clearfix"></div>

                                                                                                <div id="addbtn1" class="addbtn">
                                                                                                    <a class="quot btn btn-sm btn-success pull-right " onclick="addGPS('GPS Navigator', '500', 'LKR')" >Add</a>
                                                                                                </div>
                                                                                                <div id="removebtn1" class="removebtn" style="display: none" >
                                                                                                    <a class="quot btn btn-sm btn-danger pull-right " onclick="removeGPS('500')"  >Remove</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </td>
                                                                        </tr>-->

                                                                        <!--/ search results row-->
                                                                        <tr>
                                                                            <td>
                                                                                <div class="searh-row clearfix">
                                                                                    <!--                    <div class="col-md-3">-->
                                                                                    <!--                        <img class="img-responsive" src="images/50.jpg">-->
                                                                                    <!--                    </div>-->
                                                                                    <div class="col-md-12">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <h1>Terms & Conditions</h1>
                                                                                                <hr>
                                                                                                <p>

                                                                                                <ol>
                                                                                                    <li class="terms-li">&nbsp;&nbsp;In case of major break-down substitute vehicle will be provided but not in the case of an accident</li>
                                                                                                    <li class="terms-li">&nbsp;&nbsp;Hirer is prohibited from using the vehicle in breach of Laws-excessive speed, under influence or Liquor/campaign/any other illegal purpose and in areas of civil disturbance/Mortgage, sales, alteration/Transportation of pets,illegal items and any transaction related to the vehicle</li>
                                                                                                    <li class="terms-li">&nbsp;&nbsp;Vehicle cannot be re-rented or driven by any other 3rd party other than person who had signed the agreement. In case of 2nd driver additional payment will be charged</li>
                                                                                                    <li class="terms-li">&nbsp;&nbsp;No refund of Rental in part/whole if vehicle is Damage or returned before the expiry date</li>
                                                                                                </ol>

                                                                                                <p>&nbsp;</p>
                                                                                                </br> </br>


                                                                                                </p>

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </td>
                                                                        </tr>
                                                                        <!--row-->
                                                                    </tbody>
                                                                </table>
                                                                <a class="btn btn-lg btn-danger pull-right" onclick="submitForm()"> Continue to Checkout </a>
                                                                <!--new form start-->
                                                            </div>
                                                            </div>
                                                            </div>
                                                            <!-- / endcontent area /////////////////////////////////////////////////////-->
                                                            <script type="text/javascript">

                                                                function addNotify(msg) {
                                                                    $.notify({
                                                                        // options
                                                                        icon: 'glyphicon glyphicon-plus',
                                                                        //title: 'GPS',
                                                                        message: msg,
                                                                        //url: 'https://github.com/mouse0270/bootstrap-notify',
                                                                        target: '_blank'
                                                                    }, {
                                                                        // settings
                                                                        element: 'body',
                                                                        position: null,
                                                                        type: "success",
                                                                        allow_dismiss: true,
                                                                        newest_on_top: false,
                                                                        showProgressbar: false,
                                                                        placement: {
                                                                            from: "bottom",
                                                                            align: "left"
                                                                        },
                                                                        offset: 10,
                                                                        spacing: 10,
                                                                        z_index: 1031,
                                                                        delay: 1000,
                                                                        timer: 1000,
                                                                        url_target: '_blank',
                                                                        mouse_over: null,
                                                                        animate: {
                                                                            enter: 'animated zoomInDown',
                                                                            exit: 'animated zoomOutUp'
                                                                        },
                                                                        onShow: null,
                                                                        onShown: null,
                                                                        onClose: null,
                                                                        onClosed: null,
                                                                        icon_type: 'class',
                                                                        template: '<div data-notify="container" class="col-xs-11 col-sm-2 alert alert-{0} " role="alert">' +
                                                                                '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                                                                                '<span data-notify="icon"></span> ' +
                                                                                '<span data-notify="title">{1}</span> ' +
                                                                                '<span data-notify="message">{2}</span>' +
                                                                                '<div class="progress" data-notify="progressbar">' +
                                                                                '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                                                                '</div>' +
                                                                                '<a href="{3}" target="{4}" data-notify="url"></a>' +
                                                                                '</div>'
                                                                    });
                                                                }

                                                                function removeNotify(msg) {
                                                                    $.notify({
                                                                        // options
                                                                        icon: 'glyphicon glyphicon-minus',
                                                                        //title: 'GPS',
                                                                        message: msg,
                                                                        //url: 'https://github.com/mouse0270/bootstrap-notify',
                                                                        target: '_blank'
                                                                    }, {
                                                                        // settings
                                                                        element: 'body',
                                                                        position: null,
                                                                        type: "danger",
                                                                        allow_dismiss: true,
                                                                        newest_on_top: false,
                                                                        showProgressbar: false,
                                                                        placement: {
                                                                            from: "bottom",
                                                                            align: "left"
                                                                        },
                                                                        offset: 10,
                                                                        spacing: 10,
                                                                        z_index: 1031,
                                                                        delay: 1000,
                                                                        timer: 1000,
                                                                        url_target: '_blank',
                                                                        mouse_over: null,
                                                                        animate: {
                                                                            enter: 'animated zoomInDown',
                                                                            exit: 'animated zoomOutUp'
                                                                        },
                                                                        onShow: null,
                                                                        onShown: null,
                                                                        onClose: null,
                                                                        onClosed: null,
                                                                        icon_type: 'class',
                                                                        template: '<div data-notify="container" class="col-xs-11 col-sm-2 alert alert-{0} " role="alert">' +
                                                                                '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                                                                                '<span data-notify="icon"></span> ' +
                                                                                '<span data-notify="title">{1}</span> ' +
                                                                                '<span data-notify="message">{2}</span>' +
                                                                                '<div class="progress" data-notify="progressbar">' +
                                                                                '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                                                                '</div>' +
                                                                                '<a href="{3}" target="{4}" data-notify="url"></a>' +
                                                                                '</div>'
                                                                    });
                                                                }



                                                                function  addGPS(service, price, code) {


                                                                    var days = 1
                                                                    var gpsvalue = $('#gpsitem').val();

                                                                    var gpsamount = days * price;

                                                                    $('#gps').val(gpsvalue);

                                                                    $('#addbtn1').hide();
                                                                    $('#removebtn1').show();

                                                                    $("#listextra").append("<li id='ligps'>" + service + "<span class='pull-right'>" + code + " " + gpsamount + "<span></li>");

                                                                    var total = $('#discountedamount').val();
                                                                    //var payable = total+price;   
                                                                    var payable = parseInt(total) + parseInt(gpsamount);

                                                                    /*  $('#fulltotal').text(payable);
                                                                     $('#discountedamount').val(payable);  */
                                                                    $('#discountedamount').val(payable);

                                                                    // var apcharge = $('#airportpagecharge').val();

                                                                    var apcharge = $('#airportpagecharge').val();

                                                                    if (apcharge > 0) {
                                                                        apcharge = $('#airportpagecharge').val();
                                                                    } else {
                                                                        apcharge = 0;
                                                                    }

                                                                    $('#fulltotal').text(payable + parseInt(apcharge));

                                                                    addNotify('GPS Added');

                                                                }

                                                                function  removeGPS(price) {


                                                                    var days = 1
                                                                    var gpsamount = days * price;

                                                                    $('#gps').val('');

                                                                    $('#addbtn1').show();
                                                                    $('#removebtn1').hide();

                                                                    $("#ligps").remove();

                                                                    var total = $('#discountedamount').val();
                                                                    var payable = total - gpsamount;

                                                                    /*  $('#fulltotal').text(payable);
                                                                     $('#discountedamount').val(payable);  */

                                                                    $('#discountedamount').val(payable);
                                                                    // var apcharge = $('#airportpagecharge').val();

                                                                    var apcharge = $('#airportpagecharge').val();

                                                                    if (apcharge > 0) {
                                                                        apcharge = $('#airportpagecharge').val();
                                                                    } else {
                                                                        apcharge = 0;
                                                                    }
                                                                    $('#fulltotal').text(payable + parseInt(apcharge));

                                                                    removeNotify('GPS Removed');
                                                                }

                                                                function addDriverEndose(service, price, code) {


                                                                    var driverendosevalue = $('#driverendose').val();
                                                                    $('#driverendoses').val(driverendosevalue);

                                                                    $('#addbtn2').hide();
                                                                    $('#removebtn2').show();

                                                                    price = parseInt(driverendosevalue) * parseInt(price);

                                                                    $("#listextra").append("<li id='lidriverendose'>" + service + "<span class='pull-right'>" + code + " " + price + "<span></li>");

                                                                    var total = $('#discountedamount').val();
                                                                    //var payable = total+price;   
                                                                    var payable = parseInt(total) + parseInt(price);

                                                                    /*  $('#fulltotal').text(payable);
                                                                     $('#discountedamount').val(payable);  */

                                                                    $('#discountedamount').val(payable);
                                                                    //var apcharge = $('#airportpagecharge').val();

                                                                    var apcharge = $('#airportpagecharge').val();

                                                                    if (apcharge > 0) {
                                                                        apcharge = $('#airportpagecharge').val();
                                                                    } else {
                                                                        apcharge = 0;
                                                                    }

                                                                    $('#fulltotal').text(payable + parseInt(apcharge));

                                                                    addNotify('Driver Endosement Added');

                                                                }

                                                                function  removeDriverEndose(price) {

                                                                    $('#driverendoses').val('');
                                                                    $('#addbtn2').show();
                                                                    $('#removebtn2').hide();

                                                                    $("#lidriverendose").remove();

                                                                    var total = $('#discountedamount').val();
                                                                    var payable = total - price;

                                                                    /*  $('#fulltotal').text(payable);
                                                                     $('#discountedamount').val(payable);  */

                                                                    $('#discountedamount').val(payable);
                                                                    //var apcharge = $('#airportpagecharge').val();

                                                                    var apcharge = $('#airportpagecharge').val();

                                                                    if (apcharge > 0) {
                                                                        apcharge = $('#airportpagecharge').val();
                                                                    } else {
                                                                        apcharge = 0;
                                                                    }

                                                                    $('#fulltotal').text(payable + parseInt(apcharge));

                                                                    removeNotify('Driver Endosement Removed');

                                                                }
                                                                function  addInsuranceDriver(service, price, code) {

                                                                    var insurancedrivervalue = $('#insurancedriver').val();
                                                                    $('#insurancedrivers').val(insurancedrivervalue);

                                                                    $('#addbtn3').hide();
                                                                    $('#removebtn3').show();

                                                                    $("#listextra").append("<li id='lidriverinsurance'>" + service + "<span class='pull-right'>" + code + " " + price + "<span></li>");

                                                                    var total = $('#discountedamount').val();
                                                                    //var payable = total+price;   
                                                                    var payable = parseInt(total) + parseInt(price);

                                                                    /*  $('#fulltotal').text(payable);
                                                                     $('#discountedamount').val(payable);  */

                                                                    $('#discountedamount').val(payable);
                                                                    //var apcharge = $('#airportpagecharge').val();

                                                                    var apcharge = $('#airportpagecharge').val();

                                                                    if (apcharge > 0) {
                                                                        apcharge = $('#airportpagecharge').val();
                                                                    } else {
                                                                        apcharge = 0;
                                                                    }

                                                                    $('#fulltotal').text(payable + parseInt(apcharge));

                                                                    addNotify('Insurance Cover Added');

                                                                }
                                                                function  removeInsuranceDriver(price) {

                                                                    $('#insurancedrivers').val('');

                                                                    $('#addbtn3').show();
                                                                    $('#removebtn3').hide();

                                                                    $("#lidriverinsurance").remove();

                                                                    var total = $('#discountedamount').val();
                                                                    var payable = total - price;

                                                                    /*   $('#fulltotal').text(payable);
                                                                     $('#discountedamount').val(payable);  */

                                                                    $('#discountedamount').val(payable);
                                                                    //var apcharge = $('#airportpagecharge').val();

                                                                    var apcharge = $('#airportpagecharge').val();

                                                                    if (apcharge > 0) {
                                                                        apcharge = $('#airportpagecharge').val();
                                                                    } else {
                                                                        apcharge = 0;
                                                                    }

                                                                    $('#fulltotal').text(payable + parseInt(apcharge));

                                                                    removeNotify('Insurance Cover Removed');

                                                                }
                                                                function  addRequestDriver(service, price, code) {

                                                                    var driverdatevalue = $('input:checkbox:checked.driverdate').map(function () {
                                                                        return this.value;
                                                                    }).get();

                                                                    var driverdates = driverdatevalue.valueOf();

                                                                    if (driverdates != '') {

                                                                        price = (driverdates.length) * price;
                                                                        $("#listextra").append("<li id='lidriverrequest'>" + service + "<span class='pull-right'>" + code + " " + price + "<span></li>");

                                                                        var total = $('#discountedamount').val();
                                                                        //var payable = total+price;
                                                                        var payable = parseInt(total) + parseInt(price);

                                                                        /*   $('#fulltotal').text(payable);
                                                                         $('#discountedamount').val(payable);  */

                                                                        $('#discountedamount').val(payable);
                                                                        //       var apcharge = $('#airportpagecharge').val();

                                                                        var apcharge = $('#airportpagecharge').val();

                                                                        if (apcharge > 0) {
                                                                            apcharge = $('#airportpagecharge').val();
                                                                        } else {
                                                                            apcharge = 0;
                                                                        }

                                                                        $('#fulltotal').text(payable + parseInt(apcharge));

                                                                        $('#driverdates').val(driverdatevalue);

                                                                        $('#addbtn4').hide();
                                                                        $('#removebtn4').show();

                                                                        addNotify('Driver Dates Added');

                                                                    } else {

                                                                        alert('Please select required dates');
                                                                    }




                                                                }

                                                                function  addBuyMileage(service, price, code) {

                                                                    var buymilevalue = $('#buymile').val();

                                                                    if (buymilevalue >= 1) {

                                                                        $('#buymiles').val(buymilevalue);

                                                                        $('#addbtn5').hide();
                                                                        $('#removebtn5').show();

                                                                        price = parseInt(buymilevalue) * parseInt(price);

                                                                        $("#listextra").append("<li id='libuymile'>" + service + "<span class='pull-right'>" + code + " " + price + "<span></li>");

                                                                        var total = $('#discountedamount').val();
                                                                        //var payable = total+price;   
                                                                        var payable = parseInt(total) + parseInt(price);

                                                                        /*    $('#fulltotal').text(payable);
                                                                         $('#discountedamount').val(payable);  */

                                                                        $('#discountedamount').val(payable);

                                                                        //       var apcharge = $('#airportpagecharge').val();

                                                                        var apcharge = $('#airportpagecharge').val();

                                                                        if (apcharge > 0) {
                                                                            apcharge = $('#airportpagecharge').val();
                                                                        } else {
                                                                            apcharge = 0;
                                                                        }


                                                                        $('#fulltotal').text(payable + parseInt(apcharge));

                                                                        addNotify('Extra Mileage Added');

                                                                    } else {
                                                                        alert('Please Enter correct Value');
                                                                    }





                                                                }
                                                                function  removeBuyMileage(price) {

                                                                    var buymilevalue = $('#buymile').val();

                                                                    price = parseInt(buymilevalue) * parseInt(price);

                                                                    var total = $('#discountedamount').val();
                                                                    var payable = total - price;

                                                                    /*   $('#fulltotal').text(payable);
                                                                     $('#discountedamount').val(payable);  */

                                                                    $('#discountedamount').val(payable);

                                                                    //    var apcharge = $('#airportpagecharge').val();

                                                                    var apcharge = $('#airportpagecharge').val();

                                                                    if (apcharge > 0) {
                                                                        apcharge = $('#airportpagecharge').val();
                                                                    } else {
                                                                        apcharge = 0;
                                                                    }


                                                                    $('#fulltotal').text(payable + parseInt(apcharge));

                                                                    $('#buymile').val('');
                                                                    $('#buymiles').val('');

                                                                    $('#addbtn5').show();
                                                                    $('#removebtn5').hide();

                                                                    $("#libuymile").remove();

                                                                    removeNotify('Extra Mileage Removed');


                                                                }
                                                                function  addBabySeat(service, price, code) {

                                                                    //  var days = 
                                                                    var days = 1
                                                                    var babyseatvalue = $('#babyseat').val();

                                                                    if (babyseatvalue >= 1) {

                                                                        $('#babyseats').val(babyseatvalue);

                                                                        $('#addbtn6').hide();
                                                                        $('#removebtn6').show();

                                                                        price = parseInt(babyseatvalue) * parseInt(price) * days;

                                                                        $("#listextra").append("<li id='libabyseat'>" + service + "<span class='pull-right'>" + code + " " + price + "<span></li>");

                                                                        var total = $('#discountedamount').val();
                                                                        //var payable = total+price;   
                                                                        var payable = parseInt(total) + parseInt(price);

                                                                        /*   $('#fulltotal').text(payable);
                                                                         $('#discountedamount').val(payable);  */

                                                                        $('#discountedamount').val(payable);

                                                                        //var apcharge = $('#airportpagecharge').val();

                                                                        var apcharge = $('#airportpagecharge').val();

                                                                        if (apcharge > 0) {
                                                                            apcharge = $('#airportpagecharge').val();
                                                                        } else {
                                                                            apcharge = 0;
                                                                        }

                                                                        var airportpagingboard = 0
                                                                        if (airportpagingboard > 0) {
                                                                            airportpagingboard = 0
                                                                        } else {
                                                                            airportpagingboard = 0;
                                                                        }


                                                                        $('#fulltotal').text(payable + parseInt(apcharge) + parseInt(airportpagingboard));

                                                                        addNotify('Baby Seat Added');

                                                                    } else {
                                                                        alert('Please Enter correct Value');
                                                                    }


                                                                }
                                                                function  removeBabySeat(price, code) {


                                                                    var days = 1
                                                                    var total = $('#discountedamount').val();

                                                                    var babyseatvalue = $('#babyseat').val();
                                                                    price = parseInt(babyseatvalue) * parseInt(price) * days;


                                                                    var payable = total - price;

                                                                    /*  $('#fulltotal').text(payable);
                                                                     $('#discountedamount').val(payable);  */

                                                                    $('#discountedamount').val(payable);
                                                                    //var apcharge = $('#airportpagecharge').val();

                                                                    var apcharge = $('#airportpagecharge').val();

                                                                    if (apcharge > 0) {
                                                                        apcharge = $('#airportpagecharge').val();
                                                                    } else {
                                                                        apcharge = 0;
                                                                    }

                                                                    var airportpagingboard = 0
                                                                    if (airportpagingboard > 0) {
                                                                        airportpagingboard = 0
                                                                    } else {
                                                                        airportpagingboard = 0;
                                                                    }

                                                                    $('#fulltotal').text(payable + parseInt(apcharge) + parseInt(airportpagingboard));

                                                                    $('#babyseat').val('');
                                                                    $('#babyseats').val('');

                                                                    $('#addbtn6').show();
                                                                    $('#removebtn6').hide();

                                                                    $("#libabyseat").remove();

                                                                    removeNotify('Baby Seat Removed');


                                                                }

                                                                // flower boutique
                                                                function  addBoutique(service, price, code) {

                                                                    var days = 11
                                                                    var boutiquevalue = $('#boutique').val();

                                                                    if (boutiquevalue >= 1) {

                                                                        $('#boutiques').val(boutiquevalue);

                                                                        $('#addbtn7').hide();
                                                                        $('#removebtn7').show();

                                                                        price = parseInt(boutiquevalue) * parseInt(price) * days;

                                                                        $("#listextra").append("<li id='liboutique'>" + service + "<span class='pull-right'>" + code + " " + price + "<span></li>");

                                                                        var total = $('#discountedamount').val();
                                                                        //var payable = total+price;
                                                                        var payable = parseInt(total) + parseInt(price);

                                                                        $('#discountedamount').val(payable);

                                                                        //var apcharge = $('#airportpagecharge').val();
                                                                        var apcharge = 0;

                                                                        if (apcharge > 0) {
                                                                            apcharge = $('#airportpagecharge').val();
                                                                        } else {
                                                                            apcharge = 0;
                                                                        }

                                                                        // alert(typeof(parseInt(apcharge)));

                                                                        $('#fulltotal').text((payable + parseInt(apcharge)));

                                                                        addNotify('Boutiques Added');

                                                                    } else {
                                                                        alert('Please Enter correct Value');
                                                                    }


                                                                }

                                                                function  removeBoutique(price, code) {


                                                                    var days = 1
                                                                    var total = $('#discountedamount').val();

                                                                    var boutiquevalue = $('#boutique').val();

                                                                    var price = parseInt(boutiquevalue) * parseInt(price) * parseInt(days);


                                                                    var payable = parseInt(total) - parseInt(price);

                                                                    $('#discountedamount').val(payable);

                                                                    var apcharge = 0;

                                                                    if (apcharge > 0) {
                                                                        apcharge = $('#airportpagecharge').val();
                                                                    } else {
                                                                        apcharge = 0;
                                                                    }

                                                                    $('#fulltotal').text((parseInt(payable) + parseInt(apcharge)));


                                                                    $('#boutique').val('');
                                                                    $('#boutiques').val('');

                                                                    $('#addbtn7').show();
                                                                    $('#removebtn7').hide();

                                                                    $("#liboutique").remove();

                                                                    removeNotify('Boutiques Removed');
                                                                }


                                                                function submitForm() {
                                                                    $('#bookingfrom').submit();
                                                                }

                                                            </script>




                                                            <script type="text/javascript">


                                                                function addBtnRemove($amount, $id, $price, $currency) {

                                                                    var itemid = '#item' + $id;
                                                                    var itemno = $(itemid).val();
                                                                    var price = ($price * itemno / $currency).toFixed(2);

                                                                    var extraaddid = '#addbtn' + $id;
                                                                    var extraremoveid = '#removebtn' + $id;
                                                                    var extraitemid = '#extraited' + $id;
                                                                    var extraitem = '#extraitem' + $id;
                                                                    var extracostid = '#extracost' + $id;
                                                                    var h1id = '#h1' + $id;
                                                                    var extraliid = '#li' + $id;
                                                                    $(extraaddid).hide();
                                                                    $(extraremoveid).show();
                                                                    $(extraitem).val($id);
                                                                    $(extraliid).append($(h1id).text() + " " + " <span class='pull-right' > " + price + " " + 'LKR </span>');

                                                                    //  $(extraliid).append($('#h1id').val()+"     "+"Cost:= "+price);
                                                                    //   $(extraliid).val($('#h1id').val()+"     "+"Cost:= "+price);
                                                                    //  var extradiv = document.getElementById("extraitems");
                                                                    //  extradiv.innerHTML += "<input type='text' id='extraitemid' name='extraitem' value=''>";
                                                                    $(extracostid).val(price);
                                                                    var cost = 0;
                                                                    var values = $('input[name="extracost[]"]').map(function () {
                                                                        return this.value
                                                                    }).get();

                                                                    for (i = 0; i < values.length; i++) {
                                                                        if (!values[i]) {
                                                                            //alert('null');
                                                                        } else {
                                                                            // alert(values[i]);
                                                                            cost += parseInt(values[i]);
                                                                        }
                                                                    }
                                                                    //alert('Sum is: '+cost);
                                                                    var totalamount = parseFloat(cost) + parseFloat($amount);
                                                                    $('#totalamounth5').text('');
                                                                    $('#totalamounth5').append('<strong>Total ' + " <span class='pull-right' > " + totalamount.toFixed(2) + "</span></strong>");
                                                                    $('#total').val(totalamount);

                                                                }

                                                                function removeBtnRemove($amount, $id, price) {

                                                                    var extraaddid = '#addbtn' + $id;
                                                                    var extraremoveid = '#removebtn' + $id;

                                                                    var extraitemid = '#extraited' + $id;
                                                                    var extraitem = '#extraitem' + $id;

                                                                    var extracostid = '#extracost' + $id;

                                                                    var h1id = '#h1' + $id;
                                                                    var extraliid = '#li' + $id;

                                                                    $(extraaddid).show();
                                                                    $(extraremoveid).hide();

                                                                    $(extraitem).val('');
                                                                    $(extraliid).text('');

                                                                    $(extracostid).val('');
                                                                    var cost = 0;
                                                                    var values = $('input[name="extracost[]"]').map(function () {
                                                                        return this.value
                                                                    }).get();

                                                                    for (i = 0; i < values.length; i++) {
                                                                        if (!values[i]) {
                                                                            //alert('null');
                                                                        } else {
                                                                            // alert(values[i]);
                                                                            cost += parseInt(values[i]);
                                                                        }
                                                                    }
                                                                    //alert('Sum is: '+cost);
                                                                    var totalamount = parseFloat(cost) + parseFloat($amount);
                                                                    $('#totalamounth5').text('');
                                                                    $('#totalamounth5').append('Total ' + totalamount.toFixed(2));
                                                                    $('#total').val(totalamount.toFixed(2));

                                                                    //  uncheck checked items
                                                                    $(".driverdate").prop("checked", false);
                                                                    $('.buymiles').val(0);
                                                                    $('#extramileneed').val('');
                                                                    $('.driverreq').val('');

                                                                }


                                                                function quotationLoad() {
                                                                    //  document.getElementById("quatationform").submit();
                                                                    $('#quotationfrom').submit();
                                                                }


                                                                function addDriver($amount, $id, $price, $currency) {

                                                                    var dd = $('input:checkbox:checked.driverdate').map(function () {
                                                                        return this.value;
                                                                    }).get();


                                                                    $('.driverreq').val(dd);

                                                                    // var itemid = '#item'+$id;
                                                                    // var itemno = $(itemid).val();
                                                                    var price = ($price * dd.length / $currency).toFixed(2);

                                                                    var extraaddid = '#addbtn' + $id;
                                                                    var extraremoveid = '#removebtn' + $id;
                                                                    var extraitemid = '#extraited' + $id;
                                                                    var extraitem = '#extraitem' + $id;
                                                                    var extracostid = '#extracost' + $id;
                                                                    var h1id = '#h1' + $id;
                                                                    var extraliid = '#li' + $id;
                                                                    $(extraaddid).hide();
                                                                    $(extraremoveid).show();
                                                                    $(extraitem).val($id);
                                                                    $(extraliid).append($(h1id).text() + " " + " <span class='pull-right' > " + price + " " + 'LKR </span>');

                                                                    //  $(extraliid).append($('#h1id').val()+"     "+"Cost:= "+price);
                                                                    //    $(extraliid).val($('#h1id').val()+"     "+"Cost:= "+price);
                                                                    //  var extradiv = document.getElementById("extraitems");
                                                                    //  extradiv.innerHTML += "<input type='text' id='extraitemid' name='extraitem' value=''>";
                                                                    $(extracostid).val(price);
                                                                    var cost = 0;
                                                                    var values = $('input[name="extracost[]"]').map(function () {
                                                                        return this.value
                                                                    }).get();

                                                                    for (i = 0; i < values.length; i++) {
                                                                        if (!values[i]) {
                                                                            //alert('null');
                                                                        } else {
                                                                            // alert(values[i]);
                                                                            cost += parseInt(values[i]);
                                                                        }
                                                                    }
                                                                    //alert('Sum is: '+cost);
                                                                    var totalamount = parseFloat(cost) + parseFloat($amount);
                                                                    $('#totalamounth5').text('');
                                                                    $('#totalamounth5').append('<strong>Total ' + " <span class='pull-right' > " + totalamount.toFixed(2) + "</span></strong>");
                                                                    $('#total').val(totalamount);

                                                                }


                                                                function buyMileage($amount, $id, $price, $currency) {

                                                                    var miles = $('#extramileneed').val();

                                                                    $('.buymiles').val(miles);

                                                                    var price = ($price * miles / $currency).toFixed(2);

                                                                    var extraaddid = '#addbtn' + $id;
                                                                    var extraremoveid = '#removebtn' + $id;
                                                                    var extraitemid = '#extraited' + $id;
                                                                    var extraitem = '#extraitem' + $id;
                                                                    var extracostid = '#extracost' + $id;
                                                                    var h1id = '#h1' + $id;
                                                                    var extraliid = '#li' + $id;
                                                                    $(extraaddid).hide();
                                                                    $(extraremoveid).show();
                                                                    $(extraitem).val($id);
                                                                    $(extraliid).append($(h1id).text() + " " + " <span class='pull-right' > " + price + " " + 'LKR </span>');

                                                                    //  $(extraliid).append($('#h1id').val()+"     "+"Cost:= "+price);
                                                                    //    $(extraliid).val($('#h1id').val()+"     "+"Cost:= "+price);
                                                                    //  var extradiv = document.getElementById("extraitems");
                                                                    //  extradiv.innerHTML += "<input type='text' id='extraitemid' name='extraitem' value=''>";
                                                                    $(extracostid).val(price);
                                                                    var cost = 0;
                                                                    var values = $('input[name="extracost[]"]').map(function () {
                                                                        return this.value
                                                                    }).get();

                                                                    for (i = 0; i < values.length; i++) {
                                                                        if (!values[i]) {
                                                                            //alert('null');
                                                                        } else {
                                                                            // alert(values[i]);
                                                                            cost += parseInt(values[i]);
                                                                        }
                                                                    }
                                                                    //alert('Sum is: '+cost);
                                                                    var totalamount = parseFloat(cost) + parseFloat($amount);
                                                                    $('#totalamounth5').text('');
                                                                    $('#totalamounth5').append('<strong>Total ' + " <span class='pull-right' > " + totalamount.toFixed(2) + "</span></strong>");
                                                                    $('#total').val(totalamount);
                                                                }


                                                            </script>          <!-- /end testimonails ////////////////////////////////////////////////////////////////-->

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
                                                            <link rel="stylesheet" type="text/css" href="http://casons.lk/application_resources/css/build/css/demo.css"/>
                                                            <!---->
                                                            <link rel="stylesheet" href="http://casons.lk/application_resources/css/build/css/custom.css">
                                                            <link rel="stylesheet" type="text/css" href="http://casons.lk/application_resources/css/country/css/countrySelect.css"/>

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

