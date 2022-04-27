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
$college = $_POST["IPcollege"];
$class = $_POST["IPclass"];
$ID = $_POST["IPID"];
$name = $_POST["IPname"];
$cet4 = $_POST["cet4"];
$cet6 = $_POST["cet6"];
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
$sql = "INSERT INTO $title (college,class,studentID,sname,cet4,cet6)
VALUES ('$college','$class','$ID','$name','$cet4','$cet6')";
 
 //检测表创建成功与否
if ($conn->query($sql) === TRUE) {
} else {
    echo "输入数据表错误: " . $conn->error;
}

//关闭数据库并返回上一个页面
$conn->close();
echo "<script>alert('任务发布成功！');window.location.href ='index.php'</script>"
?>