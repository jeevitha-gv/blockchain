<?php 
require_once __DIR__.'/../header.php';
require_once __DIR__.'/../../php/user/userManager.php';
require_once '../../php/common/dashboard.php';
// $companyId=$_POST['companyId'];

    // error_log("userid".print_r($companyId,true));
    $manager = new UserManager();
     $userid=$_GET['auditId'];
   // echo $var;
    $allUsersArray = $manager->getAllUser($userid);
    // echo json_encode($allUsersArray);   
    $manager = new dashboard();
// $userSocialMedias = $manager->getUserSocialMedias($_SESSION['user_id']);
 $userSocialMedias = $manager->getUserSocialMedias(1);
// $userImage = $manager->getUserImage($_SESSION['user_id']);
 $userImage = $manager->getUserImage(1);
 $usermail = $manager->mail($_SESSION['user_id']);

 // $allTasksForUsers=$manager->getAllTaskForUser(1);
$allUsers = $manager->getAllUsersForTicket();
?>

<!DOCTYPE html>

<html lang="en" >
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/freshgrc/"><!--end::Base Path -->
        <meta charset="utf-8"/>

        <title>freshGRC</title>
        <meta name="description" content="Wizard examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">        <!--end::Fonts -->

        
                    <!--begin::Page Custom Styles(used by this page) -->
                             <link href="./assets/css/demo2/pages/wizard/wizard-2.css" rel="stylesheet" type="text/css" />
                        <!--end::Page Custom Styles -->
        
        <!--begin:: Global Mandatory Vendors -->
<link href="./assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<link href="./assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
<link href="./assets/css/demo3/style.bundle.css" rel="stylesheet" type="text/css" />
 <link rel="shortcut icon" href="./assets/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
 <link href="./assets/css/demo3/style.bundle.css" rel="stylesheet" type="text/css" />

        <link rel="shortcut icon" href="./assets/media/logos/fixnix.png" />
         <link href="./assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    </head>
  <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" style="background-color: #e0d9d9;">

       
    
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
<div class="kt-header-mobile__logo">
<a href="demo3/index.html">
<img alt="Logo" TITLE="K "src="./assets/media/logos/logo-2-sm.png"/>
</a>
</div>
<div class="kt-header-mobile__toolbar">
<button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>

<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
</div>
</div>
<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
<!-- begin:: Aside -->
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>


<!-- begin:: Header -->
<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " >
<!-- begin: Header Menu -->

<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-tab "  >

</div>
</div>
<!-- end: Header Menu -->   <!-- begin:: Header Topbar -->
<div class="kt-header__topbar">

   <div class="kt-header__topbar-item dropdown">
      

           <a href="view/common/overview.php"><span class="kt-header__topbar-icon" title="profile" style="margin-top: 20px;" title="Profile"><i class="flaticon2-user"></i></span>
           <span class="kt-hidden kt-badge kt-badge--dot kt-badge--notify kt-badge--sm"></span></a>
   
           <a href="view/common/companyprofiletable.php">
           <span class="kt-header__topbar-icon" style="margin-top: 20px;" title="inviteuser"><i class="flaticon-feed"></i></span>
           <span class="kt-hidden kt-badge kt-badge--dot kt-badge--notify kt-badge--sm"></span></a>
              <a href="view/common/project.php">
           <span class="kt-header__topbar-icon" title="project&Task" style="margin-top: 20px;"><i class="kt-menu__link-icon flaticon2-analytics-2"></i></span>
           <a href="view/common/timeline.php" style="margin-top: 20px;">
           <span class="kt-header__topbar-icon" title="Timeline"><i class="flaticon-chat"></i></span>
           <span class="kt-hidden kt-badge kt-badge--dot kt-badge--notify kt-badge--sm"></span></a>
           <span class="kt-hidden kt-badge kt-badge--dot kt-badge--notify kt-badge--sm"></span></a>
       <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px" aria-expanded="true">
           <span class="kt-header__topbar-icon"><i class="flaticon2-bell-alarm-symbol"></i></span>
           <span class="kt-hidden kt-badge kt-badge--dot kt-badge--notify kt-badge--sm"></span>
       </div>
       <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg">

       </div>
   </div>
