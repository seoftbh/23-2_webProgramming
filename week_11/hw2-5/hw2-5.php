<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>PHP 과제 2-5</title>
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
	PHP 과제 2-5) 5. 고객 정보가 들어있는 파일 client.txt가 있다. 이 파일에 저장된 자료의 구조는 다음과 같이 ASCII 형식으로 저장되어 있다고 가정하자.  
	</h3>
	<pre style="margin-bottom: -30px">
		<code class="language-php">
			이름 [TAB] 나이 [TAB] 성별 [TAB] 이메일
		</code>
	</pre>
	<h3>
		이 파일을 읽어 나이가 30세 이상의 고객을 출력하는 프로그램을 작성하시오.
	</h3>
	<hr>
	<br>
	<h3>
		실행 결과)
	</h3>
	<?PHP  
		// 파일을 읽기 모드로 열기
		$file = fopen("client.txt", "r");

		// 고객 정보를 저장할 배열 선언
		$clients = [];


		echo "<b>파일의 내용 출력: </b><br>";
		// 파일의 내용을 한 줄씩 읽기
		while (!feof($file)) {
		  // 한 줄의 내용을 배열로 변환
		  $line = fgets($file);
			echo "$line <br>";
		  $data = explode("\t", $line);

		  // 30세 이상인 경우 고객 정보를 배열 저장
		  if (intval($data[1]) >= 30) {
			$clients[] = $data;
		  }
		}

		// 파일 사용이 끝나면 닫기
		fclose($file);

		// 30세 이상 고객 정보 출력
		echo "<br>";
		echo "<b>30세 이상의 고객 정보 출력: </b><br>";
		foreach ($clients as $client) {
		  echo "이름: $client[0], 나이: $client[1], 성별: $client[2], 이메일: $client[3] <br>";
		}
	?>
	
</body>
</html>