<?php
include 'conn.inc.php';
$mysqli = mysqli_connect(HOST,USER,PWD,DBNAME);
if ($mysqli ->connect_errno){
    die('数据库连接出现错误'.$mysqli ->connect_error);
}
$mysqli ->query('set names utf8');