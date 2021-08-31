# `PHP` 字符串函数

## `PHP` `strlen()` 函数
> `strlen()` 函数返回字符串的长度，以字符计。

下例返回字符串 `"Hello world!"` 的长度：

**实例**
```php
<?php
  echo strlen("Hello world!");
?>
```
**提示**：`strlen()` 常用于循环和其他函数，在确定字符串何时结束很重要时。（例如，在循环中，我们也许需要在字符串的最后一个字符之后停止循环）。

## 对字符串中的单词计数
> `PHP` `str_word_count()` 函数对字符串中的单词进行计数：

**实例**
```php
<?php
  echo str_word_count("Hello world!"); // 输出 2
?>
```

## 反转字符串
> `PHP` `strrev()` 函数反转字符串：

**实例**
```php
<?php
  echo strrev("Hello world!"); // 输出 !dlrow olleH
?>
```

## `PHP` `strpos()` 函数
> `strpos()` 函数用于检索字符串内指定的字符或文本。

如果找到匹配，则会返回首个匹配的字符位置。如果未找到匹配，则将返回 `FALSE`。

下例检索字符串 `"Hello world!"` 中的文本 `"world"`：

**实例**
```php
<?php
  echo strpos("Hello world!","world");
?>
```

## 替换字符串中的文本
> `PHP` `str_replace()` 函数用一些字符串替换字符串中的另一些字符。

下面的例子用 `"Kitty"` 替换文本 `"world"`：

**实例**
```php
<?php
  echo str_replace("world", "Kitty", "Hello world!"); // 输出 Hello Kitty!
?>
```