<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:47:37
         compiled from "C:\laragon\www\cscartplugin\design\backend\templates\views\payments\processor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73881746561742089640651-40792098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89404218d4187575c0dc3146e623903cbd2ad188' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\backend\\templates\\views\\payments\\processor.tpl',
      1 => 1632990726,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '73881746561742089640651-40792098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payment_id' => 0,
    'curl_info' => 0,
    'processor_template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6174208968d742_83740050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6174208968d742_83740050')) {function content_6174208968d742_83740050($_smarty_tpl) {?><div id="content_tab_conf_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
">

<?php echo $_smarty_tpl->tpl_vars['curl_info']->value;?>


<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['processor_template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--content_tab_conf_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>
