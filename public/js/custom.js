$(document).ready(function(){
  //  Menu script code
  $('.breadcrumb-box').click(function(){
      $('body').addClass('menu-show');
      $('body').removeClass('investor-menu-show');
  });
  $('.close-icon span').click(function(){
      $('body').removeClass('menu-show');
      $('body').removeClass('investor-menu-show');
      $('.has-child').removeClass('child-menu-show');
  });
  $('.investor-menu').click(function(){
      $('body').addClass('investor-menu-show');
      $('body').removeClass('menu-show');
  });
  $('.has-child a').click(function(){
      $(this).parent().toggleClass('child-menu-show').siblings().removeClass('child-menu-show');
  });
  //

  $('.show-full').click(function(){
      $('.product-milestone').addClass('show');
      $(this).hide();
      $('.show-less').show();
  });

  $('.show-less').click(function(){
      $('.product-milestone').removeClass('show');
      $(this).hide();
      $('.show-full').show();
  });
 
});

$(document).on('click', 'a[href^="#top"]', function () {
  e.preventDefault();
  $('html, body').stop().animate({
    scrollTop: $($(this).attr('href')).offset().top
  }, 1000);
});

$(document).ready(function() {
  $('.popup-box').click(function(){
      $('body').addClass('popup-triggered');
  });

  $('.close-popup').click(function(){
      $('body').removeClass('popup-triggered');
      $('iframe').attr('src', $('iframe').attr('src'));
  });
});

$(".form-input").focus(function() {
  let parent = $(this).parent();
  if (!parent.hasClass("active")) {
      parent.addClass("active")
  }
});

// remove an "active" class on blur if no content
$(".form-input").blur(function() {
  let self = $(this);
  let parent = self.parent();
  if (parent.hasClass("active") && self.val().length === 0) {
      parent.removeClass("active")
  }
});

$(document).ready(function() {
  $(".members-list-item .modal").modal({
      show: false,
      backdrop: 'static'
  });
});

// about page carousel
$('#about-carsousel').owlCarousel({
  items: 1,
  nav: false,
  dots: true,
  loop: false,
  autoplay: true,
  autoplayTimeout: 5000,
  smartSpeed: 500,
  autoplayHoverPause: false
});

// counter js

$( document ).ready( function() {

jQuery(function ($) {
  "use strict";
 
  var counterUp = window.counterUp["default"]; // import counterUp from "counterup2"
 
  var $counters = $(".counter");
 
  /* Start counting, do this on DOM ready or with Waypoints. */
$counters.each(function (ignore, counter) {
var waypoint = new Waypoint( {
element: $(this),
handler: function() {
counterUp(counter, {
duration: 5000,
delay: 16
});
this.destroy();
},
offset: 'bottom-in-view',
} );
});

});
});

//  tabs section js
if ($(window).width() <= 1200) {
  $('button.nav-link').on('shown.bs.tab', function (e) {
      var href = $(this).attr('data-bs-target');
      $('html, body').animate({
          scrollTop: $(href).offset().top
      }, 'slow');
  });
}

// investor relation filter js
$( ".filter-event-investor" ).change(function() {
  var selectedEventType = this.options[this.selectedIndex].value;
  $('.filter-content-investor .box-item').addClass('hidden');
  $('.filter-content-investor .box-item[filter-value="' + selectedEventType + '"]').removeClass('hidden');
});

$( ".filter-event-other" ).change(function() {
  var selectedEventType = this.options[this.selectedIndex].value;
  $('.filter-content-other .box-item').addClass('hidden');
  $('.filter-content-other .box-item[filter-value="' + selectedEventType + '"]').removeClass('hidden');
});
//hubspot
function validateEmail(emailField) {
  if (emailField.value != '') {
    var reg = /^(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-2](?:[a-z-0-9]*[a-z0-9])?\.)+[a-z0-2](?:[a-z0-9]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;

    if (reg.test(emailField.value) == false) {
      alert('Invalid Email Address');
      return false;
    } else if (/@gmail\.com$/.test(emailField.value) || /@yahoo\.com$/.test(emailField.value) || /@hotmail\.com$/.test(emailField.value) || /@msn\.com$/.test(emailField.value) || /@rediffmail\.com$/.test(emailField.value)) {
      alert('Please add your valid work email id');
      emailField.focus();
      return false;
    } else {
      return true;
    }
  } else {
    return false;
  }
}

