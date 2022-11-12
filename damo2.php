<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = 'course';
$con= mysqli_connect($servername,$username,$password,$dbname);
mysqli_set_charset($con,'utf8');
if(!$con)
{
    echo"链接失败";
    die("Connection failed:".mysqli_connect_error());
}
echo "链接成功";
$sql = "select department_id,department_name from department where department_id='101'";
$result = mysqli_query($con,$sql);
$info = mysqli_fetch_array($result,MYSQLI_ASSOC);
echo "<table border=1 width=250>
<tr>
<td>学院编号</td>
<td>学院名称</td></tr>";
echo "<tr><td>".$info['department_id']."</td>";
echo "<td>".$info['department_name']."</td></tr>";
echo "</table>";
mysqli_close($con);
?>
