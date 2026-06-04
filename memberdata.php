<?php

//variables
$host = "localhost";
$dbname = "church_management";
$username = "root";
$psd = "";

try{
    $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $psd);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM members";

    $stm = $pdo->query($sql);
    
    
    
    echo "Connection successfull to databse ready to fetch data";
}catch(PDOException $e){
    echo "Failed to connect to database check this error ".$e->getMessage();
}

?>