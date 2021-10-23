<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:14:28
         compiled from "C:\laragon\www\cscartplugin\design\backend\templates\views\addons\components\manage\addon_description.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2085607592617418c4008a59-94434220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78bfd5e57ccab50efed4e0eb94ffacc371a07fae' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\backend\\templates\\views\\addons\\components\\manage\\addon_description.tpl',
      1 => 1632990726,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2085607592617418c4008a59-94434220',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'a' => 0,
    'selected_storefront_id' => 0,
    'href' => 0,
    'addon_full_description' => 0,
    'addon_full_version_info' => 0,
    'install_datetime_full_info' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617418c407aac8_67475393',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617418c407aac8_67475393')) {function content_617418c407aac8_67475393($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:/laragon/www/cscartplugin/app/functions/smarty_plugins\\modifier.date_format.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('new_addon'));
?>
<?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable(fn_url("addons.update?addon=".((string)$_smarty_tpl->tpl_vars['a']->value['addon'])), null, 0);?>
<?php if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['selected_storefront_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['href']->value,"storefront_id=".((string)$_smarty_tpl->tpl_vars['selected_storefront_id']->value)), null, 0);?>
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/addons/addon_license_required.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="addons-addon-description">
    <div>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="row-status addons-addon-description__name addons-addon-description__name--<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['a']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 nowrap-responsive"
           title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_full_description']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['short_name'], ENT_QUOTES, 'UTF-8');?>

        </a>

        <?php if ($_smarty_tpl->tpl_vars['a']->value['recently_installed']) {?>
            <i class="icon-circle
                addons-addon-description__new-addon addons-addon-description__new-addon--<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['a']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo $_smarty_tpl->__("new_addon");?>
"
            ></i>
        <?php }?>
    </div>
    <div class="addons-addon-description__description">
        <small class="muted addons-addon-description__description-small">
            <?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['a']->value['description']), ENT_QUOTES, 'UTF-8');?>

        </small>
    </div>
    <div>
        <small class="muted" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_full_version_info']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['a']->value['version'])===null||$tmp==='' ? 0.1 : $tmp), ENT_QUOTES, 'UTF-8');?>

        </small>
        <small class="muted">•</small>
        <?php if ($_smarty_tpl->tpl_vars['a']->value['install_datetime']) {?>
            <small class="muted" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['install_datetime_full_info']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['a']->value['install_datetime'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>

            </small>
        <?php } else { ?>
            <small class="muted">—</small>
        <?php }?>

    </div>

    
    <div class="hidden">
        <?php if ($_smarty_tpl->tpl_vars['a']->value['is_long_name']) {?>
            <?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>

        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['a']->value['addon'];?>

    </div>
</div><?php }} ?>
