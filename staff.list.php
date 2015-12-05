<?php 
	require_once('connect.php');
	$id = intval($_GET['id']);
	$sql = "select * from tea_db where id=$id";
	$query = mysql_query($sql);
	if($query&&mysql_num_rows($query)){
		$row = mysql_fetch_assoc($query);
	}else{
		echo "这篇文章不存在";
		exit;
	}
?>
<!DOCTYPE html>

<html>

	<head>
		
		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Title -->
		<title>吉林大学地球科学学院</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
		
		<!-- Stylesheets -->
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="css/fontello.css" rel="stylesheet" type="text/css">
		<link href="css/flexslider.css" rel="stylesheet" type="text/css">
		<link href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
		<link href="css/responsive-calendar.css" rel="stylesheet" type="text/css">
		<link href="css/chosen.css" rel="stylesheet" type="text/css">
		<link href="jackbox/css/jackbox.min.css" rel="stylesheet" type="text/css" />
		<link href="css/cloud-zoom.css" rel="stylesheet" type="text/css" />
		<link href="css/style.css" rel="stylesheet" type="text/css">

		
		<!--[if IE 9]>
			<link rel="stylesheet" href="css/ie9.css">
		<![endif]-->
		
		<!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<link href="css/jackbox-ie8.css" rel="stylesheet" type="text/css" />
			<link rel="stylesheet" href="css/ie.css">
        <![endif]-->
		
		<!--[if gt IE 8]>
			<link href="css/jackbox-ie9.css" rel="stylesheet" type="text/css" />
		<![endif]-->
		
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/fontello-ie7.css">
		<![endif]-->
		
		<style type="text/css">
			.no-fouc {display:none;}
	  	</style>
		
		<!-- jQuery -->
		<script src="js/jquery-1.11.0.min.js"></script>
		<script src="js/jquery-ui-1.10.4.min.js"></script>
		
		<!-- Preloader -->
		<script src="js/jquery.queryloader2.min.js"></script>
		
		<script type="text/javascript">
		$('html').addClass('no-fouc');
		
		$(document).ready(function(){
			
			$('html').show();
			
			var window_w = $(window).width();
			var window_h = $(window).height();
			var window_s = $(window).scrollTop();
			
			$("body").queryLoader2({
				backgroundColor: '#f2f4f9',
				barColor: '#63b2f5',
				barHeight: 4,
				percentage:false,
				deepSearch:true,
				minimumTime:1000,
				onComplete: function(){
					
					$('.animate-onscroll').filter(function(index){
					
						return this.offsetTop < (window_s + window_h);
						
					}).each(function(index, value){
						
						var el = $(this);
						var el_y = $(this).offset().top;
						
						if((window_s) > el_y){
							$(el).addClass('animated fadeInDown').removeClass('animate-onscroll');
							setTimeout(function(){
								$(el).css('opacity','1').removeClass('animated fadeInDown');
							},2000);
						}
						
					});
					
				}
			});
			
		});
		</script>
		
	</head>
	
	<body class="sticky-header-on tablet-sticky-header">
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>		
		<!-- Container -->
		<div class="container">
			
			
			<!-- Header -->
			<header id="header">
				
				<!-- Main Header -->
				<div id="main-header">
					
					<div class="container">
					
					<div class="row">
						
						
						
						<!-- Logo -->
						<div id="logo" class="col-lg-9">
							
							<a href="http://geo.jlu.edu.cn"><img src="img/logo.png" alt="旧版主页入口" title="旧版主页入口" width="600px" height="120px" ></a>

						</div>
							<div class="col-lg-3">
							<p style="font-size:16px; color:#fcfcfc;">
								&nbsp;&nbsp;&nbsp;&nbsp;
								<a style="font-size:16px; color:#fcfcfc;" href="http://oldgeo.jlu.edu.cn/new/index.php">旧站入口&nbsp;&nbsp;</a>·
								<a style="font-size:16px; color:#fcfcfc;" href="#">&nbsp;&nbsp;English</a>·
								<a style="font-size:16px; color:#fcfcfc;" href="#">&nbsp;&nbsp;中文版</a></p>
							<script type="text/javascript" src="http://ext.weather.com.cn/97865.js"></script>
 							<div class="input-append input-prepend">
	                             <form method="post" action="article.search.php" name="search"><input type="text" name="search" id="search" placeholder="站内搜索" value="" class="placeholder">
									<input type="submit" value="search" style="display:none;">
	                             </form>
	                        
	                        </div>
	                    </div>

						<!-- /Logo -->

					</div>
					
					</div>
					
				</div>
				<!-- /Main Header -->
				<!-- Lower Header -->
				<div id="lower-header">
					
					<div class="container">
					
					<div id="menu-button">
						<div>
						<span></span>
						<span></span>
						<span></span>
						</div>
						<span>Menu</span>
					</div>
					
					<ul style="" id="navigation">
						<!--首页导航循环 -->
						                        <li>
                            <a href="http://geo.jlu.edu.cn/article_cat?id=78">学院概况</a>
                            <ul><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=78">学院介绍</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=79">专业学科介绍</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=84">学科建设</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=87">学术组织</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=88">学院领导</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=90">群团工作</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=91">机构设置</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=93">院资料室</a></li></ul> 	
                            </li>
                                    <li>
                            <a href="http://geo.jlu.edu.cn/article_cat?id=94">师资队伍</a>
                            <ul><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=94">院士风采</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=95">唐敖庆教授</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=97">兼职·客座教授</a></li><li><a style="font-size:12px;" href="http://oldgeo.jlu.edu.cn/new/staff/index.php">教师信息</a></li></ul>                            
                     		</li>
                                    <li>
                            <a href="http://geo.jlu.edu.cn/article_cat?id=184">本科生教学</a>
                            <ul><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=184">本科生培养方案</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=185">课程教学大纲</a></li><li><a style="font-size:12px;" href="http://oldgeo.jlu.edu.cn/new/calendar/">教学日历</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=187">日常教学管理</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=189">大学生创新创业训练计划</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=190">研究生免推工作</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=191">教学研究与改革</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=192">本科生毕业论文（设计）</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=227">精品课程</a></li></ul>                            
                        </li>
                                    <li>
                            <a href="http://geo.jlu.edu.cn/article_cat?id=197">研究生教育</a>
                            <ul><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=197">研究生专业介绍</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=198">研究生招生信息</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=199">研究生管理</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=200">研究生教学</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=201">研究生学位工作</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=202">研究生就业信息</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=203">研究生培养方案</a></li></ul>                            
                        </li>
                                    <li>
                            <a href="http://geo.jlu.edu.cn/article_cat?id=193">成人教育</a>
                            <ul><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=193">成人教育招生简章</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=194">成人教育培养方案</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=195">课程教学大纲</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=196">成人教育毕业论文（设计）</a></li></ul>                            
                        </li>
                                    <li>
                            <a href="http://geo.jlu.edu.cn/article_cat?id=100">党群工作</a>
                            <ul><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=100">上级文件</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=118">党员风采</a></li><li><a style="font-size:12px;" href="http://www.dangjian.com/">学习资料</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=102">群众路线教育</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=205">工会活动</a></li></ul>                            
                       </li>
                                    <li>
                            <a href="http://geo.jlu.edu.cn/article_cat?id=101">科研外事</a>
                            <ul><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=101">科研外事动态（主页）</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=121">在研项目</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=122">科研成果</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=123">学术动态（主页）</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=124">外事活动</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=125">科研管理</a></li></ul>                            
                        </li>
                                    <li>
                            <a href="http://geo.jlu.edu.cn/article_cat?id=82">学生工作</a>
                            <ul><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=82">学生天地</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=130">团学社</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=131">奖助减贷补政策</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=132">管理制度</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=134">奖助学金公示</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=135">就业指导</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=139">学子风采</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=216">心理健康</a></li></ul>                            
                       </li>
                                    <li>
                            <a href="http://geo.jlu.edu.cn/article_cat?id=80">校友专栏</a>
                            <ul><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=80">知名校友</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=81">校友捐赠</a></li><li><a style="font-size:12px;" href="http://oldgeo.jlu.edu.cn/new/data/50/">五十年庆典</a></li><li><a style="font-size:12px;" href="http://oldgeo.jlu.edu.cn/new/showclass.php?classid=6&amp;Nclassid=100">校友登记</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=142">校友留言</a></li></ul>                            
                        </li>
                                    <li>
                            <a href="http://geo.jlu.edu.cn/article_cat?id=181">实践教学</a>
                            <ul><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=188">实验教学</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/article_cat?id=206">野外实习</a></li></ul>                            
                        </li>
                                    <li>
                            <a href="#">实验平台及研究机构</a>
                            <ul><li><a style="font-size:12px;" href="http://oldgeo.jlu.edu.cn/lab">地学基础实验教学中心</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/?id=207">数学地学研究中心</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/">吉林大学长白山火山研究中心</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/new/institute/tibetan?id=209">青藏高原地学研究中心</a></li><li><a style="font-size:12px;" href="http://oldgeo.jlu.edu.cn/neakl?id=210">东北亚矿产资源评价国土资源部重点实验室</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/?id=211">油页岩与共生矿产成矿及勘查开发吉林省重点实验室</a></li><li><a style="font-size:12px;" href="http://eplenea.jlu.edu.cn/exchange.htm?id=212">东北亚生物演化与环境教育部重点实验室</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/?id=213">变质动力学与地质流体国土资源部开放实验室</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/?id=214">油气与盆地研究所</a></li><li><a style="font-size:12px;" href="http://geo.jlu.edu.cn/?id=215">能源地质研究所</a></li></ul>                            
                        </li>						
                        <!-- /Donate -->
						
					</ul>
					
					</div>
					
				</div>
				<!-- /Lower Header -->
				
				
			</header>
			<!-- Page Heading -->
			<!-- Section -->
			<section class="section full-width-bg gray-bg">

				<div class="row">

					<div class="col-lg-9 col-md-9 col-sm-8 col-lg-push-3 col-md-push-3 col-sm-push-4">
						
						<h1 class="no-margin-top">教师信息</h1>

						<div class="content">
			               	<div class="post">
                           	<table width="558" border="0" align="center" cellpadding="0" cellspacing="0">
         			<table width="537" height="490" border="1" cellPadding="2" cellSpacing="3" bordercolor="#CCCCCC">
              <tr> 
                <td width="81" height="23"  align="center" valign="middle"> <font face="微软雅黑"><span style="font-size: 11pt">姓 名</span></font></td>
                <td  align="left" height="23"  width="260"><?php echo $row['name']?></td>
                <td width="164" height="207" rowspan="7" align="center" valign="middle"> 
                 	<img border=1 width="300" src="admin/upload/<?php echo $row['file']?>"> 
                </td>
              </tr>
              <tr> 
                <td width="81" height="23"  align="center" valign="middle"> <font face="微软雅黑"><span style="font-size: 11pt">职 称</span>:</font></td>
                <td  align="left" height="23"  width="260"><?php echo $row['zhicheng']?></td>
              </tr>

              <tr> 
                <td width="81" height="23"  align="center" valign="middle"> <font face="微软雅黑"><span style="font-size: 11pt">专 业</span></font></td>
                <td  align="left" height="23"width="260"><?php echo $row['xkzy']?></td>
              </tr>
              <tr> 
                <td width="81" height="23"  align="center" valign="middle"> <font face="微软雅黑"><span style="font-size: 11pt">研究方向</span></font></td>
                <td  align="left" height="23"  width="260"><?php echo $row['direction']?></td>
              </tr>
              <tr> 
                <td width="81" height="23"  align="center" valign="middle"> <font face="微软雅黑"><span style="font-size: 11pt">联系方式</span></font></td>
              	<td  align="left" height="24" colspan="2"><?php echo $row['minzu']?></td>
              </tr>
              <tr> 
                <td width="81" height="23"  align="center" valign="middle"> <font face="微软雅黑"><span style="font-size: 11pt">邮箱</span></font></td>
                <td  align="left" height="23"  width="260"><?php echo $row['email']?></td>
              </tr>
              <tr> 
                <td width="81"  height="23" align="center" valign="middle"> <font face="微软雅黑"><span style="font-size: 11pt">办公室</span></font></td>
                <td  align="left" height="23"  width="260"><?php echo $row['bgs']?></td>
              </tr>
              <tr> 
                <td width="81"  height="23" align="center" valign="middle"> <font face="微软雅黑"><span style="font-size: 11pt">工作室</span></font></td>
                <td  align="left" height="23" colspan="2"><?php echo $row['gzs']?></td>
              </tr>
              <tr> 
                <td width="81" height="23"  align="center" valign="middle"> <font face="微软雅黑"><span style="font-size: 11pt">个人简介</span></font></td>
              	<td  align="left" height="24" colspan="2"><?php echo $row['jc']?></td>
              </tr>
              <tr> 
                <td width="81"  height="24" align="center" valign="middle"> <span style="font-size: 11pt"><font face="微软雅黑">学习经历</font><font face="微软雅黑"></font></span></td>
                <td  align="left" height="24" colspan="2"><?php echo $row['x_experience']?></td>
              </tr>
              <tr> 
                <td width="81"   align="center" valign="top"> <font face="微软雅黑"><span style="font-size: 11pt">工作经历</span></font></td>
                <td  height="21" colspan="2"><?php echo $row['w_experience']?></td>
              </tr>
              <tr> 
                <td width="81"   align="center" valign="top"> <font face="微软雅黑"><span style="font-size: 11pt">学术兼职</span></font></td>
                <td  height="21" colspan="2"><?php echo $row['kycg']?></td>
              </tr>
              <tr> 
                <td width="81"   align="center" valign="top" > <font face="微软雅黑"><span style="font-size: 11pt">研究领域与兴趣</span></font></td>
                <td   colspan="2"><?php echo $row['yjlyjxq']?></td>
              </tr>
              <tr> 
                <td width="81"   align="center" valign="top" > <font face="微软雅黑"><span style="font-size: 11pt">教学情况</span></font></td>
                <td   colspan="2"><?php echo $row['course']?></td>
              </tr>
              <tr> 
                <td width="81"   align="center" valign="top" > <font face="微软雅黑"><span style="font-size: 11pt">承担项目与课题</span></font></td>
                <td   colspan="2"><?php echo $row['item']?></td>
              </tr>
              <tr> 
                <td width="81"   align="center" valign="top"> <p style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"> 
                    <font face="微软雅黑"><span style="font-size: 11pt">荣誉奖励</span></font></td>
                <td  height="9" colspan="2"><?php echo $row['awards']?></td>
              </tr>
              <tr> 
                <td width="81"   align="center" valign="top"> <p style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"> 
                    <font face="微软雅黑"><span style="font-size: 11pt">代表性论文及著作</span></font></td>
                <td  height="9" colspan="2"><?php echo $row['lun']?></td>
              </tr>
              <tr> 
                <td width="150"   align="center" valign="top"> <font face="微软雅黑">
                <span style="font-size: 14pt">
                <a href="login.html">修改信息</a>
                </span></font></td>
              </tr>
            </table>
		</table>
	
                           </div>
				        </div>
					</div>
					<!-- Sidebar -->
					<div class="col-lg-3 col-md-3 col-sm-4 col-lg-pull-9 col-md-pull-9 col-sm-pull-8 sidebar">
						
					<div class="banner-wrapper">
							<a class="banner" href="#">
								<h4>科研所、教研室</h4>
							</a>
					</div>
					<div class="banner-wrapper">
						<a class="banner" href="staff.list.php?xibie=1">
							<h4>古生物与地层学</h4>
						</a>
				    </div>	
					<div class="banner-wrapper">
						<a class="banner" href="staff.list.php?xibie=2">
							<h4>岩矿地球化学</h4>
						</a>
					</div>

					<div class="banner-wrapper">
						<a class="banner" href="staff.list.php?xibie=3">
							<h4>构造地质学</h4>
						</a>
					</div>
					<div class="banner-wrapper">
						<a class="banner" href="staff.list.php?xibie=4">
							<h4>矿床学</h4>
						</a>
					</div>
					<div class="banner-wrapper">
						<a class="banner" href="staff.list.php?xibie=5">
							<h4>矿产勘查</h4>
						</a>
					</div>
					<div class="banner-wrapper">
						<a class="banner" href="staff.list.php?xibie=6">
							<h4>石油地质</h4>
						</a>
					</div>
					<div class="banner-wrapper">
						<a class="banner" href="staff.list.php?xibie=7">
							<h4>油藏工程</h4>
						</a>
					</div>
					<div class="banner-wrapper">
						<a class="banner" href="staff.list.php?xibie=8">
							<h4>第四纪地质学</h4>
						</a>
					</div>
					<div class="banner-wrapper">
						<a class="banner" href="staff.list.php?xibie=9">
							<h4>地理科学</h4>
						</a>
					</div>
					<div class="banner-wrapper">
						<a class="banner" href="staff.list.php?xibie=10">
							<h4>土地资源管理</h4>
						</a>
					</div>
					<div class="banner-wrapper">
						<a class="banner" href="staff.list.php?xibie=11">
							<h4>数字地学研究中心</h4>
						</a>
					</div>
					<div class="banner-wrapper">
						<a class="banner" href="staff.list.php?xibie=12">
							<h4>教学实验中心</h4>
						</a>
					</div>
					<div class="banner-wrapper">
						<a class="banner" href="staff.list.php?xibie=13">
							<h4>测试中心</h4>
						</a>
					</div>

						
						<!-- /Flickr Photos -->						
				</div>
					<!-- /Sidebar -->
			</section>
			<!-- Footer -->
			  <footer id="footer">
				<!-- Main Footer -->
				<div id="main-footer">
					<div class="row" >
					</div>
				</div>
             </footer>
			<!-- /Footer -->
			<!-- Back To Top -->
			<a href="#" id="button-to-top"><i class="icons icon-up-dir"></i></a>
		
		</div>
		<!-- /Container -->	
	
		<!-- JavaScript -->
		
		<!-- Bootstrap -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		
		<!-- Modernizr -->
		<script type="text/javascript" src="js/modernizr.js"></script>
		
		<!-- Sliders/Carousels -->
		<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		
		<!-- Revolution Slider  -->
		<script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.plugins.min.js"></script>
		<script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
		
		<!-- Calendar -->
		<script type="text/javascript" src="js/responsive-calendar.min.js"></script>
		
		<!-- Raty -->
		<script type="text/javascript" src="js/jquery.raty.min.js"></script>
		
		<!-- Chosen -->
		<script type="text/javascript" src="js/chosen.jquery.min.js"></script>
		
		<!-- jFlickrFeed -->
		<script type="text/javascript" src="js/jflickrfeed.min.js"></script>
		
		<!-- InstaFeed -->
		<script type="text/javascript" src="js/instafeed.min.js"></script>
		
		<!-- Twitter -->

		
		<!-- MixItUp -->
		<script type="text/javascript" src="js/jquery.mixitup.js"></script>
		
		<!-- JackBox -->
		<script type="text/javascript" src="jackbox/js/jackbox-packed.min.js"></script>
		
		<!-- CloudZoom -->
		<script type="text/javascript" src="js/zoomsl-3.0.min.js"></script>
		
		<!-- Main Script -->
		<script type="text/javascript" src="js/script.js"></script>
		
		
		<!--[if lt IE 9]>
			<script type="text/javascript" src="js/jquery.placeholder.js"></script>
			<script type="text/javascript" src="js/script_ie.js"></script>
		<![endif]-->
		
		
	</body>

</html>
