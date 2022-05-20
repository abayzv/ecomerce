@push('scripts')
    <script>
        window.addEventListener('closeModal', event => {
            $('#modalForm').modal('hide');
        })
        window.addEventListener('openModal', event => {
            $('#modalForm').modal('show');
        })
    </script>
@endpush
<div>
    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalForm">
        {{ $title }}
    </button>
    <div class="modal fade text-start" id="modalForm" tabindex="-1" aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17">{{ $title }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ $slot }}
                </div>
                <div class="modal-footer">
                    {{ $action }}
                </div>
            </div>
        </div>
    </div>
</div>
