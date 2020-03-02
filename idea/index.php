<?php
    include "../php/common/config.php";
      $ran = $_GET['id'];
    $query = "SELECT * FROM Idea WHERE tipno='$ran'";
  $result=mysqli_query($link,$query);
     $query1 = "SELECT * FROM Idea WHERE tipno='$ran'";
  $result1=mysqli_query($link,$query1);
   $query2 = "SELECT * FROM Idea WHERE tipno='$ran' order by id desc";
  $result2 = mysqli_query($link,$query2);
   if(isset($_POST['submit']))
    {
     
     $id = $_POST['id']; 
      $tipno = $_POST['tipno']; 
     $PCS=$_POST['PCS'];
    $Ideai=$_POST['Ideai'];
     $Synopsis=$_POST['Synopsis'];
     $WBU=$_POST['WBU'];
      $category=$_POST['category'];
       $name = $_POST['name']; 
        $email = $_POST['email']; 
         $phone = $_POST['phone']; 
          $description = $_POST['description']; 
      $status="Analyzed";
  $sql1="UPDATE Idea SET PCS='$PCS',Ideai='$Ideai',Synopsis='$Synopsis',WBU='$WBU',status='$status' WHERE id=$id";
    if($rows=mysqli_fetch_assoc($result))
   {
   
   if($rows['status']=='reanalyze')
   {
    $sql2="INSERT INTO Idea(category,Description,name,email,phone,PCS,Ideai,Synopsis,WBU,tipno,status) values ('$category','$Description','$name','$email','$phone','$PCS','$Ideai','$Synopsis','$WBU','$tipno','Analyzed')";
   }
 }
       if(mysqli_query($link,$sql2))
       {
          header("Location:view.php");
         
        }
       else if(mysqli_query($link,$sql1))
       {
          header("Location:view.php");
       }
    }
  
?>
<!DOCTYPE html>
<html>
<head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/blockchain/"><!--end::Base Path -->
        <meta charset="utf-8"/>

        <title>Idea - Analyze</title>
        <meta name="description" content="Base form control examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!--begin::Fonts -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->
        <!--begin:: Global Mandatory Vendors -->
<link href="assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
<!--end:: Global Mandatory Vendors -->

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
 <link rel="shortcut icon" href=" ./assets/media/company-logos/whistle.png" />

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
  
  /*width: 9%;*/
  /*border: none;*/
  text-align: right;
  outline: none;
  font-size: 15px;
  background: #FAFAFA;

}


.content {
  display: none;
  overflow: hidden;
  
}
</style>
</head>
<?php 
include 'siteHeader2.php';
?>
<body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" >
<div class="kt-grid kt-grid--hor kt-grid--root">
<div class="kt-grid__item kt-grid__item--fluid">

<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper" style="margin-top:-13%;">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item">
 

<div class="kt-portlet">
<div class="kt-portlet__head kt-portlet__head--lg" style="background-color:#2a5aa8;">
<div class="kt-portlet__head-label">
<span class="kt-portlet__head-icon">
<i class="kt-font-brand flaticon2-line-chart"></i>
</span>
<h3 class="kt-portlet__head-title" style="color: white;">
Tip - <?php echo $_GET['id'];?>
</h3>
</div>        
</div>
<form action="" method="post">


<div class="container">
     <!-- <label class="" style="font-size: 14px;"><strong>People Involved:</strong></label> -->
 

