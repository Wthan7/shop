<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <title>注册页面</title>
    <!-- 外连css -->
    <link rel="stylesheet" type="text/css" href="css/LoReghcss.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-1.3.2.js"></script>
</head>
<style>
</style>
<body class="box">
<!-- 主体 -->
<div class="main">
    <!-- 设置表单传送数据到register.php -->
    <form id="test_from" method="post" class="section" onsubmit="return true">
        <!-- 账号输入框 -->
        <div class="text_input">
            <label for="name">账号</label>
            <input name="name" type="text" id="name">
            <span id="sp1" style="width: 100px;height: 10px"></span>
        </div>
        <!-- 密码输入框 -->
        <div class="text_input">
            <label for="pwd">密码</label>
            <input name="pwd" type="text" id="pwd">
            <span id="sp2"></span>
        </div>
        <!-- 确认密码输入框 -->
        <div class="text_input">
            <label for="pwds">确认密码</label>
            <input name="pwds" type="text" id="pwds">
            <span id="sp3"></span>
        </div>
        <!-- 验证码输入框 -->
        <div class="text_input">
            <label for="yzm">验证码</label>
            <input name="yzm" type="text" id="yzm" style="width: 120px">
            <img src="captcha.php" alt="验证码" onclick="javascript:this.src='./captcha.php?tm='+Math.random();">
            <span id="sp4"></span>
        </div>
        <!-- 注册按钮 -->
        <div>
            <input class="sub" id="reg" name="reg" type="button" value="注册" onclick="on_click()">
        </div>
        <!-- 返回登录按钮 -->
        <div>
            <input type="button" name="retruedl" class="sub" value="返回登录" onclick="clcik()">
        </div>
    </form>
</div>
<!-- 底部 -->
</body>
<script>
    <!-- 设置点击事件返回登录窗口 -->
    function clcik() {
        window.location = "login.php";
    }

    function on_click() {
        var name1 = $("#name").val();
        var pwd1 = $("#pwd").val();
        var pwds1 = $("#pwds").val();
        var yzm1 = $("#yzm").val();
        if (name1 == "") {
            //document.getElementById('sp1').innerText="";
            $("#sp1").text("用户名不能为空").css({
                "display": "inline",
                "color": "#FF0000",
            });
            $("#name").focus().css({
                "border":"solid 2px #FF0000"
            });
            return false;
        } else {
            $("#sp1").css("display", "none");
            $("#name").focus().css({
                "border":"solid 2px #000000"
            });
        }
        if (pwd1 == "") {
            document.getElementById('sp2').innerText = "";
            $("#sp2").text("密码不能为空").css({
                "display": "inline",
                "color": "#FF0000"
            });
            $("#pwd").focus().css({
                "border":"solid 2px #FF0000"
            });
            return false;
        } else {
            $("#sp2").css("display", "none");
            $("#pwd").focus().css({
                "border":"solid 2px #000000"
            });
        }
        if (pwds1 == "") {
            document.getElementById('sp3').innerText = "";
            $("#sp3").text("请输入二次密码").css({
                "display": "inline",
                "color": "#FF0000"
            });
            $("#pwds").focus().css({
                "border":"solid 2px #FF0000"
            });
            return false;
        } else {
            $("#sp3").css("display", "none");
            $("#pwds").focus().css({
                "border":"solid 2px #000000"
            })
        }
        if (yzm1 == "") {
            document.getElementById('sp4').innerText = "";
            $("#sp4").text("验证码不能为空").css({
                "display": "block",
                "color": "#FF0000",
                "text-align":"right"
            });
            $("#yzm").focus().css({
                "border":"solid 2px #FF0000"
            });
        } else {
            $("#sp4").css("display","none");
            $("#yzm").focus().css({
                "border":"solid 2px #000000"
            })
            console.log(yzm1);
                $.ajax({
                    type: 'POST',
                    url: 'register.php',
                    data: {
                        name: name1,
                        pwd: pwd1,
                        pwds: pwds1,
                        yzm: yzm1,
                    },
                    success: function (msg) {
                        if (msg == 1) {
                            alert("验证码错误!");
                        }
                        if (msg == 2) {
                            alert("两次密码输入不一致!");
                        }
                        if (msg == 3) {
                            alert("该用户名已经存在!");
                        }
                        if (msg == 4) {
                            alert("注册成功!，为你返回登录");
                            window.location = "login.php";
                        }
                    },
                    error: function (msg) {
                        alert(msg + '错误了')
                    }
                })
        }
    }
</script>
</html>
