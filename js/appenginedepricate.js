// disable and enable scroll
// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
var keys = {33:1, 34:1, 35:1, 36:1, 37:1, 38:1, 39:1, 40:1};

function preventDefault(e) {
e = e || window.event;
if (e.preventDefault)
    e.preventDefault();
e.returnValue = false;  
}

function preventDefaultForScrollKeys(e) {
  if (keys[e.keyCode]) {
      preventDefault(e);
      return false;
  }
}

function disableScroll() {
if (window.addEventListener) // older FF
    window.addEventListener('mousewheel DOMMouseScroll', preventDefault, false);
window.onwheel = preventDefault; // modern standard
window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
window.ontouchmove  = preventDefault; // mobile
document.onkeydown  = preventDefaultForScrollKeys;

var scrollPosition = [
  self.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft,
  self.pageYOffset || document.documentElement.scrollTop  || document.body.scrollTop
];

$(window).bind('scroll', function(){
  lockscrollbar(scrollPosition[0],scrollPosition[1]);
});

}

function disablekeyScroll() {
document.onkeydown  = preventDefaultForScrollKeys;
}

function enableScroll() {
  if (window.removeEventListener)
      window.removeEventListener('mousewheel DOMMouseScroll', preventDefault, false);
  window.onmousewheel = document.onmousewheel = null; 
  window.onwheel = null; 
  window.ontouchmove = null;  
  document.onkeydown = null; 

  unlockscrollbar();

}

function disablegrabscroll() {
    var scrollPosition = [
    self.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft,
    self.pageYOffset || document.documentElement.scrollTop  || document.body.scrollTop
  ];

  $(window).bind('scroll', function(){
    lockscrollbar(scrollPosition[0],scrollPosition[1]);
  });
}

function enablegrabscroll() {
    unlockscrollbar();
}

function lockscrollbar(xposi,yposi) {
  window.scrollTo(xposi, yposi);
}

function unlockscrollbar() {
  $(window).unbind('scroll');
}

/*site features*/
$('.menu-icon-mobile, .menu-ctrl').on('click', function(e) {
 $('ul.navi').toggleClass("active-slide-mobile-menu");
 e.preventDefault();
});

$(document).ready(function(e) {
 e(this).mouseup(function(t) {
   var container = e("ul.navi");
   if (!container.is(t.target) &&
     container.has(t.target).length === 0) {
     container.removeClass('active-slide-mobile-menu');
   }
 });
});

/*var $document = $(document),
 $element = $('.page-nave-wrap');

$document.scroll(function() {
 if ($document.scrollTop() >= 1) {
   $element.css({
     "box-shadow": "0 4px 13px rgba(0,0,0,0.18)"
   });
 } else {
   $element.css({
     "box-shadow": "none",
   });
 }
});*/

function getScrollbarWidth() {
 var outer = document.createElement("div");
 outer.style.visibility = "hidden";
 outer.style.width = "100px";
 outer.style.msOverflowStyle = "scrollbar"; // needed for WinJS apps

 document.body.appendChild(outer);

 var widthNoScroll = outer.offsetWidth;
 // force scrollbars
 outer.style.overflow = "scroll";

 // add innerdiv
 var inner = document.createElement("div");
 inner.style.width = "100%";
 outer.appendChild(inner);

 var widthWithScroll = inner.offsetWidth;

 // remove divs
 outer.parentNode.removeChild(outer);

 return widthNoScroll - widthWithScroll;
}

/*$('.page-nave-wrap, .float-works-wrap').css("width", "calc(100vw - " + (getScrollbarWidth() + 50) + "px");*/

$(function() {
 var pageTitle = $("title").text();

 $(window).blur(function() {
   $("title").text("Don't Go! I Miss You...");
 });

 $(window).focus(function() {
   $("title").text(pageTitle);
 });
});

$('.show-work-btn').on('click', function(e) {
  var work_connector = $(this).attr('for-work');
  $('.float-works-wrap[work-number=' + work_connector + ']').show(0);
    
  setTimeout(function(){
      $('.float-works-wrap[work-number=' + work_connector + ']').addClass("activate-works-paper");
      $('.page-nave-wrap').addClass('pull-nave-wrap-up');
      $('.float-work-overflow').css("top","0");
   }, 1000);
  
  $('.float-works-preloader').show(0).addClass('pull-float-works-preloader');
  $('.float-works-preloader-overlay').show(0);
  
  setTimeout(function(){
    $('.float-works-preloader ').removeClass('pull-float-works-preloader').delay(1000).hide(0);
    $('.float-works-preloader-overlay').delay(600).hide(0);
  }, 1000);
  
 disablekeyScroll();
 disablegrabscroll();
  /*$('body').toggleClass("noscroll", 0);*/
  e.preventDefault();
});

$('.float-works-close').on('click', function(e) {
  $('.float-work-overflow').css("top","100%");
  $('.float-works-wrap').removeClass("activate-works-paper").delay(800).hide(0);
  $('.page-nave-wrap').removeClass('pull-nave-wrap-up');

  enableScroll();
  enablegrabscroll();
  /*$('body').removeClass("noscroll", 0);*/
  e.preventDefault();
});


