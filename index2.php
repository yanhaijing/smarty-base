<?php
include_once('global.php');

$smarty->assign('title', 'index2-smarty-base');
$smarty->assign('body', 'smarty-base is index');

$smarty->display('index2.tpl');
?>
