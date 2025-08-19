var erpurl = 'https://sisnoida.edunexttechnologies.com';

// Sibling Check box code js start

$(document).ready(function () {
    $(".checkbox-row").hide();



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




    $(document).ready(function () {

        var option = '';
        $.ajax({
            url: erpurl + '/mobapps/OnlineRecruitmentService',
            context: document.body,
            success: function (data) {
                var jsonObject = JSON.stringify(data);
                $.each(data.vacancy_array, function (key, val) {
                    option += "<option value='" + val.id + "'>" + val.name + "</option>";
                });
                $("#vacancyid").append(option);
            }
        });


    });


    const intance = new Choices('#subjectid', {
        removeItemButton: true,
        searchResultLimit: 50,
        renderChoiceLimit: 50
    });
    $("#vacancyid").change(function () {

        var str = $("#vacancyid").val();
        //intance.clearChoices();
        intance.clearStore();

        var options = '';
        $.ajax({

            url: erpurl + "/mobapps/OnlineRecruitmentVacancySubjectService?vacancyId=" + str,
            context: document.body,
            success: function (data) {

                var jsonObject = $.parseJSON(data);
                var items = [];
                if (jsonObject.length != 0) {
                    // var json1 = {
                    //     "value": "",
                    //     "label": ""
                    // };
                    // items.push(json1);
                } else {
                    var json1 = {
                        "value": "-1",
                        "label": "No Choice Found"
                    };
                }

                $.each(jsonObject, function (i, obj) {
                    var json = {
                        "value": obj.id,
                        "label": obj.name,
                        "selected": false

                    };
                    items.push(json);

                });

                intance.setChoices(
                    items,
                    'value',
                    'label',
                    false,
                );



            }
        });
    });

    ///////////////////////////////// GET Nationality START ///////////////////////

    $(document).ready(function () {

        var option = '';
        $.ajax({
            url: erpurl + '/mobapps/ApplicationFormServices',
            context: document.body,
            success: function (data) {
                var jsonObject = $.parseJSON(data); //Only if not already an object
                //$("#nationality").empty();
                option += "<option value='-1' disabled>Select</option>";
                $.each(jsonObject.nationality_array, function (key, val) {
                    option += "<option value='" + val.id + "'>" + val.name + "</option>";
                });
                $("#nationality").append(option);
            }
        });


    });

    ///////////////////////////////// GET Nationality END ///////////////////////       




    ///////////////////////////////// GET RELIGION START ///////////////////////


    // $(document).ready(function () {

    //     var option = '';
    //     $.ajax({
    //         url: erpurl + '/mobapps/ApplicationFormServices',
    //         context: document.body,
    //         success: function (data) {
    //             var jsonObject = $.parseJSON(data);
    //             option += "<option value='-1' disabled></option>";
    //             $.each(jsonObject.religion_array, function (key, val) {
    //                 option += "<option value='" + val.id + "'>" + val.name + "</option>";
    //             });
    //             $("#religionid").append(option);
    //         }
    //     });
    // })



    ///////////////////////////////// GET RELIGION END /////////////////////////


    ///////////////////////////////// GET CATEGORY START ///////////////////////


    $(document).ready(function () {

        var option = '';
        $.ajax({
            url: erpurl + '/mobapps/ApplicationFormServices',
            context: document.body,
            success: function (data) {
                var jsonObject = $.parseJSON(data); //Only if not already an object

                option += "<option value='-1' disabled></option>";
                $.each(jsonObject.category_array, function (key, val) {
                    option += "<option value='" + val.id + "'>" + val.name + "</option>";
                });
                $("#categoryid").append(option);
            }
        });
    })



    ///////////////////////////////// GET CATEGORY END /////////////////////////

    ///////////////////////////////// GET BLOODGROUP START ///////////////////////


    $(document).ready(function () {

        var option = '';
        $.ajax({
            url: erpurl + '/mobapps/ApplicationFormServices',
            context: document.body,
            success: function (data) {
                var jsonObject = $.parseJSON(data);

                option += "<option value='-1' disabled></option>";
                $.each(jsonObject.bloodgroup_array, function (key, val) {
                    option += "<option value='" + val.id + "'>" + val.name + "</option>";
                });
                $("#bloodgroupid").append(option);
            }
        });
    })



    ///////////////////////////////// GET BLOODGROUP END /////////////////////////



    ////////////////////////// FILL ADDRESS START //////////////////////     


    function setPermanentAddress() {
        //debugger;
        var CAdd = $('#address_correspondence').val();
        var Ccountry1 = $('#country_correspondence').val();
        //var Ccountry = Ccountry1.split("-");
        var CState1 = $('#state_correspondence').val();
        //var CState = CState1.split("-");
        var CCity1 = $('#city_correspondence').val();
        //var CCity = CCity1.split("-");
        var PCode = $('#pin_correspondence').val();

        if ($("#sameaddress").is(":checked")) {
            $('#address').val(CAdd);
            //          if(Ccountry[1]!=1){ $('#country').val(Ccountry[1]); } else { $('#country').val(); }
            //          if(CState[1]!=1){ $('#state').val(CState[1]); } else { $('#state').val(); }
            //          if(CCity[1]!=1){ $('#city').val(CCity[1]); } else { $('#city').val(); }
            $('#country').val(Ccountry1);
            $('#state').val(CState1);
            $('#city').val(CCity1);
            $('#pin').val(PCode);
            //          $('#address').attr('disabled', 'disabled');
            //          $('#country').attr('disabled', 'disabled');
            //          $('#state').attr('disabled', 'disabled');
            //          $('#city').attr('disabled', 'disabled');
            //          $('#pin').attr('disabled', 'disabled');
            //   $('#billingaddress').parent('floating-label-wrap').addClass('focused');
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

            $('#address').removeAttr('disabled');
            $('#country').removeAttr('disabled');
            $('#state').removeAttr('disabled');
            $('#city').removeAttr('disabled');
            $('#pin').removeAttr('disabled');

            $("#address").parent().removeClass('focused');
            $("#country").parent().removeClass('focused');
            $("#state").parent().removeClass('focused');
            $("#city").parent().removeClass('focused');
            $("#pin").parent().removeClass('focused');
        }
    }

    $('#sameaddress').change(function () {
        setPermanentAddress();
    })

    ////////////////////////// FILL ADDRESS END //////////////////////     

});




