<?php
header("content-type:text/html;charset=utf-8");         //设置编码
?>

<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "info";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$sql = "DELETE FROM tablename
WHERE some_column = some_value"
?>