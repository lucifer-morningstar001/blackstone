@extends('admin.layouts.app')

@section('content')










 <div class="row mt-5">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header">
                    <h3 class="card-title mb-1">Type Resolved</h3>
                </div>

                <div class="card-body">
                   
                    <div class="table-responsive">
                    <table id="roi-income" class="table table-hover table-vcenter table-bordered mb-0 w-100">
<thead class="thead-light">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Review</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Category</th>
        <th scope="col">Subject</th>
        <th scope="col">Description</th>
        <th scope="col">Status</th>
        <th scope="col">Date</th>
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