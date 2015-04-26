/* JavaScript - Mattdepero.com
 *
 * All Code by Matt DePero
 */

setInterval(function(){
    $(".resume-scroll img")
    .animate({top:"-10px"}, 200).animate({top:"-4px"}, 200) // first jump
    .animate({top:"-7px"}, 100).animate({top:"-4px"}, 100) // second jump
    .animate({top:"-6px"}, 100).animate({top:"-4px"}, 100); // the last jump
},600);