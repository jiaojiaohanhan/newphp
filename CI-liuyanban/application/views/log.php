<base href="<?php echo site_url();?>">
<meta charset="utf-8">
<form action="<?php echo site_url('User/do_log')?>" method="post">
    用户名：<input type="text" name="name"><br>
    密码：<input type="password" name="pass"><br>
    <input type="submit" name="sub" value="登录">
</form>