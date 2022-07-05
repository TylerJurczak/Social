<?php
/* Smarty version 4.1.1, created on 2022-06-22 14:24:28
  from 'C:\wamp64\www\social\content\themes\default\templates\_header.messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62b3261c49b308_75269652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a2b0e9906e2f2d3f54879b44f79be5390467b2b' => 
    array (
      0 => 'C:\\wamp64\\www\\social\\content\\themes\\default\\templates\\_header.messages.tpl',
      1 => 1647961223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:__feeds_conversation.tpl' => 1,
  ),
),false)) {
function content_62b3261c49b308_75269652 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="dropdown js_live-messages">
  <a href="#" data-toggle="dropdown" data-display="static">
    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"header-messages",'width'=>"20px",'height'=>"20px",'style'=>"fill: #fff"), 0, false);
?>
    <span class="counter blue shadow-sm <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_live_messages_counter'] == 0) {?>x-hidden<?php }?>">
      <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_live_messages_counter'];?>

    </span>
  </a>
  <div class="dropdown-menu dropdown-menu-right dropdown-widget">
    <div class="dropdown-widget-header">
      <span class="title"><?php echo __("Messages");?>
</span>
      <a class="float-right text-link js_chat-new" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages/new"><?php echo __("Send a New Message");?>
</a>
    </div>
    <div class="dropdown-widget-body">
      <div class="js_scroller">
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['conversations']) {?>
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['conversations'], 'conversation');
$_smarty_tpl->tpl_vars['conversation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conversation']->value) {
$_smarty_tpl->tpl_vars['conversation']->do_else = false;
?>
              <?php $_smarty_tpl->_subTemplateRender('file:__feeds_conversation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        <?php } else { ?>
          <p class="text-center text-muted mt10">
            <?php echo __("No messages");?>

          </p>
        <?php }?>
      </div>
    </div>
    <a class="dropdown-widget-footer" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages"><?php echo __("See All");?>
</a>
  </div>
</li><?php }
}
