<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:12:17
         compiled from "C:\laragon\www\cscartplugin\design\themes\responsive\templates\addons\product_reviews\views\product_reviews\components\product_stars_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1490514192617418417b3169-64193295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdd00a6f05ee1f6afe58aaf085bfefabf1d797c2' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\themes\\responsive\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\product_stars_details.tpl',
      1 => 1634997943,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1490514192617418417b3169-64193295',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'total_product_reviews' => 0,
    'ratings_stats' => 0,
    'quantity' => 0,
    'rating' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617418418997b7_46737286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617418418997b7_46737286')) {function content_617418418997b7_46737286($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/laragon/www/cscartplugin/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <section class="ty-product-review-product-stars-details">

        <?php  $_smarty_tpl->tpl_vars['rating'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rating']->_loop = false;
 $_smarty_tpl->tpl_vars['quantity'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ratings_stats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rating']->key => $_smarty_tpl->tpl_vars['rating']->value) {
$_smarty_tpl->tpl_vars['rating']->_loop = true;
 $_smarty_tpl->tpl_vars['quantity']->value = $_smarty_tpl->tpl_vars['rating']->key;
?>

            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/product_star_line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('quantity'=>$_smarty_tpl->tpl_vars['quantity']->value,'percentage'=>$_smarty_tpl->tpl_vars['rating']->value['percentage'],'count'=>$_smarty_tpl->tpl_vars['rating']->value['count']), 0);?>


        <?php } ?>

    </section>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_stars_details.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/product_stars_details.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <section class="ty-product-review-product-stars-details">

        <?php  $_smarty_tpl->tpl_vars['rating'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rating']->_loop = false;
 $_smarty_tpl->tpl_vars['quantity'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ratings_stats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rating']->key => $_smarty_tpl->tpl_vars['rating']->value) {
$_smarty_tpl->tpl_vars['rating']->_loop = true;
 $_smarty_tpl->tpl_vars['quantity']->value = $_smarty_tpl->tpl_vars['rating']->key;
?>

            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/product_star_line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('quantity'=>$_smarty_tpl->tpl_vars['quantity']->value,'percentage'=>$_smarty_tpl->tpl_vars['rating']->value['percentage'],'count'=>$_smarty_tpl->tpl_vars['rating']->value['count']), 0);?>


        <?php } ?>

    </section>
<?php }?>
<?php }?><?php }} ?>
