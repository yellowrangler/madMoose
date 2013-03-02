<?php

//----------------------------------------------------------------------------------------------------------
// Wallet prices
//----------------------------------------------------------------------------------------------------------
$LargeQuiltedWalletPrice = "24.95";
$MediumQuiltedWalletPrice = "20.95";
$SmallQuiltedWalletPrice = "15.95";

$CustomLargeQuiltedWalletPrice = "28.95";
$CustomMediumQuiltedWalletPrice = "24.95";
$CustomSmallQuiltedWalletPrice = "19.95";

$ShipHandleAmount = 1.50;

//----------------------------------------------------------------------------------------------------------
// For Shopping Cart
//----------------------------------------------------------------------------------------------------------
$CartTypeSz = 8;
$CartSizeSz = 6;
$CartFabricSz = 15;
$CartQtySz = 3;
$CartPriceSz = 7;
$CartTotalPriceSz = 8;

$CartNameSz = 20;
$CartAddressSz = 20;
$CartCitySz = 20;
$CartStateSz = 2;
$CartZipSz = 5;
$CartPhoneNbrSz = 12;
$CartEmailAddrSz = 20;

$CaretMaxNameSz = 25;
$CaretMaxAddressSz = 35;
$CaretMaxCitySz = 25;
$CaretMaxStateSz = 2;
$CaretMaxZipSz = 5;
$CaretMaxPhoneNbrSz = 12;
$CaretMaxEmailAddrSz = 32;

$madMooseMailAddress = "Mad Moose Creations<br>";
$madMooseMailAddress .= "236 North Peak Drive<br>";
$madMooseMailAddress .= "Easton, NH 03580";


$CartTypeIndex = 0;
$CartSizeIndex = 1;
$CartFabricIndex = 2;
$CartQtyIndex = 3;
// the following are for log printing only
$CartUnitPriceIndex = 4;
$CartUnitTotalPriceIndex = 5;

$FST = '%';
$StartItemToken = '#';
$UnknownItemToken = '?';
$EmptyItem = "";
$MaxLines = 10;

$CartCanHoldItems = 4;

$LargeItemTokenIndex = 0;
$MediumItemTokenIndex = 1;
$SmallItemTokenIndex = 2;

$StandardItemTokenIndex = 0;
$CustomItemTokenIndex = 1;

$CartSizeTokens [$LargeItemTokenIndex] ['title'] = 'Large';
$CartSizeTokens [$LargeItemTokenIndex] ['token'] = 'L';
$CartSizeTokens [$MediumItemTokenIndex] ['title'] = 'Medium';
$CartSizeTokens [$MediumItemTokenIndex] ['token'] = 'M';
$CartSizeTokens [$SmallItemTokenIndex] ['title'] = 'Small';
$CartSizeTokens [$SmallItemTokenIndex] ['token'] = 'S';

$CartTypeTokens [$StandardItemTokenIndex] ['title'] = 'Standard';
$CartTypeTokens [$StandardItemTokenIndex] ['token'] = 'S';
$CartTypeTokens [$CustomItemTokenIndex] ['title'] = 'Custom';
$CartTypeTokens [$CustomItemTokenIndex] ['token'] = 'C';

//----------------------------------------------------------------------------------------------------------
// Define constants
//----------------------------------------------------------------------------------------------------------
$EmptyTag = "No Tags"; 
$JustTag = "Tagged"; 
$AllTag = "All"; 

$ToolTips = "on"; 
//$ToolTips = "off";

//----------------------------------------------------------------------------------------------------------
// Define host
//----------------------------------------------------------------------------------------------------------
include ('madMoosesetHost.php');

//----------------------------------------------------------------------------------------------------------
// Define directories
//----------------------------------------------------------------------------------------------------------
$madMoosequalDir = "/var/www/html/";

//----------------------------------------------------------------------------------------------------------
// all content
//----------------------------------------------------------------------------------------------------------
$allcontentWidth = 951;

//----------------------------------------------------------------------------------------------------------
// Banner variables
//----------------------------------------------------------------------------------------------------------
$BannerHeight = 80;
$BannerWidth = 950;

$BannerTextHeight = $BannerHeight - 30; 
$BannerTextLeft = 550; 
$BannerTextWidth = $BannerWidth - $BannerTextLeft; 
$BannerBackgroundColor = "white";
// $BannerBackgroundColor = "#89b2b4";

