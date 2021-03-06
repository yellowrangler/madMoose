<?php

//require_once "Mail.php";

//----------------------------------------------------------------------------------------------------------
// send emanl
// pass in array with mail elements. Returns boolean status
//----------------------------------------------------------------------------------------------------------
function sendEmail($eMil)
{
    $fromName = $eMail ['fromName'];
    $fromAddr = $eMail ['fromAddr'];
    $toAddr = $eMail ['toAddr'];
    $subject = $eMail ['subject']; 
    $body = $eMail ['body'];
    
    $header = "From: ". $fromName . " <" . $fromAddr . ">\n"; 

    $rcode = mail($toEmail, $subject, $body, $header); 
    
    return($rcode);
    
} // end of sendEmail func

//----------------------------------------------------------------------------------------------------------
// Log all Sales funtion
// Log every time enter print form
//----------------------------------------------------------------------------------------------------------
function salesLog($msg)
{
	
	$time = time();
	$strDateTime = date("Y-m-d H:i:s", $time);
	$logname="logs/sales.log";
   
  $fp = fopen($logname, "a"); 

	$logmsg = "$strDateTime\n";
  $logmsg .= "$msg\n";
  $logmsg .= "$strDateTime\n";
	fwrite($fp, $logmsg);
	fclose($fp);
	
} // end of salesLog func

//----------------------------------------------------------------------------------------------------------
// Function to print Shopping Cart
// Pass in nothing.
//----------------------------------------------------------------------------------------------------------
function printCart() 
{
    $printCart = $_SESSION['Cart'];
    
    print_r($printCart);
    
} // end of printCart

//----------------------------------------------------------------------------------------------------------
// Function to Add Item to Shopping Cart
// Pass in Array of items. A ? means no data.
//----------------------------------------------------------------------------------------------------------
function addToCartfromButton($shoppingItem) 
{
    global $StartItemToken;
    global $NavArray;
    global $LargeQuiltedWalletsI;
    global $MediumQuiltedWalletsI;
    global $SmallQuiltedWalletsI;
    global $CustomQuiltedWalletsI;
    global $FST;
    global $UnknownItemToken;
    global $CartTypeTokens;
    global $CartSizeTokens;
    global $LargeItemTokenIndex;
    global $MediumItemTokenIndex;
    global $SmallItemTokenIndex;
    global $StandardItemTokenIndex;
    global $CustomItemTokenIndex;
    global $CartTypeIndex;
    global $CartSizeIndex;
    global $CartFabricIndex;
    global $CartQtyIndex;

    
    $sKey = $NavArray [$SmallQuiltedWalletsI] ['key'];
    $mKey = $NavArray [$MediumQuiltedWalletsI] ['key'];
    $lKey = $NavArray [$LargeQuiltedWalletsI] ['key'];
    switch ($shoppingItem)
    {
        case $sKey:
            $SizeItem = $CartSizeTokens [$SmallItemTokenIndex] ['token'];
            $TypeItem = $CartTypeTokens [$StandardItemTokenIndex] ['token'];
            $FabricItem = $UnknownItemToken;
            $QtyItem = 1; 
            break;
            
        case $mKey:
            $SizeItem = $CartSizeTokens [$MediumItemTokenIndex] ['token'];
            $TypeItem = $CartTypeTokens [$StandardItemTokenIndex] ['token'];
            $FabricItem = $UnknownItemToken;
            $QtyItem = 1; 
            break;
            
        case $lKey:
            $SizeItem = $CartSizeTokens [$LargeItemTokenIndex] ['token'];
            $TypeItem = $CartTypeTokens [$StandardItemTokenIndex] ['token'];
            $FabricItem = $UnknownItemToken;
            $QtyItem = 1; 
            break;   
            
          default:
            $SizeItem = $UnknownItemToken;
            $TypeItem = $CartTypeTokens [$CustomItemTokenIndex] ['token'];
            $FabricItem = $UnknownItemToken;
            $QtyItem = 1; 
            break;  
    } //end of switch
        
    $CartArray[$CartTypeIndex] = $TypeItem;
    $CartArray[$CartSizeIndex] = $SizeItem;
    $CartArray[$CartFabricIndex] = $FabricItem;
    $CartArray[$CartQtyIndex] = $QtyItem;
    
    addToCart($CartArray);
  
    return(0);
    
} // end of addToCartfromButton

