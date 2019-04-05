<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-bordered table-striped table-hover">
           <tbody>
		   <tr><td><label for='id_input' class='control-label x85'>ID:</label><?php echo ($Rs["id"]); ?></td><td><label for='jhid_input' class='control-label x85'>关联合同:</label><?php echo ($Rs["jhid"]); ?></td></tr>
<tr><td><label for='jhname_input' class='control-label x85'>关联合同:</label><?php echo ($Rs["jhname"]); ?></td><td><label for='title_input' class='control-label x85'>开票抬头:</label><?php echo ($Rs["title"]); ?></td></tr>
<tr><td><label for='jine_input' class='control-label x85'>开票金额:</label><?php echo ($Rs["jine"]); ?></td><td><label for='bianhao_input' class='control-label x85'>开票编号:</label><?php echo ($Rs["bianhao"]); ?></td></tr>
<tr><td><label for='beizhu_input' class='control-label x85'>备注:</label><?php echo ($Rs["beizhu"]); ?></td><td><label for='juname_input' class='control-label x85'>经办人:</label><?php echo ($Rs["juname"]); ?></td></tr>
<tr><td><label for='uname_input' class='control-label x85'>添加人:</label><?php echo ($Rs["uname"]); ?></td><td><label for='addtime_input' class='control-label x85'>添加时间:</label><?php echo ($Rs["addtime"]); ?></td></tr>
<tr><td><label for='uuname_input' class='control-label x85'>更新人:</label><?php echo ($Rs["uuname"]); ?></td><td><label for='updatetime_input' class='control-label x85'>更新时间:</label><?php echo ($Rs["updatetime"]); ?></td></tr>
<tr><td><label for='addm_input' class='control-label x85'>年月记录:</label><?php echo ($Rs["addm"]); ?></td>
           </tbody>
          </table>
        </div>
		<div class="bjui-footBar">
        <ul>
            <li><button type="button" class="btn-close" data-icon="close">关闭</button></li>
        </ul>
    </div>
</div>