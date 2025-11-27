<div class="pagination-container" style="margin-top: 50px; display: flex; flex-direction: column; align-items: center; color:black;">
    <div class="pagination-info mb-2" style="margin-bottom: 10px; color:black;">
        Data Ke {{ $data->firstItem() }} Sampai {{ $data->lastItem() }} Dari {{ $data->total() }} Jumlah Data
    </div>

    <ul class="pagination" style="display: flex; padding-left: 0; list-style: none; color: black;">

        {{-- PREVIOUS --}}
        <li class="page-item {{ $data->onFirstPage() ? 'disabled' : '' }}" style="margin-right: 5px;">
            <a class="page-link" href="{{ $data->previousPageUrl() }}"
               style="padding: 0.5rem 0.75rem; color: black; background-color: #fff; border: 1px solid #dee2e6; border-radius: 5px;">
               <i class="fas fa-arrow-left"></i> Previous
            </a>
        </li>

        {{-- RANGE HALAMAN (maks 5 tombol) --}}
        @php
            $start = max(1, $data->currentPage() - 2);
            $end = min($data->lastPage(), $data->currentPage() + 2);
        @endphp

        @for ($page = $start; $page <= $end; $page++)
            <li class="page-item {{ $page == $data->currentPage() ? 'active' : '' }}" style="margin-right: 5px;">
                <a class="page-link" href="{{ $data->url($page) }}"
                   style="padding: 0.5rem 0.75rem; color: black; background-color: #fff; border: 1px solid #dee2e6; border-radius: 5px;">
                   {{ $page }}
                </a>
            </li>
        @endfor

        {{-- NEXT --}}
        <li class="page-item {{ $data->hasMorePages() ? '' : 'disabled' }}">
            <a class="page-link" href="{{ $data->nextPageUrl() }}"
               style="padding: 0.5rem 0.75rem; color: black; background-color: #fff; border: 1px solid #dee2e6; border-radius: 5px;">
               Next <i class="fas fa-arrow-right"></i>
            </a>
        </li>

    </ul>
</div>
