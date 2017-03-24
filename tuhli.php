<!DOCTYPE html>
<html>
<head>
  <title>Ени-92 ТУХЛИ</title>
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
    .tuhli {
      background-color: white;
      margin: 1% 0;
      box-shadow: 25px 0px 25px -25px rgba(0,0,0,0.45), -25px 0px 25px -25px rgba(0,0,0,0.45);
      
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
      <div class="col-md-12 tuhli">
        <div class="chetvorka">
          <h3>ТУХЛА 6 NF</h3>
          <p class="tuhliInfo">Нетрадиционен формат за България. Може да се използва както за хоризонтална така и за вертикална зидария. При този формат интересното, е че може да се прилага при дебелина на зида както 19 така и 25 см. Широко разпространен в съседните на България държави. Набира популярност поради широкото си приложение.</p>
          <ul>
            <li>Размери (Д х Ш х В) : 240х245х195 mm</li>
            <li>Плътност в сухо състояние : 850 кг/m3</li>
            <li>Тегло усреднено : 9 кг</li>
            <li>Кухинност : 52 %</li>
            <li>Якост на натиск : 4,2 N/mm2</li>
            <li>Топлопреминаване на неизмазан зид : 0,35 W/m.K</li>
          </ul>
          <img class="tuhla" src="img/tuhla6.png">
        </div>
        <div class="chetvorka">
          <h3>ТУХЛА ЧЕТВОРКА 3,85 NF</h3>
          <p class="tuhliInfo">Размери (Д х Ш х В) : 250х250х120 mm Плътност в сухо състояние : 800 кг/m3 Тегло усреднено : 5,2 кг Кухинност : 51 % Якост на натиск : 3,8 N/mm2 Топлопреминаване на неизмазан зид : 0,377 W/m.K Традиционен формат за България и най-популярен към настоящия момент. Произвежда се масово под различни търговски наименования при различните производители. Използва се за хоризонтална зидария, понякога в комбинация с формати 1 NF и 1,92 NF.</p>
          <img class="tuhla" src="img/tuhli.jpg">
        </div>
        <div class="chetvorka">
          <h3>ТУХЛА ЧЕТВОРКА 3,85 NF</h3>
          <p class="tuhliInfo">Тухлата четворка, формат 3,85 е с размери 250 мм х 250 мм х 120 мм<br>Подходяща е за носещи вътрешни и външни стени, за обикновена измазана и защитена зидария.</p>
          <img class="tuhla" src="img/chetvorkabutovo.png">
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
          <div class="edinichka">
          <h3>Тухли единички</h3>
          <p>Глинени единични тухли с размери 250 мм х 120 мм х 65 мм.<br>Единичните тухли са подходящи за външни и вътрешни стени, обикновена и измазана зидария. Използват се и като лицеви, облицовъчни тухли.</p>
          <ul>
            <li><b>Произвеждат се два вида единични тухли :</b></li>
            <li>обикновена решетка;</li>
            <li>единична тухла 3 отвора всеки с диаметър 40 мм.;</li>
          </ul>
            <img class="tuhla" src="img/triotvora.jpg">
          </div>
          <div class="edinichka">
          <h3>ТУХЛА ЕДИНИЧНА ПЛЪТНА</h3>
          <p>Използват се за зидане на носещи и преградни стени. Подходящи са за декориране на фасади, коминни тела, камини и други. </p>
          <ul>
            <li><b>Технически харектеристики:</b></li>
            <li>Тегло на продукта: 1.8000 kg </li>
            <li>Дължина на продукта: 250.0000 mm </li>
            <li>Широчина на продукта: 120.0000 mm </li>
            <li>Височина на продукта: 60.0000 mm </li>
          </ul>
            <img class="tuhla" src="img/platna.png">
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
              <li><a href="aksesoari.php">АКСЕСОАРИ ЗА СУХО СТРОИТЕЛСТВО</a></li>
              <li><a href="diubeliivintove.php">ДЮБЕЛИ И ВИНТОВЕ</a></li>
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