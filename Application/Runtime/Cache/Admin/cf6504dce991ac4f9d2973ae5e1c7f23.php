<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>微盘系统管理中心</title>
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
    <!-- bootstrap -->
    <link href="/Public/Admin/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="/Public/Admin/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="/Public/Admin/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- libraries -->
    <link href="/Public/Admin/css/lib/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Admin/css/lib/font-awesome.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/elements.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/icons.css" />
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>

    <!-- navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <button type="button" class="btn btn-navbar visible-phone" id="menu-toggler">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
          

            <ul class="nav pull-right">                
                <!-- <li class="hidden-phone">
                    <input class="search" type="text" />
                </li>
                <li class="notification-dropdown hidden-phone">
                    <a href="#" class="trigger">
                        <i class="icon-warning-sign"></i>
                        <span class="count">8</span>
                    </a>
                    <div class="pop-dialog">
                        <div class="pointer right">
                            <div class="arrow"></div>
                            <div class="arrow_border"></div>
                        </div>
                        <div class="body">
                            <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                            <div class="notifications">
                                <h3>你有6封邮件需要查收</h3>
                                <a href="#" class="item">
                                    <i class="icon-signin"></i> 新注册用户 刘易斯
                                    <span class="time"><i class="icon-time"></i> 13 分钟前.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-signin"></i> 新注册用户 张二娃
                                    <span class="time"><i class="icon-time"></i> 18 分钟前.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-envelope-alt"></i> 来自用户 好啊好 的邮件，请查收
                                    <span class="time"><i class="icon-time"></i> 28 分钟前.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-signin"></i> 新注册用户 无法了解
                                    <span class="time"><i class="icon-time"></i> 49 分钟前.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-download-alt"></i> 我的天空 的新订单
                                    <span class="time"><i class="icon-time"></i> 1 天前.</span>
                                </a>
                                <div class="footer">
                                    <a href="#" class="logout">查看全部邮件</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="notification-dropdown hidden-phone">
                    <a href="#" class="trigger">
                        <i class="icon-envelope-alt"></i>
                    </a>
                    <div class="pop-dialog">
                        <div class="pointer right">
                            <div class="arrow"></div>
                            <div class="arrow_border"></div>
                        </div>
                        <div class="body">
                            <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                            <div class="messages">
                                <a href="#" class="item">
                                    <img src="/Public/Admin/img/contact-img.png" class="display" />
                                    <div class="name">张二娃</div>
                                    <div class="msg">
                                        	我的钱太少了，能给我分一点前用用吗？
                                    </div>
                                    <span class="time"><i class="icon-time"></i> 13 分钟前.</span>
                                </a>
                                <a href="#" class="item">
                                    <img src="/Public/Admin/img/contact-img2.png" class="display" />
                                    <div class="name">安吉丽娜朱莉</div>
                                    <div class="msg">
                                        请问管理员，为什么周末我无法购买产品。
                                    </div>
                                    <span class="time"><i class="icon-time"></i> 26 分钟前.</span>
                                </a>
                                <a href="#" class="item last">
                                    <img src="/Public/Admin/img/contact-img.png" class="display" />
                                    <div class="name">路易斯</div>
                                    <div class="msg">
                                        提现太慢了，麻烦快一点。
                                    </div>
                                    <span class="time"><i class="icon-time"></i> 48 分钟.</span>
                                </a>
                                <div class="footer">
                                    <a href="#" class="logout">查看全部信息</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li> -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle hidden-phone" data-toggle="dropdown">
                        <?php echo ($_SESSION['username']); ?>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                       <!--  <li><a href="<?php echo U('User/personalinfo');?>">个人信息</a></li>
                        <li><a href="<?php echo U('User/personalinfo');?>">账户设置</a></li> -->
                        <li><a href="<?php echo U('Order/olist');?>">查看订单</a></li>
                        <li><a href="<?php echo U('User/ulist');?>">查看客户</a></li>
                        <li><a href="<?php echo U('Goods/glist');?>">查看产品</a></li>
                    </ul>
                </li>
             <!--    <li class="settings hidden-phone">
                    <a href="<?php echo U('User/personalinfo');?>" role="button">
                        <i class="icon-cog"></i>
                    </a>
                </li> -->
                <li class="settings hidden-phone">
                    <a href="<?php echo U('Admin/User/signinout');?>" role="button">
                        <i class="icon-share-alt"></i>
                    </a>
                </li>
            </ul>            
        </div>
    </div>
    <!-- end navbar -->

    <!-- sidebar -->
    <div id="sidebar-nav">
        <ul id="dashboard-menu">
            <li>
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                <a href="<?php echo U('Admin/Index/index');?>">
                    <i class="icon-home"></i>
                    <span>系统首页</span>
                </a>
            </li>            
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-edit"></i>
                    <span>内容管理</span>
					<i class="icon-chevron-down"></i>
                </a>
				<ul class="submenu">
                    <li><a href="<?php echo U('Admin/News/typelist');?>">栏目管理</a></li>
                    <li><a href="<?php echo U('Admin/News/newslist');?>">文章管理</a></li>
                    <!--<li><a href="user-profile.html">我发布的文档</a></li>-->
					<!--<li><a href="user-profile.html">内容回收站</a></li>-->					
                </ul>
            </li>
			<li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-calendar-empty"></i>
                    <span>产品管理</span>
					<i class="icon-chevron-down"></i>
                </a>
				<ul class="submenu">
                    <!--<li><a href="<?php echo U('Admin/Goods/gadd');?>">添加产品</a></li>-->
                    <li><a href="<?php echo U('Admin/Goods/glist');?>">产品列表</a></li>
                    <!--<li><a href="<?php echo U('Admin/Goods/gtypeadd');?>">添加商品分类</a></li>-->
                    <li><a href="<?php echo U('Admin/Goods/gtype');?>">分类列表</a></li>
                    <!--<li><a href="user-profile.html">回收站</a></li>-->				
                </ul>
            </li>
			<li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-th-large"></i>
                    <span>订单管理</span>
					<i class="icon-chevron-down"></i>
                </a>
				<ul class="submenu">
                    <li><a href="<?php echo U('Admin/Order/olist');?>">订单列表</a></li>
                    <li><a href="<?php echo U('Admin/Order/tlist');?>">交易流水</a></li>
                    <li><a href="<?php echo U('Admin/Order/zxlist');?>">最新订单</a></li>
                    <!--<li><a href="new-user.html">移除的订单</a></li>-->
                </ul>
            </li>
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-group"></i>
                    <span>客户管理</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('User/ulist');?>">客户列表</a></li>
                    <!--<li><a href="<?php echo U('Admin/User/ugroup');?>">用户组设置</a></li>-->
                    <li><a href="<?php echo U('User/recharge');?>">充值和提现申请</a></li>
                    <li><a href="<?php echo U('User/agentlist');?>">代理商申请列表</a></li>
                </ul>
            </li>
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-group"></i>
                    <span>会员管理</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('Menber/madd');?>">添加会员</a></li>
                    <li><a href="<?php echo U('Menber/mlist');?>">会员列表</a></li>
                </ul>
            </li>
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-picture"></i>
                    <span>优惠卷管理</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('Coupons/cpadd');?>">添加优惠卷</a></li>
                    <li><a href="<?php echo U('Coupons/cplist',array('style'=>'list'));?>">优惠券列表</a></li>
					<!-- <li><a href="<?php echo U('Coupons/cplist',array('style'=>'oldlist'));?>">历史优惠卷</a></li>-->
                    <li><a href="<?php echo U('Coupons/cpsend');?>">发放优惠券</a></li>
                </ul>
            </li>
            <li>
                <a class="dropdown-toggle" href="personal-info.html">
                    <i class="icon-code-fork"></i>
                    <span>系统管理员</span>
					<i class="icon-chevron-down"></i>
					<ul class="submenu">						
                        <li><a href="<?php echo U('Super/sadd');?>">添加管理员</a></li>
						<li><a href="<?php echo U('Super/slist');?>">管理员列表</a></li>
						<!--<li><a href="grids.html">管理员组</a></li>-->
					</ul>
                </a>
            </li>
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-cog"></i>
                    <span>系统设置</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                	<li><a href="<?php echo U('Super/esystem');?>">基本设置</a></li>
                    <!--<li><a href="grids.html">清理缓存</a></li>-->
                    <li><a href="<?php echo U('Super/backupdb');?>">数据备份</a></li>
				<!-- 	<li><a href="signin.html">数据还原</a></li> -->
                    <li><a href="<?php echo U('User/signinout');?>">退出系统</a></li>
                </ul>
            </li>
             <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-group"></i>
                    <span>微信管理</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('Menber/wxinfo');?>">微信基本信息</a></li>
                    <li><a href="<?php echo U('Menber/wxlist');?>">微信用户列表</a></li>
                    <li><a href="<?php echo U('Menber/instruser');?>">更新微信用户</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->


	<!-- main container -->
    <div class="content">

        <!-- settings changer -->
        <div class="skins-nav">
            <a href="#" class="skin first_nav selected">
                <span class="icon"></span><span class="text">默认颜色</span>
            </a>
            <a href="#" class="skin second_nav" data-file="/Public/Admin/css/skins/dark.css">
                <span class="icon"></span><span class="text">黑色背景</span>
            </a>
        </div>
    	
	<!-- this page specific styles -->
    <link rel="stylesheet" href="/Public/Admin/css/compiled/new-user.css" type="text/css" media="screen" />
        
    <div class="container-fluid">
        <div id="pad-wrapper" class="new-user">
            <div class="row-fluid header">
                <h3>交易明细</h3>
				<!--<a href="javascript:void(0);" onclick="preview(1)" class="btn-flat success pull-right">
					打印订单
				</a>-->
            </div>
            <div class="row-fluid form-wrapper" id="order-print">
	            <input type="hidden" name="uid" value="<?php echo ($userme['uid']); ?>"/>
	            <!-- left column -->
	            <div class="span7 with-sidebar">
	                <div class="span9 field-box uname">
	                    <label>客户名:</label>
	                    <label style="text-align: left;"><a href="<?php echo U('User/updateuser',array('uid'=>$userme['uid']));?>" class="name"><?php echo ($uinfo["username"]); ?></a></label>
	                    
	                    <label>账户余额:</label>
	                    <?php if($acount["balance"] == 0): ?><font color="#f00" size="4">￥0.00</font>
	                    <?php else: ?>
	                    	<font color="#f00" size="4">￥<?php echo ($acount["balance"]); ?></font><?php endif; ?>
	                </div>
	                <div class="span9 field-box">
	                    <label>订单编号:</label>
	                    <?php echo ($oinfo['orderno']); ?>
	                </div>
	                <div class="span9 field-box">
	                    <label>商品:</label>
	                    <?php echo ($goods['ptitle']); ?>
	                </div>
	                <div class="span9 field-box">
	                    <label>价格:</label>
	                    <font color="#f00" size="4"><?php echo ($goods['uprice']); ?></font>元/手
	                </div>
	                <div class="span9 field-box">
	                    <label>订单状态:</label>
	                    <?php if($oinfo["ostaus"] == 1): ?>平仓
                    	<?php else: ?>
							建仓<?php endif; ?>
	                </div>
	                <div class="span9 field-box">
	                    <label>入仓价格:</label>
	                    <font color="#f00" size="3"><?php echo ($oinfo["buyprice"]); ?></font>元
	                </div>
	                <div class="span9 field-box">
	                    <label>平仓价格:</label>
	                    <?php if($oinfo["ostaus"] == 1): ?><font color="#f00" size="3"><?php echo ($oinfo["sellprice"]); ?></font>元
	                	<?php else: ?>
							<span <?php if($goods["cid"] == 1): ?>class="you"<?php elseif($goods["cid"] == 2): ?>class="baiyin"<?php else: ?>class="tong"<?php endif; ?>></span><?php endif; ?>
	                </div>
	                <div class="span9 field-box">
	                    <label>手续费:</label>
	                    <font color="#f00" size="3"><?php echo ($goods["feeprice"]); ?></font>元
	                </div>
	                <div class="span9 field-box">
	                    <label>入仓金额合计:</label>
	                    <font color="#f00" size="5"><?php echo ($oinfo['onumber']*$goods['uprice']); ?></font>元
	                </div>
	                <div class="span9 field-box">
	                    <label>入仓时间:</label>
	                    <?php echo (date('Y-m-d H:m',$oinfo["buytime"])); ?>
	                </div>
	                <div class="span9 field-box">
	                    <label>平仓时间:</label>
	                    <?php if($oinfo["selltime"] == 0): ?>建仓中
	                    <?php else: ?>
	                    <?php echo (date('Y-m-d H:m',$oinfo["selltime"])); endif; ?>
	                </div>
	                <div class="span9 field-box">
	                    <label>本单盈亏:</label>
	                    <?php if($oinfo["ostaus"] == 1): ?><font color="#f00" size="5"><?php echo ($oinfo["ploss"]); ?></font>元
	                	<?php else: ?>
							<span class="ploss"></span><?php endif; ?>
	                </div>
	            </div>
			</div>
        </div>
    </div>
	<input id="yprice" type="hidden" value=""/>
    <input id="byprice" type="hidden" value=""/>
    <input id="toprice" type="hidden" value=""/>
    
    <input type="hidden" value="<?php echo ($goods['wave']); ?>" name="wave" />
    <input type="hidden" value="<?php echo ($oinfo['onumber']); ?>" name="onumber" />
    <input type="hidden" value="<?php echo ($oinfo['buyprice']); ?>" name="buyprice" />
    <input type="hidden" value="<?php echo ($goods['cid']); ?>" name="cid" />
    <input type="hidden" value="<?php echo ($oinfo['ostyle']); ?>" name="ostyle" />
	<!-- scripts -->
    <script src="/Public/Admin/js/jquery-latest.js"></script>
    <script src="/Public/Admin/js/bootstrap.min.js"></script>
    <script src="/Public/Admin/js/theme.js"></script>
	<script type="text/javascript">  
		butt();
		setInterval('butt()', 1000);
		function butt(){  
			//获取油的价格到页面
			var yprice = $('#yprice').val();
			var byprice = $('#byprice').val();
			var toprice = $('#toprice').val();
			$.ajax({  
				type: "post",  
				url: "<?php echo U('Goods/price');?>",         
				success: function(data) { 
					//最新油价
					$('.you').html(data[0]);
					$('#yprice').val(data[0]);
					if(data[0]<yprice){
						$('.you').attr("class","you sellprice drop");
					}else if(data[0]==yprice){}else{
						$('.you').attr("class","you sellprice rise");
					}              
				},  
			}); 
			//获取白银的价格到页面  
			$.ajax({  
				type: "post",  
				url: "<?php echo U('Goods/byprice');?>",         
				success: function(data) {
					//最新白银价
					$('.baiyin').text(data[0]); 
					$('#byprice').val(data[0]);
					if(data[0]<byprice){
						$('.baiyin').attr("class","baiyin sellprice drop");
					}else if(data[0]==byprice){}else{
						$('.baiyin').attr("class","baiyin sellprice rise");
					}                
				},  
			});
			//获取铜的价格到页面  
			$.ajax({  
				type: "post",  
				url: "<?php echo U('Goods/toprice');?>",         
				success: function(data) {
					//最新白银价
					$('.tong').text(data[0]);
					$('#toprice').val(data[0]);
					if(data[0]<toprice){
						$('.tong').attr("class","tong sellprice drop");
					}else if(data[0]==toprice){}else{
						$('.tong').attr("class","tong sellprice rise");
					}   
				},  
			});
		}
	</script>
	<script type="text/javascript">
		setInterval('getPloss()', 1000);
		function getPloss(){
			var buyprice = $('input[name=buyprice]').val(),
				sellprice = $('.sellprice').html(),
				wave = $('input[name=wave]').val(),
				onumber = $('input[name=onumber]').val(),
				cid = $('input[name=cid]').val(),
				ostyle = $('input[name=ostyle]').val(),
				ploss = 0,
				findPloss = $('.ploss');
			if(ostyle==0){
				if(cid==1){
					ploss = (sellprice-buyprice)*wave*onumber*100;
				}else{
					ploss = (sellprice-buyprice)*wave*onumber;
				}
			}else{
				if(cid==1){
					ploss = (buyprice-sellprice)*wave*onumber*100;
				}else{
					ploss = (buyprice-sellprice)*wave*onumber;
				}
			}
			if(ploss<0){
				findPloss.css('color','#2fb44e')
			}else{
				findPloss.css('color','#ed0000')
			}
			if(findPloss.html()=="NaN"){
				findPloss.html("");
			}else{
				findPloss.html(parseFloat(ploss).toFixed(2));
			}
		}
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			var eqli = $("#dashboard-menu").children().eq(3);
			eqli.attr('class','active');
			$("#dashboard-menu .active .submenu").css("display","block");
		});
	</script>	

    </div>
    <script type="text/javascript">
    	var wid = $(window).height();
    	document.writeln('<div id="popupLayer" style="position:absolute;z-index:2;width:100%;height:'+wid+'px;left:0;top:0;opacity:0.3;filter:Alpha(opacity=30);background:#000;display: none;"></div>');
    </script>
</body>
</html>