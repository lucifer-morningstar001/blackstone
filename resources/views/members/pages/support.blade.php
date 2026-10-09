@extends('members.layouts.app')

@section('content')


   <div class="row mt-5">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header">
                    <h3 class="card-title mb-1">Support Tickets</h3>
                </div>

                <div class="card-body">
                     <div class="d-flex justify-content-end mb-3">
<a href="{{ route('create_support') }}" class="btn btn-primary">
    Send Message
</a>                    </div>
                    <div class="table-responsive">
                    <table id="support-tickets" class="table table-hover table-vcenter table-bordered mb-0 w-100">
<thead class="thead-light">
    <tr>
        <th scope="col">Actions</th>
        <th scope="col">Email</th>
        <th scope="col">Category</th>
        <th scope="col">Subject</th>
        <th scope="col">Description</th>
        <th scope="col">Status</th>
        <th scope="col">Date</th>
    </tr>
</thead>
<tbody>

    <tr>
        <td>
          <a href="{{ route('single_complaint') }}" 
   class="btn btn-sm btn-primary">
    View Chat
</a>
       
        </td>
        <td>user@example.com</td>
        <td>Technical Support</td>
        <td>Unable to Login</td>
        <td>I am unable to login to my account.</td>
        <td>
        Pending
        </td>
        <td>07-10-2026</td>
    </tr>

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
            $('#support-tickets').DataTable();
        });
    </script>
@endpush




















@endsection