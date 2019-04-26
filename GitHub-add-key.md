1. 在Git Bash内执行cd ~/.ssh命令，如果存在该目录，表明之前生成果SSH Key，利用ll命令即可以查看。
2. 生成新的SSH Key，输入ssh-keygen -t rsa -C email@email.com命令，其中email@email.com是GitHub账号。
3. 在~/.ssh目录下有 id_rsa和 id_rsa.pub两个文件，其中id_rsa.pub文件里存放的即是公钥key。
4. 登录到GitHub，点击右上方的头像，选择settings ，点击Add SSH key，把id_rsa.pub的内容复制到里面即可。
5. 测试是否配置成功ssh -T git@github.com，如图即为配置成功。