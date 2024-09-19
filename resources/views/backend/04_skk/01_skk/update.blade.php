@include('backend.00_dashboard.part.header')
@include('backend.00_dashboard.part.menuheader')
@include('backend.00_dashboard.part.sidebar')
    
    <!--Page Wrapper-->

        <!--Main Content-->

            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content  pl-0">

                    
                <div class="row mb-0 ">
                    <div class="font-bold col-sm-8"><h6 class="mb-4 bc-header">.</h6></div>
                    <div class="col-sm-4 text-right pb-3">
                        <div class="pull-right mr-3 btn-order-bulk">
                        
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="container" style="
    display: flex;
    flex-direction: column;
    background-color: #FFCB0F;
    padding: 10px;
    border: 1px solid black;
    margin-bottom: 10px;
    margin-top: none;
    border-radius: 25px;
    text-align: center;
    width: 100%;
    height: 120vh;
    margin-left: none;
    background: linear-gradient(to bottom, yellow, white, black);
    align-items: center;
    position: relative;
">
<div style="display: flex; align-items: center;">
    <img src="/assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; margin: 0 10px;">
    <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; object-fit: cover; margin: 0 10px;">
</div>


    <h1 style="margin-top:10px; font-size: 16px; font-family: 'Lato', sans-serif; font-weight: 700; "><span style="color: #000000;"> Kementrian Pekerjaan Umum Dan Penataan Ruang </span></h1>
    <div class="container">
        <div class="card" style="
            background-color: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            margin: 20px auto;
            align-items: center;
            "
            >


            {{-- ------------------------------------ FITUR TAMBAHAN ------------- --}}

            <div class="controls" style="  
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-radius:5px;
            ">
<div class="show-entries" style="border-radius: 10px;">
    <label for="entries" style="margin-right: 5px;">
        <style>
          
         
          /* Untuk memastikan tata letak responsif, Anda bisa menggunakan media queries */
