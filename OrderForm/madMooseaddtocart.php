<?php

//----------------------------------------------------------------------------------------------------------
// Get and set selection
//----------------------------------------------------------------------------------------------------------
if (isset($_GET[cartfunction]) && ($_GET[cartfunction] != "") )
{
	$cartfunction = $_GET[cartfunction];
}
else
{
	$cartfunction = "";
}	

if (isset($_GET[from]) && ($_GET[from] != "") )
{
	$from = $_GET[from];
    $AddFrom = 1;
}
else
{
	$from = "";
    $AddFrom = 0;
}	


//
// Add to Cart
//
$dispKey = $NavArray [$FabricColorChartI] ['key'];

$DisplayTextMsg ="<p id=msg> Fill out form on right. You can add items by going to product page. You can only have 10 line items. ";
$DisplayTextMsg .= "Once you are finished go to the checkout page.</p> <p id=msg>We do not process credit cards which keep our costs down (yours too!).<p> ";
$DisplayTextMsg .= "<p id=msg>As a result, our checkout page will ask you to fill out name and address information after which we will present";
$DisplayTextMsg .= " you with an invoice you must print out and send to us.<p>";

$DisplayTextMsg .= "<br><a href=\"index.html?selectID=$dispKey\" onmouseover=\"Tip('<center> <img src=".$productDir."images/madMooseSamples.bmp width=500> <br>')\" 
                        onmouseout=\"UnTip()\">
                        <img  height=73 width=178 align=\"center\" border=0 src=".$productDir."images/madMooseSamples.bmp></a>";
$DisplayTextErr = "<p id=err></p>";

if ($cartfunction == "Add")
{
    //
    // Get cart data array for table and check for too many items
    //
    $itemNbr = cartItems();
    
    if ($AddFrom == 1)
    {
        if ($itemNbr > ($MaxLines - 1))
        {
            $DisplayTextErr="<p id=err>You can not create more then $MaxLines line items.</p>";
            $cartfunction = "";
            $from = "";
        }
        else
        {
            $rcode = addToCartfromButton($from);
        }
    }
    else
    {
        $rcode = addToCartfromButton($from);
    }
} // end of if
else if ($cartfunction == "EmptyCart")
{
    emptyCart();
}

// debug sample data
/*
$_SESSION['Cart']="#SL11";
$_SESSION['Cart'].="#SM21";
$_SESSION['Cart'].="#SS31";
$_SESSION['Cart'].="#SL41";
$_SESSION['Cart'].="#SM51";
$_SESSION['Cart'].="#SS61";
$_SESSION['Cart'].="#SL71";
$_SESSION['Cart'].="#SM81";
$_SESSION['Cart'].="#SS01";
$_SESSION['Cart'].="#SS35";
$_SESSION['Cart'].="#CL?1";
*/

//
//printCart();
//$CartItems = getCartItems();
//    $LineItemsArray = explode($FST, $CartItems);
//print_r($LineItemsArray);
//exit();

