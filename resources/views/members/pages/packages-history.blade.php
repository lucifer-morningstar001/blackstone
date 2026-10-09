@extends('members.layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.css') }}">
@endpush

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                        <h3 class="card-title mb-1">Package History</h3>
                        <p class="text-muted mb-0">Review package purchases and their current status.</p>
                    </div>
                    <a href="{{ route('packages') }}" class="btn btn-primary mt-2 mt-md-0">
                        <i class="fa fa-cubes mr-1" aria-hidden="true"></i>
                        Browse Packages
                    </a>
                </div>

                <div class="card-body">
                  

                    <div class="row align-items-end mb-3">
                        <div class="col-md-4">
                            <label for="history-status">Filter by status</label>
                            <select id="history-status" class="form-control">
                                <option value="">All statuses</option>
                                <option value="Completed">Completed</option>
                                <option value="Pending">Pending</option>
                                <option value="Failed">Failed</option>
                                <option value="Cancelled">Cancelled</option>
                            </select>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="package-history-table" class="table table-hover table-vcenter table-bordered mb-0 w-100">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Package</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">RP/BP</th>
                                    <th scope="col">Payment Method</th>
                                    <th scope="col">Reference</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Purchase Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font-weight-semibold">Level5VTCT</td>
                                    <td>$6,000.00</td>
                                    <td>3,500 RP/BP</td>
                                    <td>E-PIN</td>
                                    <td>PKG-2026-001</td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td data-order="2026-10-02">Oct 2, 2026</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">Level7VTCT</td>
                                    <td>$7,000.00</td>
                                    <td>3,500 RP/BP</td>
                                    <td>Bank Transfer</td>
                                    <td>PKG-2026-002</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td data-order="2026-10-04">Oct 4, 2026</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">E2TFranchise</td>
                                    <td>$25,000.00</td>
                                    <td>20,000 RP/BP</td>
                                    <td>E-PIN</td>
                                    <td>PKG-2026-003</td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td data-order="2026-09-28">Sep 28, 2026</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">E2TSubFranchise</td>
                                    <td>$5,000.00</td>
                                    <td>4,000 RP/BP</td>
                                    <td>Card</td>
                                    <td>PKG-2026-004</td>
                                    <td><span class="badge badge-danger">Failed</span></td>
                                    <td data-order="2026-09-25">Sep 25, 2026</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">Level5VTCT</td>
                                    <td>$6,000.00</td>
                                    <td>3,500 RP/BP</td>
                                    <td>Bank Transfer</td>
                                    <td>PKG-2026-005</td>
                                    <td><span class="badge badge-secondary">Cancelled</span></td>
                                    <td data-order="2026-09-19">Sep 19, 2026</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">Level7VTCT</td>
                                    <td>$7,000.00</td>
                                    <td>3,500 RP/BP</td>
                                    <td>E-PIN</td>
                                    <td>PKG-2026-006</td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td data-order="2026-09-12">Sep 12, 2026</td>
                                </tr>
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
            const historyTable = $('#package-history-table').DataTable({
                pageLength: 5,
                lengthMenu: [5, 10, 25, 50],
                order: [[6, 'desc']],
                language: {
                    zeroRecords: 'No package history matches your search.'
                }
            });

            $('#history-status').on('change', function () {
                const status = $.fn.dataTable.util.escapeRegex(this.value);
                historyTable.column(5).search(status ? '^' + status + '$' : '', true, false).draw();
            });
        });
    </script>
@endpush
