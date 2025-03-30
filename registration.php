<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>ОО МОКРГН НОО ВОИ Возможности, Объединения, Инициатива!</title>
  </head>
  <body class="body">
    <header class="header">
      <div class="d-flex">
        <div class="col-md-1" id="div-in-gerb">
          <a href=""><img src="images/gerb.png" id="gerb" style="width: 50%;"></a>
        </div>
        <div class="col-md-10">
          
        </div>
        <div class="col-md-1">
          <div id="finevision_banner" onclick="finevision.activate_navbar()" style="cursor: pointer; z-index: 9999; background: rgb(255, 255, 255); border: 2px solid rgb(0, 0, 0); margin-top: 15px; margin-left: auto; margin-right: auto; width: 110px;"><img width="100" src="https://finevision.ru/static/banner2.jpg"><script src="https://finevision.ru/static/js/finevision_banner.js"></script></div>
        </div>
      </div>
      <img src="images/kheder1.png" id="header-pic" style="width: 100%;">
      <div id="border-1" class="col-md-12 d-flex">
        <div class="container text-center">
          <a href="index.html"><button id="item" class="btn btn-lg">Главная</button></a>
          <a href="osnova.html"><button id="item" class="btn btn-lg">Основные сведения</button></a>
          <a href="history.html"><button id="item" class="btn btn-lg">История</button></a>
          <a href="structure.html"><button id="item" class="btn btn-lg">Структура</button></a>
          <a href="first-cell.html"><button id="item" class="btn btn-lg">Первичные организации</button></a>
          <a href="partners.html"><button id="item" class="btn btn-lg">Партрёры организации</button></a>
          <a href="work-to.html"><button id="item" class="btn btn-lg">Направления работы</button></a>
          <a href="programms.html"><button id="item" class="btn btn-lg">Основные реализованные программы</button></a>
          <a href="otchet.html"><button id="item" class="btn btn-lg">Отчётность</button></a>
          <div class="dropdown" id="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Людям с инвалидностью
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="trud-reab.html">Трудовая реабилитация</a></li>
              <li><a class="dropdown-item" href="fisic-reab.html">Физкультурная реабилитация</a></li>
              <li><a class="dropdown-item" href="kultur-reab.html">Культурно-досуговая реабилитация</a></li>
              <li><a class="dropdown-item" href="technic-reab.html">Техническая реабилитация</a></li>
              <li><a class="dropdown-item" href="health-reab.html">Оздоровительная реабилитация</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <section class="section-1">
       <div class="d-flex" id="line">
        <div class="col-md-12 text-left" id="zag"><p style="color: #121229; margin-left: 100px;">Регистрация</p></div>
      </div>      
      <div class="col-md-12 bg-white" id="reg-block">
        <div class="row">
          <div class="col">
            <form action="signup.php" method="POST" class="bg-white" id="form-reg">
              <strong>Ваша фамилия *</strong>
              <input type="text" name="surname" value="<?php echo @$data['surname']; ?>" class="form-control"><br>
              
              <strong>Ваше имя *</strong>
              <input type="text" name="name" value="<?php echo @$data['name']; ?>" class="form-control"><br>

              <strong>Ваше отчество *</strong>
              <input type="text" name="patronymic" value="<?php echo @$data['patronymic']; ?>" class="form-control"><br>

              <strong>Номер членского билета *</strong>
              <input type="text" name="number" value="<?php echo @$data['number']; ?>" class="form-control"><br>

              <strong>Номер справки МСЭ *</strong>
              <input type="text" name="reference" value="<?php echo @$data['reference']; ?>" class="form-control"><br>

              <strong>Группа инвалидности *</strong>
              <input type="text" name="group" value="<?php echo @$data['group']; ?>" class="form-control"><br>

              <strong>Ваш Email (Для обратной связи)</strong>
              <input type="email" name="email" value="<?php echo @$data['email']; ?>" class="form-control"><br>

              <strong>Ваш номер телефона (Для обратной связи) *</strong>
              <input type="text" name="phone" value="<?php echo @$data['phone']; ?>" class="form-control"><br>

              <p>Обязательные для заполнения поля помечены "*"</p>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Я даю согласие на обработку персональных данных
                </label>
              </div><br>

              <button type="submit" name="do_signup" class="btn text-center" id="reg-button"><h5>Подтвердить данные о себе</h5></button><br>
            </form> 
          </div>
        </div>
      </div>
      <br><br><br><br>
    </section>
    <footer class="container-fluid d-flex">
      <div class="col-md-2">
        <br><br>
        <h5 id="footer-camomille" class="text-left">Для членов организации <br> ОО "МОКРГН НОО ВОИ"</h5>
        <a id="footer-camomille" class="text-left" href="registration.php"><h5>Заполните анкету</h5></a>
        <br>
      </div>
      <div class="col-md-8">
        <br><br>
        <h5 class="text-light text-left text-center">Часы приёма граждан: <br> пн.—пт. 10:00—17:00 <br> вт.—ср. 10:00—14:00</h5>
      </div>
    <div class="col-md-2 d-flex">
      <a href="https://vk.com/voi_kirovka"><img class="soc" src="images/vk.png"></a>
      <a href="https://t.me/OO_MOKRGN_NOO_VOI"><img class="soc-1" src="images/telegram.png"></a>
    </div>
  </footer>
  </body>
</html>