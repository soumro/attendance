<?php

$title = 'View Reocrds';

require_once 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'db/conn.php';

// get Attendees by ID
if(!isset($_GET['id'])){
  include 'includes/errormessage.php';
    
}else{
  $id = $_GET['id'];
  $result = $crud->getAttendeesstails($id);
    

?>


<div class="card" style="width: 18rem;">
  <div class="card-body">
  <img src="<?php echo empty($result['avatar_path']) ? "uploads/blank.png" : $result['avatar_path']; ?>" class="card-img-top" alt="">

    <h5 class="card-title">
      <?php echo $result['firstname'] . ' ' . $result['lastname']; ?>
    </h5>
    <h6 class="card-subtitle mb-2 text-muted">
      <?php echo $result['Name']; ?>
    </h6>
    <p class="card-text">
      Date of Birth : <?php echo $result['dateofbirth'];  ?>
    </p>
    <p class="card-text">
      Email Address : <?php echo $result['emailaddress'];  ?>
    </p>
    <p class="card-text">
      Phone Number : <?php echo $result['contactnumber'];  ?>
    </p>

  </div>
</div>
<br>
    <a href="viewrecords.php" class="btn btn-info">Back to list</a>
    <a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-warning">Edit</a>
    <a onclick="return confirm('Are you sure you want to delete this record!');" href="delete.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-danger">Delete</a>
                
<?php 
    // echo '<h1 class="text-center text-danger">Please Check Details Try Again!</h1>';
} ?>

<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>