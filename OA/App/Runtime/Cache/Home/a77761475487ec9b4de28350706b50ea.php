<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
    <form action="/index.php/home/hrpx/add/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-condensed table-hover" width="100%">
           <tbody>
			<tr><td><label for='juid_input' class='control-label x85'>员工ID:</label><input type='text' id='juid' name='juid'  size='20' data-toggle='lookup' data-url='/index.php/home/public/hruser/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["juid"]); ?>'  ></td><td><label for='juname_input' class='control-label x85'>员工姓名:</label><input type='text' id='juname' name='juname'  size='20' data-toggle='lookup' data-url='/index.php/home/public/hruser/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["juname"]); ?>'  ></td></tr>
<tr><td><label for='title_input' class='control-label x85'>培训主题:</label><input type='text' id='title' name='title' data-rule='required;' size='20'   value='<?php echo ($Rs["title"]); ?>'  ></td><td><label for='feiyong_input' class='control-label x85'>培训费用:</label><input type='text' id='feiyong' name='feiyong'  size='20'   value='<?php echo ($Rs["feiyong"]); ?>'  ></td></tr>
<tr><td><label for='kssj_input' class='control-label x85'>开始时间:</label><input type='text' data-toggle='datepicker' id='kssj' name='kssj'   size='20'   value='<?php echo (substr($Rs["kssj"],0,10)); ?>'  ></td><td><label for='jssj_input' class='control-label x85'>结束时间:</label><input type='text' data-toggle='datepicker' id='jssj' name='jssj'   size='20'   value='<?php echo (substr($Rs["jssj"],0,10)); ?>'  ></td></tr>
<tr><td><label for='zhengshu_input' class='control-label x85'>获得证书:</label><input type='text' id='zhengshu' name='zhengshu'  size='20'   value='<?php echo ($Rs["zhengshu"]); ?>'  ></td><td><label for='didian_input' class='control-label x85'>培训地点:</label><input type='text' id='didian' name='didian'  size='20'   value='<?php echo ($Rs["didian"]); ?>'  ></td></tr>
<tr></tr>
<tr></tr>
<tr><td colspan=2><label for='beizhu_input' class='control-label x85'>详情:</label><div style='display: inline-block; vertical-align: middle;'><textarea name='beizhu'   data-toggle='kindeditor' data-minheight='150' data-items='fontname, fontsize, |, forecolor, hilitecolor, bold, italic, underline, removeformat, |, justifyleft, justifycenter, justifyright, insertorderedlist, insertunorderedlist, |, emoticons, image, link'><?php echo ($Rs["beizhu"]); ?></textarea></div></td></tr></tr>
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