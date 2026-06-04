<?php
//variables used for connection to databases
$host = "localhost";
$dbname = "church_management";
$username = "root";
$psd = "";

try{
    $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $psd);
   
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if($_SERVER["REQUEST_METHOD"]=="POST"){

    $full = $_POST["fullname"];
    $phone = $_POST["phonenumber"];
    $gender = $_POST["gender"];
    $dat = $_POST["Date"];

    $sql = "INSERT INTO members (full_name,phone,gender,join_date) VALUES (:a, :b, :c, :d)";

   
   $stm = $pdo->prepare($sql);

   $stm ->execute([
    ':a'=>$full,
    ':b'=>$phone,
    ':c'=>$gender,
    ':d'=>$dat

   ]);
    }
   
   
   
    echo "Connection Successfull to databases you can insert data now";

}catch(PDOException $e){
    echo "Failed to insert data into database. ".$e->getMessage();
}

?>