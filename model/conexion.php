<?php

try{
    /*
    $cleardb_server = "localhost";
    $cleardb_username = "root";
    $cleardb_password = "";
    $cleardb_db = "jgandica_recbd";*/
    
    //Get Heroku ClearDB connection information
    
    $cleardb_server = "us-cdbr-east-04.cleardb.com";
    $cleardb_username = "b8d66d0a2ba985";
    $cleardb_password = "6098f6f8";
    $cleardb_db = "heroku_d3ef385f7a7a5ae";
    
    $active_group = 'default';
    $query_builder = TRUE;
    // Connect to DB
    $conexion = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
    
} catch (PDOException $error){
    echo 'Conection error: ' . $error->getMessage();
}
