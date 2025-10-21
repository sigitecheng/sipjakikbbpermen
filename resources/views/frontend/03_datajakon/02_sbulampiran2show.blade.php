@include('frontend.00_atas.header')
@include('frontend.00_atas.pembaharuan')


{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ------------------------------------------------------------------------------------------ --}}

<section id="sec-0">

    <div class="div" style="z-index: 9999; position: fixed;
    top: 0; left: 0; width: 100%; z-index: 9999;
    background-color: white; border-bottom: 1px solid black;
    ">

@include('frontend.00_atas.header1')
<header>

        @include('frontend.00_atas.header2_navbar')

</div>
</header>



<div class="div responsive-hide" style="
    justify-content: center;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    margin-top: 20px; /* space kosong untuk responsive */
">

    <h2
    class="heading-structure"
        onmouseover="this.style.background='linear-gradient(to right, #002060, #FFD100)'; this.style.color='white';"
        onmouseout="this.style.background='linear-gradient(to right, #FFD100, #002060)'; this.style.color='white';"
    >
    Standar Biaya Umum
    </h2>

</div>
<div class="container" style="
    display: flex;
    flex-direction: column;
    background-color: #FFCB0F;
    padding: 10px;
    border: 1px solid black;
    margin-bottom: 0px;
    border-radius: 25px;
    text-align: center;
    width: 100%;
    height: auto;
    background: linear-gradient(to bottom, yellow, white, black);
    align-items: center;
    position: relative;
">
  {{-- <div style="display: flex; align-items: center;">
    <img src="/assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; margin: 0 10px;">
    <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; object-fit: cover; margin: 0 10px;">
</div>


<h1 style="margin-top:10px; font-size: 16px; font-family: 'Lato', sans-serif; font-weight: 700;">Dinas Pekerjaan Umum Dan Tata Ruang </h1> --}}

<br>
<div class="container-wrapper">
    <div class="controls">
        <!-- Judul Utama -->
        <div class="badge">
            <i class="bi bi-file-earmark-text-fill me-2"></i> Standar Biaya Umum
        </div>

        <div class="controls-buttons">
            <!-- Tombol Kembali -->
            <a href="/datajakon/fesbulampiran2">
                <button class="badgekembali">
                    <i class="bi bi-arrow-left-short me-1"></i> Kembali
                </button>
            </a>

            <!-- Tombol Download -->
            <button class="badgedownload" id="downloadBtn">
                <i class="bi bi-download me-2"></i> Download .pdf
            </button>
        </div>
    </div>


    <!-- PDF Viewer -->
    <div class="pdf-container">
        <iframe class="pdf-frame" src="{{ asset('storage/' . $data->peraturan) }}"></iframe>
    </div>
</div>

<style>
/* ===== FONT GLOBAL & ICON ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css");

* {
    font-family: 'Poppins', sans-serif !important;
    box-sizing: border-box;
}

/* ===== CONTAINER WRAPPER ===== */
.container-wrapper {
    width: 100%;
    padding: 10px;
}

/* ===== BAGIAN KONTROL ATAS ===== */
.controls {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    gap: 10px;
}

/* ===== BADGE ===== */
.badge {
    background: linear-gradient(to right, #FFD700, #000);
    color: white;
    padding: 10px 20px;
    border-radius: 10px;
    display: inline-block;
    font-size: 13px;
    font-weight: 600;
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0 3px 6px rgba(0,0,0,0.2);
}
.badge:hover {
    background: white;
    color: black;
}

/* ===== TOMBOL DOWNLOAD ===== */
.badgedownload {
    background: linear-gradient(to right, navy, black);
    color: white;
    padding: 8px 20px;
    border-radius: 10px;
    border: none;
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 3px 6px rgba(0,0,0,0.2);
}
.badgedownload:hover {
    background: white;
    color: black;
    transform: translateY(-2px);
}

/* ===== TOMBOL KEMBALI ===== */
.badgekembali {
    background: linear-gradient(to right, green, black);
    color: white;
    padding: 8px 20px;
    border-radius: 10px;
    border: none;
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 3px 6px rgba(0,0,0,0.2);
}
.badgekembali:hover {
    background: white;
    color: black;
    transform: translateY(-2px);
}

/* ===== JUDUL DOKUMEN ===== */
.judul-dokumen {
    text-align: center;
    margin-top: 10px;
}

/* ===== AREA PDF VIEWER ===== */
.pdf-container {
    text-align: center !important;
    position: relative;
    width: 100%;
    max-width: 1000px;
    height: 85vh;
    margin: 20px auto;
    border: 1px solid black;
    border-radius: 25px;
    overflow: hidden;
    background: linear-gradient(to bottom, yellow, white, black);
    display: flex;
    align-items: center;
    justify-content: center;
}
.pdf-frame {
    width: 100%;
    height: 100%;
    border: none;
    border-radius: 25px;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
    .controls {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .controls-buttons {
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 100%;
    }

    .badge, .badgedownload, .badgekembali {
        width: 100%;
        font-size: 14px;
        padding: 12px 15px;
    }

    .pdf-container {
        height: 70vh;
    }
}
</style>

<script>
document.getElementById('downloadBtn').addEventListener('click', function() {
    const pdfUrl = '{{ asset('storage/' . $data->peraturan) }}';
    const fileName = '{{ $data->judul }}' + '.pdf';
    const link = document.createElement('a');
    link.href = pdfUrl;
    link.download = fileName;
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
});
</script>



</div>


</div>
</div>
</div>


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
