/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var base_url = js_base_url;
var site_url = js_site_url;

//alert(site_url);

$(document).ready(function () {

    jQuery.ajaxSetup({async: false});

// START BOOK/ INQUERY FORM

    $('#btnbook').on('click', function(){

    $("#book_form").validate({

        rules: {
            uname: { required: true },
            address: { required: true },
            email: { required: true },
            telephone: { required: true },
            tel_no : {required:true, digits: true ,maxlength: 9},
            typeser: { required: true },
            vehiclet: { required: true },
            stdate: { required: true },
            enddate: { required: true },
            message: { required: true }
        },
        messages: {
           // username: "Enter name"
        },
        submitHandler: function (form) {

            $.post(site_url + '/article_controller/smsToCasonsBookInquery', $('#book_form').serialize(), function (msg) {
                if (msg == 1) {
                    //location.reload();
                    alert('msg sent ');
                    location.reload();
                }
                else {
//                none
                    alert('not sent');
                }
            });
        }
    });

    } );
//  END BOOK/INQUERY FROM

    $("#get_quate_form").validate({

        rules: {
            uname: { required: true },
            email: { required: true, email:true },
            address: { required: true },
            telephone: { required: true },
            typeser: { required: true },
            vehiclet: { required: true },
            stdate_enq: { required: true },
            enddate_enq: { required: true },
            message: { required: true }
           },
        messages: { uname : "Enter name",
                    typeser : "Select Service",
                    email : "Email Required"
                 },
        submitHandler: function(form)
        {
            $('#send_enquiry_form').html('Sending....');

            $.post(site_url + '/article_controller/sendquate', $('#get_quate_form').serialize(), function(msg)
            { if(msg == 1){ location.reload(); }
                else{ }
            });
        }
    });

    $("#get_search_form1").validate({

        rules: {
            pick_location: { required: true },
            ret_location: { required: true },
            stdate: { required: true },
            enddate: { required: true },
            car_type: { required: true },
            currency: { required: true }
            }
   });

    $("#get_search_form2").validate({

        rules: {
            pick_location: { required: true },
            ret_location: { required: true },
            stdate: { required: true },
            enddate: { required: true },
            car_type: { required: true },
            currency: { required: true }
            }
    });

    $("#get_search_form3").validate({

        rules: {
            pick_location: { required: true },
            ret_location: { required: true },
            stdate: { required: true },
            enddate: { required: true },
            car_type: { required: true },
            currency: { required: true }
        }
    });

    $("#get_search_form4").validate({

        rules: {
            pick_location: { required: true },
            ret_location: { required: true },
            stdate: { required: true },
            enddate: { required: true },
            car_type: { required: true },
            currency: { required: true }
        }
    });

    $("#get_search_form5").validate({

        rules: {
            pick_location: { required: true },
            ret_location: { required: true },
            stdate: { required: true },
            currency: { required: true }
        }
    });

    $("#contact_form").validate({

        rules: {
            username: { required: true },
            userphone: { required: true },
            usermail: { required: true },
            usermessage: { required: true }
        },
        messages: {
            username: "Enter name"
        },
        submitHandler: function (form) {
            $.post(site_url + '/main_controller/sendcontactmail', $('#contact_form').serialize(), function (msg) {
                if (msg == 1) {
                    location.reload();
                }
                else {
//                none
                }
            });
        }
    });


    $(document).on('change', '#location_checkbox_sd', function () {
        if ($('#location_checkbox_sd').is(':checked')) {
            $('#ret_location_row_sd').show();
        }
        else {
            $('#ret_location_row_sd').hide();
        }
    });


    $(document).on('change', '#location_checkbox_wd', function () {
        if ($('#location_checkbox_wd').is(':checked')) {
            $('#ret_location_row_wd').show();
        }
        else {
            $('#ret_location_row_wd').hide();
        }
    });

//    $(document).on('blur', '#stdate_sd', function()
//    {
//        if($.trim($('#stdate_sd').val()) != '' && $.trim($('#enddate_sd').val()) != '')
//        {
//            $date1 = $.trim($('#stdate_sd').val()).split(' ');
//            $date2 = $.trim($('#enddate_sd').val()).split(' ');
//
//            $('#num_days_sd').val(daydiff(parseDate($date1[0]), parseDate($date2[0])) + 1);
//        }
//        else
//        {
//            $('#num_days_sd').val('');
//        }
//    });

// 2016-02-11
    $(document).on('change', "#stdate_sd1", function () {
        
        $('#enddate_sd1').val($("#stdate_sd1").val());
                               
        if ($.trim($("#stdate_sd1").val()) != '' && $.trim($("#enddate_sd1").val()) != '') {
            $date1 = $.trim($("#stdate_sd1").val()).split(' ');
            $date2 = $.trim($("#enddate_sd1").val()).split(' ');

            $("#num_days_sd1").val(daydiff(parseDate($date1[0]), parseDate($date2[0])) + 1);
            
            
           // alert($("#num_days_sd1").val());
        }
        else {
            $("#num_days_sd1").val('');
        }
    });


    $(document).on('change', "#stdate_wd1", function () {
        
        $("#enddate_wd1").val($("#stdate_wd1").val());
        
        if ($.trim($("#stdate_wd1").val()) != '' && $.trim($("#enddate_wd1").val()) != '') {
            $date1 = $.trim($("#stdate_wd1").val()).split(' ');
            $date2 = $.trim($("#enddate_wd1").val()).split(' ');

            $("#num_days_wd1").val(daydiff(parseDate($date1[0]), parseDate($date2[0])) + 1);
        }
        else {
            $("#num_days_wd1").val('');
        }
    });


    $(document).on('change', "#enddate_sd1", function () {
        if ($.trim($("#stdate_sd1").val()) != '' && $.trim($("#enddate_sd1").val()) != '') {

            $date1 = $.trim($("#stdate_sd1").val()).split(' ');
            $date2 = $.trim($("#enddate_sd1").val()).split(' ');

            $("#num_days_sd1").val(daydiff(parseDate($date1[0]), parseDate($date2[0])) + 1);
        }
        else {
            $("#num_days_sd1").val('');
        }
    });


    $(document).on('change', "#enddate_wd1", function () {
        if ($.trim($("#stdate_wd1").val()) != '' && $.trim($("#enddate_wd1").val()) != '') {

            $date1 = $.trim($("#stdate_wd1").val()).split(' ');
            $date2 = $.trim($("#enddate_wd1").val()).split(' ');

            $("#num_days_wd1").val(daydiff(parseDate($date1[0]), parseDate($date2[0])) + 1);
        }
        else {
            $("#num_days_wd1").val('');
        }
    });
    ////////////////////////////////////////////////////////////////////////////////////////
    $(document).on('change', "#stdate_sd2", function () {
        if ($.trim($("#stdate_sd2").val()) != '' && $.trim($("#enddate_sd2").val()) != '') {
            $date1 = $.trim($("#stdate_sd2").val()).split(' ');
            $date2 = $.trim($("#enddate_sd2").val()).split(' ');

            $("#num_days_sd2").val(daydiff(parseDate($date1[0]), parseDate($date2[0])) + 1);
        }
        else {
            $("#num_days_sd2").val('');
        }
    });


    $(document).on('change', "#stdate_wd2", function () {
        if ($.trim($("#stdate_wd2").val()) != '' && $.trim($("#enddate_wd2").val()) != '') {
            $date1 = $.trim($("#stdate_wd2").val()).split(' ');
            $date2 = $.trim($("#enddate_wd2").val()).split(' ');

            $("#num_days_wd2").val(daydiff(parseDate($date1[0]), parseDate($date2[0])) + 1);
        }
        else {
            $("#num_days_wd2").val('');
        }
    });


    $(document).on('change', "#enddate_sd2", function () {
        if ($.trim($("#stdate_sd2").val()) != '' && $.trim($("#enddate_sd2").val()) != '') {

            $date1 = $.trim($("#stdate_sd2").val()).split(' ');
            $date2 = $.trim($("#enddate_sd2").val()).split(' ');

            $("#num_days_sd2").val(daydiff(parseDate($date1[0]), parseDate($date2[0])) + 1);
        }
        else {
            $("#num_days_sd2").val('');
        }
    });


    $(document).on('change', "#enddate_wd2", function () {
        if ($.trim($("#stdate_wd2").val()) != '' && $.trim($("#enddate_wd2").val()) != '') {

            $date1 = $.trim($("#stdate_wd2").val()).split(' ');
            $date2 = $.trim($("#enddate_wd2").val()).split(' ');

            $("#num_days_wd2").val(daydiff(parseDate($date1[0]), parseDate($date2[0])) + 1);
        }
        else {
            $("#num_days_wd2").val('');
        }
    });

    //////////////////////////////////////////////////////////////////////////////////////

});


    function parseDate(str) {
        var mdy = str.split('/');
        //return new Date(mdy[2], mdy[0]-1, mdy[1]);
        return new Date(mdy[2], mdy[1] - 1, mdy[0]);
    }

    function daydiff(first, second) {
        return (second - first) / (1000 * 60 * 60 * 24);
    }


    function loadviewmodel(articleid, title) {

        $.post(site_url + '/main_controller/loadarticle', {articleid: articleid, title: title}, function (msg)
            {
                $('#divcontent').html(msg);
            });
    }

    function loadviewproduct(productid){

        $.post(site_url + '/main_controller/load_product', {productid:productid}, function(msg)
            {
                $('#divcontent').html(msg);
            });
    }


    $('#attachment_image_upload').change(function(){

        var file = this.files[0];

        imageuploade('attachment_image_upload','uploadto','uploadtag', file ,'attachment_image_max_size', 'str_progers', 'attachment_image_error','attachment_image_view','attachment_image',false,'0','0', false,'370','524')

    });


    function imageuploade(imageid,path,tag, file ,maxid, progressid, errorid, viewid, dbidimg, thumb, thwidth, thheight, resize, width, height){

        var error = false;
        var errormsg = '';

        var path = $('#'+path).val();
        var tag = $('#'+tag).val();
        var file_data = $('#'+imageid).prop('files')[0];
        var form_data = new FormData();
        form_data.append('file', file_data)
        form_data.append('path', path)
        form_data.append('tag', tag)
        form_data.append('thumb', thumb)
        form_data.append('thwidth', thwidth)
        form_data.append('thheight', thheight)
        form_data.append('resize', resize)
        form_data.append('width', width)
        form_data.append('height', height)
        $('.progress').show();
    //Standards base browsers
        var name = file.name;
        var size = parseInt(file.size / 1024);
        var type = file.type;
        var downldpdf ='';

        var maxsize = parseInt($('#'+maxid).val()) *1000;

        if(size > maxsize){
            error = true;
            errormsg=' Not Allow Size : '+ size+'KB | Size Allowed: ' +maxsize +'KB';
        }
         if(type != 'image/jpeg' && type != 'image/png' && type != 'image/gif'){
            downldpdf = true;
        }

        if (!error) {
            $.ajax({

                url: site_url + '/upload_controller',
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function (msg) {

                    var part = msg.split("##**");
                    var filesend = part[0];
                    var uploaderrormsg = part[1];
                    if (filesend != 'error') {

                        $('#' + dbidimg).val(filesend);

                        if (!resize) {
                            $('#' + viewid).html(' <img src="' + base_url + path + filesend + '"  width="' + width / 2 + 'px" />');
                        } else {
                            $('#' + viewid).html(' <img src="' + base_url + path + filesend + '"  width="' + width / 2 + 'px" height="' + height / 2 + 'px"/>');
                        }

                        $('#' + errorid).html('<div class="alert alert-success alert-dark"> ' + uploaderrormsg + '<div>');
                    } else {
                        $('#' + errorid).html('<div class="alert alert-danger alert-dark"> ' + uploaderrormsg + '<div>');
                    }

                },
                xhrFields: {
                    // add listener to XMLHTTPRequest object directly for progress (jquery doesn't have this yet)
                    onprogress: function (progress) {
                        // calculate upload progress
                        var percentage = Math.floor((progress.total / progress.totalSize) * 100);

                        $('#' + progressid).width(percentage + '%');
                        // log upload progress to console
                        console.log('progress', percentage);
                        if (percentage === 100) {
                            $('.progress').hide();
                        }
                    }
                }
            });

        } else {
            $('#' + errorid).html('<div class="alert alert-danger alert-dark"> ' + errormsg
                + '<div>');
        }
}


