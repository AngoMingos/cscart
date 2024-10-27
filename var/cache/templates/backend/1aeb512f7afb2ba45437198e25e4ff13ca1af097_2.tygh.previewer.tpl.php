<?php
/* Smarty version 4.3.0, created on 2024-10-27 22:50:37
  from 'D:\OSPanel\domains\cscart\design\backend\templates\common\previewer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_671e998d31e4f9_38219929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1aeb512f7afb2ba45437198e25e4ff13ca1af097' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\backend\\templates\\common\\previewer.tpl',
      1 => 1729113543,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671e998d31e4f9_38219929 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);
}
}
