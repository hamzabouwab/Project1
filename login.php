<?php
include '../project1/ado.php';
if(isset($_POST['email'])){
   $email =  $_POST['email'];
   $email=sanitize($email);
   if(isset($_POST['password'])){
     $password = $_POST['password'];
     $password=sanitize($password);
     connectToDb("test");
     $sql = "SELECT * from `users` where email='$email'";
     
     $result = $conn->query($sql);
     if ($result->num_rows === 1) {
       while($row = $result->fetch_assoc()){
        if(password_verify($password,$row['password'])){
          echo 'Login successfuly';
        }else{
          echo 'password incorrect !'; 
        }
      }
      header('refresh:2;url=/project1/index.php'); 
    }else{
        die("Email does not exist !");
        header('refresh:2;url=/project1/index.html'); 
      }
    }
  }else{
  header('location:login.html'); 
}

?>