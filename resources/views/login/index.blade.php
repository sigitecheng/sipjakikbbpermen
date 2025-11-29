
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Silahkan Login !</title>
    <meta name="description" content="Beeko -  Business Consulting HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- <link rel="shortcut icon" type="image/x-icon" href="/assets/assets/img/favicon.png"> --}}
   <link rel="icon" href="/assets/icon/sipjakikbb.png" type="image/x-icon">

    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="/assets/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/assets/css/tg-flaticon.css">
    <link rel="stylesheet" href="/assets/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/assets/css/default.css">
    <link rel="stylesheet" href="/assets/assets/css/default-icons.css">
    <link rel="stylesheet" href="/assets/assets/css/odometer.css">
    <link rel="stylesheet" href="/assets/assets/css/aos.css">
    <link rel="stylesheet" href="/assets/assets/css/tg-cursor.css">
    <link rel="stylesheet" href="/assets/assets/css/main.css">
</head>

<body>

    <!-- preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fas fa-chevron-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- main-area -->
    <main class="main-area fix">


        <!-- login-area -->
        <section class="login__area">
            <div class="container-fluid p-0">
                <div class="row gx-0">
                    <div class="col-md-6">
                        <div class="login__left-side" data-background="/assets/gambarbaru/padalarang.avif">
                           <div style="display: flex; align-items: center;">
                                <a href="#">
                                    <img src="/storage/logo/sipjakikbb.png"
                                        alt="logo"
                                        style="height:70px; width:auto; object-fit:contain; margin-right:10px;">
                                </a>

                                <a href="#">
                                    <img src="/assets/icon/pupr.png"
                                        alt="logo"
                                        style="height:60px; width:auto; object-fit:contain; margin-right:10px;">
                                </a>
                            </div>

 {{-- <a href="#"><img src="assets/img/logo/w_logo.svg" alt="logo"></a> --}}
                            <div class="login__left-content">
                                <p>"Sistem Informasi Pembina Jasa Konstruksi”</p>
                                <h4 class="title">Dinas Pekerjaan Umum Dan Tata Ruang</h4>
                                <span>Kabupaten Bandung Barat Provinsi Jawa Barat</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="login__form-wrap">
                            <h2 class="title">Halaman Login !</h2>
                            {{-- <span class="divider">or</span> --}}
                           {{-- <form action="/login" method="post" class="login__form"> --}}
    <form action="{{ route('login.custom') }}" class="login__form" method="post">

                            @csrf

    <!-- Email -->
    <div class="form__grp">
        <input
            type="text"
            name="email"
            placeholder="Email"
            class="@error('email') is-invalid @enderror"
            required
            value="{{ old('email') }}"
        >
        @error('email')
            <div class="login-jaspro-invalid">{{ $message }}</div>
        @enderror
    </div>

    <!-- Password -->
    <div class="form__grp">
        <input
            type="password"
            name="password"
            placeholder="Password"
            class="@error('password') is-invalid @enderror"
            required
        >
        @error('password')
            <div class="login-jaspro-invalid">{{ $message }}</div>
        @enderror
    </div>

    <!-- Error Login (Email/Password Salah) -->
    @if ($errors->has('loginError'))
        <div class="login-jaspro-alert">
            {{ $errors->first('loginError') }}
        </div>
    @endif

    <!-- Lupa password / opsional -->
    <div class="account__check">
        <div class="account__check-forgot">
            <!-- Tambahkan jika ada halaman reset password -->
            {{-- <a href="/forgot-password">Forgot Password?</a> --}}
        </div>
    </div>

    <!-- Tombol Login -->
    <button type="submit" class="tg-btn tg-btn-three">
        Masuk
        <img src="assets/img/icons/right_arrow.svg" alt="" class="injectable">
    </button>

    <!-- Link Register -->
    <div style="margin-top: 15px; text-align:center;">
        <span>Belum Punya Akun?</span>
        <a href="/404" class="login-jaspro-register"><strong>Daftar Di Sini!</strong></a>
    </div>
</form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- login-area-end -->


    </main>
    <!-- main-area-end -->

    <script src="/assets/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="/assets/assets/js/bootstrap.min.js"></script>
    <script src="/assets/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/assets/js/jquery.odometer.min.js"></script>
    <script src="/assets/assets/js/jquery.appear.js"></script>
    <script src="/assets/assets/js/swiper-bundle.min.js"></script>
    <script src="/assets/assets/js/jquery.parallaxScroll.min.js"></script>
    <script src="/assets/assets/js/jquery.marquee.min.js"></script>
    <script src="/assets/assets/js/tg-cursor.min.js"></script>
    <script src="/assets/assets/js/ajax-form.js"></script>
    <script src="/assets/assets/js/svg-inject.min.js"></script>
    <script src="/assets/assets/js/wow.min.js"></script>
    <script src="/assets/assets/js/aos.js"></script>
    <script src="/assets/assets/js/main.js"></script>
    <script>
        SVGInject(document.querySelectorAll("img.injectable"));
    </script>
    <script>
        const text = document.querySelector(".circle");
        text.innerHTML = text.textContent.replace(/\S/g, "<span>$&</span>");
        const element = document.querySelectorAll(".circle span");
        for (let i = 0; i < element.length; i++) {
            element[i].style.transform = "rotate(" + i * 10.7 + "deg)";
        }
    </script>
    <script>
        const textTwo = document.querySelector(".circle-two");
        textTwo.innerHTML = textTwo.textContent.replace(/\S/g, "<span>$&</span>");
        const elementTwo = document.querySelectorAll(".circle-two span");
        for (let i = 0; i < elementTwo.length; i++) {
            elementTwo[i].style.transform = "rotate(" + i * 10.7 + "deg)";
        }
    </script>
</body>

</html>


{{-- @include('frontend.A00_new.01_halamanutama.newfooter') --}}
