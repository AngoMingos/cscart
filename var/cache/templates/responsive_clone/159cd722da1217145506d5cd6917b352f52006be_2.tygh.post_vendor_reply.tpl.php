<?php
/* Smarty version 4.3.0, created on 2024-10-19 11:17:43
  from 'D:\OSPanel\domains\cscart\design\themes\responsive\templates\addons\product_reviews\views\product_reviews\components\post_vendor_reply.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67136b274cdc30_39543537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '159cd722da1217145506d5cd6917b352f52006be' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\post_vendor_reply.tpl',
      1 => 1729007475,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67136b274cdc30_39543537 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.company_reply','product_reviews.admin_reply','product_reviews.company_reply','product_reviews.admin_reply'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product_review']->value['reply']) {?>
    <blockquote class="ty-product-review-post-vendor-reply ty-blockquote">
        <dl class="ty-product-review-post-vendor-reply__content ty-dl">
            <dt class="ty-product-review-post-vendor-reply__title ty-dt ty-strong">
                <?php if ($_smarty_tpl->tpl_vars['product_review']->value['reply']['reply_company']) {?>
                    <?php echo $_smarty_tpl->__("product_reviews.company_reply",array('[company_name]'=>$_smarty_tpl->tpl_vars['product_review']->value['reply']['reply_company']));?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->__("product_reviews.admin_reply");?>

                <?php }?>
            </dt>
            <dd class="ty-product-review-post-vendor-reply__body ty-dd ty-dialog-caret">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_review']->value['reply']['reply'], ENT_QUOTES, 'UTF-8');?>

            </dd>
        </dl>
    </blockquote>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post_vendor_reply.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/post_vendor_reply.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product_review']->value['reply']) {?>
    <blockquote class="ty-product-review-post-vendor-reply ty-blockquote">
        <dl class="ty-product-review-post-vendor-reply__content ty-dl">
            <dt class="ty-product-review-post-vendor-reply__title ty-dt ty-strong">
                <?php if ($_smarty_tpl->tpl_vars['product_review']->value['reply']['reply_company']) {?>
                    <?php echo $_smarty_tpl->__("product_reviews.company_reply",array('[company_name]'=>$_smarty_tpl->tpl_vars['product_review']->value['reply']['reply_company']));?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->__("product_reviews.admin_reply");?>

                <?php }?>
            </dt>
            <dd class="ty-product-review-post-vendor-reply__body ty-dd ty-dialog-caret">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_review']->value['reply']['reply'], ENT_QUOTES, 'UTF-8');?>

            </dd>
        </dl>
    </blockquote>
<?php }
}
}
}
