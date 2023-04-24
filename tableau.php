<?php

  include('ado.php');
  connectToDb('test');
  $sql="select id,email,first_name,last_name,birthday,date_inscription from `users`";
  
  $result=$conn->query($sql);

  $array = array();

  if($result->num_rows > 0 ){
      
    while($row=$result->fetch_assoc()){
      array_push($array,$row);
    }
    
  }
  echo json_encode($array);

?>