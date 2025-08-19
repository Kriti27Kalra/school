

<?php include 'header1.php';?>
<style>
    .about-details {
        padding: 0;
    }

    .acc-view img {
        margin-bottom: 10px;
        position: relative;
        border: 1px solid #247CFF26;
        border-radius: 7px 0px;
    }

    .year-sel .form-group {
        width: 150px;
        max-width: 150px;
    }
</style>
<style>
    .loader {
        background-color: transparent;
        display: flex;
        justify-content: center;
        height: 93vh;
        align-items: center;
        position: fixed;
        top: 0;
        width: 100%;
    }

    .loader svg path,
    svg rect {
        fill: #740F13;
    }
</style>
<div class="loader loader--style6" style="display: none;z-index:9999;" title="5">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        x="0px" y="0px" width="80px" height="86px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;"
        xml:space="preserve">
        <rect x="0" y="13" width="4" height="5" fill="#333">
            <animate attributeName="height" attributeType="XML" values="5;21;5" begin="0s" dur="0.6s"
                repeatCount="indefinite" />
            <animate attributeName="y" attributeType="XML" values="13; 5; 13" begin="0s" dur="0.6s"
                repeatCount="indefinite" />
        </rect>
        <rect x="10" y="13" width="4" height="5" fill="#333">
            <animate attributeName="height" attributeType="XML" values="5;21;5" begin="0.15s" dur="0.6s"
                repeatCount="indefinite" />
            <animate attributeName="y" attributeType="XML" values="13; 5; 13" begin="0.15s" dur="0.6s"
                repeatCount="indefinite" />
        </rect>
        <rect x="20" y="13" width="4" height="5" fill="#333">
            <animate attributeName="height" attributeType="XML" values="5;21;5" begin="0.3s" dur="0.6s"
                repeatCount="indefinite" />
            <animate attributeName="y" attributeType="XML" values="13; 5; 13" begin="0.3s" dur="0.6s"
                repeatCount="indefinite" />
        </rect>
    </svg>
