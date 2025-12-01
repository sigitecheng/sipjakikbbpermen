<div class="pagination-container" style="margin-top: 50px; display: flex; flex-direction: column; align-items: center; color:black;">
    <!-- Info Data -->
    <div class="pagination-info mb-2" style="margin-bottom: 10px; color:black;">
        Data Ke {{ $subdata->firstItem() }} Sampai {{ $subdata->lastItem() }} Dari {{ $subdata->total() }} Jumlah Data
    </div>

    <!-- Pagination Buttons -->
    <ul class="pagination" style="display: flex; padding-left: 0; list-style: none; color: black;">

        {{-- PREVIOUS --}}
        <li class="page-item {{ $subdata->onFirstPage() ? 'disabled' : '' }}" style="margin-right: 5px;">
            <a class="page-link" href="{{ $subdata->previousPageUrl() }}"
               style="padding: 0.5rem 0.75rem; color: black; background-color: #fff; border: 1px solid #dee2e6; border-radius: 5px;">
               <i class="bi bi-arrow-left" style="margin-right: 5px;"></i> Previous
            </a>
        </li>

        {{-- RANGE HALAMAN (maks 5 tombol) --}}
        @php
            $start = max(1, $subdata->currentPage() - 2);
            $end = min($subdata->lastPage(), $subdata->currentPage() + 2);
        @endphp

        @for ($page = $start; $page <= $end; $page++)
            <li class="page-item {{ $page == $subdata->currentPage() ? 'active' : '' }}" style="margin-right: 5px;">
                <a class="page-link" href="{{ $subdata->url($page) }}"
                   style="padding: 0.5rem 0.75rem; color: black; background-color: #fff; border: 1px solid #dee2e6; border-radius: 5px;">
                   {{ $page }}
                </a>
            </li>
        @endfor

        {{-- NEXT --}}
        <li class="page-item {{ $subdata->hasMorePages() ? '' : 'disabled' }}">
            <a class="page-link" href="{{ $subdata->nextPageUrl() }}"
               style="padding: 0.5rem 0.75rem; color: black; background-color: #fff; border: 1px solid #dee2e6; border-radius: 5px;">
               Next <i class="bi bi-arrow-right" style="margin-left: 5px;"></i>
            </a>
        </li>

    </ul>
</div>
