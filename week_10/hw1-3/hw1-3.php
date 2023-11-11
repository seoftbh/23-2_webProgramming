<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>PHP 과제 1-3</title>
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
	PHP 과제 1-3) 다음 프로그램과 동일한 기능을 하는 프로그램을 삼항연산자<code>( ? : )</code>를 이용하여 작성과 테스트하시오.
	</h3>
	<pre>
		<code class="language-php">
			&lt;?PHP
				$value = 12;
				if (($value % 2) == 1) print "odd";
				else print "even";
			?&gt;
		</code>
	</pre>
	<hr>
	<br>
	<h3>
		실행 결과)
	</h3>
	<?PHP  
	$value = 12;  
	   print ((($value % 2) == 1) ? "odd" : "even");
	?>
	<br>
	<br>
	<h3>
		코드)
	</h3>
	<pre>
		<code class="language-php">
			&lt;?PHP  
				$value = 12;  
				// 삼항 연산자로 구현한 코드
			   	print ((($value % 2) == 1) ? "odd" : "even");
			?&gt;
		</code>
	</pre>
	
</body>
</html>