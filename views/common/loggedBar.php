<!-- 已登录的状态栏 -->
<link href=<?=base_url().'views/common/loginBar.css'?> rel="stylesheet" type="text/css">
<!--登陆条-->
<div id="loginBar" data-status="YES">
    <a href="#">关于我们</a>
	<a href=<?=base_url().'safeQuit'?>>注销</a>
    <a href=<?=base_url().'admin'?>><?=$_SESSION[user_nicename]?></a>
	
</div>
