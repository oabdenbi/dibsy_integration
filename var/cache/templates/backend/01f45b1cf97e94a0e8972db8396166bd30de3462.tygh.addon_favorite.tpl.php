<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:14:27
         compiled from "C:\laragon\www\cscartplugin\design\backend\templates\views\addons\components\addons\addon_favorite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1977223231617418c38890a3-20323472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01f45b1cf97e94a0e8972db8396166bd30de3462' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\backend\\templates\\views\\addons\\components\\addons\\addon_favorite.tpl',
      1 => 1632990726,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1977223231617418c38890a3-20323472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'a' => 0,
    'result_ids' => 0,
    'new_favorite_status' => 0,
    'detailed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617418c38e2fc0_48797681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617418c38e2fc0_48797681')) {function content_617418c38e2fc0_48797681($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/laragon/www/cscartplugin/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_addon_to_favorites','remove_addon_from_favorites','favorites'));
?>
<?php if ($_smarty_tpl->tpl_vars['a']->value['is_favorite']===smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->tpl_vars['new_favorite_status'] = new Smarty_variable(smarty_modifier_enum("YesNo::NO"), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['new_favorite_status'] = new Smarty_variable(smarty_modifier_enum("YesNo::YES"), null, 0);?>
<?php }?>
<form action="<?php echo htmlspecialchars(fn_url("addons.set_favorite"), ENT_QUOTES, 'UTF-8');?>
"
    method="post"
    name="addons_set_favorite"
    class="form-edit form-horizontal cm-ajax form--no-margin"
    enctype="multipart/form-data"
>
    <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
"/>
    <input type="hidden" name="addon" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['addon'], ENT_QUOTES, 'UTF-8');?>
"/>
    <input type="hidden" name="favorite" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_favorite_status']->value, ENT_QUOTES, 'UTF-8');?>
"/>
    <input type="hidden" name="detailed" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['detailed']->value, ENT_QUOTES, 'UTF-8');?>
"/>

    <button type="submit" class="btn btn-text btn-mini">
        <i class="icon-star-empty <?php if ($_smarty_tpl->tpl_vars['a']->value['is_favorite']===smarty_modifier_enum("YesNo::YES")) {?>hidden<?php }?>"
            title="<?php echo $_smarty_tpl->__("add_addon_to_favorites");?>
"
        ></i>
        <i class="icon-star <?php if ($_smarty_tpl->tpl_vars['a']->value['is_favorite']!==smarty_modifier_enum("YesNo::YES")) {?>hidden<?php }?>"
            title="<?php echo $_smarty_tpl->__("remove_addon_from_favorites");?>
"
        ></i>
    </button>

    
    <span class="hidden">
        <?php if ($_smarty_tpl->tpl_vars['a']->value['is_favorite']===smarty_modifier_enum("YesNo::YES")) {?>
            <?php echo $_smarty_tpl->__("favorites");?>

        <?php }?>
    </span>
</form><?php }} ?>
