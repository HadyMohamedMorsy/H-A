<?php
    $Current_Date = date('Y/m/d');
    $Current_Time = date('h:i:s A');
    $Current_Date_And_Time = $Current_Date . ' ' . $Current_Time;
    $Alert_Message = array();
    $Product_ID   = $_GET['Product_ID'];
    $SQL_Product_Details = 'SELECT * FROM ha_products WHERE HA_P_ID = "'.$Product_ID.'"';
    $Result_Product_Details = mysqli_query($Connection,$SQL_Product_Details);
    $Row_Product_Details  = mysqli_fetch_array($Result_Product_Details, MYSQLI_ASSOC);  
    $Count_Product_Details  = mysqli_num_rows($Result_Product_Details);
    $Path_Cover = 'IMG/Imges-Products/P_ID-' . $Row_Product_Details['HA_P_ID'] . '/' . 'P_ID-' . $Row_Product_Details['HA_P_ID'] . '-Cover';
    $Cover_Product = scandir($Path_Cover);
    $Path_Imgs = 'IMG/Imges-Products/P_ID-' . $Row_Product_Details['HA_P_ID'] . '/' . 'P_ID-' . $Row_Product_Details['HA_P_ID'] . '-IMGS';
    $Imgs_Product = scandir($Path_Imgs);
    // Related Product
    $SQL_Related_Products = 'SELECT * FROM ha_products WHERE HA_P_ID != "'.$Row_Product_Details['HA_P_ID'].'" AND HA_P_Category_ID = "'.$Row_Product_Details['HA_P_Category_ID'].'" LIMIT 4';
    $Result_Related_Products = mysqli_query($Connection,$SQL_Related_Products);
    // Comments
    $SQL_Comments_Products = 'SELECT * FROM ha_products_comments WHERE HA_P_C_In_Product_ID = "'.$Row_Product_Details['HA_P_ID'].'" ORDER BY HA_P_C_ID DESC';
    $Result_Comments_Products  = mysqli_query($Connection,$SQL_Comments_Products);
    $Count_Comments_Products  = mysqli_num_rows($Result_Comments_Products);
?>