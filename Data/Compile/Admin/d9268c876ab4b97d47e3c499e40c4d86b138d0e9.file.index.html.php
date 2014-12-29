<?php /* Smarty version Smarty-3.1.12, created on 2014-02-25 15:43:06
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\Attachment\index.html" */ ?>
<?php /*%%SmartyHeaderCode:509653005ee5996957-15257673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9268c876ab4b97d47e3c499e40c4d86b138d0e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\Attachment\\index.html',
      1 => 1393305027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '509653005ee5996957-15257673',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53005ee5aba826_41397142',
  'variables' => 
  array (
    'page' => 0,
    'college' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53005ee5aba826_41397142')) {function content_53005ee5aba826_41397142($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\project\\Common\\Smarty\\plugins\\function.html_options.php';
?>
<form id="pagerForm" method="post" action="<?php echo "/project/index.php?c=Attachment";?>
"><input type="hidden" name="pageNum" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['pageNum'])?$_smarty_tpl->tpl_vars['page']->value['pageNum']:'');?>
" /><input type="hidden" name="numPerPage" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['numPerPage'])?$_smarty_tpl->tpl_vars['page']->value['numPerPage']:'');?>
" /><input type="hidden" name="orderField" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['orderField'])?$_smarty_tpl->tpl_vars['page']->value['orderField']:'');?>
" /><input type="hidden" name="orderDirection" value="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['orderDirection'])?$_smarty_tpl->tpl_vars['page']->value['orderDirection']:'');?>
" /><input type="hidden" name="programid" value="<?php echo (isset($_POST['programid']) ? $_POST['programid'] : '');?>
"><input type="hidden" name="type" value="<?php echo (isset($_POST['type']) ? $_POST['type'] : '');?>
"><input type="hidden" name="name" value="<?php echo (isset($_POST['name']) ? $_POST['name'] : '');?>
" /><input type="hidden" name="host_student" value="<?php echo (isset($_POST['host_student']) ? $_POST['host_student'] : '');?>
"><input type="hidden" name="member" value="<?php echo (isset($_POST['member']) ? $_POST['member'] : '');?>
"><input type="hidden" name="totle_number" value="<?php echo (isset($_POST['totle_number']) ? $_POST['totle_number'] : '');?>
"><input type="hidden" name="unit" value="<?php echo (isset($_POST['unit']) ? $_POST['unit'] : '');?>
" /><input type="hidden" name="teacher" value="<?php echo (isset($_POST['teacher']) ? $_POST['teacher'] : '');?>
" /><input type="hidden" name="telephone" value="<?php echo (isset($_POST['telephone']) ? $_POST['telephone'] : '');?>
" /><input type="hidden" name="middle_check" value="<?php echo (isset($_POST['middle_check']) ? $_POST['middle_check'] : '');?>
" /><input type="hidden" name="final_check" value="<?php echo (isset($_POST['final_check']) ? $_POST['final_check'] : '');?>
" /><input type="hidden" name="remarks" value="<?php echo (isset($_POST['remarks']) ? $_POST['remarks'] : '');?>
" /></form><div class="pageHeader"><form onsubmit="return navTabSearch(this);" action="<?php echo "/project/index.php?c=Attachment&a=".((string)@index)."&programid=30";?>
" method="post"><div class="searchBar"><table class="searchContent"><tr><td><select class="combox" name="type"><option value="">--附件归属--</option><option value="项目申请材料">项目申请材料</option><option value="中期检查材料">中期检查材料</option><option value="结题评审材料">结题评审材料</option><option value="已发表论文">已发表论文</option><option value="其它">其它</option></select></td><td><select class="combox" name="college_id"><option value="">--单位--</option><?php echo smarty_function_html_options(array('options'=>(isset($_smarty_tpl->tpl_vars['college']->value)?$_smarty_tpl->tpl_vars['college']->value:''),'selected'=>(isset($_POST['college_id']) ? $_POST['college_id'] : '')),$_smarty_tpl);?>

</select></td><td><div class="subBar"><ul><li><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></li><li><div class="button"><div class="buttonContent"><button type="button" onclick="return navTabSearch(this);">刷新</button></div></div></li></ul></div></td></tr></table></div></form></div><div class="pageContent"><div class="panelBar"><ul class="toolBar"><li><a class="add" href="<?php echo "/project/index.php?c=Attachment&a=upload";?>
" target="dialog" width = "800" height= "500"><span>添加附件</span></a></li></ul></div><table class="table" width="100%" layoutH="114"><thead><tr><th orderField="id" class="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['orderDirection'])?$_smarty_tpl->tpl_vars['page']->value['orderDirection']:'');?>
">项目编号</th><th>项目名称</th><th>附件名称</th><th>附件归属</th><th>描述</th><th>上传者</th><th>单位</th><th>上传时间</th><th>预览</th><th>下载</th><th>删除</th></tr></thead><tbody><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
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
"><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['program_id'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['program_id']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['programtitle'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['programtitle']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['name'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['name']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['type'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['type']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['description'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['description']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['realname'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['realname']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['college_name'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['college_name']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['create_time'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['create_time']:'');?>
</td><td><a target = "_blank" class="btnLook" href="/project/Public/share/upload/<?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['address'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['address']:'');?>
" >预览|</a></td><td><a class="btnSelect" href="<?php echo "/project/index.php?c=Attachment&a=download&address=".((string)(isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['address'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['address']:''))."&name=".((string)(isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['name'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['name']:''));?>
" >下载</a></td><td><a target="ajaxTodo" href="<?php echo "/project/index.php?c=Attachment&a=delete&ids=".((string)(isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id']:''));?>
" class="btnDel" title="确定要删除吗?">删除</a></td></tr>    <?php endfor; endif; ?>
</tbody></table><?php echo $_smarty_tpl->getSubTemplate ("Include/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div><?php }} ?>