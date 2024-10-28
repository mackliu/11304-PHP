<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI結果</title>
</head>
<body>
<?php 
if(isset($_GET['height'])){
    $height=$_GET['height'];
}else if(isset($_POST['height'])){
    $height=$_POST['height'];
}else{
    echo "請使用正確管道進到此頁面!";
    exit();
}

if(isset($_GET['weight'])){
    $weight=$_GET['weight'];
}else if(isset($_POST['weight'])){
    $weight=$_POST['weight'];
}else{
    echo "請使用正確管道進到此頁面!";
    exit();
}

?>
<h1>BMI結果</h1>
<div>你的身高:<?=$height;?>公分</div>
<div>你的體重:<?=$weight;?>公斤</div>
<?php 
$h=$height/100;

$bmi=round($weight/($h * $h),2);

if($bmi<18.5){
    $level="體重過輕";
}else if($bmi<24){
    $level="健康體位";
}else if($bmi<27){
    $level="過重";
}else if($bmi<30){
    $level="輕度肥胖";
}else if($bmi<35){
    $level="中度肥胖";
}else{
    $level="重度肥胖";
}


?>
<div>你的BMI為:<?=$bmi;?></div>
<div>體位判定為:<?=$level;?></div>
<div>
    <a href="bmi.php?bmi=<?=$bmi;?>">重首頁/重新量測</a>
</div>
</body>
</html>