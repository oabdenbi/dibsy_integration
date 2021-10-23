<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:47:37
         compiled from "C:\laragon\www\cscartplugin\design\backend\templates\views\payments\components\cc_processors\dibs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1973116472617420897106a7-41024076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd6145b987fd07248b8ebe22638c41a73fbf482a' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\backend\\templates\\views\\payments\\components\\cc_processors\\dibs.tpl',
      1 => 1632990726,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1973116472617420897106a7-41024076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'processor_params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617420897c1105_01998813',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617420897c1105_01998813')) {function content_617420897c1105_01998813($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('merchant_id','key1_for_md5','key2_for_md5','test_live_mode','test','live','currency','currency_code_dkk','currency_code_eur','currency_code_usd','currency_code_gbp','currency_code_sek','currency_code_aud','currency_code_cad','currency_code_isk','currency_code_jpy','currency_code_nzd','currency_code_nok','currency_code_chf','currency_code_try','default_language','danish','swedish','norway','english','dutch','german','french','finnish','spanish','italian','faroese','polish','color','decorator','skiplastpage','yes','no','order_prefix'));
?>
<div class="control-group">
    <label class="control-label" for="merchant_id"><?php echo $_smarty_tpl->__("merchant_id");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][merchant]" id="merchant_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['merchant'], ENT_QUOTES, 'UTF-8');?>
"  size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="key1"><?php echo $_smarty_tpl->__("key1_for_md5");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][key1]" id="key1" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['key1'], ENT_QUOTES, 'UTF-8');?>
"  size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="key2"><?php echo $_smarty_tpl->__("key2_for_md5");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][key2]" id="key2" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['key2'], ENT_QUOTES, 'UTF-8');?>
"  size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="test"><?php echo $_smarty_tpl->__("test_live_mode");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][test]" id="test">
            <option value="test"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['test']=='test') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("test");?>
</option>
            <option value="live"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['test']=='live') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("live");?>
</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="currency"><?php echo $_smarty_tpl->__("currency");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][currency]" id="currency">
            <option value="208"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=='208') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_dkk");?>
</option>
            <option value="978"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=='978') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_eur");?>
</option>
            <option value="840"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=='840') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_usd");?>
</option>
            <option value="826"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=='826') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_gbp");?>
</option>
            <option value="752"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=='752') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_sek");?>
</option>
            <option value="036"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=='036') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_aud");?>
</option>
            <option value="124"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=='124') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_cad");?>
</option>
            <option value="352"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=='352') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_isk");?>
</option>
            <option value="392"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=='392') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_jpy");?>
</option>
            <option value="554"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=='554') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_nzd");?>
</option>
            <option value="578"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=='578') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_nok");?>
</option>
            <option value="756"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=='756') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_chf");?>
</option>
            <option value="949"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=='949') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_try");?>
</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="lang"><?php echo $_smarty_tpl->__("default_language");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][lang]" id="lang">
            <option value="da"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['lang']=='da') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("danish");?>
</option>
            <option value="sv"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['lang']=='sv') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("swedish");?>
</option>
            <option value="no"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['lang']=='no') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("norway");?>
</option>
            <option value="en"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['lang']=='en') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("english");?>
</option>
            <option value="nl"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['lang']=='nl') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("dutch");?>
</option>
            <option value="de"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['lang']=='de') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("german");?>
</option>
            <option value="fr"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['lang']=='fr') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("french");?>
</option>
            <option value="fi"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['lang']=='fi') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("finnish");?>
</option>
            <option value="es"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['lang']=='es') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("spanish");?>
</option>
            <option value="it"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['lang']=='it') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("italian");?>
</option>
            <option value="fo"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['lang']=='fo') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("faroese");?>
</option>
            <option value="pl"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['lang']=='pl') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("polish");?>
</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="color"><?php echo $_smarty_tpl->__("color");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][color]" id="color">
            <option value="blue"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['color']=='blue') {?> selected="selected"<?php }?>>Blue</option>
            <option value="sand"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['color']=='sand') {?> selected="selected"<?php }?>>Sand</option>
            <option value="grey"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['color']=='grey') {?> selected="selected"<?php }?>>Grey</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="decorator"><?php echo $_smarty_tpl->__("decorator");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][decorator]" id="decorator">
            <option value="default"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['decorator']=='default') {?> selected="selected"<?php }?>>Default</option>
            <option value="basal"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['decorator']=='basal') {?> selected="selected"<?php }?>>Basal</option>
            <option value="rich"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['decorator']=='rich') {?> selected="selected"<?php }?>>Rich</option>
            <option value="responsive"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['decorator']=='responsive') {?> selected="selected"<?php }?>>Responsive</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="skiplastpage"><?php echo $_smarty_tpl->__("skiplastpage");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][skiplastpage]" id="skiplastpage">
            <option value="yes"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['skiplastpage']=='yes') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yes");?>
</option>
            <option value="no"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['skiplastpage']=='no') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("no");?>
</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="order_prefix"><?php echo $_smarty_tpl->__("order_prefix");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][order_prefix]" id="order_prefix" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['order_prefix'], ENT_QUOTES, 'UTF-8');?>
"  size="60">
    </div>
</div>
<?php }} ?>
