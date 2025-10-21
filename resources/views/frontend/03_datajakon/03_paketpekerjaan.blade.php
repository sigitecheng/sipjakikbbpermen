@include('frontend.00_atas.header')


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
        Paket Pekerjaan Konstruksi
    </h2>

</div>


{{-- ------------------------------------ END FITUR ------------- --}}



        </div>
        </div>
</div>
</div>



{{-- ------------------------------------------- PERBATASAN FITUR ----------------------------------- --}}
<!-- ====== FULL RESPONSIVE TABEL DENGAN FONT POPPINS ====== -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<div class="container" style="
    display: flex;
    flex-direction: column;
    background-color: #FFCB0F;
    padding: 10px;
    border: 1px solid black;
    border-radius: 25px;
    text-align: center;
    width: 100%;
    margin-top: 5px;
    background: linear-gradient(to bottom, yellow, white, white);
    align-items: center;
    position: relative;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
">

    <style>
        * {
            font-family: 'Poppins', sans-serif !important;
            font-weight: 600 !important;
        }

        .badge {
            background: linear-gradient(to right, black, black);
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            display: inline-block;
            text-align: center;
            font-size: 14px;
            margin-right: 10px;
            transition: background-color 0.3s, color 0.3s;
        }

        .badge:hover {
            background-color: white;
            color: black;
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto;
            margin-top: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 800px;
        }

        th, td {
            color: black;
            font-size: 12px;
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        th {
            background-color: #FFCB0F;
            color: black;
            font-size: 14px;
        }

        .empty-data {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
            font-weight: 600;
            color: #6c757d;
            background-color: #f8f9fa;
            border: 2px dashed #ced4da;
            border-radius: 12px;
            font-size: 16px;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th style="width:45px;">NO</th>
                    <th style="width:200px;">METODE PENGADAAN</th>
                    <th style="width:200px;">INSTANSI</th>
                    <th style="width:200px;">PEKERJAAN</th>
                    <th style="width:75px;">TAHUN ANGGARAN</th>
                    <th style="width:75px;">PROGRESS FISIK</th>
                </tr>
            </thead>

            <tbody>
                @php
                    $start = ($data->currentPage() - 1) * $data->perPage() + 1;
                @endphp

                @forelse($data as $item)
                <tr>
                    <td>{{ $loop->iteration + $start - 1 }}</td>
                    <td>{{ $item->metodepengadaan->metode }}</td>
                    <td>{{ $item->instansi }}</td>
                    <td>{{ $item->pekerjaan }}</td>
                    <td>{{ $item->tahun }}</td>
                    <td>
                        <div style="width: 100%; background-color: #e0e0e0; border-radius: 5px;">
                            <div style="width: {{ $item->progress_fisik }}%; background-color: #4caf50; height: 20px; border-radius: 5px; text-align: center; color: white;">
                                {{ $item->progress_fisik }}%
                            </div>
                        </div>
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
