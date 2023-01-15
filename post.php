<html>
<head>
	<meta charset="utf-8">
	<title>POST練習</title>
	<link rel="stylesheet" href="./CSS/style.css">
</head>
<body>

<form action="post_confirm.php" method="POST">
	お名前: <input type="text" name="name">
	<br>
	EMAIL: <input type="text" name="mail">
	<br>
	あなたが旅をするときに、参考にするものはなんですか：
	<br>
	<select name="q1">
		<option value="Instagram">Instagram
		<option value="TWitter">TWitter
		<option value="GoogleMap">GoogleMap
		<option value="旅行サイト">旅行サイト
		<option value="旅行本・ガイドブック">旅行本・ガイドブック
		<option value="旅行ブログ">旅行ブログ
		<option value="周囲の口コミ">周囲の口コミ
		<option id ="other" value="その他">その他
		<input id="text" type="text" name="other" value="" placeholder="その他入力欄">
	</select>
	<input type="submit" value="送信" onClick="myFunc1()">
</form>


<ul>
	<li><a href="index.php">戻る</a></li>
</ul>
<script src="JS/jquery-3.5.1.min.js"></script>
<script>
	const myFunc1 = ()=>{
		const text = document.querySelector('#text');
		const other = document.querySelector('#other');

		other.addEventListener('click',(e)=>{
			if(e.target.checked){
				text.style.display = "block";
			}else{
				text.style.display = "none";
			}
		},false);
	};
	
</script>

</body>
</html>