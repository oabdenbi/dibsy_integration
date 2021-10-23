<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:13:49
         compiled from "C:\laragon\www\cscartplugin\design\backend\templates\components\context_menu\items\group_action.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9865044746174189d7321d4-47220700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ba897301267a7a19587f952f192a05d3a08f69d' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\backend\\templates\\components\\context_menu\\items\\group_action.tpl',
      1 => 1632990726,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9865044746174189d7321d4-47220700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6174189d781402_36528914',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6174189d781402_36528914')) {function content_6174189d781402_36528914($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_render_tag_attrs')) include 'C:/laragon/www/cscartplugin/app/functions/smarty_plugins\\modifier.render_tag_attrs.php';
?>

<li <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['data']->value['menu_item_attributes']);?>

    <?php if (!$_smarty_tpl->tpl_vars['data']->value['menu_item_attributes']['class']) {?>
        class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['menu_item_class'], ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
>
    <a <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['data']->value['action_attributes']);?>

        class="cm-process-items cm-submit <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['action_class'], ENT_QUOTES, 'UTF-8');?>
"
        data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['form'], ENT_QUOTES, 'UTF-8');?>
"
        data-ca-dispatch="dispatch[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>
]"
    >
        <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['data']->value['name']['template'],$_smarty_tpl->tpl_vars['data']->value['name']['params']);?>

    </a>
</li>
<?php }} ?>
