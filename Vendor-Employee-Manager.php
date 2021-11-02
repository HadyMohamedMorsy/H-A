<?php
    include('Datebase/Config.php');
    include('Datebase/DB-Vendor-Employee-Manger.php');
?>
<?php
    if ($_SESSION['HA_U_P_Employee_Manager'] !== 'Available') {
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
    <?php include ("Links Header With Tables.php"); ?>
    <link rel="stylesheet" href="./CSS-Files/employeer.css">
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <!-- Start The Header -->
            <?php include ("Website-Structure/Dashbored-header.php"); ?>
            <!-- End The Header-->

            <?php include ("./Website-Structure/Vendor-Employee-Manager-Body.php"); ?>

            <!-- Start The Footer -->
        </div>
    </div>
</div>
    <!-- End The Footer-->

    <!-- Start The Links Files -->
    <?php include ("Links javascript Dashbored.php"); ?>
    <script src="./Javascript-Files/action-emplyeer.js"></script>

    <!-- <script type="text/javascript" src="Javascript-Files/Main-index-Page.js"></script> -->
    <!-- End The Links Files -->
</body>

</html>