<?php 
require_once("DBConn.php");
// $db_handle = new DBController();

$department = $_GET['get_department'];
$user_department_id = $_GET['get_id'];
$track_query = "SELECT * FROM ts_excel WHERE department ='$department' AND  applicant_id ='$user_department_id'";
$track_result = mysqli_query($conn, $track_query);
if (isset($track_result)){
    if($track_result){
        $rows = array();
        while($row = mysqli_fetch_array($track_result)){
            
            ?>
            <a href="update.php?departmentid=<?=$row['applicant_id']; ?>&&systemid=<?= $row['id'];?>" career="button" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                <?= $row["department"]; ?>
                                </div>
                                <div class="col">
                                <?= $row["umur"]; ?>
                                </div>
                                <div class="col">
                                    <?= $row["career"]; ?>
                                </div>
                                <div class="col">
                                   <?= $row["sektor"]; ?>
                                </div>
                                <div class="col">
                                   <?= $row["lokasi"]; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                   
                    <?php
        }
        
    }
 }
    