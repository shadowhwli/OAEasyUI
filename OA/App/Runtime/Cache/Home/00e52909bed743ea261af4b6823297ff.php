<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo (C("WEB_SITE_TITLE")); ?> Power by 武汉埃德森信息技术有限公司</title>
<meta name="Keywords" content="武汉埃德森信息技术有限公司"/>
<meta name="Description" content="武汉埃德森信息技术有限公司"/> 
<!-- bootstrap - css -->
<link href="/Public/BJUI/themes/css/bootstrap.min.css" rel="stylesheet">
<!-- core - css -->
<link href="/Public/BJUI/themes/css/style.css" rel="stylesheet">
<link href="/Public/BJUI/themes/purple/core.css" id="bjui-link-theme" rel="stylesheet">
<!-- plug - css -->
<link href="/Public/BJUI/plugins/kindeditor_4.1.10/themes/default/default.css" rel="stylesheet">
<link href="/Public/BJUI/plugins/colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<link href="/Public/BJUI/plugins/niceValidator/jquery.validator.css" rel="stylesheet">
<link href="/Public/BJUI/plugins/bootstrapSelect/bootstrap-select.css" rel="stylesheet">
<link href="/Public/BJUI/themes/css/FA/css/font-awesome.min.css" rel="stylesheet">
<!--[if lte IE 7]>
<link href="/Public/BJUI/themes/css/ie7.css" rel="stylesheet">
<![endif]-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lte IE 9]>
    <script src="/Public/BJUI/other/html5shiv.min.js"></script>
    <script src="/Public/BJUI/other/respond.min.js"></script>
