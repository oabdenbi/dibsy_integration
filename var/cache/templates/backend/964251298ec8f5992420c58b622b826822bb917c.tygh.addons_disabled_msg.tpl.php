<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:14:26
         compiled from "C:\laragon\www\cscartplugin\design\backend\templates\views\addons\components\manage\addons_disabled_msg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1243517393617418c2efe814-16235219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '964251298ec8f5992420c58b622b826822bb917c' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\backend\\templates\\views\\addons\\components\\manage\\addons_disabled_msg.tpl',
      1 => 1632990726,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1243517393617418c2efe814-16235219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_storefront_id' => 0,
    'runtime' => 0,
    'is_addon_management_enabled' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617418c30217e3_11236109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617418c30217e3_11236109')) {function content_617418c30217e3_11236109($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('tools_addons_disabled_msg','tools_re_enable_add_ons'));
?>
<?php $_smarty_tpl->tpl_vars['is_addon_management_enabled'] = new Smarty_variable(true, null, 0);?>
<?php if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['selected_storefront_id']->value||fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <?php $_smarty_tpl->tpl_vars['is_addon_management_enabled'] = new Smarty_variable(false, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['is_addon_management_enabled']->value&&($_smarty_tpl->tpl_vars['settings']->value['init_addons']==='none'||$_smarty_tpl->tpl_vars['settings']->value['init_addons']==='core')) {?>
    <div class="alert alert-block addon-info-msg">
        <span><?php echo $_smarty_tpl->__("tools_addons_disabled_msg");?>
</span>
        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <input type="hidden" name="dispatch" value="addons.tools">
            <button type="submit" class="btn btn-warning" name="init_addons" value="restore">
                <?php echo $_smarty_tpl->__("tools_re_enable_add_ons");?>

            </button>
        </form>
    </div>
<?php }?>

<?php }} ?>
