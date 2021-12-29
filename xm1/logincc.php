<?php

$conn = mysqli_connect("localhost", "root", "root");
$tt = array(1,2);
if ($conn) {
    $seclect = mysqli_select_db($conn, "test");
        $name = trim($_POST['yhm']);
        $pwd = trim($_POST['pwdd']);
        $uid = '';
        if ($name != "" || $pwd != "") {
            mysqli_set_charset($conn, "utf-8");
            $sql_select = "select * from testuser where User = '$name' and Password = '$pwd'";
            $relct =$conn ->query($sql_select);
        }
        if ($relct -> num_rows > 0) {
            while ($row = $relct->fetch_assoc()){
                $uid = $row['id'];
                $_SESSION['uid'.$uid]=$uid;
            }
            echo $tt[0];
            exit();
        }
    }