<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:06:38
         compiled from "C:\laragon\www\cscartplugin\design\backend\templates\common\image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:360695644617416ee958ca8-04156902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd43c1db2271adf0243b5de8a34d2cafd00775c8c' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\backend\\templates\\common\\image.tpl',
      1 => 1632990726,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '360695644617416ee958ca8-04156902',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'image' => 0,
    'image_width' => 0,
    'image_height' => 0,
    'show_detailed_link' => 0,
    'href' => 0,
    'link_css_class' => 0,
    'image_data' => 0,
    'image_id' => 0,
    'image_css_class' => 0,
    'no_image_css_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617416eea36696_51369503',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617416eea36696_51369503')) {function content_617416eea36696_51369503($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('no_image'));
?>
<?php $_smarty_tpl->tpl_vars["image_data"] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['image']->value,$_smarty_tpl->tpl_vars['image_width']->value,$_smarty_tpl->tpl_vars['image_height']->value), null, 0);
$_smarty_tpl->tpl_vars['show_detailed_link'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_detailed_link']->value)===null||$tmp==='' ? true : $tmp), null, 0);
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value&&($_smarty_tpl->tpl_vars['image']->value||$_smarty_tpl->tpl_vars['href']->value)) {?><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_css_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['href']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image']->value['image_path'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" <?php if (!$_smarty_tpl->tpl_vars['href']->value) {?>target="_blank"<?php }?>><?php }
if ($_smarty_tpl->tpl_vars['image_data']->value['image_path']) {?><img <?php if ($_smarty_tpl->tpl_vars['image_id']->value) {?>id="image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['alt'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['image_data']->value['generate_image']) {?>    class="spinner <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_css_class']->value, ENT_QUOTES, 'UTF-8');?>
"    data-ca-image-path="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?>    class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_css_class']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['alt'], ENT_QUOTES, 'UTF-8');?>
" /><?php } else { ?><div class="no-image <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_image_css_class']->value, ENT_QUOTES, 'UTF-8');?>
" style="width: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['image_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_height']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px; height: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['image_height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_width']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px;"><i class="glyph-image" title="<?php echo $_smarty_tpl->__("no_image");?>
"></i></div><?php }
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value&&($_smarty_tpl->tpl_vars['image']->value||$_smarty_tpl->tpl_vars['href']->value)) {?></a><?php }?><?php }} ?>
