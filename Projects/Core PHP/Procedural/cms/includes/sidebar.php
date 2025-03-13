<?php


    if(ifItIsMethod('post')){

        if(isset($_POST['username']) && isset($_POST['password'])){

            login_user($_POST['username'], $_POST['password']);


        }else {

            redirect('index');
        }

    }



?>

<div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="search.php" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search Here...">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default" name="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                            </button>
                            </span>
                        </div>
                    </form>
                    <!-- /. form search --->
                    <!-- /.input-group -->
                </div>


                <!-- Blog Search Well -->
                <div class="well">

                    <?php if (isset($_SESSION['user_role'])): ?>

                        <h3>Logged in as  <?php echo $_SESSION['user_firstname']." ".$_SESSION['user_lastname']; ?></h3>
                        <a href="../logout.php" class="btn btn-danger">Logout</a>
                    <?php else: ?>

                        <h4>Login</h4>
                        <form method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Enter Username">
                            </div>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" placeholder="Enter Password">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" name="login" type="submit">Submit</button>
                                </span>
                            </div>
                            <div class="form-group">
                                <a href="forgot.php?forgot=<?php echo uniqid(); ?>">Forgot Password</a>
                            </div>
                        </form>

                    <?php endif; ?>

                    
                </div>


                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <?php

                                $query = "SELECT * FROM categories"; // Getting First 3 result from tabel
                                $query_result = mysqli_query($conn,$query);

                                while ($query_result_row = mysqli_fetch_assoc($query_result)) { 

                                    $cat_id = $query_result_row['cat_id'];
                                    $cat_title = $query_result_row['cat_title'];


                                    echo "<li><a href='category.php?category=$cat_id'>$cat_title</a></li>";

                                } ?>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>