<?php
    $Current_Date = date('Y/m/d');
    $Current_Time = date('h:i:s A');
    $Current_Date_And_Time = $Current_Date . ' ' . $Current_Time;
    $Alert_Message = array();

    include('../../Config.php');
    $User_ID   =   $_POST['User_ID'];

    $SQL_GET_USER_STATUS = 'SELECT HA_U_User_Status FROM ha_users WHERE HA_U_ID = "'.$User_ID.'"';
    $Result_GET_USER_STATUS = mysqli_query($Connection,$SQL_GET_USER_STATUS);
    $Row_GET_USER_STATUS  = mysqli_fetch_array($Result_GET_USER_STATUS, MYSQLI_ASSOC);

    $SQL_Insert_Activities_Status_Deactivated = '  INSERT INTO ha_user_status_activities ( HA_U_S_A_User_ID, 
                                                                                HA_U_S_A_Current_Status,
                                                                                HA_U_S_A_New_Status, 
                                                                                HA_U_S_A_Action_From_User_ID,
                                                                                HA_U_S_A_Status_Reason,
                                                                                HA_U_S_A_Date_Created,
                                                                                HA_U_S_A_Time_Created)
                                        VALUES ("'.$User_ID.'",
                                                "'.$Row_GET_USER_STATUS['HA_U_User_Status'].'", 
                                                "Active", 
                                                "'.$_SESSION['HA_U_ID'].'",
                                                "Null",
                                                "'.$Current_Date.'",
                                                "'.$Current_Time.'")';
    $SQL_Change_Status_User_Deactivate = '  UPDATE ha_users
                    SET HA_U_User_Status = "Active"
                    WHERE HA_U_ID = "'.$User_ID.'"';
    if (mysqli_query($Connection,$SQL_Insert_Activities_Status_Deactivated) AND mysqli_query($Connection,$SQL_Change_Status_User_Deactivate)) {
        # code...
    }
?>