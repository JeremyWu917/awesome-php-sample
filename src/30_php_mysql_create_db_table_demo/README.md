# `PHP MySQL` 创建数据库和表
> 数据库有一个或多个表

## 创建数据库
> `CREATE DATABASE` 语句用于在 `MySQL` 中创建数据库

**语法**
`CREATE DATEBASE database_name`
为了让 `PHP` 执行上面的语句，我们必须使用 `mysqli_query()` 函数。此函数用于向 `MySQL` 连接发送查询或命令。

**例子**
在下面的例子中，我们创建了一个名为 `"my_db"` 的数据库：
```php
<?php
  $con = mysqli_connect("127.0.0.1", "root", "123456");
  if (!$con) {
    die("Could not connect: " . mysqli_error($_GLOBAL[$con]));
  } else {
    echo "连接成功！<br>";
  }
  if (mysqli_query("CREATE DATABASE my_db", $con)) {
    echo "数据库[my_db]创建成功！<br>"
  } else {
    echo "数据库[my_db]创建失败: " . mysqli_error($_GLOBAL[$con]);
  }

  mysqli_close($con);
?>
```