$(".newsletter-form").on('submit', function (e) {

  e.preventDefault();
  var emailField = document.getElementById('csdf_email');

  if (!validateEmail(emailField)) {
    return false;
  } //var responseC = grecaptcha.getResponse(recaptchaResponse);
  // if(responseC.length === 0){
  //     alert('Captcha is required.');
  //     return false;
  // }


 
  var email = $('#csdf_email').val();
  current_url="affle.com";
  var title = 'newletter';



  var ba_data = {
    'fields': [ {
      'name': 'email',
      'value': email
    }],
   
  };
  var form_data = JSON.stringify(ba_data);
  var admin_url = "https://api.hsforms.com/submissions/v3/integration/submit/3426102/cbbb3a1c-7779-4256-a821-f6d52ffcf754";
  jQuery.ajax({
    url: admin_url,
    type: "POST",
    contentType: "application/json",
    dataType: "json",
    headers: {
   "accept": "application/json",
   "Access-Control-Allow-Origin":"*"
      },
    data: form_data,
    success: function success(data) {
      console.log(data);
       location = '/thankyou';

    },
    error: function error(err) {
      console.log(err);
    }
  });
});

/********contact us Hubspot */

function validateform(emailField) {
  if (emailField.value != '') {
    var reg = /^(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-2](?:[a-z-0-9]*[a-z0-9])?\.)+[a-z0-2](?:[a-z0-9]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;

    if (reg.test(emailField.value) == false) {
      alert('Invalid Email Address');
      return false;
    } else if (/@gmail\.com$/.test(emailField.value) || /@yahoo\.com$/.test(emailField.value) || /@hotmail\.com$/.test(emailField.value) || /@msn\.com$/.test(emailField.value) || /@rediffmail\.com$/.test(emailField.value)) {
      alert('Please add your valid work email id');
      emailField.focus();
      return false;
    } else {
      return true;
    }
  } else {
    return false;
  }
}

$(".contact-form").on('submit', function (e) {

  e.preventDefault();
  var emailField = document.getElementById('hub_email');

  if (!validateform(emailField)) {
    return false;
  } //var responseC = grecaptcha.getResponse(recaptchaResponse);
  // if(responseC.length === 0){
  //     alert('Captcha is required.');
  //     return false;
  // }


 
  var name = $('#hub_name').val();
  var email = $('#hub_email').val();
  var organization = $('#hub_company').val();
  var interested_in = $('#interest').val();
  var mobilephone = $('#hub_mobile').val();
  var skype_username = $('#hub_skype').val();
  var message = $('#hub_message').val();
 
  current_url="affle.com";
  var title = 'newletter';



  var ba_data = {
    'fields': [{
      'name': 'name',
      'value': name
    }, {
      'name': 'email',
      'value': email
    },
    {
      'name': 'organization',
      'value': organization
    },{
      'name': 'interested_in',
      'value': interested_in
    },{
      'name': 'mobilephone',
      'value': mobilephone
    },{
      'name': 'skype_username',
      'value': skype_username
    }, {
      'name': 'message',
      'value': message
    }],
   
  };
  var form_data = JSON.stringify(ba_data);
  var admin_url = "https://api.hsforms.com/submissions/v3/integration/submit/3426102/36e80c6c-8fce-4688-a547-4395c74eabc6";
  jQuery.ajax({
    url: admin_url,
    type: "POST",
    contentType: "application/json",
    dataType: "json",
    headers: {
   "accept": "application/json",
   "Access-Control-Allow-Origin":"*"
      },
    data: form_data,
    success: function success(data) {
      console.log(data);
       location = '/thankyou';

    },
    error: function error(err) {
      console.log(err);
    }
  });
});