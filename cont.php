<?php
session_start();
$servername = "localhost";
$user_name = "root";
$password_db = '';
$db_name = 'course';
$con= new mysqli($servername,$user_name,$password_db,$db_name);
$con->set_charset('utf8');
if($con->connect_errno)
{
    echo"Α΄½ΣΚ§°ά";
    die("Connection failed:".$con->connect_error);
}


$sql = "insert into demo(username,passwd,gender) values(?,?,?)";
$mysql_stmt=$con->prepare($sql);

$name = $_POST['username'];
$passwd= $_POST['passwd'];
$gender = $_POST['gender'];

$mysql_stmt->bind_param($name,$passwd,$gender);

if($mysql_stmt->execute())
{
    echo $mysql_stmt->insert_id;
    echo PHP_EOL;
}
else{
    echo $mysql_stmt->error;
}
$mysql_stmt->free_result();
$mysql_stmt->close();
$con->close();

?>