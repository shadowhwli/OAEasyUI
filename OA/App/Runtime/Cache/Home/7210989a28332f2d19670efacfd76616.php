<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-bordered table-striped table-hover">
           <tbody>
		   <tr><td><label for='id_input' class='control-label x85'>ID:</label><?php echo ($Rs["id"]); ?></td><td><label for='juname_input' class='control-label x85'>接收人:</label><?php echo ($Rs["juname"]); ?></td></tr>
<tr><td><label for='title_input' class='control-label x85'>通知标题:</label><?php echo ($Rs["title"]); ?></td><td><label for='jzrq_input' class='control-label x85'>截止日期:</label><?php echo ($Rs["jzrq"]); ?></td></tr>
<tr><td><label for='uname_input' class='control-label x85'>发布人:</label><?php echo ($Rs["uname"]); ?></td><td><label for='addtime_input' class='control-label x85'>发布时间:</label><?php echo ($Rs["addtime"]); ?></td></tr>
<tr><td><label for='uuname_input' class='control-label x85'>最后回复:</label><?php echo ($Rs["uuname"]); ?></td><td><label for='updatetime_input' class='control-label x85'>回复时间:</label><?php echo ($Rs["updatetime"]); ?></td></tr>
<tr><td colspan=2><label for='value_input' class='control-label x85'>详情:</label><div style='display: inline-block; vertical-align: middle;'><textarea name='value'   data-toggle='kindeditor' data-minheight='150' data-items='fontname, fontsize, |, forecolor, hilitecolor, bold, italic, underline, removeformat, |, justifyleft, justifycenter, justifyright, insertorderedlist, insertunorderedlist, |, emoticons, image, link'><?php echo ($Rs["value"]); ?></textarea></div></td></tr></tr>
<tr><td colspan=2><label for='attid_input' class='control-label x85'>上传附件:</label>
			<?php $attlist=M('files')->where('attid='.$Rs['attid'])->select(); ?>	
	         <?php if(is_array($attlist)): foreach($attlist as $key=>$vf): echo (truename($vf['uid'])); ?>:<a href='/<?php echo ($vf['folder']); echo ($vf['filename']); ?>' target=_blank><?php echo ($vf['filedesc']); ?></A>&nbsp;&nbsp;<?php echo ($vf['addtime']); ?><Br/><label  class='control-label x85'></label><?php endforeach; endif; ?></td></tr></tr>
<tr><td colspan=2><label for='hui_input' class='control-label x85'>回复:</label><textarea name='hui'  cols='65' rows='5' ><?php echo ($Rs["hui"]); ?></textarea></td></tr>
           </tbody>
          </table>
        </div>
		<div class="bjui-footBar">
        <ul>
            <li><button type="button" class="btn-close" data-icon="close">关闭</button></li>
        </ul>
    </div>
</div>