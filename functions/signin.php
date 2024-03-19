<?php
session_start();
include_once 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'], $_POST['password'])) {
  $login = $_POST['login'];
  $password = $_POST['password'];

  $users = getUsersList();
  
  if (existsUser($users, $login) && checkPassword($users, $login, $password)) {
      $_SESSION['login'] = $login;
      $_SESSION["birthdate"] = $birthdate;
      $_SESSION['auth'] = true;
      header('Location: ../index.php');
      exit();
  } else {
      $_SESSION['message'] = 'Неверный логин или пароль!';
      header('Location: ../login.php');
      exit();
  }
}
?>