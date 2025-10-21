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




{{-- ------------------------------------ END FITUR ------------- --}}



        </div>
        </div>
</div>
</div>



{{-- ------------------------------------------- PERBATASAN FITUR ----------------------------------- --}}
<div class="container" style="
    display: flex;
    flex-direction: column;
    align-items: center;
    background: linear-gradient(to bottom, yellow, white, white);
    padding: 10px;
    border: 1px solid black;
    border-radius: 25px;
    width: 100%;
    height: auto;
    margin-top: 5px;
    text-align: center;
    position: relative;
">

    {{--
    <div style="display: flex; align-items: center;">
        <img src="/assets/icon/pupr.png" alt="Logo PUPR" style="width: 50px; height: 50px; margin: 0 10px;">
        <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; margin: 0 10px;">
    </div>
    --}}

    <style>
        /* ---------- BADGES ---------- */
        .badge,
        .badge-plus,
        .badge-lampiran {
            color: white;
            padding: 8px 15px;
            border-radius: 10px;
            display: inline-block;
            font-size: 12px;
            text-align: center;
            transition: background-color 0.3s, color 0.3s;
            border: none;
            cursor: pointer;
        }

        .badge {
            background: linear-gradient(to right, black, black);
        }

        .badge:hover {
            background-color: white;
            color: black;
        }

        .badge-plus {
            background: linear-gradient(to right, navy, black);
            font-size: 1rem;
            float: right;
            margin-left: 325px;
        }

        .badge-plus:hover {
            background: white;
            color: black;
        }

        .badge-lampiran {
            background: linear-gradient(to right, navy, black);
            margin-top: 25px;
            margin-right: 10px;
            float: right;
        }

        .badge-lampiran:hover {
            background: white;
            color: black;
        }

        /* ---------- TABLE STYLING ---------- */
        .table-wrapper {
            width: 100%;
            overflow-x: auto;
            overflow-y: auto;
            max-height: 70vh;
            border-radius: 10px;
            border: 1px solid #ddd;
            background: white;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px;
        }

        th,
        td {
            font-family: 'Lato', sans-serif;
            font-weight: 700;
            color: black;
            font-size: 12px;
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #FFCB0F;
            font-size: 14px;
            position: sticky;
            top: 0;
            z-index: 1;
        }

        tr:nth-child(even) {
            background-color: #f8f8f8;
        }

        /* ---------- ICON BUTTONS ---------- */
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
            background: navy;
            color: white;
            border-radius: 50%;
            font-size: 15px;
            transition: background 0.3s, color 0.3s;
        }

        .iconhover:hover {
            background: white;
            color: black;
        }

        .empty-data {
            text-align: center;
            font-weight: bold;
            color: #555;
            padding: 20px 0;
        }

        /* ---------- RESPONSIVE ---------- */
        @media (max-width: 768px) {
            th, td {
                font-size: 11px;
                padding: 6px;
            }

            .badge-lampiran {
                font-size: 10px;
                padding: 6px 10px;
                margin-top: 15px;
            }
        }
    </style>

    <br>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th style="width:45px;">NO</th>
                    <th style="min-width:250px;">JUDUL</th>
                    <th>AKSI</th>
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
                                <a href="/datajakon/standarbiayaumum/{{ $item->judul }}" class="iconhover" title="Lihat">
                                    <i class="fas fa-eye" style="color:black;"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="100%">
                            <div class="empty-data">
                                <i class="bi bi-folder-x" style="margin-right:8px; font-size:20px; color:#dc3545;"></i>
                                Data Tidak Ditemukan !!
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div style="width: 100%; margin-top: 15px;">
        <a href="/datajakon/fesbulampiran3" style="background: inherit">
            <button class="badge-lampiran"><i class="fas fa-file" style="margin-right:5px;"></i>Lampiran 3</button>
        </a>
        <a href="/datajakon/fesbulampiran2" style="background: inherit">
            <button class="badge-lampiran"><i class="fas fa-file" style="margin-right:5px;"></i>Lampiran 2</button>
        </a>
        <a href="/datajakon/fesbulampiran1" style="background: inherit">
            <button class="badge-lampiran"><i class="fas fa-file" style="margin-right:5px;"></i>Lampiran 1</button>
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
