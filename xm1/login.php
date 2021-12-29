<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="css/logincss.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-1.3.2.js"></script>
</head>
<style>

</style>
<body>
<div class="box">
    <form method="post" name="login" class="font_box" id="form_1">
        <div class="input_all">
            <label for="yhm">用户名</label>
            <input type="text" name="yhm" id="yhm" placeholder="输入用户名">
            <span id="sap1"></span>
        </div>
        <div class="input_all">
            <label for="pwdd">密码</label>
            <input id="pwdd" type="password" name="pwdd" placeholder="输入密码">
            <span id="sap2"></span>
        </div>
        <div style="width: 600px;height: 50px">
            <input style="width:20px;height:20px;margin-left: 150px;float: left;margin-top: 10px" type="checkbox" id="rement_me" name="rement_me">
            <label style="float:left;margin-top: 10px">记住我</label>
            <a style="width:160px;display: block;margin-top: 10px;margin-left: 80px;float: left" href="registerpage.php">还没注册？点击去注册</a>
        </div>
        <div style="width: 600px;height: 140px ">
            <input class="sub" type="button" name="sign" id="sign" value="登录" onclick="on_login()">
        </div>
    </form>
</div>
</body>
<script>
    function on_login() {
        let yhm1 = $("#yhm").val();
        let pwdd1 = $("#pwdd").val();
        let rememnt = $("#rement_me").val();
        if (yhm1 == "") {
            $("#sap1").text("用户名不能为空！").css({
                "display": "inline",
                "color": "#FF0000",
            })
            $("#yhm").focus().css({
                "border": "solid 2px #FF0000"
            })
            return false;
        } else {
            $("#sap1").css("display", "none");
            $("#yhm").focus().css({
                "border": "solid 2px #000000"
            })
        }
        if (pwdd1 == "") {
            $("#sap2").text("密码不能为空！").css({
                "display": "inline",
                "color": "#FF0000",
            })
            $("#pwdd").focus().css({
                "border": "solid 2px #FF0000"
            })
            return false;
        } else {
            $("#sap2").css("display", "none");
            $("#pwdd").focus().css({
                "border": "solid 2px #000000"
            })
            console.log(yhm1,pwdd1)
            $.ajax({
                type: 'POST',
                url: 'logincc.php',
                data: {
                    yhm: yhm1,
                    pwdd: pwdd1,
                    rememnt:rememnt,
                },
                success: function (tt) {
                    console.log(tt)
                    if (tt == 1) {
                        alert("登录成功！！");
                        window.location = "main.php";
                    } else {
                        console.log(tt)
                        alert("账号或者密码错误哦！");
                    }
                }
            })
        }
    }
</script>
</html>
