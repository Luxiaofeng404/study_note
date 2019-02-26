## 你不知道的HTML

### 1. 什么是同源

相同协议 && 相同域名 && 相同端口

### 2. 浏览器不同的域名不能访问对应的cookie 但是内部的表单没有限制

### 3. 同源策略限制的对象（跨域）

* 3.1 Cookie,LocalStorage(超过5M会出现性能问题)和indexDB（5M），webSql（5M）无法获取
* 3.2 Dom不能获取
* 3.3 ajax请求不能发送

### 4. 如何设置同源策略（host）

```javascript
// test.xxx.com/a.html
<script>
  document.domain = 'example.com';
  document.cookie = "test1=hello";
</script>

// test2.xxx.com/b.html
<script>
  document.cookie
</script>

document.domain = 'baidu.com'; //设置同源策略

<script src="http://www.baidu.com/">
img src="https://www.baidu.com/img/xinshouye_7c5789a51e2bfd441c7fe165691b31a1.png"/> //测试网速
<iframe src="http://www.baidu.com/"></iframe>
```

### 5. 怎么突破同源策略

HTML标签：img iframe script(jsonp) link(background);

### 6. 实用div进行布局 不要用div进行无意义的包裹 span行内常见的元素

### 7. 尽量少写html(一个html最次最次顶三个元素)

* 7.1 减少浏览器渲染的时间
* 7.2 浪费整个文件大小

### 8. 高阶WebSocket postMessage(ifarame image)

代码写到image里面
