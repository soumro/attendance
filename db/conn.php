<?php

  $host = '127.0.0.1';
  $db = 'attendee_db';
  $user = 'root';
  $pass = '';
  $charset = 'utf8mb4';

  //Remote Database Connection
  // $host = 'remotemysql.com';
  // $db = 'NC1HPsPMvA';
  // $user = 'NC1HPsPMvA';
  // $pass = 'rqUDdNcsXH';
  // $charset = 'utf8mb4';

  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

  try {

    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo 'PDO Connected';
    //echo 'Hello Database';
  } catch (PDOException $e) {
    //echo 'No Data Base Found';
    throw new PDOException($e->getMessage());
   
    // echo 'PDO not Connected';
  }

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);

    $user->insertUser("admin","password");
 ?>