//----------------------------------------------------------------------------------------------------------
// Function to Add Item to Shopping Cart
// Pass in Array of items. A ? means no data.
//----------------------------------------------------------------------------------------------------------
function addToCart($CartArray) 
{
    global $StartItemToken;
    global $FST;
    global $CartTypeIndex;
    global $CartSizeIndex;
    global $CartFabricIndex;
    global $CartQtyIndex;
    
    
    $TypeItem = $CartArray[$CartTypeIndex];
    $SizeItem = $CartArray[$CartSizeIndex];
    $FabricItem = $CartArray[$CartFabricIndex];
    $QtyItem = $CartArray[$CartQtyIndex];
    
    $CartItem = $StartItemToken.$TypeItem.$FST.$SizeItem.$FST.$FabricItem.$FST.$QtyItem; 
    
    addToPhysicalCart($CartItem);
   
    return(0);
    
} // end of addToCart

//----------------------------------------------------------------------------------------------------------
// Function to Add Item to Session cookie
// Pass in items to add to cookie. Always returns 0.
//----------------------------------------------------------------------------------------------------------
function addToPhysicalCart($shoppingItem) 
{
  
    $CartEmpty = isShopingCartEmpty();
    if ($CartEmpty)
    {
        $_SESSION['Cart'] = $shoppingItem;
        $_SESSION['Items'] = 1;
    }
    else
    {
        $_SESSION['Cart'] .= $shoppingItem;
        $_SESSION['Items'] += 1;
    }
    
    return(0);
    
} // end of addToPhysicalCart

//----------------------------------------------------------------------------------------------------------
// Function to return items in cart
// Pass in nothing. returne items.
//----------------------------------------------------------------------------------------------------------
function cartItems() 
{
  
    $items = $_SESSION['Items'];
        
    return($items);
    
} // end of cartItems

//----------------------------------------------------------------------------------------------------------
// Function to return cart information from session cookie
// Pass in nothing. Returns array of data from session cookie.
//----------------------------------------------------------------------------------------------------------
function getCartItems() 
{
  
    $CartEmpty = isShopingCartEmpty();
    if ($CartEmpty)
    {
        $returnInfo = "";
    }
    else
    {
        $returnInfo = $_SESSION['Cart'];
    }
    
    return($returnInfo);
    
} // end of getCartItems

//----------------------------------------------------------------------------------------------------------
// Function to empty the shopping cart
// Pass in nothing. Returns nothing
//----------------------------------------------------------------------------------------------------------
function emptyCart() 
{
  
    $_SESSION['Cart'] = NULL;
    $_SESSION['Items'] = 0;
        
    return;
    
} // end of emptyCart


//----------------------------------------------------------------------------------------------------------
// Function to determine Shopping Cart status
// Pass in nothing. Returns (at this time) A if active, E if empty.
//----------------------------------------------------------------------------------------------------------
function getShopingCartStatus()
{
     
    if (isset($_SESSION['Cart']) )
    {
        if ($_SESSION['Cart'] != NULL)
        {
            $CartStatus = 'A';
        }
        else
        {
            $CartStatus = 'E';
        }
    }
    else
        $CartStatus = 'E';
    
    return($CartStatus);
    
} // end of getShopingCartStatus

//----------------------------------------------------------------------------------------------------------
// Function to determine if Shopping Cart is empty
// Pass in nothing. Returns 1 if empty 0 if not.
//----------------------------------------------------------------------------------------------------------
function isShopingCartEmpty()
{
    
    
    $CartStatus = getShopingCartStatus();
    switch($CartStatus)
    {
        case 'E':
            $returnStatus = 1;
            break;
            
        case 'A':
            $returnStatus = 0;
            break;
            
        default:
            $returnStatus = 0;
    }
    
    return($returnStatus);
    
} // end of isShopingCartEmpty


//----------------------------------------------------------------------------------------------------------
// Function to get NavArray instance based on keyword
// Pass in KEYname to parse.  This runs through array and then and returns instance (selectID 
//----------------------------------------------------------------------------------------------------------
function getNavArrayInstance($selectID) 
{
    global $NavArray;
   
     
    $c = count($NavArray);
	for($i = 1; $i < $c; $i++)
    {
      //      echo " level 1 i = $i <br>";  
      //  echo " level 1 key = ".$KEYname[$i][0][0][0]." count = ".count($KEYname[$i])." <br>";  
        if ($NavArray[$i]['key'] == $selectID)
        {
            return($i);
        }
    }
	
    return(0);
    
} // end of getNavArrayInstance

