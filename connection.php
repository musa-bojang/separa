<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "ts_data";
  
	
// Create connection
$conn = new mysqli($host, $user, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM ts_excel";
$result = mysqli_query($conn, $sql);

if($result){
    $rows = array();
    while($row = mysqli_fetch_array($result)){
        $rows[] = $row;
    }
    echo json_encode($rows);
}