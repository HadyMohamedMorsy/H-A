<?php 
    header('Content-Type: json');

    $Current_Date = date('Y/m/d');
    $Current_Time = date('h:i:s A');
    $Current_Date_And_Time = $Current_Date . ' ' . $Current_Time;
    $Alert_Message = array();
    $SQL_Products_Info = '  SELECT  HA_P_ID AS Product_ID,
                                    HA_P_Name AS Product_Name,
                                    HA_P_Price AS Product_Price,
                                    HA_P_Description AS Product_Description,
                                    HA_P_Category_ID AS Product_Category_ID,
                                    HA_P_Qty AS Product_Qty,
                                    HA_P_Alert_Qty AS Product_Alert_Qty,
                                    HA_P_Brand AS Product_Brand,
                                    HA_P_User_ID_Created AS Product_Owner_ID,
                                    HA_P_Status AS Product_Status
                            FROM ha_products 
                            WHERE HA_P_Available_From_Date <= "'.$Current_Date_And_Time.'" AND HA_P_Status = "Active"';
    $Result_Products_Info = mysqli_query($Connection,$SQL_Products_Info);
    $Products_Details_JSON = array();
    $i = 0;
    while ($Rows = mysqli_fetch_assoc($Result_Products_Info)) {
        $Products_Details_JSON[] = $Rows;

        // Get Category Name
        $SQL_Category_Name = 'SELECT HA_C_L_Category_Name FROM ha_category_list WHERE HA_C_L_ID = "'.$Rows['Product_Category_ID'].'"';
        $Result_Category_Name = mysqli_query($Connection,$SQL_Category_Name);
        $Row_Category_Name  = mysqli_fetch_array($Result_Category_Name, MYSQLI_ASSOC);  
        // Get Username Owner
        $SQL_Owner_User = 'SELECT HA_U_Username FROM ha_users WHERE HA_U_ID = "'.$Rows['Product_Owner_ID'].'"';
        $Result_Owner_User = mysqli_query($Connection,$SQL_Owner_User);
        $Row_Owner_User  = mysqli_fetch_array($Result_Owner_User, MYSQLI_ASSOC);

        // Insert Data Key And Value In Json Array
        $Products_Details_JSON[$i]['Product_Category_Name'] = $Row_Category_Name['HA_C_L_Category_Name'] ;
        $Products_Details_JSON[$i]['Product_Username_Created'] = $Row_Owner_User['HA_U_Username'] ;

        // Get Img Path
        $Path_Cover = 'IMG/Imges-Products/P_ID-' . $Rows['Product_ID'] . '/' . 'P_ID-' . $Rows['Product_ID'] . '-Cover/';
        $Path_Imgs = 'IMG/Imges-Products/P_ID-' . $Rows['Product_ID'] . '/' . 'P_ID-' . $Rows['Product_ID'] . '-IMGS/';
        // Cover Chechk is folder exiest
        if(is_dir($Path_Cover)){
            $Cover_Product = scandir($Path_Cover);
            $Products_Details_JSON[$i]['Product_Path_Cover_Img'] =  $Path_Cover ;
            $Products_Details_JSON[$i]['Product_Cover'] =  $Cover_Product[2] ;
        }
        // IMGS Check is folder exiest
        if(is_dir($Path_Imgs)){
            $IMG_Product = scandir($Path_Imgs);
            $Products_Details_JSON[$i]['Product_Path_Imges'] =  $Path_Imgs ;
            $Products_Details_JSON[$i]['Product_Imges'] =  array_slice($IMG_Product,2) ;
        }

        
        $i++;
    }
    echo json_encode($Products_Details_JSON);
?>