<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:13:22
         compiled from "C:\laragon\www\cscartplugin\design\backend\templates\addons\store_locator\addons\geo_maps\hooks\store_locator\select_coordinates.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2134381791617418827d5e99-01964181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ec0a963b3386dbc9b71d34cb865ed8e7c4bd1e1' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\backend\\templates\\addons\\store_locator\\addons\\geo_maps\\hooks\\store_locator\\select_coordinates.post.tpl',
      1 => 1632990726,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2134381791617418827d5e99-01964181',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61741882806e49_14296404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61741882806e49_14296404')) {function content_61741882806e49_14296404($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('select'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("select"),'but_target_id'=>"map_picker",'but_role'=>"action",'but_meta'=>"btn-primary cm-dialog-opener cm-hide-with-inputs",'but_id'=>"store_locator_picker_opener"), 0);?>
<?php }} ?>
