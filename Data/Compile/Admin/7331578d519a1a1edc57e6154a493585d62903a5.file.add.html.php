<?php /* Smarty version Smarty-3.1.12, created on 2014-02-24 09:35:39
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\Manager\add.html" */ ?>
<?php /*%%SmartyHeaderCode:14510530740f8974bb9-03009380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7331578d519a1a1edc57e6154a493585d62903a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\Manager\\add.html',
      1 => 1393205725,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14510530740f8974bb9-03009380',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_530740f8a52ab4_16297625',
  'variables' => 
  array (
    'roles' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530740f8a52ab4_16297625')) {function content_530740f8a52ab4_16297625($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\project\\Common\\Smarty\\plugins\\function.html_options.php';
?>
<div class="pageContent"><form method="post" action="<?php echo "/project/index.php?c=Manager&a=add";?>
" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);"><div class="pageFormContent" layoutH="56"><p><label>学号(工号)：</label><input name="username" class="required" type="text" size="30" value="" alt=""/></p><p><label>姓名：</label><input name="realname" class="required" type="text" size="30" value="" alt=""/></p><p><label>院系：</label><input name="college_id" class="required" type="text" size="30" value="" alt=""/></p><p><label>联系电话：</label><input name="telephone" class="required" type="text" size="30" value="" alt=""/></p><p><label>邮箱：</label><input name="email" class="required" type="text" size="30" value="" alt=""/></p><p><label>密码：</label><input name="password" class="required alphanumeric" type="password" size="30" value="" alt=""/></p><p><label>角色：</label><select name="role_id" class="combox required"><option value="">--角色--</option><?php echo smarty_function_html_options(array('options'=>(isset($_smarty_tpl->tpl_vars['roles']->value)?$_smarty_tpl->tpl_vars['roles']->value:''),'selected'=>(isset($_POST['role']) ? $_POST['role'] : '')),$_smarty_tpl);?>

</select></p><p><label>状态：</label><select name="status" class="combox"><?php echo smarty_function_html_options(array('options'=>(isset($_smarty_tpl->tpl_vars['status']->value)?$_smarty_tpl->tpl_vars['status']->value:''),'selected'=>(isset($_POST['status']) ? $_POST['status'] : '')),$_smarty_tpl);?>

</select></p></div><div class="formBar"><ul><li><div class="buttonActive"><div class="buttonContent"><button type="submit">添加</button></div></div></li><li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li></ul></div></form></div><?php }} ?>