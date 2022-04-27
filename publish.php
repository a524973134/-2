<?php
header("content-type:text/html;charset=utf-8");         //设置编码
?>

<?php
// print_r($_POST['pillInput']);
// echo $_POST['pillInput'][0];
// function input_treat($input){
//     if(gettype($input)=="string"){
//     return htmlentities(trim($input),ENT_QUOTES);
//     }else if(gettype($input)=="array"){
//     $nd="";
//     foreach($input as $v){
//      $nd .=htmlentities(trim($v),ENT_QUOTES)." ";
//     }
//     return $nd;
//     }else{
//     return false;
//     }
// }
// foreach($array as $pillInput);

$array=$_POST["pillInput"];//获取列名存于数组
$n = count($array);//获取数组长度
$title = $_POST["IPtitle"];//动态表名
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
 
// 使用 sql 创建数据表
$sql = "CREATE TABLE $title (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
college VARCHAR(50),
class VARCHAR(50),
studentID VARCHAR(50),
sname VARCHAR(50),
gender VARCHAR(50),
snative VARCHAR(50)
)";
 
 //检测表创建成功与否
if ($conn->query($sql) === TRUE) {
} else {
    echo "创建数据表错误: " . $conn->error;
}

//插入表名
$sql2 = "INSERT INTO tablename (tname)
VALUES ('$title')";
if ($conn->query($sql2) === TRUE) {
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}

//动态插入列
$i = 0;
while($i < $n){
    $sql1 = "alter table $title add $array[$i] varchar(50)";
    $i = $i + 1;
    if ($conn->query($sql1) === TRUE) {
    } else {
        echo "创建数据表错误: " . $conn->error;
    }
}

//关闭数据库并返回上一个页面
$conn->close();
echo "<script>alert('任务发布成功！');window.location.href ='Publish.html'</script>"
?>