<!-- <i class="flaticon2-user"> -->

<div class="kt-header__topbar-item kt-header__topbar-item--langs">
   <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
       <span class="kt-header__topbar-icon">
<img class="" src="./assets/media/flags/012-uk.svg" alt="" />
</span>
   </div>
   <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround">
       <ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
    <li class="kt-nav__item kt-nav__item--active">
        <a href="#" class="kt-nav__link">
            <span class="kt-nav__link-icon"><img src="./assets/media/flags/020-flag.svg" alt="" /></span>
            <span class="kt-nav__link-text">English</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <span class="kt-nav__link-icon"><img src="./assets/media/flags/016-spain.svg" alt="" /></span>
            <span class="kt-nav__link-text">Spanish</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <span class="kt-nav__link-icon"><img src="./assets/media/flags/017-germany.svg" alt="" /></span>
            <span class="kt-nav__link-text">German</span>
        </a>
    </li>
</ul>     
 </div>
</div>
<div class="kt-header__topbar-item kt-header__topbar-item--langs">
   <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
     <span class="kt-header__topbar-icon" title="logout" onclick="logout();" >
 <img src="./assets/media/icons/logout.svg" alt="" />
</span>
   </div>
</div>

</div>
<!-- end:: Header Topbar -->
</div>
</div>
</div>

<div class="kt-grid kt-grid--hor kt-grid--root">
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

<!-- begin:: Content -->
<div class="kt-container  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet">
<div class="kt-portlet__body kt-portlet__body--fit">
<div class="kt-grid  kt-wizard-v2 kt-wizard-v2--white" id="kt_wizard_v2" data-ktwizard-state="step-first">
<div class="kt-grid__item kt-wizard-v2__aside">
<!--begin: Form Wizard Nav -->
<div class="kt-wizard-v2__nav">
<div class="kt-wizard-v2__nav-items">
<!--doc: Replace A tag with SPAN tag to disable the step link click -->
<a class="kt-wizard-v2__nav-item"  data-ktwizard-type="step" data-ktwizard-state="current">
<div class="kt-wizard-v2__nav-body">
<div class="kt-wizard-v2__nav-icon">
<i class="flaticon-globe"></i>
</div>
<div class="kt-wizard-v2__nav-label">
<div class="kt-wizard-v2__nav-label-title">
Admin Account Settings
</div>
<div class="kt-wizard-v2__nav-label-desc">
Setup Your Account Details
</div>
</div>
</div>
</a>
<a class="kt-wizard-v2__nav-item" data-ktwizard-type="step">
<div class="kt-wizard-v2__nav-body">
<div class="kt-wizard-v2__nav-icon">
<i class="flaticon-bus-stop"></i>
</div>
<div class="kt-wizard-v2__nav-label">
<div class="kt-wizard-v2__nav-label-title">
Setup Organization
</div>
<div class="kt-wizard-v2__nav-label-desc">
Setup Your Organization
</div>
</div>
</div>
</a>
<a class="kt-wizard-v2__nav-item" data-ktwizard-type="step">
<div class="kt-wizard-v2__nav-body">
<div class="kt-wizard-v2__nav-icon">
<i class="flaticon-responsive"></i>
</div>
<div class="kt-wizard-v2__nav-label">
<div class="kt-wizard-v2__nav-label-title">
Support Channels
</div>
<div class="kt-wizard-v2__nav-label-desc">
Add Your Support Agents
</div>
</div>
</div>
</a>

<a class="kt-wizard-v2__nav-item"  data-ktwizard-type="step">
<div class="kt-wizard-v2__nav-body">
<div class="kt-wizard-v2__nav-icon">
<i class="flaticon-truck"></i>
</div>
<div class="kt-wizard-v2__nav-label">
<div class="kt-wizard-v2__nav-label-title">
Make Payment
</div>
<div class="kt-wizard-v2__nav-label-desc">
Use Credit or Debit Cards
</div>
</div>
</div>
</a>

