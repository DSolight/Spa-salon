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

        <div class="container">
        <hr class="featurette-divider">
          
          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading fw-normal lh-1">SPA ДЛЯ ДУШИ И ТЕЛА <span class="text-muted">"Философия SPA" — окунись в мир роскоши и SPA удовольствий!</span></h2>
              <p class="lead">SPA-уходы и незабываемые ритуалы. Мы останавливаем время, для того что бы Вы могли погрузиться в мир ощущений единения души и тела, предназначенный только Вам.</p>
            </div>
            <div class="col-md-5">
              <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                <image href="/img/1.jpg" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" fill="#eee"/>
              </svg>
            </div>
          </div>
      
        <hr class="featurette-divider">
      
          <div class="row featurette">
            <div class="col-md-7 order-md-2">
              <h2 class="featurette-heading fw-normal lh-1">ОСОБЕННОСТИ SPA В БАРХАТНОМ СЕЗОНЕ <span class="text-muted"> Ритуалы и внимание к деталям.</span></h2>
              <p class="lead">SPA для нас — это не просто отдых, это целый ритуал. Более 100 услуг по телу и лучших программ с максимальным эффектом, разработаны нашими спа-технологами.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                <image href="/img/2.jpg" preserveAspectRatio="xMidYMid slice" width="100%" height="100%"/>
              </svg>
            </div>
          </div>
      
        <hr class="featurette-divider">
      
          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading fw-normal lh-1">ОСОБЕННОСТИ КОСМЕТОЛОГИИ В БАРХАТНОМ СЕЗОНЕ <span class="text-muted">Разнообразие услуг и индивидуальный подход</span></h2>
              <p class="lead">Для вас доступны как традиционные, проверенные временем, так и самые современные процедуры, эффективность которых обусловлена использованием новейших средств и запатентованных технологий.</p>
            </div>
            <div class="col-md-5">
              <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                <image href="/img/3.jpg" preserveAspectRatio="xMidYMid slice" width="100%" height="100%"/>
              </svg>
            </div>
          </div>
    </div>
        <hr class="featurette-divider">
</main>  
        <?php
        require_once 'views/footer.php';
        ?>    
            
          
            <script src="/js/bootstrap.bundle.min.js"></script>
    </body>
</html>