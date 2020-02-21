
<!DOCTYPE html>   

<html lang="en" >
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/blockchain/"><!--end::Base Path -->
               <meta charset="utf-8"/>

        <title>Investigator-Blockchain</title>
        <meta name="description" content="Buttons examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        

 <?php
    include '../siteHeader.php';
    ?>

   
      
 <style>
    .payment-container{
      max-width: 400px;
      max-height: 200px;
      border-radius: 10px !important;
      margin: auto;
      background: url(/blockchain/common/paymentbg.jpg)no-repeat;
      background-size: cover;
      color: #000;
      padding: 20px;
      font-weight: bold;
      -webkit-box-shadow: 0 8px 6px -6px #888;
     -moz-box-shadow: 0 8px 6px -6px #888;
      box-shadow: 0 8px 6px -6px #888;
    }
    .payment-header span{
      font-weight: 400;
      font-size: 36px;
      float: left;
    }
    .payment-header img{
      width: 100px;
      float: right;
      padding-top: 10px;
    }
    .payment-container input{
      background: transparent;
      border: none;
      outline: none;
      width: 100%;
      color: #000;
      padding-left: 5px;
      border-radius: 0px !important;
    }
    label{
      font-weight: 400;
      margin: 3px 0;
      font-size: 11px;
    }
    .payment-errors{
      color: red;
      padding: 10px;
      display: block;
      text-align: center;
    }
    .text-center
    {
      color: #0d34e0;
      text-align: center;

    }
  </style>

<body>
  <form name="payment" id="payment-form" style="margin-top:5px;" action="/blockchain/view/common/success.php?">
    <div style="margin-top: -150px;">
    
    <h3 class="text-center">Pay <span style="color: red;"> <?php echo $_POST['TOTAL'] ?>$</span></h3>
    <input type="hidden" id="email" value="<?php echo $userDetails[0]['email'] ?>">
    <span class="payment-errors"></span>
  </div>

    <div class="payment-container" style="margin-left:560px;" >
      <div class="payment-header">
        <!-- <span>100$</span> -->
   <img src="https://img.icons8.com/color/50/000000/us-dollar.png">
      </div>
      <div class="row">
        <div class="col-md-12">
          <label for="cardnumber">Card Number</label>
          <input type="number" id="number" placeholder="1111-1111-1111-1111" size="20" data-stripe="number" required="">
        </div>
     <!--  </div>
      <div class="row">  -->
        <div class="col-md-12">
          <label>Expiration(MM/YY)</label>
        </div>
     <!--  </div>
      <div class="row"> -->
      <div id="date" class="col-md-12">
        <div class="row">
          <div class="col-md-4">
          <input type="number" placeholder="mm" size="2" data-stripe="exp_month" required="">
        </div>
        <div class="col-md-4 ">
          <input type="number" placeholder="yy" size="2" data-stripe="exp_year" required="">
        </div>
        
          
        </div>
        <div class="col-md-4" style="margin-left:-10px;">
          <input type="number" placeholder="ccv" size="4" data-stripe="cvc" required="">
        </div>
        
        </div>
        
     <!--  </div>
      <div class="row"> -->
        <!-- <div class="col-md-6">
          <label>Billing Zip Code</label>
          <input type="number" placeholder="zip code" id="zipcode" size="6" data-stripe="address_zip">
        </div> -->
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <a href="/blockchain/view/common/success.php"><button class="btn btn-primary" style="margin-top: 30px;" >Submit</button></a>
      </div>
    </div>

  </form>

<!-- 
  <form action="/common/payment.php" method="POST"
style="
    margin-left: 697px;
    margin-top: -160px;
"
  >
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_7vp1WEu0o1IOyLilC0WhkVXs"
    data-amount="<?php echo $amount ?>"
    data-name="Blockchain SUBSCRIPTION"
    data-description="Blockchain SUBSCRIPTION WITH BITCOIN"
    data-label="Pay with Bitcoin"
    data-locale="auto"
    data-currency="usd"
    data-bitcoin="true">
  </script>
</form> -->
  </body>


  <?php
  include '../common/sidemenu4.php';

   ?>
      
        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

   
            </body>
    <!-- end::Body -->
</html>
