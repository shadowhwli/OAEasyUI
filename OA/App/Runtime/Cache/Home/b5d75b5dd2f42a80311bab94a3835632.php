<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
        <div class="pageFormContent" style="margin:1px;" data-layout-h="0">
		          <ul class="nav nav-tabs" role="tablist">
                   <li class="active"><a href="#hr" role="tab" data-toggle="tab">员工档案</a></li>
					<li><a href='#hrht' role='tab' data-toggle='tab'>人事合同</a></li><li><a href='#hrjf' role='tab' data-toggle='tab'>奖罚管理</a></li><li><a href='#hrzz' role='tab' data-toggle='tab'>证照管理</a></li><li><a href='#hrpx' role='tab' data-toggle='tab'>培训管理</a></li><li><a href='#hrdd' role='tab' data-toggle='tab'>人事调动</a></li><li><a href='#hrgh' role='tab' data-toggle='tab'>员工关怀</a></li>
                  </ul>
		 <div class="tab-content">
           <div class="tab-pane fade active in" id="hr"><table class="table table-bordered table-striped table-hover">
           <tbody>
		   <tr><td><label for='id_input' class='control-label x85'>ID:</label><?php echo ($Rs["id"]); ?></td><td><label for='xingming_input' class='control-label x85'>姓名:</label><?php echo ($Rs["xingming"]); ?></td></tr>
