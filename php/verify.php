<?php
error_reporting(0);
include_once("dbconnect.php");
$useremail = $_GET['email'];

$sql = "UPDATE USER SET VERIFY = '1' WHERE EMAIL = '$useremail'";
if ($conn -> query ($sql) === TRUE){
    echo "Successful. Please Sign In using the Clofident Application.";
}else{
    echo "Error occur";
}

$conn -> close();
?>