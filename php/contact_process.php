<?php 

include 'config.php';

$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$from_message = $_POST['message'];
$message = "You have recived a message from ".$name."<br />Phone Number: ".$phone."<br />Email: <a href=\"".$email."\">".$email."</a><br />Message: ".$from_message;

$validate = _validate($phone, $email);
die($validate);
if($validate!=true)
{
	echo $validate;
}else {
	//mail_utf8($to_email, $name, $email, $message);
	echo $validate . 'DUUDE';
}
function _validate($phone, $email)
{
	if(!preg_match("/^([1]-)?[0-9]{3}-[0-9]{3}-[0-9]{4}$/i", $phone) ) {
		return 'Invalid Phone';
	}
	else if(!check_email_address($email))
	{
		return 'Invalid Email';
	}	
	else {
		return true;	
	}
}

function mail_utf8($to, $from_user, $from_email, $subject = '', $message = '')
{ 
	$from_user = "=?UTF-8?B?".base64_encode($from_user)."?=";
    $subject = "=?UTF-8?B?".base64_encode($subject)."?=";

    $headers = "From: $from_user <$from_email>\r\n". 
               "MIME-Version: 1.0" . "\r\n" . 
               "Content-type: text/html; charset=UTF-8" . "\r\n"; 

    return mail($to, $subject, $message, $headers); 
}

function check_email_address($data, $strict = false) 
{ 
	$regex = $strict? '/^([.0-9a-z_-]+)@(([0-9a-z-]+\.)+[0-9a-z]{2,4})$/i' : '/^([*+!.&#$¦\'\\%\/0-9a-z^_`{}=?~:-]+)@(([0-9a-z-]+\.)+[0-9a-z]{2,4})$/i' ; 
	if (preg_match($regex, trim($data), $matches)) { 
		return array($matches[1], $matches[2]); 
	} else { 
		return false; 
	} 
}