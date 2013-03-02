<?php

//----------------------------------------------------------------------------------------------------------
// Get and set selection
//----------------------------------------------------------------------------------------------------------

//
// Set class for table items
//
$elementClass = "regTextsmall";
$elementTitleClassHdr = "regTextmediumBoldRed";
$elementTitleClass = "regTextmediumBold";

$DisplayAddressData ="
                    <tr>
                        <td align=center height=15 class=$elementTitleClassHdr colspan=2>
                            Address Information      
                        </td>
                    </tr>
                    <tr>
                        <td align=center height=15 class=$elementTitleClassHdr colspan=2>
                            $Spacer      
                        </td>
                    </tr>
                    <tr>
                        <td align=right height=15 class=$elementClass>
                            Name:            
                        </td>
                       
                        <td align=left height=15 class=$elementClass>
                            <input  size=$CartNameSz maxlength=$CaretMaxNameSz type=\"text\" name=\"name\" height=15 class=$elementClass value=\"\">            
                        </td>
                    </tr>  
                    <tr>
                        <td align=right height=15 class=$elementClass>
                            Address:            
                        </td>
                        
                        <td align=left height=15 class=$elementClass>
                            <input  size=$CartAddressSz maxlength=$CaretMaxAddressSz type=\"text\" name=\"address\" height=15 class=$elementClass value=\"\">            
                        </td>
                    </tr>
                    <tr>
                        <td align=right height=15 class=$elementClass>
                            City:            
                        </td>
                        
                        <td align=left height=15 class=$elementClass>
                            <input  size=$CartCitySz maxlength=$CaretMaxCitySz type=\"text\" name=\"city\" height=15 class=$elementClass value=\"\">            
                        </td>
                    </tr>
                    <tr>
                        <td align=right height=15 class=$elementClass>
                            State:            
                        </td>
                        
                        <td align=left height=15 class=$elementClass>
                            <input  size=$CartStateSz maxlength=$CaretMaxStateSz type=\"text\" name=\"state\" height=15 class=$elementClass value=\"\">            
                        </td>
                    </tr>
                    <tr>
                        <td align=right height=15 class=$elementClass>
                            Zip Code:            
                        </td>
                        
                        <td align=left height=15 class=$elementClass>
                            <input  size=$CartZipSz maxlength=$CaretMaxZipSz type=\"text\" name=\"zipcode\" height=15 class=$elementClass value=\"\">            
                        </td>
                    </tr>
                    <tr>
                        <td align=right height=15 class=$elementClass>
                            Phone Nbr:            
                        </td>
                        
                        <td align=left height=15 class=$elementClass>
                            <input  size=$CartPhoneNbrSz maxlength=$CaretMaxPhoneNbrSz type=\"text\" name=\"phonenumber\" height=15 class=$elementClass value=\"\">            
                        </td>
                    </tr>
                    <tr>
                        <td align=right height=15 class=$elementClass>
                            eMail:            
                        </td>
                        
                        <td align=left height=15 class=$elementClass>
                            <input size=$CartEmailAddrSz maxlength=$CaretMaxEmailAddrSz type=\"text\" name=\"email\" height=15 class=$elementClass value=\"\">            
                        </td>
                    </tr>
                  ";

                  
$MailToMadMoose ="
                    <tr>
                        <td align=center height=15 class=$elementTitleClass colspan=2>
                            $Spacer       
                        </td>
                    </tr>
                    <tr>
                        <td align=center height=15 class=$elementTitleClass colspan=2>
                            $Spacer      
                        </td>
                    </tr>
                    <tr>
                        <td align=center height=15 class=$elementTitleClass colspan=2>
                            $Spacer       
                        </td>
                    </tr>
                    <tr>
                        <td align=center height=15 class=$elementTitleClass colspan=2>
                            $Spacer      
                        </td>
                    </tr>
                    <tr>
                        <td align=center height=15 class=$elementTitleClassHdr colspan=2>
                            Mail To      
                        </td>
                    </tr>
                    <tr>
                        <td align=center height=15 class=$elementTitleClass colspan=2>
                            $Spacer      
                        </td>
                    </tr>
                    <tr>
                        <td align=left height=15 class=$elementTitleClass colspan=2>
                              $madMooseMailAddress  
                        </td>
                    </tr>
                  ";

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
                <td align=center height=15 class=$elementClass>$CartTypeTitle</td>
                <td align=center height=15 class=$elementClass>$CartSizeTitle</td>
                <td align=center height=15 class=$elementClass>$CartFabricTitle</td>
                <td align=center height=15 class=$elementClass>$CartQty</td>
                <td align=center height=15 class=$elementClass>".sprintf("%01.2f", $CartUnitPrice)."</td>
                <td height=15 align=right class=$elementClass>".sprintf("%01.2f", $CartUnitTotalPrice)."</td>
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


<form method="POST" name="printForm">

<div class="madMooseItemText">
<br><br>
<table align=left width="100%">
<?php print $DisplayAddressData; ?>

<?php print $MailToMadMoose; ?>
</table>
</div>

<div class="madMooseItemList">
<br><br>
 <table align=right width="100%">
        <tr>
            <td align=center height=15 class="<? print $elementTitleClassHdr; ?>" colspan=5>
                Invoice Details            
            </td>
        </tr>
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
            <td  height=21 valign=middle align=left><input type=button OnClick="printDoc()" value="PrintForm" name="Action"></td>
            <td width="5%">&nbsp;</td>
        </tr>  
</table>
</div>
<input type="hidden" name="CartItemTotal" value="<? print $ControlImageWidth; ?>">	
</form>
