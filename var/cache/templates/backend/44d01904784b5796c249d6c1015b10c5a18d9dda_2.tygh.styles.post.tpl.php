<?php
/* Smarty version 4.3.0, created on 2024-10-15 19:03:26
  from 'D:\OSPanel\domains\cscart\design\backend\templates\addons\help_center\hooks\index\styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_670e924e8e0e41_73517850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44d01904784b5796c249d6c1015b10c5a18d9dda' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\styles.post.tpl',
      1 => 1728457674,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670e924e8e0e41_73517850 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\function.style.php','function'=>'smarty_function_style',),));
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <?php echo smarty_function_style(array('src'=>"addons/help_center/styles.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/manage.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/help_center_popup.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/templates/help_center_block.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/templates/help_center_nav_chapter.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/templates/help_center_nav_item.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/templates/help_center_section.less"),$_smarty_tpl);?>

<?php }
}
}
