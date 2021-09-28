<?php
    $Current_Date = date('Y/m/d');
    $Current_Time = date('h:i:s A');
    $Current_Date_And_Time = $Current_Date . ' ' . $Current_Time;
    $Alert_Message = array();
    if (isset($_POST['BTN_Login'])) {
        $Input_Username = $_POST['Input_Username'];
        $Input_Password = $_POST['Input_Password'];
        if (empty($Input_Username) OR $Input_Username == '') {
            // $Alert_Message[] = '  <div class="alert alert-danger fade show" role="alert" style="font-family: Kufi Normal;text-align: right;" dir="rtl">
            //                         <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="text-align: left;float:left">
            //                             <span aria-hidden="true">×</span>
            //                         </button>
            //                         <h4><i class="fas fa-exclamation-circle"></i> اسم المستخدم </h4>
            //                         <hr> يجب ان يكون  اسم المستخدم غير فارغ
            //                     </div>';
            echo '<script> alert("Empty Username")</script>';
        }
        if (empty($Input_Password) OR $Input_Password == '') {
            // $Alert_Message[] = '  <div class="alert alert-danger fade show" role="alert" style="font-family: Kufi Normal;text-align: right;" dir="rtl">
            //                         <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="text-align: left;float:left">
            //                             <span aria-hidden="true">×</span>
            //                         </button>
            //                         <h4><i class="fas fa-exclamation-circle"></i> الرقم السرى </h4>
            //                         <hr> يجب ان يكون  الرقم السرى غير فارغ
            //                     </div>';
            echo '<script> alert("Empty Password")</script>';
        }
        if (empty($Alert_Message)) {
            $SQL_Login = 'SELECT * FROM ha_users WHERE HA_U_Username = "'.$Input_Username.'" AND HA_U_Password = "'.$Input_Password.'"';
            $Result_Login = mysqli_query($Connection,$SQL_Login);
            $Row_Login  = mysqli_fetch_array($Result_Login, MYSQLI_ASSOC);  
            $Count_Login  = mysqli_num_rows($Result_Login); 
            if ($Count_Login == 1) {
                $_SESSION['HA_U_ID']                = $Row_Login['HA_U_ID'];
                $_SESSION['HA_U_Username']          = $Row_Login['HA_U_Username'];
                $_SESSION['HA_U_First_Name']        = $Row_Login['HA_U_First_Name'];
                $_SESSION['HA_U_Second_Name']       = $Row_Login['HA_U_Second_Name'];
                $_SESSION['HA_U_Last_Name']         = $Row_Login['HA_U_Last_Name'];
                $_SESSION['User_First_Three_Names'] = $Row_Login['HA_U_First_Name'] . ' ' . $Row_Login['HA_U_Second_Name'] . ' ' . $Row_Login['HA_U_Last_Name'] ;
                $_SESSION['HA_U_User_Type']         = $Row_Login['HA_U_User_Type'];
                $_SESSION['HA_P_Permission_Seller_Manager']     = $Row_Login['HA_P_Permission_Seller_Manager'];
                $_SESSION['HA_P_Permission_Clients_Manager']    = $Row_Login['HA_P_Permission_Clients_Manager'];
                $_SESSION['HA_P_Permission_Employee_Manager']   = $Row_Login['HA_P_Permission_Employee_Manager'];
                $SQL_Update_Last_Login = 'UPDATE ha_users SET HA_U_Last_Login = "'.$Current_Date_And_Time.'" WHERE HA_U_ID = "'.$_SESSION['HA_U_ID'].'"';
                if (mysqli_query($Connection,$SQL_Update_Last_Login)) {
                    header("Refresh: 0;");
                }
                //echo '<script> alert("Login Succsess \r\nWelcome '.$_SESSION['User_First_Three_Names'].'")</script>';
                // echo $_SESSION['User_First_Three_Names'];
                // header('Location: index.php'); 
                // echo '<pre>';
                // print_r($_SESSION);
                // echo '</pre>';
            }else {
                // $Alert_Message[] = '<div class="alert alert-danger fade show" role="alert" style="font-family: Kufi Normal;text-align: right;" dir="rtl">
                //                         <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="text-align: left;float:left">
                //                             <span aria-hidden="true">×</span>
                //                         </button>
                //                         <h4><i class="fas fa-exclamation-circle"></i> اسم المستخدم او الرقم السرى </h4>
                //                         <hr> يبدو ان اسم المستخدم او الرقم السرى خطأ
                //                     </div>';
                echo '<script> alert("Wrong Username Or Password")</script>';
            }
        }
    }
?>