@media (min-width: 768px) {
    .badge {
                background: linear-gradient(to right, yellow, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                margin-right: 10px;
                text-align: center;
                font-size: 12px;
                margin-right: 400px;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badge:hover {
                background: white;
                color: black;
                background: white;
            }

    .badgeupdate {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badgeupdate:hover {
                background: white;
                color: black;
                background: white;
            }
            
    .badgenewupdate {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badgenewupdate:hover {
                background: white;
                color: black;
                background: white;
            }

    
    .badgedownload {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 8px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
            }
            .badgedownload:hover {
                background: white;
                color: black;
                background: white;
            }
    
    .badgekembali {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
            }
            .badgekembali:hover {
                background: white;
                color: black;
                background: white;
            }
    
    .badgehidden {
                background: linear-gradient(to right, white, white);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
            }
    
}

        </style>
        <a style="background: white;">
            <div class="badge"><i class="fas fa-file mr-2"></i>Update Data Pekerja Jasa Konstruksi </div></label>
        </a>
        
        <a href="/beskktenagakerja" style="background: white;">
            <button class="badgekembali" style="border: none; font-size:12px; cursor:pointer; "> <i class="fa fa-arrow-left" style="margin-right: 5px;"></i>Kembali</button>
        </a>

        <br>
                {{-- ========================================= --}}

        <style>
            
@media (min-width: 768px) {

            .container-update {
                /* margin-top: 500px; */
                width: 920px;
                height: 80vh;
                margin: 0 auto;
                padding: 20px;
                background-color: #E0E0E0; /* Warna silver */
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            /* Style untuk .form-group */
            .form-group {
                margin-bottom: 1rem; /* Jarak antar form group */
            }

            /* Style untuk .form-group-inner */
            .form-group-inner {
                display: flex;
                align-items: center; /* Vertikal center alignment */
                margin-bottom: 0.5rem;
            }

            .form-group-inner label {
                flex: 1;
                margin-right: 1rem; /* Jarak antara label dan input */
                text-align: left; /* Label teks rata kiri */
            }

            .form-group-inner input {
                flex: 4;
            }

            .success-message {
                color: green;
                margin-bottom: 20px;
            }

            .preview-container {
            display: flex;
            align-items: center;
        }

        .img-preview {
            max-width: 100px;
            max-height: 100px;
            margin-right: 10px;
            object-fit: cover;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

            

        }
        </style>
    
<br>
        <div class="container-update" style="col-lg-12">
            <!-- Menampilkan pesan sukses jika ada -->
            {{-- <form action="/beritaagendaupdatestore/{{$beritaagenda->nama_agenda}}" method="POST"> --}}
                <form action="/newtenagakerja/{{$datatukangterampil->nama}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST') <!-- Use PUT for update -->
                    
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="nama" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-user-circle me-2"></i> Nama Lengkap
                        </label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $datatukangterampil->nama) }}" required>
                    </div>
                    
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="tanggal_lahir" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-user-circle me-2"></i> Tanggal Lahir
                        </label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir', $datatukangterampil->tanggal_lahir) }}" required>
                    </div>
                    
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="pengawasanlokasi_id" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-map-marker-alt me-2"></i> Lokasi Pengawasan
                        </label>
                        <select class="form-control" id="pengawasanlokasi_id" name="pengawasanlokasi_id" required>
                            @foreach ($datapengawasanlokasi as $lokasi)
                                <option value="{{ $lokasi->id }}" {{ old('pengawasanlokasi_id', $datatukangterampil->pengawasanlokasi_id) == $lokasi->id ? 'selected' : '' }}>
                                    {{ $lokasi->kota }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="keterampilanpekerja_id" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-cogs me-2"></i> Keterampilan
                        </label>
                        <select class="form-control" id="keterampilanpekerja_id" name="keterampilanpekerja_id" required>
                            @foreach ($dataketerampilan as $keterampilan)
                                <option value="{{ $keterampilan->id }}" {{ old('keterampilanpekerja_id', $datatukangterampil->keterampilanpekerja_id) == $keterampilan->id ? 'selected' : '' }}>
                                    {{ $keterampilan->keterampilan }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="tahunpilihan_id" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-calendar-alt me-2"></i> Tahun Bimtek
                        </label>
                        <select class="form-control" id="tahunpilihan_id" name="tahunpilihan_id" required>
                            @foreach ($datatahunpilihan as $tahun)
                                <option value="{{ $tahun->id }}" {{ old('tahunpilihan_id', $datatukangterampil->tahunpilihan_id) == $tahun->id ? 'selected' : '' }}>
                                    {{ $tahun->tahun }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="desa" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-home me-2"></i> Desa
                        </label>
                        <input type="text" class="form-control" id="desa" name="desa" value="{{ old('desa', $datatukangterampil->desa) }}" required>
                    </div>
                    
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="alamat" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-address-card me-2"></i> Alamat
                        </label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $datatukangterampil->alamat) }}" required>
                    </div>
                    
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="nik" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-id-card me-2"></i> NIK
                        </label>
                        <input type="text" class="form-control" id="nik" name="nik" value="{{ old('nik', $datatukangterampil->nik) }}" required>
                    </div>
                
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="kualifikasi" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-graduation-cap me-2"></i> Kualifikasi
                        </label>
                        <select class="form-control" id="kualifikasi" name="kualifikasi" required>
                            <option value="SUDAH" {{ old('kualifikasi', $datatukangterampil->kualifikasi) == 'SUDAH' ? 'selected' : '' }}>SUDAH</option>
                            <option value="BELUM" {{ old('kualifikasi', $datatukangterampil->kualifikasi) == 'BELUM' ? 'selected' : '' }}>BELUM</option>
                        </select>
                    </div>
                
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="registrasi" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-registered me-2"></i> Registrasi
                        </label>
                        <select class="form-control" id="registrasi" name="registrasi" required>
                            <option value="SUDAH" {{ old('registrasi', $datatukangterampil->registrasi) == 'SUDAH' ? 'selected' : '' }}>SUDAH</option>
                            <option value="BELUM" {{ old('registrasi', $datatukangterampil->registrasi) == 'BELUM' ? 'selected' : '' }}>BELUM</option>
                        </select>
                    </div>
                
                    <div class="form-group">
                        <button style="float: right" class="badgenewupdate btn btn-primary" type="submit">
                            <i class="fas fa-paper-plane" style="margin-right:10px;"></i> Update
                        </button>
                    </div>
                </form>
                
        </div>


        {{-- ========================================= --}}

        {{-- @foreach ($data as $items )
                    
                <a href="/peruud/{{$items->peraturan}}" style="background: white;">
                    <button class="badgeupdate" style="border: none; font-size:12px; cursor:pointer; "> <i class="fas fa-file" style="margin-right: 5px;"></i> Update</button>
                </a>
                @endforeach
                        <button class="badgeupdate" style="border: none; font-size:12px; cursor:pointer; "> <i class="fas fa-file" style="margin-right: 5px;"></i> Update</button> --}}
                        <!-- <button id="downloadBtn" class="badge" style="border:none; font-size:12px; cursor:pointer "> <i class="fas fa-download"></i> Download</button> -->
                        
      

</div>

    
</div>
</div>

             

        </div>

        
                
        </div>
        <hr style="border:0; height:5px; background-color:navy; margin: 20px 0px;">
        @include('backend.00_dashboard.part.menufooter')
    </div>
</div>
        </div>
        
        <!--Main Content-->
        
    </div>
    @include('backend.00_dashboard.part.footer')
    

    