//----------------------------------------------------------------------------------------------------------
// Function to get MainNavInstance instance based on keyword
// We have item which has been selected - now we need to know what Main Nav item must be seleted too.
// Pass in KEYname to parse.  This runs through array and then and returns instance (selectID 
//----------------------------------------------------------------------------------------------------------
function getMainNavInstance($selectID) 
{
    global $NavArray;
    
    
    //
	// Get instance and see if have parent
	//
    $instance = getNavArrayInstance($selectID);
    
    //
    // Run through hierarchy
    // This could be done another way - look for type = M.  I like this way better for now
    //
    while ($NavArray[$instance] ['parent'] != 'None')
    {
        $instance = getNavArrayInstance($NavArray[$instance] ['parent']);
    }
    
    return($instance);
    
} // end of getMainNavInstance

//----------------------------------------------------------------------------------------------------------
// Function to return html for top tabs
// Pass in selct values to parse.  This builds html and returns string. 
//----------------------------------------------------------------------------------------------------------
function GetMainNav($selectID) 
{
	global $NavArray;
	global $MainNavTabUpperWidth;
    global $ToolTips;
	
	
    //
	// Get instance and see if have parent
	//
    $instance = getNavArrayInstance($selectID);
    
    //
	// Get main nav instance that must be selected
	//
    $MainNavSelectinstance = getMainNavInstance($selectID);
	//
	// First build the upper part of the Nav.  
	//
    $result = "<table class=\"MainNavTabsUpper\" >
		<tr>";

    $c = count($NavArray);
    for ($i = 0; $i < $c; $i++)
	{	
		switch ($NavArray[$i] ['type'])
		{
			case 'M':
				$DisplayToolTips = "";
                if ($ToolTips == "on")
                {
                    $DisplayToolTips = "onmouseover=\"Tip('".$NavArray[$i] ['tooltip']."')\" onmouseout=\"UnTip()\"";
                }
                
                //
                // ok we are at main nav seleted
                //
                if ($MainNavSelectinstance == $i)
                {
                    $result .=
                    "
                    <td width=".$MainNavTabUpperWidth." class=\"MainNavTabsUpperCellSelect\"> 
                        <a href=\"index.php?selectID=".$NavArray [$i] ['key']."\" $DisplayToolTips class=\"MainNavTabsUpperCellSelect\">".$NavArray[$i] ['title']."</a>
                    </td>
                    
                    ";		
                }
                else
                {
                    $result .=
                    "
                    <td width=".$MainNavTabUpperWidth." class=\"MainNavTabsUpperCell\"> 
                        <a href=\"index.php?selectID=".$NavArray [$i] ['key']."\"  $DisplayToolTips class=\"MainNavTabsUpperCell\">".$NavArray[$i] ['title']."</a>
                    </td>
                    
                    ";	
                }	
				break;
				
			case 'S':
				break;	
		
		} // end oi switch		
				
	} // end of for
    
    //
    // add end of table
    //
	$result .= "<td >&nbsp;</td>
			</tr>
	</table>
	";
	
	//
	// Second build the lower part of the Nav
	//
	$result .= "	
	<table class=\"MainNavLower\" cellspacing=0 cellpadding=0>
		<tr>
			<td width=\"100%\"> 
				&nbsp;
			</td>
		</tr>	
	</table>
	";
	
	return $result;
	
} // end of GetMainNav

