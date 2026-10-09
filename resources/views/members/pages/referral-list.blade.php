@extends('members.layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.css') }}">
@endpush

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header">
                    <h3 class="card-title mb-1">Referral List</h3>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="referral-list-table" class="table table-hover table-vcenter table-bordered mb-0 w-100">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Sr. No.</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Side</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Account Type</th>
                                    <th scope="col">Package Bought</th>
                                    <th scope="col">User Email</th>
                                    <th scope="col">Rank</th>
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
@endsection

@push('scripts')
    <script src="{{ asset('assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        jQuery(function ($) {
            $('#referral-list-table').DataTable();
        });
    </script>
@endpush
