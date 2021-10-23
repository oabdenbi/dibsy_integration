<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:12:06
         compiled from "C:\laragon\www\cscartplugin\design\themes\responsive\templates\addons\social_buttons\providers\twitter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1858359734617418361d39b4-64146696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8aef3ad671f180097bdb4e12bc3c84b1c84a3c7b' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\themes\\responsive\\templates\\addons\\social_buttons\\providers\\twitter.tpl',
      1 => 1634997922,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1858359734617418361d39b4-64146696',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'provider_settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617418362b9db7_64402795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617418362b9db7_64402795')) {function content_617418362b9db7_64402795($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/laragon/www/cscartplugin/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['twitter_enable']=="Y"&&$_smarty_tpl->tpl_vars['provider_settings']->value['twitter']['data']) {?>
<a href="https://twitter.com/share" class="twitter-share-button" <?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['twitter']['data'];?>
>Tweet</a>
<?php echo '<script'; ?>
 class="cm-ajax-force">
(function(_, $) {
    $(document).ready(function () {
        if($(".twitter-share-button").length > 0){
            if (typeof (twttr) != 'undefined') {
                twttr.widgets.load();
            } else {
                $.getScript('//platform.twitter.com/widgets.js');
            }
        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/providers/twitter.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/social_buttons/providers/twitter.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['twitter_enable']=="Y"&&$_smarty_tpl->tpl_vars['provider_settings']->value['twitter']['data']) {?>
<a href="https://twitter.com/share" class="twitter-share-button" <?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['twitter']['data'];?>
>Tweet</a>
<?php echo '<script'; ?>
 class="cm-ajax-force">
(function(_, $) {
    $(document).ready(function () {
        if($(".twitter-share-button").length > 0){
            if (typeof (twttr) != 'undefined') {
                twttr.widgets.load();
            } else {
                $.getScript('//platform.twitter.com/widgets.js');
            }
        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }?>
<?php }?><?php }} ?>
