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
        Agenda Sertifikasi Jasa Konstruksi
    </h2>

</div>




{{-- ------------------------------------ END FITUR ------------- --}}



        </div>
        </div>
</div>
</div>



{{-- ------------------------------------------- PERBATASAN FITUR ----------------------------------- --}}
<div class="container" style="
    display: flex;
    flex-direction: column;
    background: linear-gradient(to bottom, yellow, white, white);
    padding: 10px;
    border: 1px solid black;
    border-radius: 25px;
    text-align: center;
    width: 100%;
    margin-top: 5px;
    height: auto;
    align-items: center;
    position: relative;
">

    <div class="table-wrapper" style="width: 100%; margin-top: 10px;">

        <style>
            /* ======== STYLE UTAMA ======== */
            table {
                width: 100%;
                border-collapse: collapse;
                font-family: 'Lato', sans-serif;
                font-size: 12px;
                text-align: left;
            }

            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                color: black;
                font-weight: 700;
            }

            th {
                background-color: #FFCB0F;
                font-size: 14px;
                text-align: center;
            }

            tr:nth-child(even) {
                background-color: #f9f9f9;
            }

            /* ======== WRAPPER SCROLL RESPONSIVE ======== */
            .table-responsive {
                overflow-x: auto;
                width: 100%;
                border-radius: 10px;
            }

            /* ======== PESAN TIDAK ADA DATA ======== */
            .empty-data {
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
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(10px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            /* ======== SCROLLBAR MODERN ======== */
            .table-responsive::-webkit-scrollbar {
                height: 8px;
            }

            .table-responsive::-webkit-scrollbar-thumb {
                background: #adb5bd;
                border-radius: 10px;
            }

            .table-responsive::-webkit-scrollbar-thumb:hover {
                background: #6c757d;
            }

            /* ======== RESPONSIVE FONT ======== */
            @media (max-width: 768px) {
                th, td {
                    font-size: 11px;
                    padding: 6px;
                }
                th {
                    font-size: 12px;
                }
            }
        </style>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th style="width:45px;">NO</th>
                        <th style="width:100px;">LOKASI</th>
                        <th style="width:100px;">STATUS</th>
                        <th style="width:100px;">AGENDA</th>
                        <th style="width:300px;">KETERANGAN</th>
                        <th style="width:100px;">KUOTA</th>
                        <th style="width:100px;">TANGGAL MULAI</th>
                        <th style="width:100px;">TANGGAL SELESAI</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $start = ($data->currentPage() - 1) * $data->perPage() + 1;
                    @endphp

                    @forelse($data as $item)
                    <tr>
                        <td style="text-align:center;">
                            {{ $loop->iteration + $start - 1 }}
                        </td>
                        <td>{{ $item->pengawasanlokasi->kota }}</td>
                        <td>{{ $item->statusprogram }}</td>
                        <td>{{ $item->nama_agenda }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td style="text-align:center;">{{ $item->kuota }} Orang</td>
                        <td style="text-align:center;">
                            {{ \Carbon\Carbon::parse($item->tanggal_mulai)->locale('id')->translatedFormat('d F Y') }}
                        </td>
                        <td style="text-align:center;">
                            {{ \Carbon\Carbon::parse($item->tanggal_selesai)->locale('id')->translatedFormat('d F Y') }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="100%">
                            <div class="empty-data">
                                <i class="bi bi-folder-x" style="margin-right: 8px; font-size: 20px; color: #dc3545;"></i>
                                Data Tidak Ditemukan !!
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <style>
            .pagination-container {
                color: black;
                margin-top: 15px;
            }

            .page-item:hover {
                background: black;
                color: white;
                border-radius: 5px;
            }
        </style>

    </div>
    @include('frontend.00_atas.pagination')
</div>
{{-- ------------------------------------ END FITUR ------------- --}}



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