//----------------------------------------------------------------------------------------------------------
// Main Nav variables
//----------------------------------------------------------------------------------------------------------
$MainNavTop = $BannerHeight + 2;
$MainNavHeight = 30;
$MainNavWidth = $BannerWidth;
$MainNavBackgroundColor = "white";

//
// Define upper tab variables
//
$MainNavTabUpperColor = "#a23636";
$MainNavTabUpperTextColor = "white";
$MainNavTabUpperTextHoverColor = "#b0a3a5";
$MainNavTabUpperCellSelectColor = "#c6d0d0";
$MainNavTabUpperCellSelectTextColor = "black";

$MainNavTabUpperHeight = 20;
$MainNavTabUpperWidth = 150;
$MainNavTabUpperGap = 1;

//
// Define lower tab variables
//
$ManinNavLowerHeight = 10;
$ManinNavLowerTop = $MainNavTabUpperHeight;

$ManinNavLowerColor = $MainNavTabUpperCellSelectColor;

//----------------------------------------------------------------------------------------------------------
// Define Menu Titles (All) and Actions
//----------------------------------------------------------------------------------------------------------
$MadMooseI = 0;
$WhoWeAreI = 1;
$ContactUsI = 2;
$ProductsI = 3;
$LargeQuiltedWalletsI = 4;
$MediumQuiltedWalletsI = 5;
$SmallQuiltedWalletsI = 6;
$CustomQuiltedWalletsI = 7;
$FabricColorChartI = 8;
$OrderFormI = 9;
$AddToCartI = 10;
$CheckOutI = 11;

$NavArray [$MadMooseI] ['type'] = 'M';
$NavArray [$MadMooseI] ['title'] = 'Mad Moose';
$NavArray [$MadMooseI] ['key'] = 'Home';
$NavArray [$MadMooseI] ['proddir'] = 'Home/';
$NavArray [$MadMooseI] ['tooltip'] = 'Mad Moose main link to home page.';
$NavArray [$MadMooseI] ['filename'] = 'Home';
$NavArray [$MadMooseI] ['floatimg'] = 'None';
$NavArray [$MadMooseI] ['parent'] = 'None';
$NavArray [$MadMooseI] ['child'] = 'WhoWeAre';
$NavArray [$MadMooseI] ['NextPeer'] = 'Products';
$NavArray [$MadMooseI] ['PrevPeer'] = 'None';
		
$NavArray [$WhoWeAreI] ['type'] = 'S';
$NavArray [$WhoWeAreI] ['title'] = 'Who we are';
$NavArray [$WhoWeAreI] ['key'] = 'WhoWeAre';
$NavArray [$WhoWeAreI] ['proddir'] = 'Home/';
$NavArray [$WhoWeAreI] ['tooltip'] = 'Information about Lisa';
$NavArray [$WhoWeAreI] ['filename'] = 'WhoWeAre';
$NavArray [$WhoWeAreI] ['floatimg'] = 'None';
$NavArray [$WhoWeAreI] ['parent'] = 'Home';
$NavArray [$WhoWeAreI] ['child'] = 'None';
$NavArray [$WhoWeAreI] ['NextPeer'] = 'ContactUs';
$NavArray [$WhoWeAreI] ['PrevPeer'] = 'None';
		
$NavArray [$ContactUsI] ['type'] = 'S';
$NavArray [$ContactUsI] ['title'] = 'Contact Us';
$NavArray [$ContactUsI] ['key'] = 'ContactUs';
$NavArray [$ContactUsI] ['proddir'] = 'Home/';
$NavArray [$ContactUsI] ['tooltip'] = 'Information on how to Contact Us';
$NavArray [$ContactUsI] ['filename'] = 'ContactUs';
$NavArray [$ContactUsI] ['floatimg'] = 'None';
$NavArray [$ContactUsI] ['parent'] = 'Home';
$NavArray [$ContactUsI] ['child'] = 'None';
$NavArray [$ContactUsI] ['NextPeer'] = 'None';
$NavArray [$ContactUsI] ['PrevPeer'] = 'WhoWeAre';

$NavArray [$ProductsI] ['type'] = 'M';
$NavArray [$ProductsI] ['title'] = 'Products';
$NavArray [$ProductsI] ['key'] = 'Products';
$NavArray [$ProductsI] ['proddir'] = 'Products/';
$NavArray [$ProductsI] ['tooltip'] = 'Our product line';
$NavArray [$ProductsI] ['filename'] = 'Products';
$NavArray [$ProductsI] ['floatimg'] = 'None';
$NavArray [$ProductsI] ['parent'] = 'None';
$NavArray [$ProductsI] ['child'] = 'LargeQuiltedWallets';
$NavArray [$ProductsI] ['NextPeer'] = 'OrderForm';
$NavArray [$ProductsI] ['PrevPeer'] = 'Home';
		
