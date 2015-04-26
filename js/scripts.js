/* JavaScript - Mattdepero.com
 *
 * All Code by Matt DePero
 */



/*
 * Smooth Scroll provided by css-tricks: https://css-tricks.com/snippets/jquery/smooth-scrolling/
 * and by Karl Swedberg: http://www.learningjquery.com/2007/10/improved-animated-scrolling-script-for-same-page-links
 */
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});