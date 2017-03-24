<!DOCTYPE html>
<html>
<head>
  <title>Ени-92 МАЗИЛКИ И БОИ</title>
  <link rel="icon" href="img/e.jpg">
  
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
    input#x_1, input#x_2, input#x_3, input#x_4, input#x_5, input#x_6 {
      margin: 1%;
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