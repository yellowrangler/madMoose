<?php

$AddtoCartKey = $NavArray [$AddToCartI] ['key'];
$CheckOutKey = $NavArray [$CheckOutI] ['key'];
$CurrentModuleKey = $NavArray [$LargeQuiltedWalletsI] ['key'];

//----------------------------------------------------------------------------------------------------------
// Set Display variables
//----------------------------------------------------------------------------------------------------------
$DisplayMsg1 = "
<p>
    <table>
        <tr height=30>
            <td valign=top align=left>
			    <img border=0 src=\"".$productDir."images/goldbulsquare.gif\">
            </td>
            <td valign=top align=left>
                Large size allows you to lay bills flat inside wallet without folding.
            </td>
        </tr>    
       
        <tr height=30>
            <td valign=top align=left>
			    <img border=0 src=\"".$productDir."images/goldbulsquare.gif\">
            </td>
            <td valign=top align=left>    
                Approximate Size: 7.25\" Tall x 3.25\" Wide.
            </td>
        </tr> 
        
     
        <tr height=30>
            <td valign=top align=left>
			    <img border=0 src=\"".$productDir."images/goldbulsquare.gif\">
            </td>
            <td valign=top align=left>    
                Large range of Material to Choose from (See Fabric Color Chart).
            </td>
        </tr> 
     </table>
</p>
                ";
    
$DisplayMsg2 = "                

<p>
   
    <center>
    <table>
        <tr>
            <td align=left height=60 class=\"largeTextRed\">
            Price: $".$LargeQuiltedWalletPrice." Each
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
        <td align="left" valign="top"><a href="#" onmouseover="Tip('<center> <img src=<?php print $productDir; ?>images/LargeQuiltedWalletMulti.bmp width=500> <br>')" 
                        onmouseout="UnTip()"  OnClick="(PopUP('pumadMoosesingleslide.php?filename=<?php print $productDir; ?>images/LargeQuiltedWalletMulti.bmp', 'pic', 600, 650, 1))">
                        <img  height=173 width=278 align="center" border="0" src="<?php print $productDir; ?>images/LargeQuiltedWalletMulti.bmp"></a>
        </td>
		<td align="left">&nbsp;</td>
		<td align="left" valign="top" class="regText"><?php print $DisplayMsg1; ?></td>
	</tr>
</table>
<br><br><br>
<table width="90%">
	<tr>
		<td align="left"  valign="top" class="regText"><?php print $DisplayMsg2; ?></td>
		<td align="left">&nbsp;</td>
        <td align="center" valign="top"><a href="#" onmouseover="Tip('<center> <img src=<?php print $productDir; ?>images/LargeQuiltedWalletSingle.JPG width=500> <br>')" 
                        onmouseout="UnTip()"  OnClick="(PopUP('pumadMoosesingleslide.php?filename=<?php print $productDir; ?>images/LargeQuiltedWalletSingle.JPG', 'pic', 600, 650, 1))">
                        <img  height=173 width=278 align="center" border="0" src="<?php print $productDir; ?>images/LargeQuiltedWalletSingle.JPG"></a>
        </td>
	</tr>
</table>
</div>