//    var ini_first_val;
//    var ini_second_val;
//
//
//    $(document).ready(function () {
//
//        // ini_first_val = $("#slider_range").val().split(";", 1);
//        //  ini_second_val = $("#slider_range").val().split(";", 2);
//
//        ini_first_val = $("input[name='slider_range']").val().split(";", 1);
//        ini_second_val = $("input[name='slider_range']").val().split(";", 2);
//
//    });


//    //--- Narrow the container down AMAP.
//    $(".flat-slider").bind("DOMSubtreeModified", HandleDOM_ChangeWithDelay);
//
//    var zGbl_DOM_ChangeTimer = null;
//
//    function HandleDOM_ChangeWithDelay(zEvent) {
//
//        if (typeof zGbl_DOM_ChangeTimer == "number") {
//
//            clearTimeout(zGbl_DOM_ChangeTimer);
//            zGbl_DOM_ChangeTimer = '';
//        }
//        zGbl_DOM_ChangeTimer = setTimeout(HandleDOM_Change, 333);
//    }
//
//
//    function HandleDOM_Change () {
//        // YOUR CODE HERE.
//        var min = $('.min_value').text().replace(' $','');
//        var max = $('.max_value').text().replace(' $','');
//
//       // $('#min_val').val(min);
//       // $('#max_val').val(max);
//        $( "input[name='min_val']" ).val(min);
//        $( "input[name='max_val']" ).val(max);
//
//       // $('#get_search_form1').submit();
//
//     //   var second_val = $("#slider_range").val().split(";", 2);
//
//       if (min != 0 || max != 500 ){
//           //alert('test1');
//        //   $( "input[name='min_val']").val();
//         //  $( "input[name='max_val']").val();
//           $('#get_search_form1').submit();
//
//
//       }else{
//          // alert('test3');
//       }
//
//    }


