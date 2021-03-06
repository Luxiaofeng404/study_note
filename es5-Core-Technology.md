# ES5核心技术

## 1. 立即执行函数

```javascript
(function(){...})()
(function(){...}())
```

## 2. 闭包

```javascript
闭包内部函数可以访问外部函数的变量，把函数返回出去
闭包可以保护内部的变量
闭包可以造成内存泄漏 ==null
```

## 3. 原型链

* 3.1 构造函数的属性的优先级比原型链的要高

* 3.2 面向对象编程的时候 JS没有类的概念 可以用函数替代

* 3.3 constructor 实际就是对应的那个函数

* 3.4 prototype 按引用传递 Object.create创建原型链的副本

## 4. 按值传递：数值 字符串 布尔类型； 按引用（址）传递：对象，数组，原型链(prototype)

## 5. 改变this的方法 call apply bind

## 6. 函数提示 变量提示 函数提示的级别比变量高

## 7. jQuery内部有很多经典的写法 模块化编程的概念>闭包

匿名函数

```javascript
(function(){
   var a;
   alert(a);
   a = 30;
)(); //undefined，变量提升；
```
undefind:声明未赋值

is not defind: 未声明

在函数内部声明的变量外部是无法访问的

原型链(prototype) 按引用(址)传递

构造函数比原型链优先级高
