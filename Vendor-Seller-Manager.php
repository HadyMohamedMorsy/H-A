<?php
    include('Datebase/Config.php');
    include('Datebase/DB-Vendor-Seller-Manger.php');
?>
<?php
    if ($_SESSION['HA_U_P_Seller_Manager'] !== 'Available') {
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
    <?php include ("./Links Header With Tables.php"); ?>
    <link rel="stylesheet" href="./CSS-Files/seller.css">
    
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <!-- Start The Header -->
            <?php include ("Website-Structure/Dashbored-header.php"); ?>
            <!-- End The Header-->

            <?php include ("./Website-Structure/Vendor-Seller-Manager-Body.php"); ?>

            <!-- Start The Footer -->
        </div>
    </div>
</div>
    <!-- End The Footer-->

    <!-- Start The Links Files -->
    <?php include ("Links javascript Dashbored.php"); ?>
    <script src="./Javascript-Files/action-seler.js"></script>
    <!-- <script type="text/javascript" src="Javascript-Files/Main-index-Page.js"></script> -->
    <!-- End The Links Files -->
</body>

</html>