$NavArray [$LargeQuiltedWalletsI] ['type'] = 'S';
$NavArray [$LargeQuiltedWalletsI] ['title'] = 'Large Wallets';
$NavArray [$LargeQuiltedWalletsI] ['key'] = 'LargeQuiltedWallets';
$NavArray [$LargeQuiltedWalletsI] ['proddir'] = 'Products/';
$NavArray [$LargeQuiltedWalletsI] ['tooltip'] = 'Large Quilted Wallets with various patterns';
$NavArray [$LargeQuiltedWalletsI] ['filename'] = 'LargeQuiltedWallets';
$NavArray [$LargeQuiltedWalletsI] ['floatimg'] = 'LargeQuiltedWalletMulti.bmp';
$NavArray [$LargeQuiltedWalletsI] ['parent'] = 'Products';
$NavArray [$LargeQuiltedWalletsI] ['child'] = 'None';
$NavArray [$LargeQuiltedWalletsI] ['NextPeer'] = 'MediumQuiltedWallets';
$NavArray [$LargeQuiltedWalletsI] ['PrevPeer'] = 'None';
			
$NavArray [$MediumQuiltedWalletsI] ['type'] = 'S';
$NavArray [$MediumQuiltedWalletsI] ['title'] = 'Medium Wallets';
$NavArray [$MediumQuiltedWalletsI] ['key'] = 'MediumQuiltedWallets';
$NavArray [$MediumQuiltedWalletsI] ['proddir'] = 'Products/';
$NavArray [$MediumQuiltedWalletsI] ['tooltip'] = 'Medium Quilted Wallets with various patterns';
$NavArray [$MediumQuiltedWalletsI] ['filename'] = 'MediumQuiltedWallets';
$NavArray [$MediumQuiltedWalletsI] ['floatimg'] = 'MediumQuiltedWalletMulti.bmp';
$NavArray [$MediumQuiltedWalletsI] ['parent'] = 'Products';
$NavArray [$MediumQuiltedWalletsI] ['child'] = 'None';
$NavArray [$MediumQuiltedWalletsI] ['NextPeer'] = 'SmallQuiltedWallets';
$NavArray [$MediumQuiltedWalletsI] ['PrevPeer'] = 'LargeQuiltedWallets';
		
$NavArray [$SmallQuiltedWalletsI] ['type'] = 'S';
$NavArray [$SmallQuiltedWalletsI] ['title'] = 'Small Wallets';
$NavArray [$SmallQuiltedWalletsI] ['key'] = 'SmallQuiltedWallets';
$NavArray [$SmallQuiltedWalletsI] ['proddir'] = 'Products/';
$NavArray [$SmallQuiltedWalletsI] ['tooltip'] = 'Small Quilted Wallets with various patterns';
$NavArray [$SmallQuiltedWalletsI] ['filename'] = 'SmallQuiltedWallets';
$NavArray [$SmallQuiltedWalletsI] ['floatimg'] = 'SmallQuiltedWalletMulti.bmp';
$NavArray [$SmallQuiltedWalletsI] ['parent'] = 'Products';
$NavArray [$SmallQuiltedWalletsI] ['child'] = 'None';
$NavArray [$SmallQuiltedWalletsI] ['NextPeer'] = 'FabricColorChart';
$NavArray [$SmallQuiltedWalletsI] ['PrevPeer'] = 'MediumQuiltedWallets';

$NavArray [$CustomQuiltedWalletsI] ['type'] = 'S';
$NavArray [$CustomQuiltedWalletsI] ['title'] = 'Custom Wallets';
$NavArray [$CustomQuiltedWalletsI] ['key'] = 'CustomQuiltedWallets';
$NavArray [$CustomQuiltedWalletsI] ['proddir'] = 'Products/';
$NavArray [$CustomQuiltedWalletsI] ['tooltip'] = 'Custom Quilted Wallets';
$NavArray [$CustomQuiltedWalletsI] ['filename'] = 'CustomQuiltedWallets';
$NavArray [$CustomQuiltedWalletsI] ['floatimg'] = 'None';
$NavArray [$CustomQuiltedWalletsI] ['parent'] = 'Products';
$NavArray [$CustomQuiltedWalletsI] ['child'] = 'None';
$NavArray [$CustomQuiltedWalletsI] ['NextPeer'] = 'FabricColorChart';
$NavArray [$CustomQuiltedWalletsI] ['PrevPeer'] = 'SmallQuiltedWallets';

