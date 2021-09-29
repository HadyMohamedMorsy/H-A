<?php
    $Current_Date = date('Y/m/d');
    $Current_Time = date('h:i:s A');
    $Current_Date_And_Time = $Current_Date . ' ' . $Current_Time;
    $Alert_Message = array();
    $SQL_Clients_Info = 'SELECT * FROM ha_users WHERE HA_U_User_Type = "Client" ORDER BY HA_U_ID DESC ';
    $Result_Clients_Info = mysqli_query($Connection,$SQL_Clients_Info);
    $Count_Clients_Info  = mysqli_num_rows($Result_Clients_Info);
?>