</div>
</div>
<!--end: Form Wizard Nav -->

</div>
<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v2__wrapper">
<!--begin: Form Wizard Form-->
<form class="kt-form" id="kt_form">
<!--begin: Form Wizard Step 1-->
<div class="kt-wizard-v2__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
<div class="kt-heading kt-heading--md">Enter your Account Details</div>
<div class="kt-form__section kt-form__section--first">
<div class="kt-wizard-v2__form">
                                  <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="kt-avatar kt-avatar--outline" id="kt_user_add_avatar">
                                                            <div class="kt-avatar__holder" style="background-image: url(./assets/media/users/300_10.jpg)"></div>
                                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="Change avatar">
                                                                <i class="fa fa-pen"></i>
                                                                <input type="file" name="kt_user_add_user_avatar">
                                                            </label>
                                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="Cancel avatar">
                                                                <i class="fa fa-times"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                  <?php
                                                       foreach ($allUsersArray as $row) {
                                                    ?>
                                                    <div class="form-group">
                              <input type="hidden" class="form-control" id="loggedInUser" value=<?php echo $userid;?>>                                        
                            </div>
                                   <div class="form-group row">
                                                    <label class="col-xl-2 col-lg-2 col-form-label">First Name</label>
                                                    <div class="col-lg-8 col-xl-8">
                                                        <input class="form-control" type="text" value="<?php echo $row['firstName'];?>" id="firstname">
                                                    </div>
                                                    <div class="col-lg-2 col-xl-2">
                                                    <!-- <button class="btn btn-primary">Edit</button> -->
                                                </div>
                                                </div>
                           
                                                <div class="form-group row">
                                                    <label class="col-xl-2 col-lg-2 col-form-label">Last Name</label>
                                                    <div class="col-lg-8 col-xl-8" id="lastname">
                                                        <input class="form-control" type="text" value="<?php echo $row['lastName'];?>">
                                                    </div>
                                                    <div class="col-lg-2 col-xl-2">
                                                    <!-- <button class="btn btn-primary" id="myModal">Edit</button> -->
                                                </div>
                                                </div>
                     <?php } ?>
                                       <div class="form-group" style="margin-left:500px;">
                                    <a href="./view/common/addadminuser.php" class="btn btn-info btn-lg" title="InviteUser">
                                        <span class="glyphicon glyphicon-plus"></span> 
                                    </a>
                                </div>


</div>
</div>
</div>

<!--end: Form Wizard Step 1-->

<!--begin: Form Wizard Step 2-->
<div class="kt-wizard-v2__content" data-ktwizard-type="step-content">
<div class="kt-heading kt-heading--md">Setup Your Organization</div>
<div class=" ">
<div class="kt-wizard-v2__form">
<div class="row">
<div class="col-xl-12">
<div class="form-group">
<label>Category</label>
<input type="text" class="form-control" value="sample" placeholder="Category Line" id="category">

</div>
                                    </div>
</div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="address" placeholder="address"  id="address">
                                            
                                        </div>
                                    </div>
                                </div>
   
<div class="row">
<div class="col-xl-6 col-md-3">
<div class="form-group">
<label>Postcode</label>
<input type="text" class="form-control"  placeholder="Postcode"  id="code">

</div>
</div>
<div class="col-xl-6 col-md-3">
<div class="form-group">
<label>City</label>
<input type="text" class="form-control" placeholder="City"  id="city">

</div>
</div>
<div class="col-xl-6 col-md-3">
<div class="form-group">
<label>State</label>
<input type="text" class="form-control"  id="state">

</div>
                                    </div>
<div class="col-xl-6 col-md-3">
<div class="form-group">
<label>Country:</label>
<select class="form-control" id="country">
<option value="">Select</option>
<option value="AF">Afghanistan</option>
<option value="AX">Åland Islands</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antarctica</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaijan</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BY">Belarus</option>
<option value="BE">Belgium</option>

