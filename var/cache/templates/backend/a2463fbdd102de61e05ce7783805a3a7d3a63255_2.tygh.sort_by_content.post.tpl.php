<?php
/* Smarty version 4.3.0, created on 2024-10-20 19:38:12
  from 'D:\OSPanel\domains\cscart\design\backend\templates\addons\bestsellers\hooks\products\sort_by_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_671531f4e21ae2_63033180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2463fbdd102de61e05ce7783805a3a7d3a63255' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\backend\\templates\\addons\\bestsellers\\hooks\\products\\sort_by_content.post.tpl',
      1 => 1728457670,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671531f4e21ae2_63033180 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('bestsellers'));
$_tmp_array = isset($_smarty_tpl->tpl_vars['sort_by_content']) ? $_smarty_tpl->tpl_vars['sort_by_content']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['bestsellers'] = array('id'=>"bestsellers",'label'=>$_smarty_tpl->__("bestsellers"),'selected'=>($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "bestsellers"));
$_smarty_tpl->_assignInScope('sort_by_content', $_tmp_array);?>

<?php $_smarty_tpl->_assignInScope('sort_by_content', $_smarty_tpl->tpl_vars['sort_by_content']->value ,false ,2);?>

<?php }
}
