<?php
/* Smarty version 3.1.36, created on 2020-12-30 07:58:28
  from 'D:\xamp\htdocs\smarty\dev\templates\second.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fec25143c9712_48906825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6149ba753284b2e9ef3793df0d7f9b5cf53f1eac' => 
    array (
      0 => 'D:\\xamp\\htdocs\\smarty\\dev\\templates\\second.tpl',
      1 => 1609311506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fec25143c9712_48906825 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>
    <title>Info</title>
</head>

<body>


    New User Information:
    <table>
        <tr>
            <td>Name: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
            <td>Address: <?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</td>
        </tr>
    </table>

</body>

</html><?php }
}
