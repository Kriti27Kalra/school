<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from somervilleinternational.in/Forms/Recruitment/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Aug 2025 08:31:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Staff Recruitment Form</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../../../resources.edunexttechnologies.com/web-data/somervilleinternational/img/somervilleinternational-favicon.png" />

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../resources.edunexttechnologies.com/default-form/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../resources.edunexttechnologies.com/default-form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link href="../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" type="text/css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../resources.edunexttechnologies.com/default-form/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../resources.edunexttechnologies.com/default-form/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../resources.edunexttechnologies.com/default-form/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../resources.edunexttechnologies.com/default-form/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../resources.edunexttechnologies.com/default-form/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../resources.edunexttechnologies.com/default-form/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/duDatepicker.css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/validation-style.css">
    <!--===============================================================================================-->
    <script src="../../../resources.edunexttechnologies.com/default-form/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/edu_main.js"></script>

    <link rel="stylesheet" href="css/choices.min.css">
    <script src="js/choices.min.js"></script>

    <style>
        .fresh {
            display: none;
        }


        @media screen and (max-width: 676px) and (min-width: 320px) {
            .login100-form-social.flex-c-m {
                display: flex;
                align-items: center;
                justify-content: flex-start;
                padding-bottom: 10px !important;
                padding-top: 10px !important;
            }
        }

        th {
            text-align: center !important;
            text-transform: uppercase !important;
        }

        label {
            text-transform: uppercase !important;
        }
    </style>
    <style>
        h2,
        h5,
        th {
            font-family: 'Cinzel', serif;
        }

        p {
            font-family: Ranade-Light;
        }

        .control-label,
        label {
            font-family: Ranade-Light;
        }

        #subjectid-error {
            position: absolute;
            top: 46px;
        }
    </style>
    <script>
        function noidachan(val) {
            if (val == 'Yes') {
                $('.ifnoidayes').hide();
                $('#noidano').removeClass('mandatoryvalue');
                $('.closeform').show();
            } else {
                $('.ifnoidayes').show();
                $('#noidano').addClass('mandatoryvalue');
            }

        }

        function ifselectNo(str) {
            if (str == 'No') {
                alert('Sorry! You cannot proceed with this form as the school is based in Noida, Uttar Pradesh.Thank you for showing your interest.');
                $('.closeform').hide();
                return false;
            } else {
                $('.closeform').show();
            }
        }
        // var checkProced = $('#checkme');
        var checkButton = $('.fnexti');

        function proced() {
            if ($('#checkme').is(':checked')) {
                $('.fnexti').removeAttr('disabled', true);
                $('.fnexti').css('color', '#fff');
                $('.fnexti').css('background-color', '#741014');
            } else {
                $('.fnexti').attr('disabled', true);
                $('.fnexti').css('color', '#741014');
                $('.fnexti').css('background-color', '#7410142b');
            }
        }
    </script>
    <style>
        .resideNoida label {
            font-weight: 700;
            font-size: 14px !important;
        }

        .space-bottom .form-control {
            font-weight: 700;
        }
    </style>
</head>

<body style="background-color: #666666;">

    <div class="limiter">

        <div class="container-login100">

            <div class="wrap-login100">

                <!-- School Details View Start-->

                <div class="col-xl-3 col-lg-4 col-md-5 col-12 login100-more pl-0">

    <div class="left-section">
        <div class="top-content">
            <div class="main-logo">
                <img src="../../../resources.edunexttechnologies.com/web-data/somervilleinternational/img/SIS-logo-white.png" alt="School Name">
                <i class="fa fa-info-circle" id="info-btn" aria-hidden="true"></i>
            </div>
            <!-- <div class="info-icon">
								
							</div> -->


        </div>

        <div class="bottom-content">

            <div class="school-details pt-2 text-center mb-3">

                <h2 class="Lincoln text-white">Somer<span class="Alpine" style="font-size: 26px;">v</span>ille International School</h2>

            </div>

            <div class="reg-head">

                <h2 class="reg-name">Staff Recruitment Form</h2>



            </div>

            <div class="school-add">

                <ol>

                    <li>
                        <div class="contact-icons">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>

                        <div class="contact-text">
                            <p>A-07, Sector-132, Expressway, Noida, Uttar Pradesh -201301</p>
                        </div>

                    </li>

                    <li>

                        <div class="contact-icons">
                            <i class="fas fa-globe" aria-hidden="true"></i>
                        </div>

                        <div class="contact-text">
                            <p><a target="_blank" style="color: #fff;font-family: Ranade-Light;" href='../../index.html'>www.somervilleinternational.in</a>
                            </p>
                        </div>


                    </li>


                    <li>
                        <div class="contact-icons">
                            <i class="fas fa-envelope"></i>
                        </div>

                        <div class="contact-text">
                            <p><a style="font-family: Ranade-Light;" href="mailto:school@somervilleinternational.in">school@somervilleinternational.in</a>
                            </p>
                        </div>

                    </li>

                    <li>
                        <div class="contact-icons">
                            <i class="fas fa-phone-alt"></i>
                        </div>

                        <div class="contact-text">
                            <p><a href="tel:+919650506358">+91 96505 06358, +91 80763 14108</a></p>
                        </div>
                    </li>

                </ol>

            </div>

            <!-- <div class="login100-form-social new_box d-flex align-items-center">
                <div class="mr-4">
                    <p class="text-white">Follow Us</p>
                </div>
                <ul class="face_list d-flex">
                    <li>
                        <a target="_blank" href="https://www.facebook.com/EdunextTechnologies" class="login100-form-social-item p-0 m-r-5">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://twitter.com/EdunextTech" class="login100-form-social-item p-0 m-r-5">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.linkedin.com/company/edunext-technologies-pvt-ltd-" class="login100-form-social-item p-0 m-r-5">
                            <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.youtube.com/c/EdunextTechnologies" class="login100-form-social-item p-0 m-r-5">
                            <i class="fab fa-youtube" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.instagram.com/c/EdunextTechnologies" class="login100-form-social-item p-0 m-r-5">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div> -->

        </div>

        <div class="footer-content" style="font-family: 'Cinzel', serif;">
            Powered By
            <a href="http://edunexttechnologies.com/" target="_blank"><img style="margin-left: 8px" src="../../../edunexttechnologies.com/Recruitment-Form/images/logo3.png"></a>
        </div>

    </div>




