# 日志文件说明：

1. /var/log/message 系统启动后的信息和错误日志，是 Red Hat Linux 中最常用的日志之一
2. /var/log/secure 与安全相关的日志信息
3. /var/log/maillog 与邮件相关的日志信息
4. /var/log/cron 与定时任务相关的日志信息
5. /var/log/spooler 与 UUCP 和 news 设备相关的日志信息
6. /var/log/boot.log 守护进程启动和停止相关的日志消息

# 系统：

1. uname -a # 查看内核/操作系统/CPU 信息
2. cat /etc/issue
3. cat /etc/redhat-release # 查看操作系统版本
   Enterprise Linux Enterprise Linux Server release 5.1 (Carthage)企业 Linux 服务器版本迦太基
4. cat /proc/cpuinfo # 查看 CPU 信息
5. hostname # 查看计算机名
6. lspci -tv # 列出所有 PCI 设备
7. lsusb -tv # 列出所有 USB 设备
8. lsmod # 列出加载的内核模块
9. env # 查看环境变量

# 资源：

1. free -m # 查看内存使用量和交换区使用量
2. df -h # 查看各分区使用情况
3. du -sh <目录名> # 查看指定目录的大小
4. grep MemTotal /proc/meminfo # 查看内存总量
5. grep MemFree /proc/meminfo # 查看空闲内存量
6. uptime # 查看系统运行时间、用户数、负载
7. cat /proc/loadavg # 查看系统负载

# 磁盘和分区：

1. mount | column -t # 查看挂接的分区状态
2. fdisk -l # 查看所有分区
3. swapon -s # 查看所有交换分区
4. hdparm -i /dev/hda # 查看磁盘参数(仅适用于 IDE 设备)
5. dmesg | grep IDE # 查看启动时 IDE 设备检测状况

# 网络：

1. ifconfig # 查看所有网络接口的属性
2. iptables -L # 查看防火墙设置
3. route -n # 查看路由表
4. netstat -lntp # 查看所有监听端口
5. netstat -antp # 查看所有已经建立的连接
6. netstat -s # 查看网络统计信息

# 进程：

1. ps -ef # 查看所有进程
2. top # 实时显示进程状态(另一篇文章里面有详细的介绍)

# 用户：

- w # 查看活动用户
- id <用户名> # 查看指定用户信息
- last # 查看用户登录日志
- cut -d: -f1 /etc/passwd # 查看系统所有用户
- cut -d: -f1 /etc/group # 查看系统所有组
- crontab -l # 查看当前用户的计划任务

# 服务：

- chkconfig –list # 列出所有系统服务
- chkconfig –list | grep on # 列出所有启动的系统服务

# 程序：

- rpm -qa # 查看所有安装的软件包
