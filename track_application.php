<?php
session_start();
require_once "model/Util.php";
$util = new Util();
require_once "model/authCookieSessionValidate.php";
if ($isLoggedIn) {
    // $util->redirect("profile_upload.php");
} else {
    $util->redirect("index.php");
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
        <div class="wrapper wrapper--w780">
            <div class="card card-4">
                <div class="card-body">
                    <!-- <h2 class="title">Registration Form</h2> -->
                    <div >
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <select id="get_department" class="form-select" aria-label="Default select example">
                                        <option value="" disabled>Department</option>
                                        <option value="atm">ATM</option>
                                        <option value="jkm">JKM</option>
                                        <option value="MARA">MARA</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" >ID</span>
                                        <input type="text" class="form-control" id="get_id" placeholder="ID " aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col">
                                <button type="submit" id="trackPerson" class="btn btn-secondary btn-sm">Search</button>
                               
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script>
    $(document).ready(function(){
        $("#trackPerson").click(function() {

var formData = {
    'get_department': document.getElementById('get_department').value,
    'get_id': document.getElementById('get_id').value,
};
$.ajax({
          url: "model/tracker.php",
          type : "GET",
          data : formData,
          dataType: "html",
          success : function(response){
            $("#responsecontainer").html(response);
          }

      });
        });
    });
                   
</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->


</html>
<!-- end document-->