<?php
    $Current_Date = date('Y/m/d');
    $Current_Time = date('h:i:s A');
    $Current_Date_And_Time = $Current_Date . ' ' . $Current_Time;
    $Alert_Message = array();
    $SQL_GET_My_Wishlist = 'SELECT * FROM ha_wishlist WHERE HA_W_User_ID = "'.$_SESSION['HA_U_ID'].'" AND HA_W_Status = "Active" ORDER BY HA_W_ID DESC ';
    $Result_GET_My_Wishlist = mysqli_query($Connection,$SQL_GET_My_Wishlist);
    $Count_GET_My_Wishlist  = mysqli_num_rows($Result_GET_My_Wishlist);
?>