$NavArray [$FabricColorChartI] ['type'] = 'S';
$NavArray [$FabricColorChartI] ['title'] = 'Fabric Color Chart';
$NavArray [$FabricColorChartI] ['key'] = 'FabricColorChart';
$NavArray [$FabricColorChartI] ['proddir'] = 'Products/';
$NavArray [$FabricColorChartI] ['tooltip'] = 'Look at my Fabric Color Chart';
$NavArray [$FabricColorChartI] ['filename'] = 'FabricColorChart';
$NavArray [$FabricColorChartI] ['floatimg'] = 'madMooseSamples.bmp';
$NavArray [$FabricColorChartI] ['parent'] = 'Products';
$NavArray [$FabricColorChartI] ['child'] = 'None';
$NavArray [$FabricColorChartI] ['NextPeer'] = 'None';
$NavArray [$FabricColorChartI] ['PrevPeer'] = 'CustomQuiltedWallets';

$NavArray [$OrderFormI] ['type'] = 'M';
$NavArray [$OrderFormI] ['title'] = 'Order Form';
$NavArray [$OrderFormI] ['key'] = 'OrderForm';
$NavArray [$OrderFormI] ['proddir'] = 'OrderForm/';
$NavArray [$OrderFormI] ['tooltip'] = 'Order items here';
$NavArray [$OrderFormI] ['filename'] = 'OrderForm';
$NavArray [$OrderFormI] ['floatimg'] = 'None';
$NavArray [$OrderFormI] ['parent'] = 'None';
$NavArray [$OrderFormI] ['child'] = 'AddToCart';
$NavArray [$OrderFormI] ['NextPeer'] = 'None';
$NavArray [$OrderFormI] ['PrevPeer'] = 'Products';
		
$NavArray [$AddToCartI] ['type'] = 'S';
$NavArray [$AddToCartI] ['title'] = 'Shopping Cart';
$NavArray [$AddToCartI] ['key'] = 'AddToCart';
$NavArray [$AddToCartI] ['proddir'] = 'OrderForm/';
$NavArray [$AddToCartI] ['tooltip'] = 'Add items to the cart for eventual checkout';
$NavArray [$AddToCartI] ['filename'] = 'AddToCart';
$NavArray [$AddToCartI] ['floatimg'] = 'None';
$NavArray [$AddToCartI] ['parent'] = 'OrderForm';
$NavArray [$AddToCartI] ['child'] = 'None';
$NavArray [$AddToCartI] ['NextPeer'] = 'CheckOut';
$NavArray [$AddToCartI] ['PrevPeer'] = 'None';

$NavArray [$CheckOutI] ['type'] = 'S';
$NavArray [$CheckOutI] ['title'] = 'Check Out';
$NavArray [$CheckOutI] ['key'] = 'CheckOut';
$NavArray [$CheckOutI] ['proddir'] = 'OrderForm/';
$NavArray [$CheckOutI] ['tooltip'] = 'Check out items currently in the shopping cart';
$NavArray [$CheckOutI] ['filename'] = 'CheckOut';
$NavArray [$CheckOutI] ['floatimg'] = 'None';
$NavArray [$CheckOutI] ['parent'] = 'OrderForm';
$NavArray [$CheckOutI] ['child'] = 'None';
$NavArray [$CheckOutI] ['NextPeer'] = 'None';
$NavArray [$CheckOutI] ['PrevPeer'] = 'AddToCart';

//----------------------------------------------------------------------------------------------------------
// Array for pictures only
//----------------------------------------------------------------------------------------------------------
$DisplayImgArrayMulti [0] ['title'] = $NavArray [4] ['title']; // Large Quilted Wallets
$DisplayImgArrayMulti [0] ['key'] = $NavArray [4] ['key']; 
$DisplayImgArrayMulti [0] ['floatimg'] = $NavArray [4] ['floatimg'];

$DisplayImgArrayMulti [1] ['title'] = $NavArray [5] ['title']; // Medium Quilted Wallets
$DisplayImgArrayMulti [1] ['key'] = $NavArray [5] ['key']; 
$DisplayImgArrayMulti [1] ['floatimg'] = $NavArray [5] ['floatimg'];

