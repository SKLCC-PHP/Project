<?php /* Smarty version Smarty-3.1.12, created on 2014-02-23 15:08:13
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\Module\lookup.html" */ ?>
<?php /*%%SmartyHeaderCode:258595300226b7adbb2-52331613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cfee2f5600ba141af6f21554aa70e883cfedaf8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\Module\\lookup.html',
      1 => 1393049053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258595300226b7adbb2-52331613',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5300226b854d70_44224370',
  'variables' => 
  array (
    'page' => 0,
    'modules' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300226b854d70_44224370')) {function content_5300226b854d70_44224370($_smarty_tpl) {?><form id="pagerForm" method="post" action="<?php echo "/project/Public/admin/index.php?c=Module&a=lookup";?>
"><input type="hidden" name="pageNum" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['pageNum'])?$_smarty_tpl->tpl_vars['page']->value['pageNum']:'');?>
" /><input type="hidden" name="numPerPage" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['numPerPage'])?$_smarty_tpl->tpl_vars['page']->value['numPerPage']:'');?>
" /><input type="hidden" name="orderField" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['orderField'])?$_smarty_tpl->tpl_vars['page']->value['orderField']:'');?>
" /><input type="hidden" name="orderDirection" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['orderDirection'])?$_smarty_tpl->tpl_vars['page']->value['orderDirection']:'');?>
" /><input type="hidden" name="id" value="<?php echo (isset($_POST['id']) ? $_POST['id'] : '');?>
"><input type="hidden" name="name" value="<?php echo (isset($_POST['name']) ? $_POST['name'] : '');?>
" /><input type="hidden" name="url" value="<?php echo (isset($_POST['url']) ? $_POST['url'] : '');?>
" /></form><div class="pageHeader"><form onsubmit="return dwzSearch(this, 'dialog');" action="<?php echo "/project/Public/admin/index.php?c=Module&a=lookup";?>
" method="post"><div class="searchBar"><table class="searchContent"><tr><td>模块编号：<input type="text" name="id" value="<?php echo (isset($_POST['id']) ? $_POST['id'] : '');?>
" /></td><td>名称：<input type="text" name="name" value="<?php echo (isset($_POST['name']) ? $_POST['name'] : '');?>
" /></td><td>路径：<input type="text" name="url" value="<?php echo (isset($_POST['url']) ? $_POST['url'] : '');?>
" /></td><td><div class="subBar"><ul><li><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></li></ul></div></td></tr></table></div></form></div><div class="pageContent"><table class="table" layoutH="118" targettype="dialog" width="100%"><thead><tr><th orderField="id" class="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['orderDirection'])?$_smarty_tpl->tpl_vars['page']->value['orderDirection']:'');?>
">模块编号</th><th>名称</th><th>路径</th><th>查找带回</th></tr></thead><tbody><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=(isset($_smarty_tpl->tpl_vars['modules']->value)?$_smarty_tpl->tpl_vars['modules']->value:'')) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<tr><td><?php echo (isset($_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'])?$_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['name'])?$_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['name']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['url'])?$_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['url']:'');?>
</td><td><a class="btnSelect" href="javascript:$.bringBack({id:'<?php echo (isset($_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'])?$_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id']:'');?>
', orgName:'<?php echo (isset($_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['name'])?$_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['name']:'');?>
'})" title="查找带回">选择</a></td></tr>    <?php endfor; endif; ?>
</tbody></table><?php echo $_smarty_tpl->getSubTemplate ("Include/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('targetType'=>"dialog"), 0);?>

</div><?php }} ?>