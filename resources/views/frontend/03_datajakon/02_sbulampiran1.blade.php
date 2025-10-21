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
Lampiran 1 Standar Biaya Umum
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
    background-color: #FFCB0F;
    padding: 10px;
    border: 1px solid black;
    border-radius: 25px;
    text-align: center;
    width: 100%;
    margin-top: 5px;
    height: auto;
    background: linear-gradient(to bottom, yellow, white, white);
    align-items: center;
    position: relative;
">

    {{-- ================= FONT ================= --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        * {
            font-family: 'Poppins', sans-serif !important;
        }

        /* ===== BADGE STYLE ===== */
        .badge {
            background: linear-gradient(to right, black, black);
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            display: inline-block;
            font-size: 14px;
            margin-right: 10px;
            text-align: center;
            transition: background-color 0.3s, color 0.3s;
        }

        .badge:hover {
            background-color: white;
            color: black;
        }

        .badge-lampiran {
            background: linear-gradient(to right, navy, black);
            color: white;
            padding: 8px 15px;
            border-radius: 10px;
            display: inline-block;
            font-size: 12px;
            margin-top: 25px;
            margin-right: 10px;
            text-align: right;
            transition: background-color 0.3s, color 0.3s;
            float: right;
            border: none;
            cursor: pointer;
        }

        .badge-lampiran:hover {
            background: white;
            color: black;
        }

        /* ===== TABLE STYLE ===== */
        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-left: 10px;
            margin-right: 10px;
        }

        th, td {
            font-weight: 700;
            color: black;
            font-size: 12px;
            border: 1px solid #ddd;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        th {
            background-color: #FFCB0F;
            color: black;
            font-size: 14px;
        }

        /* ===== ICON BUTTON ===== */
        .button-container {
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .iconhover {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 25px;
            height: 25px;
            background: navy;
            color: white;
            border-radius: 50%;
            font-size: 15px;
            transition: background 0.3s, color 0.3s;
            cursor: pointer;
            border: none;
        }

        .iconhover:hover {
            background: white;
            color: black;
            border: 1px solid black;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            th, td {
                font-size: 11px;
                padding: 6px;
            }

            .badge-lampiran {
                float: none;
                display: block;
                margin: 10px auto;
            }
        }

        @media (max-width: 480px) {
            .container {
                border-radius: 15px;
                padding: 10px;
                height: auto;
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>

    {{-- ================= TABLE ================= --}}
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th style="width:45px;">NO</th>
                    <th style="width:900px;">JUDUL</th>
                    <th>VIEW</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $start = ($data->currentPage() - 1) * $data->perPage() + 1;
                @endphp

                @forelse($data as $item)
                <tr>
                    <td>{{ $loop->iteration + $start - 1 }}</td>
                    <td style="text-align:left;">{{ $item->judul }}</td>
                    <td>
                        <div class="button-container">
                            <a href="/datajakon/fesbulampiran1/{{ $item->judul }}" class="iconhover" title="Lihat Data">
                                <i class="bi bi-eye"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">
                        <div style="
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
                        ">
                            <i class="bi bi-folder-x" style="margin-right: 8px; font-size: 20px; color: #dc3545;"></i>
                            Data Tidak Ditemukan !!
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- ================= BUTTON LAMPIRAN ================= --}}
    <div class="div" style="width:100%; text-align:right;">
        <a href="/datajakon/fesbulampiran3">
            <button class="badge-lampiran"><i class="bi bi-file-earmark-text" style="margin-right: 5px;"></i>Lampiran 3</button>
        </a>

        <a href="/datajakon/fesbulampiran2">
            <button class="badge-lampiran"><i class="bi bi-file-earmark-text" style="margin-right: 5px;"></i>Lampiran 2</button>
        </a>

        <a href="/datajakon/standarbiayaumum">
            <button class="badge-lampiran"><i class="bi bi-file-earmark-text" style="margin-right: 5px;"></i>Standar Biaya Umum</button>
        </a>
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
