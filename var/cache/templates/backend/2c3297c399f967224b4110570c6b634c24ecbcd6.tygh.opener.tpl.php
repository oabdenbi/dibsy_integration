<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:06:48
         compiled from "C:\laragon\www\cscartplugin\design\backend\templates\components\notifications_center\opener.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1424027359617416f8b57c73-83724604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c3297c399f967224b4110570c6b634c24ecbcd6' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\backend\\templates\\components\\notifications_center\\opener.tpl',
      1 => 1632990726,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1424027359617416f8b57c73-83724604',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617416f8bada13_46821760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617416f8bada13_46821760')) {function content_617416f8bada13_46821760($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/laragon/www/cscartplugin/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('notifications_center.notifications','notifications_center.notifications','notifications_center.notifications','loading','loading','show_more','show_less','notifications_center.no_notifications','notifications_center.notifications'));
?>
<li class="dropdown hover-show--disabled notifications-center__opener-wrapper cm-dropdown-skip-processing">
    <a class="dropdown-toggle" data-toggle="dropdown">
        <span
            class="icon icon-bell-alt cc-notify" 
            title="<?php echo $_smarty_tpl->__("notifications_center.notifications");?>
"
            data-ca-notifications-center-counter
        >
        </span>
        <span class="" ></span>
        <b class="caret"></b>
    </a>
    <ul class="dropdown-menu pull-right notifications-center__root" data-ca-notifications-center-root>
        <div class="cc-dropdown">
            <div class="cc-dropdown__title-wrapper" text="<?php echo $_smarty_tpl->__("notifications_center.notifications");?>
">
                <span class="cc-dropdown__title"><?php echo $_smarty_tpl->__("notifications_center.notifications");?>
</span>
            </div>
            <div class="cc-all-read">
                <div class="cc-all-read--inner"><?php echo $_smarty_tpl->__("loading");?>
</div>
            </div>
        </div>
    </ul>
</li>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function (_, $) {
    _.tr({
        loading: '<?php echo strtr($_smarty_tpl->__("loading"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        showMore: '<?php echo strtr($_smarty_tpl->__("show_more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        showLess: '<?php echo strtr($_smarty_tpl->__("show_less"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        "notifications_center.noData": '<?php echo strtr($_smarty_tpl->__("notifications_center.no_notifications"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        "notifications_center.notifications": '<?php echo strtr($_smarty_tpl->__("notifications_center.notifications"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
    });

    $.ceEvent('one', 'ce.commoninit', function (context) {
        $(context).find('.notifications-center__opener-wrapper a').on('click', function () {
            if (Tygh.ceNotificationsCenterInited) {
                $.ceEvent('trigger', 'ce.notifications_center.enabled');
            }
        });
    });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>