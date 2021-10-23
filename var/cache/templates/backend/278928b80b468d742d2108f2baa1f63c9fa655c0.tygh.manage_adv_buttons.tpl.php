<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:14:30
         compiled from "C:\laragon\www\cscartplugin\design\backend\templates\views\addons\components\manage\manage_adv_buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1805725148617418c6269af6-92332254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '278928b80b468d742d2108f2baa1f63c9fa655c0' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\backend\\templates\\views\\addons\\components\\manage\\manage_adv_buttons.tpl',
      1 => 1632990726,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1805725148617418c6269af6-92332254',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617418c62a6306_61589504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617418c62a6306_61589504')) {function content_617418c62a6306_61589504($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/laragon/www/cscartplugin/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('visit_marketplace'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons:adv_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons:adv_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url(((string)$_smarty_tpl->tpl_vars['config']->value['resources']['marketplace_url'])),'but_text'=>$_smarty_tpl->__("visit_marketplace"),'but_meta'=>"btn btn-primary",'but_role'=>"action",'but_target'=>"_blank"), 0);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons:adv_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
