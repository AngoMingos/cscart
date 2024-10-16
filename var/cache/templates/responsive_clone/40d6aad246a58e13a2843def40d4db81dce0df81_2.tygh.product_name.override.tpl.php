<?php
/* Smarty version 4.3.0, created on 2024-10-15 19:04:17
  from 'D:\OSPanel\domains\cscart\design\themes\responsive\templates\addons\wishlist\hooks\products\product_name.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_670e92814cda92_35766292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40d6aad246a58e13a2843def40d4db81dce0df81' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\wishlist\\hooks\\products\\product_name.override.tpl',
      1 => 1729007475,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670e92814cda92_35766292 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\function.live_edit.php','function'=>'smarty_function_live_edit',),1=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'D:\\OSPanel\\domains\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['is_wishlist']->value) {
if ($_smarty_tpl->tpl_vars['show_name']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['hide_links']->value) {?><strong><?php } else { ?><a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['combination']) {
echo "&combination=";
echo (string)$_smarty_tpl->tpl_vars['product']->value['combination'];
}
$_prefixVariable30=ob_get_clean();
echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']).$_prefixVariable30), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars((string) preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['product'] ?: ''), ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'phrase'=>$_smarty_tpl->tpl_vars['product']->value['product']),$_smarty_tpl);?>
><?php }
echo $_smarty_tpl->tpl_vars['product']->value['product'];
if ($_smarty_tpl->tpl_vars['hide_links']->value) {?></strong><?php } else { ?></a><?php }
} elseif ($_smarty_tpl->tpl_vars['show_trunc_name']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['hide_links']->value) {?><strong><?php } else { ?><a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['combination']) {
echo "&combination=";
echo (string)$_smarty_tpl->tpl_vars['product']->value['combination'];
}
$_prefixVariable31=ob_get_clean();
echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']).$_prefixVariable31), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars((string) preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['product'] ?: ''), ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'phrase'=>$_smarty_tpl->tpl_vars['product']->value['product']),$_smarty_tpl);?>
><?php }
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['product'],44,"...",true);
if ($_smarty_tpl->tpl_vars['hide_links']->value) {?></strong><?php } else { ?></a><?php }
}
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/products/product_name.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/hooks/products/product_name.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['is_wishlist']->value) {
if ($_smarty_tpl->tpl_vars['show_name']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['hide_links']->value) {?><strong><?php } else { ?><a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['combination']) {
echo "&combination=";
echo (string)$_smarty_tpl->tpl_vars['product']->value['combination'];
}
$_prefixVariable32=ob_get_clean();
echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']).$_prefixVariable32), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars((string) preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['product'] ?: ''), ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'phrase'=>$_smarty_tpl->tpl_vars['product']->value['product']),$_smarty_tpl);?>
><?php }
echo $_smarty_tpl->tpl_vars['product']->value['product'];
if ($_smarty_tpl->tpl_vars['hide_links']->value) {?></strong><?php } else { ?></a><?php }
} elseif ($_smarty_tpl->tpl_vars['show_trunc_name']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['hide_links']->value) {?><strong><?php } else { ?><a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['combination']) {
echo "&combination=";
echo (string)$_smarty_tpl->tpl_vars['product']->value['combination'];
}
$_prefixVariable33=ob_get_clean();
echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']).$_prefixVariable33), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars((string) preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['product'] ?: ''), ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'phrase'=>$_smarty_tpl->tpl_vars['product']->value['product']),$_smarty_tpl);?>
><?php }
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['product'],44,"...",true);
if ($_smarty_tpl->tpl_vars['hide_links']->value) {?></strong><?php } else { ?></a><?php }
}
}
}
}
}
