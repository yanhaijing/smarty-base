<?php
include_once('global.php');

$smarty->assign('title', 'index-smarty-base');
$smarty->assign('body', 'smarty-base is index');

$smarty->display('index.tpl');
?>
