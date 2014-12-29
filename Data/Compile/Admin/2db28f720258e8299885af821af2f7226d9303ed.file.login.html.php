<?php /* Smarty version Smarty-3.1.12, created on 2014-05-25 15:25:46
         compiled from "C:\xampp\htdocs\project_test\Application\Admin\View\Public\login.html" */ ?>
<?php /*%%SmartyHeaderCode:560953819afa032924-64845092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2db28f720258e8299885af821af2f7226d9303ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_test\\Application\\Admin\\View\\Public\\login.html',
      1 => 1394370539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '560953819afa032924-64845092',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53819afa13d2e6_55075915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53819afa13d2e6_55075915')) {function content_53819afa13d2e6_55075915($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US" dir="ltr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title><?php echo getCfgVar('cfg_admin_sysname');?>
</title><link href="/project_test/Public/admin/images/login.css" rel="stylesheet" type="text/css" /><script src="/project_test/Public/share/js/jquery-1.7.2.min.js" type="text/javascript"></script><script src="/project_test/Public/share/js/jquery.cookie.js" type="text/javascript"></script><script type="text/javascript">
var cookie_username = $.cookie("username");
var cookie_password = $.cookie("password");
var cookie_save_name = $.cookie("save_name");

$(function(){
$("#username").val(cookie_username);
$("#password").val(cookie_password);

if(cookie_password){
$('#verify').focus();
}else if(cookie_username){
$('#password').focus();
}else{
$('#username').focus();
}

if(cookie_save_name == "checked"){
$("#save_login_name").attr("checked", true);
}
});

/**
 * 登录
 */
function login(){
var username = $("#username").val();
var password = $("#password").val();
var verify = $("#verify").val();

$("#msg").css("display", "block");
$("#msg").html("正在登录中，请稍等...");
$.post("<?php echo "/project_test/Public/api/index.php?c=manager&a=login";?>
", {username: username, password: password, verify: verify},
  function(responseText){
try{
  eval("var obj="+responseText);
if(obj.statusCode == 200){
if(!cookie_username || !cookie_password){
var save_name = $("#save_login_name").attr("checked");
if(save_name == "checked"){
$.cookie("username", username, { path: '/', expires: 30 });
}else{
$.cookie("username", "", { path: '/', expires: 0 });
}
$.cookie("save_name", save_name, { path: '/', expires: 30 });
//$.cookie("password", password, { path: '/', expires: 30 });
}
window.location = "/project_test/index.php";
}else{
$("#msg").html(obj.message);
$("#verifyCodeImg").click();
$("#verify").val("");
}
}catch(e){
$("#msg").html("很抱歉,出现异常,请联系管理员."+e);
}
  }
);
}

$(function(){
$("#verify,#password,#username").keyup(function(event){
var keyCode = event.which;
if(keyCode == 13){
login(0);
}
 });
});
</script></head><body><div class="content"><div class="message" id="msg">验证码输入错误!&nbsp;</div><div class="body"><form name="form1" method="post" class="formstyle"><ul><li><input id="username" type="text" name="username" class="inputstyle" maxlength="50" autocomplete="off" value="请输入学号" onfocus="if(this.value=='请输入学号') this.value='';this.className='inputstylefocus';return true;" onblur="if(this.value=='') this.value='请输入学号';this.className='inputstyle';return true;">&nbsp;&nbsp;学号</li><li><input id="password" type="password" name="passwd" class="inputstyle" maxlength="20" value="请输入密码" onfocus="if(this.value=='+_-_-_+') this.value='请输入密码';this.className='inputstylefocus';return true;" onblur="if(this.value=='') this.value='请输入密码';this.className='inputstyle';return true;">&nbsp;&nbsp;密码</li><li style="position: relative"><input class="inputstyle" autocomplete="off" size=8 name="verify" id="verify" value="请输入验证码" onfocus="if(this.value=='请输入验证码') this.value=''; this.className='inputstylefocus';return true;" onblur="if(this.value=='') this.value='请输入验证码'; this.className='inputstyle';return true;">&nbsp;
<img  src="<?php echo "/project_test/index.php?c=Public&a=getVerifyCode";?>
" id="verifyCodeImg" onclick="this.src+='&rand=' + Math.random();" align="top" class="verifycodeimg" title="点击刷新">验证码</li>记住用户名：<input type="checkbox" id="save_login_name"><li class="btn png"><input type="button" class="loginbtn" value=" "  onclick="login();" onmouseover="this.blur();return true;" onmousedown="this.className='loginbtnfocus';return true;"></li></br></br>&nbsp&nbsp
<a href="/project_test/Public/member/index.php/user/register.html"><img src = "/project_test/Public/admin/images/register.jpg"></a>&nbsp&nbsp
<a href="/project_test/Public/member/index.php/user/findPwd.html"><img src = "/project_test/Public/admin/images/forget_pwd.jpg"></a></br>如果长期没收到邮件，可以检查一下垃圾箱</br>联系：18896581232
</ul></form></div><div class="foot"></div></div></body></html><?php }} ?>