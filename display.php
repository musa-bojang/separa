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


$department = $_GET["department"];
$age = $_GET["umur"];
$lokasi = $_GET["lokasi"];
$jantina = $_GET["jantina"];
$bangsa = $_GET["bangsa"];
if(empty($department) || empty($age) || empty($bangsa)){
    $sql = "SELECT * FROM ts_excel";
    $result = mysqli_query($conn, $sql);
    if($result){
        $rows = array();
        while($row = mysqli_fetch_array($result)){
            
            ?>
            <button type="button" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                <?= $row["department"]; ?>
                                </div>
                                <div class="col">
                                <?= $age; ?>
                                </div>
                                <div class="col">
                                    <?= $lokasi; ?>
                                </div>
                                <div class="col">
                                   <?= $jantina; ?>
                                </div>
                                <div class="col">
                                   <?= $bangsa; ?>
                                </div>
                            </div>
                        </div>
                    </button>
                   
                    <?php
        }
        
    }
}

?>
