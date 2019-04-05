<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
    <form action="/index.php/home/shou/add/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-condensed table-hover" width="100%">
           <tbody>
			<tr><td><label for='jhid_input' class='control-label x85'>关联合同:</label><input type='text' id='jhid' name='jhid'  size='20' data-toggle='lookup' data-url='/index.php/home/public/htname/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["jhid"]); ?>'  ></td><td><label for='jhname_input' class='control-label x85'>关联合同:</label><input type='text' id='jhname' name='jhname'  size='20' data-toggle='lookup' data-url='/index.php/home/public/htname/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["jhname"]); ?>'  ></td></tr>
<tr><td><label for='bianhao_input' class='control-label x85'>单据编号:</label><input type='text' id='bianhao' name='bianhao'  size='20'   value='<?php echo ($Rs["bianhao"]); ?>'  ></td><td><label for='type_input' class='control-label x85'>收款方式:</label><input type='text' id='type' name='type'  size='20' data-toggle='lookup' data-url='/index.php/home/public/sktype/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["type"]); ?>'  ></td></tr>
<tr><td><label for='jine_input' class='control-label x85'>收款金额:</label><input type='text' id='jine' name='jine' data-rule='required;' size='20'   value='<?php echo ($Rs["jine"]); ?>'  ></td><td><label for='juid_input' class='control-label x85'>经办人:</label><input type='text' id='juid' name='juid'  size='20' data-toggle='lookup' data-url='/index.php/home/public/user/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["juid"]); ?>'  ></td></tr>
<tr><td><label for='juname_input' class='control-label x85'>经办人:</label><input type='text' id='juname' name='juname'  size='20' data-toggle='lookup' data-url='/index.php/home/public/user/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["juname"]); ?>'  ></td></tr>
<tr></tr>
<tr><td colspan=2><label for='beizhu_input' class='control-label x85'>备注:</label><textarea name='beizhu'  cols='65' rows='5' ><?php echo ($Rs["beizhu"]); ?></textarea></td></tr></tr>
<tr><td colspan=2><label for='attid_input' class='control-label x85'>上传附件:</label><div style='display: inline-block; vertical-align: middle;'><IFRAME   src='/index.php/home/Public/attfile/attid/<?php echo ($attid); ?>/'  frameBorder=0 width='100%' height='30' scrolling=no ></IFRAME><input type='hidden' id='attid' name='attid'  value='<?php echo ($attid); ?>'  ></div></td></tr>
           </tbody>
          </table>
        </div>
        <div class="bjui-footBar">
            <ul>
                <li><button type="button" class="btn-close" data-icon="close">取消</button></li>
                <li><button type="submit" class="btn-default" data-icon="save">保存</button></li>
            </ul>
        </div>
    </form>
</div>