<tr><td><label for='sex_input' class='control-label x85'>性别:</label><?php echo ($Rs["sex"]); ?></td><td><label for='gonghao_input' class='control-label x85'>工号:</label><?php echo ($Rs["gonghao"]); ?></td></tr>
<tr><td><label for='bumen_input' class='control-label x85'>部门:</label><?php echo ($Rs["bumen"]); ?></td><td><label for='zhiwei_input' class='control-label x85'>职位:</label><?php echo ($Rs["zhiwei"]); ?></td></tr>
<tr><td><label for='shenfenzheng_input' class='control-label x85'>身份证号:</label><?php echo ($Rs["shenfenzheng"]); ?></td><td><label for='shengri_input' class='control-label x85'>生日:</label><?php echo ($Rs["shengri"]); ?></td></tr>
<tr><td><label for='jiankang_input' class='control-label x85'>健康状况:</label><?php echo ($Rs["jiankang"]); ?></td><td><label for='hunyin_input' class='control-label x85'>婚姻状况:</label><?php echo ($Rs["hunyin"]); ?></td></tr>
<tr><td><label for='minzu_input' class='control-label x85'>民族:</label><?php echo ($Rs["minzu"]); ?></td><td><label for='jiguan_input' class='control-label x85'>籍贯:</label><?php echo ($Rs["jiguan"]); ?></td></tr>
<tr><td><label for='zhengzhi_input' class='control-label x85'>政治面貌:</label><?php echo ($Rs["zhengzhi"]); ?></td><td><label for='rudang_input' class='control-label x85'>入党时间:</label><?php echo ($Rs["rudang"]); ?></td></tr>
<tr><td><label for='hukou_input' class='control-label x85'>户口类别:</label><?php echo ($Rs["hukou"]); ?></td><td><label for='hukoudi_input' class='control-label x85'>户口所在地:</label><?php echo ($Rs["hukoudi"]); ?></td></tr>
<tr><td><label for='jiadizhi_input' class='control-label x85'>家庭地址:</label><?php echo ($Rs["jiadizhi"]); ?></td><td><label for='jiadianhua_input' class='control-label x85'>家庭电话:</label><?php echo ($Rs["jiadianhua"]); ?></td></tr>
<tr><td><label for='type_input' class='control-label x85'>员工类型:</label><?php echo ($Rs["type"]); ?></td><td><label for='ruzhi_input' class='control-label x85'>入职时间:</label><?php echo ($Rs["ruzhi"]); ?></td></tr>
<tr><td><label for='zaizhi_input' class='control-label x85'>在职状态:</label><?php echo ($Rs["zaizhi"]); ?></td><td><label for='lizhi_input' class='control-label x85'>离职时间:</label><?php echo ($Rs["lizhi"]); ?></td></tr>
<tr><td><label for='xuexiao_input' class='control-label x85'>毕业学校:</label><?php echo ($Rs["xuexiao"]); ?></td><td><label for='biye_input' class='control-label x85'>毕业时间:</label><?php echo ($Rs["biye"]); ?></td></tr>
<tr><td><label for='zhuanye_input' class='control-label x85'>专业:</label><?php echo ($Rs["zhuanye"]); ?></td><td><label for='xueli_input' class='control-label x85'>学历:</label><?php echo ($Rs["xueli"]); ?></td></tr>
<tr><td><label for='xuewei_input' class='control-label x85'>学位:</label><?php echo ($Rs["xuewei"]); ?></td><td><label for='uname_input' class='control-label x85'>添加人:</label><?php echo ($Rs["uname"]); ?></td></tr>
<tr><td><label for='addtime_input' class='control-label x85'>新增时间:</label><?php echo ($Rs["addtime"]); ?></td><td><label for='uuname_input' class='control-label x85'>更新人:</label><?php echo ($Rs["uuname"]); ?></td></tr>
<tr><td><label for='updatetime_input' class='control-label x85'>更新时间:</label><?php echo ($Rs["updatetime"]); ?></td><td><label for='birthday_input' class='control-label x85'>生日月份:</label><?php echo ($Rs["birthday"]); ?></td></tr>
<tr></tr>
<tr><td colspan=2><label for='shehui_input' class='control-label x85'>社会关系:</label><textarea name='shehui'  cols='65' rows='5' ><?php echo ($Rs["shehui"]); ?></textarea></td></tr></tr>
<tr><td colspan=2><label for='xuexi_input' class='control-label x85'>学习经历:</label><textarea name='xuexi'  cols='65' rows='5' ><?php echo ($Rs["xuexi"]); ?></textarea></td></tr></tr>
<tr><td colspan=2><label for='gongzuo_input' class='control-label x85'>工作经历:</label><textarea name='gongzuo'  cols='65' rows='5' ><?php echo ($Rs["gongzuo"]); ?></textarea></td></tr></tr>
<tr><td colspan=2><label for='jineng_input' class='control-label x85'>工作技能:</label><textarea name='jineng'  cols='65' rows='5' ><?php echo ($Rs["jineng"]); ?></textarea></td></tr></tr>
<tr><td colspan=2><label for='beizhu_input' class='control-label x85'>备注:</label><div style='display: inline-block; vertical-align: middle;'><textarea name='beizhu'   data-toggle='kindeditor' data-minheight='150' data-items='fontname, fontsize, |, forecolor, hilitecolor, bold, italic, underline, removeformat, |, justifyleft, justifycenter, justifyright, insertorderedlist, insertunorderedlist, |, emoticons, image, link'><?php echo ($Rs["beizhu"]); ?></textarea></div></td></tr></tr>
<tr><td colspan=2><label for='attid_input' class='control-label x85'>上传附件:</label>
			<?php $attlist=M('files')->where('attid='.$Rs['attid'])->select(); ?>	
	        <?php if(is_array($attlist)): foreach($attlist as $key=>$vf): echo (truename($vf['uid'])); ?>:<a href='/<?php echo ($vf['folder']); echo ($vf['filename']); ?>' target=_blank><?php echo ($vf['filedesc']); ?></A>&nbsp;&nbsp;<?php echo ($vf['addtime']); ?><Br/><label  class='control-label x85'></label><?php endforeach; endif; ?></td></tr>
           </tbody>
          </table>
		  </div>
		  
		 <div class='tab-pane fade' id='hrht'><table class='table table-bordered table-striped table-hover'><?php $hrhtlist=M('hrht')->where(array('juid'=>I('id')))->select(); ?> <thead> <tr><th>ID</th>
<th>员工姓名</th>
<th height=30>合同名称</th>
<th>合同编号</th>
<th>合同类型</th>
<th>生效日期</th>
<th>结束日期</th>
<th>添加时间</th>
<th>更新时间</th>
<th>详细</th></tr></thead><tbody><?php if(is_array($hrhtlist)): foreach($hrhtlist as $key=>$hrhtv): ?><tr><td><?php echo ($hrhtv["id"]); ?></td>
<td><?php echo ($hrhtv["juname"]); ?></td>
<td><?php echo (msubstr($hrhtv["title"],0,20)); ?></td>
<td><?php echo ($hrhtv["bianhao"]); ?></td>
<td><?php echo ($hrhtv["type"]); ?></td>
<td><?php echo (substr($hrhtv["kssj"],0,10)); ?></td>
<td><?php echo (substr($hrhtv["jsrj"],0,10)); ?></td>
<td><?php echo (substr($hrhtv["addtime"],0,10)); ?></td>
<td><?php echo (substr($hrhtv["updatetime"],0,10)); ?></td>
  <td><a href='/index.php/home/hrht/view/id/<?php echo ($hrhtv['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>'  data-toggle='dialog' data-width='800' data-height='500' data-id='dialog-maskhrht' data-mask='true' >详细</a></td></tr><?php endforeach; endif; ?> </tbody> </table></div><div class='tab-pane fade' id='hrjf'><table class='table table-bordered table-striped table-hover'><?php $hrjflist=M('hrjf')->where(array('juid'=>I('id')))->select(); ?> <thead> <tr><th>ID</th>
