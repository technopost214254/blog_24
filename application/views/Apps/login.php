<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<center>
	<h1>Admin login page</h1>
	<?php if($msg = $this->session->flashdata('loginerror')){
		echo "<h3 style='color:red;'>".$msg."</h3>";
	} ?>
	<form action="<?php echo base_url();?>Apps/login_action" method="post">
		<label>UserName</label>
		<input type="text" name="admin_username" value="" autocomplete="off"><br/><br/>
		<label>Password</label>
		<input type="Password" name="admin_password" value="" autocomplete="off"><br/>
		<br/>
		<input type="submit" name="login" value="login">
	</form>
</center>
</body>
</html>