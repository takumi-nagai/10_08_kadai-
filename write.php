<?php

$name = $_POST["name"];
$mail = $_POST["mail"];
$question1 = $_POST["question1"];
$question2 = $_POST["question2"];


// ファイルに書き込み
// date_default_timezone_set('Asia/Tokyo');
$d = date("Y/m/d H:i");
$str = $d.",".$name.",".$mail.",".$question1.",".$question2;
// $line = implode(',' , $str);
$file = fopen("./data/data.csv","a");
fwrite($file,$str."\n");
fclose($file);
//文字作成

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.csv を確認しましょう！</h2>

    <ul>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
