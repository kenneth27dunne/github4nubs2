<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$message = $_POST['message'];

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
//$headers .= 'To: Kenneth <kenneth_27_dunne@msn.com>' . "\r\n";
$headers .= 'From: '.$first_name.' '.$last_name.'  <'.$email.'>' . "\r\n";

$to = "kenneth_27_dunne@msn.com";

mail($to, $subject, $message, $headers);

?>
