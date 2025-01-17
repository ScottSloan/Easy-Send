<img src="https://ivan.hanloth.cn/usr/uploads/2022/04/1858371694.png" style="width:30%">  

![version](https://img.shields.io/github/v/release/IvanHanloth/Easy-Send) ![License](https://img.shields.io/badge/License-MIT-green)

## 简介
一个简易的用于跨设备、跨平台传输文件或文本的程序。
## 演示站
https://send.hanloth.cn/
## 环境依赖
PHP 5.6+、MySQL 5.5+
## 功能
* 上传文件、文本至服务器临时保存
* 通过提取码提取临时存储的文本
* 定时、定次自动删除过期数据
## 使用方法
* 上传源码至根目录
* 导入install目录下data.sql至数据库并填写config.php
* 如需实现文件过期自动清理，需监控以下网址:域名/cron.php（频率1分钟/次-5分钟/次）
* 推荐监控网站:https://yrw.hanloth.cn/
## 演示
![](https://img.hanloth.cn/?/images/2022/04/05/1bRPxMEqYW/Screenshot_2022_0405_163158.png)
![](https://img.hanloth.cn/?/images/2022/04/05/HrjBW6rSOD/Screenshot_2022_0405_163231.png)
## ToDo
 - [x] APP对接接口
 - [x] 自定义文件大小限制
 - [x] 提取时禁止输入空格
 - [x] 自动识别提取码
 - [x] 二维码分享
 - [ ] 阅后即焚
 - [ ] 一键安装
 - [ ] 自定义可上传文件类型
 - [ ] APP开发
 - [ ] 优化文本存储机制
 - [ ] 新增模板
## 联系作者
* QQ:1580272392
* Email:ivan@hanloth.com
* Blog:https://ivan.hanloth.cn/
## 引用
程序中使用了layui框架中的部分模块
## 更新日志
#### V1.3（更新于2022/4/23）
- 新增提取页面二维码功能
- 新增直接传入key功能
- 新增robot.txt
- 新增自定义文件上传大小限制、文本上传大小限制
- 新增提取码输入框禁止输入空格功能
- 新增过期文件延缓删除功能
- 修复文件达到查看次数时，最后一次无法访问的Bug
- 优化部分代码命名
#### V1.2（更新于2022/4/16）
- 全面重构目录结构，便于后续开发
- 新增模板设置功能
- 新增对于多平台客户端的适配
- 新增自定义文件过期时间
- 修复sql不区分大小写查询的问题
- 合并原按功能分类的js
#### V1.1（更新于2022/4/11）
- 修复监控无效问题
- 修复上传失败返回状态码“200”导致提示出错问题
- 新增自定义文件可查看次数功能
- 新增文件分月存储功能