//quatation
//$("#quatation_form").validate({
//
//    rules: {
//        title: { required: true },
//        f_name: { required: true },
//        l_name: { required: true },
//        age: { required: true },
//        license_no: { required: true },
//        passport_no: { required: true },
//        email: { required: true },
//        phone_no: { required: true },
//        country: { required: true },
//        city: { required: true },
//        postal_code: { required: true },
//        b_address: { required: true },
//        confirm_chkbox:{required:true},
//        currency: { required: true }
//
//    }
//});

    $('#pick_location_air').on('change', function(){

        var taxiLocationId = $('#pick_location_air').val();

        if (taxiLocationId ==1  ){
            //  $('#ret_location_taxi').val(2);
            //   alert('aa');
            $.post(site_url + '/article_controller/getAllLocation', {'taxiLocationId':taxiLocationId}, function (msg){
                $('#ret_location_air').html(msg);
            });

        }else{
            // alert('bb');
            $.post(site_url + '/article_controller/getLocationAir', {'taxiLocationId':taxiLocationId}, function (msg){
                $('#ret_location_air').html(msg);
            });
        }

    });

    $('#ret_location_air').on('change', function(){

        var taxiLocationId = $('#ret_location_air').val();

        if (taxiLocationId ==1 || taxiLocationId ==2 || taxiLocationId ==3 ){
            //  $('#ret_location_taxi').val(2);
            //   alert('aa');
            $.post(site_url + '/article_controller/getAllLocation', {'taxiLocationId':taxiLocationId}, function (msg){
                $('#pick_location_air').html(msg);
            });

        }else{
            // alert('bb');
            $.post(site_url + '/article_controller/getLocationAir', {'taxiLocationId':taxiLocationId}, function (msg){
                $('#pick_location_air').html(msg);
            });
        }

    });


    var beforepickval = 0;
    var beforedropval = 0;
    $('#pick_location_taxi').on('click', function(){
        beforepickval= $('#pick_location_taxi').val();
        beforedropval = $('#ret_location_taxi').val();
    });
    
     $('#ret_location_taxi').on('click', function(){
        beforepickval= $('#pick_location_taxi').val();
        beforedropval = $('#ret_location_taxi').val();
    });


    $('#pick_location_taxi').on('change', function(){
       
       var taxiLocationId = $('#pick_location_taxi').val();
       var droplocationid = $('#ret_location_taxi').val();
              
       if (taxiLocationId == 1 || taxiLocationId == 2 || taxiLocationId == 3 ){
          //  $('#ret_location_taxi').val(2);
           //   alert('aa');
         //  if ($('#oneway').is(':checked') ){
               $.post(site_url + '/article_controller/getLocationExcept', {'taxiLocationId':taxiLocationId}, function (msg){
                   $('#ret_location_taxi').html(msg);

                  $("#ret_location_taxi").val(beforedropval);

               });
        //   }


        }else{
          // alert('bb');
           $.post(site_url + '/article_controller/getLocationTaxi', {'taxiLocationId':taxiLocationId}, function (msg){
               $('#ret_location_taxi').html(msg);
               $("#ret_location_taxi").val(beforedropval);
           });
       }

    });

    $('#ret_location_taxi').on('change', function(){

        var taxiLocationId = $('#ret_location_taxi').val();
         var picklocationid = $('#pick_location_taxi').val();
        
        if (taxiLocationId ==1 || taxiLocationId ==2 || taxiLocationId ==3  ){
            //  $('#ret_location_taxi').val(2);
                
            $.post(site_url + '/article_controller/getLocationExcept', {'taxiLocationId':taxiLocationId}, function (msg){
                $('#pick_location_taxi').html(msg);
                
                //alert(msg);
                
               $("#pick_location_taxi").val(beforepickval);
            });

        }else{
            // alert('bb');
            $.post(site_url + '/article_controller/getLocationTaxi', {'taxiLocationId':taxiLocationId}, function (msg){
                $('#pick_location_taxi').html(msg);
               //  $("#ret_location_taxi").val(beforepickval);
                $("#pick_location_taxi").val(beforepickval);
            });
        }

    });


