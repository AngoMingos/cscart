<?php
/* Smarty version 4.3.0, created on 2024-10-20 19:38:12
  from 'D:\OSPanel\domains\cscart\design\backend\templates\views\products\components\search_filters\products_quantity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_671531f485bf32_18996435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6e5113ab268c2f99692cf82ce8790ecc63c62ee' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\backend\\templates\\views\\products\\components\\search_filters\\products_quantity.tpl',
      1 => 1728457719,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671531f485bf32_18996435 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('have_amount_filter', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter_items']->value, 'ff');
$_smarty_tpl->tpl_vars['ff']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ff']->value) {
$_smarty_tpl->tpl_vars['ff']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['ff']->value['field_type'] == "A") {?>
        <?php $_smarty_tpl->_assignInScope('have_amount_filter', 1);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_assignInScope('have_amount_filter', $_smarty_tpl->tpl_vars['have_amount_filter']->value ,false ,2);
}
}
