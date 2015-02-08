
<div class="table">
<div class="tablesplashleft"><img src="pics/splashleft.gif" height="1060" width="300" /></div>
<div class="tablesplashright"><img src="pics/splashright.gif" height="1060" width="300" /></div>
<div class="tablesplashup"><img src="pics/splashup.gif" /></div>
<div class="tablesplashdown"><img src="pics/splashdown.gif" /></div>
<table bgcolor="black" width="1000" height="1050" cellpadding="15" cellspacing="5" height="1060">
<tr>
	<td valign="top" height="150"><table width="100%">
    <tr><td align="left" width="150"><img src="Logo.gif" height="150" /></td><td align="center"><div class="header" style="margin-right:120px;"><font size="+6">Custom Computer</font></div></td></tr></table></td>
</tr>
<tr>
	<td height="50" valign="top"><div class="form" style="margin-left:10px;">With Custom Computer, you can tell us exactly what you want and let us do the rest. We'll take your request, design a computer to meet your needs, and send you a quote of what it will cost. You can't have more freedom with choosing a PC. You can even just give us the URL of another company's computer or set your own price, guaranteeing you get the best deal on the PC you want.
    </div></td>
</tr>
<tr>
<td height="100%" valign="top">
<script type="text/javascript">

function change()
{
	var e=document.getElementById('choose');
	var a = e.options[e.selectedIndex].value;
	if(a==0)
	{
		document.getElementById('form').innerHTML=""
	}
	if(a==1)
	{
	//URL FORM
		
		document.getElementById('form').innerHTML="<div class='form'>Give us the URL of any computer and we'll match its specifications and beat its price.  Please avoid computers below $550 as computers this cheap usually include very low quality parts to achieve this price. We do not use such quality and therefore will not be able to reach thier price.<div class='form'><form action='products.php?cat=2' method='post' name='form'><input type='hidden' name='type' value='url'><table><tr><td valign='middle'><div class='form'>Your Email: </td><td valign='middle'><div class='form'><input type='text' name='email' size='50' maxlength='80'></td></tr><tr><td valign='middle'><div class='form'><div class='form'>Computer's URL: </td><td valign='middle'><div class='form'><input type='text' name='url' size='60' maxlength='400'></td></tr></table>Notes (optional):<br><textarea name='notes' rows='10' cols='60'></textarea><p><input type='submit' value='Submit'><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>"
		
	}
	if(a==2)
	{
	//CUSTOM FORM
		document.getElementById('form').innerHTML="<div class='form'>Enter enough information for us to choose the right part for you, URL's are fine if you want us to use a specific part<p><form action='products.php?cat=2' method='post' name='form'><input type='hidden' name='type' value='custom'><table><tr><td valign='middle'><div class='form'>*Your Email: </td><td valign='middle'><div class='form'><input type='text' size='50' name='email' maxlength='80'></td></tr><tr><td valign='middle'><div class='form'>*CPU: </td><td valign='middle'><div class='form'><input type='text' size='50' name='cpu' maxlength='150'></td></tr><tr><td valign='middle'><div class='form'>*Memory Amount (RAM): </td><td valign='middle'><div class='form'><input type='text' size='50' name='memory' maxlength='150'></td></tr><tr><td valign='middle'><div class='form'>*Hard Drive: </td><td valign='middle'><div class='form'><input type='text' size='50' name='harddrive' maxlength='150'></td></tr><tr><td valign='middle'><div class='form'>Video Card: </td><td valign='middle'><div class='form'><input type='text' size='50' name='videocard' maxlength='150'></td></tr><tr><td valign='middle'><div class='form'>Operating System: </td><td valign='middle'><div class='form'><input type='text' size='50' name='operatingsystem' maxlength='150' value='Windows 7 Home Premium'></td></tr><tr><td valign='middle'><div class='form'>Optical Drive: </td><td valign='middle'><div class='form'><input type='text' size='50' name='opticaldrive' maxlength='150' value='Basic SuperMulti'></td></tr><tr><td valign='middle'><div class='form'>Case: </td><td valign='middle'><div class='form'><input type='text' size='50' name='case' maxlength='150'></td></tr><tr><td valign='middle'><div class='form'>Monitor: </td><td valign='middle'><div class='form'><input type='text' size='50' name='monitor' maxlength='150'></td></tr><tr><td valign='middle'><div class='form'>Mouse/Keyboard: </td><td valign='middle'><div class='form'><input type='text' size='50' name='mousekeyboard' maxlength='150'></td></tr></table>Notes:<br><textarea name='notes' rows='10' cols='60'></textarea><div class='form'>*Required Feild<p><input type='submit' value='Submit'><p>&nbsp;</p>"
		
		
	}
	if(a==3)
	{
	//SET YOUR PRICE FORM
		document.getElementById('form').innerHTML="<div class='form'>With set your price, all you have to do is give us your price and the kind of computer you want and we'll build you the best computer to match your budget. Use the notes box to tell us the type of computer you want, what you want more of, or anything else you want us to know when we decide on the build.<p><form action='products.php?cat=2' method='post' name='form'><input type='hidden' name='type' value='budget'><table><tr><td valign='middle'><div class='form'>*Your Email: </td><td valign='middle'><div class='form'><input type='text' size='50' name='email' maxlength='80'></td></tr><tr><td valign='middle'><div class='form'>*Price/price range: </td><td valign='middle'><div class='form'><input type='text' name='price' size='20' maxlength='40'></td></tr></table>Notes:<br><textarea name='notes' rows='10' cols='60'></textarea><div class='form'>*Required Feild<p><input type='submit' value='Submit'><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>";
	}
}

