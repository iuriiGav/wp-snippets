import * as $ from 'jquery';

export const navbarFromTwoSidesFullScreen = () => {

    if($('.menu-item-has-children').length>0 || $('.ig-dropdown').length>0 ) {
        $('.menu-item-has-children').attr('aria-haspopup', 'true');
        $('.ig-dropdown-toggle').on('click', e => {
            e.preventDefault();
            console.log('click')
        })
    }

    $('#navbar-toggler-js').on ('click', function() {
        $(this).toggleClass('ig-nav-is-active');
        $('#main-nav-overlay').toggleClass('nav-is-open');
       });

}

export const makeNavbarTogglerAccessible = () => {
    if ($("#navbar-toggler-js").length > 0) {
      var menuToggle = document.querySelector("#navbar-toggler-js");
console.log('yes')  
      var enterKeyCode = 13;
      var spaceKeyCode = 32;
  
      menuToggle.addEventListener("keyup", function (event) {
        if (event.keyCode == enterKeyCode || event.keyCode == spaceKeyCode) {
  
          if ($('#navbar-toggler-js').hasClass('ig-nav-is-active')) {
            $('#navbar-toggler-js').removeClass('ig-nav-is-active');
            $('#main-nav-overlay').removeClass('nav-is-open');
          } else {
            $('#navbar-toggler-js').addClass('ig-nav-is-active');
            $('#main-nav-overlay').addClass('nav-is-open');
          }
        }
      });
    }
  };