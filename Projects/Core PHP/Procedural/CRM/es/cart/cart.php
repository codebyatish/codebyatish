<?php
    error_reporting(0);
    require_once 'dbconfig.php';
    session_start();
    $e=$_SESSION['username'];
    if($e==true)
    {
?>
<meta name="viewport" content="width=device-width, initial-scale=0.8">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <?php
        $conn = connect_to_database ('$databaseName');
        $sql = "SELECT * FROM orders where cust_id='$e'";
        $rss = $conn->query($sql);

        $query = $conn->query("SELECT * FROM orders where cust_id='$e'") or die(mysql_error());
        
        $rss->num_rows > 0;
      
        $rows = $rss->fetch_assoc();
          
        $total = 0;
        $itemsa=0;
        while($fetch = $query->fetch_array())
        {
        $price=$fetch['pro_price'];
        $items=$fetch['pro_quantity'];
        $itemsa=$items+$itemsa;
        $total=$total+($price*$items);
        }
     
        ?>
        <h2 style="color: red">
        <?php 
        $t=0;
        $t=$t+$total;
        $d=100;
        $payment=$t+$d;
        
        ?>
        
            <form class="form-inline my-2 my-lg-0">
                <a class="btn btn-success btn-sm ml-3" href="cart.php">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light"><?php include 'total.php';  ?></span>
                </a>
                <a class="btn btn-primary btn-sm ml-3" href="../index.php">
                    <i class="fa fa-home"></i> home
                </a>
            </form>
        </div>
    </div>
</nav>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading" style="background-color: black; color: white;">SHOPPING CART</h1>
     </div>
</section>



<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
        
        $con = connect_to_database ('$databaseName');
        $sql = "SELECT * FROM orders where cust_id='$e'";
        $rs  = mysqli_query($con,$sql);
        if(mysqli_num_rows($rs) > 0)
        {
            while($row = $rs->fetch_assoc())
            {
                $pr = $row['pro_price'];
                $pn = $row['pro_name'];
                $ph = $row['photo'];

    ?>

                        <tr>
                            <td><img src="../images/all_products/<?php echo $row['photo']?>" height = "60" width = "100" /> </td>
                            <td><?php echo $row['pro_name']?></td>
                            <!-- <td>In stock</td> -->
                            <td><?php echo $row['pro_quantity']?></td>
                            <td><?php echo $row['pro_price']?></td>
                            <td><button class="btn btn-sm btn-danger" onclick="window.location.href='delete.php?id=<?php echo $row['id'];?>'"><i class="fa fa-trash"></i> </button> </td>
                        </tr><?php
            }   
            }
?>
                        <tr>
                            <td></td>
                            
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td><?php echo $t; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            
                            <td></td>
                            <td></td>
                            <td>Shipping</td>
                            <td><?php echo $d; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td><strong><?php echo $payment; ?></strong></td>
                        </tr> 
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="  col-md-6">
                    <button class="btn btn-lg btn-block btn-danger text-uppercase" onclick="window.location.href='../index.php'">Continue Shopping</button>
                </div>
                <div class="  col-md-6">
                    <button class="btn btn-lg btn-block btn-success text-uppercase" onclick="window.location.href='../payment/payment_form.php'">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
            }

    else
            {
                header("location:log.php");
            }
            ?>