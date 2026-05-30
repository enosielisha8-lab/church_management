<?php


// credentiall
$host = "localhost";
$username = "root";
$password = "";
$dbname = "church_management";

//connecting 
$conn = mysqli_connect($host, $username, $password, $dbname);

if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}

if(isset($_POST['login'])){


$usname = $_POST['username'];
$pasw = $_POST['pword'];

$sql = "SELECT * FROM  users WHERE username = '$usname' AND pasword = '$pasw'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    header("Location:MainPage.html");
}else{
    echo "Invalid username or password please rechekii again";
}


}


?>