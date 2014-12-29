<?php /* Smarty version Smarty-3.1.12, created on 2014-02-22 18:21:00
         compiled from "C:\xampp\htdocs\project\Application\Install\View\Index\two.html" */ ?>
<?php /*%%SmartyHeaderCode:1150553001337400065-04949817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b309a19f416471a9db429b415c28a75c4889faef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Install\\View\\Index\\two.html',
      1 => 1393049054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1150553001337400065-04949817',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53001337486812_54377236',
  'variables' => 
  array (
    'err_msg' => 0,
    'sql_msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53001337486812_54377236')) {function content_53001337486812_54377236($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="mainWidth" style="padding:20px 0;margin:0px auto; width:800px;"><form method="post" action="<?php echo "/project/Public/install/index.php?c=Index&a=two";?>
"><table class="mainTable"><tr><th colspan="2">                    配置数据库
                </th></tr><tr><td align="right" class="td1" width="25%">                    数据库服务器：
                </td><td><input type="text" name="hostname" value="<?php echo (($tmp = @(isset($_POST['hostname']) ? $_POST['hostname'] : ''))===null||$tmp==='' ? '127.0.0.1' : $tmp);?>
" />&nbsp;通常为:localhost
                </td></tr><tr><td align="right" class="td1">                    数据库端口：
                </td><td><input type="text" name="port" value="<?php echo (($tmp = @(isset($_POST['port']) ? $_POST['port'] : ''))===null||$tmp==='' ? '3306' : $tmp);?>
" />&nbsp;默认值:3306
                </td></tr><tr><td align="right" class="td1">                    数据库名：
                </td><td><input type="text" name="database" value="<?php echo (($tmp = @(isset($_POST['database']) ? $_POST['database'] : ''))===null||$tmp==='' ? 'eaglephp' : $tmp);?>
" /></td></tr><tr><td align="right" class="td1">                    表前缀：
                </td><td><input type="text" name="dbprefix" value="<?php echo (isset($_POST['dbprefix']) ? $_POST['dbprefix'] : '');?>
" /> 如：eag_
                </td></tr><tr><td align="right" class="td1">                    数据库用户名：
                </td><td><input type="text" name="username" value="<?php echo (($tmp = @(isset($_POST['username']) ? $_POST['username'] : ''))===null||$tmp==='' ? 'root' : $tmp);?>
" /></td></tr><tr><td align="right" class="td1">                    数据库密码：
                </td><td><input type="text" name="password" value="<?php echo (isset($_POST['password']) ? $_POST['password'] : '');?>
" /></td></tr> <?php if ((isset($_smarty_tpl->tpl_vars['err_msg']->value)?$_smarty_tpl->tpl_vars['err_msg']->value:'')){?>
            <tbody class="errTable"><tr><td width="25%"></td><td>                        <?php echo (isset($_smarty_tpl->tpl_vars['err_msg']->value)?$_smarty_tpl->tpl_vars['err_msg']->value:'');?>

                    </td></tr></tbody>            <?php }?>
        </table><?php echo (isset($_smarty_tpl->tpl_vars['sql_msg']->value)?$_smarty_tpl->tpl_vars['sql_msg']->value:'');?>

        <div style="padding:20px 0 10px 0;text-align:center;"><input type="button" value="上一步" onclick="document.location='<?php echo "/project/Public/install/index.php?c=Index&a=one";?>
';"/><input type="submit" value="下一步"/></div></form></div>
<?php echo $_smarty_tpl->getSubTemplate ("Include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>