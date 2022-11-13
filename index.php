<?php
session_start();
$servername = "localhost";
if(isset($_POST['username']) && isset($_POST['passwd']) && isset($_POST['dbname']))
{
    $username = $_POST['username'];
    $passwd = $_POST['passwd'];
    $dbname = $_POST["dbname"];
    $con= mysqli_connect($servername,$username,$passwd,$dbname);
    mysqli_set_charset($con,'utf8');
    if(!$con)
    {
        echo "链接失败";
        die("connection failed:".mysqli_connect_errno());
    }
    echo "<h1 style='text-align:center';>数据库".$dbname."链接成功</h1>";
    
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>学生选课登录系统</title>
        <link rel="stylesheet" href="./logphp.css">
    </head>

    <body>
        <div class="login">
            <div class="logo">
                <img src="./OIP-C (6).jfif" alt="显示图片">
            </div>

            <form action="./cont.php" method="post" class="fom">
                <label for="">账号:</label>
                <input type="text" name="username" placeholder="请输入你的账号">
                <br>
                <br>
                <label for="">密码:</label>
                <input type="password" name="passwd" placeholder="请输入你的密码">
                <br>
                <br>
                <label for="" class="sex">性别:</label>
                <select name="gender" id="">
                    <option value="0">男</option>
                    <option value="1">女</option>
                </select>
                <br>
                <br>
                <div class="but">
                    <button type="submit" id='sub'>登录</button>
                    <button type="reset" id="but">注册</button>
                </div>
            </form>
        </div>

    </body>

</html>



