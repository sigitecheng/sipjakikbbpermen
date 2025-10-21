<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/assets/bahan1/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/bahan1/css/animate.compat.css" rel="stylesheet" type="text/css">
    <link href="/assets/bahan1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/bahan1/css/styles.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap" rel="stylesheet">

    {{-- TEMPLATE 2 --}}
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="/assets/bahan2/css/bootstrap.min.css">
      <!----css3---->
      <link rel="stylesheet" href="/assets/bahan2/css/custom.css">

      <link rel="stylesheet" href="/assets/bahan2/font/flaticon.css">
      <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
     <link rel="stylesheet" type="text/css" href="/assets/bahan2/css/settings.css" media="screen" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX=" crossorigin="anonymous" referrerpolicy="no-referrer" />


        @include('tambahan.portalberitaheader')
    <script defer src="/assets/bahan1/js/scripts.js"></script>
    {{-- <title>Construction Company</title> --}}
    <title>Silahkan Login !</title>

    <link rel="icon" href="/assets/icon/sipjakikbb.png" type="image/x-icon">

</head>

<body>



{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ------------------------------------------------------------------------------------------ --}}

<section id="sec-0">

    @include('frontend.00_atas.header1')
    @include('frontend.00_atas.pembaharuan')

        <header>

        @include('frontend.00_atas.header2_navbar')

        </header>


<!-- Import Font Poppins -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<div class="login-jaspro-wrapper">
    <div class="login-jaspro-container">
        <div class="login-jaspro-card">

            <!-- Form Login -->
            <form action="/login" method="post">
                @csrf

                <!-- Email -->
                <div class="login-jaspro-form-group">
                    <label for="email">
                        <i class="bi bi-envelope"></i> Email
                    </label>
                    <input
                        type="text"
                        name="email"
                        id="email"
                        placeholder="Masukkan Email"
                        class="login-jaspro-input @error('email') is-invalid @enderror"
                        required
                        value="{{ old('email') }}"
                    >
                    @error('email')
                        <div class="login-jaspro-invalid">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="login-jaspro-form-group">
                    <label for="password">
                        <i class="bi bi-key"></i> Password
                    </label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Masukkan Password"
                        class="login-jaspro-input @error('password') is-invalid @enderror"
                        required
                    >
                    @error('password')
                        <div class="login-jaspro-invalid">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Error Login -->
                @if ($errors->has('loginError'))
                    <div class="login-jaspro-alert">
                        {{ $errors->first('loginError') }}
                    </div>
                @endif

                <!-- Tombol & Register -->
                <div class="login-jaspro-btn-group">
                    <button type="submit" class="login-jaspro-btn">
                        <i class="bi bi-box-arrow-in-right"></i> Login
                    </button>
                    <div class="login-jaspro-register-wrapper">
                        <span>Belum Punya Akun?</span>
                        <a href="/404" class="login-jaspro-register"><strong>Daftar Di Sini!</strong></a>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- STYLE -->



<br><br>
    </section>


  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}


  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}






@include('frontend.00_atas.footer1')

    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}
@include('frontend.00_atas.footer2')
