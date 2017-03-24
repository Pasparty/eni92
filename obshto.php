<!DOCTYPE html>
<html>
<head>
  <title>Ени-92</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
  <style type="text/css">
    body {
      background-image: url('img/font.jpg');
      margin: 0;
      padding: 0;
      height: 0;
    }
    .logo {
      width: 50%;
      margin-top: 2%;
      margin-bottom: 2%;
    }
    .line {
      height: 2px;
      background-color: red;
    }
    .bottom-line {
      height: 2px;
      background-color: red;
    }
    .tel {
      width: 40%;
      float: right;
    }
    h4 {
      color: red;
      display: inline-block;
    }
    @media screen and (max-width: 600px) {
      .adres, .email { font-size: 20px;}
    }
    @media screen and (max-width: 600px) {
      .email { font-size: 15px;}
    }
    @media screen and (max-width: 500px) {
      .adres, .email { font-size: 15px;}
    }
    .navbar {
      background-color: #c1c1c1;
    }
    .navbar-nav {
      width: 100%;
      text-align: center;
      background: #c1c1c1;
    }
    .navbar-nav>li {
      float: initial;
      line-height: 150px;
    }
    .nav>li {
      display:inline-block;
    }
    .van {
      width: 20%;
      float: left;
    }
    .van-button {
      width: 20%;
      float: left;
    }
    .facebook {
      width: 5%;
      margin: 0 2%;
    }
    @media screen and (max-width: 500px) {
      .facebook { width: 10%;}
    }
    @media screen and (max-width: 780px) {
      .van { display: none;}
    }
    @media screen and (min-width: 780px) {
      .van-button { display: none;}
    }
    @media screen and (max-width: 760px) {
      .van-button { width: 40%;}
    }
    /*CATEGORY END*/
    /*footer start*/
    .footer, .push {
      min-height: 4em;
      margin: 0 auto;
      margin-bottom: 1%;
      border-radius: 10px;
    }
    .footer {
      padding: 2% 2% 2% 2%;
      color: #F2DBA5;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+45,6d0019+76,6d0019+79 */
      background: rgb(169,3,41); /* Old browsers */
      background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 45%, rgba(109,0,25,1) 76%, rgba(109,0,25,1) 79%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    }
    .barziVrazki > li > a {
      color: #F2DBA5;
    }
    /*fuuter end*/
    .mitashki {
      margin-left: 10%;
    }
    .input-group[class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }
    .contactForm {
      background-color: #5B74A9;
      color: white;
      margin: 1%;
      margin-left: 10%;
    }
    @media screen and (max-width: 500px) {
      .contactForm { margin: 0 auto; font-size: 11px;}
    }
    .contactForm:hover {
      background-color: white;
      color: #5B74A9;
      border: 1px solid #5B74A9;
    }
    .modal-title {
      color: #5B74A9;
    }
    .dropdown-menu > li {
      background-color: white;
      text-align: left;
    }
    .barziVrazki {
      display: inline-block;
    }
    a.back-to-top {
      display: none;
      width: 50px;
      height: 50px;
      text-indent: -9999px;
      position: fixed;
      z-index: 999;
      right: 2%;
      bottom: 2%;
      background: #27AE61 url("img/top.png") no-repeat center ;
      background-size: 100%;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      opacity: 0.3;
      outline: 0;
    }
    a.back-to-top:hover {
      opacity: 1;
    }
    .aksesoari {
      background-color: white;
      margin: 1% 0;
      box-shadow: 25px 0px 25px -25px rgba(0,0,0,0.45), -25px 0px 25px -25px rgba(0,0,0,0.45);
    }
    .okachvach {
      float: right;
      margin-top: 2%;
    }
    .direktenOkachvach {
      border-bottom: 1px solid red;
    }
    .krastatavrazka {
      width: 10%;
    }
    .dvoinaprujina, .ankerBarz, .ankerVinkel, .telSUho, .udaljitel {
      width: 10%;
    }
    @media screen and (max-width: 500px) {
      .okachvach { width: 50px;}
    }
  </style>
</head>
<body>
  <?php include('send_form_email.php') ?>
  <!-- container -->
  <div class="font"></div>
  <div class="container">
    <div class="col-md-12">
      <a href="https://www.google.bg/maps/place/%D1%83%D0%BB.+%E2%80%9E%D0%92%D0%B0%D1%81%D0%B8%D0%BB+%D0%9B%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%E2%80%9C+170,+4003+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2/@42.176901,24.7414923,19z/data=!4m5!3m4!1s0x14acd223c431e1f3:0x49b0bd0dcba79efc!8m2!3d42.17696!4d24.741962"> <h4 class="adres">гр. Пловдив 4003,  ул. Васил Левски №170 </h4></a>
      <a href="https://www.facebook.com/eni92.eood/?fref=ts"><img class="facebook" src="img/facebook.ico"></a>
      <h4 class="email">Email: eni92@abv.bg</h4>
      <!--contact us form start-->
      <!-- Button to trigger modal -->
      <a href="#myModal" role="button" class="btn btn-custom contactForm" data-toggle="modal">Отворете Формата за Връзка с Нас</a>
      <!-- Modal -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Форма за връзка с нас</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="comment">Въпрос или Коментар</label>
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
      </div><!-- End of Modal -->
      <!--contact us form edn-->
    </div>
    <div class="col-md-12"><div class="line"></div></div>
    <div class="col-md-12">
      <div>
        <img class="tel" src="img/tel.png">
      </div>
      <a href="eni92.php"><img class="logo" src="img/logo1.jpg"></a>
    </div>
    <div class="col-md-12 col-centered">
      <div class="navbar navbar-default navbar-top">
        <div class="navbar-header">
          <img class="van-button" src="img/transport.png">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <img class="van" src="img/transport.png">
            <li><a href="eni92.php">НАЧАЛО</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ПРОДУКТИ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="#">ТОНИРАНЕ</a></li>
            <li><a href="#">ПОД НАЕМ</a></li>
            <li><a href="aboutus.php">ЗА НАС</a></li>
            <li><a href="contacts.php">КОНТАКТИ</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-12"><div class="bottom-line"></div></div>
      <div class="col-md-12 aksesoari">
        <h4><b>ПРОФИЛИ ЗА СУХО СТРОИТЕЛСТВО</b></h4><br><br>
        <div class="direktenOkachvach">
          <img class="okachvach" src="img/direktenokachvach.jpg"><br>
          <h3><b>ОКАЧВАЧ ДИРЕКТЕН АСС 70мм-120мм-150мм-200мм-250мм300мм</b></h3><br>
          <ul>
            <li>дължина мм.  70-120-150-200-250-300</li>
          </ul>
          <h4><b>ОПИСАНИЕ</b></h4><br>
          <p><b>Елемент от системите за сухо строителство при монтаж на гипсокартон или окачени тавани.</b></p><br>
        </div>
        <div class="direktenOkachvach">
          <img class="okachvach krastatavrazka" src="img/krastatavrazka.jpg"><br>
          <h3><b>КРЪСТАТА ВРЪЗКА ЗА CD/UA ПРОФИЛ КНАУФ</b></h3><br>
          <ul>
            <li>бр. в опаковка  50</li>
          </ul>
          <h4><b>ОПИСАНИЕ</b></h4><br>
          <p><b>Аксесоар за закрепване на CD и UA метални профили от системите за сухо строителство. Доставя се неогъната</b></p><br>
        </div>
        <div class="direktenOkachvach">
          <img class="okachvach dvoinaprujina" src="img/dvoinaprujina.jpg"><br>
          <h3><b>ДВОЙНА ПРУЖИНА КНАУФ</b></h3><br>
          <ul>
            <li>бр. в опаковка  100</li>
          </ul>
          <h4><b>ОПИСАНИЕ</b></h4><br>
          <p><b>Удължител за тел с ухо. Елемент при монтаж на тавани в системите за сухо строителство.</b></p><br>
        </div>
        <div class="direktenOkachvach">
          <img class="okachvach ankerBarz" src="img/ankerbarz.jpg"><br>
          <h3><b>АНКЕР БЪРЗ ОКАЧВАЧ С ПРУЖИНА CD 60/27 КНАУФ</b></h3><br>
          <ul>
            <li>дължина мм.   80</li>
            <li>дебелина мм.  1,5</li>
            <li>бр. в опаковка  100</li>
          </ul>
          <h4><b>ОПИСАНИЕ</b></h4><br>
          <p><b>Бързия окачвач с пружина Кнауф за CD профил е елемент при монтаж на тавани в системите за сухо строителство.</b></p><br>
        </div>
        <div class="direktenOkachvach">
          <img class="okachvach udaljitel" src="img/udaljitel.jpg"><br>
          <h3><b>УДЪЛЖИТЕЛ ЗА CD 60/27 КНАУФ</b></h3><br>
          <ul>
            <li>дължина мм.   90</li>
            <li>бр. в опаковка  100</li>
          </ul>
          <h4><b>ОПИСАНИЕ</b></h4><br>
          <p><b>Линейната връзка служи за удължаване на профилите CD. Връзка за CD профил 60/27 Knauf е с дължина 9 см. и е елемент от системите за сухо строителство при монтаж на гипсокартон или окачени тавани.</b></p><br>
        </div>
        <div class="direktenOkachvach">
          <img class="okachvach ankerVinkel" src="img/ankervinkel.jpg"><br>
          <h3><b>АНКЕР ВИНКЕЛ ЗА CD ПРОФИЛ 60/27 КНАУФ</b></h3><br>
          <ul>
            <li>бр. в опаковка  100</li>
          </ul>
          <h4><b>ОПИСАНИЕ</b></h4><br>
          <p><b>Анкервинкел за CD профил 60/27 Knauf е елемент от системите за сухо строителство при монтаж на гипсокартон или окачени тавани.</b></p><br>
        </div>
        <div class="direktenOkachvach">
          <img class="okachvach telSUho" src="img/telsuho.jpg"><br>
          <h3><b>ТЕЛ С УХО 125мм-250мм-375мм-500мм КНАУФ</b></h3><br>
          <ul>
            <li>дължина мм.   125</li>
            <li>ø диаметър мм.  4</li>
            <li>бр. в опаковка  100</li>
          </ul>
          <h4><b>ОПИСАНИЕ</b></h4><br>
          <p><b>Тел с ухо Knauf е аксесоар от системите за сухо строителство при монтаж на гипсокартон или окачени тавани.<br>
            - носимоспособност 25 кг.<br>
            - диаметърът на пръта е Ø 4 мм.<br>
            - снабден с ухо за окачване на единия край – за монтаж с дюбел/винт<br></b></p><br><br>
            <h4><b>ЗА ПОДОБНИ ПРОДУКТИ КОИТО НЕ ВИЖДАТЕ В КАТЕГОРИЯТА, МОЛЯ СВЪРЖЕТЕ СЕ С НАС НА ПОСОЧЕНИТЕ ТЕЛЕФОНИ</b></h4>
          </div>
        </div>
        <div class="push"></div>
        <div class="col-md-12 col-centered">
          <div class="footer">
            <span>БЪРЗИ ВРЪЗКИ</span><br>
            <ul class="barziVrazki">
              <li><a href="tuhli.php">ТУХЛИ</a></li>
              <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
              <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
              <li><a href="ytong.php">ИТОНГ</a></li>
            </ul>
            <ul class="barziVrazki">
              <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
              <li><a href="vata.php">ВАТА</a></li>
              <li><a href="profili.php">ПРОФИЛИ</a></li>
              <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
            </ul>
            <ul class="barziVrazki">
              <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
              <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
              <li><a href="mreji.php">МРЕЖИ</a></li>
              <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
            </ul>
            <ul class="barziVrazki">
              <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
              <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
              <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
              <li><a href="#.php">СУХИ СМЕСИ</a></li>
            </ul><br><br>
            <span>Всички права запазени</span>
            <span class="mitashki">Created by <a href="https://www.facebook.com/profile.php?id=100000686533887">Mitashki</a> &copy;</span>
          </div>
        </div>
      </div>
      <!--back to top start-->
      <a href="#" class="back-to-top">Обратно горе</a>
      <script type="text/javascript">
        $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
        var amountScrolled = 200;
        $(window).scroll(function() {
          if ( $(window).scrollTop() > amountScrolled ) {
            $('a.back-to-top').fadeIn('slow');
          } else {
            $('a.back-to-top').fadeOut('slow');
          }
        });
        $('a.back-to-top').click(function() {
          $('html, body').animate({
            scrollTop: 0
          }, 700);
          return false;
        });
      </script>
      <!--back to top end-->
      <!-- container -->
    </body>
    </html><!DOCTYPE html>
<html>
<head>
  <title>Ени-92</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
  
  <style type="text/css">
    body {
      background-image: url('img/font.jpg');
      margin: 0;
      padding: 0;
      height: 0;
    }
    .logo {
      width: 50%;
      margin-top: 2%;
      margin-bottom: 2%;
    }
    .line {
      height: 2px;
      background-color: red;
    }
    .bottom-line {
      height: 2px;
      background-color: red;
    }
    .tel {
      width: 40%;
      float: right;
    }
    h4 {
      color: red;
      display: inline-block;
    }
    
    
    
    
    @media screen and (max-width: 600px) {
      .adres, .email { font-size: 20px;}
    }
    @media screen and (max-width: 600px) {
      .email { font-size: 15px;}
    }
    @media screen and (max-width: 500px) {
      .adres, .email { font-size: 15px;}
    }
    .navbar {
      background-color: #c1c1c1;
    }
    .navbar-nav {
      width: 100%;
      text-align: center;
      background: #c1c1c1;
    }
    .navbar-nav>li {
      float: initial;
      line-height: 150px;
    }
    .nav>li {
      display:inline-block;
    }
    .van {
      width: 20%;
      float: left;
    }
    .van-button {
      width: 20%;
      float: left;
    }
    .facebook {
      width: 5%;
      margin: 0 2%;
    }
    @media screen and (max-width: 500px) {
      .facebook { width: 10%;}
    }
    @media screen and (max-width: 780px) {
      .van { display: none;}
    }
    @media screen and (min-width: 780px) {
      .van-button { display: none;}
    }
    @media screen and (max-width: 760px) {
      .van-button { width: 40%;}
    }
    /*CATEGORY END*/
    /*footer start*/
    .footer, .push {
      min-height: 4em;
      margin: 0 auto;
      margin-bottom: 1%;
      border-radius: 10px;
    }
    .footer {
      padding: 2% 2% 2% 2%;
      color: #F2DBA5;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+45,6d0019+76,6d0019+79 */
      background: rgb(169,3,41); /* Old browsers */
      background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 45%, rgba(109,0,25,1) 76%, rgba(109,0,25,1) 79%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    }
    .barziVrazki > li > a {
      color: #F2DBA5;
    }
    /*fuuter end*/
    .mitashki {
      margin-left: 10%;
    }
    .input-group[class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }
    .contactForm {
      background-color: #5B74A9;
      color: white;
      margin: 1%;
      margin-left: 10%;
    }
    @media screen and (max-width: 500px) {
      .contactForm { margin: 0 auto; font-size: 11px;}
    }
    .contactForm:hover {
      background-color: white;
      color: #5B74A9;
      border: 1px solid #5B74A9;
    }
    .modal-title {
      color: #5B74A9;
    }
    .aboutus {
      background-color: white;
      border-radius: 20px;
      margin: 3% 0;
      padding: 2%;
      box-shadow: 25px 0px 25px -25px rgba(0,0,0,0.45), -25px 0px 25px -25px rgba(0,0,0,0.45);
      
    }
    h3 {
      color: #5B74A9;
    }
    .dropdown-menu > li {
      background-color: white;
      text-align: left;
    }
    .barziVrazki {
      display: inline-block;
    }
    a.back-to-top {
      display: none;
      width: 50px;
      height: 50px;
      text-indent: -9999px;
      position: fixed;
      z-index: 999;
      right: 2%;
      bottom: 2%;
      background: #27AE61 url("img/top.png") no-repeat center ;
      background-size: 100%;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      opacity: 0.3;
      outline: 0;
    }
    a.back-to-top:hover {
      opacity: 1;
    }
  </style>
</head>
<body>
  <?php include('send_form_email.php') ?>
  <!-- container -->
  <div class="font"></div>
  <div class="container">
    <div class="col-md-12">
      <a href="https://www.google.bg/maps/place/%D1%83%D0%BB.+%E2%80%9E%D0%92%D0%B0%D1%81%D0%B8%D0%BB+%D0%9B%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%E2%80%9C+170,+4003+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2/@42.176901,24.7414923,19z/data=!4m5!3m4!1s0x14acd223c431e1f3:0x49b0bd0dcba79efc!8m2!3d42.17696!4d24.741962"> <h4 class="adres">гр. Пловдив 4003,  ул. Васил Левски №170 </h4></a>
      <a href="https://www.facebook.com/eni92.eood/?fref=ts"><img class="facebook" src="img/facebook.ico"></a>
      <h4 class="email">Email: eni92@abv.bg</h4>
      
      <!--contact us form start-->
      
      <!-- Button to trigger modal -->
      <a href="#myModal" role="button" class="btn btn-custom contactForm" data-toggle="modal">Отворете Формата за Връзка с Нас</a>
      <!-- Modal -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Форма за връзка с нас</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="comment">Въпрос или Коментар</label>
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
      </div><!-- End of Modal -->
      <!--contact us form edn-->
    </div>
    <div class="col-md-12"><div class="line"></div></div>
    <div class="col-md-12">
      <div>
        <img class="tel" src="img/tel.png">
      </div>
      <a href="eni92.php"><img class="logo" src="img/logo1.jpg"></a>
    </div>
    <div class="col-md-12 col-centered">
      <div class="navbar navbar-default navbar-top">
        <div class="navbar-header">
          <img class="van-button" src="img/transport.png">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <img class="van" src="img/transport.png">
            <li><a href="eni92.php">НАЧАЛО</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ПРОДУКТИ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="#">ТОНИРАНЕ</a></li>
            <li><a href="#">ПОД НАЕМ</a></li>
            <li><a href="aboutus.php">ЗА НАС</a></li>
            <li><a href="contacts.php">КОНТАКТИ</a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-md-12"><div class="bottom-line"></div></div>
      <div class="col-md-12 aboutus">
        <p class="zanas"><h3>СТРОИТЕЛНИ СИСТЕМИ ЕНИ-92 ЕООД - ЛИДЕР В ТЪРГОВИЯТА СЪС СТРОИТЕЛНИ МАТЕРИАЛИ!</h3><br><br>
          Строителни Системи <b>ЕНИ-92 ЕООД</b> е основана през 2000 г. в гр. Пловдив. От самото си създаване фирмата работи неуморно с цел да удоволетвори нуждите на всеки един клиент, предлагайки му професионално обслужване и индивидуално решение. Динамично развиващия се пазар налага необходимостта от обогатяване на асортимента на предлаганите продукти, затова и компанията разполага с разнообразна гама от разнородни материали – системи окачени тавани, системи от гипсокартон и гипсофазер, топлоизолации, мазилки и бои, хидроизолации, тухли, керемиди, строителен шперплат и OSB, продукти за отводняване и пречистване и много други. Продуктовата гама на Строителни Системи <b>ЕНИ-92 ЕООД</b> непрекъснато нараства. Компанията е официален партньор на успешно наложили се производители на Европейския пазар.</p><br><br>
          <h3>СТРОИТЕЛНИ СИСТЕМИ <b>ЕНИ-92 ЕООД</b> - ВИНАГИ БЛИЗО ДО ВАС!</h3>
        </div>
        <div class="push"></div>
        <div class="col-md-12 col-centered">
          <div class="footer">
            <span>БЪРЗИ ВРЪЗКИ</span><br>
            <ul class="barziVrazki">
              <li><a href="tuhli.php">ТУХЛИ</a></li>
              <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
              <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
              <li><a href="ytong.php">ИТОНГ</a></li>
            </ul>
            <ul class="barziVrazki">
              <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
              <li><a href="vata.php">ВАТА</a></li>
              <li><a href="profili.php">ПРОФИЛИ</a></li>
              <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
            </ul>
            <ul class="barziVrazki">
              <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
              <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
              <li><a href="mreji.php">МРЕЖИ</a></li>
              <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
            </ul>
            <ul class="barziVrazki">
              <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
              <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСВТВО</a></li>
              <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
              <li><a href="#.php">СУХИ СМЕСИ</a></li>
            </ul><br><br>
            <span>Всички права запазени</span>
            <span class="mitashki">Created by <a href="https://www.facebook.com/profile.php?id=100000686533887">Mitashki</a> &copy;</span>
          </div>
        </div>
      </div>
      <!--back to top start-->
      <a href="#" class="back-to-top">Обратно горе</a>
      <script type="text/javascript">
        $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
        var amountScrolled = 200;
        $(window).scroll(function() {
          if ( $(window).scrollTop() > amountScrolled ) {
            $('a.back-to-top').fadeIn('slow');
          } else {
            $('a.back-to-top').fadeOut('slow');
          }
        });
        $('a.back-to-top').click(function() {
          $('html, body').animate({
            scrollTop: 0
          }, 700);
          return false;
        });
      </script>
      <!--back to top end-->
      <!-- container -->
    </body>
    </html><!DOCTYPE html>
<html>
<head>
  <title>Ени-92</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
  
  <style type="text/css">
    body {
      background-image: url('img/font.jpg');
      margin: 0;
      padding: 0;
      height: 0;
    }
    .logo {
      width: 50%;
      margin-top: 2%;
      margin-bottom: 2%;
    }
    .line {
      height: 2px;
      background-color: red;
    }
    .bottom-line {
      height: 2px;
      background-color: red;
    }
    .tel {
      width: 40%;
      float: right;
    }
    h4 {
      color: red;
      display: inline-block;
    }
    
    
    
    
    @media screen and (max-width: 600px) {
      .adres, .email { font-size: 20px;}
    }
    @media screen and (max-width: 600px) {
      .email { font-size: 15px;}
    }
    @media screen and (max-width: 500px) {
      .adres, .email { font-size: 15px;}
    }
    .navbar {
      background-color: #c1c1c1;
    }
    .navbar-nav {
      width: 100%;
      text-align: center;
      background: #c1c1c1;
    }
    .navbar-nav>li {
      float: initial;
      line-height: 150px;
    }
    .nav>li {
      display:inline-block;
    }
    .van {
      width: 20%;
      float: left;
    }
    .van-button {
      width: 20%;
      float: left;
    }
    .facebook {
      width: 5%;
      margin: 0 2%;
    }
    @media screen and (max-width: 500px) {
      .facebook { width: 10%;}
    }
    @media screen and (max-width: 780px) {
      .van { display: none;}
    }
    @media screen and (min-width: 780px) {
      .van-button { display: none;}
    }
    @media screen and (max-width: 760px) {
      .van-button { width: 40%;}
    }
    /*CATEGORY END*/
    /*footer start*/
    .footer, .push {
      min-height: 4em;
      margin: 0 auto;
      margin-bottom: 1%;
      border-radius: 10px;
    }
    .footer {
      padding: 2% 2% 2% 2%;
      color: #F2DBA5;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+45,6d0019+76,6d0019+79 */
      background: rgb(169,3,41); /* Old browsers */
      background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 45%, rgba(109,0,25,1) 76%, rgba(109,0,25,1) 79%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    }
    .barziVrazki > li > a {
      color: #F2DBA5;
    }
    /*fuuter end*/
    .mitashki {
      margin-left: 10%;
    }
    .input-group[class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }
    .contactForm {
      background-color: #5B74A9;
      color: white;
      margin: 1%;
      margin-left: 10%;
    }
    @media screen and (max-width: 500px) {
      .contactForm { margin: 0 auto; font-size: 11px;}
    }
    .contactForm:hover {
      background-color: white;
      color: #5B74A9;
      border: 1px solid #5B74A9;
    }
    .modal-title {
      color: #5B74A9;
    }
    .betonoviIzdeliq {
      background-color: white;
      margin: 1% 0;
      box-shadow: 25px 0px 25px -25px rgba(0,0,0,0.45), -25px 0px 25px -25px rgba(0,0,0,0.45);
      
    }
    .tuhla {
      width: 30%;
    }
    .betonoviTuhli, .dvoinoKominnoTqlo, .prehodZaKomin {
      border-bottom: 1px solid red;
    }
    .tuhla {
      margin:1%;
    }
    .dropdown-menu > li {
      background-color: white;
      text-align: left;
    }
    .barziVrazki {
      display: inline-block;
    }
    a.back-to-top {
      display: none;
      width: 50px;
      height: 50px;
      text-indent: -9999px;
      position: fixed;
      z-index: 999;
      right: 2%;
      bottom: 2%;
      background: #27AE61 url("img/top.png") no-repeat center ;
      background-size: 100%;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      opacity: 0.3;
      outline: 0;
    }
    a.back-to-top:hover {
      opacity: 1;
    }
  </style>
</head>
<body>
  <?php include('send_form_email.php') ?>
  <!-- container -->
  <div class="font"></div>
  <div class="container">
    <div class="col-md-12">
      <a href="https://www.google.bg/maps/place/%D1%83%D0%BB.+%E2%80%9E%D0%92%D0%B0%D1%81%D0%B8%D0%BB+%D0%9B%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%E2%80%9C+170,+4003+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2/@42.176901,24.7414923,19z/data=!4m5!3m4!1s0x14acd223c431e1f3:0x49b0bd0dcba79efc!8m2!3d42.17696!4d24.741962"> <h4 class="adres">гр. Пловдив 4003,  ул. Васил Левски №170 </h4></a>
      <a href="https://www.facebook.com/eni92.eood/?fref=ts"><img class="facebook" src="img/facebook.ico"></a>
      <h4 class="email">Email: eni92@abv.bg</h4>
      
      <!--contact us form start-->
      
      <!-- Button to trigger modal -->
      <a href="#myModal" role="button" class="btn btn-custom contactForm" data-toggle="modal">Отворете Формата за Връзка с Нас</a>
      <!-- Modal -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Форма за връзка с нас</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="comment">Въпрос или Коментар</label>
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
      </div><!-- End of Modal -->
      <!--contact us form edn-->
    </div>
    <div class="col-md-12"><div class="line"></div></div>
    <div class="col-md-12">
      <div>
        <img class="tel" src="img/tel.png">
      </div>
      <a href="eni92.php"><img class="logo" src="img/logo1.jpg"></a>
    </div>
    <div class="col-md-12 col-centered">
      <div class="navbar navbar-default navbar-top">
        <div class="navbar-header">
          <img class="van-button" src="img/transport.png">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <img class="van" src="img/transport.png">
            <li><a href="eni92.php">НАЧАЛО</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ПРОДУКТИ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="#">ТОНИРАНЕ</a></li>
            <li><a href="#">ПОД НАЕМ</a></li>
            <li><a href="aboutus.php">ЗА НАС</a></li>
            <li><a href="contacts.php">КОНТАКТИ</a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-md-12"><div class="bottom-line"></div></div>
      <div class="col-md-12 betonoviIzdeliq">
        <div class="betonoviTuhli">
          <h3>Бетонови тухли</h3>
          <p class="tuhliInfo">Размери: 40x15x20<br>
            Тегло: 14,5 кг.<br>
            Разход за m2: 12,5 бр.<br>
            Тип: вибропресована</p>
            <img class="tuhla" src="img/betonovituhli.jpg">
          </div>
          <div class="dvoinoKominnoTqlo">
            <h3>Двойно коминно тяло</h3>
            <p>Размери: 45х25х20см<br>
              Тегло: 20кг<br>
              Разход за метър: 5 бр<br>
              Тип: вибропресовано, двойно.</p>
              <img class="tuhla" src="img/dvoinokominnotqlo.jpg">
            </div>
            <div class="prehodZaKomin">
              <h3>Преход за комин тип "А" и "Б"</h3>
              <p>Размери: 45х25х20см<br>
                Тегло: 20кг<br>
                Разход за метър: 5 бр<br>
                Тип: вибропресовано, двойно</p>
                <img class="tuhla" src="img/prehodzakomin.jpg">
              </div>
              <h4><b>ЗА ПРОДУКТИ КОИТО НЕ ВИЖДАТЕ В КАТЕГОРИЯТА, МОЛЯ СВЪРЖЕТЕ СЕ С НАС НА ПОСОЧЕНИТЕ ТЕЛЕФОНИ</b></h4>
            </div>
            <div class="push"></div>
            <div class="col-md-12 col-centered">
              <div class="footer">
                <span>БЪРЗИ ВРЪЗКИ</span><br>
                <ul class="barziVrazki">
                  <li><a href="tuhli.php">ТУХЛИ</a></li>
                  <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                  <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                  <li><a href="ytong.php">ИТОНГ</a></li>
                </ul>
                <ul class="barziVrazki">
                  <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                  <li><a href="vata.php">ВАТА</a></li>
                  <li><a href="profili.php">ПРОФИЛИ</a></li>
                  <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                </ul>
                <ul class="barziVrazki">
                  <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                  <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                  <li><a href="mreji.php">МРЕЖИ</a></li>
                  <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                </ul>
                <ul class="barziVrazki">
                  <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                  <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                  <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                  <li><a href="#.php">СУХИ СМЕСИ</a></li>
                </ul><br><br>
                <span>Всички права запазени</span>
                <span class="mitashki">Created by <a href="https://www.facebook.com/profile.php?id=100000686533887">Mitashki</a> &copy;</span>
              </div>
            </div>
          </div>
          <!--back to top start-->
          <a href="#" class="back-to-top">Обратно горе</a>
          <script type="text/javascript">
            $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
            var amountScrolled = 200;
            $(window).scroll(function() {
              if ( $(window).scrollTop() > amountScrolled ) {
                $('a.back-to-top').fadeIn('slow');
              } else {
                $('a.back-to-top').fadeOut('slow');
              }
            });
            $('a.back-to-top').click(function() {
              $('html, body').animate({
                scrollTop: 0
              }, 700);
              return false;
            });
          </script>
          <!--back to top end-->
          <!-- container -->
        </body>
        </html><!DOCTYPE html>
<html>
<head>
  <title>Ени-92</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
  
  <style type="text/css">
    body {
      background-image: url('img/font.jpg');
      margin: 0;
      padding: 0;
      height: 0;
    }
    .logo {
      width: 50%;
      margin-top: 2%;
      margin-bottom: 2%;
    }
    .line {
      height: 2px;
      background-color: red;
    }
    .bottom-line {
      height: 2px;
      background-color: red;
    }
    .tel {
      width: 40%;
      float: right;
    }
    h4 {
      color: red;
      display: inline-block;
    }
    
    
    
    
    @media screen and (max-width: 600px) {
      .adres, .email { font-size: 20px;}
    }
    @media screen and (max-width: 600px) {
      .email { font-size: 15px;}
    }
    @media screen and (max-width: 500px) {
      .adres, .email { font-size: 15px;}
    }
    .navbar {
      background-color: #c1c1c1;
    }
    .navbar-nav {
      width: 100%;
      text-align: center;
      background: #c1c1c1;
    }
    .navbar-nav>li {
      float: initial;
      line-height: 150px;
    }
    .nav>li {
      display:inline-block;
    }
    .van {
      width: 20%;
      float: left;
    }
    .van-button {
      width: 20%;
      float: left;
    }
    .facebook {
      width: 5%;
      margin: 0 2%;
    }
    @media screen and (max-width: 500px) {
      .facebook { width: 10%;}
    }
    @media screen and (max-width: 780px) {
      .van { display: none;}
    }
    @media screen and (min-width: 780px) {
      .van-button { display: none;}
    }
    @media screen and (max-width: 760px) {
      .van-button { width: 40%;}
    }
    /*CATEGORY END*/
    /*footer start*/
    .footer, .push {
      min-height: 4em;
      margin: 0 auto;
      margin-bottom: 1%;
      border-radius: 10px;
    }
    .footer {
      padding: 2% 2% 2% 2%;
      color: #F2DBA5;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+45,6d0019+76,6d0019+79 */
      background: rgb(169,3,41); /* Old browsers */
      background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 45%, rgba(109,0,25,1) 76%, rgba(109,0,25,1) 79%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    }
    .barziVrazki > li > a {
      color: #F2DBA5;
    }
    /*fuuter end*/
    .mitashki {
      margin-left: 10%;
    }
    .input-group[class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }
    .contactForm {
      background-color: #5B74A9;
      color: white;
      margin: 1%;
      margin-left: 10%;
    }
    @media screen and (max-width: 500px) {
      .contactForm { margin: 0 auto; font-size: 11px;}
    }
    .contactForm:hover {
      background-color: white;
      color: #5B74A9;
      border: 1px solid #5B74A9;
    }
    .modal-title {
      color: #5B74A9;
    }
    .contacts {
      background-color: white;
      border-radius: 20px;
      margin: 3% 0;
      padding: 2%;
      box-shadow: 25px 0px 25px -25px rgba(0,0,0,0.45), -25px 0px 25px -25px rgba(0,0,0,0.45);
      
    }
    .contacti {
      float: left;
      margin-right: 5%;
    }
    @media screen and (max-width: 1000px) {
      .contacti { float: none;}
    }
    .centralenOfis {
      color: #5B74A9;
    }
    .map {
      width: 50%;
    }
    .dropdown-menu > li {
      background-color: white;
      text-align: left;
    }
    .barziVrazki {
      display: inline-block;
    }
    a.back-to-top {
      display: none;
      width: 50px;
      height: 50px;
      text-indent: -9999px;
      position: fixed;
      z-index: 999;
      right: 2%;
      bottom: 2%;
      background: #27AE61 url("img/top.png") no-repeat center ;
      background-size: 100%;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      opacity: 0.3;
      outline: 0;
    }
    a.back-to-top:hover {
      opacity: 1;
    }
  </style>
