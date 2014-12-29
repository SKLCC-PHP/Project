<?php /* Smarty version Smarty-3.1.12, created on 2014-02-25 13:29:31
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\KYJJ\update.html" */ ?>
<?php /*%%SmartyHeaderCode:13345530060dd6e6857-24844780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94c2972abc1f12ca1b16915401b63dc4d6c7658d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\KYJJ\\update.html',
      1 => 1393305027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13345530060dd6e6857-24844780',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_530060dd77bd35_25750873',
  'variables' => 
  array (
    'program_info' => 0,
    'manager_info' => 0,
    'college' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530060dd77bd35_25750873')) {function content_530060dd77bd35_25750873($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\project\\Common\\Smarty\\plugins\\function.html_options.php';
?>
<div class="pageContent"><form method="post" action="<?php echo "/project/index.php?c=KYJJ&a=update";?>
" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);"><div class="pageFormContent" layoutH="56"><input type="hidden" name="id" value="<?php echo (isset($_smarty_tpl->tpl_vars['program_info']->value['id'])?$_smarty_tpl->tpl_vars['program_info']->value['id']:'');?>
"><dl><dt>项目名称：</dt><dd><input name="title" id="title" class="required" type="text" size="30" value="<?php echo (isset($_smarty_tpl->tpl_vars['program_info']->value['title'])?$_smarty_tpl->tpl_vars['program_info']->value['title']:'');?>
" alt=""/></dd></dl><dl><dt>主持人：</dt><dd><input name="host_student" type="text" size="20" value="<?php echo (isset($_smarty_tpl->tpl_vars['manager_info']->value['realname'])?$_smarty_tpl->tpl_vars['manager_info']->value['realname']:'');?>
" readonly="readonly"/></dd></dl><dl><dt>项目类别：</dt><dd><select name="type" class="combox required"><option value="<?php echo (isset($_smarty_tpl->tpl_vars['program_info']->value['type'])?$_smarty_tpl->tpl_vars['program_info']->value['type']:'');?>
" selected=$program_info.type></option><option value="一般项目">一般项目</option><option value="重点项目">重点项目</option><option value="重大项目预研项目">重大项目预研项目</option><option value="重大项目">重大项目</option></select></dd></dl><dl><dt>联系电话</dt><dd><input name="telephone" type="text" size="30" value="<?php echo (isset($_smarty_tpl->tpl_vars['manager_info']->value['telephone'])?$_smarty_tpl->tpl_vars['manager_info']->value['telephone']:'');?>
" readonly="readonly"/></dd></dl><dl><dt>单位名称：</dt><dd><select class="combox" name="college_id" class="combox required"><option value="<?php echo (isset($_smarty_tpl->tpl_vars['manager_info']->value['college_id'])?$_smarty_tpl->tpl_vars['manager_info']->value['college_id']:'');?>
"></option><?php echo smarty_function_html_options(array('options'=>(isset($_smarty_tpl->tpl_vars['college']->value)?$_smarty_tpl->tpl_vars['college']->value:''),'selected'=>(isset($_POST['college_id']) ? $_POST['college_id'] : '')),$_smarty_tpl);?>

</select></dd></dl><dl><dt>邮箱:</dt><dd><input name="email" type="text" size="20" value="<?php echo (isset($_smarty_tpl->tpl_vars['manager_info']->value['email'])?$_smarty_tpl->tpl_vars['manager_info']->value['email']:'');?>
" readonly="readonly" /></dd></dl><dl><dt>指导老师：</dt><dd><input name="teacher" type="text" size="23" class="required" value="<?php echo (isset($_smarty_tpl->tpl_vars['program_info']->value['teacher'])?$_smarty_tpl->tpl_vars['program_info']->value['teacher']:'');?>
" /></dd></dl><dl><dt></dt><dd></dd></dl><dl><dt>项目组成员：</dt><dd><input name="member" type="text" size="40" value = "<?php echo (isset($_smarty_tpl->tpl_vars['program_info']->value['member'])?$_smarty_tpl->tpl_vars['program_info']->value['member']:'');?>
"/></dd></dl><dl><dt>(多个成员逗号隔开)</dt><dd></dd></dl><dl><dt>最高学历：</dt><dd><select class="combox" name="highest_edu" class="combox required"><option value="<?php echo (isset($_smarty_tpl->tpl_vars['program_info']->value['highest_edu'])?$_smarty_tpl->tpl_vars['program_info']->value['highest_edu']:'');?>
" selected=$program_info.highest_edu></option><option value="本科生">本科生</option><option value="研究生">研究生</option></select></dd></dl><div class="divider"></div><dl class="nowrap"><dt>备注：</dt><dd><textarea class="" name="remarks" id="remarks" rows="5" cols="80"><?php echo (isset($_smarty_tpl->tpl_vars['program_info']->value['remarks'])?$_smarty_tpl->tpl_vars['program_info']->value['remarks']:'');?>
</textarea></dd></dl></div><div class="formBar"><ul><li><div class="buttonActive"><div class="buttonContent"><button type="submit">修改</button></div></div></li><li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li></ul></div></form></div><?php }} ?>