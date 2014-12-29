<?php /* Smarty version Smarty-3.1.12, created on 2014-02-16 10:03:48
         compiled from "C:\xampp\htdocs\project\Application\Home\View\Include\head.html" */ ?>
<?php /*%%SmartyHeaderCode:2628853001c843cd050-51505121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b41f7a21ab181440ef4d9ee6bf6da9c5a08c987a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Home\\View\\Include\\head.html',
      1 => 1371095362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2628853001c843cd050-51505121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'alternate' => 0,
    'index' => 0,
    'type_tree' => 0,
    'case' => 0,
    'video' => 0,
    'album' => 0,
    'music' => 0,
    'taobao' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53001c8444a7d7_89084134',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53001c8444a7d7_89084134')) {function content_53001c8444a7d7_89084134($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="author" content="<?php echo getCfgVar('cfg_adminemail');?>
"><title><?php if ((isset($_smarty_tpl->tpl_vars['title']->value)?$_smarty_tpl->tpl_vars['title']->value:'')!=''){?><?php echo (isset($_smarty_tpl->tpl_vars['title']->value)?$_smarty_tpl->tpl_vars['title']->value:'');?>
 - <?php echo getCfgVar('cfg_webname');?>
<?php }else{ ?><?php echo getCfgVar('cfg_webname');?>
<?php }?></title><meta name="alexaVerifyID" content="oBmfLO4PIAVGpWKiUmU_zPImx6g" /><meta name="keywords" content="<?php if ((isset($_smarty_tpl->tpl_vars['keywords']->value)?$_smarty_tpl->tpl_vars['keywords']->value:'')!=''){?><?php echo (isset($_smarty_tpl->tpl_vars['keywords']->value)?$_smarty_tpl->tpl_vars['keywords']->value:'');?>
<?php }else{ ?><?php echo getCfgVar('cfg_keywords');?>
<?php }?>"/><meta name="description" content="<?php if ((isset($_smarty_tpl->tpl_vars['description']->value)?$_smarty_tpl->tpl_vars['description']->value:'')!=''){?><?php echo (isset($_smarty_tpl->tpl_vars['description']->value)?$_smarty_tpl->tpl_vars['description']->value:'');?>
<?php }else{ ?><?php echo getCfgVar('cfg_description');?>
<?php }?>" /><link rel="alternate" type="application/rss+xml" title="<?php echo getCfgVar('cfg_webname');?>
" href="<?php echo ((string)$_smarty_tpl->tpl_vars['host']->value)."/rss/xml.html";?>
" /><?php echo (isset($_smarty_tpl->tpl_vars['alternate']->value)?$_smarty_tpl->tpl_vars['alternate']->value:'');?>

<link href="/project/Public/home/css/base.css" rel="stylesheet" type="text/css" media="screen" /><link href="/project/Public/home/css/index.css" rel="stylesheet" type="text/css" media="screen" /><script type="text/javascript" src="/project/Public/home/js/jquery-1.7.1.min.js"></script><script type="text/javascript" src="/project/Public/home/js/reflection.js"></script><script type="text/javascript" src="/project/Public/home/js/jquery.cycle.all.min.js"></script><script type="text/javascript" src="/project/Public/home/js/jquery.jamestudio.menu.js"></script><meta name="Copyright" content="eaglephp.com" /></head><body><div id="wrapper"><div id="header"><h1 class="logo"><a href="<?php echo "/project/index.php";?>
" title="<?php echo getCfgVar('cfg_webname');?>
"><?php echo getCfgVar('cfg_webname');?>
</a></h1><h2 class="description"></h2><div class="utilityMenu"><a href="<?php echo "/project/index.php/wish.html";?>
" target="_blank" style="color:#00972C">许愿墙 <img src="/project/Public/home/imgs/new.gif"/></a>|
<a href="<?php echo "/project/index.php/message.html";?>
">留言反馈</a>|
<a href="<?php echo "/project/index.php/note.html";?>
">往期微博</a>|
<a href="/project/Public/admin" target="_blank">登录后台</a>|
<a href="http://code.google.com/p/eaglephp/downloads/list" target="_blank">下载源码</a></div><div class="globalNavi"><ul id="menu"><li class="<?php echo (isset($_smarty_tpl->tpl_vars['index']->value)?$_smarty_tpl->tpl_vars['index']->value:'');?>
"><a href="/project/index.php">首页</a></li><?php echo (isset($_smarty_tpl->tpl_vars['type_tree']->value)?$_smarty_tpl->tpl_vars['type_tree']->value:'');?>

<li class="<?php echo (isset($_smarty_tpl->tpl_vars['case']->value)?$_smarty_tpl->tpl_vars['case']->value:'');?>
"><a href="<?php echo "/project/index.php/case.html";?>
">案例</a></li><li class="<?php echo (isset($_smarty_tpl->tpl_vars['video']->value)?$_smarty_tpl->tpl_vars['video']->value:'');?>
"><a href="<?php echo "/project/index.php/video.html";?>
">视频</a></li><li class="<?php echo (isset($_smarty_tpl->tpl_vars['album']->value)?$_smarty_tpl->tpl_vars['album']->value:'');?>
"><a href="<?php echo "/project/index.php/album.html";?>
">相册</a></li><li class="<?php echo (isset($_smarty_tpl->tpl_vars['music']->value)?$_smarty_tpl->tpl_vars['music']->value:'');?>
"><a href="<?php echo "/project/index.php/music.html";?>
">音乐</a></li><li class="<?php echo (isset($_smarty_tpl->tpl_vars['taobao']->value)?$_smarty_tpl->tpl_vars['taobao']->value:'');?>
"><a href="<?php echo "/project/index.php/taobao.html";?>
">淘宝</a></li></ul></div></div><script type="text/javascript">$(document).ready(function(){
$("#menu").menu({hlClass:"hover"});
});
</script>
<?php }} ?>