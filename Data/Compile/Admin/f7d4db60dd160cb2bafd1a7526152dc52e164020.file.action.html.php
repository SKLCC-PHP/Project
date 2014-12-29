<?php /* Smarty version Smarty-3.1.12, created on 2014-02-16 09:39:31
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\Music\action.html" */ ?>
<?php /*%%SmartyHeaderCode:27204530016d36d4655-97685183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7d4db60dd160cb2bafd1a7526152dc52e164020' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\Music\\action.html',
      1 => 1371095365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27204530016d36d4655-97685183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'state_arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_530016d3764565_95455330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530016d3764565_95455330')) {function content_530016d3764565_95455330($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'C:\\xampp\\htdocs\\project\\Common\\Smarty\\plugins\\function.html_radios.php';
?>
<div class="pageContent"><form method="post" action="<?php echo "/project/Public/admin/index.php?c=Music&a=".((string)@ACTION_NAME);?>
" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);"><div class="pageFormContent" layoutH="56"><input type="hidden" name="id" value="<?php echo (isset($_smarty_tpl->tpl_vars['info']->value['id'])?$_smarty_tpl->tpl_vars['info']->value['id']:'');?>
"><dl class="nowrap"><dt>标题：</dt><dd><input name="title" class="required" type="text" size="30" value="<?php echo (isset($_smarty_tpl->tpl_vars['info']->value['title'])?$_smarty_tpl->tpl_vars['info']->value['title']:'');?>
" alt=""/></dd></dl><dl class="nowrap"><dt>作者：</dt><dd><input name="author" class="required" type="text" size="30" value="<?php echo (isset($_smarty_tpl->tpl_vars['info']->value['author'])?$_smarty_tpl->tpl_vars['info']->value['author']:'');?>
" alt=""/></dd></dl><dl class="nowrap"><dt>链接：</dt><dd><input name="url" class="required" type="text" size="30" value="<?php echo (isset($_smarty_tpl->tpl_vars['info']->value['url'])?$_smarty_tpl->tpl_vars['info']->value['url']:'');?>
" alt=""/></dd></dl><dl class="nowrap"><dt>排序：</dt><dd><input name="rank" type="text" size="30" value="<?php echo (isset($_smarty_tpl->tpl_vars['info']->value['rank'])?$_smarty_tpl->tpl_vars['info']->value['rank']:'');?>
" alt=""/></dd></dl><dl class="nowrap"><dt>状态：</dt><dd><?php echo smarty_function_html_radios(array('name'=>'state','options'=>(isset($_smarty_tpl->tpl_vars['state_arr']->value)?$_smarty_tpl->tpl_vars['state_arr']->value:''),'checked'=>(($tmp = @(isset($_smarty_tpl->tpl_vars['info']->value['state'])?$_smarty_tpl->tpl_vars['info']->value['state']:''))===null||$tmp==='' ? 0 : $tmp)),$_smarty_tpl);?>
</dd></dl></div><div class="formBar"><ul><li><div class="buttonActive"><div class="buttonContent"><button type="submit"><?php if (@ACTION_NAME=="add"){?>添加<?php }else{ ?>修改<?php }?></button></div></div></li><li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li></ul></div></form></div><?php }} ?>