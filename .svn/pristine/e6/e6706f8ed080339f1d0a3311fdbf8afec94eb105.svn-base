<?php /* Smarty version Smarty-3.1.12, created on 2014-02-16 10:20:08
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\User\index.html" */ ?>
<?php /*%%SmartyHeaderCode:19898530020580c8867-01250214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8efea69aabd516e6628252bc5253c3b5e2553bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\User\\index.html',
      1 => 1372049670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19898530020580c8867-01250214',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53002058187612_40028995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53002058187612_40028995')) {function content_53002058187612_40028995($_smarty_tpl) {?><form id="pagerForm" method="post" action="<?php echo "/project/Public/admin/index.php?c=User";?>
"><input type="hidden" name="pageNum" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['pageNum'])?$_smarty_tpl->tpl_vars['page']->value['pageNum']:'');?>
" /><input type="hidden" name="numPerPage" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['numPerPage'])?$_smarty_tpl->tpl_vars['page']->value['numPerPage']:'');?>
" /><input type="hidden" name="orderField" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['orderField'])?$_smarty_tpl->tpl_vars['page']->value['orderField']:'');?>
" /><input type="hidden" name="orderDirection" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['orderDirection'])?$_smarty_tpl->tpl_vars['page']->value['orderDirection']:'');?>
" /><input type="hidden" name="uid" value="<?php echo (isset($_POST['uid']) ? $_POST['uid'] : '');?>
"><input type="hidden" name="username" value="<?php echo (isset($_POST['username']) ? $_POST['username'] : '');?>
" /><input type="hidden" name="reg_time" value="<?php echo (isset($_POST['reg_time']) ? $_POST['reg_time'] : '');?>
" /></form><div class="pageHeader"><form onsubmit="return navTabSearch(this);" action="<?php echo "/project/Public/admin/index.php?c=User";?>
" method="post"><div class="searchBar"><table class="searchContent"><tr><td>用户编号：<input type="text" name="uid" value="<?php echo (isset($_POST['uid']) ? $_POST['uid'] : '');?>
" /></td><td>用户名称：<input type="text" name="username" value="<?php echo (isset($_POST['username']) ? $_POST['username'] : '');?>
" /></td><td>注册日期：<input type="text" class="date" readonly="true" name="reg_time" value="<?php echo (isset($_POST['reg_time']) ? $_POST['reg_time'] : '');?>
"/></td></tr></table><div class="subBar"><ul><li><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></li><li><div class="buttonActive"><div class="buttonContent"><button type="button" onclick="return navTabSearch(this);">刷新</button></div></div></li></ul></div></div></form></div><div class="pageContent"><div class="panelBar"><ul class="toolBar"><li><a class="delete" href="<?php echo "/project/Public/admin/index.php?c=User&a=delete";?>
" target="selectedTodo"  rel="ids" postType="string" title="确实要删除这些记录吗?"><span>批量删除</span></a></li></ul></div><table class="table" width="100%" layoutH="140"><thead><tr><th width="22"><input type="checkbox" group="ids" class="checkboxCtrl"></th><th orderField="id" class="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['orderDirection'])?$_smarty_tpl->tpl_vars['page']->value['orderDirection']:'');?>
">用户编号</th><th>用户名</th><th>邮箱</th><th>注册日期</th><th>注册IP</th><th>操作</th></tr></thead><tbody><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
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
<tr target="uid" rel="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['uid'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['uid']:'');?>
"><td><input name="ids" value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['uid'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['uid']:'');?>
" type="checkbox"></td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['uid'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['uid']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['username'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['username']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['email'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['email']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['reg_time'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['reg_time']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['reg_ip'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['reg_ip']:'');?>
</td><td><a target="ajaxTodo" href="<?php echo "/project/Public/admin/index.php?c=User&a=delete&ids=".((string)(isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['uid'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['uid']:''));?>
" class="btnDel" title="确定要删除吗?">删除</a></td></tr>    <?php endfor; endif; ?>
</tbody></table><?php echo $_smarty_tpl->getSubTemplate ("Include/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div><?php }} ?>