//
// Set class for table items
//
$elementClass = "regTextmedium";
$elementTitleClass = "regTextmediumBold";

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
    for ($i = 1; $i < $ItemCount; $i++)
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
            $CartQty = $EmptyItem;
        else
            $CartQty = $LineItems[$CartQtyIndex];
        
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
                <td align=center height=15 class=$elementClass>
                   ";
                   
        $DisplayTable .= "        
                      <select name=\"CartType$i\" height=15 class=$elementClass>\n
                      ";
                    
        $DisplayTable .= "<option size=$CartTypeSz value=\"$CartTypeValue\">$CartTypeTitle</option>\n";
          
                         
                    for ($w = 0; $w < count($CartTypeTokens); $w++)
                    {
                        $DisplayType = $CartTypeTokens [$w] ['title'];
                        $DisplayTypeValue = $CartTypeTokens [$w] ['token'];
                        $DisplayTable .= "<option size=$CartTypeSz value=\"$DisplayTypeValue\">$DisplayType</option>\n";
                        
                    }  // end of for
                        
        $DisplayTable .= "
                        </select>
                </td>
                <td align=center height=15 class=$elementClass>
                      ";
                   
        $DisplayTable .= "        
                      <select name=\"CartSize$i\" height=15 class=$elementClass>\n
                      ";
                      
        $DisplayTable .= "<option size=$CartTypeSz value=\"$CartSizeValue\">$CartSizeTitle</option>\n";
        
                    for ($w = 0; $w < count($CartSizeTokens); $w++)
                    {
                        $DisplaySize = $CartSizeTokens [$w] ['title'];
                        $DisplaySizeValue = $CartSizeTokens [$w] ['token'];
                        $DisplayTable .= "<option size=$CartSizeSz value=\"$DisplaySizeValue\">$DisplaySize</option>\n";
                        
                    }  // end of for
                        
        $DisplayTable .= "
                        </select>
                </td>
                <td align=center height=15 class=$elementClass>
                    <select name=\"CartFabric$i\" height=15 class=$elementClass>\n
                    ";
                    
        $DisplayTable .= "<option size=$CartTypeSz value=\"$CartFabricValue\">$CartFabricTitle</option>\n";
     
                    for ($w = 0; $w < count($FabricColorChartTokens); $w++)
                    {
                        $DisplayFabric = $FabricColorChartTokens [$w] ['title'];
                        $DisplayFabricValue = $FabricColorChartTokens [$w] ['token'];
                        $DisplayTable .= "<option size=$CartFabricSz value=\"$DisplayFabricValue\">$DisplayFabric</option>\n";
                        
                    }  // end of for
                        
        $DisplayTable .= "
                        </select>
                </td>
                <td align=center height=15 class=$elementClass>
                    <input  size=$CartQtySz type=\"text\" name=\"CartQty$i\" height=15 class=$elementClass value=\"$CartQty\">            
                </td>
                 <td align=center height=15 class=$elementClass>
                    ".sprintf("%01.2f", $CartUnitPrice)."
                </td>
                <td height=15 align=right class=$elementClass>
                    ".sprintf("%01.2f", $CartUnitTotalPrice)."
                </td>
            </tr>  
        ";
        
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

while ($i <= $MaxLines)
{
    $DisplayTable .= "
              <tr>
            <td align=center height=15 class=$elementClass>
               ";
               
     $DisplayTable .= "        
                  <select name=\"CartType$i\" height=15 class=$elementClass>\n
                  ";
                 
                $DisplayTable .= "<option size=$CartTypeSz value=\"\">$Spacer</option>\n";
                
                for ($w = 0; $w < count($CartTypeTokens); $w++)
                {
                    $DisplayType = $CartTypeTokens [$w] ['title'];
                    $DisplayTypeValue = $CartTypeTokens [$w] ['token'];
                    $DisplayTable .= "<option size=$CartTypeSz value=\"$DisplayTypeValue\">$DisplayType</option>\n";
                    
                }  // end of for
                    
    $DisplayTable .= "
                    </select>
            </td>
            <td align=center height=15 class=$elementClass>
                  ";
               
     $DisplayTable .= "        
                  <select name=\"CartSize$i\" height=15 class=$elementClass>\n
                  ";
                  
                $DisplayTable .= "<option size=$CartSizeSz value=\"\">$Spacer</option>\n";
               
                for ($w = 0; $w < count($CartSizeTokens); $w++)
                {
                    $DisplaySize = $CartSizeTokens [$w] ['title'];
                    $DisplaySizeValue = $CartSizeTokens [$w] ['token'];
                    $DisplayTable .= "<option size=$CartSizeSz value=\"$DisplaySizeValue\">$DisplaySize</option>\n";
                    
                }  // end of for
                    
    $DisplayTable .= "
                    </select>
            </td>
            <td align=center height=15 class=$elementClass>
                <select name=\"CartFabric$i\" height=15 class=$elementClass>\n
                ";
                
                $DisplayTable .= "<option size=$CartFabricSz value=\"\">$Spacer</option>\n";
                
                for ($w = 0; $w < count($FabricColorChartTokens); $w++)
                {
                    $DisplayFabric = $FabricColorChartTokens [$w] ['title'];
                    $DisplayFabricValue = $FabricColorChartTokens [$w] ['token'];
                    $DisplayTable .= "<option size=$CartFabricSz value=\"$DisplayFabricValue\">$DisplayFabric</option>\n";
                    
                }  // end of for
                    
    $DisplayTable .= "
                    </select>
            </td>
            <td align=center height=15 class=$elementClass>
                <input  size=$CartQtySz type=\"text\" name=\"CartQty$i\" height=15 class=$elementClass value=\"$CartQty\">            
            </td>
             <td align=center height=15 class=$elementClass>
                ".sprintf("%01.2f", $CartUnitPrice)."
            </td>
            <td height=15 align=right class=$elementClass>
                ".sprintf("%01.2f", $CartUnitTotalPrice)."
            </td>
        </tr>  
  
    ";
    
    $i++;
} // end of while

