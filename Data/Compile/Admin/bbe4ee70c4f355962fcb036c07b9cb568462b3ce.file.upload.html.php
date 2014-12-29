<?php /* Smarty version Smarty-3.1.12, created on 2014-04-20 16:55:44
         compiled from "C:\xampp\htdocs\project_test\Application\Admin\View\Attachment\upload.html" */ ?>
<?php /*%%SmartyHeaderCode:637253255b7028fcf9-11822702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbe4ee70c4f355962fcb036c07b9cb568462b3ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_test\\Application\\Admin\\View\\Attachment\\upload.html',
      1 => 1397920065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '637253255b7028fcf9-11822702',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53255b70354bd3_56026410',
  'variables' => 
  array (
    'cur_project_title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53255b70354bd3_56026410')) {function content_53255b70354bd3_56026410($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\project_test\\Common\\Smarty\\plugins\\function.html_options.php';
?>
<div class="pageContent"><form method="post" action="<?php echo "/project_test/index.php?c=Attachment&a=upload&PID=".((string)$_smarty_tpl->tpl_vars['PID']->value)."&TIME=".((string)$_smarty_tpl->tpl_vars['TIME']->value);?>
" class="pageForm required-validate" onsubmit="return iframeCallback(this, dialogAjaxDone);" enctype="multipart/form-data"><div class="pageFormContent" layoutH="56">&nbsp&nbsp<b>提示：</b>附件以自己的姓名命名，文档统一上传pdf格式，汇报材料压缩后上传</br></br></br><dl class="nowrap"><dt>项目名称：</dt><dd><select class="combox" name="programid" class="combox required"><option value="">--项目名称--</option><?php echo smarty_function_html_options(array('options'=>(isset($_smarty_tpl->tpl_vars['cur_project_title']->value)?$_smarty_tpl->tpl_vars['cur_project_title']->value:''),'selected'=>(isset($_POST['programid']) ? $_POST['programid'] : '')),$_smarty_tpl);?>

</select></dd></dl><dl class="nowrap"><dt>附件归属：</dt><dd><select name="type" class="combox required" class="combox required"><option value="">--附件归属--</option><option value="项目申请文档">项目申请文档</option><option value="中期检查文档">中期检查文档</option><option value="中期汇报ppt等">中期汇报ppt等</option><option value="结题评审文档">结题评审文档</option><option value="结题汇报ppt等">结题汇报ppt等</option><option value="已发表论文">已发表论文</option><option value="其它">其它</option></select></dd></dl><dl><dt>描述：</dt><dd><textarea class="" name="description" id="remarks" rows="5" cols="80"></textarea></dd></dl><dl></dl><dl></dl><dl></dl><dl></dl><dl></dl><dl ><dt>附件：</dt><dd><input type="file" name="address" value="" /></dd></dl></dl></div><div class="formBar"><ul><li><div class="buttonActive"><div class="buttonContent"><button type="submit"><?php if (@ACTION_NAME=="upload"){?>上传<?php }else{ ?>修改<?php }?></button></div></div></li><li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li></ul></div></form></div><?php }} ?>