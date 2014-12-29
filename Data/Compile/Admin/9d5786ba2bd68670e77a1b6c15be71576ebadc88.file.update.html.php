<?php /* Smarty version Smarty-3.1.12, created on 2014-02-23 15:15:19
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\Module\update.html" */ ?>
<?php /*%%SmartyHeaderCode:633953002071e93ba7-99692873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d5786ba2bd68670e77a1b6c15be71576ebadc88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\Module\\update.html',
      1 => 1393049053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '633953002071e93ba7-99692873',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53002071f1d427_33455341',
  'variables' => 
  array (
    'module_info' => 0,
    'levels' => 0,
    'targets' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53002071f1d427_33455341')) {function content_53002071f1d427_33455341($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\project\\Common\\Smarty\\plugins\\function.html_options.php';
?>
<div class="pageContent"><form method="post" action="<?php echo "/project/index.php?c=Module&a=update";?>
" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);"><div class="pageFormContent" layoutH="56"><input type="hidden" name="id" value="<?php echo (isset($_smarty_tpl->tpl_vars['module_info']->value['id'])?$_smarty_tpl->tpl_vars['module_info']->value['id']:'');?>
" /><dl class="nowrap"><dt>名称：</dt><dd><input name="name" class="required" type="text" size="30" value="<?php echo (isset($_smarty_tpl->tpl_vars['module_info']->value['name'])?$_smarty_tpl->tpl_vars['module_info']->value['name']:'');?>
" alt=""/></dd></dl><dl class="nowrap"><dt>路径：</dt><dd><input name="url" class="" type="text" size="30" value="<?php echo (isset($_smarty_tpl->tpl_vars['module_info']->value['url'])?$_smarty_tpl->tpl_vars['module_info']->value['url']:'');?>
" alt=""/></dd></dl><dl class="nowrap"><dt>序号：</dt><dd><input name="number" class="" type="text" size="30" value="<?php echo (isset($_smarty_tpl->tpl_vars['module_info']->value['number'])?$_smarty_tpl->tpl_vars['module_info']->value['number']:'');?>
" alt=""/></dd></dl><dl class="nowrap"><dt>描述：</dt><dd><textarea name="info"  rows="5" cols="40"><?php echo (isset($_smarty_tpl->tpl_vars['module_info']->value['info'])?$_smarty_tpl->tpl_vars['module_info']->value['info']:'');?>
</textarea></dd></dl><dl class="nowrap"><dt>父节点：</dt><dd><input type="hidden" name="orgLookup.id" value="<?php echo (($tmp = @(isset($_smarty_tpl->tpl_vars['module_info']->value['parent'])?$_smarty_tpl->tpl_vars['module_info']->value['parent']:''))===null||$tmp==='' ? 0 : $tmp);?>
"/><input type="text" class="textInput required" name="orgLookup.orgName" value="<?php echo (($tmp = @(isset($_smarty_tpl->tpl_vars['module_info']->value['parent_name'])?$_smarty_tpl->tpl_vars['module_info']->value['parent_name']:''))===null||$tmp==='' ? '主菜单' : $tmp);?>
" readonly="readonly"/><a class="btnLook" href="<?php echo "/project/index.php?c=Module&a=lookup";?>
" lookupGroup="orgLookup" lookupName="orgLookup" maxable="false" resizable="false" title="查找父菜单"><hi:text key="查找带回"/></a></dd></dl><dl class="nowrap"><dt>级别：</dt><dd><select name="level" class="required"><?php echo smarty_function_html_options(array('options'=>(isset($_smarty_tpl->tpl_vars['levels']->value)?$_smarty_tpl->tpl_vars['levels']->value:''),'selected'=>(isset($_smarty_tpl->tpl_vars['module_info']->value['level'])?$_smarty_tpl->tpl_vars['module_info']->value['level']:'')),$_smarty_tpl);?>

</select></dd></dl><dl class="nowrap"><dt>弹出方式：</dt><dd><select name="target" class="required" onchange="targetChange(this.value);"><?php echo smarty_function_html_options(array('options'=>(isset($_smarty_tpl->tpl_vars['targets']->value)?$_smarty_tpl->tpl_vars['targets']->value:''),'selected'=>(isset($_smarty_tpl->tpl_vars['module_info']->value['target'])?$_smarty_tpl->tpl_vars['module_info']->value['target']:'')),$_smarty_tpl);?>

</select></dd></dl><dl class="nowrap" id="width_box" style="display:none"><dt>宽度：</dt><dd><input id="width" name="width" class="" type="text" size="3" value="<?php echo (isset($_smarty_tpl->tpl_vars['module_info']->value['width'])?$_smarty_tpl->tpl_vars['module_info']->value['width']:'');?>
" alt=""/></dd></dl><dl class="nowrap" id="height_box" style="display:none"><dt>高度：</dt><dd><input id="height" name="height" class="" type="text" size="3" value="<?php echo (isset($_smarty_tpl->tpl_vars['module_info']->value['height'])?$_smarty_tpl->tpl_vars['module_info']->value['height']:'');?>
" alt=""/></dd></dl></div><div class="formBar"><ul><li><div class="buttonActive"><div class="buttonContent"><button type="submit">编辑</button></div></div></li><li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li></ul></div></form></div><script type="text/javascript">function targetChange(value){
if(value == "dialog"){
$("#width_box").css("display", "block");
$("#height_box").css("display", "block");
$("#width").focus();
}else{
$("#width_box").css("display", "none");
$("#height_box").css("display", "none");
}
}

targetChange("<?php echo (isset($_smarty_tpl->tpl_vars['module_info']->value['target'])?$_smarty_tpl->tpl_vars['module_info']->value['target']:'');?>
");
</script>
<?php }} ?>