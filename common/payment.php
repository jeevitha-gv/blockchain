
<!DOCTYPE html>   

<html lang="en" >
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/blockchain/"><!--end::Base Path -->
               <meta charset="utf-8"/>

        <title>Investigator-Blockchain</title>
        <meta name="description" content="Buttons examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->

 <meta charset="UTF-8">

      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Fresh GRC Admin</title>
      <base href="/freshgrcv6/">

      <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css" />
      <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
      <script type="text/javascript" src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>    
      <link rel="stylesheet" type="text/css" href="assets/jquery-ui-1.11.4/jquery-ui.css" />      
        <!-- <script src="metronic/theme/assets/global/plugins/jquery.min.js" type="text/javascript"></script> --><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <!-- Bootstrap core CSS -->
      <link href="assets/DataTables/Bootstrap-3.3.6/css/bootstrap.css" rel="stylesheet">
      <link href="assets/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
      <link href="assets/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
      <link href="assets/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
      <link href="assets/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
      <link href="assets/img/favicon.png" rel="icon" type="image/png">
      <link href="assets/img/favicon.ico" rel="shortcut icon">

        <link rel="stylesheet" href="assets/css/lib/font-awesome/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" href="assets/css/custom.css">

    </head>
 <!--    <script type="text/javascript">
   
    fetch('https://5d1b152edd81710014e8825d.mockapi.io/fixnix/whistle')
    .then(res => res.json())//response type
    .then(data => console.log(data)); //
  </script> -->
  

  <?php 
   include '../investigator/siteHeader2.php';
?>
    
  <body class="with-side-menu-compact">

   
      <body class="dataTables">
           
         <div class="container">
         <div class="panel" style="margin-top: 1px; margin-left: 55px; border-color: #32c5d2;">
               <div class="panel-heading text-center" style="background-color: #2741AE; color: #fff;">Billing</div>
               <div class="panel-body">
               <!-- Trial Users -->
               <?php if($res==0){ ?>
               <form action="/blockchain/common/upgrade.php" method="POST">
                  <div class="row">
                    <div class="col-md-12" style="margin-top: 25px;">
                      <div class="alert alert-danger">
                     <p><strong>Current-Plan :</strong>TRIAL PLAN</p>
                  </div>
                    </div>
                      <div class="col-md-12" >
                        <div class="row">
                      <div class="col-md-5" style="margin-top: 25px; margin-left: 10px;">
                        <div class="form-group">
                          <label for="sel1">Select Modules</label>
                            <select class="form-control" value="" id="QTY"    style="border-radius: 3px !important;" >
                          <option data-price="30">Analyst</option>
                          <option data-price="30">Reviewer</option>
                          <option data-price="30">Investigator</option>
                          
                      </select>
                       </div>
                      </div>
                      <div class="col-md-3" style="margin-top: 35px; margin-left: 150px;" >
                        <div class="form-group">
                           <label for="sel1">Select Number Of Users</label> 
                           <input type="number" name="PPRICE" id="PPRICE" value="1"  >
                            </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-offset-4 col-md-4">
                          <div class="well well-lg text-center" style="margin-top: 10px;">
                           <label for="sel1">Total:$</label>
                          <input  id="TOTAL" name="TOTAL" style="width: 90px; margin-right: 56px;">

                          <input class="btn btn-primary" id="Upgrade"  type="submit" style="margin-top: 30px;" value="upgrade" />
                        </div>
                      </div>
                    </div>
                      </div>
                  </div>
              </form>
              <?php } ?>
          <?php if($res!=0){ 

            $planDetails=$usermanager->getPlan($res);
           ?>

                 <div class="row freshgrcv6-common-main-head">
        <h2 style="font-family: inherit">You have subscribed to <?php echo $planDetails[0]['name'] ?> pack  </h2>
      </div>
          <?php } ?>
                </div>
            </div>
          </div>
      </body>



  <script type="text/javascript">
        $(document).ready(function() {
        
  $('#QTY').on('change', function() {
  $('#TOTAL').val(valueFUnction());
  });
  $('#PPRICE').on('change', function() {
  $('#TOTAL').val(valueFUnction());
  });
});

function valueFUnction(quan) {
  
  var $selection = $('#QTY').find(':selected');
  var quantity = $('#PPRICE').val();
  var total = 0;
  $selection.each(function() {
  total += $(this).data('price') * quantity;
  })
  return total;
}

/* document.getElementById("upgrade").onclick = function () {
        location.href = "/freshgrcv6/view/common/upgrade.php";
    };*/
      </script>





<?php
include '../blower/sidemenu2.php';
 ?>

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

   
            </body>
    <!-- end::Body -->
</html>