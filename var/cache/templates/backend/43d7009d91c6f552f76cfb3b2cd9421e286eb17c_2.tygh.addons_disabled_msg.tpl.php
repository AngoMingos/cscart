<?php
/* Smarty version 4.3.0, created on 2024-10-15 21:02:07
  from 'D:\OSPanel\domains\cscart\design\backend\templates\views\addons\components\manage\addons_disabled_msg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_670eae1f0cf925_84306155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43d7009d91c6f552f76cfb3b2cd9421e286eb17c' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\backend\\templates\\views\\addons\\components\\manage\\addons_disabled_msg.tpl',
      1 => 1728457708,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670eae1f0cf925_84306155 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('tools_addons_disabled_msg','tools_re_enable_add_ons'));
$_smarty_tpl->_assignInScope('is_addon_management_enabled', true);
if (fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['selected_storefront_id']->value || fn_allowed_for("ULTIMATE") && $_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <?php $_smarty_tpl->_assignInScope('is_addon_management_enabled', false);
}?>

<?php if ($_smarty_tpl->tpl_vars['is_addon_management_enabled']->value && ($_smarty_tpl->tpl_vars['settings']->value['init_addons'] === 'none' || $_smarty_tpl->tpl_vars['settings']->value['init_addons'] === 'core')) {?>
    <div class="alert alert-block addon-info-msg">
        <span><?php echo $_smarty_tpl->__("tools_addons_disabled_msg");?>
</span>
        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <input type="hidden" name="dispatch" value="addons.tools">
            <button type="submit" class="btn btn-warning" name="init_addons" value="restore">
                <?php echo $_smarty_tpl->__("tools_re_enable_add_ons");?>

            </button>
        </form>
    </div>
<?php }?>

<?php }
}
