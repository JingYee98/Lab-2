<?php
error_reporting(0);
include_once ("dbconnect.php");
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = sha1($_POST['password']);

$sqlinsert = "INSERT INTO USER(NAME,PHONE,EMAIL,PASSWORD,VERIFY) VALUES ('$name','$phone','$email','$password','0')";

if ($conn->query($sqlinsert) === true)
{
    sendEmail($email);
    echo "success";
    
}
else
{
    echo "failed";
}


function sendEmail($useremail) {
    $to      = $useremail; 
    $subject = 'Verification for Clofident'; 
    $message = 'http://albeeneko.com/clofident/verify.php?email='.$useremail;
    $headers = 'From: noreply@clofident.com' . "\r\n" . 
    'Reply-To: '.$useremail . "\r\n" . 
    'X-Mailer: PHP/' . phpversion(); 
    mail($to, $subject, $message, $headers); 
}

?>