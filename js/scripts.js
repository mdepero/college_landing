/* JavaScript - Mattdepero.com
 *
 * All Code by Matt DePero
 */

$(document).ready(function(){

	setInterval(function(){
	    $(".resume-scroll")
	    
	    .animate({MarginBottom:"100px"}, 200);

	    /*.animate({MarginBottom:"10px"}, 200).animate({MarginBottom:"0px"}, 200) // first
	     .animate({MarginBottom:"6px"}, 200).animate({MarginBottom:"0px"}, 200) // second
	      .animate({MarginBottom:"4px"}, 200).animate({MarginBottom:"0px"}, 200) // third */
	},1500);

});





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