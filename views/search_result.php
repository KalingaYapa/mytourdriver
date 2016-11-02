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
                });</script>

        <!--      SITE  -->
        <script>


                            $('input[name="country"]').countrySelect({
                    //  defaultCountry: "lk"
                    defaultCountry: "auto"
                    });</script>

        <script>

                            $(window).load(function () {
                    var countryCode = $('input[name="telephone"]').intlTelInput("getSelectedCountryData").iso2;
                            // alert(countryData.iso2);
                            $('input[name="country"]').countrySelect("selectCountry", countryCode);
                    });</script>



        <!--header start-->

        <?php include("header.html"); ?>

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
        <!--start Cooperate rental model-->

        <div class="modal fade" id="cooperatemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-car"></i>  <strong>Cooperate Rental </strong></h4>
                    </div>
                    <div class="modal-body clearfix">

                        <form   id="cooperate_inquiry_form">
                            <div class="form-group col-sm-6">
                                <label for="exampleInputName">Name</label>
                                <input type="text" class="form-control" name="u_name" id="u_name" placeholder="Contact person Name" autocomplete="off">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="exampleInputName">Company Name</label>
                                <input type="text" class="form-control" name="c_name" id="c_name" placeholder="Your Company Name" autocomplete="off">
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="exampleInputName">Mobile No</label>
                                <input type="text" class="form-control" name="u_mobile" id="u_mobile" placeholder="Mobile No." autocomplete="off">
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="exampleInputName">Telephone No</label>
                                <input type="text" class="form-control" name="c_telno" id="c_telno" placeholder="Telephone No." autocomplete="off">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="exampleInputName">Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="exampleInputName">Start Date</label>
                                <input type="date" class="form-control" name="stdate" id="stdate"  autocomplete="off">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="exampleInputName">End Date</label>
                                <input type="date" class="form-control" name="enddate" id="enddate"  autocomplete="off">
                            </div>

                            <div class="form-group col-sm-6">

                                <label for="exampleInputName">Service Type</label>
                                <select class="form-control" name="service" id="service" autocomplete="off">
                                    <option value="OTHER">Select Type of Service</option>
                                    <option value="SELF DRIVE">SELF DRIVE</option>
                                    <option value="WITH DRIVER">WITH DRIVER</option>
                                    <option value="WEDDINGS">WEDDINGS</option>
                                    <option value="AIRPORT TRANSFER">AIRPORT TRANSFER</option>
                                    <option value="DROP & PICKUP (TAXI)">DROP & PICKUP (TAXI)</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6">

                                <label for="exampleInputName">Vehicle Type</label>
                                <select class="form-control" name="vehicletype" id="vehicletype">
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

        <!--end Cooperate rental model-->

        <script>
                            $('input[name=stdate] ').datetimepicker({
                    dayOfWeekStart: 1,
                            lang: 'en',
                            minDate: 0,
                            // datepicker:false,
                            timepicker: false,
                            //        format:'Y/m/d',
                            format: 'd/m/Y'


                    });</script>

        <div class="container content-wrapper">
            <div class="row">


                <div class="col-md-8 col-md-push-4">

                    <!--search sorting-->
                    <div class="search-header">

                        <div class="row">
                            <div class="col-md-5">
                                <h1>  <span id="vehicleresultcount"></span>
                                    <br/>

                                    <small>
                                        From 31/10/2016 To 31/10/2016</small>
                                </h1>
                            </div>
                            <div class="col-md-7 text-right">
                                <ul class="list-inline list-unstyled sorting-list">
                                    <li class="gray-txt">SORT BY :</li>
                                    <li>Price:
                                        <a class="active"
                                           title="Sort by price descending" href="#"><i class="fa fa-sort-amount-asc" onclick="priceAcending()"></i>
                                        </a>
                                        <a class="" title="Sort by price ascending" href="#"><i class="fa fa-sort-amount-desc" onclick="priceDecending()"></i></a>
                                    </li>
                                    <li>Type:
                                        <a class="active" title="Sort by type ascending" href="#"><i class="fa fa-sort-alpha-asc" onclick="typeAcending()"></i></a>
                                        <a class="" title="Sort by type descending" href="#"><i class="fa fa-sort-alpha-desc" onclick="typeDecending()"></i></a>
                                    </li>
                                    <li>Name:
                                        <a class="active" title="Sort by name ascending" href="#"><i class="fa fa-sort-alpha-asc" onclick="nameAcending()"></i></a>
                                        <a class="" title="Sort by name descending" href="#"><i class="fa fa-sort-alpha-desc" onclick="nameDecending()"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/search sorting-->

                    <!--search sorting image slider-->

                    <div class="search-vehiles-sort">
                        <div id="sort-slider" class="owl-carousel owl-theme">

                            <div class="item">
                                <a href="../index.php" onclick="searchByCaregory('0')">
                                    <h4>All</h4>
                                    <img alt="All" class="img-responsive"
                                         src="../application_resources/images/slider/doubleCab.jpg"/>
                                    <span id="allid">

                                    </span>


                                </a>
                            </div>
                            <div class="item">
                                <a href="#" onclick="searchByCaregory('1')">
                                    <h4>Cars</h4>
                                    <img alt="Cars" class="img-responsive"
                                         src="../application_resources/images/slider/doubleCab.jpg"/>
                                    <span id="allid">

                                    </span>


                                </a>
                            </div>

                            <!-- end item row-->


                            <form id="formcategory" action="#searchByCategory" method="post"  >
                                <input type="hidden" name="pick_location" id="pick_location" value="3">
                                <input type="hidden" name="ret_location" id="ret_location" value="">
                                <input type="hidden" name="stdate" id="stdate" value="31/10/2016">
                                <input type="hidden" name="enddate" id="enddate" value="31/10/2016">
                                <input type="hidden" name="num_days" id="num_days" value="1">
                                <input type="hidden" name="car_type" id="car_type" value="0">
                                <input type="hidden" name="service" id="service" value="SD">
                                <input type="hidden" name="way" id="way" value="">

                                <input type="hidden" name="currency" id="currency" value="2">

                            </form>

                        </div>
                    </div>
                    <!--/search sorting image slider-->


                    <table class="search-table" id="searchtable">
                        <tr>
