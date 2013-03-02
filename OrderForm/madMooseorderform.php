<?php

//----------------------------------------------------------------------------------------------------------
// Set Display variables
//----------------------------------------------------------------------------------------------------------
$DisplayMsg1 ="<p> Thank you again for your interest in our MadMoose home made products. Because we are a small mom and pop operation,";
$DisplayMsg1 .= " we do not process credit cards. It is a cost savings which we pass on to you.</p><br>";
$DisplayMsg2 = "<img height=300 width=500 align=center border=0 src=".$productDir."images/madMooseworkflow.jpg>";
$DisplayMsg3 = "<br><p>The way this works is that we tally up your totals. Get your name and address information (which we do not save or share with anyone), and ";
$DisplayMsg3 .= "present you with an invoice which you will need to print off and send to us with the appropriate funds.</p>";

$DisplayMsg4 = "<p>That's it. Nothing could be simpler!</p><br>";

?>

<br>


<div class="marginLeft20">
<table width="90%" class="regTextsmall">
	<tr>
		<td align="left" valign="top" class="regTextLarge"><?php print $DisplayMsg1; ?></td>
	</tr>
    <tr>
		<td align="center" valign="center" class="regTextLarge"><?php print $DisplayMsg2; ?></td>
	</tr>
    <tr>
		<td align="left" valign="top" class="regTextLarge"><?php print $DisplayMsg3; ?></td>
	</tr>
    <tr>
		<td align="left" valign="top" class="regTextLarge"><?php print $DisplayMsg4; ?></td>
	</tr>
</table>

</div>
