<?php

require_once('config.php');
require_once('comments.php');
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Comments Page</title>
    <style>
        #comments-form{border: 1px dotted black; width: 50%; padding-left: 20px;}
        #comments-form textarea{width: 70%; min-height: 100px;}
        table {
        width: 100%;
   }
    </style>
</head>
<body>
	<?php if(isset($_SESSION['user_id'])): ?>
	   <p>Привет, - <?php echo $userName['username']?></p>
       <a href="/logout.php"><i class="fa fa-unlock"></i> Выход</a>
       <?php else: ?>
           <a href="/login.php"><i class="fa fa-lock"></i>Войти на сайт</a><br>
           <a href="/register.php"><i class="fa fa-lock"></i>Зарегистрироваться</a>
       <?php endif ?>
       <div style="margin:auto;">
        <h1>Comments Page</h1>
        <div id="comments-form">
            <h3>Please add your comment</h3>
            <form method="POST">
                <div>
                    <label>Comment</label>
                    <div>
                        <textarea name="comment"></textarea>
                    </div>
                </div>
                <div>
                    <br>
                    <input type="submit" name="submit" value="Save">
                </div>
            </form>
        </div>
        <table class="table table-hover table-striped" border="1">
            <thead>
                <tr>
                    <th>Текст</th>
                    <th>Дата создания</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($comments as $comment): ?>

                  <tr>
                    <td width="800">
                       <p <?php if ($comment['user_id'] == $_SESSION['user_id'] && isset($_SESSION['user_id'])) {
                        echo 'style="color: red;"';
                    }?>><?php echo $comment['comment'];?></p>
                </td>
                <td width="600"><?php echo $comment['created_at'] ?></td>
            </tr>

        <?php endforeach; ?>
        
    </tbody>
</table>
</div>
</body>
</html>