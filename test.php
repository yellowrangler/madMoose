<?php

//----------------------------------------------------------------------------------------------------------
// Set special globals.
//----------------------------------------------------------------------------------------------------------
$module = 'pumadMooseprintform.php';


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


?>
<html>
<head>
<title>MadMoose Creations Print Form</title>

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

<form method="POST" name="printForm">
</div>
<div class="madMooseItemListBottom">
 <table width="90%">
        <tr>
            <td  height=21 valign=middle align=left><input type=button OnClick="printDoc()" value="PrintForm" name="Action"></td>
            <td width="5%">&nbsp;</td>
        </tr>  
</table>
</div>

</body>
</html>		
