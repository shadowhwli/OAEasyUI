<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageHeader">
<form id="pagerForm" data-toggle="ajaxsearch" action="/index.php/home/hr" method="post">
	
	<input type="hidden" name="pageSize" value="<?php echo ($numPerPage); ?>">
    <input type="hidden" name="pageCurrent" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>">
	 
        <div class="bjui-searchBar">
            <label>关键词：</label><input type="text" value="<?php echo ($_REQUEST['keys']); ?>" name="keys" class="form-control" size="15" />
             <button type="submit"  class="btn-default" data-icon="search">查询</button>
              <a class="btn btn-orange" href="javascript:;" onclick="$(this).navtab('reloadForm', true);" data-icon="undo">清空查询</a>
			  <span <?php echo display(CONTROLLER_NAME.'/del'); ?> style="float:right;" ><a href="/index.php/home/hr/del/navTabId/<?php echo CONTROLLER_NAME;?>" class="btn btn-red" data-toggle="doajax" data-confirm-msg="确定要清理吗？" data-icon="remove">清理</a></span> 
			  <span <?php echo display(CONTROLLER_NAME.'/outxls'); ?> style="float:right;margin-right:20px;"><a href="/index.php/home/hr/outxls" class="btn btn-blue" data-toggle="doexport" data-confirm-msg="确定要导出吗？" data-icon="arrow-up">导出</a></span>
			  <span <?php echo display(CONTROLLER_NAME.'/add'); ?> style="float:right;margin-right:20px;"><a href="/index.php/home/hr/add/navTabId/<?php echo CONTROLLER_NAME;?>" class="btn btn-green" data-toggle="dialog" data-width="900" data-height="500" data-id="dialog-mask" data-mask="true" data-icon="plus">新增</a></span>
		</div> 
</form>
    
</div>
<div class="bjui-pageContent">
     <table data-toggle="tablefixed" data-width="100%" data-layout-h="0" data-nowrap="true">
        <thead>
            <tr>
            <th width="10" height="30"></th>
            <th data-order-direction='desc' data-order-field='id'>ID</th>
<th>姓名</th>
<th data-order-direction='desc' data-order-field='sex'>性别</th>
<th data-order-direction='desc' data-order-field='gonghao'>工号</th>
<th data-order-direction='desc' data-order-field='bumen'>部门</th>
<th data-order-direction='desc' data-order-field='zhiwei'>职位</th>
<th data-order-direction='desc' data-order-field='shengri'>生日</th>
<th>员工类型</th>
<th data-order-direction='desc' data-order-field='ruzhi'>入职时间</th>
<th>在职状态</th>
<th data-order-direction='desc' data-order-field='zhuanye'>专业</th>
<th data-order-direction='desc' data-order-field='xueli'>学历</th>

			<th>详细</th>
		    <th <?php echo display(CONTROLLER_NAME.'/del'); ?> >状态</th>
		    <th <?php echo display(CONTROLLER_NAME.'/edit'); ?> >编辑</th>
            </tr>
        </thead>
        <tbody>

          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
		   <td></td>
		   <td><?php echo ($v["id"]); ?></td>
<td><?php echo (msubstr($v["xingming"],0,20)); ?></td>
<td><?php echo ($v["sex"]); ?></td>
<td><?php echo ($v["gonghao"]); ?></td>
<td><?php echo ($v["bumen"]); ?></td>
<td><?php echo ($v["zhiwei"]); ?></td>
<td><?php echo (substr($v["shengri"],0,10)); ?></td>
<td><?php echo (msubstr($v["type"],0,20)); ?></td>
<td><?php echo (substr($v["ruzhi"],0,10)); ?></td>
<td><?php echo (msubstr($v["zaizhi"],0,20)); ?></td>
<td><?php echo ($v["zhuanye"]); ?></td>
<td><?php echo ($v["xueli"]); ?></td>

		   <td><a href="/index.php/home/hr/view/id/<?php echo ($v['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>"  data-toggle="dialog" data-width="900" data-height="500" data-id="dialog-mask" data-mask="true" >详细</a></td>
		   <td <?php echo display(CONTROLLER_NAME.'/del'); ?> ><a href="/index.php/home/hr/del/id/<?php echo ($v['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>" data-toggle="doajax" data-confirm-msg="确定要操作吗？"><?php if($v["status"] == 1 ): ?><img src="/Public/images/ok.gif" border="0"/><?php else: ?><img src="/Public/images/locked.gif" border="0"/><?php endif; ?></a></td>
		   <td <?php echo display(CONTROLLER_NAME.'/edit'); ?> > <a href="/index.php/home/hr/edit/id/<?php echo ($v['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>"   class="btn btn-green btn-sm" data-toggle="dialog" data-width="900" data-height="500" data-id="dialog-mask" data-mask="true" >编辑</a></td>
		   </td>
         </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div class="bjui-footBar">
        <div class="pages">
            <span>共 <?php echo ($totalCount); ?> 条  每页 <?php echo ($numPerPage); ?> 条</span>
        </div>
	    <div class="pagination-box" data-toggle="pagination" data-total="<?php echo ($totalCount); ?>" data-page-size="<?php echo ($numPerPage); ?>" data-page-current="<?php echo ($currentPage); ?>">
        </div>
    </div>
</div>