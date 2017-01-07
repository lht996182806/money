<?php
class  DBHelper{
    private $serverName;
    private $userName;
    private $userPwd;
    private $dbName;
    private $link;
    function __construct(){
        $this->serverName="localhost";
        $this->userName="root";
        $this->userPwd="jj19900301";
        $this->dbName="weipan";
    }

    function ConnectDB(){

        $this->link= mysql_connect($this->serverName,$this->userName,$this->userPwd)
        or die("数据库连接失败".mysql_error());

        mysql_select_db($this->dbName) or die("找不到指定数据库".mysql_error());
    }
    function ExecuteDML($sql){
        mysql_query("set names utf8");
        $res=mysql_query($sql);
        if($res){
            $affectedRows=mysql_affected_rows($this->link);
            if($affectedRows==1){

                return true;
            }
            else {
                return false;
            }
        }
        else{

            return false;
        }

    }

    function ExecuteDQL($sql){
        mysql_query("set names gbk");
        $res=mysql_query($sql);
        $array="";
        if($res){
            $rows=mysql_num_rows($res);
            if($rows){
                while(($arr=mysql_fetch_array($res))!=false){
                    $array[]=$arr;

                }
                return $array;

            }
            else{

                return false;
            }

        }
        else{

            return false;
        }

    }
}
?>