</head>
<body>
  <?php include('send_form_email.php') ?>
  <!-- container -->
  <div class="font"></div>
  <div class="container">
    <div class="col-md-12">
      <a href="https://www.google.bg/maps/place/%D1%83%D0%BB.+%E2%80%9E%D0%92%D0%B0%D1%81%D0%B8%D0%BB+%D0%9B%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%E2%80%9C+170,+4003+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2/@42.176901,24.7414923,19z/data=!4m5!3m4!1s0x14acd223c431e1f3:0x49b0bd0dcba79efc!8m2!3d42.17696!4d24.741962"> <h4 class="adres">гр. Пловдив 4003,  ул. Васил Левски №170 </h4></a>
      <a href="https://www.facebook.com/eni92.eood/?fref=ts"><img class="facebook" src="img/facebook.ico"></a>
      <h4 class="email">Email: eni92@abv.bg</h4>
      
      <!--contact us form start-->
      
      <!-- Button to trigger modal -->
      <a href="#myModal" role="button" class="btn btn-custom contactForm" data-toggle="modal">Отворете Формата за Връзка с Нас</a>
      <!-- Modal -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Форма за връзка с нас</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="comment">Въпрос или Коментар</label>
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
      </div><!-- End of Modal -->
      <!--contact us form edn-->
    </div>
    <div class="col-md-12"><div class="line"></div></div>
    <div class="col-md-12">
      <div>
        <img class="tel" src="img/tel.png">
      </div>
      <a href="eni92.php"><img class="logo" src="img/logo1.jpg"></a>
    </div>
    <div class="col-md-12 col-centered">
      <div class="navbar navbar-default navbar-top">
        <div class="navbar-header">
          <img class="van-button" src="img/transport.png">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <img class="van" src="img/transport.png">
            <li><a href="eni92.php">НАЧАЛО</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ПРОДУКТИ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="#">ТОНИРАНЕ</a></li>
            <li><a href="#">ПОД НАЕМ</a></li>
            <li><a href="aboutus.php">ЗА НАС</a></li>
            <li><a href="contacts.php">КОНТАКТИ</a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-md-12"><div class="bottom-line"></div></div>
      <div class="col-md-12 contacts">
        <div class="modal-dialog contacti">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">СВЪРЖЕТЕ СЕ С НАС</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="comment">Въпрос или Коментар</label>
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
        <h1 class="centralenOfis">Централен офис</h1>
        <h3>гр. Пловдив</h3>
        <h3>ул. Васил Левски № 170</h3>
        <h3>тел:<br> 0887610888</br>0882068779<br>0888528471</h3>
        <h3>e-mail: eni92@abv.bg</h3>
        <div class="map">
          <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:700px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="http://embedgooglemaps.com">embed google maps</a></small></div><div><small><a href="http://phplinkdir.com/">link directory</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:13,center:new google.maps.LatLng(42.17696,24.741962000000058),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(42.17696,24.741962000000058)});infowindow = new google.maps.InfoWindow({content:'<strong>ЕНИ-92</strong><br>ул. Васил Левски 170, Пловдив, България<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
        </div>
      </div>
      <div class="push"></div>
      <div class="col-md-12 col-centered">
        <div class="footer">
          <span>БЪРЗИ ВРЪЗКИ</span><br>
          <ul class="barziVrazki">
            <li><a href="tuhli.php">ТУХЛИ</a></li>
            <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
            <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
            <li><a href="ytong.php">ИТОНГ</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
            <li><a href="vata.php">ВАТА</a></li>
            <li><a href="profili.php">ПРОФИЛИ</a></li>
            <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
            <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
            <li><a href="mreji.php">МРЕЖИ</a></li>
            <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
            <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
            <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
            <li><a href="#.php">СУХИ СМЕСИ</a></li>
          </ul><br><br>
          <span>Всички права запазени</span>
          <span class="mitashki">Created by <a href="https://www.facebook.com/profile.php?id=100000686533887">Mitashki</a> &copy;</span>
        </div>
      </div>
    </div>
    <!--back to top start-->
    <a href="#" class="back-to-top">Обратно горе</a>
    <script type="text/javascript">
      $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
      var amountScrolled = 200;
      $(window).scroll(function() {
        if ( $(window).scrollTop() > amountScrolled ) {
          $('a.back-to-top').fadeIn('slow');
        } else {
          $('a.back-to-top').fadeOut('slow');
        }
      });
      $('a.back-to-top').click(function() {
        $('html, body').animate({
          scrollTop: 0
        }, 700);
        return false;
      });
    </script>
    <!--back to top end-->
    <!-- container -->
  </body>
  </html><!DOCTYPE html>
<html>
<head>
  <title>Ени-92</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
  
  <style type="text/css">
    body {
      background-image: url('img/font.jpg');
      margin: 0;
      padding: 0;
      height: 0;
    }
    .logo {
      width: 50%;
      margin-top: 2%;
      margin-bottom: 2%;
    }
    .line {
      height: 2px;
      background-color: red;
    }
    .bottom-line {
      height: 2px;
      background-color: red;
    }
    .tel {
      width: 40%;
      float: right;
    }
    h4 {
      color: red;
      display: inline-block;
    }
    h2 {
      color: red;
    }
    
    
    
    @media screen and (max-width: 600px) {
      .adres, .email { font-size: 20px;}
    }
    @media screen and (max-width: 600px) {
      .email { font-size: 15px;}
    }
    @media screen and (max-width: 500px) {
      .adres, .email { font-size: 15px;}
    }
    .navbar {
      background-color: #c1c1c1;
    }
    .navbar-nav {
      width: 100%;
      text-align: center;
      background: #c1c1c1;
    }
    .navbar-nav>li {
      float: initial;
      line-height: 150px;
    }
    .nav>li {
      display:inline-block;
    }
    .van {
      width: 20%;
      float: left;
    }
    .van-button {
      width: 20%;
      float: left;
    }
    .facebook {
      width: 5%;
      margin: 0 2%;
    }
    @media screen and (max-width: 500px) {
      .facebook { width: 10%;}
    }
    @media screen and (max-width: 780px) {
      .van { display: none;}
    }
    @media screen and (min-width: 780px) {
      .van-button { display: none;}
    }
    @media screen and (max-width: 760px) {
      .van-button { width: 40%;}
    }
    /*CATEGORY END*/
    /*footer start*/
    .footer, .push {
      min-height: 4em;
      margin: 0 auto;
      margin-bottom: 1%;
      border-radius: 10px;
    }
    .footer {
      padding: 2% 2% 2% 2%;
      color: #F2DBA5;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+45,6d0019+76,6d0019+79 */
      background: rgb(169,3,41); /* Old browsers */
      background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 45%, rgba(109,0,25,1) 76%, rgba(109,0,25,1) 79%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    }
    .barziVrazki > li > a {
      color: #F2DBA5;
    }
    /*fuuter end*/
    .mitashki {
      margin-left: 10%;
    }
    .input-group[class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }
    .contactForm {
      background-color: #5B74A9;
      color: white;
      margin: 1%;
      margin-left: 10%;
    }
    @media screen and (max-width: 500px) {
      .contactForm { margin: 0 auto; font-size: 11px;}
    }
    .contactForm:hover {
      background-color: white;
      color: #5B74A9;
      border: 1px solid #5B74A9;
    }
    .modal-title {
      color: #5B74A9;
    }
    .dropdown-menu > li {
      background-color: white;
      text-align: left;
    }
    .barziVrazki {
      display: inline-block;
    }
    a.back-to-top {
      display: none;
      width: 50px;
      height: 50px;
      text-indent: -9999px;
      position: fixed;
      z-index: 999;
      right: 2%;
      bottom: 2%;
      background: #27AE61 url("img/top.png") no-repeat center ;
      background-size: 100%;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      opacity: 0.3;
      outline: 0;
    }
    a.back-to-top:hover {
      opacity: 1;
    }
    .vintoveIDiubeli {
      background-color: white;
      margin: 1% 0;
      box-shadow: 25px 0px 25px -25px rgba(0,0,0,0.45), -25px 0px 25px -25px rgba(0,0,0,0.45);
      
    }
    #x_1, #x_2, #x_3 {
      margin: 1%;
    }
    .diubeliIVintove {
      text-align: center;
    }
    .visibleClass {
      display: block !important;
    }
    img.diubeli {
      float: right;
      width: 20%;
    }
    h3.diubeli {
      border-bottom: 1px solid red;
      padding: 1% 0;
    }
    table {
      overflow-x: auto;
      display: block;
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    tr:nth-child(even) {
      background-color: #dddddd;
    }
    div.diubeli, div.vintove, div.klinove {
      border-bottom: 1px solid red;
      margin: 1% 0;
    }
  </style>
  <script>
    function showDiv(data) {
      $("#ele-" + data).addClass('visibleClass');
      hideElement(6, data);
    }
    function hideElement(total, active) {
      for (i = 1; i <= total; i++) {
        if (i != active)
          $("#ele-" + i).removeClass('visibleClass');
      }
    }
  </script>
</head>
<body>
  <?php include('send_form_email.php') ?>
  <!-- container -->
  <div class="font"></div>
  <div class="container">
    <div class="col-md-12">
      <a href="https://www.google.bg/maps/place/%D1%83%D0%BB.+%E2%80%9E%D0%92%D0%B0%D1%81%D0%B8%D0%BB+%D0%9B%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%E2%80%9C+170,+4003+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2/@42.176901,24.7414923,19z/data=!4m5!3m4!1s0x14acd223c431e1f3:0x49b0bd0dcba79efc!8m2!3d42.17696!4d24.741962"> <h4 class="adres">гр. Пловдив 4003,  ул. Васил Левски №170 </h4></a>
      <a href="https://www.facebook.com/eni92.eood/?fref=ts"><img class="facebook" src="img/facebook.ico"></a>
      <h4 class="email">Email: eni92@abv.bg</h4>
      
      <!--contact us form start-->
      
      <!-- Button to trigger modal -->
      <a href="#myModal" role="button" class="btn btn-custom contactForm" data-toggle="modal">Отворете Формата за Връзка с Нас</a>
      <!-- Modal -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Форма за връзка с нас</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="comment">Въпрос или Коментар</label>
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
      </div><!-- End of Modal -->
      <!--contact us form edn-->
    </div>
    <div class="col-md-12"><div class="line"></div></div>
    <div class="col-md-12">
      <div>
        <img class="tel" src="img/tel.png">
      </div>
      <a href="eni92.php"><img class="logo" src="img/logo1.jpg"></a>
    </div>
    <div class="col-md-12 col-centered">
      <div class="navbar navbar-default navbar-top">
        <div class="navbar-header">
          <img class="van-button" src="img/transport.png">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <img class="van" src="img/transport.png">
            <li><a href="eni92.php">НАЧАЛО</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ПРОДУКТИ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="#">ТОНИРАНЕ</a></li>
            <li><a href="#">ПОД НАЕМ</a></li>
            <li><a href="aboutus.php">ЗА НАС</a></li>
            <li><a href="contacts.php">КОНТАКТИ</a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-md-12"><div class="bottom-line"></div></div>
      <div class="col-md-12 vintoveIDiubeli">
        <h2><b>ДЮБЕЛИ И ВИНТОВЕ</b></h2><br><br>
        <div class="diubeliIVintove">
          <input type="button" class="btn btn-primary" id="x_1" value="ДЮБЕЛИ" onclick="showDiv('1')">
          <input type="button" class="btn btn-primary" id="x_2" value="ВИНТОВЕ" onclick="showDiv('2')">
          <input type="button" class="btn btn-primary" id="x_3" value="КЛИНОВЕ" onclick="showDiv('3')">
        </div>
        <div id="ele-1" style="display: none;">
          <h3 class="diubeli"><b>ДЮБЕЛИ</b></h3><br>
          <div class="diubeli">
            <img class="diubeli" src="img/diubelzabeton.jpg">
            <h4><b>ДЮБЕЛИ ЗА БЕТОН</b></h4><br>
            
            <table>
              <tr>
                <th>размер в мм</th>
                <th>Ø на отвор в мм</th>
                <th>макс. дебелина на изолация в мм</th>
                <th>необходима дълбочина на пробив в см</th>
                <th>мин. дебелина на основата в мм</th>
              </tr>
              <tr>
                <th>8х50мм</th>
                <th>8</th>
                <th>2</th>
                <th>55</th>
                <th>40</th>
              </tr>
              <tr>
                <th>8х70мм</th>
                <th>8</th>
                <th>3</th>
                <th>75</th>
                <th>45</th>
              </tr>
              <tr>
                <th>8х90мм</th>
                <th>8</th>
                <th>5</th>
                <th>95</th>
                <th>50</th>
              </tr>
              <tr>
                <th>8х110мм</th>
                <th>8</th>
                <th>6</th>
                <th>115</th>
                <th>60</th>
              </tr>
              <tr>
                <th>8х130мм</th>
                <th>8</th>
                <th>8</th>
                <th>135</th>
                <th>65</th>
              </tr>
              <tr>
                <th>10х100мм</th>
                <th>10</th>
                <th>6</th>
                <th>105</th>
                <th>50</th>
              </tr>
              <tr>
                <th>10х120мм</th>
                <th>10</th>
                <th>8</th>
                <th>125</th>
                <th>55</th>
              </tr>
              <tr>
                <th>10х140мм</th>
                <th>10</th>
                <th>10</th>
                <th>145</th>
                <th>55</th>
              </tr>
              <tr>
                <th>10х160мм</th>
                <th>10</th>
                <th>12</th>
                <th>165</th>
                <th>60</th>
              </tr>
              <tr>
                <th>10х180мм</th>
                <th>10</th>
                <th>14</th>
                <th>185</th>
                <th>65</th>
              </tr>
            </table>
            <h4><b>ОПИСАНИЕ</b></h4><br>
            <p><b>ДЮБЕЛ ЗА БЕТОН</b><br>
              
              Обикновен дюбел за основи от бетон, подходящ за закрепване на топлоизолационни плочи към фасадни конструкции от бетон.</p><br><br>
            </div>
            <div class="diubeli">
              <img class="diubeli" src="img/diubelpiron.jpg">
              <h4><b>ДЮБЕЛ-ПИРОН</b></h4><br>
              <ul>
                <li>материал на дюбела: полипропилен</li>
                <li>материал на винта: стомана</li>
                <li>диаметър на винта: от 3.5 до 6.9 мм в зависимост от размера</li>
                <li>диаметър на пробиване: от 5 до 10 мм в зависимост от размера</li>
              </ul>
              <table>
                <tr>
                  <th>размер в мм</th>
                  <th>за накрайник тип</th>
                  <th>бр. в кутия</th>
                  <th>тегло с опаковката</th>
                </tr>
                <tr>
                  <th>6х40</th>
                  <th>PZ 2</th>
                  <th>200</th>
                  <th>0.753</th>
                </tr>
                <tr>
                  <th>6х60</th>
                  <th>PZ 2</th>
                  <th>200</th>
                  <th>1.152</th>
                </tr>
                <tr>
                  <th>6х80</th>
                  <th>PZ 2</th>
                  <th>100</th>
                  <th>0.740</th>
                </tr>
                <tr>
                  <th>8х80</th>
                  <th>PZ 2</th>
                  <th>100</th>
                  <th>1.122</th>
                </tr>
                <tr>
                  <th>8х100</th>
                  <th>PZ 2</th>
                  <th>100</th>
                  <th>1.461</th>
                </tr>
                <tr>
                  <th>8х120</th>
                  <th>PZ 2</th>
                  <th>100</th>
                  <th>1.571</th>
                </tr>
              </table>
              <h4><b>ОПИСАНИЕ</b></h4><br>
              <p><b>ПИРОН-ДЮБЕЛ</b><br>
                <b>Пирон-дюбел</b> се използва за бърз монтаж на дървени и метални елементи, рамки за сухо строителство с гипсокартон и други сходни материали.Продукта е подходящо решение за фиксиране на детайли в бетон, плътни тухли, естествен камък и други.
              </p><br><br>
            </div>
            <div class="diubeli">
              <img class="diubeli" src="img/diubelizolaciq.jpg">
              <h4><b>Дюбел за изолация с пирон</b></h4><br>
              <ul>
                <li><b>Размер:</b></li>
                <li>10x110 - 10x120 - 10x140 - 10x160 - 10x180 - 10x200</li>
              </ul>
              <h4><b>ОПИСАНИЕ</b></h4><br>
              <p><b>Дюбел за изолация с пирон</b><br>
                Използва се при монтиране на изолации EPS и HPS към основа от бетон, камък, тухла и други материали. Дюбелът е проектиран за монтиране на леки термични изолационни матвериали към външни стени
              </p><br><br>
            </div>
          </div>
          <div id="ele-2" style="display: none;">
            <h3 class="diubeli"><b>ВИНТОВЕ</b></h3><br>
            <div class="vintove">
              <img class="diubeli" src="img/vint25.jpg">
              <h4><b>ВИНТОВЕ ЗА ГИПСОКАРТОН</b></h4><br>
              <table>
                <tr>
                  <th>винт дължина в мм</th>
                  <th>винт дебелин в мм</th>
                  <th>бр в опаковка</th>
                </tr>
                <tr>
                  <th>25мм</th>
                  <th>3,5мм</th>
                  <th>1000</th>
                </tr>
                <tr>
                  <th>35мм</th>
                  <th>3,5мм</th>
                  <th>1000</th>
                </tr>
              </table>
              <h4><b>ОПИСАНИЕ</b></h4><br>
              <p><b>Рапиден винт</b><br>
                
                Рапидните винтове са с тромпетна глава и с резба по цялата дължина:<br>
                - използва се за метални профили с дебелина до 0,7 мм;<br>
                - става за дърво и метал; <br>
                - препоръчва се за закрепване на гипскартонени плоскости в системите за сухо строителство</p><br><br>
              </div>
              <div class="vintove">
                <img class="diubeli" src="img/vintkopche.jpg">
                <h4><b>ВИНТ ЗА ГИПСОКАРТОН 4.2X13 САМОПРОБ. БЯЛ /КОПЧЕ</b></h4><br>
                <ul>
                  <li>4.2X13 </li>
                  <li>бр. в кутия 250</li>
                  <li>+ накрайник</li>
                </ul>
                <h4><b>ОПИСАНИЕ</b></h4><br>
                <p><b>Винт копче</b></p><br><br><br><br>
              </div>
            </div>
            <div id="ele-3" style="display: none;">
              <h3 class="diubeli"><b>КЛИНОВЕ</b></h3><br>
              <div class="ankerklin">
                <img class="diubeli" src="img/ankerklin.jpg">
                <h4><b>Анкер клин за окачен таван</b></h4><br>
                <table>
                  <tr>
                    <th>размер в мм</th>
                    <th>бр. в кутия</th>
                    <th>бр. в кашон</th>
                  </tr>
                  <tr>
                    <th>6х40</th>
                    <th>100</th>
                    <th>2000</th>
                  </tr>
                  <tr>
                    <th>6х65</th>
                    <th>100</th>
                    <th>1000</th>
                  </tr>
                </table>
                <h4><b>ОПИСАНИЕ</b></h4><br>
                <p><b>ДЮБЕЛ ОКАЧЕН ТАВАН /анкер - клин/</b><br>
                  Анкер клин е вид дюбел подходящ за закачане на окачени тавани. Крепежният елемент е изключително здрав и надежден.</p><br><br>
                </div>
              </div>
            </div>
            <div class="push"></div>
            <div class="col-md-12 col-centered">
              <div class="footer">
                <span>БЪРЗИ ВРЪЗКИ</span><br>
                <ul class="barziVrazki">
                  <li><a href="tuhli.php">ТУХЛИ</a></li>
                  <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                  <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                  <li><a href="ytong.php">ИТОНГ</a></li>
                </ul>
                <ul class="barziVrazki">
                  <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                  <li><a href="vata.php">ВАТА</a></li>
                  <li><a href="profili.php">ПРОФИЛИ</a></li>
                  <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                </ul>
                <ul class="barziVrazki">
                  <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                  <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                  <li><a href="mreji.php">МРЕЖИ</a></li>
                  <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                </ul>
                <ul class="barziVrazki">
                  <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                  <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                  <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                  <li><a href="#.php">СУХИ СМЕСИ</a></li>
                </ul><br><br>
                <span>Всички права запазени</span>
                <span class="mitashki">Created by <a href="https://www.facebook.com/profile.php?id=100000686533887">Mitashki</a> &copy;</span>
              </div>
            </div>
          </div>
          <!--back to top start-->
          <a href="#" class="back-to-top">Обратно горе</a>
          <script type="text/javascript">
            $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
            var amountScrolled = 200;
            $(window).scroll(function() {
              if ( $(window).scrollTop() > amountScrolled ) {
                $('a.back-to-top').fadeIn('slow');
              } else {
                $('a.back-to-top').fadeOut('slow');
              }
            });
            $('a.back-to-top').click(function() {
              $('html, body').animate({
                scrollTop: 0
              }, 700);
              return false;
            });
          </script>
          <!--back to top end-->
          <!-- container -->
        </body>
        </html><!DOCTYPE html>
<html>
<head>
  <title>Ени-92</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js" type="text/javascript"></script>
  "width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
  <style type="text/css">
    body {
      background-image: url('img/font.jpg');
      margin: 0;
      padding: 0;
      height: 0;
    }
    .logo {
      width: 50%;
      margin-top: 2%;
      margin-bottom: 2%;
    }
    .line {
      height: 2px;
    }
    .bottom-line {
      height: 2px;
      background-color: red;
    }
    .tel {
      width: 40%;
      float: right;
    }
    h4 {
      color: red;
      display: inline-block;
    }
    .tech-slideshow {
      height: 200px;
      margin: 2% auto;
      position: relative;
      overflow: hidden;
      transform: translate3d(0, 0, 0);
    }
    .tech-slideshow > div {
      height: 200px;
      width: 4500px;
      background: url(img/marki1.jpg);
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      transform: translate3d(0, 0, 0);
    }
    .tech-slideshow .mover-1 {
      animation: moveSlideshow 12s linear infinite;
    }
    .tech-slideshow .mover-2 {
      opacity: 0;
      transition: opacity 0.5s ease-out;
      background-position: 0 -200px;
      animation: moveSlideshow 15s linear infinite;
    }
    .tech-slideshow:hover .mover-1 {
      -webkit-animation-play-state: paused; /* Safari 4.0 - 8.0 */
      animation-play-state: paused;
    }
    @keyframes moveSlideshow {
      100% {
        transform: translateX(-66.6666%);
      }
    }
    @media screen and (max-width: 600px) {
      .adres, .email { font-size: 20px;}
    }
    @media screen and (max-width: 600px) {
      .email { font-size: 15px;}
    }
    @media screen and (max-width: 500px) {
      .adres, .email { font-size: 15px;}
    }
    .navbar {
      background-color: #c1c1c1;
    }
    .navbar-nav {
      width: 100%;
      text-align: center;
      background: #c1c1c1;
    }
    .navbar-nav>li {
      float: initial;
      line-height: 150px;
    }
    .nav>li {
      display:inline-block;
    }
    .van {
      width: 20%;
      float: left;
    }
    .van-button {
      width: 20%;
      float: left;
    }
    .facebook {
      width: 5%;
      margin: 0 2%;
    }
    @media screen and (max-width: 500px) {
      .facebook { width: 10%;}
    }
    /*CATEGORY START*/
    ul.img-list>li>a>img {
      width: 150px;
      height: 150px;
      margin: 2%;
      border: 2px solid grey;
    }
    ul.img-list {
      list-style-type: none;
      margin: 0;
      padding: 0;
      text-align: center;
    }
    ul.img-list li {
      display: inline-block;
      height: 150px;
      margin: 0 1em 1em 0;
      position: relative;
      width: 150px;
    }
    span.text-content {
      background: rgba(0,0,0,0.5);
      color: white;
      cursor: pointer;
      display: table;
      height: 150px;
      left: 0;
      position: absolute;
      top: 0;
      width: 150px;
    }
    span.text-content span {
      display: table-cell;
      text-align: center;
      vertical-align: middle;
    }
    span.text-content {
      background: rgba(0,0,0,0.5);
      color: white;
      cursor: pointer;
      display: table;
      height: 150px;
      left: 0;
      position: absolute;
      top: 0;
      width: 150px;
      opacity: 0;
    }
    ul.img-list li:hover span.text-content {
      opacity: 1;
    }
    span.text-content {
      background: rgba(0,0,0,0.5);
      color: white;
      cursor: pointer;
      display: table;
      height: 150px;
      left: 2px;
      position: absolute;
      top: 2px;
      width: 150px;
      opacity: 0;
      -webkit-transition: opacity 500ms;
      -moz-transition: opacity 500ms;
      -o-transition: opacity 500ms;
      transition: opacity 500ms;
    }
    a>h4:hover {
      text-decoration: inherit;
    }
    @media screen and (max-width: 780px) {
      .van { display: none;}
    }
    @media screen and (min-width: 780px) {
      .van-button { display: none;}
    }
    @media screen and (max-width: 760px) {
      .van-button { width: 40%;}
    }
    /*CATEGORY END*/
    /*footer start*/
    .footer, .push {
      min-height: 4em;
      margin: 0 auto;
      margin-bottom: 1%;
      border-radius: 10px;
    }
    .footer {
      padding: 2% 2% 2% 2%;
      color: #F2DBA5;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+45,6d0019+76,6d0019+79 */
      background: rgb(169,3,41); /* Old browsers */
      background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 45%, rgba(109,0,25,1) 76%, rgba(109,0,25,1) 79%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    }
    .barziVrazki > li > a {
      color: #F2DBA5;
    }
    /*fuuter end*/
    .mitashki {
      margin-left: 10%;
    }
    .input-group[class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }
    .contactForm {
      background-color: #5B74A9;
      color: white;
      margin: 1%;
      margin-left: 10%;
    }
    @media screen and (max-width: 500px) {
      .contactForm { margin: 0 auto; font-size: 11px;}
    }
    .contactForm:hover {
      background-color: white;
      color: #5B74A9;
      border: 1px solid #5B74A9;
    }
    .modal-title {
      color: #5B74A9;
    }
    .dropdown-menu > li {
      background-color: white;
      text-align: left;
    }
    .barziVrazki {
      display: inline-block;
    }
    a.back-to-top {
      display: none;
      width: 50px;
      height: 50px;
      text-indent: -9999px;
      position: fixed;
      z-index: 999;
      right: 2%;
      bottom: 2%;
      background: #27AE61 url("img/top.png") no-repeat center ;
      background-size: 100%;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      opacity: 0.3;
      outline: 0;
    }
    a.back-to-top:hover {
      opacity: 1;
    }
  </style>
</head>
<body>
  <?php include('send_form_email.php') ?>
  <!-- container -->
  <div class="font"></div>
  <div class="container">
    <div class="col-md-12">
      <a href="https://www.google.bg/maps/place/%D1%83%D0%BB.+%E2%80%9E%D0%92%D0%B0%D1%81%D0%B8%D0%BB+%D0%9B%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%E2%80%9C+170,+4003+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2/@42.176901,24.7414923,19z/data=!4m5!3m4!1s0x14acd223c431e1f3:0x49b0bd0dcba79efc!8m2!3d42.17696!4d24.741962"> <h4 class="adres">гр. Пловдив 4003,  ул. Васил Левски №170 </h4></a>
      <a href="https://www.facebook.com/eni92.eood/?fref
      <h4 class="email">Email: eni92@abv.bg</h4>
      
      <!--contact us form start-->
      <!-- Button to trigger modal -->
      <a href="#myModal" role="button" class="btn btn-custom contactForm" data-toggle="modal">Отворете Формата за Връзка с Нас</a>
      <!-- Modal -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Форма за връзка с нас</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="comment">Въпрос или Коментар</label>
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
      </div><!-- End of Modal -->
      <!--contact us form edn-->
    </div>
    <div class="col-md-12"><div class="line"></div></div>
    <div class="col-md-12">
      <div>
        <img class="tel" src="img/tel.png">
      </div>
      <a href="eni92.php"><img class="logo" src="img/logo1.jpg"></a>
    </div>
    <div class="col-md-12 col-centered">
      <div class="navbar navbar-default navbar-top">
        <div class="navbar-header">
          <img class="van-button" src="img/transport.png">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <img class="van" src="img/transport.png">
            <li><a href="eni92.php">НАЧАЛО</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ПРОДУКТИ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                <li><a href="#.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="#">ТОНИРАНЕ</a></li>
            <li><a href="#">ПОД НАЕМ</a></li>
            <li><a href="aboutus.php">ЗА НАС</a></li>
            <li><a href="contacts.php">КОНТАКТИ</a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-md-12"><div class="bottom-line"></div></div>
      <div class="col-md-12">
        <div class="tech-slideshow">
          <div class="mover-1"></div>
          <div class="mover-2"></div>
        </div>
      </div>
      <div class="col-md-12"><div class="bottom-line"></div></div>
      
      <ul class="img-list">
        <li>
          <a href="tuhli.php">
            <img src="img/tuhli.jpg" />
            <span class="text-content"><span>ТУХЛИ</span></span>
          </a>
        </li>
        <li>
          <a href="betonoviizdeliq.php">
            <img src="img/betonovi.jpg" />
            <span class="text-content"><span>БЕТОНОВИ ИЗДЕЛИЯ</span></span>
          </a>
        </li>
        <li>
          <a href="keremidi.php">
            <img src="img/keremidi.jpg" />
            <span class="text-content"><span>КЕРЕМИДИ</span></span>
          </a>
        </li>
        <li>
          <a href="ytong.php">
            <img src="img/itong.jpg" />
            <span class="text-content"><span>ИТОНГ</span></span>
          </a>
        </li>
        <li>
          <a href="izolaciq.php">
            <img src="img/izolaciq.jpeg" />
            <span class="text-content"><span>ИЗОЛАЦИЙ</span></span>
          </a>
        </li>
        <li>
          <a href="vata.php">
            <img src="img/vata.jpeg" />
            <span class="text-content"><span>ВАТА</span></span>
          </a>
        </li>
        <li>
          <a href="profili.php">
            <img src="img/cd.jpg" />
            <span class="text-content"><span>ПРОФИЛИ</span></span>
          </a>
        </li>
        <li>
          <a href="aksesoari.php">
            <img src="img/profili.jpg" />
            <span class="text-content"><span>АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</span></span>
          </a>
        </li>
        <li>
          <a href="gipsokarton.php">
            <img src="img/gipsokarton.jpg" />
            <span class="text-content"><span>ГИПСОКАРТОН</span></span>
          </a>
        </li>
        <li>
          <a href="okachentavan.php">
            <img src="img/pano.jpg" />
            <span class="text-content"><span>ОКАЧЕН ТАВАН</span></span>
          </a>
        </li>
        <li>
          <a href="mazilkiiboi.php">
            <img src="img/mazilki.jpg" />
            <span class="text-content"><span>МАЗИЛКИ И БОИ</span></span>
          </a>
        </li>
        <li>
          <a href="mreji.php">
            <img src="img/mreji.jpg" />
            <span class="text-content"><span>МРЕЖИ</span></span>
          </a>
        </li>
        <li>
          <a href="#">
            <img src="img/hidroizolaciq.jpg" />
            <span class="text-content"><span>ХИДРОИЗОЛАЦИЯ</span></span>
          </a>
        </li>
        <li>
          <a href="diubeliivintove.php">
            <img src="img/diubeli.jpg" />
            <span class="text-content"><span>ДЮБЕЛИ И ВИНТОВЕ</span></span>
          </a>
        </li>
        <li>
          <a href="pqniisilikoni.php">
            <img src="img/pqni.jpg" />
            <span class="text-content"><span>ПЯНА И СИЛИКОНИ</span></span>
          </a>
        </li>
        <li>
          <a href="suhismesi.php">
            <img src="img/suhismesi.jpg" />
            <span class="text-content"><span>СУХИ СМЕСИ</span></span>
          </a>
        </li>
      </ul>
      <div class="push"></div>
      <div class="col-md-12 col-centered">
        <div class="footer">
          <span>БЪРЗИ ВРЪЗКИ</span><br>
          <ul class="barziVrazki">
            <li><a href="tuhli.php">ТУХЛИ</a></li>
            <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
            <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
            <li><a href="ytong.php">ИТОНГ</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
            <li><a href="vata.php">ВАТА</a></li>
            <li><a href="profili.php">ПРОФИЛИ</a></li>
            <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
            <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
            <li><a href="mreji.php">МРЕЖИ</a></li>
            <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
            <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
            <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
            <li><a href="#.php">СУХИ СМЕСИ</a></li>
          </ul><br><br>
          <span>Всички права запазени</span>
          <span class="mitashki">Created by <a href="https://www.facebook.com/profile.php?id=100000686533887">Mitashki</a> &copy;</span>
        </div>
      </div>
    </div>
    <!--back to top start-->
    <a href="#" class="back-to-top">Обратно горе</a>
    <script type="text/javascript">
      $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
      var amountScrolled = 200;
      $(window).scroll(function() {
        if ( $(window).scrollTop() > amountScrolled ) {
          $('a.back-to-top').fadeIn('slow');
        } else {
          $('a.back-to-top').fadeOut('slow');
        }
      });
      $('a.back-to-top').click(function() {
        $('html, body').animate({
          scrollTop: 0
        }, 700);
        return false;
      });
    </script>
    <!--back to top end-->
    <!-- container -->
  </body>
  </html><!DOCTYPE html>
<html>
<head>
  <title>Ени-92</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
  
  <style type="text/css">
    body {
      background-image: url('img/font.jpg');
      margin: 0;
      padding: 0;
      height: 0;
    }
    .logo {
      width: 50%;
      margin-top: 2%;
      margin-bottom: 2%;
    }
    .line {
      height: 2px;
      background-color: red;
    }
    .bottom-line {
      height: 2px;
      background-color: red;
    }
    .tel {
      width: 40%;
      float: right;
    }
    h4 {
      color: red;
      display: inline-block;
    }
    
    
    
    
    @media screen and (max-width: 600px) {
      .adres, .email { font-size: 20px;}
    }
    @media screen and (max-width: 600px) {
      .email { font-size: 15px;}
    }
    @media screen and (max-width: 500px) {
      .adres, .email { font-size: 15px;}
    }
    .navbar {
      background-color: #c1c1c1;
    }
    .navbar-nav {
      width: 100%;
      text-align: center;
      background: #c1c1c1;
    }
    .navbar-nav>li {
      float: initial;
      line-height: 150px;
    }
    .nav>li {
      display:inline-block;
    }
    .van {
      width: 20%;
      float: left;
    }
    .van-button {
      width: 20%;
      float: left;
    }
    .facebook {
      width: 5%;
      margin: 0 2%;
    }
    @media screen and (max-width: 500px) {
      .facebook { width: 10%;}
    }
    @media screen and (max-width: 780px) {
      .van { display: none;}
    }
    @media screen and (min-width: 780px) {
      .van-button { display: none;}
    }
    @media screen and (max-width: 760px) {
      .van-button { width: 40%;}
    }
    /*CATEGORY END*/
    /*footer start*/
    .footer, .push {
      min-height: 4em;
      margin: 0 auto;
      margin-bottom: 1%;
      border-radius: 10px;
    }
    .footer {
      padding: 2% 2% 2% 2%;
      color: #F2DBA5;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+45,6d0019+76,6d0019+79 */
      background: rgb(169,3,41); /* Old browsers */
      background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 45%, rgba(109,0,25,1) 76%, rgba(109,0,25,1) 79%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    }
    .barziVrazki > li > a {
      color: #F2DBA5;
    }
    /*fuuter end*/
    .mitashki {
      margin-left: 10%;
    }
    .input-group[class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }
    .contactForm {
      background-color: #5B74A9;
      color: white;
      margin: 1%;
      margin-left: 10%;
    }
    @media screen and (max-width: 500px) {
      .contactForm { margin: 0 auto; font-size: 11px;}
    }
    .contactForm:hover {
      background-color: white;
      color: #5B74A9;
      border: 1px solid #5B74A9;
    }
    .modal-title {
      color: #5B74A9;
    }
    .dropdown-menu > li {
      background-color: white;
      text-align: left;
    }
    .barziVrazki {
      display: inline-block;
    }
    a.back-to-top {
      display: none;
      width: 50px;
      height: 50px;
      text-indent: -9999px;
      position: fixed;
      z-index: 999;
      right: 2%;
      bottom: 2%;
      background: #27AE61 url("img/top.png") no-repeat center ;
      background-size: 100%;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      opacity: 0.3;
      outline: 0;
    }
    a.back-to-top:hover {
      opacity: 1;
    }
    .gipsokartoni {
      background-color: white;
      margin: 1% 0;
      box-shadow: 25px 0px 25px -25px rgba(0,0,0,0.45), -25px 0px 25px -25px rgba(0,0,0,0.45);
      
    }
    .gipsokarton {
      float: right;
      width: 10%;
    }
    .gipsokarton9 {
      border-bottom: 1px solid red;
    }
    @media screen and (max-width: 500px) {
      .gipsokarton { width: 50px;}
    }
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    tr:nth-child(even) {
      background-color: #dddddd;
    }
    table {
      overflow-x: auto;
      display: block;
    }
  </style>
</head>
<body>
  <?php include('send_form_email.php') ?>
  <!-- container -->
  <div class="font"></div>
  <div class="container">
    <div class="col-md-12">
      <a href="https://www.google.bg/maps/place/%D1%83%D0%BB.+%E2%80%9E%D0%92%D0%B0%D1%81%D0%B8%D0%BB+%D0%9B%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%E2%80%9C+170,+4003+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2/@42.176901,24.7414923,19z/data=!4m5!3m4!1s0x14acd223c431e1f3:0x49b0bd0dcba79efc!8m2!3d42.17696!4d24.741962"> <h4 class="adres">гр. Пловдив 4003,  ул. Васил Левски №170 </h4></a>
      <a href="https://www.facebook.com/eni92.eood/?fref=ts"><img class="facebook" src="img/facebook.ico"></a>
      <h4 class="email">Email: eni92@abv.bg</h4>
      
      <!--contact us form start-->
      
      <!-- Button to trigger modal -->
      <a href="#myModal" role="button" class="btn btn-custom contactForm" data-toggle="modal">Отворете Формата за Връзка с Нас</a>
      <!-- Modal -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Форма за връзка с нас</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="comment">Въпрос или Коментар</label>
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
      </div><!-- End of Modal -->
      <!--contact us form edn-->
    </div>
    <div class="col-md-12"><div class="line"></div></div>
    <div class="col-md-12">
      <div>
        <img class="tel" src="img/tel.png">
      </div>
      <a href="eni92.php"><img class="logo" src="img/logo1.jpg"></a>
    </div>
    <div class="col-md-12 col-centered">
      <div class="navbar navbar-default navbar-top">
        <div class="navbar-header">
          <img class="van-button" src="img/transport.png">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <img class="van" src="img/transport.png">
            <li><a href="eni92.php">НАЧАЛО</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ПРОДУКТИ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="#">ТОНИРАНЕ</a></li>
            <li><a href="#">ПОД НАЕМ</a></li>
            <li><a href="aboutus.php">ЗА НАС</a></li>
            <li><a href="contacts.php">КОНТАКТИ</a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-md-12"><div class="bottom-line"></div></div>
      <div class="col-md-12 gipsokartoni">
        <div class="gipsokarton9">
          <h4><b>ГИПСОКАРТОН GKB</b></h4><br>
          <p><b>Гисокартонените плоскости Кнауф са подходящи за приложение при изграждането на стенни и таванни облицовки върху конструкция от метални щендери и профили, предстенни обшивки, преградни стени и окачени тавани.<br><br>
            Като основен елемент от всяка система за сухо строителство, използването на гипскартон Кнауф предлага лесна обработка и монтаж, отлично качество и здравина, неограничени дизайнерски възможности.<br><br>
            <h3><b>ГИПСОКАРТОН GKB КНАУФ</b></h3><br>
            
            Гисокартонените плоскости Knauf се състоят от гипс, чиито повърхности и кантове по дължина са облечени със специален устойчив картон.</b></p><br>
            <img class="gipsokarton" src="img/gipsokarton.jpg"><br>
            <table>
              <tr>
                <th>GKB</th>
                <th>ШИРИНА</th>
                <th>ДЪЛЖИНА</th>
                <th>БР. В ПАЛЕТ</th>
              </tr>
              <tr>
                <td>ДЕБЕЛИНА-9,5 БЯЛ</td>
                <td>2000 mm</td>
                <td>1200 mm</td>
                <td>80</td>
              </tr>
              <tr>
                <td></td>
                <td>2500 mm</td>
                <td>1200 mm</td>
                <td>80</td>
              </tr>
              <tr>
                <td></td>
                <td>2600 mm</td>
                <td>1200 mm</td>
                <td>80</td>
              </tr>
              <tr>
                <td></td>
                <td>3000 mm</td>
                <td>1200 mm</td>
                <td>80</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>ДЕБЕЛИНА 12,5 БЯЛ</td>
                <td>2000 mm</td>
                <td>1200 mm</td>
                <td>60</td>
              </tr>
              <tr>
                <td></td>
                <td>2500 mm</td>
                <td>1200 mm</td>
                <td>60</td>
              </tr>
              <tr>
                <td></td>
                <td>2600 mm</td>
                <td>1200 mm</td>
                <td>60</td>
              </tr>
              <tr>
                <td></td>
                <td>2700 mm</td>
                <td>1200 mm</td>
                <td>60</td>
              </tr>
              <tr>
                <td></td>
                <td>2800 mm</td>
                <td>1200 mm</td>
                <td>60</td>
              </tr>
              <tr>
                <td></td>
                <td>3000 mm</td>
                <td>1200 mm</td>
                <td>60</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>ДЕБЕЛИНА 12,5 ЗЕЛЕН</td>
                <td>2000 mm</td>
                <td>1200 mm</td>
                <td>60</td>
              </tr>
              <tr>
                <td></td>
                <td>2500 mm</td>
                <td>1200 mm</td>
                <td>60</td>
              </tr>
              <tr>
                <td></td>
                <td>2600 mm</td>
                <td>1200 mm</td>
                <td>60</td>
              </tr>
              <tr>
                <td></td>
                <td>2800 mm</td>
                <td>1200 mm</td>
                <td>60</td>
              </tr>
              <tr>
                <td></td>
                <td>3000 mm</td>
                <td>1200 mm</td>
                <td>60</td>
              </tr>
            </table><br><br><br>
          </div>
          <h4><b>ЗА ПОДОБНИ ПРОДУКТИ КОИТО НЕ ВИЖДАТЕ В КАТЕГОРИЯТА, МОЛЯ СВЪРЖЕТЕ СЕ С НАС НА ПОСОЧЕНИТЕ ТЕЛЕФОНИ</b></h4>
        </div>
        <div class="push"></div>
        <div class="col-md-12 col-centered">
          <div class="footer">
            <span>БЪРЗИ ВРЪЗКИ</span><br>
            <ul class="barziVrazki">
              <li><a href="tuhli.php">ТУХЛИ</a></li>
              <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
              <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
              <li><a href="ytong.php">ИТОНГ</a></li>
            </ul>
            <ul class="barziVrazki">
              <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
              <li><a href="vata.php">ВАТА</a></li>
              <li><a href="profili.php">ПРОФИЛИ</a></li>
              <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
            </ul>
            <ul class="barziVrazki">
              <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
              <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
              <li><a href="mreji.php">МРЕЖИ</a></li>
              <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
            </ul>
            <ul class="barziVrazki">
              <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
              <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
              <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
              <li><a href="#.php">СУХИ СМЕСИ</a></li>
            </ul><br><br>
            <span>Всички права запазени</span>
            <span class="mitashki">Created by <a href="https://www.facebook.com/profile.php?id=100000686533887">Mitashki</a> &copy;</span>
          </div>
        </div>
      </div>
      <!--back to top start-->
      <a href="#" class="back-to-top">Обратно горе</a>
      <script type="text/javascript">
        $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
        var amountScrolled = 200;
        $(window).scroll(function() {
          if ( $(window).scrollTop() > amountScrolled ) {
            $('a.back-to-top').fadeIn('slow');
          } else {
            $('a.back-to-top').fadeOut('slow');
          }
        });
        $('a.back-to-top').click(function() {
          $('html, body').animate({
            scrollTop: 0
          }, 700);
          return false;
        });
      </script>
      <!--back to top end-->
      <!-- container -->
    </body>
    </html><!DOCTYPE html>
<html>
<head>
  <title>Ени-92</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
  
  <style type="text/css">
    body {
      background-image: url('img/font.jpg');
      margin: 0;
      padding: 0;
      height: 0;
    }
    .logo {
      width: 50%;
      margin-top: 2%;
      margin-bottom: 2%;
    }
    .line {
      height: 2px;
      background-color: red;
    }
    .bottom-line {
      height: 2px;
      background-color: red;
    }
    .tel {
      width: 40%;
      float: right;
    }
    h4 {
      color: red;
      display: inline-block;
    }
    
    
    
    
    @media screen and (max-width: 600px) {
      .adres, .email { font-size: 20px;}
    }
    @media screen and (max-width: 600px) {
      .email { font-size: 15px;}
    }
    @media screen and (max-width: 500px) {
      .adres, .email { font-size: 15px;}
    }
    .navbar {
      background-color: #c1c1c1;
    }
    .navbar-nav {
      width: 100%;
      text-align: center;
      background: #c1c1c1;
    }
    .navbar-nav>li {
      float: initial;
      line-height: 150px;
    }
    .nav>li {
      display:inline-block;
    }
    .van {
      width: 20%;
      float: left;
    }
    .van-button {
      width: 20%;
      float: left;
    }
    .facebook {
      width: 5%;
      margin: 0 2%;
    }
    @media screen and (max-width: 500px) {
      .facebook { width: 10%;}
    }
    @media screen and (max-width: 780px) {
      .van { display: none;}
    }
    @media screen and (min-width: 780px) {
      .van-button { display: none;}
    }
    @media screen and (max-width: 760px) {
      .van-button { width: 40%;}
    }
    /*CATEGORY END*/
    /*footer start*/
    .footer, .push {
      min-height: 4em;
      margin: 0 auto;
      margin-bottom: 1%;
      border-radius: 10px;
    }
    .footer {
      padding: 2% 2% 2% 2%;
      color: #F2DBA5;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+45,6d0019+76,6d0019+79 */
      background: rgb(169,3,41); /* Old browsers */
      background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 45%, rgba(109,0,25,1) 76%, rgba(109,0,25,1) 79%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    }
    .barziVrazki > li > a {
      color: #F2DBA5;
    }
    /*fuuter end*/
    .mitashki {
      margin-left: 10%;
    }
    .input-group[class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }
    .contactForm {
      background-color: #5B74A9;
      color: white;
      margin: 1%;
      margin-left: 10%;
    }
    @media screen and (max-width: 500px) {
      .contactForm { margin: 0 auto; font-size: 11px;}
    }
    .contactForm:hover {
      background-color: white;
      color: #5B74A9;
      border: 1px solid #5B74A9;
    }
    .modal-title {
      color: #5B74A9;
    }
    .dropdown-menu > li {
      background-color: white;
      text-align: left;
    }
    .barziVrazki {
      display: inline-block;
    }
    a.back-to-top {
      display: none;
      width: 50px;
      height: 50px;
      text-indent: -9999px;
      position: fixed;
      z-index: 999;
      right: 2%;
      bottom: 2%;
      background: #27AE61 url("img/top.png") no-repeat center ;
      background-size: 100%;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      opacity: 0.3;
      outline: 0;
    }
    a.back-to-top:hover {
      opacity: 1;
    }
    .gipsokartoni {
      background-color: white;
      margin: 1% 0;
      box-shadow: 25px 0px 25px -25px rgba(0,0,0,0.45), -25px 0px 25px -25px rgba(0,0,0,0.45);
      
    }
    .gipsokarton {
      float: right;
      width: 10%;
    }
    .gipsokarton9 {
      border-bottom: 1px solid red;
    }
    @media screen and (max-width: 500px) {
      .gipsokarton { width: 50px;}
    }
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    tr:nth-child(even) {
      background-color: #dddddd;
    }
    table {
      overflow-x: auto;
      display: block;
    }
  </style>
</head>
<body>
  <?php include('send_form_email.php') ?>
  <!-- container -->
  <div class="font"></div>
  <div class="container">
    <div class="col-md-12">
      <a href="https://www.google.bg/maps/place/%D1%83%D0%BB.+%E2%80%9E%D0%92%D0%B0%D1%81%D0%B8%D0%BB+%D0%9B%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%E2%80%9C+170,+4003+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2/@42.176901,24.7414923,19z/data=!4m5!3m4!1s0x14acd223c431e1f3:0x49b0bd0dcba79efc!8m2!3d42.17696!4d24.741962"> <h4 class="adres">гр. Пловдив 4003,  ул. Васил Левски №170 </h4></a>
      <a href="https://www.facebook.com/eni92.eood/?fref=ts"><img class="facebook" src="img/facebook.ico"></a>
      <h4 class="email">Email: eni92@abv.bg</h4>
      
      <!--contact us form start-->
      
      <!-- Button to trigger modal -->
      <a href="#myModal" role="button" class="btn btn-custom contactForm" data-toggle="modal">Отворете Формата за Връзка с Нас</a>
      <!-- Modal -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Форма за връзка с нас</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="comment">Въпрос или Коментар</label>
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
      </div><!-- End of Modal -->
      <!--contact us form edn-->
    </div>
    <div class="col-md-12"><div class="line"></div></div>
    <div class="col-md-12">
      <div>
        <img class="tel" src="img/tel.png">
      </div>
      <a href="eni92.php"><img class="logo" src="img/logo1.jpg"></a>
    </div>
    <div class="col-md-12 col-centered">
      <div class="navbar navbar-default navbar-top">
        <div class="navbar-header">
          <img class="van-button" src="img/transport.png">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <img class="van" src="img/transport.png">
            <li><a href="eni92.php">НАЧАЛО</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ПРОДУКТИ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="#">ТОНИРАНЕ</a></li>
            <li><a href="#">ПОД НАЕМ</a></li>
            <li><a href="aboutus.php">ЗА НАС</a></li>
            <li><a href="contacts.php">КОНТАКТИ</a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-md-12"><div class="bottom-line"></div></div>
      <div class="col-md-12 gipsokartoni">
        <div class="gipsokarton9">
          <h4><b>ГИПСОКАРТОН GKB</b></h4><br>
          <p><b>Гисокартонените плоскости Кнауф са подходящи за приложение при изграждането на стенни и таванни облицовки върху конструкция от метални щендери и профили, предстенни обшивки, преградни стени и окачени тавани.<br><br>
            Като основен елемент от всяка система за сухо строителство, използването на гипскартон Кнауф предлага лесна обработка и монтаж, отлично качество и здравина, неограничени дизайнерски възможности.<br><br>
            <h3><b>ГИПСОКАРТОН GKB КНАУФ</b></h3><br>
            
            Гисокартонените плоскости Knauf се състоят от гипс, чиито повърхности и кантове по дължина са облечени със специален устойчив картон.</b></p><br>
            <img class="gipsokarton" src="img/gipsokarton.jpg"><br>
            <table>
              <tr>
                <th>GKB</th>
                <th>ШИРИНА</th>
                <th>ДЪЛЖИНА</th>
                <th>БР. В ПАЛЕТ</th>
              </tr>
              <tr>
                <td>ДЕБЕЛИНА-9,5 БЯЛ</td>
                <td>2000 mm</td>
                <td>1200 mm</td>
                <td>80</td>
              </tr>
              <tr>
                <td></td>
                <td>2500 mm</td>
                <td>1200 mm</td>
                <td>80</td>
              </tr>
              <tr>
                <td></td>
                <td>2600 mm</td>
                <td>1200 mm</td>
                <td>80</td>
              </tr>
              <tr>
                <td></td>
                <td>3000 mm</td>
                <td>1200 mm</td>
                <td>80</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>ДЕБЕЛИНА 12,5 БЯЛ</td>
                <td>2000 mm</td>
                <td>1200 mm</td>
                <td>60</td>
              </tr>
              <tr>
                <td></td>
                <td>2500 mm</td>
                <td>1200 mm</td>
                <td>60</td>
              </tr>
              <tr>
                <td></td>
                <td>2600 mm</td>
                <td>1200 mm</td>
                <td>60</td>
              </tr>
              <tr>
                <td></td>
                <td>2700 mm</td>
                <td>1200 mm</td>
                <td>60</td>
              </tr>
              <tr>
                <td></td>
                <td>2800 mm</td>
                <td>1200 mm</td>
                <td>60</td>
              </tr>
              <tr>
                <td></td>
                <td>3000 mm</td>
                <td>1200 mm</td>
                <td>60</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>ДЕБЕЛИНА 12,5 ЗЕЛЕН</td>
                <td>2000 mm</td>
                <td>1200 mm</td>
                <td>60</td>
              </tr>
              <tr>
                <td></td>
                <td>2500 mm</td>
                <td>1200 mm</td>
                <td>60</td>
              </tr>
              <tr>
                <td></td>
                <td>2600 mm</td>
                <td>1200 mm</td>
                <td>60</td>
              </tr>
              <tr>
                <td></td>
                <td>2800 mm</td>
                <td>1200 mm</td>
                <td>60</td>
              </tr>
              <tr>
                <td></td>
                <td>3000 mm</td>
                <td>1200 mm</td>
                <td>60</td>
              </tr>
            </table><br><br><br>
          </div>
          <h4><b>ЗА ПОДОБНИ ПРОДУКТИ КОИТО НЕ ВИЖДАТЕ В КАТЕГОРИЯТА, МОЛЯ СВЪРЖЕТЕ СЕ С НАС НА ПОСОЧЕНИТЕ ТЕЛЕФОНИ</b></h4>
        </div>
        <div class="push"></div>
        <div class="col-md-12 col-centered">
          <div class="footer">
            <span>БЪРЗИ ВРЪЗКИ</span><br>
            <ul class="barziVrazki">
              <li><a href="tuhli.php">ТУХЛИ</a></li>
              <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
              <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
              <li><a href="ytong.php">ИТОНГ</a></li>
            </ul>
            <ul class="barziVrazki">
              <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
              <li><a href="vata.php">ВАТА</a></li>
              <li><a href="profili.php">ПРОФИЛИ</a></li>
              <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
            </ul>
            <ul class="barziVrazki">
              <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
              <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
              <li><a href="mreji.php">МРЕЖИ</a></li>
              <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
            </ul>
            <ul class="barziVrazki">
              <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
              <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
              <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
              <li><a href="#.php">СУХИ СМЕСИ</a></li>
            </ul><br><br>
            <span>Всички права запазени</span>
            <span class="mitashki">Created by <a href="https://www.facebook.com/profile.php?id=100000686533887">Mitashki</a> &copy;</span>
          </div>
        </div>
      </div>
      <!--back to top start-->
      <a href="#" class="back-to-top">Обратно горе</a>
      <script type="text/javascript">
        $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
        var amountScrolled = 200;
        $(window).scroll(function() {
          if ( $(window).scrollTop() > amountScrolled ) {
            $('a.back-to-top').fadeIn('slow');
          } else {
            $('a.back-to-top').fadeOut('slow');
          }
        });
        $('a.back-to-top').click(function() {
          $('html, body').animate({
            scrollTop: 0
          }, 700);
          return false;
        });
      </script>
      <!--back to top end-->
      <!-- container -->
    </body>
    </html><!DOCTYPE html>
<html>
<head>
  <title>Ени-92</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>

  <style type="text/css">
    body {
      background-image: url('img/font.jpg');
      margin: 0;
      padding: 0;
      height: 0;
    }
    .logo {
      width: 50%;
      margin-top: 2%;
      margin-bottom: 2%;
    }
    .line {
      height: 2px;
      background-color: red;
    }
    .bottom-line {
      height: 2px;
      background-color: red;
    }
    .tel {
      width: 40%;
      float: right;
    }
    h4 {
      color: red;
      display: inline-block;
    }




    @media screen and (max-width: 600px) {
      .adres, .email { font-size: 20px;}
    }
    @media screen and (max-width: 600px) {
      .email { font-size: 15px;}
    }
    @media screen and (max-width: 500px) {
      .adres, .email { font-size: 15px;}
    }
    .navbar {
      background-color: #c1c1c1;
    }
    .navbar-nav {
      width: 100%;
      text-align: center;
      background: #c1c1c1;
    }
    .navbar-nav>li {
      float: initial;
      line-height: 150px;
    }
    .nav>li {
      display:inline-block;
    }
    .van {
      width: 20%;
      float: left;
    }
    .van-button {
      width: 20%;
      float: left;
    }
    .facebook {
      width: 5%;
      margin: 0 2%;
    }
    @media screen and (max-width: 500px) {
      .facebook { width: 10%;}
    }
    @media screen and (max-width: 780px) {
      .van { display: none;}
    }
    @media screen and (min-width: 780px) {
      .van-button { display: none;}
    }
    @media screen and (max-width: 760px) {
      .van-button { width: 40%;}
    }
    /*CATEGORY END*/
    /*footer start*/
    .footer, .push {
      min-height: 4em;
      margin: 0 auto;
      margin-bottom: 1%;
      border-radius: 10px;
    }
    .footer {
      padding: 2% 2% 2% 2%;
      color: #F2DBA5;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+45,6d0019+76,6d0019+79 */
      background: rgb(169,3,41); /* Old browsers */
      background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 45%, rgba(109,0,25,1) 76%, rgba(109,0,25,1) 79%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    }
    .barziVrazki > li > a {
      color: #F2DBA5;
    }
    /*fuuter end*/
    .mitashki {
      margin-left: 10%;
    }
    .input-group[class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }
    .contactForm {
      background-color: #5B74A9;
      color: white;
      margin: 1%;
      margin-left: 10%;
    }
    @media screen and (max-width: 500px) {
      .contactForm { margin: 0 auto; font-size: 11px;}
    }
    .contactForm:hover {
      background-color: white;
      color: #5B74A9;
      border: 1px solid #5B74A9;
    }
    .modal-title {
      color: #5B74A9;
    }
    .izolacii {
      background-color: white;
      margin: 1%;
      padding: 1%;
      box-shadow: 25px 0px 25px -25px rgba(0,0,0,0.45), -25px 0px 25px -25px rgba(0,0,0,0.45);

    }
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    tr:nth-child(even) {
      background-color: #dddddd;
    }
    .EPS, .tictac {
      border-bottom: 1px solid red;
    }
    .eps, .tiktak {
      width: 30%;
      float: right;
      margin-top: 1%;
    }
    .dropdown-menu > li {
      background-color: white;
      text-align: left;
    }
    .barziVrazki {
      display: inline-block;
    }
    a.back-to-top {
      display: none;
      width: 50px;
      height: 50px;
      text-indent: -9999px;
      position: fixed;
      z-index: 999;
      right: 2%;
      bottom: 2%;
      background: #27AE61 url("img/top.png") no-repeat center ;
      background-size: 100%;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      opacity: 0.3;
      outline: 0;
    }
    a.back-to-top:hover {
      opacity: 1;
    }
    table {
      overflow-x: auto;
      display: block;
    }
  </style>
</head>
<body>
  <?php include('send_form_email.php') ?>
  <!-- container -->
  <div class="font"></div>
  <div class="container">
    <div class="col-md-12">
      <a href="https://www.google.bg/maps/place/%D1%83%D0%BB.+%E2%80%9E%D0%92%D0%B0%D1%81%D0%B8%D0%BB+%D0%9B%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%E2%80%9C+170,+4003+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2/@42.176901,24.7414923,19z/data=!4m5!3m4!1s0x14acd223c431e1f3:0x49b0bd0dcba79efc!8m2!3d42.17696!4d24.741962"> <h4 class="adres">гр. Пловдив 4003,  ул. Васил Левски №170 </h4></a>
      <a href="https://www.facebook.com/eni92.eood/?fref=ts"><img class="facebook" src="img/facebook.ico"></a>
      <h4 class="email">Email: eni92@abv.bg</h4>

      <!--contact us form start-->

      <!-- Button to trigger modal -->
      <a href="#myModal" role="button" class="btn btn-custom contactForm" data-toggle="modal">Отворете Формата за Връзка с Нас</a>
      <!-- Modal -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Форма за връзка с нас</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="comment">Въпрос или Коментар</label>
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
      </div><!-- End of Modal -->
      <!--contact us form edn-->
    </div>
    <div class="col-md-12"><div class="line"></div></div>
    <div class="col-md-12">
      <div>
        <img class="tel" src="img/tel.png">
      </div>
      <a href="eni92.php"><img class="logo" src="img/logo1.jpg"></a>
    </div>
    <div class="col-md-12 col-centered produkti">
      <div class="navbar navbar-default navbar-top">
        <div class="navbar-header">
          <img class="van-button" src="img/transport.png">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <img class="van" src="img/transport.png">
            <li><a href="eni92.php">НАЧАЛО</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ПРОДУКТИ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="#">ТОНИРАНЕ</a></li>
            <li><a href="#">ПОД НАЕМ</a></li>
            <li><a href="aboutus.php">ЗА НАС</a></li>
            <li><a href="contacts.php">КОНТАКТИ</a></li>

          </ul>
        </div>
      </div>

      <div class="col-md-12"><div class="bottom-line"></div></div>
      <div class="col-md-12 izolacii">
        <img class="eps" src="img/izolaciq.jpeg">
        <div class="EPS">
          <h4><b>EPS 80F</b></h4><br><br>
          <p><b>STIROSAUR EPS 80F</b></p>
          <ul>
            <li>високи топлоизолационни качества</li>
            <li>стабилна форма</li>
            <li>устойчив на стареене</li>
            <li>несвиваем</li>
            <li>не съдържа вредни за околната среда и здравето компоненти</li>
            <li>трудногорим</li>
          </ul><br><br>
          <p> Фасадни топлоизолационни плочи от EPS (експандиран полистирен) за топлинно изолиране на сгради като елемент от интегрирана топлоизолационна система.<br><br>
            STIROSAUR EPS 80F е висококачествен трудно горим топлоизолационен материал от експандиран полистирен (EPS), нарязан във формата на плочи. Плочите са подходящи за топлинно изолиране на фасади като елемент от интегрирана топлоизолационна система. Подходящи са за монтаж като вградена в конструкцията топлоизолация и при топлоизолиране на вътрешни стени, граничещи с неотопляеми пространства. Неприложими в областта на цокъла и земята.<br><br>
            Материалът е с много добра паропропускливост и структурата му позволява „дишането“ на строителната конструкция, като по този начин ефективно подпомага предотвратяването на натрупване на конденз и мухъл, катко в нея, така и в помещенията. Плочите са с много добри топлоизолационни свойства, точни размери и са устойчиви на стареене. Не променят формата си и не се свиват.</p><br>
            <table class="xps">
              <tr>
                <th>EPS 80 F</th>
                <th>10 мм</th>
                <th>20 мм</th>
                <th>30 мм</th>
                <th>40 мм</th>
                <th>50 мм</th>
                <th>60 мм</th>
                <th>70 мм</th>
                <th>80 мм</th>
                <th>90 мм</th>
                <th>100 мм</th>
              </tr>
              <tr>
                <td>ШИРИНА</td>
                <td>500 mm</td>
                <td>500 mm</td>
                <td>500 mm</td>
                <td>500 mm</td>
                <td>500 mm</td>
                <td>500 mm</td>
                <td>500 mm</td>
                <td>500 mm</td>
                <td>500 mm</td>
                <td>500 mm</td>
              </tr>
              <tr>
                <td>ВИСОЧИНА</td>
                <td>1000 mm</td>
                <td>1000 mm</td>
                <td>1000 mm</td>
                <td>1000 mm</td>
                <td>1000 mm</td>
                <td>1000 mm</td>
                <td>1000 mm</td>
                <td>1000 mm</td>
                <td>1000 mm</td>
                <td>1000 mm</td>
              </tr>

            </table><br><br><br>
          </div>
          <img class="eps" src="img/izolaciq.jpeg">
          <div class="EPS">
            <h4><b>EPS 70F</b></h4><br><br>
            <p><b>STIROSAUR EPS 70F</b></p>
            <ul>
              <li>високи топлоизолационни качества</li>
              <li>стабилна форма</li>
              <li>устойчив на стареене</li>
              <li>несвиваем</li>
              <li>не съдържа вредни за околната среда и здравето компоненти</li>
              <li>трудногорим</li>
            </ul><br><br>
            <p>Топлоизолационни плочи от EPS (експандиран полистирен) за топлинно изолиране на стени и места,които не са подложени на натоварване на натиск.<br><br>
              STIROSAUR EPS 70F е висококачествен трудно горим топлоизолационен материал от експандиран полистирен (EPS), нарязан във формата на плочи. Плочите са предназначени за места, които не са подложени на особени натоварвания на натиск (подпокривна изолация, изолиране на междустенни разстояния, вътрешно изолиране зад защитни облицовки и др.). Подходящи са за монтаж като вградена в конструкцията топлоизолация и при топлоизолиране на вътрешни стени, граничещи с неотопляеми пространства. Неприложими в областта на цокъла и земята.<br><br>
              Материалът е с много добра паропропускливост и структурата му позволява „дишането“ на строителната конструкция, като по този начин ефективно подпомага предотвратяването на натрупване на конденз и мухъл, както в нея, така и помещенията. Плочите са с много добри топлоизолационни свойства, точни размери и са устойчиви на стареене. Не променят формата си и не се свиват.</p><br>
              <table>
                <tr>
                  <th>EPS 70 F</th>
                  <th>10 мм</th>
                  <th>20 мм</th>
                  <th>30 мм</th>
                  <th>40 мм</th>
                  <th>50 мм</th>
                  <th>60 мм</th>
                  <th>70 мм</th>
                  <th>80 мм</th>
                  <th>90 мм</th>
                  <th>100 мм</th>
                </tr>
                <tr>
                  <td>ШИРИНА</td>
                  <td>500 mm</td>
                  <td>500 mm</td>
                  <td>500 mm</td>
                  <td>500 mm</td>
                  <td>500 mm</td>
                  <td>500 mm</td>
                  <td>500 mm</td>
                  <td>500 mm</td>
                  <td>500 mm</td>
                  <td>500 mm</td>
                </tr>
                <tr>
                  <td>ВИСОЧИНА</td>
                  <td>1000 mm</td>
                  <td>1000 mm</td>
                  <td>1000 mm</td>
                  <td>1000 mm</td>
                  <td>1000 mm</td>
                  <td>1000 mm</td>
                  <td>1000 mm</td>
                  <td>1000 mm</td>
                  <td>1000 mm</td>
                  <td>1000 mm</td>
                </tr>

              </table><br><br><br>
            </div>
            <img class="tiktak" src="img/tiktak.jpg">
            <div class="tictac">
              <h4><b>Топлоизолация XPS - (Tiktas)</b></h4><br><br>
              <p><b>XPS - (Tiktas)</b></p>
              <ul>
                <li>Плътност: 30 кг/куб.м</li>
                <li>Цвят: син</li>
                <li>Съпротивление на топлопроводимост: 0.19м2К/W</li>
                <li>Устойчивост на натиск: 9т/м2</li>
                <li>Шумоподтискане при ламинат: -18 dB</li>
                <li>При клик-система: -25 dB</li>
                <li>Комп.неравности по пода: до 3мм</li>
              </ul><br><br>
              <p>Описание: XPS е топлоизолационен материал, чието име представлява съкращение от "екструдиран пенополистирол". Продукта е известен още под името фибран. Той се характеризира с хигроскопичност, т.е. не абсорбира вода и притежава висока устойчивост на големи натоварвания. Препоръчва се за места, изложени на силни натоварвания и влага. Намира приложение за топлоизолация на покриви, греди, колони, плочи, стени, подове и основи. Затворената клетъчна структура придава висока изолационна способност, добра механична якост и ниска водна абсорбция. По този начин материалът запазва свойствата си практически до края на живота на сградата. </p><br>
              <table>
                <tr>
                  <th>ДЕБЕЛИНА мм</th>
                  <th>20 мм</th>
                  <th>30 мм</th>
                  <th>40 мм</th>
                  <th>50 мм</th>
                </tr>
                <tr>
                  <td>ШИРИНА мм</td>
                  <td>600 мм</td>
                  <td>600 мм</td>
                  <td>600 мм</td>
                  <td>600 мм</td>
                </tr>
                <tr>
                  <td>ВИСОЧИНА мм</td>
                  <td>1250 мм</td>
                  <td>1250 мм</td>
                  <td>1250 мм</td>
                  <td>1250 мм</td>
                </tr>
                <tr>
                  <td>БР. В ПАКЕТ</td>
                  <td>20 бр.</td>
                  <td>14 бр.</td>
                  <td>10 бр.</td>
                  <td>8 бр.</td>
                </tr>

              </table><br><br><br>
            </div>
            <h4><b>ЗА ПРОДУКТИ КОИТО НЕ ВИЖДАТЕ В КАТЕГОРИЯТА, МОЛЯ СВЪРЖЕТЕ СЕ С НАС НА ПОСОЧЕНИТЕ ТЕЛЕФОНИ</b></h4>

          </div>
          <div class="push"></div>
          <div class="col-md-12 col-centered">
            <div class="footer">
              <span>БЪРЗИ ВРЪЗКИ</span><br>
              <ul class="barziVrazki">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
              </ul>
              <ul class="barziVrazki">
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
              </ul>
              <ul class="barziVrazki">
                <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
              </ul>
              <ul class="barziVrazki">
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul><br><br>
              <span>Всички права запазени</span>
              <span class="mitashki">Created by <a href="https://www.facebook.com/profile.php?id=100000686533887">Mitashki</a> &copy;</span>
            </div>
          </div>
        </div>
        <!--back to top start-->
        <a href="#" class="back-to-top">Обратно горе</a>
        <script type="text/javascript">
          $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
          var amountScrolled = 200;
          $(window).scroll(function() {
            if ( $(window).scrollTop() > amountScrolled ) {
              $('a.back-to-top').fadeIn('slow');
            } else {
              $('a.back-to-top').fadeOut('slow');
            }
          });
          $('a.back-to-top').click(function() {
            $('html, body').animate({
              scrollTop: 0
            }, 700);
            return false;
          });
        </script>
        <!--back to top end-->
        <!-- container -->
      </body>
      </html><!DOCTYPE html>
<html>
<head>
  <title>Ени-92</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <style type="text/css">
    body {
      background-image: url('img/font.jpg');
      margin: 0;
      padding: 0;
      height: 0;
    }
    .logo {
      width: 50%;
      margin-top: 2%;
      margin-bottom: 2%;
    }
    .line {
      height: 2px;
      background-color: red;
    }
    .bottom-line {
      height: 2px;
      background-color: red;
    }
    .tel {
      width: 40%;
      float: right;
    }
    h4, h2 {
      color: red;
      display: inline-block;
    }
    
    
    
    
    @media screen and (max-width: 600px) {
      .adres, .email { font-size: 20px;}
    }
    @media screen and (max-width: 600px) {
      .email { font-size: 15px;}
    }
    @media screen and (max-width: 500px) {
      .adres, .email { font-size: 15px;}
    }
    .navbar {
      background-color: #c1c1c1;
    }
    .navbar-nav {
      width: 100%;
      text-align: center;
      background: #c1c1c1;
    }
    .navbar-nav>li {
      float: initial;
      line-height: 150px;
    }
    .nav>li {
      display:inline-block;
    }
    .van {
      width: 20%;
      float: left;
    }
    .van-button {
      width: 20%;
      float: left;
    }
    .facebook {
      width: 5%;
      margin: 0 2%;
    }
    @media screen and (max-width: 500px) {
      .facebook { width: 10%;}
    }
    @media screen and (max-width: 780px) {
      .van { display: none;}
    }
    @media screen and (min-width: 780px) {
      .van-button { display: none;}
    }
    @media screen and (max-width: 760px) {
      .van-button { width: 40%;}
    }
    /*CATEGORY END*/
    /*footer start*/
    .footer, .push {
      min-height: 4em;
      margin: 0 auto;
      margin-bottom: 1%;
      border-radius: 10px;
    }
    .footer {
      padding: 2% 2% 2% 2%;
      color: #F2DBA5;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+45,6d0019+76,6d0019+79 */
      background: rgb(169,3,41); /* Old browsers */
      background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 45%, rgba(109,0,25,1) 76%, rgba(109,0,25,1) 79%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    }
    .barziVrazki > li > a {
      color: #F2DBA5;
    }
    /*fuuter end*/
    .mitashki {
      margin-left: 10%;
    }
    .input-group[class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }
    .contactForm {
      background-color: #5B74A9;
      color: white;
      margin: 1%;
      margin-left: 10%;
    }
    @media screen and (max-width: 500px) {
      .contactForm { margin: 0 auto; font-size: 11px;}
    }
    .contactForm:hover {
      background-color: white;
      color: #5B74A9;
      border: 1px solid #5B74A9;
    }
    .modal-title {
      color: #5B74A9;
    }
    .dropdown-menu > li {
      background-color: white;
      text-align: left;
    }
    .barziVrazki {
      display: inline-block;
    }
    a.back-to-top {
      display: none;
      width: 50px;
      height: 50px;
      text-indent: -9999px;
      position: fixed;
      z-index: 999;
      right: 2%;
      bottom: 2%;
      background: #27AE61 url("img/top.png") no-repeat center ;
      background-size: 100%;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      opacity: 0.3;
      outline: 0;
    }
    a.back-to-top:hover {
      opacity: 1;
    }
    .mazilkiIBoi {
      background-color: white;
      margin: 1% 0;
      box-shadow: 25px 0px 25px -25px rgba(0,0,0,0.45), -25px 0px 25px -25px rgba(0,0,0,0.45);
      
    }
    .newboxes {
      display: none;
      margin-top: 1%;
    }
    
    .ceresit, .thrakon, .angro {
      margin: 1% 5% 5% 5%;
      width: 150px;
      height: 90px;
      outline: 0;
    }
    img.ct60 {
      width: 20%;
      float: right;
    }
    img.dec467, img.efecto, img.dec452 {
      width: 10%;
      float: right;
    }
    div.mazilkiIBoi > div.ceresit-thrakon-angro, div.ceresitMazilkiIBoi {
      text-align: center;
    }
    div.mazilki {
      border-bottom: 1px solid red;
    }
    .visibleClass {
      display: block !important;
    }
    img.polimerna {
      float: right;
      margin: 1% auto;
    }
  </style>
  
  <script type="text/javascript">
    function showonlyone(thechosenone) {
      $('.newboxes').each(function(index) {
        if ($(this).attr("id") == thechosenone) {
          $(this).show(1);
        }
        else {
          $(this).hide(1);
        }
      });
    }
  </script>
  <script>
    function showDiv(data) {
      $("#ele-" + data).addClass('visibleClass');
      hideElement(6, data);
    }
    function hideElement(total, active) {
      for (i = 1; i <= total; i++) {
        if (i != active)
          $("#ele-" + i).removeClass('visibleClass');
      }
    }
  </script>
</head>
<body>
  <?php include('send_form_email.php') ?>
  <!-- container -->
  <div class="font"></div>
  <div class="container">
    <div class="col-md-12">
      <a href="https://www.google.bg/maps/place/%D1%83%D0%BB.+%E2%80%9E%D0%92%D0%B0%D1%81%D0%B8%D0%BB+%D0%9B%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%E2%80%9C+170,+4003+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2/@42.176901,24.7414923,19z/data=!4m5!3m4!1s0x14acd223c431e1f3:0x49b0bd0dcba79efc!8m2!3d42.17696!4d24.741962"> <h4 class="adres">гр. Пловдив 4003,  ул. Васил Левски №170 </h4></a>
      <a href="https://www.facebook.com/eni92.eood/?fref=ts"><img class="facebook" src="img/facebook.ico"></a>
      <h4 class="email">Email: eni92@abv.bg</h4>
      
      <!--contact us form start-->
      
      <!-- Button to trigger modal -->
      <a href="#myModal" role="button" class="btn btn-custom contactForm" data-toggle="modal">Отворете Формата за Връзка с Нас</a>
      <!-- Modal -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Форма за връзка с нас</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="comment">Въпрос или Коментар</label>
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
      </div><!-- End of Modal -->
      <!--contact us form edn-->
    </div>
    <div class="col-md-12"><div class="line"></div></div>
    <div class="col-md-12">
      <div>
        <img class="tel" src="img/tel.png">
      </div>
      <a href="eni92.php"><img class="logo" src="img/logo1.jpg"></a>
    </div>
    <div class="col-md-12 col-centered">
      <div class="navbar navbar-default navbar-top">
        <div class="navbar-header">
          <img class="van-button" src="img/transport.png">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <img class="van" src="img/transport.png">
            <li><a href="eni92.php">НАЧАЛО</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ПРОДУКТИ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="#">ТОНИРАНЕ</a></li>
            <li><a href="#">ПОД НАЕМ</a></li>
            <li><a href="aboutus.php">ЗА НАС</a></li>
            <li><a href="contacts.php">КОНТАКТИ</a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-md-12"><div class="bottom-line"></div></div>
      <div class="col-md-12 mazilkiIBoi">
        <h2><b>МАЗИЛКИ И БОИ</b></h2><br><br>
        <div class="ceresit-thrakon-angro">
          <a href="#"><img id="myHeader1" class="ceresit" src="img/ceresit.gif" onClick="javascript:showonlyone('newboxes1');"></a>
          <a href="#"><img id="myHeader2" class="thrakon" src="img/thrakon.jpg" onClick="javascript:showonlyone('newboxes2');"></a>
          <a href="#"><img id="myHeader3" class="angro" src="img/angro.jpg" onClick="javascript:showonlyone('newboxes3');"></a>
        </div>
        <div class="newboxes" id="newboxes1">
          <div class="ceresitMazilkiIBoi">
            <h2><b>CERESIT</b></h2><br>
            <input type="button" class="btn btn-primary" id="x_1" value="МАЗИЛКИ" onclick="showDiv('1')">
            <input type="button" class="btn btn-primary" id="x_2" value="БОИ И ГРУНД" onclick="showDiv('2')">
          </div>
          <div id="ele-1" style="display: none;">
            <h3 class="mazilki"><b>МАЗИЛКИ CERESIT</b></h3><br>
            <div class="ct60 mazilki">
              <img class="ct60" src="img/ct60.jpg">
              <h4><b>МАЗИЛКА ПОЛИМЕРНА СТ60 1.5мм 25кг БАЗА</b></h4><br>
              
              <ul>
                <li>разход кг/м2  2,5</li>
                <li>структура   зърнеста 1,5 мм.</li>
                <li>вътрешно приложение   да</li>
                <li>външно приложение   да</li>
                <li>готова за употреба</li>
                <li>паропропусклива</li>
                <li>водоустойчива</li>
                <li>устойчива на микробиологично замърсяване</li>
                <li>устойчива на неблагоприятни атмосферни условия</li>
              </ul>
              <h4><b>ОПИСАНИЕ</b></h4><br>
              <p><b>Ceresit CT 60 Акрилна мазилка</b><br>
                Декоративна тънкослойна мазилка със зърнеста структура (зърно 1,5 mm) за фасади и вътрешни стени в сгради.<br>
                За изпълнение на еднослойно покритие на бетонни основи, обикновени мазилки, стени с гипсова шпакловка, гипсокартон, гипсофазер и др. Използва се като крайно покритие при изпълнение на система за фасадна топлоизолация Ceresit Ceretherm.</p><br><br>
              </div>
              <div class="ct174 mazilki">
                <img class="ct60" src="img/ct174.jpg">
                <h4><b>МАЗИЛКА СИЛИКАТ-СИЛИКОНОВА СТ174 1.5мм 25кг БАЗА</b></h4><br>
                
                <ul>
                  <li>разход кг/м2  2,5</li>
                  <li>структура   зърнеста 1,5 мм.</li>
                  <li>вътрешно приложение   да</li>
                  <li>външно приложение   да</li>
                  <li>готова за употреба</li>
                  <li>паропропусклива</li>
                  <li>водоустойчива</li>
                  <li>устойчива на замърсяване и UV-лъчи</li>
                  <li>устойчива на неблагоприятни атмосферни условия</li>
                </ul>
                <h4><b>ОПИСАНИЕ</b></h4><br>
                <p><b>CT 174 Силикат-силиконова мазилка</b><br>
                  Декоративна тънкослойна мазилка със зърнеста структура (зърно 1,5 mm) за фасади и вътрешни стени в сгради<br>
                  Обединява предимствата на силикатните и на силиконовите мазилки. За изпълнение на еднослойно покритие върху бетонни основи, вароциментови мазилки, гипсови и циментови шпакловки, както и върху ПДЧ, гипсофазерни плоскости и др. Използва се като крайно покритие при изпълнение на система за фасадна топлоизолация Ceresit Ceretherm.</p><br><br>
                </div>
                <div class="ct175 mazilki">
                  <img class="ct60" src="img/ct175.jpg">
                  <h4><b>МАЗИЛКА СИЛИКАТ-СИЛИКОНОВА СТ175 2.0мм 25кг БАЗА</b></h4><br>
                  
                  <ul>
                    <li>разход кг/м2  2,5</li>
                    <li>структура   зърнеста 2 мм.</li>
                    <li>вътрешно приложение   да</li>
                    <li>външно приложение   да</li>
                    <li>готова за употреба</li>
                    <li>паропропусклива</li>
                    <li>водоустойчива</li>
                    <li>устойчива на замърсяване и UV-лъчи</li>
                    <li>устойчива на неблагоприятни атмосферни условия</li>
                  </ul>
                  <h4><b>ОПИСАНИЕ</b></h4><br>
                  <p><b>СТ 175 Силикат-силиконова мазилка</b><br>
                    Декоративна тънкослойна мазилка със зърнеста структура (зърно 2 mm) за фасади и вътрешни стени в сгради<br>
                    Обединява предимствата на силикатните и на силиконовите мазилки. За изпълнение на еднослойно покритие върху бетонни основи, вароциментови мазилки, гипсови и циментови шпакловки, както и върху ПДЧ, гипсофазерни плоскости и др. Използва се като крайно покритие при изпълнение на система за фасадна топлоизолация Ceresit Ceretherm.</p><br><br>
                  </div>
                  <div class="ct74 mazilki">
                    <img class="ct60" src="img/ct74.jpg">
                    <h4><b>МАЗИЛКА СИЛИКОНОВА СТ74 1.5мм 25кг БАЗА</b></h4><br>
                    
                    <ul>
                      <li>разход кг/м2  2,1-2,5</li>
                      <li>структура   зърнеста 1,5 мм.</li>
                      <li>вътрешно приложение   да</li>
                      <li>външно приложение   да</li>
                      <li>готова за употреба</li>
                      <li>силно хидрофобна</li>
                      <li>паропропусклива</li>
                      <li>устойчива на замърсяване и UV-лъчи</li>
                      <li>устойчива на неблагоприятни атмосферни условия</li>
                    </ul>
                    <h4><b>ОПИСАНИЕ</b></h4><br>
                    <p><b>CT 74 Силиконова мазилка</b><br>
                      Декоративна тънкослойна мазилка със зърнеста структура (зърно 1,5 mm) за фасади и вътрешни стени в сгради.<br>
                      За изпълнение на еднослойно покритие на бетонни основи, обикновени мазилки, стени с гипсова шпакловка, гипсокартон, гипсофазер и др. Използва се като крайно покритие при изпълнение на система за фасадна топлоизолация Ceresit Ceretherm.<br>
                      Мазилките СТ 74 и СТ 75 са предназначени за изработване на еднослойни покрития върху бетонни основи, традиционни мазилки, гипсови шпакловки, а също и върху ПДЧ, гипсокартонени плочи и др. СТ 74 и CT 75 се използват като крайно покритие при изпълнение на система за фасадна топлоизолация Ceresit Ceretherm. Мазилките се препоръчват за покриване на стени, за които се изисква висока паропропускливост. При използване на интензивни цветове от тъмните гами, приложението на мазилката трябва да бъде ограничено до малки повърхности, напр. архитектурни детайли.<br>
                      Силиконовите мазилки CT 74 и 75 се полагат върху основи, които са равни, здрави, сухи и чисти, без мазнини, битуми, прах, и други вещества, които биха намалили сцеплението.</p><br><br><br>
                      <h4><b>ЗА ПОДОБНИ ПРОДУКТИ КОИТО НЕ ВИЖДАТЕ В КАТЕГОРИЯТА, МОЛЯ СВЪРЖЕТЕ СЕ С НАС НА ПОСОЧЕНИТЕ ТЕЛЕФОНИ</b></h4>
                    </div>
                  </div>
                  <div id="ele-2" style="display: none;">
                    <h3 class="mazilki"><b>БОИ И ГРУНД CERESIT</b></h3><br>
                    <div class="ct60 mazilki">
                      <img class="ct60" src="img/ct54.jpg">
                      <h4><b>БОЯ СИЛИКАТНА СТ54 15л БАЗА</b></h4><br>
                      
                      <ul>
                        <li>разход л/м2  0,3</li>
                        <li>структура   зърнеста 1,5 мм.</li>
                        <li>вътрешно приложение   да</li>
                        <li>външно приложение   да</li>
                        <li>готова за употреба</li>
                        <li>с отлична паропропускливост</li>
                        <li>алкална: позволява боядисване на нови мазилки</li>
                        <li>устойчива на неблагоприятни атмосферни влияния</li>
                      </ul>
                      <h4><b>ОПИСАНИЕ</b></h4><br>
                      <p><b>CT 54 Силикатна боя за фасади и интериори на сгради</b><br>
                        За трайно покритие и повърхностна защита на фасади и интериори. Подходяща за покриване на минерални основи (бетон, циментови мазилки, вароциментови и варови мазилки), на минерални, силикатни и силикат-силиконови мазилки. Елемент от система за външна фасадна топлоизолация Ceresit Ceretherm.<br>
                        Ceresit CT 54 се използва за трайно покритие и повърхностна защита на фасади и интериори (стени и тавани). Подходяща за покриване на минерални основи (бетон, циментови мазилки, вароциментови и варови мазилки), които никога не са били боядисвани. Боята трайно се свързва с основата чрез химична реакция. Продуктът се препоръчва особено за боядисване на нови мазилки, защото позволява да се започне работа незабавно, без опасение, че алкалната реакция с прясната основа би могла да повреди бояджийското покритие. CT 54 може да се използва за боядисване на минерални, силикатни и силикат-силиконови мазилки (Ceresit CT 174, CT 175). Елемент от система за външна фасадна топлоизолация Ceresit Ceretherm. Заради своята незапалимост и отлична паропропускливост,<br>
                        СТ 54 се препоръчва за използване и при топлоизолационните системи на база минерална вата.</p><br><br>
                      </div>
                      <div class="ct174 mazilki">
                        <img class="ct60" src="img/ct16.jpg">
                        <h4><b>БОЯ СТ16 ГРУНДИРАЩА 10л БЯЛА БАЗА</b></h4><br>
                        
                        <ul>
                          <li>разход л/м2  0,2-0,5</li>
                          <li>готова за употреба</li>
                          <li> с висока покривна способност - прави основата хомогенна</li>
                          <li>водоустойчива</li>
                          <li>намалява хигроскопичността на основата</li>
                          <li>улеснява нанасянето на мазилката</li>
                          <li>увеличава сцеплението с основата</li>
                        </ul>
                        <h4><b>ОПИСАНИЕ</b></h4><br>
                        <p><b>CT 16 Грундираща боя</b><br>
                          Декоративна тънкослойна мазилка със зърнеста структура (зърно 1,5 mm) за фасади и вътрешни стени в сгради<br>
                          За грундиране на повърхности преди покриването им с тънкослойни мазилки, шпакловки и др. бояджийски покрития. Улеснява полагането на мазилките и измазването на сградите отвън и отвътре. За грундиране на армирания с фибростъклена мрежа слой като етап от изпълнението на фасадната топлоизолационна система Ceresit Ceretherm. Подходяща за нанасяне върху плоскости от гипсокартон и гипсофазер, гипсови мазилки, бетонни повърхности. Не се разрежда!</p><br><br>
                        </div>
                        <div class="ct175 mazilki">
                          <img class="ct60" src="img/ct48.jpg">
                          <h4><b>БОЯ СИЛИКОНОВА СТ48 15л БАЗА</b></h4><br>
                          
                          <ul>
                            <li>разход л/м2   0,3</li>
                            <li>вътрешно приложение   да</li>
                            <li>външно приложение   да</li>
                            <li>силно устойчива на замърсяване</li>
                            <li>с отлична паропропускливост</li>
                            <li>лесна употреба</li>
                            <li>устойчива на UV-лъчи</li>
                            <li>устойчива на неблагоприятни атмосферни условия</li>
                          </ul>
                          <h4><b>ОПИСАНИЕ</b></h4><br>
                          <p><b>CT 48 Силиконова боя за фасади и интериори на сгради </b><br>
                            За трайно покритие и повърхностна защита на фасади и бетонни конструкции, както и за интериори. Подходяща за покриване на минерални основи, които никога не са били боядисвани, на минерални, акрилни, силикатни, силиконови, както и силикат-силиконови мазилки. Осигурява бързо изпарение на влагата от основата и създава защита срещу повърхностната и атмосферната влага. Елемент от система за външна фасадна топлоизолация Ceresit Ceretherm.<br><br>
                            Ceresit CT 48 се използва за трайно покритие и повърхностна защита на фасади и бетонни конструкции, както и за интериори. Подходяща за покриване на минерални основи (бетон, циментови мазилки, вароциментови мазилки и варови мазилки), които никога не са били боядисвани. Боята може да се полага върху минерални, акрилни (Ceresit СТ 60, СТ 63, СТ 64), силикатни, силиконови (Ceresit СТ 74, СТ 75), както и силикат-силиконови мазилки (Ceresit CT 174, CT 175). Елемент от система за външна фасадна топлоизолация Ceresit Ceretherm. СТ 48 осигурява бързо изпарение на
                            влагата от основата и същевременно създава надеждна защита срещу повърхностната влага и атмосферната влажност. Свързващите вещества в боята СТ 48 създават ефекта на „водни перли“ при намокряне на покритието. СТ 48 е особено подходяща за употреба върху стари мазилки при реставрация на обекти, както и върху повърхности, изискващи голяма гъвкавост и издръжливост на покритието. Фасадите, боядисани с СТ 48, могат да се мият с пароструйка под ниско налягане.</p><br><br>
                          </div>
                          <div class="ct74 mazilki">
                            <img class="ct60" src="img/ct42.jpg">
                            <h4><b>БОЯ ФАСАДНА АКРИЛНА СТ42 15л БАЗА</b></h4><br>
                            
                            <ul>
                              <li>разход л/м2   0,3</li>
                              <li>структура   зърнеста 1,5 мм.</li>
                              <li>вътрешно приложение   да</li>
                              <li>външно приложение   да</li>
                              <li>устойчива на алкално въздействие</li>
                              <li>лесна употреба</li>
                              <li>устойчива на неблагоприятни атмосферни условия</li>
                            </ul>
                            <h4><b>ОПИСАНИЕ</b></h4><br>
                            <p><b>CT 42 Акрилна боя за фасади и интериори на сгради</b><br>
                              За трайно покритие и защита на фасади, за боядисване на бетонни конструкции и вътрешни стени и тавани. Подходяща за покриване на минерални основи (бетон, циментови замазки, вароциментови и варови замазки). Може да се полага върху минерални и акрилни мазилки. Елемент от система за външна фасадна топлоизолация Ceresit Ceretherm.<br><br>
                              Ceresit CT 42 е предназначена за трайно покритие и защита на фасади, за боядисване на бетонни конструкции и вътрешни стени и тавани. Подходяща за покриване на минерални основи (бетон, циментови замазки, вароциментови и варови замазки). Боята може да се полага върху минерални и акрилни мазилки (Ceresit CT 60, CT 63, CT 64). Елемент от система за външна фасадна топлоизолация Ceresit Ceretherm. Фасади, покрити с боята СТ 42, могат да се мият с
                              пароструйка със слабо налягане. Нагряването на фасадите от слънцето предизвиква вредни напрежения, поради което тъмни цветове трябва да се използват върху малки повърхности, например архитектурни детайли.
                            </p><br><br>
                            <h4><b>ЗА ПОДОБНИ ПРОДУКТИ КОИТО НЕ ВИЖДАТЕ В КАТЕГОРИЯТА, МОЛЯ СВЪРЖЕТЕ СЕ С НАС НА ПОСОЧЕНИТЕ ТЕЛЕФОНИ</b></h4>
                          </div>
                        </div>
                      </div>
                      <div class="newboxes" id="newboxes2">
                        <div class="ceresitMazilkiIBoi">
                          <h2><b>THRAKON</b></h2><br>
                          <input type="button" class="btn btn-primary" id="x_3" value="МАЗИЛКИ" onclick="showDiv('3')">
                          <input type="button" class="btn btn-primary" id="x_4" value="БОИ И ГРУНД" onclick="showDiv('4')">
                        </div>
                        <div id="ele-3" style="display: none;">
                          <h3 class="mazilki"><b>МАЗИЛКИ THRAKON</b></h3><br>
                          <div class="dec428 mazilki">
                            <img class="ct60" src="img/DEC428.jpg">
                            <h4><b>Thrakon DEC 428 Polyplast 25кг Полимерна мазилка</b></h4><br>
                            <p><b>Структура / Разходна норма:</b></p>
                            <ul>
                              <li><b>влачена (R)</b></li>
                              <li>1,5 mm – 2,4 кг / m2</li>
                              <li>2,0 mm – 2,7 кг / m2</li><br>
                              <li><b>пердашена (К)</b></li>
                              <li>1 mm – 2,3 кг / m2</li>
                              <li>1,5 mm – 2,7 кг / m2</li>
                              <li>2,0 mm – 3,0 кг / m2</li>
                            </ul>
                            <h4><b>ОПИСАНИЕ</b></h4><br>
                            <p><b>Thrakon DEC 428 Polyplast Полимерна мазилка</b><br>
                              Готова за употреба пастообразна полимер-акрилатна мазилка за декоративно оформление на фасади. Притежава отлична влагоустойчивост и паропропускливост. Изисква предварително грундиране на основата с грунд GLX 494 Prim.<br><br>
                              
                              * Разходната норма зависи от качеството на основата и начина на полагане на мазилката.<br>
                              Тониране по цветови каталози Thrakon 2008 и Thrakon Color Vision 2013.</p><br><br>
                            </div>
                            <div class="dec427 mazilki">
                              <img class="ct60" src="img/dec427.jpg">
                              <h4><b>Thrakon DEC 427 Decorativa 25кг Акрилна мазилка</b></h4><br>
                              <p><b>Структура / Разходна норма:</b></p>
                              <ul>
                                <li><b>влачена (R)</b></li>
                                <li>2,0 mm – 2,5 кг / m2</li>
                                <li>3,0 mm – 3,0 кг / m2</li><br>
                                <li><b>пердашена (К)</b></li>
                                <li>1,5 mm – 2,7 кг / m2</li>
                                <li>2,0 mm – 3,0 кг / m2</li>
                              </ul>
                              <h4><b>ОПИСАНИЕ</b></h4><br>
                              <p><b>Thrakon DEC 427 Decorativa Акрилна мазилка</b><br>
                                Пастообразна декоративна мазилка за оформление на фасади на базата на акрилни полимери, минерални пълнители и пигменти. Притежава отлична влагоустойчивост и паропропускливост. Полага се върху всички видове минерални основи – бетон, циментови мазилки и шпакловки. Изисква предварително грундиране на основата с акрилен грунд Thrakon GLX 494 Prim.<br><br>
                                * Разходната норма зависи от качеството на основата и начина на полагане на мазилката.<br>
                                Тониране по цветови каталози Thrakon 2008 и Thrakon Color Vision 2013.</p><br><br>
                              </div>
                              <div class="dec429 mazilki">
                                <img class="ct60" src="img/dec429.jpg">
                                <h4><b>Thrakon DEC 429 Silicate 25кг Силикатна мазилка</b></h4><br>
                                <p><b>Структура / Разходна норма:</b></p>
                                <ul>
                                  <li><b>влачена (R)</b></li>
                                  <li>1,5 mm – 2,4 кг / m2</li>
                                  <li>2,0 mm – 2,7 кг / m2</li><br>
                                  <li><b>пердашена (К)</b></li>
                                  <li>1 mm – 2,3 кг / m2</li>
                                  <li>1,5 mm – 2,7 кг / m2</li>
                                  <li>2,0 mm – 3,0 кг / m2</li>
                                </ul>
                                <h4><b>ОПИСАНИЕ</b></h4><br>
                                <p><b>Thrakon DEC 429 Silicate 25кг Силикатна мазилка</b><br>
                                  Готова за употреба силикатна мазилка за декоративно оформление на фасади. Притежава отлична влагоустойчивост и паропропускливост. Използва се като фасадна или вътрешна декоративна мазилка при ново строителство и реновации. Изисква предварително грундиране на основата с грунд GLX 494 Prim.<br><br>
                                  * Разходната норма зависи от качеството на основата и начина на полагане на мазилката.<br>
                                  Тониране по цветови каталози Thrakon 2008 и Thrakon Color Vision 2013.</p><br><br>
                                </div>
                                <div class="dec430 mazilki">
                                  <img class="ct60" src="img/dec430.jpg">
                                  <h4><b>Thrakon DEC 430 Silicoplast 25кг Силикон-модифицирана мазилка</b></h4><br>
                                  <p><b>Структура / Разходна норма:</b></p>
                                  <ul>
                                    <li><b>влачена (R)</b></li>
                                    <li>1,5 mm – 2,4 кг / m2</li>
                                    <li>2,0 mm – 2,7 кг / m2</li><br>
                                    <li><b>пердашена (К)</b></li>
                                    <li>1,5 mm – 2,7 кг / m2</li>
                                    <li>2,0 mm – 3,0 кг / m2</li>
                                    <li>паропропусклива</li>
                                  </ul>
                                  <h4><b>ОПИСАНИЕ</b></h4><br>
                                  <p><b>Thrakon DEC 430 Silicoplast Силикон-модифицирана мазилка</b><br>
                                    Готова за употреба пастообразна силикон-модифицирана мазилка на акрилна основа. Полага се върху бетон, циментови мазилки и всякакъв вид минерални основи. Притежава отлична влагоустойчивост и паропропускливост. Изисква предварително грундиране на основата с грунд GLX 494 Prim.<br><br>
                                    * Разходната норма зависи от качеството на основата и начина на полагане на мазилката.<br>
                                    Тониране по цветови каталози Thrakon 2008 и Thrakon Color Vision 2013.</p><br><br>
                                    <h4><b>ЗА ПОДОБНИ ПРОДУКТИ КОИТО НЕ ВИЖДАТЕ В КАТЕГОРИЯТА, МОЛЯ СВЪРЖЕТЕ СЕ С НАС НА ПОСОЧЕНИТЕ ТЕЛЕФОНИ</b></h4>
                                  </div>
                                </div>
                                <div id="ele-4" style="display: none;">
                                  <h3 class="mazilki"><b>БОИ И ГРУНД THRAKON</b></h3><br>
                                  <div class="dec466 mazilki">
                                    <img class="ct60" src="img/dec466.jpg">
                                    <h4><b>Thrakon DEC 466 Intero Pol 5кг-8кг-25кг Интериорна боя</b></h4><br>
                                    <p><b>Разходна норма:</b></p>
                                    <ul>
                                      <li>0,200 - 0,300 кг/m2</li>
                                      <li>кофа - 25 кг/палет - 27 бр.</li>
                                      <li>кофа - 8 кг/палет - 60 бр.</li>
                                      <li>кофа - 5 кг/палет - 96 бр. </li>
                                    </ul>
                                    <h4><b>ОПИСАНИЕ</b></h4><br>
                                    <p><b>DEC 466 Intero Pol</b><br>
                                      Готова за употреба интериорна матова дисперсна боя на акрилна основа за вътрешно приложение върху стени и тавани. Притежава отлична покриваемост, паропропускливост и износоустойчивост. За вътрешно приложение върху всички видове минерални основи и мазилки, шпакловки, хастарни мазилки, гипсови мазилки, плочи от гипсокартон, стари дисперсни бои, тапети и др.<br><br>
                                      Тониране по цветови каталози Thrakon 2008 и Thrakon Color Vision 2013.</p><br><br>
                                    </div>
                                    <div class="dec467 mazilki">
                                      <img class="dec467" src="img/dec467.jpg">
                                      <h4><b>DEC 467 Intero Gold 25 кг</b></h4><br>
                                      <p><b>Разходна норма:</b></p>
                                      <ul>
                                        <li>0,120 ml/m2 </li>
                                      </ul>
                                      <h4><b>ОПИСАНИЕ</b></h4><br>
                                      <p><b>DEC 467 Intero Gold</b><br>
                                        Висококачествена интериорна дисперсна боя с изключителна покриваемост (нанася се на един слой) и висока износоустойчивост дори и на влажно миене. Особено подходяща за употреба върху изискващи минерални основи - гипсокартонени плоскости, фини гипсови шпакловки и др.<br>
                                        Тониране по цветови каталози Thrakon 2008 и Thrakon Color Vision 2013.</p><br><br>
                                      </div>
                                      <div class="status mazilki">
                                        <img class="ct60" src="img/status.jpg">
                                        <h4><b>Status Kitchen & bath Антимухълна интериорна боя</b></h4><br>
                                        <p><b>Разходна норма:</b></p>
                                        <ul>
                                          <li>0,120 ml/m2 </li>
                                          <li>кофа - 10 L</li>
                                          <li>кофа - 3 L</li>
                                        </ul>
                                        <h4><b>ОПИСАНИЕ</b></h4><br>
                                        <p><b>Status Kitchen & bath Антимухълна интериорна боя</b><br>
                                          STATUS Kitchen & Bath
                                          Интериорна, матова, миеща се емулсионна боя за мокри и санитарни помещения. Притежава отлична покриваемост и износоустойчивост.
                                          Предотвратява развитие на мухъл и плесен.<br>
                                          Тониране по цветови каталози Thrakon 2008 и Thrakon Color Vision 2013.</p><br><br>
                                        </div>
                                        <div class="ct74 mazilki">
                                          <img class="efecto" src="img/efecto.jpg">
                                          <h4><b>DEC 465 Efecto</b></h4><br>
                                          <p><b>Разходна норма:</b></p>
                                          <ul>
                                            <li>0,200 - 0,300 кг/ m2</li>
                                            <li>кофа - 25 кг/палет - 36 бр.</li>
                                            <li>кофа - 5 кг/палет - 60 бр.</li>
                                          </ul>
                                          <h4><b>ОПИСАНИЕ</b></h4><br>
                                          <p><b>DEC 465 Efecto</b><br>
                                            Готова за употреба интериорна матова дисперсна боя на акрилна основа за вътрешно приложение върху стени и тавани. Притежава отлична покриваемост, паропропускливост и износоустойчивост. Нанасясе върху всички видове минерални основи и мазилки, шпакловки, хастарни мазилки, гипсови мазилки, плочи от гипсокартон, стари дисперсни бои, тапети и др.<br>
                                            Тониране по цветови каталози Thrakon 2008 и Thrakon Color Vision 2013.
                                          </p><br><br>
                                        </div>
                                        <div class="ct74 mazilki">
                                          <img class="ct60" src="img/dec450.jpg">
                                          <h4><b>Thrakon DEC 450 Fas Acryl Акрилна фасадна боя</b></h4><br>
                                          <p><b>Разходна норма:</b></p>
                                          <ul>
                                            <li>0,300 - 0,350 кг/m?  за два слоя</li>
                                            <li>кофа - 8 кг/палет - 60 бр.</li>
                                            <li>кофа - 25 кг/палет - 27 бр.</li>
                                          </ul>
                                          <h4><b>ОПИСАНИЕ</b></h4><br>
                                          <p><b>Thrakon DEC 450 Fas Acryl Акрилна фасадна боя</b><br>
                                            Акрилна дисперсионна фасадна боя на база акрилни кополимери. UV устойчива, водоотблъскваща и с много добра покриваемост и парoпропускливост. За външно и вътрешно приложение. Нанася се върху всички видове стари и нови варо-циментови мазилки, шпакловки, хастари, гипсови мазилки, бетон и други минерални основи. Преди полагане основата се грундира с Thrakon акрилен грунд.<br>
                                            Тониране по цветови каталози Thrakon 2008 и Thrakon Color Vision 2013.
                                          </p><br><br>
                                        </div>
                                        <div class="dec452 mazilki">
                                          <img class="dec452" src="img/dec452.jpg">
                                          <h4><b>Thrakon DEC 452 Fas Silicon Силиконова фасадна боя</b></h4><br>
                                          <p><b>Разходна норма:</b></p>
                                          <ul>
                                            <li>0,300 - 0,350 кг/m² за два слоя </li>
                                            <li>кофа - 8 кг/палет - 60 бр.</li>
                                            <li>кофа - 25 кг/палет - 27 бр.</li>
                                          </ul>
                                          <h4><b>ОПИСАНИЕ</b></h4><br>
                                          <p><b>Thrakon DEC 452 Fas Silicon Силиконова фасадна боя</b><br>
                                            Силиконова фасадна боя на база силиконови смоли, минерални пълнители, добавки и пигменти. За външно и вътрешно приложение.
                                            UV устойчива, водоотблъскваща и с отлична покриваемост и парoпропускливост.
                                            Нанася се върху всички обичайни минерални основи в строителството. Особено подходяща при саниране на стари сгради и за реновиране на съществуващи финишни декоративни мазилки.
                                            Преди полагане основата се грундира с Thrakon акрилен грунд. <br>
                                            Тониране по цветови каталози Thrakon 2008 и Thrakon Color Vision 2013.
                                          </p><br><br>
                                        </div>
                                        <div class="dec452 mazilki">
                                          <img class="dec452" src="img/dec451.jpg">
                                          <h4><b>DEC 451 Fas Silicate Силикатна фасадна боя</b></h4><br>
                                          <p><b>Разходна норма:</b></p>
                                          <ul>
                                            <li>0,300 - 0,350 кг/m² за два слоя </li>
                                            <li>кофа - 8 кг/палет - 60 бр.</li>
                                            <li>кофа - 25 кг/палет - 27 бр.</li>
                                          </ul>
                                          <h4><b>ОПИСАНИЕ</b></h4><br>
                                          <p><b>DEC 451 Fas Silicate Силикатна фасадна боя</b><br>
                                            Силикатна фасадна боя на база калиево водно стъкло, минерални пълнители,
                                            добавки и пигменти. За външно и вътрешно приложение.
                                            UV устойчива, водоотблъскваща и с много добра покриваемост
                                            и парoпропускливост.
                                            Нанася се върху всички видове стари и нови варо-циментови мазилки, шпакловки, хастари, гипсови мазилки, бетон и други минерални основи. Особено подходяща при саниране на стари сгради и за реновиране на съществуващи финишни силикатни декоративни мазилки.
                                            Преди полагане основата се грундира с Thrakon акрилен грунд. <br>
                                            Тониране по цветови каталози Thrakon 2008 и Thrakon Color Vision 2013.
                                          </p><br><br>
                                        </div>
                                        <div class="glx494 mazilki">
                                          <img class="dec452" src="img/glx494.jpg">
                                          <h4><b>GLX 494 Prim ГРУНД</b></h4><br>
                                          <p><b>Разходна норма:</b></p>
                                          <ul>
                                            <li>0,200 - 0,250 кг/m?</li>
                                            <li>кофа - 8 кг/палет - 60 бр.</li>
                                            <li>кофа - 25 кг/палет - 27 бр.</li>
                                          </ul>
                                          <h4><b>ОПИСАНИЕ</b></h4><br>
                                          <p><b>GLX 494 Prim ГРУНД</b><br>
                                            Акрилен, паропропусклив грунд за изравняване попиващата способност на основата преди полагането на Thrakon декоративни фасадни мазилки и бои.
                                            Разреждане с вода в съотношение 1:0,5. <br>
                                            Тониране по цветови каталози Thrakon 2008 и Thrakon Color Vision 2013.
                                          </p><br><br>
                                        </div>
                                        <div class="glx496 mazilki">
                                          <img class="dec452" src="img/glx496.jpg">
                                          <h4><b>GLX 496 Acryl ГРУНД</b></h4><br>
                                          <p><b>Разходна норма:</b></p>
                                          <ul>
                                            <li>0,200 - 0,250 кг/m?</li>
                                            <li>кофа - 8 кг/палет - 60 бр.</li>
                                            <li>кофа - 25 кг/палет - 27 бр.</li>
                                          </ul>
                                          <h4><b>ОПИСАНИЕ</b></h4><br>
                                          <p><b>GLX 496 Acryl ГРУНД</b><br>
                                            Бял акрилен грунд без разтворители. Изравнява попивателната способност на основата
                                            и подобрява сцеплението с последващи декоративни покрития като благородни, сухи
                                            циментови и пастообразни полимерни мазилки.
                                            Грундът се разрежда с 15-20% чиста вода.
                                          </p><br><br>
                                          <h4><b>ЗА ПОДОБНИ ПРОДУКТИ КОИТО НЕ ВИЖДАТЕ В КАТЕГОРИЯТА, МОЛЯ СВЪРЖЕТЕ СЕ С НАС НА ПОСОЧЕНИТЕ ТЕЛЕФОНИ</b></h4>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="newboxes" id="newboxes3">
                                      <div class="ceresitMazilkiIBoi">
                                        <h2><b>ANGRO</b></h2><br>
                                        <input type="button" class="btn btn-primary" id="x_5" value="МАЗИЛКИ" onclick="showDiv('5')">
                                        <input type="button" class="btn btn-primary" id="x_6" value="БОИ И ГРУНД" onclick="showDiv('6')">
                                      </div>
                                      <div id="ele-5" style="display: none;">
                                        <h3 class="mazilki"><b>МАЗИЛКИ ANGRO</b></h3><br>
                                        <div class="polimerna mazilki">
                                          <img class="polimerna" src="img/polimerna.jpg">
                                          <h4><b>Полимерна мазилка PLASTER APM 688</b></h4><br>
                                          <p><b>Разходна норма:</b></p>
                                          <ul>
                                            <li>7 - 10 кв.м. с една бака в зависимост от едрината на камъка.</li>
                                            <li>Опаковка: БЯЛА - 25 кг</li>
                                            <li>Опаковка: ЦВЕТНА - 25 кг. по картел - 20 000 цвята;</li>
                                          </ul>
                                          <h4><b>ОПИСАНИЕ</b></h4><br>
                                          <p><b>Полимерна мазилка </b><br>
                                            Полимерна мазилка PLASTER APM 688 e готова за работа смес. Използва се като завършващо декоративно покритие за: фасади, елементи от тях, оформяне на стени и тавани във вътрешни помещения. Мазилката е с гарантирана устойчивост на цветовете, водоустойчива и износоустойчива.<br> Оцветява се в над 25 000 цвята.
                                          </p><br><br>
                                        </div>
                                        <div class="silikonova mazilki">
                                          <img class="polimerna" src="img/silikonova.jpg">
                                          <h4><b>Силиконова мазилка  PLASTER APS 690</b></h4><br>
                                          <p><b>Разходна норма:</b></p>
                                          <ul>
                                            <li>7 - 10 кв.м. с една бака в зависимост от едрината на камъка.</li>
                                            <li>Опаковка: БЯЛА - 25 кг</li>
                                            <li>Опаковка: ЦВЕТНА - 25 кг. по картел - 20 000 цвята;</li>
                                          </ul>
                                          <h4><b>ОПИСАНИЕ</b></h4><br>
                                          <p><b>Силиконова мазилка</b><br>
                                            Силиконова мазилка PLASTER APS 690 e готова за работа смес. Използва се като завършващо декоративно покритие за: фасади, елементи от тях, оформяне на стени и тавани във вътрешни помещения. Мазилката е с гарантирана устойчивост на цветовете, водоустойчива и износоустойчива.<br> Оцветява се в над 25 000 цвята.
                                          </p><br><br>
                                        </div>
                                        <div class="silikatna mazilki">
                                          <img class="polimerna" src="img/silikatna.jpg">
                                          <h4><b>Силикатна мазилка  PLASTER AST 689</b></h4><br>
                                          <p><b>Разходна норма:</b></p>
                                          <ul>
                                            <li>7 - 10 кв.м. с една бака в зависимост от едрината на камъка.</li>
                                            <li>Опаковка: БЯЛА - 25 кг</li>
                                            <li>Опаковка: ЦВЕТНА - 25 кг. по картел - 20 000 цвята;</li>
                                          </ul>
                                          <h4><b>ОПИСАНИЕ</b></h4><br>
                                          <p><b>Силикатна мазилка</b><br>
                                            Силикатна мазилка PLASTER AST 689 e готова за работа смес. Използва се като завършващо декоративно покритие за: фасади, елементи от тях, оформяне на стени и тавани във вътрешни помещения. Мазилката е с гарантирана устойчивост на цветовете, водоустойчива и износоустойчива. <br> Оцветява се в над 25 000 цвята.
                                          </p><br><br>
                                          <h4><b>ЗА ПОДОБНИ ПРОДУКТИ КОИТО НЕ ВИЖДАТЕ В КАТЕГОРИЯТА, МОЛЯ СВЪРЖЕТЕ СЕ С НАС НА ПОСОЧЕНИТЕ ТЕЛЕФОНИ</b></h4>
                                        </div>
                                      </div>
                                      <div id="ele-6" style="display: none;">
                                        <h3 class="mazilki"><b>БОИ И ГРУНД ANGRO</b></h3><br>
                                        <div class="fasadna mazilki">
                                          <img class="polimerna" src="img/fasadna.jpg">
                                          <h4><b>Фасадна боя</b></h4><br>
                                          <p><b>Разходна норма:</b></p>
                                          <ul>
                                            <li>200 - 220 гр./кв.м. за един слой в зависимост от начина на нанасяне и повърхността.</li>
                                            <li>Опаковка: 5 кг., 12 кг.,  23 кг.</li>
                                          </ul>
                                          <h4><b>ОПИСАНИЕ</b></h4><br>
                                          <p><b>Фасадна боя</b><br>
                                            FASADEN AF 345 е висококачествена боя за външно приложение - фасади или част от тях.
                                          </p><br><br>
                                        </div>
                                        <div class="dishasht mazilki">
                                          <img class="polimerna" src="img/dishasht.jpg">
                                          <h4><b>Латекс Дишащ БРИЛЕКС</b></h4><br>
                                          <p><b>Разходна норма:</b></p>
                                          <ul>
                                            <li>200 - 220 гр./кв.м.</li>
                                            <li>Опаковка: 1 кг.,  5 кг., 15 кг., 25 кг.</li>
                                          </ul>
                                          <h4><b>ОПИСАНИЕ</b></h4><br>
                                          <p><b>Латекс Дишащ БРИЛЕКС</b><br>
                                            Латекс Дишащ е висококачествена дишаща боя за вътрешно приложение - стени и тавани.
                                          </p><br><br>
                                        </div>
                                        <div class="standart mazilki">
                                          <img class="polimerna" src="img/standart.jpg">
                                          <h4><b>Латекс Стандарт</b></h4><br>
                                          <p><b>Разходна норма:</b></p>
                                          <ul>
                                            <li>200 - 220 гр./кв.м.</li>
                                            <li>Опаковка: 1 кг.,  5 кг., 15 кг., 25 кг.</li>
                                          </ul>
                                          <h4><b>ОПИСАНИЕ</b></h4><br>
                                          <p><b>Латекс Стандарт</b><br>
                                            Латекс Стандарт е висококачествена боя за вътрешно приложение - стени и тавани. Супер бяла.
                                          </p><br><br>
                                        </div>
                                        <div class="bulmaks mazilki">
                                          <img class="polimerna" src="img/bulmaks.jpg">
                                          <h4><b>Немски латекс BULMAX</b></h4><br>
                                          <ul>
                                            <li>Опаковка:   5 кг.   15 кг.  25 кг.</li>
                                          </ul>
                                          <h4><b>ОПИСАНИЕ</b></h4><br>
                                          <p><b>Немски латекс BULMAX</b><br>
                                            Боята е предназначена за вътрешно боядисване в сухи помещения и може да се прилага върху гипсокартон, бетон, стар латекс, гипсови и варови шпакловки, релефни и хартиени тапети. Нанася се лесно, има отлична белота, покривност и издръжливост срещу изтриване, като позволява на стената да „диша“.
                                          </p><br><br>
                                        </div>
                                        <div class="bulmaks mazilki">
                                          <img class="polimerna" src="img/silikonovaBoq.jpg">
                                          <h4><b>Силиконова боя</b></h4><br>
                                          <p><b>Разходна норма:</b></p>
                                          <ul>
                                            <li>200 - 220 гр./кв.м. за един слой в зависимост от начина на нанасяне и повърхността.</li>
                                            <li>Опаковка:   5 кг.   15 кг.  25 кг.</li>
                                          </ul>
                                          <h4><b>ОПИСАНИЕ</b></h4><br>
                                          <p><b>Силиконова боя</b><br>
                                            Висококачествена боя на база силиконови смоли за външни помещения, фасади или част от тях.
                                          </p><br><br>
                                        </div>
                                        <div class="universalen mazilki">
                                          <img class="polimerna" src="img/universalen.jpg">
                                          <h4><b>Универсален грунд за мазилка </b></h4><br>
                                          <p><b>Разходна норма:</b></p>
                                          <ul>
                                            <li>0,200 - 0,250 гр./кв.м.</li>
                                            <li>Опаковка: 5 кг., 20 кг.</li>
                                          </ul>
                                          <h4><b>ОПИСАНИЕ</b></h4><br>
                                          <p><b>Универсален грунд за мазилка </b><br>
                                            Универсалният грунд се нанася преди течни мазилки /акрилна основа/, създава идеална основа за тях и запазва паропропускливостта на основата. Водоустойчив и лесен за работа, има  висока адхезия към  циментови и  минерални основи.<br> Оцветява се с цвета на мазилката.
                                          </p><br><br>
                                        </div>
                                        <div class="dalbokopronikvasht mazilki">
                                          <img class="polimerna" src="img/dalbokopronikvasht.jpg">
                                          <h4><b>Дълбокопроникващ грунд</b></h4><br>
                                          <p><b>Разходна норма:</b></p>
                                          <ul>
                                            <li>60 - 250 мл./кв.м. В зависимост от разреждането и основата.</li>
                                            <li>Опаковка: 1 L (12 броя в кашон), 5 L, 18 L</li>
                                          </ul>
                                          <h4><b>ОПИСАНИЕ</b></h4><br>
                                          <p><b>Дълбокопроникващ грунд</b><br>
                                            Дълбокопроникващият грунд е силно проникващ и заздравяващ за нездрави повърхности, намалява попиваемостта, отблъскава влагата, много добро сцепление между стари и нови основи. Предназначен е за заздравяване на стари хоросанови, бетонови, гипсови, и други мазилки преди полагането на акрилатни и силиконови бои.<br>
                                          </p><br><br>
                                        </div>
                                        <div class="contacten mazilki">
                                          <img class="polimerna" src="img/contacten.jpg">
                                          <h4><b>Контактен грунд</b></h4><br>
                                          <p><b>Разходна норма:</b></p>
                                          <ul>
                                            <li>100 - 250 гр./кв.м. в зависимост от основата.</li>
                                            <li>Опаковка: 1 L (12 броя в кашон), 5 L</li>
                                          </ul>
                                          <h4><b>ОПИСАНИЕ</b></h4><br>
                                          <p><b>Контактен грунд</b><br>
                                            Контактният грунд е готов за употреба, не се разрежда. Служи като свързващ слой между стари и нови основи, при лепене на нов върху стар - фаянс, теракота, мрамор, гранитогрес, нов върху стар бетон, мазилка. Подходящ е за слабо абсорбиращи повърхности.<br>
                                          </p><br><br>
                                        </div>
                                        <div class="betonkontakt mazilki">
                                          <img class="polimerna" src="img/betoncontakt.jpg">
                                          <h4><b>Бетонконтакт</b></h4><br>
                                          <p><b>Разходна норма:</b></p>
                                          <ul>
                                            <li>250-350 гр./кв.м.  в зависимост  от основата.</li>
                                            <li>Опаковка: 1 кг. (6 броя в кашон), 5 кг., 25 кг.</li>
                                          </ul>
                                          <h4><b>ОПИСАНИЕ</b></h4><br>
                                          <p><b>Бетонконтакт </b><br>
                                            Бетонконтакт BC 135 е готов за употреба. Има висока адхензия към циментови, минерални  и гипсови основи, което го прави идеален свързващ слой между  стари и нови основи. Задължително  се използва при слаби, плътни  и неабсорбиращи повърхности. Служи като межди-нен слой при: лепене на нови фаянс, теракот и др. върху стари такива; залепване на гипсокартон върху тухлени, бетонови основи и др.; полага-не на мазилки, шпакловки върху стени и тавани;  като основа  за непопиващи мазилки.<br>
                                          </p><br><br>
                                        </div>
                                        <div class="antifriz mazilki">
                                          <img class="polimerna" src="img/antifriz.jpg">
                                          <h4><b>АНТИФРИЗ - АНГРО</b></h4><br>
                                          <ul>
                                            <li>Опаковка  1 кг.   5 кг.   25 кг.</li>
                                          </ul>
                                          <h4><b>ОПИСАНИЕ</b></h4><br>
                                          <p><b>ДОБАВКА ПРОТИВ ЗАМРЪЗВАНЕ </b><br>
                                            Течна противозамръзваща добавка, която се използва за изготвяне на бетони, циментови разтвори и мазилки при температури до -5 градуса.
                                          </p><br><br>
                                          <h4><b>ЗА ПОДОБНИ ПРОДУКТИ КОИТО НЕ ВИЖДАТЕ В КАТЕГОРИЯТА, МОЛЯ СВЪРЖЕТЕ СЕ С НАС НА ПОСОЧЕНИТЕ ТЕЛЕФОНИ</b></h4>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="push"></div>
                                <div class="col-md-12 col-centered">
                                  <div class="footer">
                                    <span>БЪРЗИ ВРЪЗКИ</span><br>
                                    <ul class="barziVrazki">
                                      <li><a href="tuhli.php">ТУХЛИ</a></li>
                                      <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                                      <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                                      <li><a href="ytong.php">ИТОНГ</a></li>
                                    </ul>
                                    <ul class="barziVrazki">
                                      <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                                      <li><a href="vata.php">ВАТА</a></li>
                                      <li><a href="profili.php">ПРОФИЛИ</a></li>
                                      <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                                    </ul>
                                    <ul class="barziVrazki">
                                      <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                                      <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                                      <li><a href="mreji.php">МРЕЖИ</a></li>
                                      <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                                    </ul>
                                    <ul class="barziVrazki">
                                      <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                                      <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                                      <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                                      <li><a href="#.php">СУХИ СМЕСИ</a></li>
                                    </ul><br><br>
                                    <span>Всички права запазени</span>
                                    <span class="mitashki">Created by <a href="https://www.facebook.com/profile.php?id=100000686533887">Mitashki</a> &copy;</span>
                                  </div>
                                </div>
                              </div>
                              <!--back to top start-->
                              <a href="#" class="back-to-top">Обратно горе</a>
                              <script type="text/javascript">
                                $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
                                var amountScrolled = 200;
                                $(window).scroll(function() {
                                  if ( $(window).scrollTop() > amountScrolled ) {
                                    $('a.back-to-top').fadeIn('slow');
                                  } else {
                                    $('a.back-to-top').fadeOut('slow');
                                  }
                                });
                                $('a.back-to-top').click(function() {
                                  $('html, body').animate({
                                    scrollTop: 0
                                  }, 700);
                                  return false;
                                });
                              </script>
                              <!--back to top end-->
                              <!-- container -->
                            </body>
                            </html><!DOCTYPE html>
<html>
<head>
  <title>Ени-92</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
  
  <style type="text/css">
    body {
      background-image: url('img/font.jpg');
      margin: 0;
      padding: 0;
      height: 0;
    }
    .logo {
      width: 50%;
      margin-top: 2%;
      margin-bottom: 2%;
    }
    .line {
      height: 2px;
      background-color: red;
    }
    .bottom-line {
      height: 2px;
      background-color: red;
    }
    .tel {
      width: 40%;
      float: right;
    }
    h4 {
      color: red;
      display: inline-block;
    }
    
    
    
    
    @media screen and (max-width: 600px) {
      .adres, .email { font-size: 20px;}
    }
    @media screen and (max-width: 600px) {
      .email { font-size: 15px;}
    }
    @media screen and (max-width: 500px) {
      .adres, .email { font-size: 15px;}
    }
    .navbar {
      background-color: #c1c1c1;
    }
    .navbar-nav {
      width: 100%;
      text-align: center;
      background: #c1c1c1;
    }
    .navbar-nav>li {
      float: initial;
      line-height: 150px;
    }
    .nav>li {
      display:inline-block;
    }
    .van {
      width: 20%;
      float: left;
    }
    .van-button {
      width: 20%;
      float: left;
    }
    .facebook {
      width: 5%;
      margin: 0 2%;
    }
    @media screen and (max-width: 500px) {
      .facebook { width: 10%;}
    }
    @media screen and (max-width: 780px) {
      .van { display: none;}
    }
    @media screen and (min-width: 780px) {
      .van-button { display: none;}
    }
    @media screen and (max-width: 760px) {
      .van-button { width: 40%;}
    }
    /*CATEGORY END*/
    /*footer start*/
    .footer, .push {
      min-height: 4em;
      margin: 0 auto;
      margin-bottom: 1%;
      border-radius: 10px;
    }
    .footer {
      padding: 2% 2% 2% 2%;
      color: #F2DBA5;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+45,6d0019+76,6d0019+79 */
      background: rgb(169,3,41); /* Old browsers */
      background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 45%, rgba(109,0,25,1) 76%, rgba(109,0,25,1) 79%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    }
    .barziVrazki > li > a {
      color: #F2DBA5;
    }
    /*fuuter end*/
    .mitashki {
      margin-left: 10%;
    }
    .input-group[class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }
    .contactForm {
      background-color: #5B74A9;
      color: white;
      margin: 1%;
      margin-left: 10%;
    }
    @media screen and (max-width: 500px) {
      .contactForm { margin: 0 auto; font-size: 11px;}
    }
    .contactForm:hover {
      background-color: white;
      color: #5B74A9;
      border: 1px solid #5B74A9;
    }
    .modal-title {
      color: #5B74A9;
    }
    .dropdown-menu > li {
      background-color: white;
      text-align: left;
    }
    .barziVrazki {
      display: inline-block;
    }
    a.back-to-top {
      display: none;
      width: 50px;
      height: 50px;
      text-indent: -9999px;
      position: fixed;
      z-index: 999;
      right: 2%;
      bottom: 2%;
      background: #27AE61 url("img/top.png") no-repeat center ;
      background-size: 100%;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      opacity: 0.3;
      outline: 0;
    }
    a.back-to-top:hover {
      opacity: 1;
    }
  </style>
</head>
<body>
  <?php include('send_form_email.php') ?>
  <!-- container -->
  <div class="font"></div>
  <div class="container">
    <div class="col-md-12">
      <a href="https://www.google.bg/maps/place/%D1%83%D0%BB.+%E2%80%9E%D0%92%D0%B0%D1%81%D0%B8%D0%BB+%D0%9B%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%E2%80%9C+170,+4003+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2/@42.176901,24.7414923,19z/data=!4m5!3m4!1s0x14acd223c431e1f3:0x49b0bd0dcba79efc!8m2!3d42.17696!4d24.741962"> <h4 class="adres">гр. Пловдив 4003,  ул. Васил Левски №170 </h4></a>
      <a href="https://www.facebook.com/eni92.eood/?fref=ts"><img class="facebook" src="img/facebook.ico"></a>
      <h4 class="email">Email: eni92@abv.bg</h4>
      
      <!--contact us form start-->
      
      <!-- Button to trigger modal -->
      <a href="#myModal" role="button" class="btn btn-custom contactForm" data-toggle="modal">Отворете Формата за Връзка с Нас</a>
      <!-- Modal -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Форма за връзка с нас</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="comment">Въпрос или Коментар</label>
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
      </div><!-- End of Modal -->
      <!--contact us form edn-->
    </div>
    <div class="col-md-12"><div class="line"></div></div>
    <div class="col-md-12">
      <div>
        <img class="tel" src="img/tel.png">
      </div>
      <a href="eni92.php"><img class="logo" src="img/logo1.jpg"></a>
    </div>
    <div class="col-md-12 col-centered">
      <div class="navbar navbar-default navbar-top">
        <div class="navbar-header">
          <img class="van-button" src="img/transport.png">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <img class="van" src="img/transport.png">
            <li><a href="eni92.php">НАЧАЛО</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ПРОДУКТИ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="#">ТОНИРАНЕ</a></li>
            <li><a href="#">ПОД НАЕМ</a></li>
            <li><a href="aboutus.php">ЗА НАС</a></li>
            <li><a href="contacts.php">КОНТАКТИ</a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-md-12"><div class="bottom-line"></div></div>
      <div class="col-md-12 contacts">
        
      </div>
      <div class="push"></div>
      <div class="col-md-12 col-centered">
        <div class="footer">
          <span>БЪРЗИ ВРЪЗКИ</span><br>
          <ul class="barziVrazki">
            <li><a href="tuhli.php">ТУХЛИ</a></li>
            <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
            <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
            <li><a href="ytong.php">ИТОНГ</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
            <li><a href="vata.php">ВАТА</a></li>
            <li><a href="profili.php">ПРОФИЛИ</a></li>
            <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
            <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
            <li><a href="mreji.php">МРЕЖИ</a></li>
            <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
            <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
            <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
            <li><a href="#.php">СУХИ СМЕСИ</a></li>
          </ul><br><br>
          <span>Всички права запазени</span>
          <span class="mitashki">Created by <a href="https://www.facebook.com/profile.php?id=100000686533887">Mitashki</a> &copy;</span>
        </div>
      </div>
    </div>
    <!--back to top start-->
    <a href="#" class="back-to-top">Обратно горе</a>
    <script type="text/javascript">
      $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
      var amountScrolled = 200;
      $(window).scroll(function() {
        if ( $(window).scrollTop() > amountScrolled ) {
          $('a.back-to-top').fadeIn('slow');
        } else {
          $('a.back-to-top').fadeOut('slow');
        }
      });
      $('a.back-to-top').click(function() {
        $('html, body').animate({
          scrollTop: 0
        }, 700);
        return false;
      });
    </script>
    <!--back to top end-->
    <!-- container -->
  </body>
  </html><!DOCTYPE html>
<html>
<head>
  <title>Ени-92</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
  
  <style type="text/css">
    body {
      background-image: url('img/font.jpg');
      margin: 0;
      padding: 0;
      height: 0;
    }
    .logo {
      width: 50%;
      margin-top: 2%;
      margin-bottom: 2%;
    }
    .line {
      height: 2px;
      background-color: red;
    }
    .bottom-line {
      height: 2px;
      background-color: red;
    }
    .tel {
      width: 40%;
      float: right;
    }
    h4 {
      color: red;
      display: inline-block;
    }
    
    
    
    
    @media screen and (max-width: 600px) {
      .adres, .email { font-size: 20px;}
    }
    @media screen and (max-width: 600px) {
      .email { font-size: 15px;}
    }
    @media screen and (max-width: 500px) {
      .adres, .email { font-size: 15px;}
    }
    .navbar {
      background-color: #c1c1c1;
    }
    .navbar-nav {
      width: 100%;
      text-align: center;
      background: #c1c1c1;
    }
    .navbar-nav>li {
      float: initial;
      line-height: 150px;
    }
    .nav>li {
      display:inline-block;
    }
    .van {
      width: 20%;
      float: left;
    }
    .van-button {
      width: 20%;
      float: left;
    }
    .facebook {
      width: 5%;
      margin: 0 2%;
    }
    @media screen and (max-width: 500px) {
      .facebook { width: 10%;}
    }
    @media screen and (max-width: 780px) {
      .van { display: none;}
    }
    @media screen and (min-width: 780px) {
      .van-button { display: none;}
    }
    @media screen and (max-width: 760px) {
      .van-button { width: 40%;}
    }
    /*CATEGORY END*/
    /*footer start*/
    .footer, .push {
      min-height: 4em;
      margin: 0 auto;
      margin-bottom: 1%;
      border-radius: 10px;
    }
    .footer {
      padding: 2% 2% 2% 2%;
      color: #F2DBA5;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+45,6d0019+76,6d0019+79 */
      background: rgb(169,3,41); /* Old browsers */
      background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 45%, rgba(109,0,25,1) 76%, rgba(109,0,25,1) 79%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    }
    .barziVrazki > li > a {
      color: #F2DBA5;
    }
    /*fuuter end*/
    .mitashki {
      margin-left: 10%;
    }
    .input-group[class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }
    .contactForm {
      background-color: #5B74A9;
      color: white;
      margin: 1%;
      margin-left: 10%;
    }
    @media screen and (max-width: 500px) {
      .contactForm { margin: 0 auto; font-size: 11px;}
    }
    .contactForm:hover {
      background-color: white;
      color: #5B74A9;
      border: 1px solid #5B74A9;
    }
    .modal-title {
      color: #5B74A9;
    }
    .dropdown-menu > li {
      background-color: white;
      text-align: left;
    }
    .barziVrazki {
      display: inline-block;
    }
    a.back-to-top {
      display: none;
      width: 50px;
      height: 50px;
      text-indent: -9999px;
      position: fixed;
      z-index: 999;
      right: 2%;
      bottom: 2%;
      background: #27AE61 url("img/top.png") no-repeat center ;
      background-size: 100%;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      opacity: 0.3;
      outline: 0;
    }
    a.back-to-top:hover {
      opacity: 1;
    }
  </style>
</head>
<body>
  <?php include('send_form_email.php') ?>
  <!-- container -->
  <div class="font"></div>
  <div class="container">
    <div class="col-md-12">
      <a href="https://www.google.bg/maps/place/%D1%83%D0%BB.+%E2%80%9E%D0%92%D0%B0%D1%81%D0%B8%D0%BB+%D0%9B%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%E2%80%9C+170,+4003+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2/@42.176901,24.7414923,19z/data=!4m5!3m4!1s0x14acd223c431e1f3:0x49b0bd0dcba79efc!8m2!3d42.17696!4d24.741962"> <h4 class="adres">гр. Пловдив 4003,  ул. Васил Левски №170 </h4></a>
      <a href="https://www.facebook.com/eni92.eood/?fref=ts"><img class="facebook" src="img/facebook.ico"></a>
      <h4 class="email">Email: eni92@abv.bg</h4>
      
      <!--contact us form start-->
      
      <!-- Button to trigger modal -->
      <a href="#myModal" role="button" class="btn btn-custom contactForm" data-toggle="modal">Отворете Формата за Връзка с Нас</a>
      <!-- Modal -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Форма за връзка с нас</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="comment">Въпрос или Коментар</label>
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
      </div><!-- End of Modal -->
      <!--contact us form edn-->
    </div>
    <div class="col-md-12"><div class="line"></div></div>
    <div class="col-md-12">
      <div>
        <img class="tel" src="img/tel.png">
      </div>
      <a href="eni92.php"><img class="logo" src="img/logo1.jpg"></a>
    </div>
    <div class="col-md-12 col-centered">
      <div class="navbar navbar-default navbar-top">
        <div class="navbar-header">
          <img class="van-button" src="img/transport.png">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <img class="van" src="img/transport.png">
            <li><a href="eni92.php">НАЧАЛО</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ПРОДУКТИ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="#">ТОНИРАНЕ</a></li>
            <li><a href="#">ПОД НАЕМ</a></li>
            <li><a href="aboutus.php">ЗА НАС</a></li>
            <li><a href="contacts.php">КОНТАКТИ</a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-md-12"><div class="bottom-line"></div></div>
      <div class="col-md-12 contacts">
        
      </div>
      <div class="push"></div>
      <div class="col-md-12 col-centered">
        <div class="footer">
          <span>БЪРЗИ ВРЪЗКИ</span><br>
          <ul class="barziVrazki">
            <li><a href="tuhli.php">ТУХЛИ</a></li>
            <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
            <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
            <li><a href="ytong.php">ИТОНГ</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
            <li><a href="vata.php">ВАТА</a></li>
            <li><a href="profili.php">ПРОФИЛИ</a></li>
            <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
            <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
            <li><a href="mreji.php">МРЕЖИ</a></li>
            <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
            <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
            <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
            <li><a href="#.php">СУХИ СМЕСИ</a></li>
          </ul><br><br>
          <span>Всички права запазени</span>
          <span class="mitashki">Created by <a href="https://www.facebook.com/profile.php?id=100000686533887">Mitashki</a> &copy;</span>
        </div>
      </div>
    </div>
    <!--back to top start-->
    <a href="#" class="back-to-top">Обратно горе</a>
    <script type="text/javascript">
      $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
      var amountScrolled = 200;
      $(window).scroll(function() {
        if ( $(window).scrollTop() > amountScrolled ) {
          $('a.back-to-top').fadeIn('slow');
        } else {
          $('a.back-to-top').fadeOut('slow');
        }
      });
      $('a.back-to-top').click(function() {
        $('html, body').animate({
          scrollTop: 0
        }, 700);
        return false;
      });
    </script>
    <!--back to top end-->
    <!-- container -->
  </body>
  </html><!DOCTYPE html>
<html>
<head>
  <title>Ени-92</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
  
  <style type="text/css">
    body {
      background-image: url('img/font.jpg');
      margin: 0;
      padding: 0;
      height: 0;
    }
    .logo {
      width: 50%;
      margin-top: 2%;
      margin-bottom: 2%;
    }
    .line {
      height: 2px;
      background-color: red;
    }
    .bottom-line {
      height: 2px;
      background-color: red;
    }
    .tel {
      width: 40%;
      float: right;
    }
    h4 {
      color: red;
      display: inline-block;
    }
    
    
    
    
    @media screen and (max-width: 600px) {
      .adres, .email { font-size: 20px;}
    }
    @media screen and (max-width: 600px) {
      .email { font-size: 15px;}
    }
    @media screen and (max-width: 500px) {
      .adres, .email { font-size: 15px;}
    }
    .navbar {
      background-color: #c1c1c1;
    }
    .navbar-nav {
      width: 100%;
      text-align: center;
      background: #c1c1c1;
    }
    .navbar-nav>li {
      float: initial;
      line-height: 150px;
    }
    .nav>li {
      display:inline-block;
    }
    .van {
      width: 20%;
      float: left;
    }
    .van-button {
      width: 20%;
      float: left;
    }
    .facebook {
      width: 5%;
      margin: 0 2%;
    }
    @media screen and (max-width: 500px) {
      .facebook { width: 10%;}
    }
    @media screen and (max-width: 780px) {
      .van { display: none;}
    }
    @media screen and (min-width: 780px) {
      .van-button { display: none;}
    }
    @media screen and (max-width: 760px) {
      .van-button { width: 40%;}
    }
    /*CATEGORY END*/
    /*footer start*/
    .footer, .push {
      min-height: 4em;
      margin: 0 auto;
      margin-bottom: 1%;
      border-radius: 10px;
    }
    .footer {
      padding: 2% 2% 2% 2%;
      color: #F2DBA5;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+45,6d0019+76,6d0019+79 */
      background: rgb(169,3,41); /* Old browsers */
      background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 45%, rgba(109,0,25,1) 76%, rgba(109,0,25,1) 79%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    }
    .barziVrazki > li > a {
      color: #F2DBA5;
    }
    /*fuuter end*/
    .mitashki {
      margin-left: 10%;
    }
    .input-group[class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }
    .contactForm {
      background-color: #5B74A9;
      color: white;
      margin: 1%;
      margin-left: 10%;
    }
    @media screen and (max-width: 500px) {
      .contactForm { margin: 0 auto; font-size: 11px;}
    }
    .contactForm:hover {
      background-color: white;
      color: #5B74A9;
      border: 1px solid #5B74A9;
    }
    .modal-title {
      color: #5B74A9;
    }
    .dropdown-menu > li {
      background-color: white;
      text-align: left;
    }
    .barziVrazki {
      display: inline-block;
    }
    a.back-to-top {
      display: none;
      width: 50px;
      height: 50px;
      text-indent: -9999px;
      position: fixed;
      z-index: 999;
      right: 2%;
      bottom: 2%;
      background: #27AE61 url("img/top.png") no-repeat center ;
      background-size: 100%;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      opacity: 0.3;
      outline: 0;
    }
    a.back-to-top:hover {
      opacity: 1;
    }
    .mreji {
      background-color: white;
      margin: 1% 0;
      box-shadow: 25px 0px 25px -25px rgba(0,0,0,0.45), -25px 0px 25px -25px rgba(0,0,0,0.45);
      
    }
    .mreja, .mreja145, .mrejaThrakon, .mreja160 {
      float: right;
      margin-top: 1%;
    }
    .mrejaCeresit {
      border-bottom: 1px solid red;
    }
    img.mreja145, .mreja160 {
      width: 30%;
    }
    img.mrejaThrakon {
      width: 20%;
    }
  </style>
</head>
<body>
  <?php include('send_form_email.php') ?>
  <!-- container -->
  <div class="font"></div>
  <div class="container">
    <div class="col-md-12">
      <a href="https://www.google.bg/maps/place/%D1%83%D0%BB.+%E2%80%9E%D0%92%D0%B0%D1%81%D0%B8%D0%BB+%D0%9B%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%E2%80%9C+170,+4003+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2/@42.176901,24.7414923,19z/data=!4m5!3m4!1s0x14acd223c431e1f3:0x49b0bd0dcba79efc!8m2!3d42.17696!4d24.741962"> <h4 class="adres">гр. Пловдив 4003,  ул. Васил Левски №170 </h4></a>
      <a href="https://www.facebook.com/eni92.eood/?fref=ts"><img class="facebook" src="img/facebook.ico"></a>
      <h4 class="email">Email: eni92@abv.bg</h4>
      
      <!--contact us form start-->
      
      <!-- Button to trigger modal -->
      <a href="#myModal" role="button" class="btn btn-custom contactForm" data-toggle="modal">Отворете Формата за Връзка с Нас</a>
      <!-- Modal -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Форма за връзка с нас</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="comment">Въпрос или Коментар</label>
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
      </div><!-- End of Modal -->
      <!--contact us form edn-->
    </div>
    <div class="col-md-12"><div class="line"></div></div>
    <div class="col-md-12">
      <div>
        <img class="tel" src="img/tel.png">
      </div>
      <a href="eni92.php"><img class="logo" src="img/logo1.jpg"></a>
    </div>
    <div class="col-md-12 col-centered">
      <div class="navbar navbar-default navbar-top">
        <div class="navbar-header">
          <img class="van-button" src="img/transport.png">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <img class="van" src="img/transport.png">
            <li><a href="eni92.php">НАЧАЛО</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ПРОДУКТИ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="#">ТОНИРАНЕ</a></li>
            <li><a href="#">ПОД НАЕМ</a></li>
            <li><a href="aboutus.php">ЗА НАС</a></li>
            <li><a href="contacts.php">КОНТАКТИ</a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-md-12"><div class="bottom-line"></div></div>
      <div class="col-md-12 mreji">
        <h4><b>МРЕЖА ЗА ТОПЛОИЗОЛАЦИЯ</b></h4><br><br>
        
        <div class="mrejaCeresit">
          <img class="mrejaThrakon" src="img/mrejaCeresit.jpg"><br>
          <h3><b>МРЕЖА ФИБРО СТЪКЛО ЦЕРЕЗИТ 160гр/м2 1х1.10</b></h3><br>
          <ul>
            <li>дължина мм.   50 000</li>
            <li>тегло кг/бр.  0,160</li>
            <li>ширина мм.  1100</li>
            <li>м2 в опаковка   55</li>
            <li>Плътност: 160 g/m2</li><br>
            <li><b>Якост на опън при нормални условия:</b></li>
            <li>надлъжно 36,5 N/mm</li>
            <li>напречно 21 N/mm</li><br>
            <li><b>Якост на опън след престой в алкална среда:</b></li>
            <li>надлъжно 19,4 N/mm</li>
            <li>напречно 15 N/mm</li>
          </ul>
          <h4><b>ОПИСАНИЕ</b></h4><br>
          <p><b>CT 325 Фибростъклена мрежа за топлоизолация Церезит</b><br>
            Армираща фибростъклена мрежа на рула с дължина 50 m и ширина 1.1 m, предназначена за изграждане на армиран шпакловъчен слой върху изолационни плочи от експандиран полистирен EPS-F в процеса на топлоизолиране на фасади на съществуващи и новопостроени сгради. За заздравяване и предотвратяване появата на пукнатини върху армирания шпакловъчен слой. Елемент от система за външна фасадна топлоизолация Ceresit Ceretherm. </p><br>
          </div>
          <div class="mrejaCeresit">
            <img class="mrejaThrakon" src="img/mrejaThrakon.jpg"><br>
            <h3><b>Thrakon Mesh SM - 150</b></h3><br>
            <ul>
              <li>Тегло - 150 гр./m²</li>
              <li>Размер на отвора - 4 х 5 mm</li>
              <li>Ширина на ролката - 100 cm</li>
              <li>Дължина на ролката - 50 m</li>
              <li>ролка - 50 м/палет - 33 бр</li><br>
            </ul>
            <h4><b>ОПИСАНИЕ</b></h4><br>
            <p><b>Thrakon Mesh SM</b><br>
              Алкалоустойчива, стъклофибърна армираща мрежа за топлоизолационна система Thrakon Clima PLUS. </p><br>
            </div>
            <div class="mrejaCeresit">
              <img class="mreja160" src="img/mreja160.jpg"><br>
              <h3><b>Стъклофибърна армираща мрежа - 160 гр</b></h3><br>
              <ul>
                <li>ТЕГЛО НА М2 : 160 г</li>
                <li>дължина мм.   50 000</li>
                <li>ширина мм.  1000</li>
                <li>м2 в опаковка   50</li>
              </ul>
              <h4><b>ОПИСАНИЕ</b></h4><br>
              <p><b>Стъклофибърна армираща мрежа - 160 гр</b><br>
                Стъклофибърна армираща мрежа за топлоизолационни системи.</p><br>
              </div>
              <div class="mrejaCeresit">
                <img class="mreja145" src="img/145.jpg"><br>
                <h3><b>МРЕЖА ЗА ТОПЛОИЗОЛАЦИЯ 145гр БЯЛА</b></h3><br>
                <ul>
                  <li>дължина мм.   50 000</li>
                  <li>тегло кг/бр.  0,145</li>
                  <li>ширина мм.  1000</li>
                  <li>м2 в опаковка   50</li>
                </ul>
                <h4><b>ОПИСАНИЕ</b></h4><br>
                <p><b>Стъклофибърна мрежа 0,145 гр.</b><br>
                  Стъклофибърна мрежа за фасадна топлоизолация. Топлоизолационната мрежа е задължителен елемент от всяка топлоизолационна система.</p><br>
                </div>
              </div>
              <div class="push"></div>
              <div class="col-md-12 col-centered">
                <div class="footer">
                  <span>БЪРЗИ ВРЪЗКИ</span><br>
                  <ul class="barziVrazki">
                    <li><a href="tuhli.php">ТУХЛИ</a></li>
                    <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                    <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                    <li><a href="ytong.php">ИТОНГ</a></li>
                  </ul>
                  <ul class="barziVrazki">
                    <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                    <li><a href="vata.php">ВАТА</a></li>
                    <li><a href="profili.php">ПРОФИЛИ</a></li>
                    <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                  </ul>
                  <ul class="barziVrazki">
                    <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                    <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                    <li><a href="mreji.php">МРЕЖИ</a></li>
                    <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                  </ul>
                  <ul class="barziVrazki">
                    <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                    <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                    <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                    <li><a href="#.php">СУХИ СМЕСИ</a></li>
                  </ul><br><br>
                  <span>Всички права запазени</span>
                  <span class="mitashki">Created by <a href="https://www.facebook.com/profile.php?id=100000686533887">Mitashki</a> &copy;</span>
                </div>
              </div>
            </div>
            <!--back to top start-->
            <a href="#" class="back-to-top">Обратно горе</a>
            <script type="text/javascript">
              $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
              var amountScrolled = 200;
              $(window).scroll(function() {
                if ( $(window).scrollTop() > amountScrolled ) {
                  $('a.back-to-top').fadeIn('slow');
                } else {
                  $('a.back-to-top').fadeOut('slow');
                }
              });
              $('a.back-to-top').click(function() {
                $('html, body').animate({
                  scrollTop: 0
                }, 700);
                return false;
              });
            </script>
            <!--back to top end-->
            <!-- container -->
          </body>
          </html><!DOCTYPE html>
<html>
<head>
  <title>Ени-92</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
  
  <style type="text/css">
    body {
      background-image: url('img/font.jpg');
      margin: 0;
      padding: 0;
      height: 0;
    }
    .logo {
      width: 50%;
      margin-top: 2%;
      margin-bottom: 2%;
    }
    .line {
      height: 2px;
      background-color: red;
    }
    .bottom-line {
      height: 2px;
      background-color: red;
    }
    .tel {
      width: 40%;
      float: right;
    }
    h4 {
      color: red;
      display: inline-block;
    }
    
    
    
    
    @media screen and (max-width: 600px) {
      .adres, .email { font-size: 20px;}
    }
    @media screen and (max-width: 600px) {
      .email { font-size: 15px;}
    }
    @media screen and (max-width: 500px) {
      .adres, .email { font-size: 15px;}
    }
    .navbar {
      background-color: #c1c1c1;
    }
    .navbar-nav {
      width: 100%;
      text-align: center;
      background: #c1c1c1;
    }
    .navbar-nav>li {
      float: initial;
      line-height: 150px;
    }
    .nav>li {
      display:inline-block;
    }
    .van {
      width: 20%;
      float: left;
    }
    .van-button {
      width: 20%;
      float: left;
    }
    .facebook {
      width: 5%;
      margin: 0 2%;
    }
    @media screen and (max-width: 500px) {
      .facebook { width: 10%;}
    }
    @media screen and (max-width: 780px) {
      .van { display: none;}
    }
    @media screen and (min-width: 780px) {
      .van-button { display: none;}
    }
    @media screen and (max-width: 760px) {
      .van-button { width: 40%;}
    }
    /*CATEGORY END*/
    /*footer start*/
    .footer, .push {
      min-height: 4em;
      margin: 0 auto;
      margin-bottom: 1%;
      border-radius: 10px;
    }
    .footer {
      padding: 2% 2% 2% 2%;
      color: #F2DBA5;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+45,6d0019+76,6d0019+79 */
      background: rgb(169,3,41); /* Old browsers */
      background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 45%, rgba(109,0,25,1) 76%, rgba(109,0,25,1) 79%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    }
    .barziVrazki > li > a {
      color: #F2DBA5;
    }
    /*fuuter end*/
    .mitashki {
      margin-left: 10%;
    }
    .input-group[class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }
    .contactForm {
      background-color: #5B74A9;
      color: white;
      margin: 1%;
      margin-left: 10%;
    }
    @media screen and (max-width: 500px) {
      .contactForm { margin: 0 auto; font-size: 11px;}
    }
    .contactForm:hover {
      background-color: white;
      color: #5B74A9;
      border: 1px solid #5B74A9;
    }
    .modal-title {
      color: #5B74A9;
    }
    .dropdown-menu > li {
      background-color: white;
      text-align: left;
    }
    .barziVrazki {
      display: inline-block;
    }
    a.back-to-top {
      display: none;
      width: 50px;
      height: 50px;
      text-indent: -9999px;
      position: fixed;
      z-index: 999;
      right: 2%;
      bottom: 2%;
      background: #27AE61 url("img/top.png") no-repeat center ;
      background-size: 100%;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      opacity: 0.3;
      outline: 0;
    }
    a.back-to-top:hover {
      opacity: 1;
    }
    .tavan {
      background-color: white;
      box-shadow: 25px 0px 25px -25px rgba(0,0,0,0.45), -25px 0px 25px -25px rgba(0,0,0,0.45);
      
    }
    .ltprofil {
      border-bottom: 1px solid red;
      margin: 1% 0;
    }
    .tprofil {
      float: right;
      width: 15%;
    }
    @media screen and (max-width: 500px) {
      .tprofil { width: 50px;}
    }
  </style>
</head>
<body>
  <?php include('send_form_email.php') ?>
  <!-- container -->
  <div class="font"></div>
  <div class="container">
    <div class="col-md-12">
      <a href="https://www.google.bg/maps/place/%D1%83%D0%BB.+%E2%80%9E%D0%92%D0%B0%D1%81%D0%B8%D0%BB+%D0%9B%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%E2%80%9C+170,+4003+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2/@42.176901,24.7414923,19z/data=!4m5!3m4!1s0x14acd223c431e1f3:0x49b0bd0dcba79efc!8m2!3d42.17696!4d24.741962"> <h4 class="adres">гр. Пловдив 4003,  ул. Васил Левски №170 </h4></a>
      <a href="https://www.facebook.com/eni92.eood/?fref=ts"><img class="facebook" src="img/facebook.ico"></a>
      <h4 class="email">Email: eni92@abv.bg</h4>
      
      <!--contact us form start-->
      
      <!-- Button to trigger modal -->
      <a href="#myModal" role="button" class="btn btn-custom contactForm" data-toggle="modal">Отворете Формата за Връзка с Нас</a>
      <!-- Modal -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Форма за връзка с нас</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="comment">Въпрос или Коментар</label>
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
      </div><!-- End of Modal -->
      <!--contact us form edn-->
    </div>
    <div class="col-md-12"><div class="line"></div></div>
    <div class="col-md-12">
      <div>
        <img class="tel" src="img/tel.png">
      </div>
      <a href="eni92.php"><img class="logo" src="img/logo1.jpg"></a>
    </div>
    <div class="col-md-12 col-centered">
      <div class="navbar navbar-default navbar-top">
        <div class="navbar-header">
          <img class="van-button" src="img/transport.png">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <img class="van" src="img/transport.png">
            <li><a href="eni92.php">НАЧАЛО</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ПРОДУКТИ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="#">ТОНИРАНЕ</a></li>
            <li><a href="#">ПОД НАЕМ</a></li>
            <li><a href="aboutus.php">ЗА НАС</a></li>
            <li><a href="contacts.php">КОНТАКТИ</a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-md-12"><div class="bottom-line"></div></div>
      <div class="col-md-12 tavan">
        <h4><b>ПРОФИЛИ ЗА ОКАЧЕН ТАВАН</b></h4><br><br>
        <div class="ltprofil">
          <img class="tprofil" src="img/tprofil.jpg">
          <h3><b>ПРОФИЛ Т-ОСНОВЕН НОСЕЩ 3.6м БЯЛ</b></h3><br>
          <ul>
            <li>дължина мм.   3600</li>
            <li>цвят  бял</li>
            <li>форма   T</li>
            <li>материал: метал</li>
          </ul>
          <h4><b>ОПИСАНИЕ</b></h4><br>
          <p><b>Специално разработен носещ профил за монтаж на окачен таван. Носещия профил е Т-образен и е основен елемент от всяка конструкция на окачен таван. Този профил е предназначен за монтаж на окачен таван с пана без специфични кантове, т.е с прав кант и с дебелина около 15-20 мм.</b></p><br>
        </div>
        <div class="ltprofil">
          <img class="tprofil" src="img/tprofil.jpg">
          <h3><b>ПРОФИЛ Т-НАПРЕЧЕН 0.6м БЯЛ</b></h3><br>
          <ul>
            <li>дължина мм.   600</li>
            <li>цвят  бял</li>
            <li>форма   T</li>
            <li>материал: метал</li>
          </ul>
          <h4><b>ОПИСАНИЕ</b></h4><br>
          <p><b>Специално разработен напречен профил за монтаж на окачен таван. Напречният профил се свързва с носещия Т-образен профил и заедно образуват конструкцията за монтаж на окачения таван. Този профил е предназначен за монтаж на окачен таван с пана без специфични кантове, т.е с прав кант и с дебелина около 15-20 мм.</b></p><br>
        </div>
        <div class="ltprofil">
          <img class="tprofil" src="img/tprofil.jpg">
          <h3><b>ПРОФИЛ Т-НАПРЕЧЕН 1.2м БЯЛ</b></h3><br>
          <ul>
            <li>дължина мм.   1200</li>
            <li>цвят  бял</li>
            <li>форма   T</li>
            <li>материал: метал</li>
          </ul>
          <h4><b>ОПИСАНИЕ</b></h4><br>
          <p><b>Специално разработен напречен профил за монтаж на окачен таван. Напречният профил се свързва с носещия Т-образен профил и заедно образуват конструкцията за монтаж на окачения таван. Този профил е предназначен за монтаж на окачен таван с пана без специфични кантове, т.е с прав кант и с дебелина около 15-20 мм.</b></p><br>
        </div>
        <div class="ltprofil">
          <img class="tprofil" src="img/lprofil.jpg">
          <h3><b>ПРОФИЛ L-ЪГЛОВ ВИНКЕЛ 3.00м БЯЛ</b></h3><br>
          <ul>
            <li>дължина мм.   3000</li>
            <li>цвят  бял</li>
            <li>форма   L</li>
            <li>материал: метал</li>
          </ul>
          <h4><b>ОПИСАНИЕ</b></h4><br>
          <p><b>Профил за монтаж на окачен таван, използва се в края на конструкцията при контакт със стената. Ъгловия профил е L-образен и е важен елемент от всяка конструкция на окачен таван. Този профил е предназначен за монтаж на окачен таван с пана без специфични кантове, т.е с прав кант и с дебелина около 15-20 мм.</b></p><br>
        </div>
      </div>
    </div>
    
    <div class="push"></div>
    <div class="col-md-12 col-centered">
      <div class="footer">
        <span>БЪРЗИ ВРЪЗКИ</span><br>
        <ul class="barziVrazki">
          <li><a href="tuhli.php">ТУХЛИ</a></li>
          <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
          <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
          <li><a href="ytong.php">ИТОНГ</a></li>
        </ul>
        <ul class="barziVrazki">
          <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
          <li><a href="vata.php">ВАТА</a></li>
          <li><a href="profili.php">ПРОФИЛИ</a></li>
          <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
        </ul>
        <ul class="barziVrazki">
          <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
          <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
          <li><a href="mreji.php">МРЕЖИ</a></li>
          <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
        </ul>
        <ul class="barziVrazki">
          <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
          <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
          <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
          <li><a href="#.php">СУХИ СМЕСИ</a></li>
        </ul><br><br>
        <span>Всички права запазени</span>
        <span class="mitashki">Created by <a href="https://www.facebook.com/profile.php?id=100000686533887">Mitashki</a> &copy;</span>
      </div>
    </div>
  </div>
  <!--back to top start-->
  <a href="#" class="back-to-top">Обратно горе</a>
  <script type="text/javascript">
    $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
    var amountScrolled = 200;
    $(window).scroll(function() {
      if ( $(window).scrollTop() > amountScrolled ) {
        $('a.back-to-top').fadeIn('slow');
      } else {
        $('a.back-to-top').fadeOut('slow');
      }
    });
    $('a.back-to-top').click(function() {
      $('html, body').animate({
        scrollTop: 0
      }, 700);
      return false;
    });
  </script>
  <!--back to top end-->
  <!-- container -->
</body>
</html><!DOCTYPE html>
<html>
<head>
  <title>Ени-92</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
  
  <style type="text/css">
    body {
      background-image: url('img/font.jpg');
      margin: 0;
      padding: 0;
      height: 0;
    }
    .logo {
      width: 50%;
      margin-top: 2%;
      margin-bottom: 2%;
    }
    .line {
      height: 2px;
      background-color: red;
    }
    .bottom-line {
      height: 2px;
      background-color: red;
    }
    .tel {
      width: 40%;
      float: right;
    }
    h4 {
      color: red;
      display: inline-block;
    }
    
    
    
    
    @media screen and (max-width: 600px) {
      .adres, .email { font-size: 20px;}
    }
    @media screen and (max-width: 600px) {
      .email { font-size: 15px;}
    }
    @media screen and (max-width: 500px) {
      .adres, .email { font-size: 15px;}
    }
    .navbar {
      background-color: #c1c1c1;
    }
    .navbar-nav {
      width: 100%;
      text-align: center;
      background: #c1c1c1;
    }
    .navbar-nav>li {
      float: initial;
      line-height: 150px;
    }
    .nav>li {
      display:inline-block;
    }
    .van {
      width: 20%;
      float: left;
    }
    .van-button {
      width: 20%;
      float: left;
    }
    .facebook {
      width: 5%;
      margin: 0 2%;
    }
    @media screen and (max-width: 500px) {
      .facebook { width: 10%;}
    }
    @media screen and (max-width: 780px) {
      .van { display: none;}
    }
    @media screen and (min-width: 780px) {
      .van-button { display: none;}
    }
    @media screen and (max-width: 760px) {
      .van-button { width: 40%;}
    }
    /*CATEGORY END*/
    /*footer start*/
    .footer, .push {
      min-height: 4em;
      margin: 0 auto;
      margin-bottom: 1%;
      border-radius: 10px;
    }
    .footer {
      padding: 2% 2% 2% 2%;
      color: #F2DBA5;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+45,6d0019+76,6d0019+79 */
      background: rgb(169,3,41); /* Old browsers */
      background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 45%, rgba(109,0,25,1) 76%, rgba(109,0,25,1) 79%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    }
    .barziVrazki > li > a {
      color: #F2DBA5;
    }
    /*fuuter end*/
    .mitashki {
      margin-left: 10%;
    }
    .input-group[class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }
    .contactForm {
      background-color: #5B74A9;
      color: white;
      margin: 1%;
      margin-left: 10%;
    }
    @media screen and (max-width: 500px) {
      .contactForm { margin: 0 auto; font-size: 11px;}
    }
    .contactForm:hover {
      background-color: white;
      color: #5B74A9;
      border: 1px solid #5B74A9;
    }
    .modal-title {
      color: #5B74A9;
    }
    .dropdown-menu > li {
      background-color: white;
      text-align: left;
    }
    .barziVrazki {
      display: inline-block;
    }
    a.back-to-top {
      display: none;
      width: 50px;
      height: 50px;
      text-indent: -9999px;
      position: fixed;
      z-index: 999;
      right: 2%;
      bottom: 2%;
      background: #27AE61 url("img/top.png") no-repeat center ;
      background-size: 100%;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      opacity: 0.3;
      outline: 0;
    }
    a.back-to-top:hover {
      opacity: 1;
    }
    .visibleClass {
      display: block !important;
    }
    h2 {
      color: red;
    }
    div.sudal {
      background-color: white;
      margin: 1% 0;
      box-shadow: 25px 0px 25px -25px rgba(0,0,0,0.45), -25px 0px 25px -25px rgba(0,0,0,0.45);
      
    }
    .pqniISilikoni {
      text-align: center;
    }
    div.pqna {
      border-bottom: 1px solid red;
      margin: 1% 0;
    }
    img.pqna {
      float: right;
    }
    .pqnaILepila {
      border-bottom: 1px solid red;
    }
    #x_1, #x_2 {
      margin: 1%;
    }
  </style>
  <script>
    function showDiv(data) {
      $("#ele-" + data).addClass('visibleClass');
      hideElement(6, data);
    }
    function hideElement(total, active) {
      for (i = 1; i <= total; i++) {
        if (i != active)
          $("#ele-" + i).removeClass('visibleClass');
      }
    }
  </script>
</head>
<body>
  <?php include('send_form_email.php') ?>
  <!-- container -->
  <div class="font"></div>
  <div class="container">
    <div class="col-md-12">
      <a href="https://www.google.bg/maps/place/%D1%83%D0%BB.+%E2%80%9E%D0%92%D0%B0%D1%81%D0%B8%D0%BB+%D0%9B%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%E2%80%9C+170,+4003+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2/@42.176901,24.7414923,19z/data=!4m5!3m4!1s0x14acd223c431e1f3:0x49b0bd0dcba79efc!8m2!3d42.17696!4d24.741962"> <h4 class="adres">гр. Пловдив 4003,  ул. Васил Левски №170 </h4></a>
      <a href="https://www.facebook.com/eni92.eood/?fref=ts"><img class="facebook" src="img/facebook.ico"></a>
      <h4 class="email">Email: eni92@abv.bg</h4>
      
      <!--contact us form start-->
      
      <!-- Button to trigger modal -->
      <a href="#myModal" role="button" class="btn btn-custom contactForm" data-toggle="modal">Отворете Формата за Връзка с Нас</a>
      <!-- Modal -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Форма за връзка с нас</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="comment">Въпрос или Коментар</label>
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
      </div><!-- End of Modal -->
      <!--contact us form edn-->
    </div>
    <div class="col-md-12"><div class="line"></div></div>
    <div class="col-md-12">
      <div>
        <img class="tel" src="img/tel.png">
      </div>
      <a href="eni92.php"><img class="logo" src="img/logo1.jpg"></a>
    </div>
    <div class="col-md-12 col-centered">
      <div class="navbar navbar-default navbar-top">
        <div class="navbar-header">
          <img class="van-button" src="img/transport.png">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <img class="van" src="img/transport.png">
            <li><a href="eni92.php">НАЧАЛО</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ПРОДУКТИ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="#">ТОНИРАНЕ</a></li>
            <li><a href="#">ПОД НАЕМ</a></li>
            <li><a href="aboutus.php">ЗА НАС</a></li>
            <li><a href="contacts.php">КОНТАКТИ</a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-md-12"><div class="bottom-line"></div></div>
      <div class="col-md-12 sudal">
        <h2><b>ПЯНА И СИЛИКОНИ</b></h2><br><br>
        <div class="pqniISilikoni">
          <input type="button" class="btn btn-primary" id="x_1" value="ПЯНА И ЛЕПИЛА" onclick="showDiv('1')">
          <input type="button" class="btn btn-primary" id="x_2" value="СИЛИКОНИ И УПЛАТНИТЕЛИ" onclick="showDiv('2')">
        </div>
        <div id="ele-1" style="display: none;">
          <h3 class="pqnaILepila"><b>ПЯНА И ЛЕПИЛА</b></h3><br>
          <div class="pqna">
            <img class="pqna" src="img/easyr.jpg">
            <h4><b>Soudabond Easy – полиуретаново лепило в аерозолна опаковка (ръчно)</b></h4><br>
            <ul>
              <li><b>Характеристики:</b></li>
              <li>Готово за употреба – не изисква допълнителни инструменти.</li>
              <li>Бързо втвърдяващо се – напълно втвърдено след 60 минути (при температура от 20⁰C и относителна влажност 65 %).</li>
              <li>Висок обем – до 12 кв.м.(лента на нанасяне с диаметър 30 мм.)</li>
              <li>Тиксотропно – не се стича от вертикални повърхности.</li>
              <li>Осигурява допълнителна топло и звукова изолация.</li>
              <li>Отлично залепване към повечето строителни материали, като – тухли, бетон, гипс, дърво, метали и пластмаси.</li>
              <li>Ако е необходимо, фугата може да бъде боядисана.</li><br>
              <li><b>Приложение:</b></li>
              <li>Залепване на гипсокартон, фибро-циментови плоскости , декоративни плоскости направени от материали на дървена основа, метали, пластмаси и др. към всички обичайни строителни повърхности.</li>
              <li>Монтаж на изолационни панели направени от различни видове полистирен, полиуретан, фенолна пяна (PUR, PIR, XPS, EPS, PF) ,минерална вата и корк към бетон, тухли, камък, дърво, метали( в това число и за звукова и топло изолация на контейнери, гаражи и др.)</li>
              <li>Залепване на клетъчни бетонови блокове и порьозна керамика в преградни стени и малки постройки.</li><br>
              <li><b>Налична разфасовка: 750 мл. </b></li>
            </ul>
          </div>
          <div class="pqna">
            <img class="pqna" src="img/easyp.jpg">
            <h4><b>Пистолетна монтажна пяна</b></h4><br>
            <ul>
              <li><b>Характеристики:</b></li>
              <li>Формула с намалена експанзия, безопасна за чувствителните PVC профили</li>
              <li>Висок обем и стабилност</li>
              <li>Бързовтвърдяваща се – последваща обработка след 60 мин. (за 3 мм слой).</li>
              <li>Точно и икономично нанасяне, възможност за спиране на работа по всяко време.</li>
              <li>Отлично залепване към дърво и материали на дървена основа, PVC, алуминий  и други. метали ( също така облицовани ), бетон, зидария, тухли, емайлирани повърхности и др.</li>
              <li><b>Приложение:</b></li>
              <li>Уплътнение при инсталация на рамки за врати и прозорци, особено на такива направени от многокамерни и цветни PVC профили.</li>
              <li>Монтиране и запечатване на прозоречни первази, капаци, прагове, стълби и др</li>
              <li>Запълване и звукоизолиране на кухини в скелетни конструкции.</li>
              <li>Термална изолация на елементи в централни отоплителни и водопроводни системи, бани, душове и др.</li>
              <li>Термална и звукова изолация на преградни стени, подове, тавани, покриви и др.</li>
              <li>Запълване на дренажни тръби, монтажни преходи в стени, тавани и др.</li><br>
              <li><b>Налична разфасовка: 750 мл. </b></li>
            </ul>
          </div>
          <div class="pqna">
            <img class="pqna" src="img/profilp.jpg">
            <h4><b>Монтажна пяна Profil</b></h4><br>
            <h4><b>ОПИСАНИЕ</b></h4><br>
            <p><b>Монтажна пяна Profil</b><br>
              Професионална монтажна пяна на колекцията Profil от фирма Soudal. Отлично слепване към повечето строителни материали. Ръчен и пистолетен вариант. Обикновена и формула за зимни условия издържаща до -10°C.
            </p><br><br><br><br>
          </div>
          <div class="pqna">
            <img class="pqna" src="img/polioretanova.jpg">
            <h4><b>Соудафоам Комфорт полиуретанова пяна</b></h4><br>
            <ul>
              <li><b>Характеристики:</b></li>
              <li>Соудафоам Комфорт е готова за употреба еднокомпонентна, самоекс-пандираща се полиуретанова пяна. Поради патентованата система Gun нанасянето на пяната става много лесно и точно. Външната сламка може да бъде освобождавана и запечатване, което прави възможно нанасянето на съдържанието на частично използвани-ят флакон в продължение на седмици</li>
              <li>Отлични запълващи характеристики</li>
              <li>Отлично прилепване към всички строителни материали (освен PE, PP и PTFE)</li>
              <li>Висока изолационна сила – температурна и звукова</li>
              <li>Отлично представяне при инсталационни дейности</li><br>
              <li><b>Приложение:</b></li>
              <li>Уплътняване на всякакви отвори в пок-ривни конструкции.</li>
              <li>Запълване на кухи-ни.</li>
              <li>Изграждане на звукоизолиращ ек-ран.</li>
              <li>Монтаж и уплътняване на каси на врати и прозорци .</li>
              <li>вързване на изо-лационни материали и покривни конст-рукции.</li>
              <li>вукоизолация на двигатели. Подобряване на термоизолацията в хладилни системи.</li><br>
              <li><b>Налична разфасовка: 300 мл., 500 мл., 750 мл. </b></li>
            </ul>
            <h4><b>ОПИСАНИЕ</b></h4><br>
            <p><b>Монтажна пяна Profil</b><br>
              Професионална монтажна пяна на колекцията Profil от фирма Soudal. Отлично слепване към повечето строителни материали. Ръчен и пистолетен вариант. Обикновена и формула за зимни условия издържаща до -10°C.
            </p><br><br>
          </div>
          <div class="pqna">
            <img class="pqna" src="img/chistitel.jpg">
            <h4><b>Чистител за полиуретанова пяна</b></h4><br>
            <ul>
              <li><b>Приложение:</b></li>
              <li>Почистване на пистолет</li>
              <li>Почистване на клапани на аерозолни пени</li>
              <li>Премахване на невтвърдена пяна</li><br>
              <li><b>Опаковка:</b></li>
              <li>Аерозолен флакон 500 мл </li>
            </ul>
            <h4><b>ОПИСАНИЕ</b></h4><br>
            <p><b>Чистител за полиуретанова пяна</b><br>
              Чистителя за пяна е готов за употреба почистващ продукт във флакон за почистване на на пистолетна пяна и пистолети.
            </p><br><br><br><br>
          </div>
        </div>
        <div id="ele-2" style="display: none;">
          <h3 class="pqnaILepila"><b>СИЛИКОНИ И УПЛАТНИТЕЛИ</b></h3><br>
          <div class="pqna">
            <img class="pqna" src="img/akril.jpg">
            <h4><b>Акрилен уплътнител</b></h4><br>
            <ul>
              <li><b>Характеристики:</b></li>
              <li>Дълготраен и устойчив на избледняване цвят.</li>
              <li>След втвърдяване може да бъде боядисван, като не оцветява слоя боя.</li>
              <li>Не съдържа разтворители – без мирис и безопасен за декоративните материали.</li>
              <li>Не разяжда металите.</li><br>
              <li><b>Приложение:</b></li>
              <li>За фуги между стените и тавана, гипсокартон и др.</li>
              <li>Запълва дупки и пукнатини в бетон, зидария, мазилка, дърво и др.</li>
              <li>За фугиране на рамки на прозорци, врати, первази и подпрозоречни первази, таванни плоскости, декоративни корнизи и др.</li>
              <li>Уплътняване на строителни връзки с ниска подвижност (до 15 %)</li><br>
              <li>Налична разфасовка: 300 мл. (флакон)</li>
              <li>Налични цветове: бял, черен, сив, бежов </li>
            </ul>
            <h4><b>ОПИСАНИЕ</b></h4><br>
            <p><b>Акрилен уплътнител</b><br>
              Универсален монтажен акрилен уплътнител за вътрешни приложения.
            </p><br><br><br><br>
          </div>
          <div class="pqna">
            <img class="pqna" src="img/sanitaren.jpg">
            <h4><b>Санитарен силиконов уплътнител</b></h4><br>
            <ul>
              <li><b>Характеристики:</b></li>
              <li>Дълготрайна устойчивост на влага, мухъл и плесен.</li>
              <li>Отлично залепване към обичайните санитарни повърхности – плочки, санитарен фаянс и стъкло, бетон, тухли, дърво и някои метали.</li>
              <li>След втвърдяване – постоянно гъвкав и устойчив на всички атмосферни условия.</li><br>
              <li><b>Приложение:</b></li>
              <li>Фугиране на мивки, емайлирани вани и душ-корита.</li>
              <li>Фугиране между мивката и стената, около тоалетната и керамични основи на душове.</li>
              <li>Фугиране на керамични плочки във връзката между стената и пода.</li>
              <li>Всички видове гъвкави уплътнения в стаи в висока влажност – кухни, бани, сушилни.</li>
              <li>Уплътнения изложени на влага в охладителни или вентилационни системи или съоръжения.</li>
              <li>ременни остъклителни работи ( рамки на прозорци направени от необработено дърво или боядисано с маслени бои ).</li><br>
              <li><b>Налични разфасовки: 60 гр. ( туба, блистер), 300 мл. (флакон)</b></li>
              <li><b>Налични цветове: безцветен, бял, кафяв, бежов, черен, сив. </b></li>
            </ul>
            <h4><b>ОПИСАНИЕ</b></h4><br>
            <p><b>Санитарен силиконов уплътнител</b><br>
              Санитарен силиконов уплътнител с киселинно втвърдяване и увеличена устойчивост на влага, мухъл и плесен. За фугиране и съединяване на керамични материали, стъкло и някои метали.<br><b>Поради киселинната реакция може да реагира с определени метали. Не използвайте върху пластмаси.</b>
            </p><br><br><br><br>
          </div>
          <div class="pqna">
            <img class="pqna" src="img/universal.jpg">
            <h4><b>Универсален силиконов уплътнител</b></h4><br>
            <ul>
              <li><b>Характеристики:</b></li>
              <li>Отлично залепване към обичайните порьозни повърхности – бетон, тухли, дърво, а също така и към непорьозни – стъкло, керамика, остъклени повърхности и много метали.</li>
              <li>Широка гама от цветова, устойчиви на избледняване.</li>
              <li>След втърдяване – постоянно гъвкав и устойчив на атмосферните условия.</li><br>
              <li><b>Приложение:</b></li>
              <li>Свързващи фуги между различни строителни и довършителни материали.</li>
              <li>Фугиране на керамични плочки – за вътрешно и външно приложение.</li>
              <li>Временни остъклителни дейности (рамки направени от необработено дърво или боядисано с маслени бои).</li>
              <li>плътняване в хладилни помещения, вентилационни системи, при производството на контейнери.</li><br>
              <li><b>Налични разфасовки: 60 гр. (туба, блистер), 300 мл. (флакон)</b></li>
              <li><b>Налични цветове: безцветен, бял, кафяв, бежов, черен, сив, червен, син, зелен, жълт.</b></li>
            </ul>
            <h4><b>ОПИСАНИЕ</b></h4><br>
            <p><b>Универсален силиконов уплътнител</b><br>
              Универсален строителен силикон с киселинно втвърдяване за съединяване и фугиране на керамика, стъкло и някои метали.<br><b>Не нанасяйте върху PVC, акрили и метали податливи на корозия.</b>
            </p><br><br>
          </div>
          <div class="pqna">
            <img class="pqna" src="img/salam.jpg">
            <h4><b>Полиуретаново лепило-уплътнител К+Д Soudal Soudaflex 40 FC - Салам</b></h4><br>
            <ul>
              <li><b>Характеристики:</b></li>
              <li>Много лесно нанасяне</li>
              <li>Запазване еластичността си след втвърдяване</li>
              <li>Отлична устойчивост към химични вещества</li>
              <li>Опаковка: салам от 600 мл</li>
              <li>Основа: полииуретан</li>
              <li>Цветова: сив, бял, черен</li>
            </ul>
            <h4><b>ОПИСАНИЕ</b></h4><br>
            <p><b>Силикон салам - Судал - 600мл.</b><br>
              <b>Soudal Soudaflex 40 FC - Салам</b> е подходящ за залепване на всички видове обичайни за строителството повърхности, най-вече метали, полиестери и различни видове пластмаса. Добро решение за структурно свързване във вибриращи конструкции. Не се използва за стъкло и ПВЦ.
            </p><br><br>
          </div>
        </div>
      </div>
      <div class="push"></div>
      <div class="col-md-12 col-centered">
        <div class="footer">
          <span>БЪРЗИ ВРЪЗКИ</span><br>
          <ul class="barziVrazki">
            <li><a href="tuhli.php">ТУХЛИ</a></li>
            <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
            <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
            <li><a href="ytong.php">ИТОНГ</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
            <li><a href="vata.php">ВАТА</a></li>
            <li><a href="profili.php">ПРОФИЛИ</a></li>
            <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
            <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
            <li><a href="mreji.php">МРЕЖИ</a></li>
            <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
            <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
            <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
            <li><a href="#.php">СУХИ СМЕСИ</a></li>
          </ul><br><br>
          <span>Всички права запазени</span>
          <span class="mitashki">Created by <a href="https://www.facebook.com/profile.php?id=100000686533887">Mitashki</a> &copy;</span>
        </div>
      </div>
    </div>
    <!--back to top start-->
    <a href="#" class="back-to-top">Обратно горе</a>
    <script type="text/javascript">
      $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
      var amountScrolled = 200;
      $(window).scroll(function() {
        if ( $(window).scrollTop() > amountScrolled ) {
          $('a.back-to-top').fadeIn('slow');
        } else {
          $('a.back-to-top').fadeOut('slow');
        }
      });
      $('a.back-to-top').click(function() {
        $('html, body').animate({
          scrollTop: 0
        }, 700);
        return false;
      });
    </script>
    <!--back to top end-->
    <!-- container -->
  </body>
  </html><!DOCTYPE html>
<html>
<head>
  <title>Ени-92</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
  
  <style type="text/css">
    body {
      background-image: url('img/font.jpg');
      margin: 0;
      padding: 0;
      height: 0;
    }
    .logo {
      width: 50%;
      margin-top: 2%;
      margin-bottom: 2%;
    }
    .line {
      height: 2px;
      background-color: red;
    }
    .bottom-line {
      height: 2px;
      background-color: red;
    }
    .tel {
      width: 40%;
      float: right;
    }
    h4 {
      color: red;
      display: inline-block;
    }
    
    
    
    
    @media screen and (max-width: 600px) {
      .adres, .email { font-size: 20px;}
    }
    @media screen and (max-width: 600px) {
      .email { font-size: 15px;}
    }
    @media screen and (max-width: 500px) {
      .adres, .email { font-size: 15px;}
    }
    .navbar {
      background-color: #c1c1c1;
    }
    .navbar-nav {
      width: 100%;
      text-align: center;
      background: #c1c1c1;
    }
    .navbar-nav>li {
      float: initial;
      line-height: 150px;
    }
    .nav>li {
      display:inline-block;
    }
    .van {
      width: 20%;
      float: left;
    }
    .van-button {
      width: 20%;
      float: left;
    }
    .facebook {
      width: 5%;
      margin: 0 2%;
    }
    @media screen and (max-width: 500px) {
      .facebook { width: 10%;}
    }
    @media screen and (max-width: 780px) {
      .van { display: none;}
    }
    @media screen and (min-width: 780px) {
      .van-button { display: none;}
    }
    @media screen and (max-width: 760px) {
      .van-button { width: 40%;}
    }
    /*CATEGORY END*/
    /*footer start*/
    .footer, .push {
      min-height: 4em;
      margin: 0 auto;
      margin-bottom: 1%;
      border-radius: 10px;
    }
    .footer {
      padding: 2% 2% 2% 2%;
      color: #F2DBA5;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+45,6d0019+76,6d0019+79 */
      background: rgb(169,3,41); /* Old browsers */
      background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 45%, rgba(109,0,25,1) 76%, rgba(109,0,25,1) 79%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    }
    .barziVrazki > li > a {
      color: #F2DBA5;
    }
    /*fuuter end*/
    .mitashki {
      margin-left: 10%;
    }
    .input-group[class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }
    .contactForm {
      background-color: #5B74A9;
      color: white;
      margin: 1%;
      margin-left: 10%;
    }
    @media screen and (max-width: 500px) {
      .contactForm { margin: 0 auto; font-size: 11px;}
    }
    .contactForm:hover {
      background-color: white;
      color: #5B74A9;
      border: 1px solid #5B74A9;
    }
    .modal-title {
      color: #5B74A9;
    }
    .dropdown-menu > li {
      background-color: white;
      text-align: left;
    }
    .barziVrazki {
      display: inline-block;
    }
    a.back-to-top {
      display: none;
      width: 50px;
      height: 50px;
      text-indent: -9999px;
      position: fixed;
      z-index: 999;
      right: 2%;
      bottom: 2%;
      background: #27AE61 url("img/top.png") no-repeat center ;
      background-size: 100%;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      opacity: 0.3;
      outline: 0;
    }
    a.back-to-top:hover {
      opacity: 1;
    }
  </style>
</head>
<body>
  <?php include('send_form_email.php') ?>
  <!-- container -->
  <div class="font"></div>
  <div class="container">
    <div class="col-md-12">
      <a href="https://www.google.bg/maps/place/%D1%83%D0%BB.+%E2%80%9E%D0%92%D0%B0%D1%81%D0%B8%D0%BB+%D0%9B%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%E2%80%9C+170,+4003+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2/@42.176901,24.7414923,19z/data=!4m5!3m4!1s0x14acd223c431e1f3:0x49b0bd0dcba79efc!8m2!3d42.17696!4d24.741962"> <h4 class="adres">гр. Пловдив 4003,  ул. Васил Левски №170 </h4></a>
      <a href="https://www.facebook.com/eni92.eood/?fref=ts"><img class="facebook" src="img/facebook.ico"></a>
      <h4 class="email">Email: eni92@abv.bg</h4>
      
      <!--contact us form start-->
      
      <!-- Button to trigger modal -->
      <a href="#myModal" role="button" class="btn btn-custom contactForm" data-toggle="modal">Отворете Формата за Връзка с Нас</a>
      <!-- Modal -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Форма за връзка с нас</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="comment">Въпрос или Коментар</label>
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
      </div><!-- End of Modal -->
      <!--contact us form edn-->
    </div>
    <div class="col-md-12"><div class="line"></div></div>
    <div class="col-md-12">
      <div>
        <img class="tel" src="img/tel.png">
      </div>
      <a href="eni92.php"><img class="logo" src="img/logo1.jpg"></a>
    </div>
    <div class="col-md-12 col-centered">
      <div class="navbar navbar-default navbar-top">
        <div class="navbar-header">
          <img class="van-button" src="img/transport.png">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <img class="van" src="img/transport.png">
            <li><a href="eni92.php">НАЧАЛО</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ПРОДУКТИ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="#">ТОНИРАНЕ</a></li>
            <li><a href="#">ПОД НАЕМ</a></li>
            <li><a href="aboutus.php">ЗА НАС</a></li>
            <li><a href="contacts.php">КОНТАКТИ</a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-md-12"><div class="bottom-line"></div></div>
      <div class="col-md-12 contacts">
        
      </div>
      <div class="push"></div>
      <div class="col-md-12 col-centered">
        <div class="footer">
          <span>БЪРЗИ ВРЪЗКИ</span><br>
          <ul class="barziVrazki">
            <li><a href="tuhli.php">ТУХЛИ</a></li>
            <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
            <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
            <li><a href="ytong.php">ИТОНГ</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
            <li><a href="vata.php">ВАТА</a></li>
            <li><a href="profili.php">ПРОФИЛИ</a></li>
            <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
            <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
            <li><a href="mreji.php">МРЕЖИ</a></li>
            <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
            <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
            <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
            <li><a href="#.php">СУХИ СМЕСИ</a></li>
          </ul><br><br>
          <span>Всички права запазени</span>
          <span class="mitashki">Created by <a href="https://www.facebook.com/profile.php?id=100000686533887">Mitashki</a> &copy;</span>
        </div>
      </div>
    </div>
    <!--back to top start-->
    <a href="#" class="back-to-top">Обратно горе</a>
    <script type="text/javascript">
      $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
      var amountScrolled = 200;
      $(window).scroll(function() {
        if ( $(window).scrollTop() > amountScrolled ) {
          $('a.back-to-top').fadeIn('slow');
        } else {
          $('a.back-to-top').fadeOut('slow');
        }
      });
      $('a.back-to-top').click(function() {
        $('html, body').animate({
          scrollTop: 0
        }, 700);
        return false;
      });
    </script>
    <!--back to top end-->
    <!-- container -->
  </body>
  </html><!DOCTYPE html>
<html>
<head>
  <title>Ени-92</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
  
  <style type="text/css">
    body {
      background-image: url('img/font.jpg');
      margin: 0;
      padding: 0;
      height: 0;
    }
    .logo {
      width: 50%;
      margin-top: 2%;
      margin-bottom: 2%;
    }
    .line {
      height: 2px;
      background-color: red;
    }
    .bottom-line {
      height: 2px;
      background-color: red;
    }
    .tel {
      width: 40%;
      float: right;
    }
    h4 {
      color: red;
      display: inline-block;
    }
    
    
    
    
    @media screen and (max-width: 600px) {
      .adres, .email { font-size: 20px;}
    }
    @media screen and (max-width: 600px) {
      .email { font-size: 15px;}
    }
    @media screen and (max-width: 500px) {
      .adres, .email { font-size: 15px;}
    }
    .navbar {
      background-color: #c1c1c1;
    }
    .navbar-nav {
      width: 100%;
      text-align: center;
      background: #c1c1c1;
    }
    .navbar-nav>li {
      float: initial;
      line-height: 150px;
    }
    .nav>li {
      display:inline-block;
    }
    .van {
      width: 20%;
      float: left;
    }
    .van-button {
      width: 20%;
      float: left;
    }
    .facebook {
      width: 5%;
      margin: 0 2%;
    }
    @media screen and (max-width: 500px) {
      .facebook { width: 10%;}
    }
    @media screen and (max-width: 780px) {
      .van { display: none;}
    }
    @media screen and (min-width: 780px) {
      .van-button { display: none;}
    }
    @media screen and (max-width: 760px) {
      .van-button { width: 40%;}
    }
    /*CATEGORY END*/
    /*footer start*/
    .footer, .push {
      min-height: 4em;
      margin: 0 auto;
      margin-bottom: 1%;
      border-radius: 10px;
    }
    .footer {
      padding: 2% 2% 2% 2%;
      color: #F2DBA5;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+45,6d0019+76,6d0019+79 */
      background: rgb(169,3,41); /* Old browsers */
      background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 45%, rgba(109,0,25,1) 76%, rgba(109,0,25,1) 79%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    }
    .barziVrazki > li > a {
      color: #F2DBA5;
    }
    /*fuuter end*/
    .mitashki {
      margin-left: 10%;
    }
    .input-group[class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }
    .contactForm {
      background-color: #5B74A9;
      color: white;
      margin: 1%;
      margin-left: 10%;
    }
    @media screen and (max-width: 500px) {
      .contactForm { margin: 0 auto; font-size: 11px;}
    }
    .contactForm:hover {
      background-color: white;
      color: #5B74A9;
      border: 1px solid #5B74A9;
    }
    .modal-title {
      color: #5B74A9;
    }
    .dropdown-menu > li {
      background-color: white;
      text-align: left;
    }
    .barziVrazki {
      display: inline-block;
    }
    a.back-to-top {
      display: none;
      width: 50px;
      height: 50px;
      text-indent: -9999px;
      position: fixed;
      z-index: 999;
      right: 2%;
      bottom: 2%;
      background: #27AE61 url("img/top.png") no-repeat center ;
      background-size: 100%;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      opacity: 0.3;
      outline: 0;
    }
    a.back-to-top:hover {
      opacity: 1;
    }
  </style>
</head>
<body>
  <?php include('send_form_email.php') ?>
  <!-- container -->
  <div class="font"></div>
  <div class="container">
    <div class="col-md-12">
      <a href="https://www.google.bg/maps/place/%D1%83%D0%BB.+%E2%80%9E%D0%92%D0%B0%D1%81%D0%B8%D0%BB+%D0%9B%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%E2%80%9C+170,+4003+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2/@42.176901,24.7414923,19z/data=!4m5!3m4!1s0x14acd223c431e1f3:0x49b0bd0dcba79efc!8m2!3d42.17696!4d24.741962"> <h4 class="adres">гр. Пловдив 4003,  ул. Васил Левски №170 </h4></a>
      <a href="https://www.facebook.com/eni92.eood/?fref=ts"><img class="facebook" src="img/facebook.ico"></a>
      <h4 class="email">Email: eni92@abv.bg</h4>
      
      <!--contact us form start-->
      
      <!-- Button to trigger modal -->
      <a href="#myModal" role="button" class="btn btn-custom contactForm" data-toggle="modal">Отворете Формата за Връзка с Нас</a>
      <!-- Modal -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Форма за връзка с нас</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="comment">Въпрос или Коментар</label>
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
      </div><!-- End of Modal -->
      <!--contact us form edn-->
    </div>
    <div class="col-md-12"><div class="line"></div></div>
    <div class="col-md-12">
      <div>
        <img class="tel" src="img/tel.png">
      </div>
      <a href="eni92.php"><img class="logo" src="img/logo1.jpg"></a>
    </div>
    <div class="col-md-12 col-centered">
      <div class="navbar navbar-default navbar-top">
        <div class="navbar-header">
          <img class="van-button" src="img/transport.png">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <img class="van" src="img/transport.png">
            <li><a href="eni92.php">НАЧАЛО</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ПРОДУКТИ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="#">ТОНИРАНЕ</a></li>
            <li><a href="#">ПОД НАЕМ</a></li>
            <li><a href="aboutus.php">ЗА НАС</a></li>
            <li><a href="contacts.php">КОНТАКТИ</a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-md-12"><div class="bottom-line"></div></div>
      <div class="col-md-12 contacts">
        
      </div>
      <div class="push"></div>
      <div class="col-md-12 col-centered">
        <div class="footer">
          <span>БЪРЗИ ВРЪЗКИ</span><br>
          <ul class="barziVrazki">
            <li><a href="tuhli.php">ТУХЛИ</a></li>
            <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
            <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
            <li><a href="ytong.php">ИТОНГ</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
            <li><a href="vata.php">ВАТА</a></li>
            <li><a href="profili.php">ПРОФИЛИ</a></li>
            <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
            <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
            <li><a href="mreji.php">МРЕЖИ</a></li>
            <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
            <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
            <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
            <li><a href="#.php">СУХИ СМЕСИ</a></li>
          </ul><br><br>
          <span>Всички права запазени</span>
          <span class="mitashki">Created by <a href="https://www.facebook.com/profile.php?id=100000686533887">Mitashki</a> &copy;</span>
        </div>
      </div>
    </div>
    <!--back to top start-->
    <a href="#" class="back-to-top">Обратно горе</a>
    <script type="text/javascript">
      $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
      var amountScrolled = 200;
      $(window).scroll(function() {
        if ( $(window).scrollTop() > amountScrolled ) {
          $('a.back-to-top').fadeIn('slow');
        } else {
          $('a.back-to-top').fadeOut('slow');
        }
      });
      $('a.back-to-top').click(function() {
        $('html, body').animate({
          scrollTop: 0
        }, 700);
        return false;
      });
    </script>
    <!--back to top end-->
    <!-- container -->
  </body>
  </html><!DOCTYPE html>
<html>
<head>
  <title>Ени-92</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
  
  <style type="text/css">
    body {
      background-image: url('img/font.jpg');
      margin: 0;
      padding: 0;
      height: 0;
    }
    .logo {
      width: 50%;
      margin-top: 2%;
      margin-bottom: 2%;
    }
    .line {
      height: 2px;
      background-color: red;
    }
    .bottom-line {
      height: 2px;
      background-color: red;
    }
    .tel {
      width: 40%;
      float: right;
    }
    h4 {
      color: red;
      display: inline-block;
    }
    
    
    
    
    @media screen and (max-width: 600px) {
      .adres, .email { font-size: 20px;}
    }
    @media screen and (max-width: 600px) {
      .email { font-size: 15px;}
    }
    @media screen and (max-width: 500px) {
      .adres, .email { font-size: 15px;}
    }
    .navbar {
      background-color: #c1c1c1;
    }
    .navbar-nav {
      width: 100%;
      text-align: center;
      background: #c1c1c1;
    }
    .navbar-nav>li {
      float: initial;
      line-height: 150px;
    }
    .nav>li {
      display:inline-block;
    }
    .van {
      width: 20%;
      float: left;
    }
    .van-button {
      width: 20%;
      float: left;
    }
    .facebook {
      width: 5%;
      margin: 0 2%;
    }
    @media screen and (max-width: 500px) {
      .facebook { width: 10%;}
    }
    @media screen and (max-width: 780px) {
      .van { display: none;}
    }
    @media screen and (min-width: 780px) {
      .van-button { display: none;}
    }
    @media screen and (max-width: 760px) {
      .van-button { width: 40%;}
    }
    /*CATEGORY END*/
    /*footer start*/
    .footer, .push {
      min-height: 4em;
      margin: 0 auto;
      margin-bottom: 1%;
      border-radius: 10px;
    }
    .footer {
      padding: 2% 2% 2% 2%;
      color: #F2DBA5;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+45,6d0019+76,6d0019+79 */
      background: rgb(169,3,41); /* Old browsers */
      background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 45%, rgba(109,0,25,1) 76%, rgba(109,0,25,1) 79%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    }
    .barziVrazki > li > a {
      color: #F2DBA5;
    }
    /*fuuter end*/
    .mitashki {
      margin-left: 10%;
    }
    .input-group[class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }
    .contactForm {
      background-color: #5B74A9;
      color: white;
      margin: 1%;
      margin-left: 10%;
    }
    @media screen and (max-width: 500px) {
      .contactForm { margin: 0 auto; font-size: 11px;}
    }
    .contactForm:hover {
      background-color: white;
      color: #5B74A9;
      border: 1px solid #5B74A9;
    }
    .modal-title {
      color: #5B74A9;
    }
    .profili {
      background-color: white;
      margin: 1% 0;
      box-shadow: 25px 0px 25px -25px rgba(0,0,0,0.45), -25px 0px 25px -25px rgba(0,0,0,0.45);
      
    }
    .profil {
      float: right;
      width: 20%;
    }
    .profilKategory {
      border-bottom: 1px solid red;
    }
    .dropdown-menu > li {
      background-color: white;
      text-align: left;
    }
    .barziVrazki {
      display: inline-block;
    }
    a.back-to-top {
      display: none;
      width: 50px;
      height: 50px;
      text-indent: -9999px;
      position: fixed;
      z-index: 999;
      right: 2%;
      bottom: 2%;
      background: #27AE61 url("img/top.png") no-repeat center ;
      background-size: 100%;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      opacity: 0.3;
      outline: 0;
    }
    a.back-to-top:hover {
      opacity: 1;
    }
  </style>
</head>
<body>
  <?php include('send_form_email.php') ?>
  <!-- container -->
  <div class="font"></div>
  <div class="container">
    <div class="col-md-12">
      <a href="https://www.google.bg/maps/place/%D1%83%D0%BB.+%E2%80%9E%D0%92%D0%B0%D1%81%D0%B8%D0%BB+%D0%9B%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%E2%80%9C+170,+4003+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2/@42.176901,24.7414923,19z/data=!4m5!3m4!1s0x14acd223c431e1f3:0x49b0bd0dcba79efc!8m2!3d42.17696!4d24.741962"> <h4 class="adres">гр. Пловдив 4003,  ул. Васил Левски №170 </h4></a>
      <a href="https://www.facebook.com/eni92.eood/?fref=ts"><img class="facebook" src="img/facebook.ico"></a>
      <h4 class="email">Email: eni92@abv.bg</h4>
      
      <!--contact us form start-->
      
      <!-- Button to trigger modal -->
      <a href="#myModal" role="button" class="btn btn-custom contactForm" data-toggle="modal">Отворете Формата за Връзка с Нас</a>
      <!-- Modal -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Форма за връзка с нас</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="comment">Въпрос или Коментар</label>
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
      </div><!-- End of Modal -->
      <!--contact us form edn-->
    </div>
    <div class="col-md-12"><div class="line"></div></div>
    <div class="col-md-12">
      <div>
        <img class="tel" src="img/tel.png">
      </div>
      <a href="eni92.php"><img class="logo" src="img/logo1.jpg"></a>
    </div>
    <div class="col-md-12 col-centered">
      <div class="navbar navbar-default navbar-top">
        <div class="navbar-header">
          <img class="van-button" src="img/transport.png">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <img class="van" src="img/transport.png">
            <li><a href="eni92.php">НАЧАЛО</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ПРОДУКТИ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="#">ТОНИРАНЕ</a></li>
            <li><a href="#">ПОД НАЕМ</a></li>
            <li><a href="aboutus.php">ЗА НАС</a></li>
            <li><a href="contacts.php">КОНТАКТИ</a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-md-12"><div class="bottom-line"></div></div>
      <div class="col-md-12 profili">
        <h4><b>ПРОФИЛИ ЗА СУХО СТРОИТЕЛСТВО</b></h4><br><br>
        <p><b>Стоманените профили са тънкостенни, студено формувани от горещо поцинкована лента от мека стомана с маса на цинковото покритие 100 ÷ 150g/ m². Дебелината на стените на профила е 0, 56 ÷ 0,64 mm. Използват се при изграждането на различни конструкции при монтаж на гипсокартон или окачени тавани.</b></p><br>
        <div class="profilKategory">
          <h3><b>ПРОФИЛ UD 28/27/3м-4м КНАУФ</b></h3><br>
          <img class="profil" src="img/profil.jpg">
          <ul>
            <li>дължина мм.  3000-4000</li>
            <li>ширина мм.  28</li>
            <li>височина мм.  27</li>
            <li>дебелина мм. 0,6</li>
          </ul>
          <h4><b>ОПИСАНИЕ</b></h4><br>
          <p><b>Knauf UD профил за сухо строителство с ширина 28мм. и дължина 3-4 м.</b><br><br></p>
        </div>
        <div class="profilKategory">
          <h3><b>ПРОФИЛ CD 60/27/3м-4м КНАУФ</b></h3><br>
          <img class="profil" src="img/cd.jpg">
          <ul>
            <li>дължина мм. 3000-4000</li>
            <li>ширина мм.  60</li>
            <li>височина мм.  27</li>
            <li>дебелина мм.  0,6</li>
          </ul>
          <h4><b>ОПИСАНИЕ</b></h4><br>
          <p><b>Knauf CD профил за сухо строителство с ширина 60мм.</b><br><br></p>
        </div>
        <div class="profilKategory">
          <h3><b>ПРОФИЛ CW 50-75-100/3м-4m КНАУФ</b></h3><br>
          <img class="profil" src="img/CW.jpg">
          <ul>
            <li>дължина мм. 3000-4000</li>
            <li>ширина мм.  50-75-100</li>
            <li>височина мм.  50</li>
            <li>дебелина мм.  0,6</li>
          </ul>
          <h4><b>ОПИСАНИЕ</b></h4><br>
          <p><b>Knauf CW профил за сухо строителство с ширина 50мм-75мм-100мм.</b><br><br></p>
        </div>
        <div class="profilKategory">
          <h3><b>ПРОФИЛ UW 50-75-100/3м-4м КНАУФ</b></h3><br>
          <img class="profil" src="img/uw.jpg">
          <ul>
            <li>дължина мм. 3000-4000</li>
            <li>ширина мм.  50-75-100</li>
            <li>височина мм.  40</li>
            <li>дебелина мм.  0,6</li>
          </ul>
          <h4><b>ОПИСАНИЕ</b></h4><br>
          <p><b>Knauf CW профил за сухо строителство с ширина 50мм-75мм-100мм.</b><br><br></p><br>
        </div>
        <h4><b>ЗА ПРОДУКТИ КОИТО НЕ ВИЖДАТЕ В КАТЕГОРИЯТА, МОЛЯ СВЪРЖЕТЕ СЕ С НАС НА ПОСОЧЕНИТЕ ТЕЛЕФОНИ</b></h4>
        
      </div>
      <div class="push"></div>
      <div class="col-md-12 col-centered">
        <div class="footer">
          <span>БЪРЗИ ВРЪЗКИ</span><br>
          <ul class="barziVrazki">
            <li><a href="tuhli.php">ТУХЛИ</a></li>
            <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
            <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
            <li><a href="ytong.php">ИТОНГ</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
            <li><a href="vata.php">ВАТА</a></li>
            <li><a href="profili.php">ПРОФИЛИ</a></li>
            <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
            <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
            <li><a href="mreji.php">МРЕЖИ</a></li>
            <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
            <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
            <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
            <li><a href="#.php">СУХИ СМЕСИ</a></li>
          </ul><br><br>
          <span>Всички права запазени</span>
          <span class="mitashki">Created by <a href="https://www.facebook.com/profile.php?id=100000686533887">Mitashki</a> &copy;</span>
        </div>
      </div>
    </div>
    <!--back to top start-->
    <a href="#" class="back-to-top">Обратно горе</a>
    <script type="text/javascript">
      $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
      var amountScrolled = 200;
      $(window).scroll(function() {
        if ( $(window).scrollTop() > amountScrolled ) {
          $('a.back-to-top').fadeIn('slow');
        } else {
          $('a.back-to-top').fadeOut('slow');
        }
      });
      $('a.back-to-top').click(function() {
        $('html, body').animate({
          scrollTop: 0
        }, 700);
        return false;
      });
    </script>
    <!--back to top end-->
    <!-- container -->
  </body>
  </html><?php
if(isset($_POST['email'])) {
// EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "paspartoo89@gmail.com";
    $email_subject = "Your email subject line";
    function died($error) {
// your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
// validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
}
$first_name = $_POST['first_name']; // required
$last_name = $_POST['last_name']; // required
$email_from = $_POST['email']; // required
$comments = $_POST['comments']; // required
$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
}
if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
}
if(strlen($error_message) > 0) {
    died($error_message);
}
$email_message = "Form details below.\n\n";
function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
}
$email_message .= "First Name: ".clean_string($first_name)."\n";
$email_message .= "Last Name: ".clean_string($last_name)."\n";
$email_message .= "Email: ".clean_string($email_from)."\n";
$email_message .= "Comments: ".clean_string($comments)."\n";
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
sleep(2);
echo "<meta http-equiv='refresh' content=\"0; url=http://localhost/eni92/eni92.php\">";
?>
<?php
}
?>.press {
background: red;
float: left;
padding: 20px;
margin-left: 20px;
}
.visibleClass {
display: block !important;
}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<div id="x_1" class="press" onclick="showDiv('1')">1</div>
<div id="x_2" class="press" onclick="showDiv('2')">2</div>
<div id="x_3" class="press" onclick="showDiv('3')">3</div>
<div id="x_4" class="press" onclick="showDiv('4')">4</div>
<div id="x_5" class="press" onclick="showDiv('5')">5</div>
<div id="x_6" class="press" onclick="showDiv('6')">6</div>
<br>
<br>
<br>
<br>
<div id="ele-1" style="display: none;">show data 1</div>
<div id="ele-2" style="display: none;">show data 2</div>
<div id="ele-3" style="display: none;">show data 3</div>
<div id="ele-4" style="display: none;">show data 4</div>
<div id="ele-5" style="display: none;">show data 5</div>
<div id="ele-6" style="display: none;">show data 6</div>
<script>
  function showDiv(data) {
    $("#ele-" + data).addClass('visibleClass');
    hideElement(6, data);
  }
  function hideElement(total, active) {
    for (i = 1; i <= total; i++) {
      if (i != active)
        $("#ele-" + i).removeClass('visibleClass');
    }
  }
