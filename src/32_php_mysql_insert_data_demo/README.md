# `PHP MySQL` 插入数据

# 使用 `MySQLi` 和 `PDO` 向 `MySQL` 插入数据
> 在创建完数据库和表后，我们可以向表中添加数据。

以下为一些语法规则：
- `PHP` 中 `SQL` 查询语句必须使用引号
- 在 `SQL` 查询语句中的字符串值必须加引号
- 数值的值不需要引号
- `NULL` 值不需要引号

`INSERT INTO` 语句通常用于向 `MySQL` 表添加新的记录：
```sql
INSERT INTO table_name (column1, column2, column3,...)
VALUES (value1, value2, value3,...)
```
**注意**： 如果列设置 `AUTO_INCREMENT` (如 "`id`" 列) 或 `TIMESTAMP` (如 "`reg_date`" 列),，我们就不需要在 `SQL` 查询语句中指定值； `MySQL` 会自动为该列添加值。

**实例 `MySQLi`**
```php
<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "php_learning_v1_mysqli";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
```

**实例 `POD`**
```php
<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "php_learning_v1_mysql_pdo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
```

## 插入多条数据
**`MySQLi`**
```php
<?php
$servername = "localhost";
$username = "username";
$password =
"password";
$dbname =
"myDB";

// 创建链接
$conn =
new mysqli($servername, $username, $password, $dbname);

// 检查链接

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO
MyGuests (firstname, lastname, email)

VALUES ('John', 'Doe', 'john@example.com');";

$sql .= "INSERT INTO
MyGuests (firstname, lastname, email)

VALUES ('Mary', 'Moe', 'mary@example.com');";

$sql .= "INSERT INTO
MyGuests (firstname, lastname, email)

VALUES ('Julie', 'Dooley', 'julie@example.com')";


if ($conn->multi_query($sql) === TRUE) {
echo "New
records created successfully";
} else {
echo
"Error: " . $sql . "
" . $conn->error;
}

$conn->close();
?>
```

**`PDO`**
```php
<?php
$servername = "localhost";
$username = "username";

$password = "password";
$dbname =
"myDBPDO";

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname",
$username, $password);

// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION);

// 开始事务

$conn->beginTransaction();
// SQL 语句

$conn->exec("INSERT INTO MyGuests (firstname, lastname, email)

VALUES ('John', 'Doe', 'john@example.com')");

$conn->exec("INSERT INTO MyGuests (firstname, lastname, email)

VALUES ('Mary', 'Moe', 'mary@example.com')");

$conn->exec("INSERT INTO MyGuests (firstname, lastname, email)

VALUES ('Julie', 'Dooley', 'julie@example.com')");


// commit the transaction
$conn->commit();

echo "New records created successfully";
}
catch(PDOException $e)
{

// roll back the transaction if something failed

$conn->rollback();

echo $sql . "
" . $e->getMessage();
}


$conn = null;
?>
```