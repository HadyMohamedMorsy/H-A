<?php
    $Current_Date = date('Y/m/d');
    $Current_Time = date('h:i:s A');
    $Current_Date_And_Time = $Current_Date . ' ' . $Current_Time;
    $Alert_Message = array();

    // GET Four Top Product Info..
    $SQL_Products_Top_Views = 'SELECT * FROM ha_products WHERE HA_P_Status = "Active" ORDER BY HA_P_Views DESC LIMIT 4';
    $Result_Products_Top_Views  = mysqli_query($Connection,$SQL_Products_Top_Views);
    $Count_Products_Top_Views   = mysqli_num_rows($Result_Products_Top_Views);
?>