<?php
ini_set("SMTP","mail.Yourdomain.com");
ini_set("smtp_port", "25");
ini_set("sendmail_from","validemail@yourdoaim.com");


$to ="aaa@aa.com";
$from = "bb@bb.com";
$subject ="this is test mail";
$message = "<a href=''>this is the message</a>";
$message = wordwrap($message, 70, '\r\n');
$headers = "Content-type: text/html;charset-iso-8859-1\r\nFrom:$from\r\nCc:dd@email.com\r\n";


$send = mail($to,$subject,$message,$headers);
echo $send;
?>