//;
// Build end of table
//
$CartShipHandle = $CartTotalQty * $ShipHandleAmount;
$CartTotalPrice = $CartGrandTotalPrice + $CartShipHandle;
$DisplayTable .= "
        <tr>
            <td align=center height=15 class=$elementClass>
                $Spacers
            </td>
            <td align=center height=15 class=$elementClass>
                $Spacers
            </td>
            <td align=center height=15 class=$elementClass>
                $Spacers
            </td>
            <td align=right height=15 class=$elementClass colspan=2>
                Sub Total
            </td>
            <td align=right height=15 class=$elementClass>
                ".sprintf("%01.2f", $CartGrandTotalPrice)."
            </td>
        </tr>
        
        <tr>
            <td align=center height=15 class=$elementClass>
                $Spacers
            </td>
            <td align=right height=15 class=$elementClass colspan=4>
                Shipping and Handling
            </td>
            <td align=right height=15 class=$elementClass>
                ".sprintf("%01.2f", $CartShipHandle)."
            </td>
        </tr>
        
        <tr>
            <td align=center height=15 class=$elementClass>
                $Spacers
            </td>
            <td align=center height=15 class=$elementClass>
                $Spacers
            </td>
            <td align=center height=15 class=$elementClass>
                $Spacers
            </td>
            <td align=right height=15 class=$elementClass colspan=2>
                Grand Total
            </td>
            <td align=right height=15 class=$elementClass>
                ".sprintf("%01.2f", $CartTotalPrice)."
            </td>
        </tr>
    ";
?>



<div class="madMooseItemText">
<br>
 <?php print $DisplayTextMsg; ?>
 
 <br><br>

 <?php print $DisplayTextErr; ?>

</div>

<form method="POST" name="checkout" action="<?php print $productDir; ?>madMooseeditCart.php" target="_parent">

<div class="madMooseItemList">
<br><br>
 <table align=right width="100%">
        <tr>
            <td align=center height=15 class="<? print $elementTitleClass; ?>">
                Type
            </td>
            <td align=center height=15 class="<? print $elementTitleClass; ?>">
                Style
            </td>
            <td align=center height=25 class="<? print $elementTitleClass; ?>">
                Fabric
            </td>
            <td align=center height=15 class="<? print $elementTitleClass; ?>">
                Qty
            </td>
            <td align=center height=15 class="<? print $elementTitleClass; ?>">
                Unit Price
            </td>
            <td align=right height=15 class="<? print $elementTitleClass; ?>">
                Total<BR>Price
            </td>
        </tr>  
       
    <?php print $DisplayTable; ?>

</table>
</div>

<div class="madMooseItemListBottom">
 <table width="90%">
        <tr>
            <td width="25%" height=21 valign=middle align=right><input type=submit value="Recalculate" name="Action"></td>
            <td width="5%">&nbsp;</td>
            <td width="25%" height=21 valign=middle align=left><input type=submit value="EmptyCart" name="Action"></td>
            <td width="5%">&nbsp;</td>
            <td width="35%" height=21 valign=middle align=right><input type=submit value="CheckOut" name="Action"></td>
            <td width="5%">&nbsp;</td>
        </tr>  
</table>
</div>
<input type="hidden" name="CartItemTotal" value="<? print $ControlImageWidth; ?>">	
</form>
