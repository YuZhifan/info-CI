<html>
	<head>
		<title>个人信息</title>
	</head>
	<body>
		<img src=<?=base_url().$avatar?> height="100px" width="100px">
		<form action="upload" method="post"
		enctype="multipart/form-data">
		<label for="file">Filename:</label>
		<input type="file" name="file" id="file" accept="image/jpg,image/jpeg,image/png,image/bmp,image/gif"/> 
		<br />
		<label for="file">Submit(<200k):</label>
		<input type="submit" name="submit" value="Submit" />
		</form>
	</body>	
</html>