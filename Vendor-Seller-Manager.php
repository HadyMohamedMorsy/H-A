<?php
    include('Datebase/Config.php');
    include('Datebase/DB-Vendor-Seller-Manger.php');
?>
<?php
    if ($_SESSION['HA_P_Permission_Seller_Manager'] !== 'Available') {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<?php
    $Page_Title = 'H_A';
    include ('Website-Structure/Header-Elemnts.php') ;
?>
    <!-- Start The Links Files -->
    <?php include ("Links CSS In Head Area.php"); ?>
<body>
<div class="container-hady">
    <!-- Start The Header -->
    <?php include ("Website-Structure/Dashbored-header.php"); ?>
    <!-- End The Header-->

    <?php include ("./Website-Structure/Vendor-Seller-Manager-Body.php"); ?>

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