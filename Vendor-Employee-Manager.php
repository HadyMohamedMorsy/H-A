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
<body>
<div class="container-hady">
    <!-- Start The Header -->
    <?php include ("Website-Structure/Dashbored-header.php"); ?>
    <!-- End The Header-->

    <?php include ("Website-Structure/Vendor-Employee-Manager-Body.php"); ?>

    <!-- Start The Footer -->
</div>
    <!-- End The Footer-->

    <!-- Start The Links Files -->
    <?php include ("Links javascript Dashbored.php"); ?>
    <script src="./Javascript-Files/action-emplyeer.js"></script>

    <!-- <script type="text/javascript" src="Javascript-Files/Main-index-Page.js"></script> -->
    <!-- End The Links Files -->
    <script>
        $(document).ready(function() {
            $('#BTN_Deactivate_User').on('click', function() {
                //$("#BTN_Deactivate_User").attr("disabled", "disabled");
                var user_id = $('#hiddenDelete').val();
                $.ajax({
                    url: "Datebase/Action-By-Ajax/User-Mangement/Deactivate-User-Status.php",
                    type: "POST",
                    data: {
                        User_ID: user_id
                    },
                    cache: false,
                    success: function(dataResult) {
                        alert('Success Deactivate User Status');
                        //console.log(dataResult);
                    }
                });
            })
        })
    </script>
</body>

</html>