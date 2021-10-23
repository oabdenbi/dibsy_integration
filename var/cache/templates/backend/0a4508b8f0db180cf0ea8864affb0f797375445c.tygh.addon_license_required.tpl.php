<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:14:28
         compiled from "C:\laragon\www\cscartplugin\design\backend\templates\views\addons\components\addons\addon_license_required.tpl" */ ?>
<?php /*%%SmartyHeaderCode:570021769617418c42a5a32-26551524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a4508b8f0db180cf0ea8864affb0f797375445c' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\backend\\templates\\views\\addons\\components\\addons\\addon_license_required.tpl',
      1 => 1632990726,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '570021769617418c42a5a32-26551524',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617418c430b6c8_24186983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617418c430b6c8_24186983')) {function content_617418c430b6c8_24186983($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('mve_ultimate_or_plus_license_required','mve_ultimate_license_required','ultimate_license_required'));
?>
<?php if (fn_allowed_for("MULTIVENDOR")&&fn_check_addon_snapshot($_smarty_tpl->tpl_vars['key']->value,"plus")) {?>
    <?php $_smarty_tpl->tpl_vars['license_required'] = new Smarty_variable(array('promo_popup_title'=>$_smarty_tpl->__("mve_ultimate_or_plus_license_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'href'=>fn_url("functionality_restrictions.mve_ultimate_or_plus_license_required"),'target_id'=>"content_mve_ultimate_or_plus_license_required"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['license_required'] = clone $_smarty_tpl->tpl_vars['license_required'];?>
<?php } elseif (fn_allowed_for("MULTIVENDOR")) {?>
    <?php $_smarty_tpl->tpl_vars['license_required'] = new Smarty_variable(array('promo_popup_title'=>$_smarty_tpl->__("mve_ultimate_license_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'href'=>fn_url("functionality_restrictions.mve_ultimate_license_required"),'target_id'=>"content_mve_ultimate_license_required"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['license_required'] = clone $_smarty_tpl->tpl_vars['license_required'];?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['license_required'] = new Smarty_variable(array('promo_popup_title'=>$_smarty_tpl->__("ultimate_license_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'href'=>fn_url("functionality_restrictions.ultimate_license_required"),'target_id'=>"content_ultimate_license_required"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['license_required'] = clone $_smarty_tpl->tpl_vars['license_required'];?>
<?php }?>
<?php }} ?>