//----------------------------------------------------------------------------------------------------------
// Function to return html for left nav
// Pass in selct values to parse.  This builds html and returns string. BIGGY
//----------------------------------------------------------------------------------------------------------
function GetLeftNav($selectID) 
{
	global $NavArray;
	global $LeftNavMenuWidth;
	global $LeftNavMenuCellBackgroundColor;
	global $LeftNavMenuCellSelectBackgroundColor;
    global $productDir;
    global $ToolTips;
	
	
    //
	// Get instance and see if have parent
	//
    $instance = getNavArrayInstance($selectID);
    
    //
    // see if we are end of selection or have more
    //
    
    if ($NavArray[$instance] ['child'] != 'None')
    {
        $selectLeftNav = 0;
        $Parentkey = $NavArray[$instance] ['key'];   
    }
    else
    {
        $selectLeftNav = 1;
        $selectLeftNavInstance = $instance;
        $Parentkey = $NavArray[$instance] ['parent'];
    }
    $ParentInstance = getNavArrayInstance($Parentkey);
        
    //
    // start building our left nav
    //
    $result = "
                <ul id=\"LeftNav-side-nav\">
                ";

    //
    // loop thru elements
    //
    $c = count($NavArray);
    for ($i = 0; $i < $c; $i++)
	{	
        if ($ParentInstance == $i)
        {
                $result .=
                "
                <li><strong>
                    &nbsp;".$NavArray[$i]['title']."
                </strong></li>
                ";		  
        }
        else if ($NavArray[$i] ['parent'] == $Parentkey)
        {
                        //
            // Tool tips and images
            //
            $DisplayToolTips = "";
            if ($ToolTips == "on")
            { 
                $tipimg = $NavArray[$i] ['floatimg'];
                if ($NavArray[$i]['floatimg'] == 'None')
                {
                    $tip = $NavArray[$i] ['tooltip'];
                    $DisplayToolTips = "onmouseover=\"Tip('$tip')\" onmouseout=\"UnTip()\"";
                }
                else
                {
                    $tip = $NavArray[$i] ['title'];
                    $DisplayToolTips = "onmouseover=\"Tip('$tip  <br><hr><center> <img src=".$productDir."images/$tipimg width=60> <br><br>')\" onmouseout=\"UnTip()\"";
                }
            }
                
            //
            // if selected index is also select list index (ir = 0) we do not want to select. 
            // So we build top name and only react to selected ind if > 0.
            //
            if ( ($selectLeftNavInstance == $i) && ($selectLeftNav == 1) )
            {
                $result .=
                "
                <li><strong>
                    <a href=\"index.php?selectID=".$NavArray[$i]['key']."\" $DisplayToolTips  >".$NavArray[$i]['title']."</a>
                </strong></li>
                ";		
            }
            else
            {
                $result .=
                "
                <li>
                    <a href=\"index.php?selectID=".$NavArray[$i]['key']."\" $DisplayToolTips >".$NavArray[$i]['title']."</a>
                </li>
                ";	
            }	
        }
				
	} // end of for

    $result .= "</ul>";
    
   	return $result;
	
} // end of GetLeftNav

//----------------------------------------------------------------------------------------------------------
// Function to return html for breadcrumb area
// Pass in selct values to parse.  This builds html and returns string. 
//----------------------------------------------------------------------------------------------------------
function GetBreadCrumbs($selectID)
{
	global $NavArray;
	
    $stackKey = array();
    
   
	//
    // build stack
    //
   
    $key = $selectID;
    $c = count($NavArray) - 1;
    $k = 0;
    for ($i = $c; $i >= 0; $i--)
    {
        if ($NavArray[$i] ['key'] == $key)
        {
            $stackKey[$k] = $key;
            $k++;
            
            $key = $NavArray[$i] ['parent'];
        }
    } // end of for;
    
    //
	// Now build the display variable
	//
	$DisplayBreadCrumbs = "
			<table>
				<tr>
				";
				
	while ($k = array_pop($stackKey))
	{
        if ($selectID == $k)
            continue;
        
        
        $i = getNavArrayInstance($k);
		$DisplayBreadCrumbs .= "
			<td class=\"breadCrumb\"> 
				<a href=\"index.php?selectID=".$k."\" class=\"breadCrumb\">
					".$NavArray[$i] ['title']."
				</a>
			</td>
			<td class=\"breadCrumb\">
				>
			</td>	
		";
	} // end of for 	
	
	$DisplayBreadCrumbs .= "
			</tr>
		</table>
		";
	
	//
	// Return the display string
	//
	return($DisplayBreadCrumbs);
	
} // end of GetBreadCrumbs	

//----------------------------------------------------------------------------------------------------------
// Function to return html for title banner area
// Pass in selct values to parse.  This builds html and returns string. 
//----------------------------------------------------------------------------------------------------------
function GetTitleBanner($selectID)
{
	global $NavArray;
		
	
	$instance = getNavArrayInstance($selectID);
 	
	//
	// Now build the display variable
	//
	$DisplayTitleBanner = "
			<table width=\"100%\" class=\"titleBorder\">
				<tr>
					<td> 
						".$NavArray [$instance] ['title']."
					</td>
				</tr>
			</table>
		";
		
	//
	// Return the display string
	//
	return($DisplayTitleBanner);
	
} // end of GetTitleBanner	

?>
