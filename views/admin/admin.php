<?php
session_start();

/*非管理员不能进入后台管理界面，具体跳转到哪个页面待修改
if(!isset($_SESSION['name'])||$_SESSION[admin]!=1){
	echo '<script>alert("没有权限")</script>';
	echo "<script>window.location.href='../login/login.php'</script>";
	exit;
}
*/
?>
<html>
	<head>
		<title>后台管理</title>
		<link href=<?=base_url().'views/admin/admin.css'?> rel="stylesheet" type="text/css" >
	</head>
	<body>
		<span id="head_span"></span>
		<img id="head_pic" src=<?=base_url().'views/admin/img/bg_manage.png'?> width="1270px" height="160px">
		<div id="main">
			<div id="main_left">
				<div id="left_top">
				<img src=<?=base_url().'views/admin/img/manage_logo.png'?> height="70px" style="float:left;padding-left:.5em;">
				<h2 style="padding:.5em 0 .1em .2em;">管理项目</h2>
				<p style="color:#7D2D2E">GUANLIXIANGMU</p>
				</div>
				<div id="left_bottom">
				<ul id="select">
					<li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;录像管理</a></li>
					<li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;自测管理</a></li>
					<li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;下载管理</a></li>
					<li><a href=<?=base_url().'index.php/showdata'?> target="show">&nbsp;&nbsp;&nbsp;&nbsp;查看数据</a></li>
				</ul>
				</div>
			</div>
			<div id="main_right">
				<div id="right_top">
<!-- 				<span>&nbsp;<a href="#">注销</a>&nbsp;&nbsp;&nbsp;</span> -->
				<span><a href=<?=base_url().'index.php'?>>返回主页&nbsp;&nbsp;</a></span>
				</div>
				<div id="right_bottom">
				<iframe name="show" ></iframe>
				</div>
			</div>
		</div>
		<div id="footer">
    <div class="friendLink">
        <ul class="friendLink-list">
            <li><a href="#" title="返回顶部" rel="nofollow">返回顶部</a></li>
            <li ><a href="#" title="学校首页" rel="nofollow">学校首页</a></li>
            <li ><a href="#" title="新闻动态" rel="nofollow">新闻动态</a></li>
            <li ><a href="#" title="关于我们" rel="nofollow">关于我们</a></li>
            <li><a href="#" title="联系我们" rel="nofollow">联系我们</a></li>
            <li><a href="#" title="反馈留言" rel="nofollow">反馈留言</a></li>
        </ul>
    </div>
    <div class="copyRight">
        <P>&#174;广东工业大学信息工程学院</P>
    </div>
</div>
	</body>	
</html>