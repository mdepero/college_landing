---
layout:     post
title:      "Canvas with the Amazon Echo"
subtitle:   "An Alexa skill created for the Amazon Echo"
date:       2016-04-14 12:00:00
author:     "Matt DePero"
header-img: "img/post-bg-alexa.jpg"
---

<h2>What is the Amazon Echo and Alexa?</h2>

<p>
The <a href="http://www.amazon.com/Amazon-Echo-Bluetooth-Speaker-with-WiFi-Alexa/dp/B00X4WHP5E" target="_blank">Amazon Echo</a> is a hands free speaker you control with your voice. Alexa is the voice recognition service, also offered by Amazon, that allows users to interact with the speaker and also let developers create "skills" for the speaker. A skill is simply a custom way to interact with the speaker which allows developers to control most anything from a user's voice.
</p>

<p>
<a href="http://miami-acm.github.io/amazon-echo" target="_BLANK">ACM Presentation Slides on Echo and Alexa</a>
</p>

<h2>What is Canvas?</h2>

<p>
<a href="https://www.canvaslms.com/?lead_source_description=instructure.com_&__hstc=199188080.0efdec184ce4f612ff34b635744f7650.1463792319313.1463792319313.1463792319313.1&__hssc=199188080.1.1463792319313&__hsfp=79294685" target="_BLANK">Canvas</a> is an LMS (Learning Management System) created by Instructure and used by Miami University as of 2015. One important part of Canvas is that they have an API that allows developers to work with canvas from most any programming environment. In this case, we are able to access canvas using a <a href="https://aws.amazon.com/lambda/" target="_BLANK">Lambda Function</a> called by an Alexa Skill.
</p>

<h2>The Project</h2>
<p>
My Alexa Skill allows me to ask my Echo for my current grades, which are then read back to me after retrieving my grades from Canvas using its API. Unfortunately, it is difficult to demonstrate the code due to is being integrated into the speaker, however the source code for the Lambda function is available on my GitHub. From the Alexa Developer Console, I create my skills and tie an interaction model to my Lambda function. Every time my interaction model is called, Alexa makes a call to my function which returns my grade data from Canvas which is then sent back to the speaker.
</p>

<p>
<a href="https://github.com/mdepero/canvas-alexa-skill" taget="_BLANK">Lambda Function Written in NodeJS</a>
</p>
