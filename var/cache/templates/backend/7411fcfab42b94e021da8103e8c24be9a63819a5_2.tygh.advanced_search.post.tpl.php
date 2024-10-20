<?php
/* Smarty version 4.3.0, created on 2024-10-20 19:38:11
  from 'D:\OSPanel\domains\cscart\design\backend\templates\addons\rus_taxes\hooks\products\advanced_search.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_671531f32dd995_90068522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7411fcfab42b94e021da8103e8c24be9a63819a5' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\backend\\templates\\addons\\rus_taxes\\hooks\\products\\advanced_search.post.tpl',
      1 => 1728457685,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671531f32dd995_90068522 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('payment_object','rus_taxes.available_starting_ffd_1.05','rus_taxes.available_starting_ffd_1.2','is_fur_ware'));
?>
<div class="row-fluid">
    <div class="group span6 form-horizontal">
        <div class="control-group">
            <label class="control-label" for="fiscal_data_1212"><?php echo $_smarty_tpl->__("payment_object");?>
:</label>
            <select name="fiscal_data_1212" id="fiscal_data_1212">
                <option value=""> -- </option>
                <optgroup label="<?php echo $_smarty_tpl->__("rus_taxes.available_starting_ffd_1.05");?>
">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fiscal_data_1212_objects']->value, 'fiscal_data_1212_name', false, 'fiscal_data_1212_type');
$_smarty_tpl->tpl_vars['fiscal_data_1212_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fiscal_data_1212_type']->value => $_smarty_tpl->tpl_vars['fiscal_data_1212_name']->value) {
$_smarty_tpl->tpl_vars['fiscal_data_1212_name']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['fiscal_data_1212_type']->value !== smarty_modifier_enum("FiscalData1212Objects::WITH_MARKING_CODE") && $_smarty_tpl->tpl_vars['fiscal_data_1212_type']->value !== smarty_modifier_enum("FiscalData1212Objects::EXCISABLE_WITH_MARKING_CODE")) {?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['fiscal_data_1212_type']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if (intval($_smarty_tpl->tpl_vars['search']->value['fiscal_data_1212']) === $_smarty_tpl->tpl_vars['fiscal_data_1212_type']->value) {?>selected="selected"<?php }?>>
                                <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['fiscal_data_1212_name']->value);?>

                            </option>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </optgroup>
                <optgroup label="<?php echo $_smarty_tpl->__("rus_taxes.available_starting_ffd_1.2");?>
">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fiscal_data_1212_objects']->value, 'fiscal_data_1212_name', false, 'fiscal_data_1212_type');
$_smarty_tpl->tpl_vars['fiscal_data_1212_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fiscal_data_1212_type']->value => $_smarty_tpl->tpl_vars['fiscal_data_1212_name']->value) {
$_smarty_tpl->tpl_vars['fiscal_data_1212_name']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['fiscal_data_1212_type']->value === smarty_modifier_enum("FiscalData1212Objects::WITH_MARKING_CODE") || $_smarty_tpl->tpl_vars['fiscal_data_1212_type']->value === smarty_modifier_enum("FiscalData1212Objects::EXCISABLE_WITH_MARKING_CODE")) {?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['fiscal_data_1212_type']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if (intval($_smarty_tpl->tpl_vars['search']->value['fiscal_data_1212']) === $_smarty_tpl->tpl_vars['fiscal_data_1212_type']->value) {?>selected="selected"<?php }?>>
                                <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['fiscal_data_1212_name']->value);?>

                            </option>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </optgroup>
            </select>
        </div>
        <div class="control-group">
            <label for="mark_code_type" class="control-label"><?php echo $_smarty_tpl->__("is_fur_ware");?>
:</label>
            <select name="mark_code_type" id="mark_code_type">
                <option value=""> -- </option>
                <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['mark_code_type'] === smarty_modifier_enum("YesNo::YES")) {?>selected="selected"<?php }?>>
                    <?php echo $_smarty_tpl->__('yes');?>

                </option>
                <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['mark_code_type'] === smarty_modifier_enum("YesNo::NO")) {?>selected="selected"<?php }?>>
                    <?php echo $_smarty_tpl->__('no');?>

                </option>
            </select>
        </div>
    </div>
</div>
<?php }
}
