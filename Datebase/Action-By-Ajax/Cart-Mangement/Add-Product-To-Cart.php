<?php
    $Current_Date = date('Y/m/d');
    $Current_Time = date('h:i:s A');
    $Current_Date_And_Time = $Current_Date . ' ' . $Current_Time;
    $Alert_Message = array();
    include('../../Config.php');
    $Product_ID   = $_POST['Product_ID'];
    // Set Product Info In Array
    $Products_Details_JSON = array();
    // Product Info..
    $SQL_Products_List = 'SELECT * FROM ha_products WHERE HA_P_ID = "'.$Product_ID.'" AND HA_P_Status = "Active"';
    $Result_Products_List = mysqli_query($Connection,$SQL_Products_List);
    $Row_Products_List  = mysqli_fetch_array($Result_Products_List, MYSQLI_ASSOC);
    $Count_Products_List  = mysqli_num_rows($Result_Products_List);
    if ($Count_Products_List > 0) {
        // Get All Product In Cart
        $SQL_Check_In_Cart = 'SELECT * FROM ha_cart WHERE HA_C_User_ID = "'.$_SESSION['HA_U_ID'].'" AND HA_C_Product_ID = "'.$Product_ID.'" AND HA_C_Status != "Purchased"';
        $Result_Check_In_Cart = mysqli_query($Connection,$SQL_Check_In_Cart);
        $Row_Check_In_Cart  = mysqli_fetch_array($Result_Check_In_Cart, MYSQLI_ASSOC);
        $Count_Check_In_Cart  = mysqli_num_rows($Result_Check_In_Cart);
        if (!empty($Row_Check_In_Cart)) {
            $SQL_Add_One_More_To_Qty = '  UPDATE ha_cart
                                                    SET HA_C_Qty = "'.($Row_Check_In_Cart['HA_C_Qty'] + 1).'"
                                                    WHERE HA_C_ID = "'.$Row_Check_In_Cart['HA_C_ID'].'"';
            if (mysqli_query($Connection,$SQL_Add_One_More_To_Qty)) {
                $SQL_GET_Product_Info_After_Action = 'SELECT * FROM ha_cart WHERE HA_C_User_ID = "'.$_SESSION['HA_U_ID'].'" AND HA_C_Status != "Purchased"';
                $Result_GET_Product_Info_After_Action = mysqli_query($Connection,$SQL_GET_Product_Info_After_Action);
                $Row_GET_Product_Info_After_Action  = mysqli_fetch_array($Result_GET_Product_Info_After_Action, MYSQLI_ASSOC);
                // Product Info
                $SQL_Get_Product_Info = 'SELECT HA_P_ID AS Product_ID , HA_P_Name AS Product_Name FROM ha_products WHERE HA_P_ID = "'.$Row_GET_Product_Info_After_Action['HA_C_Product_ID'].'"';
                $Result_Get_Product_Info = mysqli_query($Connection,$SQL_Get_Product_Info);
                $Row_Get_Product_Info  = mysqli_fetch_array($Result_Get_Product_Info, MYSQLI_ASSOC);
                // Get Img Path
                $Path_Cover_For_Scan = '../../../IMG/Imges-Products/P_ID-' . $Row_Get_Product_Info['Product_ID'] . '/' . 'P_ID-' . $Row_Get_Product_Info['Product_ID'] . '-Cover';
                $Path_Cover = 'IMG/Imges-Products/P_ID-' . $Row_Get_Product_Info['Product_ID'] . '/' . 'P_ID-' . $Row_Get_Product_Info['Product_ID'] . '-Cover';
                $i = 0;
                $Products_Details_JSON[$i] = $Row_GET_Product_Info_After_Action;
                $Products_Details_JSON[$i]['Product_Name'] = $Row_Get_Product_Info['Product_Name'];
                $Products_Details_JSON[$i]['Product_ID'] = $Row_Get_Product_Info['Product_ID'];
                $Products_Details_JSON[$i]['Product_Path_Cover_Img'] =  $Path_Cover ;
                // Cover Chechk is folder exiest
                if(is_dir($Path_Cover_For_Scan)){
                    $Cover_Product = scandir($Path_Cover_For_Scan);
                    $Products_Details_JSON[$i]['Product_Path_Cover_Img'] =  $Path_Cover ;
                    $Products_Details_JSON[$i]['Product_Cover'] =  $Cover_Product[2] ;
                }
                while ($Rows = mysqli_fetch_assoc($Result_GET_Product_Info_After_Action)) {
                    $i ++;
                    $SQL_Get_Product_Info_Two = 'SELECT HA_P_ID AS Product_ID , HA_P_Name AS Product_Name FROM ha_products WHERE HA_P_ID = "'.$Rows['HA_C_Product_ID'].'"';
                    $Result_Get_Product_Info_Two = mysqli_query($Connection,$SQL_Get_Product_Info_Two);
                    $Row_Get_Product_Info_Two  = mysqli_fetch_array($Result_Get_Product_Info_Two, MYSQLI_ASSOC);
                    $Products_Details_JSON[$i] = $Rows;
                    $Products_Details_JSON[$i]['Product_Name'] = $Row_Get_Product_Info_Two['Product_Name'];
                    $Products_Details_JSON[$i]['Product_ID'] = $Row_Get_Product_Info_Two['Product_ID'];
                    // Get Img Path
                    $Path_Cover_For_Scan_Two = '../../../IMG/Imges-Products/P_ID-' . $Row_Get_Product_Info_Two['Product_ID'] . '/' . 'P_ID-' . $Row_Get_Product_Info_Two['Product_ID'] . '-Cover';
                    $Path_Cover_Two = 'IMG/Imges-Products/P_ID-' . $Row_Get_Product_Info_Two['Product_ID'] . '/' . 'P_ID-' . $Row_Get_Product_Info_Two['Product_ID'] . '-Cover';
                    // Cover Chechk is folder exiest
                    if(is_dir($Path_Cover_For_Scan_Two)){
                        $Cover_Product_Two = scandir($Path_Cover_For_Scan_Two);
                        $Products_Details_JSON[$i]['Product_Path_Cover_Img'] =  $Path_Cover_Two;
                        $Products_Details_JSON[$i]['Product_Cover'] =  $Cover_Product_Two[2];
                    }
                }
                echo (json_encode($Products_Details_JSON,JSON_PRETTY_PRINT));
            }
        }elseif (empty($Row_Check_In_Cart)) {
            $SQL_Insert_Activities_Status_Active = '  INSERT INTO ha_cart ( HA_C_User_ID, 
                                                                            HA_C_Product_ID,
                                                                            HA_C_Qty, 
                                                                            HA_C_Unit_Price,
                                                                            HA_C_Date_Created,
                                                                            HA_C_Time_Created,
                                                                            HA_C_Status)
                                            VALUES ("'.$_SESSION['HA_U_ID'].'",
                                                    "'.$Product_ID.'", 
                                                    "1", 
                                                    "'.$Row_Products_List['HA_P_Price'].'",
                                                    "'.$Current_Date.'",
                                                    "'.$Current_Time.'",
                                                    "Pending")';
            if (mysqli_query($Connection,$SQL_Insert_Activities_Status_Active)) {
                $SQL_GET_Product_Info_After_Action = 'SELECT * FROM ha_cart WHERE HA_C_User_ID = "'.$_SESSION['HA_U_ID'].'" AND HA_C_Status != "Purchased"';
                $Result_GET_Product_Info_After_Action = mysqli_query($Connection,$SQL_GET_Product_Info_After_Action);
                $Row_GET_Product_Info_After_Action  = mysqli_fetch_array($Result_GET_Product_Info_After_Action, MYSQLI_ASSOC);
                // Product Info
                $SQL_Get_Product_Info = 'SELECT HA_P_ID AS Product_ID , HA_P_Name AS Product_Name FROM ha_products WHERE HA_P_ID = "'.$Row_GET_Product_Info_After_Action['HA_C_Product_ID'].'"';
                $Result_Get_Product_Info = mysqli_query($Connection,$SQL_Get_Product_Info);
                $Row_Get_Product_Info  = mysqli_fetch_array($Result_Get_Product_Info, MYSQLI_ASSOC);
                // Get Img Path
                $Path_Cover_For_Scan = '../../../IMG/Imges-Products/P_ID-' . $Row_Get_Product_Info['Product_ID'] . '/' . 'P_ID-' . $Row_Get_Product_Info['Product_ID'] . '-Cover';
                $Path_Cover = 'IMG/Imges-Products/P_ID-' . $Row_Get_Product_Info['Product_ID'] . '/' . 'P_ID-' . $Row_Get_Product_Info['Product_ID'] . '-Cover';
                $i = 0;
                $Products_Details_JSON[$i] = $Row_GET_Product_Info_After_Action;
                $Products_Details_JSON[$i]['Product_Name'] = $Row_Get_Product_Info['Product_Name'];
                $Products_Details_JSON[$i]['Product_ID'] = $Row_Get_Product_Info['Product_ID'];
                $Products_Details_JSON[$i]['Product_Path_Cover_Img'] =  $Path_Cover ;
                // Cover Chechk is folder exiest
                if(is_dir($Path_Cover_For_Scan)){
                    $Cover_Product = scandir($Path_Cover_For_Scan);
                    $Products_Details_JSON[$i]['Product_Path_Cover_Img'] =  $Path_Cover ;
                    $Products_Details_JSON[$i]['Product_Cover'] =  $Cover_Product[2] ;
                }
                while ($Rows = mysqli_fetch_assoc($Result_GET_Product_Info_After_Action)) {
                    $i ++;
                    $SQL_Get_Product_Info_Two = 'SELECT HA_P_ID AS Product_ID , HA_P_Name AS Product_Name FROM ha_products WHERE HA_P_ID = "'.$Rows['HA_C_Product_ID'].'"';
                    $Result_Get_Product_Info_Two = mysqli_query($Connection,$SQL_Get_Product_Info_Two);
                    $Row_Get_Product_Info_Two  = mysqli_fetch_array($Result_Get_Product_Info_Two, MYSQLI_ASSOC);
                    $Products_Details_JSON[$i] = $Rows;
                    $Products_Details_JSON[$i]['Product_Name'] = $Row_Get_Product_Info_Two['Product_Name'];
                    $Products_Details_JSON[$i]['Product_ID'] = $Row_Get_Product_Info_Two['Product_ID'];
                    // Get Img Path
                    $Path_Cover_For_Scan_Two = '../../../IMG/Imges-Products/P_ID-' . $Row_Get_Product_Info_Two['Product_ID'] . '/' . 'P_ID-' . $Row_Get_Product_Info_Two['Product_ID'] . '-Cover';
                    $Path_Cover_Two = 'IMG/Imges-Products/P_ID-' . $Row_Get_Product_Info_Two['Product_ID'] . '/' . 'P_ID-' . $Row_Get_Product_Info_Two['Product_ID'] . '-Cover';
                    // Cover Chechk is folder exiest
                    if(is_dir($Path_Cover_For_Scan_Two)){
                        $Cover_Product_Two = scandir($Path_Cover_For_Scan_Two);
                        $Products_Details_JSON[$i]['Product_Path_Cover_Img'] =  $Path_Cover_Two;
                        $Products_Details_JSON[$i]['Product_Cover'] =  $Cover_Product_Two[2];
                    }
                }
                echo (json_encode($Products_Details_JSON,JSON_PRETTY_PRINT));
            }
        }
    }
?>