<?php
    $Current_Date = date('Y/m/d');
    $Current_Time = date('h:i:s A');
    $Current_Date_And_Time = $Current_Date . ' ' . $Current_Time;
    $Alert_Message = array();
    include('../../Config.php');
    $Product_ID   =   $_POST['Product_ID'];
    $SQL_GET_Product_STATUS = 'SELECT HA_P_Status FROM ha_products WHERE HA_P_ID = "'.$Product_ID.'"';
    $Result_GET_Product_STATUS = mysqli_query($Connection,$SQL_GET_Product_STATUS);
    $Row_GET_Product_STATUS  = mysqli_fetch_array($Result_GET_Product_STATUS, MYSQLI_ASSOC);
    $SQL_Insert_Activities_Status_Active = '  INSERT INTO ha_product_status_activities (HA_P_S_A_Product_ID, 
                                                                                        HA_P_S_A_Current_Status,
                                                                                        HA_P_S_A_New_Status, 
                                                                                        HA_P_S_A_Action_From_User_ID,
                                                                                        HA_P_S_A_Status_Reason,
                                                                                        HA_P_S_A_Date_Created,
                                                                                        HA_P_S_A_Time_Created)
                                        VALUES ("'.$Product_ID.'",
                                                "'.$Row_GET_Product_STATUS['HA_P_Status'].'", 
                                                "Active", 
                                                "'.$_SESSION['HA_U_ID'].'",
                                                "Null",
                                                "'.$Current_Date.'",
                                                "'.$Current_Time.'")';
    $SQL_Change_Status_Product_Active = '  UPDATE ha_products
                    SET HA_P_Status = "Active"
                    WHERE HA_P_ID = "'.$Product_ID.'"';
    if (mysqli_query($Connection,$SQL_Insert_Activities_Status_Active) AND mysqli_query($Connection,$SQL_Change_Status_Product_Active)) {
        $SQL_GET_Product_INFO_AFTER_ACTION  = 'SELECT HA_P_Status AS Product_Status FROM ha_products WHERE HA_P_ID = "'.$Product_ID.'"';
        $RESULT_GET_Product_INFO_AFTER_ACTION  = mysqli_query($Connection,$SQL_GET_Product_INFO_AFTER_ACTION);
        $ROW_GET_Product_INFO_AFTER_ACTION  = mysqli_fetch_array($RESULT_GET_Product_INFO_AFTER_ACTION, MYSQLI_ASSOC);
        // echo '<pre>';
        echo (json_encode($ROW_GET_Product_INFO_AFTER_ACTION));
        // echo '<pre>';
    }
?>