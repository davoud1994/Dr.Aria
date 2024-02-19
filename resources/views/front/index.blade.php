<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>اریا دکتر-فروش نرم افزار</title>

    <!-- Favicon -->
    <link rel="icon" href="img/logo.png">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    {{-- <link href="css/font-p.css" rel='stylesheet'> --}}
    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
    <!-- Nice Select CSS -->
    {{-- <link rel="stylesheet" href="css/nice-select.css"> --}}
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- icofont CSS -->
    <link rel="stylesheet" href="css/icofont.css">
    <!-- Slicknav -->
    {{-- <link rel="stylesheet" href="css/slicknav.min.css"> --}}
    <!-- Owl Carousel CSS -->
    {{-- <link rel="stylesheet" href="css/owl-carousel.css"> --}}
    <!-- Datepicker CSS -->
    {{-- <link rel="stylesheet" href="css/datepicker.css"> --}}
    <!-- Animate CSS -->
    {{-- <link rel="stylesheet" href="css/animate.min.css"> --}}
    <!-- Magnific Popup CSS -->
    {{-- <link rel="stylesheet" href="css/magnific-popup.css"> --}}

    <!-- Medipro CSS -->
    {{-- <link rel="stylesheet" href="css/normalize.css"> --}}
    <link rel="stylesheet" href="style.css">
    {{-- <link rel="stylesheet" href="css/responsive.css">  --}}
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer></script> --}}
    @vite('resources/css/app.css')
    <style>
        /* انیمیشن برای مؤثر کردن حرکت به تگ مورد نظر */
        html,
        body {
            scroll-behavior: smooth;
        }

        iframe {
            height: 300px;

        }

        .one {
            border-width: 100px;
            border-style: dashed;
            border-color: rgb(117, 92, 79);
        }

        #main_list_group {
            display: flex;
            flex-direction: row-reverse;
            flex-wrap: wrap;
            margin-bottom: 30px;

        }



        .list-group-item {
            cursor: pointer;
            /* position: relative; */
            /* overflow: hidden; */
            transition: background-color 0.5s ease-in-out, transform 0.5s ease-in-out;
            background-color: #0080ff36;
            /* padding: 30px,30px; */
            border-width: 5px 5px 5px;
        }


        .list-group-item::before {
            /* border-radius: 100px; */
            content: '';
            position: absolute;
            left: 50%;
            top: 10%;
            transform: translateX(50%) scaleX(0);
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 10px 10px 0;
            border-color: transparent transparent transparent transparent;
            transition: transform 0.5s ease-in-out, border-bottom 0.5s ease-in-out;

        }

        .list-group-item.active {

            background-color: #1A76D1 !important;
        }

        .list-group-item.active::before {
            transform: translateX(-50%) scaleX(1);
            border-width: 30px 10px 10px;
            border-bottom-color: rgba(229, 255, 83, 0.623);
            border-radius: 100px;

        }

        .message-container {
            text-align: right;
            background-color: rgb(173, 230, 227);
            margin-top: 10px;
            margin-right: 50px;
            margin-left: 50px;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            flex-direction: row-reverse;
            flex-wrap: wrap;

        }

        .img {
            margin-right: 200px;
            object-fit: contain;
            width: 300px;
            height: 300px;
        }


        .message {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        /* سبک‌های مورد نیاز برای پاپ‌آپ */
        /* سبک‌های پاپ‌آپ */
        .popup {
            display: none;
            position: fixed;
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .popup-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 40px;
            border: 1px solid #888;
            width: 400px;
            text-align: center;
            /* تنظیم متن وسط هدر */
        }

        .form-header {
            margin-bottom: 20px;
            /* فاصله بین هدر و بخش اصلی فرم */
            text-align: center;
            /* تنظیم متن وسط هدر */
            font-size: 20px
        }

        .form-control {
            text-align: right;
            font-family: vazir;
        }

        .close {
            color: #ff0000;
            float: right;
            font-size: 28px;
            font-weight: bold;
            border-style: solid;
            border-color: #016ea8;
            width: 30px;
            height: 30px;

        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* سبک‌های فرم */
        form {
            text-align: right;
        }

        #btn_form {
            margin-right: 300px;
            font-weight: bold;
            font-family: vazir;

        }
    </style>
</head>

<body id='body' dir="auto">

    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>

            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Get Pro Button -->
    <ul class="pro-features">
        {{-- <a class="get-pro" href="#">Get Pro</a> --}}
        <li class="big-title">Pro Version Available on Themeforest</li>
        <li class="title">Pro Version Features</li>
        <li>2+ premade home pages</li>
        <li>20+ html pages</li>
        <li>Color Plate With 12+ Colors</li>
        <li>Sticky Header / Sticky Filters</li>
        <li>Working Contact Form With Google Map</li>
        <div class="button">
            <a href="http://preview.themeforest.net/item/mediplus-medical-and-doctor-html-template/full_screen_preview/26665910?_ga=2.145092285.888558928.1591971968-344530658.1588061879"
                target="_blank" class="btn">Pro Version Demo</a>
            <a href="https://themeforest.net/item/mediplus-medical-and-doctor-html-template/26665910" target="_blank"
                class="btn">Buy Pro Version</a>
        </div>
    </ul>

    <!-- Header Area -->
    <header class="header">
        <!-- Topbar -->
        <div class="topbar" id='main-topbar'>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-12">
                        <!-- Contact -->
                        <ul class="top-link">
                            <li><a href="#"class='btn' id='button-rigester'>ثبت نام</a></li>
                            <li><a href="#" class='btn' id='button-enter'>ورود</a></li>
                            <div id="popup" class="popup">
                                <div class="popup-content">
                                    <span class="close" id="close">&times;</span>
                                    <h2 class="form-header">فرم ورود</h2>
                                    <form id="loginForm" method="POST" action="{{route('submit')}}" class="text-right">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">:نام کاربری</label>
                                            <input type="text" name="nameform" id="name_form" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="password"> :رمز عبور</label>
                                            <input type="password" name="password" id="password" class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-primary" id='btn_form'>ورود</button>
                                    </form>
                                </div>
                            </div>
                        </ul>
                        <!-- End Contact -->
                    </div>
                    <div class="col-lg-6 col-md-7 col-12" id="tel-email">
                        <!-- Top Contact -->
                        <ul class="top-contact">
                            <li>+880 1234 56789<i class="fa fa-phone"></i></li>
                            <li><a href="mailto:support@yourmail.com">support@yourmail.com<i
                                        class="fa fa-envelope"></i></a></li>
                        </ul>
                        <!-- End Top Contact -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container" id='container'>
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12">
                            <!-- Start Logo -->
                            <div class="logo">
                                <a href="{{ route('home') }}"><img src="{{ url('img\logo.png') }}" alt="*"></a>
                            </div>
                            <!-- End Logo -->
                            <!-- Mobile Nav -->
                            <div class="mobile-nav"></div>
                            <!-- End Mobile Nav -->
                        </div>
                        <div class="col-lg-7 col-md-9 col-12" dir="rtl">
                            <!-- Main Menu -->
                            <div class="main-menu">
                                <nav class="navigation">
                                    <ul class="nav menu">
                                        <li class="active"><a href="#">صفحه اصلی <i
                                                    class="icofont-rounded-down"></i></a>
                                            {{-- <ul class="dropdown">
													<li><a href="index.html">Home Page 1</a></li>
												</ul> --}}
                                        </li>
                                        <li><a href="{{ route('index.docters') }}">پزشکان </a></li>
                                        <li><a href="#products">محصولات</a></li>
                                        <li><a href="#news">اخبار</i></a>
                                            {{-- <ul class="dropdown">
													<li><a href="404.html">404 Error</a></li>
												</ul> --}}
                                        </li>
                                        <li><a href="#">مقالات </i></a>

                                        </li>
                                        {{-- <li><a id="office">اداری<i class="icofont-rounded-down"></i></a> --}}
                                        {{-- <ul class="dropdown">
                                                <li><a href="blog-single.html" id='job1'>رزومه افراد</a></li>
                                                <li><a href="blog-single.html" id='job1'>استخدام</a></li>
                                            </ul> --}}
                                        {{-- <ul class="dropdown">
													<li><a href="blog-single.html">تماس با ما</a></li>
													<li><a href="blog-single.html">رزومه افراد</a></li>
													<li><a href="blog-single.html">استخدام</a></li>
												</ul></li>	 --}}
                                        <li><a href="contact.html">درباره ما</a>

                                    </ul>
                                </nav>
                            </div>
                            <!--/ End Main Menu -->
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="get-quote">
                                {{-- <a href="appointment.html" class="btn">Book Appointment</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!-- End Header Area -->

    <!-- Slider Area -->
    <section class="slider">
        <div class="hero-slider">
            <!-- Start Single Slider -->
            {{-- <div class="single-slider" style="background-image:url('img/slider2.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text"> --}}
            {{-- <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p> --}}
            {{-- <div class="button">
										<a href="#" class="btn">Get Appointment</a>
										<a href="#" class="btn primary">Learn More</a>
									</div> --}}
            {{-- </div>
							</div>
						</div>
					</div>
				</div> --}}
            <!-- End Single Slider -->
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('img/1605824736_33.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                {{-- <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p> --}}
                                {{-- <div class="button">
										<a href="#" class="btn">Get Appointment</a>
										<a href="#" class="btn primary">About Us</a>
									</div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start End Slider -->
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('img/1605824549_3.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                {{-- <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p> --}}
                                {{-- <div class="button">
										<a href="#" class="btn">Get Appointment</a>
										<a href="#" class="btn primary">Conatct Now</a>
									</div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slider -->
        </div>
    </section>
    <!--/ End Slider Area -->

    <!-- Start Schedule Area -->
    <section class="schedule">
        <div class="container">
            <div class="schedule-inner">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 ">
                        <!-- single-schedule -->
                        <div class="single-schedule first" style="text-align: right">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fa fa-ambulance"></i>
                                </div>
                                <div class="single-content">
                                    <span></span>
                                    <h4>پشتیبانی </h4>
                                    <p>شما میتوانید همواره در طول هفته از <br>ساعت ۹صبح تا ۱۹ با واحد پشتیبانی <br>نرم
                                        افزار پزشکی آریا دکتر در ارتباط باشید
                                    </p>
                                    {{-- <a href="#"> اطلاعات بیشتر<i class="fa fa-long-arrow-left"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- single-schedule -->
                        <div class="single-schedule middle" style="text-align: right">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icofont-prescription"></i>
                                </div>
                                <div class="single-content">
                                    <span> </span>
                                    <h4>ویژگی های محصولات ما</h4>
                                    <p>دسترسی سریع به پزشک مورد نظر خود , امنیت بالا و پشتیبانی فعال از ویژ گیهای ممتاز
                                        محصولات ما میباشد</p>

                                    {{-- <a href="#">اطلاعات بیشتر<i class="fa fa-long-arrow-left"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12" dir="rtl">
                        <!-- single-schedule -->
                        <div class="single-schedule last" style="text-align: right">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icofont-ui-clock"></i>
                                </div>
                                <div class="single-content">
                                    {{-- <span>Donec luctus</span> --}}
                                    <h4> ساعت کار شرکت</h4>
                                    <ul class="time-sidual" style="text-align: right;margin-bottom:27px">
                                        <li class="day">شنبه - چهارشنبه 20.00-8.00</li>

                                        {{-- <li class="day">Saturday <span>9.00-18.30</span></li> --}}
                                        <li class="day">پنجشنبه - جمعه تعطیل</li>
                                    </ul>
                                    {{-- <a href="#"style="text-align: right;margin-top:45px"><i
                                            class="fa fa-long-arrow-left"></i>اطلاعات بیشتر </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/End Start schedule Area -->

    <!-- Start Feautes -->
    {{-- <section class="Feautes section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Are Always Ready to Help You & Your Family</h2>
                        <img src="img/section-img.png" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features">
                        <div class="signle-icon">
                            <i class="icofont icofont-ambulance-cross"></i>
                        </div>
                        <h3>Emergency Help</h3>
                        <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                    </div>
                    <!-- End Single features -->
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features">
                        <div class="signle-icon">
                            <i class="icofont icofont-medical-sign-alt"></i>
                        </div>
                        <h3>Enriched Pharmecy</h3>
                        <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                    </div>
                    <!-- End Single features -->
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features last">
                        <div class="signle-icon">
                            <i class="icofont icofont-stethoscope"></i>
                        </div>
                        <h3>Medical Treatment</h3>
                        <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                    </div>
                    <!-- End Single features -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Feautes --> --}}

    <!-- Start Fun-facts -->

    <!--/ End Fun-facts -->

    <!-- Start Why choose -->
    <section class="why-choose section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>ویدیو آموزشی و آشنایی با خدمات مجموعه</h2>
                        <img src="img/section-img.png" alt="#">
                        {{-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Left -->
                    <div class="choose-left">
                        <h3> ما که هستیم</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pharetra antege vel est
                            lobortis, a commodo magna rhoncus. In quis nisi non emet quam pharetra commodo. </p>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list">
                                    <li>Maecenas vitae luctus nibh.<i class="fa fa-caret-left"></i> </li>
                                    <li>Duis massa massa.<i class="fa fa-caret-left"></i></li>
                                    <li>Aliquam feugiat interdum.<i class="fa fa-caret-left"></i></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list">
                                    <li>Maecenas vitae luctus nibh. <i class="fa fa-caret-left"></i></li>
                                    <li> massa Duismassa.<i class="fa fa-caret-left"></i></li>
                                    <li>Aliquam feugiat interdum.<i class="fa fa-caret-left"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Choose Left -->
                </div>
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Rights -->
                    <div class="choose-right">
                        <div class="video-image">
                            <!-- Video Animation -->
                            {{-- <div class="promo-video">
                                <div class="waves-block">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                </div>
                            </div>  --}}
                            <!--/ End Video Animation -->
                            {{-- <a href="https://www.youtube.com/watch?v=RFVXy6CRVR4"
                                class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a> --}}
                            <video controls class='vedio'>
                                <source src='{{ url('#') }}' type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <!-- End Choose Rights -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Why choose -->

    <!-- Start Call to action -->
    {{-- <section class="call-action overlay" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="content">
                        <h2>Do you need Emergency Medical Care? Call @ 1234 56789</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor dictum turpis nec
                            gravida.</p>
                        <div class="button">
                            <a href="#" class="btn">Contact Now</a>
                            <a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Call to action --> --}}

    <!-- Start portfolio -->
    {{-- <section class="portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Maintain Cleanliness Rules Inside Our Hospital</h2>
                        <img src="img/section-img.png" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
        </div> --}}
    {{-- <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="owl-carousel portfolio-slider">
                        <div class="single-pf">
                            <img src="img\img_index (1).jpg" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                            <div class='text-center mt-3' id='doctors'>

                                <div class="fa fa-user"></div>
                                <span >پزشک محمد صادق صبا</span>

                                <div class="fa fa-ambulance"></div>
                                <span >متخصص بیماری های کودکان</span>
                            </div>
                        </div>
                        <div class="single-pf">
                            <img src="img\img_index (2).jpg" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        <div class='text-center mt-3' id='doctors'>
                            <div class="fa fa-user"></div>
                            <span >دکتر</span>

                            <div class="fa fa-ambulance"></div>
                            <span >دکتر</span>

                        </div>

                        </div>
                        <div class="single-pf">
                            <img src="img\img_index (3).jpg" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                            <div class='text-center mt-3' id='doctors'>

                                <div class="fa fa-user"></div>
                                <span >دکتر</span>

                                <div class="fa fa-ambulance"></div>
                                <span >دکتر</span>

                            </div>
                        </div>
                        <div class="single-pf">
                            <img src="img\img_index (4).jpg" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                            <div class='text-center mt-3' id='doctors'>

                                <div class="fa fa-user"></div>
                                <span >دکتر</span>

                                <div class="fa fa-ambulance"></div>
                                <span >دکتر</span>

                            </div>
                        </div>
                        <div class="single-pf">
                            <img src="img\img_index.jpg" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                            <div class='text-center mt-3' id='doctors'>

                                <div class="fa fa-user"></div>
                                <span >دکتر</span>

                                <div class="fa fa-ambulance"></div>
                                <span >دکتر</span>
                            </div>
                        </div> --}}
    {{-- <div class="single-pf">
                            <img src="img/pf2.jpg" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                        <div class="single-pf">
                            <img src="img/pf3.jpg" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div> --}}
    {{-- <div class="single-pf">
                            <img src="img/pf4.jpg" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div> --}}
    {{-- </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--/ End portfolio -->

    <!-- Start service -->
    {{-- <section class="services section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Offer Different Services To Improve Your Health</h2>
                        <img src="img/section-img.png" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <ul class="list-group list-group-horizontal" id="main_list_group">
                        <li class="list-group-item" onclick="showAlert('1', 'message1', event)">
                            <i class="fa fa-bank"></i>
                        </li>
                        <li class="list-group-item" onclick="showAlert('2', 'message2', event)">
                            <i class="fa fa-address-book"></i>
                        </li>


                    </ul>
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="message-container">
                            <div class="message" id="message1">
                                <p>عکس</p>
                                <img src="download.png" class="img">
                            </div>
                            <div class="message" id="message2">محتوای ایتم 2</div>
                            <div class="message" id="message3">محتوای ایتم 3</div>
                            <div class="message" id="message3">محتوای ایتم 4</div>
                        </div>
                    </div>
                </div> --}}
    <!-- End Single Service -->
    </div>

    </div>
    </div>
    </section>
    <!--/ End service -->

    <!-- Pricing Table -->
    {{--  background-repeat: no-repeat;background-size: cover;" --}}
    <section class="pricing-table section" id="products" style="padding-top: 0px;">

        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="margin-top: 0px;">
                    <div class="section-title">
                        <h2>لیست محصولات ما</h2>
                        <img src="img/section-img.png" alt="#">
                        {{-- <p>دسترسی سریع به پزشک مورد نظر خود وامنیت بالا وپشتیبانی فعال از ویژ گی های ممتاز محصولات ما میباشد</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Table -->
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="single-table">
                        <!-- Table Head -->
                        <div class="table-head">
                            <div class="icon">
                                <i class="icofont icofont-tooth" style="color: #e6895e"></i>
                            </div>
                            <h4 class="title">طرح برنزی</h4>
                            <div class="price">
                                {{-- <p class="amount">$199<span>/ Per Visit</span></p> --}}
                            </div>
                        </div>
                        <!-- Table List -->
                        <ul class="table-list" style="color: black">
                            <li><i class="icofont icofont-ui-check" style="background-color: #ee7d49"></i>مدیرت مالی و
                                پرونده بیماران در مطب</li>
                            <li><i class="icofont icofont-ui-check" style="background-color: #bf8970"></i>مدیریت
                                تصاویر رادیو گرافی بیماران در پرونده</li>
                            <li><i class="icofont icofont-ui-check" style="background-color: #bf8970"></i>قابلیت ثبت
                                ملاحظات ویژه درمانی به تفکیک هر درمان</li>
                            <li><i class="icofont icofont-ui-check" style="background-color: #bf8970"></i>قابلیت گزارش
                                گیری مالی ;بدهی و پرداختی بیماران</li>
                            <li><i class="icofont icofont-ui-check"style="background-color: #bf8970"></i>قابلیت ارتباط
                                ثبت الکترونیکی دارو و <br>رادیو گرافی با بیمه ها</li>
                        </ul>
                        <div class="table-bottom">
                            <a class="btn" href="{{ route('orders') }}"
                                style="background-color: #bf8970 ;font-weight:bold;">مشاوره و ارائه خدمات </a>
                        </div>
                        <!-- Table Bottom -->
                    </div>
                </div>
                <!-- End Single Table-->
                <!-- Single Table -->
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="single-table">
                        <!-- Table Head -->
                        <div class="table-head">
                            <div class="icon">
                                <i class="icofont icofont-ui-cut" style="color: #c0c0c0"></i>
                            </div>
                            <h4 class="title">طرح نقره ای</h4>
                            <div class="price">
                                {{-- <p class="amount">$299<span>/ Per Visit</span></p> --}}
                            </div>
                        </div>
                        <!-- Table List -->
                        <ul class="table-list">
                            <li><i class="icofont icofont-ui-check" style="background-color: #c0c0c0"></i>دارا بودن
                                تمام قابلیت های پک برنزی</li>
                            <li><i class="icofont icofont-ui-check" style="background-color: #c0c0c0"></i>دارا بودن
                                بخش تشخیص و تعیین یادداشت های هر پرونده</li>
                            <li><i class="icofont icofont-ui-check" style="background-color: #c0c0c0"></i>امکان
                                تغییرات پذیرش به شیوه مطب بصورت اختصاصی</li>
                            <li><i class="icofont icofont-ui-check"style="background-color: #c0c0c0"></i>قابلیت گروه
                                بندی درمان و ترتیب الویت نمایش هر بخش</li>
                            <li><i class="icofont icofont-ui-check" style="background-color: #c0c0c0"></i>قابلیت
                                ارتباط با قلم نوری جهت ثبت مراحل ویزیت</li>
                        </ul>
                        <div class="table-bottom">
                            <a class="btn" href="{{ route('orders') }}" style="background-color: #c0c0c0"> مشاوره
                                و ارائه خدمات</a>
                        </div>
                        <!-- Table Bottom -->
                    </div>
                </div>
                <!-- End Single Table-->
                <!-- Single Table -->
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="single-table ">
                        <!-- Table Head -->
                        <div class="table-head">
                            <div class="icon">
                                <i class="icofont-heart-beat" style="color:#ffe75a"></i>
                            </div>
                            <h4 class="title">طرح طلایی</h4>
                            <div class="price">
                                {{-- <p class="amount">$399<span>/ Per Visit</span></p> --}}
                            </div>
                        </div>
                        <!-- Table List -->
                        <ul class="table-list">
                            <li><i class="icofont icofont-ui-check" style="background-color:#ffe75a"></i> دارا بودن
                                تمام قابلیت های پک برنزی</li>
                            <li><i class="icofont icofont-ui-check" style="background-color:#ffe75a"></i>دارا بودن بخش
                                تشخیص و تعیین یادداشت های هر پرونده</li>
                            <li><i class="icofont icofont-ui-check"style="background-color:#ffe75a"></i>امکان تغییرات
                                پذیرش به شیوه مطب بصورت اختصاصی</li>
                            <li><i class="icofont icofont-ui-check"style="background-color:#ffe75a"></i> قابلیت گروه
                                بندی درمان و ترتیب الویت نمایش هر بخش</li>
                            <li><i class="icofont icofont-ui-check"style="background-color:#ffe75a"></i>قابلیت ارتباط
                                با قلم نوری جهت ثبت مراحل ویزیت</li>
                        </ul>
                        <div class="table-bottom">
                            <a class="btn" href="{{ route('orders') }}" style="background-color:#ffe75a"> مشاوره و
                                ارائه خدمات</a>
                        </div>
                        <!-- Table Bottom -->
                    </div>
                </div>
                <!-- End Single Table-->
            </div>
        </div>
    </section>
    <!--/ End Pricing Table -->

    {{-- <div  class="fun-facts section overlay rtl" style="text-align:center;">
        <div class="container" >
            <div class="row" >
                <div class="col-lg-3 col-md-3 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun" >
                        <i class="icofont icofont-home"></i>
                        <div class="content" >
                            <span class="counter">3468</span>
                            <p >مراکز فعال</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-3 col-12" >
                    <!-- Start Single Fun -->
                    <div class="single-fun" >
                        <i class="icofont icofont-user-alt-3"></i>
                        <div class="content">
                            <span class="counter">557</span>
                            <p> پزشکان متخصص</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-3 col-12" >
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont-simple-smile" ></i>
                        <div class="content">
                            <span class="counter">4379</span>
                            <p>رضایت بیماران</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-3 col-12" >
                    <!-- Start Single Fun -->
                    <div class="single-fun" >
                        <i class="icofont icofont-table" ></i>
                        <div class="content">
                            <span class="counter">32</span>
                            <p>سالهای فعالیت</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Start Blog Area -->
    <section class="blog section" id="news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>با جدیدترین اخبار پزشکی ما همراه باشید</h2>
                        <img src="img/section-img.png" alt="#">
                        {{-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head"style="text-align: right">
                            <img src="img\1604218951_Group 38.jpg" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">

                                <div class="date"><i class='icofont-calendar'></i>1399/8/10</div>
                                <h2><a href="blog-single.html">علائم کبد چرب کدامند؟</a></h2>
                                <p class="text">در بسیاری از موارد کبد چرب با علائم قابل توجهی همراه نیست. اما ممکن
                                    است احساس خستگی کرده و یا احساس ناراحتی یا درد در سمت راست بالای شکم داشته باشید</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="img/1604303667_Group 36.jpg" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date"><i class='icofont-calendar'></i>1399/8/12</div>
                                <h2><a href="blog-single.html">علائم و نشانه های کمبود کلسیم</a></h2>
                                <p class="text">کمبود کلسیم، که به عنوان هیپوکلسمی شناخته می شود، یک مشکل سلامتی
                                    جهانی است و مردم در سراسر جهان به راحتی کلسیم را از رژیم غذایی خود دریافت نمی کنند
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="img/1604303343_Group 31.jpg" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date"><i class='icofont-calendar'></i>1399/8/12</div>
                                <h2><a href="blog-single.html">سنگ کلیه</a></h2>
                                <p class="text">سنگ کلیه تا وقتی حرکت نمی‌کند و ثابت است، هیچ علامتی ندارد. مشکلات از
                                    زمانی آغاز می‌گردد که سنگ در کلیه جابه‌جا می‌شود یا به سمت میزنای (لوله‌ای که هر
                                    کلیه را به مثانه وصل می‌کند) به راه می‌افتد</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

    <!-- Start clients -->
    {{-- <div class="clients overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="owl-carousel clients-slider">
                        <div class="single-clients">
                            <img src="img/customer_4.jpg" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="img/customer_5.jpg" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="img/client3.png" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="img/client4.png" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="img/client5.png" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="img/client1.png" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="img/client2.png" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="img/client3.png" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="img/client4.png" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--/Ens clients -->
    {{--
    <!-- Start Appointment -->
    <section class="appointment">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Are Always Ready to Help You. Book An Appointment</h2>
                        <img src="img/section-img.png" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <form class="form" action="#">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="name" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="email" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="phone" type="text" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <div class="nice-select form-control wide" tabindex="0"><span
                                            class="current">Department</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected ">Department</li>
                                            <li data-value="2" class="option">Cardiac Clinic</li>
                                            <li data-value="3" class="option">Neurology</li>
                                            <li data-value="4" class="option">Dentistry</li>
                                            <li data-value="5" class="option">Gastroenterology</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <div class="nice-select form-control wide" tabindex="0"><span
                                            class="current">Doctor</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected ">Doctor</li>
                                            <li data-value="2" class="option">Dr. Akther Hossain</li>
                                            <li data-value="3" class="option">Dr. Dery Alex</li>
                                            <li data-value="4" class="option">Dr. Jovis Karon</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Date" id="datepicker">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <textarea name="message" placeholder="Write Your Message Here....."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-md-4 col-12">
                                <div class="form-group">
                                    <div class="button">
                                        <button type="submit" class="btn">Book An Appointment</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-8 col-12">
                                <p>( We will be confirm by an Text Message )</p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12 ">
                    <div class="appointment-image">
                        <img src="img/contact-img.png" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Appointment -->

    <!-- Start Newsletter Area -->
    <section class="newsletter section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6  col-12">
                    <!-- Start Newsletter Form -->
                    <div class="subscribe-text ">
                        <h6>Sign up for newsletter</h6>
                        <p class="">Cu qui soleat partiendo urbanitas. Eum aperiri indoctum eu,<br> homero
                            alterum.</p>
                    </div>
                    <!-- End Newsletter Form -->
                </div>
                <div class="col-lg-6  col-12">
                    <!-- Start Newsletter Form -->
                    <div class="subscribe-form ">
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="EMAIL" placeholder="Your email address" class="common-input"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
                                required="" type="email">
                            <button class="btn">Subscribe</button>
                        </form>
                    </div>
                    <!-- End Newsletter Form -->
                </div>
            </div>
        </div>
    </section> --}}
    <!-- /End Newsletter Area -->

    <!-- Footer Area -->
    <footer id="footer" class="footer " dir="auto">
        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-footer">
                            <h2>درباره ما</h2>

                            @foreach ($info_footer as $item)
                                <p>{{ $item->About_we }} </p>
                            @endforeach






                            {{-- <p>

															شرکت فناوران آویژه آریا با هدف ارائه مشاوره، آموزش و طراحی و اجرای نرم افزار و وب سایت های
															تخصصی پزشکی آریا از سال ۱۳۹۰ شروع به کار نموده است .
															این شرکت در این مدت توانسته با اتکا به سالها تجربه اجرایی و در کنار کادر فنی و علمی خود،‌
															پروژه‌های موفقی را در حوزه‌های مختلف پزشکی به انجام رسانده و محصولات حرفه‌ای در زمینه حوزه
															سلامت تولید نماید و مورد تایید پارک علم و فناوری، تحت نظر وزارت علوم، تحقیقات و فناوری قرار
															گیرد.

                            </p> --}}

                            <!-- Social -->
                            <ul class="social">
                                <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                <li><a href="#"><i class="icofont-email"></i></a></li>
                                <li><a href="#"><i class="fa fa-mobile-phone"></i></a></li>
                                <li><a href="#"><i class="fa fa-phone"></i></a></li>
                                <li><a href="#"><i class="fa fa-address-book"></i></a></li>

                            </ul>
                            <!-- End Social -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-footer f-link">
                            <h2>لینک های مهم</h2>
                            <div class="row">
                                <div class="col-lg-8 col-md-8" style="margin-left: 160px">
                                    <ul class='import-links-footer'>
                                        {{-- @foreach ($info2 as $item)
                                            <li><a href="#"><i class="fa fa-caret-left"aria-hidden="true"></i>
                                                    {{ $item->Links }}</a></li>
                                        @endforeach --}}

                                        @foreach ($info_footer as $item)
                                            <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i>
                                                    {{ $item->L_questions }}</a></li>

                                            <li><a href="#"><i class="fa fa-caret-left"aria-hidden="true"></i>
                                                    {{ $item->L_articles }}</a></li>
                                            <li><a href="#"><i class="fa fa-caret-left"aria-hidden="true"></i>
                                                    {{ $item->L_services }}</a></li>
                                            <li><a href="#"><i class="fa fa-caret-left"aria-hidden="true"></i>
                                                    {{ $item->L_home }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        {{-- <li><a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Consuling</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Finance</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Testimonials</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>FAQ</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Contact Us</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-footer">

                            <h2>آدرس شرکت</h2>
                            {{--
                                <p>{{$info3}}</p> --}}
                            @foreach ($info_footer as $item)
                                <p>{{ $item->Address }}</p>
                            @endforeach

                            {{-- <ul class="time-sidual">
                                <li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
                                <li class="day">Saturday <span>9.00-18.30</span></li>
                                <li class="day">Monday - Thusday <span>9.00-15.00</span></li>
                            </ul> --}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="single-footer">
                            <h2>موقعیت شرکت</h2>
                            <div calss='one'>
                                {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d819.1012256472928!2d48.52088922528803!3d34.79575377053601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1703580482624!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="copyright-content">
                            <p>© کلیه حقوق سایت آریا دکتر برای شرکت فناواران آویژه محفوظ است
                                {{-- <a href="https://www.wpthemesgrid.com"
                                    target="_blank">wpthemesgrid.com</a> </p> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Copyright -->
    </footer>
    <!--/ End Footer Area -->

    <!-- jquery Min JS -->
    {{-- <script src="js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="js/easing.js"></script>
		<!-- Color JS -->
		<script src="js/colors.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="js/steller.js"></script>
		<!-- Wow JS -->
		<script src="js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="js/jquery.magnific-popup.min.js"></script> --}}
    <!-- Counter Up CDN JS -->
    {{-- <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script> --}}
    <!-- Bootstrap JS -->
    {{-- <script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script> --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
    @vite('resources/js/app.js')
    <script>
        // تابع جاوااسکریپت برای حرکت به بخش مورد نظر
        function scrollToSection(sectionId) {
            var section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({
                    behavior: "smooth"
                });
            }
        }

        document.getElementById('button-enter').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'block';
        });

        // وقتی روی دکمه بستن پاپ‌آپ کلیک می‌شود، پاپ‌آپ مخفی می‌شود
        document.getElementById('close').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'none';
        });

        $(document).ready(function() {
            // وقتی دکمه "ثبت" کلیک می‌شود، پاپ‌آپ نمایش داده می‌ش

            // هنگام ارسال فرم لاگین
            $('#loginForm').submit(function(event) {
                event.preventDefault();

                // بررسی وجود مقادیر در فیلدها
                var nameValue = $('#name_form').val();
                var passwordValue = $('#password').val();

                if (nameValue && passwordValue) {
                    // ارسال درخواست به سمت سرور
                    $.ajax({
                        type: "POST",
                        url: $(this).attr('action'),
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function(response) {
                            // دریافت پاسخ موفقیت‌آمیز
                            // هدایت کاربر به مسیر موردنظر
                            window.location.href = '/Admin_page';
                            // مثال: هدایت به صفحه خوش‌آمدگویی
                        },

                        error: function(xhr, status, error) {
                            // بررسی کد وضعیت خطا
                            if (xhr.status == 300) {
                                // نمایش پیام خطا به کاربر
                                alert("نام کاربری یا رمز عبور نامعتبر است.");
                            }
                        }
                    });
                } else {
                    // اطلاع دادن به کاربر در مورد فیلدهای خالی
                    alert('لطفاً فیلدها را پر کنید.');
                }
            });


        });
    </script>

    {{-- <script>
        function showAlert(messageId, elementId, event) {
            var messageElement = document.getElementById(elementId);

            // Set initial opacity to 0
            messageElement.style.opacity = 0;

            // Show the message container
            document.querySelector('.message-container').style.display = 'block';

            // Hide all messages
            document.querySelectorAll('.message').forEach(function(msg) {
                msg.style.display = 'none';
            });

            // Show the selected message
            messageElement.style.display = 'block';

            // Remove 'active' class from all list items
            document.querySelectorAll('.list-group-item').forEach(function(item) {
                item.classList.remove('active');
            });

            // Add 'active' class to the clicked list item
            event.target.closest('.list-group-item').classList.add('active');

            setTimeout(function() {
                // Gradually increase opacity to 1
                messageElement.style.opacity = 1;
            }, 500);
        }
    </script> --}}


</body>

</html>
