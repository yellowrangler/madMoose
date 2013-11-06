<?php

//----------------------------------------------------------------------------------------------------------
// Set special globals.
//----------------------------------------------------------------------------------------------------------
$module = 'ajaxmadMooseform.php';


require ('madMooseGLOBAL.php');

require ('madMooseInit.php');

require ('madMoosefuncs.php');

require ('madMoosePI.php');


$Spacer = "&nbsp;&nbsp;";

//----------------------------------------------------------------------------------------------------------
// Get and set selection
//----------------------------------------------------------------------------------------------------------
if (isset($_POST[name]) && ($_POST[name] != "") )
{
	$name = $_POST[name];
}
else
{
	$name = "";
}

if (isset($_POST[address]) && ($_POST[address] != "") )
{
	$address = $_POST[address];
}
else
{
	$address = "";
}

if (isset($_POST[city]) && ($_POST[city] != "") )
{
	$city = $_POST[city];
}
else
{
	$city = "";
}


if (isset($_POST[state]) && ($_POST[state] != "") )
{
	$state = $_POST[state];
}
else
{
	$state = "";
}

if (isset($_POST[zipcode]) && ($_POST[zipcode] != "") )
{
	$zipcode = $_POST[zipcode];
}
else
{
	$zipcode = "";
}

if (isset($_POST[phonenumber]) && ($_POST[phonenumber] != "") )
{
	$phonenumber = $_POST[phonenumber];
}
else
{
	$phonenumber = "";
}

if (isset($_POST[email]) && ($_POST[email] != "") )
{
	$email = $_POST[email];
}
else
{
	$email = "";
}


//----------------------------------------------------------------------------------------------------------
// Get and set selection
//----------------------------------------------------------------------------------------------------------

