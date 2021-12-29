<?php
session_start();
$conn= mysqli_connect("localhost","root","root");
$msg = array(1,2,3,4,5,6,7,8);
if ($conn){
    $seclect = mysqli_select_db($conn,"test");
        $name = trim($_POST["name"]);
        $pwd = trim($_POST["pwd"]);
        $re_pwd = trim($_POST["pwds"]);
        $yzm = trim($_POST['yzm']);
        if ($yzm != $_SESSION['yzm']){
            echo $msg[0];
            exit();
        }
        if ($pwd == $re_pwd){
            mysqli_set_charset($conn,'utf-8');
            $sql_select = "select * from TestUser where User = '$name'";
            $relect = mysqli_query($conn,$sql_select);
            $num = mysqli_fetch_row($relect);
        }else{
            echo $msg[1];
            exit();
        }
        if ($num){
            echo $msg[2];
            exit();
        }else{
            $sql_insert = "insert into TestUser(User,Password) value ('$name','$pwd')";
            $ret  = mysqli_query($conn,$sql_insert);
            echo $msg[3];
        }
    }
    mysqli_close($conn);