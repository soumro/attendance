<?php 
//This includes the session file. This file contains code that starts/resumes a session. 
//By having it in the header file, it will be included on every page, allowing session capability to be used on every page across the website.
include_once 'includes/session.php'?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <title>Attendance <?php echo $title; ?></title>
</head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand ms-2" href="index.php"> IT Conference</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mr-auto">
      <a class="nav-item nav-link active" href="index.php">Home</a>
      <a class="nav-item nav-link" href="viewrecords.php">View Attendees</a>
    </div>
    
    <div class="navbar-nav position-absolute top-25 end-0">
          <?php 
          
              if(!isset($_SESSION['userid'])){
                
          ?>
            <a class="nav-item nav-link" href="login.php">Login </span></a>
          <?php } else { ?>
            <a class="nav-item nav-link" href="#"><span>Hello <?php echo $_SESSION['username'] ?>! </span></a>
            <a class="nav-item nav-link" href="logout.php">Logout </a>
          <?php } ?>
        </div>
  </div>

</nav>
  <div class="container">

  

    
    <br/>