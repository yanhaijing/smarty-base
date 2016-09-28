<?php
/* Smarty version 3.1.31-dev/29, created on 2016-09-28 05:37:28
  from "D:\github\smarty-base\template\base.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/29',
  'unifunc' => 'content_57eb3af8e554a7_73629182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecd380d48281cfcf6b3c68677034b887681be735' => 
    array (
      0 => 'D:\\github\\smarty-base\\template\\base.tpl',
      1 => 1475033759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57eb3af8e554a7_73629182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_733557eb3af8e32206_56288925', "conf");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1774857eb3af8e3dd95_09175445', "title");
?>
</title>
</head>
<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1970957eb3af8e4d7a3_84663145', "body");
?>

</body>
</html>
<?php }
/* {block "conf"} */
class Block_733557eb3af8e32206_56288925 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'conf' => 
  array (
    0 => 'Block_733557eb3af8e32206_56288925',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "conf"} */
/* {block "title"} */
class Block_1774857eb3af8e3dd95_09175445 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1774857eb3af8e3dd95_09175445',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
title<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_1970957eb3af8e4d7a3_84663145 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1970957eb3af8e4d7a3_84663145',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "body"} */
}
