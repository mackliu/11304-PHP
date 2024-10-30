<?php

$header=[
    'index'=>'首頁',
    'about'=>'關於我們',
    'product'=>'產品介紹',
    'contact'=>'聯絡我們',
    'login'=>'登入',
    'finacial'=>'財務報表'
];

?>

<h1><?=$header[$page];?></h1>

<a class="<?=($page=='index')?'now-page':'';?>" href="index.php">首頁</a>
    <a class="<?=($page=='about')?'now-page':'';?>" href="about.php">關於我們</a>
    <a class="<?=($page=='product')?'now-page':'';?>" href="product.php">產品介紹</a>
    <a class="<?=($page=='contact')?'now-page':'';?>" href="contact.php">聯絡我們</a>
    <a class="<?=($page=='login')?'now-page':'';?>" href="login.php">登入</a>
    <a class="<?=($page=='finacial')?'now-page':'';?>" href="finacial.php">財務報表</a>