//$('#pick_location_taxi').on('change', function(){
//        
//       
//       var taxiLocationId = $('#pick_location_taxi').val();
//       var droplocationid = $('#ret_location_taxi').val();
//              
//       if (taxiLocationId == 1 || taxiLocationId == 2 || taxiLocationId == 3 && beforepickval !=1 || beforepickval !=2 || beforepickval !=3){
//          //  $('#ret_location_taxi').val(2);
//           //   alert('aa');
//           $.post(site_url + '/article_controller/getAllLocation', {'taxiLocationId':taxiLocationId}, function (msg){
//               $('#ret_location_taxi').html(msg);
//               
//               
//           });
//
//        }else{
//          // alert('bb');
//           $.post(site_url + '/article_controller/getLocationTaxi', {'taxiLocationId':taxiLocationId}, function (msg){
//               $('#ret_location_taxi').html(msg);
//           });
//       }
//
//    });
//
//    $('#ret_location_taxi').on('change', function(){
//
//        var taxiLocationId = $('#ret_location_taxi').val();
//         var picklocationid = $('#pick_location_taxi').val();
//        
//        if (taxiLocationId ==1 || taxiLocationId ==2 || taxiLocationId ==3 && beforedropval !=1 || beforedropval !=2 || beforedropval !=3 ){
//            //  $('#ret_location_taxi').val(2);
//            //   alert('aa');
//            $.post(site_url + '/article_controller/getAllLocation', {'taxiLocationId':taxiLocationId}, function (msg){
//                $('#pick_location_taxi').html(msg);
//            });
//
//        }else{
//            // alert('bb');
//            $.post(site_url + '/article_controller/getLocationTaxi', {'taxiLocationId':taxiLocationId}, function (msg){
//                $('#pick_location_taxi').html(msg);
//            });
//        }
//
//    });