</div>
<!-- Page Title -->
<section class="page-title"
    style="background: url(https://resources.edunexttechnologies.com/web-data/somervilleinternational/img/internal-top.svg) no-repeat; background-size: cover; background-position: center;">
    <div class="container">
        <div class="content-box">
            <div class="content-wrapper">
                <div class="title">
                    <h1>Achievements</h1>
                </div>
                <!-- <ul class="bread-crumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Achievement</li>
                </ul> -->
            </div>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section class="blog-section about-section about-inner-section p-0">
    <div class="inner-page-bg">
        <!-- <div class="innerpage-top">
            <img src="https://resources.edunexttechnologies.com/web-data/somervilleinternational/img/assets-1.gif"
                alt="somervilleinternational">
        </div> -->
        <div class="container py-4">

            <div class="row mt-3 mb-lg-4 mb-3 mx-lg-4 px-lg-3">
                <div class="year-sel w-100 d-flex justify-content-end">
                    <div class="form-group mb-0">
                        <select class="form-control" id="ydata">
                            <option value="-1">Select Year </option>
                            <option selected value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>

                        </select>
                    </div>
                </div>

            </div>
            <div class="row mx-lg-4" id="fdata">
                <!--Accordion Block-->

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail5ea1.php?id=81">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733893985171_43.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail5ea1.php?id=81"><b>KALAAKRITI MEDALS</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 11-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail0641.php?id=88">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733896063628_50.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail0641.php?id=88"><b>ECO CODERS</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 11-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail9dbc.php?id=84">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733895253566_46.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail9dbc.php?id=84"><b>NUKKAD NATAK</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 11-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail1a85.php?id=82">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733893317365_44.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail1a85.php?id=82"><b>ABHIVYAKTI - KAHANI VACHAN</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 11-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail47c2.php?id=83">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733893434057_45.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail47c2.php?id=83"><b>ABHIVYAKTI - PATR CHITRANKAN, DOHA VACHAN</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 11-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail7845.php?id=85">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733895418273_47.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail7845.php?id=85"><b>JUST A MINUTE</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 11-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail2c6d.php?id=86">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733895569729_48.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail2c6d.php?id=86"><b>AASHU BHASHAN</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 11-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail1398.php?id=87">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733895921954_49.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail1398.php?id=87"><b>SCINTILLATION</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 11-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail9421.php?id=79">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733729398502_41.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail9421.php?id=79"><b>KNOWLEDGE CONCLAVE - SLAM POETRY, BOOK COVER DESIGNING</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 09-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail2815.php?id=80">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733732077474_42.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail2815.php?id=80"><b>FUN WITH SHAPES</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 09-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail1a6a.php?id=75">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733547764961_37.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail1a6a.php?id=75"><b>LIBERATE D'EXPRESSION 4.0</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 07-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detaile27e.php?id=76">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733547878736_38.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detaile27e.php?id=76"><b>LIBERATE D'EXPRESSION 4.0</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 07-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detaild8c4.php?id=77">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733549217341_39.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detaild8c4.php?id=77"><b>INCOGNITO</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 07-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detailbc58.php?id=78">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733551952403_40.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detailbc58.php?id=78"><b>SCIENCE SYMPOSIUM</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 07-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail23df.php?id=74">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733457650399_36.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail23df.php?id=74"><b>THE IMMORTALVERSE - CALLIGRAPHY</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 06-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail8431.php?id=73">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733282799845_35.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail8431.php?id=73"><b>LITTLE STAR OLYMPIAD MEDAL</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 04-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail76a2.php?id=72">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733210932217_34.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail76a2.php?id=72"><b>LOVE IN ACTION ASIA BASKETBALL TOURNAMENT (BOYS)</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 03-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detailb27c.php?id=69">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733205080606_31.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detailb27c.php?id=69"><b>LITTLE STAR OLYMPIAD MEDAL</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 03-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail4f62.php?id=70">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733206503856_32.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail4f62.php?id=70"><b>LITTLE STAR OLYMPIAD MEDAL</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 03-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail475d.php?id=71">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733210182109_33.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail475d.php?id=71"><b>LITTLE STAR OLYMPIAD MEDAL</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 03-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail3221.php?id=63">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733118324982_25.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail3221.php?id=63"><b>SOF OLYMPIAD MEDALS</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 02-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail3ebc.php?id=64">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733123488752_26.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail3ebc.php?id=64"><b>SOF OLYMPIAD MEDALS</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 02-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detailf8d4.php?id=65">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733124646454_27.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detailf8d4.php?id=65"><b>SOF OLYMPIAD MEDALS</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 02-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detailc5b2.php?id=66">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733125590483_28.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detailc5b2.php?id=66"><b>SOF OLYMPIAD MEDALS</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 02-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail2770.php?id=67">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733126082623_29.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail2770.php?id=67"><b>SOF OLYMPIAD MEDALS</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 02-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail5aaa.php?id=68">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1733126924894_30.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail5aaa.php?id=68"><b>SOF OLYMPIAD MEDALS</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 02-Dec-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail850a.php?id=57">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732943041376_19.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail850a.php?id=57"><b>NATIONAL TAEKWONDO CHAMPIONSHIP</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 30-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail48db.php?id=58">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732948544426_20.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail48db.php?id=58"><b>SOF OLYMPIAD MEDAL WINNERS</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 30-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail37ab.php?id=59">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732948724578_21.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail37ab.php?id=59"><b>SOF OLYMPIAD MEDAL WINNERS</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 30-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail011a.php?id=60">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732948888250_22.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail011a.php?id=60"><b>SOF OLYMPIAD MEDAL WINNERS</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 30-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail2fc6.php?id=61">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732949009237_23.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail2fc6.php?id=61"><b>SOF OLYMPIAD MEDAL WINNERS</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 30-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail619c.php?id=62">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732949132803_24.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail619c.php?id=62"><b>SOF OLYMPIAD MEDAL WINNERS</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 30-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail0c98.php?id=50">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732858617077_12.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail0c98.php?id=50"><b>SAPTAK SA RE GA MA</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 29-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail7d36.php?id=51">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732863668554_13.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail7d36.php?id=51"><b>FANTASY COMES ALIVE</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 29-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detailfddb.php?id=52">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732863680127_14.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detailfddb.php?id=52"><b>RASHMI GUNJAN & KAHANI KA SAFAR</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 29-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail3ca5.php?id=53">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732863693053_15.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail3ca5.php?id=53"><b>TAPESTRY OF FOLKTALES</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 29-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail1e85.php?id=54">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732867163356_16.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail1e85.php?id=54"><b>MATHEMATICS RUMBLE</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 29-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detaila9e4.php?id=55">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732867325137_17.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detaila9e4.php?id=55"><b>EARTH'EDEN</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 29-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detailadbc.php?id=56">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732867405891_18.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detailadbc.php?id=56"><b>EXPRESSIVE ECHOES</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 29-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail2568.php?id=49">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732857885445_11.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail2568.php?id=49"><b>LOVE IN ACTION ASIA BASKETBALL TOURNAMENT (GIRLS)</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 29-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail2580.php?id=43">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732772352386_5.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail2580.php?id=43"><b>CLAY CO COMPETITION</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 28-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detaila916.php?id=44">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732772541771_6.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detaila916.php?id=44"><b>TRASH TO TREASURE</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 28-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail98dc.php?id=45">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732772752117_7.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail98dc.php?id=45"><b>KNOWLEDGE CONCLAVE - EXTEMPORE</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 28-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail084d.php?id=46">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732775318924_81.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail084d.php?id=46"><b>FRACTIONAL FANTASIA</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 28-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detailbb33.php?id=47">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732780468295_9.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detailbb33.php?id=47"><b>CLIMATE CROSSROADS</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 28-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail4944.php?id=48">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732780267230_10.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail4944.php?id=48"><b>FUSION DANCE (WESTERN)</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 28-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail1e35.php?id=39">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732694674979_1.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail1e35.php?id=39"><b>YOGA INTER SCHOOL COMPETITION</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 27-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detailab5e.php?id=40">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732696060976_2.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detailab5e.php?id=40"><b>RHYME RECITATION COMPETITION</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 27-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail7df0.php?id=41">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732696315297_3.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail7df0.php?id=41"><b>SDG COLLOQUIUM - ENROUTE</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 27-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4">
                            <div class="acc-card mb-4">
                                <div class="acc-view">
                                    <a href="awards-detail6396.php?id=42">
                                                                                    <img src="edunext-main-storage-cf.edunexttechnologies.com/svis/school___static/1732696602061_4.jpg"
                                                class="img-fluid w-100" alt="Somerville International School, Noida">
                                                                            </a>
                                </div>
                                <div class="acc-content px-2">
                                    <h6 class="mb-2"><a
                                            href="awards-detail6396.php?id=42"><b>B.O.T. LOGO FUSION</b></a>
                                    </h6>
                                    <p class="text-danger"><i class="fa fa-calendar mr-2"></i> 27-Nov-2024</p>
                                </div>
                            </div>
                        </div>

                
            </div>
        </div>
        <!-- <div class="inner-page-buttom">
            <img src="https://resources.edunexttechnologies.com/web-data/somervilleinternational/img/assets-1.gif"
                alt="somervilleinternational">
        </div> -->
    </div>
</section>




       <?php include 'footer1.php';?>