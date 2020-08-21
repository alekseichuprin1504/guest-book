<?php

require_once('config.php');
require_once('RegisterVerification.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Guest Book</title>
</head>
<body>
	<h1>Register Page</h1>
	<div>
		<form method="POST" action="">
			    <div style="color: red;">
			    		<?php foreach($errors as $error):?>
			    			<li><?php echo $error ?></li>
			    		<?php endforeach?>
				</div>
			</div>
			 <div>
			<label>User Name:</label>
			<div>
				<input type="text" name="user_name" id="username" required="" value="<?php echo (!empty($_POST['user_name']) ? $_POST['user_name'] : '');?>"/>
				
			</div>
		</div>
		<div>
			<label>Email:</label>
			<div>
				<input type="email" name="email" id="email" required="" value="<?php echo (!empty($_POST['email']) ? $_POST['email'] : '');?>"/>
				
			</div>
		</div>
		<div>
			<label>First Name:</label>
			<div>
				<input type="text" name="first_name" required="" value="<?php echo (!empty($_POST['first_name']) ? $_POST['first_name'] : '');?>"/>
			</div>
		</div>
		<div>
			<label>Last Name:</label>
			<div>
				<input type="text" name="last_name" required="" value="<?php echo (!empty($_POST['last_name']) ? $_POST['last_name'] : '');?>"/>
			</div>
		</div>
		<div>
			<label>Password:</label>
			<div>
				<input type="password" name="password" required="" value=""/>
			</div>
		</div>
		<div>
			<label>Confirm Password:</label>
			<div>
				<input type="password" name="confirm_password" required="" value=""/>
			</div>
		</div>
		<div>
			<br/>
			<input type="submit" name="submit" id="submit" value="Register">
		</div>      
		</form>
	</div>
</body>
</html>