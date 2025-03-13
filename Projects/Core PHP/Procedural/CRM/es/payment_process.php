<?php

session_start();
 include('dbconfig.php');
 include('header.php');
 $pro_id = $_REQUEST["id"];

$email = $_SESSION['UserName'];

$con = connect_to_database ('$databaseName');

           $product_qry ="SELECT * FROM products WHERE pro_id = $pro_id;";
          $product_qry_result=mysqli_query($con,$product_qry);
          $product_qry_result_row = mysqli_fetch_array($product_qry_result,MYSQLI_BOTH);

             $pro_name = $product_qry_result_row['pro_name'];
             $price = $product_qry_result_row['new_price'];


  $surl = "http://cleanfoot.in/es/payment_success.php";
  $furl = "http://cleanfoot.in/es/payment_failure.php";


$MERCHANT_KEY = "Fv2HR3ke"; 
$SALT = "k5PM1Welja"; 


$PAYU_BASE_URL = "https://sandboxsecure.payu.in"; 


$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
  
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
      || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
  $hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';  
  foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  </head>
  <body onload="submitPayuForm()">

    <br/>
    <?php if($formError) { ?>
  
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />


                <div class="panel panel-primary" style="border: 1px inset black; padding: 20px 20px 100px 20px;margin: 20px 20px;">
                        <div style="padding-top: 15px; padding-bottom: 30px;font-size: 50px;background: linear-gradient(-155deg, #1177be 5%, #1da8df 70%, #1baec7 100%);border-color: #000000;" class="panel-heading">
                          <center>
                          <h2 class="panel-title" style="text-indent:10px;font-size:25px;font-weight:bold;color: black;">
                          </h2></center>

                          <span class="pay_header" style=" display: block;
                          font: bold 22px/41px Georgia, Serif;
                          color: black;
                          background: #fff;
                          border: 5px solid #fff;
                          text-align: center;
                          padding-top: 22px;
                          height: 100px;
                              width: 150px;
                          margin: 10px auto -71px;
                          -moz-border-radius: 100px;
                          -webkit-border-radius: 100px;
                          border-radius: 100px;
                          -moz-box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;
                          -webkit-box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;">

                          Rs.<?php echo $price ; ?></span>
                        </div>

                                      <div class="form-row" style="    padding: 40px;">
                                          <div class="col-md-4">
                                            <div>
                                            <span class="doc_th5"><b>* Name :</b> </span>
                                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter your name" value="<?php echo $pro_name; ?>" readonly>
                                            </div>
                                          </div>

                                        <div class="col-md-4">
                                          <div>
                                            <span class="doc_th5"><b>* Product Id :</b></span>
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter Your email" value="<?php echo $pro_id; ?>" readonly>
                                          </div>
                                        </div>
                                      
                                    </div>

                                    <br>
                                    <div class="form-row" style="padding-top: 25px;">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                      <center>
                                        <?php if(!$hash) { ?>
                                        <input type="submit" name="submit" value="Checkout" class="btn btn-primary" style="width: 30%;">
                                        <?php } ?>

                                        <a href="http://kpondhospitals.com/hms_dev/appointment/" class="btn btn-danger" style="width: 30%;"> Exit</a> 
                                      </center>
                                    </div>
                                   <div class="col-md-2"></div>
                                  </div>

                                </div>
      <table>

        <tr>

          <td>
            <input type="hidden" name="amount" value="<?php echo (empty($posted['amount'])) ? $price : $posted['amount'] ?>" /></td>

          <td><input type="hidden" name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? $pro_name : $posted['firstname']; ?>" /></td>
        </tr>
        <tr>

          <td><input  type="hidden" name="email" id="email" value="<?php echo (empty($posted['email'])) ? $pro_id : $posted['email']; ?>" /></td>

          <td><input type="hidden" name="phone" value="<?php echo (empty($posted['phone'])) ? '9823901118' : $posted['phone']; ?>" /></td>
        </tr>
        <tr>

          <td colspan="3"  ><textarea style="display: none;" name="productinfo"><?php echo (empty($posted['productinfo'])) ? $pro_name : $posted['productinfo'] ?></textarea></td>
        </tr>
        <tr>

          <td colspan="3"><input type="hidden" name="surl" value="<?php echo (empty($posted['surl'])) ? $surl : $posted['surl'] ?>" size="64" /></td>
        </tr>
        <tr>

          <td colspan="3"><input type="hidden" name="furl" value="<?php echo (empty($posted['furl'])) ? $furl : $posted['furl'] ?>" size="64" /></td>
        </tr>

        <tr>
          <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
        </tr>

      </table>
    </form>
  </body>
</html>
