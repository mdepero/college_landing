---
layout:     post
title:      "First Post"
subtitle:   "Humble Beginnings?"
date:       2015-02-06 12:00:00
author:     "Matt DePero"
header-img: "img/post-bg-01.jpg"
---

<p>The clock has just rolled over into the 6th of February and I figure it's as good a time as ever to create the first post of this page. This is more a test post than anything, but the site needs a little more of a christening than some keyboard bashing followed by a quick delete.</p>

<p>I, however, am not a creative person when it comes to stuff like this, and as such have nothing to fill this ceremonious filler page with. Instead, here's a html5 demo I did for my CSE102 class to get the ball rolling: </p>
<script type="text/javascript">
	/*Canvas Control Javascript
	 *
	 *All Code by Matt DePero
	 *
	 */
	 	var rotate = 0;
		window.onload = function(){
			var fps = 50;
			var timer = setInterval(run,1000/fps);
		}
		function run(){
			var ctx=document.getElementById("myCanvas").getContext("2d");
			ctx.fillStyle="#FFF";
			ctx.fillRect(0,0,400,300);
			ctx.fillStyle="#00F";
			ctx.beginPath();
			ctx.arc((Math.cos(rotate)*70)+200, (Math.sin(rotate)*70)+150, 50, 0, 2 * Math.PI, false);
			ctx.fill();
			rotate += .05;
		}
</script>
<p class="text-center">
	<canvas id="myCanvas" width="400px" height="300px" style="border:1px solid #00F;">Your browser does not support the canvas element</canvas>
</p>


<!--Template Stuff
<blockquote></blockquote>
<a href="#">
    <img src="{{ site.baseurl }}/img/post-sample-image.jpg" alt="Post Sample Image">
</a>
<span class="caption text-muted">Picture Caption</span>
-->
