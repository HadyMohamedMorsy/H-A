<?php
    $Current_Date = date('Y/m/d');
    $Current_Time = date('h:i:s A');
    $Current_Date_And_Time = $Current_Date . ' ' . $Current_Time;
    $Alert_Message = array();
    if (isset($_POST['BTN_Register'])) {
        $Input_Username = $_POST['Input_Username'];
        $Input_First_Name = $_POST['Input_First_Name'];
        $Input_Second_Name = $_POST['Input_Second_Name'];
        $Input_Last_Name = $_POST['Input_Last_Name'];
        $Input_Password = $_POST['Input_Password'];
        $Input_Re_Password = $_POST['Input_Re_Password'];
        $Input_Country = $_POST['Input_Country'];
        $SQL_Check_User_Name = 'SELECT * FROM ha_users WHERE HA_U_Username = "'.$Input_Username.'"';
        $Result_Check_User_Name = mysqli_query($Connection,$SQL_Check_User_Name);
        $Row_Check_User_Name  = mysqli_fetch_array($Result_Check_User_Name, MYSQLI_ASSOC);  
        $Count_Check_User_Name  = mysqli_num_rows($Result_Check_User_Name);
        if ($Input_Password !== $Input_Re_Password) {
            $Alert_Message[] = 'Error 01';
        }
        if ($Count_Check_User_Name !== 0) {
            $Alert_Message[] = 'Error 02';
        }
        if (empty($Alert_Message)) {
            $SQL_Register_User = 'INSERT INTO ha_users (    
                        HA_U_Username, 
                        HA_U_Password,
                        HA_U_First_Name,
                        HA_U_Second_Name,
                        HA_U_Last_Name,
                        HA_U_Country,
                        HA_U_User_Type,
                        HA_U_Date_Created,
                        HA_U_Time_Created
                        )
            VALUES (    "'.$Input_Username.'",
                        "'.$Input_Password.'",
                        "'.$Input_First_Name.'",
                        "'.$Input_Second_Name.'",
                        "'.$Input_Last_Name.'",
                        "'.$Input_Country.'",
                        "Client",
                        "'.$Current_Date.'",
                        "'.$Current_Time.'"
                        )';
            if (mysqli_query($Connection,$SQL_Register_User)) {
                $SQL_User_Info = 'SELECT * FROM ha_users WHERE HA_U_Username = "'.$Input_Username.'"';
                $Result_User_Info = mysqli_query($Connection,$SQL_User_Info);
                $Row_User_Info  = mysqli_fetch_array($Result_User_Info, MYSQLI_ASSOC);  
                $Count_User_Info  = mysqli_num_rows($Result_User_Info);
                if ($Count_User_Info == 1) {
                    $_SESSION['HA_U_ID']                = $Row_User_Info['HA_U_ID'];
                    $_SESSION['HA_U_Username']          = $Row_User_Info['HA_U_Username'];
                    $_SESSION['HA_U_First_Name']        = $Row_User_Info['HA_U_First_Name'];
                    $_SESSION['HA_U_Second_Name']       = $Row_User_Info['HA_U_Second_Name'];
                    $_SESSION['HA_U_Last_Name']         = $Row_User_Info['HA_U_Last_Name'];
                    $_SESSION['User_First_Three_Names'] = $Row_User_Info['HA_U_First_Name'] . ' ' . $Row_User_Info['HA_U_Second_Name'] . ' ' . $Row_User_Info['HA_U_Last_Name'] ;
                    echo '<script> alert("Register Succsess \r\nWelcome '.$_SESSION['User_First_Three_Names'].'")</script>';
                }
            }
        }
    }
?>