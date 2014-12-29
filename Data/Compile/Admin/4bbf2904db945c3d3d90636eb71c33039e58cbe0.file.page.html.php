<?php /* Smarty version Smarty-3.1.12, created on 2014-02-25 13:26:04
         compiled from "C:\xampp\htdocs\project\Application\Admin\View\Include\page.html" */ ?>
<?php /*%%SmartyHeaderCode:2492253001382b4d142-26835781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bbf2904db945c3d3d90636eb71c33039e58cbe0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\Application\\Admin\\View\\Include\\page.html',
      1 => 1393305026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2492253001382b4d142-26835781',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53001382b7ebf4_71650772',
  'variables' => 
  array (
    'targetType' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53001382b7ebf4_71650772')) {function content_53001382b7ebf4_71650772($_smarty_tpl) {?>
<div class="panelBar" ><div class="pages"><span>显示</span><select class="combox" name="numPerPage" onchange="dwzPageBreak({targetType:'<?php echo (($tmp = @(isset($_smarty_tpl->tpl_vars['targetType']->value)?$_smarty_tpl->tpl_vars['targetType']->value:''))===null||$tmp==='' ? 'navTab' : $tmp);?>
', data:{numPerPage:this.value}})"><option value="20">20</option><option value="50">50</option><option value="100">100</option><option value="200">200</option></select><span>条，共<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['totalCount'])?$_smarty_tpl->tpl_vars['page']->value['totalCount']:'');?>
条</span></div><div class="pagination" targetType="<?php echo (($tmp = @(isset($_smarty_tpl->tpl_vars['targetType']->value)?$_smarty_tpl->tpl_vars['targetType']->value:''))===null||$tmp==='' ? 'navTab' : $tmp);?>
" totalCount="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['totalCount'])?$_smarty_tpl->tpl_vars['page']->value['totalCount']:'');?>
" numPerPage="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['numPerPage'])?$_smarty_tpl->tpl_vars['page']->value['numPerPage']:'');?>
" pageNumShown="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['pageNumShown'])?$_smarty_tpl->tpl_vars['page']->value['pageNumShown']:'');?>
" currentPage="<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['pageNum'])?$_smarty_tpl->tpl_vars['page']->value['pageNum']:'');?>
"></div><script type="text/javascript">    $(function(){
        $("select[name=numPerPage] option[value=<?php echo (isset($_smarty_tpl->tpl_vars['page']->value['numPerPage'])?$_smarty_tpl->tpl_vars['page']->value['numPerPage']:'');?>
]").attr("selected", "selected");
    });
</script><?php }} ?>