<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageHeader">
<form id="pagerForm" data-toggle="ajaxsearch" action="/index.php/home/user" method="post">
	
	<input type="hidden" name="pageSize" value="<?php echo ($numPerPage); ?>">
    <input type="hidden" name="pageCurrent" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>">
	 
        <div class="bjui-searchBar">
            <label>关键词：</label><input type="text" value="<?php echo ($_REQUEST['keys']); ?>" name="keys" class="form-control" size="15" />
             <button type="submit"  class="btn-default" data-icon="search">查询</button>
              <a class="btn btn-orange" href="javascript:;" onclick="$(this).navtab('reloadForm', true);" data-icon="undo">清空查询</a>
			  <span <?php echo display(CONTROLLER_NAME.'/del'); ?> style="float:right;" ><a href="/index.php/home/user/del/navTabId/<?php echo CONTROLLER_NAME;?>" class="btn btn-red" data-toggle="doajax" data-confirm-msg="确定要清理吗？" data-icon="remove">清理</a></span>
			  <span <?php echo display(CONTROLLER_NAME.'/add'); ?> style="float:right;margin-right:20px;"><a href="/index.php/home/user/add/navTabId/<?php echo CONTROLLER_NAME;?>" class="btn btn-green" data-toggle="dialog" data-width="600" data-height="450" data-id="dialog-mask" data-mask="true" data-icon="plus">新增</a></span>
		      <span class="right"><a href="/index.php/home/user/del" class="btn btn-blue" data-toggle="doajax" data-icon="arrow-up">导入</a></span>
			  <span class="right"><a href="/index.php/home/user/del" class="btn btn-blue" data-toggle="doajax" data-icon="arrow-down">导出</a></span>
		</div> 
</form>
    
</div>
<div class="bjui-pageContent">
     <table data-toggle="tablefixed" data-width="100%" data-layout-h="0" data-nowrap="true">
        <thead>
            <tr>
            <th width="30" height="30"></th>
            <th>编号</th>
			<th>登陆账号</th>
            <th>真实姓名</th>
		    <th>所在部门</th>
	    	<th>担任职位</th>
		    <th>固定电话</th>
            <th>移动电话</th>
            <th>电子邮箱</th>
			<th>QQ</th>
			<th <?php echo display(CONTROLLER_NAME.'/editrule'); ?> >权限</th>
            <th data-order-direction="desc" data-order-field="logintime">登陆时间</th>
		    <th>登陆IP</th>
		    <th data-order-direction="desc" data-order-field="logins">登陆次数</th>
		    <th <?php echo display(CONTROLLER_NAME.'/del'); ?> >状态</th>
		    <th <?php echo display(CONTROLLER_NAME.'/edit'); ?> >编辑</th>
            </tr>
        </thead>
        <tbody>

          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
		   <td></td>
		   <td><?php echo ($v["id"]); ?></td>
           <td><?php echo ($v["username"]); ?></td>
           <td><?php echo ($v["truename"]); ?></td>
		   <td><?php echo ($v["depname"]); ?> </td>
		   <td><?php echo ($v["posname"]); ?></td>
		   <td><?php echo ($v["tel"]); ?></td>
           <td><?php echo ($v["phone"]); ?></td>
           <td><?php echo ($v["email"]); ?></td>
		   <td><?php echo ($v["qq"]); ?></td>
		   <td <?php echo display(CONTROLLER_NAME.'/editrule'); ?> ><a href="/index.php/home/user/editrule/id/<?php echo ($v['id']); ?>/depname/<?php echo ($v['depname']); ?>/posname/<?php echo ($v['posname']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>" data-toggle="doajax" data-confirm-msg="确定要操作吗？"><?php M('auth_group_access')->where(array("group_id"=>0))->delete();if (M('auth_group_access')->where(array("uid"=>$v['id']))->count() > 0){echo "有";}else{echo "无";} ?></a></td>
           <td><?php echo ($v["logintime"]); ?></td>
		   <td><?php echo ($v["loginip"]); ?></td>
		   <td><?php echo ($v["logins"]); ?></td>
		   <td <?php echo display(CONTROLLER_NAME.'/del'); ?> ><a href="/index.php/home/user/del/id/<?php echo ($v['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>" data-toggle="doajax" data-confirm-msg="确定要操作吗？"><?php if($v["status"] == 1 ): ?><img src="/Public/images/ok.gif" border="0"/><?php else: ?><img src="/Public/images/locked.gif" border="0"/><?php endif; ?></a></td>
		   <td <?php echo display(CONTROLLER_NAME.'/edit'); ?> > <a href="/index.php/home/user/edit/id/<?php echo ($v['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>"   class="btn btn-green btn-sm" data-toggle="dialog" data-width="600" data-height="450" data-id="dialog-mask" data-mask="true" >编辑</a></td>
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