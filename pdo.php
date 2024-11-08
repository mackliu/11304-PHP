<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資料庫連線</title>
</head>
<body>
<h1>資料庫連線</h1>    
<?php
$dsn= "mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');

$sql="select * from classes";

$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $row){
    echo $row['id']."-".$row['name']."-".$row['tutor']."<br>";
}


/* echo "<pre>";
print_r($rows);
echo "</pre>"; */

?>
</body>
</html>