//    $('#pick_location_taxi').on('click', function(){
//
//        $('#pick_location_taxi').on('change', function(){
//            // alert('test');
//
//            var locationId = $('#pick_location_taxi').val();
//
//            if  (locationId == 1 || locationId == 2 || locationId == 3){
//                $.post(site_url + '/article_controller/getAllLocations', {'locationId':locationId}, function (msg){
//                    $('#ret_location_taxi').html(msg);
//                });
//
//            }else {
//
//                $.post(site_url + '/article_controller/getLocationTaxi', {'locationId':locationId}, function (msg){
//                    $('#ret_location_taxi').html(msg);
//                });
//
//            }
//        });
//
//    });


//    $('#ret_location_taxi').on('click', function(){
//
//        $('#ret_location_taxi').on('change', function(){
//            // alert('test');
//
//            var locationId = $('#ret_location_taxi').val();
//
//            if (locationId == 1 || locationId == 2 || locationId == 3){
//                $.post(site_url + '/article_controller/getAllLocations', {'locationId':locationId}, function (msg){
//                    $('#pick_location_taxi').html(msg);
//                });
//
//            }else{
//                $.post(site_url + '/article_controller/getLocationTaxi', {'locationId':locationId}, function (msg){
//                    $('#pick_location_taxi').html(msg);
//                });
//
//
//            }
//        });
//    });





