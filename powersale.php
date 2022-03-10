<?php
function getIPAddress() {  
    //whether ip is from the share internet  
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
        $ip = $_SERVER['HTTP_CLIENT_IP'];  
    }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    }  
    //whether ip is from the remote address  
    else{  
        $ip = $_SERVER['REMOTE_ADDR'];  
    }  
    return $ip;  
}  
$ip = getIPAddress();  
?>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body id="page-top">
        <?php include __DIR__.'/include/__page_header.php'; ?>
        <!-- Masthead-->
        <header class="masthead" id="pagetop">
            <div class="container text-center px-4 px-lg-5 h-100">  
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-white font-weight-bold">售電業務</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white font-weight-bold">利用自然源源不息的力量</p>
                        <p class="text-white mb-5 font-weight-bold">實現可再生能源的穩定供應</p>
                    </div>
                </div>
            </div>
        </header>
        <section class="page-section" id="calculator">
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
                    <div class="col-lg-6 text-center mb-5 prnt_rltv align-self-center">
                        <div id="card-1-img">
                            <img src="./assets/img/powersale/ina-bear.png">
                        </div>
                        <div id="card-1-dialog">
                            <div class="text-cont">
                                <h4 class="">首先，了解自身的用電情形</h4>
                                <p>使用再生能源電力不只是企業社會責任，更是一場風起雲湧的全球綠色浪潮，我們可以慢慢的把再生能源的使用一點一滴的融入到我們的生活中。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center mb-5 order-lg-first">
                        <h4>台電電費單</h4>
                        <div class="img-fit">
                            <img src="./assets/img/powersale/user_usage.png">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="calcard shadow" id="fstcard">
                            <form class="needs-validation" id="fstform" novalidate>
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
                                                <select class="form-select" name="calchar" id="usrtype" required>
                                                    <option value="T" selected>個人</option>
                                                    <option value="K">商辦</option>
                                                    <option value="C">工廠</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row my-3">
                                            <label for="" class="col-sm-4 col-form-label">用電縣市</label>
                                            <div class="col-sm-8">
                                                <select class="form-select" name="calloc" required>
                                                    <option value="" selected>請選擇</option>
                                                    <option value="A">臺北市</option>
                                                    <option value="B">臺中市</option>
                                                    <option value="C">基隆市</option>
                                                    <option value="D">臺南市</option>
                                                    <option value="E">高雄市</option>
                                                    <option value="F">新北市</option>
                                                    <option value="G">宜蘭縣</option>
                                                    <option value="H">桃園市</option>
                                                    <option value="I">嘉義市</option>
                                                    <option value="J">新竹縣</option>
                                                    <option value="K">苗栗縣</option>
                                                    <option value="M">南投縣</option>
                                                    <option value="N">彰化縣</option>
                                                    <option value="O">新竹市</option>
                                                    <option value="P">雲林縣</option>
                                                    <option value="Q">嘉義縣</option>
                                                    <option value="T">屏東縣</option>
                                                    <option value="U">花蓮縣</option>
                                                    <option value="V">臺東縣</option>
                                                    <option value="W">金門縣</option>
                                                    <option value="X">澎湖縣</option>
                                                    <option value="Z">連江縣</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    請選擇用電縣市。
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row my-3">
                                            <label for="" class="col-sm-4 col-form-label">用電月份</label>
                                            <div class="col-sm-8">
                                                <select class="form-select" name="calmon" id="calmon" required>
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
                                                <div class="invalid-feedback">
                                                    請選擇用電月份。
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row my-3">
                                            <label for="" class="col-sm-4 col-form-label">用電度數 (單位：度)</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control" id="powercost" placeholder="" required>
                                                <div class="invalid-feedback">
                                                    請選輸入用電度數。
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row my-3">
                                            <label for="" class="col-sm-4 col-form-label">希望購買綠電比例</label>
                                            <div class="col-sm-8">
                                                <select class="form-select" name="rate" id="buyrate" required>
                                                    <option value="" selected>請選擇</option>
                                                    <option value="0.1">10%</option>
                                                    <option value="0.2">20%</option>
                                                    <option value="0.3">30%</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    請選購買綠電比例。
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <input type="button" class="btn btn-primary mt-3" value="下一步" id="nextbtn">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="calcard shadow" id="scndcard">
                            <form class="needs-validation" id="scndform" novalidate>
                                <div class="row my-3">
                                    <div class="col-lg-4">
                                        <div class=" calcard-list">
                                            <div class="calcard-list-num">2</div>
                                            <div class="calcard-list-text">用電推定</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="row gy-4 gx-3 gx-md-1">
                                            <div class="form-group col-6 col-md-2 text-center">
                                                <label for="input01">一月</label>
                                                <input type="number" class="form-control" id="input1" min="0" step="0.1" name="calmon01" required>
                                            </div>
                                            <div class="form-group col-6 col-md-2 text-center">
                                                <label for="input02">二月</label>
                                                <input type="number" class="form-control" id="input2" min="0" step="0.1" name="calmon02" required>
                                            </div>
                                            <div class="form-group col-6 col-md-2 text-center">
                                                <label for="input03">三月</label>
                                                <input type="number" class="form-control" id="input3" min="0" step="0.1" name="calmon03" required>
                                            </div>
                                            <div class="form-group col-6 col-md-2 text-center">
                                                <label for="input04">四月</label>
                                                <input type="number" class="form-control" id="input4" min="0" step="0.1" name="calmon04" required>
                                            </div>
                                            <div class="form-group col-6 col-md-2 text-center">
                                                <label for="input05">五月</label>
                                                <input type="number" class="form-control" id="input5" min="0" step="0.1" name="calmon05" required>
                                            </div>
                                            <div class="form-group col-6 col-md-2 text-center">
                                                <label for="input06">六月</label>
                                                <input type="number" class="form-control" id="input6" min="0" step="0.1" name="calmon06" required>
                                            </div>
                                            <div class="form-group col-6 col-md-2 text-center">
                                                <label for="input07">七月</label>
                                                <input type="number" class="form-control" id="input7" min="0" step="0.1" name="calmon07" required>
                                            </div>
                                            <div class="form-group col-6 col-md-2 text-center">
                                                <label for="input08">八月</label>
                                                <input type="number" class="form-control" id="input8" min="0" step="0.1" name="calmon08" required>
                                            </div>
                                            <div class="form-group col-6 col-md-2 text-center">
                                                <label for="input09">九月</label>
                                                <input type="number" class="form-control" id="input9" min="0" step="0.1" name="calmon09" required>
                                            </div>
                                            <div class="form-group col-6 col-md-2 text-center">
                                                <label for="input10">十月</label>
                                                <input type="number" class="form-control" id="input10" min="0" step="0.1" name="calmon10" required>
                                            </div>
                                            <div class="form-group col-6 col-md-2 text-center">
                                                <label for="input11">十一月</label>
                                                <input type="number" class="form-control" id="input11" min="0" step="0.1" name="calmon11" required>
                                            </div>
                                            <div class="form-group col-6 col-md-2 text-center">
                                                <label for="input12">十二月</label>
                                                <input type="number" class="form-control" id="input12" min="0" step="0.1" name="calmon12" required>
                                            </div>
                                            <div class="col-12 text-end">
                                                <p class="text-primary">*單位: 度 (kw‧h)</p><p class="text-secondary">**得自行修改填入真實數據，數據為推定值，僅供參考。</p>
                                            </div>
                                            <div class="col-12 form-group align-self-end">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                    <label class="form-check-label" for="invalidCheck" data-toggle="tooltip" data-placement="top" title="資料只包含網路位置，以及上述用電表單內容。">
                                                        點選已表示同意我們蒐集資料。
                                                    </label>
                                                    <div class="invalid-feedback">
                                                        必須先點選同意蒐集資料。
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <input type="hidden" name="ipaddr" value="<?php echo $ip?>">
                                        <input type="button" class="btn btn-primary mt-3" value="開始試算" id="caltotal">
                                    </div>
                                    <div class="col-12 text-center">
                                        <div id="res_status"></div>
                                    </div>
                                </div>
                            </form>
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
        <section class="page-section bg-light" id="personal">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2>個人用戶</h2>
                    </div>
                </div>
                <hr class="divider mb-5" />
                <div class="row gy-3 justify-content-center">
                    <div class="col-xl-10">
                        <div class="row gx-2 gx-lg-2 justify-content-center mb-5">
                            <div class="col-md-5">
                                <div class="row gy-3 d-flex justify-content-end">
                                    <div class="col-md-6 col-sm-7 psn-img text-center py-3">
                                        <img src="./assets/img/powersale/house.png">
                                        <div class="text-center psn-pic-title">Before</div>
                                    </div>
                                    <div class="col-md-6 col-sm-5 psn-text align-self-center text-sm-start text-center">
                                        <p>100%</p>
                                        <p>使用台電供電</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1 d-flex align-items-center justify-content-center text-primary arrow-xl">
                                <i class="bi bi-caret-right-fill arrow-shadow d-none d-md-block"></i>
                                <i class="bi bi-caret-down-fill arrow-shadow d-block d-md-none"></i>
                            </div>
                            <div class="col-md-5">
                                <div class="row gy-3 d-flex justify-content-end">
                                    <div class="col-md-6 col-sm-7 psn-img text-center py-3">
                                        <img width="200px" src="./assets/img/powersale/house_with_pvs.png">
                                        <div class="text-center psn-pic-title">After</div>
                                    </div>
                                    <div class="col-md-6 col-sm-5 psn-text align-self-center text-sm-start text-center">
                                        <p>70%</p>
                                        <p>使用台電供電</p>
                                        <p>30%</p>
                                        <p>使用<span>綠色電力</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gy-3 justify-content-center">
                    <div class="col-xl-10">
                        <div class="shadow  bg-white">
                            <div class="row py-3 px-3 align-items-center">
                                <div class="col-md-2 col-sm-3 text-center">
                                    <img width="100px" src="./assets/img/powersale/renew_mark.png">
                                </div>
                                <div class="col-md-10 col-sm-9">
                                    改變住家處的用電結構，可以從使用潔淨能源開始。搭配台電智慧電錶，即時了解用電情況。一般住宅月用電 700 度以上的用戶即適合選擇申請時間電價——愛地球的同時不需要支付額外成本。
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-10">
                        <div class="shadow  bg-white">
                            <div class="row py-3 px-3 align-items-center">
                                <div class="col-md-2 col-sm-3 text-center">
                                    <img width="100px" src="./assets/img/powersale/electricity_meter.png">
                                </div>
                                <div class="col-md-10 col-sm-9">
                                    個人用戶換裝智慧電表，搭配台灣電力APP，可顯示每15分鐘的用電量，更可每6個小時結算一次電費 。智慧電表的安裝現未開放所有用戶臨櫃申請，但若用戶申請時間電價方案、使用再生能源或設置家庭能源管理系統時，台電公司將主動換裝智慧電表。
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section  bg-white" id="enterprised">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2>企業用戶</h2>
                    </div>
                </div>
                <hr class="divider mb-5" />
                <div class="row gx-4 gx-lg-5 justify-content-around my-5">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-6 col-md-12">
                                <div class="row text-center">
                                    <div class="col-md-10">
                                        <div class="img-fit">
                                            <img src="./assets/img/powersale/fans.png">
                                            <div class="pic-desc">INA 發電業</div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 d-flex align-items-center justify-content-center text-primary arrow-xxl rotate-45">
                                        <i class="bi bi-caret-right-fill arrow-shadow-x-xxl"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-12">
                                <div class="row text-center">
                                    <div class="col-md-10">
                                        <div class="img-fit">
                                            <img src="./assets/img/powersale/retailing .png">
                                            <div class="pic-desc">INA 售電業</div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 d-flex align-items-center justify-content-center text-primary arrow-xxl rotate-r-45">
                                        <i class="bi bi-caret-right-fill arrow-shadow-x-xxl"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 align-self-center">
                        <div class="row text-center justify-content-center">
                            <div class="col-6 col-md-10">
                                <!-- <div class="prnt_rltv">
                                    <div class="ellipses text-center shadow">
                                        <h4>售電業者</h4>
                                        <p>具售電執照的事業主體</p>
                                    </div>
                                </div> -->
                                <div class="img-fit">
                                    <img src="./assets/img/powersale/environmental_values.png">
                                    <div class="pic-desc">環境價值</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-center justify-content-center text-primary arrow-xxl">
                                <i class="bi bi-caret-right-fill arrow-shadow-xxl d-none d-md-block"></i>
                                <i class="bi bi-caret-down-fill arrow-shadow-xxl d-block d-md-none"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 align-self-center">
                        <div class="row justify-content-center text-center">
                            <div class="col-6 col-md-12">
                                <div class="img-fit text-center">
                                    <img src="./assets/img/powersale/Companies.png">
                                    <div class="pic-desc">企業用戶</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gy-3 justify-content-center">
                    <div class="col-xl-10">
                        <div class="shadow mb-3">
                            <div class="row py-3 px-3 d-flex align-items-center mb-3">
                                <div class="col-md-2 col-sm-3 text-center">
                                    <img width="100px" src="./assets/img/powersale/re100.png">
                                </div>
                                <div class="col-md-10 col-sm-9">
                                    <p class="fw-bold">國際永續趨勢：2050 年 100% 使用綠電，呼籲企業即早響應：</p>
                                    <ul>
                                        <li>用電大戶條款：契約容量 5,000kW 以上用戶，必須在 5 年內設置契約容量 10% 的再生能源。</li>
                                        <li>RE100：加入成員必須公開承諾 2020 至 2050 年間達成 100% 使用綠電的時程。</li>
                                        <li>RE 10x10：承諾 2021  年開始使用第一度綠電，目標於 2023 年達成總用電量 5% 綠電、2025 年達成 10% 綠電，並朝向 2050 年 100% 綠電的目標邁進。</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-4 gx-lg-5 my-5">
                            <div class="col-12 col-md-8 col-lg-7 text-center mb-. prnt_rltv align-self-center fit-cnt">
                                <div id="card-1-img">
                                    <img src="./assets/img/powersale/ina-bear.png">
                                </div>
                                <div id="card-1-dialog">
                                    <div class="text-cont text-start">
                                        <p class="fw-bold">若您欲履行用電大戶條款、亦或是逐步達成RE100的目標，您可以這麼做! </h4>
                                        <p class="text-end mb-0">註: 設置儲能設備尚無法滿足 RE100</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3 gx-3 gy-3 text-center my-5">
                            <div class="col-md-4">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img width="200px" src="./assets/img/powersale/retailing_2.png">
                                    <h4 class="fw-bold mt-3"><a href="#process" class="text-link">購買再生能源電力或憑證</a></h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img width="200px" src="./assets/img/powersale/fans_2.png">
                                    <h4 class="fw-bold mt-3"><a href="business.php#harvesting" class="text-link">設置再生能源發電設備</a></h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img width="200px" src="./assets/img/powersale/energy_storage_2.png">
                                    <h4 class="fw-bold mt-3"><a href="business.php#storage" class="text-link">設置儲能設備</a></h4>                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section bg-light" id="process">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2>申辦流程</h2>
                    </div>
                </div>
                <hr class="divider mb-5" />
                <div class="row gy-3 gy-md-5 gx-2 justify-content-center align-items-center mb-5 pb-5">
                    <div class="col-lg-3 col-md-5">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">用戶聯繫提出需求</h5>
                                <p class="card-text"><a href="contact.php#contactform">聯繫寶晶</a>，我們將依用戶不同的用電狀況做初步評估。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1 d-flex align-items-center justify-content-center text-primary arrow-xl">
                        <i class="bi bi-caret-right-fill arrow-shadow d-none d-md-block"></i>
                        <i class="bi bi-caret-down-fill arrow-shadow d-block d-md-none"></i>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">提供須填表單供用戶回饋</h5>
                                <ul class="card-text">
                                    <li>電能轉供計畫書表C</li>
                                    <li>最近一期電費單等相關用電資訊</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1 d-flex align-items-center justify-content-center text-primary arrow-xl">
                        <i class="bi bi-caret-right-fill arrow-shadow d-none d-md-block"></i>
                        <i class="bi bi-caret-down-fill arrow-shadow d-block d-md-none"></i>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">雙方簽訂購售電合約 PPA</h5>
                                <p class="card-text">寶晶向台電提交綠電購電契約轉供計畫書。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1 offset-lg-1 d-flex align-items-center justify-content-center text-primary arrow-xl">
                        <i class="bi bi-caret-right-fill arrow-shadow d-none d-md-block"></i>
                        <i class="bi bi-caret-down-fill arrow-shadow d-block d-md-none"></i>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">智慧電錶的安裝</h5>
                                <p class="card-text">台電前往安裝智慧電錶；寶晶根據前期討論需求與合約內容進行前期配置工作。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1 d-flex align-items-center justify-content-center text-primary arrow-xl">
                        <i class="bi bi-caret-right-fill arrow-shadow d-none d-md-block"></i>
                        <i class="bi bi-caret-down-fill arrow-shadow d-block d-md-none"></i>
                    </div>
                    <div class="col-lg-3 col-md-5 align-self-start">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">開始使用綠電</h5>
                                <p class="card-text">智慧電錶安裝完成，台電開始審核用電資訊，預計 3~6 個月後台電完成綠電轉供作業。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 mt-5 align-self-start">
                        <div class="card-dialog-body">
                            <div class="card2">
                                <div class="card-body">
                                    <h5 class="card-title">立即<a href="contact.php#contactform">聯絡我們</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section bg-white" id="faq">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2>FAQ</h2>
                    </div>
                </div>
                <hr class="divider mb-5" />
                <div class="row gy-3 justify-content-center">
                    <div class="col-lg-10">
                        <div id="accordion">
                            <div class="card my-3">
                                <div class="card-header align-items-stretch" id="headingOne">
                                    <h5 class="mb-0" style="text-align:justify">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Q: 我要如何向寶晶能源購買綠電?
                                            <span class="card-icon"><i class="bi bi-chevron-down"></i></span>
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    請至<a href="contact.php">聯絡我們</a>填寫資料，我們會有專人與您聯繫。
                                </div>
                                </div>
                            </div>
                            <div class="card my-3">
                                <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Q: 申請完成大概多久可以使用?
                                        <span class="card-icon"><i class="bi bi-chevron-down"></i></span>
                                    </button>
                                </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                大約3~6個月的時間。綠電方案確認、購電合約(PPA)簽訂後即代表申請完成，台電將前往安裝智慧電錶，同時我們將針對您的綠電方案向台電提出轉供申請，確認申請通過後我們會向您通知並且開始向您提供綠電。
                                </div>
                                </div>
                            </div>
                            <div class="card my-3">
                                <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Q: 由寶晶能源發出的綠電電費會與台電帳單一併計算嗎?
                                        <span class="card-icon"><i class="bi bi-chevron-down"></i></span>
                                    </button>
                                </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    雖然同樣以台電電網進行供電，綠電電費將分開計算，因此會收到兩份帳單。一般用電(灰電)是繳交台電，綠電電費的部分是繳給我們。
                                </div>
                                </div>
                            </div>
                            <div class="card my-3">
                                <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Q: 為何需要安裝智慧電錶?
                                        <span class="card-icon"><i class="bi bi-chevron-down"></i></span>
                                    </button>
                                </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body">
                                    綠電的使用量將由台電安裝的智慧電表每十五分鐘記錄用電量，得以與一般的用電(灰電)區分，以計算電費。
                                </div>
                                </div>
                            </div>
                            <div class="card my-3">
                                <div class="card-header" id="headingFive">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Q: 寶晶能源如何供應綠電?
                                        <span class="card-icon"><i class="bi bi-chevron-down"></i></span>
                                    </button>
                                </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                <div class="card-body">
                                    除了供應寶晶自己建造的太陽能案場發出的太陽能光電之外，我們也會與其他合格的太陽能電廠、風力發電廠等簽訂合約，依照您的需求進行綠電的最佳配置。所有綠電都將透過台電電網進行供電。
                                </div>
                                </div>
                            </div>
                            <div class="card my-3">
                                <div class="card-header" id="headingSix">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Q: 寶晶供應的綠電是否穩定?
                                        <span class="card-icon"><i class="bi bi-chevron-down"></i></span>
                                    </button>
                                </h5>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                <div class="card-body">
                                    目前綠電均會經由台電電網輸配電至用電場所，因此若台電電網沒有問題，電力供應絕對穩定; 並且寶晶自己持有多個太陽能案場，故供應量上面足夠且可控，就如同一般的用電一樣，不用擔心因為天氣等因素，有斷電、跳電等問題產生。
                                </div>
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