////////////////////// ONLY CHARACTERS AND NUMBERS ALLOWED START ////////////////////////////
document.addEventListener('input', function (event) {
    if (event.target.classList.contains('inputTextBox')) {
        var inputValue = event.target.value;
        var validCharactersRegex = /^[a-zA-Z\s]*$/; // Add \s to allow spaces
        if (!validCharactersRegex.test(inputValue)) {
            event.target.value = inputValue.replace(/[^a-zA-Z\s]/g, ''); // Add \s to allow spaces
        }
    }
});
document.addEventListener('input', function (event) {
    if (event.target.classList.contains('numbervalue')) {
        var inputValue = event.target.value;
        var validNumbersRegex = /^[0-9]*$/;
        if (!validNumbersRegex.test(inputValue)) {
            event.target.value = inputValue.replace(/[^0-9]/g, '');
        }
    }
});
////////////////////// ONLY CHARACTERS AND NUMBERS ALLOWED END /////////////////////////////
function proced() {
    var checkProced = document.getElementById('checkme');
    var checkButton = document.getElementById('fnexti');
    if (checkProced.checked) {
        checkButton.disabled = false;
        $('#fnexti').css('color', '#fff');
        $('#fnexti').css('background', '#741014');
    } else {
        checkButton.disabled = true;
        $('#fnexti').css('color', '#741014');
        $('#fnexti').css('background', '#7410142b');
    }
}
/// get browser specific data ///
function getBrowserInfo() {
    var name = 'Unknown';
    var version = 'Unknown';
    name = navigator.appCodeName;
    version = navigator.appVersion;
    document.getElementById('appCodeName').value = name;
    document.getElementById('appVersion').value = version;
}
/// get browser specific data   ///     

$(document).ready(function () {
    getBrowserInfo();
    $('#academicyearid option[value="3"]').remove();

    $('#fnexti').on('click', function () {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
    });

    $('#dateofbirth').on('change', function () {
        spostRequest();
    });
    $('#admissionid').on('change', function () {
        spostRequest();
    });

    $(".next").click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
        return false;
    });
     // set address function
    $('#sameaddress').change(function () {
        setPermanentAddress();
    });
    // set address function

    $('#academicyearid option[value="4"]').remove(); 
    // class on change event    
    $('#academicyearid').on('change', function () {
        var academicyearid = $(this).val();
        var option = '';
        $.ajax({
            url: 'js/edu-custom.php',
            type: 'POST',
            data: { academicyearid: academicyearid },
            success: function (data) {
                $("#admissionid").empty();
                option += data;
                $("#admissionid").append(option);
                $("#admissionid").parent().removeClass('focused');
                
                $("#admissionid option[value='15']").remove();
                $("#admissionid option[value='16']").remove();
                $("#admissionid option[value='30']").remove();
                $("#admissionid option[value='31']").remove();
                $("#admissionid option[value='32']").remove();
                $("#admissionid option[value='28']").remove();
                $("#admissionid option[value='47']").remove();
                $("#admissionid option[value='48']").remove();
                $("#admissionid option[value='49']").remove();
            },
            error: function (jqXHR, textStatus, error) {
                console.error(error);
            }
        });
        var getYear = $(this).find('option:selected').text();
        $('#getAcademicyear').text(getYear);
    });
    
    // siblings geting fetch request from
    $(".checkbox-row").hide();
    $(".getsibdata").hide();
    $("#cnf-checkbox").click(function () {
        if ($(this).is(":checked")) {
            $(".checkbox-row").show(1000);
            $('#sibling_enrollment').addClass('mandatoryvalue');
            $('#sibling_mobileno').addClass('mandatoryvalue');
            $('.forFetchDatadiv').hide();
            $('.sib_hide').show();
        }
        else {
            nullSiblingData();
        }
    });
    $('#getSibData').on('click', function () {
        $('.loader').show();
        var sibling_enrollment = $('#sibling_enrollment').val();
        var sibling_mobileno = $('#sibling_mobileno').val();
        var url = 'js/edu-custom.php';
        $.ajax({
            url: url,
            type: 'POST',
            data: { siblingenrollno: sibling_enrollment, siblingmobileno: sibling_mobileno },
            success: function (data) {
                if (data == 'No data retrieved') {
                    alert('Please enter the correct Admission Number or Mobile Number sent to you via email or provided by the school.');
                    nullSiblingData();
                    setTimeout(() => {
                        $('.loader').hide();
                    }, 1000);
                    return false;
                } else {
                    $(".getsibdata").show(1000);
                    siblingupdatepage(data);
                    setTimeout(() => {
                        $('.loader').hide();
                        $('.error').remove();
                    }, 1000);
                }
            },
            error: function (eachError, error) {
                console.error(eachError);
            }
        });
    });
});


