<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:12:02
         compiled from "C:\laragon\www\cscartplugin\design\themes\responsive\templates\addons\product_reviews\views\product_reviews\components\product_reviews_total_reviews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113180180861741832300303-42896599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a320e7c5817a8f5ff644530c070392d710b7a3b8' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\themes\\responsive\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\product_reviews_total_reviews.tpl',
      1 => 1634997943,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '113180180861741832300303-42896599',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'total_product_reviews' => 0,
    'scroll_to_elm' => 0,
    'external_click_id' => 0,
    'secondary' => 0,
    'meta' => 0,
    'link' => 0,
    'product' => 0,
    'button' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6174183243e3d7_68372122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6174183243e3d7_68372122')) {function content_6174183243e3d7_68372122($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/laragon/www/cscartplugin/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.reviews','product_reviews.reviews'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['total_product_reviews']->value>0) {?>

    <?php $_smarty_tpl->tpl_vars['scroll_to_elm'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['scroll_to_elm']->value)===null||$tmp==='' ? "content_product_reviews" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['external_click_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['external_click_id']->value)===null||$tmp==='' ? "product_reviews" : $tmp), null, 0);?>
    
    <?php if ($_smarty_tpl->tpl_vars['secondary']->value) {?>
        <?php $_smarty_tpl->tpl_vars['meta'] = new Smarty_variable("ty-muted ".((string)$_smarty_tpl->tpl_vars['meta']->value), null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['link']->value===true) {?>
        <?php $_smarty_tpl->tpl_vars['link'] = new Smarty_variable("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&selected_section=product_reviews#product_reviews", null, 0);?>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>
        <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['link']->value), ENT_QUOTES, 'UTF-8');?>
"
            class="ty-product-review-reviews-total-reviews ty-product-review-reviews-total-reviews--link <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
    <?php } elseif ($_smarty_tpl->tpl_vars['button']->value) {?>
        <button type="button"
            class="ty-product-review-reviews-total-reviews ty-product-review-reviews-total-reviews--button
                ty-btn-reset
                cm-external-click <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>

            "
            data-ca-scroll="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scroll_to_elm']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
    <?php } else { ?>
        <span class="ty-product-review-reviews-total-reviews ty-product-review-reviews-total-reviews--text <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>

        <?php echo $_smarty_tpl->__("product_reviews.reviews",array($_smarty_tpl->tpl_vars['total_product_reviews']->value));?>


    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>
        </a>
    <?php } elseif ($_smarty_tpl->tpl_vars['button']->value) {?>
        </button>
    <?php } else { ?>
        </span>
    <?php }?>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_reviews_total_reviews.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/product_reviews_total_reviews.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['total_product_reviews']->value>0) {?>

    <?php $_smarty_tpl->tpl_vars['scroll_to_elm'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['scroll_to_elm']->value)===null||$tmp==='' ? "content_product_reviews" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['external_click_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['external_click_id']->value)===null||$tmp==='' ? "product_reviews" : $tmp), null, 0);?>
    
    <?php if ($_smarty_tpl->tpl_vars['secondary']->value) {?>
        <?php $_smarty_tpl->tpl_vars['meta'] = new Smarty_variable("ty-muted ".((string)$_smarty_tpl->tpl_vars['meta']->value), null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['link']->value===true) {?>
        <?php $_smarty_tpl->tpl_vars['link'] = new Smarty_variable("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&selected_section=product_reviews#product_reviews", null, 0);?>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>
        <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['link']->value), ENT_QUOTES, 'UTF-8');?>
"
            class="ty-product-review-reviews-total-reviews ty-product-review-reviews-total-reviews--link <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
    <?php } elseif ($_smarty_tpl->tpl_vars['button']->value) {?>
        <button type="button"
            class="ty-product-review-reviews-total-reviews ty-product-review-reviews-total-reviews--button
                ty-btn-reset
                cm-external-click <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>

            "
            data-ca-scroll="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scroll_to_elm']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
    <?php } else { ?>
        <span class="ty-product-review-reviews-total-reviews ty-product-review-reviews-total-reviews--text <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>

        <?php echo $_smarty_tpl->__("product_reviews.reviews",array($_smarty_tpl->tpl_vars['total_product_reviews']->value));?>


    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>
        </a>
    <?php } elseif ($_smarty_tpl->tpl_vars['button']->value) {?>
        </button>
    <?php } else { ?>
        </span>
    <?php }?>

<?php }?>
<?php }?><?php }} ?>
