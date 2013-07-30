<?php 

include 'config.php';

$email = (isset($_POST['email']) && $_POST['email']!='') ? $_POST['email'] : 'noemail@dontreply.com';
$name = $_POST['name'];
$phone = $_POST['phone'];
$from_message = $_POST['message'];
$message = "You have recived a message from ".$name."\nPhone Number: ".$phone."\nEmail: ".$email."\nMessage: ".$from_message;


$validate = _validate($name, $phone, $email, $from_message);
if($validate!==true)
{
	$arr = array(	'type' => 'fail',
					'name' => $validate['name'],
					'details' => $validate['details']);
	print json_encode($arr);
}else {
	mail_utf8($to_email, $email, 'Info Request', $message, $email_config);
	print json_encode(array('type'=>'success'));
}
function _validate($name, $phone, $email, $message)
{
	$errors = array('name'=>NULL, 'details'=>NULL);
	if($name=='')
	{
		$errors['name']='name';
		$errors['details']='Name Required';
		return $errors;
	}
	if($message=='')
	{
		$errors['name']='message';
		$errors['details']='Message Required';
		return $errors;
	}
	if($phone!='')
	{
		if(!preg_match("/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/", $phone) ) {
			$errors['name']='phone';
			$errors['details']='Invalid Phone';
			return $errors;
		}
	}
	if(!check_email_address($email))
	{
		$errors['name']='email';
		$errors['details']='Invalid Email';
		return $errors;
	}	
	else {
		return true;	
	}
}

function mail_utf8($to, $from, $subject = '', $body = '', $email_config)
{
    require_once "Mail.php";

    $headers = array ('From' => $from,
      'To' => $to,
      'Subject' => $subject);
    $smtp = Mail::factory('smtp', $email_config);

    $mail = $smtp->send($to, $headers, $body);

    if (PEAR::isError($mail)) {
      echo json_encode(array("error"=>$mail->getMessage())); 
     } 
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