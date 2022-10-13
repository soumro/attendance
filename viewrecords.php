<?php

$title = 'View Reocrds';

require_once 'includes/header.php';
require_once 'db/conn.php';

$results = $crud->getAttendees();
?>

<table class="table">
    <tr>
        <th>#</th>
        <th>Firs Name</th>
        <th>Last Name</th>
        <th>Date of Birth</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Speciality</th>
        <th>Actions</th>
    </tr>
    <tr>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
            <td><?php echo $r['attendee_id'] ?></td>
            <td><?php echo $r['firstname'] ?></td>
            <td><?php echo $r['lastname'] ?></td>
            <td><?php echo $r['dateofbirth'] ?></td>
            <td><?php echo $r['emailaddress'] ?></td>
            <td><?php echo $r['contactnumber'] ?></td>
            <td><?php echo $r['Name'] ?></td>
                <td>
                    <a href="view.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-primary">View</a>
                    <a href="edit.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-warning">Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this record!');" href="delete.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tr>
</table>

<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>