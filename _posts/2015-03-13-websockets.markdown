---
layout:     post
title:      "Websockets"
subtitle:   "A demo with websockets"
date:       2015-03-13 12:00:00
author:     "Matt DePero"
header-img: "img/post-bg-websockets.jpg"
---

<h2>What are Websockets?</h2>

<p>Grabbed right off <a href="https://developer.mozilla.org/en-US/docs/WebSockets" target="_BLANK">Mozilla's website</a>, WebSockets is an advanced technology that makes it possible to open an interactive communication session between the user's browser and a server. With this API, you can send messages to a server and receive event-driven responses without having to poll the server for a reply.
</p>

<h2>My Demo</h2>

<p>I've attempted to do two things with this websockets demo:
	<ol>
		<li>Use a smartphone as a controller utilizing the accelerometer</li>
		<li>Create an MMO like engine that can have an unlimited number of controllers running at once</li>
	</ol>
	At the moment, all the demo does is create a single square on the "screen" for every phone that connects to the server and each person connected can then steer the square as it moves around.
</p>

<h2>How it Works</h2>
<h3>The Server</h3>
<p>At the core of a websocket application is a central server that receives messages and returns messages. I am using a simple <a href="https://github.com/opiate/SimpleWebSocketServer" target="_BLANK">python based server</a> that is running on a computer at home. I also wrote the game engine in python which also runs on the server. When the server is pinged for data, it simply returns a parsable string that creates an array of x's and y's of each game object currently connected.
</p>
<h3>The Screen</h3>
<p>The homepage of the project pulls all the data collected by the server and displays all the objects in real time. All objects are displayed relative to the size of your screen, so the relative position of all the objects are the same regardless of resolution or screen dimensions.
</p>
<h3>The Controller</h3>
<p>Your phone connects to the controller page. This page does nothing more than take the accelerometer data from your phone and send it to the server roughly 6 times a second. Unlimited controllers can be connected at once and all objects will appear on the same screen, however I have not tested just how many controllers my set up can take before it starts having problems.
</p>


<h2>Live Demo</h2>
<p class="text-center"><a href="{{ site.baseurl }}/websockets/" target="_BLANK">Open on your computer</a> | <a href="{{ site.baseurl }}/websockets/controller" target="_BLANK">Open on your phone</a></p>

<!--Template Stuff
<blockquote></blockquote>
<a href="#">
    <img src="{{ site.baseurl }}/img/post-sample-image.jpg" alt="Post Sample Image">
</a>
<span class="caption text-muted">Picture Caption</span>
-->
