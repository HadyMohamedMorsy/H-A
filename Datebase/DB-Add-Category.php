<?php
    $Current_Date = date('Y/m/d');
    $Current_Time = date('h:i:s A');
    $Current_Date_And_Time = $Current_Date . ' ' . $Current_Time;
    $Alert_Message = array();
    $SQL_Category_Parent = 'SELECT * FROM ha_category_list WHERE HA_C_L_Parent_ID = "" ORDER BY HA_C_L_ID DESC ';
    $Result_Category_Parent = mysqli_query($Connection,$SQL_Category_Parent);
    $Count_Category_Parent  = mysqli_num_rows($Result_Category_Parent);

    if (isset($_POST['BTN_Insert_Category'])) {
        $Input_Category_Name = $_POST['Input_Category_Name'];
        if ($Input_Category_Name == '') {
            $Alert_Message[] = 'Input_Category_Name Must Be Not Empty';
        }
        if (empty($Alert_Message)) {
            if (isset($_POST['Checkbox'])) {
                $Parent_ID = $_POST['Parent_ID'];
                if ($Parent_ID == '') {
                    $Alert_Message[] = 'Parent_ID Must Be Not Empty';
                }
                if (empty($Alert_Message)) {
                    $SQL_Check_Category_Name = 'SELECT * FROM ha_category_list WHERE HA_C_L_Category_Name = "'.$Input_Category_Name.'" AND HA_C_L_Parent_ID = "'.$Parent_ID.'"';
                    $Result_Check_Category_Name = mysqli_query($Connection,$SQL_Check_Category_Name);
                    $Count_Check_Category_Name = mysqli_num_rows($Result_Check_Category_Name);
                    if ($Count_Check_Category_Name > 0 ) {
                        $Alert_Message[] = 'Product Name Alerdy Exist';
                    }else {
                        if (empty($Alert_Message)) {
                            $SQL_Insert_New_Category = 'INSERT INTO ha_category_list (
                                                                                        HA_C_L_Category_Name, 
                                                                                        HA_C_L_Parent_ID,
                                                                                        HA_C_L_Status,
                                                                                        HA_C_L_Count_Products, 
                                                                                        HA_C_L_Count_Sales,
                                                                                        HA_C_L_Count_Returns,
                                                                                        HA_C_L_Date_Created, 
                                                                                        HA_C_L_Time_Created, 
                                                                                        HA_C_L_User_ID_Created
                                                                                        ) 
                                                            VALUES (
                                                                "'.$Input_Category_Name.'", 
                                                                "'.$Parent_ID.'",
                                                                "Active", 
                                                                "0", 
                                                                "0", 
                                                                "0", 
                                                                "'.$Current_Date.'", 
                                                                "'.$Current_Time.'",
                                                                "'.$_SESSION['HA_U_ID'].'"
                                                                )';
                            if ( mysqli_query($Connection,$SQL_Insert_New_Category) ) {
                                $Alert_Message[] = 'Good, Category Is Insert';
                                //header("Refresh: 0;");
                            }else {
                                echo 'sory';
                            }
                        }
                    }
                }
            }else {
                $SQL_Check_Category_Name = 'SELECT * FROM ha_category_list WHERE HA_C_L_Category_Name = "'.$Input_Category_Name.'" AND HA_C_L_Parent_ID = ""';
                $Result_Check_Category_Name = mysqli_query($Connection,$SQL_Check_Category_Name);
                $Count_Check_Category_Name = mysqli_num_rows($Result_Check_Category_Name);
                if ($Count_Check_Category_Name > 0 ) {
                    $Alert_Message[] = 'Product Name Alerdy Exist';
                }else {
                    if (empty($Alert_Message)) {
                        $SQL_Insert_New_Category = 'INSERT INTO ha_category_list (
                                                                                    HA_C_L_Category_Name, 
                                                                                    HA_C_L_Parent_ID,
                                                                                    HA_C_L_Status,
                                                                                    HA_C_L_Count_Products, 
                                                                                    HA_C_L_Count_Sales,
                                                                                    HA_C_L_Count_Returns,
                                                                                    HA_C_L_Date_Created, 
                                                                                    HA_C_L_Time_Created, 
                                                                                    HA_C_L_User_ID_Created
                                                                                    ) 
                                                        VALUES (
                                                            "'.$Input_Category_Name.'", 
                                                            "",
                                                            "Active", 
                                                            "0", 
                                                            "0", 
                                                            "0", 
                                                            "'.$Current_Date.'", 
                                                            "'.$Current_Time.'",
                                                            "'.$_SESSION['HA_U_ID'].'"
                                                            )';
                        if ( mysqli_query($Connection,$SQL_Insert_New_Category) ) {
                            $Alert_Message[] = 'Good, Category Is Insert';
                            //header("Refresh: 0;");
                        }else {
                            echo 'sory';
                        }
                    }
                }
            }
        }
    }
?>