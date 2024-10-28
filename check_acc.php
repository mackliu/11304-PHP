<?php 

$acc=$_POST['acc'];
$pw=$_POST['pw'];

if($acc=='admin' && $pw=='1234'){
    echo "帳密正確:登入成功";
}else{
    echo "帳密錯誤:登入失敗";

}

?>