<?php
$id = $_GET['userid'];
$pw = $_GET['userpw'];
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 성공</title>
</head>

<body>
    <h1>환영합니다!!</h1>
    <?php
    echo "회원님의 ID는 {$id}입니다. <br> 비밀번호는 {$pw}입니다. <br> ※ 비밀번호 보안에 신경 써주세요~";
    ?>
</body>

</html>