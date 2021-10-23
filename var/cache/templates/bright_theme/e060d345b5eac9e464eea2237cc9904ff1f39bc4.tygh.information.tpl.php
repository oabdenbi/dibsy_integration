<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:12:47
         compiled from "C:\laragon\www\cscartplugin\design\themes\responsive\templates\views\checkout\components\customer\information.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10816431516174185fd95e17-60356822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e060d345b5eac9e464eea2237cc9904ff1f39bc4' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\themes\\responsive\\templates\\views\\checkout\\components\\customer\\information.tpl',
      1 => 1634997910,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10816431516174185fd95e17-60356822',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'profile_fields' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6174185fe32679_40842694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6174185fe32679_40842694')) {function content_6174185fe32679_40842694($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/laragon/www/cscartplugin/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include 'C:/laragon/www/cscartplugin/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="litecheckout_step_customer_info" class="litecheckout__group">
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('profile_fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value,'section'=>smarty_modifier_enum("ProfileFieldSections::CONTACT_INFORMATION")), 0);?>

</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/customer/information.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/customer/information.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div id="litecheckout_step_customer_info" class="litecheckout__group">
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('profile_fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value,'section'=>smarty_modifier_enum("ProfileFieldSections::CONTACT_INFORMATION")), 0);?>

</div>
<?php }?><?php }} ?>