//$('#pick_location_taxi').on('change', function(){
//
//       var picklocation = $('#pick_location_taxi').val();
//       var droplocation= $('#ret_location_taxi').val();
//       
//       if (picklocation == 1 && (droplocation ==1 || droplocation == 2 || droplocation == 3)){
//           
//            $.post(site_url + '/article_controller/getDropLocationTaxi', {'taxiLocationId':picklocation}, function (msg){
//               
//               $('#ret_location_taxi').html(msg);
//              
//           });
//           
//       }else if(picklocation == 2 && (droplocation == 1 || droplocation == 2 || droplocation == 3)){
//           
//            $.post(site_url + '/article_controller/getDropLocationTaxi', {'taxiLocationId':picklocation}, function (msg){
//               
//               $('#ret_location_taxi').html(msg);
//              
//           });
//           
//       }else if(picklocation == 3 && (droplocation == 1 || droplocation == 2 || droplocation == 3)){
//           
//            $.post(site_url + '/article_controller/getDropLocationTaxi', {'taxiLocationId':picklocation}, function (msg){
//               
//               $('#ret_location_taxi').html(msg);
//              
//           });
//           
//       }else{
//              $.post(site_url + '/article_controller/getAllLocation', {'taxiLocationId':picklocation}, function (msg){
//               
//               $('#ret_location_taxi').html(msg);
//              
//           });
//       }
//              
//      
//
//    });
//
//    $('#ret_location_taxi').on('change', function(){
//
//        var taxiLocationId = $('#ret_location_taxi').val();
//      
//        
//
//    });


$("#get_search_form").validate({

        rules: {
            uname: { required: true },
            address: { required: true },
            email: { required: true, email: true },
//            telephone: { required: true },
            tel_no : {required:true, digits: true ,minlength: 6},
            typeser: { required: true },
            vehiclet: { required: true },
            stdate: { required: true },
            enddate: { required: true },
            message: { required: true }
        },
        messages: {
            uname: "Please Enter Your Name",
            address: "Please Enter Your Address",
            email: "Please Enter Your Valid E-mail Address",
            tel_no: "This is Required",
            stdate: "Please Enter Start Date",
            enddate: "Please Enter Enda Date",
            message: "Please Enter Your Message"
        },
        submitHandler: function (form) {

            $('#sentmsg').text("Sending... ");
            $('#btninquiry').prop('disabled', true);
            
            $.post(site_url + '/article_controller/BookInquiry', $('#get_search_form').serialize(), function (msg) {
                if (msg == 1) {
                    //location.reload();
                    $('#sentmsg').text("Thank for Contacting Us, We'll Get In Touch with You Shortly ");
                    
                  //  alert('msg sent ');
                    location.reload();
                }
                else {
//                none
                    alert('not sent');
                }
            });
        }
    });
    
  
        
    $('#enddate').on('click', function(){
        
        var myDate = new Date($('#stdate').val());
        
        var disabledate = myDate.getFullYear()+ "/" +(myDate.getMonth()+1)+ "/" + myDate.getDate()
          
        $("#enddate").datetimepicker({ minDate: disabledate });
        
    });
	
	
