<?php
/* Smarty version 4.3.0, created on 2024-10-17 19:32:29
  from 'D:\OSPanel\domains\cscart\design\backend\templates\views\localizations\components\select.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67113c1d1e9f54_49266600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8526ab93eb85dc7eb1feaa2ac69e6d509ea42dc3' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\backend\\templates\\views\\localizations\\components\\select.tpl',
      1 => 1728457713,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67113c1d1e9f54_49266600 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('localization','multiple_selectbox_notice'));
if ($_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_localizations'] == false) {?>
	<?php $_smarty_tpl->_assignInScope('data', fn_explode_localizations($_smarty_tpl->tpl_vars['data_from']->value));?>

	<?php if ($_smarty_tpl->tpl_vars['localizations']->value) {?>
		<?php if (!$_smarty_tpl->tpl_vars['no_div']->value) {?>
			<div class="control-group">
		    <label class="control-label" for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("localization");?>
:</label>
            <div class="controls">
		<?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['disabled']->value) {?><input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="" /><?php }?>
            <select    name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[]" multiple="multiple" size="3" id="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['data_name']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>elm-disabled<?php } else { ?>span6<?php }?>" <?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>disabled="disabled"<?php }?>>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['localizations']->value, 'loc');
$_smarty_tpl->tpl_vars['loc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['loc']->value) {
$_smarty_tpl->tpl_vars['loc']->do_else = false;
?>
                <option    value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['loc']->value['localization_id'], ENT_QUOTES, 'UTF-8');?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'p_loc');
$_smarty_tpl->tpl_vars['p_loc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p_loc']->value) {
$_smarty_tpl->tpl_vars['p_loc']->do_else = false;
if ($_smarty_tpl->tpl_vars['p_loc']->value == $_smarty_tpl->tpl_vars['loc']->value['localization_id']) {?>selected="selected"<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['loc']->value['localization'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
		<?php if (!$_smarty_tpl->tpl_vars['no_div']->value) {?>
			<div class="muted description"><?php echo $_smarty_tpl->__("multiple_selectbox_notice");?>
</div>
			</div>
			</div>
		<?php }?>
	<?php }
}
}
}