//
//printCart();
//$CartItems = getCartItems();
//    $LineItemsArray = explode($FST, $CartItems);
//print_r($LineItemsArray);
//exit();
$rcode = isShopingCartEmpty();
if ($rcode == 0)
{
    //
    // Now build display fields
    //
    $CartItems = getCartItems();
    $LineItemsArray = explode($StartItemToken, $CartItems);
    
    $CartGrandTotalPrice = 0;
    $DisplayTable = "";
    $ItemCount = count($LineItemsArray);
    for ($p = 0, $i = 1; $i < $ItemCount; $i++, $p++)
    {
        $LineItems = explode($FST, $LineItemsArray[$i]);  
        
        //
        // first the fabric
        //
         if ($LineItems[$CartFabricIndex] == $UnknownItemToken)
         {
            $CartFabricTitle = $EmptyItem;
            $CartFabricValue = $EmptyItem;
         }
        else
        {
            $fabCheck = $LineItems[$CartFabricIndex];
            for ($w = 0; $w < count($FabricColorChartTokens); $w++)
            {
                if ($fabCheck == $FabricColorChartTokens[$w] ['token'])
                {
                    $CartFabricTitle = $FabricColorChartTokens[$w] ['title'];
                    $CartFabricValue = $FabricColorChartTokens[$w] ['token'];
                    break;
                }
            } // end of for
        }
    
        //
        // Next Item Quantity
        //    
        if ($LineItems[$CartQtyIndex] == $UnknownItemToken)
        {
            $CartQty = $EmptyItem;
        }
        else
        {
            $CartQty = $LineItems[$CartQtyIndex];
        }
        
        //
        // Standard and size
        //
        $smallSize = $CartSizeTokens [$SmallItemTokenIndex] ['token'];
        $mediumSize = $CartSizeTokens [$MediumItemTokenIndex] ['token'];
        $largeSize = $CartSizeTokens [$LargeItemTokenIndex] ['token'];
        $standardType = $CartTypeTokens [$StandardItemTokenIndex] ['token'];
        $customType = $CartTypeTokens [$CustomItemTokenIndex] ['token'];
        
        switch ($LineItems[$CartSizeIndex])
        {
            case $smallSize:
                $CartSizeTitle = $CartSizeTokens [$SmallItemTokenIndex] ['title'];
                $CartSizeValue = $CartSizeTokens [$SmallItemTokenIndex] ['token'];
         
                if ($LineItems[$CartTypeIndex] == $standardType)
                {
                    $CartTypeTitle = $CartTypeTokens [$StandardItemTokenIndex] ['title'];
                    $CartTypeValue = $CartTypeTokens [$StandardItemTokenIndex] ['token'];
                    $CartUnitPrice = $SmallQuiltedWalletPrice;
                }
                else if ($LineItems[$CartTypeIndex] == $customType)
                {
                    $CartTypeTitle = $CartTypeTokens [$CustomItemTokenIndex] ['title'];
                    $CartTypeValue = $CartTypeTokens [$CustomItemTokenIndex] ['token'];
                    $CartUnitPrice = $CustomSmallQuiltedWalletPrice;
                }
                else
                {
                    $CartTypeTitle = $EmptyItem;
                    $CartTypeValue = $EmptyLine;
                    $CartUnitPrice = $EmptyItem;
                }
                break;
                
            case $mediumSize:
                $CartSizeTitle = $CartSizeTokens [$MediumItemTokenIndex] ['title'];
                $CartSizeValue = $CartSizeTokens [$MediumItemTokenIndex] ['token'];

                if ($LineItems[$CartTypeIndex] == $standardType)
                {
                    $CartTypeTitle = $CartTypeTokens [$StandardItemTokenIndex] ['title'];
                    $CartTypeValue = $CartTypeTokens [$StandardItemTokenIndex] ['token'];
                    $CartUnitPrice = $MediumQuiltedWalletPrice;
                }
                else if ($LineItems[$CartTypeIndex] == $customType)
                {
                    $CartTypeTitle = $CartTypeTokens [$CustomItemTokenIndex] ['title'];
                    $CartTypeValue = $CartTypeTokens [$CustomItemTokenIndex] ['token'];
                    $CartUnitPrice = $CustomMediumQuiltedWalletPrice; 
                }
                else
                {
                    $CartTypeTitle = $EmptyItem;
                    $CartTypeValue = $EmptyLine;
                    $CartUnitPrice = $EmptyItem;
                }
                break;
                
            case $largeSize:
                $CartSizeTitle = $CartSizeTokens [$LargeItemTokenIndex] ['title'];
                $CartSizeValue = $CartSizeTokens [$LargeItemTokenIndex] ['token'];
                
                if ($LineItems[$CartTypeIndex] == $standardType)
                {
                    $CartTypeTitle = $CartTypeTokens [$StandardItemTokenIndex] ['title'];
                    $CartTypeValue = $CartTypeTokens [$StandardItemTokenIndex] ['token'];
                    $CartUnitPrice = $LargeQuiltedWalletPrice;
                }
                else if ($LineItems[$CartTypeIndex] == $customType)
                {
                    $CartTypeTitle = $CartTypeTokens [$CustomItemTokenIndex] ['title'];
                    $CartTypeValue = $CartTypeTokens [$CustomItemTokenIndex] ['token'];
                    $CartUnitPrice = $CustomLargeQuiltedWalletPrice; 
                }
                else
                {
                    $CartTypeTitle = $EmptyItem;
                    $CartTypeValue = $EmptyLine;
                    $CartUnitPrice = $EmptyItem;
                }
                break;   
                
            case $UnknownItemToken:
                $CartSizeTitle = $EmptyItem;
                $CartSizeValue = $EmptyItem;
                
                if ($LineItems[$CartTypeIndex] == $standardType)
                {
                    $CartTypeTitle = $CartTypeTokens [$StandardItemTokenIndex] ['title'];
                    $CartTypeValue = $CartTypeTokens [$StandardItemTokenIndex] ['token'];
                    $CartUnitPrice = $LargeQuiltedWalletPrice;
                }
                else if ($LineItems[$CartTypeIndex] == $customType)
                {
                    $CartTypeTitle = $CartTypeTokens [$CustomItemTokenIndex] ['title'];
                    $CartTypeValue = $CartTypeTokens [$CustomItemTokenIndex] ['token'];
                    $CartUnitPrice = $CustomLargeQuiltedWalletPrice;
                }
                else
                {
                    $CartTypeTitle = $EmptyItem;
                    $CartTypeValue = $EmptyLine;
                    $CartUnitPrice = $EmptyItem;
                }
                break;  
        }  // end of switch
        
        
        $CartUnitTotalPrice = $CartUnitPrice * $CartQty;
        
        $CartTotalQty += $CartQty; 
       
        $CartGrandTotalPrice += $CartUnitTotalPrice;
        
        $DisplayTable .= "
            <tr>
                <td align=center height=15 class=$elementClass>$CartTypeTitle</td>
                <td align=center height=15 class=$elementClass>$CartSizeTitle</td>
                <td align=center height=15 class=$elementClass>$CartFabricTitle</td>
                <td align=center height=15 class=$elementClass>$CartQty</td>
                <td align=center height=15 class=$elementClass>".sprintf("%01.2f", $CartUnitPrice)."</td>
                <td height=15 align=right class=$elementClass>".sprintf("%01.2f", $CartUnitTotalPrice)."</td>
            </tr>  
        ";
        
        //
        // for print lines
        //
        $printLog[$p][$CartTypeIndex] = $CartTypeTitle;
        $printLog[$p][$CartSizeIndex] = $CartSizeTitle;
        $printLog[$p][$CartFabricIndex] = $CartFabricTitle;
        $printLog[$p][$CartQtyIndex] = $CartQty;
        $printLog[$p][$CartUnitPriceIndex] = $CartUnitPrice; 
        $printLog[$p][$CartUnitTotalPriceIndex] = $CartUnitTotalPrice;
    } // end of for

} // end of if
else
{
    $i = 1;
}

