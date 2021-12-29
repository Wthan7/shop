<?php
session_start();
include 'mysqli.php';
$good_id = $_REQUEST["id"];
?>
<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>商品</title>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.3.2.js"></script>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<style>
    .body {
        border-top: solid 2px hotpink;
        width: 1200px;
        height: 900px;
        margin: auto;
        background: #f5f5f5;
    }

    .img_1 {
        margin-top: 50px;
    }

    .name_1 {
        margin: 20px auto auto 50px;
        font-size: 18px;
        color: red;
    }
    .price_1{
        position: absolute;
        top: 210px;
        left: 750px;
        margin: 50px auto auto 50px;
    }
</style>
<body>
<!-- 头部 -->
<?php
include 'harder.php';
?>
<?php
$sql = "select * from goods where id = '$good_id'";
$requli = $mysqli->query($sql);
if ($requli->num_rows > 0) {
    while ($row = $requli->fetch_assoc()) {
        ?>
            <div class="body">
                <div class="img_1" style="float: left">
                    <a class="pro-link" title="<?php echo $row["description"] ?>">
                        <img class="lazy-loading" src="<?php echo $row["picture"] ?>">
                </div>
                <div style="float: left;border: solid 2px #ff9000;width: 790px;height: 400px;margin-top: 50px">
                    <p class="name_1"><?php echo $row["good_name"] ?></p>
                    <span style="margin:  50px auto auto 50px;display: block;" class="price">
                        <p>商品价格：</p>
                        <i style="color: red;font-size: 24px">¥</i>
                        <em style="color: red;font-size: 24px"><?php echo $row["price"] ?></em>
                        </span><span class="refprice"></span>
                    <span class="refprice"></span>
                    <p style="margin:  50px auto auto 50px;">商品介绍：<?php echo $row["description"] ?></p>
                    <p style="margin:  50px auto auto 50px;">数量：</p>
                    <input style="margin:auto auto auto 50px; " type="button" value="-">
                    <input type="text">
                    <input type="button" value="+">
                </div>
            </div>
        <?php
    }
} else {
    echo "错误哦";
}
?>
</body>