<?php
session_start();

if (isset($_SESSION['login'])) {
  header('Location: account.php');
}

    ?>
    <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Войти</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/signin.css" rel="stylesheet">
  <body class="text-center">
  <main class="form-signin w-100 m-auto">
  <form action="functions/signin.php" method="post">
    <img class="mb-4" src="/img/logo.jpg" alt="logospa" width="200" height="200">
    <h1 class="h3 mb-3 fw-normal">Пожалуйста введите данные</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" name="login" placeholder="Логин">
      <label for="floatingInput">Логин</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Пароль">
      <label for="floatingPassword">Пароль</label>
    </div>
    <?php
            if (isset($_SESSION['message'])) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>
    <p class="mt-5 mb-3">
            У вас нет аккаунта? - <a href="/register.php">зарегистрируйтесь</a>!
    </p>
    <p class="mt-5 mb-3 text-muted">&copy; 2024</p>
  </form>
</main>
  </body>
  </html>
    <?php
?>
