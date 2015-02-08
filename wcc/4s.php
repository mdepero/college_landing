<div class="table">
<div class="tablesplashleft"><img src="pics/splashleft.gif" height="1010" width="300" /></div>
<div class="tablesplashright"><img src="pics/splashright.gif" height="1010" width="300" /></div>
<div class="tablesplashup"><img src="pics/splashup.gif" /></div>
<div class="tablesplashdown"><img src="pics/splashdown.gif" /></div>
<table bgcolor="black" width="1000" cellpadding="15" cellspacing="5" height="1010">
<tr>
	<td colspan="2" align="center" valign="middle"><table width="100%"><tr><td align="left" width="150"><img src="Logo.gif" height="150" /></td><td align="center"><div class="header" style="margin-right:40px;"><font size="+6">Computer Hardware Upgrades</font></div></td></tr></table>
    </td>
</tr>
<tr><td valign="middle" align="center"><img src="hardware.gif" /></td><td><div class="body">WCC offers simple, fast, and professional installations of nearly any computer hardware upgrade and installation. As software grows and developes, so must your computer. Don't let your computer fall behind, simply fill out the form below telling us what you want to upgrade and what specifications you want to upgrade to. We'll send you a quote telling you how much the parts would cost plus $8-$15 for labor depending on the part. We service desktops and laptops.<b><u>Local Akron and Wadsworth Ohio areas only and all information about the service will be sent via email within one business day of purchase.</u></b></div></td></tr>
<tr>
<td colspan="2">



<div class="header">Hardware Upgrade</div>
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
	 
	 <form method='post' action='services.php?cat=4'>
  Your Email: <input name='email' type='text' size='40' maxlength='60' value='".$_REQUEST['email']."'/><br>Subject: &nbsp&nbsp&nbsp&nbsp&nbsp<input name='subject' type='text' size='40' maxlength='60' value='".$_REQUEST['subject']."'/><p><input type='submit' value='Send Message'/>
  </td><td><div class='body'>
  Request:<br />
  <textarea name='message' rows='15' cols='40'>".$_REQUEST['message']."</textarea><br />
  </form></div></tr></table>";
    }
  elseif($_REQUEST['subject']=="")
  	{
		echo "<table><tr><td valign='top'><div class='body'>
	 <div class='body'>*Please include a subject
	 
	 <form method='post' action='services.php?cat=4'>
  Your Email: <input name='email' type='text' size='40' maxlength='60' value='".$_REQUEST['email']."'/><br>Subject: &nbsp&nbsp&nbsp&nbsp&nbsp<input name='subject' type='text' size='40' maxlength='60' value='".$_REQUEST['subject']."'/><p><input type='submit' value='Send Message'/>
  </td><td><div class='body'>
  Request:<br />
  <textarea name='message' rows='15' cols='40'>".$_REQUEST['message']."</textarea><br />
  </form></div></tr></table>";
	}
	elseif($_REQUEST['message']=="")
	{
		echo "<table><tr><td valign='top'><div class='body'>
	 <div class='body'>*Please include your upgrade
	 
	 <form method='post' action='services.php?cat=4'>
  Your Email: <input name='email' type='text' size='40' maxlength='60' value='".$_REQUEST['email']."'/><br>Subject: &nbsp&nbsp&nbsp&nbsp&nbsp<input name='subject' type='text' size='40' maxlength='60' value='".$_REQUEST['subject']."'/><p><input type='submit' value='Send Message'/>
  </td><td><div class='body'>
  Request:<br />
  <textarea name='message' rows='15' cols='40'>".$_REQUEST['message']."</textarea><br />
  </form></div></tr></table>";
	}
	else
    {

    
	require_once "Mail.php";
 
 $from = $_REQUEST['email'];
 $to = "WCC Requests <requestsauto@wadsworthcomputerconstruction.com>";
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
   echo('<div class="body">Request submitted successfully. You should recieve a reply including a quote and instructions on how you can order your computer within the next few days. Thank you!');
  }
	
	
	
	
    }
  }
else
  {//if "email" is not filled out, display the form
  echo "<table><tr><td valign='top'><div class='body'> <br /> <form method='post' action='services.php?cat=4'>
  Your Email: <input name='email' type='text' size='40' maxlength='60'/><br>Subject: &nbsp&nbsp&nbsp&nbsp&nbsp<input name='subject' type='text' value='Hardware Installation Request' size='40' maxlength='60'/><p><input type='submit' value='Submit'/>
  </td><td><div class='body'>
  Request:<br />
  <textarea name='message' rows='15' cols='40'></textarea><br />
  </form></div></tr></table>";
  }
?>


</td></tr></table>