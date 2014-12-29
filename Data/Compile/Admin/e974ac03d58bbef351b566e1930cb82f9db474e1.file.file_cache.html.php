<?php /* Smarty version Smarty-3.1.12, created on 2014-02-22 23:21:10
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\System\file_cache.html" */ ?>
<?php /*%%SmartyHeaderCode:7745530021842ce045-14955882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e974ac03d58bbef351b566e1930cb82f9db474e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\System\\file_cache.html',
      1 => 1393049053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7745530021842ce045-14955882',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5300218431af64_64791095',
  'variables' => 
  array (
    'info' => 0,
    'dirArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300218431af64_64791095')) {function content_5300218431af64_64791095($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\project\\Common\\Smarty\\plugins\\function.html_options.php';
?>
<div class="pageContent"><form method="post" action="/project/Public/admin/index.php?c=System&a=clearFileCache" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);"><input type="hidden" name="id" value="<?php echo (isset($_smarty_tpl->tpl_vars['info']->value['id'])?$_smarty_tpl->tpl_vars['info']->value['id']:'');?>
"><div class="pageFormContent" layoutH="56"><p><label>缓存目录：</label><select name="table[]" multiple="multiple" style="width: 200px;height: 250px" size="10"><?php echo smarty_function_html_options(array('options'=>(isset($_smarty_tpl->tpl_vars['dirArr']->value)?$_smarty_tpl->tpl_vars['dirArr']->value:'')),$_smarty_tpl);?>

</select>&nbsp;<span>(按 Ctrl 可以进行多选)</span></p></div><div class="formBar"><ul><li><div class="buttonActive"><div class="buttonContent"><button type="submit">清空</button></div></div></li><li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li></ul></div></form></div><?php }} ?>