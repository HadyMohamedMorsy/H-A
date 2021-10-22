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

    if (isset($_POST['BTN_Edit_Profile'])) {
        $ID = $_POST['ID'];
        $Input_Username = $_POST['Input_Username'];
        $Input_ZIP = $_POST['Input_ZIP'];
        $Input_Address = $_POST['Input_Address'];
        $Input_Mobile_Number = $_POST['Input_Mobile_Number'];
        $Input_Email = $_POST['Input_Email'];
        $Input_First_Name = $_POST['Input_First_Name'];
        $Input_Birthday = $_POST['Input_Birthday'];
        $Input_Country = $_POST['Input_Country'];
        $Input_Gender = $_POST['Input_Gender'];
        $Input_Status = $_POST['Input_Status'];
        $SQL_Modify_User = 'UPDATE ha_users
                            SET HA_U_Username = "'.$Input_Username.'",
                                HA_U_ZIP_Code = "'.$Input_ZIP.'",
                                HA_U_Address = "'.$Input_Address.'",
                                HA_U_Email = "'.$Input_Email.'",
                                HA_U_Mobile_Number = "'.$Input_Mobile_Number.'",
                                HA_U_Birthday = "'.$Input_Birthday.'",
                                HA_U_Country = "'.$Input_Country.'",
                                HA_U_Gender = "'.$Input_Gender.'",
                                HA_U_User_Status = "'.$Input_Status.'"
                            WHERE HA_U_ID = "' . $ID . '"';
        if (mysqli_query($Connection,$SQL_Modify_User)) {
            $Alert_Message[] = '<div class="alert alert-success fade show" role="alert" style="font-family: Kufi Normal;text-align: right;" dir="rtl">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="text-align: left;float:left">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <h4><i class="fas fa-check-circle"></i> نجاح العمليه </h4>
                                    <hr> تم تعديل البيانات بنجاح
                                </div>
                                <script>setTimeout(function() { window.location=window.location;},2000);</script>';
            //header("Refresh: 0;");
        }
    }
?>