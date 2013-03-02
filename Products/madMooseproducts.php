<?php

//----------------------------------------------------------------------------------------------------------
// Set Display variables
//----------------------------------------------------------------------------------------------------------
$DisplayMsg1 = "<p>I have several sizes and styles of quilted wallets. Custom quilted wallets are available per request. Please view the <b>Fabric Color Chart</b> to see our available fabrics</p>";

$DisplayMsg2 = "<p></p>";

$DisplayMsg3 = "<p></p>";

$DisplaySelections = "<table width=\"70%\" class=\"regTextsmall\">
                            <tr>";
        for ($i = 0; $i < count($DisplayImgArrayMulti); $i++)
        {        
                $dispKey = $DisplayImgArrayMulti[$i] ['key'];
                $dispImgMulti = $DisplayImgArrayMulti[$i] ['floatimg'];
                $dispImgSingle = $DisplayImgArraySingle[$i] ['floatimg'];
                $dispTitle = $DisplayImgArrayMulti[$i] ['title'];
        $DisplaySelections .= "
          <td>
            <table class=\"regTextsmallTableBorder\">
                <tr>
                    <td align=center>$dispTitle</td>
                </tr>
                
                <tr><td>$Spacer</td></tr>
                
                <tr>
                    
                    <td class=\"verysmallText\" align=center valign=top <a href=\"index.html?selectID=$dispKey\"
                        onmouseover=\"Tip('<center> <img src=".$productDir."images/$dispImgMulti width=500> <br>')\" 
                        onmouseout=\"UnTip()\">
                        <img  height=100 width=100 align=center border=0 src=".$productDir."images/$dispImgMulti></a>
                    </td>
                    
               </tr>
               <tr><td>$Spacer</td></tr>
               <tr>
                    
                    <td class=\"verysmallText\" align=center valign=top <a href=\"index.html?selectID=$dispKey\"
                        onmouseover=\"Tip('<center> <img src=".$productDir."images/$dispImgSingle width=500> <br>')\" 
                        onmouseout=\"UnTip()\">
                        <img  height=100 width=100 align=center border=0 src=".$productDir."images/$dispImgSingle></a>
                    </td>
                    
               </tr>
               
               <tr><td>$Spacer</td></tr>
               
            </table>
          </td>  
                ";
        }
  
$DisplaySelections .= "
                            </tr>	
                            
                        </table>
                     ";

?>

<br>

<table width="100%">	
	<tr>
		<td align=center class="largeText">Beautiful Hand Made Quilted Wallets</td> 
	</tr>

</table>
<br><br>

<div class="marginLeft20">
<table width="90%" class="regTextsmall">
	<tr>
		<td align="left" valign="top" class="regText"><?php print $DisplayMsg1; ?></td>
	</tr>
</table>

<br>
<br>
<center>
<?php print $DisplaySelections; ?>
</center>

</div>