<div id="people1" class="">
<br>
<div class="row">
  <div class="input-group">
     <?php
   if ($rows=mysqli_fetch_assoc($result)) {
     # code...
?>
   <div class="col-md-4 input_val">
     <label><strong>FullName</strong></label>
    <!--<input type="text" placeholder="Name" class="form-control" id="persons" style="border-color: #216582;" >-->
     <input type="text" id="name" class="form-control" value="<?php echo $rows['name'];?>">
   </div>
    <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
    <input type="hidden" name="tipno" value="<?php echo $rows['tipno']; ?>">
    <input type="hidden" name="category" value="<?php echo $rows['category']; ?>">
    <input type="hidden" name="name" value="<?php echo $rows['name']; ?>">
    <input type="hidden" name="email" value="<?php echo $rows['email']; ?>">
    <input type="hidden" name="phone" value="<?php echo $rows['phone']; ?>">
    <input type="hidden" name="description" value="<?php echo $rows['Description']; ?>">
 


   <div class="col-md-4 input_val">

      <label style="font-size: 14px;"><strong>Possible Cost Saving</strong></label><br>
      <input type="text" name="PCS" id="PCS" class="form-control"style="border-color:#A1E6EA;">    
     <!--<select class="form-control" id="fraud" style="border-color: #216582;">
       <option>--Select--</option>
       <option>$0 to $100,000</option>
       <option>$100,000 to 200,000</option>
       <option>$200,000 to $300,000</option>
       <option>$300,000 to $400,000</option>
       <option>$400,000 to $500,000</option>
     </select>-->
   </div>
    
    <div class="col-md-4 input_val">
<label><strong>Idea</strong></label><br>
   <select class="form-control " name="Ideai" id="Ideai" style="border-color:#A1E6EA;">
       <option>--Select--</option>
       <option>Excellent</option>
       <option>Good</option>
       <option>Bad</option>

     </select>
</div>

       </div> 
   </div>
</div>
</div>
<br>

<div class="container">
<div class="form-group">
  <label style="font-size: 15px;">Management Synopsis :</label> 
     	<div class="">
   <textarea type="text" class="form-control" name="Synopsis" id="Synopsis" placeholder=""  style="height: 150px; border-color:#A1E6EA"> </textarea>
   <span id="apdate" style="color: red;"></span>
</div>
   </div>

   <div class="form-group">
  <label style="font-size: 15px;">Update to Submitter :</label> 
     	<div class="">
   <textarea type="text" class="form-control" name="WBU" id="WBU" placeholder="Give WhistleBlower on update"  style="height: 150px; border-color:#A1E6EA"> </textarea>
   <span id="apdate" style="color: red;"></span>
</div>
   </div>
   <?php 
   if($rows2=mysqli_fetch_assoc($result2))
   {
   
   if($rows2['status']=='reanalyze')
   {
    ?>
      <div class="form-group">
   
   
  <label style="font-size: 14px;"><strong> Reinvestigate:</strong></label> 
      <div class="">
   <textarea type="text" class="form-control"   style="height: 150px; border-color:#A1E6EA" disabled=""><?php echo $rows2['reinvestigate'];?> </textarea>
   <!-- <span class="form-control" style="height: 150px; border-color:#A1E6EA"><?php echo $rows['reinvestigate'];?></span> -->
</div>
<?php
}
}
?>
</div>

<div class="container">
  
  <input type="submit" name="submit" class="btn btn-danger" style="float: right;" onclick="alert()">

</div>
<div class="container">
<div class="row">

<div class="col-md-1">
 <div class="img" style="margin-left: 1080px;margin-top: 115px;">

<a href="" data-toggle="modal" data-target="#myModal"><i class='fa fa-comments' style="color:  red; font-size: 38px;" title="Review"></i></a>
    </div>
</div>
</div>

</div>
<div class="container">
  <a data-toggle="collapse" data-target="#data" style="font-size: 16px;"><button class="flaticon2-arrow" style="border-radius: 25px; background-color: #86346C; color: #ffffff;margin-top: -8%;">  History</button></a>
</div><br>
</form>

<script type="text/javascript">
  function alert(){
    Swal.fire("Successfully Done!");
  }


</script>
 
<div class="container collapse" id="data"><br>
 
<!-- <div class="container hide" id="data" style="border:1px solid #C3C8C6; margin-left: -18px; height: 90px;"> -->
  <div class="container">
  <div class="row form-group">
<div class="col-md-6">
<label><i class=" fa fa-podcast" style="color: red;"></i><strong>Category</strong></label><br>
<input type="text" name="email" class="form-control" disabled value="<?php echo $rows['category'];?>">

</div>

<div class="col-md-6">
<label><strong>Description</strong></label><br>
<input type="text" name="email" class="form-control" disabled value="<?php echo $rows['Description'];?>">
</div>
</div>
</div>


<div class="container">
     <label class="" style="font-size: 14px;"><strong>Your Details :</strong></label>
 
<div class="panel-body"style="border: 1px solid #e2e5ec;border-color:#A1E6EA">
<div id="people1" class="">
<br>
<div class="row">
  <div class="input-group" style="margin:20px;">
   <div class="col-md-4 input_val">
     <label>Full Name :</label>
  <input type="text" name="email" class="form-control" disabled value="<?php echo $rows['name'];?>">
   </div>
   <div class="col-md-4 input_val">
     <label>Email :</label>
     <!--<input type="text" placeholder="Designation" class="form-control" style="border-color: #216582;">-->
    <input type="text" name="email" class="form-control" disabled value="<?php echo $rows['email'];?>">
   </div>
   <div class="col-md-4 input_val">
     <label>Phone No :</label>
    <!-- <input type="text" placeholder="Department" class="form-control" style="border-color: #216582;">-->
  <input type="text" name="email" class="form-control" disabled value="<?php echo $rows['phone'];?>">   </div>
 
<!-- <div class="input-group after-add-more col-md-1">
           <button class="btn add-more" type="button" title="Add Row"><i style="color:green;font-size:20px;" class="fa flaticon-plus"></i></button>
       </div> -->

       </div> 
   </div>
   <br><br>
</div>
</div>
<br>
</div>
<br>


<div class="container">
     <label class="" style="font-size: 14px;"><strong>Incase Of Rewards :</strong></label>
 <div class="panel-body"style="border: 1px solid #e2e5ec;border-color:#A1E6EA">


<div id="people1" class="">
<br>
<div class="row">
  <div class="input-group" style="margin: 20px;">
   <div class="col-md-4 input_val">
     <label>Account Holder Name :</label>
    <!--<input type="text" placeholder="Name" class="form-control" id="persons" style="border-color: #216582;" >-->
      <input type="text" name="name" class="form-control" disabled value="<?php echo $rows['AHN'];?>">
   </div>
   <div class="col-md-4 input_val">
     <label>Bank Name :</label>
  <input type="text" name="name" class="form-control" disabled value="<?php echo $rows['bankname'];?>">
   </div>
   <div class="col-md-4 input_val">
     <label>Bank Account No. :</label>
    <input type="text" name="name" class="form-control" disabled value="<?php echo $rows['BAN'];?>">
   </div>

       </div> 
   </div>
   <br>
   <div class="row">
  <div class="input-group" style="margin: 20px;">
   <div class="col-md-4 input_val">
     <label>Non-Profit Name :</label>
       <input type="text" name="name" class="form-control" disabled value="<?php echo $rows['NPname'];?>">
   </div>
   <div class="col-md-4 input_val">
     <label>Bank Name :</label>
        <input type="text" name="name" class="form-control" disabled value="<?php echo $rows['bname'];?>">
   </div>
   <div class="col-md-4 input_val">
     <label>Bank Account No. :</label>
     <input type="text" name="name" class="form-control" disabled value="<?php echo $rows['bankac'];?>">
   </div>
 


       </div> 
   </div>
</div>
</div>
</div><br>
<div class="form-group">
  <label style="font-size: 14px; color: #009e73;  background-color: coral;">Artifacts:</label>
      <div class="">
   <textarea type="text" class="form-control" style="height: 150px; border-color:#A1E6EA"><?php echo $rows['artifacts'];?> </textarea>
   <span id="apdate" style="color: red;"></span>
</div>
   </div>
   <?php
}
?>
   <br>
 <?php
   $count=1;
   while($rows1=mysqli_fetch_assoc($result1)){
    ?>
   <div class="form-group">
  <label style="font-size: 14px;  background-color: #f71462;color: white;"><b>Management Synopsis - <?php echo $count;?></b></label>
   
  <div style="min-height: 200px; max-height: 100px;border:1px solid #C3C8C6;">
       <?php echo $rows1['Synopsis'];?>
      </div>
   </div><br>
    <div class="form-group">
  <label style="font-size: 14px;  background-color: #f71462;color: white;"><b>Updated to Idea - <?php echo $count;?></b></label>
   
  <div style="min-height: 200px; max-height: 100px;border:1px solid #C3C8C6;">
        <?php echo $rows1['WBU'];?>
      </div>
   </div><br>
 <?php 
 $count++;
} 
?>
<br>
<div class="col-md-11">
  <button class="collapsible btn btn-success">Interaction</button>

  <div id="demo" class="collapse"><br>
  <h5>Chat History</h5>
  <div style="min-height: 200px; width: 1119px; max-height: 100px; overflow: auto;border:1px solid #C3C8C6;border-color:#A1E6EA;">
        <div class="conversations"></div>
      
      </div>
   </div>
