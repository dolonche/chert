<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.min.css">
</head>

<body class="page-body">
  <?php
  //Если форма отправлена
  if(isset($_POST['submit'])) {
 //Проверка Поля ИМЯ
 //Проверка поля ТЕМА
 //Если ошибок нет, отправить email
    $email = trim($_POST['email']);
    $tel = trim($_POST['tel']);
    $comments = trim($_POST['comment']);
  if(!isset($hasError)) {
  $emailTo = 'dolonchest@gmail.com'; //Сюда введите Ваш email
  $body = "Telephone: $tel \n\nEmail: $email  \n\nComments:\n $comments";
  $headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
 mail($emailTo, $subject, $body, $headers);
  $emailSent = true;
  }
  }
  ?>
    <div class="page-header__wrapper">
      <header class="page-header">
        <div class="page-header__top-wrapper">
          <div class="page-header__top">
            <div class="page-header__top-phone">
              <img src="img/decor/phone.svg" alt=""><a href="tel:89165360823">8-916-536-08-23</a>
            </div>
            <div class="page-header__top-mail"><img src="img/decor/mail.svg" alt=""><a href="mailto:liniya.1951@mail.ru">liniya.1951@mail.ru</a></div>
            <div class="page-header__top-social">
              <a href=""><img src="img/decor/inst.svg" alt=""></a>
              <a href=""><img src="img/decor/vk.svg" alt=""></a>
              <a href=""><img src="img/decor/odnoklassniki.svg" alt=""></a>
              <a href=""><img src="img/decor/facebook.svg" alt=""></a>
              <a href=""><img src="img/decor/twitter.svg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="page-header__bottom-wrapper">
          <div class="page-header__bottom">
            <a class="page-header__bottom-logo" href="index.html">Чертежи карандашом</a>
            <nav class="main-nav">
              <ul class="main-nav__list">
                <il class="main-nav__list-item"><a href="price.html">Услуги и цены</a></il>
                <il class="main-nav__list-item"><a href="portfolio.html">Портфолио</a></il>
                <il class="main-nav__list-item"><a href="contacts.html">Контакты и оплата</a></il>
              </ul>
            </nav>
          </div>
        </div>
      </header>
    </div>
    <main>
      <div class="title-section__wrapper">
        <div class="title-section">Услуги и цены</div>
      </div>
      <div class="services__wrapper">
        <section class="services">
          <div class="services__item">
            <b class="services__item-title">ИГ и НГ</b>
            <ul class="services__item-list">
              <li>Выполнение чертежного шрифта</li>
              <li>Построение сопряжений и лекальных кривых</li>
              <li>Построение 3 проекций детали по 2 заданным</li>
              <li>Построение 3 усеченных проекций с вырезами геометрических тел</li>
              <li>Взаимное пересечение поверхностей геометрических тел плоскостями</li>
              <li>Построение профильных и горизонтальных разрезов на деталях</li>
              <li>Аксонометрии, изометрии и диметрии, развертки и сечения</li>
            </ul>
            <div class="services__item-price">
              <span>А3-от 500 Р.</span>
              <a class="service__item-order">Заказать</a>
            </div>
          </div>
          <div class="services__item">
            <b class="services__item-title">Строительное черчение</b>
            <ul class="services__item-list">
              <li>Фасады, планы этажей, кровли, стропил, перекрытий, покрытий, фундаментов</li>
              <li>Разрезы по лестнице и стене</li>
              <li>Генпланы, узлы и т.д.</li>
              <li>Металлические конструкции</li>
              <li>Тени фасада</li>
            </ul>
            <p class="services__item-descr">
              Копирование и увеличение чертежей любой сложности и формата на ватмане и кальке карандашом и тушью
            </p>
            <div class="services__item-price">
              <span>А3-от 500 Р.</span>
              <span>А2-от 1000 Р.</span>
              <span>А1-от 1500 Р.</span>
              <a class="service__item-order">Заказать</a>
            </div>
          </div>
          <div class="services__item">
            <b class="services__item-title">Машиностроит. черчение</b>
            <ul class="services__item-list">
              <li>Построение разрезов и сечений деталей</li>
              <li>Резьбовые соединения деталей болтом, шпилькой, винтами</li>
              <li>Соединение трубы с деталью</li>
              <li>Выносные элементы</li>
              <li>Знаки шероховатости поверхностей</li>
              <li>Зубчатые и червячные передачи</li>
              <li>Сварные изделия</li>
              <li>Обмер метал.изделий + эскизы к ним</li>
              <li>Комплексные чертежи</li>
              <li>Сборочные чертежи и деталировка</li>
            </ul>
            <div class="services__item-price">
              <span>А3-от 400 Р.</span>
              <a class="service__item-order">Заказать</a>
            </div>
          </div>
          <div class="services__item">
            <b class="services__item-title">Архитектурная графика</b>
            <ul class="services__item-list">
              <li>Задания по перспективе: линейная, метод архитектора и перспективной сетки</li>
              <li>Тени в аксонометрии и перспективе и т.д.</li>
              <li>Построение перспектив зданий и архит.элементов декора разных стилей</li>
              <li>Отмывка акварелью фасадов, генпланов, элементов декора зданий и геом.фигур</li>
              <li>Шрифтовые работы разных стилей</li>
            </ul>
            <div class="services__item-price">
              <span>А3-от 500 Р.</span>
              <span>А2-от 1000 Р.</span>
              <span>А1-от 2000 Р.</span>
              <a href="" class="service__item-order">Заказать</a>
            </div>
          </div>
          <div class="services__item">
            <b class="services__item-title">Дизайн интерьера</b>
            <ul class="services__item-list">
              <li>Планы и развертки стен помещений объекта</li>
              <li>Изображение помещений в 2D и 3D с наполнением их предметами интерьера и т.д.</li>
            </ul>
            <b class="services__item-title">Топография</b>
            <p class="services__item-descr services__item-descr--top">
              Выполнение чертежей по геодезии и картографии: условные обозначения планов местности, топографические карты, все виды шрифтов, лессировка акварелью и т.д.
            </p>
            <div class="services__item-price">
              <span>А3-от 500 Р.</span>
              <a class="service__item-order">Заказать</a>
            </div>
          </div>
          <div class="services__item">
            <b class="services__item-title">Художеств. ВУЗы и школы</b>
            <ul class="services__item-list">
              <li>Виды геометрических тел</li>
              <li>Построение циркульных окружностей</li>
              <li>Создание орнаментальных композиций</li>
              <li>Моделирование предметов интерьера</li>
              <li>Выполнение любых заданий по спец.предметам для художеств. ВУЗов и колледжей</li>
              <li>Плакаты к праздникам</li>
            </ul>
            <div class="services__item-price">
              <span>А3-от 500 Р.</span>
              <span>Остальные - в зависимости от сложности</span>
              <a class="service__item-order">Заказать</a>
            </div>
          </div>
        </section>
      </div>
    </main>
    <footer class="page-footer">
      <div class="page-footer__item">chertezhi-vsem</div>
    </footer>
    <div class="overlay"></div>
    <div class="popup">
      <div class="popup__close"></div>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="popup__form">
        <h4 class="popup__form-title">Заказ задания</h4>
        <div class="popup__form-bunch"><label for="email">E-mail</label><input type="email" id="email"></div>
        <div class="popup__form-bunch"><label for="tel">Телефон</label><input type="tel" id="tel"></div>
        <div class="popup__form-bunch"><label for="comment">Комментарий к заказу</label><textarea name="comment" id="comment" cols="30" rows="10"></textarea>
        </div>
        <button type="submit">Отправить</button>
      </form>
    </div>
    <script src="js/main.min.js"></script>
    <script src="js/order.min.js"></script>
</body>

</html>