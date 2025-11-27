<div class="pagination-container" style="margin-top: 50px; display: flex; flex-direction: column; align-items: center; color:black; ">
    <div class="pagination-info mb-2" style="margin-bottom: 10px; color:black;">
        Data Ke {{ $data->firstItem() }} Sampai {{ $data->lastItem() }} Dari {{ $data->total() }} Jumlah Data
    </div>

    <ul class="pagination" style="display: flex; padding-left: 0; list-style: none; color: black;">

        {{-- PREVIOUS --}}
        <li class="page-item {{ $data->onFirstPage() ? 'disabled' : '' }}" style="margin-right: 5px;">
            <a class="page-link" href="{{ $data->previousPageUrl() }}"
               style="position: relative; display: block; padding: 0.5rem 0.75rem; line-height: 1.25;
               color: black; background-color: #fff; border: 1px solid #dee2e6; font-size:12px; border-radius: 20px 0 0 20px;">
               <i class="fas fa-arrow-left" style="margin-right:10px;"></i>Previous
            </a>
        </li>

        {{-- NUMBER LIST FULL --}}
        @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
            <li class="page-item {{ $page == $data->currentPage() ? 'active' : '' }}" style="margin-right: 5px;">
                <a class="page-link" href="{{ $url }}"
                   style="position: relative; display: block; padding: 0.5rem 0.75rem; line-height: 1.25;
                   color: black; background-color: #fff; border: 1px solid #dee2e6; font-size:12px;">
                   {{ $page }}
                </a>
            </li>
        @endforeach

        {{-- NEXT --}}
        <li class="page-item {{ $data->hasMorePages() ? '' : 'disabled' }}" style="margin-right: 5px;">
            <a class="page-link" href="{{ $data->nextPageUrl() }}"
               style="position: relative; display: block; padding: 0.5rem 0.75rem; line-height: 1.25;
               color: black; background-color: #fff; border: 1px solid #dee2e6; font-size:12px; border-radius: 0 20px 20px 0;">
               Next <i class="fas fa-arrow-right" style="margin-left:10px;"></i>
            </a>
        </li>

    </ul>
</div>
