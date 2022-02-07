<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include __DIR__.'/include/__page_meta.php'; ?>
        <?php include __DIR__.'/include/__page_script_head.php'; ?>
        <link rel="stylesheet" href="https://use.typekit.net/qot7dle.css">
        <link rel="stylesheet" href="css/powersale.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <title>售電平台 - 寶晶能源股份有限公司 INAEnergy</title>
        <meta name="description" content="寶晶能源，售電平台。">

        <meta property="og:title" content="售電平台 - 寶晶能源股份有限公司 INAEnergy">
        <meta property="og:description" content="寶晶能源，售電平台。">
        <meta property="twitter:title" content="售電平台 - 寶晶能源股份有限公司 INAEnergy">
        <meta property="twitter:description" content="寶晶能源，售電平台。">
        <script src="js/jquery.js"></script>
        <script src="js/powersale.js"></script>
    </head>
    <body id="page-top">
        <?php include __DIR__.'/include/__page_header.php'; ?>
        <!-- Masthead-->
        <header class="masthead" id="pagetop">
            <div class="container text-center px-4 px-lg-5 h-100">  
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-white font-weight-bold">售電平台</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white font-weight-bold">利用自然源源不息的力量</p>
                        <p class="text-white mb-5 font-weight-bold">實現可再生能源的穩定供應</p>
                    </div>
                </div>
            </div>
        </header>
        <section class="page-section" id="esg">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2>用電試算</h2>
                    </div>
                </div>
                <hr class="divider mb-5" />
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-8 text-center mb-5">
                        <h4>為了穩定供應您清潔的綠能電力</h4>
                        <h4>我們於南台灣的荒地上蓋了許許多多的太陽光電案場</h4>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h4>台電電費單</h4>
                    </div>
                    <div class="col-md-6 text-center mb-5">
                        <div id="card-1-img">
                            <img src="./assets/img/powersale/ina-bear.png">
                        </div>
                        <div id="card-1-dialog">
                            <div class="text-cont">
                                <h4>首先，了解自身的用電情形</h4>
                                <p>使用再生能源電力不只是企業社會責任，更是一場風起雲湧的全球綠色浪潮，我們可以慢慢的把再生能源的使用一點一滴的融入到我們的生活中。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="calcard shadow" id="fstcard">
                            <div class="row my-3">
                                <div class="col-lg-4">
                                    <div class="calcard-list">
                                        <div class="calcard-list-num">1</div>
                                        <div class="calcard-list-text">用電試算</div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group row my-3">
                                        <label for="" class="col-sm-4 col-form-label">用電類別</label>
                                        <div class="col-sm-8">
                                            <select class="form-select">
                                                <option value="personal" selected>個人</option>
                                                <option value="commercial">商業</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row my-3">
                                        <label for="" class="col-sm-4 col-form-label">用電縣市</label>
                                        <div class="col-sm-8">
                                            <select class="form-select">
                                                <option value="" selected>請選擇</option>
                                                <option value="1">台北市</option>
                                                <option value="2">新北市</option>
                                                <option value="3">基隆市</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row my-3">
                                        <label for="" class="col-sm-4 col-form-label">用電月份</label>
                                        <div class="col-sm-8">
                                            <select class="form-select">
                                                <option value="" selected>請選擇</option>
                                                <option value="1">一月</option>
                                                <option value="2">二月</option>
                                                <option value="3">三月</option>
                                                <option value="4">四月</option>
                                                <option value="5">五月</option>
                                                <option value="6">六月</option>
                                                <option value="7">七月</option>
                                                <option value="8">八月</option>
                                                <option value="9">九月</option>
                                                <option value="10">十月</option>
                                                <option value="11">十一月</option>
                                                <option value="12">十二月</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row my-3">
                                        <label for="" class="col-sm-4 col-form-label">用電度數 (單位：度)</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="powercost" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row my-3">
                                        <label for="" class="col-sm-4 col-form-label">希望購買率電比例</label>
                                        <div class="col-sm-8">
                                            <select class="form-select" name="rate">
                                                <option selected>請選擇</option>
                                                <option value="0.1">10%</option>
                                                <option value="0.2">20%</option>
                                                <option value="0.3">30%</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <input type="button" class="btn btn-primary mt-3" value="下一步" id="nextbtn">
                                </div>
                            </div>
                        </div>
                        <div class="calcard shadow" id="scndcard">
                            <div class="row my-3">
                                <div class="col-lg-4">
                                    <div class=" calcard-list">
                                        <div class="calcard-list-num">2</div>
                                        <div class="calcard-list-text">用電推定</div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row gy-4 gx-1">
                                        <div class="form-group col-6 col-md-2 text-center">
                                            <label for="input01">一月</label>
                                            <input type="number" class="form-control" id="input1" min="0" step="0.1">
                                        </div>
                                        <div class="form-group col-6 col-md-2 text-center">
                                            <label for="input02">二月</label>
                                            <input type="number" class="form-control" id="input2" min="0" step="0.1">
                                        </div>
                                        <div class="form-group col-6 col-md-2 text-center">
                                            <label for="input03">三月</label>
                                            <input type="number" class="form-control" id="input3" min="0" step="0.1">
                                        </div>
                                        <div class="form-group col-6 col-md-2 text-center">
                                            <label for="input04">四月</label>
                                            <input type="number" class="form-control" id="input4" min="0" step="0.1">
                                        </div>
                                        <div class="form-group col-6 col-md-2 text-center">
                                            <label for="input05">五月</label>
                                            <input type="number" class="form-control" id="input5" min="0" step="0.1">
                                        </div>
                                        <div class="form-group col-6 col-md-2 text-center">
                                            <label for="input06">六月</label>
                                            <input type="number" class="form-control" id="input6" min="0" step="0.1">
                                        </div>
                                        <div class="form-group col-6 col-md-2 text-center">
                                            <label for="input07">七月</label>
                                            <input type="number" class="form-control" id="input7" min="0" step="0.1">
                                        </div>
                                        <div class="form-group col-6 col-md-2 text-center">
                                            <label for="input08">八月</label>
                                            <input type="number" class="form-control" id="input8" min="0" step="0.1">
                                        </div>
                                        <div class="form-group col-6 col-md-2 text-center">
                                            <label for="input09">九月</label>
                                            <input type="number" class="form-control" id="input9" min="0" step="0.1">
                                        </div>
                                        <div class="form-group col-6 col-md-2 text-center">
                                            <label for="input10">十月</label>
                                            <input type="number" class="form-control" id="input10" min="0" step="0.1">
                                        </div>
                                        <div class="form-group col-6 col-md-2 text-center">
                                            <label for="input11">十一月</label>
                                            <input type="number" class="form-control" id="input11" min="0" step="0.1">
                                        </div>
                                        <div class="form-group col-6 col-md-2 text-center">
                                            <label for="input12">十二月</label>
                                            <input type="number" class="form-control" id="input12" min="0" step="0.1">
                                        </div>
                                        <div class="col-12 text-end">
                                            <p class="text-primary">*單位: 度 (kw‧h)</p><p class="text-secondary">**得自行修改填入真實數據，數據為推定值，僅供參考。</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <input type="button" class="btn btn-primary mt-3" value="開始試算" id="caltotal">
                                </div>
                            </div>
                        </div>
                        <div class="calcard shadow" id="thrdcard">
                            <div class="row my-3">
                                <div class="col-lg-4">
                                    <div class="calcard-list">
                                        <div class="calcard-list-num">3</div>
                                        <div class="calcard-list-text">綠電效益</div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row text-center justify-content-around">
                                        <div class="col-md-4">
                                            <div class="calcard-img"><img src="assets/img/powersale/co2_cloud.png"></div>
                                            <div class="calcard-text text-black my-3">每年減碳排放達<span class="text-primary" id="carbon">0</span>公噸</div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="calcard-img"><img src="assets/img/powersale/tree.png"></div>
                                            <div class="calcard-text text-black my-3">種植<span class="text-primary" id="tree">0</span>公頃的樹</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <input type="button" class="btn btn-secondary" value="重新計算" id="calreset">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include __DIR__.'/include/__page_footer.php'; ?>
    </body>
</html>