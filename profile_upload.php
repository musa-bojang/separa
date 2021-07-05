<?php
session_start();
require_once "model/Util.php";
$util = new Util();
require_once "model/authCookieSessionValidate.php";
if ($isLoggedIn) {
    // $util->redirect("profile_upload.php");
    if(isset($_SESSION['role'])){
        if($_SESSION['role'] ==='admin'){
            $util->redirect("all_application.php");
        }
    }
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
    <title>Upload anonymous profiles</title>
    <!-- bootstrap 5.x or 4.x is supported. You can also use the bootstrap css 3.3.x versions -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>


<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="separa.png" height="40"  alt="">    
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
                    <form method="POST" id="demoForm" enctype="multipart/form-data" action="upload.php">
                        <div class="row row-space">

                            <div class="file-input">
                                <input type="file" id="file" name="file" class="file" required>
                                <label for="file">
                                    <p id="excel">Upload CSV file</p>
                                    <p class="file-name" id="file-name"></p>
                                </label>
                            </div>
                        </div>
                        <div class="row row-space" style="margin-top: 20px;">
                            <input class="btn btn--radius-2 btn--blue" type="submit" name="submit" value="Import">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Begin Page Content -->


    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Bootstrap core JavaScript-->

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->


    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script>
        $(document).ready(function() {
            // initialize with defaults
            $("#input-id").fileinput();

            // with plugin options
            $("#input-id").fileinput({
                'uploadUrl': '/path/to/your-upload-api',
                'previewFileType': 'any'
            });
        });

        const file = document.querySelector('#file');
        file.addEventListener('change', (e) => {
            // Get the selected file
            const [file] = e.target.files;
            // Get the file name and size
            const {
                name: fileName,
                size
            } = file;
            // Convert size in bytes to kilo bytes
            const fileSize = (size / 1000).toFixed(2);
            // Set the text content
            const fileNameAndSize = `${fileName} - ${fileSize}KB`;
            document.getElementById("excel").style.display = "none";
            document.querySelector('.file-name').textContent = fileNameAndSize;
        });

        window.onscroll = function() {
            myFunction()
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->