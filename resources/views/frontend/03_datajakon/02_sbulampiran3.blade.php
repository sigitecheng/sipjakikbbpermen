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
    Lampiran 3 Standar Biaya Umum
    </h2>

</div>



{{-- ------------------------------------ END FITUR ------------- --}}



        </div>
        </div>
</div>
</div>



{{-- ------------------------------------------- PERBATASAN FITUR ----------------------------------- --}}
<!-- ====== FULL VERSION DENGAN FONT POPPINS ====== -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

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
    margin-top: 5px;
    height: auto;
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
            box-sizing: border-box;
        }

        /* ===== BADGE ===== */
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

        /* ===== TABLE ===== */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 10px;
        }

        th, td {
            color: black;
            font-size: 12px;
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #FFCB0F;
            color: black;
            font-size: 14px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
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
            width: 28px;
            height: 28px;
            background: navy;
            color: white;
            border: none;
            border-radius: 50%;
            text-decoration: none;
            font-size: 15px;
            transition: background 0.3s, color 0.3s;
            cursor: pointer;
        }

        .iconhover:hover {
            background: white;
            color: black;
        }

        /* ===== BADGE LAMPIRAN ===== */
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
        }

        .badge-lampiran:hover {
            background: white;
            color: black;
        }
    </style>

    <div class="div">
        <br>
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

                @foreach($data as $item)
                <tr>
                    <td>{{ $loop->iteration + $start - 1 }}</td>
                    <td style="text-align:left;">{{ $item->judul }}</td>
                    <td>
                        <div class="button-container">
                            <a href="/datajakon/fesbulampiran3/{{$item->judul}}" class="iconhover" title="Lihat Data">
                                <i class="bi bi-eye-fill"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="/datajakon/standarbiayaumum" style="background: inherit;">
            <button class="badge-lampiran" style="border: none; cursor: pointer;">
                <i class="bi bi-file-earmark-text-fill" style="margin-right: 5px;"></i>Standar Biaya Umum
            </button>
        </a>
        <a href="/datajakon/fesbulampiran1" style="background: inherit;">
        <div class="div">

            <a href="/datajakon/fesbulampiran2" style="background: inherit;">
                <button class="badge-lampiran" style="border: none; cursor: pointer;">
                    <i class="bi bi-file-earmark-text-fill" style="margin-right: 5px;"></i>Lampiran 2
                </button>
            </a>

                <button class="badge-lampiran" style="border: none; cursor: pointer;">
                    <i class="bi bi-file-earmark-text-fill" style="margin-right: 5px;"></i>Lampiran 1
                </button>
            </a>
        </div>
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
