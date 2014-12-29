<?php /* Smarty version Smarty-3.1.12, created on 2014-02-23 14:44:50
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\Role\update.html" */ ?>
<?php /*%%SmartyHeaderCode:139345301e7832a4e18-74434046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '455b75609e18d67af32201c7564dc8aae5d7bd8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\Role\\update.html',
      1 => 1393049053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139345301e7832a4e18-74434046',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5301e7835fe1a2_65354536',
  'variables' => 
  array (
    'role_info' => 0,
    'trees' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5301e7835fe1a2_65354536')) {function content_5301e7835fe1a2_65354536($_smarty_tpl) {?>
<div class="pageContent"><div id="resultBox"></div><form method="post" action="<?php echo "/project/Public/admin/index.php?c=Role&a=update";?>
" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);"><div class="pageFormContent" layoutH="56"><input type="hidden" name="id" value="<?php echo (isset($_smarty_tpl->tpl_vars['role_info']->value['id'])?$_smarty_tpl->tpl_vars['role_info']->value['id']:'');?>
"><dl><dt>名称：</dt><dd><input name="name" class="required" type="text" size="30" value="<?php echo (isset($_smarty_tpl->tpl_vars['role_info']->value['name'])?$_smarty_tpl->tpl_vars['role_info']->value['name']:'');?>
" alt=""/></dd></dl><dl style="width:100%"><dt>授权：</dt><dd><div style="overflow:auto; width:300px; height:400px; border:solid 1px #CCC; line-height:21px; background:#FFF;"><ul class="tree treeFolder treeCheck expand"  oncheck=""><?php echo (isset($_smarty_tpl->tpl_vars['trees']->value)?$_smarty_tpl->tpl_vars['trees']->value:'');?>
</ul></div></dd></dl></div><div class="formBar"><ul><?php if ((isset($_smarty_tpl->tpl_vars['role_info']->value['id'])?$_smarty_tpl->tpl_vars['role_info']->value['id']:'')!=1){?><li><div class="buttonActive"><div class="buttonContent"><button type="submit">编辑</button></div></div></li><?php }?>
<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li></ul></div></form></div><script type="text/javascript">function kkk(){
var json = arguments[0], result="";
//alert(json.checked);
$(json.items).each(function(i){
result += "<p>name:"+this.name + " value:"+this.value+" text: "+this.text+"</p>";
});
$("#resultBox").html(result);
}

</script><?php }} ?>