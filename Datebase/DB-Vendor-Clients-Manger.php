<?php
    $Current_Date = date('Y/m/d');
    $Current_Time = date('h:i:s A');
    $Current_Date_And_Time = $Current_Date . ' ' . $Current_Time;
    $Alert_Message = array();
    $SQL_Clients_Info = 'SELECT * FROM ha_users WHERE HA_U_User_Type = "Client" AND HA_U_User_Status != "Deactivated" ORDER BY HA_U_ID DESC ';
    $Result_Clients_Info = mysqli_query($Connection,$SQL_Clients_Info);
    $Count_Clients_Info  = mysqli_num_rows($Result_Clients_Info);
    if (isset($_POST['BTN_Active'])) {
        $SQL_GET_USER_STATUS = 'SELECT HA_U_User_Status FROM ha_users WHERE HA_U_ID = "'.$_POST['Active_ID'].'"';
        $Result_GET_USER_STATUS = mysqli_query($Connection,$SQL_GET_USER_STATUS);
        $Row_GET_USER_STATUS  = mysqli_fetch_array($Result_GET_USER_STATUS, MYSQLI_ASSOC);  

        $SQL_Active_User = 'UPDATE ha_users
                            SET HA_U_User_Status = "Active"
                            WHERE HA_U_ID = "'. $_POST['Active_ID'].'"';
        $SQL_Insert_Status_Active = 'INSERT INTO ha_user_status_activities (HA_U_S_A_User_ID, HA_U_S_A_Current_Status,HA_U_S_A_New_Status, HA_U_S_A_Action_From_User_ID,HA_U_S_A_Status_Reason,HA_U_S_A_Date_Created,HA_U_S_A_Time_Created)
        VALUES ("'.$_POST['Active_ID'].'","'.$Row_GET_USER_STATUS['HA_U_User_Status'].'", "Active", "'.$_SESSION['HA_U_ID'].'","Null","'.$Current_Date.'","'.$Current_Time.'")';
        if (mysqli_query($Connection,$SQL_Active_User) AND mysqli_query($Connection,$SQL_Insert_Status_Active)) {
            header("Refresh: 0;");
        }
    }
    if (isset($_POST['BTN_Deactivate'])) {
        $SQL_GET_USER_STATUS = 'SELECT HA_U_User_Status FROM ha_users WHERE HA_U_ID = "'.$_POST['Deactivate_ID'].'"';
        $Result_GET_USER_STATUS = mysqli_query($Connection,$SQL_GET_USER_STATUS);
        $Row_GET_USER_STATUS  = mysqli_fetch_array($Result_GET_USER_STATUS, MYSQLI_ASSOC);  

        $SQL_Active_User = 'UPDATE ha_users
                            SET HA_U_User_Status = "Deactivated"
                            WHERE HA_U_ID = "'. $_POST['Deactivate_ID'].'"';
        $SQL_Insert_Status_Deactivated = 'INSERT INTO ha_user_status_activities (HA_U_S_A_User_ID, HA_U_S_A_Current_Status,HA_U_S_A_New_Status, HA_U_S_A_Action_From_User_ID,HA_U_S_A_Status_Reason,HA_U_S_A_Date_Created,HA_U_S_A_Time_Created)
        VALUES ("'.$_POST['Deactivate_ID'].'","'.$Row_GET_USER_STATUS['HA_U_User_Status'].'", "Deactivated", "'.$_SESSION['HA_U_ID'].'","Null","'.$Current_Date.'","'.$Current_Time.'")';
        if (mysqli_query($Connection,$SQL_Active_User) AND mysqli_query($Connection,$SQL_Insert_Status_Deactivated)) {
            header("Refresh: 0;");
        }
    }
?>