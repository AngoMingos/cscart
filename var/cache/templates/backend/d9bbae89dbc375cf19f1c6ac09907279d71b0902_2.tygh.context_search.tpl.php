<?php
/* Smarty version 4.3.0, created on 2024-10-20 19:38:14
  from 'D:\OSPanel\domains\cscart\design\backend\templates\components\search_filters\context_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_671531f6a6e903_64963268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9bbae89dbc375cf19f1c6ac09907279d71b0902' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\backend\\templates\\components\\search_filters\\context_search.tpl',
      1 => 1728457696,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671531f6a6e903_64963268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('search'));
if ($_smarty_tpl->tpl_vars['context_search']->value) {
$_smarty_tpl->_assignInScope('label', (($tmp = $_smarty_tpl->tpl_vars['context_search']->value['label'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("search") ?? null : $tmp));
$_smarty_tpl->_assignInScope('form_id', (($tmp = $_smarty_tpl->tpl_vars['context_search']->value['form_id'] ?? null)===null||$tmp==='' ? "search_form" ?? null : $tmp));
$_smarty_tpl->_assignInScope('name', (($tmp = $_smarty_tpl->tpl_vars['context_search']->value['name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['context_search']->value['id'] ?? null : $tmp));?><div class="context-search"><label class="context-search__label input-prepend"><input type="search" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['context_search']->value['id'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="input-fill context-search__input" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['context_search']->value['value']) {?>value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['context_search']->value['value'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}?>placeholder="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
"/><span class="add-on context-search__addon"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"search"),$_smarty_tpl);?>
</span></label></div><?php }
}
}
