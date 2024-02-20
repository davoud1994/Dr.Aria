<!doctype html>
<html class="no-js" lang="fa">

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
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- icofont CSS -->
    <link rel="stylesheet" href="css/icofont.css">   
    <link rel="stylesheet" href="style.css">
    @vite('resources/css/app.css')
    <style>
        /* انیمیشن برای مؤثر کردن حرکت به تگ مورد نظر */
        html,
        body {
            scroll-behavior: smooth;
        }
        iframe{
            height: 300px;

        }

        .one{
            border-width: 100px;
            border-style:dashed;
            border-color: rgb(117, 92, 79);
        }
        .header-right {
        text-align: right;
    }

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
        #loginForm {
            text-align: right;
        }

        #btn_form {
            margin-right: 300px;
            font-weight: bold;
            font-family: vazir;

        }
    </style>

</head>

@yield('style.orders')
@yield('style.docters')
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
                                        <li class="active"><a href="{{ route('home') }}">صفحه اصلی <i
                                                    class="icofont-rounded-down"></i></a>
                                        </li>
                                
                                        <li ><a href="{{route('index.docters')}}">پزشکان </a></li>
                                        <li><a href="{{route('orders')}}">محصولات</a></li>
                                        <li><a href="#news">اخبار</i></a>
                        
                                        </li>
                                        <li><a href="#">مقالات </i></a>

                                        </li>
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
    {{-- @if(session('success'))
    <div class="alert alert-success" style="text-align: right">
        {{ session('success') }}
    </div>
@endif

@if($errors->any() || session('error'))
    <div class="alert alert-danger" style="text-align: right" id="error-message">
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        @if(session('error'))
            {{ session('error') }}
        @endif
    </div>
@endif --}}
{{-- <div class="header-right">
    <h1>@yield('product')</h1>
    <h2>@yield('docters')</h2>
</div> --}}

<div id="error-name" class="alert alert-danger" style="display: none;text-align: right;margin-bottom:0px" ></div>
<div id="error-lastname" class="alert alert-danger" style="display: none;text-align: right;margin-bottom:0px" ></div>
<div id="error-cellphone" class="alert alert-danger" style="display: none;text-align: right;margin-bottom:0px" ></div>
<div id="error-order_category" class="alert alert-danger" style="display: none;text-align: right" ></div>
<div class="alert alert-success" style="text-align: right" id="success-message"></div>
{{-- <div class="alert alert-danger" style="text-align: right" id="error-message">
    <ul id="error-list"></ul>
</div> --}}

    @yield('form')
    @yield('index_doc')
  
          
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

                            <!-- Social -->
                            <ul class="social">
                                <li><a href="#"><i class="icofont-instagram "></i></a></li>
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
                                            <li><a href="#"><i class="fa fa-caret-left"
                                                    aria-hidden="true"></i>
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
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <!-- Bootstrap JS -->
    {{-- <script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script> --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
        
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

       
        // $(document).ready(function() {
        //     // وقتی دکمه "ثبت" کلیک می‌شود، پاپ‌آپ نمایش داده می‌ش

        //     // هنگام ارسال فرم لاگین
        //     $('#loginForm').submit(function(event) {
        //         event.preventDefault();

        //         // بررسی وجود مقادیر در فیلدها
        //         var nameValue = $('#name_form').val();
        //         var passwordValue = $('#password').val();

        //         if (nameValue && passwordValue) {
        //             // ارسال درخواست به سمت سرور
        //             $.ajax({
        //                 type: "POST",
        //                 url: $(this).attr('action'),
        //                 data: $(this).serialize(),
        //                 dataType: 'json',
        //                 success: function(response) {
        //                     // دریافت پاسخ موفقیت‌آمیز
        //                     // هدایت کاربر به مسیر موردنظر
        //                     window.location.href = {{url('back.tabel_order')}};
                            
        //                     // مثال: هدایت به صفحه خوش‌آمدگویی
        //                 },

        //                 error: function(xhr, status, error) {
        //                     // بررسی کد وضعیت خطا
        //                     if (xhr.status == 300) {
        //                         // نمایش پیام خطا به کاربر
        //                         alert("نام کاربری یا رمز عبور نامعتبر است.");
        //                     }
        //                 }
        //             });
        //         } else {
        //             // اطلاع دادن به کاربر در مورد فیلدهای خالی
        //             alert('لطفاً فیلدها را پر کنید.');
        //         }
        //     });


        // });



        $(document).ready(function() {
    var isOrderSubmitted = false;

    function hideErrors() {
        $('#error-name, #error-lastname, #error-cellphone, #error-order_category').fadeOut('slow');
    }

    // پاک کردن مقادیر فیلدها هنگام لود صفحه
    $('#lastname, #name, #cellphone').val('');

    $('#submit-form').on('submit', function(event) {
        event.preventDefault();

        if (!isOrderSubmitted) {
            var isValid = true;
            var $form = $(this);

            var lastname = $form.find('#lastname').val();
            var name = $form.find('#name').val();
            var cellphone = $form.find('#cellphone').val();
            var order_category = $form.find('#order_category').val();

            if (name == '') {
                $('#error-name').html('لطفاً فیلد نام را پر کنید.').fadeIn('slow');
                isValid = false;
            } else {
                $('#error-name').hide();
            }

            if (lastname == '') {
                $('#error-lastname').html('لطفاً فیلد نام خانوادگی را پر کنید.').fadeIn('slow');
                isValid = false;
            } else {
                $('#error-lastname').hide();
            }

            var phonePattern = /^[0-9]{11}$/;
            if (!phonePattern.test(cellphone)) {
                $('#error-cellphone').html('لطفاً یک شماره تلفن یازده رقمی وارد کنید.').fadeIn('slow');
                isValid = false;
            } else {
                $('#error-cellphone').hide();
            }

            if (order_category == null) {
                $('#error-order_category').html('لطفاً یک گزینه از پکیج مورد نظر را انتخاب کنید.').fadeIn('slow');
                isValid = false;
            } else {
                $('#error-order_category').hide();
            }

            if (!isValid) {
                setTimeout(function() {
                    hideErrors();
                }, 5000);
            }

            if (isValid) {
                isOrderSubmitted = true; // ثبت سفارش اولیه
                $.ajax({
                    url: $form.attr('action'),
                    type: 'POST',
                    data: $form.serialize(),
                    success: function(response) {
                        $('#success-message').text(response.message).fadeIn('slow').delay(3000).fadeOut('slow');
                        $('#error-message').hide();
                    },
                    error: function(xhr) {
                        var errors = xhr.responseJSON.errors;
                        var errorMessage = '';
                        for (var field in errors) {
                            if (errors.hasOwnProperty(field)) {
                                errorMessage += errors[field][0] + '<br>';
                            }
                        }

                        $('#error-message').html(errorMessage).fadeIn('slow');
                        $('#success-message').hide();
                    }
                });
            }
        } else {
            // اگر سفارش قبلا ثبت شده بود...
            alert('شما قبلاً یکبار سفارش  خود را ثبت کرده‌اید.');
        }
    });
});

    </script>

</body>

</html>