//	$('#enddate_sd1').on('click', function(){
//
//        var myDate = new Date($('#stdate_sd1').val());
//
//        var disabledate = myDate.getDate()+ "/" +(myDate.getMonth()+1)+ "/" + myDate.getFullYear()
//
//       $("#enddate_sd1").datetimepicker({ minDate: disabledate });
//
//    });

        jQuery('#enddate_sd1').datetimepicker({
            format:'d/m/Y',
            onShow:function(ct){
                this.setOptions({
                    minDate:jQuery('#stdate_sd1').val()?jQuery('#stdate_sd1').val():false,
                    formatDate: 'd/m/Y'
                })
            }
            //timepicker:true
        });
	
//	$('#enddate_wd1').on('click', function(){
//
//        var myDate = new Date($('#stdate_wd1').val());
//
//        var disabledate =  myDate.getDate()+ "/" +(myDate.getMonth()+1)+ "/" + myDate.getFullYear()
//
//        $("#enddate_wd1").datetimepicker({ minDate: disabledate });
//
//    });

    jQuery('#enddate_wd1').datetimepicker({
        format:'d/m/Y',
        onShow:function(ct){
            this.setOptions({
                minDate:jQuery('#stdate_wd1').val()?jQuery('#stdate_wd1').val():false,
                formatDate: 'd/m/Y'
            })
        }
        //timepicker:true
    });
	
//	$('#enddate_sd2').on('click', function(){
//
//        var myDate = new Date($('#stdate_sd2').val());
//
//        var disabledate = myDate.getDate() + "/" +(myDate.getMonth()+1)+ "/" + myDate.getFullYear()
//
//        $("#enddate_sd2").datetimepicker({ minDate: disabledate });
//
//    });

    jQuery('#enddate_sd2').datetimepicker({
        format:'d/m/Y',
        onShow:function(ct){
            this.setOptions({
                minDate:jQuery('#stdate_sd2').val()?jQuery('#stdate_sd2').val():false,
                formatDate: 'd/m/Y'
            })
        }
        //timepicker:true
    });
	
//	$('#enddate_wd2').on('click', function(){
//
//        var myDate = new Date($('#stdate_wd2').val());
//
//        var disabledate =  myDate.getDate()+ "/" +(myDate.getMonth()+1)+ "/" + myDate.getFullYear()
//
//        $("#enddate_wd2").datetimepicker({ minDate: disabledate });
//
//    });

jQuery('#enddate_wd2').datetimepicker({
    format:'d/m/Y',
    onShow:function(ct){
        this.setOptions({
            minDate:jQuery('#stdate_wd2').val()?jQuery('#stdate_wd2').val():false,
            formatDate: 'd/m/Y'
        })
    }
    //timepicker:true
});
	
	
//  2016-02-19

