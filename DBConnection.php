<?php

//  VARIABLES USED TO STORE CONNECTION INTO DATABASE
$host = "localhost";
$dbname = "church_management";
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "";

}catch(PDOException $e){
    echo "FAILED TO CONNECT TO DATABASES".$e->getMessage();
}

?>