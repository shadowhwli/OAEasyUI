<?php if (!defined('THINK_PATH')) exit();?>
<div class="bjui-pageContent">
    <table data-toggle="tablefixed" data-width="100%" data-layout-h="0">
	 <thead>
            <tr>
                <th height=30>常用分类，如果没有合适的分类，直接输入即可</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding:5px;">
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>&nbsp;<a href="javascript:;" data-toggle="lookupback" data-args="{ fenlei:'<?php echo ($v["fenlei"]); ?>'}" class="btn btn-blue" title="<?php echo ($v["fenlei"]); ?>" data-icon="check"><?php echo ($v["fenlei"]); ?></a>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>	
                </td>
            </tr>
        </tbody>
    </table>
</div>