</script><!DOCTYPE html>
<html>
<head>
  <title>Ени-92</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
  
  <style type="text/css">
    body {
      background-image: url('img/font.jpg');
      margin: 0;
      padding: 0;
      height: 0;
    }
    .logo {
      width: 50%;
      margin-top: 2%;
      margin-bottom: 2%;
    }
    .line {
      height: 2px;
      background-color: red;
    }
    .bottom-line {
      height: 2px;
      background-color: red;
    }
    .tel {
      width: 40%;
      float: right;
    }
    h4 {
      color: red;
      display: inline-block;
    }
    
    
    
    
    @media screen and (max-width: 600px) {
      .adres, .email { font-size: 20px;}
    }
    @media screen and (max-width: 600px) {
      .email { font-size: 15px;}
    }
    @media screen and (max-width: 500px) {
      .adres, .email { font-size: 15px;}
    }
    .navbar {
      background-color: #c1c1c1;
    }
    .navbar-nav {
      width: 100%;
      text-align: center;
      background: #c1c1c1;
    }
    .navbar-nav>li {
      float: initial;
      line-height: 150px;
    }
    .nav>li {
      display:inline-block;
    }
    .van {
      width: 20%;
      float: left;
    }
    .van-button {
      width: 20%;
      float: left;
    }
    .facebook {
      width: 5%;
      margin: 0 2%;
    }
    @media screen and (max-width: 500px) {
      .facebook { width: 10%;}
    }
    @media screen and (max-width: 780px) {
      .van { display: none;}
    }
    @media screen and (min-width: 780px) {
      .van-button { display: none;}
    }
    @media screen and (max-width: 760px) {
      .van-button { width: 40%;}
    }
    /*CATEGORY END*/
    /*footer start*/
    .footer, .push {
      min-height: 4em;
      margin: 0 auto;
      margin-bottom: 1%;
      border-radius: 10px;
    }
    .footer {
      padding: 2% 2% 2% 2%;
      color: #F2DBA5;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+45,6d0019+76,6d0019+79 */
      background: rgb(169,3,41); /* Old browsers */
      background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 45%, rgba(109,0,25,1) 76%, rgba(109,0,25,1) 79%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    }
    .barziVrazki > li > a {
      color: #F2DBA5;
    }
    /*fuuter end*/
    .mitashki {
      margin-left: 10%;
    }
    .input-group[class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }
    .contactForm {
      background-color: #5B74A9;
      color: white;
      margin: 1%;
      margin-left: 10%;
    }
    @media screen and (max-width: 500px) {
      .contactForm { margin: 0 auto; font-size: 11px;}
    }
    .contactForm:hover {
      background-color: white;
      color: #5B74A9;
      border: 1px solid #5B74A9;
    }
    .modal-title {
      color: #5B74A9;
    }
    .dropdown-menu > li {
      background-color: white;
      text-align: left;
    }
    .barziVrazki {
      display: inline-block;
    }
    a.back-to-top {
      display: none;
      width: 50px;
      height: 50px;
      text-indent: -9999px;
      position: fixed;
      z-index: 999;
      right: 2%;
      bottom: 2%;
      background: #27AE61 url("img/top.png") no-repeat center ;
      background-size: 100%;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      opacity: 0.3;
      outline: 0;
    }
    a.back-to-top:hover {
      opacity: 1;
    }
    .newboxes {
      display: none;
      margin-top: 1%;
    }
    
    .ceresit, .thrakon, .angro {
      margin: 1% 5% 5% 5%;
      width: 150px;
      height: 90px;
      outline: 0;
    }
    .suhiSmesi {
      background-color: white;
      margin: 1% 0;
      box-shadow: 25px 0px 25px -25px rgba(0,0,0,0.45), -25px 0px 25px -25px rgba(0,0,0,0.45);
    }
    div.ceresit-thrakon-angro, h2 {
      text-align: center;
    }
    h2 {
      color: red;
    }
    div.h2 {
      border-bottom: 1px solid red;
    }
  </style>
  <script type="text/javascript">
    function showonlyone(thechosenone) {
      $('.newboxes').each(function(index) {
        if ($(this).attr("id") == thechosenone) {
          $(this).show(1);
        }
        else {
          $(this).hide(1);
        }
      });
    }
  </script>
