<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style2.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
// ファイルを開く
$openFile = fopen("./data/data.csv","r");


echo '<table id="table">
        <tr id="aaa">
            <th>日時</th>
            <th>名前</th>
            <th>e-mail</th>
            <th>場所</th>
            <th>本気度</th>
        </tr>';

// #3 csvのデータを配列に変換し、HTMLに埋め込んでいる
while($line = fgetcsv($openFile)) {
    echo '<tr>';
    for ($i=0;$i<count($line);$i++) {
        echo '<td>'.$line[$i].'</td>';
    }
    echo '</tr>';
}
echo '</table>';

// ファイルを閉じる
fclose($openFile);
?>