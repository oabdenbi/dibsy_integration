<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:11:39
         compiled from "C:\laragon\www\cscartplugin\design\themes\responsive\templates\addons\call_requests\hooks\products\add_to_cart.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6238913356174181ba04216-02712107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a67ae522e80d0a395cb4349a4287559c2f5bd8d8' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\themes\\responsive\\templates\\addons\\call_requests\\hooks\\products\\add_to_cart.post.tpl',
      1 => 1634997937,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6238913356174181ba04216-02712107',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'hide_form' => 0,
    'addons' => 0,
    'auth' => 0,
    'settings' => 0,
    'show_buy_now' => 0,
    'product' => 0,
    'option' => 0,
    'product_amount' => 0,
    'show_product_options' => 0,
    'is_not_required_option' => 0,
    'details_page' => 0,
    'obj_prefix' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6174181bdcac36_28836999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6174181bdcac36_28836999')) {function content_6174181bdcac36_28836999($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/laragon/www/cscartplugin/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include 'C:/laragon/www/cscartplugin/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_smarty_tpl->tpl_vars['hide_form']->value&&$_smarty_tpl->tpl_vars['addons']->value['call_requests']['buy_now_with_one_click']==smarty_modifier_enum("YesNo::YES")&&($_smarty_tpl->tpl_vars['auth']->value['user_id']||$_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping']=="allow_shopping")&&(($tmp = @$_smarty_tpl->tpl_vars['show_buy_now']->value)===null||$tmp==='' ? true : $tmp)) {?>
    <?php $_smarty_tpl->tpl_vars['is_not_required_option'] = new Smarty_variable(true, null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['product_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['option']->value['required']===smarty_modifier_enum("YesNo::YES")) {?>
            <?php $_smarty_tpl->tpl_vars['is_not_required_option'] = new Smarty_variable(false, null, 0);?>
            <?php break 1;?>
        <?php }?>
    <?php } ?>
    <?php if (($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']==smarty_modifier_enum("YesNo::NO")||$_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount']==smarty_modifier_enum("YesNo::YES")||($_smarty_tpl->tpl_vars['product_amount']->value>0&&$_smarty_tpl->tpl_vars['product_amount']->value>=$_smarty_tpl->tpl_vars['product']->value['min_qty'])||$_smarty_tpl->tpl_vars['product']->value['tracking']==smarty_modifier_enum("ProductTracking::DO_NOT_TRACK")||$_smarty_tpl->tpl_vars['product']->value['is_edp']==smarty_modifier_enum("YesNo::YES")||$_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions']==smarty_modifier_enum("OutOfStockActions::BUY_IN_ADVANCE"))) {?>
        <?php if ($_smarty_tpl->tpl_vars['show_product_options']->value||($_smarty_tpl->tpl_vars['is_not_required_option']->value||$_smarty_tpl->tpl_vars['details_page']->value)) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('href'=>"call_requests.request?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'link_text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'id'=>"buy_now_with_one_click_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'link_meta'=>"ty-btn ty-btn__text ty-cr-product-button cm-dialog-destroy-on-close",'content'=>'','dialog_additional_attrs'=>array("data-ca-product-id"=>$_smarty_tpl->tpl_vars['product']->value['product_id'],"data-ca-dialog-purpose"=>"call_request")), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_role'=>"text",'but_id'=>"buy_now_with_one_click_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_meta'=>"btn ty-btn ty-btn__text ty-cr-product-button"), 0);?>

        <?php }?>
    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/call_requests/hooks/products/add_to_cart.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/call_requests/hooks/products/add_to_cart.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_smarty_tpl->tpl_vars['hide_form']->value&&$_smarty_tpl->tpl_vars['addons']->value['call_requests']['buy_now_with_one_click']==smarty_modifier_enum("YesNo::YES")&&($_smarty_tpl->tpl_vars['auth']->value['user_id']||$_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping']=="allow_shopping")&&(($tmp = @$_smarty_tpl->tpl_vars['show_buy_now']->value)===null||$tmp==='' ? true : $tmp)) {?>
    <?php $_smarty_tpl->tpl_vars['is_not_required_option'] = new Smarty_variable(true, null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['product_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['option']->value['required']===smarty_modifier_enum("YesNo::YES")) {?>
            <?php $_smarty_tpl->tpl_vars['is_not_required_option'] = new Smarty_variable(false, null, 0);?>
            <?php break 1;?>
        <?php }?>
    <?php } ?>
    <?php if (($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']==smarty_modifier_enum("YesNo::NO")||$_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount']==smarty_modifier_enum("YesNo::YES")||($_smarty_tpl->tpl_vars['product_amount']->value>0&&$_smarty_tpl->tpl_vars['product_amount']->value>=$_smarty_tpl->tpl_vars['product']->value['min_qty'])||$_smarty_tpl->tpl_vars['product']->value['tracking']==smarty_modifier_enum("ProductTracking::DO_NOT_TRACK")||$_smarty_tpl->tpl_vars['product']->value['is_edp']==smarty_modifier_enum("YesNo::YES")||$_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions']==smarty_modifier_enum("OutOfStockActions::BUY_IN_ADVANCE"))) {?>
        <?php if ($_smarty_tpl->tpl_vars['show_product_options']->value||($_smarty_tpl->tpl_vars['is_not_required_option']->value||$_smarty_tpl->tpl_vars['details_page']->value)) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('href'=>"call_requests.request?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'link_text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'id'=>"buy_now_with_one_click_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'link_meta'=>"ty-btn ty-btn__text ty-cr-product-button cm-dialog-destroy-on-close",'content'=>'','dialog_additional_attrs'=>array("data-ca-product-id"=>$_smarty_tpl->tpl_vars['product']->value['product_id'],"data-ca-dialog-purpose"=>"call_request")), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_role'=>"text",'but_id'=>"buy_now_with_one_click_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_meta'=>"btn ty-btn ty-btn__text ty-cr-product-button"), 0);?>

        <?php }?>
    <?php }?>
<?php }
}?><?php }} ?>
