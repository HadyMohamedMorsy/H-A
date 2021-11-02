<?php
    include('Datebase/Config.php');
    include('Datebase/DB-Vendor-Clients-Manger.php');
?>
<?php
    if ($_SESSION['HA_U_P_Clients_Manager'] !== 'Available') {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<?php
    $Page_Title = 'Clients Manager';
    include ('Website-Structure/Header-Elemnts.php') ;
?>
    <!-- Start The Links Files -->
    <?php include ("./Links Header With Tables.php"); ?>
    <link rel="stylesheet" href="./CSS-Files/clients.css">
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <!-- Start The Header -->
            <?php include ("Website-Structure/Dashbored-header.php"); ?>
            <!-- End The Header-->

            <?php include ("./Website-Structure/Vendor-Clients-Manager-Body.php"); ?>

            <!-- Start The Footer -->
        </div>
    </div>
</div>
    <!-- End The Footer-->

    <!-- Start The Links Files -->
    <?php include ("Links javascript Dashbored.php"); ?>
    <script src="./Javascript-Files/action-clients.js"></script>
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
                success: function(dataResult) {
                    // alert('Success Deactivate User Status');
                    // console.log(dataResult);
                    $.get('Datebase/Action-By-Ajax/User-Mangement/GET-User-After-Action.php?User_ID=' + user_id, function (Data ,Status ,XHR) {
                        // console.log(JSON.parse(Data).HA_U_User_Status);
                        // console.log(Status);
                        // console.log(XHR.status);
                        if (XHR.status == 200) {
                            if (JSON.parse(Data).HA_U_User_Status == "Active") {
                                let row = document.querySelector('#T_Row_' + user_id).children[5];
                                row.innerHTML = JSON.parse(Data).HA_U_User_Status;
                                document.querySelector('#A' + user_id).remove();
                                //let hay = document.querySelector('#T_Row_' + user_id);
                                // table.row($(hay)).remove().draw(false);
                            }
                        }else{
                            // Code
                        }
                    });
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
                    success: function(dataResult) {
                        // alert('Success Deactivate User Status');
                        // console.log(dataResult);
                        $.get('Datebase/Action-By-Ajax/User-Mangement/GET-User-After-Action.php?User_ID=' + user_id, function (Data ,Status ,XHR) {
                            // console.log(JSON.parse(Data).HA_U_User_Status);
                            // console.log(Status);
                            // console.log(XHR.status);
                            if (XHR.status == 200) {
                                if (JSON.parse(Data).HA_U_User_Status == "Deactivated") {
                                    let row = document.querySelector('#T_Row_' + user_id).children[4];
                                    row.innerHTML = JSON.parse(Data).HA_U_User_Status;
                                    document.querySelector('#D' + user_id).remove();
                                    let hay = document.querySelector('#T_Row_' + user_id);
                                    table.row($(hay)).remove().draw(false);
                                }
                            }else{
                                // Code
                            }
                        });
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