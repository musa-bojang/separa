<?php 
require_once("DBController.php");
$db_handle = new DBController();

$status =  $_POST['status'];
$remark =  $_POST['remark'];
$departmentid = $_POST['departmentid'];
$systemid =  $_POST['systemid'];

$update_query = "UPDATE ts_excel SET status = '$status', remarks = '$remark' WHERE applicant_id = '$departmentid' AND id = $systemid";

$update_result = $db_handle->insert_data($update_query);
 if($update_result){
     echo " Status updated";
 } else {
     echo " error";
 }