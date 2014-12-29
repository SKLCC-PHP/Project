<?php /* Smarty version Smarty-3.1.12, created on 2014-02-16 10:17:12
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\News\add.html" */ ?>
<?php /*%%SmartyHeaderCode:2453253001fa8011fe7-09093781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ade38306cb26c95abf89a112725477d375717ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\News\\add.html',
      1 => 1371095365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2453253001fa8011fe7-09093781',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'types' => 0,
    'username' => 0,
    'needwatermark' => 0,
    'uploadUrl' => 0,
    'PHPSESSID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53001fa809cba6_09477609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53001fa809cba6_09477609')) {function content_53001fa809cba6_09477609($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\project\\Common\\Smarty\\plugins\\function.html_options.php';
?><div class="pageContent"><form method="post" action="<?php echo "/project/Public/admin/index.php?c=News&a=add";?>
" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);"><div class="pageFormContent" layoutH="56"><div class="unit"><a href="#" onclick="openPickBox()">●&nbsp;输入网址采集单个网页>></a><br/></div><dl id="pickBox" style="width:90%;display: none;"><dt>采集单个网页-URL：</dt><dd style="width:80%"><input type="text" name="url" id="url" value="" size="30"/><div style="float:left;padding:0 10px;"><a class="button" href="#" onclick="pick()"><span>抓取</span></a></div><div style="float:left;"><a class="button" href="<?php echo "/project/Public/admin/index.php?c=pick";?>
" target="navTab"  rel="Pick"><span>规则管理</span></a></div></dd></dl><div class="divider"></div><dl><dt>标题：</dt><dd><input name="title" id="title" class="required" type="text" size="30" value="" alt=""/></dd></dl><dl><dt>类型：</dt><dd><select name="type" class="combox required"><option value="">--类型--</option><?php echo smarty_function_html_options(array('options'=>(isset($_smarty_tpl->tpl_vars['types']->value)?$_smarty_tpl->tpl_vars['types']->value:'')),$_smarty_tpl);?>

</select></dd></dl><dl><dt>排序值：</dt><dd><input name="rank" type="text" size="30" value="" alt=""/></dd></dl><dl><dt>创建者：</dt><dd><input name="create_username" type="text" size="20" value="<?php echo (isset($_smarty_tpl->tpl_vars['username']->value)?$_smarty_tpl->tpl_vars['username']->value:'');?>
" alt="" readonly="readonly"/></dd></dl><dl><dt>作者：</dt><dd><input name="auth" type="text" size="30"/></dd></dl><dl><dt>来源：</dt><dd><input name="source" type="text" size="20"/></dd></dl><dl><dt>点击数：</dt><dd><input name="clicknum" type="text" size="30" value="0"/></dd></dl><div class="divider"></div><dl class="nowrap"><dt>关键字：</dt><dd><input name="keywords" id="keywords" type="text" size="60" value="" alt=""/>&nbsp;&nbsp;多个关键字用英文逗号分隔</dd></dl><dl class="nowrap"><dt>文章摘要：</dt><dd><textarea class="" name="description" id="description" rows="5" cols="80"></textarea></dd></dl><div class="divider"></div><dl class="nowrap"><dt>附加选项：</dt><dd style="width:50%"><input type="checkbox" name="remote" <?php if (getCfgVar('cfg_rm_remote')==1){?>checked<?php }?> value="1"/>下载远程图片和资源&nbsp;&nbsp;
<input type="checkbox" name="autolitpic" <?php if (getCfgVar('cfg_arc_autopic')==1){?>checked<?php }?> value="1"/>提取第一张图片为缩略图
<input type="checkbox" name="dellink" <?php if (getCfgVar('cfg_arc_dellink')==1){?>checked<?php }?> value="1"/>删除非站内链接
<input type="checkbox" name="needwatermark" <?php if ((isset($_smarty_tpl->tpl_vars['needwatermark']->value)?$_smarty_tpl->tpl_vars['needwatermark']->value:'')==1){?>checked<?php }?> value="1"/>图片是否加水印
</dd></dl><div class="divider"></div><dl class="nowrap"><dt>内容：</dt><dd><div class="unit"><textarea 
class = "editor" 
name = "content"
id = "content"
rows = "25" 
cols = "100" 
tools = "full"
upImgUrl = "!{editorRoot}xheditor_plugins/multiupload/multiupload.html?uploadurl=<?php echo (isset($_smarty_tpl->tpl_vars['uploadUrl']->value)?$_smarty_tpl->tpl_vars['uploadUrl']->value:'');?>
&params={'PHPSESSID':'<?php echo (isset($_smarty_tpl->tpl_vars['PHPSESSID']->value)?$_smarty_tpl->tpl_vars['PHPSESSID']->value:'');?>
'}&ext=图片文件(*.jpg;*.jpeg;*.gif;*.png)"
></textarea></div><span>内容分页请用<font color="red">#page#</font>分隔。</span></dd></dl><div class="divider"></div><dl class="nowrap"><dt>插入投票：</dt><dd><input type="hidden" name="orgLookup.id" value=""/><input type="text" class="textInput" name="orgLookup.orgName" size="60" value="" readonly="readonly"/><a class="btnLook" href="<?php echo "/project/Public/admin/index.php?c=vote&a=lookup";?>
" lookupGroup="orgLookup" lookupName="orgLookup" maxable="false" resizable="false" title="插入投票"><hi:text key="查找带回"/></a></dd></dl></div><div class="formBar"><ul><li><div class="buttonActive"><div class="buttonContent"><button type="submit">添加</button></div></div></li><li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li></ul></div></form></div><script type="text/javascript">$("#title").focus();

function openPickBox(){
var display = $("#pickBox").css("display");
$("#pickBox").css("display", (display == 'none' ? 'block' : 'none'));
}

// 采集网页内容 ajax提交
function pick(){
var url = $("#url").val();
if(url == ""){
alertMsg.error("请输入您要采集的URL！");
return false;
}
$.post("<?php echo "/project/Public/admin/index.php?c=News&a=pick";?>
",
           {url: url},
           function(data){
              var obj = {};
              eval("obj="+data);
              if(obj.statusCode == 200){
          $("#title").val(obj.data.title);
          $("#keywords").val(obj.data.keywords);
          $("#description").val(obj.data.description);
          $("#content").val(obj.data.content);
              }else{
              alertMsg.error(obj.message);
              }
              
           } 
    ); 
}

</script>
<?php }} ?>