<?php
/* Smarty version 3.1.31-dev/29, created on 2016-09-28 05:37:28
  from "D:\github\smarty-base\template\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/29',
  'unifunc' => 'content_57eb3af8e16c73_10035450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a610d77310ca264b176b67af005216c94f9ab9a' => 
    array (
      0 => 'D:\\github\\smarty-base\\template\\index.tpl',
      1 => 1475033742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.tpl' => 1,
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_57eb3af8e16c73_10035450 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2426757eb3af8d91f08_05571228', "conf");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2628057eb3af8dbcea3_76430942', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_556957eb3af8debcd8_68036294', "body");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "conf"} */
class Block_2426757eb3af8d91f08_05571228 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'conf' => 
  array (
    0 => 'Block_2426757eb3af8d91f08_05571228',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php
}
}
/* {/block "conf"} */
/* {block "title"} */
class Block_2628057eb3af8dbcea3_76430942 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2628057eb3af8dbcea3_76430942',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_556957eb3af8debcd8_68036294 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_556957eb3af8debcd8_68036294',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, false);
?>

    <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'title');?>

    <?php echo $_smarty_tpl->tpl_vars['body']->value;?>

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('year'=>'2016'), 0, false);
?>

<?php
}
}
/* {/block "body"} */
}
