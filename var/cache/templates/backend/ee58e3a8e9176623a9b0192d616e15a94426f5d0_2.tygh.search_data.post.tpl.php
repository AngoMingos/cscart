<?php
/* Smarty version 4.3.0, created on 2024-10-20 19:38:13
  from 'D:\OSPanel\domains\cscart\design\backend\templates\addons\bestsellers\hooks\products\search_data.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_671531f5417939_61945844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee58e3a8e9176623a9b0192d616e15a94426f5d0' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\backend\\templates\\addons\\bestsellers\\hooks\\products\\search_data.post.tpl',
      1 => 1728457670,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671531f5417939_61945844 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('sales_amount'));
$_tmp_array = isset($_smarty_tpl->tpl_vars['search_filters']) ? $_smarty_tpl->tpl_vars['search_filters']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data']['sales_amount'] = array('id'=>"sales_amount",'type'=>"range",'category'=>"secondary",'label'=>$_smarty_tpl->__("sales_amount"),'data'=>array('name_from'=>"sales_amount_from",'value_from'=>$_smarty_tpl->tpl_vars['search']->value['sales_amount_from'],'name_to'=>"sales_amount_to",'value_to'=>$_smarty_tpl->tpl_vars['search']->value['sales_amount_to']));
$_smarty_tpl->_assignInScope('search_filters', $_tmp_array);?>

<?php $_smarty_tpl->_assignInScope('search_filters', $_smarty_tpl->tpl_vars['search_filters']->value ,false ,2);?>

<?php }
}
