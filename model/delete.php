<?php 
require_once("DBConn.php");
// $db_handle = new DBController();


$deleteid =  $_POST['deleteid'];
$delete_query = "DELETE FROM ts_excel WHERE id =$deleteid AND  applicant_id !=''";
$result = mysqli_query($conn, $delete_query);
if($result){
    $msg = array("success"=>"deleted");
    echo json_encode($msg);
}else {

}

?>