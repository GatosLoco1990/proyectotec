<?php

try{
    /*
    $cleardb_server = "localhost";
    $cleardb_username = "root";
    $cleardb_password = "";
    $cleardb_db = "jgandica_recbd";*/
    
    //Get Heroku ClearDB connection information
    
    $cleardb_server = "localhost";
    $cleardb_username = "root";
    $cleardb_password = "";
    $cleardb_db = "jgandica_computeck";
    
    $active_group = 'default';
    $query_builder = TRUE;
    // Connect to DB
    $conexion = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
    
} catch (PDOException $error){
    echo 'Conection error: ' . $error->getMessage();
}
