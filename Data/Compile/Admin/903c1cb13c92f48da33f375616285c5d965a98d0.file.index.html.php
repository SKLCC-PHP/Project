<?php /* Smarty version Smarty-3.1.12, created on 2014-02-24 22:36:45
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\File\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2234353003a6d32c7c5-91198442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '903c1cb13c92f48da33f375616285c5d965a98d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\File\\index.html',
      1 => 1393049053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2234353003a6d32c7c5-91198442',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53003a6d46aad8_14845503',
  'variables' => 
  array (
    'active_path' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53003a6d46aad8_14845503')) {function content_53003a6d46aad8_14845503($_smarty_tpl) {?><div class="pageContent"><div class="panelBar"><ul class="toolBar"><li><a href="<?php echo "/project/index.php?c=File&a=index&active_path=".((string)$_smarty_tpl->tpl_vars['up_path']->value);?>
" target="navTab" rel="File" title="浏览文件"><img src="/project/Public/admin/images/icon/dir2.gif"/>上级目录</a></li><li class="line">line</li><span>当前目录：<?php echo (isset($_smarty_tpl->tpl_vars['active_path']->value)?$_smarty_tpl->tpl_vars['active_path']->value:'');?>
</span></ul></div><table class="table" width="100%" layoutH="75"><thead><tr><th>文件名</th><th>文件大小</th><th>最后修改时间</th><th>操作</th></tr></thead><tbody><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
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
"><td><?php if ((isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['img'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['img']:'')=='dir'){?>
<a href="<?php echo "/project/index.php?c=File&a=index&active_path=".((string)(isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['active_path'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['active_path']:''));?>
"  target="navTab" rel="File" title="浏览文件"><img src="/project/Public/admin/images/icon/<?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['img'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['img']:'');?>
.gif"/><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['name'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['name']:'');?>
</a><?php }else{ ?>
<img src="/project/Public/admin/images/icon/<?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['img'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['img']:'');?>
.gif"/><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['name'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['name']:'');?>

<?php }?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['size'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['size']:'');?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['date'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['date']:'');?>
</td><td><?php if ((isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['edit'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['edit']:'')==1){?>
<a href="<?php echo "/project/index.php?c=File&a=edit&file=".((string)(isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['active_path'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['active_path']:''));?>
" target="dialog" width="1000" height="600">[编辑]</a>&nbsp;&nbsp;
<?php }?>
<a href="<?php echo "/project/index.php?c=File&a=rename&file=".((string)(isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['active_path'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['active_path']:''));?>
" target="dialog" width="800" height="200">[改名]</a>&nbsp;&nbsp;
<a target="ajaxTodo" href="<?php echo "/project/index.php?c=File&a=delete&file=".((string)(isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['active_path'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['active_path']:''));?>
" title="确定要删除【<?php echo (isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['name'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['name']:'');?>
】吗?一旦删除将不可恢复，请仔细确认！">[删除]</a>&nbsp;&nbsp;
<?php if ((isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['img'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['img']:'')!='dir'){?>
<a href="<?php echo "/project/index.php?c=File&a=move&file=".((string)(isset($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['active_path'])?$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['active_path']:''));?>
" target="dialog" width="800" height="200">[移动]</a>&nbsp;&nbsp;
<?php }?>
</td></tr>    <?php endfor; endif; ?>
</tbody></table><div class="panelBar"><ul class="toolBar"><li><a href="<?php echo "/project/index.php?c=File";?>
" target="navTab" rel="File" title="浏览文件"><img src="/project/Public/admin/images/icon/dir2.gif"/>根目录</a></li><li class="line">line</li><li><a class="add" href="<?php echo "/project/index.php?c=File&a=create&type=file&file=".((string)$_smarty_tpl->tpl_vars['active_path']->value);?>
" target="dialog" width="800" height="600"><span>新建文件</span></a></li><li class="line">line</li><li><a class="add" href="<?php echo "/project/index.php?c=File&a=create&type=dir&file=".((string)$_smarty_tpl->tpl_vars['active_path']->value);?>
" target="dialog" width="800" height="200"><span>新建目录</span></a></li><li class="line">line</li><li><a class="icon" href="<?php echo "/project/index.php?c=File&a=upload&file=".((string)$_smarty_tpl->tpl_vars['active_path']->value);?>
" target="dialog" width="800" height="400"><span>文件上传</span></a></li><li class="line">line</li><li><a class="icon" href="<?php echo "/project/index.php?c=File&a=space&file=".((string)$_smarty_tpl->tpl_vars['active_path']->value);?>
" target="dialog" width="400" height="200"><span>空间检查</span></a></li><li><span><?php echo count((isset($_smarty_tpl->tpl_vars['list']->value)?$_smarty_tpl->tpl_vars['list']->value:''));?>
个对象</span></li></ul></div></div><?php }} ?>