<?php
   include "../php/common/config.php";
   require_once __DIR__.'/../php/user/userManager.php';
     $manager = new UserManager();
  $allcompanydata = $manager->companyprofiletable($companyId);
$target_dir = "../documents/";
$target_file = $target_dir . basename($_FILES["Artifacts"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  if(isset($_POST['submit']))
   {
     $company=$_POST['company2'];
      $category=$_POST['category4'];
       $relationship=$_POST['relationship1'];
        $encounter=$_POST['encounter'];
         $department=$_POST['department'];
          $place=$_POST['place'];
           $monetaryvalue=$_POST['monetaryvalue'];
            $period=$_POST['period'];
             $namepi=$_POST['namepi'];
              $designationpi=$_POST['designationpi'];
               $departmentpi=$_POST['departmentpi'];
 $nameyd=$_POST['nameyd'];
         $emailyd=$_POST['emailyd'];
          $phonenoyd=$_POST['phonenoyd'];
           $authorityknows=$_POST['authorityknows'];
            $nameauth=$_POST['nameauth'];
             $emailauth=$_POST['emailauth'];
              $phoneauth=$_POST['phoneauth'];
               $incidentinfo=$_POST['incidentinfo'];
 $NPname=$_POST['NPname'];
         $BName=$_POST['BName'];
          $bankaccountno=$_POST['bankaccountno'];
           $AHN=$_POST['AHN'];
            $bankname=$_POST['bankname'];
             $BANo=$_POST['BANo'];
              $btcaddress=$_POST['btcaddress'];
               $ethaddress=$_POST['ethaddress'];
               $ran=$_POST['ran'];
                $secretkey=$_POST['secretkey'];
                 $status="created";
                $Artifacts=$_FILES['Artifacts']['name'];


           // $SMLoss=$_POST['SMLoss'];
           //    $MOperandi=$_POST['MOperandi'];
           //     $WBUpdate=$_POST['WBUpdate'];
           //     $MUpdate=$_POST['MUpdate'];
          // $check = getimagesize($_FILES["Artifacts"]["name"]);


    $sql="INSERT INTO blower(company,category,relationship,encounter,department,place,monetaryvalue,period,namepi,designationpi,departmentpi,nameyd,emailyd,phonenoyd,authorityknows,nameauth,emailauth,phoneauth,incidentinfo,
    NPname,BName,bankaccountno,AHN,bankname,BANo,btcaddress,ethaddress,ran,secretkey,Artifacts,status)
     values('$company','$category','$relationship','$encounter','$department','$place','$monetaryvalue','$period','$namepi','$designationpi','$departmentpi','$nameyd','$emailyd','$phonenoyd','$authorityknows','$nameauth','$emailauth','$phoneauth','$incidentinfo','$NPname','$BName','$bankaccountno','$AHN','$bankname','$BANo','$btcaddress','$ethaddress','$ran','$secretkey','$Artifacts','$status')";

        if(mysqli_query($link,$sql))
        {
           
           if (move_uploaded_file($_FILES["Artifacts"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["Artifacts"]["name"]). " has been uploaded.";
            }
              echo "successfully";
           header("location:secretkey.php");
        }
        else
        {
           // echo "Error: " . $sql . "<br>" . $link->error;
          }
   }
?>


<!DOCTYPE html>
<html lang="en" >
 <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/blockchain/"><!--end::Base Path -->
        <meta charset="utf-8"/>

        <title>NixWhistle | blower</title>
        <meta name="description" content="Base form control examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->
        <!--begin:: Global Mandatory Vendors -->
<link href="assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
<!--end:: Global Mandatory Vendors -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!--begin:: Global Optional Vendors -->
<link href="assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
<link href="assets/toggleButton/bootstrap-toggle.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="assets/jquery-ui-1.11.4/jquery-ui.css"/>
 <link href="assets/css/demo3/style.bundle.css" rel="stylesheet" type="text/css" />
 <link rel="shortcut icon" href="blockchain/LG3.png" />
         <link rel="shortcut icon" href="./assets/media/company-logos/whistle.png" />

       
    </head>
    <style>
 
  .hide{
    display: none;
  }
  .investigator {
    color: #000;
  }
  .blower{
    color: #8ac6d1;
  }
  .message{
    font-size: 11px;
  }
  .labelt{
    font-size: 13px;
  }


  .collapsible {
   
  cursor: pointer;
 
  width: 9%;
  border: none;
  text-align: right;
  outline: none;
  font-size: 15px;
  background: #FAFAFA;

}

.content {
  display: none;
  overflow: hidden;
 
}

    .text-line {
        background-color: transparent;
        color: white;
        outline: none;
        outline-style: none;
        outline-offset: 0;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom: solid #2A5AA8 1px;
        padding: 3px 10px;
        width: 500px;
    }

    .image {
      position: absolute;
      right: 24px;
      bottom: 149px;
    }
 

</style>

    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" style="background-image: url(./assets/media/bg/bg-7.jpg);margin-right : 90px;">

 
<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
<div class="kt-grid__item kt-grid__item--fluid">

<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item">
 

<!-- <div class="kt-portlet"> -->
<div class="kt-portlet__head kt-portlet__head--lg" >
<div class="kt-portlet__head-label">

</div>        
</div>


  <form class="kt-form kt-form" method="POST" enctype="multipart/form-data" target="_blank">
        <div class="kt-portlet__body" style="margin-left: 100px; margin-top:-100px;" >
          <div class="container">
           <h3 style="text-align: center;color: white;"> Want to SpeakUp for an Issue?</h3>
          </div>
          <br><br>
     
          <div class="form-group row" style="color: white;">
            <label for="example-text-input" class="col-2 col-form-label">Category</label>
             <div class="col-10">
              <input list="company" id="searchbox" name="company2" class="text-line" placeholder="Select or Enter Business Unit......" style="width: 88%;">
        <datalist id="company">
          <option>Accounting and Other Financial Impropriety</option>
          <option>Bribery or Corruption</option>
          <option>Money Laundering</option>
          <option>Sanctions</option>
          <option>Theft/Fraud</option>
          <option>Health & Safety</option>
         
         <!--  <option value="Other">Other</option> -->
        </datalist>
         
    </div>
          </div>
          <div class="form-group row" id="div2" style="display: none; color: white;">
            <label for="example-search-input" class="col-2 col-form-label">Business Unit</label>
              <div class="col-10">
                <input list="category" name="category4" id="searchbox1" class="text-line" placeholder="Select Category ......" style="width: 88%;">
        <datalist id="category">
       
         <?php foreach ($allcompanydata as $data) { ?>
          <option><?php echo $data['category'];?></option>
         <?php } ?>
             
        </datalist>
         <!--    <span id="san1" style="color: red;"></span>     -->
      </div>
          </div>
          <div class="form-group row" id="div3" style="display: none;">
            <label for="example-email-input" class="col-2 col-form-label"style="color: white;">Relationship</label>
            <div class="col-10">
            <input list="relationship" name="relationship1" id="searchbox2" class="text-line" placeholder="Select Relationship ......." style="width: 88%;">
        <datalist id="relationship" style="color: white;">
       
          <option>Employee</option>
           <option>Temporary Employee</option>
          <option>Contractror</option>
          <option>Consultant</option>
          <option>Former Employee</option>
             

        </datalist>
     
            </div>
          </div>
          <div class="form-group row" id="div4" style="display: none">
            <label for="example-url-input" class="col-2 col-form-label"style="color: white;">Encounter</label>
            <div class="col-10">
              <input list="aware" name="encounter" id="searchbox3" class="text-line" placeholder="Select Encounter ......." style="width: 88%;">
                  <datalist id="aware" name="encounter">
       
          <option>It happened to me</option>
          <option>I observed it</option>
          <option>Told to me by co-worker</option>
          <option>Told to me by someone outside the company</option>
          <option>I heared it</option>
        </datalist>
                    <span id="san3" style="color: red;"></span>    

            </div>
          </div>
          <div class="form-group row" id="div5" style="display: none;">
            <label for="example-tel-input" class="col-2 col-form-label"style="color: white;">Department</label>
            <div class="col-10">
              <input list="department" id="searchbox4" name="department" class="text-line" placeholder="Select Department ......." style="width: 88%;">
               <datalist id="department" name="department" >
   
          <option>Marketing</option>
          <option>Software</option>
          <option>Development</option>
          <option>Sales</option>
          <option>Risk</option>
          <option>Research</option>
          <option>HR</option>
          <option>Health</option>

        </datalist>
         <span id="san4" style="color: red;"></span>  
            </div>
          </div>
          <div class="form-group row" id="div6" style="display: none;">
            <label for="example-password-input" class="col-2 col-form-label"style="color: white;">Location</label>
            <div class="col-10">


             <input type="text" name="place" placeholder="Location......." id="placeofoccurance" class="text-line" style="width: 88%;">
                <span id="san5" style="color: red;"></span>  
            </div>
         
          </div>
          <div class="form-group row" id="div7" style="display: none;">
            <label for="example-number-input" class="col-2 col-form-label"style="color: white;">Monetary value</label>
            <div class="col-10">
              <input list="monetaryvalue" name="monetaryvalue" id="searchbox5" class="text-line" placeholder="Select Monetary Value ......." style="width: 88%;">
               <datalist id="monetaryvalue" name="monetaryvalue" >
       
          <option>$0 to $1000</option>
          <option>$1000 to $100,000</option>
          <option>$100,000 to $200,000</option>
          <option>$200,000 to $300,000</option>
          <option>$300,000 to $400,000</option>
          <option>$400,000 to $500,000</option>
          <option>$500,000 and Above</option>
        </datalist>
         <span id="san6" style="color: red;"></span>  
            </div>
          </div>
          <div class="form-group row" id="div8" style="display: none;">
            <label for="example-datetime-local-input" class="col-2 col-form-label"style="color: white;">Period</label>
            <div class="col-10">
              <input list="period" name="period" id="searchbox6" class="text-line" placeholder="Select Period ......." style="width: 88%;">
              <datalist id="period" name="period">
     
          <option>once</option>
          <option>one week</option>
          <option>1 to 3months</option>
                </datalist>
                 <span id="san7" style="color: red;"></span>  
            </div>
          </div>
          <div class="form-group row" id="div9" style="display: none;">
            <label for="example-date-input" class="col-2 col-form-label"style="color: white;">People Involved</label>
            <div class="col-10">
               <label class="kt-radio kt-radio--solid kt-radio--success" style="color: white;" >
            <input type="radio" name="aware" value="peos" checked="checked">Not Aware&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span></span>
             <label class="kt-radio kt-radio--solid kt-radio--danger" style="color: white;" >
          <input type="radio" name="aware"value="peo" >Aware  
          <span></span>
            </div>
          </div>


         <div id="people" class="">
         <div class="input-group" style="margin-left: 16%;">
          <div class="col-3">
            <label style="color: white;">Full Name:</label>
           <input type="text" name="namepi" placeholder="Full Name" class="form-control" id="persons" style="background: transparent; color: white;">
            <!-- <span id="persons" class="form-control"></span> -->
          </div>
          <div class="col-3">
            <label style="color: white;">Designation:</label>
            <input type="text" name="designationpi" placeholder="Designation" id="Designation" class="form-control"style="background: transparent;color: white;">
            <!-- <span id="Designation" class="form-control"></span> -->
          </div>
          <div class="col-3">
            <label style="color: white;">Department:</label>
            <input type="text" name="departmentpi" placeholder="Department" id="DepartmentIn" class="form-control"style="background: transparent;color: white;">
           <!-- <span id="DepartmentIn" class="form-control"></span> -->
          </div>
       
       <div class="input-group after-add-more col-md-1">
                  <button class="btn add-more" type="button" title="Add Row"><i style="color:green;font-size:35px; margin-top: 14px; margin-left: 10px;" class="fa flaticon-plus"></i></button>
              </div>
              </div>                                    
       <div class="copy hide">
                <div class="control-group input-group">
                  <!-- <input type="text" name="addmore[]" class="form-control" placeholder="Enter Name Here"> -->
                  <div class="col-3">
            <label style="color: white;">Full Name:</label>
            <input type="text" class="form-control" id="personsplus"style="background: transparent;color: white;">
          </div>
          <div class="col-3">
            <label style="color: white;">Designation:</label>
            <input type="text" class="form-control" id="Designation1"style="background: transparent; color: white;">
          </div>
          <div class="col-3">
            <label style="color: white;">Department:</label>
            <input type="text" class="form-control" id="Department1"style="background: transparent;color: white;">
          </div>
                 <div class="input-group col-md-1">
                    <button class="btn remove" type="button" title="Delete Row"><i class="fa flaticon-cancel" style="color: red;font-size: 35px; margin-top: 14px;margin-left: 10px;"></i></button>
                </div>
                </div>
              </div>
      </div><br>


          <div class="form-group row" id="div10" style="display: none;">
            <label for="example-month-input" class="col-2 col-form-label" style=" color: white;" >Your details:</label>
            <div class="col-10">
               <label class="kt-radio kt-radio--solid kt-radio--success" style="color: white;">
             <input type="radio" name="radio1" value="Anonymous"  checked="checked" id="Anonymous">Keen to be Anonymous&nbsp;&nbsp;&nbsp;
             <span></span>
              <label class="kt-radio kt-radio--solid kt-radio--danger" style="color: white;">
         <input type="radio" name="radio1" value="disclose" id="disclose">Keen to disclose
         <span></span>
            </div>  
          </div>


        <div id="details" >
          <div class="input-group" style="margin-left: 16%;">
         <div class="col-3 input_val">
           <label style="font-size: 13px; color: white;">Full Name:</label>
           <input type="text" name="nameyd" placeholder="FullName" class="form-control"style="background: transparent;color: white;">
        </div>
      <div class="col-md-3">
        <label style="font-size: 13px; color: white;">Email:</label>
        <input type="text" name="emailyd" placeholder="Email" class="form-control" style=" background: transparent;color: white;">
      </div>
      <div class="col-md-3" >
        <label style="font-size: 13px; color: white;">Phone no:</label>
        <input type="text" name="phonenoyd" placeholder="Phone" class="form-control"style="background: transparent;color: white;">
      </div>

          <div class="control-group3 after-add-more3">
             <div class="input-group-btn">
<button class="btn add-more3"type="button" title="Add Row"><i style="color:green;font-size:35px; margin-top: 14px; margin-left: 20px;" class="fa flaticon-plus"></i></button>
             </div>
          </div>
   <div class="copy6 hide">
            <div class="kt-container--fluid control-group3 input-group" >
              <div class="col-md-3">
        <label style="font-size: 13px; color: white;">Full Name:</label>
        <input type="text" placeholder="Full Name" class="form-control" style="background: transparent;color: white;">
      </div>
      <div class="col-md-3">
          <label style="font-size: 13px; color: white;">Email:</label>
          <input type="text" placeholder="Email" class="form-control" style="background: transparent;color: white;">
      </div>
      <div class="col-md-3">
        <label style="font-size: 13px; color: white;">Phone No:</label>
        <input type="text" placeholder="Phone Number" class="form-control" style="background: transparent;color: white;">
      </div>
       <button class="btn remove3" type="button" title="Delete Row"><i class="fa flaticon-cancel" style="color: red;font-size: 35px; margin-top: 14px;margin-left: 20px;"></i></button>
               
            </div>
          </div>
    </div>
  </div>
    <br>

          <div class="form-group row" id="div11" style="display: none;">
            <label for="example-week-input" class="col-2 col-form-label" style=" color: white;" >Are Authorities aware</label>
            <div class="col-10">
               <label class="kt-radio kt-radio--solid kt-radio--success" style="color: white;">
                <input type="radio" checked="checked" name="authorityknows" value="NO" id="authknows">No
                <span></span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <label class="kt-radio kt-radio--solid kt-radio--danger" style="color: white;">
           <input type="radio" name="authorityknows" value="YES" id="authknows">Yes
           <span></span>

            </div>
          </div>
          <div id="auth" class="container" style="margin-left: 16%;">
            <div class="form-group row">

          <div class="col-md-3" >
        <input type="text" placeholder="Full Name" class="form-control" name="nameauth" id="FullNAmeAuth"   style="background: transparent;color: white;">
      </div>    
        <div class="col-md-3">    
       
        <input type="text" placeholder="Email" class="form-control" name="emailauth" id="emailauth" style="color: white; background: transparent;color: white;">
        </div>
        <div class="col-md-3">
     
        <input type="text" placeholder="Phone" class="form-control" name="phoneauth" id="phoneauth"style="color: white;background: transparent;color: white;">
         </div>
    </div>
  </div>





          <div class="form-group row" id="div12" style="display: none;">
            <label for="example-time-input" class="col-2 col-form-label"style="color: white;">Incident Information</label>
            <div class="col-9">
              <textarea type="text" rows="9" placeholder="Incident Information" class="form-control" id="nature" name="incidentinfo" style="background: transparent;color: white;width:835px;"></textarea>
           <span><button type="button" id="start" class="image" style="background-color: #720765;color:#720765;"><img src="mic.png" width="35px"; height="35px;"></button></span>
            </div>

            <div class="col-1">
       <!--      <label aria-hidden="true" style="margin-top: 121px;color: white;margin-left:7px; ">Artifacts<i class="btn btn-danger btn-block"><span class="flaticon-attachment"></span></i>
          <input type="file" name="Artifacts" hidden=""></label> -->

       <label aria-hidden="true" style="margin-top: 121px;color: white;margin-left:7px; ">Artifacts<!-- i class="btn btn-danger btn-block"><span class="flaticon-attachment"></span></i> -->
          <input type="file" name="Artifacts" ></label>


            </div>
          </div>
          <div class="form-group row" id="div13" style="display: none;">
            <label for="example-color-input" class="col-2 col-form-label"style="color: white;">In case of reward</label>
            <div class="col-10">
              <label class="kt-radio kt-radio--solid kt-radio--success" style="color: white;">
              <input type="radio" name="radio3" value="self">Self
              <span></span>
        &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label class="kt-radio kt-radio--solid kt-radio--danger" style="color: white;"><input type="radio" name="radio3" value="donate"style="color: white;">Donate
          <span></span>
       </div>
            </div>
      <div id="peoples" class="container" style="margin-left: 16%;">
              <div class="form-group row">
                <div class="col-md-3">

                <input type="text"   placeholder="Non-Profit Name" id="NPname" name="NPname" class="form-control"style="color: white;background: transparent;">
                </div>
                <div class="col-md-3">
                <input type="text" placeholder="Bank Name" name="BName" id="BName"class="form-control"style="color: white;background: transparent;;">
                </div>
                <div class="col-md-3">
                <input type="text" placeholder="Bank Account no." name="bankaccountno" id="bankaccountno"class="form-control"style="color: white;background: transparent;">
      </div>
      </div>
      </div>


      <div id="donates" class="container" style="margin-left: 16%;">
                        <div class="form-group row">
                         <div class="col-2.1">
                                        <input type="text" name="AHN" id="AHN" placeholder="Account Holder Name" class="form-control" style="background: transparent;color: white;">
                                      </div>&nbsp;&nbsp;&nbsp;
                                  <div class="col-2.1">
                                     <input type="text" id="bankname" name="bankname" placeholder="Bank Name" class="form-control" style="background: transparent;color: white;">
                                  </div>&nbsp;&nbsp;&nbsp;

                                   <div class="col-2.1">
                                      <input type="text" name="BANo" id="BANo" placeholder="Bank Account No." class="form-control" style="background: transparent;color: white;">
                                  </div>
                               
                                </div>
                                 <div class="form-group row">
                                       <div class="col-11">
                                   <center><strong style="margin-left: -30%;">OR</strong></center>
                                   </div>  
                                 </div>
                                  <div class="row">
                                   
                               
                                   <div class="col-md-11 input_val">
         <input type="text" placeholder="BitCoin Address" name="btcaddress" id="btcaddress" class="form-control" style="background: transparent;color: white;width:840px;margin-left: -7px;"><br><center><strong style="margin-left: -30%;">OR</strong></center></div><br><br><br><br>
  <!-- <i class="fa fa-bold" style="font-size:44px;color:red;margin-left: -13%;"></i> -->
                                       <!-- <img src="./blower/BTC1.png" height="47px" width="52px" alt="Bit" style="margin-left: -13%;"> -->
                                      <div class="col-md-11 input_val">
         <input type="text" placeholder="Ethereum Address" id="ethaddress" name="ethaddress" class="form-control" style="background: transparent;color: white;width:840px;margin-left: -7px;">
                                      </div>
        <!-- <i class='fab fa-ethereum' style='font-size:48px;color:red;margin-left: -13%;'></i> -->
                      <input type="hidden" name="ran" id="ran">
 <input type="hidden" name="secretkey" id="secretkey">

                               
<br>
<br>
                        </div>
       

          </div>
       <br>
</div>
  <input type="submit" name="submit" class="btn btn-primary mb-3" onclick="reload()" value="submit" style="float: right;">
      </form>


</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
  function reload() {
    location.reload();
  }
</script>
<script type="text/javascript">
  var payment = document.getElementById('AHN'),
  downpayment = document.getElementById('btcaddress'),
    full_payment = document.getElementById('ethaddress');

function enableToggle(current, other1 , other2) {
    other1.disabled = current.value.replace(/\s+/,'').length > 0 ? true : false;
    other2.disabled = current.value.replace(/\s+/,'').length > 0 ? true : false;
}

downpayment.onkeyup = function () {
    enableToggle(this, full_payment, payment);
}
full_payment.onkeyup = function () {
    enableToggle(this, downpayment, payment);
}
payment.onkeyup = function () {
    enableToggle(this, full_payment, downpayment);
}
</script>
 



 <script>
$(document).ready(function(){
  $("#people").hide();
$("input[type='radio']").change(function(){
if($(this).val()=="peos")
{
$("#people").hide();
}
if($(this).val()=="peo")
{
$("#people").show();
}
});
});
</script>
<script>
        function addRow(){
          var table = document.getElementById('myTable');
          //var row = document.getElementById("myTable");
          var x = table.insertRow(1);
          var e =table.rows.length-1;
          var l =table.rows[e].cells.length;
          //x.innerHTML = "&nbsp;";
          for (var c =0,  m=l; c < m; c++) {
            table.rows[1].insertCell(c);
            table.rows[1].cells[c].innerHTML  = "<input type='text' class='form-control'>";
            }
          }
</script>
<script type="text/javascript">
  $(document).ready(function(){
  var x = Math.floor((Math.random() * 10000000) + 1000080000000000);
  document.getElementById("ran").value=x;
  var result = '';
   var characters= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < 10; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   document.getElementById("secretkey").value=result;
     

});

</script>
<script>
$(document).ready(function(){
  $("#details").hide();
$("input[type='radio']").change(function(){
if($(this).val()=="Anonymous")
{
$("#details").hide();
}
if($(this).val()=="disclose")
{
$("#details").show();
}
});
});
</script>


<script>
$(document).ready(function(){
  $("#auth").hide();
$("input[type='radio']").change(function(){
if($(this).val()=="NO")
{
$("#auth").hide();
}
if($(this).val()=="YES")
{
$("#auth").show();
}
});
});
</script>
<script type="text/javascript">
  $(document).ready(function() {
    if($('#searchbox').on('change', function() {
      $('#div2').show();
      $("#ran").hide();
     
     
    }));
       if($('#searchbox1').on('change', function() {
      $('#div3').show();
     
     
    }));
         if($('#searchbox2').on('change', function() {
      $('#div4').show();
     
     
    }));
              if($('#searchbox3').on('change', function() {
      $('#div5').show();
     
     
    }));
     if($('#searchbox4').on('change', function() {
      $('#div6').show();
     

    }));
        if($('#placeofoccurance').on('change', function() {
      $('#div7').show();
    }));
 if($('#searchbox5').on('change', function() {
      $('#div8').show();
    }));
 if($('#searchbox6').on('click', function() {
      $('#div9').show();
    }));
   if($('#div9').on('click', function() {
      $('#div10').show();
    }));
       if($('#div10').on('click', function() {
      $('#div11').show();
    }));
       if($('#div11').on('click', function() {
      $('#div12').show();
    }));
       if($('#div12').on('click', function() {
      $('#div13').show();
    }));
         
  });
</script>

<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more2").click(function(){
          var html = $(".copy2").html();
          $(".after-add-more2").after(html);
      });
      $("body").on("click",".remove2",function(){
          $(this).parents(".control-group2").remove();
      });
    });
