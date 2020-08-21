<?php

require_once('config.php');
require_once('loginVerification.php');

?>
<!DOCTYPE html>
<html>
<head>
    <title>My Guest Book</title>
    <meta charset="UTF-8">
</head>
<body>
	<?php if($isReg): ?>
		<h2>Вы успешно зарегались используйте данные для входа на сайт</h2>
	<?php endif ?>	
<h1>Log In Page</h1>
<div>
    <?php if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])): ?>
        <p>Вы уже авторизированы</p>
        <a href="index.php">На сайт</a>
    <?php die; ?>
    <?php endif;?>
    <form method="POST">
        <div style="color: red;">
            <?php foreach ($errors as $error) :?>
                <p><?php echo $error;?></p>
            <?php endforeach; ?>
        </div>
        <div>
            <label>User Name / Email:</label>
            <div>
                <input type="text" name="user_name" required="" value="<?php echo (!empty($_POST['user_name']) ? $_POST['user_name'] : '');?>"/>
            </div>
        </div>
        <div>
            <label>Password:</label>
            <div>
                <input type="password" name="password" required="" value=""/>
            </div>
        </div>
        <div>
            <br/>
            <input type="submit" name="submit" value="Log In">
        </div>      
    </form>
</div>
</body>
</html>