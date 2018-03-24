<base href="<?php echo site_url();?>">
<meta charset="utf-8">
<form action="<?php echo site_url('User/do_reg')?>" method="post">
    用户名：<input type="text" name="name"><br>
    密码：<input type="password" name="pass"><br>
    确认密码：<input type="password" name="repass"><br>
    <input type="submit" name="sub" value="注册">
</form>