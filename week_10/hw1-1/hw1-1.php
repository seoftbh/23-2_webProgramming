<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
    <title>PHP 과제 1-1</title>
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
	PHP 과제 1-1) <code>$a</code>라는 변수의 값이 홀수이면 그 숫자 다음 숫자인 짝수를 출력하고,
	<code>$a</code>의 값이 짝수이면 그 수를 출력하는 함수를 작성하고 테스트하시오.  
	</h3>
	<hr>
	<form method="get" action="hw1-1_result.php">
		<p>
			<label>숫자를 입력하세요 : 
				<input type="text" name="num">
			</label>
			<input type="submit" value="Submit">
		</p>
	</form>
</body>
</html>