function nullSiblingData() {
    $(".getsibdata").hide(1000);
    $(".checkbox-row").hide(1000);
    if ($('#enq-checkbox').is(":checked")) {
        if ($('#enquiryid').val() != '') {
            $('.forFetchDatadiv').show();
        } else {
            $('.forFetchDatadiv').hide();
        }
    } else {
        $('.forFetchDatadiv').show();
    }
    setTimeout(function () {
        $(".siblingenroll").val('').removeAttr('readonly')
            .removeAttr('disabled').removeClass('mandatoryvalue').parent().removeClass('focused');
    
        $('#sibling_mobileno-error').remove();
        $('#cnf-checkbox').prop('checked', false);

        $("#sibling_name").val('').removeAttr('disabled').parent().removeClass('focused');
        $("#sibling_class").val('').removeAttr('disabled').parent().removeClass('focused');
        $("#address").val('').removeAttr('disabled').parent().removeClass('focused');
        $("#state").val('').removeAttr('disabled').parent().removeClass('focused');
        $("#pin").val('').removeAttr('disabled').parent().removeClass('focused');
        $("#city").val('').removeAttr('disabled').parent().removeClass('focused');
        $("#religionid").val('').removeAttr('disabled').parent().removeClass('focused');
        $("#father_first_name").val('').removeAttr('disabled').parent().removeClass('focused');
        $("#father_middle_name").val('').removeAttr('disabled').parent().removeClass('focused');
        $("#father_last_name").val('').removeAttr('disabled').parent().removeClass('focused');
        $("#mother_first_name").val('').removeAttr('disabled').parent().removeClass('focused');
        $("#mother_middle_name").val('').removeAttr('disabled').parent().removeClass('focused');
        $("#mother_last_name").val('').removeAttr('disabled').parent().removeClass('focused');
        $("#mothermobileno").val('').removeAttr('disabled').parent().removeClass('focused');
        $("#motherofficeaddress").val('').removeAttr('disabled').parent().removeClass('focused');
        $("#fathermobileno").val('').removeAttr('disabled').parent().removeClass('focused');
        $("#fatherofficeaddress").val('').removeAttr('disabled').parent().removeClass('focused');
        $("#sibling_profile_id").val('').removeAttr('disabled').parent().removeClass('focused');

        $('#fatherdesignation').val('').removeAttr('disabled').parent().removeClass('focused');
        $('#motherdesignation').val('').removeAttr('disabled').parent().removeClass('focused');
        $('#address_correspondence').val('').removeAttr('disabled').parent().removeClass('focused');
        $('#country_correspondence').val('').removeAttr('disabled').parent().removeClass('focused');
        $('#state_correspondence').val('').removeAttr('disabled').parent().removeClass('focused');
        $('#city_correspondence').val('').removeAttr('disabled').parent().removeClass('focused');
        $('#pin_correspondence').val('').removeAttr('disabled').parent().removeClass('focused');
        $('#country').val('').removeAttr('disabled').parent().removeClass('focused');

    }, 1000);
}

