<?php /* Smarty version Smarty-3.1.12, created on 2014-02-22 23:21:35
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\System\about.html" */ ?>
<?php /*%%SmartyHeaderCode:2536453002188aa6bb9-62815861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9500ad6ee84a5b30bb80ed99cbd0467eb3990d3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\System\\about.html',
      1 => 1393049053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2536453002188aa6bb9-62815861',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53002188afdff2_60567466',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53002188afdff2_60567466')) {function content_53002188afdff2_60567466($_smarty_tpl) {?>
<div class="pageContent"><form method="post" action="<?php echo "/project/Public/admin/index.php?c=System&a=add";?>
" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);"><div class="pageFormContent" layoutH="56"><div class="unit" style="text-align:center;margin-top:50px;"><h2><?php echo getCfgVar('cfg_admin_sysname');?>
 <?php echo getCfgVar('cfg_sys_version');?>
</h2><br/><br/><h2>Email：<?php echo getCfgVar('cfg_adminemail');?>
</h2><br/><br/><h2><a href="<?php echo getCfgVar('cfg_indexurl');?>
" target="_blank"><?php echo getCfgVar('cfg_indexurl');?>
</a></h2></div></p></div><div class="formBar"><ul><li><div class="button"><div class="buttonContent"><button type="button" class="close">关闭</button></div></div></li></ul></div></form></div><?php }} ?>