<?php
session_start();
require_once 'functions.php';
// Проверяем, авторизован ли пользователь
if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
    // Пользователь авторизован
    
    // Читаем данные о пользователях из файла users.json
    $users = getUsersList();
    $currentUserLogin = $_SESSION["auth"];

    // Проверяем, есть ли информация о дне рождения текущего пользователя
    if (isset($users[$currentUserLogin]['birthdate'])) {
        $birthDate = $users[$currentUserLogin]['birthdate'];
    $currentDate = new DateTime();
    $birthDayOfYear = DateTime::createFromFormat('Y-m-d', date('Y') . '-' . date('m-d', strtotime($birthDate)));
    $birthDayOfYear->setDate($currentDate->format('Y'), $birthDayOfYear->format('m'), $birthDayOfYear->format('d'));
    
    if ($birthDayOfYear < $currentDate) {
        $birthDayOfYear->modify('+1 year');
    }
    
    $interval = $birthDayOfYear->diff($currentDate);
    $remainingDays = $interval->format('%a');
        
           
        echo "До вашего дня рождения и получения скидки осталось {$remainingDays} дней.";
        } else {
        
            echo "Дата рождения не указана.";
        }
    }
?>