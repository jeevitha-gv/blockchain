<!DOCTYPE html>
<html>
<head>
  <title>payment success</title>
  <style type="text/css">
    .success-page{
  max-width:300px;
  display:block;
  margin: 0 auto;
  text-align: center;
      position: relative;
    top: 50%;
    transform: perspective(1px) translateY(50%)
}
.success-page img{
  max-width:62px;
  display: block;
  margin: 0 auto;
}

.btn-view-orders{
  display: block;
  border:1px solid #47c7c5;
  width:100px;
  margin: 0 auto;
  margin-top: 45px;
  padding: 10px;
  color:#fff;
  background-color:#47c7c5;
  text-decoration: none;
  margin-bottom: 20px;
}
h2{
  color:#47c7c5;
    margin-top: 25px;

}
a{
  text-decoration: none;
}
  </style>
</head>
<body style="margin-top: -500px;">
  <?php
    include '../siteHeader.php';
    ?>
  <div class="success-page">

  <h2>Payment Successful !</h2>
  <p>The Amount Credited On Given Blower Accounts</p>
  <img src="https://img.icons8.com/color/50/000000/bitcoin-sccepted.png">
  <a href="/blockchain/view/common/paymentoverview.php" class="btn-view-orders">Return</a>
  
  
</div>
<?php
include '../common/sidemenu4.php';
 ?>

</body>

</html>