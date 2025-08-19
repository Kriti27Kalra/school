(function ($) {
  "use strict";

  /*==================================================================
  [ Focus Contact2 ]*/

  $('.input100').each(function () {
    $(this).on('blur', function () {
      if ($(this).val().trim() != "") {
        $(this).addClass('has-val');
      }
      else {
        $(this).removeClass('has-val');
      }
    })
  })


  /*==================================================================
  [ Validate ]*/
  var input = $('.validate-input .input100');

  $('.validate-form').on('submit', function () {
    var check = true;
    for (var i = 0; i < input.length; i++) {
      if (validate(input[i]) == false) {
        showValidate(input[i]);
        check = false;
      }
    }
    return check;
  });



  $('.validate-form .input100').each(function () {
    $(this).focus(function () {
      hideValidate(this);
    });
  });



  function validate(input) {
    if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
      if ($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
        return false;
      }
    }

    else {
      if ($(input).val().trim() == '') {
        return false;
      }
    }
  }

  function showValidate(input) {
    var thisAlert = $(input).parent();
    $(thisAlert).addClass('alert-validate');
  }

  function hideValidate(input) {
    var thisAlert = $(input).parent();
    $(thisAlert).removeClass('alert-validate');
  }

})(jQuery);


// Progress bar js start

$(document).ready(function () {
  $('input,select').change(function () {
    var valueofelement = $(this).val();
    var id = $(this).attr('id');
    if (valueofelement != '' || valueofelement != '-1') {
      $("#" + id + "-error").remove();
    }
  });
  $("input,select").focusout(function () {
    var fieldset = $(this).parent().closest('fieldset').attr('id');
    edu__validatesingle(fieldset);
  });

  var current_fs, next_fs, previous_fs; //fieldsets
  var opacity;
  var current = 1;
  var steps = $("fieldset").length;

  setProgressBar(current);

  $(".next").click(function () {

    var fieldset = $(this).parent().closest('fieldset').attr('id');


    if (edu__validateFormValue(fieldset) == true) {

      current_fs = $(this).parent();
      next_fs = $(this).parent().next();
      // var studentname = $("#studentname").val();
      // if(studentname!=''){
      //   var namearr = studentname.split(' ');
      //   if(namearr.length==1)
      //       {
      //           var fnamecap = namearr[0];
      //           var newfname = fnamecap.replace(fnamecap[0],fnamecap[0].toUpperCase());
      //           var fname = newfname;
      //           $("#firstname").val(fname);
      //       }
      //       else if(namearr.length==2)
      //           {
      //             var fnamecap = namearr[0];
      //             var newfname = fnamecap.replace(fnamecap[0],fnamecap[0].toUpperCase());
      //             var fname = newfname; 
      //             var lnamecap = namearr[1];
      //             var newlname = lnamecap.replace(lnamecap[0],lnamecap[0].toUpperCase());
      //             var lname = newlname; 
      //               $("#firstname").val(fname);
      //               $("#lastname").val(lname);
      //           }
      //       else
      //           {
      //             var fnamecap = namearr[0];
      //             var newfname = fnamecap.replace(fnamecap[0],fnamecap[0].toUpperCase());
      //               var fname = newfname; 
      //               var mnamecap = namearr[1];
      //             var newmname = mnamecap.replace(mnamecap[0],mnamecap[0].toUpperCase());
      //             var mname = newmname; 
      //             var lnamecap = namearr[2];
      //             var newlname = lnamecap.replace(lnamecap[0],lnamecap[0].toUpperCase());
      //             var lname = newlname; 

      //               $("#firstname").val(fname);
      //               $("#middle_name").val(mname);
      //               $("#lastname").val(lname);
      //           }

      //         }


      //Add Class Active
      $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

      //show the next fieldset
      next_fs.show();
      //hide the current fieldset with style
      current_fs.animate({ opacity: 0 }, {
        step: function (now) {
          // for making fielset appear animation
          opacity = 1 - now;

          current_fs.css({
            'display': 'none',
            'position': 'relative'
          });
          next_fs.css({ 'opacity': opacity });
        },
        duration: 500
      });
      setProgressBar(++current);

      //scrollElementToTop(this);

    }
  });

  $(".submitnext").click(function () {
    var fieldset = $(this).parent().closest('fieldset').attr('id');
    if (edu__validateFormValue(fieldset) == true) {
      $("#msform input,select").removeAttr('disabled', 'disabled');
      $("#msform").submit();
    }
  });


  $(".previous").click(function () {

    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //Remove class active
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

    //show the previous fieldset
    previous_fs.show();

    //hide the current fieldset with style
    current_fs.animate({ opacity: 0 }, {
      step: function (now) {
        // for making fielset appear animation
        opacity = 1 - now;

        current_fs.css({
          'display': 'none',
          'position': 'relative'
        });
        previous_fs.css({ 'opacity': opacity });
      },
      duration: 500
    });
    setProgressBar(--current);
  });

  function setProgressBar(curStep) {
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width", percent + "%")
  }

  $(".submit").click(function () {
    return false;
  })


});



