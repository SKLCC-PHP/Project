<?php /* Smarty version Smarty-3.1.12, created on 2014-02-24 22:36:48
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\System\mark.html" */ ?>
<?php /*%%SmartyHeaderCode:460853003a70017a34-86946775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17100d0349b2161ae4b56792487e858447c567e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\System\\mark.html',
      1 => 1393049054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '460853003a70017a34-86946775',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53003a70133655_48885331',
  'variables' => 
  array (
    'info' => 0,
    'upload_arr' => 0,
    'type_arr' => 0,
    'position_arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53003a70133655_48885331')) {function content_53003a70133655_48885331($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'C:\\xampp\\htdocs\\project\\Common\\Smarty\\plugins\\function.html_radios.php';
if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\project\\Common\\Smarty\\plugins\\function.html_options.php';
?><div class="pageContent"><form method="post" action="<?php echo "/project/index.php?c=System&a=mark&action=add";?>
" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this, navTabAjaxDone);"><div class="pageFormContent" layoutH="56"><input type="hidden" name="img" value="<?php echo (isset($_smarty_tpl->tpl_vars['info']->value['img'])?$_smarty_tpl->tpl_vars['info']->value['img']:'');?>
"/><dl class="nowrap"><dt style="width:40%;">上传的图片是否使用图片水印功能：</dt><dd><?php echo smarty_function_html_radios(array('name'=>"upload",'options'=>(isset($_smarty_tpl->tpl_vars['upload_arr']->value)?$_smarty_tpl->tpl_vars['upload_arr']->value:''),'checked'=>(isset($_smarty_tpl->tpl_vars['info']->value['upload'])?$_smarty_tpl->tpl_vars['info']->value['upload']:'')),$_smarty_tpl);?>
</dd></dl><dl class="nowrap"><dt style="width:40%;">选择水印的文件类型：</dt><dd><?php echo smarty_function_html_radios(array('name'=>"type",'options'=>(isset($_smarty_tpl->tpl_vars['type_arr']->value)?$_smarty_tpl->tpl_vars['type_arr']->value:''),'checked'=>(isset($_smarty_tpl->tpl_vars['info']->value['type'])?$_smarty_tpl->tpl_vars['info']->value['type']:'')),$_smarty_tpl);?>
</dd></dl><dl class="nowrap"><dt style="width:40%;">水印图片宽度控制（设置为0为不限）：</dt><dd><input name="width" class="" type="text" size="20" value="<?php echo (isset($_smarty_tpl->tpl_vars['info']->value['width'])?$_smarty_tpl->tpl_vars['info']->value['width']:'');?>
"/></dd></dl><dl class="nowrap"><dt style="width:40%;">水印图片高度控制（设置为0为不限）：</dt><dd><input name="height" class="" type="text" size="20" value="<?php echo (isset($_smarty_tpl->tpl_vars['info']->value['height'])?$_smarty_tpl->tpl_vars['info']->value['height']:'');?>
"/></dd></dl><dl class="nowrap"><dt style="width:40%;">水印图片文件名（如果不存在，则使用文字水印）：</dt><dd><img src="<?php echo "/project/index.php?c=System&a=mark&target=showImg";?>
"/></dd></dl><dl class="nowrap"><dt style="width:40%;">上传新图片：</dt><dd><input name="file" type="file" /></dd></dl><dl class="nowrap"><dt style="width:40%;">水印图片文字：( 请查看data\_mark\simhei.ttf字体库是否存在)：</dt><dd><input name="text" class="" type="text" size="20" value="<?php echo (isset($_smarty_tpl->tpl_vars['info']->value['text'])?$_smarty_tpl->tpl_vars['info']->value['text']:'');?>
"/></dd></dl><dl class="nowrap"><dt style="width:40%;">水印图片文字字体大小：</dt><dd><input name="fontsize" class="" type="text" size="20" value="<?php echo (isset($_smarty_tpl->tpl_vars['info']->value['fontsize'])?$_smarty_tpl->tpl_vars['info']->value['fontsize']:'');?>
"/></dd></dl><dl class="nowrap"><dt style="width:40%;">水印图片文字颜色（默认#FF0000为红色）：</dt><dd><input name="color" class="" type="text" size="20" value="<?php echo (isset($_smarty_tpl->tpl_vars['info']->value['color'])?$_smarty_tpl->tpl_vars['info']->value['color']:'');?>
"/></dd></dl><dl class="nowrap"><dt style="width:40%;">设置 JPEG 类型的图片附件添加水印后质量参数，范围为 0～100 的整数，数值越大结果图片效果越好，但尺寸也越大。</dt><dd><input name="trans" class="" type="text" size="20" value="<?php echo (isset($_smarty_tpl->tpl_vars['info']->value['trans'])?$_smarty_tpl->tpl_vars['info']->value['trans']:'');?>
"/></dd></dl><dl class="nowrap"><dt style="width:40%;">设置 GIF 类型水印图片与原始图片的融合度,水印透明度（0—100，值越小越透明）：</dt><dd><input name="diaphaneity" class="" type="text" size="20" value="<?php echo (isset($_smarty_tpl->tpl_vars['info']->value['diaphaneity'])?$_smarty_tpl->tpl_vars['info']->value['diaphaneity']:'');?>
"/></dd></dl><dl class="nowrap"><dt style="width:40%;">水印位置：</dt><dd><select name="position" class="combox required"><?php echo smarty_function_html_options(array('options'=>(isset($_smarty_tpl->tpl_vars['position_arr']->value)?$_smarty_tpl->tpl_vars['position_arr']->value:''),'selected'=>(isset($_smarty_tpl->tpl_vars['info']->value['position'])?$_smarty_tpl->tpl_vars['info']->value['position']:'')),$_smarty_tpl);?>

</select></dd></dl></div><div class="formBar"><ul><li><div class="buttonActive"><div class="buttonContent"><button type="submit">修改</button></div></div></li><li><div class="buttonActive"><div class="buttonContent"><button type="reset">重置</button></div></div></li></ul></div></form></div><?php }} ?>