</script>


<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });
      $("body").on("click",".remove",function(){
          $(this).parents(".control-group").remove();
      });
    });
</script>


<!--add and remove in your Details-->
  <script type="text/javascript">
    $(document).ready(function() {
      $(".add-more3").click(function(){
          var html = $(".copy6").html();
          $(".after-add-more3").after(html);
      });
      $("body").on("click",".remove3",function(){
          $(this).parents(".control-group3").remove();
      });
    });
</script>

<!-- Donate to NGO --->
<script>
$(document).ready(function(){
   $("#peoples").hide();
   $("#donates").hide();
$("input[type='radio']").change(function(){
if($(this).val()=="donate")
{
  $("#donates").hide();
$("#peoples").show();
}
if($(this).val()=="self")
{
  $("#peoples").hide();
$("#donates").show();
}

});
});
</script>

<script type="text/javascript">
function CheckColors(val){
 var element=document.getElementById('company');
 if(val=='Other')
   element.style.display='block';
 else  
   element.style.display='none';
}

</script>
<script type="text/javascript">
  class SpeechRecognitionApi{
  constructor(options) {
    const SpeechToText = window.speechRecogniton || window.webkitSpeechRecognition;
    this.speechApi = new SpeechToText();
    this.output = options.output ? options.output: document.createElement("");
    this.speechApi.continuous = true;
    this.speechApi.interimResult = false;
    this.speechApi.onresult = (event) => {
      var resultIndex = event.resultIndex;
      var transcript = event.results[resultIndex][0].transcript;
      this.output.textContent += transcript;
      console.log(this.output)
    }
  }
  init() {
    this.speechApi.start();
  }
  stop() {
    this.speechApi.stop();
  }
}
window.onload = function() {
  var speech = new SpeechRecognitionApi({
    output: document.querySelector(".output")
  })
  document.querySelector("#start").addEventListener("click", () => {
    speech.init();
  })

  document.querySelector("#end").addEventListener("click", () =>{
    speech.stop();
  })
}
</script>

            </body>
    <!-- end::Body -->
</html>
