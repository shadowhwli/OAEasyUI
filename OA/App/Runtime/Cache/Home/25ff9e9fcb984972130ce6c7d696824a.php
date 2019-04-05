<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-bordered table-striped table-hover">
           <tbody>
		   <tr><td><label for='id_input' class='control-label x85'>ID:</label><?php echo ($Rs["id"]); ?></td><td><label for='jhname_input' class='control-label x85'>关联合同:</label><?php echo ($Rs["jhname"]); ?></td></tr>
<tr><td><label for='bianhao_input' class='control-label x85'>单据编号:</label><?php echo ($Rs["bianhao"]); ?></td><td><label for='fenlei_input' class='control-label x85'>款项类型:</label><?php echo ($Rs["fenlei"]); ?></td></tr>
<tr><td><label for='type_input' class='control-label x85'>付款方式:</label><?php echo ($Rs["type"]); ?></td><td><label for='jine_input' class='control-label x85'>付款金额:</label><?php echo ($Rs["jine"]); ?></td></tr>
<tr><td><label for='juname_input' class='control-label x85'>经办人:</label><?php echo ($Rs["juname"]); ?></td><td><label for='uname_input' class='control-label x85'>添加人:</label><?php echo ($Rs["uname"]); ?></td></tr>
<tr><td><label for='addtime_input' class='control-label x85'>添加时间:</label><?php echo ($Rs["addtime"]); ?></td><td><label for='uuname_input' class='control-label x85'>更新人:</label><?php echo ($Rs["uuname"]); ?></td></tr>
<tr><td><label for='updatetime_input' class='control-label x85'>更新时间:</label><?php echo ($Rs["updatetime"]); ?></td><td><label for='addm_input' class='control-label x85'>年月记录:</label><?php echo ($Rs["addm"]); ?></td></tr>
<tr></tr>
<tr><td colspan=2><label for='beizhu_input' class='control-label x85'>备注:</label><textarea name='beizhu'  cols='65' rows='5' ><?php echo ($Rs["beizhu"]); ?></textarea></td></tr></tr>
<tr><td colspan=2><label for='attid_input' class='control-label x85'>上传附件:</label>
			<?php $attlist=M('files')->where('attid='.$Rs['attid'])->select(); ?>	
	         <?php if(is_array($attlist)): foreach($attlist as $key=>$vf): echo (truename($vf['uid'])); ?>:<a href='/<?php echo ($vf['folder']); echo ($vf['filename']); ?>' target=_blank><?php echo ($vf['filedesc']); ?></A>&nbsp;&nbsp;<?php echo ($vf['addtime']); ?><Br/><label  class='control-label x85'></label><?php endforeach; endif; ?></td></tr>
           </tbody>
          </table>
        </div>
		<div class="bjui-footBar">
        <ul>
            <li><button type="button" class="btn-close" data-icon="close">关闭</button></li>
        </ul>
    </div>
</div>