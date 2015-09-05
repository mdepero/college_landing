---
layout:     post
title:      "First Post"
subtitle:   "Humble Beginnings?"
date:       2015-02-06 12:00:00
author:     "Matt DePero"
header-img: "img/post-bg-01.jpg"
---

<p>This is more of a test post than anything else, but rather than just bashing some text and pressing delete, here's an html5 demo I did for my CSE102 class to...get the ball rolling? </p>


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
