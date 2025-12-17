@include('button')

<div class="container-fluid px-0">
    <div class="w-100 px-0 mb-3">
        <div class="d-flex align-items-center p-4"
             style="
                background: linear-gradient(135deg, #f8f9fa, #eef2f7);
                border-left: 6px solid #0d6efd;
                border-radius: 14px;
                box-shadow: 0 4px 14px rgba(0,0,0,0.08);
                font-family: 'Poppins', sans-serif;
             ">

            <div class="d-flex align-items-center gap-3">
                <div style="
                    width:44px;
                    height:44px;
                    border-radius:12px;
                    background:#0d6efd;
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    color:white;
                    font-size:18px;
                ">
                    <i class="bi bi-briefcase-fill"></i>
                </div>

                <div>
                    <div style="font-size:18px;font-weight:700;">
                        {{ $title }}
                    </div>
                    <div style="font-size:13px;color:#6c757d;">
                        Sistem Informasi Pembina Jasa Konstruksi
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
