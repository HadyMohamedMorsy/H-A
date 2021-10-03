<?php
    $Current_Date = date('Y/m/d');
    $Current_Time = date('h:i:s A');
    $Current_Date_And_Time = $Current_Date . ' ' . $Current_Time;
    $Alert_Message = array();
    $Allowed_File_Extensions = array('jpg','jpeg','png');
    $Maximum_File_Size = 1024000;
    // Get Category
    $SQL_Category_List = 'SELECT * FROM ha_category_list WHERE HA_C_L_Status = "Active" AND HA_C_L_Parent_ID != "" ORDER BY HA_C_L_Parent_ID DESC ';
    $Result_Category_List = mysqli_query($Connection,$SQL_Category_List);
    $Count_Category_List  = mysqli_num_rows($Result_Category_List);
    if (isset($_POST['BTN_Add_Product'])) {
        $Input_Product_Name                 = $_POST['Input_Product_Name'];
        $Input_Product_Price                = $_POST['Input_Product_Price'];
        $Input_Product_Description          = $_POST['Input_Product_Description'];
        $Product_Category_Value             = $_POST['Product_Category_Value'];
        $Input_Product_Qty                  = $_POST['Input_Product_Qty'];
        $Input_Product_Alert_Qty            = $_POST['Input_Product_Alert_Qty'];
        $Input_Product_Available_From_Date  = $_POST['Input_Product_Available_From_Date'];
        $Input_Product_Brand                = $_POST['Input_Product_Brand'];
        // Cover IMG Varible
        $Uploaded_File_Cover                = $_FILES['File_Product_Cover'];
        $Img_Name_Cover  = $Uploaded_File_Cover['name'];
        $Img_Type_Cover  = $Uploaded_File_Cover['type'];
        $Img_Temp_Cover  = $Uploaded_File_Cover['tmp_name'];
        $Img_Error_Cover = $Uploaded_File_Cover['error'];
        $Img_Size_Cover  = $Uploaded_File_Cover['size'];
        // Imges Varible
        $Uploaded_File_Imges                = $_FILES['File_Product_Imges'];
        $Imgs_Name_Imges  = $Uploaded_File_Imges['name'];
        $Imgs_Type_Imges  = $Uploaded_File_Imges['type'];
        $Imgs_Temp_Imges  = $Uploaded_File_Imges['tmp_name'];
        $Imgs_Error_Imges = $Uploaded_File_Imges['error'];
        $Imgs_Size_Imges  = $Uploaded_File_Imges['size'];
        $Imges_Files_Count = count($Imgs_Name_Imges);
        
        if ($Input_Product_Name == '') {
            $Alert_Message[] = 'Input_Product_Name Is Empty';
        }
        if ($Input_Product_Price == '') {
            $Alert_Message[] = 'Input_Product_Price Is Empty';
        }
        if ($Input_Product_Description == '') {
            $Alert_Message[] = 'Input_Product_Description Is Empty';
        }
        if ($Product_Category_Value == '') {
            $Alert_Message[] = 'Product_Category_Value Is Empty';
        }
        if ($Input_Product_Qty == '') {
            $Alert_Message[] = 'Input_Product_Qty Is Empty';
        }
        if ($Input_Product_Alert_Qty == '') {
            $Alert_Message[] = 'Input_Product_Alert_Qty Is Empty';
        }
        if ($Input_Product_Available_From_Date == '') {
            $Input_Product_Available_From_Date = $Current_Date_And_Time;
        }
        if ($Input_Product_Brand == '') {
            $Input_Product_Brand = 'N/A';
        }
        if ($Img_Error_Cover == 4) {
            $Alert_Message[] = 'File_Product_Cover Is Empty';
        }
        // Cover Check
        $Extension = explode('.',$Img_Name_Cover);
        $File_Extensions = strtolower(end($Extension)) ;
        if (!in_array($File_Extensions,$Allowed_File_Extensions) AND $Img_Error_Cover !== 4) {
            $Alert_Message[] = '<div class="alert alert-danger fade show" role="alert" style="font-family: Kufi Normal;text-align: right;" dir="rtl">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="text-align: left;float:left">
                                <span aria-hidden="true">×</span>
                            </button>
                            <h4><i class="fas fa-exclamation-circle"></i> خطاء فى الصوره </h4>
                            <hr> يبدور ان هذا الملف ليس صوره 
                            <hr> '.$Img_Name_Cover.'
                        </div>';
        }else {
            if ($Img_Size_Cover > $Maximum_File_Size ) {
                $Alert_Message[] = '<div class="alert alert-danger fade show" role="alert" style="font-family: Kufi Normal;text-align: right;" dir="rtl">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="text-align: left;float:left">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4><i class="fas fa-exclamation-circle"></i> خطاء فى الصوره </h4>
                                <hr> يبدو ان اسم هذه الصوره اكبر من '. number_format( $Maximum_File_Size / 1024 / 1024) .' ميجا بايت
                                <hr> '.$Img_Name_Cover.'
                            </div>';
            }
        }
        // Imges Check
        if ($Imges_Files_Count > 0) {
            for ($i=0; $i < $Imges_Files_Count; $i++) {
                $Extensions = explode('.',$Imgs_Name_Imges[$i]);
                $Files_Extensions = strtolower(end($Extensions)) ;
                if (!in_array($Files_Extensions,$Allowed_File_Extensions)) {
                    $Alert_Message[] = '<div class="alert alert-danger fade show" role="alert" style="font-family: Kufi Normal;text-align: right;" dir="rtl">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="text-align: left;float:left">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <h4><i class="fas fa-exclamation-circle"></i> خطاء فى الصوره </h4>
                                    <hr> يبدور ان هذا الملف ليس صوره 
                                    <hr> '.$Imgs_Name_Imges[$i].'
                                </div>';
                }else {
                    if ($Imgs_Size_Imges[$i] > $Maximum_File_Size) {
                        $Alert_Message[] = '<div class="alert alert-danger fade show" role="alert" style="font-family: Kufi Normal;text-align: right;" dir="rtl">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="text-align: left;float:left">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <h4><i class="fas fa-exclamation-circle"></i> خطاء فى الصوره </h4>
                                        <hr> يبدو ان اسم هذه الصوره اكبر من '. number_format( $Maximum_File_Size / 1024 / 1024) .' ميجا بايت
                                        <hr> '.$Imgs_Name_Imges[$i].'
                                    </div>';
                    }
                }
            }
        }
        /**********************************************************************************************************************************************************************/
        if (empty($Alert_Message)) {
            $SQL_Get_Last_Product_Number = 'SELECT HA_P_ID FROM ha_products ORDER BY HA_P_ID DESC LIMIT 1';
            $Result_Get_Last_Product_Number = mysqli_query($Connection,$SQL_Get_Last_Product_Number);
            $Row_Get_Last_Product_Number  = mysqli_fetch_array($Result_Get_Last_Product_Number, MYSQLI_ASSOC);
            if (empty($Row_Get_Last_Product_Number)) {
                $Next_Product_ID = 1 ;
            }else {
                $Next_Product_ID = $Row_Get_Last_Product_Number['HA_P_ID'] +1;
            }
            $Path_Dir = 'IMG/Imges-Products/';
            $Folder_Name = 'P_ID-'.$Next_Product_ID;
            $Cover_Folder_Creat = $Folder_Name.'-Cover';
            $IMGS_Folder_Creat = $Folder_Name.'-IMGS';
            $SQL_Add_Product = 'INSERT INTO ha_products (
                                                            HA_P_Name,
                                                            HA_P_Price,
                                                            HA_P_Description,
                                                            HA_P_Category_ID,
                                                            HA_P_Qty,
                                                            HA_P_Alert_Qty,
                                                            HA_P_Brand,
                                                            HA_P_Available_From_Date,
                                                            HA_P_Date_Created,
                                                            HA_P_Time_Created,
                                                            HA_P_User_ID_Created,
                                                            HA_P_Status
                                                            )
                                                VALUES (    "'.$Input_Product_Name.'",
                                                            "'.$Input_Product_Price.'",
                                                            "'.$Input_Product_Description.'",
                                                            "'.$Product_Category_Value.'",
                                                            "'.$Input_Product_Qty.'",
                                                            "'.$Input_Product_Alert_Qty.'",
                                                            "'.$Input_Product_Brand.'",
                                                            "'.$Input_Product_Available_From_Date.'",
                                                            "'.$Current_Date.'",
                                                            "'.$Current_Time.'",
                                                            "'.$_SESSION['HA_U_ID'].'",
                                                            "Pending"
                                                        )';
            if (empty($Alert_Message) AND mysqli_query($Connection,$SQL_Add_Product)) {
                if ( !is_dir( $Path_Dir.$Folder_Name.'/'.$Cover_Folder_Creat ) AND !is_dir( $Path_Dir.$Folder_Name.'/'.$IMGS_Folder_Creat)) {
                    mkdir($Path_Dir.$Folder_Name, 0700); // Make Folder 
                    mkdir( $Path_Dir . $Folder_Name . '/' . $Cover_Folder_Creat , 0700 ); // Make Folder 
                    mkdir( $Path_Dir . $Folder_Name . '/' . $IMGS_Folder_Creat , 0700 ); // Make Folder 
                    move_uploaded_file($Img_Temp_Cover, $Path_Dir.$Folder_Name . '/' . $Cover_Folder_Creat  . '/' . 'ImgCover' . '.' . $File_Extensions);
                    if ($Imges_Files_Count > 0) {
                        for ($i=0; $i < $Imges_Files_Count; $i++) {
                            move_uploaded_file($Imgs_Temp_Imges[$i], $Path_Dir .$Folder_Name .'/'.$IMGS_Folder_Creat . '/' .  $i  . '.' . $Files_Extensions);
                        }
                        // $Alert_Message[] = '<div class="alert alert-success fade show" role="alert" style="font-family: Kufi Normal;text-align: right;" dir="rtl">
                        //                         <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="text-align: left;float:left">
                        //                             <span aria-hidden="true">×</span>
                        //                         </button>
                        //                         <h4><i class="fas fa-check-circle"></i> نجاح العمليه 1</h4>
                        //                         <hr> تم رفع الصور بنجاح 
                        //                     </div>';
                    }
                }else {
                    move_uploaded_file($Img_Temp_Cover, $Path_Dir.$Folder_Name . '/' . $Cover_Folder_Creat  . '/' . 'ImgCover' . '.' . $File_Extensions);
                    if ($Imges_Files_Count > 0) {
                        for ($i=0; $i < $Imges_Files_Count; $i++) {
                            move_uploaded_file($Imgs_Temp_Imges[$i], $Path_Dir .$Folder_Name .'/'.$IMGS_Folder_Creat . '/' .  $i  . '.' . $Files_Extensions);
                        }
                        // $Alert_Message[] = '<div class="alert alert-success fade show" role="alert" style="font-family: Kufi Normal;text-align: right;" dir="rtl">
                        //                         <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="text-align: left;float:left">
                        //                             <span aria-hidden="true">×</span>
                        //                         </button>
                        //                         <h4><i class="fas fa-check-circle"></i> نجاح العمليه </h4>
                        //                         <hr> تم رفع الصور بنجاح 
                        //                     </div>';
                    }
                }
                $Alert_Message[] = '<div class="alert alert-success fade show" role="alert" style="font-family: Kufi Normal;text-align: right;" dir="rtl">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="text-align: left;float:left">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <h4><i class="fas fa-check-circle"></i> نجاح العمليه </h4>
                                        <hr> تم رفع المنتج الى الاداره بنجاح وبأنتظار الموافقه. 
                                    </div>';
            }else {
                $Alert_Message[] = 'Error Cant Insert Data ';
            }
        }
        /**********************************************************************************************************************************************************************/
    }
?>