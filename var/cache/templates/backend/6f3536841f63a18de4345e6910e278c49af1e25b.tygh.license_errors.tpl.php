<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:06:53
         compiled from "C:\laragon\www\cscartplugin\design\backend\templates\views\settings\license_errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132435266617416fd81d217-14895521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f3536841f63a18de4345e6910e278c49af1e25b' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\backend\\templates\\views\\settings\\license_errors.tpl',
      1 => 1632990726,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '132435266617416fd81d217-14895521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show' => 0,
    'license_errors' => 0,
    'config' => 0,
    'store_mode_license' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617416fd884f11_41674058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617416fd884f11_41674058')) {function content_617416fd884f11_41674058($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/laragon/www/cscartplugin/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('licensing.license_error_license_is_','licensing.license_error_license_is_','please_enter_license_here','activate'));
?>
<?php if ($_smarty_tpl->tpl_vars['show']->value) {?>
    <a id="license_errors"
       class="cm-dialog-opener cm-dialog-auto-size hidden cm-dialog-non-closable"
       data-ca-target-id="license_errors_dialog"
    ></a>

    <div class="hidden trial-expired-dialog license-errors-dialog"
         title="<?php echo $_smarty_tpl->__("licensing.license_error_license_is_".((string)mb_strtolower($_smarty_tpl->tpl_vars['license_errors']->value['status'], 'UTF-8')).".title",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>
"
         id="license_errors_dialog"
    >
        <form name="license_errors_form"
              id="license_errors_dialog_form"
              action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
              method="post"
        >
            <input type="hidden"
                   name="redirect_url"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
"
            />
            <input type="hidden"
                   name="store_mode"
                   value="full"
            />
            <div class="license-errors trial-expired">
                <p><?php echo $_smarty_tpl->__("licensing.license_error_license_is_".((string)mb_strtolower($_smarty_tpl->tpl_vars['license_errors']->value['status'], 'UTF-8')).".text",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null),"[helpdesk_url]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['helpdesk_url']));?>
</p>
                <div class="license type-error item">
                    <input type="text"
                           name="license_number"
                           class="type-error"
                           value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_mode_license']->value, ENT_QUOTES, 'UTF-8');?>
"
                           placeholder="<?php echo $_smarty_tpl->__("please_enter_license_here");?>
"
                    />
                    <input name="dispatch[settings.change_store_mode]"
                           type="submit"
                           value="<?php echo $_smarty_tpl->__("activate");?>
"
                           class="btn btn-primary"
                    />
                </div>
            </div>
        </form>
    </div>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
        Tygh.$(document).ready(function () {
            Tygh.$('#license_errors').trigger('click');
        });

        Tygh.$(window).load(function () {
            Tygh.$('#license_errors_dialog_form').off('submit');
        });
    <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