</select>
</div>
</div>
</div>            

                                   <div class="row">
                                 <div class="col-xl-6 col-md-3">
                                            <div class="form-group">
                                            <label>Team</label>
                                              <select id="team"  class="form-control select2" multiple="">
                           <option>--Select User--</option>   
                          <?php foreach($allUsers as $users){ ?>

                          <option value="<?php echo $users['last_name'] ?>"><?php echo htmlspecialchars($users['last_name']) ?></option>
                          <?php } ?>
                        </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-3">
                                            <div class="form-group">
                                            <label>Department</label>
                                             <select class="form-control" id="department">
                                               <option>...Department..</option>
                                               <option value="Software">Software</option>
                                               <option value="Marketing">Marketing</option>
                                               <option value="Health">Health</option>
                                               <option value="Development">Development</option>
                                               <option value="HR">HR</option>
                                             </select>
                                        </div>
                                    </div>
                                </div>
</div>
</div>
</div>
<!--end: Form Wizard Step 2-->



<!--begin: Form Wizard Step 4-->
<div class="kt-wizard-v2__content" data-ktwizard-type="step-content">
<div class="kt-heading kt-heading--md">Setup Your Support Channels</div>
<div class="kt-form__section kt-form__section--first">
<div class="kt-wizard-v2__form">
<div class="row">
<div class="col-xl-6 col-md-6">
<div class="form-group">

<i class="fab fa-facebook-f" title="Facebook" style="background-color: #3B5997;border-radius: 50%;padding:10px;color: white;"></i>&nbsp;&nbsp;<input type="text" class="form-control" value="www.facebook.com" id="facebook">

</div>
</div>
<div class="col-xl-6 col-md-6">
<div class="form-group">

<i class="fab fa-twitter" title="Twitter" style="background-color: #3EA1F2;border-radius: 50%;padding:10px;color: white;"></i>&nbsp;&nbsp;<input type="text" class="form-control" value="www.twitter.com" id="twitter">

</div>
</div>
</div>
                                
<div class="row">
<div class="col-xl-6 col-md-6">
<div class="form-group">

<i class="fab fa-google" title="Twitter" style="background-color:red;border-radius: 50%;padding:10px;color: white;"></i>&nbsp;&nbsp;<input type="text" class="form-control" value="www.fixnix.co" id="site">

</div>
</div>
<div class="col-xl-6 col-md-6">
<div class="form-group">
<i class="fab fa-times" title="Twitter" style="background-color: green;border-radius: 50%;padding:10px;color: white;"></i>&nbsp;&nbsp;
<input type="text" class="form-control" name="loccity"  value="9715905449" id="mobileno">

</div>
</div>
</div>
<div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="kt-avatar kt-avatar--outline" id="kt_user_add_avatar">
                                                            <div class="kt-avatar__holder" style="background-image: url(lg.png); width: 150px;"></div>
                                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="Change avatar">
                                                                <i class="fa fa-pen"></i>
                                                                <input type="file" name="kt_user_add_user_avatar">
                                                            </label>
                                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="Cancel avatar">
                                                                <i class="fa fa-times"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
<div class="form-group" style="margin-left:680px;">
                                   <!--  <a href="./demo2/custom/pages/wizard/add.html" class="btn btn-info btn-lg" title="Add">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </a> -->
                                </div>

</div>
</div>
</div>
<!--end: Form Wizard Step 4-->

<!--begin: Form Wizard Step 5-->
<div class="kt-wizard-v2__content" data-ktwizard-type="step-content">
<div class="kt-heading kt-heading--md">Enter your Payment Details</div>
<div class="kt-form__section kt-form__section--first">
<div class="kt-wizard-v2__form">
<div class="row">
<div class="col-xl-6">
<div class="form-group">
<label>Name on Card</label>
<input type="text" class="form-control" name="ccname" placeholder="Card Name" value="John Wick">

