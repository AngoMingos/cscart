<?php
/* Smarty version 4.3.0, created on 2024-10-15 19:03:26
  from 'D:\OSPanel\domains\cscart\design\backend\templates\addons\store_locator\hooks\index\styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_670e924eb9f6f6_37771821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dc415fc4e1aae4fa2016ebe7238a685dc66d822' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\backend\\templates\\addons\\store_locator\\hooks\\index\\styles.post.tpl',
      1 => 1728457687,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670e924eb9f6f6_37771821 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\function.style.php','function'=>'smarty_function_style',),));
if ($_smarty_tpl->tpl_vars['store_locator_shipping']->value && $_smarty_tpl->tpl_vars['shipping']->value['company_id'] == 0) {?>
    <?php echo smarty_function_style(array('src'=>"addons/store_locator/styles.less"),$_smarty_tpl);?>

<?php }
}
}