$DisplayImgArrayMulti [2] ['title'] = $NavArray [6] ['title']; // Small Quilted Wallets
$DisplayImgArrayMulti [2] ['key'] = $NavArray [6] ['key']; 
$DisplayImgArrayMulti [2] ['floatimg'] = $NavArray [6] ['floatimg'];

$DisplayImgArraySingle [0] ['title'] = $NavArray [4] ['title']; // Large Quilted Wallets
$DisplayImgArraySingle [0] ['key'] = $NavArray [4] ['key']; 
$DisplayImgArraySingle [0] ['floatimg'] = 'LargeQuiltedWalletSingle.JPG';

$DisplayImgArraySingle [1] ['title'] = $NavArray [5] ['title']; // Medium Quilted Wallets
$DisplayImgArraySingle [1] ['key'] = $NavArray [5] ['key']; 
$DisplayImgArraySingle [1] ['floatimg'] = 'MediumQuiltedWalletSingle.bmp';

$DisplayImgArraySingle [2] ['title'] = $NavArray [6] ['title']; // Small Quilted Wallets
$DisplayImgArraySingle [2] ['key'] = $NavArray [6] ['key']; 
$DisplayImgArraySingle [2] ['floatimg'] = 'SmallQuiltedWalletSingle.bmp';

$FabricColorChartTokens [0] ['title'] = 'Fire';
$FabricColorChartTokens [0] ['floatimg'] = 'SampleFire.bmp';
$FabricColorChartTokens [0] ['token'] = 'F';
$FabricColorChartTokens [1] ['title'] = 'Flowers on Blue';
$FabricColorChartTokens [1] ['floatimg'] = 'SampleFlowersonBlue.bmp';
$FabricColorChartTokens [1] ['token'] = 'B';
$FabricColorChartTokens [2] ['title'] = 'Gold';
$FabricColorChartTokens [2] ['floatimg'] = 'SampleGold.bmp';
$FabricColorChartTokens [2] ['token'] = 'G';
$FabricColorChartTokens [3] ['title'] = 'Green';
$FabricColorChartTokens [3] ['floatimg'] = 'SampleGreen.bmp';
$FabricColorChartTokens [3] ['token'] = 'E';
$FabricColorChartTokens [4] ['title'] = 'Hot Pink';
$FabricColorChartTokens [4] ['floatimg'] = 'SampleHotPink.bmp';
$FabricColorChartTokens [4] ['token'] = 'H';
$FabricColorChartTokens [5] ['title'] = 'Pink Blue';
$FabricColorChartTokens [5] ['floatimg'] = 'SamplePinkBlue.bmp';
$FabricColorChartTokens [5] ['token'] = 'I';
$FabricColorChartTokens [6] ['title'] = 'Pink Grey';
$FabricColorChartTokens [6] ['floatimg'] = 'SamplePinkGrey.bmp';
$FabricColorChartTokens [6] ['token'] = 'P';
$FabricColorChartTokens [7] ['title'] = 'Red';
$FabricColorChartTokens [7] ['floatimg'] = 'SampleRed.bmp';
$FabricColorChartTokens [7] ['token'] = 'R';
$FabricColorChartTokens [8] ['title'] = 'Red Gold Floral';
$FabricColorChartTokens [8] ['floatimg'] = 'SampleRedGoldFloral.bmp';
$FabricColorChartTokens [8] ['token'] = 'L';

//----------------------------------------------------------------------------------------------------------
// LefT Nav variables
//----------------------------------------------------------------------------------------------------------
$LeftNavTop = $MainNavTop + $MainNavHeight;
$LeftNavHeight = 600;
$LeftNavWidth = 150;
$LeftNavBackgroundColor = $MainNavTabUpperCellSelectColor;

//
// Left Nav Menu variables
//

$LeftNavMenuBorderColor = $MainNavTabUpperCellSelectColor;
$LeftNavMenuBorderWidth = 0;
$LeftNavMenuBorderTopWidth = 0;
$LeftNavMenuBorderBottomWidth = 1;
$LeftNavMenuPadding = 0;
$LeftNavMenuMargin = 0;

$LeftNavMenuHdrCellTextColor = $MainNavTabUpperCellSelectColor;
$LeftNavMenuHdrCellTextFonts= "Verdana, Arial, Helvetica, sans-serif";
$LeftNavMenuHdrCellTextFontSize= "13";
$LeftNavMenuHdrCellTextWeight= "700";
$LeftNavMenuHdrCellPaddingTopBottom = 4;
$LeftNavMenuHdrCellPaddingLeftRight = 6;
$LeftNavMenuHdrCellBackgroundColor = "#1b5f5d";
$LeftNavMenuBorderWidth = 0;

