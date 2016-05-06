<html>
<head>
<title>登录</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('index.php/login'); ?>    
<!--提交调用控制器-->

<h5>Username</h5>
<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />

<h5>Password</h5>
<input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" />

<div><input type="submit" value="Submit" /></div>
<div><input type="reset" value="Reset" /></div>

</form>

</body>
</html>
