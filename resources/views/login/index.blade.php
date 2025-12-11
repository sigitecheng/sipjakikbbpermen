<!-- Login Page Modern Minimalist Gradient (login.html) -->
<!DOCTYPE html>
<html lang="id">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Silahkan Login ! SIPJAKI Kabupaten Bandung Barat</title>

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #0d1a3a 0%, #ffffff 35%, #ffffff 100%);
            overflow-x: hidden;
            padding: 0 15px;
            box-sizing: border-box;
        }

        .login-wrapper {
            width: 100%;
            max-width: 420px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .logo-area {
            text-align: center;
            margin-bottom: 25px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .logo-area img {
            height: 58px;
            width: auto;
            object-fit: contain;
        }

        .login-box {
            background: #ffffff;
            padding: 35px 30px;
            border-radius: 16px;
            border: 1px solid #e0e6ef;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            width: 100%;
            max-width: 380px;
            box-sizing: border-box;
        }

        h2 {
            text-align: center;
            color: #0d1a3a;
            margin-bottom: 25px;
            font-size: 24px;
            font-weight: 600;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 16px 18px;
            border-radius: 12px;
            border: 1px solid #bfc8d6;
            font-size: 16px;
            background: #fafafa;
            transition: 0.2s;
            box-sizing: border-box;
        }

        input:focus {
            border-color: #0d1a3a;
            background: #ffffff;
            outline: none;
            box-shadow: 0 0 8px rgba(13, 26, 58, 0.25);
        }

        .btn-login {
            width: 100%;
            padding: 14px;
            background: #0d1a3a;
            color: white;
            border-radius: 10px;
            font-size: 16px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s;
        }

        .btn-login:hover {
            background: #142958;
        }

        .back {
            text-align: center;
            margin-top: 15px;
        }

        .back a {
            color: #0d1a3a;
            text-decoration: none;
            font-size: 14px;
        }

        /* ==========================
           FULL RESPONSIVE FIX
        ========================== */
        @media (max-width: 768px) {
            body {
                padding: 25px 15px;
                min-height: 100vh;
                justify-content: center;
                align-items: center;
            }

            .login-wrapper {
                max-width: 100%;
                padding: 0;
            }

            .login-box {
                max-width: 100%;
                padding: 28px 22px;
            }

            .logo-area img {
                height: 48px;
            }

            input[type=text],
            input[type=password] {
                font-size: 16px;
                padding: 14px;
            }

            .btn-login {
                padding: 14px;
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .logo-area img {
                height: 40px;
            }

            .login-box {
                padding: 25px 20px;
            }
        }
    </style>
</head>

<body>
    <div class="login-wrapper">

      <div class="logo-area" style="text-align:center; margin-bottom:25px; display:flex; justify-content:center; gap:18px; align-items:center;">
    <a href="#">
        <img src="/storage/logo/sipjakikbb.png"
             alt="Logo SIPJAKI"
             style="height:65px; width:auto; object-fit:contain;">
    </a>

    <a href="#">
        <img src="/assets/icon/pupr.png"
             alt="Logo PUPR"
             style="height:52px; width:auto; object-fit:contain;">
    </a>
</div>

<div class="login-box"
     style="
        background:#ffffff;
        padding:35px 30px;
        border-radius:16px;
        border:1px solid #e0e6ef;
        box-shadow:0 6px 20px rgba(0,0,0,0.08);
        width:100%;
        max-width:380px;
        box-sizing:border-box;
        margin:auto;
        font-family:'Poppins', sans-serif;
     ">
<div style="
    text-align:center;
    margin-bottom:25px;
">
    <img src="/assets/icon/logoSIPJAKI.png"
        alt="Logo SIPJAKI KBB"
        style="
            width:150px;
            height:auto;
            display:block;
            margin:0 auto;
        ">
</div>


    <h3 style="
        text-align:center;
        color:#0d1a3a;
        margin-bottom:25px;
        font-size:24px;
        font-weight:600;
        font-family:'Poppins', sans-serif;
    ">
        Halaman Login !
    </h3>
<form action="{{ route('login.custom') }}" method="post"
      style="display:flex; flex-direction:column; gap:20px; width:100%; font-family:'Poppins', sans-serif;">

    @csrf

    <!-- Input Email -->
    <div class="form__grp" style="width:100%;">
        <input
            type="text"
            name="email"
            placeholder="Email"
            required
            value="{{ old('email') }}"
            class="@error('email') is-invalid @enderror"
            style="
                width:100%;
                padding:16px 18px;
                border-radius:12px;
                border:1px solid #bfc8d6;
                font-size:16px;
                background:#fafafa;
                transition:0.2s;
                font-family:'Poppins', sans-serif;
            "
        >
        @error('email')
            <div style="color:#d9534f; font-size:13px; margin-top:5px;">
                {{ $message }}
            </div>
        @enderror
    </div>

    <!-- Input Password -->
    <div class="form__grp" style="width:100%;">
        <input
            type="password"
            name="password"
            placeholder="Password"
            required
            class="@error('password') is-invalid @enderror"
            style="
                width:100%;
                padding:16px 18px;
                border-radius:12px;
                border:1px solid #bfc8d6;
                font-size:16px;
                background:#fafafa;
                transition:0.2s;
                font-family:'Poppins', sans-serif;
            "
        >
        @error('password')
            <div style="color:#d9534f; font-size:13px; margin-top:5px;">
                {{ $message }}
            </div>
        @enderror
    </div>

    <!-- Error Login (Email/Password Salah) -->
    @if ($errors->has('loginError'))
        <div style="
            background:#ffe6e6;
            color:#c0392b;
            padding:10px 14px;
            border-radius:10px;
            font-size:14px;
            text-align:center;
            font-family:'Poppins', sans-serif;
        ">
            {{ $errors->first('loginError') }}
        </div>
    @endif

    <!-- Tombol Login -->
    <button type="submit"
    style="
        width:100%;
        padding:14px;
        background:#0d1a3a;
        color:white;
        border-radius:10px;
        font-size:16px;
        border:none;
        font-weight:600;
        cursor:pointer;
        transition:0.2s;
        font-family:'Poppins', sans-serif;
        display:flex;
        align-items:center;
        justify-content:center;
        gap:8px;
    ">
    <i class="bi bi-box-arrow-in-right" style="font-size:18px;"></i>
    Masuk
</button>

    <!-- Link Register -->
    <div style="margin-top: 5px; text-align:center; font-family:'Poppins', sans-serif; font-size:14px;">
        <span>Belum Punya Akun? Silahkan</span>
        <a href="/404"
           style="color:#9d8120; text-decoration:none; font-weight:600;">
           Daftar !
        </a>
    </div>

</form>

<br>
<p style="
    text-align:center;
    margin-top:18px;
    font-size:14px;
    color:#0d1a3a;
    font-weight:500;
    font-family:'Poppins', sans-serif;
">
    Dinas Pekerjaan Umum dan Tata Ruang <br> Kabupaten Bandung Barat<br>
    Provinsi Jawa Barat
</p>
</div>

    </div>
</body>

</html>
