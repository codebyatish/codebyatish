<?php

    include('include/header.php');

?>

<style type="text/css">
    .whatsapp-logo{
        width: 20%;
    }


    @media only screen and (max-width: 767.98px) {
           .whatsapp-logo{
        width: 50%;
    }
    }


    .card-border {
    border: 0.5px solid #00000014;
    margin-bottom: 10px;
}
</style>
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
                                    <h1>Contact</h1>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" style="color: #2a80b9;" >Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><a style="cursor: default;" >Contact</a></li>
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
                    <div class="modal-body">
                      <div class="row" >
                          <div class="col-md-12">
                            <b>Thank You. Your enquiry has been successfully posted. You will hear from our sales team shortly.</b>
                          </div>
                      </div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-danger" onclick="window.location.reload();">Ok</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal Ends -->


              <button  id="send_email_model_btn"  type="hidden" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"  style="display: none;" ></button>

            <!-- contact area start -->
            <div class="contact-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <h4 class="entry-title">Contact</h4>
                                <br>
                                <ul style="padding-left: 15px;" >
                                    <li><i class="fa fa-map-marker"></i><b style="font-size: 14px;" > Gala No. 11, Suvarna Laghu Udyog Yojana, Near Truck Terminus, MIDC Area,Waluj Aurangabad 431136</b> </li>
                                    <li><i class="fa fa-envelope"></i><b style="font-size: 14px;"><a href="mailto:info@renukatools.in">info@renukatools.in</a></b></li>
                                    <li><i class="fa fa-phone"></i> <b style="font-size: 14px;" >
                                        <a href="tel:02402553301">0240 - 2553301</a>,
                                        <a href="tel:+91 9423118885">+91 9423118885</a>,
                                        <a href="tel:+91 9423118886">+91 9423118886</a></b></li>
                                    <li><i class="fa fa-clock-o"></i> <b style="font-size: 14px;">Mon – Thu :- 09 : 30 AM – 06 : 00 PM <br> Sat – Sun :- 09 : 30 AM – 06 : 00 PM</b></li>
                                    <li id="scroll-contact-form" ><a target="_blank"  href="https://api.whatsapp.com/send?phone=919987224487&text=" class="whatsapp-logo" ><img src="include/img/Conatct/WhatsApp.jpg"></a> &nbsp; &nbsp;<b style="font-size: 14px;"><a href="https://api.whatsapp.com/send?phone=919987224487&text=">Click Here to send your enquiry directly through WhatsApp</a></b></li>

                                </ul>
                            </div>
                        </div>
                        

 
                        <div class="col-md-6">
                            <div class="contact-message">
                                <h4 class="entry-title" >Send Us Enquiry</h4>
                                <form autocomplete="off">
                                    <b><span id="error_msg" style="color: red;"> </span></b>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="contact_name" id="contact_name" placeholder="Name *" class="form-control"> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="contact_organization" id="contact_organization" placeholder="Organization *" class="form-control"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="contact_designation" id="contact_designation" placeholder="Designation " class="form-control"> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" name="contact_email_id" id="contact_email_id" placeholder="Email Address *" class="form-control"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" name="contact_mobile_number" id="contact_mobile_number" placeholder="Mobile Number *" class="form-control"> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="contact_city" id="contact_city" placeholder="City *" class="form-control"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="contact_state" id="contact_state" placeholder="State *" class="form-control"> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="contact_country" id="contact_country" placeholder="Country *" class="form-control"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="contact_address" id="contact_address" placeholder="Address " class="form-control"> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="contact2-textarea text-center">
                                                <textarea placeholder="Enquiry *" name="contact_enquiry" class="form-control" id="contact_enquiry" style="resize: none;" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"> <a class="btn btn-primary" onclick="SendEmail()" style="color: white;float: right;">Send Enquiry</a> </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <br>

                    <h4 class="entry-title"> Top Management </h4>
                        <div class="row contact-info"  style="padding-left: 15px;" >
                            <div class="col-md-6">
                                <h6 class="tab_heading" style="font-size: 17px;">Anand Mulay ( Proprietor )</h6>
                                <div class="row" >
                                    <div class="col-md-2">
                                        <img src="include/img/Conatct/Top Management.jpeg" style="width: 100%;" >
                                    </div>
                                    <div class="col-md-10">
                                        <ul>
                                            <li><i class="fa fa-envelope"></i><b style="font-size: 14px;"><a href="mailto:anandmulay@renukatools.in">anandmulay@renukatools.in</a></b></li>
                                            <li> <i class="fa fa-phone"></i><b style="font-size: 14px;" ><a href="tel:+91 9987224487">+91 9987224487</a></b></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <h4 class="entry-title"> For Sales Enquiries </h4>
                        <div class="row contact-info" style="padding-left: 15px;" >
                            <div class="col-md-3 card-border">
                                <h6 class="tab_heading" style="font-size: 17px;">For Gujarat State</h6>
                                <div class="row" >
                                    <div class="col-md-3">
                                        <img src="include/img/Conatct/For Gujrat.jpeg" style="width: 100%;" >
                                    </div>
                                    <div class="col-md-9">
                                        <ul>
                                            <li><i class="fa fa-envelope"></i><b style="font-size: 14px;"><a href="mailto:sales_guj@renukatools.in">sales_guj@renukatools.in</a></b></li>
                                            <li><i class="fa fa-phone"></i> <b style="font-size: 14px;" ><a href="tel:+91 7755981164">+91 7755981164</a></b></li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-3 card-border">
                                <h6 class="tab_heading" style="font-size: 17px;">For Rest of India</h6>
                                <div class="row" >
                                    <div class="col-md-3">
                                        <img src="include/img/Conatct/For All Over India.jpeg" style="width: 100%;" >
                                    </div>
                                    <div class="col-md-9">
                                        <ul>
                                            <li><i class="fa fa-envelope"></i><b style="font-size: 14px;"><a href="mailto:sales@renukatools.in">sales@renukatools.in</a></b></li>
                                            <li><i class="fa fa-phone"></i> <b style="font-size: 14px;" ><a href="tel:+91 9922438439">+91 9922438439</a></b></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 card-border">
                                <h6 class="tab_heading" style="font-size: 17px;">For Outside India (Overseas Sales)</h6>
                                <div class="row" >
                                    <div class="col-md-3">
                                        <img src="include/img/Conatct/For Outside India.jpeg" style="width: 100%;" >
                                    </div>
                                    <div class="col-md-9">
                                        <ul>
                                            <li><i class="fa fa-envelope"></i><b style="font-size: 14px;"><a href="mailto:exports@renukatools.in">exports@renukatools.in</a></b></li>
                                            <li><i class="fa fa-phone"></i> <b style="font-size: 14px;" ><a href="tel:+91 9987224487">+91 9987224487</a></b></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            
                            <div class="col-md-3 card-border">
                                <h6 class="tab_heading" style="font-size: 17px;">For Government Organizations</h6>
                                <div class="row" >
                                    <div class="col-md-3">
                                        <img src="include/img/Conatct/For Government Organizations.jpeg" style="width: 100%;" >
                                    </div>
                                    <div class="col-md-9">
                                        <ul>
                                            <li><i class="fa fa-envelope"></i><b style="font-size: 14px;"><a href="mailto:govsales@renukatools.in">govsales@renukatools.in</a></b></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        
                        <div class="row">

                            <div class="col-md-6">
                                <h4 class="entry-title"> Careers </h4>
                                <h6 class="tab_heading" style="font-size: 17px;">For Job-related Enquiries</h6>
                                <div class="row" >
                                    <div class="col-md-2">
                                        <img src="include/img/Conatct/For Careers.jpeg" style="width: 100%;" >
                                    </div>
                                    <div class="col-md-10">
                                        <ul>
                                            <li style="font-size: 14px;" > <i class="fa fa-envelope" style="font-size: 25px;" ></i> &nbsp; Please send across your resume at <a href="mailto:info@renukatools.in"><b style="font-size: 14px;" >info@renukatools.in</b></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h4 class="entry-title"> Become our Reseller </h4>
                                <div class="row" >
                                    <div class="col-md-2">
                                        <img src="include/img/Conatct/Become our Reseller.jpeg" style="width: 100%;" >
                                    </div>
                                    <div class="col-md-10">
                                        <ul>
                                            <li style="font-size: 14px;" > <i class="fa fa-envelope" style="font-size: 25px;" ></i> &nbsp; If you wish to become our authorized reseller, kindly send across your company profile & business proposal on <a href="mailto:info@renukatools.in"><b style="font-size: 14px;" >info@renukatools.in</b></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>


                </div>
            </div>
            <!-- contact area end -->


            <div class="map-container">
                <div class="container" >
                    <div class="map" >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3753.3115341974553!2d75.24178331491426!3d19.826767033095788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb9be0ef63d5ef%3A0x8a52577bf206fbe7!2sRenuka%20Tools!5e0!3m2!1sen!2sin!4v1596254781530!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>







        </main>
        <!-- main wrapper end -->
        <script type="text/javascript">

            window.onload = function () {

                if (window.matchMedia('(max-width: 767px)').matches) {

                    $('html, body').animate({
                        scrollTop: $('#scroll-contact-form').offset().top
                    }, 'slow');
                } 

            }

        function SendEmail() {

            var contact_name = document.getElementById('contact_name').value;
            var contact_organization = document.getElementById('contact_organization').value;
            var contact_designation = document.getElementById('contact_designation').value;
            var contact_email_id = document.getElementById('contact_email_id').value;
            var contact_mobile_number = document.getElementById('contact_mobile_number').value;
            var contact_city = document.getElementById('contact_city').value;
            var contact_state = document.getElementById('contact_state').value;
            var contact_country = document.getElementById('contact_country').value;
            var contact_address = document.getElementById('contact_address').value;
            var contact_enquiry = document.getElementById('contact_enquiry').value;


            var validate_email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var validate_mobile_no = /^\d{10}$/;

            if(contact_name == "") {
                $('#contact_name').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Your Name.");
                setTimeout(function() {
                    $("#contact_name").css('border-color', 'initial');
                    $('#error_msg').empty();
                }, 3000);
            } else if(contact_organization == "") {
                $('#contact_organization').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Your Organization Name.");
                setTimeout(function() {
                    $("#contact_organization").css('border-color', 'initial');
                    $('#error_msg').empty();
                }, 3000);
            } else if(contact_email_id == "") {
                $('#contact_email_id').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Your Email Id.");
                setTimeout(function() {
                    $("#contact_email_id").css('border-color', 'initial');
                    $('#error_msg').empty();
                }, 3000);
            } else if(!contact_email_id.match(validate_email) && contact_email_id != "") {
                $('#contact_email_id').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Valid Email Id.");
                setTimeout(function() {
                    $("#contact_email_id").css('border-color', 'initial');
                    $('#error_msg').empty();
                }, 3000);
            } else if(contact_mobile_number == "") {
                $('#contact_mobile_number').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Your Mobile Number.");
                setTimeout(function() {
                    $("#contact_mobile_number").css('border-color', 'initial');
                    $('#error_msg').empty();
                }, 3000);
            } else if(!contact_mobile_number.match(validate_mobile_no) && contact_mobile_number != "") {
                $('#contact_mobile_number').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Valid Mobile Number.");
                setTimeout(function() {
                    $("#contact_mobile_number").css('border-color', 'initial');
                    $('#error_msg').empty();
                }, 3000);
            } else if(contact_city == "") {
                $('#contact_city').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Your City Name.");
                setTimeout(function() {
                    $("#contact_city").css('border-color', 'initial');
                    $('#error_msg').empty();
                }, 3000);
            } else if(contact_state == "") {
                $('#contact_state').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Your State Name.");
                setTimeout(function() {
                    $("#contact_state").css('border-color', 'initial');
                    $('#error_msg').empty();
                }, 3000);
            } else if(contact_country == "") {
                $('#contact_country').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Your Country Name.");
                setTimeout(function() {
                    $("#contact_country").css('border-color', 'initial');
                    $('#error_msg').empty();
                }, 3000);
            } else if(contact_enquiry == "") {
                $('#contact_enquiry').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Enquiry.");
                setTimeout(function() {
                    $("#contact_enquiry").css('border-color', 'initial');
                    $('#error_msg').empty();
                }, 3000);
            } else {
                //alert("Work Under Progress");
                var xhr = new XMLHttpRequest();

                xhr.open("POST" , "contact_us_db_operations.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.send("contact_name="+contact_name+"&contact_organization="+contact_organization+"&contact_designation="+contact_designation+"&contact_email_id="+contact_email_id+"&contact_mobile_number="+contact_mobile_number+"&contact_city="+contact_city+"&contact_state="+contact_state+"&contact_country="+contact_country+"&contact_address="+contact_address+"&contact_enquiry="+contact_enquiry+"&task=send_contact_us_email");

                xhr.onreadystatechange = function (e) {
                    if (xhr.readyState == 4 && xhr.status == 200) {

                        if (e.target.responseText.trim() == "Success") 
                        {
                            $("#send_email_model_btn").click();

                        }else{

                            alert("php syntax : Error");
                        }
                        
                    }
                }
            }
        }
        </script>

    <?php 
      include ('include/footer.php');
    ?>

    </body>

    </html>