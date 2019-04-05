<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageHeader">
<form id="pagerForm" data-toggle="ajaxsearch" action="/index.php/home/rule" method="post">
	
	<input type="hidden" name="pageSize" value="<?php echo ($numPerPage); ?>">
    <input type="hidden" name="pageCurrent" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>">
	 
        <div class="bjui-searchBar">
		      <span <?php echo display(CONTROLLER_NAME.'/del'); ?> style="float:right;" ><a href="/index.php/home/rule/del/navTabId/<?php echo CONTROLLER_NAME;?>" class="btn btn-red" data-toggle="doajax" data-confirm-msg="确定要清理吗？" data-icon="remove">清理</a></span>
			  <span <?php echo display(CONTROLLER_NAME.'/add'); ?> style="float:right;margin-right:20px;"><a href="/index.php/home/rule/add/navTabId/<?php echo CONTROLLER_NAME;?>" class="btn btn-green" data-toggle="dialog" data-width="600" data-height="300" data-id="dialog-mask" data-mask="true" data-icon="plus">新增</a></span>
			  <span><a class="btn btn-orange" href="javascript:;" onclick="$(this).navtab('reloadForm', true);" data-icon="undo">刷新</a></span>
		</div> 
</form>
    
</div>
<div class="bjui-pageContent">
     <table data-toggle="tablefixed" data-width="100%" data-layout-h="0" data-nowrap="true">
        <thead>
            <tr>
            <th width="30" height="30"></th>
				<th width="100">大类</th>
				<th>菜单</th>
            </tr>
        </thead>
        <tbody>

       <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
        <td height=25></td><Td>
		<a href="/index.php/home/rule/edit/id/<?php echo ($v['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>" class="btn btn-green btn-sm" data-toggle="dialog" data-width="600" data-height="300" data-id="dialog-mask" data-mask="true"  ><?php echo ($v["title"]); ?></a>
	    <?php echo ($v["sort"]); ?> <?php if($v["status"] == 1 ): else: ?><img src="/Public/images/locked.gif" border="0"/><?php endif; ?>
	    </td>
		<td>
		<Table width="100%">
		<?php $list1 = M('auth_rule')->where('level=1 and pid='.$v['id'])->order('sort')->select(); ?>
		<?php if(is_array($list1)): foreach($list1 as $key=>$v): ?><Tr><Td height=30 width=200>
        <a href="/index.php/home/rule/edit/id/<?php echo ($v['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>"  class="btn btn-green btn-sm" data-toggle="dialog" data-width="600" data-height="300" data-id="dialog-mask" data-mask="true" ><?php echo ($v["title"]); ?></a>
	    <?php echo ($v["sort"]); ?> <?php if($v["status"] == 1 ): else: ?><img src="/Public/images/locked.gif" border="0"/><?php endif; ?>
	    </td>
		<td>
		
		<?php $list2 = M('auth_rule')->where('level=2 and pid='.$v['id'])->order('sort')->select(); ?>
		<?php if(is_array($list2)): foreach($list2 as $key=>$v): ?><span style="width:95px;">
        <a href="/index.php/home/rule/edit/id/<?php echo ($v['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>"   class="btn btn-green btn-sm" data-toggle="dialog" data-width="600" data-height="300" data-id="dialog-mask" data-mask="true" ><?php echo ($v["title"]); ?></a>
	    <?php echo ($v["sort"]); ?> <?php if($v["status"] == 1 ): else: ?><img src="/Public/images/locked.gif" border="0"/><?php endif; ?>
        </span><?php endforeach; endif; ?> 
	
		</td>
		</tr><?php endforeach; endif; ?> 
		</table>
		</td>
        </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
</div>