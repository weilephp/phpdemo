<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台登录</title>
    <link href="http://localhost/ykj/Application/Admin/Public/css/admin_login.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="admin_login_wrap">
    <h1>后台管理</h1>
    <div class="adming_login_border">
        <div class="admin_input">
            <form action="/ykj/index.php/Admin/Login/login" method="post">
                <ul class="admin_items">
                    <li>
                        <label for="username">用户名：</label>
                        <input type="text" name="username" value="" id="username" size="35" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="password">密码：</label>
                        <input type="password" name="password" value="" id="password" size="35" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="verify">验证码：</label>
                        <input type="text" name="verify" value="" id="verify" size="15" class="admin_input_style" /><img style="width:100px;height:40px;cursor:pointer;" src="/ykj/index.php/Admin/Login/verify" onclick="this.src='/ykj/index.php/Admin/Login/verify/'+Math.random();" />
                    </li>
                    <li>
                        <input type="submit" tabindex="3" value="登录" class="btn btn-primary" />
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
</body>
</html>