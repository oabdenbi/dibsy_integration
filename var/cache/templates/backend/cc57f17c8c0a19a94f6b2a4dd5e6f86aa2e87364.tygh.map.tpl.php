<?php /* Smarty version Smarty-3.1.21, created on 2021-10-23 17:13:22
         compiled from "C:\laragon\www\cscartplugin\design\backend\templates\addons\store_locator\pickers\map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21130121986174188218ddf6-43997542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc57f17c8c0a19a94f6b2a4dd5e6f86aa2e87364' => 
    array (
      0 => 'C:\\laragon\\www\\cscartplugin\\design\\backend\\templates\\addons\\store_locator\\pickers\\map.tpl',
      1 => 1632990726,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21130121986174188218ddf6-43997542',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'store_location' => 0,
    'initial_latitude' => 0,
    'initial_longitude' => 0,
    'allow_save' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617418821e7ae2_08736171',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617418821e7ae2_08736171')) {function content_617418821e7ae2_08736171($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/laragon/www/cscartplugin/app/functions/smarty_plugins\\function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('select_coordinates','cancel','set'));
?>
<div class="hidden" id="map_picker" title="<?php echo $_smarty_tpl->__("select_coordinates");?>
">
    <?php $_smarty_tpl->tpl_vars['initial_latitude'] = new Smarty_variable(doubleval($_smarty_tpl->tpl_vars['store_location']->value['latitude']), null, 0);?>
    <?php if (!$_smarty_tpl->tpl_vars['initial_latitude']->value) {?>
        <?php $_smarty_tpl->tpl_vars['initial_latitude'] = new Smarty_variable(doubleval((defined('STORE_LOCATOR_DEFAULT_LATITUDE') ? constant('STORE_LOCATOR_DEFAULT_LATITUDE') : null)), null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['initial_longitude'] = new Smarty_variable(doubleval($_smarty_tpl->tpl_vars['store_location']->value['longitude']), null, 0);?>
    <?php if (!$_smarty_tpl->tpl_vars['initial_longitude']->value) {?>
        <?php $_smarty_tpl->tpl_vars['initial_longitude'] = new Smarty_variable(doubleval((defined('STORE_LOCATOR_DEFAULT_LONGITUDE') ? constant('STORE_LOCATOR_DEFAULT_LONGITUDE') : null)), null, 0);?>
    <?php }?>

    <div class="cm-geo-map-container map-canvas" id="map_picker_container" style="height: 100%;"
         data-ca-geo-map-initial-lat="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['initial_latitude']->value, ENT_QUOTES, 'UTF-8');?>
"
         data-ca-geo-map-initial-lng="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['initial_longitude']->value, ENT_QUOTES, 'UTF-8');?>
"
         data-ca-geo-map-language="<?php echo htmlspecialchars((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
"
         data-ca-geo-map-marker-selector=".cm-store-locator-map-marker"
         data-ca-geo-map-controls-enable-zoom="true"
         data-ca-geo-map-controls-enable-fullscreen="true"
         data-ca-geo-map-controls-enable-layers="true"
         data-ca-geo-map-controls-enable-ruler="true"
         data-ca-geo-map-behaviors-enable-drag="true"
         data-ca-geo-map-behaviors-enable-drag-on-mobile="true"
         data-ca-geo-map-behaviors-enable-dbl-click-zoom="true"
         data-ca-geo-map-behaviors-enable-multi-touch="true"
    ></div>

    <form name="map_picker" action="" method="">
        <div class="buttons-container">
            <a class="cm-dialog-closer cm-cancel tool-link btn"><?php echo $_smarty_tpl->__("cancel");?>
</a>
            <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("set"),'but_role'=>"action",'but_meta'=>"btn-primary cm-dialog-closer cm-map-save-location"), 0);?>

            <?php }?>
        </div>
    </form>

    <?php if ($_smarty_tpl->tpl_vars['store_location']->value['latitude']&&$_smarty_tpl->tpl_vars['store_location']->value['longitude']) {?>
        <div class="cm-store-locator-map-marker hidden"
             data-ca-geo-map-marker-lat="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_location']->value['latitude'], ENT_QUOTES, 'UTF-8');?>
"
             data-ca-geo-map-marker-lng="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_location']->value['longitude'], ENT_QUOTES, 'UTF-8');?>
"
        ></div>
    <?php }?>
</div>

<?php echo smarty_function_script(array('src'=>"js/addons/store_locator/map.js"),$_smarty_tpl);?>

<?php }} ?>