<th height=30>员工姓名</th>
<th>奖罚属性</th>
<th height=30>奖罚名称</th>
<th>生效日期</th>
<th height=30>奖罚金额</th>
<th>生效工资月份</th>
<th>添加时间</th>
<th>更新时间</th>
<th>详细</th></tr></thead><tbody><?php if(is_array($hrjflist)): foreach($hrjflist as $key=>$hrjfv): ?><tr><td><?php echo ($hrjfv["id"]); ?></td>
<td><?php echo (msubstr($hrjfv["juname"],0,20)); ?></td>
<td><?php echo ($hrjfv["type"]); ?></td>
<td><?php echo (msubstr($hrjfv["title"],0,20)); ?></td>
<td><?php echo (substr($hrjfv["sxrq"],0,10)); ?></td>
<td><?php echo (msubstr($hrjfv["jine"],0,20)); ?></td>
<td><?php echo (substr($hrjfv["gongzi"],0,10)); ?></td>
<td><?php echo (substr($hrjfv["addtime"],0,10)); ?></td>
<td><?php echo (substr($hrjfv["updatetime"],0,10)); ?></td>
  <td><a href='/index.php/home/hrjf/view/id/<?php echo ($hrjfv['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>'  data-toggle='dialog' data-width='800' data-height='500' data-id='dialog-maskhrjf' data-mask='true' >详细</a></td></tr><?php endforeach; endif; ?> </tbody> </table></div><div class='tab-pane fade' id='hrzz'><table class='table table-bordered table-striped table-hover'><?php $hrzzlist=M('hrzz')->where(array('juid'=>I('id')))->select(); ?> <thead> <tr><th>ID</th>
<th>员工姓名</th>
<th height=30>证照名称</th>
<th height=30>证照编号</th>
<th>证照类型</th>
<th>生效日期</th>
<th>结束日期</th>
<th>添加时间</th>
<th>更新时间</th>
<th>详细</th></tr></thead><tbody><?php if(is_array($hrzzlist)): foreach($hrzzlist as $key=>$hrzzv): ?><tr><td><?php echo ($hrzzv["id"]); ?></td>
<td><?php echo ($hrzzv["juname"]); ?></td>
<td><?php echo (msubstr($hrzzv["title"],0,20)); ?></td>
<td><?php echo (msubstr($hrzzv["bianhao"],0,20)); ?></td>
<td><?php echo ($hrzzv["type"]); ?></td>
<td><?php echo (substr($hrzzv["sxrq"],0,10)); ?></td>
<td><?php echo (substr($hrzzv["jsrq"],0,10)); ?></td>
<td><?php echo (substr($hrzzv["addtime"],0,10)); ?></td>
<td><?php echo (substr($hrzzv["updatetime"],0,10)); ?></td>
  <td><a href='/index.php/home/hrzz/view/id/<?php echo ($hrzzv['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>'  data-toggle='dialog' data-width='800' data-height='500' data-id='dialog-maskhrzz' data-mask='true' >详细</a></td></tr><?php endforeach; endif; ?> </tbody> </table></div><div class='tab-pane fade' id='hrpx'><table class='table table-bordered table-striped table-hover'><?php $hrpxlist=M('hrpx')->where(array('juid'=>I('id')))->select(); ?> <thead> <tr><th>ID</th>