</div>
                <!-- School Details View End-->


                <!-- New Multistep Regisration Form  Start Here  -->


                <!--   Big container   -->


                <div class="col-xl-9 col-lg-8 col-md-7 col-12 min-height" style="padding-right: 37px;">

                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xl-12 text-center p-0 mt-3 mb-2">
                                <div class="card px-0 pb-0 mt-3 mb-3 ml-2">
                                    <h2 id="heading">Staff Recruitment Form </h2>
                                    <p>Register by entering the information mentioned below</p>
                                    <form method="post" action="https://sisnoida.edunexttechnologies.com/Exclusion/updateresume" id="msform" enctype="multipart/form-data">
                                        <input type="hidden" id="qualification_id_7" name="qualification_id_7" value="7">
                                        <input type="hidden" id="qualification_id_6" name="qualification_id_6" value="6">
                                        <input type="hidden" id="qualification_id_5" name="qualification_id_5" value="5">
                                        <input type="hidden" id="qualification_id_4" name="qualification_id_4" value="4">
                                        <input type="hidden" id="qualification_id_3" name="qualification_id_3" value="3">
                                        <input type="hidden" id="qualification_id_2" name="qualification_id_2" value="2">
                                        <input type="hidden" id="qualification_id_1" name="qualification_id_1" value="1">
                                        <input type="hidden" id="qualification_str" name="qualification_str" value="1,2,3,4,5,6,7">
                                        <input type="hidden" id="candidate_exp_count" name="candidate_exp_count" id="candidate_exp_count" value="1">
                                        <!--<input type="hidden" name="is_payment_gateway" id="is_payment_gateway" value="1">-->

                                        <input type="hidden" class="columnlabel" value='https://somervilleinternational.in/Forms/Recruitment/thanks.php' name="thankspage" id="thankspage" />
                                        <input type="hidden" class="columnlabel" value='https://somervilleinternational.in/Forms/Recruitment/error.php' name="errorpage" id="errorpage" />
                                        <!-- progressbar -->
                                        <ul id="progressbar">
                                            <li class="active" id="instruction">Note</li>
                                            <li id="account">Personal Information</li>
                                            <li id="payment">Qualification & Experience</li>
                                            <li id="confirm">Complete</li>
                                        </ul>

                                        <fieldset id="instruction-detail">

                                            <div class="form-card">

                                                <!-- <div class="row heading-row">
                                                    <div class="col-12">
                                                        <h2 class="fs-title text-center">Note - Personal Information - Qualification and Experience - Complete</h2>
                                                    </div>

                                                </div> -->
                                                <div class="card px-0 pb-0 mt-2 mb-2 instruction-section">
                                                    <div class="instruction-form">
                                                        <p class="first-p-size"><img src="https://resources.edunexttechnologies.com/web-data/somervilleinternational/img/navigation.svg">
                                                            <b>Thank you for showing your interest in joining our school.</b>
                                                        </p>
                                                        <p class="first-p-size"><img src="https://resources.edunexttechnologies.com/web-data/somervilleinternational/img/navigation.svg">
                                                            <b>Before you proceed, please let us know if:</b>
                                                        </p>


                                                    </div>
                                                </div>

                                                <div class="space-bottom resideNoida">
                                                    <div class="row resideNoida1">
                                                        <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">You reside in Noida/ Delhi?
                                                                <span style="color: red;">*</span></label>
                                                            <select class="form-control mandatoryvalue" title="You reside in Noida" id="noidayes" name="noidayes" onchange="noidachan(this.value)">
                                                                <option value=""></option>
                                                                <option value="-1">Select</option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>

                                                            </select>
                                                        </div>
                                                        <div class="col-xl-5 col-lg-6 col-12  floating-label-wrap form-group has-feedback ifnoidayes" style="display: none;">
                                                            <label class="control-label">Are you planning to shift to Noida/ Delhi? <span style="color: red;">*</span></label>
                                                            <select class="form-control" title="Are you planning to shift to Noida" onchange="ifselectNo(this.value)" id="noidano" name="noidano">
                                                                <option value=""></option>
                                                                <option value="-1">Select</option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>

                                                            </select>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="form-card mt-2 closeform">
                                                <div class="row heading-row">
                                                    <div class="col-12">
                                                        <h2 class="fs-title"><input type="checkbox" onchange="proced()" id="checkme"> &nbsp;&nbsp; I
                                                            have read and agree to
                                                            abide by the note mentioned above by the
                                                            authorities
                                                            of the School.</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>


                                            <button type="button" name="next" id="fnext" class="next fnexti closeform action-button" disabled="true" value="Proceed" style="background-color: #740f139c;">Proceed</button>
                                            <div style="padding-bottom: 250px;"></div>
                                        </fieldset>
                                        <fieldset id="student-detail">

                                            <div class="form-card">


                                                <div class="row heading-row">
                                                    <div class="col-8">
                                                        <h2 class="fs-title">Job Information:</h2>
                                                    </div>
                                                    <div class="col-4">
                                                        <h2 class="steps">Step 1 / 3</h2>
                                                    </div>

                                                </div>


                                                <div class="space-bottom">
                                                    <div class="row" id="">

                                                        <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Position <span style="color: red;">*</span></label>
                                                            <select class="form-control mandatoryvalue" title="Position" id="vacancyid" name="vacancyid">
                                                                <option></option>
                                                                <option value="-1" disabled>Select Position</option>
                                                            </select>
                                                        </div>



                                                        <div class="col-xl-8 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Key Skills <span style="color: red;">*</span></label>
                                                            <select name="subjectid" id="subjectid" class="form-control mmuy mandatoryvalue" title="Key Skills" multiple>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row heading-row">

                                                        <div class="col-12">
                                                            <h2 class="fs-title">Personal Information:</h2>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Title <span style="color: red;">*</span></label>
                                                            <select class="form-control mandatoryvalue" title="Title" id="salutationid" name="salutationid">
                                                                <option></option>
                                                                <option value="-1" disabled>Select</option>
                                                                <option value="3">DR.
                                                                </option>
                                                                <option value="1">MR.
                                                                </option>
                                                                <option value="4">MS.
                                                                </option>
                                                                <option value="2">MRS.
                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback form-group has-feedback">
                                                            <label class="control-label"> Name <span style="color: red;">*</span></label>
                                                            <input class="form-control mandatoryvalue inputTextBox " title=" Name" type="text" id="firstname" name="firstname">
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Email Id<span style="color: red;">*</span></label>
                                                            <input name="emailid" id="emailid" title="Email Id" type="text" class="form-control mandatoryvalue emailid">
                                                        </div>

                                                        <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Date of Birth <span style="color: red;">*</span></label>
                                                            <input name="dob" id="dob" readonly type="text" title="Date of Birth" class="form-control mandatoryvalue datepicker">

                                                        </div>



                                                        <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Gender <span style="color: red;">*</span></label>
                                                            <select name="genderid" id="genderid" title="Gender" class="form-control mandatoryvalue">
                                                                <option value=''></option>
                                                                <option value='-1' disabled>Select</option>
                                                                <option value="1">Male</option>
                                                                <option value="2">Female</option>
                                                            </select>
                                                        </div>


                                                        <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Place of Birth <span style="color: red;">*</span></label>
                                                            <input type="text" class="form-control inputTextBox mandatoryvalue" name="place_of_birth" title="Place of Birth" id="place_of_birth" />
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Religion <span style="color: red;">*</span></label>
                                                            <select type="text" name="religionid" title="Religion" id="religionid" class="form-control mandatoryvalue">
                                                                <option value=""></option>
                                                                <option value="-1" disabled="">Select</option>
                                                                <option value="5">Buddhism</option>
                                                                <option value="4">Christianity</option>
                                                                <option value="1">Hinduism</option>
                                                                <option value="2">Islam</option>
                                                                <option value="6">Jainism</option>
                                                                <option value="3">Sikhism</option>
                                                                <option value="8">Others</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Nationality <span style="color: red;">*</span></label>
                                                            <input type="text" class="form-control inputTextBox mandatoryvalue" name="nationality" title="Nationality" id="nationality" />
                                                        </div>

                                                        <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback ">
                                                            <label class="control-label">Marital Status <span style="color: red;">*</span></label>
                                                            <select class="form-control mandatoryvalue" title="Marital Status" id="maritalstatusid" name="maritalstatusid" onchange="showFunction();">
                                                                <option></option>
                                                                <option value="-1" disabled>Select </option>

                                                                <option value="1">Married
                                                                </option>

                                                                <option value="2">Unmarried
                                                                </option>

                                                                <option value="3">Divorced
                                                                </option>

                                                                <option value="4">Widowed
                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback fresh">
                                                            <label class="control-label">Date and Year of
                                                                Marriage</label>
                                                            <input name="marriagedate" readonly type="text" title="Date of Birth" class="form-control datepicker">

                                                        </div>


                                                        <div class="col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Have You Ever Been Interviewed for Any Position in Somerville School? <span style="color: red;">*</span></label>
                                                            <select name="__ufdkey__Have_You_Ever_Been_Interviewed" id="__ufdkey__Have_You_Ever_Been_Interviewed" title="Have You Ever Been Interviewed for Any Position in Somerville School?" class="form-control mandatoryvalue" onchange="interviewd(this.value)">
                                                                <option value=''></option>
                                                                <option value='-1' disabled>Select</option>
                                                                <option value='Yes'>Yes
                                                                </option>
                                                                <option value='No'>No
                                                                </option>
                                                            </select>

                                                        </div>

                                                        <div class="col-12  floating-label-wrap form-group has-feedback interview_detail" style="display: none;">
                                                            <label class="control-label">Have You Ever Been Interviewed for Any Position in Somerville School (Details) <span style="color: red;">*</span></label>
                                                            <input type="text" class="form-control inputTextBox" name="__ufdkey__Have_You_Ever_Been_Interviewed_Details" title="Have You Ever Been Interviewed for Any Position in Somerville School (Details)" id="__ufdkey__Have_You_Ever_Been_Interviewed_Details" />
                                                        </div>
                                                        <div class="col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Any Relative Working in Somerville? <span style="color: red;">*</span></label>
                                                            <select name="__ufdkey__Any_Relative_Working_in_Somerville" id="__ufdkey__Any_Relative_Working_in_Somerville" title="Any Relative Working in Somerville" class="form-control mandatoryvalue" onchange="relativesSumerville(this.value)">
                                                                <option value=''></option>
                                                                <option value='-1' disabled>Select</option>
                                                                <option value='Yes'>Yes
                                                                </option>
                                                                <option value='No'>No
                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="col-12  floating-label-wrap form-group has-feedback relative_detail" style="display: none;">
                                                            <label class="control-label">Any Relative Working in Somerville (Details) <span style="color: red;">*</span></label>
                                                            <input type="text" class="form-control inputTextBox" name="__ufdkey__Any_Relative_Working_in_Somerville_Details" title="Any Relative Working in Somerville (Details)" id="__ufdkey__Any_Relative_Working_in_Somerville_Details" />
                                                        </div>
                                                        <div class="col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Any Relative Working in Other Public School? <span style="color: red;">*</span></label>
                                                            <select name="__ufdkey__Any_Relative_Working_in_Other_Public_School" id="__ufdkey__Any_Relative_Working_in_Other_Public_School" title="Any Relative Working in Other Public School" class="form-control mandatoryvalue" onchange="relativesSumervilleOther(this.value)">
                                                                <option value=''></option>
                                                                <option value='-1' disabled>Select</option>
                                                                <option value='Yes'>Yes
                                                                </option>

                                                                <option value='No'>No
                                                                </option>
                                                            </select>

                                                        </div>

                                                        <div class="col-12  floating-label-wrap form-group has-feedback relative_detail_other" style="display: none;">
                                                            <label class="control-label">Any Relative Working in Other Public School Details <span style="color: red;">*</span></label>
                                                            <input type="text" class="form-control inputTextBox" name="__ufdkey__Any_Relative_Working_in_Other_Public_Details" title="Any Relative Working in Other Public School Details" id="__ufdkey__Any_Relative_Working_in_Other_Public_Details" />
                                                        </div>

                                                        <div class="col-12  floating-label-wrap form-group has-feedback ">
                                                            <label class="control-label">Identification Mark 1 <span style="color: red;">*</span></label>
                                                            <input type="text" class="form-control mandatoryvalue" name="__ufdkey__Identification_Mark" title="Identification Mark 1" id="__ufdkey__Identification_Mark" />
                                                        </div>
                                                        <div class="col-12  floating-label-wrap form-group has-feedback ">
                                                            <label class="control-label">Identification Mark 2 <span style="color: red;">*</span></label>
                                                            <input type="text" class="form-control mandatoryvalue" name="__ufdkey__Identification_Mark_2" title="Identification Mark 2" id="__ufdkey__Identification_Mark_2" />
                                                        </div>
                                                        <div class="col-6  floating-label-wrap form-group has-feedback ">
                                                            <label class="control-label">Height (Cms) <span style="color: red;">*</span></label>
                                                            <input type="text" class="form-control mandatoryvalue" name="__ufdkey__Height" title="Height (Cms)" id="__ufdkey__Height" />
                                                        </div>
                                                        <div class="col-6  floating-label-wrap form-group has-feedback ">
                                                            <label class="control-label">Weight (Kgs) <span style="color: red;">*</span></label>
                                                            <input type="text" class="form-control mandatoryvalue" name="__ufdkey__Weight" title="Weight (Kgs)" id="__ufdkey__Weight" />
                                                        </div>
                                                        <div class="col-12  floating-label-wrap form-group has-feedback ">
                                                            <label class="control-label">Eye Sight if corrected power used (left)</label>
                                                            <input type="text" class="form-control" name="__ufdkey__Eye_Sight_Left" title="Eye Sight if corrected power used (left)" id="__ufdkey__Eye_Sight_Left" />
                                                        </div>
                                                        <div class="col-12  floating-label-wrap form-group has-feedback ">
                                                            <label class="control-label">Eye Sight if corrected power used (right)</label>
                                                            <input type="text" class="form-control" name="__ufdkey__Eye_Sight_Right" title="Eye Sight if corrected power used (right)" id="__ufdkey__Eye_Sight_Right" />
                                                        </div>
                                                        <div class="col-12  floating-label-wrap form-group has-feedback ">
                                                            <label class="control-label">References 1 <span style="color: red;">*</span></label>
                                                            <input type="text" class="form-control mandatoryvalue" name="__ufdkey__REFERENCES" title="References 1" id="__ufdkey__REFERENCES" />
                                                        </div>
                                                        <div class="col-12  floating-label-wrap form-group has-feedback ">
                                                            <label class="control-label">References 2 <span style="color: red;">*</span></label>
                                                            <input type="text" class="form-control mandatoryvalue" name="__ufdkey__REFERENCES_2" title="References 2" id="__ufdkey__REFERENCES_2" />
                                                        </div>
                                                        <div class="col-12  floating-label-wrap form-group has-feedback ">
                                                            <label class="control-label">References 3</label>
                                                            <input type="text" class="form-control" name="__ufdkey__REFERENCES_3" title="References 3" id="__ufdkey__REFERENCES_3" />
                                                        </div>


                                                    </div>


                                                </div>
                                            </div>

                                            <div class="form-card">
                                                <div class="row heading-row">
                                                    <div class="col-8">
                                                        <h2 class="fs-title">Contact Details:</h2>
                                                    </div>

                                                </div>


                                                <div class="space-bottom">



                                                    <div class="row">


                                                        <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Permanent Address <span style="color: red;">*</span></label>
                                                            <input type="text" name="permanent_address" title="Permanent Address" id="permanent_address" class="form-control mandatoryvalue">

                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Current Address <span style="color: red;">*</span></label>
                                                            <input type="text" name="address" title="Current Address" id="address" class="form-control mandatoryvalue">

                                                        </div>



                                                        <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label"> Mobile No. <span style="color: red;">*</span></label>
                                                            <input name="mobileno" type="text" title="Mobile No." class="form-control mandatoryvalue numbervalue mobileno" id="mobileno" maxlength="10" />
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Alternative Mobile No. <span style="color: red;">*</span></label>
                                                            <input name="contactno" type="text" title="Alternative Mobile No." class="form-control mandatoryvalue numbervalue mobileno" id="contactno" maxlength="10" />
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label"> State <span style="color: red;">*</span></label>
                                                            <input name="state" type="text" title="State" class="form-control inputTextBox mandatoryvalue" id="state" />


                                                        </div>

                                                        <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label"> City <span style="color: red;">*</span></label>
                                                            <input name="city" type="text" title="City" class="form-control inputTextBox mandatoryvalue" id="city" />
                                                        </div>


                                                        <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Pin Code <span style="color: red;">*</span></label>
                                                            <input name="pincode" type="text" title="Pin Code" class="form-control numbervalue pincode mandatoryvalue" id="pincode" maxlength="6">
                                                        </div>



                                                    </div>








                                                </div>



                                                <div class="row heading-row">
                                                    <div class="col-8">
                                                        <h2 class="fs-title">Family Details :</h2>
                                                    </div>

                                                </div>


                                                <div class="space-bottom">
                                                    <div class="row">




                                                        <div class="col-xl-6 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Father's Name <span style="color: red;">*</span></label>
                                                            <input class="form-control inputTextBox mandatoryvalue" type="text" title="Father's Name" id="father_name" name="father_name">

                                                        </div>



                                                        <div class="col-xl-6 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Father's Occupation <span style="color: red;">*</span></label>
                                                            <input name="father_occupation" id="father_occupation" title="Father's Occupation" type="text" class="form-control mandatoryvalue inputTextBox">

                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Mother's Name <span style="color: red;">*</span></label>
                                                            <input name="mother_name" id="mother_name" title="Mother's Name" type="text" class="form-control inputTextBox mandatoryvalue">

                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Mother's Occupation <span style="color: red;">*</span></label>
                                                            <input name="mother_occupation" id="mother_occupation" title="Mother's Occupation" type="text" class="form-control mandatoryvalue inputTextBox">

                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-12  floating-label-wrap form-group has-feedback fresh">
                                                            <label class="control-label"> Spouse's Name</label>
                                                            <input type="text" class="form-control inputTextBox" name="spouse_name" title="Spouse's Name" id="spouse_name" />

                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-12  floating-label-wrap form-group has-feedback fresh">
                                                            <label class="control-label">Spouse's Occupation</label>
                                                            <input name="spouse_profession" title="Spouse's Occupation" id="spouse_profession" type="text" class="form-control inputTextBox">
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Number of Children</label>
                                                            <input name="__ufdkey__No_of_Child" maxlength="1" id="__ufdkey__No_of_Child" title="Number of Children" type="text" class="form-control numbervalue">
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Number of Children (Male)</label>
                                                            <input name="__ufdkey__No_of_Child_Male" maxlength="1" id="__ufdkey__No_of_Child_Male" title="Number of Children (Male)" type="text" class="form-control numbervalue">
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Number of Children (Female)</label>
                                                            <input name="__ufdkey__No_of_Child_Female" maxlength="1" id="__ufdkey__No_of_Child_Female" title="Number of Children (Female)" type="text" class="form-control numbervalue">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br />
                                            </div>
                                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                                            <button type="button" name="next" id="fnext" class="next action-button" value="Next">Next</button>
                                        </fieldset>
                                        <fieldset id="document-detail">

                                            <div class="form-card">
                                                <div class="row heading-row">
                                                    <div class="col-8">
                                                        <h2 class="fs-title">
                                                            Academic/Professional Qualification :</h2>
                                                    </div>
                                                    <div class="col-4">
                                                        <h2 class="steps">Step 2 / 3</h2>
                                                    </div>
                                                </div>

                                                <div class="space-bottom">

                                                    <div class="row">
                                                        <div class="col-md-12" style="overflow-x:scroll;">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered small table-responsive">
                                                                    <thead>
                                                                        <tr style="background-color:rgb(116 15 19); color:#fff ; font-size:14px;">
                                                                            <th style="width: 142px;">Qualification</th>
                                                                            <th>Main Subjects</th>
                                                                            <th style="width: 151px;">School/College</th>
                                                                            <th style="width: 200px;">Board/University</th>
                                                                            <th style="width: 130px;">Year of Passing</th>
                                                                            <th style="width: 176px;">Percentage of Marks</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="qualifica">
                                                                        <tr>
                                                                            <td class="tablequ">HIGH SCHOOL / 10TH <span style="color: red;">*</span></td>
                                                                            <td><input type="text" id="subjects_1" name="subjects_1" class="text_upper addcommaspace form-control mandatoryvalue" title="Subjects">
                                                                            </td>
                                                                            <td><input type="text" id="institutename_1" name="institutename_1" class="text_upper form-control mandatoryvalue " title="School/College">
                                                                            </td>

                                                                            <td><input type="text" id="university_1" name="university_1" class="text_upper form-control mandatoryvalue" title="Board/University">
                                                                            </td>
                                                                            <td><input type="text" id="passingyear_1" title="Year of Passing" name="passingyear_1" maxlength="4" class="text_upper form-control mandatoryvalue numbervalue ">
                                                                            </td>
                                                                            <td><input type="text" id="percantage_1" name="percantage_1" class="text_upper form-control mandatoryvalue floatvalue " title="Percentage of Marks">
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td class="tablequ">INTER/+2 <span style="color: red;">*</span></td>
                                                                            <td><input type="text" id="subjects_2" title="Subjects" name="subjects_2" class="text_upper addcommaspace form-control mandatoryvalue ">
                                                                            </td>
                                                                            <td><input type="text" id="institutename_2" title="School/College" name="institutename_2" class="text_upper form-control mandatoryvalue ">
                                                                            </td>

                                                                            <td><input type="text" id="university_2" title="Board/University" name="university_2" class="text_upper form-control mandatoryvalue">
                                                                            </td>
                                                                            <td><input type="text" id="passingyear_2" title="Year of Passing" name="passingyear_2" maxlength="4" class="text_upper form-control mandatoryvalue numbervalue ">
                                                                            </td>
                                                                            <td><input type="text" id="percantage_2" title="Percentage of Marks" name="percantage_2" class="text_upper form-control mandatoryvalue floatvalue ">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="tablequ">GRADUATION 1 <span style="color: red;">*</span></td>
                                                                            <td><input type="text" id="subjects_3" title="Subjects" name="subjects_3" class="text_upper addcommaspace form-control mandatoryvalue">
                                                                            </td>
                                                                            <td><input type="text" id="institutename_3" title="School/College" name="institutename_3" class="text_upper form-control mandatoryvalue">
                                                                            </td>
                                                                            <td><input type="text" id="university_3" title="Board/University" name="university_3" class="text_upper form-control mandatoryvalue">
                                                                            </td>

                                                                            <td><input type="text" id="passingyear_3" title="Year of Passing" name="passingyear_3" maxlength="4" class="text_upper form-control mandatoryvalue numbervalue">
                                                                            </td>
                                                                            <td><input type="text" id="percantage_3" title="Percentage of Marks" name="percantage_3" class="text_upper form-control mandatoryvalue floatvalue">
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td class="tablequ">GRADUATION 2 <span style="color: red;">*</span></td>
                                                                            <td><input type="text" id="subjects_6" title="Subjects" name="subjects_6" class="text_upper addcommaspace form-control mandatoryvalue">
                                                                            </td>
                                                                            <td><input type="text" id="institutename_6" title="School/College" name="institutename_6" class="text_upper form-control mandatoryvalue">
                                                                            </td>
                                                                            <td><input type="text" id="university_6" title="Board/University" name="university_6" class="text_upper form-control mandatoryvalue">
                                                                            </td>

                                                                            <td><input type="text" id="passingyear_6" title="Year of Passing" name="passingyear_6" maxlength="4" class="text_upper form-control mandatoryvalue numbervalue">
                                                                            </td>
                                                                            <td><input type="text" id="percantage_6" title="Percentage of Marks" name="percantage_6" class="text_upper form-control mandatoryvalue floatvalue">
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td class="tablequ">POST GRADUATION 1 <span style="color: red;">*</span></td>
                                                                            <td><input type="text" id="subjects_4" title="Subjects" name="subjects_4" class="text_upper addcommaspace form-control mandatoryvalue">
                                                                            </td>
                                                                            <td><input type="text" id="institutename_4" title="School/College" name="institutename_4" class="text_upper form-control mandatoryvalue">
                                                                            </td>
                                                                            <td><input type="text" id="university_4" title="Board/University" name="university_4" class="text_upper form-control mandatoryvalue">
                                                                            </td>

                                                                            <td><input type="text" id="passingyear_4" title="Year of Passing" name="passingyear_4" maxlength="4" class="text_upper form-control mandatoryvalue numbervalue">
                                                                            </td>
                                                                            <td><input type="text" id="percantage_4" title="Percentage of Marks" name="percantage_4" class="text_upper form-control mandatoryvalue floatvalue">
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td class="tablequ">POST GRADUATION 2 <span style="color: red;">*</span></td>
                                                                            <td><input type="text" id="subjects_7" title="Subjects" name="subjects_7" class="text_upper addcommaspace form-control mandatoryvalue">
                                                                            </td>
                                                                            <td><input type="text" id="institutename_7" title="School/College" name="institutename_7" class="text_upper form-control mandatoryvalue">
                                                                            </td>
                                                                            <td><input type="text" id="university_7" title="Board/University" name="university_7" class="text_upper form-control mandatoryvalue">
                                                                            </td>

                                                                            <td><input type="text" id="passingyear_7" title="Year of Passing" name="passingyear_7" maxlength="4" class="text_upper form-control mandatoryvalue numbervalue">
                                                                            </td>
                                                                            <td><input type="text" id="percantage_7" title="Percentage of Marks" name="percantage_7" class="text_upper form-control mandatoryvalue floatvalue">
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td class="tablequ">DOCTORATE <span style="color: red;">*</span></td>
                                                                            <td><input type="text" id="subjects_5" title="Subjects" name="subjects_5" class="text_upper addcommaspace form-control mandatoryvalue">
                                                                            </td>
                                                                            <td><input type="text" id="institutename_5" title="School/College" name="institutename_5" class="text_upper form-control mandatoryvalue">
                                                                            </td>
                                                                            <td><input type="text" id="university_5" title="Board/University" name="university_5" class="text_upper form-control mandatoryvalue">
                                                                            </td>

                                                                            <td><input type="text" id="passingyear_5" title="Year of Passing" name="passingyear_5" maxlength="4" class="text_upper form-control mandatoryvalue numbervalue">
                                                                            </td>
                                                                            <td><input type="text" id="percantage_5" title="Percentage of Marks" name="percantage_5" class="text_upper form-control mandatoryvalue floatvalue">
                                                                            </td>

                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">State reasons for gap, if any <span style="color: red;">*</span>
                                                            </label>
                                                            <input class="form-control mandatoryvalue inputTextBox" type="text" title="State reasons for gap, if any " id="__ufdkey__Reasons_for_Gaps" name="__ufdkey__Reasons_for_Gaps">
                                                        </div>
                                                    </div>
                                                </div>





                                                <div class="space-bottom">

                                                    <div class="row heading-row">
                                                        <div class="col-12">
                                                            <h2 class="fs-title"> Proficiency In Languages :</h2>
                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-xl-12 col-lg-6 col-12">
                                                            <div class="row">
                                                                <div class="col-sm-6 floating-label-wrap form-group has-feedback">
                                                                    <label class="control-label">LANGUAGE<span style="color: red;">*</span>
                                                                    </label>
                                                                    <input type="text" id="language_1" name="language_1" value='' class="form-control mandatoryvalue inputTextBox textbox text_upper" title="LANGUAGE" />
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <label style="font-size: 12px;" class="checkbox-inline ">
                                                                        <input type="checkbox" name="read_1" id="read_1" />&nbsp;&nbsp; Read
                                                                    </label>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <label style="font-size: 12px;" class="checkbox-inline">
                                                                        <input type="checkbox" name="write_1" id="write_1" />&nbsp;&nbsp; Write
                                                                    </label>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <label style="font-size: 12px;" class="checkbox-inline">
                                                                        <input type="checkbox" name="speak_1" id="speak_1" />&nbsp;&nbsp; Speak
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6 floating-label-wrap form-group has-feedback">
                                                                    <label class="control-label">LANGUAGE<span style="color: red;">*</span>
                                                                    </label>
                                                                    <input type="text" id="language_2" name="language_2" value='' class="form-control mandatoryvalue inputTextBox textbox text_upper" title="LANGUAGE" />
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <label style="font-size: 12px;" class="checkbox-inline">
                                                                        <input type="checkbox" name="read_2" id="read_2" />&nbsp;&nbsp; Read
                                                                    </label>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <label style="font-size: 12px;" class="checkbox-inline">
                                                                        <input type="checkbox" name="write_2" id="write_2" />&nbsp;&nbsp; Write
                                                                    </label>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <label style="font-size: 12px;" class="checkbox-inline">
                                                                        <input type="checkbox" name="speak_2" id="speak_2" />&nbsp;&nbsp; Speak
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-6 floating-label-wrap form-group has-feedback">
                                                                    <label class="control-label">LANGUAGE<span style="color: red;">*</span>
                                                                    </label>
                                                                    <input type="text" id="language_3" name="language_3" value='' class="form-control mandatoryvalue inputTextBox textbox text_upper" title="LANGUAGE" />
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <label style="font-size: 12px;" class="checkbox-inline">
                                                                        <input type="checkbox" name="read_3" id="read_3" />&nbsp;&nbsp; Read
                                                                    </label>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <label style="font-size: 12px;" class="checkbox-inline">
                                                                        <input type="checkbox" name="write_3" id="write_3" />&nbsp;&nbsp; Write
                                                                    </label>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <label style="font-size: 12px;" class="checkbox-inline">
                                                                        <input type="checkbox" name="speak_3" id="speak_3" />&nbsp;&nbsp; Speak
                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>









                                                    </div>




                                                </div>

                                            </div>

                                            <div class="form-card">
                                                <div class="space-bottom">
                                                    <div class="row heading-row">
                                                        <div class="col-8 guardian-detail">
                                                            <h2 class="fs-title"> Work Experience :</h2>
                                                        </div>

                                                        <div class="col-4">
                                                            <div style="display: inline-flex;">
                                                                <h2 class="fs-title">I Am Fresher:</h2> &nbsp;
                                                                <input type="checkbox" onchange="myFunction2();" id="Fresher-checkbox" style="margin-top:-7px;">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row" id="fresh">


                                                        <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Experience (In Years) <span style="color: red;">*</span></label>
                                                            <input type="text" name="total_experience_in_years" title="Experience (In Years)" id="total_experience_in_years" maxlength="2" class="form-control mandatoryvalue numbervalue starmark">

                                                        </div>



                                                        <div class="col-xl-12 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-responsive" id="maintable">
                                                                    <thead>
                                                                        <tr style="background-color:rgb(116 15 19);color:#fff">
                                                                            <th style="width: 200px;">Name of Organisation </th>
                                                                            <th>From (year)</th>
                                                                            <th>To (year)</th>
                                                                            <th>Designation </th>
                                                                            <th style="width: 200px;">Job Responsibilties </th>
                                                                            <th style="width: 200px;">Reason for Leaving </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><input type="text" id="organization_name_1" name="organization_name_1" class="text_upper form-control mandatoryvalue currentmandiv " title="Name of Organisation">
                                                                            </td>
                                                                            <td style="min-width: 140px;"><input type="text" name="from_date_1" id="from_date_1" class="tcal text_upper form-control mandatoryvalue currentmandiv  tcalInput datepicker" readonly="" title="From"></td>
                                                                            <td style="min-width: 140px;"><input type="text" name="to_date_1" id="to_date_1" class="tcal text_upper form-control mandatoryvalue currentmandiv  tcalInput datepicker" readonly="" title="TO"></td>
                                                                            <td><input type="text" id="designation_1" name="designation_1" class="text_upper form-control mandatoryvalue currentmandiv " title="Designation">
                                                                            </td>
                                                                            <td><input type="text" id="responsibilities_1" name="responsibilities_1" class="text_upper form-control mandatoryvalue currentmandiv " title="Job Responsibilties">
                                                                            </td>
                                                                            <td><input type="text" id="__ufdkey__Reason_for_Leaving_1" name="__ufdkey__Reason_for_Leaving_1" class="text_upper form-control mandatoryvalue currentmandiv " title="Reason for Leaving">
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <button class="btn btn-sm btn-primary add_row_button" type="button" onclick="addWorkExpTable()" style="background-color:rgb(116 15 19);float: left; ">
                                                                    <i class="fa fa-plus-circle position-left"></i> Add
                                                                    Row
                                                                </button>
                                                                <button class="btn btn-sm btn-primary remove_row_button" type="button" onclick="deleteWorkExpTable()" style="background-color:rgb(116 15 19);float: right;display:none; ">
                                                                    <i class="fa fa-plus-circle position-left"></i> Remove
                                                                    Row
                                                                </button>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="row heading-row">
                                                        <div class="col-8 guardian-detail">
                                                            <h2 class="fs-title"> Training (Professional / Vocational) :</h2>
                                                        </div>
                                                    </div>
                                                    <div class="row" id="fresh">
                                                        <div class="col-xl-12 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-responsive" id="training_maintable">
                                                                    <input type="hidden" name="Training_exp_count" id="Training_exp_count" value="1">
                                                                    <thead>
                                                                        <tr style="background-color: rgb(116 15 19);color:#fff">
                                                                            <th>Organisation <span style="color: red;">*</span></th>
                                                                            <th>Nature of training <span style="color: red;">*</span></th>
                                                                            <th>From <span style="color: red;">*</span></th>
                                                                            <th>to <span style="color: red;">*</span></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><input type="text" id="__ufdkey__Training_Professional_Vocational_1" name="__ufdkey__Training_Professional_Vocational_1" class="text_upper form-control mandatoryvalue " title="Organisation">
                                                                            </td>
                                                                            <td><input type="text" id="__ufdkey__Training_Professional_Vocational_Training_1" name="__ufdkey__Training_Professional_Vocational_Training_1" class="text_upper form-control mandatoryvalue " title="Nature of training">
                                                                            </td>
                                                                            <td style="min-width: 140px;"><input type="text" id="__ufdkey__Training_From_Date_1" name="__ufdkey__Training_From_Date_1" class="tcal datepicker text_upper form-control mandatoryvalue  tcalInput" readonly="" title="From"></td>
                                                                            <td style="min-width: 140px;"><input type="text" id="__ufdkey__Training_to_Date_1" name="__ufdkey__Training_to_Date_1" class="tcal datepicker text_upper form-control mandatoryvalue  tcalInput" readonly="" title="To"></td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                                <button class="btn btn-sm btn-primary add_Training_row_button" type="button" onclick="addTrainingTable()" style="background-color:rgb(116 15 19);float: left; ">
                                                                    <i class="fa fa-plus-circle position-left"></i> Add
                                                                    Row
                                                                </button>
                                                                <button class="btn btn-sm btn-primary remove_Training_row_button" type="button" onclick="deleteTrainingTable()" style="background-color:rgb(116 15 19);float: right;display:none; ">
                                                                    <i class="fa fa-plus-circle position-left"></i> Remove
                                                                    Row
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Details of publications, thesis, if any <span style="color: red;">*</span>
                                                            </label>
                                                            <input class="form-control mandatoryvalue inputTextBox" type="text" title="Details of publications, thesis, if any" id="__ufdkey__Details_of_Publication_Thesis" name="__ufdkey__Details_of_Publication_Thesis">
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                            <label class="control-label">Extra curricular activities / hobbies <span style="color: red;">*</span>
                                                            </label>
                                                            <input class="form-control mandatoryvalue inputTextBox" type="text" title="Extra curricular activities / hobbies" id="__ufdkey__Extra_Curricular_Activities_Hobbies" name="__ufdkey__Extra_Curricular_Activities_Hobbies">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="row currentdiv heading-row">
                                                                <div class="col-8">
                                                                    <h2 class="fs-title">Current Job Information:</h2>
                                                                </div>
                                                            </div>
                                                            <div class="row currentdiv">
                                                                <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                                    <label class="control-label">Name of Organisation <span style="color: red;">*</span>
                                                                    </label>
                                                                    <input class="form-control mandatoryvalue currentmandiv inputTextBox" type="text" title="Name of Organisation" id="previous_employer_name" name="previous_employer_name">

                                                                </div>

                                                                <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                                    <label class="control-label">Address<span style="color: red;">*</span></label>
                                                                    <input name="previous_employer_address" id="previous_employer_address" title="Office Address" type="text" class="form-control mandatoryvalue currentmandiv starmark">

                                                                </div>

                                                                <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                                    <label class="control-label">Contact Number <span style="color: red;">*</span></label>
                                                                    <input name="previous_employer_contact_number" id="previous_employer_contact_number" title="Office Contact Number" type="text" class="form-control numbervalue mobileno  mandatoryvalue currentmandiv starmark" maxlength="10">

                                                                </div>

                                                                <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                                    <label class="control-label">Present
                                                                        Designation
                                                                        <span style="color: red;">*</span></label>
                                                                    <input name="previous_employment_designation" id="previous_employment_designation" title="Present Designation" type="text" class="form-control inputTextBox mandatoryvalue currentmandiv starmark">

                                                                </div>
                                                                <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                                    <label class="control-label">Current Salary<span style="color: red;">*</span></label>
                                                                    <input name="previous_employment_total_emoluments" title="Current CTC(in thousands)" id="previous_employment_total_emoluments" type="text" class="form-control mandatoryvalue currentmandiv" onkeypress="return blockSpecialChar(event);">
                                                                </div>


                                                                <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                                    <label class="control-label">Expected Salary<span style="color: red;">*</span></label>
                                                                    <input name="exprectedCTC" title="Expected Salary" id="exprectedCTC" type="text" class="form-control mandatoryvalue currentmandiv ">
                                                                </div>

                                                                <div class="col-xl-4 col-lg-6 col-12  floating-label-wrap form-group has-feedback">
                                                                    <label class="control-label">Notice Period<span style="color: red;">*</span></label>
                                                                    <input name="__ufdkey__Notice_Period" title="Notice Period" id="__ufdkey__Notice_Period" type="text" class="form-control mandatoryvalue currentmandiv">
                                                                </div>
                                                            </div>
                                                            <div class="row heading-row">
                                                                <div class="col-8">
                                                                    <h2 class="fs-title">GIVE US A BRIEF ABOUT YOURSELF (300 WORDS):</h2>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-12 col-lg-12 col-12  floating-label-wrap form-group has-feedback">
                                                                    <label class="control-label">KINDLY WRITE HERE <span style="color: red;">*</span>
                                                                    </label>
                                                                    <textarea col='3' class="form-control mandatoryvalue wordlimit300" title="KINDLY WRITE HERE" id="__ufdkey__Other_Additional_Information" name="__ufdkey__Other_Additional_Information"></textarea>

                                                                </div>


                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>





                                                <div class="space-bottom">

                                                    <div class="row heading-row">
                                                        <div class="col-12">
                                                            <h2 class="fs-title">Documents:</h2>
                                                        </div>

                                                    </div>

                                                    <div class="row choose-file-section mb-0 cls-choose">




                                                        <div class="col-xl-6 col-lg-6 col-12">
                                                            <label>Upload passport size Photograph (JPG/PNG)<span style="color: red;">*</span></label>
                                                            <div class="file-upload">
                                                                <div class="file-select">
                                                                    <div class="file-select-button" id="fileName">Choose
                                                                        File</div>
                                                                    <div class="file-select-name noFile" id="noFile">No
                                                                        file chosen...</div>
                                                                    <input type="file" onchange="document_ext(this.id)" value="" title="Upload passport size(JPG/PNG)" name="photo" id="photo" class="chooseFile mandatoryvalue fileext" ext='png,jpg'>
                                                                    <i class="fa fa-times remove-icon close-icon" id="close-icon"></i>
                                                                </div>
                                                            </div>

                                                            <span class="custom-file-size">File size should not be more
                                                                than 1 MB.</span>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-12">
                                                            <label>Upload Resume (MS-Word, PDF) <span style="color: red;">*</span></label>
                                                            <div class="file-upload3">
                                                                <div class="file-select">
                                                                    <div class="file-select-button" id="fileName3">
                                                                        Choose File</div>
                                                                    <div class="file-select-name noFile" id="noFile3">No
                                                                        file chosen...</div>
                                                                    <input type="file" onchange="document_ext(this.id)" name="resume" title="Upload Resume (MS-Word, PDF)" class="chooseFile fileext mandatoryvalue" id="resume" ext='pdf,docx,doc'>

                                                                    <i class="fa fa-times remove-icon close-icon" id="close-icon3"></i>
                                                                </div>
                                                            </div>
                                                            <span class="custom-file-size">File size should not be more
                                                                than 1 MB.</span>
                                                        </div>



                                                    </div>


                                                    <div class="disclaimer-box">
                                                        <div class="row heading-row">
                                                            <div class="col-12">
                                                                <h2 class="fs-title">Declaration:</h2>
                                                            </div>
                                                        </div>

                                                        <div class="box-content">
                                                            <p><i class="fa fa-hand-o-right"></i> I, the applicant,
                                                                state that all information given above is true and
                                                                correct.</p>
                                                            <p><i class="fa fa-hand-o-right"></i>I understand that
                                                                submission of the Application Form is a preliminary step
                                                                in the selection of candidature at SOMERVILLE
                                                                INTERNATIONAL SCHOOL
                                                                and does not guarantee a job.</p>
                                                            <p><i class="fa fa-hand-o-right"></i> I agree to abide by
                                                                all decisions taken by the SOMERVILLE INTERNATIONAL
                                                                SCHOOL</p>

                                                            <p class="mt-2"> <input type="checkbox" id="disclaimer-checkbox"> <b>I
                                                                    Agree</b></p>
                                                        </div>

                                                    </div>

                                                    <!-- Child Info code End -->





                                                </div>
                                            </div>

                                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                            <input type="button" name="next" id="chooose-file-btn" class="action-button submitnext" value="Submit" />
                                        </fieldset>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- New Multistep Regisration Form  End Here  -->



                <!-- School Detail view in mobile code start -->



                <!-- School Detail View in mobile code end -->


            </div>

        </div>

    </div>



    <!--===============================================================================================-->

    <script src="../../../resources.edunexttechnologies.com/default-form/vendor/jquery/jquery-3.2.1.min.js"></script>

    <!--===============================================================================================-->

    <script src="../../../resources.edunexttechnologies.com/default-form/vendor/animsition/js/animsition.min.js">
    </script>

    <!--===============================================================================================-->

    <script src="../../../resources.edunexttechnologies.com/default-form/vendor/bootstrap/js/popper.js"></script>

    <script src="../../../resources.edunexttechnologies.com/default-form/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- /Material Date Picker JS files -->
    <script src="js/duDatepicker.js" type="text/javascript"></script>

    <!-- /Form Validation js files -->
    <script src="js/jquery.validate.js"></script>

    <script src="js/formAnimation.js"></script>

    <!-- <script src="js/shake.js"></script> -->
    <!-- <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js"></script> -->



    <script src="js/main.js"></script>

    <!-- <script>
        function setsub() {
            var multipleCancelButton = new Choices('#subjectid', {
                removeItemButton: true,
                maxItemCount: 5,
                searchResultLimit: 5,
                renderChoiceLimit: 5
            });
        }

        function destroysub() {
            $('#subjectid').destroy();
        }
    </script> -->
</body>




<!-- Mirrored from somervilleinternational.in/Forms/Recruitment/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Aug 2025 08:31:54 GMT -->
</html>
<script>
    $(document).ready(function() {
        var wordLimit = 300;
        $('.wordlimit300').on('keydown input', function() {
            var text = $(this).val();
            // var wordCountDisplay = document.getElementById('wordCountDisplay');
            var words = text.trim().split(/\s+/);
            var maxWords = 300;
            var wordCount = words.length;
            if (wordCount > wordLimit) {
                words = words.slice(0, wordLimit);
                $(this).val(words.join(' '));
                wordCount = maxWords;
            }
            $(this).next('.wordCountDisplay').text(wordCount + " words");
        });

    });
</script>