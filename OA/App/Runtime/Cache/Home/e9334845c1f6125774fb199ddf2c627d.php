<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
    <form action="/index.php/home/piao/edit/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-condensed table-hover" width="100%">
           <tbody>
		   <tr><td><label for='jhid_input' class='control-label x85'>关联合同:</label><input type='text' id='jhid' name='jhid'  size='20' data-toggle='lookup' data-url='/index.php/home/public/htname/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["jhid"]); ?>'  disabled></td><td><label for='jhname_input' class='control-label x85'>关联合同:</label><input type='text' id='jhname' name='jhname'  size='20' data-toggle='lookup' data-url='/index.php/home/public/htname/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["jhname"]); ?>' disabled ></td></tr>
<tr><td><label for='title_input' class='control-label x85'>开票抬头:</label><input type='text' id='title' name='title'  size='20'   value='<?php echo ($Rs["title"]); ?>'  ></td><td><label for='jine_input' class='control-label x85'>开票金额:</label><input type='text' id='jine' name='jine'  size='20'   value='<?php echo ($Rs["jine"]); ?>'  disabled></td></tr>
<tr><td><label for='bianhao_input' class='control-label x85'>开票编号:</label><input type='text' id='bianhao' name='bianhao' data-rule='required;' size='20'   value='<?php echo ($Rs["bianhao"]); ?>'  ></td><td><label for='beizhu_input' class='control-label x85'>备注:</label><input type='text' id='beizhu' name='beizhu'  size='20'   value='<?php echo ($Rs["beizhu"]); ?>'  ></td></tr>
<tr><td><label for='juid_input' class='control-label x85'>经办人:</label><input type='text' id='juid' name='juid'  size='20' data-toggle='lookup' data-url='/index.php/home/public/user/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["juid"]); ?>'  ></td><td><label for='juname_input' class='control-label x85'>经办人:</label><input type='text' id='juname' name='juname'  size='20' data-toggle='lookup' data-url='/index.php/home/public/user/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["juname"]); ?>'  ></td></tr>
<tr>
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