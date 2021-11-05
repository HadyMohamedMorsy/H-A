<?php
    include('Datebase/Config.php');
    include('Datebase/DB_Products_List.php');
?>
<?php
    if ($_SESSION['HA_U_P_Products_List'] !== 'Available') {
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
    <link rel="stylesheet" href="./CSS-Files/product-list.css">
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <!-- Start The Header -->
            <?php include ("Website-Structure/Dashbored-header.php"); ?>
            <!-- End The Header-->

            <?php include ("./Website-Structure/Products-List-Body.php"); ?>

            <!-- Start The Footer -->
        </div>
    </div>
</div>

    <!-- End The Footer-->

    <!-- Start The Links Files -->
    <?php include ("Links javascript Dashbored.php"); ?>
    <script src="./Javascript-Files/action-product-list.js"></script>
    <!-- <script type="text/javascript" src="Javascript-Files/Main-index-Page.js"></script> -->
    <!-- End The Links Files -->
</body>

</html>



<script>
    // Active User Status
    $('#BTN_Active_Product').on('click', function() {
        //$("#BTN_Active_User").attr("disabled", "disabled");
        var product_id = $('#DoneDelete').val();
        $.ajax({
            url: "Datebase/Action-By-Ajax/Product-Mangement/Active-Product-Status.php",
            type: "POST",
            data: {
                Product_ID: product_id
            },
            cache: false,
            success: function(Data ,Status ,XHR) {
                // console.log(JSON.parse(Data).Product_Status); console.log(Status); console.log(XHR.status);
                if (XHR.status == 200) {
                    if (JSON.parse(Data).Product_Status == "Active") {
                        let row = document.querySelector('#T_Row_' + product_id).children[6];
                        row.innerHTML = JSON.parse(Data).Product_Status;
                        document.querySelector('#A' + product_id).remove();
                        //let hay = document.querySelector('#T_Row_' + product_id);
                        // table.row($(hay)).remove().draw(false);
                        $("#Alert_Message").show('slow').delay(5000).fadeOut();
                        document.getElementById("Alert_Message").innerHTML = '<div class="alert alert-success fade show" role="alert" style="font-family: Kufi Normal;text-align: right;" dir="rtl"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="text-align: left;float:left"><span aria-hidden="true">×</span></button><h4><i class="fas fa-check-circle"></i> نجاح العمليه </h4><hr> تم تغير الحاله الى تنشيط , و تفعيل المنتج بنجاح </div>';
                    }
                }
            }
        });
    });
    // Deactive Product Status
    $(document).ready(function(){
        let table = $('#example').DataTable();
        $('#BTN_Deactivate_Product').on('click', function() {
            //$("#BTN_Deactivate_Product").attr("disabled", "disabled");
            var product_id = $('#hiddenDelete').val();
            $.ajax({
                url: "Datebase/Action-By-Ajax/Product-Mangement/Deactivate-Product-Status.php",
                type: "POST",
                data: {
                    Product_ID: product_id
                },
                cache: false,
                success: function(Data ,Status ,XHR) {
                    // console.log(JSON.parse(Data).Product_Status); console.log(Status); console.log(XHR.status);
                    if (XHR.status == 200) {
                        if (JSON.parse(Data).Product_Status == "Deactivated") {
                            let row = document.querySelector('#T_Row_' + product_id).children[6];
                            row.innerHTML = JSON.parse(Data).Product_Status;
                            document.querySelector('#D' + product_id).remove();
                            let hay = document.querySelector('#T_Row_' + product_id);
                            table.row($(hay)).remove().draw(false);
                            $("#Alert_Message").show('slow').delay(5000).fadeOut();
                            document.getElementById("Alert_Message").innerHTML = '<div class="alert alert-success fade show" role="alert" style="font-family: Kufi Normal;text-align: right;" dir="rtl"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="text-align: left;float:left"><span aria-hidden="true">×</span></button><h4><i class="fas fa-check-circle"></i> نجاح العمليه </h4><hr> تم تغير الحاله الى معطل , و حذف المنتج بنجاح </div>';
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