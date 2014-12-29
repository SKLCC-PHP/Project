<?php /* Smarty version Smarty-3.1.12, created on 2014-02-24 09:31:27
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\System\project_time_set.html" */ ?>
<?php /*%%SmartyHeaderCode:227175301ec185925a2-00299536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c452df334357739112326298e6cd2ea36073146' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\System\\project_time_set.html',
      1 => 1393049054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227175301ec185925a2-00299536',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5301ec18756f45_29931376',
  'variables' => 
  array (
    'programtime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5301ec18756f45_29931376')) {function content_5301ec18756f45_29931376($_smarty_tpl) {?>
<div class="pageContent"><form method="post" action="<?php echo "/project/index.php?c=System&a=project_time_set";?>
" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);"><div class="pageFormContent" layoutH="56">大学生课外学术科研基金项目<div class="divider"></div><dl><dt>开始报名时间</dt><input type="text" class="date" name="KYJJ_begin_add_time" value="<?php echo (isset($_smarty_tpl->tpl_vars['programtime']->value['KYJJ_begin_add_time'])?$_smarty_tpl->tpl_vars['programtime']->value['KYJJ_begin_add_time']:'');?>
"/></dl><dl><dt>结束报名时间</dt><input type="text" class="date" name="KYJJ_end_add_time" value="<?php echo (isset($_smarty_tpl->tpl_vars['programtime']->value['KYJJ_end_add_time'])?$_smarty_tpl->tpl_vars['programtime']->value['KYJJ_end_add_time']:'');?>
"/></dl><dl></dl><dl></dl><dl><dt>开始上传中期检查材料</dt><input type="text" class="date"  name="KYJJ_begin_middle_check_time" value="<?php echo (isset($_smarty_tpl->tpl_vars['programtime']->value['KYJJ_begin_middle_check_time'])?$_smarty_tpl->tpl_vars['programtime']->value['KYJJ_begin_middle_check_time']:'');?>
"/></dl><dl><dt>结束上传中期检查材料</dt><input type="text" class="date"  name="KYJJ_end_middle_check_time" value="<?php echo (isset($_smarty_tpl->tpl_vars['programtime']->value['KYJJ_end_middle_check_time'])?$_smarty_tpl->tpl_vars['programtime']->value['KYJJ_end_middle_check_time']:'');?>
"/></dl><dl></dl><dl></dl><dl><dt>开始上传结题评审材料</dt><input type="text" class="date" name="KYJJ_begin_final_check_time" value="<?php echo (isset($_smarty_tpl->tpl_vars['programtime']->value['KYJJ_begin_final_check_time'])?$_smarty_tpl->tpl_vars['programtime']->value['KYJJ_begin_final_check_time']:'');?>
"/></dl><dl><dt>结束上传结题评审材料</dt><input type="text" class="date" name="KYJJ_end_final_check_time" value="<?php echo (isset($_smarty_tpl->tpl_vars['programtime']->value['KYJJ_end_final_check_time'])?$_smarty_tpl->tpl_vars['programtime']->value['KYJJ_end_final_check_time']:'');?>
"/></dl><div class="divider"></div></div><div class="formBar"><ul><li><div class="buttonActive"><div class="buttonContent"><button type="submit">修改</button></div></div></li><li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li></ul></div></form></div><?php }} ?>