<?php
require 'libs/Smarty.class.php';

$smarty = new Smarty;

$smarty->assign("test", 12213);

$smarty->display('index.tpl');
?>
