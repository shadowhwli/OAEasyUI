<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-bordered table-striped table-hover">
           <tbody>
		   <tr><td><label for='id_input' class='control-label x85'>ID:</label><?php echo ($Rs["id"]); ?></td><td><label for='kssj_input' class='control-label x85'>开始时间:</label><?php echo ($Rs["kssj"]); ?></td></tr>
<tr><td><label for='jssj_input' class='control-label x85'>结束时间:</label><?php echo ($Rs["jssj"]); ?></td><td><label for='uname_input' class='control-label x85'>外出人:</label><?php echo ($Rs["uname"]); ?></td></tr>
<tr><td><label for='bumen_input' class='control-label x85'>所在部门:</label><?php echo ($Rs["bumen"]); ?></td><td><label for='addtime_input' class='control-label x85'>添加时间:</label><?php echo ($Rs["addtime"]); ?></td></tr>
<tr><td><label for='uuname_input' class='control-label x85'>更新人:</label><?php echo ($Rs["uuname"]); ?></td><td><label for='updatetime_input' class='control-label x85'>更新时间:</label><?php echo ($Rs["updatetime"]); ?></td></tr>
<tr></tr>
<tr><td colspan=2><label for='title_input' class='control-label x85'>去向说明:</label><textarea name='title'  cols='65' rows='5' ><?php echo ($Rs["title"]); ?></textarea></td></tr>
           </tbody>
          </table>
        </div>
		<div class="bjui-footBar">
        <ul>
            <li><button type="button" class="btn-close" data-icon="close">关闭</button></li>
        </ul>
    </div>
</div>