$('.project-filter').on('click', function() {
  $(this).addClass('project-filter-active');
  $(this).siblings().removeClass('project-filter-active');
});

$('.work-card-category').on('click', function() {
  var filter_name = $(this).attr('data-filter');

  if(filter_name == "all") {
    $('#filter-all').addClass('project-filter-active').siblings().removeClass('project-filter-active');
  }else if(filter_name == ".branding") {
    $('#filter-branding').addClass('project-filter-active').siblings().removeClass('project-filter-active');
  }else if(filter_name == ".animation") {
    $('#filter-animation').addClass('project-filter-active').siblings().removeClass('project-filter-active');
  }else if(filter_name == ".illustration") {
    $('#filter-illustration').addClass('project-filter-active').siblings().removeClass('project-filter-active');
  }else if(filter_name == ".webandui") {
    $('#filter-webandui').addClass('project-filter-active').siblings().removeClass('project-filter-active');
  }else if(filter_name == ".handmade") {
    $('#filter-handmade').addClass('project-filter-active').siblings().removeClass('project-filter-active');
  }

});

/*$(document).keyup(function(e) {
    if ( e.keyCode == 27 ){
        $('.float-works-close').click();
    }
});*/

$('.pop-up-link').on('click', function() {

 function Start() {
   var OldHtml = window.jQuery.fn.html;
   window.jQuery.fn.html = function() {

     var EnhancedHtml = OldHtml.apply(this, arguments);

     if (arguments.length && EnhancedHtml.find('.YouTubePopUp-Wrap').length) {
       var TheElementAdded = EnhancedHtml.find('.YouTubePopUp-Wrap'); //there it is
     }

     return EnhancedHtml;
   }
 }

 var check = $(Start);

 if (check.length > -1) {
    disableScroll();
 }

});


$('.float-wrap').on('mousewheel DOMMouseScroll', function(e) {
  var e0 = e.originalEvent,
    delta = e0.wheelDelta || -e0.detail;

  this.scrollTop += (delta < 0 ? 1 : -1) * 30;
  e.preventDefault();
});

/*start progressbar*/
var width = 100,
    perfData = window.performance.timing, // The PerformanceTiming interface represents timing-related performance information for the given page.
    EstimatedTime = -(perfData.loadEventEnd - perfData.navigationStart),
    time = parseInt((EstimatedTime/1000)%60)*100;

// Loadbar Animation
$("#preloader-progress").animate({
  width: width + "%"
}, time);

$(document).ready(function(){
  var themecolor = $('meta[name=theme-color]').attr("content");
  var forpagetheme = $('meta[name=theme-color]').attr("for");
  if(themecolor == "#e2e2e2" && forpagetheme == "mainpage") {
    $('meta[name=theme-color]').attr('content', '#39187b');
  }
});

disableScroll();
disablegrabscroll();

// Percentage Increment Animation
var PercentageID = $("#precent"),
    start = 0,
    end = 100,
    durataion = time;
    animateValue(PercentageID, start, end, durataion);
    
function animateValue(id, start, end, duration) {
  
  var range = end - start,
      current = start,
      increment = end > start? 1 : -1,
      stepTime = Math.abs(Math.floor(duration / range)),
      obj = $(id);
    
  var timer = setInterval(function() {
    current += increment;
    $(obj).text(current + "%");
      //obj.innerHTML = current;
    if (current == end) {
      clearInterval(timer);
    }
  }, stepTime);
}

// Fading Out Loadbar on Finised
setTimeout(function(){
  $('#preloader-wrapper').fadeOut(350);
  $(document).ready(function(){
    var themecolor = $('meta[name=theme-color]').attr("content");
    var forpagetheme = $('meta[name=theme-color]').attr("for");
    if(themecolor == "#39187b" && forpagetheme == "mainpage") {
      $('meta[name=theme-color]').attr('content', '#e2e2e2');
    }
  });
  enableScroll();
  enablegrabscroll();
}, time);
/*end progressbar*/

/*form validation*/
function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

$('#sayhelloform').submit(function() {
    var email = $("#theemail").val();

    if ($.trim($("#thefullname").val()) === "" || $.trim($("#theemail").val()) === "" || $.trim($("#themsg").val()) === "") {

      $('<span>Woah! Slow down there Flash.<br/>None of the fields can be blank.</span>').appendTo('.form-error-msg').delay(3100).queue(function() { $(this).remove(); });
      $('.form-error-area').show(0).addClass('pull-float-works-preloader');
      $('.float-works-preloader-overlay').show(0);

    setTimeout(function(){
      $('.form-error-area').removeClass('pull-float-works-preloader').delay(2500).hide(0);
      $('.float-works-preloader-overlay').delay(450).hide(0);
    }, 2500);

      return false;
    }
    else if (!validateEmail(email)) {
        $('<span>Really? That\'s your email?<br/>C\'mon\, enter a correct one.</span>').appendTo('.form-error-msg').delay(3100).queue(function() { $(this).remove(); });
        $('.form-error-area').show(0).addClass('pull-float-works-preloader');
        $('.float-works-preloader-overlay').show(0);

        setTimeout(function(){
          $('.form-error-area').removeClass('pull-float-works-preloader').delay(2500).hide(0);
          $('.float-works-preloader-overlay').delay(450).hide(0);
        }, 2500);

        return false;
    }
    else {
      return true;
    }
});
/*end form validation*/