function siblingupdatepage(str) {
    var json = eval('(' + str + ')');
    if (json.data == "YES") {
        var fathername = valuecheck(json.fathername);
        var mothername = valuecheck(json.mothername);
        var address = valuecheck(json.address);
        var city = valuecheck(json.city);
        var state = valuecheck(json.state);
        var country = valuecheck(json.country);
        var pin = valuecheck(json.pin);
        var correspondenceAddress = valuecheck(json.correspondenceAddress);
        var correspondenceCity = valuecheck(json.correspondenceCity);
        var correspondenceState = valuecheck(json.correspondenceState);
        var correspondenceCountry = valuecheck(json.correspondenceCountry);
        var correspondencePincode = valuecheck(json.correspondencePincode);
        var religionid = selectvaluecheck(json.religionid);
        var mothermobileno = valuecheck(json.mothermobileno);
        var motherofficeaddress = valuecheck(json.motherofficeaddress);
        var fathermobileno = valuecheck(json.fathermobileno);
        var fatherofficeaddress = valuecheck(json.fatherofficeaddress);
        var motherdesignation = valuecheck(json.motherdesignation);
        var fatherdesignation = valuecheck(json.fatherdesignation);
        var siblingName = valuecheck(json.name);
        var siblingClass = valuecheck(json.class);
        if ($('#enq-checkbox').is(":checked")) {
            if ($('#enquiryid').val() != '') {
                $('.forFetchDatadiv').show();
            } else {
                $('.forFetchDatadiv').hide();
            }
        } else {
            $('.forFetchDatadiv').show();
        }

        $("#sibling_name").val(siblingName);
        if (siblingName != '') { $("#sibling_name").parent().addClass('focused'); }

        $("#sibling_class").val(siblingClass);
        if (siblingClass != '') { $("#sibling_class").parent().addClass('focused'); }

        $(".siblingenroll").attr('readonly', 'true');

        $("#address_correspondence").val(correspondenceAddress);
        if (correspondenceAddress != '') { $("#address_correspondence").parent().addClass('focused'); }
        $("#address_correspondence").removeAttr('disabled', 'disabled');

        $("#state_correspondence").val(correspondenceState);
        if (correspondenceState != '') { $("#state_correspondence").parent().addClass('focused'); }

        $("#country_correspondence").val(correspondenceCountry);
        if (correspondenceCountry != '') { $("#country_correspondence").parent().addClass('focused'); }

        $("#pin_correspondence").val(correspondencePincode);
        if (correspondencePincode != '') { $("#pin_correspondence").parent().addClass('focused'); }

        $("#city_correspondence").val(correspondenceCity);
        if (correspondenceCity != '') { $("#city_correspondence").parent().addClass('focused'); }

        $("#address").val(address);
        if (address != '') { $("#address").parent().addClass('focused'); }

        $("#state").val(state);
        if (state != '') { $("#state").parent().addClass('focused'); }

        $("#country").val(country);
        if (country != '') { $("#country").parent().addClass('focused'); }

        $("#pin").val(pin);
        if (pin != '') { $("#pin").parent().addClass('focused'); }

        $("#city").val(city);
        if (city != '') { $("#city").parent().addClass('focused'); }

        $("#religionid").val(religionid);
        if (religionid != '') { $("#religionid").parent().addClass('focused'); }

        $("#fatherdesignation").val(fatherdesignation);
        if (fatherdesignation != '') { $("#fatherdesignation").parent().addClass('focused'); }

        $("#motherdesignation").val(motherdesignation);
        if (motherdesignation != '') { $("#motherdesignation").parent().addClass('focused'); }

        if (fathername != '') {
            var namearr = fathername.split(' ');
            if (namearr.length == 1) {
                var fnamecap = namearr[0];
                var fname = fnamecap.replace(fnamecap[0], fnamecap[0].toUpperCase());
                $("#father_first_name").val(fname);
                $("#father_first_name").parent().addClass('focused');
            }
            else if (namearr.length == 2) {
                var fnamecap = namearr[0];
                var fname = fnamecap.replace(fnamecap[0], fnamecap[0].toUpperCase());
                var lnamecap = namearr[1];
                var lname = lnamecap.replace(lnamecap[0], lnamecap[0].toUpperCase());
                $("#father_first_name").val(fname);
                $("#father_first_name").parent().addClass('focused');
                $("#father_last_name").val(lname);
                $("#father_last_name").parent().addClass('focused');
            }
            else {
                var fnamecap = namearr[0];
                var fname = fnamecap.replace(fnamecap[0], fnamecap[0].toUpperCase());
                var mnamecap = namearr[1];
                var mname = mnamecap.replace(mnamecap[0], mnamecap[0].toUpperCase());
                var lnamecap = namearr[2];
                var lname = lnamecap.replace(lnamecap[0], lnamecap[0].toUpperCase());

                $("#father_first_name").val(fname);
                $("#father_first_name").parent().addClass('focused');
                $("#father_middle_name").val(mname);
                $("#father_middle_name").parent().addClass('focused');
                $("#father_last_name").val(lname);
                $("#father_last_name").parent().addClass('focused');
            }
        } else {
            $("#father_first_name").val('');
            $("#father_first_name").parent().removeClass('focused');
            $("#father_middle_name").val('');
            $("#father_middle_name").parent().removeClass('focused');
            $("#father_last_name").val('');
            $("#father_last_name").parent().removeClass('focused');
        }


        if (mothername != '') {
            var namearr = mothername.split(' ');
            if (namearr.length == 1) {
                var fnamecap = namearr[0];
                var fname = fnamecap.replace(fnamecap[0], fnamecap[0].toUpperCase());
                $("#mother_first_name").val(fname);
                $("#mother_first_name").parent().addClass('focused');
            }
            else if (namearr.length == 2) {
                var fnamecap = namearr[0];
                var fname = fnamecap.replace(fnamecap[0], fnamecap[0].toUpperCase());
                var lnamecap = namearr[1];
                var lname = lnamecap.replace(lnamecap[0], lnamecap[0].toUpperCase());
                $("#mother_first_name").val(fname);
                $("#mother_first_name").parent().addClass('focused');
                $("#mother_last_name").val(lname);
                $("#mother_last_name").parent().addClass('focused');
            }
            else {
                var fnamecap = namearr[0];
                var fname = fnamecap.replace(fnamecap[0], fnamecap[0].toUpperCase());
                var mnamecap = namearr[1];
                var mname = mnamecap.replace(mnamecap[0], mnamecap[0].toUpperCase());
                var lnamecap = namearr[2];
                var lname = lnamecap.replace(lnamecap[0], lnamecap[0].toUpperCase());

                $("#mother_first_name").val(fname);
                $("#mother_first_name").parent().addClass('focused');
                $("#mother_middle_name").val(mname);
                $("#mother_middle_name").parent().addClass('focused');
                $("#mother_last_name").val(lname);
                $("#mother_last_name").parent().addClass('focused');
            }
        } else {
            $("#mother_first_name").val('');
            $("#mother_first_name").parent().removeClass('focused');
            $("#mother_middle_name").val('');
            $("#mother_middle_name").parent().removeClass('focused');
            $("#mother_last_name").val('');
            $("#mother_last_name").parent().removeClass('focused');
        }
        $("#mothermobileno").val(mothermobileno);
        if (mothermobileno != '') { $("#mothermobileno").parent().addClass('focused'); }

        $("#motherofficeaddress").val(motherofficeaddress);
        if (motherofficeaddress != '') { $("#motherofficeaddress").parent().addClass('focused'); }

        $("#fathermobileno").val(fathermobileno);
        if (fathermobileno != '') { $("#fathermobileno").parent().addClass('focused'); }

        $("#fatherofficeaddress").val(fatherofficeaddress);
        if (fatherofficeaddress != '') { $("#fatherofficeaddress").parent().addClass('focused'); }

        document.getElementById("sibling_profile_id").value = valuecheck(json.id);
    } else {
        $(".siblingenroll").val("");
        $(".siblingenroll").focus();
        $(".siblingenroll").removeAttr('readonly');
        nullSiblingData();
    }
}
// set permanent address //
function setPermanentAddress() {
    var CAdd = $('#address_correspondence').val();
    var Ccountry = $('#country_correspondence').val();
    var CState = $('#state_correspondence').val();
    var CCity = $('#city_correspondence').val();
    var PCode = $('#pin_correspondence').val();

    if ($("#sameaddress").is(":checked")) {
        $('#address').val(CAdd);
        $('#country').val(Ccountry);
        $('#state').val(CState);
        $('#city').val(CCity);
        $('#pin').val(PCode);
        $("#address").parent().addClass('focused');
        $("#country").parent().addClass('focused');
        $("#state").parent().addClass('focused');
        $("#city").parent().addClass('focused');
        $("#pin").parent().addClass('focused');
    } else {
        $('#address').val('');
        $('#country').val('');
        $('#state').val('');
        $('#city').val('');
        $('#pin').val('');
        $("#address").parent().removeClass('focused');
        $("#country").parent().removeClass('focused');
        $("#state").parent().removeClass('focused');
        $("#city").parent().removeClass('focused');
        $("#pin").parent().removeClass('focused');
    }
    $('#address-error').remove();
    $('#country-error').remove();
    $('#state-error').remove();
    $('#city-error').remove();
    $('#pin-error').remove();
}
// set permanent address //

