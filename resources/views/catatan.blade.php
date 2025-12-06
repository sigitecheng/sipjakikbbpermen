catatan ssh

ssh -p 65002 u870730769@153.92.9.229



CATATAN KODE



   <div style="margin-top: 10px;">
    @if($data->peraturan && file_exists(public_path('storage/' . $data->peraturan)))
        <!-- Menampilkan gambar dari storage -->
        <img src="{{ asset('storage/' . $data->peraturan) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
    @elseif($data->peraturan)
        <!-- Menampilkan gambar dari path luar storage -->
        <img src="{{ asset($data->peraturan) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
    @else
        <!-- Placeholder jika tidak ada data -->
        <p>Data belum diupdate</p>
    @endif
</div>


UNTUK SPASI
<div>
    {!! nl2br(e($laporankegiatan->keterangan_berita)) !!}
</div>


{{-- KOMENTATOR --}}


                    <!-- Comment Form Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tinggalkan Komentar</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            <form>
                                <div class="form-row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" id="website">
                                </div> --}}

                                <div class="form-group">
                                    <label for="message">Message *</label>
                                    <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="submit" value="Leave a comment"
                                        class="btn btn-primary font-weight-semi-bold py-2 px-3">
                                </div>
                            </form>
                        </div>


                    </div>

                    {{-- KOMENTAR --}}


                    <!-- Comment List Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Komentar </h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            <div class="media mb-4">
                                <img src="/assets/icon/sipjakikbb.png" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a class="text-secondary font-weight-bold" href="">Pemerintah Kabupaten Bandung Barat</a></h6>
                                    <p>Coming Soon</p>
                                    <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                </div>
                            </div>
                            <div class="media">
                                <img src="/assets/icon/sipjakikbb.png" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a class="text-secondary font-weight-bold" href="">Pemerintah Kabupaten Bandung Barat</a> <small></small></h6>
                                    <p>Coming soon</p>
                                    <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                    <div class="media mt-4">
                                        <img src="/assets/icon/sipjakikbb.png" alt="Image" class="img-fluid mr-3 mt-1"
                                            style="width: 45px;">
                                        <div class="media-body">
                                            <h6><a class="text-secondary font-weight-bold" href="">Pemerintah Kabupaten Bandung Barat</a> <small></small></h6>
                                            <p>Coming Soon</p>
                                            <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Comment List End -->


{{-- ----------------------- --}}


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
        Struktur Dinas Pekerjaan Umum Dan Tata Ruang <br> Kabupaten Bandung Barat
    </h2>

</div>






<script>
function searchMaterial() {
    let input = document.getElementById("searchMaterial").value;

    fetch(`/satuanhargamaterialkbb?search=${encodeURIComponent(input)}`)
        .then(response => response.text())
        .then(html => {
            let parser = new DOMParser();
            let doc = parser.parseFromString(html, "text/html");
            let newTableBody = doc.querySelector("#tableBody").innerHTML;
            document.querySelector("#tableBody").innerHTML = newTableBody;
        })
        .catch(error => console.error("Error fetching search results:", error));
}
</script>


    <div class="shop__search blog__search" style="margin-bottom: 20px;">
                            <input
                                type="text"
                                id="searchMaterial"
                                placeholder="Cari Bahan Material"
                                oninput="searchMaterial()"
                                class="w-full appearance-none outline-none text-sm font-medium placeholder:font-normal placeholder:text-[#545768] bg-transparent font-[Poppins]"
                            />
                            <button type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M17 17L13.5247 13.5247M15.681 8.3405C15.681 12.3945 12.3945 15.681 8.3405 15.681C4.28645 15.681 1 12.3945 1 8.3405C1 4.28645 4.28645 1 8.3405 1C12.3945 1 15.681 4.28645 15.681 8.3405Z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>



<section style="background: #FFFFFF; width: 100%; min-height: 100vh;">


:root {
    --primary-green: #FF8C00;  /* Orange PUPR */
    --dark-green: #E67300;
    --light-green: #FFE5B4;
    --accent-green: #FFD699;
}



        @empty
    <tr>
        <td colspan="100%"> {{-- Memenuhi semua kolom --}}
            <div style="
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 30px;
                font-weight: 600;
                font-family: 'Poppins', sans-serif;
                color: #6c757d;
                background-color: #f8f9fa;
                border: 2px dashed #ced4da;
                border-radius: 12px;
                font-size: 16px;
                animation: fadeIn 0.5s ease-in-out;
            ">
                <i class="bi bi-folder-x" style="margin-right: 8px; font-size: 20px; color: #dc3545;"></i>
                Data Tidak Ditemukan !!
            </div>
        </td>
    </tr>
@endforelse

<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>



<script>
function previewHeader(event) {
    const previewDiv = document.getElementById('preview-header');
    const previewImg = document.getElementById('preview-header-img');
    const oldWrapper = document.getElementById('old-header-wrapper');

    const file = event.target.files[0];

    if (file) {
        previewDiv.style.display = "block";    // Tampilkan preview
        previewImg.src = URL.createObjectURL(file);

        oldWrapper.style.opacity = "0.4";      // Gambar lama dipudarkan
        oldWrapper.style.filter = "grayscale(100%)"; // Tambah efek abu² biar jelas ini yg lama
    }
}
</script>



                 @include('frontend.A00_new.01_halamanutama.newpaginations')


                     @include('backend.00_administrator.00_baganterpisah.12_judulupdate')

                     <section style="background-color: #ECEEF3; width: 100%; min-height: 100vh;">




                        {{-- ============================================================================= --}}


                        <div style="position: relative; display: inline-block; margin-right:10px; width:300px;">
    <input type="search" id="searchInput"
           placeholder="Cari Badan Usaha ...."
           onkeyup="searchTable()"
           style="border: 1px solid #ccc;
                  padding: 10px 40px 10px 15px;
                  font-size: 14px;
                  border-radius: 10px;
                  width: 100%;">
    <i class="bi bi-search"
       style="position: absolute;
              right: 15px;
              top: 50%;
              transform: translateY(-50%);
              font-size: 16px;
              color: #888;"></i>
</div>

                        <script>
                            function updateEntries() {
                                let selectedValue = document.getElementById("entries").value;
                                let url = new URL(window.location.href);
                                url.searchParams.set("perPage", selectedValue);
                                window.location.href = url.toString();
                            }

                            function searchTable() {
                            let input = document.getElementById("searchInput").value;

                            fetch(`/bebujkkonstruksi?search=${input}`)
                                .then(response => response.text())
                                .then(html => {
                                    let parser = new DOMParser();
                                    let doc = parser.parseFromString(html, "text/html");
                                    let newTableBody = doc.querySelector("#tableBody").innerHTML;
                                    document.querySelector("#tableBody").innerHTML = newTableBody;
                                })
                                .catch(error => console.error("Error fetching search results:", error));
                        }

                                </script>

