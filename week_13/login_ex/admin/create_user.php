<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin 계정 생성 페이지</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <style>
        .header {
            background: #003366;
        }

        button[name=register_btn] {
            /* color: white; */
            background: rgb(93, 160, 255);
        }
    </style>
</head>

<body>
    <div class="header">
        <h2>Admin 계정 생성 페이지</h2>
    </div>

    <form method="post" action="create_user.php">

        <?php echo display_error(); ?>

        <div class="input-group">
            <label>사용자 이름</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
            <label>이메일</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <label>사용자 유형</label>
            <select name="user_type" id="user_type">
                <option value=""></option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <div class="input-group">
            <label>비밀번호</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>비밀번호 확인</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="register_btn"> + 계정 생성</button>
        </div>
    </form>
</body>

</html>