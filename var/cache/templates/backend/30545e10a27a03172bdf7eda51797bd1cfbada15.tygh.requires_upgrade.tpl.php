<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:23:06
         compiled from "C:\laragon\www\cscartplugin\design\backend\templates\views\addons\components\notification\requires_upgrade.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45726061161741acab704d3-23126743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30545e10a27a03172bdf7eda51797bd1cfbada15' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\backend\\templates\\views\\addons\\components\\notification\\requires_upgrade.tpl',
      1 => 1632990726,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '45726061161741acab704d3-23126743',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actual_change_log' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61741acabb04d5_70039332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61741acabb04d5_70039332')) {function content_61741acabb04d5_70039332($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('requires_upgrade','new_add_on_is_not_compatible_with_your_product','upgrade_and_update_addon'));
?>
<?php if ($_smarty_tpl->tpl_vars['actual_change_log']->value&&$_smarty_tpl->tpl_vars['actual_change_log']->value['compatibility']!==true) {?>
    <div class="alert alert-block">
        <h4>
            <?php echo $_smarty_tpl->__("requires_upgrade",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>

        </h4>

        <p>
            <?php echo $_smarty_tpl->__("new_add_on_is_not_compatible_with_your_product",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null),"[version]"=>$_smarty_tpl->tpl_vars['actual_change_log']->value['compatibility']));?>

        </p>
        <p>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"upgrade_center.manage",'but_role'=>"action",'but_meta'=>"btn-primary",'but_text'=>$_smarty_tpl->__("upgrade_and_update_addon",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)))), 0);?>

        </p>
    </div>
<?php }?>
<?php }} ?>
