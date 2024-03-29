// --------------------<[ Sticky navigation ]>--------------- /
$(document).ready(function() {
  var stickyNavTop = $('#mainNav').offset().top;

  var stickyNav = function(){
    var scrollTop = $(window).scrollTop();

    if (scrollTop > stickyNavTop) { 
      $('#mainNav').addClass('fixed');
    } else {
      $('#mainNav').removeClass('fixed'); 
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

// window.onload = function() { airplaneAnimate() };

// function airplaneAnimate() {
//   var airplane = document.getElementById("airPlane");
//   var pos = -1750;
//   var id = setInterval(frame, 10);

//   function frame() {
//     if (pos == 1500) {

//       var fadeEffect = setInterval(function () {
//               if (!airplane.style.opacity) {
//                   airplane.style.opacity = 1;
//               }
//               if (airplane.style.opacity > 0) {
//                   airplane.style.opacity -= 0.01;
//               } else {
//                   clearInterval(fadeEffect);
//               }
//           }, 1500);

//     } else {
//       pos++;
//       airplane.style.marginLeft = pos + 'px';
//     }
//   }
// }

function confirmDelete() {
  if(confirm('Are you sure you want to delete your account?')) {
    return true;
  } else {
    return false;
  }
}

// --------------------<[ Animate Fade In ]>--------------- /

// fade in text - fade in
$(document).ready(function() {
    
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.hideme').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},700);                    
            }            
        }); 
    });    
});


// animate objects to left-right
/*Interactivity to determine when an animated element in in view. In view elements trigger our animation*/
$(document).ready(function() {

  //window and animation items
  var animation_elements = $.find('.animation-element');
  var web_window = $(window);

  //check to see if any animation containers are currently in view
  function check_if_in_view() {
    //get current window information
    var window_height = web_window.height();
    var window_top_position = web_window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

    //iterate through elements to see if its in view
    $.each(animation_elements, function() {

      //get the element sinformation
      var element = $(this);
      var element_height = $(element).outerHeight();
      var element_top_position = $(element).offset().top;
      var element_bottom_position = (element_top_position + element_height);

      //check to see if this current container is visible (its viewable if it exists between the viewable space of the viewport)
      if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
        element.addClass('in-view');
      } else {
        element.removeClass('in-view');
      }
    });

  }

  //on or scroll, detect elements in view
  $(window).on('scroll resize', function() {
      check_if_in_view()
    })
    //trigger our scroll event on initial load
  $(window).trigger('scroll');

});