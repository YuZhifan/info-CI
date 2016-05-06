<html>
<head>
<title>My Form</title>
</head>
<body>

<h3>Your form was successfully submitted!</h3>

<?php echo set_value('username'); ?>
<?php echo set_value('password'); ?>
<?php echo set_value('passconf'); ?>
<?php echo set_value('email'); ?>

<p><?php echo anchor('index.php/form', 'Try it again!'); ?></p>

</body>
</html>