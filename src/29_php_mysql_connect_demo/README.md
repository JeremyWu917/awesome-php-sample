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
