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
                    <form method="POST" id="demoForm">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected disabled>Department</option>
                                        <option value="atm">ATM</option>
                                        <option value="jkm">JKM</option>
                                        <option value="mara">MARA</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">ID</span>
                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col">
                                <button type="button" class="btn btn-secondary btn-sm">Search</button>
                               
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
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
    // object literal holding data for option elements

    var Select_List_Data = {

        'choices': { // name of associated select box

            // names match option values in controlling select box
            working: {
                text: ['working 1', 'working 2', 'working 3', 'working 4', 'working 5'],
                value: ['working 1', 'working 2', 'working 3', 'working 4', 'working 5']
            },
            education: {
                text: ['education 1', 'education 2', 'education 3', 'education 4'],
                value: ['education 1', 'education 2', 'education 3', 'education 4']
            },
            entrepreneurship: {
                // example without values
                text: ['entrepreneurship 1 ', 'entrepreneurship 2', 'entrepreneurship 3', 'entrepreneurship 4']
            }

        }
    };

    // removes all option elements in select box 
    // removeGrp (optional) boolean to remove optgroups
    function removeAllOptions(sel, removeGrp) {
        var len, groups, par;
        if (removeGrp) {
            groups = sel.getElementsByTagName('optgroup');
            len = groups.length;
            for (var i = len; i; i--) {
                sel.removeChild(groups[i - 1]);
            }
        }

        len = sel.options.length;
        for (var i = len; i; i--) {
            par = sel.options[i - 1].parentNode;
            par.removeChild(sel.options[i - 1]);
        }
    }

    function appendDataToSelect(sel, obj) {
        var f = document.createDocumentFragment();
        var labels = [],
            group, opts;

        function addOptions(obj) {
            var f = document.createDocumentFragment();
            var o;

            for (var i = 0, len = obj.text.length; i < len; i++) {
                o = document.createElement('option');
                o.appendChild(document.createTextNode(obj.text[i]));

                if (obj.value) {
                    o.value = obj.value[i];
                }

                f.appendChild(o);
            }
            return f;
        }

        if (obj.text) {
            opts = addOptions(obj);
            f.appendChild(opts);
        } else {
            for (var prop in obj) {
                if (obj.hasOwnProperty(prop)) {
                    labels.push(prop);
                }
            }

            for (var i = 0, len = labels.length; i < len; i++) {
                group = document.createElement('optgroup');
                group.label = labels[i];
                f.appendChild(group);
                opts = addOptions(obj[labels[i]]);
                group.appendChild(opts);
            }
        }
        sel.appendChild(f);
    }

    // anonymous function assigned to onchange event of controlling select box
    document.forms['demoForm'].elements['category'].onchange = function(e) {
        // name of associated select box
        var relName = 'choices';

        // reference to associated select box 
        var relList = this.form.elements[relName];

        // get data from object literal based on selection in controlling select box (this.value)
        var obj = Select_List_Data[relName][this.value];

        // remove current option elements
        removeAllOptions(relList, true);

        // call function to add optgroup/option elements
        // pass reference to associated select box and data for new options
        appendDataToSelect(relList, obj);
    };


    // populate associated select box as page loads
    (function() { // immediate function to avoid globals

        var form = document.forms['demoForm'];

        // reference to controlling select box
        var sel = form.elements['category'];
        sel.selectedIndex = 0;

        // name of associated select box
        var relName = 'choices';
        // reference to associated select box
        var rel = form.elements[relName];

        // get data for associated select box passing its name
        // and value of selected in controlling select box
        var data = Select_List_Data[relName][sel.value];

        // add options to associated select box
        appendDataToSelect(rel, data);

    }());
</script>

</html>
<!-- end document-->