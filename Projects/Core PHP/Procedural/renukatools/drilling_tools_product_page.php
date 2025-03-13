
  <?php

    include('include/header.php');
    $MenuName = basename($_SERVER['PHP_SELF']);

?>
    <style type="text/css">

.wrapper .container .top1 {
  height: 80%;
  width: 100%;
   background: url("include/img/U - Drills/Small 1.jpg") no-repeat center center;
  -webkit-background-size: 100%;
  -moz-background-size: 100%;
  -o-background-size: 100%;
  background-size: 100%;
}

.wrapper .container .top2 {
  height: 80%;
  width: 100%;
    background: url("include/img/Trepanning Tools/Small 1.jpg") no-repeat center center;
  -webkit-background-size: 100%;
  -moz-background-size: 100%;
  -o-background-size: 100%;
  background-size: 100%;
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
                                    <h1>Drilling Tools</h1>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" style="color: #2a80b9;" >Home</a></li>
                                        <li class="breadcrumb-item"><a href="product_page.php" style="color: #2a80b9;" >Products</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><a style="cursor: default;">Drilling Tools</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb area end -->


        <!-- page main wrapper start -->
        <div class="pt-25 pb-50">
          <div class="container">
            <div class="row">
              <div class="col-md-3" ></div>
              <div class="col-md-3" >
                  <div class="wrapper">
                    <div class="container">
                      <a style="cursor: pointer;" href="drilling_tools_u_drills.php?product_category=products"><div class="top1" ></div></a>
                      <div class="bottom">
                        <center>
                            <a href="drilling_tools_u_drills.php?product_category=products"  class="btn btn-default" ><h6>U - Drills</h6></a>  
                        </center>
                      </div>
                    </div>
                  </div>
              </div> 

               <div class="col-md-3" >
                  <div class="wrapper">
                    <div class="container">
                      <a style="cursor: pointer;" href="drilling_tools_trepanning_drills.php?product_category=products"><div class="top2" ></div></a>
                      <div class="bottom">
                        <center>
                            <a href="drilling_tools_trepanning_drills.php?product_category=products"  class="btn btn-default" ><h6>Trepanning Tools</h6></a>  
                        </center>
                      </div>
                    </div>
                  </div>
              </div> 
              <div class="col-md-3" ></div>


            </div>
          </div>
        </div>
        <!-- page main wrapper end -->
      </main>
      <!-- main wrapper end -->

      <?php 
          include ('include/footer.php');
    ?>
    </body>
    <!-- Mirrored from demo.hasthemes.com/gengar-preview/gengar/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 05:14:13 GMT -->

    </html>