<?php
/* Smarty version 4.3.0, created on 2024-10-15 21:02:08
  from 'D:\OSPanel\domains\cscart\design\backend\templates\views\addons\components\manage\addon_install_datetime.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_670eae2005ef57_91350954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21acd71dc3e52545f714cb220b2c61711d89ff1f' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\backend\\templates\\views\\addons\\components\\manage\\addon_install_datetime.tpl',
      1 => 1728457708,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670eae2005ef57_91350954 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('show_install_datetime', (($tmp = $_smarty_tpl->tpl_vars['show_install_datetime']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['show_install_datetime']->value) {?>
        <div class="hidden"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value['install_datetime'], ENT_QUOTES, 'UTF-8');?>
</div>
<?php }
}
}
