<?php

//----------------------------------------------------------------------------------------------------------
// Set Display variables
//----------------------------------------------------------------------------------------------------------
$DisplayMsg1 = "
<center>
<p>
    <table width=\"80%\">
        <tr>
            <td align=center height=60>
                If you have a favorite fabric or want to match an outfit, supply us with one half a yard of fabric and will
    Custom make any of the three sized wallets especially for you!
            </td>
        </tr>  
        
        <tr>
            <td align=center height=60>
                Any questions, please contact us (see <b>Contact Us</b> on the <b>Mad Moose</b> tab).
            </td>
        </tr> 
        
        <tr>
            <td align=center height=60>
                    Thank You.
            </td>
        </tr> 
    </table>    
</p>

</center>
                ";
    
$DisplayMsg2 = "                

<p>
    <center>
    <table width=\"90%\">
        <tr>
            <td align=left height=60 class=\"largeTextRed\" colspan=3>
            Price:
            </td>
        </tr>  
        <tr>
            <td align=center height=60 class=\"largeText\">
                $Spacer
            </td>
            <td align=center height=60 class=\"largeText\">
                Small
            </td>
            <td align=center height=60 class=\"largeText\">
                Medium
            </td>
            <td align=center height=60 class=\"largeText\">
                Large
            </td>
        </tr>  
        <tr width=\"90%\">
            <td align=center height=60 class=\"largeText\">
                $Spacer
            </td>
            <td align=center height=60 class=\"largeText\">
                $CustomSmallQuiltedWalletPrice
            </td>
            <td align=center height=60 class=\"largeText\">
                $CustomMediumQuiltedWalletPrice
            </td>
            <td align=center height=60 class=\"largeText\">
                $CustomLargeQuiltedWalletPrice
            </td>
        </tr>  
    </table>
    </center>
    <br>
    <table width=\"90%\">
        <tr>
            <td align=left height=60 class=\"regText\">
            <i>To Purchase please click on the <a class=\"regTextItalicBoldNoUnderline\" href=\"index.html?selectID=OrderForm\"><b>Order Form</b></a> tab</i>
            </td>
        </tr>    
    </table>
       
</p>
                    ";

?>

<br><br>
<div class="marginLeft20">
<?php print $DisplayMsg1; ?>
</div>
<br>
<div class="marginLeft40">
<?php print $DisplayMsg2; ?>

</div>
