<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// $email_from = 'd.aguirre@jilcapital.com';
// email@domainname
$email_from = 'd.aguirre@jilcapital.com'; 

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";

// $to = 'd.aguirre@jilcapital.com';
$to = 'd.aguirre@jilcapital.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>