<!--                            <td style="display: none">4500</td>-->
                            <td style="">
                                <div class="searh-row clearfix" style="">
                                    <div class="col-sm-3" style="">
                                        <!--<input type="checkbox" id="emailchkboxmodel125" name="chkboxmodel" onclick="selectVehicleModel('125', 'Perodua Axia - Green', '4500')" >-->

                                        <img style="width: 150px;height: 150px" class="img-responsive result-image" src="../application_resources/images/slider/doubleCab.jpg">
                                        <ul class="list-unstyled car-featured-list">
                                            <h5>Perodua Axia - Green</h5>

                                        </ul>
                                    </div>
                                    <!--Start driver info -->
                                    <div class="col-sm-3" style=""> 
                                        <img style="width: 150px;height: 150px" class="img-responsive result-image" src="../application_resources/images/driverImages/kky.jpg">
                                        <ul class="list-unstyled car-featured-list">
                                            <li><i class="fa fa-male"></i> Kalinga Yapa</li>
                                            <li><i class="fa fa-mobile"></i> 0719335699</li>
                                        </ul>
                                    </div>

                                    <!-- End Driver Info -->

                                    <!-- price Info start -->
                                    <div class="col-sm-4" style="margin-top: 10px;">
                                        <ul class="list-unstyled car-featured-list">
                                            <li><i class="fa fa-male"></i> 4 Passengers</li>
                                            <li><i class="fa fa-cog"></i> Auto transmission</li>
                                            <li><i class="fa icon-snow"></i> Air conditioning</li>                                    
                                            <li><i class="fa fa-suitcase"></i>2 Luggage</li>
                                            <li><i class="fa fa-money"></i> 45 LKR Per Extra Km</li>  
                                            <li><i class="fa fa-road"></i> Free mileage: 100 KM </li>
                                            <li style="color:#ff3300"><i style="color:#ff3300" class="fa fa-ambulance"></i>24/7 Road Side Assistance</li>
                                            <li style="color:#00b33c"><i style="color:#00b33c" class="fa fa-eye-slash"></i><strong><small>No Hidden Charges</small></strong></li>

                                        </ul>
                                    </div>

                                    <!-- price Info end-->

                                    <!--Book info start -->
                                    <div class="col-sm-2">
                                        <div >
                                            <span class="car-details-price">
                                                <h2><b><small>LKR</small> 4,500 <br/></b></h2>
                                                <span>LKR 4,500 X 1</span>
                                            </span>
                                            <div class="clearfix"></div>
                                            <div class="text-right small-text">Refundable Deposit 40,000</div><br>
                                            <a class="btn btn-lg btn-success pull-right" style="border-radius: 4px" onclick="submitBookingForm('SD', '4500', '4500', 'Perodua Axia - Green', '45', '100', '125')">Book Now</a>
                                        </div>
                                    </div>


                                    <!--Book info end -->


                                </div>

                            </td>
                        </tr>

                    </table>

                    <form id="bookingform" class="bookingform" action="#get_extras" method="post" >

                        <input type="hidden" id="pick_location" name="pick_location" value="3">
                        <input type="hidden" id="ret_location" name="ret_location" value="">
                        <input type="hidden" id="numdays" name="numdays" value="1" >
                        <input type="hidden" id="ways" name="ways" value="">               
                        <input type="hidden" id="service" name="service" value="SD">

                        <input type="hidden" id="currency" name="currency" value="2">
                        <input type="hidden" id="stdate" name="stdate" value="31/10/2016">

                        <input type="hidden" id="enddate" name="enddate" value="31/10/2016">

                        <input type="hidden" id="sttime" name="sttime" value="00:00">

                        <input type="hidden" id="endtime" name="endtime" value="00:00">


                        <input type="hidden" id="freemile" name="freemile" value="100">
                        <input type="hidden" id="modelid" name="modelid" >

                        <input type="hidden" id="unlimited" name="unlimited">

                        <input type="hidden" id="discountedamount" name="discountedamount">
                        <input type="hidden" id="amount" name="amount">




                    </form>

                    <form id="quatationform" class="quatationform" action="#get_extras" method="post" >

                        <input type="hidden" id="hpick_location" name="pick_location" class="pick_location">
                        <input type="hidden" id="hret_location" name="ret_location" class="ret_location">
                        <input type="hidden" id="hstdate" name="stdate" class="stdate">
                        <input type="hidden" id="henddate" name="enddate" class="enddate">
                        <input type="hidden" id="hnum_days" name="num_days" class="num_days">
                        <input type="hidden" id="hcar_type" name="car_type" class="car_type">
                        <input type="hidden" id="hcurrency" name="currency" class="currency" value="">
                        <input type="hidden" id="hpriceamount" name="priceamount" class="priceamount">
                        <input type="hidden" id="hvehiclemodel" name="vehiclemodel" class="vehiclemodel">
                        <input type="hidden" id="hdrtype" name="drtype" class="drtype">
                        <input type="hidden" id="hexcess_per_km" name="excess_per_km" class="excess_per_km">
                        <input type="hidden" id="hfreemilaege" name="freemilaege" class="freemilaege">
                        <input type="hidden" id="hmodel_id" name="model_id" class="model_id">

                        <input type="hidden" id="hunlimited" name="unlimited" class="unlimited">

                        <input type="hidden" id="htab" name="tab" value="SD">

                    </form>

                    </table>

                </div>

                <div class="col-md-4 col-md-pull-8">
                    <h2>Change Search</h2>

                    <div class="inner-search">
                        <div role="tabpanel">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">

                                <li role="presentation" >
                                    <a class="withDriver" href="#withDriver" aria-controls="with Driver" role="tab" data-toggle="tab">
                                        <img data-toggle="tooltip" data-placement="bottom" title="With Driver" class=""
                                             src="../application_resources/images/driver-icon.png">

                                    </a>
                                </li>
                                <li role="presentation" >
                                    <a class="taxi" href="#taxi" aria-controls="Taxi" role="tab" data-toggle="tab">
                                        <img data-toggle="tooltip" data-placement="bottom" title="Drop & Pickup" class=""
                                             src="../application_resources/images/taxi-icon.png">

                                    </a>
                                </li>
                                <li role="presentation" >
                                    <a class="airport" href="#airport" aria-controls="Airport Transfer" role="tab" data-toggle="tab">
                                        <img data-toggle="tooltip" data-placement="bottom" title="Airport Transfer" class=""
                                             src="../application_resources/images/airport.png">

                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content clearfix">
                                <!--with driver -->
                                <div role="tabpanel" class="tab-pane fade in active" id="withDriver">

                                    <form id="get_search_form1" class="get_search_form" action="#search_result" method="post">

                                        <div class="form-group col-sm-12">
                                            <label>Pick Up Location</label>
                                            <select class="form-control pick_location" name="pick_location" id="pick_location" autocomplete="off">
                                                <option value="">- PICKUP LOCATION -</option>

                                                <option
                                                    value="1"
                                                    >
                                                    Bandaranayake International Airport</option>
                                                <option
                                                    value="2"
                                                    >
                                                    Colombo</option>

                                            </select>

                                            <input id="location_checkbox_wd" type="checkbox" value="1" name="checkbox_location">
                                            <label for="location_checkbox"> Return at Different Location</label>
                                        </div>

                                        <div class="form-group col-sm-12" id="ret_location_row_wd" style="display: none;">
                                            <label>Return Location</label>
                                            <select class="form-control ret_location" name="ret_location" id="ret_location" autocomplete="off">
                                                <option value="">- RETURN LOCATION -</option>

                                                <option
                                                    value="1"
                                                    >
                                                    Bandaranayake International Airport</option>

                                            </select>
                                        </div>

                                        <div class="form-group col-sm-8">
                                            <label>Pick Up Date</label>
                                            <input type="text" class="form-control stdate" name="stdate" id="stdate_wd2" placeholder="Pick-Up Date and Time" value="31/10/2016">
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label>Time</label>
                                            <input type="text" class="form-control " name="sttime" id="sttime_wd2" placeholder="Time" value="00:00">
                                        </div>

                                        <div class="form-group col-sm-8">
                                            <label>Return Date</label>
                                            <input type="text" class="form-control enddate" name="enddate" id="enddate_wd2"
                                                   placeholder="Drop-Off Date and Time" value="31/10/2016">
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label>Time</label>
                                            <input type="text" class="form-control " name="endtime" id="endtime_wd2" placeholder="Time" value="00:00">
                                        </div>

                                        <div class="form-group col-sm-12">
                                            <label>Number of Days</label>
                                            <input type="text" class="form-control num_days" name="num_days" id="num_days_wd2" placeholder="Number of Days" value="1" readonly>
                                        </div>

                                        <div class="form-group col-sm-12">
                                            <label>Vehicle Type</label>
                                            <select class="form-control car_type" name="car_type" id="car_type" autocomplete="off">
                                                <option value="0">- All Type -</option>


                                                <option value="52"
                                                        >
                                                    Motor Bike</option>
                                                <option value="22"
                                                        >
                                                    Cars</option>
                                                <option value="24"
                                                        >
                                                    SUV's</option>
                                                <option value="27"
                                                        >
                                                    4*4 Cabs</option>
                                                <option value="23"
                                                        >
                                                    Vans</option>
                                                <option value="54"
                                                        >
                                                    Bus</option>
                                                <option value="53"
                                                        >
                                                    Lorry</option>


                                            </select>
                                        </div>

                                        <div class="form-group col-sm-12">
                                            <label>Currency</label>
                                            <select class="form-control currency" name="currency" id="currency" autocomplete="off">
                                                <option value="">- CURRENCY -</option>
                                                <option value="2"
                                                        selected >Sri Lankan Rupee (LKR)</option>
                                                <!--                    <option value="usd">USD</option>-->
                                            </select>
                                        </div>

                                        <input type="hidden" class="form-control" name="service" id="service" value="WD">

                                        <input type="hidden" class="form-control" name="drive_type" id="drive_type" value="with_driver">
                                        <input type="hidden" class="form-control drtype" name="tab" id="tab" value="wd">

                                        <input type="hidden" id="min_val" name="min_val" value=""/>
                                        <input type="hidden" id="max_val" name="max_val" value=""/>

                                        <input type="hidden" id="priceorder" name="priceorder" value="" >
                                        <input type="hidden" id="typeorder" name="typeorder" value="" >
                                        <input type="hidden" id="nameorder" name="nameorder" value="" >

                                        <input type="hidden" id="pasenger" name="pasenger" value=""/>

                                        <input type="hidden" name="priceamount" class="priceamount" >
                                        <input type="hidden" name="vehiclemodel" class="vehiclemodel">
                                        <input type="hidden" name="tabtype" value="">


                                        <div class="form-group col-sm-12">
                                            <div id="send_enquiry_search"></div>
                                            <input class="btn btn-danger pull-right" type="submit" value="Search"/>
                                        </div>

                                    </form>

                                </div>

                                <div role="tabpanel" class="tab-pane fade  " id="airport">
                                    <!--        Three-->
                                    <form id="get_search_form3" class="get_search_form" action="#search_result" method="post">

                                        <div class="form-group col-sm-12">
                                            <label>Pickup Location</label>
                                            <select class="form-control pick_location" name="pick_location" id="pick_location_air" autocomplete="off" onchange="GetRouteAir()">
                                                <option value="">- PICKUP LOCATION -</option>
                                                <option value="1"
                                                        >
                                                    Bandaranayake International Airport</option>
                                                <option value="2"
                                                        >
                                                    Colombo</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-sm-12" id="ret_location_row" >
                                            <label>Return Location</label>
                                            <select class="form-control ret_location" name="ret_location" id="ret_location_air" autocomplete="off" onchange="GetRouteAir()">
                                                <option value="">- RETURN LOCATION -</option>
                                                <option value="1"
                                                        >
                                                    Bandaranayake International Airport</option>
                                                <option value="2"
                                                        >
                                                    Colombo</option>


                                            </select>
                                        </div>

                                        <div id="drop_hotel" name="drop_hotel">


                                        </div>

                                        <div class="form-group col-sm-8">
                                            <label>Pickup Date</label>
                                            <input type="text" class="form-control stdate" name="stdate" id="stdate" placeholder="Pick-Up Date and Time" value="31/10/2016">
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label>Time</label>
                                            <input type="text" class="form-control " name="sttime" id="sttime_wd2" placeholder="Time" value="00:00">
                                        </div>

                                        <div class="form-group col-sm-12">
                                            <label>Currency Type</label>
                                            <select class="form-control currency" name="currency" id="currency" autocomplete="off">
                                                <option value="">- CURRENCY -</option>
                                                <option value="2"
                                                        selected >Sri Lankan Rupee (LKR)</option>

                                                <!--                    <option value="usd">USD</option>-->
                                            </select>
                                        </div>

                                        <input type="hidden" class="form-control" name="service" id="service" value="AP">


                                        <input type="hidden" class="form-control" name="drive_type" id="drive_type" value="">

                                        <input type="hidden" class="form-control drtype" name="tab" id="tab" value="airport">

                                        <input type="hidden" id="min_val" name="min_val" value=""/>
                                        <input type="hidden" id="max_val" name="max_val" value=""/>

                                        <input type="hidden" id="priceorder" name="priceorder" value="">

                                        <input type="hidden" id="typeorder" name="typeorder" value="" >
                                        <input type="hidden" id="nameorder" name="nameorder" value="" >

                                        <input type="hidden" name="tabtype" value="">

                                        <div id="dvDistanceair" style="display: none">
                                        </div>

                                        <div class="form-group col-sm-12">
                                            <div id="send_enquiry_search"></div>
                                            <input class="btn btn-danger pull-right" type="submit" value="Search"/>
                                        </div>

                                    </form>
                                    <!--                    for map-->
                                    <table border="0" cellpadding="0" cellspacing="3" >
                                        <tr>
                                            <td>
                                                <div id="dvMapair" style="width: 350px; height: 400px">
                                                </div>
                                            </td>

                                        </tr>
                                    </table>

                                    <!--for map-->

                                </div>
                                <!--Taxi-->
                                <div role="tabpanel" class="tab-pane fade " id="taxi">
                                    <!--        five-->
                                    <form id="get_search_form5" class="get_search_form" action="#search_result" method="post">

                                        <div class="form-group col-sm-offset-4" style=" transform: scale(1.2);">
                                            <input type="radio" name="ways" value="1" class="px " checked> One Way
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="ways" value="2"  class="px"> Both Way
                                        </div>

                                        <div class="form-group col-sm-12">
                                            <label>Pickup Location</label>
                                            <select class="form-control pick_location" name="pick_location" id="pick_location_taxi" autocomplete="off" onchange="GetRouteTaxi()">
                                                <option value="">- PICKUP LOCATION -</option>

                                                <option value="1"
                                                        >
                                                    Bandaranayake International Airport</option>
                                                <option value="2"
                                                        >
                                                    Colombo</option>

                                            </select>
                                        </div>

                                        <div class="form-group col-sm-12" id="ret_location_row" >
                                            <label>Drop-Off Location</label>
                                            <select class="form-control ret_location" name="ret_location" id="ret_location_taxi" autocomplete="off" onchange="GetRouteTaxi()">
                                                <option value="">- Drop-off LOCATION -</option>

                                                <option value="1"
                                                        >
                                                    Bandaranayake International Airport</option>

                                                <option value="2"
                                                        >
                                                    Colombo</option>


                                            </select>
                                        </div>

                                        <div id="drop_hotel" name="drop_hotel">


                                        </div>

                                        <div class="form-group col-sm-8">
                                            <label>Pickup Date</label>
                                            <input type="text" class="form-control stdate" name="stdate" id="stdate" placeholder="Pick-Up Date and Time" value="31/10/2016">
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label>Time</label>
                                            <input type="text" class="form-control " name="sttime" id="sttime" placeholder="Time" value="00:00">
                                        </div>

                                        <div class="form-group col-sm-12">
                                            <label>Currency Type</label>
                                            <select class="form-control currency" name="currency" id="currency" autocomplete="off">
                                                <option value="">- CURRENCY -</option>
                                                <option value="2" selected >Sri Lankan Rupee (LKR)</option>

                                            </select>
                                        </div>

                                        <input type="hidden" class="form-control" name="service" id="service" value="TX">

                                        <input type="hidden" class="form-control" name="drive_type" id="drive_type" value="">

                                        <input type="hidden" class="form-control drtype" name="tab" id="tab" value="taxi">

                                        <input type="hidden" id="min_val" name="min_val" value=""/>
                                        <input type="hidden" id="max_val" name="max_val" value=""/>

                                        <input type="hidden" id="priceorder" name="priceorder"  value="" >

                                        <input type="hidden" id="typeorder" name="typeorder" value="" >
                                        <input type="hidden" id="nameorder" name="nameorder" value="" >

                                        <input type="hidden" id="pasenger" name="pasenger" value=""/>

                                        <input type="hidden" name="tabtype" value="">


                                        <div id="dvDistancetaxi" style="display: none">
                                        </div>

                                        <div class="form-group col-sm-12">
                                            <div id="send_enquiry_search"></div>
                                            <input class="btn btn-danger pull-right" type="submit" value="Search"/>
                                        </div>

                                    </form>

                                    <!--                    for map-->
                                    <table border="0" cellpadding="0" cellspacing="3" >

                                        <tr>
                                            <td>
                                                <div id="dvMaptaxi" style="width: 350px; height: 400px">
                                                </div>
                                            </td>

                                        </tr>
                                    </table>
                                    <!--                    for map-->

                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

        <input type="hidden" id="loc_drop_id" name="loc_drop_id" value="">

        <script type="text/javascript">





                            function submitBookingForm(service, discountedamount, amount, model, excess, freemileage, modelid){

                            //$('#bookingform') .find('#pick_location').val(service);
                            $('#bookingform').find('#modelid').val(modelid);
                                    $('#bookingform').find('#discountedamount').val(discountedamount);
                                    $('#bookingform').find('#amount').val(amount);
                                    if ($('#unlimited' + modelid).is(":checked")){
                            $('#bookingform').find ('#unlimited').val(1);
                            } else{
                            $('#bookingform').fi nd('#unlimited').val(0);
                            }


                            $('#bookingform').submit();
                            }

                    function searchByCaregory(categoryid){

                    $('#formcategory').find('#car_type').val(categoryid);
                            $('#formcategory').submit();
                    }




        </script>

        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD8ZxPsZvhkaYCPbncCS52YUwUkTpJ3sxw"></script>
        <script type="text/javascript">



                            var source, destination;
                            var directionsDisplay;
                            var directionsService = new google.maps.DirectionsService();
                            google.maps.event.addDomListener(window, 'load', function () {
                            // new google.maps.places.SearchBox(document.getElementById('txtSource'));
                            // new google.maps.places.SearchBox(document.getElementById('txtDestination'));
                            directionsDisplay = new google.maps.DirectionsRenderer({ 'draggable': true });
                            });
                            function GetRouteAir() {
                            var SLanka = new google.maps.LatLng(7.0000, 81.0000);
                                    var mapOptions = {
                                    zoom: 7,
                                            center: SLanka         };
                                    map = new google.maps.Map(document.getElementById('dvMapair'), mapOptions);
                                    directionsDisplay.setMap(map);
                                    directionsDisplay.setPanel(document.getElementById('dvPanelair'));
                                    //*********DIRECTIONS AND ROUTE**********************//

                                    source = $('#pick_location_air  option:selected').text();
                                    destination = $('#ret_location_air  option:selected').text();
                                    //  source = document.getElementById("txtSource").value;
                                    //  destination = document.getElementById("txtDestination").value;

                                    var request = {
                                    origin: source, destination: destination,
                                            travelMode: google.maps.TravelMode.DRIVING
                                    };
                                    directionsService.route(request, function (response, status) {             if (status == google.maps.DirectionsStatus.OK) {
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
                                    }, function (response, status) {             if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
                                    var distance = response.rows[0].elements[0].distance.text;
                                            var duration = response.rows[0].elements[0].duration.text;
                                            var dvDistance = document.getElementById("dvDistanceair");
                                            dvDistance.innerHTML = "";
                                            dvDistance.innerHTML += "Distance:" + " <input type='hidden' id='length' name='length' value='" + distance + "'>" + distance + "< b r />";
                                            dvDistance.innerHTML += "Duration:" + duration;
                                    } else {
                                    alert("Unable to find the distance via road.");
                                    }
                                    });
                            }

                    function GetRouteTaxi() {
                    var SLanka = new google.maps.LatLng(7.0000, 81.0000);
                            var mapOptions = {
                            zoom: 7,
                                    center: SLanka         };
                            map = new google.maps.Map(document.getElementById('dvMaptaxi'), mapOptions);
                            directionsDisplay.setMap(map);
                            directionsDisplay.setPanel(document.getElementById('dvPaneltaxi'));
                            //*********DIRECTIONS AND ROUTE**********************//

                            source = $('#pick_location_taxi  option:selected').text();
                            destination = $('#ret_location_taxi  option:selected').text();
                            //  source = document.getElementById("txtSource").value;
                            //  destination = document.getElementById("txtDestination").value;

                            var request = {
                            origin: source, destination: destination,
                                    travelMode: google.maps.TravelMode.DRIVING
                            };
                            directionsService.route(request, function (response, status) {             if (status == google.maps.DirectionsStatus.OK) {
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
                            }, function (response, status) {             if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
                            var distance = response.rows[0].elements[0].distance.text;
                                    var duration = response.rows[0].elements[0].duration.text;
                                    var dvDistance = document.getElementById("dvDistancetaxi");
                                    dvDistance.innerHTML = "";
                                    dvDistance.innerHTML += "Distance:" + " <input type='hidden' id='length' name='length' value='" + distance + "'>" + distance + "< b r />";
                                    dvDistance.innerHTML += "Duration:" + duration;
                            } else {
                            alert("Unable to find the distance via road.");
                            }
                            });
                    }

        </script>

        <style type="text/css">
            /*tr {*/
            /*display: none;*/
            /*}*/

        </style>

        <script type="text/javascript">



                    function getAlert($tab, $amount, $model, $excessperkm, $freemilaege, $model_id){

                    //$("input[name=nam eGoesHere]").val();
                    // var price = $('.price').val();
                    // var amount = $('.amount').val(price);
                    /// var price$("input[name=price]").val();

                    var checkboxid = '#unlimitedmile' + $model_id; var unlimi t edpercentage = //  unlimitedmile
                            unlimitedamt = 0;
                            if (unlimitedpercen tage){
                    var unlimitedamt = ($amount / 100) * unlimitedpercentage;
                    }

                    if ($(checkboxid).is(":checked"))
                    {
                    $('.unlimited').val(unlimitedamt);
                    }

                    $('.priceamount').val($amount);
                            $('.vehiclemodel').val($model);
                            var pick_location, ret_location, stdate, enddate, num_days, car_type, currency, priceamount, vehiclemodel, drtype, excessperkm, freemilaege, model_id;
                            //  if ($tab == 'sd'){
                            if ($tab == 'sd') {

                    pick_location = $('#get_search_form1').find('.pick_location').val();
                            ret_location = $('#get_search_form1').find('.ret_location').val();
                            stdate = $('#get_search_form1').find('.stdate').val();
                            enddate = $('#get_search_form1').find('.enddate').val();
                            num_days = $('#get_search_form1').find('.num_days').val();
                            car_type = $('#get_search_form1').find('.car_type').val();
                            currency = $('#get_search_form1').find('.currency').val();
                            priceamount = $('#get_search_form1').find('.priceamount').val();
                            vehiclemodel = $('#get_search_form1').find('.vehiclemodel').val();
                            drtype = $('#get_search_form1').find('.drtype').val();
                            //   var amount = $('#get_search_form1').find('.priceamount').val();
                            excessperkm = $excessperkm;
                            freemilaege = $freemilaege;
                            model_id = $model_id;
                    } else if ($tab == 'wd') {

                    pick_location = $('#get_search_form2').find('.pick_location').val();
                            ret_location = $('#get_search_form2').find('.ret_location').val();
                            stdate = $('#get_search_form2').find('.stdate').val();
                            enddate = $('#get_search_form2').find('.enddate').val();
                            num_days = $('#get_search_form2').find('.num_days').val();
                            car_type = $('#get_search_form2').find('.car_type').val();
                            currency = $('#get_search_form2').find('.currency').val();
                            priceamount = $('#get_search_form2').find('.priceamount').val();
                            vehiclemodel = $('#get_search_form2').find('.vehiclemodel').val();
                            drtype = $('#get_search_form2').find('.drtype').val();
                            excessperkm = $excessperkm;
                            freemilaege = $freemilaege;
                            model_id = $model_id;
                            //alert(pick_location );
                            //return;

                    } else if ($tab == 'airport') {
                    pick_location = $('#get_search_form3').find('.pick_location').val();
                            ret_location = $('#get_search_form3').find('.ret_location').val();
                            stdate = $('#get_search_form3').find('.stdate').val();
                            enddate = $('#get_search_form3').find('.enddate').val();
                            num_days = $('#get_search_form3').find('.num_days').val();
                            car_type = $('#get_search_form3').find('.car_type').val();
                            currency = $('#get_search_form3').find('.currency').val();
                            priceamount = $('#get_search_form3').find('.priceamount').val();
                            vehiclemodel = $('#get_search_form3').find('.vehiclemodel').val();
                            drtype = $('#get_search_form3').find('.drtype').val();
                            excessperkm = $excessperkm;
                            freemilaege = $freemilaege;
                            model_id = $model_id;
                    } else if ($tab == 'wedding') {             pick_location = $('#get_search_form4').find('.pick_location').val();
                            ret_location = $('#get_search_form4').find('.ret_location').val();
                            stdate = $('#get_search_form4').find('.stdate').val();
                            enddate = $('#get_search_form4').find('.enddate').val();
                            num_days = $('#get_search_form4').find('.num_days').val();
                            car_type = $('#get_search_form4').find('.car_type').val();
                            currency = $('#get_search_form4').find('.currency').val();
                            priceamount = $('#get_search_form4').find('.priceamount').val();
                            vehiclemodel = $('#get_search_form4').find('.vehiclemodel').val();
                            drtype = $('#get_search_form4').find('.drtype').val();
                            excessperkm = $excessperkm;
                            freemilaege = $freemilaege;
                            model_id = $model_id;
                    } else if ($tab == 'taxi') {
                    pick_location = $('#get_search_form5').find('.pick_location').val();
                            ret_location = $('#get_search_form5').find('.ret_location').val();
                            stdate = $('#get_search_form5').find('.stdate').val();
                            enddate = $('#get_search_form5').find('.enddate').val();
                            num_days = $('#get_search_form5').find('.num_days').val();
                            car_type = $('#get_search_form5').find('.car_type').val();
                            currency = $('#get_search_form5').find('.currency').val();
                            priceamount = $('#get_search_form5').find('.priceamount').val();
                            vehiclemodel = $('#get_search_form5').find('.vehiclemodel').val();
                            drtype = $('#get_search_form5').find('.drtype').val();
                            excessperkm = $excessperkm;
                            freemilaege = $freemilaege;
                            model_id = $model_id;
                    }

                    // alert(pick_location);

                    $('#hpick_location').val(pick_location);
                            $('#hret_location').val(ret_location);
                            $('#hstdate').val(stdate);
                            $('#henddate').val(enddate);
                            $('#hnum_days').val(num_days);
                            $('#hcar_type').val(car_type);
                            $('#hcurrency').val(currency);
                            $('#hdrtype').val(drtype);
                            $('#hexcess_per_km').val(excessperkm);
                            $('#hfreemilaege').val(freemilaege);
                            $('#hmodel_id').val(model_id);
                            $('#quatationform').submit();
                    }


        </script>

        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js"></script>
        <script src="../application_resources/js/jquery-1.11.2.min.js" type="text/javascript"></script> 


        <script>
                            $(document).ready(function()
                    {
                    $("#slider_p rice").slider({
                    range:true,
                            min: 0,
                            max: 25000,
                            step:1,
                            values: [ 0, 25 000 ],
                            slide: function(event, ui) {
                            $("#app_min_price").text(ui.values[0] + "$");
                                    $("#app_max_price").text(ui.values[1] + "$");
                            },
                            stop: function(event, ui) {
                            var nr_total = getEstatesNumber(ui.values[0], ui.values[1]);
                                    $("#number_results").text(nr_total);
                            },
                    });
                            $("#app_min_price").text($("#slider_price").slider("values", 0) + "$");
                            $("#app_max_price").text($("#slider_price").slider("values", 1) + "$");
                    }); function getEstatesNumber(min_price, max_price)
                    {
                    //alert(min_price);
                    //alert(max_price);
                    $("input[name='min_val']").val(min_price);
                            $("input[name='max_val']").val(max_price);
                            $('#get_search_form1').submit();
                    }

                    ///////////////////////////
                    $(document).ready(function()
                    {
                    $("#slider_p asenger").slider({            range:true,
                            min: 0,
                            max: 40,
                            step:1,
                            values:[ 0, 40  ],
                            slide: function(event, ui) {
                            $("#app_min_pasenger").text(ui.values[0] + "$");
                                    $("#app_max_pasenger").text(ui.values[1] + " ");
                            },
                            stop: function(event, ui) {
                            var nr_total = getEstatesPasenger(ui.values[0], ui.values[1]);
                                    $("#number_results").text(nr_total);
                            },
                    });
                            $("#app_min_pasenger").text($("#slider_pasenger").slider("values", 0) + "$");
                            $("#app_max_pasenger").text($("#slider_pasenger").slider("values", 1) + "");
                    });
                            function getEstatesPasenger(min_pasenger, max_pasenger)
                            {
                            // alert(min_pasenger);
                            //  alert(max_pasenger);
                            // $( "input[name='min_val']" ).val(min_price);
                            $("input[name='pasenger']").val(max_pasenger);
                                    var tab_type = $("input[name='tabtype']").val();
                                    if (tab_type == 'sd'){
                            $('#get_sea rch_f orm1').submit();
                            } else if (tab_type == 'wd'){
                            $('#get_sea rch_f orm2').submit();
                            } else if (tab_type == 'airport'){
                            $('#ge t_search_f orm3').submit();
                            } else if (tab_type == 'wedding'){
                            $('#ge t_search_f orm4').submit();
                            } else if (tab_type == 'taxi'){
                            $('#get_s earch_f orm5').submit();
                            }

                            // $('#get_search_form1').submit();

                            }

        </script>
        <!--slider - owl-->
        <script>
                    $(document).ready(function() {

                    var owl = $("#sort-slider");
                            owl.owlCarousel({
                            items : 6, //10 items above 1000px browser width
                                    itemsDesktop : [1000, 4], //5 items between1000px a nd 901px
                                    itemsDesktopSmall : [900, 3], // betweem 900px and 601px 
                                    itemsTablet: [600, 2], //2 items between 600 and  0
                                    itemsMobile : [480, 1], // itemsMobile disabled -  inherit from itemsTablet option
                                    pagination:false,
                                    navigation: true,
                                    navigationText: ["<i class='fa fa-angle-left '></i>", "<i class='fa fa-angle-right'> </i>"]
                            });
                    });</script>

        <script>

                            $('.selfDrive').on('click', function(){
                    $("input[name='ta bt ype']").val('sd');
                    });
                            $('.withDriver').on('click', function(){
                    $("input[name='ta bt ype']").val('wd');
                    });
                            $('.airport').on('click', function(){
                    $("input[name='ta bt ype']").val('airport');
                    });
                            $('.weddings').on('click', function(){
                    $("input[name='ta bt ype']").val('wedding');
                    });
                            $('.taxi').on('click', function(){
                    $("input[name='ta bt ype']").val('taxi');
                    });</script>

        <script>

                            function priceAcending(){

                            $("input[name='pri ceorder']").val(0);
                                    $("input[name='typeorder']").val(2);
                                    $("input[name='nameorder']").val(2);
                                    var tab_type = $("input[name='tabtype']").val();
                                    if (tab_type == 'sd'){
                            $('#get_sea rch_f orm1').submit();
                            } else if (tab_type == 'wd'){
                            $('#get_sea rch_f orm2').submit();
                            } else if (tab_type == 'airport'){
                            $('#ge t_search_f orm3').submit();
                            } else if (tab_type == 'wedding'){
                            $('#ge t_search_f orm4').submit();
                            } else if (tab_type == 'taxi'){
                            $('#get_s earch_f orm5').submit();
                            }
                            }

                    function priceDecending(){

                    $("input[name='pri ceorder']").val(1);
                            $("input[name='typeorder']").val(2);
                            $("input[name='nameorder']").val(2);
                            var tab_type = $("input[name='tabtype']").val();
                            if (tab_type == 'sd'){
                    $('#get_sea rch_f orm1').submit();
                    } else if (tab_type == 'wd'){
                    $('#get_sea rch_f orm2').submit();
                    } else if (tab_type == 'airport'){
                    $('#ge t_search_f orm3').submit();
                    } else if (tab_type == 'wedding'){
                    $('#ge t_search_f orm4').submit();
                    } else if (tab_type == 'taxi'){
                    $('#get_s earch_f orm5').submit();
                    }
                    }

                    function nameAcending(){

                    $("input[name='nam eorder']").val(0);
                            $("input[name='typeorder']").val(2);
                            $("input[name='priceorder']").val(2);
                            var tab_type = $("input[name='tabtype']").val();
                            if (tab_type == 'sd'){
                    $('#get_sea rch_f orm1').submit();
                    } else if (tab_type == 'wd'){
                    $('#get_sea rch_f orm2').submit();
                    } else if (tab_type == 'airport'){
                    $('#ge t_search_f orm3').submit();
                    } else if (tab_type == 'wedding'){
                    $('#ge t_search_f orm4').submit();
                    } else if (tab_type == 'taxi'){
                    $('#get_s earch_f orm5').submit();
                    }
                    }

                    function nameDecending(){

                    $("input[name='nam eorder']").val(1);
                            $("input[name='typeorder']").val(2);
                            $("input[name='priceorder']").val(2);
                            var tab_type = $("input[name='tabtype']").val();
                            if (tab_type == 'sd'){
                    $('#get_sea rch_f orm1').submit();
                    } else if (tab_type == 'wd'){
                    $('#get_sea rch_f orm2').submit();
                    } else if (tab_type == 'airport'){
                    $('#ge t_search_f orm3').submit();
                    } else if (tab_type == 'wedding'){
                    $('#ge t_search_f orm4').submit();
                    } else if (tab_type == 'taxi'){
                    $('#get_s earch_f orm5').submit();
                    }
                    }

                    function typeAcending(){

                    $("input[name='typ eorder']").val(0);
                            $("input[name='nameorder']").val(2);
                            $("input[name='priceorder']").val(2);
                            var tab_type = $("input[name='tabtype']").val();
                            if (tab_type == 'sd'){
                    $('#get_sea rch_f orm1').submit();
                    } else if (tab_type == 'wd'){
                    $('#get_sea rch_f orm2').submit();
                    } else if (tab_type == 'airport'){
                    $('#ge t_search_f orm3').submit();
                    } else if (tab_type == 'wedding'){
                    $('#ge t_search_f orm4').submit();
                    } else if (tab_type == 'taxi'){
                    $('#get_s earch_f orm5').submit();
                    }
                    }

                    function typeDecending(){

                    $("input[name='typ eorder']").val(1);
                            $("input[name='nameorder']").val(2);
                            $("input[name='priceorder']").val(2);
                            var tab_type = $("input[name='tabtype']").val();
                            if (tab_type == 'sd'){
                    $('#get_sea rch_f orm1').submit();
                    } else if (tab_type == 'wd'){
                    $('#get_sea rch_f orm2').submit();
                    } else if (tab_type == 'airport'){
                    $('#ge t_search_f orm3').submit();
                    } else if (tab_type == 'wedding'){
                    $('#ge t_search_f orm4').submit();
                    } else if (tab_type == 'taxi'){
                    $('#get_s earch_f orm5').submit();
                    }
                    }




        </script>


        <script>



                    var models = [];
                            document.getElementById("vehiclemodelp").innerHTML = models;
                            var modelsname = [];
                            document.getElementById("emodel").innerHTML = modelsname;
                            var modelsid = [];
                            document.getElementById("emodelid").innerHTML = modelsid;
                            var modelamount = [];
                            document.getElementById("eamount").innerHTML = modelamount;
                            function selectVehicleModel(modelid, model, amount){

                            //   alert(amount);
                            if (!Array.prototype.remove) {
                            Array.prototype.remove = function(val) {
                            var i = th is.indexOf(val);
                                    return i > - 1 ? this.splice(i, 1) : [];
                            };
                            }



                            if ($('#emailchkboxmodel' + modelid).is(":checked") == tr u e)
                            {
                            // it is checked

                            models.push('<li>' + model + '</li>');
                                    var a r r2 = m odels.join('');
                                    document.getElementById("vehiclemodelp").innerHTML = arr2;
                                    modelsid.push(modelid);
                                    modelsname.push(model);
                                    $('#emodel').val(modelsname);
                                    //var arrid = modelsid.join('');
                                    // document.getElementById("vehiclemodelp").innerHTML = arr2;
                                    $('#emodelid').val(modelsid);
                                    modelamount.push(amount);
                                    $('#eamount').val(modelamount);
                            } else{

                            models.remove(' <li> ' + model + '</li>');
                                    var a r r2 = m odels.join('');
                                    document.getElementById("vehiclemodelp").innerHTML = arr2;
                                    /// modelsid.splice(1, modelid);
                                    //var arrid = modelsid.join('');
                                    // document.getElementById("vehiclemodelp").innerHTML = arr2;

                                    modelsid.remove(modelid);
                                    $('#emodelid').val(modelsid);
                                    ///modelamount.splice(1, amount);
                                    modelamount.remove(amount);
                                    $('#eamount').val(modelamount);
                                    ///  modelsname.splice(1, model);

                                    modelsname.remove(model);
                                    $('#emodel').val(modelsname);
                            }


                            }


                    function sendEmail(){

                    $("#email_form").validate({

                    rules: {
                    emodelid: { required: true},
                            eemail: { required: true},
                            ecustname: { required: true}

                    },
                            messages: {
                            emodelid: " Please select At least One Vehicle Model",
                                    eemail: "Receiver E-mail Required",
                                    ecustname: "Receiver Name Required"

                                    //confirmpassword: "confirmpassword Required" ecustname

                            },
                            submitHandler: function (form) {

                            $.post(site_url + 'article_controller/sendQuotationByEmail', $('#email_form').serialize(), function (msg) {

                            alert('Email Quotation sent');
                            });
                            }
                    });
                    }


                    // ordering table row in acending order
                    $(document).ready(function() {


                    var countrows = $('#searchtable tr').length;
                            $('#vehicleresultcount').text(countrows + ' Models Available');
                            $('#allid').text(countrows);
                    });</script>



        <!-- /end testimonails ////////////////////////////////////////////////////////////////-->
        <!--contact row-->
        <?php include("footer.html"); ?>
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

