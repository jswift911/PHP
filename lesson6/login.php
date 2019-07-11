<?php
session_start();

$status = '';
$login = '';
$password = '';

function safe($data) {
    return htmlspecialchars(strip_tags($data)); // Защита от SQL-инъекций
}

if (isset($_POST['login']) && isset($_POST['password'])) {

    $login = safe($_POST['login']);
    $password = safe($_POST['password']);

    $user = getUser($login);

    if ($user) {
        if(password_verify($password, $user['pass'])) { //Валидация паролей
            $_SESSION['isAuth'] = true;
            $_SESSION['user_name'] = $user['login'];
            header('location: /lesson6/index.php');
            die;
        }
        else {
            $status = 'Пароль не верный! Проверьте данные и повторите снова';
        }
    }

    else {
        $status = 'Логин не верный! Проверьте данные и повторите снова';
        $_SESSION['isAuth'] = false;
    }


}

session_write_close();
?>

