<?php /* Smarty version Smarty-3.1.12, created on 2014-02-16 23:29:36
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\Template\update.html" */ ?>
<?php /*%%SmartyHeaderCode:172465300ce2f58da04-42080752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7816abfef7a91af36d2919dab5bb596eb164fa06' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\Template\\update.html',
      1 => 1392564559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172465300ce2f58da04-42080752',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5300ce2f5ed2e4_00830677',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300ce2f5ed2e4_00830677')) {function content_5300ce2f5ed2e4_00830677($_smarty_tpl) {?>
<div class="pageContent"><form method="post" action="<?php echo "/project/Public/admin/index.php?c=Template&a=update";?>
" class="pageForm required-validate" onsubmit="return iframeCallback(this, dialogAjaxDone);" enctype="multipart/form-data"><div class="pageFormContent" layoutH="56"><input type="hidden" name="id" value="<?php echo (isset($_smarty_tpl->tpl_vars['info']->value['id'])?$_smarty_tpl->tpl_vars['info']->value['id']:'');?>
"><dl class="nowrap"><dt>所属项目：</dt><dd><select name="program" class="combox required" class="combox required"><option value="<?php echo (isset($_smarty_tpl->tpl_vars['info']->value['program'])?$_smarty_tpl->tpl_vars['info']->value['program']:'');?>
" selected=$info.praogram></option><option value="大学生课外学术科研基金项目">大学生课外学术科研基金项目</option></select></dd></dl><dl><dt>作用描述：</dt><dd><textarea  name="description"  rows="5" cols="80" ><?php echo (isset($_smarty_tpl->tpl_vars['info']->value['description'])?$_smarty_tpl->tpl_vars['info']->value['description']:'');?>
</textarea></dd></dl><dl></dl><dl></dl><dl></dl><dl></dl><dl></dl><dl ><dt>重新选择doc模版：</dt><dd><input type="file" name="address" value="" /></dd></dl></dl></div><div class="formBar"><ul><li><div class="buttonActive"><div class="buttonContent"><button type="submit"><?php if (@ACTION_NAME=="upload"){?>上传<?php }else{ ?>修改<?php }?></button></div></div></li><li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li></ul></div></form></div><?php }} ?>