<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageHeader">
<form id="pagerForm" data-toggle="ajaxsearch" action="/index.php/home/stock" method="post">
	
	<input type="hidden" name="pageSize" value="<?php echo ($numPerPage); ?>">
    <input type="hidden" name="pageCurrent" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>">
	 
        <div class="bjui-searchBar">
            <label>关键词：</label><input type="text" value="<?php echo ($_REQUEST['keys']); ?>" name="keys" class="form-control" size="15" />
             <button type="submit"  class="btn-default" data-icon="search">查询</button>
              <a class="btn btn-orange" href="javascript:;" onclick="$(this).navtab('reloadForm', true);" data-icon="undo">清空查询</a> 
			  <span <?php echo display(CONTROLLER_NAME.'/outxls'); ?> style="float:right;margin-right:20px;"><a href="/index.php/home/stock/outxls" class="btn btn-blue" data-toggle="doexport" data-confirm-msg="确定要导出吗？" data-icon="arrow-up">导出</a></span>
		</div> 
</form>
    
</div>
<div class="bjui-pageContent">
     <table data-toggle="tablefixed" data-width="100%" data-layout-h="0" data-nowrap="true">
        <thead>
            <tr>
            <th width="10" height="30"></th>
            <th data-order-direction='desc' data-order-field='id'>ID</th>
<th>产品名称</th>
<th data-order-direction='desc' data-order-field='fenlei'>产品分类</th>
<th data-order-direction='desc' data-order-field='jiage'>采购价格</th>
<th data-order-direction='desc' data-order-field='sjiage'>销售价格</th>
<th>计量单位</th>
<th>型号规格</th>
<th data-order-direction='desc' data-order-field='kucun'>库存数量</th>
<th data-order-direction='desc' data-order-field='ruku'>入库数量</th>
<th data-order-direction='desc' data-order-field='chuku'>出库数量</th>
<th>添加人</th>
<th data-order-direction='desc' data-order-field='addtime'>添加时间</th>
<th data-order-direction='desc' data-order-field='updatetime'>更新时间</th>

			<th>详细</th>
            </tr>
        </thead>
        <tbody>

          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
		   <td></td>
		   <td><?php echo ($v["id"]); ?></td>
<td><?php echo (msubstr($v["name"],0,20)); ?></td>
<td><?php echo ($v["fenlei"]); ?></td>
<td><?php echo ($v["jiage"]); ?></td>
<td><?php echo ($v["sjiage"]); ?></td>
<td><?php echo (msubstr($v["type"],0,20)); ?></td>
<td><?php echo (msubstr($v["title"],0,20)); ?></td>
<td><?php echo ($v["kucun"]); ?></td>
<td><?php echo ($v["ruku"]); ?></td>
<td><?php echo ($v["chuku"]); ?></td>
<td><?php echo (msubstr($v["uname"],0,20)); ?></td>
<td><?php echo (substr($v["addtime"],0,10)); ?></td>
<td><?php echo (substr($v["updatetime"],0,10)); ?></td>

		   <td><a href="/index.php/home/stock/view/id/<?php echo ($v['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>"  data-toggle="dialog" data-width="900" data-height="500" data-id="dialog-mask" data-mask="true" >详细</a></td>
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