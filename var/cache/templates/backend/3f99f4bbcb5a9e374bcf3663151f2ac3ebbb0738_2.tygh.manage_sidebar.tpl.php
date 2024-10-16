<?php
/* Smarty version 4.3.0, created on 2024-10-15 21:02:08
  from 'D:\OSPanel\domains\cscart\design\backend\templates\views\addons\components\manage\manage_sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_670eae20ec9c05_68831301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f99f4bbcb5a9e374bcf3663151f2ac3ebbb0738' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\backend\\templates\\views\\addons\\components\\manage\\manage_sidebar.tpl',
      1 => 1728457708,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/manage/addon_name_search.tpl' => 1,
    'tygh:views/addons/components/addon_categories_tree.tpl' => 1,
    'tygh:views/addons/components/manage/addons_search_form.tpl' => 1,
  ),
),false)) {
function content_670eae20ec9c05_68831301 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('categories'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"addons:manage_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"addons:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/manage/addon_name_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php if ($_smarty_tpl->tpl_vars['category_tree']->value) {?>
        <div class="sidebar-row">
            <h6><?php echo $_smarty_tpl->__("categories");?>
</h6>
            <div class="nested-tree">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addon_categories_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_all'=>false,'categories_tree'=>$_smarty_tpl->tpl_vars['category_tree']->value,'direction'=>"right"), 0, false);
?>
            </div>
        </div>
    <?php }
$_smarty_tpl->_subTemplateRender("tygh:views/addons/components/manage/addons_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"addons.manage"), 0, false);
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"addons:manage_sidebar_marketplace"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"addons:manage_sidebar_marketplace"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"addons:manage_sidebar_marketplace"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"addons:manage_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
