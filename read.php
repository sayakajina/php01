<html>
<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
    <script src="JS/jquery-3.5.1.min.js"></script>
</head>

<body>
 <div class = "data"></div>
</body>
</html>
<?php
// ファイルを変数に格納
$filename = './data/data.txt';
// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');
// whileで行末までループ処理
while(!feof($fp)){
    $txt = fgets($fp);
    echo $txt;
    
};

// fcloseでファイルを閉じる
fclose($fp)


?>
