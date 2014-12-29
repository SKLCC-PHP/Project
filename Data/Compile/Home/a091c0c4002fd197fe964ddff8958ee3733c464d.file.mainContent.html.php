<?php /* Smarty version Smarty-3.1.12, created on 2014-02-16 10:03:48
         compiled from "C:\xampp\htdocs\project\Application\Home\View\Include\mainContent.html" */ ?>
<?php /*%%SmartyHeaderCode:234553001c844616a2-58123735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a091c0c4002fd197fe964ddff8958ee3733c464d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Home\\View\\Include\\mainContent.html',
      1 => 1371095362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234553001c844616a2-58123735',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type_name' => 0,
    'news_list' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53001c844c1265_77851621',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53001c844c1265_77851621')) {function content_53001c844c1265_77851621($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\project\\Common\\Smarty\\plugins\\modifier.date_format.php';
?><div class="column"><div id="today1" class="columnBody"><h2><span class="date"><?php echo (isset($_smarty_tpl->tpl_vars['type_name']->value)?$_smarty_tpl->tpl_vars['type_name']->value:'');?>
</span><span></span></h2><ul class="index_list"><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=(isset($_smarty_tpl->tpl_vars['news_list']->value)?$_smarty_tpl->tpl_vars['news_list']->value:'')) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<li class="index_list_item"><a href="<?php echo (isset($_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['link'])?$_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['link']:'');?>
" target="_blank" class="thumb"><div style="width: 100px;height: 100px;text-align: center;position:relative;"><img src="<?php if ((isset($_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['img'])?$_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['img']:'')!=''){?><?php echo (isset($_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['img'])?$_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['img']:'');?>
<?php }else{ ?>/project/Public/home/imgs/no_img.jpg<?php }?>" alt="<?php echo (isset($_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['title'])?$_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['title']:'');?>
"/></div></a><div class="desc"><h4 class="channel"><a href="<?php echo "/project/index.php/news/index/type-".((string)(isset($_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['type'])?$_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['type']:'')).".html";?>
" target="_blank">[<?php echo (isset($_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['type_name'])?$_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['type_name']:'');?>
]</a><a href="<?php echo (isset($_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['link'])?$_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['link']:'');?>
" class="title" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['title'])?$_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['title']:'');?>
</a></h4><p><?php echo (isset($_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['description'])?$_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['description']:'');?>
</p><p class="more"><font color="#81a514"><?php echo smarty_modifier_date_format((isset($_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['create_time'])?$_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['create_time']:''),"%Y-%m-%d");?>
</font></p></div></li><?php endfor; endif; ?>
</ul><div class="clear"></div></div><div class="columnFooter"></div></div><div class="module"></div><p class="link2blog"><?php echo (isset($_smarty_tpl->tpl_vars['page']->value)?$_smarty_tpl->tpl_vars['page']->value:'');?>
</p><?php }} ?>