    $(document).ready(function() {
    initializeReadyFunctions();

    $('.propercase').on('keypress keyup change',function(){
        var str = this.id;
   
        var val2 = $('#'+str).val(); 
       var valarr = val2.split(' ');
       var allval='';
       for(i=0;i<valarr.length;i++){
           valarr[i] = valarr[i].toString();
           if(i!=0){
           allval = allval+' '+valarr[i].charAt(0).toUpperCase() + valarr[i].substr(1).toLowerCase();
           } else
           {
               allval = allval+valarr[i].charAt(0).toUpperCase() + valarr[i].substr(1).toLowerCase();
           }
       }
       $('#'+str).val(allval);
   
   
       });
})

function initializeReadyFunctions() {
    $(".floatvalue").focusout(function() {
        if ($(this).val()) {
            $(this).val(parseFloat($(this).val()).toFixed(2));
        }
    });
    $(".floatvalue").keydown(function(e) {
        allowNumbersOnly(e, true);
    });
    $(".textonly").keydown(function(e) {
        allowTextOnly(e);
    });
    $(".numbervalue").keydown(function(e) {
        allowNumbersOnly(e, false);
    });
    $
}
function blockSpecialChar(e) {
    var k = e.keyCode;
    return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8   || (k >= 48 && k <= 57));
}
function allowNumbersOnly(e, allowDot) {
    var codeArray = [46, 8, 9, 27, 13, 190];
    if (allowDot) {
        codeArray.push(110)
    };
    if ($.inArray(e.keyCode, codeArray) !== -1 || ((e.keyCode == 65 || e.keyCode == 86 || e.keyCode == 67) && (e.ctrlKey === true || e.metaKey === true)) || (e.keyCode >= 35 && e.keyCode <= 40)) {
        return;
    }
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
}

function allowTextOnly(e) {
    var codeArray = [46, 8, 9, 27, 13, 190, 110, 32];
    if ($.inArray(e.keyCode, codeArray) !== -1 || (e.keyCode == 65 && (e.ctrlKey === true) || (e.keyCode >= 35 && e.keyCode <= 40))) {
        return;
    }
    if ((e.keyCode >= 65 && e.keyCode <= 90)) {
        return;
    } else {
        e.preventDefault();
    }
}

function edu__disablebuttonbyjq(name) {
    $("." + name).each(function() {
        $(this).prop("disabled", true);
    });
}

function edu__showErrorMessageDiv(message) {
    document.getElementById('errormessagediv').style.display = "block";
    document.getElementById("errormessages").innerHTML = message;
    edu__enablebuttonbyjq('savebtn');
    $("#errormessagediv").focus();
}

