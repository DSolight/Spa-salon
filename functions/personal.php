<?php
session_start();

// Проверяем, авторизован ли пользователь
if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
    // Пользователь авторизован, отображаем информацию о скидке

    // Проверяем, установлена ли переменная $_SESSION['login_time']
    if (!isset($_SESSION['login_time'])) {
        $_SESSION['login_time'] = time(); // Записываем время входа пользователя в сессию
    }

    // Рассчитываем срок истечения скидки
    $expiryTime = $_SESSION['login_time'] + (24 * 60 * 60); // 24 часа после входа пользователя

    // Проверяем, истекла ли скидка
    if (time() < $expiryTime) {
        // Скидка еще действует
        $remainingTime = $expiryTime - time();
        $hours = floor($remainingTime / 3600);
        $minutes = floor(($remainingTime % 3600) / 60);
        $seconds = $remainingTime % 60;
        // Выводим блок с информацией о скидке
        echo '<div id="discount-timer">Ваша скидка истекает через: ' . $hours . ' часов, ' . $minutes . ' минут, ' . $seconds . ' секунд</div>';    } else {
        // Скидка истекла

        // Выводим блок с информацией о просроченной скидке
        echo '<div id="discount-timer">Ваша скидка истекла</div>';
    }
} else {
    // Пользователь не авторизован, скрываем информацию о скидке или выводим сообщение о необходимости авторизации
    echo '<div id="discount-timer">Для получения скидки вам необходимо авторизоваться</div>';
}
?>