<?php
/* Smarty version 3.1.36, created on 2020-12-30 08:10:41
  from 'D:\xamp\htdocs\smarty\dev\templates\info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fec27f1d7dd66_68711622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fdc37ea02ba60ed2aed2b73b51b64e7ff2e2da7' => 
    array (
      0 => 'D:\\xamp\\htdocs\\smarty\\dev\\templates\\info.tpl',
      1 => 1609312240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fec27f1d7dd66_68711622 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xamp\\htdocs\\smarty\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'D:\\xamp\\htdocs\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Info"), 0, false);
?>
<pre>
        User Information:
        <table>
        <tr>
            <td>Name: <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>
</td><br>
            <td>Addr: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value, ENT_QUOTES, 'UTF-8', true);?>
</td><br>
            <td>Date: <?php echo smarty_modifier_date_format(time(),"%b %e, %Y");?>
</td>
        </tr>
    </table>
</pre>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