function edu__validateFormValue(fieldset) {
  
    edu__disablebuttonbyjq('savebtn');
    var validate = true;
    var fieldsetid = "#"+fieldset;
    $(fieldsetid+" select.mandatoryvalue").each(function() {
        var value = $(this).val();
        var id = $(this).prop('id');
        if (value == null || value == 'null' || value == '' || value == -1) {
            var title = $(this).prop('title');
            if (!title || title.length == 0) {
                title = $(this).prop('name');
            }
            var message = "Kindly select the " + title + ".";
            
            //$(this).focus();
           if(!$('#'+id+'-error').length)
            {
                $(this).parent().append('<label id="'+id+'-error" for='+id+' class="error">'+message+'</label>');
            }
            
            validate = false;
            //return false;
        }
    });
    $(fieldsetid+" input[type=text].mandatoryvalue").each(function() {
        
        var value = $(this).val().trim();
        if (value == '') {
            var title = $(this).prop('title');
            var id = $(this).prop('id');
            if (!title || title.length == 0) {
                title = $(this).prop('name');
            }
            var message = "Kindly insert the " + title + ".";
           if(!$('#'+id+'-error').length)
            {
                $(this).parent().append('<label id="'+id+'-error" for='+id+' class="error">'+message+'</label>');
            }
            validate = false;
        }
    });
    
    $(fieldsetid+" input[type=file].mandatoryvalue.inputfile").each(function() {
        
        var value = $(this).val().trim();
        if (value == '') {
            var title = $(this).prop('title');
            var id = $(this).prop('id');
            if (!title || title.length == 0) {
                title = $(this).prop('name');
            }
            var message = "Kindly insert the " + title + ".";
           if(!$('#'+id+'-error').length)
            {
                $(this).parent().append('<label id="'+id+'-error" for='+id+' class="error">'+message+'</label>');
            }
            validate = false;
        }
    });
    
    $(fieldsetid+" input[type=file].mandatoryvalue.chooseFile").each(function() {
        
        var value = $(this).val().trim();
        if (value == '') {
            var title = $(this).prop('title');
            var id = $(this).prop('id');
            if (!title || title.length == 0) {
                title = $(this).prop('name');
            }
            var message = "Kindly insert the " + title + ".";
           if(!$('#'+id+'-error').length)
            {
                $(this).parent().parent().append('<label id="'+id+'-error" for='+id+' class="error">'+message+'</label>');
            }
            validate = false;
        }
    });
    
   
    $(".fileextphoto").each(function() {
       
        var file = $(this).prop('files')[0];
         var id = $(this).prop('id');
        if (file == NaN || file == undefined) {} else {
            var extenstion = $(this).attr('ext');
            var res = extenstion.split(",");
            var ext = $(this).val().split('.').pop().toLowerCase();
            if ($.inArray(ext, res) == -1) {
                var message = "The Attachment should be in " + extenstion + " format.";
               if(!$('#'+id+'-error').length)
            {
                $(this).parent().append('<label style="font-size: 12px; !important" id="'+id+'-error" for='+id+' class="error">'+message+'</label>');
            }
                validate = false;
            }
        }
    });
    
    $(".fileext").each(function() {
       
        var file = $(this).prop('files')[0];
         var id = $(this).prop('id');
        if (file == NaN || file == undefined) {} else {
            var extenstion = $(this).attr('ext');
            var res = extenstion.split(",");
            var ext = $(this).val().split('.').pop().toLowerCase();
            if ($.inArray(ext, res) == -1) {
                var message = "The Attachment should be in " + extenstion + " format.";
               if(!$('#'+id+'-error').length)
            {
                $(this).parent().parent().append('<label style="font-size: 12px; !important" id="'+id+'-error" for='+id+' class="error">'+message+'</label>');
            }
                validate = false;
            }
        }
    });
    
    
    $("textarea.mandatoryvalue").each(function() {
        var value = $(this).val().trim();
        var id = $(this).prop('id');
        if (value == '') {
            var title = $(this).prop('title');
            if (!title || title.length == 0) {
                title = $(this).prop('name');
            }
            var message = "Kindly insert the " + title + ".";
            if(!$('#'+id+'-error').length)
            {
                $(this).parent().append('<label id="'+id+'-error" for='+id+' class="error">'+message+'</label>');
            }
            validate = false;
        }
    });
   
    $(".file_size").each(function() {
        var limitsize = $(this).prop('filesize');
        if (limitsize == undefined) {
            limitsize = $(this).attr('filesize');
        }
        var title = $(this).prop('title');
        title = title && title.length > 0 ? title : 'Attachment';
        var file = $(this).prop('files')[0];
        if (file == NaN || file == undefined) {} else {
            var iFileSize = file.size;
            var iConvert = (iFileSize / 1024).toFixed(2);
            if (parseFloat(iConvert) > parseFloat(limitsize)) {
                var message = "The attached file size of the " + title + " is of " + iConvert + " KB, reduce the file size to " + limitsize + " KB before uploading."
                edu__showErrorMessageDiv(message);
                validate = false;
                return false;
            }
        }
    });
   
    $(".numbervalue").each(function() {
        var value = $(this).val();
        var id = $(this).prop('id');
  
        if (value != '' && parseInt(value) != value) {
            var title = $(this).prop('title');
            if (!title || title.length == 0) {
                title = $(this).prop('name');
            }
            var message = "Kindly fill the Number value in '" + title + "'.";
            $(this).focus();
          if(!$('#'+id+'-error').length)
            {
                $(this).parent().append('<label id="'+id+'-error" for='+id+' class="error">'+message+'</label>');
            }
            validate = false;
        }
    });
   
    $(".pincode").each(function() {
        var id = $(this).prop('id');

        var value = $(this).val().trim();
        if (value.length > 0 && !(edu__validatePincode(value))) {
            var title = $(this).prop('title');
            if (!title || title.length == 0) {
                title = $(this).prop('name');
            }
            var message = title + " should be 6 digits";
            $(this).focus();
           if(!$('#'+id+'-error').length)
            {
                $(this).parent().append('<label id="'+id+'-error" for='+id+' class="error">'+message+'</label>');
            }
            validate = false;
        }
    });
    $(".mobileno").each(function() {
        var value = $(this).val().trim();
        var id = $(this).prop('id');
        if (value.length > 0 && !edu__validateMobileNo(value)) {
            var title = $(this).prop('title');
            if (!title || title.length == 0) {
                title = $(this).prop('name');
            }
            var message = title + " should be 10 digits";
            $(this).focus();
            if(!$('#'+id+'-error').length)
            {
                $(this).parent().append('<label id="'+id+'-error" for='+id+' class="error">'+message+'</label>');
            }
            validate = false;
        }
    });
    $(".emailid").each(function() {
        var value = $(this).val().trim();
        var id = $(this).prop('id');
        if (value.length > 0 && !edu__validateEmail(value)) {
            var title = $(this).prop('title');
            if (!title || title.length == 0) {
                title = $(this).prop('name');
            }
            var message = title + " is not valid";
            $(this).focus();
            if(!$('#'+id+'-error').length)
            {
                $(this).parent().append('<label id="'+id+'-error" for='+id+' class="error">'+message+'</label>');
            }
            validate = false;
        }
    });
    $(".aadhar").each(function() {
        var value = $(this).val().trim();
         var id = $(this).prop('id');
        if (value.length > 0 && !edu__validateAadharNo(value)) {
            var title = $(this).prop('title');
            if (!title || title.length == 0) {
                title = $(this).prop('name');
            }
            var message = title + " is not valid";
            $(this).focus();
            if(!$('#'+id+'-error').length)
            {
                $(this).parent().append('<label id="'+id+'-error" for='+id+' class="error">'+message+'</label>');
            }
            validate = false;
        }
    });
    
	$(".text_upper").each(function() {
        var value = $(this).val();
        if (value) {
            $(this).val(value.toUpperCase());
        }
    });
	
	$(".text_proper").each(function() {
        var value = $(this).val();
        if (value) {
            $(this).val(toTitleCase(value));
        }
    });
	
	
    $(".text_lower").each(function() {
        var value = $(this).val();
        if (value) {
            $(this).val(value.toLowerCase());
        }
    });
    if (!validate) {
        edu__enablebuttonbyjq("savebtn")
        return false;
    } else {
        return true;
    }
}

