<?php /*
By Ivan Hanloth
本文件为易传模板引用文件
2022/4/3
*/
?>
    <div class="main">
        <div class="layui-tab layui-tab-card" lay-filter="tab">
         <ul class="layui-tab-title">
          <li class="layui-this" lay-id="file">文件传输</li>
          <li lay-id="text">文字传输</li>
          <li lay-id="get">数据提取</li>
         </ul>
         <div class="layui-tab-content" style="height: 275px;">
          <div class="layui-tab-item layui-show">
           <?php
           require "file.php";
           ?>
          </div>
          <div class="layui-tab-item">
            <?php
           require "text.php";
           ?>
          </div>
          <div class="layui-tab-item">
        <?php require"get.php";?>
          </div>
         </div>
        </div>
        </div>