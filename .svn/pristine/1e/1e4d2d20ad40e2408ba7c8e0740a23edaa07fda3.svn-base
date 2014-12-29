<?php /* Smarty version Smarty-3.1.12, created on 2014-02-23 15:21:20
         compiled from "C:\xampp\htdocs\project\Application\Member\View\User\register.html" */ ?>
<?php /*%%SmartyHeaderCode:1089453005320e2d3d7-90113332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baa59f2d594028376851bab80e20172351c834f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Member\\View\\User\\register.html',
      1 => 1393139131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1089453005320e2d3d7-90113332',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53005320ef35b7_81354620',
  'variables' => 
  array (
    'message' => 0,
    'college' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53005320ef35b7_81354620')) {function content_53005320ef35b7_81354620($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\project\\Common\\Smarty\\plugins\\function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../Include/user_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="outterWrapper"><div id="container"><div id="header"><h1 class="bannerReg">注册我的账号</h1></div><div id="content"><div id="main"><script type="text/javascript">
function reload_captcha() {
$('#captcha').attr('src', '<?php echo "/project/Public/member/index.php/User/verifyCode.html";?>
?'+Math.random());
}

function remote_check(name, value) {
  var url='<?php echo "/project/Public/member/index.php/User/check.html";?>
';
  var ret;
  $.ajax({'url':url,'async':false,'dataType':'json','data':{'name':name,'value':value},'success':function(data){ret=data;}});
  return ret.message;
}

var validator={
'username':[
  [/\S+/, '请输入学号(工号)'],
  [/\S{4,}/, '用户名少于4位'],
  [function(username){return remote_check('username',username);}, '此学号(工号)已被使用，请联系管理员']
],
'realname':[
        [/\S+/, '请输入真实姓名'],
        [/\S{2,}/, '姓名少于2位']
      ],
'password':[
  [/^.+$/, '请输入密码'],
  [/^.{6,}$/, '密码少于6位']
],
'confirm':[
  [/^.+$/, '请输入确认密码'],
  [function(s){return s==$('#item_password input').val();}, '两次密码输入不一致']
],
'email':[
  [/\S+/, '请输入电子邮件'],
  [/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i, '请输入格式正确的电子邮件'],
  [function(email){return remote_check('email',email)}, '此电子邮件已被使用']
],
'captcha':[
  [/\S+/,'请输入验证码']
]
};

function validate(item) {
  var str=$("#item_"+item+" input").val();
  var m={
    'RegExp':function(r,s){
      return r.test(s);
    },
    'Function':function(f,s){
      return f(s);
    },
    'String':function(v,s){return v==s;}
  };
  for (var v in validator[item]) {
    var vi=validator[item][v];
    //var c=vi[0].constructor.name;
    var c=Object.prototype.toString.apply(vi[0]).match(/(\w+)\]$/)[1];
    if (m[c] && !m[c](vi[0],str)) {
      fail(item,vi[1]);
      return false;
    }
  }
  succ(item);
  return true;
}

var result={};
for (var k in validator) {
result[k]=false;
}

function fail(item, msg) {
$("#item_"+item+" .f3 span").html(msg).removeClass('valid').addClass('fail');
result[item]=false;
disable();
}

function succ(item) {
$("#item_"+item+" .f3 span").html('&nbsp;').removeClass('fail').addClass('valid');
result[item]=true;
check_all();
}

function check_all() {
for (var k in result){
  if (result[k]==false){
    disable();
    return true;
  }
}

enable();
return true;
}

function enable(){
$('#submit_enabled').show();
$('#submit_disabled').hide();
return true;
}

function disable(){
$('#submit_enabled').hide();
$('#submit_disabled').show();
return false;
}

function check_and_submit() {
if (!check_all()) {
return;
    }
$('form')[0].submit();
}

</script><div id="sideMain"><div id="regForm"><?php if ((isset($_smarty_tpl->tpl_vars['message']->value)?$_smarty_tpl->tpl_vars['message']->value:'')){?><font color="red"><?php echo (isset($_smarty_tpl->tpl_vars['message']->value)?$_smarty_tpl->tpl_vars['message']->value:'');?>
</font><br/><br/><?php }?>
<form action="<?php echo "/project/Public/member/index.php/User/register.html";?>
" method="post"><ul><li id="item_username"><div class="f1"><strong>学(工)号</strong></div><div class="f2"><input type="text" class="text" maxlength="16" name="username" /></div><div class="f3"><span></span></div><div class="f4"></div></li><li id="item_realname"><div class="f1"><strong>姓名</strong></div><div class="f2"><input type="text" class="text" maxlength="16" name="realname" /></div><div class="f3"><span></span></div><div class="f4"></div></li><li id="item_college_id"><div class="f1"><strong>院系</strong></div><div class="f2"><select class="combox" name="college_id"><option value="">=====请选择=====</option><?php echo smarty_function_html_options(array('options'=>(isset($_smarty_tpl->tpl_vars['college']->value)?$_smarty_tpl->tpl_vars['college']->value:''),'selected'=>(isset($_POST['college_id']) ? $_POST['college_id'] : '')),$_smarty_tpl);?>

</select></div><div class="f3"><span></span></div><div class="f4"></div></li><li id="item_telephone"><div class="f1"><strong>联系电话</strong></div><div class="f2"><input type="text" class="text" maxlength="16" name="telephone" /></div><div class="f3"><span></span></div><div class="f4">请填写联系电话，方便项目期间联系</div></li><li id="item_password"><div class="f1"><strong>密　码</strong></div><div class="f2"><input type="password" class="text" maxlength="16" name="password"  /></div><div class="f3"><span></span></div><div class="f4">不少于6位</div></li><li id="item_confirm"><div class="f1"><strong>确认密码</strong></div><div class="f2"><input type="password" class="text" maxlength="16" name="confirm" /></div><div class="f3"><span></span></div><div class="f4"></div></li><li id="item_email"><div class="f1"><strong>邮箱</strong></div><div class="f2"><input type="text" class="text" maxlength="50" name="email" /></div><div class="f3"><span></span></div><div class="f4">请填写有效电子邮件，以获得注册验证信</div></li><li class="validCode" id="item_captcha"><div class="f1"><strong>验证码</strong></div><div class="f2"><span><img src="<?php echo "/project/Public/member/index.php/User/verifyCode.html";?>
" id="captcha" onclick="reload_captcha()"/><a href="#" onclick="reload_captcha();">换一张</a></span></div><div class="clear"></div><div class="f5"><input type="text" class="text" maxlength="4" name="captcha" /></div><div class="f3"><span></span></div><div class="f4">不区分大小写</div></li></ul><div class="button"><img id="submit_enabled" onclick="check_and_submit();" src="/project/Public/member/imgs/btn_reg.gif" title="注册" style="cursor:pointer;display:none;"/><img id="submit_disabled" src="/project/Public/member/imgs/btn_reg_invalid.gif" title="注册"/></div></form></div></div><script type="text/javascript">$('#regForm input')
.blur(function(){validate(this.name);})
.change(check_all);
</script><?php echo $_smarty_tpl->getSubTemplate ("../Include/user_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>