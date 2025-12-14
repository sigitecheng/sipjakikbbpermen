
<div class="container">
    <div class="row">
        <div class="col-12 mb-3">
            <div class="w-100 d-flex align-items-center justify-content-between p-4"
                style="
                    background: linear-gradient(135deg, #f8f9fa, #eef2f7);
                    border-left: 6px solid #0d6efd;
                    border-radius: 12px;
                    box-shadow: 0 3px 10px rgba(0,0,0,0.06);
                ">

                <!-- TITLE -->
                <div class="d-flex align-items-center gap-3">
                    <div style="
                        width:42px;
                        height:42px;
                        border-radius:10px;
                        background:#0d6efd;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        color:white;
                        box-shadow: 0 3px 8px rgba(13,110,253,0.35);
                    ">
                        <i class="bi bi-briefcase-fill"></i>
                    </div>

                    <div>
                        <div style="
                            font-family:'Poppins';
                            font-size:18px;
                            font-weight:700;
                            color:#212529;
                        ">
                            {{ $title ?? 'Data Paket Pekerjaan' }}
                        </div>

                        <div style="
                            font-family:'Poppins';
                            font-size:13px;
                            color:#6c757d;
                        ">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
