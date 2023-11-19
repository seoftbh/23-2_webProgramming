<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>PHP 과제 2-3</title>
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
	PHP 과제 2-3) 'exam.txt' 라는 파일을 열어 그 파일의 줄 수, 단어 수, 글자 수를 계산하는 프로그램을 작성하시오.  
	</h3>
	<hr>
	<br>
	<h3>
		실행 결과)
	</h3>
	<?PHP  
		// 읽기 모드로 파일 열기
		$file = fopen("./exam.txt", "r");
		
		// 변수 선언
		$line_count = 0;	// 줄 수
		$word_count = 0;	// 단어 수
		$char_count = 0;	// 글자 수


		echo "<b>파일의 내용: <br></b>";
		
		// 파일의 내용을 한 줄씩 읽기
		while (!feof($file)) {
			// 한 줄씩 출력
			$line = fgets($file);
			echo $line."<br>";
			// 줄 수 계산
			$line_count++;
			// 단어 수 계산
			$word_count += preg_match_all('/[a-zA-Z]+/', $line);
			// 글자 수 계산
			// $char_count += strlen($temp);
			$chars = str_split($line);
			foreach ($chars as $char) {
				if (ctype_alpha($char)) {
					$char_count++;
				}
				else if (ctype_digit($char)) {
					$char_count++;
				}
				else if ($char == ".") {
					$char_count++;
				}
				else if ($char == ",") {
					$char_count++;
				}
				else if ($char == "'") {
					$char_count++;
				}
				else if ($char == ";") {
					$char_count++;
				}
				else if ($char == "-") {
					$char_count++;
				}
			}
			
			
		}
		// 사용이 끝나면 파일 닫기
		fclose($file);

		echo "<br><b>";
		// 결과를 출력합니다.
		echo "줄 &nbsp;&nbsp;&nbsp;수: $line_count <br>";
		echo "단어 수: $word_count <br>";
		echo "글자 수: $char_count (공백 제외)";
		echo "</b>";
	?>
	
</body>
</html>