<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:09:46
         compiled from "C:\laragon\www\cscartplugin\design\backend\templates\views\settings_wizard\components\addons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:896392700617417aa7205d6-01434576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66a24221539f5512b46dede16b19b9cc75f6b4e6' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\backend\\templates\\views\\settings_wizard\\components\\addons.tpl',
      1 => 1632990726,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '896392700617417aa7205d6-01434576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wizard_addons_list' => 0,
    'addon' => 0,
    'images_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617417aa7b8700_67907236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617417aa7b8700_67907236')) {function content_617417aa7b8700_67907236($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('install'));
?>
<?php  $_smarty_tpl->tpl_vars["addon"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["addon"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wizard_addons_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["addon"]->key => $_smarty_tpl->tpl_vars["addon"]->value) {
$_smarty_tpl->tpl_vars["addon"]->_loop = true;
?>
	<div class="table-responsive-wrapper">
		<table class="table table-addons table-wizard table--relative table-responsive table-responsive-w-titles">
		    <tr>
		        <td class="addon-icon" data-th="&nbsp;">
		            <div class="bg-icon">
		                <?php if ($_smarty_tpl->tpl_vars['addon']->value['has_icon']) {?>
		                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
/icon.png" width="38" height="38" border="0" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
" >
		                <?php }?>
		            </div>
		        </td>
		        <td width="95%" data-th="&nbsp;">
		            <div class="object-group-link-wrap">
		                <span class="unedited-element block"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span><br>
		                <span class="row-status object-group-details"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['description'], ENT_QUOTES, 'UTF-8');?>
</span>
		            </div>
		        </td>
		        <td width="5%" data-th="&nbsp;">
		            <input type="hidden" name="addons[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
]" value="N">
		            <label for="addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox">
		                <input id="addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="addons[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
]" value="Y">
		                <?php echo $_smarty_tpl->__("install");?>

		            </label>     
		        </td>
		    </tr>
		</table>
	</div>
<?php } ?><?php }} ?>
