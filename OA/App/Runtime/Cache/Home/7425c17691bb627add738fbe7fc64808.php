<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageHeader">
<form id="pagerForm" data-toggle="ajaxsearch" action="/index.php/home/menu" method="post">
	
	<input type="hidden" name="pageSize" value="<?php echo ($numPerPage); ?>">
    <input type="hidden" name="pageCurrent" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>">
	 
        <div class="bjui-searchBar">
		      <span <?php echo display(CONTROLLER_NAME.'/del'); ?> style="float:right;" ><a href="/index.php/home/menu/del/navTabId/<?php echo CONTROLLER_NAME;?>" class="btn btn-red" data-toggle="doajax" data-confirm-msg="确定要清理吗？" data-icon="remove">清理</a></span>
			  <span <?php echo display(CONTROLLER_NAME.'/add'); ?> style="float:right;margin-right:20px;"><a href="/index.php/home/menu/add/navTabId/<?php echo CONTROLLER_NAME;?>" class="btn btn-green" data-toggle="dialog" data-width="600" data-height="300" data-id="dialog-mask" data-mask="true" data-icon="plus">新增</a></span>
			  <span><a class="btn btn-orange" href="javascript:;" onclick="$(this).navtab('reloadForm', true);" data-icon="undo">刷新</a></span>
		</div> 
</form>
    
</div>
<div class="bjui-pageContent">
     <table data-toggle="tablefixed" data-width="100%" data-layout-h="0" data-nowrap="true">
        <thead>
            <tr>
            <th width="30" height="30"></th>
            <th>编号</th>
				<th>菜单名称</th>
				<th>排序</th>
				<th>链接网址</th>
				<th <?php echo display(CONTROLLER_NAME.'/del'); ?> >状态</th>
				<th <?php echo display(CONTROLLER_NAME.'/edit'); ?> >操作</th> 
            </tr>
        </thead>
        <tbody>
        <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
        <td height=25></td><Td><?php echo ($v["id"]); ?></td><Td>
		<?php switch($v["level"]): case "0": ?>+<B><?php echo ($v["catename"]); ?></b><?php break;?> <?php case "1": ?>+--<?php echo ($v["catename"]); break; case "2": ?>+------<?php echo ($v["catename"]); break; default: endswitch;?>
	   </td>
	    <Td><?php echo ($v["sort"]); ?></td>
        <td><?php echo ($v["alink"]); ?></td>
        <td <?php echo display(CONTROLLER_NAME.'/del'); ?> ><a href="/index.php/home/menu/del/id/<?php echo ($v['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>" data-toggle="doajax" data-confirm-msg="确定要操作吗？"><?php if($v["status"] == 1 ): ?><img src="/Public/images/ok.gif" border="0"/><?php else: ?><img src="/Public/images/locked.gif" border="0"/><?php endif; ?></a></td>
		<td <?php echo display(CONTROLLER_NAME.'/edit'); ?> > <a href="/index.php/home/menu/edit/id/<?php echo ($v['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>"   class="btn btn-green btn-sm" data-toggle="dialog" data-width="600" data-height="300" data-id="dialog-mask" data-mask="true" >编辑</a></td>
        </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
</div>