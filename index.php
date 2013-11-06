<?php
//----------------------------------------------------------------------------------------------------------
// Set special .
//----------------------------------------------------------------------------------------------------------

require ('madMooseGLOBAL.php');

require ('madMooseInit.php');

require ('madMoosefuncs.php');

require ('madMoosePI.php');

//
// IMPOTANT - this require must come after selectID is parsed
//

require ('madMoosesecure.php');

//
// Set product diretcory
//
$instance = getNavArrayInstance($selectID);
$productDir = $NavArray[$instance] ['proddir'];

?>

<html>

<?php require ('madMooseMETAtags.php'); ?>

<head>
<title>Mad Moose Creations</title>

<style type="text/css">
<?php require ("madMooseStyleSheet.css"); ?>
</style>
<link rel="stylesheet" href="/javascript/jquery-ui-1.10.1.custom/css/ui-lightness/jquery-ui-1.10.1.custom.css" type="text/css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT|PT+Sans" type="text/css">

<script type="text/javascript" src="/javascript/jquery-1.9.1.js"></script>
<script type="text/javascript" src="/javascript/jquery.cycle.all.js"></script>
<script type="text/javascript" src="/javascript/jquery-ui-1.10.1.custom/js/jquery-ui-1.10.1.custom.js"></script>

<script type="text/javascript">

<?php require ("javascript/madMooseJavaScript.js"); ?>

</script>
 
</head>

<body onload="startUp()">

<script type="text/javascript">

<?php require ("javascript/wz_tooltip.js"); ?>

</script>
 
<div id="allcontent">

<div id="Banner" class="Banner">
<?php require ("madMooseBanner.php"); ?>
</div>

<div id="MainNav" class="MainNav">
<?php require ("madMooseMainNav.php"); ?>
</div>

<div id="LeftNav" class="LeftNav">
<?php require ("madMooseLeftNav.php"); ?>
</div>

<div class="Workarea">
<?php require ("madMooseWorkarea.php"); ?>
</div>

<div id="Footer" class="Footer">
<?php require ("madMooseFooter.php"); ?>
</div>

</div>

</body>
</html>
