<?php /* Smarty version Smarty-3.1.12, created on 2014-02-23 16:46:19
         compiled from "C:\xampp\htdocs\project\Application\Member\View\User\findPwd.html" */ ?>
<?php /*%%SmartyHeaderCode:13524530053d79a1529-31303764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '776b025d21f2291e0a20b5d41b80f024d6e08a66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Member\\View\\User\\findPwd.html',
      1 => 1393145053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13524530053d79a1529-31303764',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_530053d7a04260_81412897',
  'variables' => 
  array (
    'send_status' => 0,
    'email_host' => 0,
    'help_email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530053d7a04260_81412897')) {function content_530053d7a04260_81412897($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../Include/user_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="outterWrapper"><div id="container"><div id="header"><h1 class="bannerFindPass">找回密码</h1></div><div id="content"><div id="main"><div id="sideMain">            <?php if ((isset($_smarty_tpl->tpl_vars['send_status']->value)?$_smarty_tpl->tpl_vars['send_status']->value:'')=="success"){?>
        <div id="validMail"><p style="font-weight:normal;">验证邮件已发送至 <span class="caution"><?php echo (isset($_POST['email']) ? $_POST['email'] : '');?>
</span></p><p class="loginMail" style="font-weight:normal;">请登录您的邮箱查收：<a href="<?php echo (isset($_smarty_tpl->tpl_vars['email_host']->value)?$_smarty_tpl->tpl_vars['email_host']->value:'');?>
" target="_blank" class="popup" style="font-weight:bold;"><?php echo (isset($_smarty_tpl->tpl_vars['email_host']->value)?$_smarty_tpl->tpl_vars['email_host']->value:'');?>
</a></p><p class="notice">点击邮件中的验证链接，即可验证你的电子邮件。</p></div>
<?php }else{ ?>


<div id="pass"><form method="post" action="<?php echo "/project/Public/member/index.php/User/findPwd.html";?>
"><p class="notice">请填写注册时的信息</p><p class="findPass"><span class="f1">学(工)号</span><span class="f2"><input type="text" class="text" name="username" maxlength="16" /></span></p><p class="findPass"><span class="f1">电子邮件</span><span class="f2"><input type="text" class="text" name="email" maxlength="50" /></span></p><p class="button"><input type="submit" value="提交" class="button" /></p></form></div><?php }?>
<div id="solution"><p>如果需要帮助可发送邮件至 <a href="mailto:<?php echo (isset($_smarty_tpl->tpl_vars['help_email']->value)?$_smarty_tpl->tpl_vars['help_email']->value:'');?>
"><?php echo (isset($_smarty_tpl->tpl_vars['help_email']->value)?$_smarty_tpl->tpl_vars['help_email']->value:'');?>
</a></p></div></div><?php echo $_smarty_tpl->getSubTemplate ("../Include/user_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>