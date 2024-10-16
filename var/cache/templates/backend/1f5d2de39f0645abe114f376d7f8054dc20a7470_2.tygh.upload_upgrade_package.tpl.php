<?php
/* Smarty version 4.3.0, created on 2024-10-15 21:02:05
  from 'D:\OSPanel\domains\cscart\design\backend\templates\views\upgrade_center\components\upload_upgrade_package.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_670eae1d75ebc0_57904611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f5d2de39f0645abe114f376d7f8054dc20a7470' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\backend\\templates\\views\\upgrade_center\\components\\upload_upgrade_package.tpl',
      1 => 1728457724,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/fileuploader.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_670eae1d75ebc0_57904611 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('install_upgrade_package_text','upload'));
?>
<div id="upload_upgrade_package_container" class="install-addon">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="upgrade_package_upload_form" class="form-horizontal" enctype="multipart/form-data">
        <div class="install-addon-wrapper">
            <img class="install-addon-banner" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addon_box.png" width="151px" height="141px" />
            
            <p class="install-addon-text"><?php echo $_smarty_tpl->__("install_upgrade_package_text",array('[exts]'=>implode(',',$_smarty_tpl->tpl_vars['config']->value['allowed_pack_exts'])));?>
</p>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"upgrade_pack[0]"), 0, false);
?>
        </div>

        <div class="buttons-container">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[upgrade_center.upload]",'cancel_action'=>"close",'but_text'=>$_smarty_tpl->__("upload")), 0, false);
?>
        </div>
    </form>
<!--upload_upgrade_package_container--></div>
<?php }
}
