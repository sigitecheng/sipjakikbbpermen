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
Jumlah Kasus Kecelakaan Kerja</h2>

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
    margin-bottom: 0px;
    border-radius: 25px;
    text-align: center;
    width: 100%;
    margin-top:5px;
    height: auto;
    background: linear-gradient(to bottom, yellow, white, white);
    align-items: center;
    position: relative;
">


<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<style>
    /* Container untuk setiap chart */
    .chart-container {
        margin: 15px auto; /* Margin untuk memberi jarak */
        width: 90%; /* Lebar responsif */
        max-width: 900px; /* Maksimal lebar lebih besar */
        height: 450px; /* Tinggi untuk memperpanjang chart */
        border-radius: 10px; /* Sudut yang membulat */
        background-color: #f9f9f9; /* Latar belakang terang */
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1); /* Bayangan halus */
        padding: 20px; /* Ruang di dalam container */
        position: relative; /* Untuk positioning yang lebih baik */
    }

    /* Judul chart */
    .canvasjs-chart-title {
        font-family: 'Roboto', sans-serif; /* Font yang konsisten */
        font-size: 12px; /* Ukuran font yang lebih besar */
        font-weight: bold; /* Membuat judul lebih tegas */
        text-align: center; /* Memusatkan teks */
        color: #333; /* Warna teks yang kontras */
        margin-bottom: 10px; /* Spasi di bawah judul */
    }

    /* Legend styling (opsional) */
    .canvasjs-chart-legend {
        font-family: 'Roboto', sans-serif; /* Font konsisten */
        font-size: 12px; /* Ukuran font legend */
    }

    /* Tooltip styling */
    .canvasjs-tooltip {
        border-radius: 8px; /* Sudut yang membulat */
        padding: 8px; /* Padding dalam tooltip */
        background-color: rgba(0, 0, 0, 0.7); /* Latar belakang gelap */
        color: white; /* Teks putih */
        font-size: 12px; /* Ukuran font tooltip */
    }
</style>


 <script>
     window.onload = function () {
         var data = @json($data);

         var chart = new CanvasJS.Chart("chartContainer-1", {
             animationEnabled: true,
             theme: "light2",
             title:{
                 text: ""
             },
             axisX: {
                 title: "",
                 valueFormatString: "YYYY"
             },
             axisY: {
                 title: "Kasus",
                 includeZero: true
             },
             data: [{
                 type: "line",
                 indexLabelFontSize: 16,
                 dataPoints: data.map(function(point) {
                     return { x: new Date(point.tahun, 0), y: point.kasus };
                 })
             }]
         });
         chart.render();

          var data_2 = @json($data_2);

            // Format data untuk CanvasJS
            var dataPoints = data_2.map(function(point) {
                return { x: new Date(point.tahun, 0), y: point.kasus };
            });

            var chart2 = new CanvasJS.Chart("chartContainer-2", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title:{
                    text: ""
                },
                axisX: {
                    title: "",
                    valueFormatString: "YYYY"
                },
                axisY: {
                    title: "Kasus",
                    includeZero: true
                },
                data: [{
                    type: "column",
                    showInLegend: true,
                    legendMarkerColor: "grey",
                    legendText: "Kasus",
                    dataPoints: dataPoints
                }]
            });
            chart2.render();


     }
 </script>

{{-- <div class="container-kasus" style="width: 950px;">
     <h5>Grafik Kasus Setiap Tahun</h5>

     <div id="chartContainer"></div>
     <h6>Sumber : Badan Penyelenggara Jaminan Sosial Ketenagakerjaan Republik Indonesia</h6>
 </div> --}}

 <div class="chart-container">
    <div id="chartContainer-1" style="height: 400px;"></div>
    <h5>Grafik Kasus Setiap Tahun</h5>
     <div id="chartContainer"></div>
     <h6>Sumber : Badan Penyelenggara Jaminan Sosial Ketenagakerjaan Republik Indonesia</h6>
</div>

 <div class="chart-container">
    <div id="chartContainer-2" style="height: 400px;"></div>
</div>
{{--
 <div class="container-kasus2" style="width: 950px;">
     <h5>Grafik Kasus Setiap Tahun</h5>

     <div id="chartContainer2"></div>
     <h6>Sumber : Badan Penyelenggara Jaminan Sosial Ketenagakerjaan Republik Indonesia</h6>
 </div> --}}



</div>
{{-- ------------------------------------ END FITUR ------------- --}}



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
