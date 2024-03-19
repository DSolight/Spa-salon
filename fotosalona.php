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
<div class="album py-5 bg-light">
  <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <div class="col">
        <div class="card shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
        <image href="/img/spa1.jpg" preserveAspectRatio="xMidYMid slice" width="100%" height="100%"/>
        </svg>

          <div class="card-body">
            <p class="card-text">Насладитесь гармонией, которую способна подарить прогулка по благоухающему саду английских роз. Сочетание масел, с их превосходными увлажняющими, целебными свойствами и процедура массажа для тела, восстанавливают упругость и эластичность Вашей кожи, а тонкий аромат цветов оставляет нежный, чарующий шлейф. Ухаживающие компоненты обогащают кожу ценными маслами, питают ее, восстанавливают структуру и омолаживают. А тонкий армат цветов оставит чарующий шлейф и перенесет вас в благоухающий сад английских роз.</p>
        </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
          <image href="/img/spa2.jpg" preserveAspectRatio="xMidYMid slice" width="100%" height="100%"/>
          </svg>
          <div class="card-body">
            <p class="card-text">Нормализует работу лимфатической системы и нормализует движение жидкости в организме. Этот массаж выводит из организма токсины и шлаки, снимает отечность и нормализует обмен веществ. Очень важно проводить такой массаж как профилактику варикоза.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg">
          <image href="/img/spa3.jpg" preserveAspectRatio="xMidYMid slice" width="100%" height="100%"/>
        </svg>
          <div class="card-body">
            <p class="card-text">В этой технике акцент ставится на какую-то определенную зону тела. Например, массаж шейно-воротниковой зоны рекомендуется, если у вас часто болит или кружится голова. Массаж расслабит мышцы, снимет напряжение и избавит от неприятных ощущений.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
          <image href="/img/spa4.jpg" preserveAspectRatio="xMidYMid slice" width="100%" height="100%"/>
        </svg>
          <div class="card-body">
            <p class="card-text">Ритуал красоты для лица и тела. Особенно подойдет для сухой и обезвоженной кожи. Вулканический пилинг идеально подготовит кожу к специальному массажу. Для ритуала используются крем и уникальная смесь шести аромамасел TRANQUILLITY. Крем с маслами ши и амаранта придаст коже увлажнение и обновление. Смесь аромамасел создана специально для глубокой релаксации, гармонии и восстановления психоэмоционального состояния. Сочетание массажа, ароматерапии и интенсивного увлажнения подарят комфорт и телу, и душе.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
          <image href="/img/spa5.jpg" preserveAspectRatio="xMidYMid slice" width="100%" height="100%"/>
        </svg>
          <div class="card-body">
            <p class="card-text">Научные свойства пребиотиков для восхитительного сияния, красоты и молодости. Процедура восстанавливает тусклую кожу лица, насыщает кислородом, улучшает тургор, дарит красивый свежий цвет и внутреннее сияние. Содержит большое количество минералов, антиоксидантов и витаминов для насыщенной влагой, сияющей кожи.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
          <image href="/img/spa6.jpg" preserveAspectRatio="xMidYMid slice" width="100%" height="100%"/>
        </svg>
          <div class="card-body">
            <p class="card-text">В одной процедуре сочетаются массаж и активный уход. Массаж на водорослевой маске Bagni di Montalcino оказывает детокс, антицеллюлитное и липолитическое действие. Детокс массаж хорошо выводит токсины из организма, убирает лишнюю жидкость, снимает отеки, разгоняет лимфу. Рекомендуется пить много жидкости до и после массажа.</p>
            </div>
        </div>
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