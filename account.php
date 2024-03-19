<?php
session_start();
require_once 'functions\functions.php';
if (!isset($_SESSION['auth'])) {
  header('Location: login.php');
}


$users = getUsersList();
$currentUserLogin = $_SESSION['auth'];
$currentUser = $users[$currentUserLogin];
$birthdate = $currentUser['birthdate'];
echo 'Текущая дата рождения: ' . $birthdate;

?>
<!DOCTYPE html>
<html>
    <?php
    require_once 'views/head.php';
    ?>
    <body>
    <?php
    require_once 'views/navbar.php';
    ?>
    <?php
    require_once 'functions/personal.php';
    ?>
    <?php
    require_once 'functions/dobpersonal.php';
    ?>
    <main>
    <h1>Личный кабинет</h1>
    <h2>Имя пользователя: <?php echo $currentUserLogin; ?></h2>
    <h2>Дата рождения: <?php echo $birthdate; ?></h2>
    
    <h2>Сменить пароль</h2>
    <form action="change_password.php" method="POST">
        <label for="currentPassword">Текущий пароль:</label>
        <input type="password" id="currentPassword" name="currentPassword" required><br>
        
        <label for="newPassword">Новый пароль:</label>
        <input type="password" id="newPassword" name="newPassword" required><br>
        
        <input type="submit" value="Сменить пароль">
    </form>
    </main>

  <?php
    require_once 'views/footer.php';
  ?>
  <script src="/js/bootstrap.bundle.min.js"></script>
  </body>