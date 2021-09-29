<?php
    $Current_Date = date('Y/m/d');
    $Current_Time = date('h:i:s A');
    $Current_Date_And_Time = $Current_Date . ' ' . $Current_Time;
    $Alert_Message = array();
    $SQL_Category_List = 'SELECT * FROM ha_category_list WHERE HA_C_L_Status = "Active" AND HA_C_L_Parent_ID != "" ORDER BY HA_C_L_ID DESC ';
    $Result_Category_List = mysqli_query($Connection,$SQL_Category_List);
    $Count_Category_List  = mysqli_num_rows($Result_Category_List);
?>