</script>
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


function urlCheck($url)
{
return preg_match('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $url);
}


if(!isset($_REQUEST['type']))
{
echo '<select id="choose" onchange="change()">
	<option value="0" selected="selected">Choose an option:</option>
	<option value="1">Send us another company\'s computer\'s URL</option>
    <option value="2">Fill out your own specs</option>
	<option value="3">Set your price</option>
</select>
</td>
</tr>
<tr><td><div id="form"></div></td></tr></table>
<script type="text/javascript">
change();
</script>';
}
else
{
	if($_REQUEST['type']=='url')
	{
		if(spamcheck($_REQUEST['email'])==FALSE)
			{
				$check=FALSE;
				echo '<div class="error">Invalid Email';
			}
		elseif(!urlCheck($_REQUEST['url']))
			{
				$check=FALSE;
				echo '<div class="error">Invalid URL, be sure to include http://';
			}
		else
			{
				$message="Computer Request:  From: ".$_REQUEST['email']."  Computer URL: ".$_REQUEST['url']."  Notes: ".$_REQUEST['notes'];
				
				
				 require_once "Mail.php";
 
 $from = $_REQUEST['email'];
 $to = "WCC Requests <requestsauto@wadsworthcomputerconstruction.com>";
 $subject = "Computer Request (URL)";
 $body = $message;
 
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
  

				$check=TRUE;
			}
	}
	elseif($_REQUEST['type']=='custom')
	{
		if(spamcheck($_REQUEST['email'])==FALSE)
		{
			$check=FALSE;
			echo '<div class="error">Invalid Email';
		}
		elseif($_REQUEST['cpu']=="")
		{
			$check=FALSE;
			echo '<div class="error">Please include information in the CPU field';
		}
		elseif($_REQUEST['memory']=="")
		{
			$check=FALSE;
			echo '<div class="error">Please include information in the Memory field';
		}
		elseif($_REQUEST['harddrive']=="")
		{
			$check=FALSE;
			echo '<div class="error">Please include information in the Hard Drive field';
		}
		else
		{
			$message='Computer Request:  From: '.$_REQUEST['email'].'  Custom Configuration:  CPU: '.$_REQUEST['cpu'].'  Memory: '.$_REQUEST['memory'].'  Hard Drive: '.$_REQUEST['harddrive'].'  Video Card: '.$_REQUEST['videocard'].'  Operating System: '.$_REQUEST['operatingsystem'].'  Optical Drive: '.$_REQUEST['opticaldrive'].'  Case: '.$_REQUEST['case'].'  Monitor: '.$_REQUEST['monitor'].'  Mouse/Keyboard: '.$_REQUEST['mousekeyboard'].' Notes: '.$_REQUEST['notes'];
			
			
			 require_once "Mail.php";
 
 $from = $_REQUEST['email'];
 $to = "WCC Requests <requestsauto@wadsworthcomputerconstruction.com>";
 $subject = "Computer Request (Custom)";
 $body = $message;
 
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
			
			
			$check=TRUE;
		}
		
	}
	elseif($_REQUEST['type']=='budget')
	{
		if(spamcheck($_REQUEST['email'])==FALSE)
		{
			$check=FALSE;
			echo '<div class="error">Invalid Email';
		}
		elseif($_REQUEST['price']=="")
		{
			$check=FALSE;
			echo '<div class="error">Please include a price/price range';
		}
		else
		{
			$message='Computer Request:  From: '.$_REQUEST['email'].'  Computer Price Range: '.$_REQUEST['price'].'  Notes to follow: '.$_REQUEST['notes'];
			
			
			 require_once "Mail.php";
 
 $from = $_REQUEST['email'];
 $to = "WCC Requests <requestsauto@wadsworthcomputerconstruction.com>";
 $subject = "Computer Request (Budget/Price Range)";
 $body = $message;
 
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
			
			
			
			$check=TRUE;
		}
	}
	if(isset($check))
	{
		if($check==FALSE)
		{
			if($_REQUEST['type']=='url')
			{
				echo "<form action='products.php?cat=2' method='post' name='form'><input type='hidden' name='type' value='url'><table><tr><td><div class='form'>Your Email: </td><td><input type='text' name='email' size='50' maxlength='70' value='".$_REQUEST['email']."'></td></tr><tr><td><div class='form'>Computer's URL: </td><td><input type='text' name='url' size='60' maxlength='400' value='".$_REQUEST['url']."'></td></tr></table><div class='form'>Notes (optional):<br><textarea name='notes' rows='10' cols='60'>".$_REQUEST['notes']."</textarea><p><input type='submit' value='Submit'><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>";
			}
			if($_REQUEST['type']=='custom')
			{
				echo "<form action='products.php?cat=2' method='post' name='form'><input type='hidden' name='type' value='custom'><table><tr><td><div class='form'>*Your Email: </td><td><input type='text' size='50' name='email' value='".$_REQUEST['email']."' maxlength='70'></td></tr><tr><td><div class='form'>*CPU: </td><td><input type='text' size='50' name='cpu' value='".$_REQUEST['cpu']."' maxlength='150'></td></tr><tr><td><div class='form'>*Memory Amount (RAM): </td><td><input type='text' size='50' name='memory' value='".$_REQUEST['memory']."' maxlength='150'></td></tr><tr><td><div class='form'>*Hard Drive: </td><td><input type='text' size='50' name='harddrive' value='".$_REQUEST['harddrive']."' maxlength='150'></td></tr><tr><td><div class='form'>Video Card: </td><td><input type='text' size='50' name='videocard' value='".$_REQUEST['videocard']."' maxlength='150'></td></tr><tr><td><div class='form'>Operating System: </td><td><input type='text' size='50' name='operatingsystem' value='".$_REQUEST['operatingsystem']."' maxlength='150'></td></tr><tr><td><div class='form'>Optical Drive: </td><td><input type='text' size='50' name='opticaldrive' value='".$_REQUEST['opticaldrive']."' maxlength='150'></td></tr><tr><td><div class='form'>Case: </td><td><input type='text' size='50' name='case' value='".$_REQUEST['case']."' maxlength='150'></td></tr><tr><td><div class='form'>Monitor: </td><td><input type='text' size='50' name='monitor' value='".$_REQUEST['monitor']."' maxlength='150'></td></tr><tr><td><div class='form'>Mouse/Keyboard: </td><td><input type='text' size='50' name='mousekeyboard' value='".$_REQUEST['mousekeyboard']."' maxlength='150'></td></tr></table><div class='form'>Notes:<br><textarea name='notes' rows='10' cols='60'>".$_REQUEST['notes']."</textarea><div class='form'>*Required Feild<p><input type='submit' value='Submit'>";
			}
			if($_REQUEST['type']=='budget')
			{
				echo "<form action='products.php?cat=2' method='post' name='form'><input type='hidden' name='type' value='budget'><table><tr><td><div class='form'>*Your Email: </td><td><input type='text' size='50' name='email' maxlength='80' value='".$_REQUEST['email']."'></td></tr><tr><td><div class='form'>*Price/price range: </td><td><input type='text' name='price' size='20' maxlength='40' value='".$_REQUEST['price']."'></td></tr></table><div class='form'>Notes:<br><textarea name='notes' rows='10' cols='60'>".$_REQUEST['notes']."</textarea><div class='form'>*Required Feild<p><input type='submit' value='Submit'><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>";
			}
		}
	}
}
?>
</td></tr></table></div>









