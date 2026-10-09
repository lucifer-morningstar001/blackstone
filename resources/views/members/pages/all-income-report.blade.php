@extends('members.layouts.app')

@section('content')


   <div class="row mt-5">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header">
                    <h3 class="card-title mb-1">All Income Report</h3>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                    <table id="all-income-report" class="table table-hover table-vcenter table-bordered mb-0 w-100">

    <thead class="thead-light">
        <tr>
            <th scope="col">Sr. No.</th>
            <th scope="col">From</th>
            <th scope="col">Amount</th>
            <th scope="col">Reason</th>
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
            $('#all-income-report').DataTable();
        });
    </script>
@endpush















@endsection