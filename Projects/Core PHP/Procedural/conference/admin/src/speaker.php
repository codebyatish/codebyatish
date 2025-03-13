<?php 
    include 'header.php';
    $user_id = $_SESSION['id'];

    $data = mysqli_query($db->conn, "select * from `speaker` where user_id='$user_id' order by created_at desc");
?>

            <div class="py-4">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Speakers</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between w-100 flex-wrap">
                    <div class="mb-3 mb-lg-0">
                        <h1 class="h4">Speakers</h1>
                    </div>
                    <div>
                        <a href="add_speaker.php" class="btn btn-outline-gray-600 d-inline-flex align-items-center">
                        <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                        Add Speaker
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
            <?php 
                if(mysqli_num_rows($data) > 0) {
                    $i = 0;
                    while($row = mysqli_fetch_assoc($data)) {
                
            ?>

            <div class="col-lg-4 col-sm-6">
                <div class="card card-body border-0 shadow mb-4">
                    <h2 class="h5 mb-4"><?=$row['name']?> (<?=$row['type']?>)</h2>
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <!-- Avatar -->
                            <img class="rounded avatar-xl" src="../assets/uploads/<?=$row['image']?>" alt="No Image">
                        </div>
                        <div class="file-field">
                            <div class="d-flex justify-content-xl-center ms-xl-3">
                                <div class="d-flex">
                                    <div class="d-md-block text-left">
                                        <a href="edit_speaker.php?cid=<?=$row['id']?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="../functions/speaker.php?cid=<?=$row['id']?>&img=<?=$row['image']?>" class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                </div>
                            </div>
                            </div>                                        
                    </div>
                </div>
            </div>

            <?php 
                    }
                }
            ?>
            </div>


<?php  
  include 'footer.php';
?>