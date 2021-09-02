# `PHP` 文件处理

## PHP 操作文件
> `PHP` 拥有的多种函数可供创建、读取、上传以及编辑文件。

**注意**：请谨慎操作文件！

当您操作文件时必须非常小心。如果您操作失误，可能会造成非常严重的破坏。常见的错误是：
- 编辑错误的文件
- 被垃圾数据填满硬盘
- 意外删除文件内容

### `PHP` `readfile` 函数
`readfile()` 函数读取文件，并把它写入输出缓冲。
如下为 `webdictionary.txt` 源文件：
```txt
AJAX = Asynchronous JavaScript and XML
CSS = Cascading Style Sheets
HTML = Hyper Text Markup Language
PHP = PHP Hypertext Preprocessor
SQL = Structured Query Language
SVG = Scalable Vector Graphics
XML = EXtensible Markup Language
```
读取此文件并写到输出流的 `PHP` 代码如下（如读取成功则 `readfile()` 函数返回字节数）：

**实例**
```php
<?php
  echo readfile("webdictionary.txt") . "<br>";
?>
```

### `PHP` 文件打开/读取/关闭
#### `PHP Open File - fopen()`
打开文件的更好的方法是通过 `fopen()` 函数。此函数为您提供比 `readfile()` 函数更多的选项。
`fopen()` 的第一个参数包含被打开的文件名，第二个参数规定打开文件的模式。
**注意**：如果 `fopen()` 函数未能打开指定的文件，下面的例子会生成一段消息：
```php
<?php
  $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
  echo fread($myfile,filesize("webdictionary.txt"));
  fclose($myfile);
?>
```
使用 `fread()` 以及 `fclose()` 函数，源文件会以如下模式之一打开：
模式|描述
-|-
`r`|打开文件为只读。文件指针在文件的开头开始。
`w`|打开文件为只写。删除文件的内容或创建一个新的文件，如果它不存在。文件指针在文件的开头开始。
`a`|打开文件为只写。文件中的现有数据会被保留。文件指针在文件结尾开始。创建新的文件，如果文件不存在。
`x`|创建新文件为只写。返回 FALSE 和错误，如果文件已存在。
`r+`|打开文件为读/写、文件指针在文件开头开始。
`w+`|打开文件为读/写。删除文件内容或创建新文件，如果它不存在。文件指针在文件开头开始。
`a+`|打开文件为读/写。文件中已有的数据会被保留。文件指针在文件结尾开始。创建新文件，如果它不存在。
`x+`|创建新文件为读/写。返回 FALSE 和错误，如果文件已存在。

#### `PHP` 读取文件 - `fread()`
> `fread()` 函数读取打开的文件。

`fread()` 的第一个参数包含待读取文件的文件名，第二个参数规定待读取的最大字节数。
如下 `PHP` 代码把 `"webdictionary.txt"` 文件读至结尾：
```php
fread($myfile,filesize("webdictionary.txt"));
```
#### `PHP` 关闭文件 - `fclose()`
> `fclose()` 函数用于关闭打开的文件。

**注释**：用完文件后把它们全部关闭是一个良好的编程习惯。您并不想打开的文件占用您的服务器资源。
`fclose()` 需要待关闭文件的名称（或者存有文件名的变量）：
```php
<?php
  $myfile = fopen("webdictionary.txt", "r");
  // some code to be executed....
  fclose($myfile);
?>
```
#### `PHP` 读取单行文件 - `fgets()`
> `fgets()` 函数用于从文件读取单行。

下例输出 `"webdictionary.txt"` 文件的首行：
```php
<?php
  $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
  echo fgets($myfile);
  fclose($myfile);
?>
```
**注释**：调用 `fgets()` 函数之后，文件指针会移动到下一行。

#### `PHP` 检查 `End-Of-File - feof()`
> `feof()` 函数检查是否已到达 `"end-of-file"` (`EOF`)。

`feof()` 对于遍历未知长度的数据很有用。
下例逐行读取 `"webdictionary.txt"` 文件，直到 `end-of-file`：
```php
<?php
  $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
  // 输出单行直到 end-of-file
  while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
  }
  fclose($myfile);
?>
```

#### `PHP` 读取单字符 - `fgetc()`
> `fgetc()` 函数用于从文件中读取单个字符。

下例逐字符读取 `"webdictionary.txt"` 文件，直到 `end-of-file`：
```php
<?php
  $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
  // 输出单字符直到 end-of-file
  while(!feof($myfile)) {
    echo fgetc($myfile);
  }
  fclose($myfile);
?>
```
**注释**：在调用 `fgetc()` 函数之后，文件指针会移动到下一个字符。

## `PHP` 文件创建/写入
> `PHP` 创建文件 - `fopen()`,`fopen()` 函数也用于创建文件。也许有点混乱，但是在 `PHP` 中，创建文件所用的函数与打开文件的相同。

如果您用 `fopen()` 打开并不存在的文件，此函数会创建文件，假定文件被打开为写入（`w`）或增加（`a`）。
下面的例子创建名为 `"testfile.txt"` 的新文件。此文件将被创建于 `PHP` 代码所在的相同目录中：
`$myfile = fopen("testfile.txt", "w")`

## `PHP` 文件权限
如果您试图运行这段代码时发生错误，请检查您是否有向硬盘写入信息的 `PHP` 文件访问权限。

## `PHP` 写入文件 - `fwrite()`
> `fwrite()` 函数用于写入文件。

`fwrite()` 的第一个参数包含要写入的文件的文件名，第二个参数是被写的字符串。

下面的例子把姓名写入名为 `"newfile.txt"` 的新文件中：
```php
<?php
  $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
  $txt = "Bill Gates\n";
  fwrite($myfile, $txt);
  $txt = "Steve Jobs\n";
  fwrite($myfile, $txt);
  fclose($myfile);
?>
```

## `PHP` 覆盖（`Overwriting`）
> 如果现在 `"newfile.txt"` 包含了一些数据，我们可以展示在写入已有文件时发生的的事情。所有已存在的数据会被擦除并以一个新文件开始。

在下面的例子中，我们打开一个已存在的文件 `"newfile.txt"`，并向其中写入了一些新数据：
```php
<?php
  $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
  $txt = "Mickey Mouse\n";
  fwrite($myfile, $txt);
  $txt = "Minnie Mouse\n";
  fwrite($myfile, $txt);
  fclose($myfile);
?>
```



