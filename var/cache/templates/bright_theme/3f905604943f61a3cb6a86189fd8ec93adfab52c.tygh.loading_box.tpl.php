<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:08:17
         compiled from "C:\laragon\www\cscartplugin\design\themes\responsive\templates\common\loading_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168665931661741751c68c87-71485834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f905604943f61a3cb6a86189fd8ec93adfab52c' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\themes\\responsive\\templates\\common\\loading_box.tpl',
      1 => 1634997910,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '168665931661741751c68c87-71485834',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61741751cade71_66623633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61741751cade71_66623633')) {function content_61741751cade71_66623633($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/laragon/www/cscartplugin/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="ajax_overlay" class="ty-ajax-overlay"></div>
<div id="ajax_loading_box" class="ty-ajax-loading-box"></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/loading_box.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/loading_box.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div id="ajax_overlay" class="ty-ajax-overlay"></div>
<div id="ajax_loading_box" class="ty-ajax-loading-box"></div>
<?php }?><?php }} ?>
