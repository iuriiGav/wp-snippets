if ($(".navbar-toggler-js").length > 0) {
    var menuToggle = document.querySelector(".navbar-toggler-js");
    var menu = document.querySelector(".navbar-toggler-checkbox-js");

    var enterKeyCode = 13;
    var spaceKeyCode = 32;

    menuToggle.addEventListener("keyup", function (event) {
      if (event.keyCode == enterKeyCode || event.keyCode == spaceKeyCode) {
        var menuOpen = menu.checked;

        if (menuOpen) {
          menu.checked = false;
        } else {
          menu.checked = true;
        }
      }
    });
  }