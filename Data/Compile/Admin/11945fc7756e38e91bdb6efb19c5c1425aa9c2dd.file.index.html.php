<?php /* Smarty version Smarty-3.1.12, created on 2014-02-23 16:39:05
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\Manager\index.html" */ ?>
<?php /*%%SmartyHeaderCode:550153002061d4c250-90686779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11945fc7756e38e91bdb6efb19c5c1425aa9c2dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\Manager\\index.html',
      1 => 1393144743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '550153002061d4c250-90686779',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53002061e44fa0_53613771',
  'variables' => 
  array (
    'page' => 0,
    'roles' => 0,
    'users' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53002061e44fa0_53613771')) {function content_53002061e44fa0_53613771($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\project\\Common\\Smarty\\plugins\\function.html_options.php';
?><form id="pagerForm" method="post" action="<?php echo "/project/index.php?c=Manager";?>
"><input type="hidden" name="pageNum" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['pageNum'])?$_smarty_tpl->tpl_vars['page']->value['pageNum']:'');?>
" /><input type="hidden" name="numPerPage" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['numPerPage'])?$_smarty_tpl->tpl_vars['page']->value['numPerPage']:'');?>
" /><input type="hidden" name="orderField" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['orderField'])?$_smarty_tpl->tpl_vars['page']->value['orderField']:'');?>
" /><input type="hidden" name="orderDirection" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['orderDirection'])?$_smarty_tpl->tpl_vars['page']->value['orderDirection']:'');?>
" /><input type="hidden" name="role" value="<?php echo (isset($_POST['role']) ? $_POST['role'] : '');?>
"><input type="hidden" name="username" value="<?php echo (isset($_POST['username']) ? $_POST['username'] : '');?>
" /><input type="hidden" name="register_time" value="<?php echo (isset($_POST['register_time']) ? $_POST['register_time'] : '');?>
" /></form><div class="pageHeader"><form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo "/project/index.php?c=Manager";?>
" method="post"><div class="searchBar"><table class="searchContent"><tr><td>学号(工号)：<input type="text" name="username" value="<?php echo (isset($_POST['username']) ? $_POST['username'] : '');?>
" /></td><td><select class="combox" name="role_id"><option value="">--角色--</option><?php echo smarty_function_html_options(array('options'=>(isset($_smarty_tpl->tpl_vars['roles']->value)?$_smarty_tpl->tpl_vars['roles']->value:''),'selected'=>(isset($_POST['role_id']) ? $_POST['role_id'] : '')),$_smarty_tpl);?>

</select></td><td>注册日期：<input type="text" class="date" readonly="true" name="register_time" value="<?php echo (isset($_POST['register_time']) ? $_POST['register_time'] : '');?>
"/></td><td><div class="subBar"><ul><li><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></li><li><div class="buttonActive"><div class="buttonContent"><button type="button" onclick="return navTabSearch(this);">刷新</button></div></div></li></ul></div></td></tr></table></div></form></div><div class="pageContent"><div class="panelBar"><ul class="toolBar"><li><a class="add" href="<?php echo "/project/index.php?c=Manager&a=add";?>
" target="dialog" width="520" height="500"><span>添加</span></a></li><li><a class="edit" href="<?php echo "/project/index.php?c=Manager&a=update&uid={uid}";?>
" target="dialog" width="520" height="500"><span>修改</span></a></li><li><a class="delete" href="<?php echo "/project/index.php?c=Manager&a=delete";?>
" target="selectedTodo"  rel="ids" postType="string" title="确实要删除这些记录吗?"><span>批量删除</span></a></li><li class="line">line</li><li><a class="icon" href="<?php echo "/project/index.php?c=Manager&a=export&role_id=".((string)(isset($_POST['role_id']) ? $_POST['role_id'] : ''))."&username=".((string)(isset($_POST['username']) ? $_POST['username'] : ''))."&register_time=".((string)(isset($_POST['register_time']) ? $_POST['register_time'] : ''));?>
"><span>导出EXCEL</span></a></li></ul></div><table class="table" width="100%" layoutH="114"><thead><tr><th width="24"><input type="checkbox" group="ids" class="checkboxCtrl"></th><th  orderField="username" class="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['orderDirection'])?$_smarty_tpl->tpl_vars['page']->value['orderDirection']:'');?>
">学号(工号)</th><th>姓名</th><th>角色</th><th>院系</th><th>联系方式</th><th>邮箱</th><th>登录IP</th><th>登录时间</th><th>注册时间</th><th>状态</th><th>登录数</th><th>操作</th></tr></thead><tbody><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=(isset($_smarty_tpl->tpl_vars['users']->value)?$_smarty_tpl->tpl_vars['users']->value:'')) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<tr target="uid" rel="<?php echo (isset($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['uid'])?$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['uid']:'');?>
"><td width="3%"><input name="ids" value="<?php echo (isset($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['uid'])?$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['uid']:'');?>
" type="checkbox"></td><td><?php echo (isset($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['username'])?$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['username']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['realname'])?$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['realname']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['role_id'])?$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['role_id']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['college_id'])?$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['college_id']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['telephone'])?$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['telephone']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['email'])?$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['email']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['login_ip'])?$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['login_ip']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['login_time'])?$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['login_time']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['register_time'])?$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['register_time']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['status'])?$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['status']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['login_num'])?$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['login_num']:'');?>
</td><td><a target="ajaxTodo" href="<?php echo "/project/index.php?c=Manager&a=delete&ids=".((string)(isset($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['uid'])?$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['uid']:''));?>
" class="btnDel"  title="确定要删除吗?">删除</a><a target="dialog" href="<?php echo "/project/index.php?c=Manager&a=update&uid=".((string)(isset($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['uid'])?$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['uid']:''));?>
" class="btnEdit" width="520" height="500" title="编辑">编辑</a></td></tr>    <?php endfor; endif; ?>
</tbody></table><?php echo $_smarty_tpl->getSubTemplate ("Include/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div><?php }} ?>