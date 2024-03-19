<?php
session_start();

if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
  $loggedInUser = $_SESSION['login'] ?? 'Гость';
  echo '<p class="d-flex flex-wrap align-items-center justify-content-center">Добро пожаловать, ' . $loggedInUser . '!</p>';
}

if (!isset($_SESSION['login_time'])) {
  $_SESSION['login_time'] = time();
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

            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777"/>
                    <image href="/img/7.jpg" preserveAspectRatio="xMidYMid slice" width="100%" height="100%"></image>
                  </svg>
          
                  <div class="container">
                    <div class="carousel-caption text-start text-dark">
                      <h1>Эксклюзивная скидка для новых пользователей</h1>
                      <p>Дарим скидку в 10% для новых пользователей на ряд процедур!</p>
                      <p><a class="btn btn-lg btn-primary" href="register.php">Зарегистрируйся сегодня!</a></p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777"/>
                    <image href="/img/emp.jpg" preserveAspectRatio="xMidYMid slice" width="100%" height="100%"></image>
                  </svg>
          
                  <div class="container">
                    <div class="carousel-caption text-light">
                      <h1>Коллектив профессионалов</h1>
                      <p>У нас работают только настоящие специалисты, готовые предоставить вам максимальное удовольствие!</p>
                      <p><a class="btn btn-lg btn-primary" href="uslugi.php">Узнать больше</a></p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777"/>
                    <image href="/img/salon.jpg" preserveAspectRatio="xMidYMid slice" width="100%" height="100%"></image>
                  </svg>
          
                  <div class="container">
                    <div class="carousel-caption text-end">
                      <h1>Отличное место для отдыха и релаксации</h1>
                      <p>В наличии специально оборудованные комнаты для всех возможных видов процедур!</p>
                      <p><a class="btn btn-lg btn-primary" href="fotosalona.php">Посмотреть фото</a></p>
                    </div>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
                   
            <div class="container marketing">
          
             <div class="row">
                <div class="col-lg-4">
                  <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"/>
                    <image href="/img/6.jpg" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" fill="#777"/>
                  </svg>
          
                  <h2 class="fw-normal">Забота о коже</h2>
                  <p>Отдайте себя в руки опытных специалистов, которые с легкостью снимут напряжение и усталость, вернут коже упругость, а мыслям спокойствие.</p>
                  <p><a class="btn btn-secondary" href="uslugi.php">Посмотреть детали &raquo;</a></p>
                </div>
                
                <div class="col-lg-4">
                  <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"/>
                    <image href="/img/5.jpg" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" fill="#777"/>
                  </svg>
          
                  <h2 class="fw-normal">Спа терапия</h2>
                  <p>Возможность не только побаловать себя, но и улучшить свое физическое и эмоциональное состояние.</p>
                  <p><a class="btn btn-secondary" href="#">Посмотреть детали &raquo;</a></p>
                </div>
                <div class="col-lg-4">
                  <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"/>
                    <image href="/img/4.jpg" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" fill="#777"/>
                  </svg>
          
                  <h2 class="fw-normal">Косметология</h2>
                  <p>Доверьтесь профессионалам и позвольте себе насладиться благотворными эффектами расслабления в оазисе красоты и гармонии.</p>
                  <p><a class="btn btn-secondary" href="#">Посмотреть детали &raquo;</a></p>
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