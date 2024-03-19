<?php
session_start();
include_once 'functions.php';
// Проверяем, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Получаем данные из формы
    $login = $_POST["login"];
    $password = $_POST["password"];
    $password_confirm = $_POST["password_confirm"];
    $birthdate = $_POST['birthdate'];

    // Проводим валидацию данных (например, проверка наличия обязательных полей)
    if (empty($login) || empty($birthdate) || empty($password) || empty($password_confirm)) {
        $_SESSION['message'] = 'Заполните все поля формы';
        header('Location:../register.php');
    } else if ($password !== $password_confirm) {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    } else {
        // Регистрируем нового пользователя
        if (registerUser($login, $password, $birthdate)) {
            // Сохраняем данные пользователя в сессии
            $_SESSION["login"] = $login;
            $_SESSION["birthdate"] = $birthdate;
            $_SESSION["auth"] = true;
            $_SESSION['message'] = 'Регистрация прошла успешно!';
                       
            // Перенаправляем на главную страницу
            header('Location: ../index.php');
        } else {
            $_SESSION['message'] = 'Пользователь с таким логином уже существует.';
            // Перенаправляем на страницу регистрации
            header('Location: ../register.php');
            exit();
        }
    }
}