<?php
//---------------------------------------------------------------------------------------------------------
// Set  Constants
//---------------------------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------------------------
// get current date for display
//----------------------------------------------------------------------------------------------------------
function currDate() 
{
   $time = time();
   return(date("F j, Y", $time));
} // end of currDate func

//----------------------------------------------------------------------------------------------------------
// LogErr funtion -- gets cur date time then writes errmsg to file.  Then displays msg to user. 
//----------------------------------------------------------------------------------------------------------
function LogErr($shortmsg, $errmsg, $location, $module, $severity)
{
   
	$time = time();
	$strDateTime = date("Y-m-d H:i:s", $time);
    $logname="/var/www/html/madMoose/logs/errlog.log";
	
	$fp = fopen($logname, "a") or die("could not open $logname");
	$logmsg = "$strDateTime : $severity : $errmsg : $module\n";
	fwrite($fp, $logmsg);
	fclose($fp);
	
	if ($severity > 0)
	{
		//-------------------------------------
		// Do Alert
		//-------------------------------------
		$tmpMsg = "alert(\"".$shortmsg."\");";
	}
	else
	{
		//-------------------------------------
		// Do Status Bar
		//-------------------------------------
		$tmpMsg = "window.status = \"".$shortmsg."\";";
	}	
	
	// This will be changed when I figure this out
	//$_SESSION[LogMsg] = $tmpMsg;
	
	if ($location != "")
	{
		header($location);
		exit;
	}
	
	
} // end of LogErre func

//----------------------------------------------------------------------------------------------------------
// LogErrSevere funtion -- gets cur date time then writes errmsg to file. Then terminates session. 
//----------------------------------------------------------------------------------------------------------
function LogErrSevere($errmsg, $module) 
{
	$time = time();
	$strDateTime = date("Y-m-d H:i:s", $time);
    $logname="/var/www/html/madMoose/logs/errlog.log";
	
	$fp = fopen($logname, "a") or die("could not open $logname");
	$logmsg = "$strDateTime : SEVERE : $errmsg $module\n";
	fwrite($fp, $logmsg);
	fclose($fp);
	
	exit;
	
} // end of LogErr func

//----------------------------------------------------------------------------------------------------------
// first we make sure the cookie has been set
//----------------------------------------------------------------------------------------------------------
session_start();

$_SESSION["WhichHost"] = 1;
$WhichHost = $_SESSION["WhichHost"];    

?>
