<?php
/* Smarty version 4.3.0, created on 2024-10-27 22:51:31
  from 'D:\OSPanel\domains\cscart\design\themes\responsive\templates\addons\newsletters\addons\gdpr\hooks\newsletters\email_subscription_block.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_671e99c39a3ed6_65324398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '006a4ea271ec7eaafb4fd6fb265d1636bd58bebd' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\newsletters\\addons\\gdpr\\hooks\\newsletters\\email_subscription_block.post.tpl',
      1 => 1729113543,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/gdpr/componentes/agreement_checkbox.tpl' => 2,
  ),
),false)) {
function content_671e99c39a3ed6_65324398 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_subTemplateRender("tygh:addons/gdpr/componentes/agreement_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"newsletters_subscribe",'gdpr_target_elem'=>"subscr_email".((string)$_smarty_tpl->tpl_vars['block']->value['block_id']),'agreement_required'=>true,'hidden'=>true,'link_popup_class'=>"ty-social-link__text",'target_node'=>"#subscr_email".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/newsletters/addons/gdpr/hooks/newsletters/email_subscription_block.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/newsletters/addons/gdpr/hooks/newsletters/email_subscription_block.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_subTemplateRender("tygh:addons/gdpr/componentes/agreement_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"newsletters_subscribe",'gdpr_target_elem'=>"subscr_email".((string)$_smarty_tpl->tpl_vars['block']->value['block_id']),'agreement_required'=>true,'hidden'=>true,'link_popup_class'=>"ty-social-link__text",'target_node'=>"#subscr_email".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])), 0, true);
}
}
}
