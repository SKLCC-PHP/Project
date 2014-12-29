<?php /* Smarty version Smarty-3.1.12, created on 2014-02-22 14:18:38
         compiled from "C:\xampp\htdocs\pro\Application\Install\View\Index\three.html" */ ?>
<?php /*%%SmartyHeaderCode:309115308413eeb7493-65231951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acdd2d4476ee118e007c3842ce092a57b8a685c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pro\\Application\\Install\\View\\Index\\three.html',
      1 => 1393049054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '309115308413eeb7493-65231951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
    'file_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5308413ef08142_68083141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5308413ef08142_68083141')) {function content_5308413ef08142_68083141($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<table class="mainTable" style="margin-top:2px;margin:0px auto; width:800px;"><tr><th colspan="2">            输出配置文件
        </th></tr><tr><td align="right" class="td1" width="140">            文件路径：
        </td><td>            <?php echo (isset($_smarty_tpl->tpl_vars['path']->value)?$_smarty_tpl->tpl_vars['path']->value:'');?>

        </td></tr><tr><td align="right" class="td1">            文件内容：
        </td><td><div style="white-space:pre;font-family:Consolas"><?php echo (isset($_smarty_tpl->tpl_vars['file_content']->value)?$_smarty_tpl->tpl_vars['file_content']->value:'');?>

            </div></td></tr></table><div style="padding:20px 0 10px 0;text-align:center;"><input type="button" value="上一步" onclick="document.location='<?php echo "/pro/Public/install/index.php?c=Index&a=two";?>
';"/><input type="button" value="下一步" onclick="document.location='<?php echo "/pro/Public/install/index.php?c=Index&a=four";?>
';"/></div></div> <?php echo $_smarty_tpl->getSubTemplate ("Include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>