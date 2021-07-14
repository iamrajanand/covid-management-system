<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Page-->
    <title>Covid-19 Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
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

<!--Pie Chart -->
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<?php
include("dashsql.php");
$dataPoints = array( 
    array("label"=>"0-25 years", "y"=>$count3/$count2*360),
    array("label"=>"26-50 years", "y"=>$count4/$count2*360),
    array("label"=>"51-75 year", "y"=>$count5/$count2*360),
    array("label"=>"76-above years", "y"=>$count6/$count2*360),
)
?>

<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    title: {
        text: ""
    },
    subtitles: [{
        text: ""
    }],
    data: [{
        type: "pie",
        yValueFormatString: "#,##0.00\"%\"",
        indexLabel: "{label} ({y})",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
 
}
</script>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER-->
        <?php include("header.php"); ?>
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
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                 <?php include("dashsql.php"); ?>
                                                <h2><?php echo $count1; ?></h2>
                                                <span>Total Test</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $count2; ?></h2>
                                                <span>Active Case</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>5</h2>
                                                <span>Cured</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                               <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1</h2>
                                                <span>Death</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                       <img src="images/info.png" alt="covid"> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                    <h3 class="title-2 tm-b-5">Cases by Ages</h3>
                                        <div class="row no-gutters">
                                            <div class="col-xl-8" id="chartContainer" style="height: 380px;width:100%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="far fa-check-square"></i>Do's</h3>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Wash Your Hands</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Wear Mask</a>
                                                    </h5>
                                       
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--primary">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Stay at Home</a>
                                                    </h5>
                                                
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--success">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Maintain Social Distancing</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--success">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Say Namaste</a>
                                                    </h5>
                                                </div>
                                            </div>
                                           
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="far fa-times-circle"></i>Don't</h3>

                                    </div>
                                    <div class="au-inbox-wrap js-inbox-wrap">
                                        <div class="au-message js-list-load">
                                            <div class="au-message-list">

                                              <div class="au-message__item unread">
                                                <div class="au-task__item au-task__item--success">
                                                   <div class="au-task__item-inner">
                                                      <h5 class="task">
                                                          <a href="#">Don't Touch ur Face</a>
                                                      </h5>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="au-message__item unread">
                                                <div class="au-task__item au-task__item--success">
                                                   <div class="au-task__item-inner">
                                                      <h5 class="task">
                                                          <a href="#">Do not Spit</a>
                                                      </h5>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="au-message__item unread">
                                                <div class="au-task__item au-task__item--success">
                                                   <div class="au-task__item-inner">
                                                      <h5 class="task">
                                                          <a href="#">Avoid Close Contact with anyone</a>
                                                      </h5>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="au-message__item unread">
                                                <div class="au-task__item au-task__item--success">
                                                   <div class="au-task__item-inner">
                                                      <h5 class="task">
                                                          <a href="#">Avoid using Public Transport</a>
                                                      </h5>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="au-message__item unread">
                                                <div class="au-task__item au-task__item--success">
                                                   <div class="au-task__item-inner">
                                                      <h5 class="task">
                                                          <a href="#">Don't Panic</a>
                                                      </h5>
                                                    </div>
                                                </div>
                                              </div>




                                            </div>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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
    <script src="vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>
</html>
<!-- end document-->