</head>
<body>
  <?php include('send_form_email.php') ?>
  <!-- container -->
  <div class="font"></div>
  <div class="container">
    <div class="col-md-12">
      <a href="https://www.google.bg/maps/place/%D1%83%D0%BB.+%E2%80%9E%D0%92%D0%B0%D1%81%D0%B8%D0%BB+%D0%9B%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%E2%80%9C+170,+4003+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2/@42.176901,24.7414923,19z/data=!4m5!3m4!1s0x14acd223c431e1f3:0x49b0bd0dcba79efc!8m2!3d42.17696!4d24.741962"> <h4 class="adres">гр. Пловдив 4003,  ул. Васил Левски №170 </h4></a>
      <a href="https://www.facebook.com/eni92.eood/?fref=ts"><img class="facebook" src="img/facebook.ico"></a>
      <h4 class="email">Email: eni92@abv.bg</h4>
      
      <!--contact us form start-->
      
      <!-- Button to trigger modal -->
      <a href="#myModal" role="button" class="btn btn-custom contactForm" data-toggle="modal">Отворете Формата за Връзка с Нас</a>
      <!-- Modal -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Форма за връзка с нас</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="comment">Въпрос или Коментар</label>
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
      </div><!-- End of Modal -->
      <!--contact us form edn-->
    </div>
    <div class="col-md-12"><div class="line"></div></div>
    <div class="col-md-12">
      <div>
        <img class="tel" src="img/tel.png">
      </div>
      <a href="eni92.php"><img class="logo" src="img/logo1.jpg"></a>
    </div>
    <div class="col-md-12 col-centered">
      <div class="navbar navbar-default navbar-top">
        <div class="navbar-header">
          <img class="van-button" src="img/transport.png">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <img class="van" src="img/transport.png">
            <li><a href="eni92.php">НАЧАЛО</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ПРОДУКТИ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="#">ТОНИРАНЕ</a></li>
            <li><a href="#">ПОД НАЕМ</a></li>
            <li><a href="aboutus.php">ЗА НАС</a></li>
            <li><a href="contacts.php">КОНТАКТИ</a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-md-12"><div class="bottom-line"></div></div>
      <div class="col-md-12 suhiSmesi">
        <h2><b>СУХИ СМЕСИ</b></h2><br><br>
        <div class="ceresit-thrakon-angro">
          <a href="#"><img id="myHeader1" class="ceresit" src="img/ceresit.gif" onClick="javascript:showonlyone('newboxes1');"></a>
          <a href="#"><img id="myHeader2" class="thrakon" src="img/thrakon.jpg" onClick="javascript:showonlyone('newboxes2');"></a>
          <a href="#"><img id="myHeader3" class="angro" src="img/angro.jpg" onClick="javascript:showonlyone('newboxes3');"></a>
        </div>
        <div class="newboxes" id="newboxes1">
          <div class="ceresitSuhiSmesi">
            <div class="h2"><h2><b>CERESIT</b></h2></div>
            <div>hjk</div>
          </div>
        </div>
        <div class="newboxes" id="newboxes2"></div>
        <div class="newboxes" id="newboxes3"></div>
      </div>
      <div class="push"></div>
      <div class="col-md-12 col-centered">
        <div class="footer">
          <span>БЪРЗИ ВРЪЗКИ</span><br>
          <ul class="barziVrazki">
            <li><a href="tuhli.php">ТУХЛИ</a></li>
            <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
            <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
            <li><a href="ytong.php">ИТОНГ</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
            <li><a href="vata.php">ВАТА</a></li>
            <li><a href="profili.php">ПРОФИЛИ</a></li>
            <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
            <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
            <li><a href="mreji.php">МРЕЖИ</a></li>
            <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
            <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
            <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
            <li><a href="#.php">СУХИ СМЕСИ</a></li>
          </ul><br><br>
          <span>Всички права запазени</span>
          <span class="mitashki">Created by <a href="https://www.facebook.com/profile.php?id=100000686533887">Mitashki</a> &copy;</span>
        </div>
      </div>
    </div>
    <!--back to top start-->
    <a href="#" class="back-to-top">Обратно горе</a>
    <script type="text/javascript">
      $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
      var amountScrolled = 200;
      $(window).scroll(function() {
        if ( $(window).scrollTop() > amountScrolled ) {
          $('a.back-to-top').fadeIn('slow');
        } else {
          $('a.back-to-top').fadeOut('slow');
        }
      });
      $('a.back-to-top').click(function() {
        $('html, body').animate({
          scrollTop: 0
        }, 700);
        return false;
      });
    </script>
    <!--back to top end-->
    <!-- container -->
  </body>
  </html><!DOCTYPE html>
