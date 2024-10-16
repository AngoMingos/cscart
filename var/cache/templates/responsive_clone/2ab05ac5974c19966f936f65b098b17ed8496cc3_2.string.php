<?php
/* Smarty version 4.3.0, created on 2024-10-15 19:04:24
  from '2ab05ac5974c19966f936f65b098b17ed8496cc3' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_670e92886f53b2_21053653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670e92886f53b2_21053653 (Smarty_Internal_Template $_smarty_tpl) {
?>
                                    <ul id="customer_service_links">
                                    <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars((string) fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">Ваши заказы</a></li>
                                    <?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist'] && $_smarty_tpl->tpl_vars['addons']->value['wishlist']['status'] == 'A') {?>
                                        <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars((string) fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">Отложенные</a></li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products'] == 'Y') {?>
                                        <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars((string) fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">Список сравнения</a></li>
                                    <?php }?>
                                    </ul><?php }
}
