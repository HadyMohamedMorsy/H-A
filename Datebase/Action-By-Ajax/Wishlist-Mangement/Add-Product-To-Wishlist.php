<?php
    $Current_Date = date('Y/m/d');
    $Current_Time = date('h:i:s A');
    $Current_Date_And_Time = $Current_Date . ' ' . $Current_Time;
    $Alert_Message = array();
    include('../../Config.php');
    $Product_ID   =   $_POST['Product_ID'];

    $SQL_Check_In_Wishlist = 'SELECT * FROM ha_wishlist WHERE HA_W_User_ID = "'.$_SESSION['HA_U_ID'].'" AND HA_W_Product_ID = "'.$Product_ID.'"';
    $Result_Check_In_Wishlist = mysqli_query($Connection,$SQL_Check_In_Wishlist);
    $Row_Check_In_Wishlist  = mysqli_fetch_array($Result_Check_In_Wishlist, MYSQLI_ASSOC);

    if (empty($Row_Check_In_Wishlist)) {
        $SQL_Add_Product_To_Wishlist = 'INSERT INTO ha_wishlist (   HA_W_User_ID, 
                                                                    HA_W_Status,
                                                                    HA_W_Product_ID,
                                                                    HA_W_Date_Created, 
                                                                    HA_W_Time_Created)
                                                        VALUE (     "'.$_SESSION['HA_U_ID'].'",
                                                                    "Active",
                                                                    "'.$Product_ID.'",
                                                                    "'.$Current_Date.'",
                                                                    "'.$Current_Time.'")';
        if (mysqli_query($Connection,$SQL_Add_Product_To_Wishlist)) {
            $SQL_GET_Product_INFO_AFTER_ACTION  = 'SELECT * FROM ha_wishlist WHERE HA_W_Product_ID = "'.$Product_ID.'" AND HA_W_User_ID = "'.$_SESSION['HA_U_ID'].'"';
            $RESULT_GET_Product_INFO_AFTER_ACTION  = mysqli_query($Connection,$SQL_GET_Product_INFO_AFTER_ACTION);
            $ROW_GET_Product_INFO_AFTER_ACTION  = mysqli_fetch_array($RESULT_GET_Product_INFO_AFTER_ACTION, MYSQLI_ASSOC);
            // echo '<pre>';
            echo (json_encode($ROW_GET_Product_INFO_AFTER_ACTION));
            // echo '<pre>';
        }
    }else {
        if ($Row_Check_In_Wishlist['HA_W_Status'] == 'Active') {
            $SQL_Change_Status_Wishlist = '   UPDATE ha_wishlist
                                                        SET HA_W_Status = "Deleted" , HA_W_Date_Created = "'.$Current_Date.'" , HA_W_Time_Created = "'.$Current_Time.'"
                                                        WHERE HA_W_Product_ID = "'.$Product_ID.'"';
            if (mysqli_query($Connection,$SQL_Change_Status_Wishlist)) {
                $SQL_Check_In_Wishlist_After_Action = 'SELECT * FROM ha_wishlist WHERE HA_W_User_ID = "'.$_SESSION['HA_U_ID'].'" AND HA_W_Product_ID = "'.$Product_ID.'"';
                $Result_Check_In_Wishlist_After_Action = mysqli_query($Connection,$SQL_Check_In_Wishlist_After_Action);
                $Row_Check_In_Wishlist_After_Action  = mysqli_fetch_array($Result_Check_In_Wishlist_After_Action, MYSQLI_ASSOC);
                echo (json_encode($Row_Check_In_Wishlist_After_Action));
            }
        }elseif ($Row_Check_In_Wishlist['HA_W_Status'] == 'Deleted') {
            $SQL_Change_Status_Wishlist = '   UPDATE ha_wishlist
                                                        SET HA_W_Status = "Active" , HA_W_Date_Created = "'.$Current_Date.'" , HA_W_Time_Created = "'.$Current_Time.'"
                                                        WHERE HA_W_Product_ID = "'.$Product_ID.'"';
            if (mysqli_query($Connection,$SQL_Change_Status_Wishlist)) {
                $SQL_Check_In_Wishlist_After_Action = 'SELECT * FROM ha_wishlist WHERE HA_W_User_ID = "'.$_SESSION['HA_U_ID'].'" AND HA_W_Product_ID = "'.$Product_ID.'"';
                $Result_Check_In_Wishlist_After_Action = mysqli_query($Connection,$SQL_Check_In_Wishlist_After_Action);
                $Row_Check_In_Wishlist_After_Action  = mysqli_fetch_array($Result_Check_In_Wishlist_After_Action, MYSQLI_ASSOC);
                echo (json_encode($Row_Check_In_Wishlist_After_Action));
            }
        }
    }
?>