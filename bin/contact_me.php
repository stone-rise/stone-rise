<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];

// create email body and send it
$to = 'taiti@stone-rise.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "お問い合わせメール Form:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "HPからお問い合わせがありました。\n\n以下メッセージです。\n\n form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@stone-rise.com\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>