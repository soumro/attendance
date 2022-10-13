<?php
  class crud{
    //private Database Object\
    private $db;
    //constructor to initialize Private variable to the  Databse connection
    function __construct($conn){
      $this->db = $conn;
    }

    public function insertAttendees($fname, $lname, $dob, $email, $contact, $speciality){
      try {
        //define sql statement to be execute
        $sql = "INSERT INTO attendee ( firstname, lastname, dateofbirth, emailaddress, contactnumber, speciality_id) VALUES(:fname,:lname,:dob,:email,:contact,:speciality)";
        //prepare the sql statement executed
        $stmt = $this->db->prepare($sql);

        
        $stmt->bindparam(':fname',$fname);
        $stmt->bindparam(':lname',$lname);
        $stmt->bindparam(':dob',$dob);
        $stmt->bindparam(':email',$email);
        $stmt->bindparam(':contact',$contact);
        $stmt->bindparam(':speciality',$speciality);
        echo $sql;
        $stmt->execute();
        return true;

      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
        
      }

    }

    public function editAttendee($id, $fname, $lname, $dob, $email, $contact, $speciality){
      try {
      $sql = "UPDATE `attendee` SET `firstname`=:fname,`lastname`=:lname,`dateofbirth`=:dob,`emailaddress`=:email,`contactnumber`=:contact,`speciality_id`=:speciality WHERE attendee_id =:id";
      echo '$sql';
      $stmt = $this->db->prepare($sql);
      // bind all vlaues to place holders
      $stmt->bindparam(':id',$id);
      $stmt->bindparam(':fname',$fname);
      $stmt->bindparam(':lname',$lname);
      $stmt->bindparam(':dob',$dob);
      $stmt->bindparam(':email',$email);
      $stmt->bindparam(':contact',$contact);
      $stmt->bindparam(':speciality',$speciality);
      echo '$stmt';
      // execute statement
      $stmt->execute();
      return true;

      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }

    public function deleteAttendee($id){
      
      try {
        
        $sql = "delete FROM `attendee` WHERE attendee_id =:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        return true;

      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }

    }

    public function getAttendees(){
      $sql = "SELECT * FROM `attendee` a inner join `speciality` s on a.speciality_id = s.speciality_id";
      $result = $this->db->query($sql);
      return $result;
    }

    public function getAttendeesstails($id){
      $sql = "SELECT * FROM `attendee` a inner join `speciality` s on a.speciality_id = s.speciality_id WHERE attendee_id = :id";
      $stmt = $this->db->prepare($sql);
      $stmt->bindparam(':id', $id);
      $stmt->execute();
      $result = $stmt->fetch();
      return $result;
    }

    public function getSpeciality(){
      $sql = "SELECT * FROM `speciality`";
      $result = $this->db->query($sql);
      return $result;
    }

  }

 ?>
