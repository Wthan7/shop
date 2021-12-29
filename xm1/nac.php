<?php

class nac
{
    private $fwqdz;
    private $name;
    private $pwd;
    private $mysqlname;
    private $crater;

    public function onmysql($fwqdz,$name,$pwd,$mysqlname,$crater = 'utf-8'){
        $this->fwqdz = $fwqdz;
        $this->name = $name;
        $this->pwd = $pwd;
        $this->mysqlname = $mysqlname;
        $this->crater = $crater;

    }
    public function getcoid(){
        $conn = mysqli_connect($this->fwqdz,$this->name,$this->pwd);
        mysqli_select_db($conn,$this->mysqlname);
    }
}