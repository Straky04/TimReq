<?php
@extract($_POST);
$admin = 'StrakerCraft@outlook.fr' ; // Change to your admin email 'from' address
$subject = stripslashes($subject); //Your email subject
$name = stripslashes($name); //can be stripslashes('name');
$email = stripslashes($email);
// Your HTML message with table, links and images
$message = stripslashes($message);
// To send HTML mail, the Content-type header must be set
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
// Additional headers as http://php.net/manual/en/function.mail.php
$headers .= 'From: Your Name <mail@your-domain.com>' . "\r\n";
//ACTIVE mail below to $admin (you) and $email (the other person)
mail( $admin, "Feedback: $subject", "$name $email", "From: $admin>" );
$send_contact=mail("$name <$email>", "Feedback: $subject", $message, $headers );
if($send_contact){
echo "Thanks," . $name. ", I have sent you an email with the information.";
}
else {
echo "ERROR";
}
?>