<!--  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>-->

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
                            });</script>

        <!--owl carousal-->
        <script>
                            $(document).ready(function() {

                    $("#home-sl ider").owlCarousel({

                    navigation : false, // Show next and prev buttons 		            slideSpeed : 800,
                            paginationSpeed : 400,
                            singleItem:true,
                            autoPlay:  9000,
                            // Responsive
                            responsive: true,
                            responsiveRefreshRate : 200,
                            responsiveBaseWidth: window

                            // "singleItem:true" is a shortcut for:
                            // items : 1,
                            // itemsDesktop : false,
                            // itemsDesktopSmall : false,
                            // itemsTablet: false,
                            // itemsMobile : false

                    });
                    });</script>
        <script>
                            $(document).ready(function() {

                    $("#testi-s lider").owlCarousel({

                    navigation : false, // Show next and prev buttons 		            slideSpeed : 300,
                            paginationSpeed : 400,
                            singleItem:true,
                            // Respons ive
                            responsive: true,
                            responsiveRefreshRate : 200,
                            responsiveBaseWidth: window

                            // "singleItem:true" is a shortcut for:
                            // items : 1,
                            // itemsDesktop : false,
                            // itemsDesktopSmall : false,
                            // itemsTablet: false,
                            // itemsMobile : false

                    });
                    });</script>


        <script>
                            $(document).ready(function() {

                    var owl = $ ("#offers-slider");
                            owl.owlCarousel({
                            items : 3, //10 items above 1000px browser width
                                    itemsDesktop : [1000, 3], //5 items between1000px a nd 901px
                                    itemsDesktopSmall : [900, 2], // betweem 900px and 601px 
                                    itemsTablet: [600, 1], //2 items between 600 and  0
                                    itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
                                    pagination:false,
                                    autoPlay:  2000,
                                    stopOnHover: true
                            });
                            // Custom Navigation Events
                            $(".next").click(function(){
                    owl.trigger('o wl.next');
                    })
                            $(".prev").click(function(){
                    owl.trigger('o wl.prev');
                    })
                            $(".play").click(function(){
                    owl.trigger('o wl.play', 1000); //owl.play event accept  autoPlay speed as second parameter
                    })
                            $(".stop").click(function(){
                    owl.trigger('o wl.stop');
                    })

                    });</script>


        <!--hover effects-->
        <script>
                            $(document).ready(function(){
                    if (Modernizr.touch)  {
                    // show the close overlay button
                    $(".close-overlay").removeClass("hidden");
                            // handle the adding of hover class when clicked
                            $(".img").click(function(e){
                    if (!$(this).hasCl ass ("hover")) {
                    $(this).addClass("hover");
                    }
                    });
                            // handle the closing of the overlay
                            $(".close-overlay").click(function(e){
                    e.preventDefault();
                            e.stopPropagation();
                            if ($(this).closest(".img").hasClass("hover")) {
                    $(this).closest(".img").removeClass("hover");
                    }
                    });
                    } else {
                    // handle the mouseenter functionality
                    $(".img").mouseenter(function(){
                    $(this).addClass("h ov er");
                    })
                            // handle the mouseleave functionality
                            .mouseleave(function(){
                            $(this).removeClas s("hover");
                            });
                    }
                    });</script>



        <script>
                            $(document).ready(function() {

                    $('input[name=stdate_enq]').datetimepicker({
                    dayOfWeekStart : 1,
                            lang:'en',
                            minDate: 0
                    });
                            $('input[name=enddate_enq]').datetimepicker({
                    dayOfWeekStart : 1,
                            lang:'en',
                            minDate: 0
                    });
                            $('input[name=stdate] ').datetimepicker({
                    dayOfWeekStart : 1,
                            lang:'en',
                            minDate: 0,
                            // datepicker:false,
                            timepicker:false,
                            //        format:'Y/m/d ',
                            format:'d/m/Y',
                    });
                            $('input[name=sttime] ').datetimepicker({
                    dayOfWeekStart : 1,
                            lang:'en',
                            minDate: 0,
                            datepicker:false,
                            format:'H:i',
                            defaultTime:'00 :00',
                    });
                            $('input[name=enddate] ').datetimepicker({
                    dayOfWeekStart : 1,
                            lang:'en',
                            minDate: 0,
                            timepicker:false,
                            //format:'Y/m/d ',
                            format:'d/m/Y',
                            //  format:'d-m-Y H:i',
                    });
                            $('input[name=endtime] ').datetimepicker({
                    dayOfWeekStart : 1,
                            lang:'en',
                            minDate: 0,
                            datepicker:false,
                            format:'H:i',
                            defaultTime:'00 :00',
                            // format:'d- m-Y H:i',
                    });
                            $('input[name=led] ').datetimepicker({
                    dayOfWeekStart : 1,
                            lang:'en',
                            minDate: 0
                    });
                            //     harshana end

                            //$('#datetimepicker').datetimepicker({value:,step:10});

                    });</script>


        <script src="../application_resources/js/custom_js/js_fe_function.js" type="text/javascript"></script>

        <script src="http://momentjs.com/downloads/moment.js"></script> 

        <!--New-->
        <script src="../application_resources/js/slider.js" type="text/javascript"></script>
        <script src="../application_resources/js/jquery-ui.min.js" type="text/javascript"></script>

        <script>
                            $(document).ready(function() {

                    var owl = $(" #sort-slider");
                            owl.owlCarousel({
                            items : 6, //10 items above 1000px browser width
                                    itemsDesktop : [1000, 4], //5 items between1000px a nd 901px
                                    itemsDesktopSmall : [900, 3], // betweem 900px and 601px 
                                    itemsTablet: [600, 2], //2 items between 600 and  0
                                    itemsMobile : [480, 1], // itemsMobile disabled -  inherit from itemsTablet option
                                    pagination:false,
                                    navigati on:true,
                                    navigatio nText: ["<i class='fa fa-angle-left '></i>", "<i class='fa fa-angle-right'> </i>"]
                            });
                    });</script>

        <link rel="stylesheet" type="text/css" href="../application_resources/css/build/css/demo.css"/>

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
                    {

                    autoFormat: false,
                            autoHideDialCode: false,
                            defaultCountry: "auto",
                            geoIpLookup: function(callback) {
                            $.get('http://ipinfo.io', function() {}, "jsonp").always(functio n(re
                                    sp) {
                            v ar countryCode = (resp && resp.country) ? resp.country : "";
                                    callback(countryCode);
                            });
                            },
                            utilsScript: "http://www.techieat.com/international-telephone/lib/libphonenumber/build/utils.js"


                    });
                            $('#country').countrySelect({
                    //  defaultCountry: "lk",
                    });</script>

        <script>


                            $('input[name="country"]').countrySelect({
                    //  defaultCountry: "lk"
                    defaultCountry: "auto"
                    });
                            $('input[name="telephone"]').intlTelInput({ //autoFormat: true ,
                    // autoHideDialCode: true,
                    // defaultCountry: "lk"
                    autoFormat: false,
                            autoHideDialCode: false,
                            defaultCountry: "auto",
                            geoIpLookup: function(callback) {
                            $.get('http://ipinfo.io', function() {}, "jsonp").always(functio n(re
                                    sp) {
                            va r countryCode = (resp && resp.country) ? resp.country : "";
                                    callback(countryCode);
                            });
                            },
                            utilsScript: "http://www.techieat.com/international-telephone/lib/libphonenumber/build/utils.js"

                    });
                            $('input[name="country"]').on('change', function(){

                    var countryDat a = $("#country").countrySelect("getSelectedCountryData");
                            var countrycode = countryData.iso2;
                            $('input[name="telephone"]').intlTelInput("selectCountry", countrycode);
                    });</script>

        <script>

                            $(window).load(function () {
                    var countryCode = $('input[name="telephone"]').intlTelInput("getSelectedCountryData").iso2;
                            // alert(countryData.iso2);

                            $('input[name="country"]').countrySelect("selectCountry", countryCode);
                    });</script>

        <script type="text/javascript">

                            $("#send_contact_form").validate({

                    rules: {
                    subject: { required: true },
                            name: { required: true },
                            email: { required: true },
                            tel : {required:true, digits: true, maxlength:  9},
                            msg: { required: true }
                    }, messages: {
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
                    });</script>


        <script>

                            //$('#license_expire').datetimepicker();
                            $('input[name=license_expire] ').datetimepicker({
                    dayOfWeekStart : 1,
                            lang:'en',
                            minDate: 0,
                            timepicker:false,
                            //format:'Y/m/d ',
                            format:'d/m/Y',
                            //  format:'d-m-Y H:i',
                    });
                            $('#flightarrivaltime').datetimepicker({
                    dayOfWeekStart : 1,
                            lang:'en',
                            minDate: 0,
                            date picker:false,
                            format:'H:i',
                            d efaultTime:'00:00',
                            // format:'d-m-Y  H:i',

                    });
                            $('input[name="stdate"]').bind("mousewheel", function() {
                    return false;
                    });
                            $('input[name="enddate"]').bind("mousewheel", function() {
                    return false;
                    });</script>




        <!--start notifi-->

        <script src="../application_resources/notify/bootstrap-notify.min.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css" rel="stylesheet">


        <!--end notifi-->

    </body>

</html>


