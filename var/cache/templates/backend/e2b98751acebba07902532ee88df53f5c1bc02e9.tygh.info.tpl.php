<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:05:57
         compiled from "C:\laragon\www\cscartplugin\design\backend\templates\addons\call_requests\settings\info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:922439961617416c5752947-99250002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2b98751acebba07902532ee88df53f5c1bc02e9' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\backend\\templates\\addons\\call_requests\\settings\\info.tpl',
      1 => 1632990726,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '922439961617416c5752947-99250002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617416c5eea400_61451515',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617416c5eea400_61451515')) {function content_617416c5eea400_61451515($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('call_requests.phone_from_settings'));
?>
<div class="control-group setting-wide call_requests">

    <label for="addon_option_call_requests_phone" class="control-label "><?php echo $_smarty_tpl->__("call_requests.phone_from_settings");?>
:</label>

    <div class="controls">
        <p><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
</bdi></p>
    </div>

</div><?php }} ?>
