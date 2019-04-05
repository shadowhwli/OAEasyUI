<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
    <form action="/index.php/home/huodong/add/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-condensed table-hover" width="100%">
           <tbody><tr>
           <td  colspan=2><label for='title_input' class='control-label x100'>活动名称:</label><input type='text'  name='title' data-rule='required;' size='20'   value='<?php echo ($Rs["jxsz"]); ?>'  ></td>   <td  colspan=2><label for='type_input' class='control-label x85'>活动类型:</label>
                  <select name='hdlx'  data-toggle='selectpicker' >
                    <option value=''>请选择</option>
                    <?php if(is_array(C("HUODONG_TYPE"))): $i = 0; $__LIST__ = C("HUODONG_TYPE");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><option value='<?php echo ($key); ?>' >
                        <?php if( $key == $Rs['hdlx'] ): ?>selected<?php endif; ?>
                        <?php echo ($type); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                  </select></td>
           </tr>
			<tr><td><label for='kssj_input' class='control-label x100'>开始时间:</label><input type='text' data-toggle='datepicker' data-pattern='yyyy-MM-dd HH:mm:ss' id='kssj' name='kssj'  data-rule='required;datetime' size='20'   value='<?php echo ($Rs["kssj"]); ?>'  ></td><td colspan=3><label for='jssj_input' class='control-label x85'>结束时间:</label><input type='text' data-toggle='datepicker' data-pattern='yyyy-MM-dd HH:mm:ss' id='jssj' name='jssj'  data-rule='required;datetime' size='20'   value='<?php echo ($Rs["jssj"]); ?>'  ></td></tr>
<tr></tr>
  <tr>
  <td ><label for='title_input' class='control-label x100'>一等奖奖项设置:</label><input type='text'  name='jpname[]' data-rule='required;' size='20'   value='一等奖'  ></td>
  <td ><label for='title_input' class='control-label x85'>奖品数量:</label><input type='text'  name='jpsl[]' data-rule='required;' size='10'   value='0'  ></td>
  <td ><label for='title_input' class='control-label x85'>中奖概率:</label><input type='text'  name='jpgl[]' data-rule='required;' size='10'   value='0'  ></td
  ></tr>
   <tr>
       <td ><label for='title_input' class='control-label x100'>二等奖奖项设置:</label><input type='text'  name='jpname[]' data-rule='required;' size='20'   value='二等奖'  ></td>
       <td ><label for='title_input' class='control-label x85'>奖品数量:</label><input type='text'  name='jpsl[]' data-rule='required;' size='10'   value='0'  ></td>
       <td ><label for='title_input' class='control-label x85'>中奖概率:</label><input type='text'  name='jpgl[]' data-rule='required;' size='10'   value='0'  ></td>
   </tr>
      <tr>
       <td ><label for='title_input' class='control-label x100'>三等奖奖项设置:</label><input type='text'  name='jpname[]' data-rule='required;' size='20'   value='三等奖'  ></td>
       <td ><label for='title_input' class='control-label x85'>奖品数量:</label><input type='text'  name='jpsl[]' data-rule='required;' size='10'   value='0'  ></td>
       <td ><label for='title_input' class='control-label x85'>中奖概率:</label><input type='text'  name='jpgl[]' data-rule='required;' size='10'   value='0'  ></td>
   </tr>
      <tr>
       <td ><label for='title_input' class='control-label x100'>四等奖奖项设置:</label><input type='text'  name='jpname[]' data-rule='required;' size='20'   value='四等奖'  ></td>
       <td ><label for='title_input' class='control-label x85'>奖品数量:</label><input type='text'  name='jpsl[]' data-rule='required;' size='10'   value='0'  ></td>
       <td ><label for='title_input' class='control-label x85'>中奖概率:</label><input type='text'  name='jpgl[]' data-rule='required;' size='10'   value='0'  ></td>
   </tr>
      <tr>
       <td ><label for='title_input' class='control-label x100'>五等奖奖项设置:</label><input type='text'  name='jpname[]' data-rule='required;' size='20'   value='五等奖'  ></td>
       <td ><label for='title_input' class='control-label x85'>奖品数量:</label><input type='text'  name='jpsl[]' data-rule='required;' size='10'   value='0'  ></td>
       <td ><label for='title_input' class='control-label x85'>中奖概率:</label><input type='text'  name='jpgl[]' data-rule='required;' size='10'   value='0'  ></td>
   </tr>
      <tr>
       <td ><label for='title_input' class='control-label x100'>六等奖奖项设置:</label><input type='text'  name='jpname[]' data-rule='required;' size='20'   value='六等奖'  ></td>
       <td ><label for='title_input' class='control-label x85'>奖品数量:</label><input type='text'  name='jpsl[]' data-rule='required;' size='10'   value='0'  ></td>
       <td ><label for='title_input' class='control-label x85'>中奖概率:</label><input type='text'  name='jpgl[]' data-rule='required;' size='10'   value='0'  ></td>
   </tr>
   <tr>
           <td  colspan=4><label for='title_input' class='control-label x100'>不中奖数:</label><input type='text'  name='bzgl' data-rule='required;' size='50'   value='10000'  ></td>
           </tr>   </tr>        <tr><td  colspan=4><label for='title_input' class='control-label x100'>次数:</label><input type='text'  name='cs' data-rule='required;' size='50'   value='1'  ></td></tr>
          <tr>
           <td  colspan=4><label for='title_input' class='control-label x100'>所属微信:</label><select name='weixinid'  data-toggle='selectpicker' >
                    <option value=''>请选择</option>
                    <?php if(is_array($weixinlist)): $i = 0; $__LIST__ = $weixinlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><option value='<?php echo ($key); ?>' >
                        <?php if( $key == $Rs['weixinid'] ): ?>selected<?php endif; ?>
                        <?php echo ($type); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                  </select></td>
           </tr>
            <tr>
           <td  colspan=4><label for='title_input' class='control-label x100'>活动图片:</label><input type='text'  name='img'  size='50'   value=''  ></td>
           </tr>
<tr><td  colspan=3><label for='beizhu_input' class='control-label x85'>详细说明:</label><div style='display: inline-block; vertical-align: middle;'><textarea name='xxsm'   data-toggle='kindeditor' data-minheight='150' data-items='fontname, fontsize, |, forecolor, hilitecolor, bold, italic, underline, removeformat, |, justifyleft, justifycenter, justifyright, insertorderedlist, insertunorderedlist, |, emoticons, image, link'><?php echo ($Rs["beizhu"]); ?></textarea></div></td></tr>
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