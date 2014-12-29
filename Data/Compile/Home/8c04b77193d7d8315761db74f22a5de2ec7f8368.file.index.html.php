<?php /* Smarty version Smarty-3.1.12, created on 2014-02-16 10:03:48
         compiled from "C:\xampp\htdocs\project\Application\Home\View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1483553001c84210532-65987925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c04b77193d7d8315761db74f22a5de2ec7f8368' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Home\\View\\Index\\index.html',
      1 => 1375505638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1483553001c84210532-65987925',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_list' => 0,
    'announ_list' => 0,
    'is_login' => 0,
    'userInfo' => 0,
    'tip' => 0,
    'member_name' => 0,
    'note' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53001c8436e421_32757798',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53001c8436e421_32757798')) {function content_53001c8436e421_32757798($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\project\\Common\\Smarty\\plugins\\modifier.date_format.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ("Include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('index'=>"actived"), 0);?>


<script type="text/javascript">
$(function() {
 
$('#focus670x160 #adv').cycle({ 
    fx:     'fade', 
    timeout: 5000, 
pagerEvent: 'mouseover',
    pager:  '#nav670x160' 
});
 
$('#focus350x250 .pics').cycle({ 
    fx:     'fade', 
speed:  'fast', 
    timeout: 0, 
pagerEvent: 'mouseover',
    pager:  '#nav350x250',
pagerAnchorBuilder: function(idx, slide) { 
        // return selector string for existing anchor 
        return '#nav350x250 li:eq(' + idx + ') a'; 
    } 
});
 
$('#view .pics').cycle({ 
    fx:     'scrollHorz', 
speed:  'slow', 
    timeout: 0, 
    pager:  '#navView',
pagerAnchorBuilder: function(idx, slide) { 
        // return selector string for existing anchor 
        return '#navView li:eq(' + idx + ') a'; 
    } 
});
 
$('#view .pics').cycle({ 
    fx:     'scrollHorz', 
    timeout: 0, 
    pager:  '#navView',
pagerAnchorBuilder: function(idx, slide) { 
        // return selector string for existing anchor 
        return '#navView li:eq(' + idx + ') a'; 
    } 
});
 
$('#kanfa .kimageBar ul').cycle({
        fx:      'scrollHorz',
        timeout:  0,
        prev:    '.pre',
        next:    '.next'
});
 
 
$('#announcement ul').cycle({
fx:'scrollUp',
timeout:10000
});
 
$('#hotRankSlide').cycle({ 
fx:     'none', 
timeout: 5000, 
delay: 1000,
pagerEvent: 'mouseover',
pager:  '#hotRankNavi',
activePagerClass: 'actived',
pauseOnPagerHover: true,
allowPagerClickBubble: true,
cleartypeNoBg: true,
pagerAnchorBuilder: function(idx, slide) { 
// return selector string for existing anchor 
return '#hotRankNavi li:eq(' + idx + ') a'; 
} 
});
});
</script><div style="float: left; padding-bottom: 12px;"></div><div id="index"><div class="mainContent"><div id="focus670x160"><div class="pics" ><ul id="adv"><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=(isset($_smarty_tpl->tpl_vars['adv_list']->value)?$_smarty_tpl->tpl_vars['adv_list']->value:'')) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?>
<li><a href="<?php echo (isset($_smarty_tpl->tpl_vars['adv_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['url'])?$_smarty_tpl->tpl_vars['adv_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['url']:'');?>
" target="_blank"><img src="/project/Public/share/upload/<?php echo (isset($_smarty_tpl->tpl_vars['adv_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['img'])?$_smarty_tpl->tpl_vars['adv_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['img']:'');?>
" alt="<?php echo (isset($_smarty_tpl->tpl_vars['adv_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['title'])?$_smarty_tpl->tpl_vars['adv_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['title']:'');?>
"/></a></li><?php endfor; endif; ?>
</ul></div><div id="nav670x160"></div></div><div id="announcement"><strong>最新公告：</strong><ul>    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=(isset($_smarty_tpl->tpl_vars['announ_list']->value)?$_smarty_tpl->tpl_vars['announ_list']->value:'')) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?>
<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']%2==0){?><li><?php }?>
<a href="<?php echo (isset($_smarty_tpl->tpl_vars['announ_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['link'])?$_smarty_tpl->tpl_vars['announ_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['link']:'');?>
" target="_blank" class="caution"><?php echo utf8Substr((isset($_smarty_tpl->tpl_vars['announ_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['title'])?$_smarty_tpl->tpl_vars['announ_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['title']:''),0,25);?>
</a><?php if (($_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1)%2==0||$_smarty_tpl->getVariable('smarty')->value['section']['loop']['last']){?></li><?php }?>
<?php endfor; endif; ?>
</ul></div></div><div class="subContent"><script language="JavaScript" type="text/javascript"></script><div id="login" class="module"><?php if ((isset($_smarty_tpl->tpl_vars['is_login']->value)?$_smarty_tpl->tpl_vars['is_login']->value:'')){?>
    <div class="loged"><div class="userInfo"><a href="" class="avatar" title="更换头像" target="_blank"><img src="<?php echo (isset($_smarty_tpl->tpl_vars['userInfo']->value['avatar'])?$_smarty_tpl->tpl_vars['userInfo']->value['avatar']:'');?>
" id="loged_avatar" width="48" height="48"></a><div class="text"><h5><span id="cur_time"><?php echo (isset($_smarty_tpl->tpl_vars['tip']->value)?$_smarty_tpl->tpl_vars['tip']->value:'');?>
</span>，<span id="cur_username_2"><?php echo (isset($_smarty_tpl->tpl_vars['userInfo']->value['username'])?$_smarty_tpl->tpl_vars['userInfo']->value['username']:'');?>
</span>！</h5><div class="weather pub_dropmenuP"><a href="javascript:;" class="city" onclick="$('#dm_changCity').slideToggle('fast')" id="user_city"></a><span id="weather_block"></span></div></div><div class="clear"></div></div><div class="miniDash"><div class="button"><a class="button_n" href="<?php echo "/project/member";?>
"><em>管理中心</em></a><a class="button_n" href="<?php echo "/project/member/user/logout.html";?>
"><em>退出</em></a></div></div></div>        <?php }else{ ?>
    <div class="login" style=""><form action="<?php echo "/project/Public/member/index.php/user/login.html";?>
" method="post" name="frmLogin" onsubmit="javascript:return chk_login(this)"><ul><li class="login01"><span>用户名</span><input class="textfield" type="text" name="username" value="<?php echo (isset($_smarty_tpl->tpl_vars['member_name']->value)?$_smarty_tpl->tpl_vars['member_name']->value:'');?>
"></li><li class="login02"><span>密　码</span><input class="textfield" type="password" name="password"></li></ul><div class="remember"><span><input type="checkbox" name="remember" id="remember"  <?php if ((isset($_smarty_tpl->tpl_vars['member_name']->value)?$_smarty_tpl->tpl_vars['member_name']->value:'')){?>checked="checked"<?php }?>><label for="remember">记住我</label></span><a href="<?php echo "/project/Public/member/index.php/user/findPwd.html";?>
">忘记密码</a></div><div class="button"><input type="submit" value="登录" class="btn_login"><input type="button" value="注册" class="btn_reg" onclick="location.href='<?php echo "/project/Public/member/index.php/user/register.html";?>
'"></div></form></div>         <?php }?>
    </div><div id="indexSearch" class="module"><form action="<?php echo "/project/index.php/news.html";?>
" method='post'><input type="text" class="textfield" name="content" value="搜索你感兴趣的博客内容" onfocus="if (this.value == '搜索你感兴趣的博客内容') this.value = '';" onblur="if (this.value == '') this.value = '搜索你感兴趣的博客内容';" /><input type="submit" class="button" value="搜索" /></form></div></div><div class="clear"></div><div class="mainContent"><div class="topic"><div class="topicTop"></div><h4>今日微博：<a href="<?php echo "/project/index.php/note.html";?>
" target="_blank"><?php echo smarty_modifier_date_format((isset($_smarty_tpl->tpl_vars['note']->value['create_time'])?$_smarty_tpl->tpl_vars['note']->value['create_time']:''),"%Y-%m-%d");?>
 往期微博</a></h4><p><?php echo (isset($_smarty_tpl->tpl_vars['note']->value['content'])?$_smarty_tpl->tpl_vars['note']->value['content']:'');?>
</p></div><?php echo $_smarty_tpl->getSubTemplate ("Include/mainContent.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div><?php echo $_smarty_tpl->getSubTemplate ("Include/subContent.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>