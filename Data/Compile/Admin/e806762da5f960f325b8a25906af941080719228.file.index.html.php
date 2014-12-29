<?php /* Smarty version Smarty-3.1.12, created on 2014-05-25 14:01:36
         compiled from "C:\xampp\htdocs\project_test\Application\Admin\View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:924553818740a85123-98535181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e806762da5f960f325b8a25906af941080719228' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_test\\Application\\Admin\\View\\Index\\index.html',
      1 => 1400590679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '924553818740a85123-98535181',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'welcome' => 0,
    'modules' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53818740bad1f5_42350727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53818740bad1f5_42350727')) {function content_53818740bad1f5_42350727($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=7" /><title><?php echo getCfgVar('cfg_admin_sysname');?>
</title><link href="/project_test/Public/share/plug/dwz/themes/default/style.css" rel="stylesheet" type="text/css" media="screen"/><link href="/project_test/Public/share/plug/dwz/themes/css/core.css" rel="stylesheet" type="text/css" media="screen"/><link href="/project_test/Public/share/plug/dwz/themes/css/print.css" rel="stylesheet" type="text/css" media="print"/><link href="/project_test/Public/share/plug/dwz/uploadify/css/uploadify.css" rel="stylesheet" type="text/css" media="screen"/><!--[if IE]><link href="/project_test/Public/share/plug/dwz/themes/css/ieHack.css" rel="stylesheet" type="text/css" media="screen"/><![endif]--><script src="/project_test/Public/share/js/speedup.js" type="text/javascript"></script><script src="/project_test/Public/share/js/jquery-1.7.2.js" type="text/javascript"></script><script src="/project_test/Public/share/js/jquery.cookie.js" type="text/javascript"></script><script src="/project_test/Public/share/js/jquery.validate.js" type="text/javascript"></script><script src="/project_test/Public/share/js/jquery.bgiframe.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/xheditor/xheditor-1.1.14-zh-cn.min.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/uploadify/scripts/swfobject.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/uploadify/scripts/jquery.uploadify.v2.1.0.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.core.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.util.date.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.validate.method.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.regional.zh.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.barDrag.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.drag.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.tree.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.accordion.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.ui.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.theme.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.switchEnv.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.alertMsg.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.contextmenu.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.navTab.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.tab.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.resize.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.dialog.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.dialogDrag.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.sortDrag.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.cssTable.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.stable.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.taskBar.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.ajax.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.pagination.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.database.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.datepicker.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.effects.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.panel.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.checkbox.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.history.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.combox.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.print.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/js/dwz.regional.zh.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/chart/raphael.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/chart/g.raphael.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/chart/g.bar.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/chart/g.dot.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/chart/g.line.js" type="text/javascript"></script><script src="/project_test/Public/share/plug/dwz/chart/g.pie.js" type="text/javascript"></script><script type="text/javascript">$(function(){
DWZ.init("/project_test/Public/share/plug/dwz/dwz.frag.xml", {
loginUrl:"<?php echo "/project_test/index.php?c=public&a=loginDialog";?>
", loginTitle:"登录",// 弹出登录对话框
//loginUrl:"<?php echo "/project_test/index.php?c=public&a=login";?>
",// 跳到登录页面
statusCode:{ok:200, error:300, timeout:301}, //【可选】
pageInfo:{pageNum:"pageNum", numPerPage:"numPerPage", orderField:"orderField", orderDirection:"orderDirection"}, //【可选】
debug:false,// 调试模式 【true|false】
callback:function(){
initEnv();
$("#themeList").theme({themeBase:"/project_test/Public/share/plug/dwz/themes"}); // themeBase 相对于index页面的主题base路径
}
});
});

</script></head><body scroll="no"><div id="layout"><div id="header"><div class="headerNav2"><div style='margin-top:10px; font-size: 20pt; font-family:"arial,sans-serif";'><?php echo getCfgVar('cfg_admin_sysname');?>
</div><ul class="nav"><li><a>欢迎<?php echo (isset($_smarty_tpl->tpl_vars['welcome']->value)?$_smarty_tpl->tpl_vars['welcome']->value:'');?>
</a></li><li><a href="mailto:iat.net.cn@gmail.com">建议反馈</a></li><li><a href="<?php echo "/project_test/index.php?c=manager&a=setPwd";?>
" target="dialog">修改信息</a></li><li><a href="javascript:;" onclick="logout()">退出</a></li></ul><ul class="themeList" id="themeList"><li theme="default"><div class="selected">蓝色</div></li><li theme="green"><div>绿色</div></li><li theme="purple"><div>紫色</div></li><li theme="silver"><div>银色</div></li><li theme="azure"><div>天蓝</div></li></ul></div></div><div id="leftside"><div id="sidebar_s"><div class="collapse"><div class="toggleCollapse"><div></div></div></div></div><div id="sidebar"><div class="toggleCollapse"><h2>主菜单</h2><div>收缩</div></div><div class="accordion" fillSpace="sidebar"><?php echo (isset($_smarty_tpl->tpl_vars['modules']->value)?$_smarty_tpl->tpl_vars['modules']->value:'');?>

</div></div></div><div id="container"><div id="navTab" class="tabsPage"><div class="tabsPageHeader"><div class="tabsPageHeaderContent"><ul class="navTab-tab"><li tabid="main" class="main"><a href="javascript:;"><span><span class="home_icon">主页</span></span></a></li></ul></div><div class="tabsLeft">left</div><div class="tabsRight">right</div><div class="tabsMore">more</div></div><ul class="tabsMoreList"><li><a href="javascript:;">主页</a></li></ul><div class="navTab-panel tabsPageContent layoutBox"><div class="page unitBox"><div class="accountInfo"><p><span></span></p><p><?php echo getCfgVar('cfg_admin_sysdesc');?>
</p></div><div class="pageFormContent" layoutH="58"><img src = "/project_test/Public/admin/images/program.jpg"></div><div style="width:260px;position: absolute;top:60px;right:0" layoutH="80"><div id="weather_box"></div><div id="select_box" style="display: none;"><br/><br/><select id="w_province" onchange="setCity(this.value);" class="combox"></select><select id="w_city" class="combox"><option value="">选择市</option></select><div class="buttonActive"><div class="buttonContent"><button type="button" onclick="var id=$('#w_city').val();if(id==''){alertMsg.error('请选择市!');}else{getWeather(id)}">查询</button></div></div></div></div></div></div></div></div></div><div id="footer"><a href="<?php echo getCfgVar('cfg_indexurl');?>
" target="_blank"><?php echo getCfgVar('cfg_powerby');?>
</a></div><script type="text/javascript" src="/project_test/Public/admin/js/city.js"></script><script type="text/javascript">
function logout(){
alertMsg.confirm("您确定要退出系统吗？", {
okCall: function(){
window.location = "<?php echo "/project_test/index.php?c=public&a=logout";?>
";
return false;
}
});
}


function getAreaID(){
$.getScript('http://61.4.185.48:81/g/', function(){
if(typeof(id) == "undefined"){return;}
   getWeather(id);
   $("#select_box").css("display", "block");
});
}

function getWeather(id){
$.ajax({
       type: 'POST',
       data: {city_id: id},
       url: "/project_test/index.php?c=Index",
       cache: false,
       success: function(text){
   $("#weather_box").html(text);
           },
       error: DWZ.ajaxError
      });
}

<?php if (getCfgVar('cfg_open_weather')==1){?>
setProvince();
setTimeout(getAreaID, 1000);
<?php }?>
</script></body></html><?php }} ?>