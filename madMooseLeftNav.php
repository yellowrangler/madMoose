<?php

$DisplayLeftNav = GetLeftNav($selectID);

//
// add buttons for supported causes
//
$imageWidth = $supportedCausesWidth - 40;
$DisplayLeftNavBody = "
    <div class=\"supportedCauses\">
    <center>
    <table width = \"100%\">
        <tr>
            <td align=center> 
                <a href=\"#\" onClick=\"(PopUP('http://www.lejac.net', 'lejac', 840, 840, 0))\">
                    <img  class=\"borderGroove\" alt=\"Lejac Enterprices Furniture Restoration and Repair\" 
                    src=\"images/lejacicon.gif\" 
                    align=center width=\"".$imageWidth."\">
                </a>	
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;
            </td>
        </tr>
        <tr>
            <td align=center> 
                <a href=\"#\" onClick=\"(PopUP('http://www.thetrustees.org/', 'ttor', 840, 840, 0))\">
                    <img  border=0 alt=\"Please support and visit the The Trustees of the Reservation\" 
                    src=\"images/ttor.jpg\" 
                    align=center width=\"".$imageWidth."\">
                </a>
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;
            </td>
        </tr>
    </table>
    </center>
    </div>
";
   
?>

<?php print $DisplayLeftNav; ?>

<?php print $DisplayLeftNavBody; ?>
