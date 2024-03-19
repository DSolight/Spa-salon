<?php
session_start();

if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
  $loggedInUser = $_SESSION['login'] ?? 'Гость';
  echo '<p class="d-flex flex-wrap align-items-center justify-content-center">Добро пожаловать, ' . $loggedInUser . '!</p>';
}

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
    <div class="container py-4">
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Скидка за регистрацию</h1>
        <p class="col-md-8 fs-4">Получите скидку в 5% ну услуги салона при регистрации на сайте!</p>
        <a class="btn btn-primary btn-lg" href="register.php" role="button">Зарегистрироваться</a>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-bg-dark rounded-3">
          <h2>Когда у вас день рождения?</h2>
          <p>Укажите дату рождения и мы дадим вам скидку 5% в день вашего рождения!</p>
          <a class="btn btn-primary btn-lg" href="account.php" role="button">Личный кабинет</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>В компании веселее!</h2>
          <p>Пригласите с собой родственную душу и получите скидку на следующее посещение салона.</p>
          <a class="btn btn-primary btn-lg" href="uslugi.php" role="button">Услуги</a>
        </div>
      </div>
    </div>
</div>
    </main>  
        <?php
        require_once 'views/footer.php';
        ?>    
    <script src="/js/bootstrap.bundle.min.js"></script>
    </body>
</html>