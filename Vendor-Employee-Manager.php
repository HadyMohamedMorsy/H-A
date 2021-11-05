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

<script>
    // Active User Status
    $('#BTN_Active_User').on('click', function() {
            //$("#BTN_Active_User").attr("disabled", "disabled");
            var user_id = $('#DoneDelete').val();
            $.ajax({
                url: "Datebase/Action-By-Ajax/User-Mangement/Active-User-Status.php",
                type: "POST",
                data: {
                    User_ID: user_id
                },
                cache: false,
                success: function(Data ,Status ,XHR) {
                    // console.log(JSON.parse(Data));console.log(Status);console.log(XHR);
                    if (XHR.status == 200) {
                        if (JSON.parse(Data).User_Status == "Active") {
                            let row = document.querySelector('#T_Row_' + user_id).children[4];
                            row.innerHTML = JSON.parse(Data).User_Status;
                            document.querySelector('#A' + user_id).remove();
                            $("#Alert_Message").show('slow').delay(5000).fadeOut();
                            document.getElementById("Alert_Message").innerHTML = '<div class="alert alert-success fade show" role="alert" style="font-family: Kufi Normal;text-align: right;" dir="rtl"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="text-align: left;float:left"><span aria-hidden="true">×</span></button><h4><i class="fas fa-check-circle"></i> نجاح العمليه </h4><hr> تم تغير الحاله الى نشط , و تفعيل المستخدم بنجاح </div>';
                        }
                    }
                }
            });
    });
    // Deactive User Status
    $(document).ready(function(){
        let table = $('#example').DataTable();
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
                    success: function(Data ,Status ,XHR) {
                        // console.log(JSON.parse(Data));console.log(Status);console.log(XHR);
                        if (XHR.status == 200) {
                            if (JSON.parse(Data).User_Status == "Deactivated") {
                                let row = document.querySelector('#T_Row_' + user_id).children[4];
                                row.innerHTML = JSON.parse(Data).HA_U_User_Status;
                                document.querySelector('#D' + user_id).remove();
                                let hay = document.querySelector('#T_Row_' + user_id);
                                table.row($(hay)).remove().draw(false);
                                $("#Alert_Message").show('slow').delay(5000).fadeOut();
                                document.getElementById("Alert_Message").innerHTML = '<div class="alert alert-success fade show" role="alert" style="font-family: Kufi Normal;text-align: right;" dir="rtl"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="text-align: left;float:left"><span aria-hidden="true">×</span></button><h4><i class="fas fa-check-circle"></i> نجاح العمليه </h4><hr> تم تغير الحاله الى معطل , و حذف المستخدم بنجاح </div>';
                            }
                        }
                    }
                });
            });
    });
    // Fun Deleated Row For Deactivted User Status
    (function Removerow(){
        let stats = document.querySelectorAll('.Status');
        stats.forEach((item)=>{
            if(item.innerHTML == "Deactivated"){
                item.parentElement.remove();
            }
        });
    })();
</script>