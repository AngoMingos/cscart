<?php
/* Smarty version 4.3.0, created on 2024-10-20 19:38:13
  from 'D:\OSPanel\domains\cscart\design\backend\templates\addons\rus_taxes\hooks\products\search_data.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_671531f51854b7_28963625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a5ca6ed7d7ee8f1f7ff7154e03f1bbd5c8c538a' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\backend\\templates\\addons\\rus_taxes\\hooks\\products\\search_data.post.tpl',
      1 => 1728457685,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671531f51854b7_28963625 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('payment_object','is_fur_ware','yes','no'));
$_tmp_array = isset($_smarty_tpl->tpl_vars['search_filters']) ? $_smarty_tpl->tpl_vars['search_filters']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data']['rus_taxes_payment_object_filter'] = array('id'=>"fiscal_data_1212",'type'=>"radio",'category'=>"secondary",'label'=>$_smarty_tpl->__("payment_object"),'value'=>$_smarty_tpl->tpl_vars['search']->value['fiscal_data_1212'],'is_enabled'=>true,'is_hidden'=>false,'nested_data'=>array('none'=>array('key'=>"none",'label'=>" -- ",'value'=>false,'is_checked'=>!$_smarty_tpl->tpl_vars['search']->value['fiscal_data_1212'])));
$_smarty_tpl->_assignInScope('search_filters', $_tmp_array);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fiscal_data_1212_objects']->value, 'fiscal_data_1212_name', false, 'fiscal_data_1212_type');
$_smarty_tpl->tpl_vars['fiscal_data_1212_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fiscal_data_1212_type']->value => $_smarty_tpl->tpl_vars['fiscal_data_1212_name']->value) {
$_smarty_tpl->tpl_vars['fiscal_data_1212_name']->do_else = false;
?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['search_filters']) ? $_smarty_tpl->tpl_vars['search_filters']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data']['rus_taxes_payment_object_filter']['nested_data'][$_smarty_tpl->tpl_vars['fiscal_data_1212_type']->value] = array('key'=>$_smarty_tpl->tpl_vars['fiscal_data_1212_type']->value,'label'=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['fiscal_data_1212_name']->value),'value'=>$_smarty_tpl->tpl_vars['fiscal_data_1212_type']->value,'is_checked'=>($_smarty_tpl->tpl_vars['search']->value['fiscal_data_1212'] == $_smarty_tpl->tpl_vars['fiscal_data_1212_type']->value));
$_smarty_tpl->_assignInScope('search_filters', $_tmp_array);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['search_filters']) ? $_smarty_tpl->tpl_vars['search_filters']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data']['rus_taxes_mark_code_type_filter'] = array('id'=>"mark_code_type",'type'=>"radio",'category'=>"secondary",'label'=>$_smarty_tpl->__("is_fur_ware"),'value'=>$_smarty_tpl->tpl_vars['search']->value['mark_code_type'],'is_enabled'=>true,'is_hidden'=>false,'nested_data'=>array('none'=>array('key'=>"none",'label'=>" -- ",'value'=>false,'is_checked'=>!$_smarty_tpl->tpl_vars['search']->value['mark_code_type']),'yes'=>array('key'=>"mark_code_type_yes",'label'=>$_smarty_tpl->__("yes"),'value'=>smarty_modifier_enum("YesNo::YES"),'is_checked'=>($_smarty_tpl->tpl_vars['search']->value['mark_code_type'] === smarty_modifier_enum("YesNo::YES"))),'no'=>array('key'=>"mark_code_type_no",'label'=>$_smarty_tpl->__("no"),'value'=>smarty_modifier_enum("YesNo::NO"),'is_checked'=>($_smarty_tpl->tpl_vars['search']->value['mark_code_type'] === smarty_modifier_enum("YesNo::NO")))));
$_smarty_tpl->_assignInScope('search_filters', $_tmp_array);?>

<?php $_smarty_tpl->_assignInScope('search_filters', $_smarty_tpl->tpl_vars['search_filters']->value ,false ,2);
}
}
