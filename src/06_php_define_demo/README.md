# `PHP` 常量
> 常量类似变量，但是常量一旦被定义就无法更改或撤销定义

## PHP 常量
常量是单个值的标识符（名称）。在脚本中无法改变该值。
有效的常量名以字符或下划线开头（常量名称前面没有 `$` 符号）。
**注释：**与变量不同，常量贯穿整个脚本是自动全局的。

## 设置 PHP 常量
> 如需设置常量，请使用 `define()` 函数 - 它使用三个参数：

1. 首个参数定义常量的名称
2. 第二个参数定义常量的值
3. 可选的第三个参数规定常量名是否对大小写不敏感。默认是 `false`。

下例创建了一个对**大小写敏感的常量**，值为 "Welcome to GitHub !"：
```php
<?php
  define("GREETING", "Welcome to GitHub !");
  echo GREETING;
?>
```
下例创建了一个对**大小写不敏感的常量**，值为 "Welcome to GitHub !"：
```php
<?php
  define("GREETING", "Welcome to GitHub !", true);
  echo GREETING;
?>
```

## 常量是全局的
> 常量是自动全局的，而且可以贯穿整个脚本使用。

下面的例子在函数内使用了一个常量，即使它在函数外定义：

**实例**
```php
<?php
  define("GREETING", "Welcome to GitHub !");

  function myTest() {
      echo GREETING;
  }
  
  myTest();
?>
```