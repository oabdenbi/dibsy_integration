<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:08:27
         compiled from "C:\laragon\www\cscartplugin\design\themes\responsive\templates\views\block_manager\render\container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10570025166174175b8f3bf9-11193429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf9709bbc8a8e889ae1f7530c40d4f34a749951f' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\themes\\responsive\\templates\\views\\block_manager\\render\\container.tpl',
      1 => 1634997910,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10570025166174175b8f3bf9-11193429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'location_data' => 0,
    'layout_data' => 0,
    'container' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6174175b90e903_23149776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6174175b90e903_23149776')) {function content_6174175b90e903_23149776($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']&&$_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("backend:views/block_manager/frontend_render/container.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    <div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
<?php }?><?php }} ?>
