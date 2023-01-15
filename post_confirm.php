<?php

// フォームから送られてきたデータを取得し変数に代入
$name = $_POST['name'];
$mail = $_POST['mail'];
$q1 = $_POST['q1'];
$q1_other = $_POST['other'];


$data0 =  "<table><tr>
<th>名前</th>
    <th>メール</th>
    <th>回答</th>
    <th>回答詳細</th>
</tr>
<tr>
    <td>{$name}</td>
    <td>{$mail}</td>
    <td>{$q1}</td>
    <td>{$q1_other}</td>
</tr>
</table>";
;

$file = fopen('./data/data.txt', 'a');
        // ファイルに書き込む
        fwrite($file,$data0."\n");
                // `

        // `

        // ファイルを閉じる
        fclose($file);
        
        ?>

<html>
<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>

    <ul>
        <li> お名前：<?= $name ?> </li>
        <li> Mail：<?= $mail ?> </li>
        <li> <?php
        echo '参考先：';
        if (isset($_POST['q1'])&& is_array($_POST['q1'])){
            foreach($_POST['q1'] as $value){
                echo "{$value},";
            }
        }
        ?></li>
        <li><?= $q1_other ?></li>
        <!-- <button type="submit" value="" onClick="myFunc()"></button> -->
    </ul>
<ul>
    <button onclick="myFunc()">データを見る</button>
    </ul>

<ul>
    <li><a href="index.php">戻る</a></li>
</ul>
<script>
    const myFunc = ()=>{
       open("read.php") 
    }
</script>
</body>
</html>