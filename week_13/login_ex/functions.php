<?php  // PHP 시작
session_start();  // 세션 시작

// 데이터베이스에 연결
$db = mysqli_connect('localhost', 'root', '', 'multi_login');

// 변수 선언
$username = "";
$email    = "";
$errors   = array();

// register_btn 버튼 클릭시 register() 함수 호출
if (isset($_POST['register_btn'])) {
    register();
}

// 회원가입
function register()
{
    // 함수에서 사용할 전역 변수 호출
    global $db, $errors, $username, $email;

    // form으로부터 입력 값 받기, e() 함수 호출 (form 값을 이스케이프 하는 함수)
    $username    =  e($_POST['username']);
    $email       =  e($_POST['email']);
    $password_1  =  e($_POST['password_1']);
    $password_2  =  e($_POST['password_2']);

    // form 입력 값에 대한 유효성 검사
    if (empty($username)) {  // id 미입력
        array_push($errors, "사용자 이름을 입력하세요.");  // 오류 메시지를 $errors 배열에 저장
    }
    if (empty($email)) {  // 이메일 미입력
        array_push($errors, "이메일을 입력하세요.");
    }
    if (empty($password_1)) {  // 비밀번호 미입력
        array_push($errors, "비밀번호를 입력하세요.");
    }
    if ($password_1 != $password_2) {  // 비밀번호 입력 재확인
        array_push($errors, "비밀번호가 일치하지 않습니다. 다시 입력하세요.");
    }

    // form 입력 값에 문제가 없는 경우(-> $errors 배열이 비어있음), 사용자 등록 진행
    if (count($errors) == 0) {
        $password = md5($password_1); // PW를 암호화한 후 저장, MD5 해시 함수 사용

        if (isset($_POST['user_type'])) {
            $user_type = e($_POST['user_type']);
            $query = "INSERT INTO users (username, email, user_type, password) 
                      VALUES('$username', '$email', '$user_type', '$password')";
            mysqli_query($db, $query);
            $_SESSION['success']  = "계정이 성공적으로 생성되었습니다!";
            header('location: home.php');
        } else {
            $query = "INSERT INTO users (username, email, user_type, password) 
                      VALUES('$username', '$email', 'user', '$password')";
            mysqli_query($db, $query);

            // DB에서 사용자의 ID 가져오기
            $logged_in_user_id = mysqli_insert_id($db);

            $_SESSION['user'] = getUserById($logged_in_user_id); // 로그인한 사용자를 세션에 넣기
            $_SESSION['success']  = "로그인 되었습니다.";
            header('location: index.php');
        }
    }
}

// ID를 통해 사용자 배열 반환
function getUserById($id)
{
    global $db;
    $query = "SELECT * FROM users WHERE id=" . $id;
    $result = mysqli_query($db, $query);

    $user = mysqli_fetch_assoc($result);
    return $user;
}

// 이스케이프
function e($val)
{
    global $db;
    return mysqli_real_escape_string($db, trim($val));
}

function display_error()
{
    global $errors;

    if (count($errors) > 0) {
        echo '<div class="error">';
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
        echo '</div>';
    }
}

function isLoggedIn()
{
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        return false;
    }
}


// 로그아웃 버튼을 클릭하면 사용자 로그아웃 (세션 종료)
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: login.php");
}


// login_btn버튼 클릭 시 login() 함수 호출
if (isset($_POST['login_btn'])) {
    login();
}

// 사용자 로그인
function login()
{
    global $db, $username, $errors;

    // form 입력 값 가져오기
    $username = e($_POST['username']);
    $password = e($_POST['password']);

    // form 유효성 검사
    if (empty($username)) {
        array_push($errors, "사용자 이름을 입력해주세요.");
    }
    if (empty($password)) {
        array_push($errors, "비밀번호를 입력해주세요.");
    }

    // 오류가 없는 경우 로그인 시도
    if (count($errors) == 0) {
        $password = md5($password);

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) { // 로그인 성공
            $logged_in_user = mysqli_fetch_assoc($results);
            // 로그인한 사용자가 관리자인지 일반 사용자인지 확인
            if ($logged_in_user['user_type'] == 'admin') {  // admin인 경우

                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success']  = "로그인 되었습니다.";
                header('location: admin/home.php');
            } else {  // user인 경우
                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success']  = "로그인 되었습니다.";

                header('location: index.php');
            }
        } else {  // 로그인 실패
            array_push($errors, "사용자 이름 또는 비밀번호가 일치하지 않습니다.");
        }
    }
}


// 어드민 여부 확인
function isAdmin()
{
    if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin') {
        return true;
    } else {
        return false;
    }
}
