<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:23:07
         compiled from "C:\laragon\www\cscartplugin\design\backend\templates\views\addons\components\rating\addon_rating_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107336069561741acba800c4-44841469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b4261858153a465394ff85f3c99ce1075e321ff' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\backend\\templates\\views\\addons\\components\\rating\\addon_rating_overview.tpl',
      1 => 1632990726,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '107336069561741acba800c4-44841469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total_addon_reviews' => 0,
    'average_rating' => 0,
    'ratings_stats' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61741acbaacce2_58379139',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61741acbaacce2_58379139')) {function content_61741acbaacce2_58379139($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['total_addon_reviews']->value) {?>
    <section class="cs-addons-rating-addon-rating-overview well">
        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/stars_with_text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'size'=>"xlarge"), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/stars_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ratings_stats'=>$_smarty_tpl->tpl_vars['ratings_stats']->value), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('total_addon_reviews'=>$_smarty_tpl->tpl_vars['total_addon_reviews']->value), 0);?>


    </section>
<?php }?>
<?php }} ?>
