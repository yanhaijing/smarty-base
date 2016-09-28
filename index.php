<?php
include_once('global.php');

$smarty->assign('title', 'smarty-base');
$smarty->assign('body', 'smarty-base is index');

$smarty->display('index.tpl');
?>