<![endif]-->
<!-- jquery -->
<script src="/Public/BJUI/js/jquery-1.7.2.min.js"></script>
<script src="/Public/BJUI/js/jquery.cookie.js"></script>
<!--[if lte IE 9]>
<script src="/Public/BJUI/other/jquery.iframe-transport.js"></script>    
<![endif]-->
<!-- BJUI.all 分模块压缩版 -->
<script src="/Public/BJUI/js/bjui-all.js"></script>
<!-- 以下是B-JUI的分模块未压缩版，建议开发调试阶段使用下面的版本 -->
<!--
<script src="/Public/BJUI/js/bjui-core.js"></script>
<script src="/Public/BJUI/js/bjui-regional.zh-CN.js"></script>
<script src="/Public/BJUI/js/bjui-frag.js"></script>
<script src="/Public/BJUI/js/bjui-extends.js"></script>
<script src="/Public/BJUI/js/bjui-basedrag.js"></script>
<script src="/Public/BJUI/js/bjui-slidebar.js"></script>
<script src="/Public/BJUI/js/bjui-contextmenu.js"></script>
<script src="/Public/BJUI/js/bjui-navtab.js"></script>
<script src="/Public/BJUI/js/bjui-dialog.js"></script>
<script src="/Public/BJUI/js/bjui-taskbar.js"></script>
<script src="/Public/BJUI/js/bjui-ajax.js"></script>
<script src="/Public/BJUI/js/bjui-alertmsg.js"></script>
<script src="/Public/BJUI/js/bjui-pagination.js"></script>
<script src="/Public/BJUI/js/bjui-util.date.js"></script>
<script src="/Public/BJUI/js/bjui-datepicker.js"></script>
<script src="/Public/BJUI/js/bjui-ajaxtab.js"></script>
<script src="/Public/BJUI/js/bjui-tablefixed.js"></script>
<script src="/Public/BJUI/js/bjui-tabledit.js"></script>
<script src="/Public/BJUI/js/bjui-spinner.js"></script>
<script src="/Public/BJUI/js/bjui-lookup.js"></script>
<script src="/Public/BJUI/js/bjui-tags.js"></script>
<script src="/Public/BJUI/js/bjui-upload.js"></script>
<script src="/Public/BJUI/js/bjui-theme.js"></script>
<script src="/Public/BJUI/js/bjui-initui.js"></script>
<script src="/Public/BJUI/js/bjui-plugins.js"></script>
-->
<!-- plugins -->
<!-- swfupload for uploadify && kindeditor -->
<script src="/Public/BJUI/plugins/swfupload/swfupload.js"></script>
<!-- kindeditor -->
<script src="/Public/BJUI/plugins/kindeditor_4.1.10/kindeditor-all.min.js"></script>
<script src="/Public/BJUI/plugins/kindeditor_4.1.10/lang/zh_CN.js"></script>
<!-- colorpicker -->
<script src="/Public/BJUI/plugins/colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- ztree -->
<script src="/Public/BJUI/plugins/ztree/jquery.ztree.all-3.5.js"></script>
<!-- nice validate -->
<script src="/Public/BJUI/plugins/niceValidator/jquery.validator.js"></script>
<script src="/Public/BJUI/plugins/niceValidator/jquery.validator.themes.js"></script>
<!-- bootstrap plugins -->
<script src="/Public/BJUI/plugins/bootstrap.min.js"></script>
<script src="/Public/BJUI/plugins/bootstrapSelect/bootstrap-select.min.js"></script>
<!-- icheck -->
<script src="/Public/BJUI/plugins/icheck/icheck.min.js"></script>
<!-- dragsort -->
<script src="/Public/BJUI/plugins/dragsort/jquery.dragsort-0.5.1.min.js"></script>
<!-- HighCharts -->
<script src="/Public/BJUI/plugins/highcharts/highcharts.js"></script>
<script src="/Public/BJUI/plugins/highcharts/highcharts-3d.js"></script>
<script src="/Public/BJUI/plugins/highcharts/themes/gray.js"></script>
<!-- ECharts -->
<script src="/Public/BJUI/plugins/echarts/echarts.js"></script>
<!-- other plugins -->
<script src="/Public/BJUI/plugins/other/jquery.autosize.js"></script>
<link href="/Public/BJUI/plugins/uploadify/css/uploadify.css" rel="stylesheet">
<script src="/Public/BJUI/plugins/uploadify/scripts/jquery.uploadify.min.js"></script>
<!-- init -->
<script type="text/javascript">
$(function() {
    BJUI.init({
        JSPATH       : '/Public/BJUI/',         //[可选]框架路径
        PLUGINPATH   : '/Public/BJUI/plugins/', //[可选]插件路径
        loginInfo    : {url:'login_timeout.html', title:'登录', width:400, height:200}, // 会话超时后弹出登录对话框
        statusCode   : {ok:200, error:300, timeout:301}, //[可选]
        ajaxTimeout  : 5000, //[可选]全局Ajax请求超时时间(毫秒)
        alertTimeout : 3000, //[可选]信息提示[info/correct]自动关闭延时(毫秒)
        pageInfo     : {pageCurrent:'pageCurrent', pageSize:'pageSize', orderField:'orderField', orderDirection:'orderDirection'}, //[可选]分页参数
        keys         : {statusCode:'statusCode', message:'message'}, //[可选]
        ui           : {showSlidebar:true, hideMode:'display', clientPaging:true}, //[可选]clientPaging:在客户端响应分页及排序参数
        debug        : true,    // [可选]调试模式 [true|false，默认false]
        theme        : 'purple' // 若有Cookie['bjui_theme'],优先选择Cookie['bjui_theme']。皮肤[五种皮肤:default, orange, purple, blue, red, green]
    })
    //时钟
    var today = new Date(), time = today.getTime()
    $('#bjui-date').html(today.formatDate('yyyy/MM/dd'))
    setInterval(function() {
        today = new Date(today.setSeconds(today.getSeconds() + 1))
        $('#bjui-clock').html(today.formatDate('HH:mm:ss'))
    }, 1000)
})

//console.log('IE:'+ (!$.support.leadingWhitespace))
//菜单-事件
function MainMenuClick(event, treeId, treeNode) {
    if (treeNode.isParent) {
        var zTree = $.fn.zTree.getZTreeObj(treeId)
        
        zTree.expandNode(treeNode)
        return
    }
    
    if (treeNode.target && treeNode.target == 'dialog')
        $(event.target).dialog({id:treeNode.tabid, url:treeNode.url, title:treeNode.name})
    else
        $(event.target).navtab({id:treeNode.tabid, url:treeNode.url, title:treeNode.name, fresh:treeNode.fresh, external:treeNode.external})
    event.preventDefault()
}
</script>

