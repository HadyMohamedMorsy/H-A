<?php
    $Current_Date = date('Y/m/d');
    $Current_Time = date('h:i:s A');
    $Current_Date_And_Time = $Current_Date . ' ' . $Current_Time;
    $Alert_Message = array();
    // Product Info..
    $SQL_Products_List = 'SELECT * FROM ha_products WHERE HA_P_Status = "Active" OR HA_P_Status = "Pending" ORDER BY HA_P_ID DESC ';
    $Result_Products_List = mysqli_query($Connection,$SQL_Products_List);
    $Count_Products_List  = mysqli_num_rows($Result_Products_List);
    // Category List
    $SQL_Category_List = 'SELECT * FROM ha_category_list WHERE HA_C_L_Status = "Active" AND HA_C_L_Parent_ID != "" ORDER BY HA_C_L_ID DESC ';
    $Result_Category_List = mysqli_query($Connection,$SQL_Category_List);
    $Count_Category_List  = mysqli_num_rows($Result_Category_List);
?>