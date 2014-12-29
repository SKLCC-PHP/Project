<?php /* Smarty version Smarty-3.1.12, created on 2014-02-16 12:10:24
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\Role\add.html" */ ?>
<?php /*%%SmartyHeaderCode:2201253003a30679d92-31156502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5a70c88261d3011a149521535be13421d43fca8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\Role\\add.html',
      1 => 1371095365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2201253003a30679d92-31156502',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'trees' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53003a306c2422_23539335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53003a306c2422_23539335')) {function content_53003a306c2422_23539335($_smarty_tpl) {?><div id="resultBox"></div><div class="pageContent"><form method="post" action="<?php echo "/project/Public/admin/index.php?c=Role&a=add";?>
" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);"><div class="pageFormContent" layoutH="56"><dl><dt>名称：</dt><dd><input name="name" class="required" type="text" size="30" value="" alt=""/></dd></dl><dl style="width:100%"><dt>授权：</dt><dd><div style="overflow:auto; width:300px; height:400px; border:solid 1px #CCC; line-height:21px; background:#FFF;"><ul class="tree treeFolder treeCheck expand"  oncheck=""><?php echo (isset($_smarty_tpl->tpl_vars['trees']->value)?$_smarty_tpl->tpl_vars['trees']->value:'');?>

</ul></div></dd></dl></div><div class="formBar"><ul><li><div class="buttonActive"><div class="buttonContent"><button type="submit">添加</button></div></div></li><li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li></ul></div></form></div><script type="text/javascript">function kkk(){
var json = arguments[0], result="";
//alert(json.checked);
$(json.items).each(function(i){
result += "<p>name:"+this.name + " value:"+this.value+" text: "+this.text+"</p>";
});
$("#resultBox").html(result);
}
</script><?php }} ?>