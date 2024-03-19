<?php

function getUsersList() {
    $path = dirname(__DIR__,1) . DIRECTORY_SEPARATOR . "functions" . DIRECTORY_SEPARATOR;
    $jsonFile = $path . 'logins.json';// Путь к файлу JSON
    // Читаем содержимое файла JSON
    $jsonContent = file_get_contents($jsonFile);
    // Парсим JSON в массив
    $users = json_decode($jsonContent, true);
    return $users;
}

function existsUser($users, $login) {
    $users = getUsersList();// Проверяем, есть ли пользователь с указанным логином в массиве пользователей
    foreach ($users as $user) {
        if ($user['login'] === $login) {
            return $user;
        }
    }
    return null;
}

// Функция, проверяющая правильность введенного пароля для указанного пользователя
function checkPassword($users, $login, $password) {
    // Проверяем, существует ли пользователь с указанным логином
    if(existsUser($users, $login)) {
    foreach ($users as $user) {
        if ($user['login'] === $login) {
            // Проверяем, совпадает ли введенный пароль с хэшем пароля пользователя
            if (password_verify($password, $user['password'])) {
                return true;
            } else {
                return false;
            }
        }
    }
}
    return false; // Пароль не совпадает или пользователь не найден
}

// Функция для регистрации нового пользователя
function registerUser($login, $password, $birthdate) {
    // Загружаем текущий список пользователей из файла JSON
    $usersList = getUsersList();
    // Проверяем, не существует ли уже пользователь с таким логином
    foreach ($usersList as $user) {
        if ($user['login'] === $login) {
            return false; // Пользователь уже существует
        }
    }
    // Создаем хэш пароля
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    // Добавляем нового пользователя в список
    $usersList[] = [
        "login" => $login,
        "password" => $hashedPassword,
        "birthdate" => $birthdate
    ];
    // Сохраняем обновленный список пользователей в файл JSON
    file_put_contents('logins.json', json_encode($usersList));
    return true; // Пользователь успешно зарегистрирован
}