// Guardian Check box code js start
$(document).ready(function () {
    $("#guardian-row").hide();
    $("#guardian-checkbox").click(function () {
        $('label.error').remove();
        if ($(this).is(":checked")) {
            $("#guardian-row").show(1000);
            $("#guardian_name").addClass('mandatoryvalue');
            $("#guardian_mobileno").addClass('mandatoryvalue');
            // $("#guardian_address").addClass('mandatoryvalue');
            $("#identity_proof_guardian").addClass("mandatoryvalue");
            $(".starMark").show();
            $(".guardian_doc").show();
        }

        else {
            $("#guardian-row").hide(1000);
            setTimeout(function () { $('#guardian-row').find(':input').val(''); $('#guardian-row').find(':input').parent().removeClass('focused'); }, 1000);
            $("#guardian_name").removeClass("mandatoryvalue");
            $("#guardian_mobileno").removeClass("mandatoryvalue");
            // $("#guardian_address").removeClass("mandatoryvalue");
            $("#identity_proof_guardian").removeClass("mandatoryvalue");
            $(".starMark").hide();
            $(".guardian_doc").hide();
        }
    });


    if (navigator.userAgent.indexOf("Chrome") != -1) { }
    else if (navigator.userAgent.indexOf("Edg") != -1) { }
    else if (navigator.userAgent.indexOf("Safari") != -1) { }
    else if (navigator.userAgent.indexOf("Firefox") != -1) { }
    else {
        alert('Please use a compatible browser like Chrome,Edge,Safari,Firefox');
        $("body").text('');
    }
    detectIE();
});

