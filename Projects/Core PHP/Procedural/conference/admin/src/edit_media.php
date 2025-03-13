<?php 
  include 'header.php';

  $id = $_GET['cid'];
  $data = mysqli_query($db->conn, "select * from `media` where id='$id'");
  $res = mysqli_fetch_assoc($data);
?>

            <div class="py-4">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Media & Partners</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between w-100 flex-wrap">
                    <div class="mb-3 mb-lg-0">
                        <h1 class="h4">Edit Media & Partners</h1>
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
                                    <form action="../functions/media.php" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="exampleInputIconLeft">Name</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path><path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path></svg>  
                                                </span>
                                                <input type="text" class="form-control" id="exampleInputIconLeft" placeholder="Name" required name="name" value="<?=$res['name']?>">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputIconLeft">Type</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>  
                                                </span>
                                                <input type="text" class="form-control" id="exampleInputIconLeft" placeholder="Type" name="type" value="<?=$res['type']?>">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputIconLeft">Link</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>  
                                                </span>
                                                <input type="text" class="form-control" id="exampleInputIconLeft" placeholder="Link" name="link" value="<?=$res['link']?>">
                                            </div>
                                        </div>

                                        <!-- <div class="my-4">
                                            <label for="textarea">Description</label>
                                            <textarea class="form-control" placeholder="Enter your message..." id="textarea" rows="4" required name="desc"></textarea>
                                        </div> -->

                                        <!-- <div class="mb-3">
                                        <label for="birthday">Date</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                            </span>
                                            <input data-datepicker="" class="form-control datepicker-input" id="birthday" type="text" placeholder="mm/dd/yyyy" required name="datetime">                                               
                                        </div>
                                        </div> -->

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Image</label>
                                        <input class="form-control" type="file" id="formFile" name="image">
                                    </div>

                                    <input type="hidden" name="id" value="<?=$res['id']?>">


                                    <!-- <div class="mb-3"> -->
                                        <button type="submit" class="btn btn-gray-800" name="update">Save</button>
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