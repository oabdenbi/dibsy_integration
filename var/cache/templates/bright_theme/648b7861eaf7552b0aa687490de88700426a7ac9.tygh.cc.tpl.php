<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:12:49
         compiled from "C:\laragon\www\cscartplugin\design\themes\responsive\templates\views\orders\components\payments\cc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3137241596174186165c321-28648891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '648b7861eaf7552b0aa687490de88700426a7ac9' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\themes\\responsive\\templates\\views\\orders\\components\\payments\\cc.tpl',
      1 => 1634997910,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3137241596174186165c321-28648891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'card_id' => 0,
    'id_suffix' => 0,
    'images_dir' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6174186176c831_84286812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6174186176c831_84286812')) {function content_6174186176c831_84286812($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/laragon/www/cscartplugin/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_function_set_id')) include 'C:/laragon/www/cscartplugin/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('card_number','valid_thru','cardholder_name','error_validator_ccv','cvv2','what_is_cvv2','visa_card_discover','credit_card_info','american_express','american_express_info','error_validator_ccv_long','card_number','valid_thru','cardholder_name','error_validator_ccv','cvv2','what_is_cvv2','visa_card_discover','credit_card_info','american_express','american_express_info','error_validator_ccv_long'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/creditcardvalidator/jquery.creditCardValidator.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['card_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id_suffix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['card_id']->value), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id_suffix"] = new Smarty_variable('', null, 0);?>
<?php }?>

<div class="litecheckout__item">
    <div class="clearfix">
        <div class="ty-credit-card cm-cc_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-cc-number cc-number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 cm-required"><?php echo $_smarty_tpl->__("card_number");?>
</label>
                <input size="35" type="text" id="credit_card_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[card_number]" value="" class="ty-credit-card__input cm-autocomplete-off ty-inputmask-bdi" />
                <ul class="ty-cc-icons cm-cc-icons cc-icons_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <li class="ty-cc-icons__item cc-default cm-cc-default"><span class="ty-cc-icons__icon default">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-visa"><span class="ty-cc-icons__icon visa">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-visa_electron"><span class="ty-cc-icons__icon visa-electron">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-mastercard"><span class="ty-cc-icons__icon mastercard">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-maestro"><span class="ty-cc-icons__icon maestro">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-amex"><span class="ty-cc-icons__icon american-express">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-discover"><span class="ty-cc-icons__icon discover">&nbsp;</span></li>
                </ul>
            </div>

            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_month_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-regexp="^\d{1,2}$" data-ca-message="" class="ty-control-group__title cm-regexp cm-cc-date cc-date_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 cm-cc-exp-month cm-required"><?php echo $_smarty_tpl->__("valid_thru");?>
</label>
                <label for="credit_card_year_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-regexp="^\d{2,4}$" data-ca-message="" class="cm-required cm-regexp cm-cc-date cm-cc-exp-year cc-year_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 hidden"></label>
                <input type="number" id="credit_card_month_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" min="0" name="payment_info[expiry_month]" value="" size="2" maxlength="2" class="ty-credit-card__input-short ty-inputmask-bdi" />&nbsp;&nbsp;/&nbsp;&nbsp;<input type="number" min="0" id="credit_card_year_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"  name="payment_info[expiry_year]" value="" size="2" maxlength="2" class="ty-credit-card__input-short ty-inputmask-bdi" />&nbsp;
            </div>

            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("cardholder_name");?>
</label>
                <input size="35" type="text" id="credit_card_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[cardholder_name]" value="" class="cm-cc-name ty-credit-card__input ty-uppercase" />
            </div>
        </div>

        <div class="ty-control-group ty-credit-card__cvv-field cvv-field">
            <label for="credit_card_cvv2_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required cm-regexp cm-cc-cvv2  cc-cvv2_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 cm-autocomplete-off" data-ca-regexp-allow-empty="true" data-ca-regexp="^\d{3,4}$" data-ca-message="<?php echo strtr($_smarty_tpl->__("error_validator_ccv"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"><?php echo $_smarty_tpl->__("cvv2");?>
</label>
            <input type="number" id="credit_card_cvv2_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[cvv2]" min="0" value="" size="4" maxlength="4" class="ty-credit-card__cvv-field-input ty-inputmask-bdi" />

            <div class="ty-cvv2-about">
                <span class="ty-cvv2-about__title"><?php echo $_smarty_tpl->__("what_is_cvv2");?>
</span>
                <div class="ty-cvv2-about__note">

                    <div class="ty-cvv2-about__info mb30 clearfix">
                        <div class="ty-cvv2-about__image">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/visa_cvv.png" alt="" />
                        </div>
                        <div class="ty-cvv2-about__description">
                            <h5 class="ty-cvv2-about__description-title"><?php echo $_smarty_tpl->__("visa_card_discover");?>
