<?php /* Smarty version Smarty-3.1.12, created on 2014-02-16 09:39:30
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\Music\index.html" */ ?>
<?php /*%%SmartyHeaderCode:10344530016d2cd9be4-91967320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc5de71dc0973e46dc4f7df587a7f13a0d40e581' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\Music\\index.html',
      1 => 1371095365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10344530016d2cd9be4-91967320',
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
  'unifunc' => 'content_530016d2dac4f8_72114486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530016d2dac4f8_72114486')) {function content_530016d2dac4f8_72114486($_smarty_tpl) {?><form id="pagerForm" method="post" action="<?php echo "/project/Public/admin/index.php?c=Music";?>
"><input type="hidden" name="pageNum" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['pageNum'])?$_smarty_tpl->tpl_vars['page']->value['pageNum']:'');?>
" /><input type="hidden" name="numPerPage" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['numPerPage'])?$_smarty_tpl->tpl_vars['page']->value['numPerPage']:'');?>
" /><input type="hidden" name="orderField" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['orderField'])?$_smarty_tpl->tpl_vars['page']->value['orderField']:'');?>
" /><input type="hidden" name="orderDirection" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['orderDirection'])?$_smarty_tpl->tpl_vars['page']->value['orderDirection']:'');?>
" /><input type="hidden" name="title" value="<?php echo (isset($_POST['title']) ? $_POST['title'] : '');?>
" /><input type="hidden" name="author" value="<?php echo (isset($_POST['author']) ? $_POST['author'] : '');?>
" /></form><div class="pageHeader"><form onsubmit="return navTabSearch(this);" action="<?php echo "/project/Public/admin/index.php?c=Music";?>
" method="post"><div class="searchBar"><table class="searchContent"><tr><td>标题：<input type="text" name="title" value="<?php echo (isset($_POST['title']) ? $_POST['title'] : '');?>
" /></td><td>作者：<input type="text" name="author" value="<?php echo (isset($_POST['author']) ? $_POST['author'] : '');?>
" /></td><td><div class="subBar"><ul><li><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></li><li><div class="buttonActive"><div class="buttonContent"><button type="button" onclick="return navTabSearch(this);">刷新</button></div></div></li></ul></div></td></tr></table></div></form></div><div class="pageContent"><div class="panelBar"><ul class="toolBar"><li><a class="add" href="<?php echo "/project/Public/admin/index.php?c=Music&a=add";?>
" target="dialog" width="800" height="400"><span>添加</span></a></li><li><a class="edit" href="<?php echo "/project/Public/admin/index.php?c=Music&a=update&id={id}";?>
" target="dialog" width="800" height="400"><span>修改</span></a></li><li><a class="delete" href="<?php echo "/project/Public/admin/index.php?c=Music&a=delete";?>
" target="selectedTodo" rel="ids" postType="string" title="确实要删除这些记录吗?"><span>批量删除</span></a></li></ul></div><table class="table" width="100%" layoutH="114"><thead><tr><th width="22"><input type="checkbox" group="ids" class="checkboxCtrl"></th><th orderField="id" class="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['orderDirection'])?$_smarty_tpl->tpl_vars['page']->value['orderDirection']:'');?>
">编号</th><th>标题</th><th>作者</th><th>排序</th><th>状态</th><th>创建时间</th><th>操作</th></tr></thead><tbody><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
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
<tr target="id" rel="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id']:'');?>
"><td><input name="ids" value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id']:'');?>
" type="checkbox"></td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['title'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['title']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['author'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['author']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['rank'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['rank']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['state'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['state']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['create_time'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['create_time']:'');?>
</td><td><a target="ajaxTodo" href="<?php echo "/project/Public/admin/index.php?c=Music&a=delete&ids=".((string)(isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id']:''));?>
" class="btnDel" title="确定要删除吗?">删除</a><a href="<?php echo "/project/Public/admin/index.php?c=Music&a=update&id=".((string)(isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id']:''));?>
" class="btnEdit" target="dialog" width="800" height="400">编辑</a></td></tr>    <?php endfor; endif; ?>
</tbody></table><?php echo $_smarty_tpl->getSubTemplate ("Include/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div><?php }} ?>