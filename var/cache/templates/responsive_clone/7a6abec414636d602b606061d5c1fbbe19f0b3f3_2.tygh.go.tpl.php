<?php
/* Smarty version 4.3.0, created on 2024-10-15 19:04:07
  from 'D:\OSPanel\domains\cscart\design\themes\responsive\templates\buttons\go.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_670e9277e1ae58_82936262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a6abec414636d602b606061d5c1fbbe19f0b3f3' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\themes\\responsive\\templates\\buttons\\go.tpl',
      1 => 1729007396,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670e9277e1ae58_82936262 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><button title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['alt']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-btn-go" type="submit"><?php if ($_smarty_tpl->tpl_vars['but_text']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');
} else {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-dir ty-btn-go__icon"),$_smarty_tpl);
}?></button>
<input type="hidden" name="dispatch" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/go.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/go.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><button title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['alt']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-btn-go" type="submit"><?php if ($_smarty_tpl->tpl_vars['but_text']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');
} else {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-dir ty-btn-go__icon"),$_smarty_tpl);
}?></button>
<input type="hidden" name="dispatch" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }
}
}
