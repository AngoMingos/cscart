<?php
/* Smarty version 4.3.0, created on 2024-10-20 19:40:11
  from 'D:\OSPanel\domains\cscart\design\backend\templates\addons\blog\hooks\block_manager\update_block_picker_extra_url.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6715326b6a18a0_96019591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa7889ec1759b0595bbc06a1c0d1ee513bea726c' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\backend\\templates\\addons\\blog\\hooks\\block_manager\\update_block_picker_extra_url.override.tpl',
      1 => 1728457670,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6715326b6a18a0_96019591 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['customer_dispatch'] == "pages.view?page_type=".((string)(defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null))) {?>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['picker_params']['extra_url'], ENT_QUOTES, 'UTF-8');?>
&page_type=<?php echo htmlspecialchars((string) (defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null), ENT_QUOTES, 'UTF-8');?>

<?php }
}
}
