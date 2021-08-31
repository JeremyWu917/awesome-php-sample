# `PHP` `echo` 和 `print` 语句
> 在 `PHP` 中，有两种基本的输出方法：`echo` 和 `print`

## `PHP` `echo` 和 `print` 语句
`echo` 和 `print` 之间的差异：
- `echo` - 能够输出一个以上的字符串
- `print` - 只能输出一个字符串，并始终返回 `1`

提示：`echo` 比 `print` 稍快，因为它不返回任何值

### `PHP` `echo` 语句
`echo` 是一个语言结构，有无括号均可使用：`echo` 或 `echo()`。

#### 显示字符串
下面的例子展示如何用 `echo` 命令来显示不同的字符串（同时请注意字符串中能包含 `HTML` 标记）
```php
<?php
  echo "<h2>PHP is fun!</h2>";
  echo "Hello world!<br>";
  echo "I'm about to learn PHP!<br>";
  echo "This", " string", " was", " made", " with multiple parameters.";
?>
```

#### 显示变量
下面的例子展示如何用 `echo` 命令来显示字符串和变量：
```php
<?php
  $txt1="Learn PHP";
  $txt2="github";
  $cars=array("Volvo","BMW","SAAB");

  echo $txt1;
  echo "<br>";
  echo "Study PHP at $txt2";
  echo "My car is a {$cars[0]}";
?>
```

### `PHP` `print` 语句
>`print` 也是语言结构，有无括号均可使用：`print` 或 `print()`。

#### 显示字符串
下面的例子展示如何用 `print` 命令来显示不同的字符串（同时请注意字符串中能包含 `HTML` 标记）
```php
<?php
  print "<h2>PHP is fun!</h2>";
  print "Hello world!<br>";
  print "I'm about to learn PHP!";
?>
```

#### 显示变量
