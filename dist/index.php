<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>کجا بریم</title>
  <link href="./assets/style/bootstrap5-0-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/style/style.css">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
</head>

<body>

  <!--Navbar-->
  <header id="header">
    <div class="topnav" id="myTopnav">
      <a href="./index.php" id="logo" class="logo"><?php echo $login_session; ?></a>
      <?php
      if ($login_session) {
      ?>
      <a href="./logout.php" id="logo" class="logo">خروج</a>
      <?php 
      } 
      ?>

      <a href="./index.php" class="animate">خانه</a>
      <a href="./aboutus.html" class="animate">درباره ما</a>
      <a href="./contactus.html" class="animate">تماس با ما</a>
      <a href="./Irandtourism.html" class="animate">ایران گردی</a>
      <?php
      if(! $login_session) {
      ?>
      <a href="./login.php" class="animate">ورود</a>
      <a href="./register.php" id="active" class="animate">ثبت نام</a>
      <?php
      } 
      ?>
      <a href="#background" class="animate"><input type="text" placeholder="جستجو" class="form-control"></a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="NavBar()">&#9776;</a>
    </div>
  </header>
  <!-- End Navbar-->



  <!--Slider-->
  <div class="container-fluid p-0">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./assets/img/slider3.jpg" class="d-block w-100" alt="...">

        </div>
        <div class="carousel-item">
          <img src="./assets/img/slider.jpg" class="d-block w-100" alt="...">

        </div>
        <div class="carousel-item">
          <img src="./assets/img/slider2.jpg" class="d-block w-100" alt="...">

        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden"></span>
      </button>
    </div>
  </div>
  <!--End Slider-->






  <!--ABOUT MR-->
  <!-- <div class="about_mr">
      <section>
        <img src="https://source.unsplash.com/weekly?user" alt="" class="inline-photo2 show-on-scroll2"> -->
  <!-- <img src="https://source.unsplash.com/weekly?person" alt="" class="inline-photo3 show-on-scroll3"> -->
  <!-- </section> -->
  <!-- <section>
        <span class="line inline-photo3 show-on-scroll3"></span>
        <h1 class="title inline-photo2 show-on-scroll2">Meet <em>Manager Name</em></h1>
        <h3 class="sub-title">Marketer & Event Manager From Country</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. </p>
        <a href="#" class="btn1"><i class="fa fa-instagram"></i> Instagram</a>
      </section> -->
  <!-- </div> --> -->


  <!--LAST SECTION-->
  <!-- <div class="last_section">
      <section>
        <span class="line inline-photo3 show-on-scroll3"></span>
        <h1 class="title inline-photo2 show-on-scroll2">What can we <em>achieve</em> in an event?</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
          et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
          ea commodo consequat. </p>
      </section>
      <section>
        <a href="#" class="btn1">CONTACT US</a>
      </section>
    </div> -->



  <div class="service_cards">
    <div class="title_header">
      <h1 class="title inline-photo2 show-on-scroll2"><?php echo $login_session; ?> عزیز، بهترین مقاصد سفر برای شما</h1>
      <span class="border-shape inline-photo3 show-on-scroll3"></span>

    </div>
    <section>


      <div class="service_card inline-photo show-on-scroll">
        <h4 class="title"><em>تور </em> کیش</h4>
        <p>کیش را می‌توان یکی از مقاصد چهارفصل ایران دانست. در کنار دمای مطلوب در فصل‌های بهار و پاییز و زمستان، هوای
          کیش در تابستان بسیار گرم است. با این وجود حتی در فصل تابستان هم، تور کیش کماکان از پرطرفدارترین تورهای مسافرتی
          به شمار می‌آید. </p>
      </div>
      <div class="service_card inline-photo show-on-scroll">
        <h4 class="title"><em>تور </em> مشهد</h4>
        <p>مشهد شهری است که به واسطه وجود حرم امام رضا (ع)، به گردشگرپذیرترین شهر ایران تبدیل شده و در تمام اوقات سال
          مملو از گردشگران و زائران است. تور مشهد یکی از بهترین راه‌ها برای سفر به این شهر محبوب است. </p>
      </div>
      <div class="service_card inline-photo show-on-scroll">
        <h4 class="title"><em>تور </em> ماسال</h4>
        <p>ماسال، شهر کوچکی در شمال غرب رشت، مرکز استان گیلان است. ییلاق‌های این منطقه با آب و هوایی پاک و بی‌نظیر،
          فضایی بکر و مه‌آلود، آرامش وصف‌نشدنی، آبشارهای بلند و مراتع سرسبز بی‌انتها، فرصت قدم زدن روی ابرها را در
          اختیار شما می‌گذارند. هر سال، مسافران بسیاری برای گذراندن یک تعطیلات آرام و به‌دور از شلوغی شهر، به ییلاقات
          ماسال پناه می‌آورند؛ </p>
      </div>
    </section>
  </div>



  <!--STAT COUNTER-->
  <!-- <div class="stat_counter">
      <div id="projectFacts" class="sectionClass">
        <div class="fullWidth eight columns">
          <div class="projectFactsWrap ">
            <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
              <i class="fa fa-calendar-check-o"></i>
              <p id="number1" class="number">52</p>
              <span></span>
              <p>Events Organised</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="55" style="visibility: visible;">
              <i class="fa fa-smile-o"></i>
              <p id="number2" class="number">50</p>
              <span></span>
              <p>Happy clients</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="359" style="visibility: visible;">
              <i class="fa fa-birthday-cake"></i>
              <p id="number3" class="number">5</p>
              <span></span>
              <p>OnGoing Events</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="246" style="visibility: visible;">
              <i class="fa fa-calendar"></i>
              <p id="number4" class="number">3</p>
              <span></span>
              <p>UpComing Events</p>
            </div>
          </div>
        </div>
      </div>
    </div> -->



  <div class="event_cards">
    <div class="title_header">
      <h4 class="title inline-photo2 show-on-scroll2"><em>آخرین </em>اخبار</h4>
      <span class="border-shape inline-photo3 show-on-scroll3"></shape>
    </div>
    <div class="event_cards_row row d-flex justify-content-center">
      <div class="event_card">
        <img src="./assets/img/chabahr.jpg" alt="" <section>
        <span class="title"> سفر به چابهار
          <span class="sub-title">نویسنده : غزل امیری</span></span>
        </section>
        <p>
          بندر آزاد چابهار یا همان شهر همیشه بهار، به‌دلیل موقعیت خاص جغرافیایی و جاذبه‌های بی‌شمار طبیعی و فرهنگی‌اش،
          به یکی از جذاب‌ترین مقاصد گردشگری تبدیل شده است.
        </p>
        <a href="#" class="btn1">مشاهده بیشتر</a>
      </div>

      <div class="event_card">
        <img src="./assets/img/gheshm.jpg" alt="">
        <section>
          <span class="title">سفر به قشم
            <span class="sub-title">نویسنده : صدیقه شجاعی</span></span>
        </section>
        <p>جزیره‌ی قشم در استان هرمزگان واقع شده و بزرگ‌ترین جزیره‌ی ایران و تنگه‌ی هرمز است. قدمت قشم به دوران ساسانی
          می‌رسد و در جنوب بندرعباس قرار دارد. زبان قشمی‌ها فارسی با گویش بندری است. ساحل پهناور آن شنی و ماسه‌ای یا
          صخره‌ای است. ساحل و جنگل و غار و مرکز خریدهای رنگارنگ قشم، هر گردشگری را خرسند و شادمان می‌کند. خلاصه این‌که
          از هر طرف که نگاه کنید قشم مقصد سفر جذابی است.</p>
        <a href="#" class="btn1">مشاهده بیشتر
        </a>
      </div>

      <div class="event_card">
        <img src="./assets/img/lorestan.jpg" alt="">
        <section>
          <span class="title">
            دیدنی های بروجرد ؛ عروس زاگرس ایران در لرستان
            <span class="sub-title">نویسنده : شیدا خرمشاهی</span></span>
        </section>
        <p>بروجرد دومین شهر پرجمعیت و قطب صنعتی استان لرستان است که در غرب ایران قرار دارد. این شهر به خاطر داشتن طبیعتی
          کوهستانی، مزارع و مراتع سرسبز، آب و هوای مطلوب و جاذبه‌های گردشگری ...</p>
        <a href="#" class="btn1">مشاهده بیشتر</a>
      </div>
    </div>
  </div>











  <!--FOOTER-->
  <footer>
    <div class="middle_section">
      <section>
        <span class="logo"><em>کجا</em> بریم</span>
        <span>
          <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
          <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
        </span>
        <span>
          <a href="#">تماس با ما</a>
          <a href="#">درباره ما</a>
          <a href="#">تخیفیف های ویژه</a>
        </span>
      </section>
    </div>
    <div class="bottom_section">
      <span>Copyright © 2021. All rights reserved</span>
    </div>
  </footer>



  <!--JAVASCRIPT-->
  <script src="./assets/js/jquery.js"></script>
  <script type="text/javascript" src="./assets/js/script.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>

</body>

</html>