//
// I want max lines regardless
//

$CartQty = 0;
$CartUnitPrice = 0;
$CartUnitTotalPrice = 0;

//;
// Build end of table
//
$CartShipHandle = $CartTotalQty * $ShipHandleAmount;
$CartTotalPrice = $CartGrandTotalPrice + $CartShipHandle;

$Msg = "---Sale for Mad Moose Creations Start\n";
$Msg .= "===Address Information\n";
$Msg .= "       Name: $name\n";
$Msg .= "    Address: $address\n";
$Msg .= "       City: $city\n";
$Msg .= "      State: $state\n";
$Msg .= "   Zip code: $zipcode\n";
$Msg .= "  Phone Nbr: $phonenumber\n";
$Msg .= "      eMail: $email\n";
$Msg .= "===Invoice Information\n";
$itemNbr = count($printLog);
for ($i = 0; $i < $itemNbr; $i++)
{
    $item = $printLog[$i][$CartTypeIndex];
    $Msg .= "       Type: $item\n";
    
    $item = $printLog[$i][$CartSizeIndex];
    $Msg .= "       Size: $item\n";
    
    $item = $printLog[$i][$CartFabricIndex];
    $Msg .= "     Fabric: $item\n";
    
    $item = $printLog[$i][$CartUnitPriceIndex];
    $Msg .= " Item Price: ".sprintf("%01.2f", $item)."\n";
    
    $item = $printLog[$i][$CartQtyIndex];
    $Msg .= "   Quantity: $item\n";
    
    $item = $printLog[$i][$CartUnitTotalPriceIndex];
    $Msg .= " Line Total: ".sprintf("%01.2f", $item)."\n";
}  // end of for 
$Msg .= "        Total Order: ".sprintf("%01.2f", $CartGrandTotalPrice)."\n";
$Msg .= "Shipping and Handle: ".sprintf("%01.2f", $CartShipHandle)."\n";
$Msg .= "        Grand Total: ".sprintf("%01.2f", $CartTotalPrice)."\n";
$Msg .= "   Total Line Items: $itemNbr\n";
$Msg .= "---Sale for Mad Moose Creations End\n";

$to = "tarrant.cutler@gmail.com";
$subject = "MadMoose Creations Purchase"; 
$eMail ['fromName'] = $name;
$eMail ['fromAddr'] = $email;
$eMail ['toAddr'] = $to;
$eMail ['subject'] = $subject;
$eMail ['body'] = $Msg;

$rcode = sendEmail($eMail); 

//ini_set("SMTP","outgoing.verizon.net" );
//ini_set('sendmail_from', 'tarrant.cutler@gmail.com');
//ini_set(smtp_port,"25");


$Msg .= "Mail retrncode = ".$rcode."\n";
salesLog($Msg);

//
// Now destroy session which should purge cookies
//
session_destroy();

?>

<html>
<head>
<title>MadMoose Creations ajax Form</title>

</body>
</html>		
