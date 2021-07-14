<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Admission</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php include("header.php"); ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                        
                        
                            <div class="col-lg-6">
                                <div class="card">
                                 <form method="post">
                                    <div class="card-header"><?php include("formsql.php"); ?>
                                        <i class="far fa-user"></i>  <strong>Patients</strong>
                                        <small> Details</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">Name</label>
                                            <input type="text" id="name" placeholder="Enter your  name" class="form-control" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Age</label>
                                            <input type="number" id="age"  name="age"  class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Gender</label><br>
                                            <input type="radio" id="male" name="gender" value="M">
                                            <label for="male">Male</label><br>
                                            <input type="radio" id="female" name="gender" value="F">
                                            <label for="female">Female</label><br>
                                        </div>

                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">City</label>
                                            <input type="text" id="city" placeholder="Enter City name" class="form-control" name="city">
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="city" class=" form-control-label">State</label>
                                                    <input type="text" id="state" placeholder="Enter your State" class="form-control" name="state">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Corona Tested</label><br>
                                            <input type="radio" id="positive" name="corona" value="YES">
                                            <label for="male">Positive</label><br>
                                            <input type="radio" id="negative" name="corona" value="NO">
                                            <label for="female">Negative</label><br>
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">Date of Diagnosed</label>
                                            <input type="date" id="date"  class="form-control" name="diagnosed">
                                        </div>
                                        <div class="rs-select2--light rs-select2--md">
                                        <label for="vat" class=" form-control-label">Condition</label><br>
                                            <select class="js-select2" name="condition" id="condition">
                                                <option selected="selected" value="None">None</option>
                                                <option value="Mild">Mild</option>
                                                <option value="MODERATE">MODERATE</option>
                                                <option value="SEVEVERE">SEVEVERE</option>
                                                <option value="ASYMPTOMATIC">ASYMPTOMATIC</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">HOSPITALIZE</label><br>
                                            <input type="radio" id="yes" name="hospitalize" value="YES">
                                            <label for="male">YES</label><br>
                                            <input type="radio" id="no" name="hospitalize" value="NO">
                                            <label for="female">NO</label><br>
                                        </div>
                                        <div class="rs-select2--light rs-select2--md">
                                        <label for="vat" class=" form-control-label">Treatment</label><br>
                                            <select class="js-select2" name="treatment">
                                                <option selected="selected" value="GENERAL">GENERAL</option>
                                                <option value="PLASMA">PLASMA</option>
                                                <option value="HCL">HCL</option>
                                                <option value="QUARANTINE">QUARANTINE</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label for="street" class=" form-control-label">Doctor ID</label>
                                            <input type="text" id="doctor" placeholder="Ex. 1001" class="form-control" name="did">
                                        </div> --><br>
                                        <div class="rs-select2--light rs-select2--md">
                                        <label for="vat" class=" form-control-label">Doctor Assigned</label><br>
                                            <select class="js-select2" name="did">
                                                <option selected="selected" value="1001">Dr.Scott</option>
                                                <option value="1002">Dr.Cruz</option>
                                                <option value="1003">Dr.Racheal</option>
                                                <option value="1004">Dr.Disha</option>
                                                <option value="1005">Dr.Nelson</option>
                                                <option value="1006">Dr.Shah</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                            <br>

                                        <!-- <div class="form-group">
                                            <label for="street" class=" form-control-label">Room NO</label>
                                            <input type="text" id="room" placeholder="Ex. 101" class="form-control" name="no">
                                        </div> -->

                                        <div class="rs-select2--light rs-select2--md">
                                        <label for="vat" class=" form-control-label">Room Assigned</label><br>
                                            <select class="js-select2" name="no">
                                                <option selected="selected" value="101">101</option>
                                                <option value="102">102</option>
                                                <option value="103">103</option>
                                                <option value="201">201</option>
                                                <option value="102">202</option>
                                                <option value="301">301</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>


                                    </div>
                                    
                                        <button id="submit" type="submit" class="btn btn-lg btn-info btn-block" name="submit">
                                          <span id="submit">Submit</span>
                                          <span id="submit" style="display:none;">Sending…</span>
                                        </button>
                                    </form>
                                </div>

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
