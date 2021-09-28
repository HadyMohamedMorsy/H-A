<?php
    $Current_Date = date('Y/m/d');
    $Current_Time = date('h:i:s A');
    $Current_Date_And_Time = $Current_Date . ' ' . $Current_Time;
    $Alert_Message = array();
    $SQL_Seller_Info = 'SELECT * FROM ha_users WHERE HA_U_User_Type = "Client" ORDER BY HA_U_ID DESC ';
    $Result_Seller_Info = mysqli_query($Connection,$SQL_Seller_Info);
    $Count_Seller_Info  = mysqli_num_rows($Result_Seller_Info);
?>