<html>
<head>
  <title>Ени-92</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
  
  <style type="text/css">
    body {
      background-image: url('img/font.jpg');
      margin: 0;
      padding: 0;
      height: 0;
    }
    .logo {
      width: 50%;
      margin-top: 2%;
      margin-bottom: 2%;
    }
    .line {
      height: 2px;
      background-color: red;
    }
    .bottom-line {
      height: 2px;
      background-color: red;
    }
    .tel {
      width: 40%;
      float: right;
    }
    h4 {
      color: red;
      display: inline-block;
    }
    
    
    
    
    @media screen and (max-width: 600px) {
      .adres, .email { font-size: 20px;}
    }
    @media screen and (max-width: 600px) {
      .email { font-size: 15px;}
    }
    @media screen and (max-width: 500px) {
      .adres, .email { font-size: 15px;}
    }
    .navbar {
      background-color: #c1c1c1;
    }
    .navbar-nav {
      width: 100%;
      text-align: center;
      background: #c1c1c1;
    }
    .navbar-nav>li {
      float: initial;
      line-height: 150px;
    }
    .nav>li {
      display:inline-block;
    }
    .van {
      width: 20%;
      float: left;
    }
    .van-button {
      width: 20%;
      float: left;
    }
    .facebook {
      width: 5%;
      margin: 0 2%;
    }
    @media screen and (max-width: 500px) {
      .facebook { width: 10%;}
    }
    @media screen and (max-width: 780px) {
      .van { display: none;}
    }
    @media screen and (min-width: 780px) {
      .van-button { display: none;}
    }
    @media screen and (max-width: 760px) {
      .van-button { width: 40%;}
    }
    /*CATEGORY END*/
    /*footer start*/
    .footer, .push {
      min-height: 4em;
      margin: 0 auto;
      margin-bottom: 1%;
      border-radius: 10px;
    }
    .footer {
      padding: 2% 2% 2% 2%;
      color: #F2DBA5;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+45,6d0019+76,6d0019+79 */
      background: rgb(169,3,41); /* Old browsers */
      background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 45%, rgba(109,0,25,1) 76%, rgba(109,0,25,1) 79%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    }
    .barziVrazki > li > a {
      color: #F2DBA5;
    }
    /*fuuter end*/
    .mitashki {
      margin-left: 10%;
    }
    .input-group[class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }
    .contactForm {
      background-color: #5B74A9;
      color: white;
      margin: 1%;
      margin-left: 10%;
    }
    @media screen and (max-width: 500px) {
      .contactForm { margin: 0 auto; font-size: 11px;}
    }
    .contactForm:hover {
      background-color: white;
      color: #5B74A9;
      border: 1px solid #5B74A9;
    }
    .modal-title {
      color: #5B74A9;
    }
    .transport {
      background-color: white;
      border-radius: 20px;
      margin: 3% 0;
      padding: 2%;
      box-shadow: 25px 0px 25px -25px rgba(0,0,0,0.45), -25px 0px 25px -25px rgba(0,0,0,0.45);
      
    }
    h3, h1 {
      color: #5B74A9;
      text-align: center;
    }
    .dropdown-menu > li {
      background-color: white;
      text-align: left;
    }
    .barziVrazki {
      display: inline-block;
    }
    a.back-to-top {
      display: none;
      width: 50px;
      height: 50px;
      text-indent: -9999px;
      position: fixed;
      z-index: 999;
      right: 2%;
      bottom: 2%;
      background: #27AE61 url("img/top.png") no-repeat center ;
      background-size: 100%;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      opacity: 0.3;
      outline: 0;
    }
    a.back-to-top:hover {
      opacity: 1;
    }
  </style>
