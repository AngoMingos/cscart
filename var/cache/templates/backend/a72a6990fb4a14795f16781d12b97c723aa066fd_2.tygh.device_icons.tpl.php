<?php
/* Smarty version 4.3.0, created on 2024-10-15 19:08:04
  from 'D:\OSPanel\domains\cscart\design\backend\templates\views\block_manager\components\device_icons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_670e9364930e38_83367583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a72a6990fb4a14795f16781d12b97c723aa066fd' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\backend\\templates\\views\\block_manager\\components\\device_icons.tpl',
      1 => 1728457709,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670e9364930e38_83367583 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('devices', (($tmp = $_smarty_tpl->tpl_vars['item']->value['availability'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
$_smarty_tpl->_assignInScope('all_devices', array_filter($_smarty_tpl->tpl_vars['devices']->value) == $_smarty_tpl->tpl_vars['devices']->value);?>

<div class="device-specific-block__devices <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wrapper_class']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['devices']->value, 'is_available', false, 'device');
$_smarty_tpl->tpl_vars['is_available']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['device']->value => $_smarty_tpl->tpl_vars['is_available']->value) {
$_smarty_tpl->tpl_vars['is_available']->do_else = false;
?>
        <div class="device-specific-block__devices__device device-specific-block__devices__device--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
 icon-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['all_devices']->value || !$_smarty_tpl->tpl_vars['is_available']->value) {?>hidden<?php }?>"></div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
