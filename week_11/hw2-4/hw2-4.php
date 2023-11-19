<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>PHP 과제 2-4</title>
	<link rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.9.0/styles/atom-one-dark-reasonable.min.css">
	<script src="https://unpkg.com/@highlightjs/cdn-assets@11.9.0/highlight.min.js"></script>

	<!-- and it's easy to individually load additional languages -->
	<script src="https://unpkg.com/@highlightjs/cdn-assets@11.9.0/languages/go.min.js"></script>

	<script>hljs.highlightAll();</script>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap');

		code {
			font-family: 'Nanum Gothic Coding', monospace;
			color: #abb2bf;
			font-size: 0.8em;
			background-color: #282c34;
			margin: 0 2px;
			padding: 5px;
			border-radius: 5px;
			margin-top: -20px;
			vertical-align: top;
		}
		h3 {
			line-height: 25px;
		}
	</style>
	
</head>
<body>
	<h3>
	PHP 과제 2-4) 다음은 각각의 사람들이 현재까지 생활하였던 도시의 이름을 나타내었다. 
	</h3>
	<pre style="margin-bottom: -30px">
		<code class="language-php">
			Kim    Seoul  
			Lee    Pusan, Daegu  
			Choi   Inchon  
			Park   Suwon, Daejon  
			Jung   Kwangju, Chunchon, Wonju  
		</code>
	</pre>
	<h3>
	위의 값들을 연상 배열로 선언한 후 <code>Choi</code> 항목을 삭제한 뒤 연상 배열의 내용을 출력하는 PHP 프로그램을 작성하시오 (단, <code>vardump()</code> 함수는 사용하지 않음).  
	</h3>
	<hr>
	<br>
	<h3>
		실행 결과)
	</h3>
	<?PHP  
	// 연상 배열 선언
	$people = [
		"Kim" => "Seoul",
		"Lee" => "Pusan, Daegu",
		"Choi" => "Inchon",
		"Park" => "Suwon, Daejon",
		"Jung" => "Kwangju, Chunchon, Wonju"
	];
	echo "<b>연상 배열이 선언된 모습(<code>print_r(\$people);</code>)</b><br>";
	echo "<xmp>";
	print_r($people);
	echo "</xmp>";
	// Choi 항목을 삭제
	unset($people["Choi"]);

	echo "<br>";
	echo "<b><code>Choi</code>항목이 삭제된 배열의 내용 출력</b><br>";
	// 연상 배열의 내용 출력
	foreach ($people as $key => $value) {
		echo "$key: $value <br>";
	}
	?>
	
</body>
</html>