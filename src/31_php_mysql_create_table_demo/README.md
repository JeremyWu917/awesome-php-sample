# `PHP MySQL` 创建数据表
> `CREATE TABLE` 语句用于创建 `MySQL` 表，创建表前，我们需要先切换到相应的数据库下（`use database_name`）

## 使用 `MySQLi` 和 `POD` 创建 `MySQL` 表
我们将创建一个名为 `MyGuests` 的表，有 5 个列： `id`, `firstname`, `lastname`, `email` 和 `reg_date`:
```sql
CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)
```
**上表中的注意事项**:
数据类型指定列可以存储什么类型的数据。在设置了数据类型后，你可以为每个列指定其他选项的属性：
- `NOT NULL` - 每一行都必须含有值（不能为空），null 值是不允许的。
- `DEFAULT value` - 设置默认值
- `UNSIGNED` - 使用无符号数值类型，`0` 及正数
- `AUTO INCREMENT` - 设置 `MySQL` 字段的值在新增记录时每次自动增长 `1`
- `PRIMARY KEY` - 设置数据表中每条记录的唯一标识。 通常列的 `PRIMARY KEY` 设置为 `ID` 数值，与 `AUTO_INCREMENT` 一起使用。
- 每个表都应该有一个主键(本列为 `id` 列)，主键必须包含唯一的值。

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

// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
```
**实例 `PDO`**
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

    // sql to create table
   $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table MyGuests created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
```