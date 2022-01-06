<?php
include("PHPMailer/PHPMailerAutoload.php");
include("config.php");
mb_internal_encoding('UTF-8');

$mail = new PHPMailer();
$mail -> isSMTP();
$mail -> SMTPAuth = true;
$mail -> SMTPSecure = "tsl";
$mail -> Host = "smtp.gmail.com";
$mail -> Port = 587;
$mail -> CharSet = "utf8";

// $mail -> Username = "edwardhsu@inaenergy.com.tw";
// $mail -> Password = "lxiggekdzdacruem";

$mail -> Username = $GMAILUSERNAME;
$mail -> Password = $GMAILPASSWORD;


$mail -> From = "edwardhsu@inaenergy.com.tw";
$mail -> FromName = "EdwardHsu";

$mail -> Subject = "TestForPHPMailer";
$mail -> Body = "Hello World!";

$mail -> isHTML(true);
$mail -> addAddress("edwardhsu@inaenergy.com.tw", "EdwardHsu");

if (!$mail->Send()) {
    echo "Mailer Error!" . $mail->ErrorInfo;
}else{
    echo "Mail Send!";
}
?>