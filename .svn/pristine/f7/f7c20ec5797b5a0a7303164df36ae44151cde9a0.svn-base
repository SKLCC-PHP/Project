<?php /* Smarty version Smarty-3.1.12, created on 2014-02-23 16:39:21
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\Manager\update.html" */ ?>
<?php /*%%SmartyHeaderCode:8423530741000cd720-53880608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '216fc38c0728c790a2688de64acd65e71d659ae4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\Manager\\update.html',
      1 => 1393144718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8423530741000cd720-53880608',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5307410023ed43_23144181',
  'variables' => 
  array (
    'user_info' => 0,
    'roles' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5307410023ed43_23144181')) {function content_5307410023ed43_23144181($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\project\\Common\\Smarty\\plugins\\function.html_options.php';
?>
<div class="pageContent"><form method="post" action="<?php echo "/project/index.php?c=Manager&a=update";?>
" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);"><div class="pageFormContent" layoutH="56"><input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->tpl_vars['user_info']->value['uid'])?$_smarty_tpl->tpl_vars['user_info']->value['uid']:'');?>
"><p><label>账号：</label><input name="username" class="required" type="text" size="30" value="<?php echo (isset($_smarty_tpl->tpl_vars['user_info']->value['username'])?$_smarty_tpl->tpl_vars['user_info']->value['username']:'');?>
" alt="请输入账号"/></p><p><label>密码：</label><input name="password" class="alphanumeric" type="password" size="30" value="" alt="请输入密码"/>&nbsp;<span>留空则不修改</span></p><p><label>角色：</label><select name="role_id" class="combox required"><option value="">--角色--</option><?php echo smarty_function_html_options(array('options'=>(isset($_smarty_tpl->tpl_vars['roles']->value)?$_smarty_tpl->tpl_vars['roles']->value:''),'selected'=>(isset($_smarty_tpl->tpl_vars['user_info']->value['role_id'])?$_smarty_tpl->tpl_vars['user_info']->value['role_id']:'')),$_smarty_tpl);?>

</select></p><p><label>状态：</label><select name="status" class="combox"><?php echo smarty_function_html_options(array('options'=>(isset($_smarty_tpl->tpl_vars['status']->value)?$_smarty_tpl->tpl_vars['status']->value:''),'selected'=>(isset($_smarty_tpl->tpl_vars['user_info']->value['status'])?$_smarty_tpl->tpl_vars['user_info']->value['status']:'')),$_smarty_tpl);?>

</select></p></div><div class="formBar"><ul><li><div class="buttonActive"><div class="buttonContent"><button type="submit">修改</button></div></div></li><li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li></ul></div></form></div><?php }} ?>