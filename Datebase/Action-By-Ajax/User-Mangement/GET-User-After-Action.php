<?php
    $Current_Date = date('Y/m/d');
    $Current_Time = date('h:i:s A');
    $Current_Date_And_Time = $Current_Date . ' ' . $Current_Time;
    $Alert_Message = array();

    include('../../Config.php');

    $User_ID   =   $_GET['User_ID'];

    $SQL_GET_USER_INFO_AFTER_ACTION  = 'SELECT * FROM ha_users WHERE HA_U_ID = "'.$User_ID.'"';

    $RESULT_GET_USER_INFO_AFTER_ACTION  = mysqli_query($Connection,$SQL_GET_USER_INFO_AFTER_ACTION);

    $ROW_GET_USER_INFO_AFTER_ACTION  = mysqli_fetch_array($RESULT_GET_USER_INFO_AFTER_ACTION, MYSQLI_ASSOC);

    //echo ' Good ' .$Row_GET_USER_STATUS['HA_U_Username'];

    // echo '<pre>';
    echo (json_encode($ROW_GET_USER_INFO_AFTER_ACTION));
    // echo '<pre>';
    //echo "<script>console.log(JSON.parse('" . json_encode($Row_GET_USER_STATUS) . "'));</script>";

?>