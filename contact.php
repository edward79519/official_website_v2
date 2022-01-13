<?php

$msg = '';
//Don't run this unless we're handling a form submission
if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');

    require 'PHPMailer/PHPMailerAutoload.php';
    require 'config.php';


    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail -> isSMTP();
    $mail -> SMTPAuth = true;
    $mail -> SMTPSecure = "tsl";
    $mail -> Host = "smtp.gmail.com";
    $mail -> Port = 587;
    $mail -> CharSet = "utf8";

    $mail -> Username = $GMAILUSERNAME;
    $mail -> Password = $GMAILPASSWORD;

    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('service@inaenergy.com.tw', '寶晶能源官網 - 業務窗口');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('sales@inaenergy.com.tw', '寶晶能源官網 - 業務窗口');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = '寶晶官網詢問單:' . $_POST['name'];
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
        姓名: {$_POST['name']}
        職稱: {$_POST['title']}
        Email: {$_POST['email']}
        電話: {$_POST['tel']}
        訊息: {$_POST['message']}
        EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = '抱歉請稍後再試，或聯絡管理員。';
        } else {
            $msg = '訊息送出成功，感謝您聯絡我們！';
        }
    } else {
        $msg = '錯誤的Email!';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include __DIR__.'/include/__page_meta.php'; ?>
        <?php include __DIR__.'/include/__page_script_head.php'; ?>
        <link rel="stylesheet" href="https://use.typekit.net/qot7dle.css">
        <link rel="stylesheet" href="css/contact.css">
        <title>聯絡我們 - 寶晶能源股份有限公司 INAEnergy</title>
        <meta name="description" content="寶晶能源，聯繫我們。">
    </head>
    <body id="page-top">
        <?php include __DIR__.'/include/__page_header.php'; ?>
        <!-- Masthead-->
        <header class="masthead" id="pagetop">
            <div class="container text-center px-4 px-lg-5 h-100">  
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">聯絡我們</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                    </div>
                </div>
            </div>
        </header>
        <section class="page-section" id="globalwarm">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center d-flex align-items-stretch">
                    <div class="col-md-6 order-md-first">
                        <div class="info">
                            <h3>寶晶能源</h3>
                            <h3>Ina Energy Corp.</h3>
                            <p>Tel: 02-2796-1122</p>
                            <p>114 台北市內湖區行善路463號8樓</p>
                            <p>8F, No. 463, Xingshan Rd., Neihu Dist., Taipei City 114, Taiwan</p>
                        </div>
                        <div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1807.0311657054963!2d121.5850512835258!3d25.06587641598347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442ac81b469f17d%3A0x9fa10a08e905302!2zMTE05Y-w5YyX5biC5YWn5rmW5Y2A6KGM5ZaE6LevNDYz6JmfOA!5e0!3m2!1szh-TW!2stw!4v1630996550916!5m2!1szh-TW!2stw" 
                                width="100%" 
                                height="350px"
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy">
                            </iframe>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5 mt-md-0 d-flex">
                        <div class="infor-form p-4">
                            <form method="POST" class="needs-validation" onsubmit="" novalidate>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="text-danger">
                                            <?php if (!empty($msg)) {
                                                echo "<h2>$msg</h2>";
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6 mb-3">
                                        <label for="name">姓名 Name *</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="姓名" required>
                                    </div>
                                    <div class="form-group col-lg-6 mb-3">
                                        <label for="title">職稱 Title *</label>
                                        <input type="text" class="form-control" name="title" id="title" placeholder="職稱" required>
                                    </div>
                                    <div class="form-group col-12 mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group col-12 mb-3">
                                        <label for="tel">電話 Phone/Mobile *</label>
                                        <input type="text" class="form-control" name="tel" id="tel" placeholder="Tel" required>
                                    </div>
                                    <div class="form-group col-12 mb-3">
                                        <label for="message">給我們的訊息 Message *</label>
                                        <textarea rows="7" type="text" class="form-control" name="message" id="message" placeholder="寫些東西...." required></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn bg-primary text-white my-2 shadow">送出</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include __DIR__.'/include/__page_footer.php'; ?>
    </body>
</html>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
