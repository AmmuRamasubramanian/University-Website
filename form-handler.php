<?php 
$name=$_POST['name'];
$visitorEmail=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='info@yourWebsite.com';

$email_subject='New Form Submission';

$email_body="User Name: $name .\n".
             "User Email:$email .\n".
            "subject:$subject .\n".
            "message:$message .\n";

$to='sivagnanasowndarya@gmail.com'

$headers="From: $email_from \r\n";

$headers .="Reply To: $visitorEmail \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:contactUs.html");
?>
