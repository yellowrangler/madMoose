<?php

$DisplayBC = GetBreadCrumbs($selectID);

$DisplayTitleBanner = GetTitleBanner($selectID);

?>

<div class="WAbreadCrumb">
<?php print $DisplayBC; ?>
</div>

<div class="WAtitleBorder">
<?php print $DisplayTitleBanner; ?>
</div>

<div class="WAhome">

<?php include('madMoosesmallquiltedwallets.php'); ?>

</div>
