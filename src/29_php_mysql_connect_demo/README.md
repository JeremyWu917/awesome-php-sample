# `PHP MySQL` 连接数据库
> 免费的 `MySQL` 数据库通常是通过 `PHP` 来使用的。

## 连接到一个 `MySQL` 数据库
在您能够访问并处理数据库中的数据之前，您必须创建到达数据库的连接。

在 `PHP` 中，这个任务通过 `mysqli_connect()` 函数完成。

**语法**
`mysqli_connect(servername,username,password);`
参数|描述
-|-
`servername`|可选。规定要连接的服务器。默认是 `"localhost:3306"`。
`username`|可选。规定登录所使用的用户名。默认值是拥有服务器进程的用户的名称。
`password`|可选。规定登录所用的密码。默认是 ""。

**注释**：虽然还存在其他的参数，但上面列出了最重要的参数。

**例子**
在下面的例子中，我们在一个变量中 (`$con`) 存放了在脚本中供稍后使用的连接。如果连接失败，将执行 `"die"` 部分：
```PHP
<?php
  $con = mysqli_connect("localhost","peter","abc123");
  if (!$con)
  {
    die('Could not connect: ' . mysqli_error($GLOBALS[$con]));
  }
  // some code
?>
```
**关闭连接**
脚本一结束，就会关闭连接。如需提前关闭连接，请使用 `mysqli_close()` 函数。
```php
<?php
  $con = mysqli_connect("localhost","peter","abc123");
  if (!$con)
  {
    die('Could not connect: ' . mysqli_error($GLOBALS[$con]));
  }
  // some code
  mysqli_close($con);
?>
```



# 重要说明 - 2021-09-03
> `PHP 5` 及以上版本建议使用以下方式连接 `MySQL` :

- `MySQLi extension` (`"i"` 意为 `improved`)
- `PDO` (`PHP Data Objects`)

在 `PHP` 早起版本中我们使用 `MySQL` 扩展。但该扩展在 `2012` 年开始不建议使用。

## 我是该用 `MySQLi` ，还是 `PDO`?
> 如果你需要一个简短的回答，即 "你习惯哪个就用哪个"。

### `MySQLi` 和 `PDO` 有它们自己的优势：
`PDO` 应用在 `12` 种不同数据库中， `MySQLi` 只针对 `MySQL` 数据库。
所以，如果你的项目需要在多种数据库中切换，建议使用 `PDO` ，这样你只需要修改连接字符串和部分查询语句即可。使用 `MySQLi`, 如果不同数据库，你需要重新所有代码，包括查询。
两者都是面向对象, 但 `MySQLi` 还提供了 `API` 接口。
两者都支持预处理语句。 预处理语句可以防止 `SQL` 注入，对于 `web` 项目的安全性是非常重要的。

`MySQLi` 连接实例
```php
<?php
$servername = "localhost";
$username = "username";
$password = "password";

// 创建连接
$conn = mysqli_connect($servername, $username, $password);

// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
// 关闭连接
  mysqli_close($conn);
?>
```
`PDO` 连接实例
```php
<?php
$servername = "localhost";
$username = "username";
$password = "password";

try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
  // 关闭连接
  $conn = null;
?>
```