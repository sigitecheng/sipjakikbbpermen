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

<div class="controls-container">
    <div class="controls">
        <div class="badge"><i class="fas fa-file mr-2"></i>Standar Biaya Umum</div>

        <div class="controls-right">
            <a href="/datajakon/standarbiayaumum">
                <button class="badgekembali">
                    <i class="fa fa-arrow-left" style="margin-right: 5px;"></i> Kembali
                </button>
            </a>

            <button class="badgedownload" id="downloadBtn">
                <i class="fas fa-download me-2"></i> Download .pdf
            </button>
        </div>
    </div>

    <div class="pdf-container">
        <iframe class="pdf-frame" src="{{ asset('storage/' . $data->peraturan) }}"></iframe>
    </div>
</div>

<style>
/* 🌈 RESET & WRAPPER */
.controls-container {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
}

/* 🧭 Kontrol Atas */
.controls {
    display: flex;
    flex-wrap: wrap; /* agar responsif */
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
    gap: 10px;
}

/* 🎖️ Badge Utama */
.badge {
    background: linear-gradient(to right, yellow, black);
    color: white;
    padding: 10px 20px;
    border-radius: 10px;
    display: inline-block;
    font-size: 12px;
    font-weight: 600;
    transition: all 0.3s ease;
}
.badge:hover {
    background: white;
    color: black;
}

/* 📤 Tombol Download */
.badgedownload {
    background: linear-gradient(to right, navy, black);
    color: white;
    padding: 8px 20px;
    border-radius: 10px;
    border: none;
    font-size: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
}
.badgedownload:hover {
    background: white;
    color: black;
}

/* ⬅️ Tombol Kembali */
.badgekembali {
    background: linear-gradient(to right, green, black);
    color: white;
    padding: 8px 20px;
    border-radius: 10px;
    border: none;
    font-size: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
}
.badgekembali:hover {
    background: white;
    color: black;
}

/* 🧱 Area PDF Viewer */
.pdf-container {
    width: 100%;
    max-width: 1000px;
    margin: 0 auto;
    border: 1px solid black;
    border-radius: 25px;
    overflow: hidden;
    background: linear-gradient(to bottom, yellow, white, black);
    height: 85vh;
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

/* 📱 Responsif */
@media (max-width: 768px) {
    .controls {
        flex-direction: column;
        align-items: stretch;
        text-align: center;
    }
    .controls-right {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    .badge, .badgedownload, .badgekembali {
        font-size: 14px;
        padding: 10px 15px;
        width: 100%;
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
