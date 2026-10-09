@extends('admin.layouts.app')

@section('content')
    <div class="income-report-page mt-5">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            
            <span class="badge badge-primary px-3 py-2">Total: $0.00</span>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                <h3 class="card-title mb-2 mb-md-0">Direct Income Records</h3>
                <div class="income-report-filters">
                    <label class="sr-only" for="direct-income-search">Search direct income records</label>
                    <input id="direct-income-search" type="search" class="form-control" placeholder="Search records...">
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="direct-income-report-table" class="table table-hover table-vcenter table-bordered mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Sr. No.</th>
                                <th scope="col"> To Username</th>
                                <th scope="col">From Username</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="income-report-empty-row">
                                <td colspan="5" class="text-center text-muted py-5">No direct income records available.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="direct-income-no-results" class="text-center text-muted py-4" hidden>No records match your search.</div>
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

        #direct-income-report-table th,
        #direct-income-report-table td {
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
            var searchInput = document.getElementById('direct-income-search');
            var table = document.getElementById('direct-income-report-table');
            var emptyRow = table.querySelector('.income-report-empty-row');
            var noResults = document.getElementById('direct-income-no-results');

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
