<?php /* Smarty version Smarty-3.1.12, created on 2014-02-16 12:11:01
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\Tool\mysql.html" */ ?>
<?php /*%%SmartyHeaderCode:1213953003a5598d7a8-78806904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12e800c6ee629485a66617ae0320b5816798d3b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\Tool\\mysql.html',
      1 => 1371095365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1213953003a5598d7a8-78806904',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'charset_arr' => 0,
    'db_arr' => 0,
    'mysql_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53003a55a42ee7_83827364',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53003a55a42ee7_83827364')) {function content_53003a55a42ee7_83827364($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\project\\Common\\Smarty\\plugins\\function.html_options.php';
?><div class="pageHeader"><form onsubmit="return navTabSearch(this);" id="db_form" action="<?php echo "/project/Public/admin/index.php?c=Tool&a=mysql";?>
" method="post"><input type="hidden" ><div class="searchBar"><table class="searchContent"><tr><td>主机：<input type="text" name="dbhost" value="<?php echo (isset($_REQUEST['dbhost']) ? $_REQUEST['dbhost'] : '');?>
" size="15"/>:
    <input type="text" name="dbport" value="<?php echo (isset($_REQUEST['dbport']) ? $_REQUEST['dbport'] : '');?>
" size="4"/></td><td>用户名：<input type="text" name="dbuser" value="<?php echo (isset($_REQUEST['dbuser']) ? $_REQUEST['dbuser'] : '');?>
" size="10"/></td><td>密码：<input type="password" name="dbpwd" value="<?php echo (isset($_REQUEST['dbpwd']) ? $_REQUEST['dbpwd'] : '');?>
" size="10"/></td><td><select name="dbcharset" class="combox"><option value="">--字符集--</option><?php echo smarty_function_html_options(array('output'=>(isset($_smarty_tpl->tpl_vars['charset_arr']->value)?$_smarty_tpl->tpl_vars['charset_arr']->value:''),'values'=>(isset($_smarty_tpl->tpl_vars['charset_arr']->value)?$_smarty_tpl->tpl_vars['charset_arr']->value:''),'selected'=>(isset($_REQUEST['dbcharset']) ? $_REQUEST['dbcharset'] : '')),$_smarty_tpl);?>

</select></td><?php if ((isset($_smarty_tpl->tpl_vars['db_arr']->value)?$_smarty_tpl->tpl_vars['db_arr']->value:'')){?>
<td><select name="dbname" class="combox"><option value="">--数据库--</option><?php echo smarty_function_html_options(array('options'=>(isset($_smarty_tpl->tpl_vars['db_arr']->value)?$_smarty_tpl->tpl_vars['db_arr']->value:''),'selected'=>(isset($_REQUEST['dbname']) ? $_REQUEST['dbname'] : '')),$_smarty_tpl);?>

</select></td><?php }?>
<td><div class="subBar"><ul><li><div class="buttonActive"><div class="buttonContent"><button type="submit">连接</button></div></div></li></ul></div></td></tr><?php if ((isset($_REQUEST['dbname']) ? $_REQUEST['dbname'] : '')){?>
<tr><td colspan="6"><?php echo (isset($_smarty_tpl->tpl_vars['mysql_info']->value)?$_smarty_tpl->tpl_vars['mysql_info']->value:'');?>
， Current database: <u style="color:blue;"> <?php echo (isset($_REQUEST['dbname']) ? $_REQUEST['dbname'] : '');?>
</u></td></tr><tr><td colspan="4">    SQL：<textarea rows="3" cols="80" name="query"><?php echo (isset($_REQUEST['query']) ? $_REQUEST['query'] : '');?>
</textarea></td><td colspan="2"><div class="subBar"><ul><li><div class="buttonActive"><div class="buttonContent"><button value="12" type="submit" name="queryBtn">执行</button></div></div></li></ul></div></td></tr><?php }?>
</table></div></form></div><?php if ((isset($_REQUEST['go']) ? $_REQUEST['go'] : '')=="record"){?>
    <?php echo $_smarty_tpl->getSubTemplate ("Tool/mysql_record.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }elseif((isset($_REQUEST['go']) ? $_REQUEST['go'] : '')=="query"){?>
    <?php echo $_smarty_tpl->getSubTemplate ("Tool/mysql_query.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }elseif((isset($_REQUEST['dbname']) ? $_REQUEST['dbname'] : '')!=''){?>
    <?php echo $_smarty_tpl->getSubTemplate ("Tool/mysql_table.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }?>



<?php }} ?>