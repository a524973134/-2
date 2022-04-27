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
    学院 VARCHAR(50),
    班级 VARCHAR(50),
    学号 VARCHAR(50),
    姓名 VARCHAR(50),
    籍贯 VARCHAR(50),
    出生年月 VARCHAR(50),
    民族 VARCHAR(50),
    身份证号 VARCHAR(50),
    政治面貌 VARCHAR(50),
    联系电话 VARCHAR(50),
    联名工行卡号 VARCHAR(50),
    家庭人年均收入 VARCHAR(50),
    性别 bit,
    是否享受城镇居民最低生活保障 bit,
    是否孤儿、烈士子女、优抚家庭子女 bit,
    是否身体残疾、重大疾病 bit,
    是否遭受重大自然灾害、变故 bit,
    请详述家庭情况 VARCHAR(500)
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
echo "<script>alert('任务发布成功！');window.location.href ='Publish_cet46.html'</script>"
?>