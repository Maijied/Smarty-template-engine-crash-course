<?php
/* Smarty version 3.1.36, created on 2020-12-30 08:28:12
  from 'D:\xamp\htdocs\smarty\dev\templates\tplcache.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fec2c0c3b7811_12257612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68cf937841620cc3226321e59283d0a02688b629' => 
    array (
      0 => 'D:\\xamp\\htdocs\\smarty\\dev\\templates\\tplcache.tpl',
      1 => 1609313249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fec2c0c3b7811_12257612 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '5641769615fec2c0c363f26_79698108';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>"Info"), 0, false);
?>

<pre>
User Information:

Name: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

Address: <?php echo $_smarty_tpl->tpl_vars['address']->value;?>

</pre>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