</div>
</div>


 <br>

<br>
</div>



<div class="container">
                                  <!--Edit image png section-->

           <!-- <div class="">
       	<div class="">
           <a href=""><img src="edit.png"style="height: 35px;width: 35px; margin-left: 1210px; margin-top: -140px"></a> 
       </div></div>-->   

   



  <div class="form-group">

       <br>

  <!-- Button to Open the Modal -->
   <!-- The Modal -->

  <div class="modal" id="update">
   <div class="modal-dialog">
     <div class="modal-content">
     
   
       <!-- Modal body -->
       <div class="modal-body">
        <h3 class="modal-title">Succssfully Updated!</h3>
       </div>
     
     </div>
   </div>
 </div>


</div>

<br><br>
</div>

   <div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog">
   
     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <h4 class="modal-title">Live Conversation</h4>
         <button type="button" class="close" data-dismiss="modal" ></button>
       </div>
       <div class="modal-body" style="min-height: 300px; max-height: 300px; overflow: auto;">
       	<div class="conversations"></div>
         
       </div>

       <div class="modal-footer" >
       	<div class="col-md-9">
<input type="text" id="query" name="" class="form-control" placeholder="Provide more info...">
</div>
<div class="col-md-3"><input type="button" onclick="messagesent()" name="" class="btn btn-primary" value="Send Message" style="background-color: #2E9461;"></div>
       </div>
     </div>
 </div>
</div> 
    
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<br><br>

</body> 

</html>
<?php 
include "sidemenu.php";
 ?>

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

<script>
var coll = document.getElementsByClassName("collapsible");
var i;


for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>


<script>
$(document).ready(function(){
  $("#peoples").hide();

$("input[type='radio']").change(function(){
if($(this).val()=="peos")
{
$("#peoples").hide();
$("#people").show();
}
if($(this).val()=="peo")
{
$("#peoples").show(); 
$("#people").hide();
}
});
});
</script>

<script>

            var KTAppOptions = {"colors":{"state":{"brand":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
      
<script src="assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>

          
      <script src="assets/js/demo3/scripts.bundle.js" type="text/javascript"></script>
      <script src="assets/toggleButton/bootstrap-toggle.min.js"></script>
      <script type="text/javascript" src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>  
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <script type="text/javascript">
var getUrl=window.location.search.slice(1);
getUrl=getUrl.replace(/=/g,'":"');
   getUrl=getUrl.replace(/&/g,'":"');
 getUrl='{"'+getUrl+'"}';
 var obj=JSON.parse(getUrl);
 console.log(obj.id);
 document.getElementById("id").value=obj.id;
  document.getElementById("ideatip").value=obj.id;
</script>