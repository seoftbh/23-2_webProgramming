<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>PHP 과제 2-1</title>
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
	PHP 과제 2-1) for문을 이용하여 다음과 같은 출력을 하는 프로그램을 작성하시오. 
	</h3>
	<pre>
		<code class="language-php">
			A  
			A B  
			A B C  
			A B C D  
			A B C D E   
			A B C D  
			A B C  
			A B  
			A 
		</code>
	</pre>
	<hr>
	<br>
	<h3>
		실행 결과)
	</h3>
	<?PHP  
	for ($i = 0; $i < 5; $i++) {
		for ($j = 0; $j <= $i; $j++) {
			echo chr($j + 65);
		}
		echo "<br>";
	}
	for ($i = 4; $i > 0; $i--) {
		for ($j = 0; $j < $i; $j++) {
			echo chr($j + 65);
		}
		echo "<br>";
	}
	?>
	
</body>
</html>