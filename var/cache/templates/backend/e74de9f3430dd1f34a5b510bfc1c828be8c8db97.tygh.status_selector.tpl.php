<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:13:49
         compiled from "C:\laragon\www\cscartplugin\design\backend\templates\components\context_menu\status_selector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3005296946174189d4e2d58-59997003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e74de9f3430dd1f34a5b510bfc1c828be8c8db97' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\backend\\templates\\components\\context_menu\\status_selector.tpl',
      1 => 1632990726,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3005296946174189d4e2d58-59997003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'statuses' => 0,
    'params' => 0,
    'elms_container' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6174189d5173a2_14633363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6174189d5173a2_14633363')) {function content_6174189d5173a2_14633363($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('selected'));
?>


<li class="btn bulk-edit__btn bulk-edit__btn--check-items">
    <input class="bulk-edit__btn-content--checkbox hidden bulkedit-disabler"
           type="checkbox"
           checked
           data-ca-bulkedit-enable="[data-ca-bulkedit-default-object=true]"
           data-ca-bulkedit-disable="[data-ca-bulkedit-expanded-object=true]"
    />
    <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown">
        <span data-ca-longtap-selected-counter="true">0</span> <span class="mobile-hide"><?php echo $_smarty_tpl->__("selected");?>
</span> <span class="caret mobile-hide"></span>
    </span>

    <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dropdown_menu_class'=>"cm-check-items",'wrap_select_actions_into_dropdown'=>true,'check_statuses'=>$_smarty_tpl->tpl_vars['statuses']->value,'is_check_all_shown'=>(($tmp = @$_smarty_tpl->tpl_vars['params']->value['is_check_all_shown'])===null||$tmp==='' ? false : $tmp),'elms_container'=>$_smarty_tpl->tpl_vars['elms_container']->value), 0);?>

</li><?php }} ?>
