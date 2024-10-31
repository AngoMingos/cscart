<?php
/* Smarty version 4.3.0, created on 2024-10-27 22:51:21
  from 'D:\OSPanel\domains\cscart\design\themes\responsive\templates\blocks\categories\categories_dropdown_horizontal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_671e99b9aeb546_34447039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1b7ea957d029bf715aa2b94ac547bdd4af725e9' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\themes\\responsive\\templates\\blocks\\categories\\categories_dropdown_horizontal.tpl',
      1 => 1729113543,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/topmenu_dropdown.tpl' => 2,
  ),
),false)) {
function content_671e99b9aeb546_34447039 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_subTemplateRender("tygh:blocks/topmenu_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['items']->value,'name'=>"category",'childs'=>"subcategories"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/categories/categories_dropdown_horizontal.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/categories/categories_dropdown_horizontal.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_subTemplateRender("tygh:blocks/topmenu_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['items']->value,'name'=>"category",'childs'=>"subcategories"), 0, true);
}
}
}
