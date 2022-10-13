<?php
require_once 'db/conn.php';
// Get Values form Post Operation
if(isset($_POST['submit'])){
  //Execute Value from _POST Array
  $id = $_POST['id'];
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $dob = date($_POST['dob']);
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $speciality = $_POST['speciality'];

  // call crud function
  $result = $crud-> editAttendee($id, $fname, $lname, $dob, $email, $phone, $speciality);

  // redirect to index page
  if($result){
    header('Location: viewrecords.php');
  }else{
    // echo 'error';
    include 'includes/errormessage.php';

  }

}
else{
    // echo 'error';
    include 'includes/errormessage.php';

}
?>