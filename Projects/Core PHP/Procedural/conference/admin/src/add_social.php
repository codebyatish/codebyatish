<?php 
  include 'header.php';


    $data = mysqli_query($db->conn, "select * from `social`");
    $row = mysqli_fetch_assoc($data);

?>

            <div class="py-4">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Social Links</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between w-100 flex-wrap">
                    <div class="mb-3 mb-lg-0">
                        <h1 class="h4">Add Social Links</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-sm-12 mb-4">
                    <div class="card border-0 shadow components-section">
                        <div class="card-body">     
                            <div class="row mb-4">
                                <div class="col-lg-12 col-sm-12">
                                    <!-- Form -->
                                    <form action="../functions/social.php" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="exampleInputIconLeft">Facebook</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path><path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path></svg>  
                                                </span>
                                                <input type="text" class="form-control" id="exampleInputIconLeft" placeholder="Enter Facebook" required name="facebook" value="<?= $row['facebook'] ?? '' ?>">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputIconLeft">Twitter</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path><path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path></svg>  
                                                </span>
                                                <input type="text" class="form-control" id="exampleInputIconLeft" placeholder="Enter Twitter" required name="twitter" value="<?= $row['twitter'] ?? '' ?>">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputIconLeft">Gmail</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path><path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path></svg>  
                                                </span>
                                                <input type="text" class="form-control" id="exampleInputIconLeft" placeholder="Enter Gmail" required name="gmail" value="<?= $row['gmail'] ?? '' ?>">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputIconLeft">Linked In</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path><path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path></svg>  
                                                </span>
                                                <input type="text" class="form-control" id="exampleInputIconLeft" placeholder="Enter Linked In" required name="linkedin" value="<?= $row['linkedin'] ?? '' ?>">
                                            </div>
                                        </div>

                                        <input type="hidden" name="id" value="<?= $row['id'] ?? '' ?>">

                                    <!-- <div class="mb-3"> -->
                                        <button type="submit" class="btn btn-gray-800" name="add">Save</button>
                                    <!-- </div> -->

                                    </form>
                                    <!-- End of Form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php  
  include 'footer.php';
?>