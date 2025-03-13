<?php

    include('include/header.php');
        $dir1 = "include/img/Image Gallery of Other Products/";
        $files1 = array_diff( scandir($dir1,1), array(".", "..") );

?>

    <!-- main wrapper start -->
    <main>

            <!-- breadcrumb area start -->
            <div class="breadcrumb-area breadcrumb-area-style_2">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <h1>Gallery & Events</h1>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" style="color: #2a80b9;" >Home</a></li>
                                        <li class="breadcrumb-item"><a href="library_page.php" style="color: #2a80b9;" >Library</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><a style="cursor: default;" >Gallery & Events</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb area end -->

            <div class="pt-25">
                <div class="container">
                    <h5 class="entry-title"> Image Gallery of Cutting Tools </h5>
                    <div class="product-review-info" style="padding: 15px 15px" >
                        <button class="accordion" alt="standard_tools_data" >Standard Tools</button>
                        <div class="panel" >
                            <div class="gallery-container">
                                <div class="tz-gallery">
                                    <div id="get_images_of_standard_tools_data">
                                        <div style="margin: 50px;" >
                                            <center>
                                                <div class="spinner-border sp_g" role="status" style="display: none;" >
                                                  <span class="sr-only">Loading...</span>
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                               </div>
                           </div>
                        </div>
                        <button class="accordion" alt="customized_tools_data">Customized Tools</button>
                        <div class="panel">
                            <div class="gallery-container">
                                <div class="tz-gallery">
                                    <div id="get_images_of_customized_tools_data">
                                        <div style="margin: 50px;" >
                                            <center>
                                                <div class="spinner-border sp_g" role="status" style="display: none;" >
                                                  <span class="sr-only">Loading...</span>
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                               </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="pt-25">
                <div class="container">
                    <h5 class="entry-title">Image Gallery of Other Products</h5>
                    <div class="product-review-info" style="padding: 15px 15px" >
                        <button class="accordion" alt="other_products_data" >Other Products</button>
                        <div class="panel">
                            <div class="gallery-container">
                                <div class="tz-gallery">
                                    <div id="get_images_of_other_product_data">
                                        <div style="margin: 50px;" >
                                            <center>
                                                <div class="spinner-border sp_g" role="status" style="display: none;" >
                                                  <span class="sr-only">Loading...</span>
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                               </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="container pt-25 pb-50">
                <h5 class="entry-title"> Image Gallery of Events<h5>
                <div class="product-review-info" style="padding: 15px 15px" >
                        <button class="accordion" alt="events_exibhition1" >Advantage Maharashtra Expo 2020 - Aurangabad</button>
                        <div class="panel">
                            <div class="gallery-container">
                                <div class="tz-gallery">
                                    <div id="get_images_of_events_exibhition1_data">
                                        <div style="margin: 50px;" >
                                            <center>
                                                <div class="spinner-border sp_g" role="status" style="display: none;" >
                                                  <span class="sr-only">Loading...</span>
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                               </div>
                           </div>
                        </div>

                        <button class="accordion" alt="events_exibhition2">SCORE Training @ Renuka Tools - By Ministry of MSME 2020</button>
                        <div class="panel">
                            <div class="gallery-container">
                                <div class="tz-gallery">
                                    <div id="get_images_of_events_exibhition2_data">
                                        <div style="margin: 50px;" >
                                            <center>
                                                <div class="spinner-border sp_g" role="status" style="display: none;" >
                                                  <span class="sr-only">Loading...</span>
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                               </div>
                           </div>
                        </div>
                        <button class="accordion" alt="events_exibhition3">IMTEX ToolTech 2017 - Bangalore</button>
                        <div class="panel">
                            <div class="gallery-container">
                                <div class="tz-gallery">
                                    <div id="get_images_of_events_exibhition3_data">
                                        <div style="margin: 50px;" >
                                            <center>
                                                <div class="spinner-border sp_g" role="status" style="display: none;" >
                                                  <span class="sr-only">Loading...</span>
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                               </div>
                           </div>
                        </div>
                        <button class="accordion" alt="events_exibhition4">IMTEX ToolTech 2015 - Bangalore</button>
                        <div class="panel">
                            <div class="gallery-container">
                                <div class="tz-gallery">
                                    <div id="get_images_of_events_exibhition4_data">
                                        <div style="margin: 50px;" >
                                            <center>
                                                <div class="spinner-border sp_g" role="status" style="display: none;" >
                                                  <span class="sr-only">Loading...</span>
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                               </div>
                           </div>
                        </div>
                        <button class="accordion" alt="events_exibhition5">AMB Messe Stuttgart 2010 - Germany</button>
                        <div class="panel">
                            <div class="gallery-container">
                                <div class="tz-gallery">
                                    <div id="get_images_of_events_exibhition5_data">
                                        <div style="margin: 50px;" >
                                            <center>
                                                <div class="spinner-border sp_g" role="status" style="display: none;" >
                                                  <span class="sr-only">Loading...</span>
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                               </div>
                           </div>
                        </div>
                    </div>
            </div>


    </main>

    <?php 
          include ('include/footer.php');
    ?>


    <!-- main wrapper end -->


