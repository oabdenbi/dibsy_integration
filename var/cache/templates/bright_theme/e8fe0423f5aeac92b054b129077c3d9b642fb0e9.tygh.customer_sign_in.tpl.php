<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:12:43
         compiled from "C:\laragon\www\cscartplugin\design\themes\responsive\templates\blocks\lite_checkout\customer_sign_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9299533736174185bad57b1-55773619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8fe0423f5aeac92b054b129077c3d9b642fb0e9' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\themes\\responsive\\templates\\blocks\\lite_checkout\\customer_sign_in.tpl',
      1 => 1634997909,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9299533736174185bad57b1-55773619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6174185bafb2c4_68978536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6174185bafb2c4_68978536')) {function content_6174185bafb2c4_68978536($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/laragon/www/cscartplugin/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo $_smarty_tpl->getSubTemplate ("views/checkout/components/customer/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('block_title'=>$_smarty_tpl->tpl_vars['block']->value['name']), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/lite_checkout/customer_sign_in.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/lite_checkout/customer_sign_in.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo $_smarty_tpl->getSubTemplate ("views/checkout/components/customer/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('block_title'=>$_smarty_tpl->tpl_vars['block']->value['name']), 0);?>

<?php }?><?php }} ?>
