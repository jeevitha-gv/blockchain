<?php
  include "../php/common/config.php";
  $target_dir = "../documents/";
$target_file = $target_dir . basename($_FILES["Artifacts"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if(isset($_POST['submit']))
    {
         $category=$_POST['category2'];
            $Description=$_POST['Description'];
               $name=$_POST['name'];
                  $email=$_POST['email'];
                     $phone=$_POST['phone'];
                        $NPname=$_POST['NPname'];
                           $bname=$_POST['bname'];
                              $bankac=$_POST['bankac'];
                                 $AHN=$_POST['AHN'];
                                    $bankname=$_POST['bankname'];
                                    $BAN=$_POST['BAN'];
                              $BTC=$_POST['BTC'];
                   $ETC=$_POST['ETC'];
                   $passkey=$_POST['passkey'];
                   $tipno=$_POST['tipno'];
                   $status="New Idea";
                   $Artifacts=$_FILES['Artifacts']['name'];
                                   
$sql="INSERT INTO Idea(category,Description,name,email,phone,NPname,bname,bankac,AHN,bankname,BAN,BTC,ETC,passkey,tipno,status,Artifacts)values('$category','$Description','$name','$email','$phone','$NPname','$bname','$bankac','$AHN','$bankname','$BAN','$BTC','$ETC','$passkey','$tipno','$status','$Artifacts')";

        if(mysqli_query($link,$sql))
        {  
           if (move_uploaded_file($_FILES["Artifacts"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["Artifacts"]["name"]). " has been uploaded.";
            }
              echo "successfully";
           header("location:seckret.php");
        }

  else
  {
   
  }

    }
?>


<!DOCTYPE html>
<html lang="en" >
 <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/blockchain/"><!--end::Base Path -->
        <meta charset="utf-8"/>

        <title>NixWhistle | Idea</title>
        <meta name="description" content="Base form control examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
 <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
 <link rel="shortcut icon" href="blockchain/LG3.png" />
    </head>
    <style type="text/css">
          .text-line {
        background-color: transparent;
        color: white;
        outline: none;
        outline-style: none;
        outline-offset: 0;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom: solid #1655ba 1px;
        padding: 3px 10px;
        width: 700px;
        font-size: 16px;
    }
     .wid{
      position: relative;
      height: 40px;
    }
    .image {
      position: absolute;
      right: 30px;
      bottom: 190px;
    }
    .image1 {
      position: absolute;
      right: 30px;
      bottom: 130px;
    }
    </style>
  <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" style="background-image: url(./assets/media/bg/bg-7.jpg);"> <br><br>
    <div class="container">

 <h3 style="text-align: center;color: white;"> Want to transform 'Inc.' with your Idea?</h3>
</div><br><br>

  <form class="kt-form kt-form" method="post" enctype="multipart/form-data" target="_blank">

<div class="conatiner" style="margin-left: 200px;" >
          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label" style="color: white;">Category :</label>
             <div class="col-10">
         <input list="category1" id="box" name="category2" class="text-line" style="width: 80%;">
                     <datalist id="category1">
                       <option>Employee Engagement</option>
                       <option>Strategy</option>
                       <option>Open Innovation</option>
                       <option>Agile</option>
                       <option>Design</option>
                       <option>Continuous Improvement</option>
                       <option>Enterprise Transformation</option>
                     </datalist>    
    </div>
          </div>
                    <div class="form-group row" id="div1" name="Description" style="display: none;">
            <label for="example-text-input" class="col-2 col-form-label" style="color: white;">Description :</label>
             <div class="col-9">
         
                <div class="input-single">
                    <textarea id="note-textarea" placeholder="typing or using voice recognition." rows="8" style="width:88%; background:transparent;color: white;"></textarea>
                </div> <span><button type="button" id="start-record-btn"  class="image" style="background-color: #720765;color:#720765;"><img src="mic.png" width="30px"; height="30px;"></button></span><br><br>
                <span><button type="button" id="pause-record-btn" class="image1" style="background-color: #720765;color:#720765; display:none;"><img src="mic1.jpeg" width="30px"; height="30px;"></button></span>
          </div>
          <div class="col-1">
            <label aria-hidden="true" style="margin-top: 184px;color: white;margin-left:-84px;">Artifacts<i class="btn btn-danger btn-block"><span class="flaticon-attachment"></span></i>
           <input type="file" name="Artifacts" hidden=""></label>
          </div>
        </div><br>
        <div id="div2" style="display: none;">
          <div class="form-group row">
            <label for="example-month-input" class="col-2 col-form-label" style="color: white;">Your details:</label>
            <div class="col-10">
             
              <label class="kt-radio kt-radio--solid kt-radio--success" style="color: white;">
         <input type="radio" name="radio1" value="disclose" id="disclose" checked="checked">Keen to disclose
         <span></span>
       </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <label class="kt-radio kt-radio--solid kt-radio--danger" style="color: white;">
             <input type="radio" name="radio1" value="Anonymous" id="Anonymous">Keen to be Anonymous

             <span></span>
           </label>
            </div>  
          </div>
           <div id="details">
          <div class="form-group row" style="margin-left: 17%;">
         <div class="col-3.5">
          <!--  <label style="font-size: 13px;">Full Name:</label> -->
           <input type="text" placeholder="FullName" id="name" name="name" class="form-control" style="background:transparent;color: white;">
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="col-3.5">
       <!--  <label style="font-size: 13px;">Email:</label>
       -->  <input type="text" placeholder="Email" id="email" name="email" class="form-control"  style="background:transparent;color: white;">
      </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="col-3.5">
     <!--    <label style="font-size: 13px;">Phone no:</label> -->
        <input type="text" placeholder="Phone" id="phone" name="phone" class="form-control"  style="background:transparent;color: white;">
      </div>

       <!--    <div class="control-group3 after-add-more3">
             <div class="input-group-btn">
<button class="btn add-more3"type="button" title="Add Row"><i style="color:green;font-size:20px;" class="fa flaticon-plus"></i></button>
             </div>
          </div> -->

    </div>
  </div>
</div>
<div style="display: none;" id="div3">
      <div class="form-group row">
            <label for="example-color-input" class="col-2 col-form-label" style="color: white;">In case of reward</label>
            <div class="col-10">
              <label class="kt-radio kt-radio--solid kt-radio--success" style="color: white;">
              <input type="radio" name="radio3" value="self">Self
              <span></span>
            </label>
        &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label class="kt-radio kt-radio--solid kt-radio--danger" style="color: white;"><input type="radio" name="radio3" value="donate">Donate
          <span></span>
        </label>
       </div>
            </div>
                       <div id="peoples" >
          <div class="form-group row" style="margin-left: 17%;">
         <div class="col-3.5">
          <!--  <label style="font-size: 13px;">Full Name:</label> -->
           <input type="text" id="NPname" name="NPname" placeholder="Non-Profit Name" class="form-control" style="background:transparent;color: white;">
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="col-3.5">
       <!--  <label style="font-size: 13px;">Email:</label>
       -->  <input type="text" id="bname" name="bname" placeholder="Bank Name" class="form-control"  style="background:transparent;color: white;">
      </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="col-3.5">
     <!--    <label style="font-size: 13px;">Phone no:</label> -->
        <input type="text" id="bankac" name="bankac" placeholder="Bank Account no." class="form-control" style="background:transparent;color: white;">
      </div>

       <!--    <div class="control-group3 after-add-more3">
             <div class="input-group-btn">
<button class="btn add-more3"type="button" title="Add Row"><i style="color:green;font-size:20px;" class="fa flaticon-plus"></i></button>
             </div>
          </div> -->

    </div>
  </div>

                     <input type="hidden" name="passkey" id="passkey">
 <input type="hidden" name="tipno" id="tipno">


                       <div id="donates" style="margin-left: 17.5%;">
                        <div class="form-group row">
                         <div class="col-3.5">
                                        <input type="text" id="AHN" name="AHN" placeholder="Account Holder Name" class="form-control" style="background:transparent;color: white;">
                                      </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  <div class="col-3.5">
                                     <input type="text" id="bankname" name="bankname" placeholder="Bank Name" class="form-control" style="background:transparent;color: white;">
                                  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   <div class="col-3.5">
                                      <input type="text" id="BAN" name="BAN" placeholder="Bank Account No." class="form-control" style="background:transparent;color: white;">
                                  </div>
                                </div>
                               
                           
                                  <div class="form-group row">
                                       <div class="col-11">
                                   <center><strong style="margin-left: -120px;">OR</strong></center>
                                   </div>  
                                 </div>
                                  <div class="form-group row">
                                   
                               
                                   <div class="col-10">
                                        <input type="text" placeholder="BitCoin Address" id="BTC" name="BTC"  class="form-control" style="background:transparent;color: white; margin-left: -7px; "><br>
                                      <center><strong style="margin-left: -10px;">OR</strong></center><br>  
                                      </div><br><br>
                                      <i class="fa fa-bold" style="font-size:48px;color:red;margin-left: 30px;"></i>
                                      <div class="col-10">
                                        <input type="text" placeholder="Ethereum Address" id="ETC" name="ETC" class="form-control" style="background:transparent;color: white; margin-left: -8px;">
                                      </div>
                                  <i class='fab fa-ethereum' style='font-size:48px;color:red;margin-left: 30px;'></i>

                                         </div>
                             
                               
                        </div>
                      </div>

                 <div class="mb-2">
                  <br>
                    <input type="submit" name="submit" style="margin-left: 1135px; margin-top: 16px;" id="Submit" class="btn btn-primary"data-toggle="modal" value="Submit">
                </div><br><br><br><br><br>
</div>

</div>
    </form>
<script type="text/javascript">
  var payment = document.getElementById('AHN'),
  downpayment = document.getElementById('BTC'),
    full_payment = document.getElementById('ETC');

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
<script type="text/javascript">
  $(document).ready(function() {
    if($('#box').on('change', function() {
      $('#div1').show();
     
     
    }));
       if($('#div1').on('change', function() {
      $('#div2').show();
     
     
    }));
         if($('#div2').on('change', function() {
      $('#div3').show();
     
     
    }));
               if($('#div4').on('change', function() {
      $('#div5').show();
     
     
    }));
   
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
 $("#Description").click(function(){
  var x = Math.floor((Math.random() * 10000000) + 1000080000000000);
  document.getElementById("tipno").value=x;
  var result = '';
   var characters= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < 10; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   document.getElementById("passkey").value=result;
     
});


});

</script>
<script>
$(document).ready(function(){
  $("#details").show();
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
  try {
  var SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
  var recognition = new SpeechRecognition();
}
catch(e) {
  console.error(e);
  $('.no-browser-support').show();
  $('.app').hide();
}


var noteTextarea = $('#note-textarea');
var instructions = $('#recording-instructions');
var notesList = $('ul#notes');

var noteContent = '';

// Get all notes from previous sessions and display them.
var notes = getAllNotes();
renderNotes(notes);



/*-----------------------------
      Voice Recognition
------------------------------*/

// If false, the recording will stop after a few seconds of silence.
// When true, the silence period is longer (about 15 seconds),
// allowing us to keep recording even when the user pauses.
recognition.continuous = true;

// This block is called every time the Speech APi captures a line.
recognition.onresult = function(event) {

  // event is a SpeechRecognitionEvent object.
  // It holds all the lines we have captured so far.
  // We only need the current one.
  var current = event.resultIndex;

  // Get a transcript of what was said.
  var transcript = event.results[current][0].transcript;

  // Add the current transcript to the contents of our Note.
  // There is a weird bug on mobile, where everything is repeated twice.
  // There is no official solution so far so we have to handle an edge case.
  var mobileRepeatBug = (current == 1 && transcript == event.results[0][0].transcript);

  if(!mobileRepeatBug) {
    noteContent += transcript;
    noteTextarea.val(noteContent);
  }
};

recognition.onstart = function() {
  instructions.text('Voice recognition activated. Try speaking into the microphone.');
}

recognition.onspeechend = function() {
  instructions.text('You were quiet for a while so voice recognition turned itself off.');
}

recognition.onerror = function(event) {
  if(event.error == 'no-speech') {
    instructions.text('No speech was detected. Try again.');  
  };
}



/*-----------------------------
      App buttons and input
------------------------------*/

$('#start-record-btn').on('click', function(e) {
  if (noteContent.length) {
    noteContent += ' ';
  }
   $("#pause-record-btn").show();
  recognition.start();
});


$('#pause-record-btn').on('click', function(e) {
  recognition.stop();

  instructions.text('Voice recognition paused.');
});

// Sync the text inside the text area with the noteContent variable.
noteTextarea.on('input', function() {
  noteContent = $(this).val();
})

$('#save-note-btn').on('click', function(e) {
  recognition.stop();

  if(!noteContent.length) {
    instructions.text('Could not save empty note. Please add a message to your note.');
  }
  else {
    // Save note to localStorage.
    // The key is the dateTime with seconds, the value is the content of the note.
    saveNote(new Date().toLocaleString(), noteContent);

    // Reset variables and update UI.
    noteContent = '';
    renderNotes(getAllNotes());
    noteTextarea.val('');
    instructions.text('Note saved successfully.');
  }
     
})


notesList.on('click', function(e) {
  e.preventDefault();
  var target = $(e.target);

  // Listen to the selected note.
  if(target.hasClass('listen-note')) {
    var content = target.closest('.note').find('.content').text();
    readOutLoud(content);
  }

  // Delete note.
  if(target.hasClass('delete-note')) {
    var dateTime = target.siblings('.date').text();  
    deleteNote(dateTime);
    target.closest('.note').remove();
  }
});



/*-----------------------------
      Speech Synthesis
------------------------------*/

function readOutLoud(message) {
  var speech = new SpeechSynthesisUtterance();

  // Set the text and voice attributes.
  speech.text = message;
  speech.volume = 1;
  speech.rate = 1;
  speech.pitch = 1;
 
  window.speechSynthesis.speak(speech);
}



/*-----------------------------
      Helper Functions
------------------------------*/

function renderNotes(notes) {
  var html = '';
  if(notes.length) {
    notes.forEach(function(note) {
      html+= `<li class="note">
        <p class="header">
          <span class="date">${note.date}</span>
          <a href="#" class="listen-note" title="Listen to Note">Listen to Note</a>
          <a href="#" class="delete-note" title="Delete">Delete</a>
        </p>
        <p class="content">${note.content}</p>
      </li>`;    
    });
  }
  else {
    html = '<li><p class="content">You don\'t have any notes yet.</p></li>';
  }
  notesList.html(html);
}


function saveNote(dateTime, content) {
  localStorage.setItem('note-' + dateTime, content);
}


function getAllNotes() {
  var notes = [];
  var key;
  for (var i = 0; i < localStorage.length; i++) {
    key = localStorage.key(i);

    if(key.substring(0,5) == 'note-') {
      notes.push({
        date: key.replace('note-',''),
        content: localStorage.getItem(localStorage.key(i))
      });
    }
  }
  return notes;
}


function deleteNote(dateTime) {
  localStorage.removeItem('note-' + dateTime);
}


</script>
<style type="text/css">
  ul {
    list-style: none;
    padding: 0;
}

p {
    color: #444;
}

button:focus {
    outline: 0;
}

.container {
    max-width: 700px;
    margin: 0 auto;
    padding: 100px 50px;
    text-align: center;
}

.container h1 {
    margin-bottom: 20px;
}

.page-description {
    font-size: 1.1rem;
    margin: 0 auto;
}

.tz-link {
    font-size: 1em;
    color: #1da7da;
    text-decoration: none;
}

.no-browser-support {
    display: none;
    font-size: 1.2rem;
    color: #e64427;
    margin-top: 35px;
}

.app {
    margin: 40px auto;
}

#note-textarea {
    margin: 20px 0;
}

#recording-instructions {
    margin: 15px auto 60px;
}

#notes {
    padding-top: 20px;
}

.note .header {
    font-size: 0.9em;
    color: #888;
    margin-bottom: 10px;
}

.note .delete-note,
.note .listen-note {
    text-decoration: none;
    margin-left: 15px;
}

.note .content {
    margin-bottom: 40px;
}

@media (max-width: 768px) {
    .container {
        padding: 50px 25px;
    }

    button {
        margin-bottom: 10px;
    }

}  



/* -- Demo ads -- */

@media (max-width: 1200px) {
    #bsaHolder{ display:none;}
}
</style>
</body>
</html>
