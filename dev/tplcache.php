<?php
include('../libs/Smarty.class.php');

// create object
$smarty = new Smarty;
$smarty->setCaching(true);

// see if the page is already cached
if(!$smarty->isCached('tplcache.tpl')) {

   // not cached, so you might do some database queries here,
   // then assign the returned content. We just use static
   // values for this example.
   $smarty->assign('name', 'george smith');
   $smarty->assign('address', '45th & Harris');
}

// display it
$smarty->display('tplcache.tpl');
?>