$("#send_contact_form").validate({

        rules: {
            name: { required: true },
            email: { required: true, email:true },            
            tel: { required: true },            
            message: { required: true }
           },
        messages: { name : "Enter name",
                    typeser : "Select Service",
                    email : "Email Required",
                    message : "Email Required"
                 },
        submitHandler: function(form)
        {
                        
            //$('#send_enquiry_form').html('Sending....');

           $('#sending_message').html('Sending....');
            
            $('#send_contact_submit').prop('disabled', true);

            $.post(site_url + '/article_controller/sendContactToCasons', $('#send_contact_form').serialize(), function(msg)
            { if(msg == 1){ location.reload(); }
                else{ }
            });
        }
    });


    // 2016-03-28

    $("#cooperate_inquiry_form").validate({

        rules: {
            u_name: { required: true },
            c_name: { required: true },
            u_mobile: { required:true, digits: true ,minlength: 6 },
            c_telno : {required:true, digits: true ,minlength: 6},
            stdate: { required: true },
            enddate: { required: true },
            message: { required: true }
        },
        messages: {
            u_name: "Please Enter Your Name",
            c_name: "Please Enter Your Company Name",
            u_mobile: "Please Enter Your mobile Number",
            c_telno: "Please Enter Your Company Telephone Number",
            stdate: "Please Enter Start Date",
            enddate: "Please Enter End Date",
            message: "Please Enter Your Message"
        },
        submitHandler: function (form) {

            $('#cooperate_inquiry_form #sentmsg').text("Sending... ");
            $('#cooperate_inquiry_form #btninquiry').prop('disabled', true);

            $.post(site_url + '/article_controller/cooperateInquiry', $('#cooperate_inquiry_form').serialize(), function (msg) {
                if (msg == 1) {
                    //location.reload();
                    $('#cooperate_inquiry_form #sentmsg').text("Thank for Contacting Us, We'll Get In Touch with You Shortly ");

                    //  alert('msg sent ');
                    location.reload();
                }
                else {
    //                none
                    alert('not sent');
                }
            });
        }
    });


    $('#ret_location_air').on('change', function(){

        var drop_location_id = $('#ret_location_air').val();

        $.post(site_url + 'article_controller/getPlace', {'drop_location_id':drop_location_id}, function (msg){

            $('#airport #drop_hotel').html(msg);

        });
    });

    $('#ret_location_taxi').on('change', function(){

        var drop_location_id = $('#ret_location_taxi').val();

        $.post(site_url + 'article_controller/getPlace', {'drop_location_id':drop_location_id}, function (msg){

            $('#taxi #drop_hotel').html(msg);

        });
    });

    $( document ).ready(function() {

        var drop_location_id = $('#ret_location_air').val();

        $.post(site_url + 'article_controller/getPlace', {'drop_location_id':drop_location_id}, function (msg){

            $('#airport #drop_hotel').html(msg);

        });

        var drop_location_id = $('#ret_location_taxi').val();

        $.post(site_url + 'article_controller/getPlace', {'drop_location_id':drop_location_id}, function (msg){

            $('#taxi #drop_hotel').html(msg);

        });


    });


    $( document ).ready(function() {

        var drophotelid = $('#loc_drop_id').val();

        $('#get_search_form5 #drop_hotelplace').val(drophotelid).attr("selected", "selected");

        $('#get_search_form3 #drop_hotelplace').val(drophotelid).attr("selected", "selected");

    });


    $("input[name='stdate']").on('change', function(){

        $('.xdsoft_datetimepicker').css('display','none');

    });


    $("input[name='enddate']").on('change', function(){

        $('.xdsoft_datetimepicker').css('display','none');

    });



//     start auto notify

        $(function() {

          //  var rand = Math.floor((Math.random() * 100000) + 1000);

            setInterval(function() {
                // your code goes here...
                $.notify({
                        icon: 'glyphicon glyphicon-user',
                        title: '<strong></strong>',
                        message: 'New Booking!'
                    },
                    {
                        // settings
                        element: 'body',
                        position: null,
                        type: "warning",
                        allow_dismiss: true,
                        newest_on_top: false,
                        showProgressbar: false,
                        placement: {
                            from: "top",
                            align: "right"
                        },
                        offset: 30,
                        spacing: 10,
                        z_index: 1031,
                        delay: 3000,
                        timer: 1000,
                        url_target: '_blank',
                        mouse_over: null,
                        animate: {
                            enter: 'animated fadeInDown',
                            exit: 'animated fadeOutUp'
                        },
                        onShow: null,
                        onShown: null,
                        onClose: null,
                        onClosed: null,
                        icon_type: 'class',
                        template: '<div data-notify="container" class="col-xs-11 col-sm-1 alert alert-{0}" role="alert">' +
                            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">Ã—</button>' +
                            '<span data-notify="icon"></span> ' +
                            '<span data-notify="title">{1}</span> ' +
                            '<span data-notify="message">{2}</span>' +
                            '<div class="progress" data-notify="progressbar">' +
                            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                            '</div>' +
                            '<a href="{3}" target="{4}" data-notify="url"></a>' +
                            '</div>'
                    }
                );

            }, 100000); // 60 * 1000 milsec

        });

//     end auto notify


$("#pick_location_taxi").on('change', function (){

    $('#ret_location_taxi').val($("#pick_location_taxi").val());
    GetRouteTaxi();

});

