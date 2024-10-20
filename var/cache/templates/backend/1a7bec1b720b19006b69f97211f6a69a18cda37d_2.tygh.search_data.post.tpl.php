<?php
/* Smarty version 4.3.0, created on 2024-10-20 19:38:13
  from 'D:\OSPanel\domains\cscart\design\backend\templates\addons\tags\hooks\products\search_data.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_671531f50e3b36_23566773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a7bec1b720b19006b69f97211f6a69a18cda37d' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\backend\\templates\\addons\\tags\\hooks\\products\\search_data.post.tpl',
      1 => 1728457688,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671531f50e3b36_23566773 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('tag'));
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR")) {?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['search_filters']) ? $_smarty_tpl->tpl_vars['search_filters']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data']['tag'] = array('id'=>"tag",'type'=>"input",'category'=>"secondary",'label'=>$_smarty_tpl->__("tag"),'value'=>$_smarty_tpl->tpl_vars['search']->value['tag']);
$_smarty_tpl->_assignInScope('search_filters', $_tmp_array);?>

        <?php $_smarty_tpl->_assignInScope('search_filters', $_smarty_tpl->tpl_vars['search_filters']->value ,false ,2);
}
}
}
