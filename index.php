<?php     
$to_email ='henry.fgc@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: service@fgc.com.tw';
mail($to_email,$subject,$message,$headers);
?>