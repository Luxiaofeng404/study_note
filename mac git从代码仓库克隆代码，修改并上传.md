# mac git从代码仓库克隆代码，修改并上传

```
提交步骤
step1：git add .
step2：git commit -m 'key'
step3：git push
```

1. 添加本地秘钥到代码仓库中

    `open ~/ .ssh`　　

    以github为例：

    mac 命令行输入open ~/ .ssh，打开id_rsa.pub文件中的内容，复制到github->settings，选择SSH and GPG keys，new SSH key，新建，任意输入一个名称，把复制内容加在下面保存即可。

2. 从github上的仓库中克隆代码

    `git clone git@github.com:xu-jinkai/vue-music.git`

    等待下载即可，过程中可能会遇到输入密码的问题

    `Enter passphrase for key '/Users/xujinkai/.ssh/id_rsa`

    我当时是用邮箱生成的，输入当时输入的密码即可，在命令行输入的过程中密码不会显示出来，输入完毕回车。

3. 修改任意文件，我修改了src/components/login/login.vue文件

    ```javascript
    // 命令行输入 git status 查看修改的内容
    git status
    // 输入git branch，查看本地当前分支
    git branch
    // 输入git branch -a，查看所有的分支情况
    git branch -a
    // 输入git add .，把所有文件添加到仓库
    git add .
    // git add src/components/login/login.vue，将login.vue文件添加到仓库中
    git add src/components/login/login.vue
    // 输入git commit -m '修改login.vue文件'，git commit，将文件提交到仓库，-m 后面跟上提交的说明
    git commit -m '修改login.vue文件'
    ```

4. pull远程分支到本地进行对比

    `git pull`

5. push本地修改到远程分支

    `git push`

6. 在react中使用Ant Design Pro时，commit时经常因为eslint检查不过关，导致commit提交失败。通过跳过eslint的代码检查，或者在项目里新建个.eslintignore文件，用来忽略检测的文件夹。

    `git commit --no-verify -m "commit"`

# 在把本地新建代码添加到指定代码仓库时的操作

1. 初始化版本库

    `git init`

2. 添加文件到缓存区

    `git add .`

3. 把添加的文件提交到版本库

    `git commit -m '提交到版本库'`

4. 本地代码关联远程代码仓库

    `git remote add origin 你的远程代码仓库地址`

5. 第一次推送到远程仓库

    `git push -u origin master`