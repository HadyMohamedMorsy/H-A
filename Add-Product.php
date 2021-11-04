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
    <?php include ("./links-Dashbored.php"); ?>
    <link rel="stylesheet" href="./CSS-Files/add-product.css">
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <!-- Start The Header -->
            <?php include ("Website-Structure/Dashbored-header.php"); ?>
            <!-- End The Header-->

            <?php include ("./Website-Structure/Add-Product-Body.php"); ?>

            <!-- Start The Footer -->
        </div>
    </div>
</div>
    <!-- End The Footer-->

    <!-- Start The Links Files -->
    <?php include ("./Links javascript Dashbored.php"); ?>
    <script src="./Javascript-Files/add-product.js"></script>
    <!-- <script type="text/javascript" src="Javascript-Files/Main-index-Page.js"></script> -->
    <!-- End The Links Files -->
</body>

</html>