# Learn Git (分布式版本控制系统)

## 创建与合并分支：Git鼓励大量使用分支
1. 查看分支：git branch
2. 创建分支：git branch <name>
3. 切换分支：git checkout <name>或者git switch <name>
4. 创建+切换分支：git checkout -b <name>或者git switch -c <name>
5. 合并某分支到当前分支：git merge <name>
6. 删除分支：git branch -d <name>
7. 推送本地分支到远端分支：git push origin local_branch:remote_branch
8. 一git commit -a -m lxf; git pull origin FD-Develop; git push; git push origin FD-Develop-lxf:FD-Develop

## 解决冲突：
1. 当Git无法自动合并分支时，就必须首先解决冲突。解决冲突后，再提交，合并完成。
2. 解决冲突就是把Git合并失败的文件手动编辑为我们希望的内容，再提交。
3. 用git log --graph命令可以看到分支合并图。

## 分支管理策略：
1. Git分支十分强大，在团队开发中应该充分应用。
2. 合并分支时，加上--no-ff参数就可以用普通模式合并，合并后的历史有分支，能看出来曾经做过合并，而fast forward合并就看不出来曾经做过合并。

## bug分支：
1. 修复bug时，我们会通过创建新的bug分支进行修复，然后合并，最后删除；
2. 当手头工作没有完成时，先把工作现场git stash一下，然后去修复bug，修复后，再git stash pop，回到工作现场；
3. 在master分支上修复的bug，想要合并到当前dev分支，可以用git cherry-pick <commit>命令，把bug提交的修改“复制”到当前分支，避免重复劳动。

## Featuer分支：
1. 开发一个新feature，最好新建一个分支；
2. 如果要丢弃一个没有被合并过的分支，可以通过git branch -D <name>强行删除

## 多人协作：
1. 查看远程库信息，使用git remote -v；
2. 本地新建的分支如果不推送到远程，对其他人就是不可见的；
3. 从本地推送分支，使用git push origin branch-name，如果推送失败，先用git pull抓取远程的新提交；
4. 在本地创建和远程分支对应的分支，使用git checkout -b branch-name origin/branch-name，本地和远程分支的名称最好一致；
5. 建立本地分支和远程分支的关联，使用git branch --set-upstream-to=origin/<branch> dev；
6. 从远程抓取分支，使用git pull，如果有冲突，要先处理冲突。 
Rebase：
1. rebase操作可以把本地未push的分叉提交历史整理成直线；
2. rebase的目的是使得我们在查看历史提交的变化时更容易，因为分叉的提交需要三方对比。

## 配置别名：
1. git config --global alias.co checkout
2. git config --global alias.ci commit
3. git config --global alias.br branch