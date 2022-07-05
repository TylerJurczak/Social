<?php
/* Smarty version 4.1.1, created on 2022-06-22 14:24:28
  from 'C:\wamp64\www\social\content\themes\default\templates\_no_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62b3261c9f8383_35177263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1f7786fba67d85b3a6aeec675b5f8346949db53' => 
    array (
      0 => 'C:\\wamp64\\www\\social\\content\\themes\\default\\templates\\_no_data.tpl',
      1 => 1647961297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_62b3261c9f8383_35177263 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- no data -->
<div class="text-center text-muted">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"empty",'class'=>"mb20",'width'=>"96px",'height'=>"96px"), 0, false);
?>
  <div class="text-md">
    <span style="padding: 8px 20px; background: #ececec; border-radius: 18px; font-weight: bold;"><?php echo __("No data to show");?>
</span>
  </div>
</div>
<!-- no data --><?php }
}
