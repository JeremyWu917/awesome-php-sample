<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "php_learning_v1_mysqli";
$dbname_pdo = "php_learning_v1_mysql_pdo";
/*
  MySQLi 方式插入数据 一条数据
*/
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

// $conn->close();

// // 创建链接
// $conn =
// new mysqli($servername, $username, $password, $dbname);

// // 检查链接

// if ($conn->connect_error) {
// die("Connection failed: " . $conn->connect_error);
// }

/*
  MySQLi 方式插入数据 多条数据
*/
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

/***************************************************************
  PDO 方式插入数据 一条数据
*/
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname_pdo", $username, $password);
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

/***************************************************************
  PDO 方式插入数据 多条数据
*/
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