</head>
<body>
  <?php include('send_form_email.php') ?>
  <!-- container -->
  <div class="font"></div>
  <div class="container">
    <div class="col-md-12">
      <a href="https://www.google.bg/maps/place/%D1%83%D0%BB.+%E2%80%9E%D0%92%D0%B0%D1%81%D0%B8%D0%BB+%D0%9B%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%E2%80%9C+170,+4003+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2/@42.176901,24.7414923,19z/data=!4m5!3m4!1s0x14acd223c431e1f3:0x49b0bd0dcba79efc!8m2!3d42.17696!4d24.741962"> <h4 class="adres">гр. Пловдив 4003,  ул. Васил Левски №170 </h4></a>
      <a href="https://www.facebook.com/eni92.eood/?fref=ts"><img class="facebook" src="img/facebook.ico"></a>
      <h4 class="email">Email: eni92@abv.bg</h4>
      
      <!--contact us form start-->
      
      <!-- Button to trigger modal -->
      <a href="#myModal" role="button" class="btn btn-custom contactForm" data-toggle="modal">Отворете Формата за Връзка с Нас</a>
      <!-- Modal -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Форма за връзка с нас</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
      </div><!-- End of Modal -->
      <!--contact us form edn-->
    </div>
    <div class="col-md-12"><div class="line"></div></div>
    <div class="col-md-12">
      <div>
        <img class="tel" src="img/tel.png">
      </div>
      <a href="eni92.php"><img class="logo" src="img/logo1.jpg"></a>
    </div>
    <div class="col-md-12 col-centered">
      <div class="navbar navbar-default navbar-top">
        <div class="navbar-header">
          <img class="van-button" src="img/transport.png">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <img class="van" src="img/transport.png">
            <li><a href="eni92.php">НАЧАЛО</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ПРОДУКТИ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="#">ТОНИРАНЕ</a></li>
            <li><a href="#">ПОД НАЕМ</a></li>
            <li><a href="aboutus.php">ЗА НАС</a></li>
            <li><a href="contacts.php">КОНТАКТИ</a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-md-12"><div class="bottom-line"></div></div>
      <div class="col-md-12 transport">
        <h3>ТРАНСПОРТ И ДОСТАВКА</h3><br><br>
        За да осигурим удобство, бърза и коректна доставка на всички клиенти на онлайн магазина, предлагаме избор на няколко начина на доставка на вашата поръчка.<br><br>
        <h1>Начини на доставка</h1>
        <b>1. Със собствен транспорт на клиента на място в магазин на ЕНИ-92 ЕООД</b><br>
        Поръчай онлайн и вземи поръчката си от магазина. При избор на този вариянт клиента не дължи никакви разходи по трaнспорт и доставка към ЕНИ-92 ЕООД и може да се възползва от безплатното товарене на направената поръчка в нашите магазини. Този вариянт е удобен за клиенти, разполагащи със собствен транспорт и намиращи се в близост до градовете, в които ЕНИ-92 ЕООД има складови и търговски бази.<br>
        
        Магазини и складове за строителни и мебелни материали на ЕНИ-92 ЕООД има в градовете: София, Варна, Добрич, Шумен и Каварна. За точното местоположение на нашите борси посетете страницата магазини.<br><br>
        <b>2. С куриерска фирма</b><br>
        Голяма част от поръчките направени от онлайн магазина се изпълняват използвайки услугите на куриерска фирма за транспорт и доставка. Дългогодишното ни партньорство със Спиди - Експресни куриерски услуги, ни позволява да Ви предложим изгодни цени за доставка на всички наши клиенти за цялата страна.<br>
        
        Цената за доставка с куриер се изчислява автоматично при оформянето на вашата поръчка и може да я видите преди нейното изпращане. Показаната цена за доставка е на база теглото на поръчаните продукти. При обемни продукти, като стиропор, фибран и вата, доставката се смята на база обемно тегло и подлежи на корекция.<br><br>
        <b>3. Транспорт на ЕНИ-92 ЕООД.</b><br>
        ЕНИ-92 ЕООД разполага с автомобилен парк във всички градове, в които има търговски бази. В електронния ни магазин са заложени фиксирани цени за доставка с транспорт на ЕНИ-92 ЕООД, съобразени със стойността на направената поръчка и населеното място на което желаете да бъде доставена. Срокът за изпълнение е до 3 работни дни.  Всички доставки на поръчки от електронният ни магазин, изпълнени с наш транспорт, се извършват до входа на посоченият адрес, без качването на стоката на определен етаж. Условията за доставка с транспорт на ЕНИ-92 ЕООД могат да бъдат договаряне и индивидуално за всяка поръчка и се уточняват по телефона с наш консултант след като подадете своята заявка. <br><br>
        <h1>Цени на доставка</h1>
        1. Безплатна доставка за градовете София, Варна, Добрич, Шумен и Каварна при поръчка от електронния магазин над 500 лв.<br>
        2. Безплатна доставка за всички населени места до 100 км. от търговските ни бази в област София, Варна, Добрич, Шумен и Каварна при поръчка над 2000 лв. с изключение на поръчки на керамични и газобетонни блокове и тухли!<br>
        3. Доставката на всички поръчки може да се изпълни от куриерска фирма Спиди. Цената се формира по определените от тях тарифи, според разстоянието за доставка и теглото на поръчката. <br>
        4. Доставката на всички поръчки може да се изпълни с транспорт на ЕНИ-92 ЕООД. Цените се определят според разстоянието за доставка и стойността на поръчката. Доставките с транспорт на ЕНИ-92 ЕООД се извършват в работно време от 08:00 до 17:00 часа. ЕНИ-92 ЕООД си запазва правото да променя цените за доставка с транспорт на фирмата по всяко време, без предварително предупреждение.<br>
        <h1>Срок на доставка</h1>
        
        Стандартния срок на доставка е 2 работни дни. Поради спецификата и разнообразието на предлагания от ЕНИ-92 ЕООД асортимент, сроковете за доставка на всяка поръчка се уточняват по телефона преди нейното изпълнение. Наш консултант ще се свърже с вас при първа възможност, след като заявите своята поръчка.<br>
        - Поръчки направени след 17:00 часа се обработват на следващия работен ден.<br>
        - Поръчки направени в събота и неделя се обработват в понеделник.<br>
        - Поръчки направени през празнични и почивни дни се обработват на първия работен ден.<br>
      </div>
      <div class="push"></div>
      <div class="col-md-12 col-centered">
        <div class="footer">
          <span>БЪРЗИ ВРЪЗКИ</span><br>
          <ul class="barziVrazki">
            <li><a href="tuhli.php">ТУХЛИ</a></li>
            <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
            <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
            <li><a href="ytong.php">ИТОНГ</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
            <li><a href="vata.php">ВАТА</a></li>
            <li><a href="profili.php">ПРОФИЛИ</a></li>
            <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
            <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
            <li><a href="mreji.php">МРЕЖИ</a></li>
            <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
            <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
            <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
            <li><a href="#.php">СУХИ СМЕСИ</a></li>
          </ul><br><br>
          <span>Всички права запазени</span>
          <span class="mitashki">Created by <a href="https://www.facebook.com/profile.php?id=100000686533887">Mitashki</a> &copy;</span>
        </div>
      </div>
    </div>
    <!--back to top start-->
    <a href="#" class="back-to-top">Обратно горе</a>
    <script type="text/javascript">
      $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
      var amountScrolled = 200;
      $(window).scroll(function() {
        if ( $(window).scrollTop() > amountScrolled ) {
          $('a.back-to-top').fadeIn('slow');
        } else {
          $('a.back-to-top').fadeOut('slow');
        }
      });
      $('a.back-to-top').click(function() {
        $('html, body').animate({
          scrollTop: 0
        }, 700);
        return false;
      });
    </script>
    <!--back to top end-->
    <!-- container -->
  </body>
  </html><!DOCTYPE html>