$LeftNavMenuCellTextColor = "black";
$LeftNavMenuCellTextFonts= "Verdana, Arial, Helvetica, sans-serif";
$LeftNavMenuCellTextFontSize= "12";
$LeftNavMenuCellTextWeight= "500";
$LeftNavMenuCellLineHeight = 15; 
$LeftNavMenuCellBackgroundColor = "#468e8b";

$LeftNavMenuCellHoverTextColor = "blue";
$LeftNavMenuCellHoverBackgroundColor = "#70b1af";

$LeftNavMenuCellSelectBackgroundColor = "white";

//----------------------------------------------------------------------------------------------------------
// LefT Nav Supported Causes logo variables
//----------------------------------------------------------------------------------------------------------
$supportedCausesTop = 400;
$supportedCausesHeight = 200;
$supportedCausesWidth = 150;
$supportedCausesBackgroundColor = $MainNavTabUpperCellSelectColor;

//----------------------------------------------------------------------------------------------------------
//  Workarea variables
//----------------------------------------------------------------------------------------------------------

$WATop = $MainNavTop + $MainNavHeight;
$WAHeight = $LeftNavHeight;
$WALeft= $LeftNavWidth;
$WAWidth = $BannerWidth - $LeftNavWidth;
$WABackgroundColor = "white";

//
// WA Breadcrumb variables
//
$WAbreadcrumbTop = 2; 
$WAbreadcrumbHeight = 15;
$WAbreadcrumbLeft= 5;
$WAbreadcrumbWidth = $WAWidth - ($WAbreadcrumbLeft + 2);
$WAbreadcrumbBackgroundColor = "white";

$WAbreadcrumbTextColor= "#333";
$WAbreadcrumbTextFonts= "verdana,sans-serif";
$WAbreadcrumbTextFontSize= "11";
$WAbreadcrumbTextWeight= "500";
$WAbreadcrumbTextColoHover= "red";
$WAbreadcrumbTextLineHeight = 11;

//
// WA Title Border variables
//
$WAtitleborderTop = $WAbreadcrumbTop + $WAbreadcrumbHeight; 
$WAtitleborderHeight = 30;
$WAtitleborderLeft= 5;
$WAtitleborderWidth = $WAWidth - ($WAtitleborderLeft + 2);
$WAtitleborderBackgroundColor = "white";

$WAtitleborderBottomColor = "#d1b60c";
$WAtitleborderBottomSize = "2";

$WAtitleborderTextColor= "#a23636";
$WAtitleborderTextFonts= "Arial,Helvetica";
$WAtitleborderTextFontSize= "15";
$WAtitleborderTextWeight= "700";
$WAtitleborderTextLineStyle = "italic";
$WAtitleborderTextLineHeight = 15;
$WAtitleborderTextAlign = "right";

//
// WA home variables
//
$WAhomeTop = $WAtitleborderTop + $WAtitleborderHeight; 
$WAhomeHeight = $WAHeight;
$WAhomeLeft= 0;
$WAhomeWidth = $WAWidth - 1;
$WAhomeBackgroundColor = "white";


//
// WA main variables
//
$WAmainTop = $WAtitleborderTop + $WAtitleborderHeight; 
$WAmainHeight = 200;
$WAmainLeft= 0;
$WAmainWidth = $WAWidth - 1;
$WAmainBackgroundColor = "white";

//
// WA select variables
//
$WAselectTop = $WAmainTop + $WAmainHeight; 
$WAselectHeight = $WAHeight - $WAselectTop;
$WAselectLeft= 0;
$WAselectWidth = $WAWidth - 1;
$WAselectBackgroundColor = "white";

//
// Used to create Names of files to include for top level work area
//
$WAgo = "madMoosewaSTDtrans.php";
$WAstay = "madMoosewaSTDfinal.php";

//----------------------------------------------------------------------------------------------------------
// Footer variables
//----------------------------------------------------------------------------------------------------------
$FooterTop = $LeftNavTop + $LeftNavHeight + 5;
$FooterLeft = 0;
$FooterWidth = $BannerWidth;

//----------------------------------------------------------------------------------------------------------
// Miscelaneous global variables
//----------------------------------------------------------------------------------------------------------
$Spacer = "&nbsp;&nbsp;";
$module = 'index.html';

?>
