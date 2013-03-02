<?php

$AddtoCartKey = $NavArray [$AddToCartI] ['key'];
$CheckOutKey = $NavArray [$CheckOutI] ['key'];
$CurrentModuleKey = $NavArray [$MediumQuiltedWalletsI] ['key'];

//----------------------------------------------------------------------------------------------------------
// Set Display variables
//----------------------------------------------------------------------------------------------------------
$DisplayMsg1 = "
<p>
    
    <table>
        <tr>
            <td valign=top align=left height=30>
			    <img border=0 src=\"".$productDir."images/goldbulsquare.gif\">
            </td>
            <td valign=top align=left height=30>
                Smaller then our large size. For the times you do not wish to take a purse.
            </td>
        </tr>    

        <tr>
            <td valign=top align=left height=30>
			    <img border=0 src=\"".$productDir."images/goldbulsquare.gif\">
            </td>
            <td valign=top align=left height=30>
                Fits in jacket or pants pocket.
            </td>
        </tr>    

        <tr>
            <td valign=top align=left height=30>
			    <img border=0 src=\"".$productDir."images/goldbulsquare.gif\">
            </td>
            <td valign=top align=left height=30>
                And, it will of course, look great in your purse, too.
            </td>
        </tr> 
        
        <tr>
            <td valign=top align=left height=30>
			    <img border=0 src=\"".$productDir."images/goldbulsquare.gif\">
            </td>
            <td valign=top align=left height=30>    
                Approximate Size: 6.0\" Tall x 3.25\" Wide.
            </td>
        </tr> 
        
        <tr>
            <td valign=top align=left height=30>
			    <img border=0 src=\"".$productDir."images/goldbulsquare.gif\">
            </td>
            <td valign=top align=left height=30>    
                Large range of Material to Choose from (See Fabric Color Chart).
            </td>
        </tr> 
     </table>
</p>
                ";
    
$DisplayMsg2 = "                

<p>
    <br><br>
    <center>
    <table>
        <tr>
            <td align=left height=60 class=\"largeTextRed\">
            Price: $".$MediumQuiltedWalletPrice." Each
            </td>
        </tr>    

        <tr>
            <td align=left height=60 class=\"regText\"> 
                 <a href=\"index.html?selectID=$AddtoCartKey&from=$CurrentModuleKey&cartfunction=Add\">
                    <img border=0 src=\"".$productDir."images/addtocart.gif\">
                </a>
            </td>
        </tr>        
    </table>
    </center>        
</p>
                    ";

?>

<br><br>
<div class="marginLeft20">
<table width="90%" class="regTextsmall">
	<tr>
        <td align="left" valign="top"><a href="#" 
                        onmouseover="Tip('<center> <img src=\'<?php print $productDir; ?>images/MediumQuiltedWalletMulti.bmp\' width=\'500\'> <br>')" 
                        onmouseout="UnTip()"  OnClick="(PopUP('pumadMoosesingleslide.php?filename=<?php print $productDir; ?>images/LargeQuiltedWalletMulti.bmp', 'pic', 600, 650, 1))">
                        <img  height=173 width=278 align="center" border="0" src="<?php print $productDir; ?>images/MediumQuiltedWalletMulti.bmp"></a></td>
		<td align="left">&nbsp;</td>
		<td align="left" valign="top" class="regText"><?php print $DisplayMsg1; ?></td>
	</tr>
</table>
<br><br><br>
<table width="90%">
	<tr>
		<td align="left"  valign="top" class="regText"><?php print $DisplayMsg2; ?></td>
		<td align="left">&nbsp;</td>
        <td align="center" valign="top"><a href="#" 
                        onmouseover="Tip('<center> <img src=\'<?php print $productDir; ?>images/MediumQuiltedWalletSingle.bmp\' width=\'500\'> <br>')" 
                        onmouseout="UnTip()"  OnClick="(PopUP('pumadMoosesingleslide.php?filename=<?php print $productDir; ?>images/MediumQuiltedWalletSingle.bmp', 'pic', 600, 650, 1))">
                        <img  height=173 width=278 align="center" border="0" src="<?php print $productDir; ?>images/MediumQuiltedWalletSingle.bmp"></a></td>
	</tr>
</table>
</div>
