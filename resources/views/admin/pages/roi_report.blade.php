@extends('admin.layouts.app')

@section('content')
    <div class="income-report-page mt-5">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h2 class="mb-1">ROI Report</h2>
                <p class="text-muted mb-0">Review return-on-investment income credited to members.</p>
            </div>
            <span class="badge badge-primary px-3 py-2">Total: $0.00</span>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                <h3 class="card-title mb-2 mb-md-0">ROI Income Records</h3>
                <div class="income-report-filters">
                    <label class="sr-only" for="roi-report-search">Search ROI records</label>
                    <input id="roi-report-search" type="search" class="form-control" placeholder="Search records...">
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="roi-report-table" class="table table-hover table-vcenter table-bordered mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Sr. No.</th>
                                <th scope="col">Username</th>
                                <th scope="col">Amount</th>
                                <th scope="col">ROI Percentage</th>
                                <th scope="col">Package</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="income-report-empty-row">
                                <td colspan="6" class="text-center text-muted py-5">No ROI income records available.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="roi-report-no-results" class="text-center text-muted py-4" hidden>No records match your search.</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .income-report-filters {
            width: 100%;
            max-width: 280px;
        }

        #roi-report-table th,
        #roi-report-table td {
            vertical-align: middle;
            white-space: nowrap;
        }

        @media (max-width: 575.98px) {
            .income-report-filters {
                max-width: none;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        (function () {
            var searchInput = document.getElementById('roi-report-search');
            var table = document.getElementById('roi-report-table');
            var emptyRow = table.querySelector('.income-report-empty-row');
            var noResults = document.getElementById('roi-report-no-results');

            searchInput.addEventListener('input', function () {
                var query = searchInput.value.trim().toLowerCase();
                var rows = Array.from(table.querySelectorAll('tbody tr:not(.income-report-empty-row)'));
                var visibleRows = 0;

                rows.forEach(function (row) {
                    row.hidden = !row.textContent.toLowerCase().includes(query);
                    visibleRows += row.hidden ? 0 : 1;
                });

                emptyRow.hidden = rows.length > 0;
                noResults.hidden = rows.length === 0 || visibleRows > 0;
            });
        })();
    </script>
@endpush
