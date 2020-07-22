# Linux基础入门

## 3.1 Linux操作系统介绍

## 3.2 Linux和虚拟机基本安装步骤

## 3.3 Linux基本命令
  1. ls 查看目录
  2. cd 切换目录
  3. cp 复制文件
  4. pwd 定位当前目录位置
  5. rm 删除文件和目录
  6. mkdir 创建目录
  7. chomd -R 777 basic 循环修改目录的权限
  8. scp -r dir/ root@39.105.218.165:/home/wwwroot/tsenglishdev-back 前端代码上传服务器
  9. useradd luxf 添加用户
  10. passwd luxf 修改密码
  11. su root 切换登录用户

## 3.4 windows命令行
1. dir 查看当前目录下的文件和目录
2. cd 切换目录
3. md 创建目录
4. cd.. 返回上一级目录
5. copy 复制文件
6. del 删除文件
7. rename 重命名文件

## 3.5 Cygwin安装与使用
1. windows环境下模拟Linux系统的工具

## 3.6 Linux的安装与基本命令

## 3.7 web服务器基础原理和概念

# 【预读班**新**】操作系统与后端语言核心知识

## 远程登录Linux

* Windows环境下的工具

1. putty(免费开源的)
2. xshell(商业收费)
3. 在cmder终端环境下使用ssh命令

* Linux和MacOS环境下

1. ssh

## 重要的常用Linux命令

* 行编辑器 vi/vim

1. a i 进入插入模式
2. Esc命令模式
3. :wq 保存并退出
4. /open 检索open字符 n向下找 shift+n向上找

* 服务管理命令 systemctl
* 网络管理 ifconfig、ip命令、router
* 命令行下载命令 curl、wget
1. wget www.baidu.com 下载百度首页
2. curl www.baidu.com 下载百度首页的文本
* 怎样查看Linux命令的帮助
* 在终端下不小心 Ctrl+s了怎么办？
* 通过‘rpm -ql nginx’ 指令查看nginx都安装到了哪些目录

## Linux终端快捷键

1. Ctrl+C 结束正在运行的程序 【ping、telnet等】
2. Ctrl+S 暂停屏幕输出
3. Ctrl+Q 恢复屏幕输出
4. Ctrl+A 光标移动到行首
5. Ctrl+E 光标移动到行尾
6. Ctrl+L 清屏，等同于clear

## 理解面向对象

* 面向对象的三大特征 
1. 封装
2. 继承
3. 多态
* 面向过程是一件事“该怎么做”，面向对象是一件事“该谁来做”，然后那个“谁”就是对象，他要怎么做是他自己的事，反正最后一群对象合力能把事做好就行了。

