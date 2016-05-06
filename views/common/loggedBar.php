<link href=<?=base_url().'views/common/loginBar.css'?> rel="stylesheet" type="text/css">
<!--登陆条-->
<div id="loginBar">
    <a href="#">关于我们</a>
	<a href=<?=base_url().'index.php/safeQuit'?>>注销</a>
    <a href="#"><?=$_SESSION[username]?></a>
	
</div>
