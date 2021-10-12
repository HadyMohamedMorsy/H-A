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
    <?php include('./Links CSS In Head Area.php') ?>
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
    <?php include ("./Links Javascript In Footer Area.php"); ?>
    <!-- <script type="text/javascript" src="Javascript-Files/Main-index-Page.js"></script> -->
    <!-- End The Links Files -->
</body>

</html>