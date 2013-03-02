<?php

$DisplayBC = GetBreadCrumbs($selectID);

$DisplayTitleBanner = GetTitleBanner($selectID);

?>

<div class="WAtitleBorder">
<?php print $DisplayTitleBanner; ?>
</div>

<div class="WAhome">

<?php include('madMooseproducts.php'); ?>

</div>
