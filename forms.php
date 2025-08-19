<?php include 'header1.php';?>


<!-- Page Title -->
<style>
    .innerDiv {
        border: 1px solid #1EB2F480;
        border-radius: 10px;
        padding: 10px 10px 15px 10px;
        margin: 40px 0;
        transition: .3s;
        position: relative;
    }

    .innerDiv .innerimg {
        display: inline-block;
        margin: -30px;
        position: relative;
        transform: translateY(-30px);
        padding: 10px;
        background: #fff;
        box-shadow: 0px 15px 15px #C0DDE880;
        border-radius: 10px;
        transition: .3s;
    }

    .innerDiv h5 {
        font-size: 18px;
        font-weight: 600;
        margin-top: 15px;
        margin-bottom: 6px;
    }

    .innerDiv:after {
        content: '';
        position: absolute;
        height: 8px;
        width: 90%;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 0 0 8px 8px;
        top: 100%;
        background: #490e11;
        transition: .3s;
    }

    .innerDiv:hover:after {
        height: 0px;
    }

    @media (min-width: 1200px) {
        .offset-xl-1 {
            margin-left: 8.33333333%;
        }

        .frm-wrp {
            min-height: 400px;
        }
    }

    h5 {
        font-family: 'Cinzel', serif;
    }
</style>
</style>

<section class="page-title" style="background: url(https://resources.edunexttechnologies.com/web-data/somervilleinternational/img/internal-top.svg) no-repeat; background-size: cover; background-position: center;">
    <div class="container">
        <div class="content-box">
            <div class="content-wrapper">
                <div class="title">
                    <h1 class="Times">Admission Forms</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-section about-inner-section p-0" id="content">

    <div class="inner-page-bg">
        <!-- <div class="innerpage-top">
            <img src="https://resources.edunexttechnologies.com/web-data/somervilleinternational/img/assets-1.gif"
                alt="somervilleinternational">
        </div> -->
        <div class="container py-5" id="wrapperid">
            <div class="row">

                <div class="col-md-12">

                    <div class="content title-content" style="overflow-y: inherit;">
                        <div class="row py-4 px-lg-4 frm-wrp justify-content-center align-items-center">

                            <!-- <div class="col-sm-6 col-m-6 col-lg-4 col-xl-4 ">
                                <a href="https://forms.edunexttechnologies.com/forms/sisnoida/enquiry/" target="_blank">

                                    <div class="innerDiv text-center">
                                        <div class="innerimg"><img height="90"
                                                src="https://resources.edunexttechnologies.com/web-data/img/app-icon.svg"
                                                width="90" />
                                        </div>

                                        <h5>Enquiry Form</h5>
                                    </div>

                                </a>
                            </div> -->
                            <div class="col-sm-6 col-m-6 col-lg-4 col-xl-5">
                                <a href="Forms/registration/index.php" target="_blank">
                                    <div class="innerDiv text-center">
                                        <div class="innerimg"><img height="90" src="https://resources.edunexttechnologies.com/web-data/img/app-icon.svg" width="90" />
                                        </div>

                                        <!-- <h5>Admission
                                            Form for SIPS<br />
                                            (Preparatory School)</h5> -->
                                        <h5>
                                            Admission Form for Classes<br> Level - 1 (Nursery), Level - 2 (LKG) & Level - 3 (UKG)
                                        </h5>
                                    </div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-m-6 col-lg-4 col-xl-5">
                                <a href="Forms/registration-all/index.php" target="_blank">
                                    <div class="innerDiv text-center">
                                        <div class="innerimg"><img height="90" src="https://resources.edunexttechnologies.com/web-data/img/reg-icon.svg" width="90" />
                                        </div>
                                        <h5>
                                            Admission Form for Classes <br> I to IX & XI
                                        </h5>
                                    </div>
                                </a>
                            </div>

                            <!---      <div class="col-sm-6 col-m-6 col-lg-4 col-xl-4 ">
                            <a href="https://forms.edunexttechnologies.com/forms/sisnoida/Recruitment/" target="_blank">
                                <div class="innerDiv text-center">
                                    <div class="innerimg"><img height="90" src="https://resources.edunexttechnologies.com/web-data/img/app-icon.svg" width="90" />
                                    </div>
                                    <h5>Recruitment
                                        Form</h5>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-m-6 col-lg-4 col-xl-4 ">
                            <a href="https://web.edunexttechnologies.com/theme/somervilleinternational/contact-us.php" target="_blank">
                                <div class="innerDiv text-center">
                                    <div class="innerimg"><img height="90" src="https://resources.edunexttechnologies.com/web-data/img/reg-icon.svg" width="90" />
                                    </div>

                                    <h5>Others</h5>
                                </div>
                            </a>
                        </div>--->
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
<!--main content end //-->

          <?php include 'footer1.php';?>