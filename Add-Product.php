<?php
    include('Datebase/Config.php');
    include('Datebase/DB_Add_Product.php');
?>
<?php
    if ($_SESSION['HA_U_P_Add_Product'] !== 'Available') {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<?php
    $Page_Title = 'HA | Add Product';
    include ('Website-Structure/Header-Elemnts.php') ;
?>
    <!-- Start The Links Files -->
    <?php include ("Links CSS In Head Area.php"); ?>
<body>
<div class="container-hady">
    <!-- Start The Header -->
    <?php include ("Website-Structure/Dashbored-header.php"); ?>
    <!-- End The Header-->

    <?php include ("./Website-Structure/Add-Product-Body.php"); ?>

    <!-- Start The Footer -->
</div>
    <?php include ("Website-Structure/Footer.php"); ?>
    <!-- End The Footer-->

    <!-- Start The Links Files -->
    <?php include ("Links javascript Dashbored.php"); ?>
    <!-- <script type="text/javascript" src="Javascript-Files/Main-index-Page.js"></script> -->
    <!-- End The Links Files -->
</body>

</html>