<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:23:07
         compiled from "C:\laragon\www\cscartplugin\design\backend\templates\addons\reward_points\hooks\addons\addon_settings.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176076850061741acb15a973-21531847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '532045acc12d647bed9b69bf2853b192422f84d8' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\backend\\templates\\addons\\reward_points\\hooks\\addons\\addon_settings.post.tpl',
      1 => 1632990726,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '176076850061741acb15a973-21531847',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_addon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61741acb18b182_85310059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61741acb18b182_85310059')) {function content_61741acb18b182_85310059($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/laragon/www/cscartplugin/app/functions/smarty_plugins\\function.script.php';
?><?php if ($_smarty_tpl->tpl_vars['_addon']->value==="reward_points") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/reward_points/index.js"),$_smarty_tpl);?>

<?php }?><?php }} ?>
