<?php

//----------------------------------------------------------------------------------------------------------
// Set msg variable if set
//----------------------------------------------------------------------------------------------------------
if (isset($_GET[msg]) && ($_GET[msg] != "") )
{
	$javaScriptMsg = "alert (\"".$_GET[msg]."\");";
}

//----------------------------------------------------------------------------------------------------------
// Get and set selection
//----------------------------------------------------------------------------------------------------------
if (isset($_GET[selectID]) && ($_GET[selectID] != "") )
{
	$selectID = $_GET[selectID];
}
else
{
	$selectID = $NavArray[0]['key'];
}

if (isset($_POST[selectID]) && ($_POST[selectID] != "") )
{
	$selectID = $_POST[selectID];
}

if (isset($_SESSION['javascript']) && ($_SESSION['javascript'] != NULL) )
{
    $runJavascrupt = $_SESSION['javascript'];
    $_SESSION['javascript'] = NULL;
}

?>
