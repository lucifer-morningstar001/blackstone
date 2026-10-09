@extends('admin.layouts.app')

@section('content')
    <div class="kyc-requests-page mt-5">
        

        <div class="row">
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card kyc-summary-card h-100 mb-0">
                    <div class="card-body d-flex align-items-center">
                        <span class="kyc-summary-icon bg-warning-transparent text-warning"><i class="fe fe-clock"></i></span>
                        <div class="ml-3">
                            <p class="text-muted mb-1">Pending Review</p>
                            <h3 class="mb-0">0</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card kyc-summary-card h-100 mb-0">
                    <div class="card-body d-flex align-items-center">
                        <span class="kyc-summary-icon bg-success-transparent text-success"><i class="fe fe-check-circle"></i></span>
                        <div class="ml-3">
                            <p class="text-muted mb-1">Approved</p>
                            <h3 class="mb-0">0</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card kyc-summary-card h-100 mb-0">
                    <div class="card-body d-flex align-items-center">
                        <span class="kyc-summary-icon bg-danger-transparent text-danger"><i class="fe fe-x-circle"></i></span>
                        <div class="ml-3">
                            <p class="text-muted mb-1">Rejected</p>
                            <h3 class="mb-0">0</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                <h3 class="card-title mb-2 mb-md-0">Verification Requests</h3>
                <div class="d-flex flex-wrap kyc-table-filters">
                    <div class="mr-2 mb-2 mb-md-0">
                        <label class="sr-only" for="kyc-status-filter">Filter by status</label>
                        <select id="kyc-status-filter" class="form-control">
                            <option value="">All statuses</option>
                            <option value="pending">Pending</option>
                            <option value="approved">Approved</option>
                            <option value="rejected">Rejected</option>
                        </select>
                    </div>
                    <div>
                        <label class="sr-only" for="kyc-search">Search KYC requests</label>
                        <input id="kyc-search" type="search" class="form-control" placeholder="Search requests...">
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="kyc-requests-table" class="table table-hover table-vcenter table-bordered mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Sr No</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Document Type</th>
                                <th scope="col">Submitted Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="kyc-empty-row">
                                <td colspan="7" class="text-center py-5">
                                    <span class="fe fe-file-text kyc-empty-icon text-muted" aria-hidden="true"></span>
                                    <h5 class="mt-3 mb-1">No KYC requests yet</h5>
                                    <p class="text-muted mb-0">Submitted verification requests will appear here for review.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="kyc-no-search-results" class="text-center text-muted py-4" hidden>No requests match your search or status filter.</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .kyc-summary-card {
            border: 0;
            box-shadow: 0 3px 16px rgba(0, 0, 0, .05);
        }

        .kyc-summary-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            font-size: 20px;
        }

        .kyc-table-filters {
            width: 100%;
        }

        .kyc-table-filters > div {
            flex: 1 1 180px;
        }

        .kyc-table-filters .form-control {
            width: 100%;
        }

        #kyc-requests-table th,
        #kyc-requests-table td {
            vertical-align: middle;
            white-space: nowrap;
        }

        #kyc-requests-table .kyc-empty-row td {
            white-space: normal;
        }

        .kyc-empty-icon {
            font-size: 36px;
        }

        @media (min-width: 768px) {
            .kyc-table-filters {
                width: auto;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        (function () {
            var searchInput = document.getElementById('kyc-search');
            var statusFilter = document.getElementById('kyc-status-filter');
            var table = document.getElementById('kyc-requests-table');
            var emptyRow = table.querySelector('.kyc-empty-row');
            var noResults = document.getElementById('kyc-no-search-results');

            function filterRequests() {
                var query = searchInput.value.trim().toLowerCase();
                var status = statusFilter.value;
                var rows = Array.from(table.querySelectorAll('tbody tr:not(.kyc-empty-row)'));
                var visibleRows = 0;

                rows.forEach(function (row) {
                    var matchesQuery = row.textContent.toLowerCase().includes(query);
                    var matchesStatus = !status || row.dataset.status === status;

                    row.hidden = !matchesQuery || !matchesStatus;
                    visibleRows += row.hidden ? 0 : 1;
                });

                emptyRow.hidden = rows.length > 0;
                noResults.hidden = rows.length === 0 || visibleRows > 0;
            }

            searchInput.addEventListener('input', filterRequests);
            statusFilter.addEventListener('change', filterRequests);
        })();
    </script>
@endpush