///////////////////////// Disable Right Click //////////////////////
  
$(document).ready(function () {
      document.onkeydown = function (e) {
          if (e.ctrlKey && e.keyCode === 85) {
              return false;
          }
          if (e.ctrlKey && e.shiftKey && e.keyCode === 73) {
              return false;
          } else {
              return true;
          }
      };
})

document.addEventListener('contextmenu', event => event.preventDefault());



///////////////////////// Disable Right Click //////////////////////
function edu__validatesingle(fieldset) {
  
    edu__disablebuttonbyjq('savebtn');
    var validate = true;
    var fieldsetid = "#"+fieldset;
    
   
    $(".fileextphoto").each(function() {
        var file = $(this).prop('files')[0];
         var id = $(this).prop('id');
        if (file == NaN || file == undefined) {} else {
            var extenstion = $(this).attr('ext');
            var res = extenstion.split(",");
            var ext = $(this).val().split('.').pop().toLowerCase();
            if ($.inArray(ext, res) == -1) {
                var message = "The Attachment should be in " + extenstion + " format.";
               if(!$('#'+id+'-error').length)
            {
                $(this).parent().append('<label  id="'+id+'-error" for='+id+' class="error">'+message+'</label>');
            }
                validate = false;
            }
        }
    });
    
    $(".fileext").each(function() {
        var file = $(this).prop('files')[0];
         var id = $(this).prop('id');
        if (file == NaN || file == undefined) {} else {
            var extenstion = $(this).attr('ext');
            var res = extenstion.split(",");
            var ext = $(this).val().split('.').pop().toLowerCase();
            if ($.inArray(ext, res) == -1) {
                var message = "The Attachment should be in " + extenstion + " format.";
               if(!$('#'+id+'-error').length)
            {
                $(this).parent().parent().append('<label  id="'+id+'-error" for='+id+' class="error">'+message+'</label>');
            }
                validate = false;
            }
        }
    });
    
   
    $(".numbervalue").each(function() {
        var value = $(this).val();
        var id = $(this).prop('id');
  
        if (value != '' && parseInt(value) != value) {
            var title = $(this).prop('title');
            if (!title || title.length == 0) {
                title = $(this).prop('name');
            }
            var message = "Kindly fill the Number value in '" + title + "'.";
            $(this).focus();
          if(!$('#'+id+'-error').length)
            {
                $(this).parent().append('<label id="'+id+'-error" for='+id+' class="error">'+message+'</label>');
            }
            validate = false;
        }
    });
   
    $(".pincode").each(function() {
        var id = $(this).prop('id');

        var value = $(this).val().trim();
        if (value.length > 0 && !(edu__validatePincode(value))) {
            var title = $(this).prop('title');
            if (!title || title.length == 0) {
                title = $(this).prop('name');
            }
            var message = title + " should be 6 digits";
            $(this).focus();
           if(!$('#'+id+'-error').length)
            {
                $(this).parent().append('<label id="'+id+'-error" for='+id+' class="error">'+message+'</label>');
            }
            validate = false;
        }
    });
    $(".mobileno").each(function() {
        var value = $(this).val().trim();
        var id = $(this).prop('id');
        if (value.length > 0 && !edu__validateMobileNo(value)) {
            var title = $(this).prop('title');
            if (!title || title.length == 0) {
                title = $(this).prop('name');
            }
            var message = title + " should be 10 digits";
            $(this).focus();
            if(!$('#'+id+'-error').length)
            {
                $(this).parent().append('<label id="'+id+'-error" for='+id+' class="error">'+message+'</label>');
            }
            validate = false;
        }
    });
    $(".emailid").each(function() {
        var value = $(this).val().trim();
        var id = $(this).prop('id');
        if (value.length > 0 && !edu__validateEmail(value)) {
            var title = $(this).prop('title');
            if (!title || title.length == 0) {
                title = $(this).prop('name');
            }
            var message = title + " is not valid";
            $(this).focus();
            if(!$('#'+id+'-error').length)
            {
                $(this).parent().append('<label id="'+id+'-error" for='+id+' class="error">'+message+'</label>');
            }
            validate = false;
        }
    });
    $(".aadhar").each(function() {
        var value = $(this).val().trim();
         var id = $(this).prop('id');
        if (value.length > 0 && !edu__validateAadharNo(value)) {
            var title = $(this).prop('title');
            if (!title || title.length == 0) {
                title = $(this).prop('name');
            }
            var message = title + " is not valid";
            $(this).focus();
            if(!$('#'+id+'-error').length)
            {
                $(this).parent().append('<label id="'+id+'-error" for='+id+' class="error">'+message+'</label>');
            }
            validate = false;
        }
    });
    
	
    if (!validate) {
        edu__enablebuttonbyjq("savebtn")
        return false;
    } else {
        return true;
    }
}


function toTitleCase(str) {
    return str.replace(/(?:^|\s)\w/g, function(match) {
        return match.toUpperCase();
    });
}

function edu__enablebuttonbyjq(name) {
    $("." + name).each(function() {
        $(this).removeProp("disabled")
    });
}

function edu__validateMobileNo(mobileNo) {
    var filter = /^\d{10}$/;
    if (filter.test(mobileNo)) {
        return true;
    } else {
        return false;
    }
}

function edu__validatePincode(pincode) {
    var filter = /^\d{6}$/;
    if (filter.test(pincode)) {
        return true;
    } else {
        return false;
    }
}

function edu__validateAadharNo(aadharNo) {
    var filter = /^\d{12}$/;
    if (filter.test(aadharNo)) {
        return true;
    } else {
        return false;
    }
}

function edu__validateEmail(emailAddress) {
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (filter.test(emailAddress)) {
        return true;
    } else {
        return false;
    }
}