<?php
/* Smarty version 4.3.0, created on 2024-10-15 19:08:05
  from 'D:\OSPanel\domains\cscart\design\backend\templates\views\block_manager\components\device_switch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_670e9365045ec5_50941270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97a9ca86180d0c7d1efcf395179d1d3b3244971e' => 
    array (
      0 => 'D:\\OSPanel\\domains\\cscart\\design\\backend\\templates\\views\\block_manager\\components\\device_switch.tpl',
      1 => 1728457709,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670e9365045ec5_50941270 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('block_manager.view_layout.phone','block_manager.view_layout.tablet','block_manager.view_layout.desktop','block_manager.view_layout.reset_filter'));
ob_start();
echo $_smarty_tpl->__("block_manager.view_layout.phone");
$_prefixVariable5=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("block_manager.view_layout.tablet");
$_prefixVariable6=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("block_manager.view_layout.desktop");
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->_assignInScope('devices', array(''=>array("name"=>$_smarty_tpl->__("block_manager.view_layout.reset_filter"),"icon_class"=>'',"btn_class"=>"btn btn-primary cm-reset-device-availability"),"phone"=>array("name"=>"<span class=\"mobile-hidden\">".$_prefixVariable5."</span>","icon_class"=>"icon-mobile-phone","btn_class"=>"btn cm-switch-device-availability"),"tablet"=>array("name"=>"<span class=\"mobile-hidden\">".$_prefixVariable6."</span>","icon_class"=>"icon-tablet","btn_class"=>"btn cm-switch-device-availability"),"desktop"=>array("name"=>"<span class=\"mobile-hidden\">".$_prefixVariable7."</span>","icon_class"=>"icon-desktop","btn_class"=>"btn cm-switch-device-availability")));?>

<div class="device-switch-wrap" id="device_switch">
    <div class="btn-group device-switch">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['devices']->value, 'device', false, 'device_id');
$_smarty_tpl->tpl_vars['device']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['device_id']->value => $_smarty_tpl->tpl_vars['device']->value) {
$_smarty_tpl->tpl_vars['device']->do_else = false;
?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'text'=>$_smarty_tpl->tpl_vars['device']->value['name'],'icon'=>$_smarty_tpl->tpl_vars['device']->value['icon_class'],'icon_first'=>true,'raw'=>true,'class'=>"device-switch__device ".((string)$_smarty_tpl->tpl_vars['device']->value['btn_class']),'data'=>array("data-ca-device-availability-device"=>$_smarty_tpl->tpl_vars['device_id']->value)), true);?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<!--device_switch--></div>
<?php }
}
