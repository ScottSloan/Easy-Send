<?php 
/*
By Ivan Hanloth
本文件为易传首页文件
2022/2/26
*/
include "config.php";
include "common.php";

//检查是否配置数据库
if ($dbpath == ""or $dbport == ""or $dbaccount == ""or $dbpassword == ""or $dbname == "") {
    echo("数据库配置错误，请检查网站配置文件");
} else{
     $db = mysqli_connect($dbpath, $dbaccount, $dbpassword, $dbname);
    if(!$db) {
        die('无法连接至数据库，请检查网站配置文件');
    } else {
        if(isset($template)==false or $template == "" or !is_dir("./template/".$template)){
            $template="default";
        }
        require "./template/".$template."/header.php";
        require "./template/".$template."/body.php";
        require "./template/".$template."/footer.php";
  };
};
?>