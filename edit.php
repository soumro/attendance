<?php

$title = 'Edit Attendee';

require_once 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'db/conn.php';

$results = $crud->getSpeciality();
// get Attendees by ID
if(!isset($_GET['id'])){
    // echo 'error';
    include 'includes/errormessage.php';
    header('Location: viewrecords.php');

}
else{
    $id = $_GET['id'];
    $result = $crud->getAttendeesstails($id);

?>

    <h1 class="text-center">Edit Records</h1>

    <form method="post" action="editpost.php">
        <input type="hidden" name="id" value="<?php echo $result['attendee_id'] ?>">
      <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" value="<?php echo $result['firstname'] ?>" id="firstname" name="firstname">
      </div>
      <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" value="<?php echo $result['lastname'] ?>" id="lastname" name="lastname">
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="text" class="form-control" value="<?php echo $result['dateofbirth'] ?>" id="dob" name="dob">
      </div>
      <div class="form-group">
        <label for="speciality">Area of Expertise</label>
        <select class="form-control" id="speciality" name="speciality">
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
          <option value="<?php echo $r['speciality_id'] ?>"
          <?php if($r['speciality_id'] == $result['speciality_id']) echo 'selected' ?>>
          <?php echo $r['Name']; ?></option>
        <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" value="<?php echo $result['emailaddress'] ?>" id="email" name="email" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="phone">Contact Number</label>
        <input type="text" class="form-control" value="<?php echo $result['contactnumber'] ?>" id="phone" name="phone" aria-describedby="phoneHelp">
        <small id="phoneHelp" class="form-text text-muted">We'll never share your Number with anyone else.</small>
      </div>
      <button type="submit" name="submit" class="btn btn-success btn-block">Save Changes</button>
    </form>

    <?php } ?>
    <br>
    <br>
    <br>
    <br>
    <br>
<?php require_once 'includes/footer.php'; ?>