<th height=30>员工姓名</th>
<th height=30>培训主题</th>
<th height=30>培训费用</th>
<th>开始时间</th>
<th>结束时间</th>
<th height=30>获得证书</th>
<th height=30>培训地点</th>
<th>添加时间</th>
<th>更新时间</th>
<th>详细</th></tr></thead><tbody><?php if(is_array($hrpxlist)): foreach($hrpxlist as $key=>$hrpxv): ?><tr><td><?php echo ($hrpxv["id"]); ?></td>
<td><?php echo (msubstr($hrpxv["juname"],0,20)); ?></td>
<td><?php echo (msubstr($hrpxv["title"],0,20)); ?></td>
<td><?php echo (msubstr($hrpxv["feiyong"],0,20)); ?></td>
<td><?php echo (substr($hrpxv["kssj"],0,10)); ?></td>
<td><?php echo (substr($hrpxv["jssj"],0,10)); ?></td>
<td><?php echo (msubstr($hrpxv["zhengshu"],0,20)); ?></td>
<td><?php echo (msubstr($hrpxv["didian"],0,20)); ?></td>
<td><?php echo (substr($hrpxv["addtime"],0,10)); ?></td>
<td><?php echo (substr($hrpxv["updatetime"],0,10)); ?></td>
  <td><a href='/index.php/home/hrpx/view/id/<?php echo ($hrpxv['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>'  data-toggle='dialog' data-width='800' data-height='500' data-id='dialog-maskhrpx' data-mask='true' >详细</a></td></tr><?php endforeach; endif; ?> </tbody> </table></div><div class='tab-pane fade' id='hrdd'><table class='table table-bordered table-striped table-hover'><?php $hrddlist=M('hrdd')->where(array('juid'=>I('id')))->select(); ?> <thead> <tr><th>ID</th>
<th>员工姓名</th>
<th height=30>调动原因</th>
<th>调动类型</th>
<th>调动日期</th>
<th height=30>调动前部门</th>
<th height=30>调用后部门</th>
<th height=30>调动前职位</th>
<th height=30>调动后职位</th>
<th>添加时间</th>
<th>更新时间</th>
<th>详细</th></tr></thead><tbody><?php if(is_array($hrddlist)): foreach($hrddlist as $key=>$hrddv): ?><tr><td><?php echo ($hrddv["id"]); ?></td>
<td><?php echo ($hrddv["juname"]); ?></td>
<td><?php echo (msubstr($hrddv["title"],0,20)); ?></td>
<td><?php echo ($hrddv["type"]); ?></td>
<td><?php echo (substr($hrddv["ddrq"],0,10)); ?></td>
<td><?php echo (msubstr($hrddv["bumen"],0,20)); ?></td>
<td><?php echo (msubstr($hrddv["hbumen"],0,20)); ?></td>
<td><?php echo (msubstr($hrddv["zhiwei"],0,20)); ?></td>
<td><?php echo (msubstr($hrddv["hzhiwei"],0,20)); ?></td>
<td><?php echo (substr($hrddv["addtime"],0,10)); ?></td>
<td><?php echo (substr($hrddv["updatetime"],0,10)); ?></td>
  <td><a href='/index.php/home/hrdd/view/id/<?php echo ($hrddv['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>'  data-toggle='dialog' data-width='800' data-height='500' data-id='dialog-maskhrdd' data-mask='true' >详细</a></td></tr><?php endforeach; endif; ?> </tbody> </table></div><div class='tab-pane fade' id='hrgh'><table class='table table-bordered table-striped table-hover'><?php $hrghlist=M('hrgh')->where(array('juid'=>I('id')))->select(); ?> <thead> <tr><th>ID</th>
<th>员工姓名</th>
<th height=30>关怀主题</th>
<th>关怀类型</th>
<th>关怀时间</th>
<th height=30>关怀费用</th>
<th>添加时间</th>
<th>更新时间</th>
<th>详细</th></tr></thead><tbody><?php if(is_array($hrghlist)): foreach($hrghlist as $key=>$hrghv): ?><tr><td><?php echo ($hrghv["id"]); ?></td>
<td><?php echo ($hrghv["juname"]); ?></td>
<td><?php echo (msubstr($hrghv["title"],0,20)); ?></td>
<td><?php echo ($hrghv["type"]); ?></td>
<td><?php echo (substr($hrghv["sj"],0,10)); ?></td>
<td><?php echo (msubstr($hrghv["feiyong"],0,20)); ?></td>
<td><?php echo (substr($hrghv["addtime"],0,10)); ?></td>
<td><?php echo (substr($hrghv["updatetime"],0,10)); ?></td>
  <td><a href='/index.php/home/hrgh/view/id/<?php echo ($hrghv['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>'  data-toggle='dialog' data-width='800' data-height='500' data-id='dialog-maskhrgh' data-mask='true' >详细</a></td></tr><?php endforeach; endif; ?> </tbody> </table></div>
		   
		 </div>
        </div>
		<div class="bjui-footBar">
        <ul>
            <li><button type="button" class="btn-close" data-icon="close">关闭</button></li>
        </ul>
    </div>
</div>