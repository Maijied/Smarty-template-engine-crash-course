<?php
include('../libs/Smarty.class.php');

// create object
$smarty = new Smarty;

// assign options arrays
$smarty->assign('id', array(1,2,3,4,5));
$smarty->assign('names', array('bob','jim','joe','jerry','fred'));

// display it
$smarty->display('select.tpl');
?>