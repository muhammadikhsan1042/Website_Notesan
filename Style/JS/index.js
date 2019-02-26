var scrollY = 0;
var distance = 40;
var speed = 24;
var scrollYproject = 0;
function cek(el){
  var currentY = window.pageYOffset;
  if (currentY < el) {
    autoScrollTo(el);
  } else if (currentY >= el) {
    resetScroller(el);
  }
}

function autoScrollTo(el) {
  var currentY = window.pageYOffset;
  var bodyHeight = document.body.offsetHeight;
  var yPos = currentY + window.innerHeight;
  var animator = setTimeout('autoScrollTo('+el+')',24);
  if(currentY < el){
    scrollY = currentY+distance;
    window.scroll(0, scrollY);
  } else {
    clearTimeout(animator);
  }
}


function resetScroller(el){
  var currentY = window.pageYOffset;
  var animator = setTimeout('resetScroller('+el+')',speed);
  if(currentY > el && currentY != 0){
    scrollY = currentY-distance;
    window.scroll(0, scrollY);
  } else {
    clearTimeout(animator);
  }
}

function goto(tujuan) {
  window.open(tujuan, '_blank');
}

$(document).ready(function() {

  $(window).scroll(function() {
    if ($(window).scrollTop()>200) {
      $(".header-navigation-fixed").slideDown('slow').css('display', 'flex');
      $(".profile-page").animate({opacity: '1'}, 500).clearQueue();
    } else {
      $(".header-navigation-fixed").slideUp('slow');
      $(".profile-page").css('opacity', '0').clearQueue();
    }

    if ($(window).scrollTop()>=600) {
      $(".education-page .main-tag").animate({opacity: '1'}, 500).clearQueue();
    } else {
      $(".education-page .main-tag").css('opacity', '0').clearQueue();
    }

    if ($(window).scrollTop()>=700) {
      $(".education-information:nth-child(1)").animate({opacity: '1'}, 500).clearQueue();

      setTimeout(function() {
        $(".education-information:nth-child(2)").animate({opacity: '1'}, 500).clearQueue();
      }, 400);

      setTimeout(function() {
        $(".education-information:nth-child(3)").animate({opacity: '1'}, 500).clearQueue();
      }, 800);

      setTimeout(function() {
        $(".education-information:nth-child(4)").animate({opacity: '1'}, 500).clearQueue();
      }, 1200);
    } else {
      $(".education-information").css('opacity', '0').clearQueue();
    }

    if ($(window).scrollTop()>=1400) {
      $(".skill-page .main-tag").animate({opacity: '1'}, 500).clearQueue();
    } else {
      $(".skill-page .main-tag").css('opacity', '0').clearQueue();
    }

    if ($(window).scrollTop()>=1500) {
      $(".skill-page .skill-item").animate({opacity: '1'}, 500).clearQueue();
    } else {
      $(".skill-page .skill-item").css('opacity', '0').clearQueue();
    }

    if ($(window).scrollTop()>=1800) {
      $(".project-page .main-tag").animate({opacity: '1'}, 500).clearQueue();
    } else {
      $(".project-page .main-tag").css('opacity', '0').clearQueue();
    }

    if ($(window).scrollTop()>=1850) {
      $(".project-page .project-page-wrap").animate({opacity: '1'}, 500).clearQueue();
    } else {
      $(".project-page .project-page-wrap").css('opacity', '0').clearQueue();
    }

    if ($(window).scrollTop()<460) {
      $(".header-navigation-fixed .header-navigation:nth-child(1)").css('border-bottom-color', 'blue');
    } else {
      $(".header-navigation-fixed .header-navigation:nth-child(1)").css('border-bottom-color', 'white');
          }
    if ($(window).scrollTop()>=460 && $(window).scrollTop()<1080) {
      $(".header-navigation-fixed .header-navigation:nth-child(2)").css('border-bottom-color', 'blue');
    } else {
      $(".header-navigation-fixed .header-navigation:nth-child(2)").css('border-bottom-color', 'white');
    }
    if ($(window).scrollTop()>=1080 && $(window).scrollTop()<1500) {
      $(".header-navigation-fixed .header-navigation:nth-child(3)").css('border-bottom-color', 'blue');
    } else {
      $(".header-navigation-fixed .header-navigation:nth-child(3)").css('border-bottom-color', 'white');
    }
    if ($(window).scrollTop()>=1500 && $(window).scrollTop()<2000) {
      $(".header-navigation-fixed .header-navigation:nth-child(4)").css('border-bottom-color', 'blue');
    } else {
      $(".header-navigation-fixed .header-navigation:nth-child(4)").css('border-bottom-color', 'white');
    }
    if ($(window).scrollTop()>=2000) {
      $(".header-navigation-fixed .header-navigation:nth-child(5)").css('border-bottom-color', 'blue');
    } else {
      $(".header-navigation-fixed .header-navigation:nth-child(5)").css('border-bottom-color', 'white');
    }
  });

  $("li").click(function() {
    if ($(this).css("background-color") == "rgba(0, 0, 0, 0)") {
      $("li").css('background-color', 'inherit');
      $(this).css('background-color', ' rgb(208, 208, 208)');
    } else {
      window.open($(this).attr('value'), '_blank');
    }
    if ($(this).index()>=0 && $(this).index()<=1) {
      $(".project-list-header h1").text("Website Application");
    } else if ($(this).index()>=2 && $(this).index()<=3) {
      $(".project-list-header h1").text("Animation Video");
    }
    if ($(this).index()==0) {
      $(".project-image img").remove();
      $(".project-image").html("<img src='/Assets/project-image/smundip.png' width='320'>");
    }
    if ($(this).index()==1) {
      $(".project-image img").remove();
      $(".project-image").html("<img src='/Assets/project-image/notesan.id.jpg' width='320'>");
    }
    if ($(this).index()==2) {
      $(".project-image img").remove();
      $(".project-image").html("<img src='/Assets/project-image/kpk-project.jpg' width='320'>");
    }
    if ($(this).index()==3) {
      $(".project-image img").remove();
      $(".project-image").html("<img src='/Assets/project-image/kmap-project.jpg' width='320'>");
    }
  });

});
