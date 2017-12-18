/*
this function will add different background color classes to "#wrapper" when the window is scrolled to a certain height. It will also remove the next color class so it reverts to the appropriate color when the user scrolls back up. Could be simplified, but this is easy to understand and alter.
*/

if($('.navbar-toggle').css('display')!='none')
{
    $('.menu-color').addClass('colorTwo');  
}

$(window).scroll(function() {
  if($('.navbar-toggle').css('display')!='none') return;
  if ($(this).scrollTop() <=50) {
    $('.menu-color').addClass('colorOne')
      .removeClass('colorTwo');
    } else {
    $('.menu-color').addClass('colorTwo')
  }
  if ($(this).scrollTop() <=150) {
    $('.menu-color').addClass('position-normal')
      .removeClass('position-fixed');
    } else {
    $('.menu-color').addClass('position-fixed')
  }
    
});