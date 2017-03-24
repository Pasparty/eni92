<!DOCTYPE html>
<html>
<head>
  <title>Ени-92 ВАТА</title>
  <link rel="icon" href="img/e.jpg">
  
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
                <li><a href="hidroizolaciq.php">ХИДРОИЗОЛАЦИЯ</a></li>
                <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
                <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
                <li><a href="suhismesi.php">СУХИ СМЕСИ</a></li>
                <li><a href="ploskosti.php">ПЛОСКОСТИ</a></li>
                <li><a href="agli.php">ЪГЛИ</a></li>
              </ul>
            </li>
            <li><a href="transport.php">ТРАНСПОРТ И ДОСТАВКА</a></li>
            <li><a href="tonirane.php">ТОНИРАНЕ</a></li>
            <li><a href="podnaem.php">ПОД НАЕМ</a></li>
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
              <li><a href="hidroizolaciq.php">ХИДРОИЗОЛАЦИЯ</a></li>
            </ul>
            <ul class="barziVrazki">
              <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
              <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
              <li><a href="pqniisilikoni.php">ПЯНА И СИЛИКОНИ</a></li>
              <li><a href="suhismesi.php">СУХИ СМЕСИ</a></li>
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