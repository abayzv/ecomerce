@push('styles')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script>
        // document load datatable
        $(document).ready(function() {
            // datatable from http://localhost:8000/datatable/employees
            $('#myTable').DataTable();
        });
    </script>
@endpush

<section id="multilingual-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom d-flex justify-content-between">
                    <h4 class="card-title">{{ $title }} List</h4>
                    {{ $action }}
                </div>
                <div class="card-datatable px-2 pb-2">
                    <table id="myTable" class="dt-multilingual table">
                        {{ $slot }}
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
