<?php
/* Smarty version 4.3.0, created on 2024-10-19 11:17:40
  from 'D:\OSPanel\domains\cscart\design\themes\responsive\templates\blocks\product_tabs\description.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67136b24793a06_82693864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03c638028dc4f00be37ecf86ccfe413f40949137' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\themes\\responsive\\templates\\blocks\\product_tabs\\description.tpl',
      1 => 1729007396,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67136b24793a06_82693864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\function.live_edit.php','function'=>'smarty_function_live_edit',),1=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value['full_description']) {?>
    <div <?php echo smarty_function_live_edit(array('name'=>"product:full_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['product']->value['full_description'];?>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['short_description']) {?>
    <div <?php echo smarty_function_live_edit(array('name'=>"product:short_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['product']->value['short_description'];?>
</div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_tabs/description.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_tabs/description.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['full_description']) {?>
    <div <?php echo smarty_function_live_edit(array('name'=>"product:full_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['product']->value['full_description'];?>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['short_description']) {?>
    <div <?php echo smarty_function_live_edit(array('name'=>"product:short_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['product']->value['short_description'];?>
</div>
<?php }
}
}
}
