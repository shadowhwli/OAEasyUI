<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
    <form action="/index.php/home/hrht/edit/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-condensed table-hover" width="100%">
           <tbody>
		   <tr><td><label for='juid_input' class='control-label x85'>员工ID:</label><input type='text' id='juid' name='juid'  size='20' data-toggle='lookup' data-url='/index.php/home/public/hruser/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["juid"]); ?>'  ></td><td><label for='juname_input' class='control-label x85'>员工姓名:</label><input type='text' id='juname' name='juname'  size='20' data-toggle='lookup' data-url='/index.php/home/public/hruser/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["juname"]); ?>'  ></td></tr>
<tr><td><label for='title_input' class='control-label x85'>合同名称:</label><input type='text' id='title' name='title' data-rule='required;' size='20'   value='<?php echo ($Rs["title"]); ?>'  ></td><td><label for='bianhao_input' class='control-label x85'>合同编号:</label><input type='text' id='bianhao' name='bianhao'  size='20'   value='<?php echo ($Rs["bianhao"]); ?>'  ></td></tr>
<tr><td><label for='type_input' class='control-label x85'>合同类型:</label><select name='type'  data-toggle='selectpicker' ><option value=''>请选择</option><?php if(is_array(C("HRHT_TYPE"))): $i = 0; $__LIST__ = C("HRHT_TYPE");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><option value='<?php echo ($type); ?>' <?php if( $type == $Rs['type'] ): ?>selected<?php endif; ?> ><?php echo ($type); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></td><td><label for='kssj_input' class='control-label x85'>生效日期:</label><input type='text' data-toggle='datepicker' id='kssj' name='kssj'   size='20'   value='<?php echo (substr($Rs["kssj"],0,10)); ?>'  ></td></tr>
<tr><td><label for='jsrj_input' class='control-label x85'>结束日期:</label><input type='text' data-toggle='datepicker' id='jsrj' name='jsrj'   size='20'   value='<?php echo (substr($Rs["jsrj"],0,10)); ?>'  ></td><td><label for='jcrq_input' class='control-label x85'>解除日期:</label><input type='text' data-toggle='datepicker' id='jcrq' name='jcrq'   size='20'   value='<?php echo (substr($Rs["jcrq"],0,10)); ?>'  ></td></tr>
<tr></tr>
<tr></tr>
<tr><td colspan=2><label for='beizhu_input' class='control-label x85'>备注:</label><div style='display: inline-block; vertical-align: middle;'><textarea name='beizhu'   data-toggle='kindeditor' data-minheight='150' data-items='fontname, fontsize, |, forecolor, hilitecolor, bold, italic, underline, removeformat, |, justifyleft, justifycenter, justifyright, insertorderedlist, insertunorderedlist, |, emoticons, image, link'><?php echo ($Rs["beizhu"]); ?></textarea></div></td></tr></tr>
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