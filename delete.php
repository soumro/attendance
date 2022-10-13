<?php
require_once 'db/conn.php';
// Get Values form Post Operation
if(!$_GET['id']){
    // echo 'error';
    include 'includes/errormessage.php';
    header('Location: viewrecords.php');

}
else{
      //Get Id Values
  $id = $_GET['id'];

  // call crud delete function
  $result = $crud-> deleteAttendee($id);

  // redirect to index page
  if($result){
    header('Location: viewrecords.php');
  }else{
    // echo 'error';
    include 'includes/errormessage.php';

  }
}
?>