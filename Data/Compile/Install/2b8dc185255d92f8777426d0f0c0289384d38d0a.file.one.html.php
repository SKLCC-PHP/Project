<?php /* Smarty version Smarty-3.1.12, created on 2014-02-22 14:18:10
         compiled from "C:\xampp\htdocs\pro\Application\Install\View\Index\one.html" */ ?>
<?php /*%%SmartyHeaderCode:770553084122ee5d74-99330566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b8dc185255d92f8777426d0f0c0289384d38d0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pro\\Application\\Install\\View\\Index\\one.html',
      1 => 1393049054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '770553084122ee5d74-99330566',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'platform' => 0,
    'php_version' => 0,
    'support' => 0,
    'dirs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53084123057155_61493325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53084123057155_61493325')) {function content_53084123057155_61493325($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="mainWidth" style="padding:20px 0;margin:0px auto; width:800px;"><h3>环境检查</h3><table class="mainTable"><tbody align="center"><tr><th>                    项目
                </th><th>                    EaglePHP 所需配置
                </th><th>                    EaglePHP 推荐
                </th><th>                    当前服务器
                </th></tr><tr><td class="td1">                    操作系统
                </td><td>                    不限制
                </td><td>                    Linux
                </td><td>                    <?php echo (isset($_smarty_tpl->tpl_vars['platform']->value)?$_smarty_tpl->tpl_vars['platform']->value:'');?>

                </td></tr><tr><td class="td1">                    PHP 版本
                </td><td>                    5.2.1
                </td><td>                    5.3.3
                </td><td>                    <?php echo (isset($_smarty_tpl->tpl_vars['php_version']->value)?$_smarty_tpl->tpl_vars['php_version']->value:'');?>

                </td></tr><tr><td class="td1">                    数据库支持
                </td><td>                    MySQL
                </td><td>                    MySQL
                </td><td>                    <?php echo (isset($_smarty_tpl->tpl_vars['support']->value)?$_smarty_tpl->tpl_vars['support']->value:'');?>

                </td></tr></tbody></table><h3>目录权限检查</h3><table class="mainTable"><tbody align="center"><tr><th>                目录文件
            </th><th>               目录描述
            </th><th>                当前状态
            </th></tr>        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=(isset($_smarty_tpl->tpl_vars['dirs']->value)?$_smarty_tpl->tpl_vars['dirs']->value:'')) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <tr><td>            <?php echo (isset($_smarty_tpl->tpl_vars['dirs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['dir'])?$_smarty_tpl->tpl_vars['dirs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['dir']:'');?>

            </td><td>                <?php echo (isset($_smarty_tpl->tpl_vars['dirs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['desc'])?$_smarty_tpl->tpl_vars['dirs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['desc']:'');?>

            </td><td>               <?php echo (isset($_smarty_tpl->tpl_vars['dirs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['current_state'])?$_smarty_tpl->tpl_vars['dirs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['current_state']:'');?>

            </td></tr>        <?php endfor; endif; ?>
        </tr></tbody></table><div style="padding:20px 0 10px 0;text-align:center;"><input type="button" value="上一步" onclick="document.location='<?php echo "/pro/Public/install/index.php?c=Index";?>
';"/><input type="button" class="submit" value="下一步" onclick="document.location='<?php echo "/pro/Public/install/index.php?c=Index&a=two";?>
';"/></div></div> <?php echo $_smarty_tpl->getSubTemplate ("Include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>