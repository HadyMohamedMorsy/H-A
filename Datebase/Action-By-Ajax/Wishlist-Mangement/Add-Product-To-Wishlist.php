<?php
    $Current_Date = date('Y/m/d');
    $Current_Time = date('h:i:s A');
    $Current_Date_And_Time = $Current_Date . ' ' . $Current_Time;
    $Alert_Message = array();
    include('../../Config.php');
    $Product_ID   =   $_POST['Product_ID'];

    $SQL_Add_Product_To_Wishlist = 'INSERT INTO ha_wishlist (   HA_W_User_ID, 
                                                                HA_W_Product_ID,
                                                                HA_W_Date_Created, 
                                                                HA_W_Time_Created)
                                                    VALUE (     "'.$_SESSION[''].'",
                                                                "'.$Product_ID.'",
                                                                "'.$Current_Date.'",
                                                                "'.$Current_Time.'")';

    if (mysqli_query($Connection,$SQL_Add_Product_To_Wishlist)) {
        // Code
    }
?>