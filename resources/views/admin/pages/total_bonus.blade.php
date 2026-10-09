@extends('admin.layouts.app')

@section('content')






 <div class="row mt-5">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header">
                    <h3 class="card-title mb-1">Total Bonus</h3>
                </div>

                <div class="card-body">
                    <div class="d-flex justify-content-end mb-3">
                        <button type="button" class="btn btn-primary">Total : 0</button>
                    </div>
                    <div class="table-responsive">
                    <table id="roi-income" class="table table-hover table-vcenter table-bordered mb-0 w-100">

<thead class="thead-light">
    <tr>
        <th scope="col">Sr No.</th>
        <th scope="col">Username</th>
        <th scope="col">Total Earn</th>
        <th scope="col">Ewallet</th>
        <th scope="col">Epins</th>
        <th scope="col">Withdraw</th>
    </tr>
</thead>

<tbody>
    
</tbody>

</table>
                    </div>
                </div>
            </div>
        </div>
    </div>



@push('scripts')
    <script src="{{ asset('assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        jQuery(function ($) {
            $('#roi-income').DataTable();
        });
    </script>
@endpush















@endsection