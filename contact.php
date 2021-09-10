<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include __DIR__.'/include/__page_meta.php'; ?>
        <?php include __DIR__.'/include/__page_script_head.php'; ?>
        <link rel="stylesheet" href="https://use.typekit.net/qot7dle.css">
        <link rel="stylesheet" href="css/contact.css">

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
                    <div class="col-md-6">
                        <div class="infor-form bg-primary text-white p-4">
                            <form>
                                <div class="row">
                                    <div class="form-group col-lg-6 mb-3">
                                        <label for="name">姓名 Name *</label>
                                        <input type="text" class="form-control" id="name" placeholder="姓名">
                                    </div>
                                    <div class="form-group col-lg-6 mb-3">
                                        <label for="title">職稱 Title *</label>
                                        <input type="text" class="form-control" id="title" placeholder="職稱">
                                    </div>
                                    <div class="form-group col-12 mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group col-12 mb-3">
                                        <label for="tel">電話 Phone/Mobile *</label>
                                        <input type="text" class="form-control" id="tel" placeholder="Tel">
                                    </div>
                                    <div class="form-group col-12 mb-3">
                                        <label for="message">給我們的訊息 Message *</label>
                                        <textarea rows="5" type="text" class="form-control" id="message" placeholder="寫些東西...."></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-secondary my-2">送出</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include __DIR__.'/include/__page_footer.php'; ?>
    </body>
</html>