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
    <link rel="stylesheet" href="CSS-Files/shop.css">
    <!-- End The Links Files -->
<body>

    <!-- Start The Header -->
    <?php include ("Website-Structure/Header.php"); ?>
    <!-- End The Header-->

    <?php include ("Website-Structure/product-Body.php"); ?>

    <!-- Start The Footer -->
    <?php include ("Website-Structure/Footer.php"); ?>
    <!-- End The Footer-->

    <!-- Start The Links Files -->
    <?php include ("Links Javascript In Footer Area.php"); ?>
    <script src="./Javascript-Files/product.js"></script>
    <!-- <script type="text/javascript" src="Javascript-Files/Main-index-Page.js"></script> -->
    <!-- End The Links Files -->
</body>

</html>

<script>
    function funcId(Product_ID_To_Wishlist){
        // alert(Product_ID_To_Wishlist);
        $.ajax({
            url: "Datebase/Action-By-Ajax/Wishlist-Mangement/Add-Product-To-Wishlist.php",
            type: "POST",
            data: {
                Product_ID: Product_ID_To_Wishlist
            },
            cache: false,
            success: function(Data ,Status ,XHR) {
                console.log(JSON.parse(Data));console.log(Status);console.log(XHR);
                if (XHR.status == 200) {
                    if (JSON.parse(Data).HA_W_Status == "Active") {
                        alert('Status : ' + JSON.parse(Data).HA_W_Status + ' - ID : ' + Product_ID_To_Wishlist);
                        //  let row = document.querySelector('#T_Row_' + user_id).children[5];
                        //  row.innerHTML = JSON.parse(Data).User_Status;
                        //  document.querySelector('#A' + user_id).remove();
                        //  $("#Alert_Message").show('slow').delay(5000).fadeOut();
                        //  document.getElementById("Alert_Message").innerHTML = '<div class="alert alert-success fade show" role="alert" style="font-family: Kufi Normal;text-align: right;" dir="rtl"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="text-align: left;float:left"><span aria-hidden="true">×</span></button><h4><i class="fas fa-check-circle"></i> نجاح العمليه </h4><hr> تم تغير الحاله الى نشط , و تفعيل المستخدم بنجاح </div>';
                    }else if(JSON.parse(Data).HA_W_Status == "Deleted"){
                        alert('Status : ' + JSON.parse(Data).HA_W_Status + ' - ID : ' + Product_ID_To_Wishlist);
                    }
                }
            }
        });
    }
</script>