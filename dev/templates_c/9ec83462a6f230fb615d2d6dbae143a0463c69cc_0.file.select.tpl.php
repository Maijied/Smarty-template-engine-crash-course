<?php
/* Smarty version 3.1.36, created on 2020-12-30 08:19:17
  from 'D:\xamp\htdocs\smarty\dev\templates\select.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fec29f5106326_05388619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ec83462a6f230fb615d2d6dbae143a0463c69cc' => 
    array (
      0 => 'D:\\xamp\\htdocs\\smarty\\dev\\templates\\select.tpl',
      1 => 1609312756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fec29f5106326_05388619 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xamp\\htdocs\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Info"), 0, false);
?>
<pre>
<select name=user style="color:red;width:100px;">
<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['id']->value,'output'=>$_smarty_tpl->tpl_vars['names']->value,'selected'=>"2"),$_smarty_tpl);?>

</select>
</pre>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
