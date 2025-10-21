catatan ssh

ssh -p 65002 u870730769@153.92.9.229


password : Adminadmin123$$


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
