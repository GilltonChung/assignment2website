<?php 
    //Start Session
    session_start();


    //Create Constants to Store Non Repeating Values
    define('SITEURL', 'http://localhost/onlinefood-order/');
    //define('LOCALHOST', 'localhost');
    //define('DB_USERNAME', 'root');
    //define('DB_PASSWORD', '');
    //define('DB_NAME', 'onlinefoodorder');
    
    $conn = mysqli_connect('gilltonassigment2.mysql.databse.azure.com', 'gilltonadmin', 'Jugular59') or die(mysqli_error()); //Database Connection
    $db_select = mysqli_select_db($conn, 'onlinefoodorder') or die(mysqli_error()); //SElecting Database


?>