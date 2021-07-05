<?php
session_start();
$current_user = $_SESSION['id'];
include("model/DBConn.php");
$sql = "SELECT * FROM ts_excel WHERE applicant_id !='' AND uploadby = $current_user";
$result = mysqli_query($conn, $sql);

if($result){
    $rows = array();
    while($row = mysqli_fetch_array($result)){
        $rows[] = $row;
    }
    echo json_encode($rows);
}