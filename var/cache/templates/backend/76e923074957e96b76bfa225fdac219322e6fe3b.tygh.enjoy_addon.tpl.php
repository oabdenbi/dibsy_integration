<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:23:08
         compiled from "C:\laragon\www\cscartplugin\design\backend\templates\views\addons\components\detailed_page\sidebar\enjoy_addon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151993896461741acc244bb5-69123580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76e923074957e96b76bfa225fdac219322e6fe3b' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\backend\\templates\\views\\addons\\components\\detailed_page\\sidebar\\enjoy_addon.tpl',
      1 => 1632990726,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '151993896461741acc244bb5-69123580',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon' => 0,
    'personal_review' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61741acc26e793_61372680',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61741acc26e793_61372680')) {function content_61741acc26e793_61372680($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['addon']->value['is_core_addon']&&$_smarty_tpl->tpl_vars['addon']->value['identified']&&!$_smarty_tpl->tpl_vars['personal_review']->value) {?>
    <div class="sidebar-row marketplace">
        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/enjoying_addon_notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"addons_write_review_sidebar"), 0);?>

    </div>
<?php }?>
<?php }} ?>
