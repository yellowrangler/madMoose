<?php

$NavInstance = getNavArrayInstance($selectID);

$WAnameInclude = $productDir."madMoosewa".$NavArray[$NavInstance] ['filename'].".php";

//DEBUG echo " include = '$WAnameInclude'";

?>

<?php include ("$WAnameInclude"); ?>
