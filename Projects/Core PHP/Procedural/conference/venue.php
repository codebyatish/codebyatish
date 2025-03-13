<?php
    include 'header.php';
?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Venue & Hospitality</h2>
                        <div class="bt-option">
                            <a href="#">Home</a>
                            <span>Venue & Hospitality</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Sponsor Section Begin -->
    <section class="speaker-section spad">
        <div class="container">
            <div class="row">
                
                <?php
                    $query = mysqli_query($db->conn, "select * from venue");
                    if(mysqli_num_rows($query) > 0) {
                        while($row = mysqli_fetch_assoc($query)){

                            $imgs = explode(",", $row['images']);
                ?>
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="admin/assets/uploads/<?=$imgs[0]?>" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4><?=$row['name']?></h4>
                                        <span><?=$row['location']?></span>
                                    </div>
                                    <div class="si-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <p>Test Location here. Lorem ipsum test here. Got some good news</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } } ?>
                
            </div>
            <div class="load-more">
                <a href="#" class="primary-btn">Load More</a>
            </div>
        </div>
    </section>
    <!-- Sponsor Section End -->

<?php
    include 'footer.php';
?>