</div>
</div>
<div class="col-xl-6">
<div class="form-group">
<label>Card Number</label>
<input type="text" class="form-control" name="ccnumber" placeholder="Card Number" value="4444 3333 2222 1111">

</div>
</div>
</div>
<div class="row">
<div class="col-xl-4 col-md-4">
<div class="form-group">
<label>Card Expiry Month</label>
<input type="number" class="form-control" name="ccmonth" placeholder="Card Expiry Month" value="01">

</div>
</div>
<div class="col-xl-4 col-md-4"> 
<div class="form-group">
<label>Card Expiry Year</label>
<input type="number" class="form-control" name="ccyear" placeholder="Card Expire Year" value="21">

</div>
</div>
<div class="col-xl-4 col-md-4">
<div class="form-group">
<label>Card CVV Number</label>
<input type="password" class="form-control" name="cccvv" placeholder="Card CVV Number" value="123">

</div>
</div>
</div>
<div class="row">
<div class="col-xl-6">
<div class="form-group">
<label>Billing Address</label>
<input type="text" class="form-control" name="ccname" placeholder="Enter Billing Address" value="Cross Street">
</div>
</div>
</div>

<div class="row">
<div class="col-xl-4 col-md-4">
<div class="form-group">
<label>City</label>
<input type="text" class="form-control" name="cccity" placeholder="Enter City Name" value="chennai">

</div>
</div>
<div class="col-xl-4 col-md-4"> 
<div class="form-group">
<label>Country</label>
<input type="text" class="form-control" name="cccountry" placeholder="Enter Country Name" value="India">

</div>
</div>
<div class="col-xl-4 col-md-4">
<div class="form-group">
<label>Code</label>
<input type="number" class="form-control" name="cccode" placeholder="Enter Code Number" value="123098">

</div>
</div>
</div>
                                <div class="form-group" style="margin-left:670px;">
                                  <!--   <a href="./demo2/custom/pages/wizard/add.html" class="btn btn-info btn-lg" title="Add">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </a> -->
                                </div>
</div>
</div>
</div>
<!--end: Form Wizard Step 5-->

<!--begin: Form Wizard Step 6-->

<!--end: Form Wizard Step 6-->

<!--begin: Form Actions -->
<div class="kt-form__actions">
<button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
Previous
</button>
<button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit"  onclick="saveUserProfileChanges()">
Submit
</button>
<button class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next" style="margin-left: 600px;">
Next Step
</button>
</div>
<!--end: Form Actions -->
</form>
<!--end: Form Wizard Form-->
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

<?php
include '../audit/sidemenu.php';
 ?>
        <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#374afb","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
       <script src="js/common/userProfile.js"></script> 
<script src="./assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="./assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="./assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="./assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="./assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-switch.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="./assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
<script src="./assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
<script src="./assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
<script src="./assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<script src="./assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
<script src="./assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
<script src="./assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
<script src="./assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
<script src="./assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
<script src="./assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/dropzone.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/quill/dist/quill.js" type="text/javascript"></script>
<script src="./assets/vendors/general/@yaireo/tagify/dist/tagify.polyfills.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/@yaireo/tagify/dist/tagify.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
<script src="./assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-notify.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/dual-listbox/dist/dual-listbox.js" type="text/javascript"></script>
<script src="./assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
<script src="./assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
<script src="./assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
<script src="./assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
<script src="./assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
<script src="./assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>
<script src="./assets/js/demo3/pages/crud/forms/widgets/select2.js" type="text/javascript"></script> 
          
      <script src="./assets/js/demo2/scripts.bundle.js" type="text/javascript"></script>
<!--end::Global Theme Bundle -->

        
                    <!--begin::Page Scripts(used by this page) -->
                            <script src="./assets/js/demo2/pages/wizard/wizard-2.js" type="text/javascript"></script>
                        <!--end::Page Scripts -->
            </body>
    <!-- end::Body -->
</html>
