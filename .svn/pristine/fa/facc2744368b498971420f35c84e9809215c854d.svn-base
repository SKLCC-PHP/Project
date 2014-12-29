<?php /* Smarty version Smarty-3.1.12, created on 2014-02-23 12:35:23
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\AccessLog\index.html" */ ?>
<?php /*%%SmartyHeaderCode:7194530021673bf5a7-00693019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7eeb8eb664caa2dd245b7f5c28b90481e33d8aa9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\AccessLog\\index.html',
      1 => 1393049053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7194530021673bf5a7-00693019',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53002167479187_36642710',
  'variables' => 
  array (
    'page' => 0,
    'apps' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53002167479187_36642710')) {function content_53002167479187_36642710($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\project\\Common\\Smarty\\plugins\\function.html_options.php';
?><form id="pagerForm" method="post" action="<?php echo "/project/Public/admin/index.php.?c=AccessLog";?>
"><input type="hidden" name="pageNum" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['pageNum'])?$_smarty_tpl->tpl_vars['page']->value['pageNum']:'');?>
" /><input type="hidden" name="numPerPage" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['numPerPage'])?$_smarty_tpl->tpl_vars['page']->value['numPerPage']:'');?>
" /><input type="hidden" name="orderField" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['orderField'])?$_smarty_tpl->tpl_vars['page']->value['orderField']:'');?>
" /><input type="hidden" name="orderDirection" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['orderDirection'])?$_smarty_tpl->tpl_vars['page']->value['orderDirection']:'');?>
" /><input type="hidden" name="create_time" value="<?php echo (isset($_POST['create_time']) ? $_POST['create_time'] : '');?>
" /><input type="hidden" name="app_name" value="<?php echo (isset($_POST['app_name']) ? $_POST['app_name'] : '');?>
" /></form><div class="pageHeader"><form onsubmit="return navTabSearch(this);" action="<?php echo "/project/Public/admin/index.php.?c=AccessLog";?>
" method="post"><div class="searchBar"><table class="searchContent"><tr><td>日期：
<input type="text" class="date" readonly="true" name="create_time" value="<?php echo (isset($_POST['create_time']) ? $_POST['create_time'] : '');?>
"/></td><td><select class="combox" name="app_name"><option value="">--选择应用--</option><?php echo smarty_function_html_options(array('options'=>(isset($_smarty_tpl->tpl_vars['apps']->value)?$_smarty_tpl->tpl_vars['apps']->value:''),'selected'=>(isset($_POST['app_name']) ? $_POST['app_name'] : '')),$_smarty_tpl);?>

 </select></td><td><div class="subBar"><ul><li><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></li><li><div class="buttonActive"><div class="buttonContent"><button type="button" onclick="return navTabSearch(this);">刷新</button></div></div></li></ul></div></td></tr></table></div></form></div><div class="pageContent"><div class="panelBar"><ul class="toolBar"><li><a class="add" href="<?php echo "/project/Public/admin/index.php.?c=AccessLog&a=import";?>
" target="ajaxTodo"><span>导入日志</span></a></li></ul></div><table class="table" width="100%" layoutH="114"><thead><tr><th>访问时间</th><th>请求ip</th><th>控制器</th><th>操作</th><th>响应IP</th><th>运行时间(ms)</th><th>应用名称</th></tr></thead><tbody><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
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
<tr><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['create_time'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['create_time']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['client_ip'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['client_ip']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['controller_name'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['controller_name']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['action_name'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['action_name']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['server_ip'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['server_ip']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['run_time'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['run_time']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['app_name'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['app_name']:'');?>
</td></tr>    <?php endfor; endif; ?>
</tbody></table><?php echo $_smarty_tpl->getSubTemplate ("Include/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div><?php }} ?>