<?php 
include("dbconnect.php");


$name = $_REQUEST['name'];
$email =$_REQUEST['email'];
$website=$_REQUEST['website'];
$message=$_REQUEST['message'];


$to= 'azzabbruce@gmail.com';
$subject = 'You have just recieved a message through your website';
$message = "$name said: $message"
$mail($to, $subject, $message, 'From:'. $email)

    echo 'Thank you for filling out the form.<br/>';
    echo 'I will get in touch with you as soon as possible!';
    
    $query=mysqli_query($db_connect, "INSERT INTO clients(name,email.website,message) VALUES ('$name','$email','$website', '$message')") or die(mysqli_error)($db_connect));

mysqli_close($db_connect);

header("location:index.html?note=success");
?>