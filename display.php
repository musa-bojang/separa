<?php
include("model/DBConn.php");

$department = $_GET["department"];
 $skills = $_GET["skills"];

$career = $_GET["category"];
$jantina = $_GET["jantina"];
$lokasi = $_GET["lokasi"];
$bangsa = $_GET["bangsa"];
$umur = $_GET["umur"];
$sektor = $_GET["choices"];



if(empty($department) && empty($skills) && empty($career) && empty($jantina)
 && empty($lokasi) && empty($bangsa) && empty($sektor) && empty($umur)){
    $sql = "SELECT * FROM `ts_excel` WHERE applicant_id !='' LIMIT 50";
    $result = mysqli_query($conn, $sql);
} else {
    // single instance and probablity
     if(isset($department)  && empty($skills) && empty($career) && empty($jantina)
     && empty($lokasi) && empty($bangsa) && empty($sektor) && empty($umur)){
        $sql = "SELECT * FROM `ts_excel` WHERE department = '$department' and applicant_id !='' LIMIT 50";
        $result = mysqli_query($conn, $sql);
     }else if(isset($career) && isset($sektor)  && empty($skills)  && empty($jantina)
     && empty($lokasi) && empty($bangsa) && empty($department) && empty($umur)){
        $sql = "SELECT * FROM `ts_excel` WHERE career = '$career' and applicant_id !='' LIMIT 50";
        $result = mysqli_query($conn, $sql);
     } 
     else if(isset($lokasi)  && empty($skills) && empty($career) && empty($jantina)
     && empty($department) && empty($bangsa) && empty($sektor) && empty($umur)){
         $sql = "SELECT * FROM `ts_excel` WHERE lokasi = '$lokasi' and applicant_id !='' LIMIT 50";
        $result = mysqli_query($conn, $sql);
    }
    else if(isset($skills)  && empty($department) && empty($career) && empty($jantina)
    && empty($lokasi) && empty($bangsa) && empty($sektor) && empty($umur)){
        $sql = "SELECT * FROM `ts_excel` WHERE skill = '$skills' and applicant_id !='' LIMIT 50";
        $result = mysqli_query($conn, $sql);
    }
    else if(isset($jantina)  && empty($skills) && empty($career) && empty($department)
    && empty($lokasi) && empty($bangsa) && empty($sektor) && empty($umur)){
        $sql = "SELECT * FROM `ts_excel` WHERE jantina = '$jantina' and applicant_id !='' LIMIT 50";
        $result = mysqli_query($conn, $sql);
    }
    else if(isset($bangsa)  && empty($skills) && empty($career) && empty($jantina)
    && empty($lokasi) && empty($department) && empty($sektor) && empty($umur)){
        $sql = "SELECT * FROM `ts_excel` WHERE bangsa = '$bangsa' and applicant_id !='' LIMIT 50";
        $result = mysqli_query($conn, $sql);
    }
    else if(isset($umur)  && empty($skills) && empty($career) && empty($jantina)
    && empty($lokasi) && empty($bangsa) && empty($sektor) && empty($department)){
        $sql = "SELECT * FROM `ts_excel` WHERE umur = '$umur' and applicant_id !='' LIMIT 50";
        $result = mysqli_query($conn, $sql);
    }
    // double probablities
    else if(isset($department) && isset($career) && isset($sektor)  && empty($skills) && empty($jantina)
    && empty($lokasi) && empty($bangsa)  && empty($umur)){
        $sql = "SELECT * FROM `ts_excel` WHERE department = '$department' AND career = '$career' AND sektor = '$sektor' AND applicant_id !='' LIMIT 50";
        $result = mysqli_query($conn, $sql);
    }
    else if(isset($department) && isset($skills)  && empty($career) && empty($jantina)
    && empty($lokasi) && empty($bangsa) && empty($sektor) && empty($umur)){
        $sql = "SELECT * FROM `ts_excel` WHERE department = '$department' AND skill = '$skills' AND applicant_id !='' LIMIT 50";
        $result = mysqli_query($conn, $sql);
    }
    else if(isset($department) && isset($jantina)  && empty($skills) && empty($career)
    && empty($lokasi) && empty($bangsa) && empty($sektor) && empty($umur)){
        $sql = "SELECT * FROM `ts_excel` WHERE department = '$department' AND jantina = '$jantina' AND applicant_id !='' LIMIT 50";
        $result = mysqli_query($conn, $sql);
    }
    else if(isset($department) && isset($bangsa)  && empty($skills) && empty($career) && empty($jantina)
    && empty($lokasi)  && empty($sektor) && empty($umur)){
        $sql = "SELECT * FROM `ts_excel` WHERE department = '$department' AND bangsa = '$bangsa' AND applicant_id !='' LIMIT 50";
        $result = mysqli_query($conn, $sql);
    }
    else if(isset($department) && isset($umur)  && empty($skills) && empty($career) && empty($jantina)
    && empty($lokasi) && empty($bangsa) && empty($sektor) ){
        $sql = "SELECT * FROM `ts_excel` WHERE department = '$department' AND umur = '$umur' AND applicant_id !='' LIMIT 50";
        $result = mysqli_query($conn, $sql);
    }else if(isset($department) && isset($lokasi)  && empty($skills) && empty($career) && empty($jantina)
     && empty($bangsa) && empty($sektor) && empty($umur)){
        $sql = "SELECT * FROM `ts_excel` WHERE department = '$department' AND lokasi = '$lokasi' AND applicant_id !='' LIMIT 50";
        $result = mysqli_query($conn, $sql);
    }
    //triple probabilities
    else if(isset($department) && isset($skills)  && isset($jantina) && empty($career)
    && empty($bangsa) && empty($sektor) && empty($umur) && empty($lokasi)){
     $sql = "SELECT * FROM `ts_excel` WHERE department = '$department' AND skill = '$skills' AND jantina = '$jantina' AND applicant_id !='' LIMIT 50";
        $result = mysqli_query($conn, $sql);
    }
    else if(isset($department) && isset($career)  && isset($sektor) && isset($lokasi)
    && empty($bangsa) && empty($jantina) && empty($umur) && empty($skills)){
         $sql = "SELECT * FROM `ts_excel` WHERE department = '$department' AND career = '$career' AND sektor = '$sektor' AND lokasi = '$lokasi' AND applicant_id !='' LIMIT 50";
        $result = mysqli_query($conn, $sql);
    }
    else if(isset($department) && isset($career)  && isset($sektor) && isset($umur)
    && empty($bangsa) && empty($jantina) && empty($lokasi) && empty($skills)){
         $sql = "SELECT * FROM `ts_excel` WHERE department = '$department' AND career = '$career' AND sektor = '$sektor' AND umur = '$umur' AND applicant_id !='' LIMIT 50";
        $result = mysqli_query($conn, $sql);
    }
    else if(isset($department) && isset($career)  && isset($sektor) && isset($lokasi)
    && empty($bangsa) && empty($jantina) && empty($umur) && isset($skills)){
         $sql = "SELECT * FROM `ts_excel` WHERE department = '$department' AND career = '$career' AND sektor = '$sektor' AND umur = '$umur' AND lokasi = '$lokasi' AND applicant_id !='' LIMIT 50";
        $result = mysqli_query($conn, $sql);
    }
    else if(isset($department) && isset($skills)  && isset($umur) && isset($lokasi)
    && empty($bangsa) && empty($jantina) && empty($career) && empty($sektor)){
         echo "department, skills and umur are set";
         $sql = "SELECT * FROM `ts_excel` WHERE department = '$department' AND skill = '$skills' AND umur = '$umur' AND  applicant_id !='' LIMIT 50";
        $result = mysqli_query($conn, $sql);
    }
    else if(isset($department) && isset($skills) && isset($career) && isset($jantina)
     && isset($lokasi) && isset($bangsa) && isset($age) && isset($sektor) && isset($umur)){
        $sql = "SELECT * FROM `ts_excel` WHERE department = '$department' and career ='$career' and 
        sektor='$sektor' AND lokasi='$lokasi' and skill ='$skills' and jantina ='$jantina' and bangsa='$bangsa' and umur='$age' AND  applicant_id !='' LIMIT 50";
        $result = mysqli_query($conn, $sql);
     } 
 }
 if (isset($result)){
    if($result){
        $rows = array();
        while($row = mysqli_fetch_array($result)){
            
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
    


?>
