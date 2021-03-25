<?php

$name = $_POST['name'];
$visitor_mail = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comments'];

$email_from = 'rasikashirke1010@gmail.com';
$email_subject = "Contact Information";
$email_body = "User Name : $name.\n".
              "Email id : $visitor_mail.\n".
              "Mobile Number : $mobile.\n".
              "Comment : $comment.\n";
$to = "rajshirke108@gmail.com";
$headers = "from $email_from ";

mail($to,$email_subject,$email_body,$headers);
header("Location: index.php")

 ?>
