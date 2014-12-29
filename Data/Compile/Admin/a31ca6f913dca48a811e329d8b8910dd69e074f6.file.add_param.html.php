<?php /* Smarty version Smarty-3.1.12, created on 2014-02-25 15:47:21
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\System\add_param.html" */ ?>
<?php /*%%SmartyHeaderCode:1802753004fb5a0c664-92157760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a31ca6f913dca48a811e329d8b8910dd69e074f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\System\\add_param.html',
      1 => 1393305027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1802753004fb5a0c664-92157760',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53004fb5ae5179_90965597',
  'variables' => 
  array (
    'type' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53004fb5ae5179_90965597')) {function content_53004fb5ae5179_90965597($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'C:\\xampp\\htdocs\\project\\Common\\Smarty\\plugins\\function.html_radios.php';
if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\project\\Common\\Smarty\\plugins\\function.html_options.php';
?><div class="pageContent"><form method="post" action="<?php echo "/project/index.php?c=System&a=param&action=add";?>
" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);"><div class="pageFormContent" layoutH="56"><dl class="nowrap"><dt>变量名称：</dt><dd><input name="varname" class="required" type="text" size="40" value=""/></dd></dl><dl class="nowrap"><dt>变量值：</dt><dd><input name="value" class="" type="text" size="40" value=""/></dd></dl><dl class="nowrap"><dt>变量类型：</dt><dd><?php echo smarty_function_html_radios(array('name'=>"type",'options'=>(isset($_smarty_tpl->tpl_vars['type']->value)?$_smarty_tpl->tpl_vars['type']->value:''),'checked'=>'string'),$_smarty_tpl);?>
</dd></dl><dlclass="nowrap"><dt>参数说明：</dt><dd><textarea class="required" name="info" rows="4" cols="50"></textarea></dd></dl><dl class="nowrap"><dt>所属组：</dt><dd><select name="groupid" class="combox required"><?php echo smarty_function_html_options(array('options'=>(isset($_smarty_tpl->tpl_vars['group']->value)?$_smarty_tpl->tpl_vars['group']->value:'')),$_smarty_tpl);?>

</select></dd></dl></div><div class="formBar"><ul><li><div class="buttonActive"><div class="buttonContent"><button type="submit">添加</button></div></div></li><li><div class="buttonActive"><div class="buttonContent"><button type="reset">重置</button></div></div></li><li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li></ul></div></form></div><?php }} ?>