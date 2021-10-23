<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:12:08
         compiled from "C:\laragon\www\cscartplugin\design\themes\responsive\templates\addons\wishlist\hooks\variations_list\list_buttons.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42378977361741838cb1571-77571668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f86694e24c563c14ef77df951fc2f6866070a7e' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\themes\\responsive\\templates\\addons\\wishlist\\hooks\\variations_list\\list_buttons.post.tpl',
      1 => 1634997944,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '42378977361741838cb1571-77571668',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_add_to_wishlist' => 0,
    'obj_prefix' => 0,
    'product' => 0,
    'but_onclick' => 0,
    'but_href' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61741838d374c3_74964491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61741838d374c3_74964491')) {function content_61741838d374c3_74964491($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/laragon/www/cscartplugin/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['show_add_to_wishlist']->value) {?>
    <div class="ty-valign-top">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_meta'=>"ty-btn__tertiary ty-add-to-wish",'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'but_role'=>"text",'but_icon'=>"ty-icon-heart",'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value), 0);?>

    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/variations_list/list_buttons.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/hooks/variations_list/list_buttons.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['show_add_to_wishlist']->value) {?>
    <div class="ty-valign-top">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_meta'=>"ty-btn__tertiary ty-add-to-wish",'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'but_role'=>"text",'but_icon'=>"ty-icon-heart",'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value), 0);?>

    </div>
<?php }?>
<?php }?><?php }} ?>
