<?php /* Smarty version Smarty-3.1.12, created on 2014-02-25 13:29:48
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\Manager\setPwd.html" */ ?>
<?php /*%%SmartyHeaderCode:525353003a4e9c2a62-92934383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a25e9c4fdfa57bc685e1f91b8fd0d91142df2e8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\Manager\\setPwd.html',
      1 => 1393305027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '525353003a4e9c2a62-92934383',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53003a4ea88477_52396927',
  'variables' => 
  array (
    'manager_info' => 0,
    'college' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53003a4ea88477_52396927')) {function content_53003a4ea88477_52396927($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\project\\Common\\Smarty\\plugins\\function.html_options.php';
?>
<div class="pageContent"><form method="post" action="<?php echo "/project/index.php?c=Manager&a=setPwd";?>
" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)"><div class="pageFormContent" layoutH="58"><div class="unit"><label>学(工)号：</label><input type="text" name="username" size="30" class="required" value="<?php echo (isset($_smarty_tpl->tpl_vars['manager_info']->value['username'])?$_smarty_tpl->tpl_vars['manager_info']->value['username']:'');?>
" /></div><div class="unit"><label>姓名：</label><input type="text" name="realname" size="30" class="required" value="<?php echo (isset($_smarty_tpl->tpl_vars['manager_info']->value['realname'])?$_smarty_tpl->tpl_vars['manager_info']->value['realname']:'');?>
" /></div><div class="unit"><label>学院：</label><select class="combox" name="college_id" class="combox required"><option value="<?php echo (isset($_smarty_tpl->tpl_vars['manager_info']->value['college_id'])?$_smarty_tpl->tpl_vars['manager_info']->value['college_id']:'');?>
"></option><?php echo smarty_function_html_options(array('options'=>(isset($_smarty_tpl->tpl_vars['college']->value)?$_smarty_tpl->tpl_vars['college']->value:''),'selected'=>(isset($_POST['college_id']) ? $_POST['college_id'] : '')),$_smarty_tpl);?>

</select></div><div class="unit"><label>联系电话：</label><input type="text" name="telephone" size="30" class="required" value="<?php echo (isset($_smarty_tpl->tpl_vars['manager_info']->value['telephone'])?$_smarty_tpl->tpl_vars['manager_info']->value['telephone']:'');?>
" /></div><div class="unit"><label>邮箱：</label><input type="text" name="email" size="30" class="required" value="<?php echo (isset($_smarty_tpl->tpl_vars['manager_info']->value['email'])?$_smarty_tpl->tpl_vars['manager_info']->value['email']:'');?>
" /></div><div class="unit"><label>密码：</label><input type="password" name="password" size="30" value="" />留空则不修改
</div></div><div class="formBar"><ul><li><div class="buttonActive"><div class="buttonContent"><button type="submit">提交</button></div></div></li><li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li></ul></div></form></div>
<?php }} ?>