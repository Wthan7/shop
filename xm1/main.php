<?php
include "mysqli.php";
$flag = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.3.2.js"></script>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<!-- 整体 -->
<div id="container" class="main">
    <!-- 头部 -->
    <?php
    include 'harder.php';
    ?>
    <!-- 身体 -->
    <div class="box_1">
        <div>
            <img style="width: 220px;position: absolute;top: 20px" src="img/xmt.gif"/>
            <img style="width: 220px;position: absolute;top: 260px" src="img/xmt.gif"/>
            <img style="width: 220px;position: absolute;top: 480px" src="img/xmt.gif"/>
            <img style="width: 220px;position: absolute;top: 700px" src="img/xmt.gif"/>

        </div>
        <div class="box_di1">
            <div id="demo" class="carousel slide" data-ride="carousel"
                 style="width: 700px;margin: 50px auto auto 120px;float: left">
                <!-- 指示符 -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <!-- 轮播图片 -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/tb1.jpg">
                    </div>
                    <div class="carousel-item">
                        <img src="img/tb2.jpg">
                    </div>
                    <div class="carousel-item">
                        <img src="img/tb3.jpg">
                    </div>
                </div>
                <!-- 左右切换按钮 -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <div class="img_a">
                <div>
                    <img src="img/tb_xtb1.png">
                </div>
                <div>
                    <img style="margin-top: 21px" src="img/tb_xtb2.png">
                </div>
                <div>
                    <img style="margin-top: 21px" src="img/tb_xtb3.png">
                </div>
                <div>
                    <img style="margin-top: 21px" src="img/tb_xtb4.png">
                </div>
            </div>
            <?php
            $sql = "select * from goods";
            $resylt = $mysqli->query($sql);
            ?>
            <?php
            if ($resylt->num_rows > 0) {
                while ($row = $resylt->fetch_assoc()) {
                    ?>
                    <div class="tab_context">
                        <ul class="tab_ul1">
                            <li>
                                <a id="a1" name="a1" class="pro-link" title="<?php echo $row["description"] ?>"
                                   href="good_detail.php?id=<?php echo $row["id"]?>;" target="_blank" sap-expo="true">
                                    <img class="lazy-loading" src="<?php echo $row["picture"] ?>">
                                    <p class="title"><?php echo $row["good_name"] ?></p>
                                    <p class="price-box">
                                    <span class="price">
                                        <i>¥</i>
                                        <em><?php echo $row["price"] ?></em>
                                    </span><span class="refprice"></span>
                                    </p>
                                    <p class="cxIcon">
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <?php
                }
            } else {
                echo "0个结果";
            }
            ?>
        </div>
    </div>
    <!-- 底部 -->
    <div class="bot_1">

    </div>
</div>
</body>
<?php
include 'gb_mysql.php';
?>
</html>