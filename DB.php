<?php
    namespace Medoo;
    session_start();
    require 'Medoo.php';

    $database = new Medoo([
        // [required]
        'type' => 'mysql',
        'host' => 'remotemysql.com:3306',
        'database' => 'BIYx7soDWk',
        'username' => 'BIYx7soDWk',
        'password' => 'Ix1Nqj5hhM'
    ]);
    date_default_timezone_set("America/Costa_Rica");
    $date = date('Y-m-d H:i:s');
    
?>