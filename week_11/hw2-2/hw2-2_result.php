<?php
	$str = $_GET['ary'];
	$arr = explode(',', $str);
	// for ($i = 0; $i < count($arr); $i++) {
	// 	echo trim($arr[$i]);
	// }

	function revsort($arr) {
		sort($arr);
		return array_reverse($arr);
	}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>PHP 과제 2-2</title>
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
	PHP 과제 2-2) 배열을 내림차순으로 정렬하고 싶다. <code>sort()</code> 함수를 이용하여 <code>revsort()</code> 함수를 설계하고 테스트하시오. <br>
	(hint : sort와 array_reverse함수 사용)  
	</h3>
	<hr>
	<br>
	<h3>
		입력 값
	</h3>
	
	<form method="get" action="hw2-2_result.php">
		<p>
			<label>배열을 입력하세요 : 
				<input type="text" name="ary">
			</label>
			<input type="submit" value="Submit">
		</p>
	</form>
	예) <code>3, 8, 1, 2, 7, 6</code>
	<h3>
		실행 결과)
	</h3>
	<?php
		echo "내림차순 정렬 : ".implode(", ", revsort($arr));
	?>
</body>
</html>