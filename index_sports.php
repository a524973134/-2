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
$sex = $_POST["gender"];
$m1syts = $_POST["m1syts"];
$msjjsb = $_POST["msjjsb"];
$m3msgh = $_POST["m3msgh"];
$m1ydts = $_POST["m1ydts"];
$m2rsz5 = $_POST["m2rsz5"];
$mjl166 = $_POST["mjl166"];
$f1syts = $_POST["f1syts"];
$fsjjsb = $_POST["fsjjsb"];
$f3msgh = $_POST["f3msgh"];
$f1drjq = $_POST["f1drjq"];
$f2rsz5 = $_POST["f2rsz5"];
$f2ydts = $_POST["f2ydts"];
$f2pqcd = $_POST["f2pqcd"];
$fjl166 = $_POST["fjl166"];
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
$sql = "INSERT INTO $title (college,class,studentID,sname,sex,
男子单人1分钟双摇跳绳,
男子单人双脚夹沙包掷远,
男子单人30米摸石过河,
男子双人1分钟原地跳绳,
男子两人三足50米跑,
16人x60米迎面接力（男），
女子单人1分钟双摇跳绳,
女子单人双脚夹沙包掷远,
女子单人30米摸石过河,
女子单人1分钟毽球,
女子双人1分钟原地跳绳,
女子双人排球传垫,
女子两人三足50米跑,
16人x60米迎面接力（女）)
VALUES ('$college','$class','$ID','$name','$sex',
'$m1syts',
'$msjjsb',
'$m3msgh',
'$m1ydts',
'$m2rsz5',
'$mjl166',
'$f1syts',
'$fsjjsb',
'$f3msgh',
'$f1drjq',
'$f2rsz5',
'$f2ydts',
'$f2pqcd',
'$fjl166')";
 
 //检测表创建成功与否
if ($conn->query($sql) === TRUE) {
} else {
    echo "输入数据表错误: " . $conn->error;
}

//关闭数据库并返回上一个页面
$conn->close();
echo "<script>alert('提交成功！');window.location.href ='index.php'</script>"
?>