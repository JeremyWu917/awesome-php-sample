# `PHP MySQL` 创建数据库和表
> 数据库有一个或多个表

## 使用 `MySQLi` 和 `PDO` 创建 `MySQL` 数据库
`CREATE DATABASE` 语句用于在 `MySQL` 中创建数据库

**实例 `MySQLi`**
```php
<?php
$servername = "localhost";
$username = "root";
$password = "123456";

// 创建连接
$conn = mysqli_connect($servername, $username, $password);
// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE php_learning_v1_mysqli";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
```
**实例 `PDO`** 
```php
<?php
$servername = "localhost";
$username = "root";
$password = "123456";

try {
    $conn = new PDO("mysql:host=$servername;dbname=php_learning_v1_mysql_pdo", $username, $password);
    // 设置 PDO 错误模式为异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE php_learning_v1_mysql_pdo";
    // 使用 exec() ，因为没有结果返回
    $conn->exec($sql);
    echo "Database created successfully<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
```
**提示**： 
使用 `PDO` 的最大好处是在数据库查询过程出现问题时可以使用异常类来 处理问题。如果 `try{ }` 代码块出现异常，脚本会停止执行并会跳到第一个 `catch(){ }` 代码块执行代码。 在以上捕获的代码块中我们输出了 `SQL` 语句并生成错误信息。
