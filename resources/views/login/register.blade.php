<!-- Login Page Modern Minimalist Gradient (login.html) -->
<!DOCTYPE html>
<html lang="id">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Silahkan Login ! SIPJAKI Kabupaten Bandung Barat</title>
<meta name="description" content="SIPJAKI KBB adalah Sistem Informasi Pembina Jasa Konstruksi Kabupaten Bandung Barat untuk mendukung layanan pembinaan, verifikasi, dan manajemen data penyedia jasa konstruksi." />
<meta name="keywords" content="SIPJAKI, SIPJAKI KBB, Sistem Informasi Jasa Konstruksi, Pembina Konstruksi, Kabupaten Bandung Barat, Dinas PUTR KBB, Jasa Konstruksi" />

<!-- Hak Cipta -->
<meta name="copyright" content="© {{ date('Y') }} CV. Angkasa Raya Teknik" />
<meta name="author" content="CV. Angkasa Raya Teknik" />

<style>
    * {
        font-family: 'Poppins', sans-serif !important;
    }

    .input-wrap {
    position: relative;
    width: 100%;
}

.input-wrap input,
.input-wrap select {
    width: 100%;
    padding: 16px 45px 16px 18px; /* kanan diperlebar untuk icon */
    border-radius: 12px;
    border: 1px solid #bfc8d6;
    font-size: 16px;
    background: #fafafa;
    box-sizing: border-box;
}

.input-icon-right {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #7f8fa6;
    font-size: 20px;
}
</style>

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
    <img src="/assets/icon/LogoSIPJAKI.png"
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
        Register Akun !
    </h3>

<form action="{{ route('login.daftar') }}" method="post"
      enctype="multipart/form-data"
      style="display:flex; flex-direction:column; gap:18px; width:100%; font-family:'Poppins', sans-serif;">

    @csrf

    <!-- Pilih Jenis Akun -->
    <div class="input-wrap" style="position:relative;">
        <select name="statusadmin_id" >
            <option value="">-- Pilih Jenis Akun --</option>
            @foreach ($statusadmin as $item)
                <option value="{{ $item->id }}" {{ old('statusadmin_id') == $item->id ? 'selected' : '' }}>
                    {{ $item->statusadmin }}
                </option>
            @endforeach
        </select>
        <i class="bi bi-people input-icon-right"></i>
        @error('statusadmin_id')
            <span style="color:red; font-size:13px;">{{ $message }}</span>
        @enderror
    </div>

    <!-- Username -->
    <div class="input-wrap" style="position:relative;">
        <input type="text" name="username" placeholder="Username"  value="{{ old('username') }}">
        <i class="bi bi-person input-icon-right"></i>
        @error('username')
            <span style="color:red; font-size:13px;">{{ $message }}</span>
        @enderror
    </div>

    <!-- No Handphone -->
    <div class="input-wrap" style="position:relative;">
        <input type="text" name="phone_number" placeholder="No Handphone"  value="{{ old('phone_number') }}">
        <i class="bi bi-telephone input-icon-right"></i>
        @error('phone_number')
            <span style="color:red; font-size:13px;">{{ $message }}</span>
        @enderror
    </div>

    <!-- Email -->
    <div class="input-wrap" style="position:relative;">
        <input type="email" name="email" placeholder="Email"  value="{{ old('email') }}">
        <i class="bi bi-envelope input-icon-right"></i>
        @error('email')
            <span style="color:red; font-size:13px;">{{ $message }}</span>
        @enderror
    </div>

    <!-- Password -->
    <div class="input-wrap" style="position:relative;">
        <input type="password" name="password" id="passwordInput" placeholder="Password" >
        <i class="bi bi-eye-slash" id="togglePassword"
           style="position:absolute; right:15px; top:50%; transform:translateY(-50%); font-size:20px; cursor:pointer;"></i>
        @error('password')
            <span style="color:red; font-size:13px;">{{ $message }}</span>
        @enderror
    </div>

   <div class="input-wrap" style="position:relative;">
    <input type="password" name="password_confirmation" id="passwordConfirmation" placeholder="Konfirmasi Password" required>
    <i class="bi bi-eye-slash" id="toggleConfirmPassword"
       style="position:absolute; right:15px; top:50%; transform:translateY(-50%); font-size:20px; cursor:pointer;"></i>
    @error('password_confirmation')
        <span style="color:red; font-size:13px;">{{ $message }}</span>
    @enderror
</div>


    <!-- Tombol Daftar -->
    <button type="submit"
        style="
            width:100%; padding:14px; background:#0d1a3a;
            color:white; border-radius:10px; font-size:16px;
            border:none; font-weight:600; cursor:pointer;
            display:flex; align-items:center; justify-content:center; gap:8px;
            transition:0.2s;">
        <i class="bi bi-person-plus-fill" style="font-size:18px;"></i>
        Daftar Sekarang
    </button>

    <!-- Link Login -->
    <div style="margin-top:5px; text-align:center; font-size:14px;">
        Sudah Punya Akun?
        <a href="/login" style="color:#9d8120; font-weight:600;">Masuk</a>
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
    Dinas Pekerjaan Umum Dan Tata Ruang <br> Kabupaten Bandung Barat<br>
    Provinsi Jawa Barat
</p>
</div>

    </div>
</body>

</html>

<script>
const togglePassword = document.getElementById("togglePassword");
const passwordInput = document.getElementById("passwordInput");

togglePassword.addEventListener("click", function () {
    const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
    passwordInput.setAttribute("type", type);

    this.classList.toggle("bi-eye");
    this.classList.toggle("bi-eye-slash");
});


// Toggle untuk konfirmasi password
const toggleConfirmPassword = document.getElementById("toggleConfirmPassword");
const passwordConfirmation = document.getElementById("passwordConfirmation");

toggleConfirmPassword.addEventListener("click", function () {
    const type = passwordConfirmation.getAttribute("type") === "password" ? "text" : "password";
    passwordConfirmation.setAttribute("type", type);

    this.classList.toggle("bi-eye");
    this.classList.toggle("bi-eye-slash");
});
</script>
