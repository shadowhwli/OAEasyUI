<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
    <form action="/index.php/home/huodong/addstyle/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
<script type="text/javascript">

    var $doc_div = $('<div class="doc-eventbox" style="display:inline-block; margin-left:10px;"><input type="text" class="hdimg3" type="text"  name="image3[]"  size="50"   value="" data-toggle="colorpicker"></div>');

    $doc_div.on('bjui.initUI', function() {

    //    $(this).find('input').css('border-color','red')
		 });

    $('a.doc-event-1').click(function() {

        $doc_div.insertAfter('a.doc-event-1');
        $('a.doc-event-2').removeClass('hide');

        $(this).hide();
        $doc_div.trigger('bjui.initUI');

    });

</script>
       <input type="hidden" id="picid" name="picid" value="0">
           <input type="hidden" id="picid1" name="picid" value="0">
           <input type="hidden" id="picid2" name="picid" value="0">
        <div class="pageFormContent" data-layout-h="0">	<!--<a class="doc-event-1">增加文本框</a>-->
          <table id="tabledit1" class="table table-condensed table-hover" width="48%">
           <tbody>
           <tr class="a"> <td bgcolor="#efefef" ><h5>页头图</h5></td></tr>  
             <tr> <td >  <input type="button" class="btn add-info" value="增加" /></td></tr>    
             <tr class="b"> <td bgcolor="#efefef" ><h5>按钮图</h5></td></tr>  
             <tr> <td >  <input type="button" class="btn add-info1" value="增加" /></td></tr>   
             <tr class="c"> <td bgcolor="#efefef" ><h5>页尾图</h5></td></tr>  
             <tr> <td >  <input type="button" class="btn add-info2" value="增加" /></td></tr>
             <tr class="e"> <td bgcolor="#efefef" ><h5>分享图</h5></td></tr> 
			 <tr  class='e'> <td ><label for='title_input' class='control-label x100'>展示图片:</label>
				<input class='hdimg' type='text'  name='image4'  size='50'   value='<?php echo ($Rs["style"]["fx"]); ?>'  >   
				<input type='button' class='btn btn-info' value='选择图片' />
			 </td></tr>

             <tr class="d"> <td bgcolor="#efefef" ><h5>颜色(第一个助力背景色、第二个按钮背景色、第三个排行榜背景色)</h5></td></tr>  
             <tr> <td >  <input type="button" class="btn add-info3" value="增加" /></td></tr>
             <tr class="f"> <td bgcolor="#efefef" ><h5>标题字段</h4></td></tr>  
             <tr> <td >  <input type="button" class="btn add-info4" value="增加" /></td></tr>
           </tbody>
          </table>                    
		  
		  <!--<button type="button" class="btn-green" onclick="$(this).tabledit('add', $('#tabledit1'), 2)">添加编辑行2</button>-->


        </div>
        <div class="bjui-footBar">
            <ul>
                
                <li><button type="submit" class="btn-default" data-icon="save">保存</button></li><li><button type="button" class="btn-close" data-icon="close">取消</button></li>
            </ul>
        </div>
    </form>
