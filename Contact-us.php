<?php
    include('Datebase/Config.php');
    include('Datebase/DB_Login.php');
    include('Datebase/DB-Sign-Up.php');

?>

<!DOCTYPE html>
<html lang="en">

<?php
    $Page_Title = 'H_A';
    include ('Website-Structure/Header-Elemnts.php') ;
?>
    <!-- Start The Links Files -->
    <?php include ("Links CSS In Head Area.php"); ?>
    <!-- End The Links Files -->
<body>

    <!-- Start The Header -->
    <?php include ("Website-Structure/Header.php"); ?>
    <link rel="stylesheet" href="CSS-Files/H_A.css">
    <!-- End The Header-->
    <?php include ("Website-Structure/Contact-us-body.php"); ?>

    <!-- Start The Footer -->
    <?php include ("Website-Structure/Footer.php"); ?>
    <!-- End The Footer-->

    <!-- Start The Links Files -->
    <?php include ("Links Javascript In Footer Area.php"); ?>
    <!-- <script type="text/javascript" src="Javascript-Files/Main-index-Page.js"></script> -->
    <!-- End The Links Files -->
</body>

</html>