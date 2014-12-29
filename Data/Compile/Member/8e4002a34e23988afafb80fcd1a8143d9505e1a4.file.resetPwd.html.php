<?php /* Smarty version Smarty-3.1.12, created on 2014-02-23 17:02:46
         compiled from "C:\xampp\htdocs\project\Application\Member\View\User\resetPwd.html" */ ?>
<?php /*%%SmartyHeaderCode:117235309b5d659bcf2-79394435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e4002a34e23988afafb80fcd1a8143d9505e1a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Member\\View\\User\\resetPwd.html',
      1 => 1393146163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117235309b5d659bcf2-79394435',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5309b5d662f9b6_01389643',
  'variables' => 
  array (
    'send_status' => 0,
    'key' => 0,
    'help_email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309b5d662f9b6_01389643')) {function content_5309b5d662f9b6_01389643($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../Include/user_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="outterWrapper"><div id="container"><div id="header"><h1 class="bannerFindPass">找回密码</h1></div><div id="content"><div id="main"><div id="sideMain">            <?php if ((isset($_smarty_tpl->tpl_vars['send_status']->value)?$_smarty_tpl->tpl_vars['send_status']->value:'')=="success"){?>
        <div id="validMail"><p style="font-weight:normal;">密码修改成功！</p><p class="loginMail" style="font-weight:normal;"><a href="<?php echo "/project/Public/";?>
" class="popup" style="font-weight:bold;">登录</a></p></div><?php }else{ ?>
<div id="pass"><form method="post" action="<?php echo "/project/Public/member/index.php/User/resetPwd.html";?>
"><input type="hidden" name="key" value="<?php echo (isset($_smarty_tpl->tpl_vars['key']->value)?$_smarty_tpl->tpl_vars['key']->value:'');?>
"><p class="notice">重置密码</p><p class="findPass"><span class="f1">密码：</span><span class="f2"><input type="password" class="text" name="password" maxlength="16" /></span></p><p class="findPass"><span class="f1">确认密码：</span><span class="f2"><input type="password" class="text" name="password2" maxlength="50" /></span></p><p class="button"><input type="submit" value="提交" class="button" /></p></form></div><?php }?>
<div id="solution"><p>如果需要帮助可发送邮件至 <a href="mailto:<?php echo (isset($_smarty_tpl->tpl_vars['help_email']->value)?$_smarty_tpl->tpl_vars['help_email']->value:'');?>
"><?php echo (isset($_smarty_tpl->tpl_vars['help_email']->value)?$_smarty_tpl->tpl_vars['help_email']->value:'');?>
</a></p></div></div><?php echo $_smarty_tpl->getSubTemplate ("../Include/user_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>