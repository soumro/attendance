<?php


$title = 'Success';

require_once 'includes/header.php';
require_once 'db/conn.php';

if(isset($_POST['submit'])){
  //Execute Value from _POST Array
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $dob = date($_POST['dob']);
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $speciality = $_POST['speciality'];
  
  //call function to insert and track if sucess or note
  $isSuccess = $crud->insertAttendees($fname, $lname, $dob, $email, $phone, $speciality);

  if($isSuccess){
    // echo '<h1 class="text-center text-success">You have been Registered!</h1>';
    include 'includes/successmessage.php';
  }else{
    // echo '<h1 class="text-center text-danger">there is error in processing!</h1>';
    include 'includes/errormessage.php';

  }
}

?>


<!-- <h1 class="text-center text-success">You have Been Registered!</h1> -->
<!-- This Code is used for Get Method -->
<!-- <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
      <?php //echo $_GET['firstname'] . ' ' . $_GET['lastname']; ?>
    </h5>
    <h6 class="card-subtitle mb-2 text-muted">
      <?php //echo $_GET['speciality']; ?>
    </h6>
    <p class="card-text">
      Date of Birth : <?php //echo $_GET['dob'];  ?>
    </p>
    <p class="card-text">
      Email Address : <?php //echo $_GET['email'];  ?>
    </p>
    <p class="card-text">
      Phone Number : <?php //echo $_GET['phone'];  ?>
    </p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div> -->

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
      <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
    </h5>
    <h6 class="card-subtitle mb-2 text-muted">
      <?php echo $_POST['speciality']; ?>
    </h6>
    <p class="card-text">
      Date of Birth : <?php echo $_POST['dob'];  ?>
    </p>
    <p class="card-text">
      Email Address : <?php echo $_POST['email'];  ?>
    </p>
    <p class="card-text">
      Phone Number : <?php echo $_POST['phone'];  ?>
    </p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>

<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
