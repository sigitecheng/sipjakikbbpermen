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
Standar Pelayanan Minimal    </h2>

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

    <div class="container">
        <div class="card" style="
            background-color: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            margin: 20px auto;">
            <p style="text-align: justify">

                    {{-- <div class="container"> --}}
                            <p style="text-align: justify">

                                <h4 style="
                                    text-align: justify;
                                    font-family: 'Lato', sans-serif;
                                    font-weight: 700;
                                    font-size: 16px;
                                    ">
                Ketersediaan informasi jasa konstruksi terkini yang terpublikasi dalam sistem informasi sebagai layanan dasar diatur dalam Permen. PU No. 1 Tahun 2014 Tentang  Standar Pelayanan Minimal Bidang Pekerjaan Umum dan Penataan Ruang. Pada tingkat Provinsi, indikator standar pelayanan minimal bidang jasa konstruksi adalah tersedianya layanan informasi jasa konstruksi tingkat provinsi pada SIPJAKI yang terdiri atas:
                                    {{-- <span style="color: darkblue;"><strong>Direktorat Jenderal Bina Konstruksi</strong></span> mempunyai tugas menyelenggarakan perumusan dan pelaksanaan kebijakan di bidang pembinaan jasa konstruksi sesuai dengan ketentuan peraturan perundang-undangan. <br> --}}
                                </h4>
                                <br>

                                    <h4 style="
                                    text-align: justify;
                                    font-family: 'Lato', sans-serif;
                                    font-weight: 700;
                                    font-size: 16px;
                                    margin-bottom: 10px;
                                    ">
                                        <span style="color: darkblue">1. </span>Potensi pasar jasa konstruksi di wilayah Provinsi untuk tahun berjalan yang dapat bersumber dari dana APBD, APBN, dan sumber pendanaan lainnya.
                                    </h4>

                                    <h4 style="
                                    text-align: justify;
                                    font-family: 'Lato', sans-serif;
                                    font-weight: 700;
                                    font-size: 16px;
                                    margin-bottom: 10px;
                                    ">
                                        <span style="color: darkblue">2. </span>Paket pekerjaan jasa konstruksi yang sudah dan sedang dilaksanakan oleh badan usaha jasa konstruksi.

                                    </h4>

                                    <h4 style="
                                    text-align: justify;
                                    font-family: 'Lato', sans-serif;
                                    font-weight: 700;
                                    font-size: 16px;
                                    margin-bottom: 10px;
                                    ">
                                        <span style="color: darkblue">3. </span>Profil Tim Pembina Jasa Konstruksi Daerah Provinsi.


                                    </h4>

                                    <h4 style="
                                    text-align: justify;
                                    font-family: 'Lato', sans-serif;
                                    font-weight: 700;
                                    font-size: 16px;
                                    margin-top: 15px;
                                    margin-bottom: 10px;
                                    ">
                                        <span style="color: darkblue"></span>Pada tingkat Kabupaten/Kota, indikator standar pelayanan minimal bidang jasa konstruksi ada 2, yaitu:


                                    </h4>

                                    <h4 style="
                                    text-align: justify;
                                    font-family: 'Lato', sans-serif;
                                    font-weight: 700;
                                    font-size: 16px;
                                    margin-top: 15px;
                                    margin-bottom: 10px;
                                    ">
                                        <span style="color: darkblue">1. </span>Tersedianya layanan informasi Jasa Konstruksi pada tingkat Kabupaten/Kota pada SIPJAKI yang terdiri atas:
                                        <br> --- a. Izin Usaha Jasa Konstruksi yang terupdate secara berkala.
                                        <br> --- b. Data Badan Usaha Jasa Konstruksi yang terupdate secara berkala.
                                        <br> --- c. Data Tenaga Kerja Jasa Konstruksi yang terupdate secara berkala.
                                        <br> --- d. Potensi pasar jasa konstruksi di wilayah kabupaten/kota untuk tahun berjalan yang dapat bersumber dari dana APBD, APBN, dan sumber pendanaan lainnya.
                                        <br> --- e. Tanda Daftar Usaha Perseorangan yang terupdate secara berkala.
                                        <br> --- f. Daftar upah tenaga kerja dan harga satuan material konstruksi yang terupdate setiap 6 bulan.
                                        <br> --- g. Profil Tim Pembina Jasa Konstruksi di Kabupaten/Kota.

                                    </h4>


                                    <h4 style="
                                    text-align: justify;
                                    font-family: 'Lato', sans-serif;
                                    font-weight: 700;
                                    font-size: 16px;
                                    margin-top: 5px;
                                    margin-bottom: 10px;
                                    ">
                                        <span style="color: darkblue">2. </span>tersedianya layanan Izin Usaha Jasa Konstruksi (IUJK) dengan waktu penerbitan paling lama 10 hari kerja setelah persyaratan lengkap.

                                    </h4>

                                    <h4 style="
                                    text-align: justify;
                                    font-family: 'Lato', sans-serif;
                                    font-weight: 700;
                                    font-size: 16px;
                                    ">
                Pada tahun 2019, pemerintah kabupaten/kota, untuk indikator layanan sistem informasi jasa konstruksi harus mampu menyediakan 60% layanan informasi, sedangkan untuk layanan perizinan IUJK  harus tercapai layanan minimal sebesar 100%.
                <br><br>
                Untuk memenuhi capaian standar pelayanan minimal bidang jasa konstruksi serta membantu tugas kewenangan daerah, pemerintah pusat harus membina dan mendorong pemerintah daerah untuk dapat menyediakan dan mengelola data informasi jasa konstruksi yang selanjutnya dipublikasikan dalam SIPJAKI. Salah satu bentuk pembinaan pusat ke daerah adalah menyiapkan para administrator SIPJAKI baik tingkat provinsi maupun kabupaten/kota yang kompeten dan bertanggung jawab melalui kegiatan pemberdayaan administrator SIPJAKI tingkat provinsi dan kabupaten kota.                     {{-- <span style="color: darkblue;"><strong>Direktorat Jenderal Bina Konstruksi</strong></span> mempunyai tugas menyelenggarakan perumusan dan pelaksanaan kebijakan di bidang pembinaan jasa konstruksi sesuai dengan ketentuan peraturan perundang-undangan. <br> --}}
                                </h4>
                                <br>


                                    <br><br>

                            </p>
                        {{-- </div> --}}
                </div>
                </div>
            </div>
        </div>
        </div>



<br><br> <br><br>
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
