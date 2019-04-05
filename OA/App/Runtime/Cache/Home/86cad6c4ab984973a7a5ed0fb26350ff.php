<?php if (!defined('THINK_PATH')) exit();?>

<div class="bjui-pageContent">
    <form action="/index.php/home/public/changeinfo/navTabId/changeinfo" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-condensed table-hover" width="100%">
           <tbody>
            <tr><td>
                <label for="j_title" class="control-label x85">真实姓名：</label>
                <input type="text" data-rule="required" size="25" name="truename" id="j_truename" value="<?php echo ($Rs['truename']); ?>" disabled >
             </td></tr>
            <tr><td>
            <label for="j_title" class="control-label x85">性别：</label>
              <select name="sex"  data-toggle="selectpicker" data-rule="required">
			    <?php if($Rs['sex'] == 男 ): ?><option value="男" selected>男</option><?php else: ?><option value="女" selected>女</option><?php endif; ?>
                <option value="男">男</option>
                <option value="女">女</option>
                 </select>
             </td></tr>
            <tr><td>
                <label for="j_title" class="control-label x85">固定电话：</label>
                <input type="text" data-rule="required" size="25" name="tel" id="j_tel" value="<?php echo ($Rs['tel']); ?>" >
             </td></tr>
            <tr><td>
                <label for="j_title" class="control-label x85">移动电话：</label>
                <input type="text" data-rule="required" size="25" name="phone" id="j_phone" value="<?php echo ($Rs['phone']); ?>" >
            </td></tr>
            <tr><td>
                <label for="j_title" class="control-label x85">电子邮箱：</label>
                <input type="text" data-rule="required" size="25" name="email" id="j_email" value="<?php echo ($Rs['email']); ?>" >
             </td></tr>
            <tr><td>
                <label for="j_title" class="control-label x85">qq：</label>
                <input type="text" data-rule="required" size="25" name="qq" id="j_qq" value="<?php echo ($Rs['qq']); ?>" >
            </td></tr>
			<tr><td>
                <label for="j_title" class="control-label x85">内线/短号：</label>
                <input type="text"  size="25" name="neixian"  value="<?php echo ($Rs['neixian']); ?>" >
            </td></tr>
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