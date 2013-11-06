<?php

//----------------------------------------------------------------------------------------------------------
// Set Display variables
//----------------------------------------------------------------------------------------------------------
$DisplaySelections = "<table width=\"70%\" class=\"regTextsmall\">";

$DisplaySelections .= "
        <tr>
                       ";
                       
        for ($i = 0; $i < count($FabricColorChartTokens); $i++)
        {        
            $dispImg = $FabricColorChartTokens[$i] ['floatimg'];
            $dispTitle = $FabricColorChartTokens[$i] ['title'];
            
            if ( ($i > 0) && ( ($i % 3) == 0) )
            {
                // add another TR - Keeps three in a line
                $DisplaySelections .= "</tr><tr>";
            }
                
        $DisplaySelections .= "
          <td>
            <table class=\"regTextsmallTableBorder\">
                <tr>
                    <td align=center>$dispTitle</td>
                </tr>
                
                <tr>
                    
                    <td class=\"verysmallText\" align=center valign=top><a href=\"#\" 
                        onmouseover=\"Tip('<center> <img src=".$productDir."images/$dispImg width=500> <br>')\" 
                        onmouseout=\"UnTip()\"  OnClick=\"(PopUP('pumadMoosesingleslide.php?filename=".$productDir."images/$dispImg', 'pic', 600, 650, 1))\">
                        <img  height=100 width=100 align=\"center\" border=\"0\" src=\"".$productDir."images/$dispImg\"></a>
                    </td>    
               </tr>
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
		<td align=center class="largeText">Fabric Color Chart</td> 
	</tr>

</table>
<br><br>

<center>
<?php print $DisplaySelections; ?>
</center>

</div>
