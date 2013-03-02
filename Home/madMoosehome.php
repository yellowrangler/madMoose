<?php

//----------------------------------------------------------------------------------------------------------
// Set Display variables
//----------------------------------------------------------------------------------------------------------
$DisplayMsg1 = "<p>Mad Moose Creations specializes in the design and construction of <b>Quilted wallets</b>.</p>
                <p>Our wallets come in a variety of colors, styles and sizes.</p>
                <p>We are also happy to create a quilted wallet to meet your exacting specifications.</p>
                <p>Please feel free to browse our current offerings.</p>
                <p>Purchases can be made via Pay Pal or through the US mail.</p>";

$DisplayMsg2 = "<p>Our current product line includes:
			<ul>";

for ($i = 0; $i < count($DisplayImgArrayMulti); $i++)
{
    
    $dispKey = $DisplayImgArrayMulti[$i] ['key'];
    $dispImg = $DisplayImgArrayMulti[$i] ['floatimg'];
    $dispTitle = $DisplayImgArrayMulti[$i] ['title'];
    $DisplayMsg2 .= "
    <li>
        <a class=\"bigBlueLink\" href=\"index.html?selectID=$dispKey\"
                    onmouseover=\"Tip('<center> <img src=".$productDir."images/$dispImg width=500> <br>')\" 
                    onmouseout=\"UnTip()\">
                    $dispTitle
                    </a>
    </li>
            ";
    
}

$DisplayMsg2 .= "                
			</ul> </p>
            
            <p>With a broad range of colors and fabrics</p>";

?>

<br>

<table width="100%">	
	<tr>
		<td align=center class="madMooseHeader">Makers of Beautiful Hand Made Quilted Wallets</td> 
	</tr>

</table>
<br><br>

<div class="marginLeft20">
<table width="90%" class="regTextsmall">
	<tr>
		<td align="center" valign="top"><img height=173 width=278 align="center" border="0" src="<?php print $productDir; ?>images/LargeQuiltedWalletSingle.JPG"></td>
		<td align="left">&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td align="left" valign="top" class="regText"><?php print $DisplayMsg1; ?></td>
	</tr>
</table>
<br><br><br>
<table width="90%">
	<tr>
		<td align="left"  valign="top" class="regText"><?php print $DisplayMsg2; ?></td>
		<td align="left">&nbsp;</td>
		<td align="center"  valign="top"><img height=173 width=278 align="center" border="0" src="<?php print $productDir; ?>images/SmallQuiltedWalletSingle.gif"></td>
	</tr>
</table>
</div>
