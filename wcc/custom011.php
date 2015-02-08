<?php
require 'body.php';
?>
<div class="table">
<div class="tablesplashleft"><img src="pics/splashleft.gif" height="710" width="300" /></div>
<div class="tablesplashright"><img src="pics/splashright.gif" height="710" width="300" /></div>
<div class="tablesplashup"><img src="pics/splashup.gif" /></div>
<div class="tablesplashdown"><img src="pics/splashdown.gif" /></div>
<table bgcolor="black" width="1000" cellpadding="15" cellspacing="5" height="710">
<tr>
	<td><img src="Logo.gif" height="200"/></td></tr>
<tr><td align="center"><div class="header"><font size="+4">Custom Order Checkout</font></div></td></tr>
<tr><td align="center"><div class="body">Below is the paypal link to order your custom computer. Please be sure you were linked to this page via email from requests@wadsworthcomputerconstruction.com and be sure the checkout price is what was sent to you in your email. Thank you for your order!<p>

<!--ORDER BUTTOM FORM-->
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="F6HG59FJ8BSZ4">
<table>
<tr><td><input type="hidden" name="on0" value="Shipping">Shipping</td></tr><tr><td><select name="os0">
	<option value="Local Pickup">Local Pickup (Wadsworth, OH) $375.00 USD</option>
	<option value="Economy Shipping">Economy Shipping $405.00 USD</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


</td>
</tr></table></div>