<?php
    $Current_Date = date('Y/m/d');
    $Current_Time = date('h:i:s A');
    $Current_Date_And_Time = $Current_Date . ' ' . $Current_Time;
    $Alert_Message = array();
    if(!empty($_SESSION['HA_U_ID'])){

        // Get All Product In Cart
        $SQL_Check_In_Cart = 'SELECT * FROM ha_cart WHERE HA_C_User_ID = "'.$_SESSION['HA_U_ID'].'" AND HA_C_Status != "Purchased"';
        $Result_Check_In_Cart = mysqli_query($Connection,$SQL_Check_In_Cart);
        // $Row_Check_In_Cart  = mysqli_fetch_array($Result_Check_In_Cart, MYSQLI_ASSOC);
        $Count_Check_In_Cart  = mysqli_num_rows($Result_Check_In_Cart);
        
    }

?>