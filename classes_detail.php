<?php

$dsn= "mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');

$class_id=$_GET['id'];
$class_sql="select * from classes where id='$class_id'";
$class=$pdo->query($class_sql)->fetch(PDO::FETCH_ASSOC);
//$class['code'];
//print_r($class);
//echo $class_sql;
//$sql="select * from classes";
//$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$class['name'];?>詳細資料</title>
    <style>
    table{
        border-collapse: collapse;
        width: 1200px;
        margin: auto;
    }

    table tr:nth-child(1) td{
        background-color: #cc6;
        color:darkorange;
        text-shadow: 2px 2px 2px #fff;
    }
    table td{
        padding:5px 15px;
        text-align: center;
        border:1px solid #ccc;
    }
</style>
</head>
<body>
<h1><?=$class['name'];?>班級學員</h1>  
<h2>班級導師<?=$class['tutor'];?></h2>
<?php
$class_members="select school_num,seat_num from class_student where class_code='{$class['code']}'";
$members=$pdo->query($class_members)->fetchAll(PDO::FETCH_ASSOC);
?>
<table>
    <tr>
        <td>座號</td>
        <td>學號</td>
        <td>姓名</td>
        <td>座號</td>
        <td>學號</td>
        <td>姓名</td>
        <td>座號</td>
        <td>學號</td>
        <td>姓名</td>
        <td>座號</td>
        <td>學號</td>
        <td>姓名</td>
    </tr>
    <?php
foreach($members as $idx => $mem){
    $student_sql="select * from students where school_num='{$mem['school_num']}'";
    $student=$pdo->query($student_sql)->fetch(PDO::FETCH_ASSOC);
    ?>
    <?=($idx%4==0)?"<tr>":"";?>
        <td><?=$mem['seat_num'];?></td>
        <td><?=$student['school_num'];?></td>
        <td><?=$student['name'];?></td>
    <?=($idx%4==3)?"</tr>":"";?>
    <?php
}
?>
</table>
</body>
</html>