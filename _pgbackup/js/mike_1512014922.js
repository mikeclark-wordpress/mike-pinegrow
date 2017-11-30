/*
this function will add different background color classes to "#wrapper" when the window is scrolled to a certain height. It will also remove the next color class so it reverts to the appropriate color when the user scrolls back up. Could be simplified, but this is easy to understand and alter.
*/

$(window).scroll(function() {
  if ($(this).scrollTop() <=50) {
    $('.menu-color').addClass('colorOne')
      .removeClass('colorTwo');
    } else {
    $('.menu-color').addClass('colorOne')
  }
});