<html>
<head>
  <title>Ени-92</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
  
  <style type="text/css">
    body {
      background-image: url('img/font.jpg');
      margin: 0;
      padding: 0;
      height: 0;
    }
    .logo {
      width: 50%;
      margin-top: 2%;
      margin-bottom: 2%;
    }
    .line {
      height: 2px;
      background-color: red;
    }
    .bottom-line {
      height: 2px;
      background-color: red;
    }
    .tel {
      width: 40%;
      float: right;
    }
    h4 {
      color: red;
      display: inline-block;
    }
    
    
    
    
    @media screen and (max-width: 600px) {
      .adres, .email { font-size: 20px;}
    }
    @media screen and (max-width: 600px) {
      .email { font-size: 15px;}
    }
    @media screen and (max-width: 500px) {
      .adres, .email { font-size: 15px;}
    }
    .navbar {
      background-color: #c1c1c1;
    }
    .navbar-nav {
      width: 100%;
      text-align: center;
      background: #c1c1c1;
    }
    .navbar-nav>li {
      float: initial;
      line-height: 150px;
    }
    .nav>li {
      display:inline-block;
    }
    .van {
      width: 20%;
      float: left;
    }
    .van-button {
      width: 20%;
      float: left;
    }
    .facebook {
      width: 5%;
      margin: 0 2%;
    }
    @media screen and (max-width: 500px) {
      .facebook { width: 10%;}
    }
    @media screen and (max-width: 780px) {
      .van { display: none;}
    }
    @media screen and (min-width: 780px) {
      .van-button { display: none;}
    }
    @media screen and (max-width: 760px) {
      .van-button { width: 40%;}
    }
    /*CATEGORY END*/
    /*footer start*/
    .footer, .push {
      min-height: 4em;
      margin: 0 auto;
      margin-bottom: 1%;
      border-radius: 10px;
    }
    .footer {
      padding: 2% 2% 2% 2%;
      color: #F2DBA5;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+45,6d0019+76,6d0019+79 */
      background: rgb(169,3,41); /* Old browsers */
      background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 45%, rgba(109,0,25,1) 76%, rgba(109,0,25,1) 79%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    }
    .barziVrazki > li > a {
      color: #F2DBA5;
    }
    /*fuuter end*/
    .mitashki {
      margin-left: 10%;
    }
    .input-group[class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }
    .contactForm {
      background-color: #5B74A9;
      color: white;
      margin: 1%;
      margin-left: 10%;
    }
    @media screen and (max-width: 500px) {
      .contactForm { margin: 0 auto; font-size: 11px;}
    }
    .contactForm:hover {
      background-color: white;
      color: #5B74A9;
      border: 1px solid #5B74A9;
    }
    .modal-title {
      color: #5B74A9;
    }
    .tuhli {
      background-color: white;
      margin: 1% 0;
      box-shadow: 25px 0px 25px -25px rgba(0,0,0,0.45), -25px 0px 25px -25px rgba(0,0,0,0.45);
      
    }
    .tuhla {
      width: 30%;
    }
    .edinichka, .chetvorka {
      border-bottom: 1px solid red;
    }
    .tuhla {
      margin:1%;
    }
    .dropdown-menu > li {
      background-color: white;
      text-align: left;
    }
    .barziVrazki {
      display: inline-block;
    }
    a.back-to-top {
      display: none;
      width: 50px;
      height: 50px;
      text-indent: -9999px;
      position: fixed;
      z-index: 999;
      right: 2%;
      bottom: 2%;
      background: #27AE61 url("img/top.png") no-repeat center ;
      background-size: 100%;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      opacity: 0.3;
      outline: 0;
    }
    a.back-to-top:hover {
      opacity: 1;
    }
  </style>
