<?php
//----------------------------------------------------------------------------------------------------------
// Set special globals.
//----------------------------------------------------------------------------------------------------------
$module = 'pumadMoosesingleslide.php';


require ('madMooseGLOBAL.php');

require ('madMooseInit.php');

require ('madMoosefuncs.php');

require ('madMoosePI.php');


$Spacer = "&nbsp;&nbsp;";

//----------------------------------------------------------------------------------------------------------
// Get and set selection
//----------------------------------------------------------------------------------------------------------
if (isset($_GET[filename]) && ($_GET[filename] != "") )
{
	$filename = $_GET[filename];
    
   //  echo "filrname = $filename";
}
else
{
	$filename = "";
    echo "no filrname";
    exit();
}

//
// Set some zoom constants
//
$ControlImageWidth = 600;

if (isset($_GET[zoom]) and ($_GET[zoom] != ""))
{
	$ControlImageWidth = $_GET[zoom];
}	

$ZoomConstant = 100;
$Debug = 'N';

//---------------------------------------------------------------------------------------------------------
// What is the action
//--------------------------------------------------------------------------------------------------------- 
if (isset($_GET[Action]) and ($_GET[Action] != ""))
{
	switch ($_GET[Action])
	{			
		case "Zoom In":
			$ControlImageWidth = $ControlImageWidth + $ZoomConstant;		
			break;
			
		case "Zoom Out":
			$ControlImageWidth = $ControlImageWidth - $ZoomConstant;		
			break;
			
		case 'Photograph':
			$showmetadata = 0;
			break;
			
		case 'Information':
			$showmetadata = 1;
			break;	
		
		default:
			break;
	} // end of Switch	
}		


$DisplayItemArea = "<img border=1 src=\"$filename\" width=".$ControlImageWidth.">";
	
?>

<html>
<head>
<title>Pop-Up Information</title>

<style type="text/css">

<?php require ("madMooseStyleSheet.css"); ?>

.ArticleHeader {
		font: 700 15px Arial,Helvetica; 
		font-style: italic;
		text-align: left;
        width: 615px;
		color:#666666;
		}
		
.topBanner {
		position: absolute;
		left:1px;
		top:1px;
		height:50px;
        width: 615px;   
		border-top:1px solid white;
		border-right:1px solid white;
		border-left:1px solid white;
		background:#fff;
		}
		
.topLine   { 
		color: #008080;
		}

.undertopLineArea {
		position: absolute;
		left:10px;
		top:0px;
        width: 615px;
		color: black; 
		line-height: 20px; 
		font: 400 15px Arial, Geneva; 
		text-decoration: none;
		text-align: left;
		}		

.controlArea {
		position: absolute;
		left: 5px;
		top:25px;
		height:600px;
        width: 625px;
		border-top:1px solid white;
		border-right:1px solid white;
		border-left:1px solid white;
		border-bottom:1px solid white;
		background:#fff;
		}		
		
.controlManager {
		position: absolute;
		left:0px;
		top:0px;
        width: 615px;
		height:30px;
		background: white;
		}		


.controlSubTopicDetail {
		color: black;
		text-align: center;
		font: 500 13px Arial,Helvetica; 
		height:13px;
        width: 615px;
		background: white;
		}
		
.scanArea {
		position: absolute;
		left: 10px;
		top:75px;
		height:500px;
		border-top:1px solid white;
		border-right:1px solid white;
		border-left:1px solid white;
		border-bottom:1px solid white;
		background:#fff;
		}
		
.smallText2 {
		font: 400 11px Arial, Geneva;
		line-height: 14px; 
		}		
		
.smallText2Bold {
		font: 700 11px Arial, Geneva;
		line-height: 14px; 
		}		
		
.smallText {
		font: 400 10px Verdana, Arial, Helvetica;
		}
		
</style>

<script type="text/javascript">
<?php require ("javascript/madMooseJavaScript.js"); ?>
</script>
</head>

<body>

<div id="topBanner" class="topBanner">
<div id="undertopLineArea" class="undertopLineArea">
<table width="95%">
	<tr>
		<td align=left valign=top width="50%" class="smallText"><i><a href="#" onClick="window.close()">Close Window</a></i></td>
		
		<td align=right valign=top width="50%" class="smallText"><i><a href="#" onClick="window.print()">Print Window</a></i></td>
	</tr>
</table>	
</div>

<div class="controlArea">
<div class="controlManager">
<center>
<form action="pumadMoosesingleslide.php" method=get>
<table class="controlSubTopicDetail" border=0 cellspacing=0 cellpadding=0 width="100%" align=center>
	<tr>	
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>
			<input type="submit" name="Action" value="Zoom In">
		</td>
        <td>&nbsp;</td>
        <td>
			<input type="submit" name="Action" value="Zoom Out">
		</td>
	</tr>
	<tr>	
		<td>&nbsp;</td>
	</tr>
</table>	

<input type="hidden" name="zoom" value="<?php print $ControlImageWidth; ?>">	
<input type="hidden" name="filename" value="<?php print $filename; ?>">
</form>
</center>	
</div>
</div>

<div class="scanArea">
<center>
<table width="100%">
	<tr>
		<td  height="100%" align=left valign=top>
		<?php print $DisplayItemArea; ?>
		</td>
	</tr>
</table>	
</center>
</div>

</body>
</html>		