// Floating label  js start
$('.form-control').on('focus blur change', function (e) {
  var $currEl = $(this);

  if ($currEl.is('select')) {
    if ($currEl.val() === $("option:nth-child(2)", $currEl).val()) {
      $currEl.parents('.floating-label-wrap').toggleClass('focused', ((e.type === 'focus' || this.value.length > 0) && ($currEl.val() !== $("option:nth-child(2)", $currEl).val())));
      $('.control-label', $currEl.parent()).animate({ opacity: 0 }, 240);
      $currEl.parent().removeClass('focused');
    } else {
      $('.control-label', $currEl.parent()).css({ opacity: 1 });
      $currEl.parents('.floating-label-wrap').toggleClass('focused', ((e.type === 'focus' || this.value.length > 0) && ($currEl.val() !== $("option:nth-child(2)", $currEl).val())));
    }
  } else {
    $currEl.parents('.floating-label-wrap').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
  }
}).trigger('blur');

// Floating label  js end



// Upload file code js start

'use strict';

; (function (document, window, index) {
  var inputs = document.querySelectorAll('.inputfile');
  Array.prototype.forEach.call(inputs, function (input) {
    var label = input.nextElementSibling,
      labelVal = label.innerHTML;

    input.addEventListener('change', function (e) {
      var fileName = '';
      if (this.files && this.files.length > 1)
        fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
      else
        fileName = e.target.value.split('\\').pop();

      if (fileName)
        label.querySelector('span').innerHTML = fileName;
      else
        label.innerHTML = labelVal;
    });

    // Firefox bug fix
    input.addEventListener('focus', function () { input.classList.add('has-focus'); });
    input.addEventListener('blur', function () { input.classList.remove('has-focus'); });
  });
}(document, window, 0));

// Upload file code js end


// disclaimer text js code

$(document).ready(function () {
  $("#chooose-file-btn").prop("disabled", true);
  $("#chooose-file-btn").css("color", "#afaeab");
  $("#disclaimer-checkbox").click(function () {
    if ($(this).is(":checked")) {
      $("#chooose-file-btn").prop("disabled", false);
      $("#chooose-file-btn").css("color", "#fff");

    }
    else {
      $("#chooose-file-btn").prop("disabled", true);
      $("#chooose-file-btn").css("color", "#afaeab");
    }
  });
});

// Date and time Picker js strar
function log(message) {
  // document.querySelector('#appointment-datepicker').value = message;
}
window.onload = function () {
  duDatepicker('.datepicker', {
    maxDate: 'today',
    format: 'dd/mm/yyyy',
    events: {
      dateChanged: function (data) {
        log('Date:' + data.date)
      }
    }
  })
}


// File upload with image code Start js
function readURL1(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#image-upload-wrap1').hide();
      $('#file-upload-image1').attr('src', e.target.result);
      $('#file-upload-content1').show();
      $('.image-title').html(input.files[0].name);
    };
    reader.readAsDataURL(input.files[0]);
  } else {
    removeUpload1();
  }
}

function removeUpload1() {
  $('#file-upload-input1').replaceWith($('#file-upload-input1').clone());
  $('#file-upload-content1').hide();
  $('#image-upload-wrap1').show();
}
$('#image-upload-wrap1').bind('dragover', function () {
  $('#image-upload-wrap1').addClass('image-dropping');
});
$('#image-upload-wrap1').bind('dragleave', function () {
  $('#image-upload-wrap1').removeClass('image-dropping');
});