</head>
<body>
  <?php include('send_form_email.php') ?>
  <!-- container -->
  <div class="font"></div>
  <div class="container">
    <div class="col-md-12">
      <a href="https://www.google.bg/maps/place/%D1%83%D0%BB.+%E2%80%9E%D0%92%D0%B0%D1%81%D0%B8%D0%BB+%D0%9B%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%E2%80%9C+170,+4003+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2/@42.176901,24.7414923,19z/data=!4m5!3m4!1s0x14acd223c431e1f3:0x49b0bd0dcba79efc!8m2!3d42.17696!4d24.741962"> <h4 class="adres">гр. Пловдив 4003,  ул. Васил Левски №170 </h4></a>
      <a href="https://www.facebook.com/eni92.eood/?fref=ts"><img class="facebook" src="img/facebook.ico"></a>
      <h4 class="email">Email: eni92@abv.bg</h4>
      
      <!--contact us form start-->
      
      <!-- Button to trigger modal -->
      <a href="#myModal" role="button" class="btn btn-custom contactForm" data-toggle="modal">Отворете Формата за Връзка с Нас</a>
      <!-- Modal -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Форма за връзка с нас</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="comment">Въпрос или Коментар</label>
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
      </div><!-- End of Modal -->
      <!--contact us form edn-->
    </div>
    <div class="col-md-12"><div class="line"></div></div>
    <div class="col-md-12">
      <div>
        <img class="tel" src="img/tel.png">
      </div>
      <a href="eni92.php"><img class="logo" src="img/logo1.jpg"></a>
    </div>
    <div class="col-md-12 col-centered">
      <div class="navbar navbar-default navbar-top">
        <div class="navbar-header">
          <img class="van-button" src="img/transport.png">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <img class="van" src="img/transport.png">
            <li><a href="eni92.php">НАЧАЛО</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ПРОДУКТИ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="#">ТОНИРАНЕ</a></li>
            <li><a href="#">ПОД НАЕМ</a></li>
            <li><a href="aboutus.php">ЗА НАС</a></li>
            <li><a href="contacts.php">КОНТАКТИ</a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-md-12"><div class="bottom-line"></div></div>
      <div class="col-md-12 tuhli">
        <div class="chetvorka">
          <h3>ТУХЛА ЧЕТВОРКА 3,85 NF</h3>
          <p class="tuhliInfo">Размери (Д х Ш х В) : 250х250х120 mm Плътност в сухо състояние : 800 кг/m3 Тегло усреднено : 5,2 кг Кухинност : 51 % Якост на натиск : 3,8 N/mm2 Топлопреминаване на неизмазан зид : 0,377 W/m.K Традиционен формат за България и най-популярен към настоящия момент. Произвежда се масово под различни търговски наименования при различните производители. Използва се за хоризонтална зидария, понякога в комбинация с формати 1 NF и 1,92 NF.</p>
          <img class="tuhla" src="img/tuhli.jpg">
        </div>
        <div class="edinichka">
          <h3>ТУХЛА ЕДИНИЧНА 1 NF (нормал формат)</h3>
          <p>ТУХЛА ЕДИНИЧНА 1 NF (нормал формат)<br>
            Размери (Д х Ш х В) : 250х120х65 mm<br>
            Плътност в сухо състояние : 1185 кг/m3<br>
            Тегло усреднено : 2 кг<br>
            Кухинност : 32 %<br>
            Якост на натиск : 10.5 N/mm2<br>
            Топлопреминаване на неизмазан зид : 0,65 W/m.K<br>
            Традиционен формат за България. Произвежда се отпреди промените. Използва се за шахти, комини и носещи стени както и често за „връзки” при използването на другите традиционни тухли. Този формат е с висока плътност и малка кухинност.</p>
            <img class="tuhla" src="img/tuhlaedinichka.png">
          </div>
          <h4><b>ЗА ПРОДУКТИ КОИТО НЕ ВИЖДАТЕ В КАТЕГОРИЯТА, МОЛЯ СВЪРЖЕТЕ СЕ С НАС НА ПОСОЧЕНИТЕ ТЕЛЕФОНИ</b></h4>
          
        </div>
        <div class="push"></div>
        <div class="col-md-12 col-centered">
          <div class="footer">
            <span>БЪРЗИ ВРЪЗКИ</span><br>
            <ul class="barziVrazki">
              <li><a href="tuhli.php">ТУХЛИ</a></li>
              <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
              <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
              <li><a href="ytong.php">ИТОНГ</a></li>
            </ul>
            <ul class="barziVrazki">
              <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
              <li><a href="vata.php">ВАТА</a></li>
              <li><a href="profili.php">ПРОФИЛИ</a></li>
              <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
            </ul>
            <ul class="barziVrazki">
              <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
              <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
              <li><a href="mreji.php">МРЕЖИ</a></li>
              <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
            </ul>
            <ul class="barziVrazki">
              <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
              <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
              <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
              <li><a href="#.php">СУХИ СМЕСИ</a></li>
            </ul><br><br>
            <span>Всички права запазени</span>
            <span class="mitashki">Created by <a href="https://www.facebook.com/profile.php?id=100000686533887">Mitashki</a> &copy;</span>
          </div>
        </div>
      </div>
      <!--back to top start-->
      <a href="#" class="back-to-top">Обратно горе</a>
      <script type="text/javascript">
        $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
        var amountScrolled = 200;
        $(window).scroll(function() {
          if ( $(window).scrollTop() > amountScrolled ) {
            $('a.back-to-top').fadeIn('slow');
          } else {
            $('a.back-to-top').fadeOut('slow');
          }
        });
        $('a.back-to-top').click(function() {
          $('html, body').animate({
            scrollTop: 0
          }, 700);
          return false;
        });
      </script>
      <!--back to top end-->
      <!-- container -->
    </body>
    </html><!DOCTYPE html>
<html>
<head>
  <title>Ени-92</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
  <style type="text/css">
    body {
      background-image: url('img/font.jpg');
      margin: 0;
      padding: 0;
      height: 0;
    }
    .logo {
      width: 50%;
      margin-top: 2%;
      margin-bottom: 2%;
    }
    .line {
      height: 2px;
      background-color: red;
    }
    .bottom-line {
      height: 2px;
      background-color: red;
    }
    .tel {
      width: 40%;
      float: right;
    }
    h4 {
      color: red;
      display: inline-block;
    }
    @media screen and (max-width: 600px) {
      .adres, .email { font-size: 20px;}
    }
    @media screen and (max-width: 600px) {
      .email { font-size: 15px;}
    }
    @media screen and (max-width: 500px) {
      .adres, .email { font-size: 15px;}
    }
    .navbar {
      background-color: #c1c1c1;
    }
    .navbar-nav {
      width: 100%;
      text-align: center;
      background: #c1c1c1;
    }
    .navbar-nav>li {
      float: initial;
      line-height: 150px;
    }
    .nav>li {
      display:inline-block;
    }
    .van {
      width: 20%;
      float: left;
    }
    .van-button {
      width: 20%;
      float: left;
    }
    .facebook {
      width: 5%;
      margin: 0 2%;
    }
    @media screen and (max-width: 500px) {
      .facebook { width: 10%;}
    }
    @media screen and (max-width: 780px) {
      .van { display: none;}
    }
    @media screen and (min-width: 780px) {
      .van-button { display: none;}
    }
    @media screen and (max-width: 760px) {
      .van-button { width: 40%;}
    }
    /*CATEGORY END*/
    /*footer start*/
    .footer, .push {
      min-height: 4em;
      margin: 0 auto;
      margin-bottom: 1%;
      border-radius: 10px;
    }
    .footer {
      padding: 2% 2% 2% 2%;
      color: #F2DBA5;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+45,6d0019+76,6d0019+79 */
      background: rgb(169,3,41); /* Old browsers */
      background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 45%, rgba(109,0,25,1) 76%, rgba(109,0,25,1) 79%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    }
    .barziVrazki > li > a {
      color: #F2DBA5;
    }
    /*fuuter end*/
    .mitashki {
      margin-left: 10%;
    }
    .input-group[class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }
    .contactForm {
      background-color: #5B74A9;
      color: white;
      margin: 1%;
      margin-left: 10%;
    }
    @media screen and (max-width: 500px) {
      .contactForm { margin: 0 auto; font-size: 11px;}
    }
    .contactForm:hover {
      background-color: white;
      color: #5B74A9;
      border: 1px solid #5B74A9;
    }
    .modal-title {
      color: #5B74A9;
    }
    .vata {
      background-color: white;
      margin: 1% 0;
      box-shadow: 25px 0px 25px -25px rgba(0,0,0,0.45), -25px 0px 25px -25px rgba(0,0,0,0.45);
    }
    .vataEkorol {
      width: 20%;
      float: right;
    }
    .inportant {
      color: red;
    }
    .dropdown-menu > li {
      background-color: white;
      text-align: left;
    }
    .barziVrazki {
      display: inline-block;
    }
    a.back-to-top {
      display: none;
      width: 50px;
      height: 50px;
      text-indent: -9999px;
      position: fixed;
      z-index: 999;
      right: 2%;
      bottom: 2%;
      background: #27AE61 url("img/top.png") no-repeat center ;
      background-size: 100%;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      opacity: 0.3;
      outline: 0;
    }
    a.back-to-top:hover {
      opacity: 1;
    }
  </style>
</head>
<body>
  <?php include('send_form_email.php') ?>
  <!-- container -->
  <div class="font"></div>
  <div class="container">
    <div class="col-md-12">
      <a href="https://www.google.bg/maps/place/%D1%83%D0%BB.+%E2%80%9E%D0%92%D0%B0%D1%81%D0%B8%D0%BB+%D0%9B%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%E2%80%9C+170,+4003+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2/@42.176901,24.7414923,19z/data=!4m5!3m4!1s0x14acd223c431e1f3:0x49b0bd0dcba79efc!8m2!3d42.17696!4d24.741962"> <h4 class="adres">гр. Пловдив 4003,  ул. Васил Левски №170 </h4></a>
      <a href="https://www.facebook.com/eni92.eood/?fref=ts"><img class="facebook" src="img/facebook.ico"></a>
      <h4 class="email">Email: eni92@abv.bg</h4>
      <!--contact us form start-->
      <!-- Button to trigger modal -->
      <a href="#myModal" role="button" class="btn btn-custom contactForm" data-toggle="modal">Отворете Формата за Връзка с Нас</a>
      <!-- Modal -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Форма за връзка с нас</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="comment">Въпрос или Коментар</label>
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
      </div><!-- End of Modal -->
      <!--contact us form edn-->
    </div>
    <div class="col-md-12"><div class="line"></div></div>
    <div class="col-md-12">
      <div>
        <img class="tel" src="img/tel.png">
      </div>
      <a href="eni92.php"><img class="logo" src="img/logo1.jpg"></a>
    </div>
    <div class="col-md-12 col-centered">
      <div class="navbar navbar-default navbar-top">
        <div class="navbar-header">
          <img class="van-button" src="img/transport.png">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <img class="van" src="img/transport.png">
            <li><a href="eni92.php">НАЧАЛО</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ПРОДУКТИ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="#">ТОНИРАНЕ</a></li>
            <li><a href="#">ПОД НАЕМ</a></li>
            <li><a href="aboutus.php">ЗА НАС</a></li>
            <li><a href="contacts.php">КОНТАКТИ</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-12"><div class="bottom-line"></div></div>
      <div class="col-md-12 vata">
        <div class="ekorol">
          <img class="vataEkorol" src="img/vata.jpg">
          <h4><b>СТЪКЛЕНА МИНЕРАЛНА ВАТА EKOROLL M КНАУФ 50мм</b></h4><br>
          <ul>
            <li>дължина мм.  7500</li>
            <li>ширина мм.  600</li>
            <li>дебелина мм.  50</li>
            <li>бр. в опаковка  5</li>
            <li>м2 в опаковка  18</li>
            <li>бр. в шалет  50</li>
            <li>топлопроводимост W/mk  0,044</li>
          </ul><br><br>
        </div>
        <p class="inportant"><b>* За различни видове вата, моля свържете се с нас на посочените телефони:<br>
          0887610888<br>
          0882068779<br>
          0888528471<br></b>
        </p>
        <div class="opisanie">
          <h4><b>ОПИСАНИЕ</b></h4><br><br>
          <p><b>Стъклена вата Knauf Insulation Ekoroll - 50мм.</b><br>
            Минерална вата произведена по ECOSE® Technology от стъклени влакна, доставя се на ролки.<br>
            дебелина на ватата: 50 мм.<br>
            коефициент на топлопроводимост: 0,044 W/mK <br>
            клас на горимост: А1<br>
            площ на ролката 18 м2. <br> <br>
            Стъклената минерална вата Кнауф Инсулейшън Екорол. Универсален изолационен материал с общо приложение. Възможна употреба - тавани и софити, скатни покриви, вътрешни стени.<br> <br>
            <b>Стъклената вата Ekoroll</b> е предназначена за използване като топлинна и акустична изолация в конструкции на скатни покриви, като изолация между ребрата на гредореда и под ребрата. Особено се препоръчва да се използват при топли покриви като междуребрен пласт с дебелина минимум 15 сантиметра в съчетание с Ekoboard (Екоборд), който се полага като втори изолационен пласт под ребрата на гредореда с минимална дебелина 5 сантиметра.<br> <br>
            Друго възможно приложение е при хоризонталните конструкции, където изолационният материал не е изложен на натоварване (например гъсто ребрени дървени етажни плочи; скелетно-ригелни конструкции) или пък в конструкции на преградни и щендерни стени.<br> <br>
            Над помещенията с високо налягане на водна пара (например с повишена температура или висока относителна влажност) трябва да се използва пароизолационно фолио, което предпазва изолационния материал от трайно овлажняване.<br> <br>
            <b>Предимства на стъклената вата Екорол:</b><br>
            • Добри топлоизолационни и акустични свойства<br>
            • Негорим материал<br>
            • Устойчива форма<br>
            • Удобен и лесен монтаж<br>
            • Компресирана опаковка - осигурява удобно транспортиране<br>
            • Хидрофобен материал<br> <br>
            <b>Ползи в резултат от ECOSE® Technology:</b><br>
            - по-мека на допир вата<br>
            - отделя по-малко прах<br>
            - без мирис<br>
            - лесна за рязане<br><br>
            Ekoroll (Екоролка) е компресиран и опакован в ролки. Предпазната опаковка е маркирана с логото на производителя и с етикет на продукта, който съдържа основни технически параметри на изделието, с описание на препоръчителния основен начин на употреба.<br> <br>
            <b>Knauf Insulation минерална вата с ECOSE® Technology</b> произведена е от намиращи се в природата и/или рециклирани суровини, използвайки технологии основани на биоматериали, без формалдехиди, феноли, акрили и без допълнителни изкуствени цветове и багрила.<br> <br>
            Топлоизолационните качества, негоримостта, класа на противопожарна устойчивост, звукоизолационните характеристики, звукопоглъщането и механичните характеристики, а също така и количеството рециклиран материал са запазени, като е подобрена и годността на продукта.<br> </p>
          </div>
          <h4><b>ЗА ПРОДУКТИ КОИТО НЕ ВИЖДАТЕ В КАТЕГОРИЯТА, МОЛЯ СВЪРЖЕТЕ СЕ С НАС НА ПОСОЧЕНИТЕ ТЕЛЕФОНИ</b></h4>
        </div>
        <div class="push"></div>
        <div class="col-md-12 col-centered">
          <div class="footer">
            <span>БЪРЗИ ВРЪЗКИ</span><br>
            <ul class="barziVrazki">
              <li><a href="tuhli.php">ТУХЛИ</a></li>
              <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
              <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
              <li><a href="ytong.php">ИТОНГ</a></li>
            </ul>
            <ul class="barziVrazki">
              <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
              <li><a href="vata.php">ВАТА</a></li>
              <li><a href="profili.php">ПРОФИЛИ</a></li>
              <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
            </ul>
            <ul class="barziVrazki">
              <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
              <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
              <li><a href="mreji.php">МРЕЖИ</a></li>
              <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
            </ul>
            <ul class="barziVrazki">
              <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
              <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
              <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
              <li><a href="#.php">СУХИ СМЕСИ</a></li>
            </ul><br><br>
            <span>Всички права запазени</span>
            <span class="mitashki">Created by <a href="https://www.facebook.com/profile.php?id=100000686533887">Mitashki</a> &copy;</span>
          </div>
        </div>
      </div>
      <!--back to top start-->
      <a href="#" class="back-to-top">Обратно горе</a>
      <script type="text/javascript">
        $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
        var amountScrolled = 200;
        $(window).scroll(function() {
          if ( $(window).scrollTop() > amountScrolled ) {
            $('a.back-to-top').fadeIn('slow');
          } else {
            $('a.back-to-top').fadeOut('slow');
          }
        });
        $('a.back-to-top').click(function() {
          $('html, body').animate({
            scrollTop: 0
          }, 700);
          return false;
        });
      </script>
      <!--back to top end-->
      <!-- container -->
    </body>
    </html><!DOCTYPE html>
<html>
<head>
  <title>Ени-92</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
  <style type="text/css">
    body {
      background-image: url('img/font.jpg');
      margin: 0;
      padding: 0;
      height: 0;
    }
    .logo {
      width: 50%;
      margin-top: 2%;
      margin-bottom: 2%;
    }
    .line {
      height: 2px;
      background-color: red;
    }
    .bottom-line {
      height: 2px;
      background-color: red;
    }
    .tel {
      width: 40%;
      float: right;
    }
    h4 {
      color: red;
      display: inline-block;
    }
    @media screen and (max-width: 600px) {
      .adres, .email { font-size: 20px;}
    }
    @media screen and (max-width: 600px) {
      .email { font-size: 15px;}
    }
    @media screen and (max-width: 500px) {
      .adres, .email { font-size: 15px;}
    }
    .navbar {
      background-color: #c1c1c1;
    }
    .navbar-nav {
      width: 100%;
      text-align: center;
      background: #c1c1c1;
    }
    .navbar-nav>li {
      float: initial;
      line-height: 150px;
    }
    .nav>li {
      display:inline-block;
    }
    .van {
      width: 20%;
      float: left;
    }
    .van-button {
      width: 20%;
      float: left;
    }
    .facebook {
      width: 5%;
      margin: 0 2%;
    }
    @media screen and (max-width: 500px) {
      .facebook { width: 10%;}
    }
    @media screen and (max-width: 780px) {
      .van { display: none;}
    }
    @media screen and (min-width: 780px) {
      .van-button { display: none;}
    }
    @media screen and (max-width: 760px) {
      .van-button { width: 40%;}
    }
    /*CATEGORY END*/
    /*footer start*/
    .footer, .push {
      min-height: 4em;
      margin: 0 auto;
      margin-bottom: 1%;
      border-radius: 10px;
    }
    .footer {
      padding: 2% 2% 2% 2%;
      color: #F2DBA5;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+45,6d0019+76,6d0019+79 */
      background: rgb(169,3,41); /* Old browsers */
      background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 45%, rgba(109,0,25,1) 76%, rgba(109,0,25,1) 79%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 45%,rgba(109,0,25,1) 76%,rgba(109,0,25,1) 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    }
    .barziVrazki > li > a {
      color: #F2DBA5;
    }
    /*fuuter end*/
    .mitashki {
      margin-left: 10%;
    }
    .input-group[class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }
    .contactForm {
      background-color: #5B74A9;
      color: white;
      margin: 1%;
      margin-left: 10%;
    }
    @media screen and (max-width: 500px) {
      .contactForm { margin: 0 auto; font-size: 11px;}
    }
    .contactForm:hover {
      background-color: white;
      color: #5B74A9;
      border: 1px solid #5B74A9;
    }
    .modal-title {
      color: #5B74A9;
    }
    .ytong {
      background-color: white;
      margin: 1%;
      padding: 1%;
      box-shadow: 25px 0px 25px -25px rgba(0,0,0,0.45), -25px 0px 25px -25px rgba(0,0,0,0.45);
    }
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    tr:nth-child(even) {
      background-color: #dddddd;
    }
    p.opisanie {
      border-bottom: 1px solid red;
    }
    .dropdown-menu > li {
      background-color: white;
      text-align: left;
    }
    .barziVrazki {
      display: inline-block;
    }
    a.back-to-top {
      display: none;
      width: 50px;
      height: 50px;
      text-indent: -9999px;
      position: fixed;
      z-index: 999;
      right: 2%;
      bottom: 2%;
      background: #27AE61 url("img/top.png") no-repeat center ;
      background-size: 100%;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      opacity: 0.3;
      outline: 0
    }
    a.back-to-top:hover {
      opacity: 1;
    }
    table {
      overflow-x: auto;
      display: block;
    }
  </style>
</head>
<body>
  <?php include('send_form_email.php') ?>
  <!-- container -->
  <div class="font"></div>
  <div class="container">
    <div class="col-md-12">
      <a href="https://www.google.bg/maps/place/%D1%83%D0%BB.+%E2%80%9E%D0%92%D0%B0%D1%81%D0%B8%D0%BB+%D0%9B%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%E2%80%9C+170,+4003+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2/@42.176901,24.7414923,19z/data=!4m5!3m4!1s0x14acd223c431e1f3:0x49b0bd0dcba79efc!8m2!3d42.17696!4d24.741962"> <h4 class="adres">гр. Пловдив 4003,  ул. Васил Левски №170 </h4></a>
      <a href="https://www.facebook.com/eni92.eood/?fref=ts"><img class="facebook" src="img/facebook.ico"></a>
      <h4 class="email">Email: eni92@abv.bg</h4>
      <!--contact us form start-->
      <!-- Button to trigger modal -->
      <a href="#myModal" role="button" class="btn btn-custom contactForm" data-toggle="modal">Отворете Формата за Връзка с Нас</a>
      <!-- Modal -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Форма за връзка с нас</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                <div class="form-group">
                  <label class="control-label col-md-4" for="first_name">Име</label>
                  <div class="col-md-6">
                    <input type="text" required="" class="form-control" id="first_name" name="first_name" placeholder="Име"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="last_name">Фамилия</label>
                  <div class="col-md-6">
                    <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Фамилия"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="email">Email Адрес</label>
                  <div class="col-md-6 input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" required class="form-control" id="email" name="email" placeholder="Email Адрес"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4" for="comment">Въпрос или Коментар</label>
                  <div class="col-md-6">
                    <textarea rows="6" required class="form-control" id="comments" name="comments" placeholder="Напишете Вашия въпрос или коментар тук"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button type="submit" value="Submit" class="btn btn-custom pull-right">Изпрати</button>
                  </div>
                </div>
              </form>
            </div><!-- End of Modal body -->
          </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
      </div><!-- End of Modal -->
      <!--contact us form edn-->
    </div>
    <div class="col-md-12"><div class="line"></div></div>
    <div class="col-md-12">
      <div>
        <img class="tel" src="img/tel.png">
      </div>
      <a href="eni92.php"><img class="logo" src="img/logo1.jpg"></a>
    </div>
    <div class="col-md-12 col-centered">
      <div class="navbar navbar-default navbar-top">
        <div class="navbar-header">
          <img class="van-button" src="img/transport.png">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <img class="van" src="img/transport.png">
            <li><a href="eni92.php">НАЧАЛО</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ПРОДУКТИ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tuhli.php">ТУХЛИ</a></li>
                <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
                <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
                <li><a href="ytong.php">ИТОНГ</a></li>
                <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
                <li><a href="vata.php">ВАТА</a></li>
                <li><a href="profili.php">ПРОФИЛИ</a></li>
                <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
                <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
                <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
                <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
                <li><a href="mreji.php">МРЕЖИ</a></li>
                <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="#.php">СУХИ СМЕСИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="#">ТОНИРАНЕ</a></li>
            <li><a href="#">ПОД НАЕМ</a></li>
            <li><a href="aboutus.php">ЗА НАС</a></li>
            <li><a href="contacts.php">КОНТАКТИ</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-12"><div class="bottom-line"></div></div>
      <div class="col-md-12 ytong">
        <h4><b>ИТОНГ</b></h4><br><br>
        <table>
          <tr>
            <th>ШИРИНА</th>
            <th>50 ММ</th>
            <th>75 ММ</th>
            <th>100 ММ</th>
            <th>125 ММ</th>
            <th>150 ММ</th>
            <th>175 ММ</th>
            <th>200 ММ</th>
            <th>250 ММ</th>
          </tr>
          <tr>
            <td>ДЪЛЖИНА ММ</td>
            <td>600</td>
            <td>600</td>
            <td>600</td>
            <td>600</td>
            <td>600</td>
            <td>600</td>
            <td>600</td>
            <td>600</td>
          </tr>
          <tr>
            <td>ВИСОЧИНА ММ</td>
            <td>250</td>
            <td>250</td>
            <td>250</td>
            <td>250</td>
            <td>250</td>
            <td>250</td>
            <td>250</td>
            <td>250</td>
          </tr>
          <tr>
            <td>обемно тегло кг/м3</td>
            <td>440</td>
            <td>440</td>
            <td>440</td>
            <td>440</td>
            <td>440</td>
            <td>440</td>
            <td>440</td>
            <td>440</td>
          </tr>
          <tr>
            <td>бр. в палет</td>
            <td>156+12</td>
            <td>102+12</td>
            <td>90</td>
            <td>72</td>
            <td>60</td>
            <td>48</td>
            <td>42</td>
            <td>36</td>
          </tr>
          <tr>
            <td>топлопроводимост W/mk</td>
            <td>0,12</td>
            <td>0,12</td>
            <td>0,12</td>
            <td>0,12</td>
            <td>0,12</td>
            <td>0,12</td>
            <td>0,12</td>
            <td>0,12</td>
          </tr>
          <tr>
            <td>якост на натиск N/mm2</td>
            <td>2,5</td>
            <td>2,5</td>
            <td>2,5</td>
            <td>2,5</td>
            <td>2,5</td>
            <td>2,5</td>
            <td>2,5</td>
            <td>2,5</td>
          </tr>
        </table>
        <h3>ОПИСАНИЕ И ХАРАКТЕРИСТИКИ</h3>
        <p class="opisanie"><h4><b>50 мм</b></h4><br>
          <b>Газобетонен блок Ytong с дебелина 50 мм</b>.<br>
          В един палет има 156 бр. с дебелина 50 мм. и 12 бр. с дебелина 100 мм.
          Основните размери на блокчетата са дължина 600 mm и височина 250 mm. Тези размери са еднакви за всички произвеждани блокчета. Променлива е само тяхната дебелина в границите между 50 и 350 mm. За изграждането на 1 m2 зидария винаги са необходими 6,67 блокчета, независимо от дебелината. <br>
          Дебелините 50, 75 и 100 mm се използват за облицоване на съществуващи или новоизграждани зидове, с цел повишаване на топлоизолационната им способност.<br><br>
          <b>B 2,5 / D 440 — За неносещи стени;</b> <br>
          Декларирана якост 2,5 МРа; Декларирана плътност 440 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,13 W/mK<br><br>
          <b>B 5,0 / D 600 — За носещи стени и зидани противоземетръсни шайби;</b> <br>
          Декларирана 5,0 МРа; Декларирана плътност 600 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,16 W/mK
        </p>
        <p class="opisanie">
          <h4><b>75 мм</b></h4><br>
          <b>Газобетонен блок Ytong с дебелина 75 мм.</b><br>
          В един палет има 102 бр. с дебелина 75 мм. и 12 бр. с дебелина 100 мм. <br>
          Основните размери на блокчетата са дължина 600 mm и височина 250 mm. Тези размери са еднакви за всички произвеждани блокчета. Променлива е само тяхната дебелина в границите между 50 и 350 mm. За изграждането на 1 m2 зидария винаги са необходими 6,67 блокчета, независимо от дебелината. <br>
          Дебелините 50, 75 и 100 mm се използват за облицоване на съществуващи или новоизграждани зидове, с цел повишаване на топлоизолационната им способност.<br><br>
          <b>B 2,5 / D 440 — За неносещи стени;</b> <br>
          Декларирана якост 2,5 МРа; Декларирана плътност 440 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,13 W/mK<br><br>
          <b>B 5,0 / D 600 — За носещи стени и зидани противоземетръсни шайби;</b> <br>
          Декларирана 5,0 МРа; Декларирана плътност 600 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,16 W/mK
        </p>
        <p class="opisanie">
          <h4><b>100 мм</b></h4><br>
          <b>Газобетонен блок Ytong с дебелина 100 мм.</b><br>
          Блокчетата с дебелина от 100 до 250 mm са подходящи за преградни стени - в самите жилища или между отделните жилищни единици.<br>
          Основните размери на блокчетата са дължина 600 mm и височина 250 mm. Тези размери са еднакви за всички произвеждани блокчета. Променлива е само тяхната дебелина в границите между 50 и 350 mm. За изграждането на 1 m2 зидария винаги са необходими 6,67 блокчета, независимо от дебелината.<br><br>
          <b>B 2,5 / D 440 — За неносещи стени;</b> <br>
          Декларирана якост 2,5 МРа; Декларирана плътност 440 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,13 W/mK<br><br>
          <b>B 5,0 / D 600 — За носещи стени и зидани противоземетръсни шайби;</b> <br>
          Декларирана 5,0 МРа; Декларирана плътност 600 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,16 W/mK<br><br>
          <b>B 5,0 / D 700 — За стени с повишена звукоизолационна способност;</b> <br>
          Декларирана 5,0 МРа; Декларирана плътност 700 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,18 W/mK<br>
        </p>
        <p class="opisanie">
          <h4><b>125 мм</b></h4><br>
          <b>Газобетонен блок Ytong с дебелина 125 мм.</b><br>
          Блокчетата с дебелина от 100 до 250 mm са подходящи за преградни стени - в самите жилища или между отделните жилищни единици.<br>
          Основните размери на блокчетата са дължина 600 mm и височина 250 mm. Тези размери са еднакви за всички произвеждани блокчета. Променлива е само тяхната дебелина в границите между 50 и 350 mm. За изграждането на 1 m2 зидария винаги са необходими 6,67 блокчета, независимо от дебелината.<br><br>
          <b>B 2,5 / D 440 — За неносещи стени;</b> <br>
          Декларирана якост 2,5 МРа; Декларирана плътност 440 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,13 W/mK<br><br>
          <b>B 5,0 / D 600 — За носещи стени и зидани противоземетръсни шайби;</b> <br>
          Декларирана 5,0 МРа; Декларирана плътност 600 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,16 W/mK<br><br>
          <b>B 5,0 / D 700 — За стени с повишена звукоизолационна способност;</b> <br>
          Декларирана 5,0 МРа; Декларирана плътност 700 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,18 W/mK
        </p>
        <p class="opisanie">
          <h4><b>150 мм</b></h4><br>
          <b>Газобетонен блок Ytong с дебелина 150 мм.</b><br>
          Блокчетата с дебелина от 100 до 250 mm са подходящи за преградни стени - в самите жилища или между отделните жилищни единици.<br>
          Основните размери на блокчетата са дължина 600 mm и височина 250 mm. Тези размери са еднакви за всички произвеждани блокчета. Променлива е само тяхната дебелина в границите между 50 и 350 mm. За изграждането на 1 m2 зидария винаги са необходими 6,67 блокчета, независимо от дебелината.<br><br>
          <b>B 2,5 / D 440 — За неносещи стени;</b> <br>
          Декларирана якост 2,5 МРа; Декларирана плътност 440 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,13 W/mK<br><br>
          <b>B 5,0 / D 600 — За носещи стени и зидани противоземетръсни шайби;</b> <br>
          Декларирана 5,0 МРа; Декларирана плътност 600 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,16 W/mK<br><br>
          <b>B 5,0 / D 700 — За стени с повишена звукоизолационна способност;</b> <br>
          Декларирана 5,0 МРа; Декларирана плътност 700 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,18 W/mK
        </p>
        <p class="opisanie">
          <h4><b>175 мм</b></h4><br>
          <b>Газобетонен блок Ytong с дебелина 175 мм.</b><br>
          Блокчетата с дебелина от 100 до 250 mm са подходящи за преградни стени - в самите жилища или между отделните жилищни единици.<br>
          Основните размери на блокчетата са дължина 600 mm и височина 250 mm. Тези размери са еднакви за всички произвеждани блокчета. Променлива е само тяхната дебелина в границите между 50 и 350 mm. За изграждането на 1 m2 зидария винаги са необходими 6,67 блокчета, независимо от дебелината.<br><br>
          <b>B 2,5 / D 440 — За неносещи стени;</b> <br>
          Декларирана якост 2,5 МРа; Декларирана плътност 440 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,13 W/mK<br><br>
          <b>B 5,0 / D 600 — За носещи стени и зидани противоземетръсни шайби;</b> <br>
          Декларирана 5,0 МРа; Декларирана плътност 600 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,16 W/mK<br><br>
          <b>B 5,0 / D 700 — За стени с повишена звукоизолационна способност;</b><br>
          Декларирана 5,0 МРа; Декларирана плътност 700 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,18 W/mK
        </p>
        <p class="opisanie">
          <h4><b>200 мм</b></h4><br>
          <b>Газобетонен блок Ytong с дебелина 200 мм.</b><br>
          Блокчетата с дебелина от 100 до 250 mm са подходящи за преградни стени - в самите жилища или между отделните жилищни единици.<br>
          Основните размери на блокчетата са дължина 600 mm и височина 250 mm. Тези размери са еднакви за всички произвеждани блокчета. Променлива е само тяхната дебелина в границите между 50 и 350 mm. За изграждането на 1 m2 зидария винаги са необходими 6,67 блокчета, независимо от дебелината.<br><br>
          <b>B 2,5 / D 440 — За неносещи стени;</b> <br>
          Декларирана якост 2,5 МРа; Декларирана плътност 440 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,13 W/mK<br><br>
          <b>B 5,0 / D 600 — За носещи стени и зидани противоземетръсни шайби;</b> <br>
          Декларирана 5,0 МРа; Декларирана плътност 600 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,16 W/mK<br><br>
          <b>B 5,0 / D 700 — За стени с повишена звукоизолационна способност;</b> <br>
          Декларирана 5,0 МРа; Декларирана плътност 700 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,18 W/mK
        </p>
        <p class="opisanie">
          <h4><b>250 мм</b></h4><br>
          <b>Газобетонен блок Ytong с дебелина 250 мм.</b><br>
          Размерите 200, 250, 300 и 350 mm се използват за изграждане на външни стени. 200 и 250 mm са подходящи за неотопляеми или сезонно обитавани сгради, в това число и сгради със селскостопанско предназначение.<br>
          Основните размери на блокчетата са дължина 600 mm и височина 250 mm. Тези размери са еднакви за всички произвеждани блокчета. Променлива е само тяхната дебелина в границите между 50 и 350 mm. За изграждането на 1 m2 зидария винаги са необходими 6,67 блокчета, независимо от дебелината.<br><br>
          <b>B 2,0 / D 350 — За неносещи стени на нискоенергийни и пасивни сгради;</b> <br>
          Декларирана якост 2,0 МРа; Декларирана плътност 350 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,09 W/mK<br><br>
          <b>B 2,5 / D 390 — За неносещи стени на енергоефективни сгради;</b> <br>
          Декларирана якост 2,5 МРа; Декларирана плътност 390 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,11 W/mK<br><br>
          <b>B 2,5 / D 440 — За неносещи стени;</b> <br>
          Декларирана якост 2,5 МРа; Декларирана плътност 440 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,13 W/mK<br><br>
          <b>B 5,0 / D 600 — За носещи стени и зидани противоземетръсни шайби;</b> <br>
          Декларирана 5,0 МРа; Декларирана плътност 600 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,16 W/mK<br><br>
          <b>B 5,0 / D 700 — За стени с повишена звукоизолационна способност;</b> <br>
          Декларирана 5,0 МРа; Декларирана плътност 700 kg/м³ <br>
          Коеф. на топлопроводност λ10 сухо = 0,18 W/mK
        </p>
        <h4><b>ЗА ПРОДУКТИ КОИТО НЕ ВИЖДАТЕ В КАТЕГОРИЯТА, МОЛЯ СВЪРЖЕТЕ СЕ С НАС НА ПОСОЧЕНИТЕ ТЕЛЕФОНИ</b></h4>
      </div>
      <div class="push"></div>
      <div class="col-md-12 col-centered">
        <div class="footer">
          <span>БЪРЗИ ВРЪЗКИ</span><br>
          <ul class="barziVrazki">
            <li><a href="tuhli.php">ТУХЛИ</a></li>
            <li><a href="betonoviizdeliq.php">БЕТОНОВИ ИЗДЕЛИЯ</a></li>
            <li><a href="keremidi.php">КЕРЕМИДИ</a></li>
            <li><a href="ytong.php">ИТОНГ</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="izolaciq.php">ИЗОЛАЦИИ</a></li>
            <li><a href="vata.php">ВАТА</a></li>
            <li><a href="profili.php">ПРОФИЛИ</a></li>
            <li><a href="gipsokarton.php">ГИПСОКАРТОН</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="okachentavan.php">ОКАЧЕН ТАВАН</a></li>
            <li><a href="mazilkiiboi.php">МАЗИЛКИ И БОИ</a></li>
            <li><a href="mreji.php">МРЕЖИ</a></li>
            <li><a href="#.php">ХИДРОИЗОЛАЦИЯ</a></li>
          </ul>
          <ul class="barziVrazki">
            <li><a href="#.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
            <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
            <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
            <li><a href="#.php">СУХИ СМЕСИ</a></li>
            <li><a href="ploskosti.php">ПЛОСКОСТИ</a></li>
                <li><a href="agli.php">ЪГЛИ</a></li>
          </ul><br><br>
          <span>Всички права запазени</span>
          <span class="mitashki">Created by <a href="https://www.facebook.com/profile.php?id=100000686533887">Mitashki</a> &copy;</span>
        </div>
      </div>
    </div>
    <!--back to top start-->
    <a href="#" class="back-to-top">Обратно горе</a>
    <script type="text/javascript">
      $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
      var amountScrolled = 200;
      $(window).scroll(function() {
        if ( $(window).scrollTop() > amountScrolled ) {
          $('a.back-to-top').fadeIn('slow');
        } else {
          $('a.back-to-top').fadeOut('slow');
        }
      });
      $('a.back-to-top').click(function() {
        $('html, body').animate({
          scrollTop: 0
        }, 700);
        return false;
      });
    </script>
    <!--back to top end-->
    <!-- container -->
  </body>
  </html>