// Guardian Check box code js end
function detectIE() {

    try {

        var isIE = /*@cc_on!@*/false || !!document.documentMode;

        if (!isIE) {
            // Fallback to UserAgent detection for IE
            if (navigator.userAgent.indexOf("MSIE") > 0) {
                return true;
            } else {
                return false;
            }
        }

        //return true;
        alert('Please use newer version of browser');
        $("#myform").removeAttr('action');
        $("#myform").hide();


    } catch (e) {

        var error = e.toString();

        console.log(error);
    }
}
//////////////////////////// validate age criteria ///////////////////////////
function spostRequest() {
    var getclass = document.getElementById("admissionid").value;
    var getdob = document.getElementById("dateofbirth").value;
    if (getclass != '' && getdob != '') {
        $.ajax({
            url: 'js/edu-custom.php',
            type: 'POST',
            data: { getclass: getclass, getdob: getdob },
            success: function (response) {
                if (response == "Successfully") {
                    $("#fnext").removeAttr('disabled');
                } else {
                    alert(response);
                    $('#dateofbirth').val('').parent().removeClass('focused');
                    $('#__ufdkey__Age_date').val(' ').parent().removeClass('focused');

                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            }
        });
    }
}
//////////////////////////// validate age criteria ///////////////////////////

//------------------------Feth enquiry data--------------------------------------

function selectvaluecheck(value) {
    if (value == undefined) {
        value = "-1";
    }
    return value;
}
function valuecheck(value) {
    if (value == undefined) {
        value = "";
    }
    return value;
}

function getclass() {
    var academicyearid = $("#academicyearid").val();
    var option = '';
    $.ajax({
        url: 'js/edu-custom.php',
        type: 'POST',
        data: { academicyearid: academicyearid },
        success: function (data) {
            $("#admissionid").empty();
            option += data;
            $("#admissionid").append(option);
        },
        error: function (jqXHR, textStatus, error) {
            console.error(error);
        }
    });
}

//-------------------------upload image validation lessthen 1MB start---------------------------
function document_ext(str) {
    var inputElement = document.getElementById(str);
    var file = inputElement.files[0];

    if (file) {
        var size = file.size / 1024 / 1024; // Convert bytes to MB

        if (size > 1) {
            alert('File should be less than 1 MB');
            inputElement.value = '';
        }
    }
}
//-------------------------upload image validation lessthen 1MB end---------------------------

// function getStream(val) {
//     if (val == '45' || val == '44') {
//         $('#streamdiv').show();
//     }
//     else {
//         $('#streamdiv').hide();
//     }
// }
// -----------------------age calculate--------------------


function getagee() {
    var academicyearid = $('#academicyearid').val();
    var dateString = $('#dateofbirth').val();
    if (dateString != undefined && dateString.length > 0) {
        var dateParts = dateString.split("/");
        if(academicyearid == 3){
            var today = new Date("2024-03-31");
        } else if(academicyearid == 4){
            var today = new Date("2025-03-31");
        } else if(academicyearid == 5){
            var today = new Date("2026-03-31");
        }
        
        var DOB = new Date(dateParts[2], dateParts[1] - 1, dateParts[0]);
        var totalMonths = (today.getFullYear() - DOB.getFullYear()) * 12 + today.getMonth() - DOB.getMonth();
        var years = today.getFullYear() - DOB.getFullYear();
        if (DOB.getMonth() > today.getMonth() || (DOB.getMonth() === today.getMonth() && DOB.getDate() > today.getDate())) {
            years = years - 1;
        }
        var months = (totalMonths % 12);
        var days = today.getDate() - DOB.getDate();
        if (days < 0) {
            months--;
            days += new Date(today.getFullYear(), today.getMonth(), 0).getDate();
        }
        if (months < 0) {
            years--;
            months += 12;
        }
        var age = years + ' years ' + months + ' months ' + days + ' days';
        $('#__ufdkey__Age_date').parent().addClass('focused');
        $('#__ufdkey__Age_date').val(age);
        $("#__ufdkey__age_as_on-error").remove();
    } else {
        $('#__ufdkey__Age_date').val('');
        $("#__ufdkey__age_as_on-error").remove();
    }
}
// -------------------------------------------------
// pancard mother Check box code js start
$(document).ready(function () {
    $("#motherpan-column").hide();
    $("#motherpan-checkbox").click(function () {

        if ($(this).is(":checked")) {
            $("#motherpan-column").show(1000);

        }

        else {
            $("#motherpan-column").hide(1000);
        }
    });

});



//pancard Check box code js end
// pancard father Check box code js start
$(document).ready(function () {
    $("#fatherpan-column").hide();
    $("#fatherpan-checkbox").click(function () {

        if ($(this).is(":checked")) {
            $("#fatherpan-column").show(1000);
            $("#__ufdkey__P_Father").addClass('mandatoryvalue');

        }

        else {
            $("#fatherpan-column").hide(1000);
            $("#__ufdkey__P_Father").removeClass('mandatoryvalue');
            $('label.error').remove();
        }
    });

});

//pancard Check box code js end
// pancard guardian Check box code js start
$(document).ready(function () {
    $("#guardianpan-column").hide();
    $("#guardianpan-checkbox").click(function () {

        if ($(this).is(":checked")) {
            $("#guardianpan-column").show(1000);
        }

        else {
            $("#guardianpan-column").hide(1000);

        }
    });

});

//pancard Check box code js end
function showNeedDoc(val) {
    if (val == "Yes") {
        $("#in_the_case_of_differently_abled_candidates").addClass(
            "mandatoryvalue"
        );
        $(".diffMark").show();
        $(".diff_abled").show();
        $(".diffrentlyableddiv").show();
        $(".diffrentlyableddivman").addClass("mandatoryvalue");
    } else {
        $("#in_the_case_of_differently_abled_candidates").removeClass(
            "mandatoryvalue"
        );
        $(".diffMark").hide();
        $(".diff_abled").hide();
        $(".diffrentlyableddiv").hide();
        $(".diffrentlyableddivman").removeClass("mandatoryvalue");
    }
}




$(document).ready(function () {
    $('#admissionid').change(function () {
        var key = $(this).val();
        if (key == '27' || key == '43') {
            $('.streamdiv').show();
            $('.streamman').addClass('mandatoryvalue');
        } else {
            $('.streamdiv').hide();
            $('.streamman').removeClass('mandatoryvalue');
        }
    });
});



$(document).ready(function () {
    $('#fathermobileno').change(function () {
        var key = $(this).val();
        if ($('#mobileno').val() == '') {
            $('#mobilenoforfather').val(key);
            $('#mobilenoforfather').attr('name', 'mobileno');
            $('#mobileno').attr('name', '');
        } else {
            $('#mobileno').attr('name', 'mobileno');
        }
    });

    $('#mobileno').change(function () {
        if ($('#mobileno').val() != '') {
            $('#mobileno').attr('name', 'mobileno');
            $('#mobilenoforfather').attr('name', '');
            $('#mobilenoforfather').val('');
        } else {
            $('#mobileno').attr('name', '');
            $('#mobilenoforfather').attr('name', 'mobileno');
        }
    });
});