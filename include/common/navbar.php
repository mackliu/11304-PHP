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
<?php
foreach($header as $key => $value){
    echo "<a class='".($page==$key?'now-page':'')."' href='{$key}.php'>{$value}</a>";
}

?>
