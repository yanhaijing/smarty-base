<?php
include_once ('config/config.php');
include_once ('lib/smarty/Smarty.class.php');
include_once ('common/mysql.class.php');

// $db = new Mysql($mydbhost, $mydbuser, $mydbpw, $mydbname, ALL_PS, $mydbcharset);

// ********smarty**********
$smarty = new smarty();
$smarty->template_dir    = $smarty_template_dir;
$smarty->compile_dir     = $smarty_compile_dir;
$smarty->config_dir      = $smarty_config_dir;
$smarty->cache_dir       = $smarty_cache_dir;
$smarty->caching         = $smarty_caching;
$smarty->left_delimiter  = $smarty_delimiter[0];
$smarty->right_delimiter = $smarty_delimiter[1];
$smarty->assign("t_dir", $smarty_template_dir);
$smarty->assign("root", $smarty_root);
// ********smarty**********
?>
