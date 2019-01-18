# study_note
study_note

1.什么是同源
相同协议
相同域名
相同端口

2.

3.同源策略限制的对象（跨域）
（1）Cookie,LocalStorage(5M)和indexDB（5M），webSql（5M）无法获取；
（2）Dom不能获取
（3）ajax不能请求

4.如何设置同源策略（host）
jsonp
<script src="http://www.baidu.com/">
<img src="http://www.baidu.com/"/> 测试网速
<iframe src="http://www.baidu.com/"></iframe>
  
document.domain='baidu.com'; //设置同源策略

总结：
html:img,iframe,script,link
css:background
