## EcmaScript5.1 新增语法【上】

### 4.1 简介

添加了严格模式（use strict）

### 4.2 浏览器支持

```javascript
五大浏览器全部支持EcmaScript5.1
Opera 11.6，Internet Explorer 9+，Firefox 4，safari 5.1，Chrome 13
IE 9 不支持严格模式
```

### 4.3 严格模式(更可靠，更安全)

* 未声明的变量赋值抛出一个 ReferenceError，而不是创建一个全局变量
* 不止一次对对象字面量分配相同的属性回抛出 SyntaxError（未实现）
* 使用with语句抛出 SyntaxError

```javascript
“use strict”;

function test(){
	“use strict”;
	i = 1;
	alert(1);	
} 
```

### 4.4 JSON格式

```javascript
// ES5提供一个JSON对象，用来序列化（JSON.stringify）和反序列化（JSON.parse）对象为JSON格式。
JSON.parse(text, [, reviver]);
// 接收文本（JSON格式）然后转换成一个ECMAScript值。
JSON.stringify(value [, replacer [, space]]);
// 接收一个ECMAScript值然后转换成JSON格式字符串。
```

### 4.5 添加对象

```javascript
Object.is
Object.keys
Object.create
Object.observe
```

## EcmaScript5.1 【下】

### 5.1 额外的数组

```javascript
Array.indexOf
Array.lastIndexOf
Array.every
Array.some
Array.forEach
Array.map //处理数组中的所有的只并返回一个新的数组
Array.filter
Array.reduce
Array.reduceRight
Array.typeArray

Array.isArray(“No U”); // false
Array.isArray([“No”, “U”]); // true
```

### 5.2 function.prototype.bing

```javascript
function.prototype.bind(thisArg [, arg2, …]);
// 返回一个新的函数对象，该函数对象的this绑定到thisArg参数上。本质上讲，这允许你在其他对象链中执行有关函数。
function locate(){
  console.log(this.location);
}

function Maru(location){
  this.location = location;
}

var kitty = new Maru(“my location”);
// kitty就是this的改变者
var locateMaru = locate.bind(kitty);
// locate.apply(kitty);
// locate.call(kitty);
locateMaru();
// 在这个例子中，我们将Maru对象的上下文应用中location函数中。
// 因为location是个全局对象的属性，其this值就是全局对象（window）。
// 值这种情况下，我们向上寻找cat，并不是location对象，
// 以为我们可以通过绑定的总是kitty的this值创建一个新的方法locateMaru。
```

### 5.3 this指针的使用

```javascript
// 谁调他this就指谁

this.m = 100;

function test(){
  alert(this.m);
}
window.test();

this.m = 1000;
var obj = {
  m: 100,
  test: function(){
    alert(this.m);
    return function(){
      alert(this.m);
    }
  }
}

var t = obj.test();
window.t;
```

### 5.4 JavaScript作用域和闭包

* 变量未声明未赋值 Uncaught ReferenceError: i is not defined
* 变量声明未赋值 undefined
* js是函数级别作用域 在内部的变量 内部能访问 外部不能访问内部的 内部能访问外部的
* 闭包：他就是拿到本不该属于他的东西

```javascript
var j;
test();
j = 1000;
function test(){
  if (false) {
    var i = 10;
  }else{
    var t = 100;
  }
  console.log(j);
}

var j = 100;
function test(){
  var j;
  j = 10;
  var k = 1000;
  return function(){
    return k;
  }
  alert(j);
}
var t = test()();
alert(t);
```

### 5.5 按值传递和按引用传递

```javascript
function test(obj){
  // 这里对num这个变量创建了一个内存的副本
  // var num = num + 1;
  // return num;

  // 当前obj对内存的这个地址指向同一个
  obj.age = “20”;
  console.log(‘inner’, obj);
}
// var num = 1;
// alert(test(num)); // 2
// alert(num); // 1
var obj = {
  name: “xiaoming”
}
test(obj);
console.log(‘outer’, obj);

// 按引用传递: js对象 object array
// 按值引用: string number boolean
 ```
