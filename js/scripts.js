// --------------------<[ Sticky navigation ]>--------------- /
$(document).ready(function() {
  var stickyNavTop = $('nav').offset().top;

  var stickyNav = function(){
    var scrollTop = $(window).scrollTop();

    if (scrollTop > stickyNavTop) { 
      $('nav').addClass('fixed');
    } else {
      $('nav').removeClass('fixed'); 
    }
  };

  stickyNav();

  $(window).scroll(function() {
    stickyNav();
  });
});

// --------------------<[ drop down navigation for mobile ]>--------------- /
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}

// --------------------<[ Animate airplane element ]>--------------- /

window.onload = function() { airplaneAnimate() };

function airplaneAnimate() {
  var airplane = document.getElementById("airPlane");
  var pos = -1750;
  var id = setInterval(frame, 10);

  function frame() {
    if (pos == 1500) {

      var fadeEffect = setInterval(function () {
              if (!airplane.style.opacity) {
                  airplane.style.opacity = 1;
              }
              if (airplane.style.opacity > 0) {
                  airplane.style.opacity -= 0.01;
              } else {
                  clearInterval(fadeEffect);
              }
          }, 1500);

    } else {
      pos++;
      airplane.style.marginLeft = pos + 'px';
    }
  }
}

