<?php
/* Smarty version 4.3.0, created on 2024-10-16 17:55:17
  from 'D:\OSPanel\domains\cscart\design\backend\templates\views\email_templates\preview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_670fd3d5f3c576_08556002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88646b0b385d4d646a6f4a8aab9c9531524d992a' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\backend\\templates\\views\\email_templates\\preview.tpl',
      1 => 1728457712,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670fd3d5f3c576_08556002 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('preview','subject','body'));
?>
<div title="<?php echo $_smarty_tpl->__("preview");?>
" id="preview_dialog">

<?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>
    <h4><?php echo $_smarty_tpl->__("subject");?>
:</h4>
    <div>
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview']->value->getSubject(), ENT_QUOTES, 'UTF-8');?>

    </div>
    <h4><?php echo $_smarty_tpl->__("body");?>
:</h4>
    <div>
        <?php echo $_smarty_tpl->tpl_vars['preview']->value->getBody();?>

    </div>
<?php }?>

<!--preview_dialog--></div>
<?php }
}
