<?php
    $db_server = 'localhost:3307';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'db_business';
    $db_conn = '';

    try{
        $db_conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }catch(mysqli_sql_exception){
        echo "Couldn't connected!";
    }
?>