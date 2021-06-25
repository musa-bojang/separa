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
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile_upload.php">Upload Anonymous Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="track_application.php">Check Application</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <!-- <h2 class="title">Registration Form</h2> -->
                    <form id="demoForm">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <select name="department" id="department" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option disabled="disabled" selected="selected">Department</option>
                                        <option value="kajang">Kajang</option>
                                        <option value="nilai">Nilai</option>
                                        <option value="indian">Indian</option>
                                        <option>lain lain</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <select name="skills" id="skills" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option disabled="disabled" selected="selected">Skills</option>
                                        <option>Melayu</option>
                                        <option>Cina</option>
                                        <option>Indian</option>
                                        <option>lain lain</option>
                                    </select>
                                    <div class="select-dropdown"></div>

                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <!-- <div class="rs-select2 js-select-simple select--no-search"> -->
                                    <select name="category" id="category" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option disabled="disabled" selected="selected">Type</option>
                                        <option value="working">working</option>
                                        <option value="education">education</option>
                                        <option value="entrepreneurship">entrepreneurship</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                    <!-- </div> -->
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <select name="jantina" id="jantina" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option disabled="disabled" selected="selected">Jantina</option>
                                        <option value="lelaki">lelaki</option>
                                        <option value="perempuan">perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <select name="lokasi" id="lokasi" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option disabled="disabled" selected="selected">Lokasi</option>
                                        <option>Kajang</option>
                                        <option>Nilai</option>
                                        <option>Indian</option>
                                        <option>lain lain</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <select name="bangsa" id="bangsa" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option disabled="disabled" selected="selected">Bangsa</option>
                                        <option value="Melayu">Melayu</option>
                                        <option>Cina</option>
                                        <option>Indian</option>
                                        <option>lain lain</option>
                                    </select>
                                    <div class="select-dropdown"></div>

                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <!-- <label class="label">Sektor</label> -->
                                    <!-- <div class="rs-select2 js-select-simple select--no-search"> -->
                                    <select name="choices" id="choices" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option disabled="disabled" selected="selected">Sila Pilih</option>
                                        <!-- <option>Working</option>
                                            <option>Enterpreneurship</option>
                                            <option>Education</option> -->
                                    </select>
                                    <div class="select-dropdown"></div>
                                    <!-- </div> -->
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <select name="umur" id="umur" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option disabled="disabled" selected="selected">Umur</option>
                                        <option value="18">18</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-secondary" id="display" type="button">Cari</button>
                                
                            </div>
                           
                        </div>
                    </form>

                </div>
            </div>
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
    // object literal holding data for option elements
    $(document).ready(function() {

        $("#display").click(function() {

            var formData = {
                'department': document.getElementById('department').value,
                'skills': document.getElementById('skills').value,
                'category': document.getElementById('category').value,
                'jantina': document.getElementById('jantina').value,
                'lokasi': document.getElementById('lokasi').value,
                'bangsa': document.getElementById('bangsa').value,
                'choices': document.getElementById('choices').value,
                'umur': document.getElementById('umur').value
            };
            // var department = document.getElementById("department").value;
            //    alert(department)
            $.ajax({ //create an ajax request to display.php
                type: "GET",
                url: "display.php",
                data: formData,
                dataType: "html", //expect html to be returned                
                success: function(response) {
                    alert("clicked")
                    $("#responsecontainer").html(response);
                    //alert(response);
                }

            });


        });
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

        });
    });
</script>

</html>
<!-- end document-->