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

//选择男女
$sex = $_POST['gender'];
if ($sex == male) {
    $sql = "CREATE TABLE $title (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        college VARCHAR(50),
        class VARCHAR(50),
        studentID VARCHAR(50),
        sname VARCHAR(50),
        sex VARCHAR(2),
        1分钟双摇跳绳 bit,
        双脚夹沙包掷远 bit,
        30米摸石过河 bit,
        1分钟原地跳绳 bit,
        两人三足50米跑 bit,
        16人x60米迎面接力 bit
        )";
} else if ($sex == female) {
    $sql = "CREATE TABLE $title (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        college VARCHAR(50),
        class VARCHAR(50),
        studentID VARCHAR(50),
        sname VARCHAR(50),
        sex VARCHAR(2),
        1分钟双摇跳绳 bit,
        双脚夹沙包掷远 bit,
        30米摸石过河 bit,
        1分钟毽球 bit,
        1分钟原地跳绳 bit,
        排球传垫 bit,
        两人三足50米跑 bit,
        16人x60米迎面接力 bit
        )";
} else {
    $sql = "CREATE TABLE $title (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        college VARCHAR(50),
        class VARCHAR(50),
        studentID VARCHAR(50),
        sname VARCHAR(50),
        sex VARCHAR(2),
        男子单人1分钟双摇跳绳 VARCHAR(4),
        男子单人双脚夹沙包掷远 VARCHAR(4),
        男子单人30米摸石过河 VARCHAR(4),
        男子双人1分钟原地跳绳 VARCHAR(4),
        男子两人三足50米跑 VARCHAR(4),
        16人x60米迎面接力（男） VARCHAR(4),
        女子单人1分钟双摇跳绳 VARCHAR(4),
        女子单人双脚夹沙包掷远 VARCHAR(4),
        女子单人30米摸石过河 VARCHAR(4),
        女子单人1分钟毽球 VARCHAR(4),
        女子双人1分钟原地跳绳 VARCHAR(4),
        女子双人排球传垫 VARCHAR(4),
        女子两人三足50米跑 VARCHAR(4),
        16人x60米迎面接力（女） VARCHAR(4)
        )";
}
 
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
echo "<script>alert('任务发布成功！');window.location.href ='Publish_cet46.html'</script>"
?>