</div><script type="text/javascript">
    // 单独调用KindEditor图片插件	
  

   $('.add-info').click(function() {	$("<tr  class='a'> <td ><div id='abcd'><label for='title_input' class='control-label x100'>展示图片:</label><input class='hdimg' type='text'  name='image[]'  size='50'   value=''  >   <input type='button' class='btn btn-info' value='选择图片' /><input type='button' class='btn del-info' value='删除图片' /></div></td></tr> ").insertAfter($(".table .a:last"));
    $('.a').trigger('bjui.initUI');
   });

     $('.add-info1').click(function() {	$("<tr  class='b'> <td ><label for='title_input' class='control-label x100'>展示图片:</label><input class='hdimg1' type='text'  name='image1[]'  size='50'   value=''  >   <input type='button' class='btn btn-info1' value='选择图片' /><input type='button' class='btn del-info' value='删除图片' /></td></tr> ").insertAfter($(".table .b:last"));
	  $('.b').trigger('bjui.initUI'); 
	 }); 
	 $('.add-info2').click(function() {	$("<tr  class='c'> <td ><label for='title_input' class='control-label x100'>展示图片:</label><input class='hdimg2' type='text'  name='image2[]'  size='50'   value=''  >   <input type='button' class='btn btn-info2' value='选择图片' /><input type='button' class='btn del-info' value='删除图片' /></td></tr> ").insertAfter($(".table .c:last"));
	   $('.c').trigger('bjui.initUI');
	 });	
	  $('.add-info3').click(function() {
		  
		  	$("<tr  class='d'> <td ><label for='title_input' class='control-label x100'>颜色:</label><input class='hdimg3' type='text'  name='image3[]'  size='50'   value='' data-toggle='colorpicker' >   <input type='button' class='btn del-info' value='删除颜色' /></td></tr> ").insertAfter($(".table .d:last"));
	  $('.d').trigger('bjui.initUI');
			
});	  
$('.add-info4').click(function() {
		  	$("<tr  class='d'> <td ><label for='title_input' class='control-label x100'>字段:</label><input class='hdimg5' type='text'  name='image5[]'  size='50'   value='' >   <input type='button' class='btn del-info' value='删除字段' /></td></tr> ").insertAfter($(".table .f:last"));
			  $('.d').trigger('bjui.initUI');
});

    var editor = KindEditor.editor({
        allowFileManager : true
    });
	<?php if(empty($Rs["style"]["top"])): ?>$("<tr  class='a'> <td ><label for='title_input' class='control-label x100'>展示图片:</label><input class='hdimg' type='text'  name='image[]'  size='50'   value=''  >   <input type='button' class='btn btn-info' value='选择图片' /><input type='button' class='btn del-info' value='删除图片' /></td></tr> ").insertAfter($(".table .a:last" ));
 <?php else: if(is_array($Rs["style"]["top"])): $i = 0; $__LIST__ = $Rs["style"]["top"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>$("<tr  class='a'> <td ><label for='title_input' class='control-label x100'>展示图片:</label><input class='hdimg' type='text'  name='image[]'  size='50'   value='<?php echo ($v); ?>'  >   <input type='button' class='btn btn-info' value='选择图片' /><input type='button' class='btn del-info' value='删除图片' /><img src='<?php echo ($v); ?>' width='100'></td></tr> ").insertAfter($(".table .a:last"));<?php endforeach; endif; else: echo "" ;endif; endif; ?>
	<?php if(empty($Rs["style"]["but"])): ?>$("<tr  class='b'> <td ><label for='title_input1' class='control-label x100'>展示图片:</label><input class='hdimg1' type='text'  name='image1[]'  size='50'   value=''  >   <input type='button' class='btn btn-info1' value='选择图片' /><input type='button' class='btn del-info' value='删除图片' /></td></tr> ").insertAfter($(".table .b:last"));
	 <?php else: ?>
	 <?php if(is_array($Rs["style"]["but"])): $i = 0; $__LIST__ = $Rs["style"]["but"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>$("<tr  class='b'> <td ><label for='title_input1' class='control-label x100'>展示图片:</label><input class='hdimg1' type='text'  name='image1[]'  size='50'   value='<?php echo ($v); ?>'  >   <input type='button' class='btn btn-info1' value='选择图片' /><input type='button' class='btn del-info' value='删除图片' /><img src='<?php echo ($v); ?>' width='100'</td></tr> ").insertAfter($(".table .b:last"));<?php endforeach; endif; else: echo "" ;endif; endif; ?>
	<?php if(empty($Rs["style"]["end"])): ?>$("<tr  class='c'> <td ><label for='title_input2' class='control-label x100'>展示图片:</label><input class='hdimg2' type='text'  name='image2[]'  size='50'   value=''  >   <input type='button' class='btn btn-info2' value='选择图片' /><input type='button' class='btn del-info' value='删除图片' /></td></tr> ").insertAfter($(".table .c:last"));
<?php else: ?>  <?php if(is_array($Rs["style"]["end"])): $i = 0; $__LIST__ = $Rs["style"]["end"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>$("<tr  class='c'> <td ><label for='title_input2' class='control-label x100'>展示图片:</label><input class='hdimg2' type='text'  name='image2[]'  size='50'   value='<?php echo ($v); ?>'  >   <input type='button' class='btn btn-info2' value='选择图片' /><input type='button' class='btn del-info' value='删除图片' /><img src='<?php echo ($v); ?>' width='100'</td></tr> ").insertAfter($(".table .c:last"));<?php endforeach; endif; else: echo "" ;endif; endif; ?>
	<?php if(empty($Rs["style"]["color"])): ?>$("<tr  class='d'> <td ><label for='title_input' class='control-label x100'>颜色:</label><input class='hdimg3' type='text'  name='image3[]'  size='50'   value='' data-toggle='colorpicker' >   <input type='button' class='btn del-info' value='删除颜色' /></td></tr> ").insertAfter($(".table .d:last"));
	<?php else: ?> 	<?php if(is_array($Rs["style"]["color"])): $i = 0; $__LIST__ = $Rs["style"]["color"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>$("<tr  class='d'> <td ><label for='title_input' class='control-label x100'>颜色:</label><input class='hdimg3' type='text'  name='image3[]'  size='50'   value='<?php echo ($v); ?>' data-toggle='colorpicker' >   <input type='button' class='btn del-info' value='删除颜色' /></td></tr> ").insertAfter($(".table .d:last"));<?php endforeach; endif; else: echo "" ;endif; endif; ?>
	 	<?php if(empty($Rs["style"]["title"])): ?>$("<tr  class='f'> <td ><label for='title_input' class='control-label x100'>字段:</label><input class='hdimg5' type='text'  name='image5[]'  size='50'   value='' ><input type='button' class='btn del-info' value='删除字段' />  </td></tr> ").insertAfter($(".table .f:last"));
	<?php else: ?> 	<?php if(is_array($Rs["style"]["title"])): $i = 0; $__LIST__ = $Rs["style"]["title"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>$("<tr  class='f'> <td ><label for='title_input' class='control-label x100'>字段:</label><input class='hdimg5' type='text'  name='image5[]'  size='50'   value='<?php echo ($v); ?>'  > <input type='button' class='btn del-info' value='删除字段' /></td></tr> ").insertAfter($(".table .f:last"));<?php endforeach; endif; else: echo "" ;endif; endif; ?>
 $('.del-info').live('click',function() {
	$(this).parent().parent().remove();
	});
  $('.btn-info').one('click',function() {
				$('#picid').val($('.btn-info').index(this)); 
        editor.loadPlugin('image', function() { 	
            editor.plugin.imageDialog({ 
                imageUrl : KindEditor('.hdimg').val(),
				clickFn : function(url, title, width, height, border, align){
                    editor.hideDialog();
					 $('.hdimg:eq('+$('#picid').val()+')').val(url);
                     $('.btn-info').live('click',function() {
				$('#picid').val($('.btn-info').index(this)); 
        editor.loadPlugin('image', function() { 	
            editor.plugin.imageDialog({ 
                imageUrl : KindEditor('.hdimg').val(),
				clickFn : function(url, title, width, height, border, align){
                    editor.hideDialog();
					 $('.hdimg:eq('+$('#picid').val()+')').val(url);
                   
                } 
            });
        });
    });
                }
            });
        });
    });
	
 $('.btn-info1').one('click',function() {
				$('#picid1').val($('.btn-info1').index(this));
        editor.loadPlugin('image', function() { 	
            editor.plugin.imageDialog({ 
                imageUrl : KindEditor('.hdimg1').val(),
				clickFn : function(url, title, width, height, border, align){
                    editor.hideDialog();
					 $('.hdimg1:eq('+$('#picid1').val()+')').val(url);
                     $('.btn-info1').live('click',function() {
				$('#picid1').val($('.btn-info1').index(this)); 
        editor.loadPlugin('image', function() { 	
            editor.plugin.imageDialog({ 
                imageUrl : KindEditor('.hdimg1').val(),
				clickFn : function(url, title, width, height, border, align){
                    editor.hideDialog();
					 $('.hdimg1:eq('+$('#picid1').val()+')').val(url);
                   
                }
            });
        });
    });
                }
            });
        });
    });  
	
	$('.btn-info2').one('click',function() {
				$('#picid2').val($('.btn-info2').index(this)); 
        editor.loadPlugin('image', function() { 	
            editor.plugin.imageDialog({ 
                imageUrl : KindEditor('.hdimg2').val(),
				clickFn : function(url, title, width, height, border, align){
                    editor.hideDialog();
					 $('.hdimg2:eq('+$('#picid2').val()+')').val(url);
                     $('.btn-info2').live('click',function() {
				$('#picid2').val($('.btn-info2').index(this)); 
        editor.loadPlugin('image', function() { 	
            editor.plugin.imageDialog({ 
                imageUrl : KindEditor('.hdimg2').val(),
				clickFn : function(url, title, width, height, border, align){
                    editor.hideDialog();
					 $('.hdimg2:eq('+$('#picid2').val()+')').val(url);
                   
                }
            });
        });
    });
                }
            });
        });
    });
	


</script>