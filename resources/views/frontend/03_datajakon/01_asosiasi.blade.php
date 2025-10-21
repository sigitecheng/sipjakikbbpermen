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
    Asosiasi Pengusaha Jasa Konstruksi
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
    border: 1px solid black;
    border-radius: 25px;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 0px;
    text-align: center;
    align-items: center;
    width: 100%;
    height: auto;
    position: relative;
">

    <style>
        /* ===================== BADGE ===================== */
        .badge {
            background: linear-gradient(to right, black, black);
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            display: inline-block;
            text-align: center;
            font-size: 14px;
            transition: background-color 0.3s, color 0.3s;
        }

        .badge:hover {
            background-color: white;
            color: black;
        }

        /* ===================== TABLE WRAPPER ===================== */
        .table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            margin-top: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            white-space: nowrap;
            min-width: 600px;
        }

        th, td {
            font-family: 'Lato', sans-serif;
            font-weight: 700;
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

        /* ===================== ICON BUTTON ===================== */
        .button-container {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .iconhover {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 25px;
            height: 25px;
            background: black;
            color: white;
            border: none;
            border-radius: 50%;
            text-decoration: none;
            font-size: 15px;
            transition: background 0.3s, color 0.3s;
        }

        .iconhover:hover {
            background: white;
            color: black;
        }

        /* ===================== EMPTY DATA STYLE ===================== */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

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

        /* ===================== PAGINATION ===================== */
        .pagination-container {
            color: black;
        }

        .page-item:hover {
            background: black;
            color: white;
        }
    </style>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th style="width:45px;">NO</th>
                    <th style="width:200px;">NAMA ASOSIASI</th>
                    <th style="width:200px;">KONTAK</th>
                    <th style="width:100px;">JUMLAH ANGGOTA</th>
                    <th style="width:100px;">STATUS</th>
                    <th style="width:50px;">VIEW</th>
                </tr>
            </thead>

            <tbody>
                @php
                    $start = ($data->currentPage() - 1) * $data->perPage() + 1;
                @endphp

                @forelse($data as $item)
                    <tr>
                        <td>{{ $loop->iteration + $start - 1 }}</td>
                        <td style="text-transform: uppercase;">{{ $item->nama_asosiasi }}</td>
                        <td style="text-transform: uppercase;">{{ $item->kontak }}</td>
                        <td style="text-transform: uppercase;">{{ $item->jumlah_anggota }}</td>
                        <td style="text-transform: uppercase;">{{ $item->status }}</td>
                        <td>
                            <div class="button-container">
                                <a href="/datajakon/asosiasi/{{ $item->nama_asosiasi }}" class="iconhover" title="View">
                                    <i class="fas fa-eye"></i>
                                </a>
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
    @include('frontend.00_atas.pagination')
    </div>

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