<script type="text/javascript">


        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active1");
            var panel = this.nextElementSibling;
            var function_attributes = this.getAttribute('alt');

            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                if (function_attributes != "") 
                {
                    ImgLoad(function_attributes);

                }else{

                    panel.style.maxHeight = "500px";
                }

                panel.style.maxHeight = "500px";
            } 
          });
        }


    function ImgLoad(task) {
        var xhr = new XMLHttpRequest();
        $(".sp_g").show();
        xhr.open("POST" , "gallery_and_events_operations.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("task="+task);
        //alert(task);
        xhr.onreadystatechange = function (e) {
            if (xhr.readyState == 4 && xhr.status == 200) {
                //console.log(e.target.responseText);
                var data = e.target.responseText.split("~");

                if (data[0].trim() == "standard_tools") 
                {
                    $(".sp_g").hide();
                    $("#get_images_of_standard_tools_data").empty().append(data[1]);
                    baguetteBox.run('.tz-gallery');
                    $('img').bind('contextmenu', function(e) {
                        return false;
                    }); 

                }else if (data[0].trim() == "customized_tools") 
                {
                    $(".sp_g").hide();
                    $("#get_images_of_customized_tools_data").empty().append(data[1]);
                    baguetteBox.run('.tz-gallery');
                    $('img').bind('contextmenu', function(e) {
                        return false;
                    }); 

                }else if(data[0].trim() == "other_products"){

                    $(".sp_g").hide();
                    $("#get_images_of_other_product_data").empty().append(data[1]);
                    baguetteBox.run('.tz-gallery');
                    $('img').bind('contextmenu', function(e) {
                        return false;
                    }); 

                }else if(data[0].trim() == "exibhition1"){

                    $(".sp_g").hide();
                    $("#get_images_of_events_exibhition1_data").empty().append(data[1]);
                    baguetteBox.run('.tz-gallery');
                    $('img').bind('contextmenu', function(e) {
                        return false;
                    }); 

                }else if(data[0].trim() == "exibhition2"){

                    $(".sp_g").hide();
                    $("#get_images_of_events_exibhition2_data").empty().append(data[1]);
                    baguetteBox.run('.tz-gallery');
                    $('img').bind('contextmenu', function(e) {
                        return false;
                    }); 

                }else if(data[0].trim() == "exibhition3"){

                    $(".sp_g").hide();
                    $("#get_images_of_events_exibhition3_data").empty().append(data[1]);
                    baguetteBox.run('.tz-gallery');
                    $('img').bind('contextmenu', function(e) {
                        return false;
                    }); 

                }else if(data[0].trim() == "exibhition4"){

                    $(".sp_g").hide();
                    $("#get_images_of_events_exibhition4_data").empty().append(data[1]);
                    baguetteBox.run('.tz-gallery');
                    $('img').bind('contextmenu', function(e) {
                        return false;
                    }); 

                }else if(data[0].trim() == "exibhition5"){

                    $(".sp_g").hide();
                    $("#get_images_of_events_exibhition5_data").empty().append(data[1]);
                    baguetteBox.run('.tz-gallery');
                    $('img').bind('contextmenu', function(e) {
                        return false;
                    }); 

                }else{

                    alert("You Have An Error......!!!");
                }

            }
        }

        
    }





</script>

</body>

</html>