$('input, textarea').keyup(function() {
    if($(this).val()) {
      $(this).closest('.form-group').children('.control-label').addClass("active-control-label");
    }
    else {
      $(this).closest('.form-group').children('.control-label').removeClass("active-control-label");
    }
});

$(document).ready(function() {
  if($('#thefullname').val() == '' || $('#theemail').val() == '' || $('#themsg').val() == '') {
    $('#thefullname').closest('.form-group').children('.control-label').removeClass("active-control-label");
    $('#theemail').closest('.form-group').children('.control-label').removeClass("active-control-label");
    $('#themsg').closest('.form-group').children('.control-label').removeClass("active-control-label");
  }
  else {
    $('#thefullname').closest('.form-group').children('.control-label').addClass("active-control-label");
    $('#theemail').closest('.form-group').children('.control-label').addClass("active-control-label");
    $('#themsg').closest('.form-group').children('.control-label').addClass("active-control-label");
  }
});

$('input, textarea').keyup(function() {
  if($('#thefullname').val() || $('#theemail').val() || $('#themsg').val()) {
    $('#contact-form-speaker').text(function(i, oldText) {
        return (oldText === 'C\'MON TYPE SOMETHING!' || oldText === 'IS SOMETHING WRONG?') ? 'YEAH... TYPE IT UP!' : oldText;
    });
  }
  else if(!$('#thefullname').val() && !$('#theemail').val() && !$('#themsg').val()){
    $('#contact-form-speaker').text(function(i, oldText) {
        return oldText === 'YEAH... TYPE IT UP!' ? 'IS SOMETHING WRONG?' : oldText;
    });
  }
});

/*journal search and cat*/
$('#journal_search').on('click', function() {
    disableScroll();
    disablegrabscroll();
    $('.journal-plugs-overlay').addClass('journal-plugs-show');
    $('.search-form').addClass('journal-plugs-show');
    $('.category-wrapper').removeClass('journal-plugs-show');
    $('#s').focus();
    setTimeout(function(){
           $(".search-info-msg").addClass("pulldown-search-info-msg");
       }, 5);
});

$('.search-field').keyup(function() {
  if( $(this).val() != "" ) {
    setTimeout(function(){
         $(".search-info-msg").removeClass("pulldown-search-info-msg");
     }, 5);
  }
  else {
    setTimeout(function(){
           $(".search-info-msg").addClass("pulldown-search-info-msg");
       }, 5);
  }
});

$('#close_search_journal').on('click', function() {
    enableScroll();
    enablegrabscroll();
    $('.journal-plugs-overlay').removeClass('journal-plugs-show');
    $('.search-form').removeClass('journal-plugs-show');
    $('#s').blur();
});

$('#journal_cat').on('click', function() {
    disableScroll();
    disablegrabscroll();
    $('.journal-plugs-overlay').addClass('journal-plugs-show');
    $('.category-wrapper').addClass('journal-plugs-show');
    $('.search-form').removeClass('journal-plugs-show');
});

$('#close_category_list').on('click', function() {
    enableScroll();
    enablegrabscroll();
    $('.journal-plugs-overlay').removeClass('journal-plugs-show');
    $('.category-wrapper').removeClass('journal-plugs-show');
});

/*journal search and cat*/

/*definitions*/
function detectBrowser(){
  var val = navigator.userAgent.toLowerCase();

  if( (val.indexOf("chrome") > -1) || (val.indexOf("opera") > -1) || (val.indexOf("msie") > -1) || (val.indexOf("safari") > -1))
  {
    $(document).ready(function() {
     $(".float-wrap").slimScroll({
       width: "100%",
       height: "100vh",
       distance: "100px",
       railVisible: false,
       wheelStep: 10,
       touchScrollStep: 45
     });
    });
    $('.search-info-msg-fixed').hide();
    /* http://rocha.la/jQuery-slimScroll */
  } else if(val.indexOf("firefox") > -1)
  {
    $(document).ready(function() {
     $(".float-wrap").slimScroll({
       width: "100%",
       height: "100vh",
       distance: "100px",
       railVisible: false,
       wheelStep: 1,
       touchScrollStep: 48
     });
    });
    $('.search-info-msg').hide();
    $('.search-info-msg-fixed').show();
  }

  if (window.navigator.userAgent.indexOf("Edge") > -1) {
    $('.search-info-msg').hide();
    $('.search-info-msg-fixed').show();
  }

};

window.onload=detectBrowser();

 $('#parallax').parallax({
 invertX: true,
 invertY: true,
 scalarX: 20,
 frictionX: 0.15,
 frictionY: 0.15,
 originX: 0,
 originY: 0
});

jQuery("a#motion-reel").YouTubePopUp();