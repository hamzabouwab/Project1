<?php 
function sanitize($input){
  $input=stripslashes($input);
  $input=htmlspecialchars($input);
  $input=trim($input);
  return $input;
}
$conn=new mysqli();
  function connectToDb($dataBase){
    $dbName = $dataBase;                
    $servername = "localhost";
    $username = "root";
    $password = "";
// Create connection
$GLOBALS['conn'] = new mysqli($servername, $username, $password,$dbName);

// Check connection
if ($GLOBALS['conn']->connect_error) {
  die("Connection failed: " . $GLOBALS['conn']->connect_error);
}
}

?>