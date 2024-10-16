<?php
/* Smarty version 4.3.0, created on 2024-10-15 20:22:04
  from 'D:\OSPanel\domains\cscart\design\backend\templates\common\theme_editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_670ea4bc426218_36093360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccde646a98a20ab01f50c6109ceb5713b5306626' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\backend\\templates\\common\\theme_editor.tpl',
      1 => 1728457694,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670ea4bc426218_36093360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/lib/ace/ace.js"),$_smarty_tpl);?>

<div class="theme-editor-container" id="theme_editor">
<div class="theme-editor"></div>
<?php echo '<script'; ?>
>
(function(_, $) {
    $.extend(_, {
        query_string: encodeURIComponent('<?php echo strtr((string)$_SERVER['QUERY_STRING'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
')
    });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/tygh/theme_editor.js"),$_smarty_tpl);?>

<!--theme_editor--></div>
<?php }
}
