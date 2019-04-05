<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
    <table data-toggle="tablefixed" data-width="100%" data-layout-h="0">
	 <thead>
            <tr>
                <th height=30>请选择</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding:5px;">
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>&nbsp;<a href="javascript:;" data-toggle="lookupback" data-args="{ bumen:'<?php echo ($v["title"]); ?>'}" class="btn btn-blue" title="<?php echo ($v["title"]); ?>" data-icon="check"><?php echo ($v["title"]); ?></a>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>	
                </td>
            </tr>
        </tbody>
    </table>
</div>