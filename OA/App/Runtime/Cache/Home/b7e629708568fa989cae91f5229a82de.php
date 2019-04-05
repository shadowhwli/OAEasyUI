<?php if (!defined('THINK_PATH')) exit();?>
<div class="bjui-pageHeader">
<form id="pagerForm" data-toggle="ajaxsearch" action="/index.php/home/org" method="post">
	
	<input type="hidden" name="pageSize" value="<?php echo ($numPerPage); ?>">
    <input type="hidden" name="pageCurrent" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>">
	 
        <div class="bjui-searchBar">
		      <span <?php echo display(CONTROLLER_NAME.'/del'); ?> style="float:right;" ><a href="/index.php/home/org/del/navTabId/<?php echo CONTROLLER_NAME;?>" class="btn btn-red" data-toggle="doajax" data-confirm-msg="确定要清理吗？" data-icon="remove">清理</a></span>
			  <span <?php echo display(CONTROLLER_NAME.'/add'); ?> style="float:right;margin-right:20px;"><a href="/index.php/home/org/add/type/0/navTabId/<?php echo CONTROLLER_NAME;?>" class="btn btn-green" data-toggle="dialog" data-width="600" data-height="300" data-id="dialog-mask" data-mask="true" data-icon="plus">新增部门</a></span>
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
			<th>部门名称</th>
			<th <?php echo display(CONTROLLER_NAME.'/edit'); ?> >操作</th>
			<th width="70%"></th>
            </tr>
        </thead>
        <tbody>

       <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
        <td height=25></td><Td><?php echo ($v["id"]); ?></td><Td>
		<?php switch($v["level"]): case "0": ?>+<B><?php echo ($v["title"]); ?></b><?php break;?> <?php case "1": ?>+--<?php echo ($v["title"]); break; case "2": ?>+------<?php echo ($v["title"]); break; default: endswitch;?>
	    <?php echo ($v["sort"]); ?> <?php if($v["status"] == 1 ): else: ?><img src="/Public/images/locked.gif" border="0"/><?php endif; ?>
	    </td>
		<td <?php echo display(CONTROLLER_NAME.'/edit'); ?> > <a href="/index.php/home/org/edit/id/<?php echo ($v['id']); ?>/type/0/navTabId/<?php echo CONTROLLER_NAME;?>"   class="btn btn-green btn-sm" data-toggle="dialog" data-width="600" data-height="300" data-id="dialog-mask" data-mask="true" >编辑</a>
		    <a href="/index.php/home/org/EditRule/id/<?php echo ($v['id']); ?>/type/0/navTabId/<?php echo CONTROLLER_NAME;?>"   class="btn btn-green btn-sm" data-toggle="dialog" data-width="950" data-height="500" data-id="dialog-mask" data-mask="true" >权限</a>
		</td>
        <Td></td>
        </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
</div>