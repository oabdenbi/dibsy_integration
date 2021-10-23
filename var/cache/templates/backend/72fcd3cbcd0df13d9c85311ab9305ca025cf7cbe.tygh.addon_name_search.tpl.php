<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:14:29
         compiled from "C:\laragon\www\cscartplugin\design\backend\templates\views\addons\components\manage\addon_name_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1642584205617418c5442a60-76798026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72fcd3cbcd0df13d9c85311ab9305ca025cf7cbe' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\backend\\templates\\views\\addons\\components\\manage\\addon_name_search.tpl',
      1 => 1632990726,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1642584205617418c5442a60-76798026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_meta' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617418c5484383_72135719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617418c5484383_72135719')) {function content_617418c5484383_72135719($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','remove','addons.search_description'));
?>
<div class="sidebar-row addons-addon-name-search">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="addons_search_form" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
 form--no-margin">
        <div class="controls">
            <input type="text"
                name="q"
                id="elm_addon"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
"
                autofocus
                class="input-full input--no-margin"
                placeholder="<?php echo $_smarty_tpl->__("search");?>
"
            />
            <button type="button" class="hidden addons-addon-name-search__remove" id="elm_addon_clear" title="<?php echo $_smarty_tpl->__("remove");?>
">
                <i class="icon icon-remove"></i>
            </button>
        </div>
    </form>
    <div class="muted description">
        <?php echo $_smarty_tpl->__("addons.search_description");?>

    </div>
</div><?php }} ?>
