<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:08:10
         compiled from "C:\laragon\www\cscartplugin\design\backend\templates\views\settings_wizard\components\ssl_checking.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4861178496174174a443928-52595604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3103998d5b5ba8a10b792ca65a801efb8f16c941' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\backend\\templates\\views\\settings_wizard\\components\\ssl_checking.tpl',
      1 => 1632990726,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4861178496174174a443928-52595604',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'checking_result' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6174174a474930_33023948',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6174174a474930_33023948')) {function content_6174174a474930_33023948($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('warning_https_is_disabled','ssl_certificate','check_ssl','fail','ok'));
?>
<div id="ssl_checking">
    <?php if ($_smarty_tpl->tpl_vars['checking_result']->value=="fail") {?>
    <br>
    <div class="alert alert-block alert-error fade in">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <p><?php echo $_smarty_tpl->__("warning_https_is_disabled",array("[href]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['kb_https_failed_url']));?>
</p>
    </div>
    <?php }?>
    <br>
    <div class="control-group setting-wide">
        <label for="" class="control-label"><?php echo $_smarty_tpl->__("ssl_certificate");?>
</label>
        <div class="controls">
            <a class="btn cm-ajax" href="<?php echo htmlspecialchars(fn_url("settings_wizard.check_ssl"), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="ssl_checking"><?php echo $_smarty_tpl->__("check_ssl");?>
</a>
            <?php if ($_smarty_tpl->tpl_vars['checking_result']->value=="fail") {?>
                <span class="label label-important"><?php echo $_smarty_tpl->__("fail");?>
</span>
            <?php } elseif ($_smarty_tpl->tpl_vars['checking_result']->value=="ok") {?>
                <span class="label label-success"><?php echo $_smarty_tpl->__("ok");?>
</span>
            <?php }?>
        </div>
    </div>
<!--ssl_checking--></div><?php }} ?>