</h5>
                            <p><?php echo $_smarty_tpl->__("credit_card_info");?>
</p>
                        </div>
                    </div>
                    <div class="ty-cvv2-about__info clearfix">
                        <div class="ty-cvv2-about__image">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/express_cvv.png" alt="" />
                        </div>
                        <div class="ty-cvv2-about__description">
                            <h5 class="ty-cvv2-about__description-title"><?php echo $_smarty_tpl->__("american_express");?>
</h5>
                            <p><?php echo $_smarty_tpl->__("american_express_info");?>
</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>

(function(_, $) {

    var isChromeOnOldAndroid = function() {
        var ua = navigator.userAgent;
        return (/Android/.test(ua) && /Chrome/.test(ua));
    };

    var ccFormId = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
';

    $.ceEvent('on', 'ce.commoninit', function(context) {
        if (!$(context).find('.ty-credit-card, .ty-credit-card__cvv-field').length) {
            return;
        }

        var icons           = $('.cc-icons_' + ccFormId + ' li'),
            ccNumber        = $('.cc-number_' + ccFormId),
            ccNumberInput   = $('#' + ccNumber.attr('for')),

            ccCv2           = $('.cc-cvv2_' + ccFormId),
            ccCv2Input      = $('#' + ccCv2.attr('for')),

            ccMonth         = $('.cc-date_' + ccFormId),
            ccMonthInput    = $('#' + ccMonth.attr('for')),

            ccYear          = $('.cc-year_' + ccFormId),
            ccYearInput     = $('#' + ccYear.attr('for'));

        if(_.isTouch === false && jQuery.isEmptyObject(ccNumberInput.data('_inputmask')) == true) {

            if (!isChromeOnOldAndroid()) {
                ccNumberInput.inputmask('9999 9999 9999 9[9][9][9]', {
                    placeholder: ''
                });
            }

            $.ceFormValidator('registerValidator', {
                class_name: 'cc-number_' + ccFormId,
                message: '',
                func: function(id) {
                    return isChromeOnOldAndroid() || ccNumberInput.inputmask('isComplete');
                }
            });

            $.ceFormValidator('registerValidator', {
                class_name: 'cc-cvv2_' + ccFormId,
                message: '<?php echo strtr($_smarty_tpl->__("error_validator_ccv_long"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                func: function(id) {
                    return isChromeOnOldAndroid() || $.is.blank(ccCv2Input.val()) || ccCv2Input.val().length <= 4;
                }
            });
        }

        if (ccNumber.length && ccNumberInput.length) {
            ccNumberInput.validateCreditCard(function (result) {
                icons.removeClass('active');
                if (result.card_type) {
                    icons.filter(' .cm-cc-' + result.card_type.name).addClass('active');
                    if (['visa_electron', 'maestro', 'laser'].indexOf(result.card_type.name) != -1) {
                        ccCv2.removeClass('cm-required');
                    } else {
                        ccCv2.addClass('cm-required');
                    }
                }
            });
        }
    });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/components/payments/cc.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/components/payments/cc.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/creditcardvalidator/jquery.creditCardValidator.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['card_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id_suffix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['card_id']->value), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id_suffix"] = new Smarty_variable('', null, 0);?>
<?php }?>

<div class="litecheckout__item">
    <div class="clearfix">
        <div class="ty-credit-card cm-cc_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-cc-number cc-number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 cm-required"><?php echo $_smarty_tpl->__("card_number");?>
</label>
                <input size="35" type="text" id="credit_card_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[card_number]" value="" class="ty-credit-card__input cm-autocomplete-off ty-inputmask-bdi" />
                <ul class="ty-cc-icons cm-cc-icons cc-icons_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <li class="ty-cc-icons__item cc-default cm-cc-default"><span class="ty-cc-icons__icon default">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-visa"><span class="ty-cc-icons__icon visa">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-visa_electron"><span class="ty-cc-icons__icon visa-electron">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-mastercard"><span class="ty-cc-icons__icon mastercard">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-maestro"><span class="ty-cc-icons__icon maestro">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-amex"><span class="ty-cc-icons__icon american-express">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-discover"><span class="ty-cc-icons__icon discover">&nbsp;</span></li>
                </ul>
            </div>

            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_month_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-regexp="^\d{1,2}$" data-ca-message="" class="ty-control-group__title cm-regexp cm-cc-date cc-date_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 cm-cc-exp-month cm-required"><?php echo $_smarty_tpl->__("valid_thru");?>
</label>
                <label for="credit_card_year_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-regexp="^\d{2,4}$" data-ca-message="" class="cm-required cm-regexp cm-cc-date cm-cc-exp-year cc-year_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 hidden"></label>
                <input type="number" id="credit_card_month_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" min="0" name="payment_info[expiry_month]" value="" size="2" maxlength="2" class="ty-credit-card__input-short ty-inputmask-bdi" />&nbsp;&nbsp;/&nbsp;&nbsp;<input type="number" min="0" id="credit_card_year_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"  name="payment_info[expiry_year]" value="" size="2" maxlength="2" class="ty-credit-card__input-short ty-inputmask-bdi" />&nbsp;
            </div>

            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("cardholder_name");?>
</label>
                <input size="35" type="text" id="credit_card_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[cardholder_name]" value="" class="cm-cc-name ty-credit-card__input ty-uppercase" />
            </div>
        </div>

        <div class="ty-control-group ty-credit-card__cvv-field cvv-field">
            <label for="credit_card_cvv2_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required cm-regexp cm-cc-cvv2  cc-cvv2_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 cm-autocomplete-off" data-ca-regexp-allow-empty="true" data-ca-regexp="^\d{3,4}$" data-ca-message="<?php echo strtr($_smarty_tpl->__("error_validator_ccv"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"><?php echo $_smarty_tpl->__("cvv2");?>
</label>
            <input type="number" id="credit_card_cvv2_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[cvv2]" min="0" value="" size="4" maxlength="4" class="ty-credit-card__cvv-field-input ty-inputmask-bdi" />

            <div class="ty-cvv2-about">
                <span class="ty-cvv2-about__title"><?php echo $_smarty_tpl->__("what_is_cvv2");?>
</span>
                <div class="ty-cvv2-about__note">

                    <div class="ty-cvv2-about__info mb30 clearfix">
                        <div class="ty-cvv2-about__image">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/visa_cvv.png" alt="" />
                        </div>
                        <div class="ty-cvv2-about__description">
                            <h5 class="ty-cvv2-about__description-title"><?php echo $_smarty_tpl->__("visa_card_discover");?>
</h5>
                            <p><?php echo $_smarty_tpl->__("credit_card_info");?>
</p>
                        </div>
                    </div>
                    <div class="ty-cvv2-about__info clearfix">
                        <div class="ty-cvv2-about__image">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/express_cvv.png" alt="" />
                        </div>
                        <div class="ty-cvv2-about__description">
                            <h5 class="ty-cvv2-about__description-title"><?php echo $_smarty_tpl->__("american_express");?>
</h5>
                            <p><?php echo $_smarty_tpl->__("american_express_info");?>
</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>

(function(_, $) {

    var isChromeOnOldAndroid = function() {
        var ua = navigator.userAgent;
        return (/Android/.test(ua) && /Chrome/.test(ua));
    };

    var ccFormId = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
';

    $.ceEvent('on', 'ce.commoninit', function(context) {
        if (!$(context).find('.ty-credit-card, .ty-credit-card__cvv-field').length) {
            return;
        }

        var icons           = $('.cc-icons_' + ccFormId + ' li'),
            ccNumber        = $('.cc-number_' + ccFormId),
            ccNumberInput   = $('#' + ccNumber.attr('for')),

            ccCv2           = $('.cc-cvv2_' + ccFormId),
            ccCv2Input      = $('#' + ccCv2.attr('for')),

            ccMonth         = $('.cc-date_' + ccFormId),
            ccMonthInput    = $('#' + ccMonth.attr('for')),

            ccYear          = $('.cc-year_' + ccFormId),
            ccYearInput     = $('#' + ccYear.attr('for'));

        if(_.isTouch === false && jQuery.isEmptyObject(ccNumberInput.data('_inputmask')) == true) {

            if (!isChromeOnOldAndroid()) {
                ccNumberInput.inputmask('9999 9999 9999 9[9][9][9]', {
                    placeholder: ''
                });
            }

            $.ceFormValidator('registerValidator', {
                class_name: 'cc-number_' + ccFormId,
                message: '',
                func: function(id) {
                    return isChromeOnOldAndroid() || ccNumberInput.inputmask('isComplete');
                }
            });

            $.ceFormValidator('registerValidator', {
                class_name: 'cc-cvv2_' + ccFormId,
                message: '<?php echo strtr($_smarty_tpl->__("error_validator_ccv_long"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                func: function(id) {
                    return isChromeOnOldAndroid() || $.is.blank(ccCv2Input.val()) || ccCv2Input.val().length <= 4;
                }
            });
        }

        if (ccNumber.length && ccNumberInput.length) {
            ccNumberInput.validateCreditCard(function (result) {
                icons.removeClass('active');
                if (result.card_type) {
                    icons.filter(' .cm-cc-' + result.card_type.name).addClass('active');
                    if (['visa_electron', 'maestro', 'laser'].indexOf(result.card_type.name) != -1) {
                        ccCv2.removeClass('cm-required');
                    } else {
                        ccCv2.addClass('cm-required');
                    }
                }
            });
        }
    });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php }?><?php }} ?>
