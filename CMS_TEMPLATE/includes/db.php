<?php
    $db['db_host']="localhost";
    $db['db_user']="root";
    $db['db_password']="";
    $db['db_name']="cms";
    foreach($db as $name => $value)
    {
        define(strtoupper($name),$value);
    }
    $connection=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    if(!$connection)
    {
        echo"we are connected";
    }
?>