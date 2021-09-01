# `PHP` 日期和时间
> `PHP` `date()` 函数用于对日期或时间进行格式化，把时间戳格式化为更易读的日期和时间

**语法**
`date(format, timestamp)`
参数|描述
-|-
`format`|必需，规定时间戳的格式
`timestamp`|可选，默认是当前时间和日期

**注释**：时间戳是一种字符序列，它表示具体事件发生的日期和事件。

## 获得简单的日期
`date()` 函数的格式参数是必需的，它们规定如何格式化日期和时间
常见的日期字符：
- `d` - 表示月里的某天（01-31）
- `m` - 表示月（01-12）
- `Y` - 表示年（四位数）
- `1` - 表示周里的某天

下面的例子用三种不同方法格式今天的日期：

**实例**
```php
<?php
  echo "今天是 " . date("Y/m/d") . "<br>";
  echo "今天是 " . date("Y.m.d") . "<br>";
  echo "今天是 " . date("Y-m-d") . "<br>";
  echo "今天是 " . date("l");
?>
```
## `PHP` 提示 - 自动版权年份
使用 `date()` 函数在您的网站上自动更新版本年份：

**实例**
```php
© 2010-<?php echo date("Y")?>
```

## 获得简单的时间
常见用于时间的字符：
- `h` - 带有首位零的 12 小时的小时格式
- `i` - 带有首位零的分钟
- `s` - 带有首位零的秒(00-59)
- `a` - 小写的午前和午后(`am`或`pm`)

**实例**
```php
<?php
  echo "现在时间是 " . date("h:i:sa");
?>
```
**注释**：请注意 `PHP` `date()` 函数会返回服务器的当前日期/时间!

## 获得时区
如果从代码返回的不是正确的时间，有可能是因为您的服务器位于其他国家或者被设置为不同时区。

因此，如果您需要基于具体位置的准确时间，您可以设置要用的时区。

下面的例子把时区设置为 `"Asia/Shanghai"`，然后以指定格式输出当前时间：

**实例**
```php
<?php
  date_default_timezone_set("Asia/Shanghai");
  echo "当前时间是 " . date("h:i:sa");
?>
```

## 通过 `PHP` `mktime()` 创建日期
`date()` 函数中可选的时间戳参数规定时间戳。如果您未规定时间戳，将使用当前日期和时间（正如上例中那样）。

`mktime()` 函数返回日期的 `Unix` 时间戳。`Unix` 时间戳包含 `Unix` 纪元（`1970 年 1 月 1 日 00:00:00 GMT`）与指定时间之间的秒数。

**语法**
`mktime(hour,minute,second,month,day,year)`
下面的例子使用 `mktime()` 函数中的一系列参数来创建日期和时间：

**实例**
```php
<?php
  $d=mktime(9, 12, 31, 6, 10, 2015);
  echo "创建日期是 " . date("Y-m-d h:i:sa", $d);
?>
```

## 通过 `PHP` `strtotime()` 用字符串来创建日期
> `PHP` `strtotime()` 函数用于把人类可读的字符串转换为 `Unix` 时间。

**语法**
`strtotime(time,now)`
下面的例子通过 `strtotime()` 函数创建日期和时间：
**实例**
```php
<?php
  $d=strtotime("10:38pm April 15 2015");
  echo "创建日期是 " . date("Y-m-d h:i:sa", $d);
?>
```

`PHP` 在将字符串转换为日期这方面非常聪明，所以您能够使用各种值：
**实例**
```php
<?php
  $d=strtotime("tomorrow");
  echo date("Y-m-d h:i:sa", $d) . "<br>";

  $d=strtotime("next Saturday");
  echo date("Y-m-d h:i:sa", $d) . "<br>";

  $d=strtotime("+3 Months");
  echo date("Y-m-d h:i:sa", $d) . "<br>";
?>
```
**不过**，`strtotime()` 并不完美，所以请记得检查放入其中的字符串。










