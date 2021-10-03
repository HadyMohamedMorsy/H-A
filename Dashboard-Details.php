<?php
    include('Datebase/Config.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php
    $Page_Title = 'Dashboard-Details';
    include ('Website-Structure/Header-Elemnts.php') ;
?>
    <!-- Start The Links Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="Framework/Fontawsome/css/all.css">
    <link rel="stylesheet" href="Font's/Kufi/Kufi-Font.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS-Files/H_A.css">
    <!-- End The Links Files -->
<body>

    <!-- Start The Header -->
<div class="container-hady">

    <?php include("./Website-Structure/Dashbored-header.php"); ?>
    <!-- End The Header-->

    <?php include ("./Website-Structure/Dashboard-Details-Body.php"); ?>

    <!-- Start The Footer -->
    <?php include ("Website-Structure/Footer.php"); ?>

    <!-- End The Footer-->
    
</div>
    <!-- Start The Links Files -->
    <?php include ("Links javascript Dashbored.php"); ?>
    <!-- <script type="text/javascript" src="Javascript-Files/Main-index-Page.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <script>
            var xyValues = [
            {x:50, y:7},
            {x:60, y:8},
            {x:70, y:8},
            {x:80, y:9},    
            {x:90, y:9},
            {x:100, y:9},
            {x:110, y:10},
            {x:120, y:11},
            {x:130, y:14},
            {x:140, y:14},
            {x:150, y:15}
            ];
            new Chart("myChart", {
            type: "scatter",
            data: {
                datasets: [{
                pointRadius: 4,
                pointBackgroundColor: "rgb(0,0,255)",
                data: xyValues
                }]
            },
            options: {
                legend: {display: false},
                scales: {
                xAxes: [{ticks: {min: 40, max:160}}],
                yAxes: [{ticks: {min: 6, max:16}}],
                }
            }
            });
        </script>
    <!-- End The Links Files -->
</body>

</html>