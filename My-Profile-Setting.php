<?php
    include('Datebase/Config.php');
    include('Datebase/DB_My_Profile.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php
    $Page_Title = 'H_A';
    include ('Website-Structure/Header-Elemnts.php') ;
?>
    <!-- Start The Links Files -->
    <?php include ("./Links CSS In Head Area.php"); ?>
    <link rel="stylesheet" href="./CSS-Files/edit-profile.css">
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <!-- Start The Header -->
            <?php include ("Website-Structure/Dashbored-header.php"); ?>
            <!-- End The Header-->

            <?php include ("./Website-Structure/My-Profile-Setting-Body.php"); ?>

            <!-- Start The Footer -->
        </div>
    </div>
</div>

    <!-- End The Footer-->

    <!-- Start The Links Files -->
    <?php include ("./Links javascript Dashbored.php"); ?>
    <    <script src="./Javascript-Files/edit-profile.js"></script>
    <!-- <script type="text/javascript" src="Javascript-Files/Main-index-Page.js"></script> -->
    <!-- End The Links Files -->
</body>

</html>