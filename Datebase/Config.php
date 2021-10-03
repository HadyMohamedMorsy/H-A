<?php
    session_start();  
    // Change this to your connection info.
    $DATABASE_HOST = 'remotemysql.com'; 
    $DATABASE_USER = 'pXTbMHDknr';
    $DATABASE_PASS = '84s2FH89CR';
    $DATABASE_NAME = 'pXTbMHDknr';

    /*
        // Localhost Connection //
        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'root';
        $DATABASE_PASS = '';
        $DATABASE_NAME = 'ha';
    */

    date_default_timezone_set('Africa/Cairo');
    // Try and connect using the info above.
    $Connection = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    mysqli_set_charset( $Connection, 'utf8');

    if ( mysqli_connect_errno() ) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }
    // echo $_SERVER["REQUEST_URI"];
    // echo '<br>';
    // echo parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    // echo '<br>';
    // echo $_SERVER["PHP_SELF"];
?>