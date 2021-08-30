# `PHP` 简介

## 什么是 `PHP`？
- `PHP` 是 "`PHP Hypertext Preprocessor`" 的首字母缩略词
- `PHP` 是一种被广泛使用的开源脚本语言
- `PHP` 脚本在服务器上执行
- `PHP` 没有成本，可供免费下载和使用

## `PHP` 是一门令人惊叹的流行语言！
- 它强大到足以成为在网络上最大的博客系统的核心（`WordPress`）！
- 它深邃到足以运行最大的社交网络（`facebook`）！
- 而它的易用程度足以成为初学者的首选服务器端语言！

## 什么是 `PHP` 文件？
- `PHP` 文件能够包含文本、`HTML`、`CSS` 以及 `PHP` 代码
- `PHP` 代码在服务器上执行，而结果以纯文本返回浏览器
- `PHP` 文件的后缀是 "`.php`"

## `PHP` 能够做什么？
- `PHP` 能够生成动态页面内容
- `PHP` 能够创建、打开、读取、写入、删除以及关闭服务器上的文件
- `PHP` 能够接收表单数据
- `PHP` 能够发送并取回 `cookies`
- `PHP` 能够添加、删除、修改数据库中的数据
- `PHP` 能够限制用户访问网站中的某些页面
- `PHP` 能够对数据进行加密

通过 `PHP`，您可以不受限于只输出 `HTML`。您还能够输出图像、`PDF` 文件、甚至 `Flash` 影片。您也可以输出任何文本，比如 `XHTML` 和 `XML`。

## 为什么使用 `PHP`？
- `PHP` 运行于各种平台（`Windows`, `Linux`, `Unix`, `Mac OS X` 等等）
- `PHP` 兼容几乎所有服务器（`Apache`, `IIS` 等等）
- `PHP` 支持多种数据库
- `PHP` 是免费的。请从官方 `PHP` 资源下载：[官网](www.php.net)
- `PHP` 易于学习，并可高效地运行在服务器端

<hr>

# `PHP` 语法
> `PHP` 脚本在服务器上执行，然后向浏览器发送回纯 `HTML` 结果

## 基础 `PHP` 语法
> `PHP` 脚本可放置于文档中的任何位置。

`PHP` 脚本以 `<?php` 开头，以 `?>` 结尾：
```php
<?php
// 此处是 PHP 代码
?>
```
`PHP` 文件的默认文件扩展名是 "`.php`"。
`PHP` 文件通常包含 `HTML` 标签以及一些 `PHP` 脚本代码。
下面的例子是一个简单的 `PHP` 文件，其中包含了使用内建 `PHP` 函数 "`echo`" 在网页上输出文本 "`Hello World!`" 的一段 `PHP` 脚本：
```html
<!DOCTYPE html>
<html>
<body>

<h1>我的第一张 PHP 页面</h1>

<?php
echo "Hello World!";
?>

</body>
</html>
```
**注释：**`PHP` 语句以分号结尾（`;`）。`PHP` 代码块的关闭标签也会自动表明分号（因此在 `PHP` 代码块的最后一行不必使用分号）

## `PHP` 中的注释
> `PHP` 代码中的注释不会被作为程序来读取和执行。它唯一的作用是供代码编辑者阅读。

注释用于：
- 使其他人理解您正在做的工作 - 注释可以让其他程序员了解您在每个步骤进行的工作（如果您供职于团队）
- 提醒自己做过什么 - 大多数程序员都曾经历过一两年后对项目进行返工，然后不得不重新考虑他们做过的事情。注释可以记录您在写代码时的思路。

### `PHP` 支持三种注释
```html
<!DOCTYPE html>
<html>
<body>

<?php
// 这是单行注释

# 这也是单行注释

/*
这是多行注释块
它横跨了
多行
*/
?>

</body>
</html>
```

## `PHP` 大小写敏感
> 在 `PHP` 中，所有**用户定义的函数、类和关键词（例如 `if`、`else`、`echo` 等等）都对大小写不敏感**。

在下面的例子中，所有这三条 `echo` 语句都是合法的（等价）：
```html
<!DOCTYPE html>
<html>
<body>

<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>

</body>
</html>
```
不过在 `PHP` 中，所有**变量都对大小写敏感**。

在下面的例子中，只有第一条语句会显示 `$color` 变量的值（这是因为 `$color`、`$COLOR` 以及 `$coLOR` 被视作三个不同的变量）：
```html
<!DOCTYPE html>
<html>
<body>

<?php
$color="red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>

</body>
</html>
```





















