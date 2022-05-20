@if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <div class="alert-body">
            {{ session('message') }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