</head>
<body>
    <!--[if lte IE 7]>
        <div id="errorie"><div>您还在使用老掉牙的IE，正常使用系统前请升级您的浏览器到 IE8以上版本 <a target="_blank" href="http://windows.microsoft.com/zh-cn/internet-explorer/ie-8-worldwide-languages">点击升级</a>&nbsp;&nbsp;强烈建议您更改换浏览器：<a href="http://down.tech.sina.com.cn/content/40975.html" target="_blank">谷歌 Chrome</a></div></div>
    <![endif]-->
    <header class="navbar navbar-default" id="bjui-header">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bjui-navbar-collapse">
                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo (C("WEB_SITE_TITLE")); ?><span style="font-size:14px"><?php echo (C("WEB_VER")); ?></span><!--<img src="/Public/images/logo.png">--></a>
        </div>
        <nav class="collapse navbar-collapse" id="bjui-navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="datetime"><div><span id="bjui-date"></span><br><i class="fa fa-clock-o"></i> <span id="bjui-clock"></span></div></li>
                <li><a href="<?php echo U('public/online');?>" data-toggle="dialog" data-id="online" data-mask="true" data-width="600" data-height="300">在线 <span class="badge"><?php $where['update_time']=array('gt',time()-600);echo M('user')->where($where)->count(); ?></span></a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">我的账户 <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo U('public/changepwd');?>" data-toggle="dialog" data-id="changepwd_page" data-mask="true" data-width="400" data-height="260">&nbsp;<span class="glyphicon glyphicon-lock"></span> 修改密码&nbsp;</a></li>
                        <li><a href="<?php echo U('public/changeinfo');?>" data-toggle="dialog" data-id="changepwd_page" data-mask="true" data-width="600" data-height="350">&nbsp;<span class="glyphicon glyphicon-user"></span> 我的资料</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo U('public/logout');?>" class="red">&nbsp;<span class="glyphicon glyphicon-off"></span> 注销登陆</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle theme purple" data-toggle="dropdown"><i class="fa fa-tree"></i></a>
                    <ul class="dropdown-menu" role="menu" id="bjui-themes">
                        <li><a href="javascript:;" class="theme_default" data-toggle="theme" data-theme="default">&nbsp;<i class="fa fa-tree"></i> 黑白分明&nbsp;&nbsp;</a></li>
                        <li><a href="javascript:;" class="theme_orange" data-toggle="theme" data-theme="orange">&nbsp;<i class="fa fa-tree"></i> 橘子红了</a></li>
                        <li class="active"><a href="javascript:;" class="theme_purple" data-toggle="theme" data-theme="purple">&nbsp;<i class="fa fa-tree"></i> 紫罗兰</a></li>
                        <li><a href="javascript:;" class="theme_blue" data-toggle="theme" data-theme="blue">&nbsp;<i class="fa fa-tree"></i> 青出于蓝</a></li>
                        <li><a href="javascript:;" class="theme_red" data-toggle="theme" data-theme="red">&nbsp;<i class="fa fa-tree"></i> 红红火火</a></li>
                        <li><a href="javascript:;" class="theme_green" data-toggle="theme" data-theme="green">&nbsp;<i class="fa fa-tree"></i> 绿草如茵</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <div class="bjui-leftside" id="bjui-leftside">
        <div id="bjui-sidebar-s">
            <div class="collapse">
                <div class="toggleCollapse"><div title="展开菜单"><i class="fa fa-angle-double-right"></i></div></div>
            </div>
        </div>
        <div id="bjui-sidebar">
            <div class="toggleCollapse"><h2>主菜单</h2><div title="收缩菜单"><i class="fa fa-angle-double-left"></i></div></div>
            <div class="panel-group panel-main" data-toggle="accordion" id="bjui-accordionmenu" data-heightbox="#bjui-sidebar" data-offsety="26">
			   
			    <?php $cate=M('menu')->where('level=0')->order('sort')->select(); ?>
                <?php if(is_array($cate)): foreach($cate as $key=>$c): if(authcheck('Home/'.$c[alink],session('uid'))): if($c["sort"] == 0 ): ?><div class="panel panel-default">
                    <div class="panel-heading panelContent">
                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#bjui-accordionmenu" href="#bjui-collapse<?php echo ($c["sort"]); ?>" class="active"><i class="fa fa-caret-square-o-down"></i>&nbsp;<?php echo ($c["catename"]); ?></a></h4>
                    </div>
                    <div id="bjui-collapse<?php echo ($c["sort"]); ?>" class="panel-collapse panelContent collapse in">
                        <div class="panel-body" >
                            <ul id="bjui-tree<?php echo ($c["id"]); ?>" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true">
				 <?php else: ?>
				 <div class="panel panel-default">
                    <div class="panel-heading panelContent">
                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#bjui-accordionmenu" href="#bjui-collapse<?php echo ($c["sort"]); ?>" class="" ><i class="fa fa-caret-square-o-right"></i>&nbsp;<?php echo ($c["catename"]); ?></a></h4>
                    </div>
                    <div id="bjui-collapse<?php echo ($c["sort"]); ?>" class="panel-collapse panelContent collapse">
                        <div class="panel-body">
                            <ul id="bjui-tree<?php echo ($c["id"]); ?>" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="false"><?php endif; ?>
							<?php $cate1=M('menu')->where('level=1 and pid='.$c['id'])->order('sort')->select(); ?>
							  <?php if(is_array($cate1)): foreach($cate1 as $key=>$v): if(authcheck('Home/'.$v[alink],session('uid'))): $count1=M('menu')->where('level=2 and pid='.$v['id'])->count(id); ?>
								    <?php if($count1 == 0 ): ?><li data-id="<?php echo ($v["id"]); ?>" data-pid="<?php echo ($c["id"]); ?>" data-url="index.php?s=/home/<?php echo ($v["alink"]); ?>" data-tabid="<?php echo ($v["alink"]); ?>"><?php echo ($v["catename"]); ?></li>
								     <?php else: ?>
								     <li data-id="<?php echo ($v["id"]); ?>" data-pid="<?php echo ($c["id"]); ?>" ><?php echo ($v["catename"]); ?></li><?php endif; ?>
								  <?php $cate2=M('menu')->where('level=2 and pid='.$v['id'])->order('sort')->select(); ?>
							      <?php if(is_array($cate2)): foreach($cate2 as $key=>$vv): if(authcheck('Home/'.$vv[alink],session('uid'))): ?><li data-id="<?php echo ($vv["id"]); ?>" data-pid="<?php echo ($v["id"]); ?>" data-url="index.php?s=/home/<?php echo ($vv["alink"]); ?>" data-tabid="<?php echo ($vv["alink"]); ?>"><?php echo ($vv["catename"]); ?></li><?php endif; endforeach; endif; endif; endforeach; endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="panelFooter"><div class="panelFooterContent"></div></div>
                </div><?php endif; endforeach; endif; ?>
                
				
				
            </div>
        </div>
    </div>
    <div id="bjui-container">
        <div id="bjui-navtab" class="tabsPage">
            <div class="tabsPageHeader">
                <div class="tabsPageHeaderContent">
                    <ul class="navtab-tab nav nav-tabs">
                        <li data-tabid="main" class="main active"><a href="javascript:;"><span><i class="fa fa-home"></i> #maintab#</span></a></li>
                    </ul>
                </div>
                <div class="tabsLeft"><i class="fa fa-angle-double-left"></i></div>
                <div class="tabsRight"><i class="fa fa-angle-double-right"></i></div>
                <div class="tabsMore"><i class="fa fa-angle-double-down"></i></div>
            </div>
            <ul class="tabsMoreList">
                <li><a href="javascript:;">#maintab#</a></li>
            </ul>
            <div class="navtab-panel tabsPageContent layoutBox">
                <div class="page unitBox">
				    <div class="bjui-pageHeader" style="background:#FFF;">
                        <div style="padding: 0 5px; border-bottom: 1px #DDD solid;">
						<form action="/index.php/home/index/index/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		                    <input type="hidden" name="id" value="<?php echo (session('uid')); ?>">
                            <h4>我的便签、记事本 <span><button type="submit" class="btn-default">保存</button></span> </h4>
                            <hr style="margin: 12px 0 0px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea style="width:100%;height:120px;border:0px;line-height:150%" name="bian"><?php echo ($Rs["bian"]); ?></textarea>  								
                                </div>
                            </div>
						</form>
                        </div>
                    </div>
                    <div class="bjui-pageFormContent" data-layout-h="150">
					<!--//-->
                      <div class="col-md-6">
                        <div class="panel panel-default">
                          <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-user-md"></i> 员工去向 <a href="<?php echo U('mygos/index');?>" data-toggle="navtab" data-id="<?php echo U('mygos/index');?>" data-title="员工去向">详细</a></h3></div>
                            <div style="min-height:185px">
							<table class="table table-bordered table-striped table-hover">
                             <thead>
                              <tr>
                              <th height=30>开始时间</th>
                              <th>结束时间</th>
                              <th>去向说明</th>
                              <th>外出人</th>
                              <th>所在部门</th>
                              </tr>
                            </thead>
                            <tbody>
							<?php $list=M('mygo')->order("id desc")->limit(5)->select(); ?>
						    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                              <td><?php echo (substr($v["kssj"],0,10)); ?></td>
                              <td><?php echo (substr($v["jssj"],0,10)); ?></td>
                              <td><?php echo (msubstr($v["title"],0,20)); ?></td>
                              <td><?php echo (msubstr($v["uname"],0,20)); ?></td>
                              <td><?php echo (msubstr($v["bumen"],0,20)); ?></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                           </tbody>
                          </table>
						  </div>
                        </div>
                      </div>
                      <!--//-->
                      <!--//-->
                      <div class="col-md-6">
                        <div class="panel panel-default">
                          <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-pencil-square-o"></i> 我的任务 <a href="<?php echo U('mytask/index');?>" data-toggle="navtab" data-id="<?php echo U('mytask/index');?>" data-title="我的任务">详细</a></h3></div>
                            <div style="min-height:185px">
							<table class="table table-bordered table-striped table-hover">
                             <thead>
                              <tr>
                              <th height=30>开始时间</th>
                              <th>结束时间</th>
                              <th>任务标题</th>
                              <th>状态</th>
                              <th>发布人</th>
                              <th>发布时间</th>
                              </tr>
                            </thead>
                            <tbody>
							<?php $list=M('task')->where(array('juid'=>array('like','%'.session(uid).'%')))->order("id desc")->limit(5)->select(); ?>
						    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                              <td><?php echo (substr($v["kssj"],0,10)); ?></td>
                              <td><?php echo (substr($v["jssj"],0,10)); ?></td>
                              <td><?php echo (msubstr($v["title"],0,20)); ?></td>
                              <td><?php echo ($v["zhuangtai"]); ?></td>
                              <td><?php echo ($v["uname"]); ?></td>
                              <td><?php echo (substr($v["addtime"],0,10)); ?></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                           </tbody>
                          </table>
						  </div>
                        </div>
                      </div>
                      <!--//-->  
					  <!--//-->
                      <div class="col-md-6">
                        <div class="panel panel-default">
                          <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-volume-up"></i>  通知公告 <a href="<?php echo U('myinfo/index');?>" data-toggle="navtab" data-id="<?php echo U('mymail/index');?>" data-title="通知公告">详细</a></h3></div>
                            <div style="min-height:185px">
							<table class="table table-bordered table-striped table-hover">
                             <thead>
                              <tr>
                              <th height=30>通知标题</th>
                              <th>截止日期</th>
                              <th>发布人</th>
                              <th>发布时间</th>
                              </tr>
                            </thead>
                            <tbody>
							<?php $list=M('info')->where(array('juid'=>array('like','%'.session(uid).'%')))->order("id desc")->limit(5)->select(); ?>
						    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                              <td><?php echo (msubstr($v["title"],0,20)); ?></td>
                              <td><?php echo (substr($v["jzrq"],0,10)); ?></td>
                              <td><?php echo ($v["uname"]); ?></td>
                              <td><?php echo (substr($v["addtime"],0,10)); ?></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                           </tbody>
                          </table>
						  </div>
                        </div>
                      </div>
                      <!--//--> 
                      <div class="col-md-6">
                        <div class="panel panel-default">
                          <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-phone-square"></i>  客户跟踪 <a href="<?php echo U('cust/daoqi');?>" data-toggle="navtab" data-id="<?php echo U('cust/daoqi');?>" data-title="客户跟踪">详细</a></h3></div>
                            <div style="min-height:185px">
							<table class="table table-bordered table-striped table-hover">
                             <thead>
                              <tr>
                              <th height=30>客户名称</th>
							  <th>进展</th>
							  <th>联系人</th>
							  <th>手机号码</th>
                              <th>下次联系</th>
							  <th>最后更新</th>
                              </tr>
                            </thead>
                            <tbody>
							<?php $list=M('cust')->where(array("uid"=>array('EQ', session("uid")),"juid"=>array('like','%'.session("uid").'%'),"_logic"=>"or"))->order('updatetime desc')->limit(5)->select(); ?>
						    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                              <td><?php echo (msubstr($v["title"],0,20)); ?></td>
							  <td><?php echo ($v["fenlei"]); ?></td>
							  <td><?php echo ($v["xingming"]); ?></td>
							  <td><?php echo ($v["phone"]); ?></td>
                              <td><?php echo (substr($v["xcrq"],0,10)); ?></td>
							  <td><?php echo (substr($v["updatetime"],0,10)); ?></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                           </tbody>
                          </table>
						  </div>
                        </div>
                      </div>
                      <!--//-->  					  
						
						
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="bjui-footer" style="text-align:left">
	您好！<?php echo (session('depname')); ?> <?php echo (session('posname')); ?> <?php echo (session('truename')); ?> (<?php echo (session('username')); ?>) 您的IP:<?php echo (session('loginip')); ?>   登录时间:<?php echo (session('logintime')); ?>

	<span style="float:right">Power by <a href="" target=_blank>武汉埃德森信息技术有限公司</a></span> <div style="display:none"></div>
    </footer>
</body>
</html>