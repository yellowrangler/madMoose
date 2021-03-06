<?php
//----------------------------------------------------------------------------------------------------------
// Set special globals.
//----------------------------------------------------------------------------------------------------------
$module = 'madMooseeditCart.php';

require ('../madMooseGLOBAL.php');

require ('../madMooseInit.php');

require ('../madMoosefuncs.php');

require ('../madMoosePI.php');


$Spacer = "&nbsp;&nbsp;";

//----------------------------------------------------------------------------------------------------------
// Get post parameters
//----------------------------------------------------------------------------------------------------------
if (isset($_POST[Action]) && ($_POST[Action] != "") )
{
	$Action = $_POST[Action];
}
else
{
	$Action = "";
}	

for ($i = 1; $i < $MaxLines + 1; $i++) 
{

    if (isset($_POST["CartType".$i]) && ($_POST["CartType".$i] != "") )
    {
        $CartType[$i - 1] = $_POST["CartType".$i];
    }
    else
    {
        $CartType[$i - 1] = NULL;
    }	
    
    if (isset($_POST["CartSize".$i]) && ($_POST["CartSize".$i] != "") )
    {
        $CartSize[$i - 1] = $_POST["CartSize".$i];
    }
    else
    {
        $CartSize[$i - 1] = NULL;
    }	
    
    if (isset($_POST["CartFabric".$i]) && ($_POST["CartFabric".$i] != "") )
    {
        $CartFabric[$i - 1] = $_POST["CartFabric".$i];
    }
    else
    {
        $CartFabric[$i - 1] = NULL;
    }

    if (isset($_POST["CartQty".$i]) && ($_POST["CartQty".$i] != "") )
    {
        $CartQty[$i - 1] = $_POST["CartQty".$i];
    }
    else
    {
        $CartQty[$i - 1] = NULL;
    }	
    
} // end of for
        
switch ($Action)
{
    case "Recalculate":
        emptyCart();
        
        for ($i = 0; $i < $MaxLines; $i++) 
        {
            if ($CartQty[$i] > 0)
            {
                $CartArray[$CartTypeIndex] = $CartType[$i];
                $CartArray[$CartSizeIndex] = $CartSize[$i];
                $CartArray[$CartFabricIndex] = $CartFabric[$i];
                $CartArray[$CartQtyIndex] = $CartQty[$i];
             
                addToCart($CartArray);
            }
        } // end of for

        $nextPage = "../index.php?selectID=AddToCart";
        break;
        
     case "EmptyCart":
        $nextPage = "../index.php?selectID=AddToCart&cartfunction=EmptyCart";
        break;  
        
    case "CheckOut":
        emptyCart();
        
        for ($i = 0; $i < $MaxLines; $i++) 
        {
            if ($CartQty[$i] > 0)
            {
                $CartArray[$CartTypeIndex] = $CartType[$i];
                $CartArray[$CartSizeIndex] = $CartSize[$i];
                $CartArray[$CartFabricIndex] = $CartFabric[$i];
                $CartArray[$CartQtyIndex] = $CartQty[$i];
             
                addToCart($CartArray);
            }
        } // end of for

        $nextPage = "../index.php?selectID=CheckOut";
        break;     
    
} // end of switch

header("location: ".$nextPage);

?>
