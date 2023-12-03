<?php include('functions.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>로그인 페이지</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="header">
        <h2>로그인</h2>
    </div>
    <form method="post" action="login.php">

        <?php echo display_error(); ?>

        <div class="input-group">
            <label>사용자 이름</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>비밀번호</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_btn">로그인</button>
        </div>
        <p>
            처음 방문하셨나요? <a href="register.php">계정 만들기</a>
        </p>
    </form>
</body>

</html>