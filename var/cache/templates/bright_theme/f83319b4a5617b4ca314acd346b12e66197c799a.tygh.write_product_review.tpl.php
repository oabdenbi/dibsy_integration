<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:12:18
         compiled from "C:\laragon\www\cscartplugin\design\themes\responsive\templates\addons\product_reviews\views\product_reviews\components\write_product_review.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1651508276174184201af51-18254774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f83319b4a5617b4ca314acd346b12e66197c799a' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\themes\\responsive\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\write_product_review.tpl',
      1 => 1634997943,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1651508276174184201af51-18254774',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_id' => 0,
    'locate_to_product_review_tab' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617418420fc250_25943655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617418420fc250_25943655')) {function content_617418420fc250_25943655($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/laragon/www/cscartplugin/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.review_this_product','product_reviews.review_this_product_description','product_reviews.write_review','product_reviews.review_this_product','product_reviews.review_this_product_description','product_reviews.write_review'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<section class="ty-product-review-write-review">

    <h4 class="ty-product-review-write-review__title">
        <?php echo $_smarty_tpl->__("product_reviews.review_this_product");?>

    </h4>

    <div class="ty-product-review-write-review__description">
        <p><?php echo $_smarty_tpl->__("product_reviews.review_this_product_description");?>
</p>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/write_product_review_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->__("product_reviews.write_review"),'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'locate_to_product_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_product_review_tab']->value,'but_meta'=>"ty-btn__secondary"), 0);?>


</section>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/write_product_review.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/write_product_review.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<section class="ty-product-review-write-review">

    <h4 class="ty-product-review-write-review__title">
        <?php echo $_smarty_tpl->__("product_reviews.review_this_product");?>

    </h4>

    <div class="ty-product-review-write-review__description">
        <p><?php echo $_smarty_tpl->__("product_reviews.review_this_product_description");?>
</p>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/write_product_review_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->__("product_reviews.write_review"),'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'locate_to_product_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_product_review_tab']->value,'but_meta'=>"ty-btn__secondary"), 0);?>


</section>
<?php }?><?php }} ?>
