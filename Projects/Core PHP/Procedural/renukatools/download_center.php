<?php

    include('include/header.php');

?>

<body>
    <!-- main wrapper start -->
    <main>

            <!-- breadcrumb area start -->
            <div class="breadcrumb-area breadcrumb-area-style_2">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <h1>Download Center</h1>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" style="color: #2a80b9;" >Home</a></li>
                                        <li class="breadcrumb-item"><a href="library_page.php" style="color: #2a80b9;" >Library</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><a style="cursor: default;" >Download Center</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb area end -->

              <!-- Modal Starts -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" onclick="window.location.reload();">&times;</button>
                      <h5 class="modal-title">Enter Your Email Address</h5>
                    </div>
                        
                    <div class="modal-body">
                        <p id="success_msg" >Please ensure that you enter a valid email address as the links for download will be sent on the email address entered below.</p>
                        <hr>

                                <b><span id="error_msg" style="color: red;"></span></b>

                            
                            <br>

                      <div class="row" >
                          <div class="col-md-8">
                            <div class="form-group">
                                <label for="customer_email_id">Email Address <div class="spinner-border text-danger" id="loader" style="display: none;height: 20px;width: 20px;border: 0.20em solid currentColor;border-right-color: transparent;"  role="status"><span class="sr-only">Loading...</span></div> <i class="fa fa-check" style="display: none;color: #28a745;font-size: 20px;" id="check-mark" ></i></label>
                                <input type="email" class="form-control" id="customer_email_id" name="customer_email_id" >
                            </div>

                          </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" onclick="SendPdfToMail()" id="model-send-btn" >Send</button>
                        <button type="button" class="btn btn-danger" onclick="window.location.reload();" >Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal Ends -->


        <div class="pt-25 pb-50">
            <!-- container start -->
            <div class="container">
                <h4 class="entry-title"> Download Center </h4>
                    <ul style="padding-left: 15px;">
                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; <b>Welcome to the Download Centre. Kindly select all the documents that you wish to download. Once selected,  scroll through the bottom of the page and click on the download button. You will be prompted for a valid email address to which we will send all your requested downloaded links. Thank you.</b></li>
                    </ul>

                <div class="row" style=" margin: 15px 0px 15px 0px;justify-content: center;">
                     <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="include/img/Download Center/MICRO BORE UNITS.jpg" alt="">
                            <div class="card-body">
                                <input type="checkbox" name="Micro Bore Units - MBU" id="micro_bore_units" class="download_pdf" value="https://drive.google.com/file/d/1ygLEton9OPLu1UVZAvzB2f20CWOOHcFO/view?usp=sharing"> &nbsp; <b> Micro Bore Units - MBU <i class="fa fa-file-pdf-o pdf-color"></i></b>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="include/img/Download Center/FINE BORING BAR WITH MBU.jpg" alt="">
                             <div class="card-body">
                                <input type="checkbox" name="Fine Boring Bars With MBU" id="fine_boring_units" class="download_pdf" value="https://drive.google.com/file/d/1GUilf-GhOqDj7aL5M-a3hvUhb6o5Hpdn/view?usp=sharing" > &nbsp; <b> Fine Boring Bars With MBU <i class="fa fa-file-pdf-o pdf-color"></i></b>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="include/img/Download Center/ECCENTRIC FINE BORING BAR.jpg" alt="">
                             <div class="card-body">
                                <input type="checkbox" name="Eccentric Fine Boring Tools" id="duo_boring_bars" class="download_pdf"  value="https://drive.google.com/file/d/1zAlQFPMYqAr7V0GX2E4nGlEYiJlCA0jD/view?usp=sharingf" > &nbsp; <b> Eccentric Fine Boring Tools <i class="fa fa-file-pdf-o pdf-color"></i></b>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style=" margin: 15px 0px 15px 0px;justify-content: center;">
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="include/img/Download Center/BCA BORING BARS.jpg" alt="">
                             <div class="card-body">
                                <input type="checkbox" name="BCA Boring Bars" id="bca_boring_bars" class="download_pdf" value="https://drive.google.com/file/d/1RFManZZQ3v2BZRZ_PpgmSlYQMk74rj68/view?usp=sharing"> &nbsp; <b> BCA Boring Bars <i class="fa fa-file-pdf-o pdf-color"></i></b>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="include/img/Download Center/BORING KIT.jpg" alt="">
                             <div class="card-body">
                                <input type="checkbox" name="Boring Kit" id="boring_kit" class="download_pdf" value="https://drive.google.com/file/d/1BALdsAGpbZ_6ppM61vkDOUwL4osMFXbP/view?usp=sharing" > &nbsp; <b> Boring Kit <i class="fa fa-file-pdf-o pdf-color"></i></b>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="include/img/Download Center/DUO BORING BAR.jpg" alt="">
                             <div class="card-body">
                                <input type="checkbox" name="Duo Boring Bars" id="eccentric_fine_boring_tools" class="download_pdf" value="https://drive.google.com/file/d/1P2b0U3Hi3hD4N-yuWfEneuy5TRI0-RCD/view?usp=sharing"> &nbsp; <b> Duo Boring Bars <i class="fa fa-file-pdf-o pdf-color"></i></b>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row" style=" margin: 15px 0px 15px 0px;justify-content: center;">
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <button id="senddownload_pdf" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"  style="float: right;display: none;" >Click Here To Download</button>
                    </div>
                </div>

              


            </div>
            <!-- container end -->
        </div>



    </main>
    <!-- main wrapper end -->
    <?php 
          include ('include/footer.php');
    ?>


    <script type="text/javascript">
    		
            var download_pdf_arr = [];
            
            $('.download_pdf').click(function () {
                    

                    if ($(this).is(":checked")) 
                    {   


                        let download_pdf_object = new Object();

                        download_pdf_object.name = this.name;
                        download_pdf_object.link = this.value;
                        
                        download_pdf_arr.push(download_pdf_object);

                        this.parentElement.classList.add('highlighted-checkbox');
                        this.parentElement.lastElementChild.firstElementChild.classList.remove('pdf-color');
                        this.parentElement.lastElementChild.firstElementChild.classList.add('highlighted-pdf-color');

                         if (download_pdf_arr.length >= 1 ) 
                           {
                                $("#senddownload_pdf").show();
                           }

                            
                    }else{

                        let download_pdf_object = new Object();

                        download_pdf_object.name = this.name;
                        download_pdf_object.link = this.value;

                        const removeIndex = download_pdf_arr.map(download_pdf_arr => download_pdf_arr.name).indexOf(this.name);
                        this.parentElement.classList.remove('highlighted-checkbox');
                        this.parentElement.lastElementChild.firstElementChild.classList.remove('highlighted-pdf-color');
                        this.parentElement.lastElementChild.firstElementChild.classList.add('pdf-color');

                        if (removeIndex > -1)
                        {
                            download_pdf_arr.splice(removeIndex,1);
                        }

                    
                        if (download_pdf_arr.length < 1) 
                           {
                                $("#senddownload_pdf").hide();
                           }
                           
                    }
                       
                      
            })



    function SendPdfToMail() {

                var download_pdf = JSON.stringify(download_pdf_arr);

                var customer_email_id = $("#customer_email_id").val();
                var validate_email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

                    
                if (customer_email_id == "") 
                {
                    $('#customer_email_id').css("border-color", "red");
                    $('#error_msg').empty().append('Please Enter Email Id.');
                    setTimeout(function()
                    {
                      $("#customer_email_id").css('border-color','initial');
                      $('#error_msg').empty();  
                    },3000);

                }else if(!customer_email_id.match(validate_email) && customer_email_id != "")
                {
                    $('#customer_email_id').css("border-color", "red");
                    $('#error_msg').empty().append('Please Enter Valid Email Id.');
                    setTimeout(function()
                    {
                      $("#customer_email_id").css('border-color','initial');
                      $('#error_msg').empty();  
                    },3000);
                }else{

                    $("#loader").show();  
                    $('#model-send-btn').hide();
                    var jqxhrn = $.get("download_center_operations.php?id="+download_pdf+"&customer_email_id="+customer_email_id+"&task=send_download_pdf_to_email", function() {  
                    })  .done(function(data) 
                    {
                            //console.log(data);

                        if (data.trim() == "Success") 
                        {

                            $('#success_msg').empty().append('The links for download have been sent to your email address successfully. Please check your email. If not received, kindly contact us on info@renukatools.in');
                            $("#loader").hide();  
                            $('#check-mark').show();

                        }

                    }) 
                   
                }


    }





        /*
            var download_pdf_arr = [];

            $('.download_pdf').click(function () {
                    
                     
                    if ($(this).is(":checked")) 
                    {
                        download_pdf_arr.push($(this).val());

                        if (download_pdf_arr.length >= 2 ) 
                           {
                                $("#senddownload_pdf").show();
                           }
                            
                    }else{

                       var removeIndex = download_pdf_arr.indexOf($(this).val());
                       download_pdf_arr.splice(removeIndex,1);

                        if (download_pdf_arr.length < 2) 
                           {
                                $("#senddownload_pdf").hide();
                           }
                           
                    }
                       
                      
            })



function SendPdfToMail() {
        
         var download_pdf_arr_to_string = download_pdf_arr.toString();
         console.log(download_pdf_arr);
        console.log(customer_email_id +"-------"+download_pdf_arr);

        var customer_email_id = $("#customer_email_id").val();
        var validate_email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


            if (customer_email_id == "") 
            {
                $('#customer_email_id').css("border-color", "red");
                $('#error_msg').empty().append('Please Enter Email Id.');
                setTimeout(function()
                {
                  $("#customer_email_id").css('border-color','initial');
                  $('#error_msg').empty();  
                },3000);

            }else if(!customer_email_id.match(validate_email) && customer_email_id != "")
            {
                $('#customer_email_id').css("border-color", "red");
                $('#error_msg').empty().append('Please Enter Valid Email Id.');
                setTimeout(function()
                {
                  $("#customer_email_id").css('border-color','initial');
                  $('#error_msg').empty();  
                },3000);
            }else{
               
                var jqxhrn = $.get("_center_operations.php?id="+download_pdf_arr+"&customer_email_id="+customer_email_id+"&task=senddownload_pdf_to_email", function() {  
                })  .done(function(data) 
                {
                 alert(data);

                    if (data.trim() == "Success") 
                    {

                        $('#error_msg').empty().append('PDF Sent to your entered Email Id');

                            setTimeout(function()
                            {
                                window.location.reload();

                            },2000);

                       
                    }

                }) 
            }




}

*/


    </script>


</body>


<!-- Mirrored from demo.hasthemes.com/gengar-preview/gengar/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 05:14:13 GMT -->
</html>