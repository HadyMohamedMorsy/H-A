<?php
    $Current_Date = date('Y/m/d');
    $Current_Time = date('h:i:s A');
    $Current_Date_And_Time = $Current_Date . ' ' . $Current_Time;
    $Alert_Message = array();
    $SQL_Products_List = 'SELECT * FROM ha_products WHERE HA_P_Status = "Active" OR HA_P_Status = "Pending" ORDER BY HA_P_ID DESC ';
    $Result_Products_List = mysqli_query($Connection,$SQL_Products_List);
    $Count_Products_List  = mysqli_num_rows($Result_Products_List);
?>