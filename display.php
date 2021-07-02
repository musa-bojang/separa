<?php
include("configuration.php");

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
        $sql = "SELECT * FROM `ts_excel` WHERE department = '$department' and applicant_id !=''";
        $result = mysqli_query($conn, $sql);
     }else if(isset($career) && isset($sektor)  && empty($skills)  && empty($jantina)
     && empty($lokasi) && empty($bangsa) && empty($department) && empty($umur)){
        $sql = "SELECT * FROM `ts_excel` WHERE career = '$career' and applicant_id !=''";
        $result = mysqli_query($conn, $sql);
     } 
     else if(isset($lokasi)  && empty($skills) && empty($career) && empty($jantina)
     && empty($department) && empty($bangsa) && empty($sektor) && empty($umur)){
         echo " lokasi is set";
    }
    else if(isset($skills)  && empty($department) && empty($career) && empty($jantina)
    && empty($lokasi) && empty($bangsa) && empty($sektor) && empty($umur)){
        echo " skills is set";
    }
    else if(isset($jantina)  && empty($skills) && empty($career) && empty($department)
    && empty($lokasi) && empty($bangsa) && empty($sektor) && empty($umur)){
        echo " jantina is skills";
    }
    else if(isset($bangsa)  && empty($skills) && empty($career) && empty($jantina)
    && empty($lokasi) && empty($department) && empty($sektor) && empty($umur)){
        echo " bangsa is set";
    }
    else if(isset($umur)  && empty($skills) && empty($career) && empty($jantina)
    && empty($lokasi) && empty($bangsa) && empty($sektor) && empty($department)){
        echo " umur is set";
    }
    // double probablities
    else if(isset($department) && isset($career) && isset($sektor)  && empty($skills) && empty($jantina)
    && empty($lokasi) && empty($bangsa)  && empty($umur)){
        echo " depart, career and sektor are set";
    }
    else if(isset($department) && isset($skills)  && empty($career) && empty($jantina)
    && empty($lokasi) && empty($bangsa) && empty($sektor) && empty($umur)){
        echo " depart and skill are set";
    }
    else if(isset($department) && isset($jantina)  && empty($skills) && empty($career)
    && empty($lokasi) && empty($bangsa) && empty($sektor) && empty($umur)){
        echo " depart and jantina are set";
    }
    else if(isset($department) && isset($bangsa)  && empty($skills) && empty($career) && empty($jantina)
    && empty($lokasi)  && empty($sektor) && empty($umur)){
        echo " depart and bangsa are set";
    }
    else if(isset($department) && isset($umur)  && empty($skills) && empty($career) && empty($jantina)
    && empty($lokasi) && empty($bangsa) && empty($sektor) ){
        echo " depart and age are set";
    }else if(isset($department) && isset($lokasi)  && empty($skills) && empty($career) && empty($jantina)
     && empty($bangsa) && empty($sektor) && empty($umur)){
        echo " depart and lokasi are set";
    }
    //triple probabilities
    else if(isset($department) && isset($skills)  && isset($jantina) && empty($career)
    && empty($bangsa) && empty($sektor) && empty($umur) && empty($lokasi)){
     echo  " department, skills, and jantina are set";
    }
    else if(isset($department) && isset($career)  && isset($sektor) && isset($lokasi)
    && empty($bangsa) && empty($jantina) && empty($umur) && empty($skills)){
         echo "department, career, sektor and lokasi are set";
    }
    else if(isset($department) && isset($career)  && isset($sektor) && isset($umur)
    && empty($bangsa) && empty($jantina) && empty($lokasi) && empty($skills)){
         echo "department, career, sektor and umur are set";
    }
    else if(isset($department) && isset($career)  && isset($sektor) && isset($lokasi)
    && empty($bangsa) && empty($jantina) && empty($umur) && isset($skills)){
         echo "department, career, sektor , skills and lokasi are set";
    }
    else if(isset($department) && isset($skills)  && isset($umur) && isset($lokasi)
    && empty($bangsa) && empty($jantina) && empty($career) && empty($sektor)){
         echo "department, skills and umur are set";
    }
    else if(isset($department) && isset($skills) && isset($career) && isset($jantina)
     && isset($lokasi) && isset($bangsa) && isset($age) && isset($sektor) && isset($umur)){
        $sql = "SELECT * FROM `ts_excel` WHERE department = '$department' and career ='$career' and 
        sektor='$sektor' AND lokasi='$lokasi' and skill ='$skills' and jantina ='$jantina' and bangsa='$bangsa' and umur='$age'";
        $result = mysqli_query($conn, $sql);
     } 
 }
 if (isset($result)){
    if($result){
        $rows = array();
        while($row = mysqli_fetch_array($result)){
            
            ?>
            <a href="#" career="button" class="list-group-item list-group-item-action" aria-current="true">
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