function readURL2(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#image-upload-wrap2').hide();
      $('#file-upload-image2').attr('src', e.target.result);
      $('#file-upload-content2').show();
      $('.image-title').html(input.files[0].name);
    };
    reader.readAsDataURL(input.files[0]);
  } else {
    removeUpload2();
  }
}

function removeUpload2() {
  $('#file-upload-input2').replaceWith($('#file-upload-input2').clone());
  $('#file-upload-content2').hide();
  $('#image-upload-wrap2').show();
}
$('#image-upload-wrap2').bind('dragover', function () {
  $('#image-upload-wrap2').addClass('image-dropping');
});
$('#image-upload-wrap2').bind('dragleave', function () {
  $('#image-upload-wrap2').removeClass('image-dropping');
});


function readURL3(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#image-upload-wrap3').hide();
      $('#file-upload-image3').attr('src', e.target.result);
      $('#file-upload-content3').show();
      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);
  } else {
    removeUpload3();
  }
}

function removeUpload3() {
  $('#file-upload-input3').replaceWith($('#file-upload-input3').clone());
  $('#file-upload-content3').hide();
  $('#image-upload-wrap3').show();
}
$('#image-upload-wrap3').bind('dragover', function () {
  $('#image-upload-wrap3').addClass('image-dropping');
});
$('#image-upload-wrap3').bind('dragleave', function () {
  $('#image-upload-wrap3').removeClass('image-dropping');
});


function readURL4(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#image-upload-wrap4').hide();
      $('#file-upload-image4').attr('src', e.target.result);
      $('#file-upload-content4').show();
      $('.image-title').html(input.files[0].name);
    };
    reader.readAsDataURL(input.files[0]);
  } else {
    removeUpload4();
  }
}

function removeUpload4() {
  $('#file-upload-input4').replaceWith($('#file-upload-input4').clone());
  $('#file-upload-content4').hide();
  $('#image-upload-wrap4').show();
}
$('#image-upload-wrap4').bind('dragover', function () {
  $('#image-upload-wrap4').addClass('image-dropping');
});
$('#image-upload-wrap4').bind('dragleave', function () {
  $('#image-upload-wrap4').removeClass('image-dropping');
});

// File upload with image code End js


// choose file code starts js
$('.chooseFile').bind('change', function () {
  var filename = $(this).val();
  if (/^\s*$/.test(filename)) {
    $(this).parent().parent().removeClass('active');
    $(this).siblings(".noFile").text("No file chosen...");
    //$("#noFile").text("No file chosen..."); 
  }
  else {
    $(this).parent().parent().addClass('active');
    $(this).siblings(".noFile").text(filename.replace("C:\\fakepath\\", ""));
  }
});
$(".close-icon").click(function () {
  // $('.chooseFile').val('');
  $(this).siblings(".chooseFile").val('');
  $(this).parent().siblings(".error").remove();
  $(this).parent().parent().removeClass('active');
  $(this).siblings(".noFile").text("No file chosen...");
});

// choose file code end js

// Info button code start js
$(document).ready(function () {
  $("#info-btn").click(function () {
    $(".school-add").toggle(500);
    $(".reg-head").toggle(500);
    $(".footer-content").toggle(500);
  });
});
// Info button code end js


//validate js code


let devtoolsOpen = false;
function detectDevTools() {
  const start = performance.now();
  debugger;
  const time = performance.now() - start;
  if (time > 100) {
    if (!devtoolsOpen) {
      devtoolsOpen = true;
      alert("Developer Tools have been detected! Please resubmit the form.");
      window.location.reload();
    }
  } else {
    devtoolsOpen = false;
  }
}
setInterval(detectDevTools, 1000);
document.addEventListener("contextmenu", function (e) { e.preventDefault() }), document.addEventListener("keydown", function (e) { ("F12" === e.key || e.ctrlKey && e.shiftKey && "I" === e.key) && e.preventDefault() }), document.addEventListener("keydown", function (e) { e.ctrlKey && "U" === e.key && e.preventDefault() }), document.addEventListener("keydown", function (e) { e.ctrlKey && e.shiftKey && "J" === e.key && e.preventDefault() }), document.addEventListener("keydown", function (e) { e.ctrlKey && e.shiftKey && "C" === e.key && e.preventDefault() });