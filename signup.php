<?php

include '../project1/ado.php';
if(isset($_POST['firstName'])){
  $fName = $_POST['firstName'];
  $fName=sanitize($fName);
  if(isset($_POST['firstName'])){
    $lName = $_POST['lastName'];
    $lName=sanitize($lName);
    if(isset($_POST['email'])){
      $email = $_POST['email'];
      $email=sanitize($email);
      if(isset($_POST['birthday'])){
        $birthday = $_POST['birthday'];
        $birthday=sanitize($birthday);
        if(isset($_POST['password'])){
          $password = $_POST['password'];
          $password=sanitize($password);
          if(isset($_POST['passConf'])){
            $confPass = $_POST['passConf'];
            $confPass=sanitize($confPass);
            $password=password_hash($password,PASSWORD_BCRYPT);
            connectToDb("test");
            $sql="select * from `users` where `users`.email='$email'";
            if($conn->query($sql)->num_rows > 0 ){
               echo("Email already existed");
            }else{
              $sql="insert into `users`(first_name,last_name,email,birthday,password) values ('".$fName."','".$lName."','".$email."','".$birthday."','".$password."')";
            if ($conn->query($sql) === TRUE) {
              header('location:index.php');
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
              header('refresh:2;url=signup.html'); 
            }
            }
          }
        }
      }
    }
  }
}else{
header('location:signup.html'); 
}

?>