<?php
require 'body.php';
?>
<div class="table">
<div class="tablesplashleft"><img src="pics/splashleft.gif" height="665" width="300" /></div>
<div class="tablesplashright"><img src="pics/splashright.gif" height="665" width="300" /></div>
<div class="tablesplashup"><img src="pics/splashup.gif" /></div>
<div class="tablesplashdown"><img src="pics/splashdown.gif" /></div>
<table bgcolor="black" width="1000" cellpadding="15" cellspacing="5" height="665">
<tr>
	<td valign="top"><img src="Logo.gif" height="200"/></td>
    <td width="100%"><div class="header" style="margin-left:120px;"><font size="+4">Contact Us</font></div><div align="right" style="margin-right:10px;"><div class="header">Location:</div><div class="body">Wadsworth, Ohio 44281</div><div class="header">Phone:</div><div class="body">(330) 334-3796</div><div class="header">Email:</div><div class="body">support@wadsworthcomputerconstruction.com</div>

</div>
</td>
</tr>
<tr><td colspan="2">
<div class="header">Contact Form:</div>
<?php
function spamcheck($field)
  {
  //Ensure no spammed email
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);

  //validate the e-mail
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }

if (isset($_REQUEST['email']))
  {//if "email" is filled out, proceed

  //check if the email address is invalid
  $mailcheck = spamcheck($_REQUEST['email']);
  if ($mailcheck==FALSE)
    {
    echo "<table><tr><td valign='top'><div class='body'>
	 <div class='body'>*Invalid email input
	 
	 <form method='post' action='contactus.php'>
  Your Email: <input name='email' type='text' size='40' maxlength='60' value='".$_REQUEST['email']."'/><br>Subject: &nbsp&nbsp&nbsp&nbsp&nbsp<input name='subject' type='text' size='40' maxlength='60' value='".$_REQUEST['subject']."'/><p><input type='submit' value='Send Message'/>
  </td><td><div class='body'>
  Message:<br />
  <textarea name='message' rows='15' cols='40'>".$_REQUEST['message']."</textarea><br />
  </form></div></tr></table>";
    }
  elseif($_REQUEST['subject']=="")
  	{
		echo "<table><tr><td valign='top'><div class='body'>
	 <div class='body'>*Please include a subject
	 
	 <form method='post' action='contactus.php'>
  Your Email: <input name='email' type='text' size='40' maxlength='60' value='".$_REQUEST['email']."'/><br>Subject: &nbsp&nbsp&nbsp&nbsp&nbsp<input name='subject' type='text' size='40' maxlength='60' value='".$_REQUEST['subject']."'/><p><input type='submit' value='Send Message'/>
  </td><td><div class='body'>
  Message:<br />
  <textarea name='message' rows='15' cols='40'>".$_REQUEST['message']."</textarea><br />
  </form></div></tr></table>";
	}
	elseif($_REQUEST['message']=="")
	{
		echo "<table><tr><td valign='top'><div class='body'>
	 <div class='body'>*Please include a message
	 
	 <form method='post' action='contactus.php'>
  Your Email: <input name='email' type='text' size='40' maxlength='60' value='".$_REQUEST['email']."'/><br>Subject: &nbsp&nbsp&nbsp&nbsp&nbsp<input name='subject' type='text' size='40' maxlength='60' value='".$_REQUEST['subject']."'/><p><input type='submit' value='Send Message'/>
  </td><td><div class='body'>
  Message:<br />
  <textarea name='message' rows='15' cols='40'>".$_REQUEST['message']."</textarea><br />
  </form></div></tr></table>";
	}
	else
    {
	//START PHPMAILER FUNCTION



 require_once "Mail.php";
 
 $from = $_REQUEST['email'];
 $to = "WCC Support <supportauto@wadsworthcomputerconstruction.com>";
 $subject = $_REQUEST['subject'];
 $body = $_REQUEST['message'];
 
 $host = "mail.wadsworthcomputerconstruction.com";
 $username = "wadswort";
 $password = "ryanlovesdhw";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p><div class='error'>" . $mail->getMessage() . "</p>");
  } else {
   echo("<div class='body'>Sent successfully. Thank you for your message!<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><br>");
  }
  
  
  
  
    }
  }
else
  {//if "email" is not filled out, display the form
  echo "<table><tr><td valign='top'><div class='body'> <br /> <form method='post' action='contactus.php'>
  Your Email: <input name='email' type='text' size='40' maxlength='60'/><br>Subject: &nbsp&nbsp&nbsp&nbsp&nbsp<input name='subject' type='text' value='' size='40' maxlength='60'/><p><input type='submit' value='Send Message'/>
  </td><td><div class='body'>
  Message:<br />
  <textarea name='message' rows='15' cols='40'></textarea><br />
  </form></div></tr></table>";
  }
?>