<?php
if(isset($_POST["name"]))
{	
	$to = "rockz.suman.kumar@gmail.com";
	$subject = "MAIL FROM Noodle 'N You SITE";
	$txt= "New message from ".$_POST["name"]."\n\n".$_POST["msg"].
		"\n\nSender Details : \n".$_POST["name"]."\n".$_POST["mail"]."\n".$_POST["phone"];
	
$headers = 'From: noodlenyou@noodlenyou.com' . "\r\n" . 
    'Reply-To: contact@noodlenyou.com' . "\r\n" . 
    'X-Mailer: PHP/' . phpversion(); 
	if(mail($to,$subject,$txt,$headers)==true)
		echo "Sent";
	else
		echo "Failed";
}
?>