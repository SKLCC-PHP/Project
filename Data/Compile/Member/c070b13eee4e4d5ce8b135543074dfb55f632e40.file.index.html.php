<?php /* Smarty version Smarty-3.1.12, created on 2014-02-23 13:59:23
         compiled from "C:\xampp\htdocs\project\Application\Member\View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1853953098e3bb64c79-98874842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c070b13eee4e4d5ce8b135543074dfb55f632e40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Member\\View\\Index\\index.html',
      1 => 1393049054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1853953098e3bb64c79-98874842',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userInfo' => 0,
    'tip' => 0,
    'now_time' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53098e3bd54863_12277283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53098e3bd54863_12277283')) {function content_53098e3bd54863_12277283($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../Include/manager_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content"><div id="main"><div class="user"><div class="avatar"><img src="<?php echo (isset($_smarty_tpl->tpl_vars['userInfo']->value['avatar'])?$_smarty_tpl->tpl_vars['userInfo']->value['avatar']:'');?>
"></div><div class="info"><h1><?php echo (isset($_smarty_tpl->tpl_vars['tip']->value)?$_smarty_tpl->tpl_vars['tip']->value:'');?>
, 欢迎<?php echo (($tmp = @(isset($_smarty_tpl->tpl_vars['userInfo']->value['nickname'])?$_smarty_tpl->tpl_vars['userInfo']->value['nickname']:''))===null||$tmp==='' ? (isset($_smarty_tpl->tpl_vars['userInfo']->value['username'])?$_smarty_tpl->tpl_vars['userInfo']->value['username']:'') : $tmp);?>
回来！</h1><div class="spaceinfo"><em>现在时间：</em><?php echo (isset($_smarty_tpl->tpl_vars['now_time']->value)?$_smarty_tpl->tpl_vars['now_time']->value:'');?>
</div></div></div></div><div id="sidebar"><div class="smod"><h2>推荐的文章</h2><ul><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=(isset($_smarty_tpl->tpl_vars['list']->value)?$_smarty_tpl->tpl_vars['list']->value:'')) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?>
<li><a href="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['link'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['link']:'');?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['title'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['title']:'');?>
</a></li><?php endfor; endif; ?>
</ul></div></div></div><?php echo $_smarty_tpl->getSubTemplate ("../Include/manager_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>