<?php
session_start();
require_once "model/Util.php";
$util = new Util();
require_once "model/authCookieSessionValidate.php";
require_once "model/DBConn.php";
if ($isLoggedIn) {
    // $util->redirect("profile_upload.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>SEPARA</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<?php  
$deptid = $_GET["departmentid"];
$sysid = $_GET["systemid"];
 $sql = "SELECT * FROM ts_excel WHERE applicant_id = '$deptid' AND id = $sysid";
 $result = mysqli_query($conn, $sql);
 
 if($result){
    $row = mysqli_fetch_array($result);
     $department = $row['department'];
     $applicant = $row['applicant_id'];
     $career = $row['career'];
     $jantina = $row['jantina'];
     $lokasi = $row['lokasi'];
     $daerah = $row['daerah'];
     $bangsa = $row['bangsa'];
     $skill = $row['skill'];
     $sektor = $row['sektor'];
     $sub_sektor = $row['sub_sektor'];
     $umur = $row['umur'];
     $status = $row['status'];
     $remarks = $row['remarks'];
    
 }
 if($_SESSION['role']==='user'){
  $decider = 'disabled';
 }else {
    $decider = '';
 }

?>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="separa.png" height="40" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php if(isset($_SESSION['role'])){
                        if($_SESSION['role']==='user'){
                            ?>
                            <li class="nav-item">
                            <a class="nav-link" href="profile_upload.php">Upload Anonymous Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="department_upload.php">Uploaded Profiles</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="model/logout.php">Log Keluar</a>
                    </li>
                        <?php 
                        } else {  ?>
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php">UTAMA</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" href="track_application.php">Check Application</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="all_application.php">ALL Applications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="model/logout.php">Log Keluar</a>
                    </li>
                    <?php
                        }
                    
                    }
                    
                    ?>
                    

                </ul>

            </div>
        </div>
    </nav>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <!-- <h2 class="title">Registration Form</h2> -->
                    <form id="updateform">
                         
                         <div class="row row-space">
                            <div class="col-2">
                            <div class="input-group input-group-sm mb-3">
                                    <input type="text" name="department" class="form-control" aria-label="department" value="<?= $department;?>" disabled aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" name="applicant" class="form-control" aria-label="applicant" value="<?= $applicant;?>" disabled aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                            <div class="input-group input-group-sm mb-3">
                                    <input type="text" name="career" class="form-control" aria-label="career" value="<?= $career;?>" disabled aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" name="jantina"  class="form-control" aria-label="jantina" value="<?= $jantina;?>" disabled aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                            <div class="input-group input-group-sm mb-3">
                                    <input type="text" name="lokasi"  class="form-control" aria-label="lokasi" value="<?= $lokasi;?>" disabled aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" name="daerah"  class="form-control" aria-label="daerah" value="<?= $daerah;?>" disabled aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                            <div class="input-group input-group-sm mb-3">
                                    <input type="text" name="bangsa"  class="form-control" aria-label="bangsa" value="<?= $bangsa;?>" disabled aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" name="skills"  class="form-control" aria-label="skills" value="<?= $skill;?>" disabled aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                            <div class="input-group input-group-sm mb-3">
                                    <input type="text" name="sektor"  class="form-control" aria-label="sektor" value="<?= $sektor;?>" disabled aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" name="subsektor"  class="form-control" aria-label="subsektor" value="<?= $sub_sektor;?>" disabled aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                            <div class="input-group input-group-sm mb-3">
                                    <input type="text" name="umur"  class="form-control" aria-label="umur" value="<?= $umur;?>" disabled aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group input-group-sm mb-3">
                                <select <?= $decider;?> name="status" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                                        <option value="<?= $status;?>"><?= $status;?></option>
                                        <option value="Available">Available</option>
                                        <option value="Not Available">Not Available</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                           
                            <div class="input-group input-group-sm mb-3">
                                    <textarea <?= $decider;?> type="text" name="remark"  class="form-control" aria-label="remark"  aria-describedby="inputGroup-sizing-sm" required><?= $remarks;?></textarea>
                                </div>
                           
                           
                        </div> 
                        <div class="row row-space">
                            <div class="col-2">
                            <div class="input-group input-group-sm mb-3">
                            <input type="button" id="deletebtn"  class="btn btn-danger"  value="Delete" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group input-group-sm mb-3">
                                <input type="submit"   class="btn btn-primary" <?= $decider;?>  value="Hantar" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>
                        </div>
                        
                        
                    </form>

                </div>
            </div>

        </div>
        <div class="wrapper wrapper--w780">
            <div class="list-group" id="responsecontainer">

            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
<script>
   $(document).ready(function(){
     $('form#updateform').submit(function(e) {
		e.preventDefault();
        var formData = new FormData(this);
        var departmentid = <?php echo json_encode($_GET["departmentid"]); ?>;
        var systemid = <?php echo json_encode($_GET["systemid"]); ?>;
        

        formData.append('departmentid', departmentid);
        formData.append('systemid', systemid);
   
        $.ajax({
            url : "model/update.php",
            type : "POST",
             data : formData,
             success : function(res){
                 alert(res);
             },
             cache: false,
				contentType: false,
				processData: false
        });
     });
     $("#deletebtn").click(function() {
        var deleteid = <?php echo json_encode($_GET["systemid"]); ?>;
        // alert(deleteid)
        let isExecuted = confirm("Are you sure to execute this action?");
        if(isExecuted){
            var formData = new FormData();
        formData.append('deleteid', deleteid);
        $.ajax({
            url : "model/delete.php",
            type : "POST",
             data : formData,
             dataType : 'json',
             success : function(res){
                 if(res.success==='deleted'){
                    alert(res.success);
                    window.location.href = "department_upload.php";
                 }
                 
             },
             cache: false,
				contentType: false,
				processData: false
        });
        }else {

        }
        
     });
   });
</script>

</html>
<!-- end document-->