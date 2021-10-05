<?php
    $Current_Date = date('Y/m/d');
    $Current_Time = date('h:i:s A');
    $Current_Date_And_Time = $Current_Date . ' ' . $Current_Time;
    $Alert_Message = array();
    // User Info..
    $SQL_User_Info = 'SELECT * FROM ha_users WHERE HA_U_ID = "'.$_SESSION['HA_U_ID'].'"';
    $Result_User_Info = mysqli_query($Connection,$SQL_User_Info);
    $Row_User_Info  = mysqli_fetch_array($Result_User_Info, MYSQLI_ASSOC);  
    $Count_User_Info  = mysqli_num_rows($Result_User_Info);
?>