////////////////////// Only characters allowed /////////////////////////////

$(document).on('keypress', '.inputTextBox', function (event) {
    var regex = new RegExp("^[a-zA-Z ]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});


////////////////////// Only characters allowed /////////////////////////////

///////////////////////// Only Numbers allowed /////////////////////////////


$(document).ready(function () {
    $('.numbervalue').keypress(function (e) {

        var a = [];
        var k = e.which;

        for (i = 48; i < 58; i++)
            a.push(i);

        if (!(a.indexOf(k) >= 0))
            e.preventDefault();
    });

});

///////////////////////// Only Numbers allowed /////////////////////////////


//-------------------------upload image validation lessthen 1MB start---------------------------
function document_ext(str) {
    var a = document.getElementById(str).value;
    var validsize = document.getElementById(str).getAttribute('size');
    var vs = validsize * 1024;
    var size2 = $('#' + str)[0].files[0].size;
    var size = size2 / 1024;
    if (vs != 0) {
        if (size > vs) {
            alert('File should be less than ' + validsize + ' MB');
            //$("#savebtn").hide();
            document.getElementById(str).value = '';
        }
    }
    else {
        if (size > 1024) {
            alert('File should be less than 1 MB');
            //$("#savebtn").hide();
            document.getElementById(str).value = '';
        }
    }
}
//-------------------------upload image validation lessthen 1MB end---------------------------


///////////////////////// add experience table start ////////////////////////////////////////////

function addWorkExpTable() {


    var table = document.getElementById("maintable");

    var rowCount = document.getElementById("candidate_exp_count").value;
    var rowCount1 = table.rows.length;
    var row = table.insertRow(rowCount1)

    rowCount = parseInt(rowCount) + 1;
    var cell0 = row.insertCell(0);
    cell0.innerHTML = "<input type='text' title='Name of Organisation' class='text_upper form-control mandatoryvalue currentmandiv ' name='organization_name_" + rowCount + "' id='organization_name_" + rowCount + "'>";

    var cell1 = row.insertCell(1);
    cell1.innerHTML =
        "<input type='text' title='From' class='tcal text_upper form-control mandatoryvalue currentmandiv datepicker tcalInput' name='from_date_" + rowCount + "'  readonly>";

    var cell2 = row.insertCell(2);
    cell2.innerHTML =
        "<input type='text' title='To' class='tcal text_upper form-control mandatoryvalue currentmandiv datepicker  tcalInput' name='to_date_" + rowCount + "'  readonly>";

    var cell3 = row.insertCell(3);
    cell3.innerHTML = "<input type='text' title='Designation' class='text_upper form-control mandatoryvalue currentmandiv ' name='designation_" + rowCount + "' id='designation_" + rowCount + "'>";

    var cell4 = row.insertCell(4);
    cell4.innerHTML = "<input type='text' title='Job Responsibilties' class='text_upper form-control mandatoryvalue currentmandiv ' name='responsibilities_" + rowCount + "' id='responsibilities_" + rowCount + "'>";
    var cell4 = row.insertCell(5);
    cell4.innerHTML = "<input type='text' title='Reason for Leaving' class='text_upper form-control mandatoryvalue currentmandiv ' name='__ufdkey__Reason_for_Leaving_" + rowCount + "' id='__ufdkey__Reason_for_Leaving_" + rowCount + "'>";


    document.getElementById("candidate_exp_count").value = rowCount;
    $('.remove_row_button').show();
    var coun = document.getElementById("candidate_exp_count").value;
    if (coun == 5) {
        $('.add_row_button').hide();
    } else {
        $('.add_row_button').show();
    }
    duDatepicker('.datepicker', {
        maxDate: 'today',
        format: 'dd-mm-yyyy',
        events: {
            dateChanged: function (data) {
                log('Date:' + data.date)
            }
        }
    })
    if (coun == 1) {
        $('.remove_row_button').hide();
    } else {
        $('.remove_row_button').show();
    }


}

function deleteWorkExpTable() {
    var coun = document.getElementById("candidate_exp_count").value;
    if (coun == 1) {
        $('.remove_row_button').hide();
    } else {
        $('.remove_row_button').show();
    }
    if (coun == 5) {
        $('.add_row_button').hide();
    } else {
        $('.add_row_button').show();
    }
    if (coun != 1) {
        $("#organization_name_" + coun).parent().parent().remove();
        document.getElementById("candidate_exp_count").value = coun - 1;
        var coun2 = document.getElementById("candidate_exp_count").value;
        if (coun2 == 1) {
            $('.remove_row_button').hide();
        } else {
            $('.remove_row_button').show();
        }
        if (coun2 == 5) {
            $('.add_row_button').hide();
        } else {
            $('.add_row_button').show();
        }
    }
}


///////////////////////// add experience table end ////////////////////////////////////////////


///////////////////////// add Training (Professional / Vocational)  table start ////////////////////////////////////////////

function addTrainingTable() {


    var table = document.getElementById("training_maintable");

    var rowCount = document.getElementById("Training_exp_count").value;
    var rowCount1 = table.rows.length;
    var row = table.insertRow(rowCount1)

    rowCount = parseInt(rowCount) + 1;
    var cell0 = row.insertCell(0);
    cell0.innerHTML = "<input type='text' id='__ufdkey__Training_Professional_Vocational_" + rowCount + "' name='__ufdkey__Training_Professional_Vocational_" + rowCount + "' class='text_upper form-control mandatoryvalue ' title='Organisation'>";

    var cell1 = row.insertCell(1);
    cell1.innerHTML =
        "<input type='text' id='__ufdkey__Training_Professional_Vocational_Training_" + rowCount + "' name='__ufdkey__Training_Professional_Vocational_Training_" + rowCount + "' class='text_upper form-control mandatoryvalue ' title='Nature of training'>";

    var cell2 = row.insertCell(2);
    cell2.innerHTML =
        "<input type='text' name='__ufdkey__Training_From_Date_" + rowCount + "' id='__ufdkey__Training_From_Date_" + rowCount + "' class='tcal datepicker text_upper form-control mandatoryvalue  tcalInput' readonly='' title='From'>";

    var cell3 = row.insertCell(3);
    cell3.innerHTML = "<input type='text' id='__ufdkey__Training_to_Date_" + rowCount + "' name='__ufdkey__Training_to_Date_" + rowCount + "' class='tcal datepicker text_upper form-control mandatoryvalue  tcalInput' readonly='' title='To'>";

    document.getElementById("Training_exp_count").value = rowCount;
    $('.remove_Training_row_button').show();
    var coun = document.getElementById("Training_exp_count").value;
    if (coun == 5) {
        $('.add_Training_row_button').hide();
    } else {
        $('.add_Training_row_button').show();
    }
    duDatepicker('.datepicker', {
        maxDate: 'today',
        format: 'dd-mm-yyyy',
        events: {
            dateChanged: function (data) {
                log('Date:' + data.date)
            }
        }
    })
    if (coun == 1) {
        $('.remove_Training_row_button').hide();
    } else {
        $('.remove_Training_row_button').show();
    }


}

function deleteTrainingTable() {
    var coun = document.getElementById("Training_exp_count").value;
    if (coun == 1) {
        $('.remove_Training_row_button').hide();
    } else {
        $('.remove_Training_row_button').show();
    }
    if (coun == 5) {
        $('.add_Training_row_button').hide();
    } else {
        $('.add_Training_row_button').show();
    }
    if (coun != 1) {
        $("#__ufdkey__Training_Professional_Vocational_" + coun).parent().parent().remove();
        document.getElementById("Training_exp_count").value = coun - 1;
        var coun2 = document.getElementById("Training_exp_count").value;
        if (coun2 == 1) {
            $('.remove_Training_row_button').hide();
        } else {
            $('.remove_Training_row_button').show();
        }
        if (coun2 == 5) {
            $('.add_Training_row_button').hide();
        } else {
            $('.add_Training_row_button').show();
        }
    }
}


///////////////////////// add Training (Professional / Vocational)  table end ////////////////////////////////////////////






// Enquiry Check box code js start

function blockSpecialChar(e) {
    var k = e.keyCode;
    return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || (k >= 48 && k <= 57));
}




function myFunction2() {
    var checkBox = document.getElementById("Fresher-checkbox");
    var text = document.getElementById("fresh");



    if (checkBox.checked == true) {

        $('#fresh').hide();
        $('.currentdiv').hide();
        $(".starmark").removeClass('mandatoryvalue');
        $(".currentmandiv").removeClass('mandatoryvalue');
        $("#fresh input").val('');
        $(".currentmandiv").val('');
        $(".currentmandiv").parent().removeClass('focused');
    } else {
        $('#fresh').show();
        $('.currentdiv').show();
        $(".starmark").addClass('mandatoryvalue');
        $(".currentmandiv").addClass('mandatoryvalue');
        $(".currentmandiv").val('');
        $(".currentmandiv").parent().removeClass('focused');

    }
}

/* 
     function showenq(){
    $("#total_experience_in_years").val('');
    var enq= $("#Fresher-checkbox");
    if($(enq).is(":checked")){
    $("#Fresher-checkbox").show(1000);
    $("#total_experience_in_years").addClass('mandatoryvalue');
    }
    else{
        $("#total_experience_in_years").val('');
        $("#Fresher-checkbox").hide(1000);
         $("#total_experience_in_years").removeClass('mandatoryvalue');
    }
    } */

//});

// Enquiry Check box code js end



//show dob-marriage //

function showFunction() {
    var materials = document.getElementById('maritalstatusid').value;

    if (materials == '1') {
        $(".fresh").show();
    }
    else {
        $(".fresh").hide();
    }
}


function interviewd(val) {
    if (val == 'Yes') {
        $(".interview_detail").show();
        $('#__ufdkey__Have_You_Ever_Been_Interviewed_Details').addClass('mandatoryvalue');
    }
    else {
        $(".interview_detail").hide();
        $('#__ufdkey__Have_You_Ever_Been_Interviewed_Details').removeClass('mandatoryvalue');
    }
}
function relativesSumerville(val) {
    if (val == "Yes") {
        $(".relative_detail").show();
        $('#__ufdkey__Any_Relative_Working_in_Somerville_Details').addClass('mandatoryvalue');
    } else {
        $(".relative_detail").hide();
        $('#__ufdkey__Any_Relative_Working_in_Somerville_Details').removeClass('mandatoryvalue');
    }
}
function relativesSumervilleOther(val) {
    if (val == "Yes") {
        $(".relative_detail_other").show();
        $('#__ufdkey__Any_Relative_Working_in_Other_Public_Details').addClass('mandatoryvalue');
    } else {
        $(".relative_detail_other").hide();
        $('#__ufdkey__Any_Relative_Working_in_Other_Public_Details').removeClass('mandatoryvalue');
    }
}


// function addSpaceAfterComma() {
//     var inputField = $('.addcommaspace');
//     var inputText = inputField.value;
//     var lastChar = inputText.slice(-1);
//     if (lastChar === ',') {
//         inputField.value = inputText.slice(0, -1) + ', ';
//     }
// }

$(document).ready(function() {
    $('.addcommaspace').on('change', function() {
        var inputText = $(this).val();
        inputText = inputText.replace(/,/g, ', ');
        $(this).val(inputText);
    });
});