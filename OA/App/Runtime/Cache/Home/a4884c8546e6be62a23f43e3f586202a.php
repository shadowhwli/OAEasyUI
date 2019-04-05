<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
    <form action="/index.php/home/hrjf/add/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-condensed table-hover" width="100%">
           <tbody>
			<tr><td><label for='juid_input' class='control-label x85'>员工ID:</label><input type='text' id='juid' name='juid'  size='20' data-toggle='lookup' data-url='/index.php/home/public/hruser/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["juid"]); ?>'  ></td><td><label for='juname_input' class='control-label x85'>员工姓名:</label><input type='text' id='juname' name='juname'  size='20' data-toggle='lookup' data-url='/index.php/home/public/hruser/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["juname"]); ?>'  ></td></tr>
<tr><td><label for='type_input' class='control-label x85'>奖罚属性:</label><select name='type'  data-toggle='selectpicker' ><option value=''>请选择</option><?php if(is_array(C("HRJF_TYPE"))): $i = 0; $__LIST__ = C("HRJF_TYPE");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><option value='<?php echo ($type); ?>' <?php if( $type == $Rs['type'] ): ?>selected<?php endif; ?> ><?php echo ($type); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></td><td><label for='title_input' class='control-label x85'>奖罚名称:</label><input type='text' id='title' name='title' data-rule='required;' size='20'   value='<?php echo ($Rs["title"]); ?>'  ></td></tr>
<tr><td><label for='sxrq_input' class='control-label x85'>生效日期:</label><input type='text' data-toggle='datepicker' id='sxrq' name='sxrq'  data-rule='required;' size='20'   value='<?php echo (substr($Rs["sxrq"],0,10)); ?>'  ></td><td><label for='jine_input' class='control-label x85'>奖罚金额:</label><input type='text' id='jine' name='jine'  size='20'   value='<?php echo ($Rs["jine"]); ?>'  ></td></tr>
<tr><td><label for='gongzi_input' class='control-label x85'>生效工资月份:</label><input type='text' data-toggle='datepicker' id='gongzi' name='gongzi'   size='20'   value='<?php echo (substr($Rs["gongzi"],0,10)); ?>'  ></td></tr>
<tr></tr>
<tr><td colspan=2><label for='beizhu_input' class='control-label x85'>说明:</label><div style='display: inline-block; vertical-align: middle;'><textarea name='beizhu'   data-toggle='kindeditor' data-minheight='150' data-items='fontname, fontsize, |, forecolor, hilitecolor, bold, italic, underline, removeformat, |, justifyleft, justifycenter, justifyright, insertorderedlist, insertunorderedlist, |, emoticons, image, link'><?php echo ($Rs["beizhu"]); ?></textarea></div></td></tr></tr>
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