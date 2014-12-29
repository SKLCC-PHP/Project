<?php /* Smarty version Smarty-3.1.12, created on 2014-02-21 19:05:32
         compiled from "C:\xampp\htdocs\project_test\Application\Install\View\Index\four.html" */ ?>
<?php /*%%SmartyHeaderCode:3808530732fc8f4d72-05155449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '781b0e9fdb5daa3c3e8474c5a65f3874922a7060' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_test\\Application\\Install\\View\\Index\\four.html',
      1 => 1371095362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3808530732fc8f4d72-05155449',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tables' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_530732fca189e8_00380754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530732fca189e8_00380754')) {function content_530732fca189e8_00380754($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="mainWidth" style="padding:20px 0;margin:0px auto; width:800px;"><div id="notice" style="height:300px;overflow:auto;border:1px solid #ccc;padding:4px;"><?php if ((isset($_smarty_tpl->tpl_vars['tables']->value)?$_smarty_tpl->tpl_vars['tables']->value:'')){?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=(isset($_smarty_tpl->tpl_vars['tables']->value)?$_smarty_tpl->tpl_vars['tables']->value:'')) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
create_table <?php echo (isset($_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']])?$_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]:'');?>
 ... succeed<br/><?php endfor; endif; ?>
安装成功。<br/><br>安全起见，请删除本安装文件：<?php echo (isset($_smarty_tpl->tpl_vars['file']->value)?$_smarty_tpl->tpl_vars['file']->value:'');?>
<br/><br><font color="blue">请记住后台初始账号：admin 密码为：123456，登陆后可自行修改.</font><br/><br /><input type="button" value="进入后台" class="submit" onclick="document.location='/project_test/Public/admin'" /><br/><?php }else{ ?>
<font color="red">安装过程中出现错误......</font><?php }?>
        </div></div><?php echo $_smarty_tpl->getSubTemplate ("Include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>