<?php
$con = new mysqli("localhost","root","");//创建连接
//创建数据库
//$sql="CREATE DATABASE testuser";
//数据库创建检测
// if(mysqli_query($con,"CREATE DATABASE testuser8")){
//     echo "数据库testuser8创建成功";
// }
// else{
//     echo "数据库存在或者，数据库创建失败";     }
//切换数据库
mysqli_select_db($con,'course');
   //数据表创建
// $sql="CREATE TABLE infos(
//     id int,
//     user varchar(10),
//     pwd varchar(10))";
//     mysqli_query($con,$sql);
   //新插入数据
$sql="insert into department (department_id,department_name) values('222','计算机中心')";
mysqli_query($con,$sql);
?>